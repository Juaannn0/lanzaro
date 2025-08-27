<div class="dashboard">
    <?php $this->load->view('layout/sidebar'); ?>

    <main class="dashboard-main">
        <div class="dashboard-header">
            <h1 class="dashboard-title">Panel Principal</h1>
            <div class="header-actions">
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> Nueva Acción
                </button>
            </div>
        </div>

        <div class="card-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <h3>1,234</h3>
                    <p>Usuarios Totales</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="stat-content">
                    <h3>567</h3>
                    <p>Documentos</p>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="stat-content">
                    <h3>89%</h3>
                    <p>Tasa de Crecimiento</p>
                </div>
            </div>
        </div>

        <div class="dashboard-grid">
            <div class="card recent-activity">
                <div class="card-header">
                    <h2>Actividad Reciente</h2>
                </div>
                <div class="activity-list">
                    <div class="activity-item">
                        <div class="activity-icon bg-primary">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="activity-content">
                            <p>Nuevo usuario registrado</p>
                            <small>Hace 5 minutos</small>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon bg-accent">
                            <i class="fas fa-file-upload"></i>
                        </div>
                        <div class="activity-content">
                            <p>Documento actualizado</p>
                            <small>Hace 15 minutos</small>
                        </div>
                    </div>
                    <div class="activity-item">
                        <div class="activity-icon bg-success">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="activity-content">
                            <p>Tarea completada</p>
                            <small>Hace 1 hora</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card quick-actions">
                <div class="card-header">
                    <h2>Acciones Rápidas</h2>
                </div>
                <div class="quick-actions-grid">
                    <button class="quick-action-btn">
                        <i class="fas fa-user-plus"></i>
                        <span>Añadir Usuario</span>
                    </button>
                    <button class="quick-action-btn">
                        <i class="fas fa-file-alt"></i>
                        <span>Nuevo Documento</span>
                    </button>
                    <button class="quick-action-btn">
                        <i class="fas fa-cog"></i>
                        <span>Configuración</span>
                    </button>
                    <button class="quick-action-btn">
                        <i class="fas fa-chart-bar"></i>
                        <span>Ver Reportes</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h2>Usuarios Recientes</h2>
            </div>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Fecha de Registro</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <img src="<?= base_url('assets/img/avatar1.jpg') ?>" alt="Avatar" class="user-avatar">
                                    <span>Juan Pérez</span>
                                </div>
                            </td>
                            <td>juan@example.com</td>
                            <td>24/08/2025</td>
                            <td><span class="badge badge-success">Activo</span></td>
                            <td>
                                <div class="table-actions">
                                    <button class="btn-icon" title="Editar">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn-icon" title="Eliminar">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Más filas aquí -->
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

<style>
/* Estilos adicionales específicos para el dashboard */
.dashboard {
    display: flex;
    min-height: 100vh;
    background-color: var(--gray-50);
}

.dashboard-main {
    flex: 1;
    padding: 2rem;
    overflow-y: auto;
}

.dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid var(--gray-200);
}

.dashboard-title {
    font-size: 1.875rem;
    font-weight: 600;
    color: var(--gray-900);
    margin: 0;
}

.card-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: white;
    padding: 1.5rem;
    border-radius: 0.75rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: transform 0.2s;
}

.stat-card:hover {
    transform: translateY(-2px);
}

.stat-icon {
    width: 3rem;
    height: 3rem;
    border-radius: 0.75rem;
    background-color: var(--primary);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.stat-content h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin: 0;
    color: var(--gray-900);
}

.stat-content p {
    margin: 0.25rem 0 0;
    color: var(--gray-600);
}

.dashboard-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.card {
    background: white;
    border-radius: 0.75rem;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.card-header {
    padding: 1.25rem 1.5rem;
    border-bottom: 1px solid var(--gray-200);
}

.card-header h2 {
    margin: 0;
    font-size: 1.25rem;
    color: var(--gray-900);
}

.activity-list {
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.activity-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    border-radius: 0.5rem;
    background-color: var(--gray-50);
    transition: background-color 0.2s;
}

.activity-item:hover {
    background-color: var(--gray-100);
}

.activity-icon {
    width: 2.5rem;
    height: 2.5rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
}

.bg-primary { background-color: var(--primary); }
.bg-accent { background-color: var(--accent); }
.bg-success { background-color: #10b981; }

.activity-content p {
    margin: 0;
    color: var(--gray-900);
    font-weight: 500;
}

.activity-content small {
    color: var(--gray-500);
    font-size: 0.875rem;
}

.quick-actions-grid {
    padding: 1.5rem;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
}

.quick-action-btn {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 1.25rem;
    border: 1px solid var(--gray-200);
    border-radius: 0.75rem;
    background: white;
    cursor: pointer;
    transition: all 0.2s;
}

.quick-action-btn:hover {
    background-color: var(--gray-50);
    border-color: var(--primary);
    transform: translateY(-2px);
}

.quick-action-btn i {
    font-size: 1.5rem;
    color: var(--primary);
    margin-bottom: 0.75rem;
}

.quick-action-btn span {
    color: var(--gray-700);
    font-weight: 500;
}

.table-container {
    padding: 1.5rem;
    overflow-x: auto;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table th {
    text-align: left;
    padding: 0.75rem 1rem;
    background-color: var(--gray-50);
    color: var(--gray-700);
    font-weight: 500;
    border-bottom: 2px solid var(--gray-200);
}

.table td {
    padding: 1rem;
    border-bottom: 1px solid var(--gray-200);
    color: var(--gray-600);
}

.user-info {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.user-avatar {
    width: 2.5rem;
    height: 2.5rem;
    border-radius: 50%;
    object-fit: cover;
}

.badge {
    padding: 0.375rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.875rem;
    font-weight: 500;
}

.badge-success {
    background-color: #dcfce7;
    color: #166534;
}

.table-actions {
    display: flex;
    gap: 0.75rem;
}

.btn-icon {
    width: 2rem;
    height: 2rem;
    border-radius: 0.5rem;
    border: none;
    background: var(--gray-100);
    color: var(--gray-600);
    cursor: pointer;
    transition: all 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-icon:hover {
    background: var(--gray-200);
    color: var(--gray-900);
}

@media (max-width: 1024px) {
    .dashboard-grid {
        grid-template-columns: 1fr;
    }
    
    .card-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
    
    .dashboard-main {
        padding: 1rem;
    }
}
</style>

<script>
// Toggle mobile sidebar
document.querySelector('.mobile-sidebar-toggle')?.addEventListener('click', function() {
    document.querySelector('.sidebar').classList.toggle('active');
});
</script>
