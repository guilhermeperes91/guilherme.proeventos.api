<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Imoveis extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /*
     * --------------------------------------------------------
     */

    public function index() {
        autoriza();

        $this->load->model("imovel_model", "imovel");

        $this->load->admin("imoveis/imoveis_view", array(
            "imoveis" => $this->imovel->get()
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function add() {
        autoriza();

        $this->load->model("itenslazer_model", "itens");
        $this->load->model("Fasesempreendimento_model", "fases");

        $hash = rand(1000, 9000) . time() . md5(uniqid(rand(), true)) . rand(100000, 990000);

        $this->load->library("leadlovers");
        $sequence = $this->leadlovers->getSequence("552312");
        $sequence = json_decode($sequence, true);

        $this->load->admin("imoveis/imoveis_add_view", array(
            "itenslazer" => $this->itens->get(),
            "hash" => $hash,
            "fases" => $this->fases->get(),
            "sequence" => $sequence['Items'],
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function edit($id) {
        autoriza();

        $this->load->model("imovel_model", "imovel");
        $this->load->model("itenslazer_model", "itens");
        $this->load->model("Fasesempreendimento_model", "fases");

        $this->load->library("leadlovers");
        $sequence = $this->leadlovers->getSequence("552312");
        $sequence = json_decode($sequence, true);

        $this->load->admin("imoveis/imoveis_edit_view", array(
            "imovel" => $this->imovel->getByID($id),
            "itenslazer" => $this->itens->get(),
            "fases" => $this->fases->get(),
            "sequence" => $sequence['Items'],
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function set() {
        autoriza();

        $path = './assets/upload';
        $this->upload->initialize(array('upload_path' => $path, 'allowed_types' => 'gif|jpg|png|jpeg', 'max_size' => '0', 'max_width' => '0', 'max_height' => '0', 'encrypt_name' => true));

        $this->load->model("imovel_model", "imovel");

        $urlExist = $this->imovel->getByURL($this->input->post("url"));


        $dados = array(
            "nome" => $this->input->post("nome"),
            "url" => $urlExist ? $this->input->post("url") . rand(1, 10000) : $this->input->post("url"),
            "sobre" => $this->input->post("sobre"),
            "seo_title" => $this->input->post("seo_title"),
            "seo_description" => $this->input->post("seo_description"),
            "seo_keywords" => $this->input->post("seo_keywords"),
            "remarketing" => "",
            "endereco" => $this->input->post("endereco"),
            "lat" => $this->input->post("lat"),
            "long" => $this->input->post("long"),
            "cidade" => $this->input->post("cidade"),
            "bairro" => $this->input->post("bairro"),
            "obra_fundacao" => $this->input->post("obra_fundacao"),
            "obra_alvenaria" => $this->input->post("obra_alvenaria"),
            "obra_instalacoes" => $this->input->post("obra_instalacoes"),
            "obra_acabamento" => $this->input->post("obra_acabamento"),
            "dormitorio" => $this->input->post("dormitorio"),
            "area" => $this->input->post("area"),
            "preco" => $this->input->post("preco"),
            "status" => $this->input->post("status"),
            "vendido" => $this->input->post("vendido"),
            "itens_lazer" => $this->input->post("itens_lazer") ? json_encode($this->input->post("itens_lazer")) : "[]",
            "hash" => $this->input->post("hash"),
            "whatsapp" => $this->input->post("whatsapp"),
            "telefone" => $this->input->post("telefone"),
            "slogan" => $this->input->post("slogan"),
            "formulario" => $this->input->post("formulario"),
            "bairro_texto" => $this->input->post("bairro_texto"),
            "video" => $this->input->post("video"),
            "codigo_suahouse" => $this->input->post("codigo_suahouse"),
            "tourvirtual" => $this->input->post("tourvirtual"),
            "vagas" => $this->input->post("vagas"),
            "machineCode" => $this->input->post("machineCode"),
            "sequenceCode" => $this->input->post("sequenceCode"),
            "tipo" => $this->input->post("tipo"),
            "banner" => "",
            "img_destaque" => "",
            "banner_mobile" => "",
            "bairro_fundo" => ""
        );

        if ($this->upload->do_upload('img_destaque')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['img_destaque'] = $data["upload_data"]["file_name"];

            genThumb($path, $data["upload_data"]["file_name"], 264, 286, 'thumb_264x286');
            genThumb($path, $data["upload_data"]["file_name"], 550, 431, 'thumb_550x431');
        }

        if ($this->upload->do_upload('banner')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['banner'] = $data["upload_data"]["file_name"];
        }

        if ($this->upload->do_upload('banner_mobile')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['banner_mobile'] = $data["upload_data"]["file_name"];
        }

        if ($this->upload->do_upload('bairro_fundo')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['bairro_fundo'] = $data["upload_data"]["file_name"];
        }

        $this->imovel->set($dados);

        redirect("admin/imoveis");
    }

    /*
     * --------------------------------------------------------
     */

    public function up($id) {
        autoriza();

        $path = './assets/upload';
        $this->upload->initialize(array('upload_path' => $path, 'allowed_types' => 'gif|jpg|png|jpeg', 'max_size' => '0', 'max_width' => '0', 'max_height' => '0', 'encrypt_name' => true));

        $this->load->model("imovel_model", "imovel");


        $dados = array(
            "id" => $id,
            "nome" => $this->input->post("nome"),
            "url" => $this->input->post("url"),
            "sobre" => $this->input->post("sobre"),
            "seo_title" => $this->input->post("seo_title"),
            "seo_description" => $this->input->post("seo_description"),
            "seo_keywords" => $this->input->post("seo_keywords"),
            "remarketing" => "",
            "endereco" => $this->input->post("endereco"),
            "lat" => $this->input->post("lat"),
            "long" => $this->input->post("long"),
            "cidade" => $this->input->post("cidade"),
            "bairro" => $this->input->post("bairro"),
            "localizacao" => $this->input->post("localizacao"),
            "obra_fundacao" => $this->input->post("obra_fundacao"),
            "obra_alvenaria" => $this->input->post("obra_alvenaria"),
            "obra_instalacoes" => $this->input->post("obra_instalacoes"),
            "obra_acabamento" => $this->input->post("obra_acabamento"),

            "dormitorio" => $this->input->post("dormitorio"),
            "area" => $this->input->post("area"),
            "preco" => $this->input->post("preco"),
            "status" => $this->input->post("status"),
            "vendido" => $this->input->post("vendido"),
            "itens_lazer" => $this->input->post("itens_lazer") ? json_encode($this->input->post("itens_lazer")) : "[]",
            "whatsapp" => $this->input->post("whatsapp"),
            "telefone" => $this->input->post("telefone"),
            "slogan" => $this->input->post("slogan"),
            "formulario" => $this->input->post("formulario"),
            "bairro_texto" => $this->input->post("bairro_texto"),
            "video" => $this->input->post("video"),
            "codigo_suahouse" => $this->input->post("codigo_suahouse"),
            "tourvirtual" => $this->input->post("tourvirtual"),
			"tourvirtual2" => $this->input->post("tourvirtual2"),
			"tourvirtual_titulo" => $this->input->post("tourvirtual_titulo"),
			"tourvirtual_titulo2" => $this->input->post("tourvirtual_titulo2"),
            "vagas" => $this->input->post("vagas"),
            "machineCode" => $this->input->post("machineCode"),
            "sequenceCode" => $this->input->post("sequenceCode"),
            "tipo" => $this->input->post("tipo"),
        );

        if ($this->input->post("del_banner") == "true") {
            $dados['banner'] = "";
        }

        if ($this->input->post("del_banner_mobile") == "true") {
            $dados['banner_mobile'] = "";
        }

        if ($this->upload->do_upload('img_destaque')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['img_destaque'] = $data["upload_data"]["file_name"];

            genThumb($path, $data["upload_data"]["file_name"], 264, 286, 'thumb_264x286');
            genThumb($path, $data["upload_data"]["file_name"], 550, 431, 'thumb_550x431');
        }

        if ($this->upload->do_upload('banner')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['banner'] = $data["upload_data"]["file_name"];
        }

        if ($this->upload->do_upload('banner_mobile')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['banner_mobile'] = $data["upload_data"]["file_name"];
        }

        if ($this->upload->do_upload('bairro_fundo')) {
            $data = array('upload_data' => $this->upload->data());
            $dados['bairro_fundo'] = $data["upload_data"]["file_name"];
        }



        $this->imovel->up($dados);

        redirect("/imoveis/edit/{$id}");
        //$this->output->enable_profiler(true);
    }

    /*
     * --------------------------------------------------------
     */

    public function home($acao, $id) {
        autoriza();

        $this->load->model("imovel_model", "imovel");
        $this->imovel->up(array(
            "id" => $id,
            "home" => $acao == "add" ? "1" : "0"
        ));

        redirect("admin/imoveis");
    }

    /*
     * --------------------------------------------------------
     */

    public function destaque($acao, $id) {
        autoriza();

        $this->load->model("imovel_model", "imovel");
        $this->imovel->up(array(
            "id" => $id,
            "destaque" => $acao == "add" ? "1" : "0"
        ));

        redirect("admin/imoveis");
    }

    /*
     * --------------------------------------------------------
     */

    public function del($id) {
        autoriza();

        $this->load->model("imovel_model", "imovel");
        $this->imovel->del($id);

        redirect("admin/imoveis");
    }

}
