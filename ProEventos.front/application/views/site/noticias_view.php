<section id="banner-produto">
    <img src="<?= base_url("assets/img/banner_noticias.png?v=2") ?>" class="hidden-xs hidden-sm" />
    <img src="<?= base_url("assets/img/banner_noticias_mobile.png") ?>" class="visible-xs visible-sm"/>
</section>
<div class="m-t-100"></div>
<section id="blog" class="min-100">
    <div class="container">
        <div class="title-4">
            <div class="title-content">
                <h3>Últimas notícias</h3>
                <span>
                    <i></i>
                </span>
            </div>
        </div>
        <div class="row news news-home">
            <?php foreach ($noticias as $n): ?>
                <div class="col-xs-12 col-md-4">
                    <a href="<?= base_url("noticia/{$n['id']}/" . getLink($n['titulo'])) ?>">
                        <img src="<?= base_url("assets/upload/thumb_265x236/{$n['img_destaque']}") ?>" class="img-responsive"/>
                    </a>
                    <h3>
                        <a href="<?= base_url("noticia/{$n['id']}/" . getLink($n['titulo'])) ?>"><?= $n['titulo'] ?></a>
                    </h3>
                    <a href="<?= base_url("noticia/{$n['id']}/" . getLink($n['titulo'])) ?>" class="link-saiba-mais">Saiba mais</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
