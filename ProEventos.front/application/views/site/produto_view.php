<section id="banner-produto">
    <a href="javascript:void(0)" class="galeria-imagem">
        <?php if ($imovel['banner']): ?>
            <img src="<?= base_url("assets/upload/{$imovel['banner']}") ?>" class="hidden-xs hidden-sm">
        <?php else: ?>
            <img src="<?= base_url("assets/img/pic-cat3.jpg") ?>" class="hidden-xs hidden-sm">
        <?php endif; ?>
        <?php if ($imovel['banner_mobile']): ?>
            <img src="<?= base_url("assets/upload/{$imovel['banner_mobile']}") ?>" class="visible-xs visible-sm">
        <?php endif; ?>
    </a>
    <div id="infos" class="hidden-sm hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <p class="nome"><?= $imovel['nome'] ?></p>
                </div>

                <div class="col-xs-12 col-md-3 pl-0">
                    <div class="localiza">
                        <p class="cidade"><?= $imovel['cidade'] ?></p>
                        <p class="bairro"><?= $imovel['bairro'] ?></p>
                    </div>
                </div>

                <div class="col-xs-12 col-md-3 pl-0 flex-c-sb">
                    <?php if ($imovel['dormitorio']): ?>
                        <p class="dorms"><?= $imovel['dormitorio'] ?></p>
                    <?php endif; ?>
                    <?php if ($imovel['area']): ?>
                        <p class="area"><?= $imovel['area'] ?></p>
                    <?php endif; ?>
                </div>

                <?php if($imovel['preco']):?>
                    <?php $preco = $imovel['preco'] == "*" || empty($imovel['preco']) ? "Consulte" : "R$ " . $imovel['preco']; ?>
                    <div class="col-xs-12 col-md-3">
                        <p class="preco">
                            
                            <?php if ($imovel['vendido'] == 0): ?>
                                <span>a partir de</span><br/>
                                <strong><?= $preco ?>*</strong>
                            <?php else: ?>
                                <strong class="vendido">100% Vendido</strong>
                            <?php endif; ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="barra-mobile" class="visible-xs visible-xs">
    <div class="container">

        <p class="nome"><?= $imovel['nome'] ?></p>

        <p class="cidade"><?= $imovel['cidade'] ?></p>
        <p class="bairro"><?= $imovel['bairro'] ?></p>
        
        <?php if ($imovel['dormitorio']): ?>
            <p class="dorms"><?= $imovel['dormitorio'] ?></p>
        <?php endif; ?>
        <?php if ($imovel['area']): ?>
            <p class="area"><?= $imovel['area'] ?></p>
        <?php endif; ?>

        <?php if($imovel['preco']):?>
            <?php $preco = $imovel['preco'] == "*" || empty($imovel['preco']) ? "Consulte" : "R$ " . $imovel['preco']; ?>
            <p class="preco">
                <span>a partir de</span><br/>
                <?php if ($imovel['vendido'] == 0): ?>
                    <strong><?= $preco ?>*</strong>
                <?php else: ?>
                    <strong class="vendido">100% Vendido</strong>
                <?php endif; ?>
            </p>
        <?php endif; ?>
    </div>
</section>

<section id="descricao">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">

                <div class="title-4 left">
                    <div class="title-content">
                        <h3><?= $imovel['slogan'] ?></h3>
                        <span>
                            <i></i>
                        </span>
                    </div>
                </div>

                <div class="texto">
                    <?= $imovel['sobre'] ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 img-right">
                <img src="<?= base_url("assets/upload/thumb_550x431/{$imovel['img_destaque']}") ?>"/>
            </div>
        </div>
    </div>
</section>
<?php if ($galeria): ?>
    <section id="galeria">
        <div class="container">
            <div class="title-4 left">
                <div class="title-content">
                    <h3>Perspectivas</h3>
                    <span>
                        <i></i>
                    </span>
                </div>
            </div>
            <div id="perspectivas">
                <div class="row">
                    <div class="col-xs-12 col-md-6 col">
                        <?php if(isset($galeria[0])):?>
                            <a href="javascript:void(0)" class="foto">
                                <img src="<?=base_url("assets/upload/thumb_553x359/{$galeria[0]['img']}")?>"/>
                            </a>
                        <?php endif;?>

                    </div>
                    <div class="col-xs-12 col-md-3 col">
                        <?php if(isset($galeria[1])):?>
                            <a href="javascript:void(0)" class="foto">
                                <img src="<?=base_url("assets/upload/thumb_268x171/{$galeria[1]['img']}")?>"/>
                            </a>
                        <?php endif;?>
                        <?php if(isset($galeria[2])):?>
                            <a href="javascript:void(0)" class="foto">
                                <img src="<?=base_url("assets/upload/thumb_268x171/{$galeria[2]['img']}")?>"/>
                            </a>
                        <?php endif;?>
                    </div>
                    <div class="col-xs-12 col-md-3 col">
                        <?php if(isset($galeria[3])):?>
                            <a href="javascript:void(0)" class="foto">
                                <img src="<?=base_url("assets/upload/thumb_268x359/{$galeria[3]['img']}")?>"/>
                            </a>
                        <?php endif;?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col">
                        <?php if(isset($galeria[4])):?>
                            <a href="javascript:void(0)" class="foto">
                                <img src="<?=base_url("assets/upload/thumb_268x171/{$galeria[4]['img']}")?>"/>
                            </a>
                        <?php endif;?>
                    </div>
                    <div class="col-xs-12 col-md-3 col">
                        <?php if(isset($galeria[5])):?>
                            <a href="javascript:void(0)" class="foto">
                                <img src="<?=base_url("assets/upload/thumb_268x171/{$galeria[5]['img']}")?>"/>
                            </a>
                        <?php endif;?>
                    </div>
                    <div class="col-xs-12 col-md-6 col">
                        <?php if(isset($galeria[6])):?>
                            <a href="javascript:void(0)" class="foto">
                                <img src="<?=base_url("assets/upload/thumb_553x171/{$galeria[6]['img']}")?>"/>
                            </a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
        

<?php if ($planta): ?>
    <section id="plantas">
        <div class="container">
            <div class="title-4">
                <div class="title-content">
                    <h3>Plantas</h3>

                    <span>
                        <i></i>
                    </span>
                </div>
            </div>

            <div class="plantas m-t-60 hidden-sm hidden-xs">
                <div id="banner-planta-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php foreach ($planta as $k => $g): ?>
                            <li data-target="#banner-planta-carousel" data-slide-to="<?= $k ?>" class="<?php if ($k == 0): ?>active<?php endif; ?>"></li>
                        <?php endforeach; ?>
                    </ol>

                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($planta as $k => $p): ?>
                            <div class="item <?php if ($k == 0): ?>active<?php endif; ?>">
                                <a href="<?= base_url("assets/upload/{$p['imagem']}") ?>" class="planta">
                                    <img src="<?= base_url("assets/upload/{$p['imagem']}") ?>" alt="Banner" class="center-block img-responsive">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a class="left carousel-control" href="#banner-planta-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#banner-planta-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>


                </div>
            </div>
            <div class="plantas m-t-60 visible-sm visible-xs">
                <div id="banner-plantas" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php foreach ($planta as $k => $g): ?>
                            <li data-target="#banner-plantas" data-slide-to="<?= $k ?>" class="<?php if ($k == 0): ?>active<?php endif; ?>"></li>
                        <?php endforeach; ?>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $i = 0;
                        foreach ($planta as $p):
                            ?>
                            <div class="item <?php if ($i == 0): ?>active<?php endif; ?>">
                                <a href="<?= base_url("assets/upload/{$p['imagem']}") ?>" class="planta">
                                    <img src="<?= base_url("assets/upload/thumb_300x165/{$p['imagem']}") ?>" alt="Banner" class="center-block img-responsive">
                                </a>
                            </div>
                            <?php
                            $i++;
                        endforeach;
                        ?>
                    </div>
                    <a class="left carousel-control" href="#banner-plantas" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#banner-plantas" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>


                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php $itens = json_decode($imovel['itens_lazer']); ?>
<section id="produto-infos">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-7 col-flex-middle">
                <div class="title-4 left">
                    <div class="title-content">
                        <h3>UM PASSEIO PELO <b><?= $imovel['nome']?></b></h3>
                        <span>
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="video">
                    <?= $imovel['video']?>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 col-flex-middle">
                <?php if ($itens): ?>
                    <div class="title-4 right">
                        <div class="title-content">
                            <h3>Tipos de Loteamento</h3>
                            <span>
                                <i></i>
                            </span>
                        </div>
                    </div>
                    <div class="item-list">
                        <?php
                        $itens_array = array();
                        foreach ($itens_lazer as $l) {
                            foreach ($itens as $i) {
                                if ($i == $l['id']) {
                                    array_push($itens_array, $l);
                                }
                            }
                        }
                        ?>
                        <?php if ($itens): ?>
                            <?php foreach ($itens_array as $a): ?>
                                <div class="item">
                                    <img src="<?= base_url("assets/upload/{$a['img']}") ?>"/>
                                    <p><?= $a['nome'] ?></p>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section id="localizacao-area">
    <div class="container">
        <div class="title-4">
            <div class="title-content">
                <h3>Localização</h3>     
                <span>
                    <i></i>
                </span>   
            </div>
        </div>
        
        <p><?= $imovel['localizacao'] ?></p>
    </div>
</section>

<section id="localizacao">
    <div class="localiza">
        <h3 class="title text-left">
            <span>Endereço</span>
        </h3>
        <p class="endereco"><?= $imovel['endereco'] ?></p>
        <ul class="icones">
            <li class="">
                <button type="button" class="btn-map btn-hospital" data-type="hospital">
                    Hospitais
                </button>
            </li>
            <li class="">
                <button type="button" class="btn-map btn-escola" data-type="school">
                    Escolas
                </button>
            </li>
            <li class="">
                <button type="button" class="btn-map btn-farmacia" data-type="pharmacy">
                    Farmácias
                </button>
            </li>
            <li class="">
                <button type="button" class="btn-map btn-lazer" data-type="restaurant,bar,park,shopping_mall">
                    Lazer
                </button>
            </li>
            <li class="">
                <button type="button" class="btn-map btn-mercado" data-type="store">
                    Mercados
                </button>
            </li>           
            <li class="">
                <button type="button" class="btn-map btn-bancos" data-type="bank">
                    Bancos
                </button>
            </li>
        </ul>
    </div>
    <div class="mapa">
        <div id="property-map-new" style="height:550px"></div>
    </div>
</section>



<?php if ($imovel['obra_fundacao'] || $imovel['obra_alvenaria'] || $imovel['obra_instalacoes']|| $imovel['obra_acabamento']): ?>
    <section id="status-obra">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="title-4">
                        <div class="title-content">
                            <h3>Status da obra</h3>
                            <span>
                                <i></i>
                            </span>
                        </div>
                    </div>

                        <ul class="status-construcao">
                            <li>
                                <span class="icon-porcentagem">
                                    <i class="icon icon-estagio" style="height: <?= $imovel['obra_fundacao'] ?>%;"></i>

                                    <i class="icon icon-borda">
                                        <svg id="7327d037-84bb-4bf2-977e-201cee20b1c3" data-name="Camada 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 581.68 528.39"><defs><style>.\33 df332b7-57db-4320-bf1e-95d2273bb742{fill:none;}.\31 4798adb-3148-4fe0-895a-440fc240edf3{clip-path:url(#bbf762a2-619f-4e14-835b-32941e0dc082);}</style><clipPath id="bbf762a2-619f-4e14-835b-32941e0dc082" transform="translate(-15 -132.29)"><rect class="3df332b7-57db-4320-bf1e-95d2273bb742" x="15" y="132" width="582" height="529"/></clipPath></defs><g class="14798adb-3148-4fe0-895a-440fc240edf3"><path d="M530.64,528.59H498.28V510.05h44.44A10.24,10.24,0,0,0,553,499.81V393.93a10.24,10.24,0,0,0-10.24-10.24H519.89V345.3a10.25,10.25,0,0,0-10.24-10.24H498.38V281.81h17a10.24,10.24,0,0,0,10.24-10.24V235.94a10.24,10.24,0,0,0-10.24-10.24H452.61a10.24,10.24,0,0,0-10.24,10.24v99.12H414V302.29a10.25,10.25,0,0,0-10.24-10.24h-42.7L161.2,134.46a10.23,10.23,0,0,0-14,1.33l-47.11,53.76a10.24,10.24,0,0,0,0,14l11.47,11.47L21.12,376v1.85c-.72,2-16.79,51.19,6.25,88.47,11.78,19.86,33.48,32.56,63,36.15a148.14,148.14,0,0,0,19.55,1.33,94.4,94.4,0,0,0,95.33-74.13,10.25,10.25,0,0,0-5.74-11.06l-33.28-15.66a10.23,10.23,0,0,0-11.05,1.54l-13.52,11.67L93,396.5l81.92-118.57,70.45,70.55-14.44,24a10.26,10.26,0,0,0-1.43,5.33V500.63a10.25,10.25,0,0,0,10.24,10.24h44.44v17.71H251.41a66,66,0,1,0,0,132.09H530.64a66,66,0,1,0,0-132.09ZM462.86,246.18h42.39v15.16h-17.1a10.24,10.24,0,0,0-10.24,10.24v63.48H462.86ZM140.31,437.45a10.24,10.24,0,0,0,10.24-1.74l13.11-11.36,19.56,9.21A71.68,71.68,0,0,1,110,483.43,129.39,129.39,0,0,1,93.1,482.3a64.59,64.59,0,0,1-49.36-27c-12.39-19.76-10.24-45.77-7-60.31L73,410.52ZM73.65,388.2,44.57,376l81.92-145.71,33.28,33.07Zm48.12-192.4,34.41-39.22L327.9,291.95h-43a10.23,10.23,0,0,0-8.8,4.92L255.6,330.14ZM358,312.43V396.5H249.46V380.21l41-67.89ZM249.46,489.57V417H368.24a10.24,10.24,0,0,0,10.23-10.24v-94.3h15.05V345.3a10.25,10.25,0,0,0,10.24,10.24h95.64V394a10.24,10.24,0,0,0,10.24,10.24h22.84v85.4ZM477.8,510.05v18.54H303.73V510.05Zm52.83,130.14H251.41a45.57,45.57,0,0,1,0-91.13H530.64a45.57,45.57,0,1,1,0,91.13Zm0,0" transform="translate(-15 -132.29)"/></g><path d="M523.47,565.55a29.08,29.08,0,1,0,29.08,29.08,29.09,29.09,0,0,0-29.08-29.08Zm0,37.58a6.08,6.08,0,1,1,.1.1h-.1Zm0,0" transform="translate(-15 -132.29)"/><path d="M258.47,565.55a29.08,29.08,0,1,0,29.08,29.08,29.09,29.09,0,0,0-29.08-29.08Zm0,37.58a6.08,6.08,0,1,1,.1.1h-.1Zm0,0" transform="translate(-15 -132.29)"/></svg>
                                    </i>
                                </span>
                                <p>Fundação</p>
                            </li>
                            <li>
                                <span class="icon-porcentagem">
                                    <i class="icon icon-estagio" style="height: <?= $imovel['obra_alvenaria'] ?>%;"></i>

                                    <i class="icon icon-borda">
                                        <svg id="ebf20bfd-e5c1-4369-977f-3ee291e54a87" data-name="Camada 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 263.68 365.36"><defs><style>.\34 52cb425-b101-412a-b18a-374072003fce{fill:none;}.e11757ff-042a-4339-9ad8-2841141ebdd5{clip-path:url(#b8193ef8-4e96-4846-a029-b43a79271f65);}</style><clipPath id="b8193ef8-4e96-4846-a029-b43a79271f65" transform="translate(-173.84 -213.64)"><rect class="452cb425-b101-412a-b18a-374072003fce" x="173" y="213" width="264.88" height="366.96"/></clipPath></defs><title>002-wall</title><g class="e11757ff-042a-4339-9ad8-2841141ebdd5"><path d="M388.88,476.6v-1.28h34.56a14.21,14.21,0,0,0,14.08-14.08V424.76a14.21,14.21,0,0,0-14.08-14.08H388.88V372.92a14.21,14.21,0,0,0-14.08-14.08H289c-3.2,0-5.76.64-7.68,2.56-2.56-1.28-5.12-2.56-7.68-2.56H187.92a14.21,14.21,0,0,0-14.08,14.08V409.4a14.21,14.21,0,0,0,14.08,14.08h34.56v39H187.92a14.21,14.21,0,0,0-14.08,14.08v36.48a14.21,14.21,0,0,0,14.08,14.08h34.56v37.76A14.21,14.21,0,0,0,236.56,579h85.76c3.2,0,5.76-.64,7.68-2.56,2.56,1.28,5.12,2.56,7.68,2.56h85.76a14.2,14.2,0,0,0,14.08-14.08V528.44a14.21,14.21,0,0,0-14.08-14.08H388.88ZM289,371H374.8a1.38,1.38,0,0,1,1.28,1.28v36.48A1.38,1.38,0,0,1,374.8,410H289.68a1.38,1.38,0,0,1-1.28-1.28V372.28c-.64-.64,0-1.28.64-1.28Zm0,53.12h32.64A1.38,1.38,0,0,1,323,425.4v36.48a1.38,1.38,0,0,1-1.28,1.28H236.56a1.38,1.38,0,0,1-1.28-1.28V425.4a1.38,1.38,0,0,1,1.28-1.28ZM187.92,410.68a1.38,1.38,0,0,1-1.28-1.28V372.92a1.38,1.38,0,0,1,1.28-1.28h85.76a1.38,1.38,0,0,1,1.28,1.28V409.4a1.38,1.38,0,0,1-1.28,1.28Zm0,105a1.38,1.38,0,0,1-1.28-1.28V477.88a1.37,1.37,0,0,1,1.28-1.28h85.76a1.37,1.37,0,0,1,1.28,1.28v36.48a1.38,1.38,0,0,1-1.28,1.28Zm134.4,52.48H236.56a1.38,1.38,0,0,1-1.28-1.28V530.36a1.38,1.38,0,0,1,1.28-1.28h85.12a1.38,1.38,0,0,1,1.28,1.28v36.48c.64.64,0,1.28-.64,1.28Zm0-53.12H289.68a1.38,1.38,0,0,1-1.28-1.28V477.24a1.38,1.38,0,0,1,1.28-1.28H374.8a1.38,1.38,0,0,1,1.28,1.28v36.48A1.38,1.38,0,0,1,374.8,515Zm101.12,13.44a1.37,1.37,0,0,1,1.28,1.28V566.2a1.38,1.38,0,0,1-1.28,1.28H337.68a1.38,1.38,0,0,1-1.28-1.28V529.72a1.37,1.37,0,0,1,1.28-1.28ZM374.8,463.16H337.68a1.38,1.38,0,0,1-1.28-1.28V425.4a1.38,1.38,0,0,1,1.28-1.28h85.76a1.38,1.38,0,0,1,1.28,1.28v36.48a1.38,1.38,0,0,1-1.28,1.28Zm0,0" transform="translate(-173.84 -213.64)"/><path d="M313.36,340.28l-19.2-73.6a7.73,7.73,0,0,0-4.48-4.48,6.49,6.49,0,0,0-6.4,1.92l-16,15.36V268.6a5.82,5.82,0,0,0-2.56-5.12l-7-5.76a14.72,14.72,0,0,0-3.2-16.64L228.24,217.4c-5.76-5.12-14.72-5.12-19.84.64l-1.28,1.28c-5.12,5.76-5.12,14.72.64,19.84L234,262.84a13,13,0,0,0,9.6,3.84h.64c1.28,0,2.56-.64,3.84-.64l6.4,5.12v20.48L230.16,316c-1.92,1.28-2.56,3.84-1.92,6.4a5.44,5.44,0,0,0,4.48,4.48L305,348.6H307a5.81,5.81,0,0,0,4.48-1.92,6.14,6.14,0,0,0,1.92-6.4ZM245.52,252.6l-1.28,1.28a1.6,1.6,0,0,1-2.56,0l-25.6-23.68a1.2,1.2,0,0,1,0-1.92l1.28-1.28a1.2,1.2,0,0,1,1.92,0l26.24,23.68a1.21,1.21,0,0,1,0,1.92Zm1.28,64.64,14.08-14.08L274.32,316a6.19,6.19,0,0,0,9,0,6.19,6.19,0,0,0,0-9l-13.44-12.16,14.08-14.08L298,332.6Zm0,0" transform="translate(-173.84 -213.64)"/></g></svg>
                                    </i>
                                    
                                </span>
                                <p>Alvenaria</p>
                            </li>
                            <li>
                                <span class="icon-porcentagem">
                                    <i class="icon icon-estagio" style="height: <?= $imovel['obra_instalacoes'] ?>%;"></i>

                                    <i class="icon icon-borda">
                                        <svg id="f121647c-1e33-4306-a2f5-27903e1ce516" data-name="Camada 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 294.41 384.54"><defs><style>.f7526a10-4417-4819-a112-01c2fc2fe94c{fill:none;}.da7fc656-7c52-456c-9e12-456af5dc9d71{clip-path:url(#6ed5f46f-2f2f-4e5a-ab4d-ec689ae1f616);}</style><clipPath id="6ed5f46f-2f2f-4e5a-ab4d-ec689ae1f616" transform="translate(-158.07 -204.42)"><rect class="f7526a10-4417-4819-a112-01c2fc2fe94c" x="158" y="204" width="294.84" height="385.92"/></clipPath></defs><title>003-screwdriver</title><g class="da7fc656-7c52-456c-9e12-456af5dc9d71"><path d="M266.87,442.34V339.09a76.34,76.34,0,0,0,9.89-133.64,6.4,6.4,0,0,0-9.89,5.36V265.6l-32,15.94-32-15.94V210.82a6.4,6.4,0,0,0-9.89-5.36,76.34,76.34,0,0,0,9.89,133.64V442.34a76,76,0,0,0-44.8,69.53,76.8,76.8,0,1,0,108.8-69.53Zm27.62,93.1a64,64,0,1,1-82.89-82.9,6.4,6.4,0,0,0,4.08-6V334.85a6.41,6.41,0,0,0-4.08-6,63.53,63.53,0,0,1-21.52-104.8v45.48a6.4,6.4,0,0,0,3.55,5.73L232,294.42a6.41,6.41,0,0,0,5.71,0l38.4-19.13a6.4,6.4,0,0,0,3.55-5.73V224.09a63.53,63.53,0,0,1-21.52,104.8,6.41,6.41,0,0,0-4.08,6V446.59a6.4,6.4,0,0,0,4.08,6,64,64,0,0,1,36.34,82.9Zm0,0" transform="translate(-158.07 -204.42)"/></g><path d="M285.2,508.64l-22.4-38.26a6.41,6.41,0,0,0-5.52-3.2h-44.8a6.4,6.4,0,0,0-5.52,3.2l-22.4,38.26a6.4,6.4,0,0,0,0,6.46L207,553.36a6.39,6.39,0,0,0,5.52,3.17h44.8a6.39,6.39,0,0,0,5.52-3.17l22.4-38.26a6.4,6.4,0,0,0,0-6.46ZM253.6,543.7H216.14l-18.65-31.83L216.14,480l37.46,0,18.65,31.86Zm0,0" transform="translate(-158.07 -204.42)"/><path d="M234.88,333.31a6.4,6.4,0,0,0-6.4,6.4v102a6.4,6.4,0,0,0,12.8,0v-102a6.4,6.4,0,0,0-6.4-6.4Zm0,0" transform="translate(-158.07 -204.42)"/><path d="M452.47,415.62v-19.2a6.4,6.4,0,0,0-6.4-6.4h-19.2V263.53l5.76-11.45a6.41,6.41,0,0,0,.59-3.92l-6.4-38.4a6.4,6.4,0,0,0-6.34-5.34h-25.6a6.4,6.4,0,0,0-6.31,5.34l-6.4,38.4a6.41,6.41,0,0,0,.58,3.92l5.76,11.45V390H369.27a6.4,6.4,0,0,0-6.4,6.4v19.2a7.06,7.06,0,0,0,2.07,4.72,11.35,11.35,0,0,1,3.35,8.08,11.54,11.54,0,0,1-3.55,8.27,6.38,6.38,0,0,0-1.87,4.53v102.4a44.8,44.8,0,1,0,89.6,0V441.22a7,7,0,0,0-2.07-4.72,11.36,11.36,0,0,1-3.35-8.08,11.5,11.5,0,0,1,3.54-8.27,6.39,6.39,0,0,0,1.88-4.53ZM400.3,217.22h14.76l5.16,31-5.47,10.94a6.44,6.44,0,0,0-.67,2.86V390h-12.8V262a6.37,6.37,0,0,0-.64-2.86l-5.5-10.94Zm39.38,195.93a24.31,24.31,0,0,0,0,30.5v100a32,32,0,1,1-64,0V443.68a24.32,24.32,0,0,0,0-30.5V402.82h64Zm0,0" transform="translate(-158.07 -204.42)"/><path d="M394.88,454a6.4,6.4,0,0,0-6.4,6.4v83.2a6.4,6.4,0,1,0,12.8,0v-83.2a6.4,6.4,0,0,0-6.4-6.4Zm0,0" transform="translate(-158.07 -204.42)"/><path d="M420.47,454a6.4,6.4,0,0,0-6.4,6.4v83.2a6.4,6.4,0,1,0,12.8,0v-83.2a6.4,6.4,0,0,0-6.4-6.4Zm0,0" transform="translate(-158.07 -204.42)"/></svg>
                                    </i>
                                </span>
                                <p>Instalações</p>
                            </li>
                            <li>
                                <span class="icon-porcentagem">
                                    <i class="icon icon-estagio" style="height: <?= $imovel['obra_acabamento'] ?>%;"></i>

                                    <i class="icon icon-borda">
                                        <svg id="f76776d4-b1f7-4405-ad6a-2412abc87518" data-name="Camada 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 409.6 399.33"><defs><style>.b94f40c6-6d30-48c6-81b8-19fa3fa2b4cb{fill:none;}.b98b35b6-3c3b-4cd6-9823-88228b77ade9{clip-path:url(#e8df798a-6dbb-4de4-9130-a2efdd72bbab);}</style><clipPath id="e8df798a-6dbb-4de4-9130-a2efdd72bbab" transform="translate(-101 -196.53)"><rect class="b94f40c6-6d30-48c6-81b8-19fa3fa2b4cb" x="101" y="196" width="410" height="401"/></clipPath></defs><title>004-paint-brushes</title><g class="b98b35b6-3c3b-4cd6-9823-88228b77ade9"><path d="M508.25,255.44a8,8,0,1,0,0,11.31,8,8,0,0,0,0-11.31Zm0,0" transform="translate(-101 -196.53)"/><path d="M485.63,210.19a8,8,0,1,0,0,11.31,8,8,0,0,0,0-11.31Zm0,0" transform="translate(-101 -196.53)"/><path d="M429.06,198.88a8,8,0,1,0,0,11.31,8,8,0,0,0,0-11.31Zm0,0" transform="translate(-101 -196.53)"/></g><path d="M149,547.88a8,8,0,1,0,0,11.32,8,8,0,0,0,0-11.32Zm0,0" transform="translate(-101 -196.53)"/><g class="b98b35b6-3c3b-4cd6-9823-88228b77ade9"><path d="M214,481.65a8,8,0,0,0-11.31.14l-42.49,43.54a8,8,0,1,0,11.45,11.17L214.16,493a8,8,0,0,0-.14-11.31Zm0,0" transform="translate(-101 -196.53)"/><path d="M474.31,379.9l-28.21-28.22-.13-.13-33.82-33.82-.12-.12-33.82-33.82-.12-.12-33.83-33.82-.11-.12-28.23-28.23a8,8,0,0,0-11.31,0L214.1,312l-11.33,11.32a40.05,40.05,0,0,0,0,56.57l22.63,22.63a8,8,0,0,1,0,11.31L214.25,425l-96.91,86.8h0c-.82.73-1.57,1.43-2.29,2.15a48,48,0,0,0,67.88,67.88c.73-.73,1.45-1.5,2.21-2.35h0l85.72-97.93L282,470.4a8,8,0,0,1,11.31,0L315.92,493a40,40,0,0,0,56.56,0l11.32-11.31,90.5-90.5a8,8,0,0,0,0-11.31Zm-301.21,189c-.52.59-1,1.11-1.49,1.59a32,32,0,0,1-45.26-45.25c.5-.5,1-1,1.62-1.51l0,0,0,0,91.44-81.89,34.61,34.61Zm188.07-87.2a24,24,0,0,1-33.93,0L304.6,459.09a24,24,0,0,0-33.94,0L265,464.75l-33.94-33.94,5.66-5.66a24,24,0,0,0,0-33.94l-22.63-22.63a24,24,0,0,1,0-33.94l5.66-5.66L366.83,476.06Zm17-17L231.07,317.67l79.19-79.19,17,17L287.64,295a8,8,0,1,0,11.31,11.31l39.6-39.59,22.63,22.63L321.58,329a8,8,0,1,0,11.31,11.32l39.6-39.59,22.62,22.63-39.59,39.59a8,8,0,1,0,11.31,11.31l39.6-39.59,22.63,22.63-39.6,39.59a8,8,0,1,0,11.31,11.31l39.6-39.59,17,17Zm0,0" transform="translate(-101 -196.53)"/><path d="M406.43,221.51a8,8,0,0,0-11.31,0l-22.62,22.62a8,8,0,1,0,11.31,11.32l22.62-22.63a8,8,0,0,0,0-11.32Zm0,0" transform="translate(-101 -196.53)"/><path d="M361.18,198.87a8,8,0,0,0-11.32,0l-11.31,11.31a8,8,0,1,0,11.32,11.32l11.31-11.31a8,8,0,0,0,0-11.32Zm0,0" transform="translate(-101 -196.53)"/></g><path d="M463,232.82a8,8,0,0,0-11.32,0l-45.25,45.26a8,8,0,1,0,11.31,11.31L463,244.14a8,8,0,0,0,0-11.32Zm0,0" transform="translate(-101 -196.53)"/><path d="M485.63,278.08a8,8,0,0,0-11.32,0L440.38,312a8,8,0,1,0,11.31,11.32l33.94-33.93a8,8,0,0,0,0-11.32Zm0,0" transform="translate(-101 -196.53)"/><path d="M496.94,334.64a8,8,0,0,0-11.31,0L474.32,346a8,8,0,0,0,11.31,11.32L496.94,346a8,8,0,0,0,0-11.32Zm0,0" transform="translate(-101 -196.53)"/></svg>
                                    </i>
                                </span>
                                <p>Acabamento</p>
                            </li>


                        </ul>
                </div>
                
            </div>

        </div>
    </section>
<?php endif; ?>

<section id="obairro" style="background-image: url(<?=base_url("assets/upload/{$imovel['bairro_fundo']}")?>)">
    <div class="hover"></div>
    <div class="container">
        <h4>O bairro</h4>
        <p><?= $imovel['bairro_texto'] ?></p>
    </div>
</section>

<section class="imovel_form">
    <div class="container">

        <div class="title-4">
            <div class="title-content">
                <h3>Fale com nossos corretores</h3>
                <span>
                    <i></i>
                </span>
            </div>
        </div>

        <div class="form">
            <form class="form-ajax" data-action="imovel">
                <?php if($imovel['machineCode']):?>
                    <input type="hidden" name="machineCode" value="<?= $imovel['machineCode'] ?>" />
                <?php endif;?>
                <?php if($imovel['sequenceCode']):?>
                    <input type="hidden" name="sequenceCode" value="<?= $imovel['sequenceCode'] ?>" />
                <?php endif;?>
                <input type="hidden" name="produto" value="<?= $imovel['nome'] ?>" />
                <div class="form-group">
                    <input type="text" name="nome" id="form-nome" class="form-control" placeholder="Seu nome" required="required" />
                </div>
                <div class="form-group">
                    <input type="text" name="telefone" id="form-telefone" class="form-control cel" placeholder="WhatsApp" required="required" />
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="form-email" class="form-control" placeholder="E-mail" required="required" />
                </div>
                <div class="form-group">
                    <textarea name="mensagem" id="form-mensagem" class="form-control" placeholder="Mensagem" required="required"></textarea>
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>

<div id="blueimp-gallery" class="blueimp-gallery">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<script>
    var locations = {lat: <?= $imovel['lat'] ? $imovel['lat'] : 0  ?>, lng: <?= $imovel['long'] ? $imovel['long'] : 0 ?>};
    var galeria = <?= json_encode($galeria) ?>;
    var plantas = <?= json_encode($planta) ?>;
    var obras = <?= json_encode($obra) ?>;
    var decorado = <?= json_encode($decorado) ?>;
    var imovel_nome = "<?= $imovel['nome'] ?>";
    var base_url = "<?= base_url() ?>";
</script>