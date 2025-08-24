<footer class="footer">
    <div class="container footer-container">
        <div class="footer-section">
            <h3>Lanzaro</h3>
            <p class="footer-description">
                Plataforma web para la gestión de usuarios y contenidos, con un enfoque en la simplicidad y la confianza.
            </p>
        </div>
        
        <div class="footer-section">
            <h3>Enlaces Rápidos</h3>
            <ul class="footer-links">
                <li><a href="<?= site_url('pages/home') ?>" class="footer-link">Inicio</a></li>
                <li><a href="<?= site_url('pages/about') ?>" class="footer-link">Sobre Nosotros</a></li>
                <li><a href="<?= site_url('pages/contact') ?>" class="footer-link">Contacto</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h3>Legal</h3>
            <ul class="footer-links">
                <li><a href="#" class="footer-link">Términos de Servicio</a></li>
                <li><a href="#" class="footer-link">Política de Privacidad</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h3>Síguenos</h3>
            <div class="social-links">
                <a href="#" class="footer-link"><i class="fab fa-facebook"></i></a>
                <a href="#" class="footer-link"><i class="fab fa-twitter"></i></a>
                <a href="#" class="footer-link"><i class="fab fa-instagram"></i></a>
                <a href="#" class="footer-link"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
    
    <div class="container text-center" style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--gray-700);">
        <p>&copy; <?= date('Y') ?> Lanzaro. Todos los derechos reservados.</p>
    </div>
</footer>

<!-- Scripts -->
<script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
