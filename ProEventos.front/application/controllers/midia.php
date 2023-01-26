<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Midia extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function index() {
        autoriza();

        $this->load->model("midia_model", "midia");

        $this->load->admin("midia/midia_view", array(
            "midias" => $this->midia->get()
        ));
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function add() {
        autoriza();

        $this->load->model("midia_model", "midia");

        $this->load->admin("midia/midia_add_view");
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function edit($id) {
        autoriza();

        $this->load->model("midia_model", "midia");

        $this->load->admin("midia/midia_edit_view", array(
            "midia" => $this->midia->getByID($id)
        ));
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function set() {
        autoriza();

        $this->load->model("midia_model", "midia");

        $path = './assets/upload';
        $this->upload->initialize(array('upload_path' => $path, 'allowed_types' => 'gif|jpg|png|jpeg', 'max_size' => '0', 'max_width' => '0', 'max_height' => '0', 'encrypt_name' => true));

        $dados = array(
            "dia" => $this->input->post("dia"),
            "mes" => $this->input->post("mes"),
            "ano" => $this->input->post("ano"),
            "veiculo" => $this->input->post("veiculo"),
            "titulo" => $this->input->post("titulo"),
            "integral" => $this->input->post("integral"),
            "imagem" => "",
            "legenda" => $this->input->post("legenda"),
            "palavrachave" => $this->input->post("palavrachave"),
        );

        if ($this->upload->do_upload('imagem')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['imagem'] = $data["upload_data"]["file_name"];
        }

        $this->midia->set($dados);

        redirect("admin/midia");
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function up($id) {
        autoriza();

        $this->load->model("midia_model", "midia");

        $path = './assets/upload';
        $this->upload->initialize(array('upload_path' => $path, 'allowed_types' => 'gif|jpg|png|jpeg', 'max_size' => '0', 'max_width' => '0', 'max_height' => '0', 'encrypt_name' => true));

        $dados = array(
            "id" => $id,
            "dia" => $this->input->post("dia"),
            "mes" => $this->input->post("mes"),
            "ano" => $this->input->post("ano"),
            "veiculo" => $this->input->post("veiculo"),
            "titulo" => $this->input->post("titulo"),
            "integral" => $this->input->post("integral"),
            "legenda" => $this->input->post("legenda"),
            "palavrachave" => $this->input->post("palavrachave"),
        );

        if ($this->upload->do_upload('imagem')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['imagem'] = $data["upload_data"]["file_name"];
        }

        $this->midia->up($dados);

        redirect("admin/midia");
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function del($id) {
        autoriza();

        $this->load->model("midia_model", "midia");

        $this->midia->del($id);

        redirect("admin/midia");
    }

}
