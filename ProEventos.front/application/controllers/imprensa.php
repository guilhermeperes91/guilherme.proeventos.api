<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Imprensa extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function edit($tipo) {
        autoriza();

        $this->load->model("imprensa_model", "imprensa");
        $imprensa = $this->imprensa->getByTipo($tipo);

        $this->load->admin("imprensa/imprensa_edit_view", array(
            "imprensa" => $imprensa
        ));
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function up() {
        autoriza();

        $path = './assets/upload';
        $this->upload->initialize(array('upload_path' => $path, 'allowed_types' => 'gif|jpg|png|jpeg', 'max_size' => '0', 'max_width' => '0', 'max_height' => '0', 'encrypt_name' => true));

        $this->load->model("imprensa_model", "imprensa");
        $dados = array(
            "id" => $this->input->post("id"),
            "titulo" => $this->input->post("titulo"),
            "texto" => $this->input->post("texto")
        );

        if ($this->upload->do_upload('banner')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['banner'] = $data["upload_data"]["file_name"];
        }

        $this->imprensa->up($dados);
        
        redirect("imprensa/edit/{$this->input->post("tipo")}");
        
    }

}
