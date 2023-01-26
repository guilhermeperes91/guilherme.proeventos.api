<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    /*
     * --------------------------------------------------------
     */

    public function index() {

        $this->load->model("imovel_model", "imovel");
        $this->load->model("banner_model", "banner");
        $this->load->model("news_model", "news");

        $banners = array();

        $home = $this->imovel->getHome();
        $b = $this->banner->get();

        foreach ($b as $x) {
            $link = base_url($x['link']);
            $texto = "";

            $banners[] = array(
                "banner" => base_url("assets/upload/{$x['full']}"),
                "banner_mobile" => $x['responsivo'] ? base_url("assets/upload/{$x['responsivo']}") : "",
                "link" => $link,
                "texto" => $texto
            );
        }

        foreach ($home as $h) {
            $gourmet = false;
            $lazer = json_decode($h['itens_lazer']);
            foreach ($lazer as $l) {
                if ($l == 66) {
                    $gourmet = true;
                }
            }
            $link = base_url("imovel/{$h['id']}/" . getProdutoLink($h));
            if ($h['url']) {
                $link = base_url($h['url']);
            }
            $texto = "<p class='cidade'>{$h['bairro']} | {$h['cidade']}";
            $texto .= "<h1><a href='{$link}'>{$h['nome']}</a></h1>";
            $texto .= "<h4>";
            $texto .= "<a href='{$link}'>";
            if ($h['dormitorio']) {
                $texto .= "{$h['dormitorio']} | ";
            }

            $texto .= "{$h['area']}";
            if ($gourmet) {
                $texto .= " | Espaço Gourmet";
            }
            $texto .= "</a>";
            $texto .= "</h4>";
            $texto .= "<p><span class='status' style='color:{$h['fases_cor']}'>{$h['fases']}</span>";

            $banners[] = array(
                "banner" => base_url("assets/upload/{$h['banner']}"),
                "banner_mobile" => base_url("assets/upload/{$h['banner_mobile']}"),
                "link" => $link,
                "texto" => $texto
            );
        }

        $this->load->site("inicio_view", array(
            "banners" => $banners,
            "imovels" => $this->imovel->getImoveis(),
            "noticias" => $this->news->getLast(),
            "js" => array(
                "home.js",
                "jquery.mask.min.js",
                "envio.js",
            )
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function noticia($id, $url) {
        $this->load->model("news_model", "news");

        $noticia = $this->news->getByID($id);

        if ($noticia) {
            $this->load->site("noticia_view", array(
                "title" => "{$noticia['titulo']} |  Faro Urbanizadora",
                "noticia" => $noticia,
                "js" => array(
                    "jquery.mask.min.js",
                    "envio.js",
                )
            ));
        } else {
            show_404();
        }
    }

    /*
     * --------------------------------------------------------
     */

    public function imoveis() {
        $this->load->model("imovel_model", "imovel");
        $this->load->model("Fasesempreendimento_model", "fases");

        $this->load->site("imoveis_view", array(
            "title" => "Faro Urbanizadora | Imóveis",
            "imovels" => $this->imovel->getImoveis(),
            "fases" => $this->fases->get(),
            "js" => array(
                "jquery.mask.min.js",
                "envio.js",
            )
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function portifolio() {
        $this->load->model("imovel_model", "imovel");
        $this->load->model("Fasesempreendimento_model", "fases");

        $this->load->site("portifolio_view", array(
            "title" => "Faro Urbanizadora | Portifólio",
            "portifolio" => $this->imovel->getImoveis(),
            "fases" => $this->fases->get(),
            "js" => array(
                "jquery.mask.min.js",
                "envio.js",
            )
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function noticias() {

        $this->load->model("news_model", "news");

        $this->load->site("noticias_view", array(
            "title" => "Faro Urbanizadora | Notícias",
            "noticias" => $this->news->getNews(),
            "js" => array(
                "jquery.mask.min.js",
                "envio.js",
            )
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function contato() {

        $this->load->site("contato_view", array(
            "title" => "Faro Urbanizadora | Contato",
            "desativaPesquisa" => true,
            "js" => array(
                "jquery.mask.min.js",
                "envio.js",
            )
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function institucional() {

        $this->load->site("institucional_view", array(
            "title" => "Faro Urbanizadora | Institucional",
            "desativaPesquisa" => true,
            "js" => array(
                "jquery.mask.min.js",
                "envio.js",
            )
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function imobiliaria() {

        $this->load->site("imobiliaria_view", array(
            "title" => "Faro Urbanizadora | Corretor / Imobiliária",
            "desativaPesquisa" => true,
            "js" => array(
                "jquery.mask.min.js",
                "envio.js",
            )
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function paginas($url) {
        $this->load->model("paginas_model", "paginas");

        $pagina = $this->paginas->getByURL($url);
        $this->load->site("paginas_view", array(
            "title" => "Faro Urbanizadora | " . $pagina['titulo'],
            "pagina" => $pagina,
            "desativaPesquisa" => true,
            "js" => array(
                "jquery.mask.min.js",
                "envio.js",
            )
        ));
    }

    /*
     * --------------------------------------------------------
     */

    public function imovel($url) {

        $this->load->model("imovel_model", "imovel");
        $this->load->model("itenslazer_model", "itens");
        $this->load->model("galeria_model", "galeria");
        $this->load->model("plantas_model", "planta");
        $this->load->model("obra_model", "obra");
        $this->load->model("decorado_model", "decorado");
        $this->load->model("fasesempreendimento_model", "fases");
        $this->load->model("documento_model", "documento");
        $this->load->model("certificacao_model", "certificacao");

        $imovel = $this->imovel->getByURL($url);

        if ($imovel) {

            $planta = $this->planta->getByHash($imovel['hash']);
            $galeria = $this->galeria->getByHash($imovel['hash']);
            $decorado = $this->decorado->getByHash($imovel['hash']);
            $obras = $this->obra->getByHash($imovel['hash']);
            $documentos = $this->documento->getByProduto($imovel['id']);
            $certificacao = $this->certificacao->getByHash($imovel['hash']);

            $this->load->site("produto_view", array(
                "pesquisa" => true,
                "produto" => true,
                "imovel" => $imovel,
                "planta" => $planta,
                "galeria" => $galeria,
                "decorado" => $decorado,
                "obra" => $obras,
                "documentos" => $documentos,
                "certificacao" => $certificacao,
                "itens_lazer" => $this->itens->get(),
                "title" => $imovel['seo_title'] ? $imovel['seo_title'] : getProdutoTitle($imovel),
                "description" => $imovel['seo_description'],
                "keywords" => $imovel['seo_keywords'],
                "js" => array(
                    "blueimp-gallery.js",
                    "jquery.mask.min.js",
                    "produto.js",
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyCy9O5XF9-fzAAQY0vzKWNr7v0yl94gcAs&libraries=places&callback=initMap",
                    "envio.js"
                ),
                "css" => array(
                    "blueimp-gallery.min.css"
                )
            ));
        } else {
            show_404();
        }
    }

    /*
     * --------------------------------------------------------
     */

    public function produto($n, $id, $string) {

        $this->load->model("imovel_model", "imovel");
        $this->load->model("itenslazer_model", "itens");
        $this->load->model("galeria_model", "galeria");
        $this->load->model("plantas_model", "planta");
        $this->load->model("obra_model", "obra");
        $this->load->model("decorado_model", "decorado");
        $this->load->model("fasesempreendimento_model", "fases");
        $this->load->model("documento_model", "documento");

        $imovel = $this->imovel->getByID($id);


        if ($imovel) {

            $planta = $this->planta->getByHash($imovel['hash']);
            $galeria = $this->galeria->getByHash($imovel['hash']);
            $decorado = $this->decorado->getByHash($imovel['hash']);
            $obras = $this->obra->getByHash($imovel['hash']);
            $documentos = $this->documento->getByProduto($imovel['id']);

            $this->load->site("produto_view", array(
                "pesquisa" => true,
                "produto" => true,
                "imovel" => $imovel,
                "planta" => $planta,
                "galeria" => $galeria,
                "decorado" => $decorado,
                "obra" => $obras,
                "documentos" => $documentos,
                "itens_lazer" => $this->itens->get(),
                "title" => $imovel['seo_title'] ? $imovel['seo_title'] : getProdutoTitle($imovel),
                "description" => $imovel['seo_description'],
                "keywords" => $imovel['seo_keywords'],
                "js" => array(
                    "blueimp-gallery.js",
                    "jquery.mask.min.js",
                    "produto.js",
                    "https://maps.googleapis.com/maps/api/js?key=AIzaSyCy9O5XF9-fzAAQY0vzKWNr7v0yl94gcAs&libraries=places&callback=initMap",
                    "envio.js"
                ),
                "css" => array(
                    "blueimp-gallery.min.css"
                )
            ));
        } else {
            show_404();
        }
    }

    /*
     * --------------------------------------------------------
     */

    public function politicaDePrivacidade() {

        $this->load->site("politica_view", array(
            "title" => "Politica de privacidade | Faro Urbanizadora",
            "desativaPesquisa" => true,
            "js" => array(
                "envio.js"
            )
        ));
    }

}
