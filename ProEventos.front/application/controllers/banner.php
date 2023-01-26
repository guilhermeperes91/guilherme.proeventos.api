<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function index() {
        autoriza();

        $this->load->model("banner_model", "banner");
        $banner = $this->banner->get();

        $this->load->admin("banner/banner_view", array(
            "banner" => $banner
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
            "link" => $this->input->post("link")
        );
        if ($this->upload->do_upload('full')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['full'] = $data["upload_data"]["file_name"];
        }

        if ($this->upload->do_upload('mobile')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['responsivo'] = $data["upload_data"]["file_name"];
        }

        $this->load->model("banner_model", "banner");
        $this->banner->set($dados);
        redirect("admin/banner");
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
            "link" => $this->input->post("link")
        );
        if ($this->upload->do_upload('full')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['full'] = $data["upload_data"]["file_name"];
        }

        if ($this->upload->do_upload('mobile')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['responsivo'] = $data["upload_data"]["file_name"];
        }

        $this->load->model("banner_model", "banner");
        $this->banner->up($dados);
        redirect("admin/banner");
    }

    /* ----------------------------------------------- *
     * 
     * 
     * ----------------------------------------------- */

    public function upOrdem() {
        autoriza();
        $ordem = $this->input->post("ordem");
        $i = 1;
        $this->load->model("banner_model", "banner");

        foreach ($ordem as $o) {
            $this->banner->up(array(
                "id" => $o,
                "ordem" => $i
            ));
            $i++;
        }
        echo json_encode(array(
            "success" => true
        ));
    }

    /* ----------------------------------------------- *
     * 
     * 
     * ----------------------------------------------- */

    public function get($id) {
        autoriza();
        $this->load->model("banner_model", "banner");

        $get = $this->banner->getByID($id);
        if ($get) {
            echo json_encode(array(
                "success" => true,
                "banner" => $get
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

        $this->load->model("banner_model", "banner");
        $this->banner->del($id);

        redirect("admin/banner");
    }

}
