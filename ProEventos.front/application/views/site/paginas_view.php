<section id="banner-paginas">
    <img src="<?= base_url("assets/upload/{$pagina['banner']}") ?>"/>
</section>
<section class="conteudo-paginas">
    <div class="container">
        <div class="title-4">
            <div class="title-content">
                <h3><?= $pagina['titulo'] ?></h3>
                <span>
                    <i></i>
                </span>
            </div>
        </div>
        
        <div class="texto">
            <?= $pagina['texto'] ?>
        </div>
    </div>
</section>