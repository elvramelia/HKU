<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKU Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; background: #f1f5f9; }
        .sidebar { width: 260px; height: 100vh; position: fixed; background: #0a1628; color: #94a3b8; padding-top: 20px; transition: all 0.3s; z-index: 1000; }
        .sidebar-brand { font-size: 1.4rem; font-weight: 800; color: #fff; padding: 0 24px 30px; display: flex; align-items: center; gap: 10px; }
        .sidebar-brand span { color: #ef4444; }
        .sidebar-menu { list-style: none; padding: 0; margin: 0; }
        .sidebar-menu li a { display: flex; align-items: center; gap: 12px; padding: 14px 24px; color: #94a3b8; text-decoration: none; font-size: 0.9rem; font-weight: 500; transition: 0.3s; border-left: 3px solid transparent; }
        .sidebar-menu li a:hover, .sidebar-menu li a.active { background: rgba(255,255,255,0.05); color: #fff; border-left-color: #ef4444; }
        .sidebar-menu li a i { font-size: 1.2rem; width: 24px; text-align: center; }
        .main-content { margin-left: 260px; padding: 20px 30px; }
        .top-bar { background: #fff; padding: 16px 30px; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); margin-bottom: 24px; display: flex; justify-content: space-between; align-items: center; }
        .stat-card { background: #fff; border-radius: 12px; padding: 24px; border: 1px solid #e2e8f0; box-shadow: 0 2px 10px rgba(0,0,0,0.03); }
        .stat-card .icon-box { width: 48px; height: 48px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-brand">
            <i class="bi bi-boiler" style="color:#ef4444"></i> HK<span>U</span> Admin
        </div>
        <ul class="sidebar-menu">
            <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"><i class="bi bi-grid-1x2-fill"></i> Dashboard</a></li>
            <li><a href="{{ route('admin.products.index') }}" class="{{ request()->routeIs('admin.products.*') ? 'active' : '' }}"><i class="bi bi-box-seam-fill"></i> Produk</a></li>
            <li><a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.*') ? 'active' : '' }}"><i class="bi bi-tags-fill"></i> Kategori</a></li>
            
            <!-- MENU YANG SUDAH DIPERBAIKI -->
            <li><a href="{{ route('admin.banners.index') }}" class="{{ request()->routeIs('admin.banners.*') ? 'active' : '' }}"><i class="bi bi-image"></i> Banner</a></li>
            <li><a href="{{ route('admin.messages.index') }}" class="{{ request()->routeIs('admin.messages.*') ? 'active' : '' }}"><i class="bi bi-envelope-fill"></i> Pesan Masuk</a></li>
            <li><a href="{{ route('admin.testimonials.index') }}" class="{{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}"><i class="bi bi-chat-quote-fill"></i> Testimoni</a></li>
            <!-- END MENU YANG DIPERBAIKI -->

            <li>
                <form method="POST" action="{{ route('logout') }}" id="logout-form" style="display: contents;">
                    @csrf
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: #ef4444; cursor:pointer;">
                        <i class="bi bi-box-arrow-left"></i> Logout
                    </a>
                </form>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>