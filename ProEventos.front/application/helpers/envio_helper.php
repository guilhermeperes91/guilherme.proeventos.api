<?php

function sendEmail($subject, $msg, $reply, $emails) {
    $ci = get_instance();

    $ci->load->library('email');

    $config = array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://email-ssl.com.br',
        'smtp_port' => '465',
        'smtp_timeout' => '7',
        'smtp_user' => 'envio@farourbanizadora.com.br',
        'smtp_pass' => '#!S!SB@6*6XUzGt',
        'charset' => 'utf-8',
        'newline' => "\r\n",
        'mailtype' => 'html',
        'validation' => TRUE
    );

    $ci->email->initialize($config);
    $ci->email->from('envio@farourbanizadora.com.br', "Contato Faro Urbanizadora");
    $ci->email->to($emails);
    $ci->email->reply_to($reply);
    $ci->email->subject($subject);
    $ci->email->message($msg);

    if ($ci->email->send()) {
        return array("success" => true);
    } else {
        //var_dump($ci->email->print_debugger());
        return array("success" => false, "msg" => $ci->email->print_debugger());
    }

    //a linha de baixo mostra um debug, da pra ver se envio ou nao caso der erro.
    //echo $this->email->print_debugger();
}

function getTemplate($name, $in = null) {
    extract($in);
    ob_start();
    include $name;
    $text = ob_get_clean();
    return $text;
}

function getIp() {
    $ip = "";
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function logPush($x) {
    $array = file_get_contents('email.txt');
    $array = json_decode($array, true);
    array_push($array, $x);
    //var_dump($array);
    $array = json_encode($array);
    file_put_contents('email.txt', ($array), LOCK_EX);
}
