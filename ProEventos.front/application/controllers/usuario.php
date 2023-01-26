<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();

        date_default_timezone_set("America/Sao_Paulo");

        $this->load->model('user_model');
        $this->model = $this->user_model;
    }

    /* -----------------------------------------------*
     *
     * 
     * ------------------------------------------------ */

    public function login() {

        if (!isLogado()) {
            $this->load->view('admin/login_view');
        } else {
            redirect("admin");
        }
    }

    /* -----------------------------------------------*
     *
     * 
     * ------------------------------------------------ */

    public function sair() {
        $this->session->unset_userdata("usuario_logado");
        redirect('login');
    }

    /* -----------------------------------------------*
     *
     * 
     * ------------------------------------------------ */

    public function autenticar() {

        $login = $this->input->post("login");
        $senha = md5($this->input->post("senha"));

        $usuario = $this->model->getLoginSenha($login, $senha);

        if ($usuario) {
            $this->session->set_userdata("usuario_logado", $usuario);
            redirect("admin");
        }
        
        redirect("login");
    }

}
