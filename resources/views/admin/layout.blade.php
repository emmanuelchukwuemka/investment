<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') — Zenith Edge Admin</title>
    <style>
        *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
        body{font-family:'Segoe UI',Arial,sans-serif;background:#f0f2f5;color:#1a1a2e;min-height:100vh;display:flex}

        /* Sidebar */
        .sidebar{width:250px;min-height:100vh;background:linear-gradient(180deg,#0b2060 0%,#072b5b 60%,#051d40 100%);
            position:fixed;top:0;left:0;bottom:0;display:flex;flex-direction:column;z-index:200;
            box-shadow:4px 0 20px rgba(0,0,0,.18);transition:transform .3s;overflow-y:auto}
        .sb-brand{padding:26px 22px 18px;border-bottom:1px solid rgba(255,255,255,.1);flex-shrink:0}
        .sb-brand .logo-text{font-size:16px;font-weight:800;color:#fff;line-height:1.3}
        .sb-brand .logo-text span{color:#f0c040}
        .sb-brand .sub{font-size:10px;color:rgba(255,255,255,.4);margin-top:3px;text-transform:uppercase;letter-spacing:1px}
        .sb-menu{flex:1;padding:14px 0}
        .sb-label{font-size:10px;font-weight:700;color:rgba(255,255,255,.35);letter-spacing:1.5px;
            padding:14px 22px 6px;text-transform:uppercase}
        .sb-link{display:flex;align-items:center;gap:10px;padding:11px 22px;color:rgba(255,255,255,.72);
            text-decoration:none;font-size:13.5px;font-weight:500;transition:all .2s;border-left:3px solid transparent}
        .sb-link:hover{background:rgba(255,255,255,.08);color:#fff;border-left-color:rgba(255,255,255,.3)}
        .sb-link.active{background:rgba(255,255,255,.13);color:#fff;border-left-color:#f0c040;font-weight:600}
        .sb-footer{padding:16px 22px;border-top:1px solid rgba(255,255,255,.1);flex-shrink:0}
        .sb-admin-info{display:flex;align-items:center;gap:10px;margin-bottom:14px}
        .sb-avatar{width:36px;height:36px;border-radius:50%;background:#f0c040;
            display:flex;align-items:center;justify-content:center;font-weight:800;font-size:14px;color:#072b5b;flex-shrink:0}
        .sb-admin-name{font-size:13px;color:#fff;font-weight:600}
        .sb-admin-role{font-size:11px;color:rgba(255,255,255,.45)}
        .sb-logout-btn{width:100%;background:rgba(220,53,69,.15);border:1px solid rgba(220,53,69,.35);
            color:#ff8a8a;padding:9px 14px;border-radius:8px;cursor:pointer;font-size:13px;font-weight:600;
            text-align:center;transition:.2s;letter-spacing:.3px}
        .sb-logout-btn:hover{background:rgba(220,53,69,.3);border-color:rgba(220,53,69,.6);color:#fff}

        /* Main */
        .main-wrap{margin-left:250px;flex:1;display:flex;flex-direction:column;min-height:100vh}

        /* Topbar */
        .topbar{background:#fff;padding:0 30px;height:62px;display:flex;align-items:center;
            justify-content:space-between;box-shadow:0 2px 8px rgba(0,0,0,.06);position:sticky;top:0;z-index:100}
        .topbar-title{font-size:18px;font-weight:700;color:#072b5b}
        .topbar-sub{font-size:11px;color:#aaa;margin-top:1px}
        .topbar-right{display:flex;align-items:center;gap:14px}
        .topbar-badge{background:#072b5b;color:#fff;font-size:11px;font-weight:700;
            padding:4px 12px;border-radius:20px;letter-spacing:.5px}

        /* Content */
        .content{padding:28px 30px;flex:1}

        /* Stat Cards */
        .stats-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(190px,1fr));gap:18px;margin-bottom:28px}
        .stat-card{background:#fff;border-radius:12px;padding:20px 22px;
            box-shadow:0 2px 10px rgba(0,0,0,.06);display:flex;align-items:center;gap:16px;
            border-left:4px solid #072b5b;transition:.2s}
        .stat-card:hover{transform:translateY(-2px);box-shadow:0 6px 18px rgba(0,0,0,.1)}
        .stat-card.green{border-left-color:#28a745}
        .stat-card.red{border-left-color:#dc3545}
        .stat-card.yellow{border-left-color:#f0c040}
        .stat-card.blue{border-left-color:#1a73e8}
        .stat-icon{width:48px;height:48px;border-radius:10px;display:flex;align-items:center;
            justify-content:center;font-size:13px;font-weight:700;flex-shrink:0;color:#fff}
        .stat-icon.navy{background:#072b5b}
        .stat-icon.green{background:#28a745}
        .stat-icon.red{background:#dc3545}
        .stat-icon.yellow{background:#e6a800}
        .stat-icon.blue{background:#1a73e8}
        .stat-value{font-size:24px;font-weight:800;color:#072b5b;line-height:1}
        .stat-label{font-size:12px;color:#888;margin-top:5px;font-weight:500}

        /* Cards */
        .card{background:#fff;border-radius:12px;box-shadow:0 2px 10px rgba(0,0,0,.06);margin-bottom:24px;overflow:hidden}
        .card-header{padding:16px 22px;border-bottom:1px solid #f0f0f0;display:flex;
            justify-content:space-between;align-items:center}
        .card-header h5{font-size:15px;font-weight:700;color:#072b5b;margin:0}
        .card-body{padding:22px}

        /* Table */
        .tbl-wrap{overflow-x:auto}
        table{width:100%;border-collapse:collapse;font-size:13px}
        thead th{background:#f8f9fc;color:#555;font-weight:600;padding:11px 15px;
            text-align:left;border-bottom:2px solid #eee;white-space:nowrap}
        tbody td{padding:12px 15px;border-bottom:1px solid #f5f5f5;vertical-align:middle}
        tbody tr:last-child td{border-bottom:none}
        tbody tr:hover td{background:#fafbff}

        /* Badges */
        .badge{padding:3px 11px;border-radius:20px;font-size:11px;font-weight:600;white-space:nowrap}
        .badge-pending  {background:#fff3cd;color:#856404}
        .badge-approved {background:#d4edda;color:#155724}
        .badge-rejected {background:#f8d7da;color:#721c24}
        .badge-active   {background:#cce5ff;color:#004085}
        .badge-completed{background:#d4edda;color:#155724}
        .badge-admin    {background:#e8edf5;color:#072b5b}
        .badge-user     {background:#f5f5f5;color:#666}
        .badge-admin_credit    {background:#d4edda;color:#155724}
        .badge-admin_deduction {background:#f8d7da;color:#721c24}
        .badge-roi             {background:#cce5ff;color:#004085}
        .badge-referral_bonus  {background:#ede7f6;color:#5a189a}

        /* Buttons */
        .btn{padding:8px 16px;border-radius:8px;border:none;cursor:pointer;font-size:13px;font-weight:600;
            text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:.2s}
        .btn-primary{background:#072b5b;color:#fff}
        .btn-primary:hover{background:#0b3a7a}
        .btn-success{background:#28a745;color:#fff}
        .btn-success:hover{background:#218838}
        .btn-danger{background:#dc3545;color:#fff}
        .btn-danger:hover{background:#c82333}
        .btn-blue{background:#1a73e8;color:#fff}
        .btn-blue:hover{background:#1557b0}
        .btn-gray{background:#6c757d;color:#fff}
        .btn-gray:hover{background:#545b62}
        .btn-sm{padding:5px 12px;font-size:12px}
        .btn-outline{background:#fff;border:1px solid #ddd;color:#555}
        .btn-outline:hover{background:#f5f5f5}

        /* Filter Bar */
        .filter-bar{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:18px;align-items:center}
        .filter-bar select,.filter-bar input{padding:8px 12px;border:1px solid #e0e0e0;border-radius:8px;
            font-size:13px;color:#333;outline:none}
        .filter-bar select:focus,.filter-bar input:focus{border-color:#072b5b}

        /* Alerts */
        .alert{padding:12px 18px;border-radius:10px;margin-bottom:18px;font-size:13px;font-weight:500;border-width:1px;border-style:solid}
        .alert-success{background:#d4edda;color:#155724;border-color:#c3e6cb}
        .alert-error{background:#f8d7da;color:#721c24;border-color:#f5c6cb}

        /* Forms */
        .form-label{display:block;font-size:12px;font-weight:600;color:#555;margin-bottom:5px;text-transform:uppercase;letter-spacing:.4px}
        .form-control{width:100%;padding:10px 14px;border:1.5px solid #e0e0e0;border-radius:8px;
            font-size:14px;outline:none;transition:.2s;background:#fff}
        .form-control:focus{border-color:#072b5b;box-shadow:0 0 0 3px rgba(7,43,91,.08)}
        .form-group{margin-bottom:18px}

        /* Hamburger */
        .hamburger{display:none;background:none;border:none;cursor:pointer;padding:8px;font-size:20px;color:#072b5b;font-weight:700}
        .overlay{display:none;position:fixed;inset:0;background:rgba(0,0,0,.5);z-index:199}

        @media(max-width:768px){
            .sidebar{transform:translateX(-100%)}
            .sidebar.open{transform:translateX(0)}
            .main-wrap{margin-left:0}
            .hamburger{display:block}
            .overlay.show{display:block}
            .content{padding:18px 14px}
            .topbar{padding:0 14px}
            .stats-grid{grid-template-columns:repeat(2,1fr)}
        }
    </style>
</head>
<body>

<div class="overlay" id="overlay" onclick="closeSidebar()"></div>

<!-- Sidebar -->
<aside class="sidebar" id="sidebar">
    <div class="sb-brand">
        <div class="logo-text">Zenith Edge <span>Investment</span></div>
        <div class="sub">Admin Panel</div>
    </div>

    <nav class="sb-menu">
        <div class="sb-label">Main</div>
        <a href="{{ route('admin.dashboard') }}" class="sb-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
        <a href="{{ route('admin.users') }}" class="sb-link {{ request()->routeIs('admin.users*') ? 'active' : '' }}">Users</a>
        <a href="{{ route('admin.transactions') }}" class="sb-link {{ request()->routeIs('admin.transactions') ? 'active' : '' }}">Transactions</a>
        <a href="{{ route('admin.investments') }}" class="sb-link {{ request()->routeIs('admin.investments*') ? 'active' : '' }}">Investments</a>
        <div class="sb-label" style="margin-top:8px;">Site</div>
        <a href="{{ route('home') }}" class="sb-link" target="_blank">View Website</a>
    </nav>

    <div class="sb-footer">
        <div class="sb-admin-info">
            <div class="sb-avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
            <div>
                <div class="sb-admin-name">{{ Auth::user()->name }}</div>
                <div class="sb-admin-role">Administrator</div>
            </div>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="sb-logout-btn">Logout</button>
        </form>
    </div>
</aside>

<!-- Main -->
<div class="main-wrap">
    <header class="topbar">
        <div style="display:flex;align-items:center;gap:12px;">
            <button class="hamburger" onclick="openSidebar()">&#9776;</button>
            <div>
                <div class="topbar-title">@yield('title', 'Dashboard')</div>
                <div class="topbar-sub">Zenith Edge Investment &rsaquo; @yield('title', 'Dashboard')</div>
            </div>
        </div>
        <div class="topbar-right">
            <span class="topbar-badge">ADMIN</span>
            <span style="font-size:12px;color:#aaa;">{{ now()->format('M d, Y') }}</span>
        </div>
    </header>

    <div class="content">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif
        @yield('content')
    </div>
</div>

<script>
function openSidebar(){
    document.getElementById('sidebar').classList.add('open');
    document.getElementById('overlay').classList.add('show');
}
function closeSidebar(){
    document.getElementById('sidebar').classList.remove('open');
    document.getElementById('overlay').classList.remove('show');
}
</script>
</body>
</html>
