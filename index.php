<?php

$tamanhos = ['s', 'm', 'l'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/css/style.css">
    <title>Black</title>
    <link rel="shortcut icon" href="img/favicon.png" />

    <?php include_once 'include/cdns.php'?>
    <?php include_once 'include/infos.php'?>
</head>
<body>
    <header>
        <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top navbar-light">
            <div class="container">
                <a class="navbar-brand text-white" href="#sobre-nos"><img src="img/logo-nav.png" alt="" width="125px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#sobre-nos">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#clientes">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#depoimentos">Depoimentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#metricas">Métricas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#planos">Planos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#fale-conosco">Fale Conosco</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="main-section" class="position-relative">
        <div class="container-fluid">
            <div id="particles-js" class="position-absolute w-100 h-100 top-0 start-0"></div>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-8 col-lg-4 d-flex justify-content-center d-flex justify-content-center flex-column">
                    <img src="img/Black-Logo.png" class="" alt="" >
                </div>
            </div>
        </div>
            <div class="scroll-down-arrow">
                <i class="bi bi-chevron-double-down"></i>
            </div>
    </section>
    <section id="sobre-nos">
        <div class="container py-5 h-100">
            <div class="row">
                <!-- Coluna com texto institucional -->
                <div class="col-lg-5 d-flex flex-column text-center justify-content-center">
                    <h6 class="titulo-empresa">Black é</h6>
                    <span id="typewriter" class="typewriter-text"></span>
                    <p class="mt-3 text-empresa">
                        A Black é mais que uma agência de marketing, é uma experiência estratégica pensada para marcas que querem se destacar de verdade. Unimos criatividade, inovação e propósito para construir conexões autênticas entre marcas e pessoas. Cada projeto é único, porque acreditamos que cada marca tem uma história que merece ser contada com impacto.
                    </p>
                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <a href="https://www.instagram.com/black.criativo/" target="_blank" class="btn-custom d-flex align-items-center gap-2">
                            <i class="bi bi-instagram"></i> Instagram
                        </a>
                        <a href="https://wa.me/557996301399" target="_blank" class="btn-custom d-flex align-items-center gap-2">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Coluna com apresentação da fundadora -->
                <div class="col-lg-7 card-zone">
                    <div class="row align-items-center">
                        <!-- Foto e título -->
                        <div class="col-12 col-lg-5 text-center mb-4 mb-lg-0">
                            <img src="img/foto-perfil.jpeg" class="rounded-circle mb-3 img-fluid"
                                 alt="Jessica Souza"
                                 style="width: 200px; height: 200px; object-fit: cover; object-position: left;">
                            <h6 class="mb-0 fw-bold">Jessica Souza</h6>
                            <small class="text-muted">Fundadora e Diretora Criativa</small>
                        </div>

                        <!-- Texto -->
                        <div class="col-12 col-lg-7">
                            <h5 class="fw-bold mb-4 title-dona text-center">A mente por trás da Black</h5>

                            <p class="text-dona mb-3">
                                Sou Jessica Souza, Social Media e Designer de redes sociais e, desde 2020, trabalho com redes sociais transformando perfis em vitrines estratégicas.
                            </p>
                            <p class="text-dona mb-3">
                                Já criei mais de 2.500 designs, desenvolvi identidades visuais impactantes e ajudei diversos profissionais a se posicionarem com autenticidade no digital. O resultado? Mais de 500 mil impressões e interações reais nos perfis que gerencio.
                            </p>
                            <p class="text-dona mb-3">
                                Tudo isso com estratégia, estética e intenção. E hoje, estou aqui para transformar o seu perfil também.
                            </p>
                            <p class="fw-bold text-dona mb-0">
                                Vamos criar algo grande?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="clientes" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 d-none d-lg-flex align-items-center">
                    <div class="text-center">
                        <h4>Conheça quem confia em meu trabalho! Veja ao lado alguns dos clientes que caminham comigo.</h4>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="text-center d-lg-none d-inline-block">
                        <h6><b> Conheça quem confia em meu trabalho! Veja ao lado alguns dos clientes que caminham comigo.</b></h6>
                    </div>
                    <div class="highlight-logo-card">
                        <div class="image-container">
                            <img id="highlightLogo" src="" alt="Logo em Destaque" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 id="highlightLogoName">Passe o mouse sobre uma logo</h5>
                            <p id="highlightLogoInstagram">@</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="logo-grid">
                        <?php foreach ($logos as $logo): ?>
                            <div class="logo-item">
                                <a href="<?= $logo['url'] ?>" target="_blank">
                                    <img    style="border-radius: 20%"
                                            src="<?= $logo['src'] ?>"
                                            alt="<?= $logo['nome'] ?>"
                                            title="<?= $logo['nome'] ?>"
                                            data-src="<?= $logo['src'] ?>"
                                            data-nome="<?= $logo['nome'] ?>"
                                            data-instagram="<?= $logo['instagram'] ?>"
                                    >
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="depoimentos" class="py-5">
        <div class="container">
            <!-- Título -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h4 class="fw-bold">Confira o que dizem nossos clientes</h4>
                </div>
            </div>

            <!-- Carrossel -->
            <div class="row">
                <div class="col-12">
                    <div id="carouselDepoimentos" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach ($depoimentos as $index => $depoimento): ?>
                                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                    <div class="row align-items-center">
                                        <!-- Foto do cliente -->
                                        <div class="col-md-6 text-center mb-md-0 mb-3">
                                            <img src="<?= $depoimento['foto'] ?>" alt="Foto de <?= $depoimento['nome'] ?>"
                                                 class="img-fluid rounded shadow" style="max-height: 300px; object-fit: cover;">
                                        </div>
                                        <!-- Texto do depoimento -->
                                        <div class="col-md-6">
                                            <blockquote class="blockquote">
                                                <p class="mb-3">“<?= $depoimento['texto'] ?>”</p>
                                                <footer class="blockquote-footer text-white-50"><?= $depoimento['nome'] ?></footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Controles -->
                        <button class="carousel-control-prev d-lg-block d-none" type="button" data-bs-target="#carouselDepoimentos" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next  d-lg-block d-none" type="button" data-bs-target="#carouselDepoimentos" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="metricas" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4 class="fw-bold">RESULTADOS QUE FALAM POR SI!</h4>
                    <p class="mt-3">
                        Nossas estratégias de conteúdo impactaram milhares de pessoas.<br><br>

                        +177 mil visualizações em um único perfil<br>
                        Alcance crescente mesmo com públicos diferentes<br>
                        Conteúdos que geram resultados de verdade, com até 87,9% de aumento no alcance!<br><br>

                    </p>
                </div>
                <?php foreach ($metricas as $grafico): ?>
                    <div class="col-12 col-md-4 mb-4">
                        <img src="<?= $grafico ?>" class="img-fluid rounded shadow" data-aos="fade-down" alt="Gráfico de métricas">
                    </div>
                <?php endforeach; ?>
                <div class="col-12 text-center">
                    <strong>Você também pode ter resultados assim. Vamos conversar?</strong>
                </div>

            </div>

    </section>
    <section id="planos" class="py-5" style="background-color: #fff;">
        <div class="container">
            <!-- Título -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h3 class="fw-bold">ESCOLHA A <span class="planos-title-word">ESTRATÉGIA</span> IDEAL PARA VOCÊ</h3>
                </div>
            </div>

            <!-- Cards -->
            <div class="row g-4 justify-content-center">
                <?php foreach ($planos as $plano): ?>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="card plano-card h-100 text-white" style="border: none" data-aos="fade-top">
                            <!-- Header do card -->
                            <div class="card-header bg-dark text-white text-uppercase fw-bold text-center">
                                <?= $plano['titulo'] ?>
                            </div>

                            <!-- Corpo do card -->
                            <div class="card-body d-flex flex-column justify-content-between">
                                <!-- Descrição do plano -->
                                <p class="card-text small mb-3">
                                    <?= $plano['descricao'] ?>
                                </p>

                                <!-- Lista de benefícios -->
                                <ul class="list-unstyled flex-grow-1 mb-3">
                                    <?php foreach ($plano['beneficios'] as $beneficio): ?>
                                        <li class="mb-2 d-flex align-items-start">
                                            <i class="bi bi-check-circle-fill me-2"></i>
                                            <?= $beneficio ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                                <!-- Botão -->
                                <a href="https://wa.me/557996301399" target="_blank" class="btn btn-dark mt-auto">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>
    <section id="fale-conosco" class="py-5">
        <div class="container">
            <div class="row">
                <!-- Texto dos serviços avulsos -->
                <div class="col-md-6 d-flex align-items-center chamada" >
                    <div class="text-white p-4" data-aos="fade-top">
                        <p class="mb-3" style="font-size: 1.6rem; font-weight: 700;">
                            Está cansado de postar e não ver resultado?
                        </p>
                        <p>
                            Você até tenta manter seu perfil ativo, mas sente que está falando com as paredes?<br>
                            As artes não conversam com sua identidade, os posts não engajam e o retorno simplesmente… não vem.
                        </p>
                        <p>
                            Se você já percebeu que não dá mais pra tratar sua presença digital como improviso, chegou a hora de mudar isso.
                        </p>
                        <p style="font-weight: 600;">
                            Preencha o formulário ao lado e me conte o que você precisa.<br>
                            Eu vou te ajudar a transformar seu perfil em uma <strong>vitrine estratégica, profissional e com resultados reais</strong>.
                        </p>
                    </div>
                </div>

                <!-- Formulário de contato -->
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card card-form w-100 flex-grow-1 img-size" data-aos="fade-top">
                        <form method="POST" target="_blank" action="https://formsubmit.co/jssjess93@yahoo.com.br" enctype="multipart/form-data" class="py-3 img-size">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome" id="nome" class="form-control" required>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <label for="telefone">Telefone</label>
                                        <input type="text" name="telefone" id="telefone" class="form-control" required>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>

                                    <div class="col-md-12 mb-2">
                                        <label for="mensagem">Mensagem</label>
                                        <textarea name="mensagem" id="mensagem" class="form-control" rows="5" required></textarea>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>

                                </div>
        </div>
    </section>
    <section id="footer">
        <div class="container">
            <div class="col-12 py-2">
                <p class="d-flex justify-content-center mb-0 copyright">
                    ©Black - Conteudo Criativo - 2025
                </p>
            </div>
        </div>
    </section>

    <?php include_once 'include/scripts.php'?>
<script>
    AOS.init();
</script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const logoItems = document.querySelectorAll('.logo-item img');
            const highlightLogo = document.getElementById('highlightLogo');
            const highlightLogoName = document.getElementById('highlightLogoName');
            const highlightLogoInstagram = document.getElementById('highlightLogoInstagram');

            if (logoItems.length > 0) {
                highlightLogo.src = logoItems[0].dataset.src;
                highlightLogo.alt = logoItems[0].dataset.nome;
                highlightLogoName.textContent = logoItems[0].dataset.nome;
                highlightLogoInstagram.textContent = logoItems[0].dataset.instagram;
            }

            logoItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    highlightLogo.style.opacity = '0';
                    highlightLogoName.style.opacity = '0';
                    highlightLogoInstagram.style.opacity = '0';

                    setTimeout(() => {
                        highlightLogo.src = this.dataset.src;
                        highlightLogo.alt = this.dataset.nome;
                        highlightLogoName.textContent = this.dataset.nome;
                        highlightLogoInstagram.textContent = this.dataset.instagram;

                        highlightLogo.style.opacity = '1';
                        highlightLogoName.style.opacity = '1';
                        highlightLogoInstagram.style.opacity = '1';
                    }, 150);
                });
            });
        });
    </script>

</body>
</html>
