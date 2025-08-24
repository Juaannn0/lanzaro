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
                <a href="<?= site_url('auth/forgot-password') ?>" class="forgot-password">
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

<style>
.auth-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary) 100%);
}

.auth-card {
    width: 100%;
    max-width: 400px;
    background: white;
    border-radius: 1rem;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -1px rgba(0,0,0,0.06);
    padding: 2rem;
}

.auth-header {
    text-align: center;
    margin-bottom: 2rem;
}

.auth-header h1 {
    color: var(--primary);
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

.auth-header p {
    color: var(--gray-600);
}

.auth-form {
    display: grid;
    gap: 1.5rem;
}

.password-input {
    position: relative;
}

.password-toggle {
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: var(--gray-400);
    cursor: pointer;
}

.password-toggle:hover {
    color: var(--gray-600);
}

.form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.875rem;
}

.remember-me {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--gray-600);
}

.forgot-password {
    color: var(--primary);
    text-decoration: none;
}

.forgot-password:hover {
    text-decoration: underline;
}

.btn-block {
    width: 100%;
}

.auth-footer {
    text-align: center;
    margin-top: 2rem;
    padding-top: 1rem;
    border-top: 1px solid var(--gray-200);
    color: var(--gray-600);
}

.auth-footer a {
    color: var(--primary);
    text-decoration: none;
}

.auth-footer a:hover {
    text-decoration: underline;
}

@media (max-width: 480px) {
    .auth-card {
        padding: 1.5rem;
    }

    .form-options {
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
    }
}
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
