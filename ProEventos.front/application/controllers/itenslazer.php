<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Itenslazer extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function index() {
        autoriza();

        $this->load->model("itenslazer_model", "itens");
        $itens = $this->itens->get();

        $this->load->admin("imoveis/itenslazer_view", array(
            "itens" => $itens
        ));
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function set() {
        autoriza();

        $path = './assets/upload';
        $this->upload->initialize(array('upload_path' => $path, 'allowed_types' => 'gif|jpg|png|jpeg', 'max_size' => '0', 'max_width' => '0', 'max_height' => '0', 'encrypt_name' => true));

        $dados = array(
            "nome" => $this->input->post("nome"),
            "img" => ""
        );

        if ($this->upload->do_upload('img')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['img'] = $data["upload_data"]["file_name"];
        }

        $this->load->model("itenslazer_model", "itens");
        $this->itens->set($dados);
        redirect("itenslazer");
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function up($id) {
        autoriza();

        $path = './assets/upload';

        $this->upload->initialize(array('upload_path' => $path, 'allowed_types' => 'gif|jpg|png|jpeg', 'max_size' => '0', 'max_width' => '0', 'max_height' => '0', 'encrypt_name' => true));

        $dados = array(
            "id" => $id,
            "nome" => $this->input->post("nome")
        );

        if ($this->upload->do_upload('img')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['img'] = $data["upload_data"]["file_name"];
        }

        $this->load->model("itenslazer_model", "itens");
        $this->itens->up($dados);
        redirect("itenslazer");
    }

    /* ----------------------------------------------- *
     * 
     * 
     * ----------------------------------------------- */

    public function get($id) {
        autoriza();
        $this->load->model("itenslazer_model", "itens");

        $get = $this->itens->getByID($id);
        if ($get) {
            echo json_encode(array(
                "success" => true,
                "item" => $get
            ));
        } else {
            echo json_encode(array(
                "success" => true
            ));
        }
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function del($id) {
        autoriza();

        $this->load->model("itenslazer_model", "itens");
        $this->itens->del($id);

        redirect("itenslazer");
    }

}
