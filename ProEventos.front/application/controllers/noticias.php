<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /*
     * --------------------------------------------------------
     */

    public function index() {
        autoriza();

        $this->load->model("news_model", "news");

        $this->load->admin("noticia/noticia_view", array(
            "noticias" => $this->news->get()
        ));
    }

    /*
      | -------------------------------------------------------------------
      | seleciona os registros pela 'ID'
      |
      | -------------------------------------------------------------------
     */

    public function upimg() {
        autoriza();
        ini_set("memory_limit", "256M");


        $this->upload->initialize(array('upload_path' => './assets/upload/', 'allowed_types' => 'gif|jpg|jpeg|png', 'max_size' => '0', 'max_width' => '0', 'max_height' => '0', 'encrypt_name' => true));
        if ($this->upload->do_upload('file')) {
            $data = array('upload_data' => $this->upload->data());
            genThumbs($data["upload_data"]["file_name"], 1000, 1000);
            $file = $data["upload_data"]["raw_name"] . "_thumb" . $data["upload_data"]["file_ext"];
            echo json_encode(array(
                "file" => base_url("assets/upload/{$file}")
            ));
        } else {
            echo $message = 'Ooops!  Your upload triggered the following error:  ' . $_FILES['file']['error'];
        }
    }

    /*
     * --------------------------------------------------------
     */

    public function add() {
        autoriza();

        $this->load->admin("noticia/noticia_add_view", array(
            "css" => array(
                "css/jquery.datetimepicker.min.css"
            ),
            "js" => array(
                "js/jquery.datetimepicker.full.min.js",
                "js/edit_news.js"
            )
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function edit($id) {
        autoriza();

        $this->load->model("news_model", "news");

        $this->load->admin("noticia/noticia_edit_view", array(
            "noticia" => $this->news->getByID($id),
            "css" => array(
                "css/jquery.datetimepicker.min.css"
            ),
            "js" => array(
                "js/jquery.datetimepicker.full.min.js",
                "js/edit_news.js"
            )
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function set() {
        autoriza();

        $path = './assets/upload';
        $this->upload->initialize(array('upload_path' => $path, 'allowed_types' => 'gif|jpg|png|jpeg', 'max_size' => '0', 'max_width' => '0', 'max_height' => '0', 'encrypt_name' => true));

        $this->load->model("news_model", "news");

        $dados = array(
            "titulo" => $this->input->post("titulo"),
            "texto" => $this->input->post("texto"),
            "publicado" => $this->input->post("publicado"),
            "criado" => dateTimePtBrParaMysql($this->input->post("criado")),
            "img_destaque" => ""
        );

        if ($this->upload->do_upload('img_destaque')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['img_destaque'] = $data["upload_data"]["file_name"];
            genThumb($path, $data["upload_data"]["file_name"], 265, 236, 'thumb_265x236');
        }

        $this->news->set($dados);

        redirect("admin/noticias");
    }

    /*
     * --------------------------------------------------------
     */

    public function up($id) {
        autoriza();

        $path = './assets/upload';
        $this->upload->initialize(array('upload_path' => $path, 'allowed_types' => 'gif|jpg|png|jpeg', 'max_size' => '0', 'max_width' => '0', 'max_height' => '0', 'encrypt_name' => true));

        $this->load->model("news_model", "news");

        $dados = array(
            "id" => $id,
            "titulo" => $this->input->post("titulo"),
            "texto" => $this->input->post("texto"),
            "publicado" => $this->input->post("publicado"),
            "criado" => dateTimePtBrParaMysql($this->input->post("criado")),
        );

        if ($this->upload->do_upload('img_destaque')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['img_destaque'] = $data["upload_data"]["file_name"];
            genThumb($path, $data["upload_data"]["file_name"], 265, 236, 'thumb_265x236');
        }

        $this->news->up($dados);

        redirect("admin/noticias");
    }

    /*
     * --------------------------------------------------------
     */

    public function del($id) {
        autoriza();

        $this->load->model("news_model", "news");
        $this->news->del($id);

        redirect("admin/noticias");
    }

}
