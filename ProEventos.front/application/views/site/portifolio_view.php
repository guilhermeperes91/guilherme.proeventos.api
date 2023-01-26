<section id="banner-produto">
    <img src="<?= base_url("assets/img/header-portifolio.jpg") ?>" />
</section>
<div class="m-t-20"></div>
<section  id="imoveis-construcao" class="grid-empreendimentos">
    <div class="container">
        <div class="title-2">
            <h3>Encontre seu imóvel Ideal</h3>
            <span>Qualidade, conforto e muitas opções de plantas pensadas para o seu estilo de vida</span>
        </div>
        <div class="row">
            <?php
            foreach ($portifolio as $c):
                $preco = $c['preco'] == "*" || empty($c['preco']) ? "Consulte" : $c['preco'];
                ?>
                <div class="col-xs-12 col-md-3">

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
                                    <div class="status">
                                        <span style="color:<?= $c['fases_cor'] ?>;background:<?= $c['fases_background']?>"><?= $c['fases'] ?></span>
                                    </div>
                                </a>


                            </div>
                            <div class="body">
                                
                                <p class="cidade"><?= $c['cidade'] ?></p>
                                <?php if ($c['bairro']) : ?>
                                    <a href="<?= $link ?>" class="bairro"><?= $c['bairro'] ?></a>
                                <?php endif; ?>
                                <a href="<?= $link ?>" class="nome"><?= $c['nome'] ?></a>
               
                                <?php if ($c['dormitorio']) : ?>
                                    <p class="dorm"><?= $c['dormitorio'] ?></p>
                                <?php endif; ?>
                                <?php if ($c['area']) : ?>
                                    <p class="area"><?= $c['area'] ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>