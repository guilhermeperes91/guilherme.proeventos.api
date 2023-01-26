<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fasesempreendimento extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function index() {
        autoriza();

        $this->load->model("fasesempreendimento_model", "fases");
        $itens = $this->fases->get();

        $this->load->admin("imoveis/fasesempreendimento_view", array(
            "itens" => $itens
        ));
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function set() {
        autoriza();


        $dados = array(
            "nome" => $this->input->post("nome"),
            "cor" => $this->input->post("cor"),
        );

        $this->load->model("fasesempreendimento_model", "fases");
        $this->fases->set($dados);
        redirect("fasesempreendimento");
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function up($id) {
        autoriza();

        $dados = array(
            "id" => $id,
            "nome" => $this->input->post("nome"),
            "cor" => $this->input->post("cor"),
        );

        $this->load->model("fasesempreendimento_model", "fases");
        $this->fases->up($dados);
        redirect("fasesempreendimento");
    }

    /* ----------------------------------------------- *
     * 
     * 
     * ----------------------------------------------- */

    public function get($id) {
        autoriza();
        $this->load->model("fasesempreendimento_model", "fases");

        $get = $this->fases->getByID($id);
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

        $this->load->model("fasesempreendimento_model", "fases");
        $this->fases->del($id);

        redirect("fasesempreendimento");
    }

}
