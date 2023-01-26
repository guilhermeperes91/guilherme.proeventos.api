<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Enviar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
    }

    public function contato_imovel() {
        $campos = $this->input->post();
        $email = $this->input->post("email");

        $dados = array();
        foreach ($campos as $k => $v) {
            if ($k != "id" && $k != "pid" && $k != "list_id" && $k != "provider" && $k != "source") {
                $dados[] = "<b>{$k}</b> : {$v}";
            }
        }

        $this->load->library("leadlovers");

        $retorno = $this->leadlovers->insertLead($_POST, "249620", "643604");

        $msg = getTemplate('./assets/modelo_contato.tpl', array("dados" => $dados));
        $dados = json_encode($dados);
        @$send = sendEmail("Contato vindo através do site", $msg, $email, array("murillofaga@gmail.com"));

        $this->load->model("contato_imovel_model", "contato");

        $envio = $this->contato->set(array(
            "campos" => $dados
        ));

        if ($envio) {
            echo json_encode(array(
                "success" => true
            ));
        } else {
            echo json_encode(array(
                "success" => false
            ));
        }
    }

    public function contato_enviar() {
        $campos = $this->input->post();
        $email = $this->input->post("email");

        $dados = array();
        foreach ($campos as $k => $v) {
            if ($k != "id" && $k != "pid" && $k != "list_id" && $k != "provider" && $k != "source") {
                $dados[] = "<b>{$k}</b> : {$v}";
            }
        }


        $msg = getTemplate('./assets/modelo_contato.tpl', array("dados" => $dados));
        $dados = json_encode($dados);
        //$send = sendEmailContato("Contato vindo através do site Fama Empreendimentos", $msg, $email);

        $this->load->model("contato_enviar_model", "contato");

        $envio = $this->contato->set(array(
            "campos" => $dados
        ));

        if ($envio) {
            echo json_encode(array(
                "success" => true
            ));
        } else {
            echo json_encode(array(
                "success" => false
            ));
        }
    }

}
