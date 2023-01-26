<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paginas extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /*
     * --------------------------------------------------------
     */

    public function index() {
        autoriza();

        $this->load->model("paginas_model", "paginas");

        $this->load->admin("paginas/paginas_view", array(
            "paginas" => $this->paginas->get()
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function add() {
        autoriza();

        $this->load->admin("paginas/paginas_add_view");
    }

    /*
     * --------------------------------------------------------
     */

    public function edit($id) {
        autoriza();

        $this->load->model("paginas_model", "paginas");

        $this->load->admin("paginas/paginas_edit_view", array(
            "pagina" => $this->paginas->getByID($id)
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function set() {
        autoriza();

        $path = './assets/upload';
        $this->upload->initialize(array('upload_path' => $path, 'allowed_types' => 'gif|jpg|png|jpeg', 'max_size' => '0', 'max_width' => '0', 'max_height' => '0', 'encrypt_name' => true));

        $this->load->model("paginas_model", "paginas");

        $dados = array(
            "titulo" => $this->input->post("titulo"),
            "texto" => $this->input->post("texto"),
            "url" => $this->input->post("url"),
            "banner" => "",
            "banner_mobile" => "",
        );

        if ($this->upload->do_upload('banner')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['banner'] = $data["upload_data"]["file_name"];
        }

        if ($this->upload->do_upload('banner_mobile')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['banner_mobile'] = $data["upload_data"]["file_name"];
        }

        $this->paginas->set($dados);

        redirect("admin/paginas");
    }

    /*
     * --------------------------------------------------------
     */

    public function up($id) {
        autoriza();

        $path = './assets/upload';
        $this->upload->initialize(array('upload_path' => $path, 'allowed_types' => 'gif|jpg|png|jpeg', 'max_size' => '0', 'max_width' => '0', 'max_height' => '0', 'encrypt_name' => true));

        $this->load->model("paginas_model", "paginas");

        $dados = array(
            "id" => $id,
            "titulo" => $this->input->post("titulo"),
            "texto" => $this->input->post("texto"),
            "url" => $this->input->post("url"),
        );

        if ($this->upload->do_upload('banner')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['banner'] = $data["upload_data"]["file_name"];
        }

        if ($this->upload->do_upload('banner_mobile')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['banner_mobile'] = $data["upload_data"]["file_name"];
        }

        $this->paginas->up($dados);

        redirect("admin/paginas");
    }

    /*
     * --------------------------------------------------------
     */

    public function del($id) {
        autoriza();

        $this->load->model("paginas_model", "paginas");
        $this->paginas->del($id);

        redirect("admin/paginas");
    }

}
