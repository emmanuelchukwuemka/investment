<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') | Zenith Edge Admin</title>
    <style>
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        html,body{height:100%}
        body{font-family:'Segoe UI',system-ui,-apple-system,sans-serif;background:#eef0f5;color:#222;display:flex;min-height:100vh}

        /* ─── SIDEBAR ─── */
        .sidebar{
            width:240px;flex-shrink:0;background:#0d1b3e;
            display:flex;flex-direction:column;position:fixed;
            top:0;left:0;bottom:0;z-index:300;overflow-y:auto;
            transition:transform .25s ease;
        }
        .sb-head{padding:24px 20px 18px;border-bottom:1px solid rgba(255,255,255,.07)}
        .sb-logo{font-size:15px;font-weight:800;color:#fff;line-height:1.4;letter-spacing:-.3px}
        .sb-logo em{color:#f5c518;font-style:normal}
        .sb-sub{font-size:10px;color:rgba(255,255,255,.35);text-transform:uppercase;letter-spacing:1.2px;margin-top:2px}

        .sb-nav{flex:1;padding:12px 0}
        .sb-section{font-size:10px;font-weight:700;color:rgba(255,255,255,.25);
            letter-spacing:1.5px;text-transform:uppercase;padding:16px 20px 6px}
        .sb-item{display:flex;align-items:center;gap:11px;padding:10px 20px;
            color:rgba(255,255,255,.6);text-decoration:none;font-size:13.5px;font-weight:500;
            border-left:3px solid transparent;transition:.18s;cursor:pointer}
        .sb-item:hover{background:rgba(255,255,255,.06);color:#fff;border-left-color:rgba(255,255,255,.2)}
        .sb-item.active{background:rgba(245,197,24,.1);color:#f5c518;border-left-color:#f5c518;font-weight:600}
        .sb-icon{width:20px;height:20px;flex-shrink:0;opacity:.75}
        .sb-item.active .sb-icon,.sb-item:hover .sb-icon{opacity:1}

        .sb-foot{padding:14px 20px;border-top:1px solid rgba(255,255,255,.07)}
        .sb-user{display:flex;align-items:center;gap:10px;margin-bottom:12px}
        .sb-av{width:34px;height:34px;border-radius:50%;background:#f5c518;flex-shrink:0;
            display:flex;align-items:center;justify-content:center;font-weight:800;font-size:13px;color:#0d1b3e}
        .sb-uname{font-size:13px;font-weight:600;color:#fff}
        .sb-urole{font-size:11px;color:rgba(255,255,255,.4)}
        .sb-logout{display:block;width:100%;background:rgba(239,68,68,.12);border:1px solid rgba(239,68,68,.3);
            color:#f87171;padding:8px;border-radius:7px;font-size:13px;font-weight:600;
            cursor:pointer;text-align:center;transition:.18s;letter-spacing:.2px}
        .sb-logout:hover{background:rgba(239,68,68,.25);color:#fff;border-color:rgba(239,68,68,.5)}

        /* ─── MAIN ─── */
        .main{margin-left:240px;flex:1;display:flex;flex-direction:column;min-height:100vh}

        /* ─── TOPBAR ─── */
        .topbar{height:60px;background:#fff;display:flex;align-items:center;
            justify-content:space-between;padding:0 28px;
            box-shadow:0 1px 4px rgba(0,0,0,.08);position:sticky;top:0;z-index:200;flex-shrink:0}
        .tb-title{font-size:17px;font-weight:700;color:#0d1b3e}
        .tb-crumb{font-size:11px;color:#aaa;margin-top:1px}
        .tb-right{display:flex;align-items:center;gap:12px}
        .tb-pill{background:#0d1b3e;color:#f5c518;font-size:11px;font-weight:700;
            padding:4px 12px;border-radius:20px;letter-spacing:.5px}
        .tb-date{font-size:12px;color:#bbb;font-weight:500}
        .hamburger{display:none;background:none;border:none;cursor:pointer;padding:6px;
            font-size:22px;color:#0d1b3e;line-height:1}

        /* ─── CONTENT ─── */
        .page-body{padding:26px 28px;flex:1}

        /* ─── STATS ─── */
        .stats-row{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:16px;margin-bottom:26px}
        .scard{background:#fff;border-radius:12px;padding:20px;box-shadow:0 1px 6px rgba(0,0,0,.07);
            display:flex;flex-direction:column;gap:12px;border-top:3px solid #e0e0e0;transition:.2s}
        .scard:hover{box-shadow:0 4px 16px rgba(0,0,0,.11);transform:translateY(-2px)}
        .scard.c-navy{border-top-color:#0d1b3e}
        .scard.c-green{border-top-color:#16a34a}
        .scard.c-red{border-top-color:#dc2626}
        .scard.c-amber{border-top-color:#d97706}
        .scard.c-blue{border-top-color:#2563eb}
        .scard-top{display:flex;align-items:center;justify-content:space-between}
        .scard-label{font-size:12px;font-weight:600;color:#888;text-transform:uppercase;letter-spacing:.5px}
        .scard-badge{width:38px;height:38px;border-radius:9px;display:flex;align-items:center;justify-content:center}
        .scard-badge.bg-navy{background:#e8edf8}
        .scard-badge.bg-green{background:#dcfce7}
        .scard-badge.bg-red{background:#fee2e2}
        .scard-badge.bg-amber{background:#fef3c7}
        .scard-badge.bg-blue{background:#dbeafe}
        .scard-val{font-size:26px;font-weight:800;color:#0d1b3e;line-height:1}

        /* ─── CARDS ─── */
        .card{background:#fff;border-radius:12px;box-shadow:0 1px 6px rgba(0,0,0,.07);margin-bottom:22px;overflow:hidden}
        .card-head{padding:15px 22px;border-bottom:1px solid #f2f2f2;display:flex;align-items:center;justify-content:space-between}
        .card-head h5{font-size:14px;font-weight:700;color:#0d1b3e;margin:0}
        .card-body{padding:22px}

        /* ─── TABLE ─── */
        .tbl-scroll{overflow-x:auto}
        table{width:100%;border-collapse:collapse;font-size:13px}
        thead th{background:#f8f9fc;color:#666;font-weight:600;font-size:11.5px;text-transform:uppercase;letter-spacing:.4px;
            padding:11px 14px;text-align:left;border-bottom:2px solid #eee;white-space:nowrap}
        tbody td{padding:13px 14px;border-bottom:1px solid #f4f4f4;vertical-align:middle;color:#333}
        tbody tr:last-child td{border-bottom:none}
        tbody tr:hover td{background:#fafbff}
        .td-name{font-weight:600;font-size:13px;color:#0d1b3e}
        .td-sub{font-size:11px;color:#aaa;margin-top:2px}
        .td-mono{font-family:monospace;font-size:11px;color:#888}
        .td-amt{font-weight:700;color:#0d1b3e;font-size:14px}

        /* ─── BADGES ─── */
        .badge{display:inline-block;padding:3px 10px;border-radius:20px;font-size:11px;font-weight:600;white-space:nowrap}
        .b-pending  {background:#fef9c3;color:#92400e}
        .b-approved {background:#dcfce7;color:#166534}
        .b-rejected {background:#fee2e2;color:#991b1b}
        .b-active   {background:#dbeafe;color:#1e40af}
        .b-completed{background:#dcfce7;color:#166534}
        .b-admin    {background:#ede9fe;color:#5b21b6}
        .b-user     {background:#f3f4f6;color:#374151}
        .b-credit   {background:#dcfce7;color:#166534}
        .b-deduct   {background:#fee2e2;color:#991b1b}

        /* ─── BUTTONS ─── */
        .btn{display:inline-flex;align-items:center;gap:6px;padding:8px 16px;border-radius:8px;
            border:none;cursor:pointer;font-size:13px;font-weight:600;text-decoration:none;transition:.18s;white-space:nowrap}
        .btn-navy{background:#0d1b3e;color:#fff}
        .btn-navy:hover{background:#162a5c}
        .btn-green{background:#16a34a;color:#fff}
        .btn-green:hover{background:#15803d}
        .btn-red{background:#dc2626;color:#fff}
        .btn-red:hover{background:#b91c1c}
        .btn-blue{background:#2563eb;color:#fff}
        .btn-blue:hover{background:#1d4ed8}
        .btn-gray{background:#6b7280;color:#fff}
        .btn-gray:hover{background:#4b5563}
        .btn-ghost{background:#fff;border:1.5px solid #e0e0e0;color:#555}
        .btn-ghost:hover{background:#f5f5f5}
        .btn-sm{padding:5px 12px;font-size:12px;border-radius:7px}

        /* ─── FILTER BAR ─── */
        .fbar{display:flex;gap:10px;flex-wrap:wrap;align-items:center;margin-bottom:18px}
        .fbar select,.fbar input[type=text]{padding:8px 12px;border:1.5px solid #e5e7eb;border-radius:8px;
            font-size:13px;color:#333;outline:none;background:#fff;transition:.15s}
        .fbar select:focus,.fbar input:focus{border-color:#0d1b3e}

        /* ─── ALERTS ─── */
        .alert{padding:13px 18px;border-radius:9px;margin-bottom:18px;font-size:13px;font-weight:500;
            border-left:4px solid transparent}
        .alert-ok{background:#f0fdf4;border-left-color:#16a34a;color:#166534}
        .alert-err{background:#fef2f2;border-left-color:#dc2626;color:#991b1b}

        /* ─── FORMS ─── */
        .flabel{display:block;font-size:11.5px;font-weight:700;color:#555;margin-bottom:5px;text-transform:uppercase;letter-spacing:.4px}
        .finput{width:100%;padding:10px 14px;border:1.5px solid #e5e7eb;border-radius:8px;
            font-size:14px;color:#222;outline:none;transition:.15s;background:#fff}
        .finput:focus{border-color:#0d1b3e;box-shadow:0 0 0 3px rgba(13,27,62,.07)}
        .fgroup{margin-bottom:16px}

        /* ─── AVATAR ─── */
        .uav{width:32px;height:32px;border-radius:50%;background:#e8edf8;flex-shrink:0;
            display:flex;align-items:center;justify-content:center;font-weight:700;font-size:12px;color:#0d1b3e}

        /* ─── PAGINATION ─── */
        .pagination{display:flex;gap:5px;flex-wrap:wrap;padding:14px 22px;border-top:1px solid #f2f2f2}
        .pagination a,.pagination span{padding:5px 11px;border-radius:6px;font-size:12px;
            text-decoration:none;border:1px solid #e5e7eb;color:#555}
        .pagination .active span,.pagination span[aria-current]{background:#0d1b3e;color:#fff;border-color:#0d1b3e}

        /* ─── OVERLAY (mobile) ─── */
        .overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,.45);z-index:299}

        @media(max-width:800px){
            .sidebar{transform:translateX(-100%)}
            .sidebar.open{transform:translateX(0)}
            .main{margin-left:0}
            .hamburger{display:block}
            .overlay.show{display:block}
            .page-body{padding:16px}
            .topbar{padding:0 14px}
            .stats-row{grid-template-columns:repeat(2,1fr)}
        }
    </style>
</head>
<body>
<div class="overlay" id="ov" onclick="sbClose()"></div>

<!-- SIDEBAR -->
<aside class="sidebar" id="sb">
    <div class="sb-head">
        <div class="sb-logo">Zenith Edge <em>Investment</em></div>
        <div class="sb-sub">Admin Control Panel</div>
    </div>

    <nav class="sb-nav">
        <div class="sb-section">Overview</div>

        <a href="{{ route('admin.dashboard') }}" class="sb-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <svg class="sb-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/>
                <rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>
            </svg>
            Dashboard
        </a>

        <div class="sb-section" style="margin-top:4px;">Manage</div>

        <a href="{{ route('admin.users') }}" class="sb-item {{ request()->routeIs('admin.users*') ? 'active' : '' }}">
            <svg class="sb-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                <circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
            </svg>
            Users
        </a>

        <a href="{{ route('admin.transactions') }}" class="sb-item {{ request()->routeIs('admin.transactions') ? 'active' : '' }}">
            <svg class="sb-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path d="M12 22V12m0 0l-4 4m4-4l4 4M12 2v10M8 6l4-4 4 4"/>
            </svg>
            Transactions
        </a>

        <a href="{{ route('admin.investments') }}" class="sb-item {{ request()->routeIs('admin.investments*') ? 'active' : '' }}">
            <svg class="sb-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
                <polyline points="16 7 22 7 22 13"/>
            </svg>
            Investments
        </a>

        <a href="{{ route('admin.messages') }}" class="sb-item {{ request()->routeIs('admin.messages*') ? 'active' : '' }}">
            <svg class="sb-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/>
            </svg>
            Messages
            @php $unread = \App\Models\ContactMessage::where('read',false)->count(); @endphp
            @if($unread > 0)
                <span style="margin-left:auto;background:#dc2626;color:#fff;font-size:10px;font-weight:700;
                    padding:1px 7px;border-radius:20px;line-height:1.6;">{{ $unread }}</span>
            @endif
        </a>

        <div class="sb-section" style="margin-top:4px;">Site</div>
        <a href="{{ route('home') }}" class="sb-item" target="_blank">
            <svg class="sb-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
            View Website
        </a>
    </nav>

    <div class="sb-foot">
        <div class="sb-user">
            <div class="sb-av">{{ strtoupper(substr(Auth::user()->name,0,1)) }}</div>
            <div>
                <div class="sb-uname">{{ Auth::user()->name }}</div>
                <div class="sb-urole">Administrator</div>
            </div>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="sb-logout">Logout</button>
        </form>
    </div>
</aside>

<!-- MAIN -->
<div class="main">
    <header class="topbar">
        <div style="display:flex;align-items:center;gap:12px">
            <button class="hamburger" onclick="sbOpen()">&#9776;</button>
            <div>
                <div class="tb-title">@yield('title','Dashboard')</div>
                <div class="tb-crumb">Admin &rsaquo; @yield('title','Dashboard')</div>
            </div>
        </div>
        <div class="tb-right">
            <span class="tb-pill">ADMIN</span>
            <span class="tb-date">{{ now()->format('M d, Y') }}</span>
        </div>
    </header>

    <div class="page-body">
        @if(session('success'))
            <div class="alert alert-ok">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-err">{{ session('error') }}</div>
        @endif
        @yield('content')
    </div>
</div>

<script>
function sbOpen(){document.getElementById('sb').classList.add('open');document.getElementById('ov').classList.add('show')}
function sbClose(){document.getElementById('sb').classList.remove('open');document.getElementById('ov').classList.remove('show')}
</script>
</body>
</html>
