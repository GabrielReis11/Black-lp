<?php
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://unpkg.com/typewriter-effect@2.18.2/dist/core.js"></script>

<!-- JavaScript Owl Carousel -->
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    });
</script>
<script>
    const typewriter = new Typewriter(document.getElementById('typewriter'), {
        loop: false,
        delay: 70,
        deleteSpeed: 40,
    });

    typewriter
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
</script>

<script>
    particlesJS.load('particles-js', 'include/particlesjs-config.json', function () {
        console.log('Particles carregado com sucesso!');
    });

    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('mainNavbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    document.querySelectorAll('a.nav-link[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').slice(1);
            const target = document.getElementById(targetId);
            const offset = 40; // ajuste aqui a margem desejada em pixels

            if (target) {
                const topPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({
                    top: topPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
