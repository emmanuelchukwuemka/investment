@extends('admin.layout')
@section('title', 'Messages')

@section('content')
<div class="card">
    <div class="card-head">
        <h5>Contact Messages</h5>
        <span style="font-size:13px;color:#aaa;">{{ $messages->total() }} total</span>
    </div>
    <div class="tbl-scroll">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Message</th>
                    <th>Received</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($messages as $msg)
                <tr style="{{ !$msg->read ? 'background:#fffdf0;' : '' }}">
                    <td>
                        <div class="td-name" style="{{ !$msg->read ? 'color:#d97706;' : '' }}">
                            {{ $msg->name }}
                            @if(!$msg->read)
                                <span class="badge b-pending" style="margin-left:6px;font-size:10px;">New</span>
                            @endif
                        </div>
                    </td>
                    <td style="font-size:13px;">{{ $msg->email }}</td>
                    <td style="font-size:13px;color:#666;">{{ $msg->phone ?? '—' }}</td>
                    <td style="max-width:340px;">
                        <div style="font-size:13px;color:#444;line-height:1.5;white-space:pre-wrap;">{{ Str::limit($msg->message, 120) }}</div>
                        @if(strlen($msg->message) > 120)
                            <details style="margin-top:4px;">
                                <summary style="font-size:12px;color:#2563eb;cursor:pointer;">Read full message</summary>
                                <div style="margin-top:8px;font-size:13px;color:#444;line-height:1.6;white-space:pre-wrap;padding:10px;background:#f8f9fc;border-radius:6px;">{{ $msg->message }}</div>
                            </details>
                        @endif
                    </td>
                    <td style="font-size:12px;color:#aaa;white-space:nowrap;">{{ $msg->created_at->format('M d, Y H:i') }}</td>
                    <td>
                        <form action="{{ route('admin.messages.delete', $msg) }}" method="POST"
                            onsubmit="return confirm('Delete this message?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-red btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align:center;color:#bbb;padding:48px;">
                        No messages yet.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="pagination">{{ $messages->links() }}</div>
</div>
@endsection
