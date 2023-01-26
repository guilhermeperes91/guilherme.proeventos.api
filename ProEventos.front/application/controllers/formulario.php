<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function enviar() {
        $this->load->model("formulario_model", "formulario");

        //prepara os dados
        $formulario = array();
        foreach ($this->input->post("dados") as $dados) {
            $formulario[$dados['name']] = $dados['value'];
        }

        // envia pro lead lovers
        $this->load->library("leadlovers");
        if (isset($formulario['nome'])) {
            $formulario['name'] = $formulario['nome'];
        }
        if (isset($formulario['telefone'])) {
            $formulario['phone'] = $formulario['telefone'];
        }
        
        if(isset($formulario['machineCode']) && isset($formulario['sequenceCode'])){
            $retorno = $this->leadlovers->insertLead($formulario, $formulario['machineCode'], $formulario['sequenceCode']);
            unset($formulario['machineCode']);
            unset($formulario['sequenceCode']);
        }
        unset($formulario['name']);
        unset($formulario['phone']);

        //grava os dados no banco de dados
        $action = $this->input->post("action");
        $this->formulario->setForm($formulario, $action);

        //envia por email
        $form = $this->formulario->getForm($action);
        $email = explode(',', $form['email']);
        $msg = getTemplate('./assets/modelo_contato.tpl', array("dados" => $formulario));
        sendEmail("Contato vindo através do site - " . $action, $msg, $formulario['email'], $email);

        //exibe o resultado na tela
        echo json_encode(array(
            "success" => true,
            "type" => "success",
            "msg" => "A mensagem foi enviada com sucesso!"
        ));
    }

}
