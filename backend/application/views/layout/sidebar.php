<aside class="sidebar">
    <div class="sidebar-header">
        <a href="<?= site_url('dashboard') ?>" class="logo">
            <i class="fas fa-rocket"></i> Lanzaro
        </a>
    </div>

    <nav class="sidebar-nav">
        <a href="<?= site_url('dashboard') ?>" class="sidebar-link <?= uri_string() == 'dashboard' ? 'active' : '' ?>">
            <i class="fas fa-home"></i> Panel Principal
        </a>
        <a href="<?= site_url('dashboard/profile') ?>" class="sidebar-link <?= uri_string() == 'dashboard/profile' ? 'active' : '' ?>">
            <i class="fas fa-user"></i> Mi Perfil
        </a>
        <a href="<?= site_url('dashboard/settings') ?>" class="sidebar-link <?= uri_string() == 'dashboard/settings' ? 'active' : '' ?>">
            <i class="fas fa-cog"></i> Configuración
        </a>
        <a href="<?= site_url('auth/logout') ?>" class="sidebar-link text-danger">
            <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
        </a>
    </nav>
</aside>
