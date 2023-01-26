<?php if ($banners) : ?>
    <section id="banner">
        <div id="banner-home-topo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                $i = 0;
                foreach ($banners as $h) :
                ?>
                    <li data-target="#banner-home-topo" data-slide-to="<?= $i ?>" class="<?php if ($i == 0) : ?>active<?php endif; ?>"></li>
                <?php
                    $i++;
                endforeach;
                ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $i = 1;
                foreach ($banners as $h) :
                ?>
                    <div class="item <?php if ($i == 1) : ?>active<?php endif; ?>">
                        <?php if ($h['banner']) : ?>
                            <a href="<?= $h['link'] ?>">
                                <img src="<?= $h['banner'] ?>" class="banner-img hidden-xs hidden-sm" />
                            </a>
                        <?php endif; ?>
                        <?php if (isset($h['banner_mobile'])) : ?>
                            <a href="<?= $h['link'] ?>">
                                <img src="<?= $h['banner_mobile'] ?>" class="visible-xs visible-sm" />
                            </a>
                        <?php endif; ?>
                        <?php if ($h['texto']) : ?>
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="quadro">
                                        <?= $h['texto'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php
                    $i++;
                endforeach;
                ?>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#banner-home-topo" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#banner-home-topo" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>

    </section>
<?php endif; ?>
<section id="imoveis-construcao" class="grid-empreendimentos">
    <div class="container">
        <div class="title-4">
            <div class="title-content">
                <h3>Empreendimentos em destaque</h3>
                <span>
                    <i></i>
                    <a href="<?= base_url("imoveis") ?>">quero ver todos</a>
                </span>
            </div>
        </div>

        <div class="">
            <div class="owl-carousel owl-theme">
                <?php
                foreach ($imovels as $c) :
                    $preco = $c['preco'] == "*" || empty($c['preco']) ? "Consulte" : "R$ " . $c['preco'];
                ?>
                    <div class="item">
                        <div class="empreendimento">
                            <div class="head">
                                <?php
                                $link = base_url("imovel/{$c['id']}/" . getProdutoLink($c));
                                if ($c['url']) {
                                    $link = base_url($c['url']);
                                }
                                ?>
                                <a href="<?= $link ?>">
                                    <?php if ($c['img_destaque']) : ?>
                                        <img src="<?= base_url("assets/upload/thumb_264x286/{$c['img_destaque']}") ?>" />
                                    <?php else : ?>
                                        <img src="<?= base_url("assets/img/emp-default.png") ?>" />
                                    <?php endif; ?>

                                    <?php if($c['vendido']):?>
                                        <span class="vendido">100% vendido</span>
                                    <?php endif; ?>

                                    <div class="status">
                                        <span style="color:<?= $c['fases_cor'] ?>;background:<?= $c['fases_background']?>"><?= $c['fases'] ?></span>
                                    </div>
                                </a>


                            </div>
                            <div class="body">
                                
                                <p class="cidade"><?= $c['cidade'] ?></p>
                                <?php if ($c['nome']) : ?>
                                    <a href="<?= $link ?>" class="nome"><?= $c['nome'] ?></a>
                                <?php endif; ?>
                                <p class="tipo"><?= $c['tipo'] ?></p>
               
                                <?php if ($c['dormitorio']) : ?>
                                    <p class="dorm"><?= $c['dormitorio'] ?></p>
                                <?php endif; ?>
                                <?php if ($c['area']) : ?>
                                    <p class="area"><?= $c['area'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="banner">
    <a href="http://7c3d145.contato.site/guiaaquisicao" target="_blank">
        <img src="<?= base_url("assets/img/banner1home.jpg?v=3")?>" class="banner-img hidden-xs hidden-sm"/>
        <img src="<?= base_url("assets/img/banner1home-mobile.jpg?v=3")?>" class="visible-xs visible-sm"/>
    </a>
</section>

<section id="blog" class="home">
    <div class="container">
        <div class="row row-flex">
            <div class="col-xs-12 col-md-12">
                <div class="title-4">
                    <div class="title-content">
                        <h3>Últimas notícias</h3>
                        <span>
                            <i></i>
                            <a href="<?= base_url("blog") ?>">quero ver todos</a>
                        </span>
                    </div>
                </div>
                <div class="row news news-home">
                    <?php foreach ($noticias as $n) : ?>
                        <div class="col-xs-12 col-md-4">
                            <a href="<?= base_url("noticia/{$n['id']}/" . getLink($n['titulo'])) ?>" class="img-capa">
                                <img src="<?= base_url("assets/upload/thumb_265x236/{$n['img_destaque']}") ?>" class="img-responsive" />
                            </a>
                            <h3>
                                <a href="<?= base_url("noticia/{$n['id']}/" . getLink($n['titulo'])) ?>"><?= $n['titulo'] ?></a>
                            </h3>
                            <a href="<?= base_url("noticia/{$n['id']}/" . getLink($n['titulo'])) ?>" class="link-saiba-mais">continue lendo...</a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="banner">
    <a href="<?= base_url("institucional")?>">
        <img src="<?= base_url("assets/img/banner2home.jpg?v=2")?>" class="banner-img hidden-xs hidden-sm"/>
        <img src="<?= base_url("assets/img/banner2home-mobile.jpg")?>" class="visible-xs visible-sm"/>
    </a>
</section>

<div class="modal fade" id="video-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=<?= $configs['playlist'] ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>