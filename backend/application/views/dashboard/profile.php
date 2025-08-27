<div class="dashboard">
    <?php $this->load->view('layout/sidebar'); ?>

    <main class="dashboard-main">
        <div class="dashboard-header">
            <h1 class="dashboard-title">Mi Perfil</h1>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="profile-header">
                    <div class="profile-cover"></div>
                    <div class="profile-avatar-container">
                        <img src="<?= isset($user->avatar) ? base_url($user->avatar) : base_url('assets/img/default-avatar.jpg') ?>" 
                             alt="Avatar" class="profile-avatar">
                        <button class="change-avatar-btn" title="Cambiar foto de perfil">
                            <i class="fas fa-camera"></i>
                        </button>
                    </div>
                </div>
            </div>

            <?php if(isset($success)): ?>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle"></i>
                    <?= $success ?>
                </div>
            <?php endif; ?>

            <?php if(isset($error)): ?>
                <div class="alert alert-error">
                    <i class="fas fa-exclamation-circle"></i>
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <div class="card-grid">
                <!-- Información Personal -->
                <div class="card">
                    <div class="card-header">
                        <h2>Información Personal</h2>
                    </div>
                    <form action="<?= site_url('dashboard/update_profile') ?>" method="POST" class="profile-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name" class="form-label">Nombre Completo</label>
                                <input type="text" id="name" name="name" class="form-input" 
                                       value="<?= isset($user->name) ? $user->name : '' ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" id="email" name="email" class="form-input" 
                                       value="<?= isset($user->email) ? $user->email : '' ?>" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone" class="form-label">Teléfono</label>
                                <input type="tel" id="phone" name="phone" class="form-input" 
                                       value="<?= isset($user->phone) ? $user->phone : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="location" class="form-label">Ubicación</label>
                                <input type="text" id="location" name="location" class="form-input" 
                                       value="<?= isset($user->location) ? $user->location : '' ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bio" class="form-label">Biografía</label>
                            <textarea id="bio" name="bio" class="form-input" rows="4"><?= isset($user->bio) ? $user->bio : '' ?></textarea>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Cambiar Contraseña -->
                <div class="card">
                    <div class="card-header">
                        <h2>Cambiar Contraseña</h2>
                    </div>
                    <form action="<?= site_url('dashboard/update_password') ?>" method="POST" class="profile-form">
                        <div class="form-group">
                            <label for="current_password" class="form-label">Contraseña Actual</label>
                            <div class="password-input">
                                <input type="password" id="current_password" name="current_password" class="form-input" required>
                                <button type="button" class="password-toggle" title="Mostrar/Ocultar contraseña">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="new_password" class="form-label">Nueva Contraseña</label>
                                <div class="password-input">
                                    <input type="password" id="new_password" name="new_password" class="form-input" required>
                                    <button type="button" class="password-toggle" title="Mostrar/Ocultar contraseña">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirm_password" class="form-label">Confirmar Nueva Contraseña</label>
                                <div class="password-input">
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-input" required>
                                    <button type="button" class="password-toggle" title="Mostrar/Ocultar contraseña">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-key"></i> Cambiar Contraseña
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
// Toggle password visibility
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

// Password confirmation validation
document.querySelector('form').addEventListener('submit', function(e) {
    const newPassword = document.getElementById('new_password');
    const confirmPassword = document.getElementById('confirm_password');
    
    if (newPassword && confirmPassword && newPassword.value !== confirmPassword.value) {
        e.preventDefault();
        alert('Las contraseñas no coinciden');
    }
});
</script>

<script>
// Toggle password visibility
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

// Password confirmation validation
document.querySelector('form').addEventListener('submit', function(e) {
    const newPassword = document.getElementById('new_password');
    const confirmPassword = document.getElementById('confirm_password');
    
    if (newPassword && confirmPassword && newPassword.value !== confirmPassword.value) {
        e.preventDefault();
        alert('Las contraseñas no coinciden');
    }
});
</script>