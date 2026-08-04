<?php
require_once __DIR__ . '/include/infos.php';

$whatsappUrl = getWhatsLink($contatos);
$siteUrl = rtrim($site_config['url_site'], '/');
$socialImage = $siteUrl !== ''
    ? $siteUrl . '/' . ltrim($site_config['imagem_social'], '/')
    : '';

$structuredData = [
    '@context' => 'https://schema.org',
    '@type' => 'ProfessionalService',
    'name' => $site_config['nome_cliente'],
    'description' => $site_config['descricao_seo'],
    'email' => $contatos['email'],
    'sameAs' => [$contatos['instagram']],
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+' . $contatos['whatsapp']['numero'],
        'contactType' => 'customer service',
        'availableLanguage' => 'Portuguese',
    ],
];

if ($siteUrl !== '') {
    $structuredData['url'] = $siteUrl;
    $structuredData['logo'] = $socialImage;
}
?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?= e($site_config['titulo_seo']) ?></title>
    <meta name="description" content="<?= e($site_config['descricao_seo']) ?>">
    <meta name="keywords" content="<?= e($site_config['keywords']) ?>">
    <meta name="author" content="<?= e($site_config['autor']) ?>">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="<?= e($site_config['cor_tema']) ?>">

    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= e($site_config['nome_cliente']) ?>">
    <meta property="og:title" content="<?= e($site_config['titulo_seo']) ?>">
    <meta property="og:description" content="<?= e($site_config['descricao_seo']) ?>">
    <?php if ($siteUrl !== ''): ?>
        <meta property="og:url" content="<?= e($siteUrl) ?>">
        <meta property="og:image" content="<?= e($socialImage) ?>">
        <link rel="canonical" href="<?= e($siteUrl) ?>">
    <?php endif; ?>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($site_config['titulo_seo']) ?>">
    <meta name="twitter:description" content="<?= e($site_config['descricao_seo']) ?>">

    <script type="application/ld+json">
        <?= json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CZS88LNDE4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-CZS88LNDE4');
    </script>

    <link rel="icon" type="image/png" href="<?= e($site_config['favicon']) ?>">
    <link rel="stylesheet" href="style/css/style.css">

    <?php require __DIR__ . '/include/cdns.php'; ?>
</head>
<body>
    <header>
        <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Navegação principal">
            <div class="container">
                <a class="navbar-brand" href="#inicio" aria-label="Black Conteúdo Criativo — início">
                    <img src="img/logo-nav.png" alt="Black Conteúdo Criativo" width="125" height="auto">
                </a>

                <button
                    class="navbar-toggler d-lg-none text-white border-white"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarContent"
                    aria-controls="navbarContent"
                    aria-expanded="false"
                    aria-label="Abrir menu"
                >
                    <span class="navbar-menu-icon" aria-hidden="true">☰</span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#sobre-nos">Sobre nós</a></li>
                        <li class="nav-item"><a class="nav-link" href="#clientes">Clientes</a></li>
                        <li class="nav-item"><a class="nav-link" href="#depoimentos">Depoimentos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#metricas">Métricas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#planos">Planos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#fale-conosco">Fale conosco</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="inicio" class="hero position-relative" aria-labelledby="titulo-principal">
            <div id="particles-js" class="position-absolute w-100 h-100 top-0 start-0" aria-hidden="true"></div>
            <div class="container-fluid position-relative">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-lg-4 col-xl-5 d-flex align-items-center justify-content-center flex-column">
                        <h1 id="titulo-principal" class="visually-hidden">
                            Black Conteúdo Criativo — Marketing Digital e Social Media
                        </h1>
                        <img
                            src="img/Black-Logo.png"
                            class="hero-logo img-fluid"
                            alt="Black Conteúdo Criativo"
                            width="560"
                            height="560"
                        >
                    </div>
                </div>
            </div>
            <a class="scroll-down-arrow" href="#sobre-nos" aria-label="Conheça a Black">
                <i class="bi bi-chevron-double-down" aria-hidden="true"></i>
            </a>
        </section>

        <section id="sobre-nos" class="about">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-5 d-flex flex-column text-center justify-content-center">
                        <p class="titulo-empresa mb-0">Black é</p>
                        <span id="typewriter" class="typewriter-text" aria-live="polite"></span>
                        <p class="mt-3 text-empresa">
                            A Black é mais que uma agência de marketing, é uma experiência estratégica pensada para marcas que querem se destacar de verdade. Unimos criatividade, inovação e propósito para construir conexões autênticas entre marcas e pessoas. Cada projeto é único, porque acreditamos que cada marca tem uma história que merece ser contada com impacto.
                        </p>
                        <div class="d-flex justify-content-center gap-3 mt-4 flex-wrap">
                            <a
                                href="<?= e($contatos['instagram']) ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="btn-custom d-flex align-items-center gap-2"
                            >
                                <i class="bi bi-instagram" aria-hidden="true"></i> Instagram
                            </a>
                            <a
                                href="<?= e($whatsappUrl) ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="btn-custom d-flex align-items-center gap-2"
                            >
                                <i class="bi bi-whatsapp" aria-hidden="true"></i> WhatsApp
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-7 card-zone">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-5 text-center mb-4 mb-lg-0">
                                <img
                                    src="img/foto-perfil.jpeg"
                                    class="rounded-circle mb-3 img-fluid"
                                    alt="Jessica Souza, fundadora da Black"
                                    width="200"
                                    height="200"
                                >
                                <h2 class="h6 mb-0 fw-bold">Jessica Souza</h2>
                                <small class="text-muted">Fundadora e Diretora Criativa</small>
                            </div>
                            <div class="col-12 col-lg-7">
                                <h2 class="h5 fw-bold mb-4 title-dona text-center">A mente por trás da Black</h2>
                                <p class="text-dona mb-3">
                                    Sou Jessica Souza, Social Media e Designer de redes sociais e, desde 2020, trabalho com redes sociais transformando perfis em vitrines estratégicas.
                                </p>
                                <p class="text-dona mb-3">
                                    Já criei mais de 2.500 designs, desenvolvi identidades visuais impactantes e ajudei diversos profissionais a se posicionarem com autenticidade no digital. O resultado? Mais de 500 mil impressões e interações reais nos perfis que gerencio.
                                </p>
                                <p class="text-dona mb-3">
                                    Tudo isso com estratégia, estética e intenção. E hoje, estou aqui para transformar o seu perfil também.
                                </p>
                                <p class="fw-bold text-dona mb-0">Vamos criar algo grande?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="clientes" class="clients py-5" aria-labelledby="titulo-clientes">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-12 d-none d-lg-flex align-items-center">
                        <h2 id="titulo-clientes" class="h4 text-center">
                            Conheça quem confia em meu trabalho! Veja ao lado alguns dos clientes que caminham comigo.
                        </h2>
                    </div>

                    <div class="col-12 col-lg-3">
                        <h2 class="h6 text-center d-lg-none fw-bold">
                            Conheça quem confia em meu trabalho! Veja abaixo alguns dos clientes que caminham comigo.
                        </h2>
                        <div class="highlight-logo-card">
                            <div class="image-container">
                                <img id="highlightLogo" src="" alt="" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h3 id="highlightLogoName" class="h5">Clientes Black</h3>
                                <p id="highlightLogoInstagram">@</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6">
                        <div class="logo-grid">
                            <?php foreach ($logos as $logo): ?>
                                <div class="logo-item">
                                    <a
                                        href="<?= e($logo['url']) ?>"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        aria-label="Conheça <?= e($logo['nome']) ?> no Instagram"
                                    >
                                        <img
                                            src="<?= e($logo['src']) ?>"
                                            alt="Logo <?= e($logo['nome']) ?>"
                                            title="<?= e($logo['nome']) ?>"
                                            data-src="<?= e($logo['src']) ?>"
                                            data-nome="<?= e($logo['nome']) ?>"
                                            data-instagram="<?= e($logo['instagram']) ?>"
                                            loading="lazy"
                                            width="150"
                                            height="150"
                                        >
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="depoimentos" class="testimonials py-5" aria-labelledby="titulo-depoimentos">
            <div class="container">
                <h2 id="titulo-depoimentos" class="h4 fw-bold text-center mb-4">
                    Confira o que dizem nossos clientes
                </h2>

                <div id="carouselDepoimentos" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($depoimentos as $index => $depoimento): ?>
                            <article class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                <div class="row align-items-center">
                                    <div class="col-md-6 text-center mb-md-0 mb-3">
                                        <img
                                            src="<?= e($depoimento['foto']) ?>"
                                            alt="<?= e($depoimento['nome']) ?>"
                                            class="img-fluid rounded shadow"
                                            loading="lazy"
                                        >
                                    </div>
                                    <div class="col-md-6">
                                        <figure>
                                            <blockquote class="blockquote">
                                                <p class="mb-3">“<?= e($depoimento['texto']) ?>”</p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer text-white-50">
                                                <?= e(trim($depoimento['nome'])) ?>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>

                    <button class="carousel-control-prev d-none d-lg-block" type="button" data-bs-target="#carouselDepoimentos" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Depoimento anterior</span>
                    </button>
                    <button class="carousel-control-next d-none d-lg-block" type="button" data-bs-target="#carouselDepoimentos" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo depoimento</span>
                    </button>
                </div>
            </div>
        </section>

        <section id="metricas" class="metrics py-5" aria-labelledby="titulo-metricas">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 id="titulo-metricas" class="h4 fw-bold">Resultados que falam por si!</h2>
                        <p class="mt-3">
                            Nossas estratégias de conteúdo impactaram milhares de pessoas.<br><br>
                            +177 mil visualizações em um único perfil<br>
                            Alcance crescente mesmo com públicos diferentes<br>
                            Conteúdos que geram resultados de verdade, com até 87,9% de aumento no alcance!
                        </p>
                    </div>

                    <?php foreach ($metricas as $index => $grafico): ?>
                        <div class="col-12 col-md-4 mb-4">
                            <img
                                src="<?= e($grafico) ?>"
                                class="img-fluid rounded shadow"
                                data-aos="fade-down"
                                alt="Resultado de desempenho em redes sociais <?= $index + 1 ?>"
                                loading="lazy"
                            >
                        </div>
                    <?php endforeach; ?>

                    <div class="col-12 text-center">
                        <strong>Você também pode ter resultados assim. Vamos conversar?</strong>
                    </div>
                </div>
            </div>
        </section>

        <section id="planos" class="services py-5" aria-labelledby="titulo-planos">
            <div class="container">
                <h2 id="titulo-planos" class="h3 fw-bold text-center mb-4">
                    Escolha a <span class="planos-title-word">estratégia</span> ideal para você
                </h2>

                <div class="row g-4 justify-content-center">
                    <?php foreach ($planos as $plano): ?>
                        <div class="col-md-6 col-lg-4">
                            <article class="card plano-card h-100 text-white" data-aos="fade-up">
                                <h3 class="card-header bg-dark text-white text-uppercase fw-bold text-center h6">
                                    <?= e($plano['titulo']) ?>
                                </h3>
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <p class="card-text small mb-3"><?= e($plano['descricao']) ?></p>
                                    <ul class="list-unstyled flex-grow-1 mb-3">
                                        <?php foreach ($plano['beneficios'] as $beneficio): ?>
                                            <li class="mb-2 d-flex align-items-start">
                                                <i class="bi bi-check-circle-fill me-2" aria-hidden="true"></i>
                                                <span><?= e($beneficio) ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <a
                                        href="<?= e($whatsappUrl) ?>"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                        class="btn btn-dark mt-auto"
                                    >
                                        Saiba mais
                                    </a>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="fale-conosco" class="contact py-5" aria-labelledby="titulo-contato">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center chamada">
                        <div class="text-white p-4" data-aos="fade-up">
                            <h2 id="titulo-contato" class="h3 mb-3">Está cansado de postar e não ver resultado?</h2>
                            <p>
                                Você até tenta manter seu perfil ativo, mas sente que está falando com as paredes?<br>
                                As artes não conversam com sua identidade, os posts não engajam e o retorno simplesmente… não vem.
                            </p>
                            <p>
                                Se você já percebeu que não dá mais para tratar sua presença digital como improviso, chegou a hora de mudar isso.
                            </p>
                            <p class="fw-semibold">
                                Preencha o formulário e me conte o que você precisa.<br>
                                Eu vou te ajudar a transformar seu perfil em uma <strong>vitrine estratégica, profissional e com resultados reais</strong>.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="card card-form w-100 flex-grow-1" data-aos="fade-up">
                            <form
                                method="post"
                                target="_blank"
                                action="https://formsubmit.co/<?= e($contatos['email']) ?>"
                                class="py-3"
                            >
                                <input type="hidden" name="_subject" value="Novo contato pelo site da Black">
                                <input type="hidden" name="_captcha" value="false">

                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <label for="nome" class="form-label">Nome</label>
                                            <input type="text" name="nome" id="nome" class="form-control" autocomplete="name" required>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label for="telefone" class="form-label">Telefone</label>
                                            <input type="tel" name="telefone" id="telefone" class="form-control" autocomplete="tel" required>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input type="email" name="email" id="email" class="form-control" autocomplete="email" required>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label for="mensagem" class="form-label">Mensagem</label>
                                            <textarea name="mensagem" id="mensagem" class="form-control" rows="5" required></textarea>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Enviar mensagem</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer">
        <div class="container">
            <p class="copyright text-center mb-0 py-2">
                &copy; <?= date('Y') ?> Black Conteúdo Criativo
            </p>
        </div>
    </footer>

    <?php require __DIR__ . '/include/scripts.php'; ?>
</body>
</html>
