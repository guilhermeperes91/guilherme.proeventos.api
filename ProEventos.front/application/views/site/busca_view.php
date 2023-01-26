<section id="ofertas-semana" class="grid-empreendimentos">
    <div class="container">
        <div class="title-1">
            <h3><span>Resultados</span> da pesquisa</h3>
        </div>

        <div class="row">
            <?php foreach ($imoveis as $c): ?>
                <div class="col-xs-12 col-md-3 busca">
                    <div class="empreendimento">
                        <div class="head">
                            <?php
                            $link = base_url("produto/1024/{$c['id']}/" . getProdutoLink($c));
                            if ($c['url']) {
                                $link = base_url($c['url']);
                            }
                            ?>
                            <a href="<?= $link ?>">
                                <img src="<?= base_url("assets/upload/thumb_279x302/{$c['img_destaque']}") ?>"/>
                            </a>
                            <div class="status">
                                <span style="background:<?= getStatusCor($c['status']) ?>;"><?= getStatus($c['status']) ?></span>
                            </div>
                        </div>
                        <div class="body">
                            <p class="cidade"><?= $c['cidade'] ?></p>
                            <p class="bairro"><?= $c['bairro'] ?></p>
                            <a href="<?= $link ?>" class="nome"><?= $c['nome'] ?></a>

                            <p class="dorm"><?= $c['dormitorio'] ?> Dorms</p>

                            <p class="area"><?= $c['area'] ?> m²</p>

                            <p class="valor">a partir de:<br/>
                                <span><?php if ($c['preco']): ?><?= $c['preco'] ?><?php else: ?>consulte<?php endif; ?></span></p>

                            <a href="javascript:hc_chat('<?= $c['codigo_suahouse'] ?>', '', '', '', '');" class="corretor">
                                Fale agora com um
                                <span>Corretor Online</span>
                            </a>
                        </div>
                    </div>  
                </div>
            <?php endforeach; ?>
        </div>                        

    </div>
</section>
