<?php

function get_field($key, $page_id = 0) {
  $id = $page_id !== 0 ? $page_id : get_the_ID();

  return get_post_meta($id, $key, true);
}
function the_field($key, $page_id = 0) {
  echo get_field($key, $page_id);
}


add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home() {
  $cmb_home = new_cmb2_box([
    'id' => 'home_box',
    'title' => 'Home',
    'object_types' => ['page'], 
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ], 
  ]);

  $cmb_home->add_field([
    'name' => 'Slogan',
    'id' => 'slogan',
    'type' => 'text',
    'desc' => 'Slogan da empresa, que aparece no banner inicial',
  ]);
  $cmb_home->add_field([
    'name' => 'Texto "Quem Somos"',
    'id' => 'quem-somos-texto',
    'type' => 'textarea', 
    'desc' => 'Texto da seção "quem somos"',
  ]);
  $cmb_home->add_field([
    'name' => 'Texto "Servicos Prestados"',
    'id' => 'servicos-prestados',
    'type' => 'textarea_small',
    'desc' => 'Mini-texto acima da seção de "Serviços Prestados"'
  ]);
  $cmb_home->add_field([
    'name' => 'Foto "Imobiliário"',
    'id' => 'foto-imob',
    'options' => [
      'url' => false,
    ],
    'type' => 'file',
    'desc' => 'Imagem que aparecerá na seção de Imobiliária, nos Serviços Prestados'
  ]);
  $cmb_home->add_field([
    'name' => 'Texto alternativo para foto "Imobiliário"',
    'id' => 'foto-imob-alt',
    'type' => 'text',
    'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE)'
  ]);
  $cmb_home->add_field([
    'name' => 'Foto "Administrativo"',
    'id' => 'foto-adm',
    'options' => [
      'url' => false,
    ],
    'type' => 'file',
    'desc' => 'Imagem que aparecerá na seção de Administrativo, nos Serviços Prestados'
  ]);
  $cmb_home->add_field([
    'name' => 'Texto alternativo para foto "Administrativo"',
    'id' => 'foto-adm-alt',
    'type' => 'text',
    'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE)'
  ]);
  $cmb_home->add_field([
    'name' => 'Foto "Consultoria"',
    'id' => 'foto-con',
    'options' => [
      'url' => false,
    ],
    'type' => 'file',
    'desc' => 'Imagem que aparecerá na seção de Consultoria, nos Serviços Prestados'
  ]);
  $cmb_home->add_field([
    'name' => 'Texto alternativo para foto "Consultoria"',
    'id' => 'foto-con-alt',
    'type' => 'text',
    'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE)'
  ]);
  $cmb_home->add_field([
    'name' => 'Texto "Anúncios Recentes"',
    'id' => 'anuncios-recentes',
    'type' => 'textarea_small',
    'desc' => 'Mini-texto acima da seção de "Anúncios Recentes"'
  ]);
}
?>
