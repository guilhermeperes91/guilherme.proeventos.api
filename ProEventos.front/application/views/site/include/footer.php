<section id="social">
    <div class="container">
        <?php if ($configs['facebook']) : ?>
            <a href="<?= $configs['facebook'] ?>" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 41.58 76.9"><defs><style>.cls-1 {fill: none;}.cls-2 {clip-path: url(#clip-path);}.cls-3 {fill: #fff;}</style><clipPath id="clip-path" transform="translate(-226.66 -357.02)"><rect class="cls-1" x="226" y="357.12" width="42.76" height="77.76" /></clipPath></defs><g class="cls-2"><path class="cls-3" d="M266.67,357h-10c-11.2,0-18.44,7.43-18.44,18.92v8.73h-10a1.57,1.57,0,0,0-1.57,1.57v12.64a1.57,1.57,0,0,0,1.57,1.57h10v31.9a1.57,1.57,0,0,0,1.57,1.57h13.08a1.57,1.57,0,0,0,1.57-1.57v-31.9h11.72a1.57,1.57,0,0,0,1.57-1.57V386.24a1.57,1.57,0,0,0-1.57-1.57H254.47v-7.4c0-3.55.85-5.36,5.48-5.36h6.71a1.57,1.57,0,0,0,1.57-1.57V358.61a1.57,1.57,0,0,0-1.57-1.57Zm0,0" transform="translate(-226.66 -357.02)" /></g></svg>
            </a>
        <?php endif; ?>
        <?php if ($configs['instagram']) : ?>
            <a href="<?= $configs['instagram'] ?>" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.6 409.6"><defs><style>.cls-1 {fill: #fff;}</style></defs><path class="cls-1" d="M382.6,191H229A128,128,0,0,0,101,319V472.6a128,128,0,0,0,128,128H382.6a128,128,0,0,0,128-128V319a128,128,0,0,0-128-128Zm89.6,281.6a89.7,89.7,0,0,1-89.6,89.6H229a89.7,89.7,0,0,1-89.6-89.6V319A89.7,89.7,0,0,1,229,229.4H382.6A89.7,89.7,0,0,1,472.2,319Zm0,0" transform="translate(-101 -191)" /><path class="cls-1" d="M305.8,293.4A102.4,102.4,0,1,0,408.2,395.8,102.41,102.41,0,0,0,305.8,293.4Zm0,166.4a64,64,0,1,1,64-64,64.09,64.09,0,0,1-64,64Zm0,0" transform="translate(-101 -191)" /><path class="cls-1" d="M429.52,285.72a13.64,13.64,0,1,1-13.64-13.64,13.64,13.64,0,0,1,13.64,13.64Zm0,0" transform="translate(-101 -191)" /></svg>
            </a>
        <?php endif; ?>
        <?php if ($configs['linkedin']) : ?>
            <a href="<?= $configs['linkedin'] ?>" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 344.09 328.81"><defs><style>.cls-1 {fill: #fff;}</style></defs><path class="cls-1" d="M477.09,434.59V561.81H403.34V443.11c0-29.82-10.67-50.16-37.36-50.16-20.38,0-32.5,13.71-37.84,27-1.95,4.74-2.45,11.34-2.45,18v123.9H251.92s1-201,0-221.86h73.77v31.45c-.15.23-.34.49-.48.72h.48v-.72c9.8-15.09,27.3-36.66,66.48-36.66,48.54,0,84.93,31.71,84.93,99.86ZM174.75,233C149.51,233,133,249.55,133,271.32c0,21.3,16,38.36,40.77,38.36h.5c25.73,0,41.73-17.05,41.73-38.36C215.5,249.55,200,233,174.75,233ZM137.38,561.81h73.75V339.95H137.38Zm0,0" transform="translate(-133 -233)" /></svg>
            </a>
        <?php endif; ?>
        <?php if ($configs['youtube']) : ?>
            <a href="<?= $configs['youtube'] ?>" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.6 281.6"><defs><style>.cls-1 {fill: #fff;}</style></defs><path class="cls-1" d="M493.19,282.14c-11.11-19.77-23.17-23.4-47.72-24.78-24.52-1.66-86.2-2.36-139.62-2.36s-115.23.69-139.73,2.33c-24.5,1.41-36.58,5-47.79,24.81C106.89,301.88,101,335.87,101,395.72v.21c0,59.59,5.89,93.85,17.33,113.38,11.21,19.76,23.27,23.35,47.77,25,24.52,1.43,86.22,2.28,139.75,2.28s115.1-.85,139.65-2.25c24.55-1.66,36.61-5.25,47.72-25C504.76,489.81,510.6,455.55,510.6,396v-.2c0-59.88-5.84-93.88-17.41-113.61ZM254.6,472.6V319l128,76.8Zm0,0" transform="translate(-101 -255)" /></svg>
            </a>
        <?php endif; ?>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col middle">
                <img src="<?= base_url("assets/img/logo_rodape.png?v=2") ?>" class="img-responsive" />
            </div>

            <div class="col">
                <h3>Menu</h3>
                <ul>
                    <?php
                    foreach ($menu as $m) :
                    ?>
                        <?php if ($m['interna'] == 1) : ?>
                            <li><a href="<?= base_url($m['link']) ?>"><?= $m['nome'] ?></a></li>
                        <?php else : ?>
                            <li><a href="<?= $m['link'] ?>" target="_blank"><?= $m['nome'] ?></a></li>
                        <?php endif; ?>
                    <?php
                    endforeach;
                    ?>
                    <li><a href="<?= base_url("politica-de-privacidade") ?>">Política de Privacidade</a></li>
                </ul>
            </div>

            <div class="col">
                <h3>Contato</h3>
                <p>Rua José Sapienza, 340<br/>
                    Jardim São Luiz – Ribeirão Preto/SP<br/>
                    CEP: 14020-450<br/>
                    Whatsapp: (16) 9 9748-0112<br/>
                    atendimentofc@farocapital.com.br
                    Proteção de Dados Pessoais
                    dpo@farocapital.com.br                 
                </p>
            </div>
        </div>

        <div class="row mt-30">
            <p class="rights">Todos os direitos reservados - Faro Urbanizadora</p>

            <a href="https://www.marketingsim.com.br" class="logo-mktsim" target="_blank">
                <img src="<?= base_url("assets/img/mkt-sim.png") ?>" class="center-block" />
            </a>
        </div>
    </div>
</footer>
<?php
$telefone = $configs['telefone_comercial'];
if (isset($imovel) && $imovel['telefone']) {
    $telefone = $imovel['telefone'];
}

$whatsapp = $configs['whatsapp_comercial'];
if (isset($imovel) && $imovel['whatsapp']) {
    $whatsapp = $imovel['whatsapp'];
}

$mensagem = "Olá, gostaria de saber mais sobre a Faro Urbanizadora";
$mensagem_whats =" Olá, como podemos te ajudar?";

$texto_contato = "Atendimento por<br/><b>E-mail</b>";
if (isset($imovel)) {
    $mensagem = "Olá, gostaria de saber mais sobre o " . $imovel['nome'];
    if ($imovel['id'] == 10) {
        $texto_contato = "Para mais informações<br/><b>Cadastre-se</b>";
    }
}

$codigo_suahouse = "";
if (isset($imovel)) {
    if ($imovel['codigo_suahouse']) {
        $codigo_suahouse = $imovel['codigo_suahouse'];
    }
    $machineCode = $imovel['machineCode'];
    $sequenceCode = $imovel['sequenceCode'];
    $action = "imovel";
} else {
    $machineCode = $configs['machineCode'];
    $sequenceCode = $configs['sequenceCode'];
    $action = "contato";
}
?>
<!-- Modal -->
<div class="modal fade" id="modalContato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastre-se</h4>
            </div>
            <form class="form-ajax" data-action="<?= $action ?>">
                <div class="modal-body">
                    <input type="hidden" name="machineCode" value="<?= $machineCode ?>" />
                    <input type="hidden" name="sequenceCode" value="<?= $sequenceCode ?>" />
                    <?php if (isset($imovel)) : ?>
                        <input type="hidden" name="produto" value="<?= $imovel['nome'] ?>" />
                    <?php endif; ?>
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
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>

        </div>
    </div>
</div>
<div id="barra-fixa">
    <div class="container">
        <div class="row hidden-xs hidden-sm">
            <div class="cols col-tel">
                <a href="tel:<?= onlyNumbers($telefone) ?>" target="_blank">
                    <span>
                        Ligue agora<br />
                        <b><?= $telefone ?></b>
                    </span>
                </a>
            </div>
            <div class="cols col-chat">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#modalContato">
                    <span>
                        Atendimento<br />
                        <b>Online</b>
                    </span>
                </a>
            </div>
            <div class="cols col-email">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#modalContato">
                    <span><?= $texto_contato ?></span>
                </a>
            </div>
            <div class="cols col-whats">
                <a href="https://api.whatsapp.com/send?phone=55<?= onlyNumbers($whatsapp) ?>&text=<?= $mensagem ?>" target="_blank">
                    <span class="no-border">
                        Atendimento WhatsApp<br />
                        <b><?= $whatsapp ?></b>
                    </span>
                </a>
            </div>
        </div>
        <div class="row visible-xs visible-sm">
            <div class="col-xs-3 cols col-tel">
                <a href="tel:<?= onlyNumbers($telefone) ?>" target="_blank">
                    <span>
                        <img src="<?= base_url("assets/img/barra-tel.png") ?>" class="img-responsive center-block" />
                    </span>
                </a>
            </div>

            <div class="col-xs-3 cols col-email">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#modalContato">
                    <span>
                        <img src="<?= base_url("assets/img/barra-chat.png") ?>" class="img-responsive center-block" />
                    </span>
                </a>
            </div>

            <div class="col-xs-3 cols col-email">
                <a href="javascript:void(0)" data-toggle="modal" data-target="#modalContato">
                    <span>
                        <img src="<?= base_url("assets/img/barra-email.png") ?>" class="img-responsive center-block" />
                    </span>
                </a>
            </div>

            <div class="col-xs-3 cols col-whats">
                <a href="https://api.whatsapp.com/send?phone=55<?= onlyNumbers($whatsapp) ?>&text=<?= $mensagem ?>" target="_blank">
                    <span>
                        <img src="<?= base_url("assets/img/barra-whats.png") ?>" class="img-responsive center-block" />
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="whatsapp-area">
    <div class="whatsapp-chat">
        <div class="header">
            <div class="whatsapp-close">
                <button type="button" class="btn-whatsapp-close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="avatar">
                <img src="<?= base_url("assets/img/wpp.jpg") ?>"/>
            </div>
            <div class="name">
                Faro Urbanizadora
            </div>
        </div>
        <div class="body">
            <div class="msg">
                <div class="name">Faro Urbanizadora</div>
                <div class="text">
                    <p><?=$mensagem_whats?></p>
                </div>
                <div class="time"><?= date("H:i") ?></div>
            </div>
        </div>
        <div class="footer">
            <a class="btn-whatsapp-link" href="https://api.whatsapp.com/send?phone=55<?= onlyNumbers($whatsapp) ?>&text=<?= $mensagem ?>" target="_blank">
                <i class="fa fa-whatsapp"></i> Abrir WhatsApp
            </a>
        </div>
    </div>
    <div class="icon-whatsapp">
        <button type="button" class="btn-whatsapp-open">
            <i class="fa fa-whatsapp"></i>
        </button>
    </div>
</div>

<script>
    var base_url = '<?= base_url() ?>';
</script>
<script src="<?= base_url("assets/js/bootstrap.min.js") ?>"></script>
<script src="<?= base_url("assets/js/owl.carousel.min.js") ?>"></script>
<script src="<?= base_url("assets/js/script.js") ?>"></script>
<script src="<?= base_url("assets/js/cookie.js?v=3") ?>"></script>
<?php if (!empty($js)) : ?>
    <?php
    foreach ($js as $j) :
        $pos = strpos($j, "http");
        if ($pos === false) :
    ?>
            <script type="text/javascript" src="<?= base_url("assets/js/{$j}") ?>"></script>
        <?php
        else :
        ?>
            <script type="text/javascript" src="<?= $j ?>"></script>
    <?php
        endif;
    endforeach;
    ?>
<?php endif; ?>
</body>

</html>