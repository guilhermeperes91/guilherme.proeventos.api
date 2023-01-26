<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function index() {
        autoriza();

        $this->load->model("config_model", "configs");
        $config = $this->configs->getByID('1');

        $this->load->admin("config/config_view", array(
            "config" => $config
        ));
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function up() {
        autoriza();

        $dados = array(
            "id" => "1",
            "telefone_comercial" => $this->input->post("telefone_comercial"),
            "chat" => $this->input->post("chat"),
            "email" => $this->input->post("email"),
            "whatsapp_comercial" => $this->input->post("whatsapp_comercial"),
            "facebook" => $this->input->post("facebook"),
            "instagram" => $this->input->post("instagram"),
            "linkedin" => $this->input->post("linkedin"),
            "youtube" => $this->input->post("youtube"),
            "analytics" => $this->input->post("analytics"),
            "remarketing" => $this->input->post("remarketing"),
            "twitter" => $this->input->post("twitter"),
            "blog" => $this->input->post("blog"),
            "pinterest" => $this->input->post("pinterest"),
            "playlist" => $this->input->post("playlist"),
            "seo_title" => $this->input->post("seo_title"),
            "seo_description" => $this->input->post("seo_description"),
            "seo_keywords" => $this->input->post("seo_keywords"),
            "machineCode" => $this->input->post("machineCode"),
            "sequenceCode" => $this->input->post("sequenceCode"),
        );

        $this->load->model("config_model", "configs");
        $this->configs->up($dados);
        
        redirect("admin/config");
    }

}
