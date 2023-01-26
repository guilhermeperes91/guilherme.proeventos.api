<?php

$ci = get_instance();

$ci->load->model("config_model", "configs");
$ci->load->model("menu_model", "menu");

$dados['menu'] = $ci->menu->get();
$dados['configs'] = $ci->configs->getByID('1');
$dados['title'] = "404 Página não encontrada | Faro Urbanizadora";
$dados['js'] = array(
    "envio.js"
);
$ci->load->view("site/include/header", $dados);
$ci->load->view("site/include/navbar", $dados);
?><!doctype html>

        <section id="conteudo">
            <div class="container">
                <h3 class="title">404- Página não encontrada!</h3>
                <p class="text-center">Não foi possivel encontrar está página. Você será redirecionado para página inicial.</p>
            </div>
        </section>

<?php

$ci->load->view("site/include/footer", $dados);