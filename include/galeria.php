<?php
?>

<div class="row">

    <!-- Menu lateral -->
    <div class="col-12 mb-3">
        <!-- Menu horizontal Owl Carousel -->
        <div class="owl-carousel owl-theme" id="cliente-carousel">
            <?php foreach ($clientes as $index => $cliente) { ?>
                <div class="item">
                    <button class="btn btn-outline-primary w-100" onclick="mostrarCliente('<?= $cliente['id'] ?>')">
                        <?= $cliente['nome'] ?>
                    </button>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Conteúdo do cliente -->
    <div class="col-12">
        <?php foreach ($clientes as $index => $cliente) { ?>
            <div id="<?= $cliente['id'] ?>" class="cliente-info <?= $index === 0 ? 'active' : '' ?>">
                <h3><?= $cliente['nome'] ?></h3>
                <p><?= $cliente['descricao'] ?></p>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?= $cliente['img1'] ?>" alt="Foto 1" class="img-thumb img-fluid rounded shadow-sm">
                    </div>
                    <div class="col-md-6">
                        <img src="<?= $cliente['img2'] ?>" alt="Foto 2" class="img-thumb img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>