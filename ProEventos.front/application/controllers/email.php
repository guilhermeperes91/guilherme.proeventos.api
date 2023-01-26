<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function index() {
        autoriza();

        $this->load->model("email_model", "email");
        $email = $this->email->get();

        $this->load->template("email_view", array("email" => $email));
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function ver($id) {
        autoriza();

        $this->load->model("email_model", "email");
        $array = $this->email->getByID($id);

        $msg = getTemplate('modelo_contato.tpl', $array);
        echo $msg;
    }

}
