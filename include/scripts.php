<!-- Bootstrap 5 -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"
></script>

<?php if (!empty($plugins['particles'])): ?>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
<?php endif; ?>

<?php if (!empty($plugins['aos'])): ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<?php endif; ?>

<?php if (!empty($plugins['typewriter'])): ?>
    <script src="https://unpkg.com/typewriter-effect@2.18.2/dist/core.js"></script>
<?php endif; ?>

<?php if (!empty($plugins['lightbox'])): ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<?php endif; ?>

<?php if (!empty($plugins['swiper'])): ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php endif; ?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        <?php if (!empty($plugins['aos'])): ?>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
        <?php endif; ?>

        <?php if (!empty($plugins['typewriter'])): ?>
        const typewriterElement = document.getElementById('typewriter');

        if (typewriterElement) {
            new Typewriter(typewriterElement, {
                loop: false,
                delay: 70,
                deleteSpeed: 40
            })
                .typeString('Tendência')
                .pauseFor(1500)
                .deleteAll()
                .typeString('Marketing')
                .pauseFor(1500)
                .deleteAll()
                .typeString('Expressão')
                .pauseFor(1500)
                .deleteAll()
                .typeString('Conteúdo Criativo')
                .start();
        }
        <?php endif; ?>

        <?php if (!empty($plugins['particles'])): ?>
        const particlesElement = document.getElementById('particles-js');

        if (particlesElement) {
            particlesJS.load('particles-js', 'include/particlesjs-config.json');
        }
        <?php endif; ?>

        const navbar = document.getElementById('mainNavbar');
        const updateNavbar = function () {
            if (navbar) {
                navbar.classList.toggle('scrolled', window.scrollY > 50);
            }
        };

        updateNavbar();
        window.addEventListener('scroll', updateNavbar, { passive: true });

        document.querySelectorAll('a.nav-link[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (event) {
                const target = document.querySelector(this.getAttribute('href'));

                if (!target) {
                    return;
                }

                event.preventDefault();
                const offset = 40;
                const top = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top: top, behavior: 'smooth' });
            });
        });

        const logoItems = document.querySelectorAll('.logo-item img');
        const highlightLogo = document.getElementById('highlightLogo');
        const highlightLogoName = document.getElementById('highlightLogoName');
        const highlightLogoInstagram = document.getElementById('highlightLogoInstagram');

        const showLogo = function (logo) {
            if (!highlightLogo || !highlightLogoName || !highlightLogoInstagram) {
                return;
            }

            highlightLogo.src = logo.dataset.src;
            highlightLogo.alt = logo.dataset.nome;
            highlightLogoName.textContent = logo.dataset.nome;
            highlightLogoInstagram.textContent = logo.dataset.instagram;
        };

        if (logoItems.length > 0) {
            showLogo(logoItems[0]);
        }

        logoItems.forEach(function (logo) {
            logo.addEventListener('mouseenter', function () {
                showLogo(this);
            });
            logo.addEventListener('focus', function () {
                showLogo(this);
            });
        });
    });
</script>
