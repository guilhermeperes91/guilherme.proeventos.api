<?php
function genThumbs($src, $w, $h) {
    $ci = get_instance();

    $data = getimagesize("./assets/upload/{$src}");
    $width = $data[0];
    $height = $data[1];



    $doResize = ($width < $w && $height < $h) ? false : true;

    if (!$doResize) {
        $w = $width;
        $h = $height;
    }
    $config_manip = array('image_library' => 'gd2', 'source_image' => "./assets/upload/{$src}", 'new_image' => './assets/upload/', 'maintain_ratio' => TRUE, 'create_thumb' => TRUE, 'thumb_marker' => '_thumb', 'width' => $w, 'height' => $h);
    $ci->load->library('image_lib', $config_manip);
    if (!$ci->image_lib->resize()) {
        echo $ci->image_lib->display_errors();
    }
    $ci->image_lib->clear();
}
function genThumb($path, $src, $w, $h, $n = array()) {
    $ci = get_instance();

    $data = getimagesize("{$path}/{$src}");
    $width = $data[0];
    $height = $data[1];

    $dim = (intval($width) / intval($height)) - ($w / $h);

    $ci->load->library('image_lib');

    $thumb = $n ? $n : "thumb";
    
    $ci->image_lib->initialize(array(
        "image_library" => "gd2",
        "source_image" => "{$path}/{$src}",
        'create_thumb' => FALSE,
        'maintain_ratio' => TRUE,
        'new_image' => "{$path}/{$thumb}",
        'quality' => "100%",
        'width' => $w,
        'height' => $h,
        'master_dim' => ($dim > 0) ? "height" : "width"
    ));

    $ci->image_lib->resize();
    $ci->image_lib->clear();

    $data2 = getimagesize("{$path}/{$thumb}/{$src}");
    $width2 = $data2[0];
    $height2 = $data2[1];

    $x_axis = $width2 == $w ? 0 : (($width2 - $w) / 2);
    $y_axis = $height2 == $w ? 0 : (($height2 - $h) / 2);

//-----------------------------------------
    $ci->image_lib->initialize(array(
        'image_library' => 'gd2',
        'source_image' => "{$path}/{$thumb}/{$src}",
        'new_image' => "{$path}/{$thumb}/{$src}",
        'quality' => "100%",
        'maintain_ratio' => FALSE,
        'width' => $w,
        'height' => $h,
        'x_axis' => $x_axis,
        'y_axis' => $y_axis,
    ));

    $ci->image_lib->crop();
    $ci->image_lib->clear();
    
    //echo "{$path}/{$thumb}/{$src}";
}

function getStatus($s) {
    $r = explode(",", $s);
    $lista = array(
        "10" => "Lançamento",
        "20" => "Em construção",
        "30" => "Pronto",
        "70" => "Futuros Lançamentos",
        "71" => "Obras Aceleradas",
        "72" => "Obras Concluídas"
    );
    return $lista[$r[0]];
}

function getStatusCor($s) {
    $r = explode(",", $s);
    $lista = array(
        "10" => "#96ff00",
        "20" => "#fcff00",
        "30" => "#00baff",
        "70" => "#96ff00",
        "71" => "#ffea00",
        "72" => "#00baff"
    );
    return $lista[$r[0]];
}

function getObjetivo($s) {
    $r = explode(",", $s);
    $lista = array(
        "0" => "",
        "10" => "Venda",
        "20" => "Locação",
        "40" => "Temporada",
        "50" => "Portfolio",
    );
    return $lista[$r[0]];
}

function getTipo($s) {
    $r = explode(",", $s);
    $lista = array(
        "0" => "",
        "10" => "Apartamento",
        "20" => "Casa",
        "30" => "Comercial/Industrial",
        "40" => "Loft",
        "50" => "Loteamento",
        "60" => "Outros",
        "70" => "Área para incorporação",
        "80" => "Locação",
    );
    return $lista[$r[0]];
}

function getLink($link) {
    $l = str_replace(" ", "-", $link);
    return strtolower(url_title(convert_accented_characters($l), '-', TRUE));
}

function getProdutoLink($produto) {

    $descricao = "imovel-casa-de-" . $produto["dormitorio"] . "dorm(s)-" . $produto["bairro"] . "-" . $produto["cidade"] . "-" . $produto["nome"];

    return getLink($descricao);
}

function getProdutoTitle($produto) {
    $descricao = $produto['bairro'] . ", " . $produto['cidade'] . " - " . $produto["nome"] . " |  Faro Urbanizadora";

    return $descricao;
}

function onlyNumbers($str) {
    $r = preg_replace('/[^0-9]/', '', $str);
    return $r;
}

function findExtension($filename) {
    $filename = strtolower($filename);
    $exts = explode(".", $filename);
    $n = count($exts) - 1;
    $exts = $exts[$n];
    return $exts;
}

function curl($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    //curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt');
    //curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

function getYoutube() {
    $channel_id = 'UC_GKLdMKIbUvMo2slwzgyGw';
    $api_key = 'AIzaSyDi8d0is7A2SNKNQkohg_UEMU9OpKqPWq0';

    $json_url = "https://www.googleapis.com/youtube/v3/search?key={$api_key}&channelId={$channel_id}&part=snippet,id&order=date&maxResults=20";
    $json = curl($json_url);
    $listFromYouTube = json_decode($json);

    $items = array();

    if ($listFromYouTube->items) {
        foreach ($listFromYouTube->items as $item) {
            $items[] = array(
                "videoId" => $item->id->videoId,
                "title" => $item->snippet->title,
                "channelTitle" => $item->snippet->channelTitle,
                "thumbnails" => $item->snippet->thumbnails->medium->url,
                "channelId" => $item->snippet->channelId
            );
        }
    }
    return $items;
}
