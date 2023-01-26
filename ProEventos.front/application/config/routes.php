<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$route['404_override'] = '';
$route['default_controller'] = 'site/index';

$route['leadloverstest/getMachines'] = 'leadloverstest/getMachines';
$route['leadloverstest/getSequence/(:num)'] = 'leadloverstest/getSequence/$1';

$route['capa/1024'] = 'site/index';
$route['regulamento'] = 'site/paginas/regulamento';

$route['formulario/enviar'] = 'formulario/enviar';

$route['login'] = 'usuario/login';
$route['admin/banner'] = 'banner/index';
$route['admin/imoveis'] = 'imoveis/index';
$route['admin/noticias'] = 'noticias/index';
$route['admin/paginas'] = 'paginas/index';
$route['admin/config'] = 'config/index';
$route['admin/menu'] = 'menu/index';
$route['admin/midia'] = 'midia/index';

$route['banner/get/(:num)'] = 'banner/get/$1';
$route['banner/del/(:num)'] = 'banner/del/$1';
$route['banner/set'] = 'banner/set/$1';
$route['banner/up/(:num)'] = 'banner/up/$1';
$route['banner/get/(:num)'] = 'banner/get/$1';
$route['banner/upOrdem/(:num)'] = 'banner/upOrdem/$1';

$route['imoveis/add'] = 'imoveis/add';
$route['imoveis/edit/(:num)'] = 'imoveis/edit/$1';
$route['imoveis/del/(:num)'] = 'imoveis/del/$1';
$route['imoveis/set'] = 'imoveis/set/$1';
$route['imoveis/up/(:num)'] = 'imoveis/up/$1';
$route['imoveis/home/(:any)/(:num)'] = 'imoveis/home/$1/$2';
$route['imoveis/destaque/(:any)/(:num)'] = 'imoveis/destaque/$1/$2';

$route['noticias/add'] = 'noticias/add';
$route['noticias/edit/(:num)'] = 'noticias/edit/$1';
$route['noticias/del/(:num)'] = 'noticias/del/$1';
$route['noticias/set'] = 'noticias/set/$1';
$route['noticias/up/(:num)'] = 'noticias/up/$1';
$route['noticias/upimg'] = 'noticias/upimg';

$route['midia/add'] = 'midia/add';
$route['midia/edit/(:num)'] = 'midia/edit/$1';
$route['midia/del/(:num)'] = 'midia/del/$1';
$route['midia/set'] = 'midia/set/$1';
$route['midia/up/(:num)'] = 'midia/up/$1';

$route['paginas/add'] = 'paginas/add';
$route['paginas/edit/(:num)'] = 'paginas/edit/$1';
$route['paginas/del/(:num)'] = 'paginas/del/$1';
$route['paginas/set'] = 'paginas/set/$1';
$route['paginas/up/(:num)'] = 'paginas/up/$1';

$route['menu/add'] = 'menu/add';
$route['menu/edit/(:num)'] = 'menu/edit/$1';
$route['menu/del/(:num)'] = 'menu/del/$1';
$route['menu/set'] = 'menu/set/$1';
$route['menu/up/(:num)'] = 'menu/up/$1';
$route['menu/get/(:num)'] = 'menu/get/$1';
$route['menu/upOrdem'] = 'menu/upOrdem';

$route['config/up'] = 'config/up';

$route['p/(:any)'] = 'site/paginas/$1';

$route['contato'] = 'site/contato';
$route['contatoenviado'] = 'site/contatoenviado';
$route['noticias'] = 'site/noticias';
$route['noticia/(:num)/(:any)'] = 'site/noticia/$1/$2';
$route['imoveis'] = 'site/imoveis';

$route['admin'] = 'imoveis';

$route['itenslazer'] = 'itenslazer/index';
$route['itenslazer/set'] = 'itenslazer/set';
$route['itenslazer/up/(:num)'] = 'itenslazer/up/$1';
$route['itenslazer/get/(:num)'] = 'itenslazer/get/$1';
$route['itenslazer/del/(:num)'] = 'itenslazer/del/$1';

$route['fasesempreendimento'] = 'fasesempreendimento/index';
$route['fasesempreendimento/set'] = 'fasesempreendimento/set';
$route['fasesempreendimento/up/(:num)'] = 'fasesempreendimento/up/$1';
$route['fasesempreendimento/get/(:num)'] = 'fasesempreendimento/get/$1';
$route['fasesempreendimento/del/(:num)'] = 'fasesempreendimento/del/$1';

$route['plantas/index/(:any)'] = 'plantas/index/$1';
$route['plantas/upload'] = 'plantas/upload';
$route['plantas/del/(:num)'] = 'plantas/del/$1';
$route['plantas/upTitle'] = 'plantas/upTitle';
$route['plantas/upOrdem'] = 'plantas/upOrdem';

$route['obra/index/(:any)'] = 'obra/index/$1';
$route['obra/upload'] = 'obra/upload';
$route['obra/del/(:num)'] = 'obra/del/$1';
$route['obra/upTitle'] = 'obra/upTitle';
$route['obra/upOrdem'] = 'obra/upOrdem';

$route['certificacao/index/(:any)'] = 'certificacao/index/$1';
$route['certificacao/upload'] = 'certificacao/upload';
$route['certificacao/del/(:num)'] = 'certificacao/del/$1';

$route['galeria/index/(:any)'] = 'galeria/index/$1';
$route['galeria/upload'] = 'galeria/upload';
$route['galeria/del/(:num)'] = 'galeria/del/$1';
$route['galeria/upTitle'] = 'galeria/upTitle';
$route['galeria/upOrdem'] = 'galeria/upOrdem';

$route['decorado/index/(:any)'] = 'decorado/index/$1';
$route['decorado/upload'] = 'decorado/upload';
$route['decorado/del/(:num)'] = 'decorado/del/$1';
$route['decorado/upTitle'] = 'decorado/upTitle';

$route['usuario/autenticar'] = 'usuario/autenticar';

$route['enviar/contato_imovel'] = 'enviar/contato_imovel';
$route['enviar/contato_enviar'] = 'enviar/contato_enviar';


$route['imprensa/edit/(:any)'] = "imprensa/edit/$1";
$route['imprensa/up'] = "imprensa/up";

$route['admin/contatos'] = 'contatos/index';

$route['locacao'] = 'site/locacao';
$route['busca'] = 'site/busca';
$route['portfolio'] = 'site/portifolio';
$route['portifolio'] = 'site/portifolio';
$route['imprensa'] = 'site/imprensa';
$route['institucional'] = 'site/paginas/institucional';
$route['imprensa/imagem/(:num)'] = 'site/imagemhq/$1';
$route['imprensa/midia/(:num)'] = 'site/midia/$1';
$route['imprensa/release/(:num)'] = 'site/release/$1';
$route['imprensa/(:any)'] = 'site/imprensa/$1';
$route['pactoglobal'] = 'site/pactoglobal';
$route['trabalhe-conosco'] = 'site/trabalhe_conosco';
$route['venda-seu-terreno'] = 'site/venda_seu_terreno';
$route['noticias'] = 'site/noticias';
$route['imobiliaria'] = 'site/imobiliaria';
$route['politica-de-privacidade'] = 'site/politicaDePrivacidade';

$route['paginas/(:any)'] = 'site/paginas/$1';

$route['imovel/(:num)/(:num)/(:any)'] = 'site/produto/$1/$2/$3';
$route['(:any)'] = 'site/imovel/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */