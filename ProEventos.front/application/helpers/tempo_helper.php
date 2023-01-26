<?php

date_default_timezone_set('America/Sao_Paulo');

function getSemana() {
    $diasemana = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sabado');
    $data = date('Y-m-d');
    $diasemana_numero = date('w', strtotime($data));
    return $diasemana[$diasemana_numero];
}

function toTime($timeSQL) {
    $partes = explode(".", $timeSQL);
    return "{$partes[0]}";
}

function dataPtBrParaMysql($dataPtBr) {
    $partes = explode("/", $dataPtBr);
    return "{$partes[2]}-{$partes[1]}-{$partes[0]}";
}

function dateTimePtBrParaMysql($dataPtBr) {
    $partes = explode(" ", $dataPtBr);
    $data = explode("/", $partes[0]);
    $hora = explode(":", $partes[1]);
    return "{$data[2]}-{$data[1]}-{$data[0]} {$partes[1]}";
}

function dataMysqlParaPtBr($dataMysql) {
    $data = new DateTime($dataMysql);
    return $data->format("d/m/Y");
}

function dataMysqlDiaMes($dataMysql) {
    $data = new DateTime($dataMysql);
    return $data->format("d/m");
}

function dataBlog($dataMysql) {
    $data = new DateTime($dataMysql);
    $mes = tradusMes($data->format('M'));
    return "{$data->format('d')} de {$mes} de {$data->format('Y')}";
}

function dataBlogArray($dataMysql) {
    $data = new DateTime($dataMysql);
    $mes = tradusMes($data->format('M'));
    $mes = substr($mes, 0, 3);
    return array(
        "d" => $data->format('d'),
        "m" => $mes,
        "Y" => $data->format('Y')
    );
}

function dataPtBlog($dataMysql) {
    $data = new DateTime($dataMysql);
    $mes = tradusMes($data->format('M'));
    return "{$data->format('d')}/{$mes}/{$data->format('Y')}";
}

function datetime($dataMysql) {
    $data = new DateTime($dataMysql);
    return $data->format("d/m/Y H:i:s");
}

function toDateMysql($dataMysql) {
    $data = new DateTime($dataMysql);
    return $data->format("Y-m-d H:i:s");
}

function getHour($dataMysql) {
    $data = new DateTime($dataMysql);
    return $data->format("H:i");
}

function getHourFomat($dataMysql) {
    $data = new DateTime($dataMysql);
    return $data->format("H\h");
}

function tempo_atras($datahora) {
    $unix = mysql_to_unix($datahora);
    $now = time();

    $tempo = explode(",", timespan($unix, $now));
    return $tempo[0];
}

function ultimoDia($m, $a) {
    $x = array(
        "01" => "31",
        "02" => bissexto($a) ? "29" : "28",
        "03" => "31",
        "04" => "30",
        "05" => "31",
        "06" => "30",
        "07" => "31",
        "08" => "31",
        "09" => "30",
        "10" => "31",
        "11" => "30",
        "12" => "31"
    );

    return $a . "-" . $m . "-" . $x[$m];
}

function primeiroDia($m, $a) {
    return $a . "-" . $m . "-01";
}

function bissexto($a) {
    if ((($a % 4) == 0 && ( $a % 100) != 0) || ( $a % 400) == 0) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function diaDaSemana($d) {
    $array = array(
        "0" => "Domingo",
        "1" => "Segunda",
        "2" => "Terça",
        "3" => "Quarta",
        "4" => "Quinta",
        "5" => "Sexta",
        "6" => "Sábado"
    );
    return $array[$d];
}

function diaDaSemanaPlural($d) {
    $array = array(
        "0" => "aos Domingos",
        "1" => "as Segundas",
        "2" => "as Terças",
        "3" => "as Quartas",
        "4" => "as Quintas",
        "5" => "as Sextas",
        "6" => "aos Sábados"
    );
    return $array[$d];
}

function tradusMes($m) {
    $array = array(
        "Jan" => "Janeiro",
        "Feb" => "Fevereiro",
        "Mar" => "Março",
        "Apr" => "Abril",
        "May" => "Maio",
        "Jun" => "Junho",
        "Jul" => "Julho",
        "Aug" => "Agosto",
        "Sep" => "Setembro",
        "Oct" => "Outubro",
        "Nov" => "Novembro",
        "Dec" => "Dezembro"
    );
    return $array[$m];
}
