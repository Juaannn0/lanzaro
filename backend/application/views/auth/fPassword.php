<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h1><i class="fas fa-rocket"></i> Lanzaro</h1>
            <p>Recupera tu contraseña</p>
        </div>

        <?php if(isset($error)): ?>
            <div class="alert alert-error">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <?php if(isset($success)): ?>
            <div class="alert alert-success">
                <?= $success ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('auth/forgot-password') ?>" method="POST" class="auth-form">
            <div class="form-description">
                Ingresa tu correo electrónico y te enviaremos las instrucciones para restablecer tu contraseña.
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-input" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Enviar Instrucciones</button>
        </form>

        <div class="auth-footer">
            <a href="<?= site_url('auth/login') ?>">
                <i class="fas fa-arrow-left"></i> Volver al inicio de sesión
            </a>
        </div>
    </div>
</div>
</style>
