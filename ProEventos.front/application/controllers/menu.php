<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function index() {
        autoriza();

        $this->load->model("menu_model", "menu");
        $this->load->model("paginas_model", "paginas");

        $menu = $this->menu->get();

        $this->load->admin("menu/menu_view", array(
            "menu" => $menu,
            "paginas" => $this->paginas->get()
        ));
        
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function set() {
        autoriza();

        $link = "";

        if ($this->input->post("interna") == "1") {
            if ($this->input->post("link_interno2") == "") {
                $link = $this->input->post("link_interno");
            } else {
                $link = $this->input->post("link_interno2");
            }
        } else {
            $link = $this->input->post("link_externo");
        }

        $dados = array(
            "nome" => $this->input->post("nome"),
            "interna" => $this->input->post("interna"),
            "link" => $link,
        );

        $this->load->model("menu_model", "menu");
        $this->menu->set($dados);
        redirect("admin/menu");
    }

    /* -------------------------------------------------------------
     * 
     * ------------------------------------------------------------- */

    public function up($id) {
        autoriza();
        
        $link = "";

        if ($this->input->post("interna") == "1") {
            if ($this->input->post("link_interno2") == "") {
                $link = $this->input->post("link_interno");
            } else {
                $link = $this->input->post("link_interno2");
            }
        } else {
            $link = $this->input->post("link_externo");
        }

        $dados = array(
            "id" => $id,
            "nome" => $this->input->post("nome"),
            "interna" => $this->input->post("interna"),
            "link" => $link,
        );

        $this->load->model("menu_model", "menu");
        $this->menu->up($dados);
        redirect("admin/menu");
    }

    /* ----------------------------------------------- *
     * 
     * 
     * ----------------------------------------------- */

    public function upOrdem() {
        autoriza();
        $ordem = $this->input->post("ordem");
        $i = 1;
        $this->load->model("menu_model", "menu");

        foreach ($ordem as $o) {
            $this->menu->up(array(
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
        $this->load->model("menu_model", "menu");

        $get = $this->menu->getByID($id);
        if ($get) {
            echo json_encode(array(
                "success" => true,
                "menu" => $get
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

        $this->load->model("menu_model", "menu");
        $this->menu->del($id);

        redirect("admin/menu");
    }

}
