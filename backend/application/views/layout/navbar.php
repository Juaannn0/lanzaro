<nav class="header">
    <div class="header-container container">
        <a href="<?= site_url() ?>" class="logo">
            <i class="fas fa-rocket"></i> Lanzaro
        </a>
        
        <button class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </button>

        <div class="nav-menu" id="navMenu">
            <a href="<?= site_url('pages/home') ?>" class="nav-link <?= uri_string() == 'pages/home' ? 'active' : '' ?>">Inicio</a>
            <a href="<?= site_url('pages/about') ?>" class="nav-link <?= uri_string() == 'pages/about' ? 'active' : '' ?>">Sobre Nosotros</a>
            <a href="<?= site_url('pages/contact') ?>" class="nav-link <?= uri_string() == 'pages/contact' ? 'active' : '' ?>">Contacto</a>
            
            <?php if(!isset($_SESSION['user_id'])): ?>
                <a href="<?= site_url('auth/login') ?>" class="btn btn-primary">Iniciar Sesión</a>
                <a href="<?= site_url('auth/register') ?>" class="btn btn-accent">Registrarse</a>
            <?php else: ?>
                <a href="<?= site_url('dashboard') ?>" class="btn btn-primary">Dashboard</a>
                <a href="<?= site_url('auth/logout') ?>" class="btn btn-accent">Cerrar Sesión</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
