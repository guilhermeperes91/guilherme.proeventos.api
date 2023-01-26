<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Script extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function geraImgs() {
        set_time_limit(0);

        $this->load->model("imovel_model", "imovel");
        $this->load->model("itenslazer_model", "itens");
        $this->load->model("galeria_model", "galeria");
        $this->load->model("plantas_model", "planta");
        $this->load->model("obra_model", "obra");
        $this->load->model("decorado_model", "decorado");
        $this->load->model("Fasesempreendimento_model", "fases");

        $imagens = $this->imovel->get();

        $path = './assets/upload';

        foreach ($imagens as $img) {

            genThumb($path, $img['img_destaque'], 279, 302, 'thumb_279x302');
            //genThumb($path, $img['img'], 268, 171, 'thumb_268x171');
            //genThumb($path, $img['img'], 268, 359, 'thumb_268x359');

            /*$this->galeria->up(array(
                "id" => $img['id'],
                "thumb_553x359" => $img['imagem'],
                "thumb_268x171" => $img['imagem'],
                "thumb_268x359" => $img['imagem']
            ));*/

            echo $img['id'] . "<br/>";
        }

        echo 'terminou';
    }

}
