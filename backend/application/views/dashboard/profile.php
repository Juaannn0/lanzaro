<div class="dashboard">
    <?php $this->load->view('layout/sidebar'); ?>

    <main class="dashboard-main">
        <div class="dashboard-header">
            <h1 class="dashboard-title">Mi Perfil</h1>
        </div>

        <div class="profile-container">
            <div class="profile-header">
                <div class="profile-cover"></div>
                <div class="profile-avatar-container">
                    <img src="<?= isset($user->avatar) ? base_url($user->avatar) : base_url('assets/img/default-avatar.jpg') ?>" 
                         alt="Avatar" class="profile-avatar">
                    <button class="change-avatar-btn">
                        <i class="fas fa-camera"></i>
                    </button>
                </div>
            </div>

            <?php if(isset($success)): ?>
                <div class="alert alert-success">
                    <?= $success ?>
                </div>
            <?php endif; ?>

            <?php if(isset($error)): ?>
                <div class="alert alert-error">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <div class="profile-content">
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

                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h2>Cambiar Contraseña</h2>
                    </div>
                    <form action="<?= site_url('dashboard/update_password') ?>" method="POST" class="profile-form">
                        <div class="form-group">
                            <label for="current_password" class="form-label">Contraseña Actual</label>
                            <div class="password-input">
                                <input type="password" id="current_password" name="current_password" class="form-input" required>
                                <button type="button" class="password-toggle">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="new_password" class="form-label">Nueva Contraseña</label>
                                <div class="password-input">
                                    <input type="password" id="new_password" name="new_password" class="form-input" required>
                                    <button type="button" class="password-toggle">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirm_password" class="form-label">Confirmar Nueva Contraseña</label>
                                <div class="password-input">
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-input" required>
                                    <button type="button" class="password-toggle">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

<style>
.profile-container {
    max-width: 800px;
    margin: 0 auto;
}

.profile-header {
    position: relative;
    margin-bottom: 4rem;
}

.profile-cover {
    height: 200px;
    background: linear-gradient(135deg, var(--primary-light) 0%, var(--primary) 100%);
    border-radius: 0.5rem;
}

.profile-avatar-container {
    position: absolute;
    bottom: -3rem;
    left: 50%;
    transform: translateX(-50%);
}

.profile-avatar {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 4px solid white;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    object-fit: cover;
}

.change-avatar-btn {
    position: absolute;
    bottom: 0.5rem;
    right: 0.5rem;
    width: 2.5rem;
    height: 2.5rem;
    border-radius: 50%;
    background: var(--primary);
    color: white;
    border: none;
    cursor: pointer;
    transition: all 0.2s;
}

.change-avatar-btn:hover {
    background: var(--primary-dark);
}

.profile-content {
    display: grid;
    gap: 2rem;
}

.form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
}

@media (max-width: 640px) {
    .form-row {
        grid-template-columns: 1fr;
    }
}
</style>

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
    
    if (newPassword.value !== confirmPassword.value) {
        e.preventDefault();
        alert('Las contraseñas no coinciden');
    }
});
</script>
