<section id="conteudo">
    <div class="container">
        <div class="texto m-t-35">
            <h3 class="title"><?= $noticia['titulo'] ?></h3>
            <img src="<?= base_url("assets/upload/{$noticia['img_destaque']}") ?>" class="img-responsive center-block"/>


            <?= $noticia['texto'] ?>
        </div>
    </div>
</section>