<section class="contact-hero">
    <div class="container">
        <h1 class="section-title">Contáctanos</h1>
        <p class="lead">Estamos aquí para ayudarte. Envíanos tu mensaje y nos pondremos en contacto contigo pronto.</p>
    </div>
</section>

<section class="contact-content">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-form-container">
                <form id="contactForm" class="contact-form">
                    <div class="form-group">
                        <label for="name" class="form-label">Nombre Completo</label>
                        <input type="text" id="name" name="name" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="subject" class="form-label">Asunto</label>
                        <input type="text" id="subject" name="subject" class="form-input" required>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea id="message" name="message" class="form-input" rows="6" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                </form>
            </div>

            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Ubicación</h3>
                    <p>Calle Principal #123<br>Ciudad, País</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Teléfono</h3>
                    <p>+1 234 567 890<br>+1 234 567 891</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p>info@lanzaro.com<br>soporte@lanzaro.com</p>
                </div>

                <div class="social-links">
                    <h3>Síguenos</h3>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.contact-hero {
    background-color: var(--primary);
    color: white;
    padding: 4rem 0;
    text-align: center;
}

.contact-hero .lead {
    font-size: 1.25rem;
    margin-top: 1rem;
    opacity: 0.9;
}

.contact-content {
    padding: 4rem 0;
}

.contact-grid {
    display: grid;
    grid-template-columns: 3fr 2fr;
    gap: 4rem;
    align-items: start;
}

.contact-form-container {
    background: white;
    padding: 2rem;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.contact-form {
    display: grid;
    gap: 1.5rem;
}

.info-card {
    background: white;
    padding: 1.5rem;
    border-radius: 0.5rem;
    text-align: center;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.info-icon {
    width: 3rem;
    height: 3rem;
    background-color: var(--primary-light);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    font-size: 1.25rem;
}

.info-card h3 {
    color: var(--gray-900);
    margin-bottom: 0.5rem;
}

.info-card p {
    color: var(--gray-600);
    line-height: 1.6;
}

.social-links {
    text-align: center;
    margin-top: 2rem;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 1rem;
}

.social-icon {
    width: 2.5rem;
    height: 2.5rem;
    background-color: var(--gray-100);
    color: var(--gray-600);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
}

.social-icon:hover {
    background-color: var(--primary);
    color: white;
}

@media (max-width: 768px) {
    .contact-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .contact-hero {
        padding: 3rem 0;
    }
}
</style>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Aquí puedes agregar la lógica para enviar el formulario
    alert('Mensaje enviado correctamente');
    this.reset();
});
</script>
