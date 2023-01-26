<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Loader extends CI_Loader {

    public function site($nome, $dados = array()) {

        $ci = get_instance();

        $ci->load->model("config_model", "configs");
        $ci->load->model("menu_model", "menu");
        $ci->load->model("imovel_model", "imovel");

        $dados['menu'] = $ci->menu->get();
        $dados['configs'] = $ci->configs->getByID('1');
        $dados['imoveis'] = $ci->imovel->get();

        $this->view("site/include/header", $dados);
        $this->view("site/include/navbar", $dados);
        $this->view("site/" . $nome, $dados);
        $this->view("site/include/footer", $dados);
    }

    public function admin($nome, $dados = array()) {

        $ci = get_instance();

        $dados['user'] = userDados();

        $this->view("admin/include/header", $dados);
        $this->view("admin/include/navbar", $dados);
        $this->view("admin/" . $nome, $dados);
        $this->view("admin/include/footer", $dados);
    }

}
