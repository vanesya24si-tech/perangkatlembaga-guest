<header class="guest-header fixed-top">
    <div class="container header-wrap">

        <!-- BRAND -->
        <a href="{{ route('home') }}" class="brand">
            <img src="{{ asset('assets/img/logo.jpeg') }}" alt="Logo">
            <div class="brand-text">
                <strong>Lembaga<br>Pemberdayaan Masyarakat</strong>
            </div>
        </a>

        <!-- NAV -->
        <nav class="main-nav">

            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                <i class="bi bi-house-door"></i> Beranda
            </a>

            <a href="{{ route('informasi_umum.publik') }}"
               class="{{ request()->routeIs('informasi_umum.*') ? 'active' : '' }}">
                <i class="bi bi-megaphone"></i> Informasi Umum
            </a>

            @auth
                <a href="{{ route('warga.index') }}" class="{{ request()->routeIs('warga.*') ? 'active' : '' }}">
                    <i class="bi bi-people"></i> Data Warga
                </a>

                <a href="{{ route('perangkat.index') }}" class="{{ request()->routeIs('perangkat.*') ? 'active' : '' }}">
                    <i class="bi bi-building"></i> Perangkat Desa
                </a>

                <a href="{{ route('lembaga.index') }}" class="{{ request()->routeIs('lembaga.*') ? 'active' : '' }}">
                    <i class="bi bi-bank"></i> Lembaga Desa
                </a>

                <a href="{{ route('jabatan_lembaga.index') }}"
                   class="{{ request()->routeIs('jabatan_lembaga.*') ? 'active' : '' }}">
                    <i class="bi bi-diagram-3"></i> Jabatan Lembaga
                </a>

                <a href="{{ route('anggota_lembaga.index') }}"
                   class="{{ request()->routeIs('anggota_lembaga.*') ? 'active' : '' }}">
                    <i class="bi bi-person-lines-fill"></i> Anggota Lembaga
                </a>
            @endauth

        </nav>

        <!-- USER -->
        @auth
<div class="user-dropdown">

    <button class="user-trigger" onclick="toggleUserDropdown(event)">
        <span class="notif">
            {{ auth()->user()->unread_notifications_count ?? 0 }}
        </span>

        <div class="avatar">
            {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
        </div>

        <div class="user-info">
            <strong>{{ auth()->user()->name }}</strong>
            <small>{{ ucfirst(auth()->user()->role ?? 'User') }}</small>
        </div>

        <i class="bi bi-chevron-down arrow"></i>
    </button>

    <div class="dropdown-menu-user">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </button>
        </form>
    </div>

</div>
@endauth

    </div>
</header>

<style>
/* =====================
   GLOBAL FIX
===================== */
body {
    padding-top: 88px;
    background: #f8fafc;
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
}

/* =====================
   HEADER (GLASS)
===================== */
.guest-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 88px;
    background: rgba(255,255,255,.75);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    box-shadow: 0 10px 40px rgba(0,0,0,.08);
    border-bottom: 1px solid rgba(255,255,255,.6);
    z-index: 9999;
}

/* =====================
   HEADER WRAP
===================== */
.header-wrap {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 32px;
}

/* =====================
   BRAND
===================== */
.brand {
    display: flex;
    align-items: center;
    gap: 14px;
    text-decoration: none;
    color: #0f172a;
}

.brand img {
    height: 46px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,.15);
}

.brand-text strong {
    font-size: 16px;
    line-height: 1.2;
    letter-spacing: .3px;
}

/* =====================
   NAVIGATION
===================== */
.main-nav {
    display: flex;
    gap: 6px;
    align-items: center;
}

.main-nav a {
    position: relative;
    padding: 10px 16px;
    font-size: 14px;
    font-weight: 500;
    color: #334155;
    text-decoration: none;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: all .25s ease;
}

.main-nav a i {
    font-size: 16px;
}

/* Hover glow */
.main-nav a:hover {
    background: rgba(22,163,74,.08);
    color: #16a34a;
}

/* Active underline premium */
.main-nav a.active {
    color: #16a34a;
    font-weight: 600;
}

.main-nav a.active::after {
    content: '';
    position: absolute;
    bottom: 6px;
    left: 16px;
    right: 16px;
    height: 3px;
    border-radius: 3px;
    background: linear-gradient(90deg,#16a34a,#22c55e);
}

/* =====================
   USER DROPDOWN (PREMIUM)
===================== */
.user-dropdown {
    position: relative;
}

.user-trigger {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 8px 14px;
    border-radius: 999px;
    border: none;
    cursor: pointer;
    background: linear-gradient(135deg,#ffffff,#f1f5f9);
    box-shadow:
        0 8px 30px rgba(0,0,0,.12),
        inset 0 1px 0 rgba(255,255,255,.6);
    transition: all .25s ease;
}

.user-trigger:hover {
    transform: translateY(-1px);
    box-shadow: 0 12px 35px rgba(0,0,0,.15);
}

/* Avatar gradient */
.avatar {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg,#16a34a,#22c55e);
    color: #fff;
    font-weight: 700;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    letter-spacing: .5px;
}

/* User info */
.user-info strong {
    font-size: 14px;
    color: #0f172a;
}

.user-info small {
    font-size: 12px;
    color: #64748b;
}

/* Notif badge */
.notif {
    position: absolute;
    top: -4px;
    left: -4px;
    background: linear-gradient(135deg,#ef4444,#dc2626);
    color: #fff;
    font-size: 11px;
    padding: 3px 6px;
    border-radius: 999px;
    box-shadow: 0 4px 12px rgba(239,68,68,.5);
}

/* Arrow */
.arrow {
    font-size: 12px;
    color: #475569;
    transition: transform .25s ease;
}

.user-dropdown.active .arrow {
    transform: rotate(180deg);
}

/* =====================
   DROPDOWN MENU
===================== */
.dropdown-menu-user {
    position: absolute;
    top: 130%;
    right: 0;
    min-width: 200px;
    background: rgba(255,255,255,.85);
    backdrop-filter: blur(12px);
    border-radius: 14px;
    box-shadow: 0 20px 45px rgba(0,0,0,.18);
    opacity: 0;
    transform: translateY(-12px);
    pointer-events: none;
    transition: all .25s ease;
}

.user-dropdown.active .dropdown-menu-user {
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
}

/* Dropdown item */
.dropdown-item {
    padding: 14px 18px;
    width: 100%;
    border: none;
    background: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
    color: #334155;
    transition: all .2s ease;
}

.dropdown-item i {
    font-size: 18px;
}

.dropdown-item:hover {
    background: rgba(239,68,68,.08);
    color: #dc2626;
}
</style>


<script>
function toggleUserDropdown(e) {
    e.stopPropagation();
    document.querySelectorAll('.user-dropdown').forEach(d => {
        if (d !== e.currentTarget.closest('.user-dropdown')) {
            d.classList.remove('active');
        }
    });
    e.currentTarget.closest('.user-dropdown').classList.toggle('active');
}

document.addEventListener('click', () => {
    document.querySelectorAll('.user-dropdown').forEach(d => d.classList.remove('active'));
});
</script>
