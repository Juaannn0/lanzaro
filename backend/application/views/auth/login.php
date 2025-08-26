<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h1><i class="fas fa-rocket"></i> Lanzaro</h1>
            <p>Inicia sesión para continuar</p>
        </div>

        <?php if(isset($error)): ?>
            <div class="alert alert-error">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('auth/login') ?>" method="POST" class="auth-form">
            <div class="form-group">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-input" required>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <div class="password-input">
                    <input type="password" id="password" name="password" class="form-input" required>
                    <button type="button" class="password-toggle">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="form-options">
                <label class="remember-me">
                    <input type="checkbox" name="remember">
                    Recordarme
                </label>
                <a href="<?= site_url('auth/f_password') ?>" class="forgot-password">
                    ¿Olvidaste tu contraseña?
                </a>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
        </form>

        <div class="auth-footer">
            ¿No tienes una cuenta? 
            <a href="<?= site_url('auth/register') ?>">Regístrate aquí</a>
        </div>
    </div>
</div>
</style>

<script>
document.querySelector('.password-toggle').addEventListener('click', function() {
    const input = document.getElementById('password');
    const icon = this.querySelector('i');
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
});
</script>
