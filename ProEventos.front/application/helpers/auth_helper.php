<?php

function autoriza() {
    $ci = get_instance();
    $usuarioLogado = $ci->session->userdata("usuario_logado");
    if (!$usuarioLogado) {
        $ci->session->set_flashdata("danger", "Você precisa estar logado");
        redirect("login");
    }
    return $usuarioLogado;
}

function userDados() {
    $ci = get_instance();
    $usuarioLogado = $ci->session->userdata("usuario_logado");
    if (!$usuarioLogado) {
        return array();
    } else {
        return $usuarioLogado;
    }
}

function isLogado() {
    $ci = get_instance();
    if (!$ci->session->userdata("usuario_logado")) {
        return false;
    }
    return true;
}
