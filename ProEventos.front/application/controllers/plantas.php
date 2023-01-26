<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Plantas extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function index($hash) {
        autoriza();

        $this->load->model("plantas_model", "plantas");
        $plantas = $this->plantas->getByHash($hash);

        $this->load->view("admin/imoveis/plantas_view", array(
            "plantas" => $plantas
        ));
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function upload() {
        autoriza();

        $path = './assets/upload';

        $this->upload->initialize(array(
            'upload_path' => $path,
            'allowed_types' => 'gif|jpg|png|jpeg',
            'max_size' => '0',
            'max_width' => '0',
            'max_height' => '0',
            'encrypt_name' => true
        ));

        for ($i = 0; $i < count($_FILES['files']['size']); $i++) {
            @$_FILES['new_file']['name'] = $_FILES['files']['name'][$i];
            @$_FILES['new_file']['type'] = $_FILES['files']['type'][$i];
            @$_FILES['new_file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            @$_FILES['new_file']['error'] = $_FILES['files']['error'][$i];
            @$_FILES['new_file']['size'] = $_FILES['files']['size'][$i];

            if ($this->upload->do_upload('new_file')) {
                $data = array('upload_data' => $this->upload->data());

                genThumb($path, $data["upload_data"]["file_name"], 300, 165, 'thumb_300x165');
                
                $dados['imagem'] = $data["upload_data"]["file_name"];
                $dados['hash'] = $this->input->post("hash");
                $dados['titulo'] = "";

                $this->load->model("plantas_model", "plantas");
                $this->plantas->set($dados);
            }
        }

        echo json_encode(array(
            "success" => true
        ));
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function del($id) {
        autoriza();

        $this->load->model("plantas_model", "plantas");
        $plantas = $this->plantas->del($id);

        echo json_encode(array(
            "success" => true
        ));
    }

    /* ----------------------------------------------- *
     * 
     * 
     * ----------------------------------------------- */

    public function upTitle() {
        autoriza();
        $this->load->model("plantas_model", "plantas");

        $this->plantas->up(array(
            "id" => $this->input->post("pk"),
            "titulo" => $this->input->post("value"),
        ));

        echo json_encode(array(
            "success" => true
        ));
    }
    
     /* ----------------------------------------------- *
     * 
     * 
     * ----------------------------------------------- */

    public function upOrdem() {
        autoriza();

        $ordem = $this->input->post("newOrder");
        $this->load->model("plantas_model", "plantas");

        foreach ($ordem as $o) {
            $this->plantas->up(array(
                "id" => $o['id'],
                "order" => $o['order']
            ));
        }

        echo json_encode(array(
            "success" => true
        ));
    }

}
