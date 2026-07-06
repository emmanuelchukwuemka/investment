<?php

namespace App\Http\Controllers;

use App\Models\Referral;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rules\Password as PasswordRule;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            $destination = Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard');
            return redirect()->intended($destination);
        }

        return back()->withErrors(['email' => 'Invalid email or password.'])->withInput();
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => 'required|email|unique:users,email',
            'phone'    => 'nullable|string|max:20',
            'country'  => 'required|string|max:60',
            'gender'   => 'nullable|in:male,female',
            'password' => ['required', 'confirmed', PasswordRule::min(8)],
            'referral' => 'nullable|string|exists:users,referral_code',
            'remember' => 'accepted',
        ]);

        $referrer = null;
        if ($request->filled('referral')) {
            $referrer = User::where('referral_code', $request->referral)->first();
        }

        $user = User::create([
            'name'        => $request->name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'country'     => $request->country,
            'gender'      => $request->gender,
            'password'    => Hash::make($request->password),
            'referred_by' => $referrer?->id,
        ]);

        if ($referrer) {
            Referral::create([
                'referrer_id'       => $referrer->id,
                'referred_id'       => $user->id,
                'commission_level'  => 1,
                'commission_amount' => 0,
            ]);

            if ($referrer->referred_by) {
                Referral::create([
                    'referrer_id'       => $referrer->referred_by,
                    'referred_id'       => $user->id,
                    'commission_level'  => 2,
                    'commission_amount' => 0,
                ]);
            }
        }

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('dashboard')->with('success', 'Welcome to Zenith Edge Investment! Your account has been created.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function sendPasswordReset(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('success', 'A password reset link has been sent to your email address.');
        }

        return back()->withErrors(['email' => 'We could not find an account with that email address.']);
    }

    public function showNewPassword(Request $request, string $token)
    {
        return view('auth.password-new', [
            'token' => $token,
            'email' => $request->query('email', ''),
        ]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token'    => 'required',
            'email'    => 'required|email',
            'password' => ['required', 'confirmed', PasswordRule::min(8)],
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill(['password' => Hash::make($password)])->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('success', 'Password reset successfully. You can now log in.');
        }

        return back()->withErrors(['email' => 'This reset link is invalid or has expired.']);
    }
}
