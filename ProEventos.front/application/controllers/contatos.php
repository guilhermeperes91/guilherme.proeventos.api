<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contatos extends CI_Controller {

   public function __construct() {
        parent::__construct();
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function index() {
        autoriza();

         $this->load->model("contato_enviar_model", "contato");
        $email = $this->contato->get();

        $this->load->admin("email_view", array("email" => $email));
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function ver($id) {
        autoriza();

        $this->load->model("contato_imovel_model", "contato");
        $array = $this->contato->getByID($id);

        $msg = getTemplate('./assets/modelo_contato.tpl', $array);
        echo $msg;
    }

}
