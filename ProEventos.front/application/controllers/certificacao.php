<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Certificacao extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function index($hash) {
        autoriza();

        $this->load->model("certificacao_model", "certificacao");
        $certificacao = $this->certificacao->getByHash($hash);

        $this->load->view("admin/imoveis/certificacao_view", array(
            "certificacao" => $certificacao
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

        //var_dump($_FILES['files']);
        for ($i = 0; $i < count($_FILES['files']['size']); $i++) {
            @$_FILES['new_file']['name'] = $_FILES['files']['name'][$i];
            @$_FILES['new_file']['type'] = $_FILES['files']['type'][$i];
            @$_FILES['new_file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            @$_FILES['new_file']['error'] = $_FILES['files']['error'][$i];
            @$_FILES['new_file']['size'] = $_FILES['files']['size'][$i];

            if ($this->upload->do_upload('new_file')) {
                $data = array('upload_data' => $this->upload->data());

                //genThumb($path, $data["upload_data"]["file_name"], 553, 359, 'thumb_553x359');
                //genThumb($path, $data["upload_data"]["file_name"], 268, 171, 'thumb_268x171');
                //genThumb($path, $data["upload_data"]["file_name"], 268, 359, 'thumb_268x359');

                $dados['hash'] = $this->input->post("hash");
                $dados['img'] = $data["upload_data"]["file_name"];
                //$dados['thumb_553x359'] = $data["upload_data"]["file_name"];
                //$dados['thumb_268x171'] = $data["upload_data"]["file_name"];
                //$dados['thumb_268x359'] = $data["upload_data"]["file_name"];
                //$dados['titulo'] = "";

                $this->load->model("certificacao_model", "certificacao");
                $this->certificacao->set($dados);
                
                
            }
        }

        $this->output->enable_profiler(true);
        
        echo json_encode(array(
            "success" => true
        ));
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function del($id) {
        autoriza();

        $this->load->model("certificacao_model", "certificacao");
        $this->certificacao->del($id);

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
        $ordem = $this->input->post("ordem");
        $i = 1;
        $this->load->model("certificacao_model", "certificacao");

        foreach ($ordem as $o) {
            $this->certificacao->up(array(
                "id" => $o,
                "ordem" => $i
            ));
            $i++;
        }
        echo json_encode(array(
            "success" => true
        ));
    }

}
