<section class="about-hero">
    <div class="container">
        <div class="about-hero-content">
            <h1 class="section-title">Sobre Lanzaro</h1>
            <p class="lead">Transformando la forma en que las empresas gestionan su contenido digital</p>
        </div>
    </div>
</section>

<section class="about-content">
    <div class="container">
        <div class="about-grid">
            <div class="about-text">
                <h2>Nuestra Historia</h2>
                <p>Lanzaro nació de la necesidad de simplificar la gestión de contenido y usuarios para empresas modernas. Nos propusimos crear una plataforma que combine potencia y simplicidad.</p>
                
                <h2 class="mt-5">Nuestra Misión</h2>
                <p>Empoderar a las organizaciones con herramientas intuitivas y seguras para gestionar su presencia digital de manera eficiente.</p>
                
                <h2 class="mt-5">Nuestros Valores</h2>
                <ul class="values-list">
                    <li>
                        <i class="fas fa-check-circle text-primary"></i>
                        <strong>Simplicidad</strong> - Creemos en hacer las cosas simples y efectivas
                    </li>
                    <li>
                        <i class="fas fa-check-circle text-primary"></i>
                        <strong>Seguridad</strong> - La protección de datos es nuestra prioridad
                    </li>
                    <li>
                        <i class="fas fa-check-circle text-primary"></i>
                        <strong>Innovación</strong> - Constantemente evolucionamos y mejoramos
                    </li>
                    <li>
                        <i class="fas fa-check-circle text-primary"></i>
                        <strong>Confianza</strong> - Construimos relaciones duraderas con nuestros usuarios
                    </li>
                </ul>
            </div>
            
            <div class="about-stats">
                <div class="stat-card">
                    <div class="stat-number">5000+</div>
                    <div class="stat-label">Usuarios Activos</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">99.9%</div>
                    <div class="stat-label">Tiempo de Actividad</div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-number">24/7</div>
                    <div class="stat-label">Soporte Técnico</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="team">
    <div class="container">
        <h2 class="section-title">Nuestro Equipo</h2>
        <div class="team-grid">
            <div class="team-member">
                <img src="<?= base_url('assets/img/team1.jpg') ?>" alt="Miembro del equipo" class="team-photo">
                <h3>Juan Pérez</h3>
                <p>CEO & Fundador</p>
            </div>
            
            <div class="team-member">
                <img src="<?= base_url('assets/img/team2.jpg') ?>" alt="Miembro del equipo" class="team-photo">
                <h3>María González</h3>
                <p>CTO</p>
            </div>
            
            <div class="team-member">
                <img src="<?= base_url('assets/img/team3.jpg') ?>" alt="Miembro del equipo" class="team-photo">
                <h3>Carlos Rodríguez</h3>
                <p>Director de Diseño</p>
            </div>
        </div>
    </div>
</section>

<style>
.about-hero {
    background-color: var(--primary);
    color: white;
    padding: 4rem 0;
    text-align: center;
}

.about-hero .lead {
    font-size: 1.25rem;
    margin-top: 1rem;
    opacity: 0.9;
}

.about-content {
    padding: 4rem 0;
}

.about-grid {
    display: grid;
    grid-template-columns: 3fr 2fr;
    gap: 4rem;
    align-items: start;
}

.values-list {
    list-style: none;
    padding: 0;
    margin-top: 1rem;
}

.values-list li {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.about-stats {
    display: grid;
    gap: 1.5rem;
}

.stat-card {
    background: white;
    padding: 2rem;
    border-radius: 0.5rem;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--primary);
}

.stat-label {
    color: var(--gray-600);
    margin-top: 0.5rem;
}

.team {
    padding: 4rem 0;
    background-color: var(--gray-50);
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.team-member {
    text-align: center;
}

.team-photo {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    margin-bottom: 1rem;
    object-fit: cover;
}

.team-member h3 {
    color: var(--gray-900);
    margin-bottom: 0.5rem;
}

.team-member p {
    color: var(--gray-600);
}

@media (max-width: 768px) {
    .about-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .about-hero {
        padding: 3rem 0;
    }
}
</style>
