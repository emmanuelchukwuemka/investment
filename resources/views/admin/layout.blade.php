<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin — @yield('title', 'Panel')</title>
    <link rel="stylesheet" href="{{ asset('lassets/css/bootstrap.css') }}">
    <style>
        body { background:#f4f6f9; font-family: Arial, sans-serif; }
        .sidebar { width:220px; min-height:100vh; background:#072b5b; position:fixed; top:0; left:0; padding-top:20px; z-index:100; }
        .sidebar .brand { color:#fff; font-size:18px; font-weight:700; padding:0 20px 20px; border-bottom:1px solid rgba(255,255,255,.15); }
        .sidebar a { display:block; color:rgba(255,255,255,.8); padding:12px 20px; text-decoration:none; font-size:14px; }
        .sidebar a:hover, .sidebar a.active { background:rgba(255,255,255,.12); color:#fff; }
        .sidebar a i { margin-right:8px; }
        .main { margin-left:220px; padding:30px; }
        .topbar { display:flex; justify-content:space-between; align-items:center; margin-bottom:30px; }
        .topbar h4 { margin:0; font-weight:700; color:#072b5b; }
        .stat-card { background:#fff; border-radius:12px; padding:24px; box-shadow:0 2px 8px rgba(0,0,0,.06); }
        .stat-card .value { font-size:28px; font-weight:700; color:#072b5b; }
        .stat-card .label { font-size:13px; color:#888; margin-top:4px; }
        .stat-card .icon { font-size:32px; color:#1a73e8; float:right; margin-top:-4px; }
        .card { background:#fff; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,.06); margin-bottom:24px; }
        .card-header { padding:16px 20px; border-bottom:1px solid #f0f0f0; font-weight:600; font-size:15px; color:#072b5b; display:flex; justify-content:space-between; align-items:center; }
        .card-body { padding:20px; }
        table { width:100%; border-collapse:collapse; font-size:13px; }
        th { background:#072b5b; color:#fff; padding:10px 14px; text-align:left; }
        td { padding:10px 14px; border-bottom:1px solid #f0f0f0; }
        tr:hover td { background:#fafafa; }
        .badge-pending  { background:#fff3cd; color:#856404; padding:3px 10px; border-radius:20px; font-size:11px; }
        .badge-approved { background:#d4edda; color:#155724; padding:3px 10px; border-radius:20px; font-size:11px; }
        .badge-rejected { background:#f8d7da; color:#721c24; padding:3px 10px; border-radius:20px; font-size:11px; }
        .badge-active    { background:#cce5ff; color:#004085; padding:3px 10px; border-radius:20px; font-size:11px; }
        .badge-completed { background:#d4edda; color:#155724; padding:3px 10px; border-radius:20px; font-size:11px; }
        .btn-sm { padding:5px 12px; font-size:12px; border-radius:6px; border:none; cursor:pointer; }
        .btn-approve { background:#28a745; color:#fff; }
        .btn-reject  { background:#dc3545; color:#fff; }
        .btn-complete{ background:#1a73e8; color:#fff; }
        .btn-edit    { background:#6c757d; color:#fff; }
        .alert { padding:12px 16px; border-radius:8px; margin-bottom:20px; }
        .alert-success { background:#d4edda; color:#155724; }
        .alert-error   { background:#f8d7da; color:#721c24; }
        .filter-bar { display:flex; gap:10px; flex-wrap:wrap; margin-bottom:16px; }
        .filter-bar select, .filter-bar input { padding:7px 12px; border:1px solid #ddd; border-radius:6px; font-size:13px; }
        .filter-bar button { padding:7px 16px; background:#072b5b; color:#fff; border:none; border-radius:6px; cursor:pointer; font-size:13px; }
        .form-row { display:flex; gap:16px; flex-wrap:wrap; margin-bottom:16px; }
        .form-row label { display:block; font-size:12px; color:#666; margin-bottom:4px; }
        .form-row input, .form-row select { padding:8px 12px; border:1px solid #ddd; border-radius:6px; font-size:13px; width:100%; }
        .form-group { flex:1; min-width:150px; }
    </style>
</head>
<body>
<div class="sidebar">
    <div class="brand">&#9670; Admin Panel</div>
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">&#9632; Dashboard</a>
    <a href="{{ route('admin.transactions') }}" class="{{ request()->routeIs('admin.transactions') ? 'active' : '' }}">&#9632; Transactions</a>
    <a href="{{ route('admin.investments') }}" class="{{ request()->routeIs('admin.investments*') ? 'active' : '' }}">&#9632; Investments</a>
    <a href="{{ route('admin.users') }}" class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}">&#9632; Users</a>
    <a href="{{ route('home') }}" style="margin-top:20px;border-top:1px solid rgba(255,255,255,.15);padding-top:20px;">&#9632; View Site</a>
    <form action="{{ route('logout') }}" method="POST" style="padding:0 20px;margin-top:8px;">
        @csrf
        <button type="submit" style="background:none;border:none;color:rgba(255,255,255,.7);cursor:pointer;font-size:14px;padding:0;">&#9632; Logout</button>
    </form>
</div>

<div class="main">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
    @endif

    @yield('content')
</div>
</body>
</html>
