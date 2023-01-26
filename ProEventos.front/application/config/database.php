<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'farourbanizado.mysql.dbaas.com.br';
$db['default']['username'] = 'farourbanizado';
$db['default']['password'] = 'EscritorioF4R0';
$db['default']['database'] = 'farourbanizado';
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = 'far_';
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */