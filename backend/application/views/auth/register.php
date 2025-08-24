<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h1><i class="fas fa-rocket"></i> Lanzaro</h1>
            <p>Crea tu cuenta gratis</p>
        </div>

        <?php if(isset($error)): ?>
            <div class="alert alert-error">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('auth/register') ?>" method="POST" class="auth-form">
            <div class="form-group">
                <label for="name" class="form-label">Nombre Completo</label>
                <input type="text" id="name" name="name" class="form-input" required>
            </div>

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

            <div class="form-group">
                <label for="password_confirm" class="form-label">Confirmar Contraseña</label>
                <div class="password-input">
                    <input type="password" id="password_confirm" name="password_confirm" class="form-input" required>
                    <button type="button" class="password-toggle">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>
            </div>

            <div class="terms-check">
                <label class="remember-me">
                    <input type="checkbox" name="terms" required>
                    Acepto los <a href="#" class="terms-link">Términos y Condiciones</a>
                </label>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Crear Cuenta</button>
        </form>

        <div class="auth-footer">
            ¿Ya tienes una cuenta? 
            <a href="<?= site_url('auth/login') ?>">Inicia sesión aquí</a>
        </div>
    </div>
</div>

<style>
.terms-check {
    font-size: 0.875rem;
    color: var(--gray-600);
}

.terms-link {
    color: var(--primary);
    text-decoration: none;
}

.terms-link:hover {
    text-decoration: underline;
}

/* Los demás estilos se heredan de login.php */
</style>

<script>
document.querySelectorAll('.password-toggle').forEach(function(button) {
    button.addEventListener('click', function() {
        const input = this.previousElementSibling;
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
});

// Validación de contraseñas coincidentes
document.querySelector('.auth-form').addEventListener('submit', function(e) {
    const password = document.getElementById('password');
    const confirm = document.getElementById('password_confirm');
    
    if (password.value !== confirm.value) {
        e.preventDefault();
        alert('Las contraseñas no coinciden');
    }
});
</script>
