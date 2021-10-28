<?php
function jic_scripts()
{
    wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.min.js', array(), false, true);
    wp_register_script('our-code', get_template_directory_uri() . '/js/script.min.js', array(), false, true);

    wp_enqueue_script(['plugins', 'our-code']);
}

add_action('wp_enqueue_scripts', 'jic_scripts');

function jic_css()
{
    wp_register_style('jic-style', get_template_directory_uri() . '/style.min.css', array(), false, false);
    wp_enqueue_style('jic-style');
}

add_action('wp_enqueue_scripts', 'jic_css');


add_theme_support('menus');

function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Menu do Cabeçalho'),
            'footer-menu' => __('Menu do Rodapé')
        )
    );
}

add_action('init', 'register_my_menus');


function get_field($key, $page_id = 0)
{
    $id = $page_id !== 0 ? $page_id : get_the_ID();

    return get_post_meta($id, $key, true);
}

function the_field($key, $page_id = 0)
{
    echo get_field($key, $page_id);
}


add_action('cmb2_admin_init', 'cmb2_fields_seo');
function cmb2_fields_seo()
{
    $cmb_seo = new_cmb2_box([
        'id' => 'seo_box',
        'title' => 'SEO',
        'object_types' => ['page'],
    ]);
    $cmb_seo->add_field([
        'name' => 'Descrição da página',
        'id' => 'page-desc',
        'type' => 'text',
        'desc' => 'Descrição da página para motores de busca como Google, ideal para encontrabilidade',
    ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_home');

function cmb2_fields_home()
{
    $cmb_home = new_cmb2_box([
        'id' => 'home_box',
        'title' => 'Página Inicial',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-home.php',
        ],
    ]);

    $cmb_home->add_field([
        'name' => 'Banner introdutório',
        'id' => 'foto-banner',
        'options' => [
            'url' => false,
        ],
        'type' => 'file',
        'desc' => 'Imagem do banner principal da página inicial'
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
        'desc' => 'Texto da seção "Quem Somos"',
    ]);
    $cmb_home->add_field([
        'name' => '1ª Imagem "Quem Somos"',
        'id' => 'foto-quem-somos-1',
        'options' => [
            'url' => false,
        ],
        'type' => 'file',
        'desc' => 'Primeira imagem que aparece ao lado da seção "Quem Somos", tem maior destaque'
    ]);
    $cmb_home->add_field([
        'name' => 'Texto alternativo para 1ª foto "Quem Somos"',
        'id' => 'foto-quem-somos-1-alt',
        'type' => 'text',
        'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE E ENCONTRABILIDADE)'
    ]);
    $cmb_home->add_field([
        'name' => '2ª Imagem "Quem Somos"',
        'id' => 'foto-quem-somos-2',
        'options' => [
            'url' => false,
        ],
        'type' => 'file',
        'desc' => 'Segunda imagem que aparece ao lado da seção "Quem Somos"'
    ]);
    $cmb_home->add_field([
        'name' => 'Texto alternativo para 2ª foto "Quem Somos"',
        'id' => 'foto-quem-somos-2-alt',
        'type' => 'text',
        'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE E ENCONTRABILIDADE)'
    ]);
    $cmb_home->add_field([
        'name' => '3ª Imagem "Quem Somos"',
        'id' => 'foto-quem-somos-3',
        'options' => [
            'url' => false,
        ],
        'type' => 'file',
        'desc' => 'Terceira imagem que aparece ao lado da seção "Quem Somos"'
    ]);
    $cmb_home->add_field([
        'name' => 'Texto alternativo para 3ª foto "Quem Somos"',
        'id' => 'foto-quem-somos-3-alt',
        'type' => 'text',
        'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE E ENCONTRABILIDADE)'
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
        'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE E ENCONTRABILIDADE)'
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
        'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE E ENCONTRABILIDADE)'
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
        'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE E ENCONTRABILIDADE)'
    ]);
    $cmb_home->add_field([
        'name' => 'Texto "Anúncios Recentes"',
        'id' => 'anuncios-recentes',
        'type' => 'textarea_small',
        'desc' => 'Mini-texto acima da seção de "Anúncios Recentes"'
    ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_about');

function cmb2_fields_about()
{
    $cmb_about = new_cmb2_box([
        'id' => 'about_box',
        'title' => 'Sobre',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-about.php',
        ],
    ]);

    $cmb_about->add_field([
        'name' => 'Texto "A empresa"',
        'id' => 'empresa-texto',
        'type' => 'textarea',
        'desc' => 'Texto da seção "A empresa"',
    ]);

    $cmb_about->add_field([
        'name' => 'Texto "O conceito"',
        'id' => 'conceito-texto',
        'type' => 'textarea',
        'desc' => 'Texto da seção "Conceito"',
    ]);

    $cmb_about->add_field([
        'name' => 'Foto "Sobre"',
        'id' => 'foto-sobre',
        'options' => [
            'url' => false,
        ],
        'type' => 'file',
        'desc' => 'Imagem que aparecerá ao lado das seções "A empresa" e "Conceito"'
    ]);
    $cmb_about->add_field([
        'name' => 'Texto alternativo para imagem ao lado das seções "A empresa" e "Conceito"',
        'id' => 'foto-sobre-alt',
        'type' => 'text',
        'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE E ENCONTRABILIDADE)'
    ]);

    $cmb_about->add_field([
        'name' => 'Texto "Missão"',
        'id' => 'missao-texto',
        'type' => 'textarea_small',
        'desc' => 'Texto de missão',
    ]);

    $cmb_about->add_field([
        'name' => 'Texto "Visão"',
        'id' => 'visao-texto',
        'type' => 'textarea_small',
        'desc' => 'Texto de visão',
    ]);

    $cmb_about->add_field([
        'name' => 'Texto "Valores"',
        'id' => 'valores-texto',
        'type' => 'textarea_small',
        'desc' => 'Texto de valores',
    ]);


    $cmb_about->add_field([
        'name' => "Imagem do banner do fim da página",
        'id' => "foto-cta",
        'options' => [
            'url' => false,
        ],
        'type' => 'file',
        'desc' => 'Imagem do fim da página, que contém um texto e um botão levando o usuário à página de anúncio'
    ]);
    $cmb_about->add_field([
        'name' => 'Texto alternativo para imagem do banner',
        'id' => 'foto-cta-alt',
        'type' => 'text',
        'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE E ENCONTRABILIDADE)'
    ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_services');

function cmb2_fields_services()
{
    $cmb_services = new_cmb2_box([
        'id' => 'services_box',
        'title' => 'Serviços',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-services.php',
        ],
    ]);

    $cmb_services->add_field([
        'name' => 'Texto da seção "Serviços Imobiliários"',
        'id' => 'texto-imobiliario',
        'type' => 'textarea',
        'desc' => 'Texto sobre o serviço imobiliário prestado pela empresa',
    ]);

    $cmb_services->add_field([
        'name' => 'Foto da seção "Serviço Imobiliário"',
        'id' => 'foto-imobiliario',
        'options' => [
            'url' => false,
        ],
        'type' => 'file',
        'desc' => 'Imagem que aparecerá ao lado do texto da seção de "Serviço Imobiliário"'
    ]);
    $cmb_services->add_field([
        'name' => 'Texto alternativo para imagem ao lado do texto da seção de "Serviço Imobiliário',
        'id' => 'foto-imobiliario-alt',
        'type' => 'text',
        'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE E ENCONTRABILIDADE)'
    ]);


    $cmb_services->add_field([
        'name' => 'Texto da seção "Serviços Administrativos"',
        'id' => 'texto-administrativo',
        'type' => 'textarea',
        'desc' => 'Texto sobre o serviço administrativo prestado pela empresa',
    ]);


    $cmb_services->add_field([
        'name' => 'Foto da seção "Serviço Administrativo"',
        'id' => 'foto-administrativo',
        'options' => [
            'url' => false,
        ],
        'type' => 'file',
        'desc' => 'Imagem que aparecerá ao lado do texto da seção de "Serviço Administrativo"'
    ]);
    $cmb_services->add_field([
        'name' => 'Texto alternativo para imagem ao lado do texto da seção de "Serviço Administrativo',
        'id' => 'foto-administrativo-alt',
        'type' => 'text',
        'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE E ENCONTRABILIDADE)'
    ]);

    $cmb_services->add_field([
        'name' => 'Texto da seção "Serviços Financeiros"',
        'id' => 'texto-financeiro',
        'type' => 'textarea',
        'desc' => 'Texto sobre o serviço financeiro prestado pela empresa',
    ]);

    $cmb_services->add_field([
        'name' => 'Foto da seção "Serviço Financeiro"',
        'id' => 'foto-financeiro',
        'options' => [
            'url' => false,
        ],
        'type' => 'file',
        'desc' => 'Imagem que aparecerá ao lado do texto da seção de "Serviço Financeiro"'
    ]);
    $cmb_services->add_field([
        'name' => 'Texto alternativo para imagem ao lado do texto da seção de "Serviço Financeiro"',
        'id' => 'foto-financeiro-alt',
        'type' => 'text',
        'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE E ENCONTRABILIDADE)'
    ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_adverts');

function cmb2_fields_adverts()
{
    $cmb_adverts = new_cmb2_box([
        'id' => 'adverts_box',
        'title' => 'Anúncios',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-adverts.php',
        ],
    ]);

    $cmb_adverts->add_field([
        'name' => "Imagem do banner do fim da página",
        'id' => "foto-cta",
        'options' => [
            'url' => false,
        ],
        'type' => 'file',
        'desc' => 'Imagem do fim da página, que contém um texto e um botão levando o usuário à página de anúncio'
    ]);
    $cmb_adverts->add_field([
        'name' => 'Texto alternativo para imagem do banner',
        'id' => 'foto-cta-alt',
        'type' => 'text',
        'desc' => 'Pequeno texto descrevendo a imagem inserida acima (IDEAL PARA ACESSIBILIDADE E ENCONTRABILIDADE)'
    ]);
}

add_action('cmb2_admin_init', 'cmb2_fields_contact');

function cmb2_fields_contact()
{
    $cmb_contact = new_cmb2_box([
        'id' => 'contact_box',
        'title' => 'Contato',
        'object_types' => ['page'],
        'show_on' => [
            'key' => 'page-template',
            'value' => 'page-contact.php',
        ],
    ]);

    $cmb_contact->add_field([
        'name' => 'Mapa do endereço',
        'id' => 'address-frame',
        'type' => 'textarea',
        'desc' => 'Iframe contendo o endereço do escritório, retirado do Google Maps, no botão compartilhar, depois incorporar um mapa e tamanho personalizado de 800 x 200, clicar em copiar HTML e colar no campo acima.',
        'sanitization_cb' => false,
    ]);

    $cmb_contact->add_field([
        'name' => 'Endereço',
        'id' => 'address',
        'type' => 'text',
        'desc' => 'Endereço escrito por extenso, que será exibido no rodapé do site',
    ]);
    $cmb_contact->add_field([
        'name' => 'Link do endereço no Google Maps',
        'id' => 'address-link',
        'type' => 'textarea_small',
        'desc' => 'Link do endereço no Google Maps para exibição no rodapé, exemplo: https://www.google.com/maps/place/Rua+do+Com%C3%A9rcio,+25+-+Centro,+Santos+-+SP,+11010-122/@-23.9333249,-46.333184,17z/data=!3m1!4b1!4m5!3m4!1s0x94ce0483a3d5380d:0x31026716ad7a3f4e!8m2!3d-23.9333249!4d-46.3309953',
    ]);

    $cmb_contact->add_field([
        'name' => 'Telefone para o link',
        'id' => 'ugly-phone-number',
        'type' => 'text',
        'desc' => 'Número de telefone que será usado para o link do WhatsApp, e deve ser escrito da seguinte forma: 55139999999999, tudo junto e com o DDD 55 no início',
    ]);
    $cmb_contact->add_field([
        'name' => 'Telefone',
        'id' => 'phone-number',
        'type' => 'text',
        'desc' => 'Número de telefone escrito normalmente, exemplo: (13) 99999 - 9999, que será exibido também no rodapé do site',
    ]);

    $cmb_contact->add_field([
        'name' => 'Endereço de e-mail',
        'id' => 'email',
        'type' => 'text',
        'desc' => 'Endereço de e-mail que será exibido também no rodapé do site',
    ]);

    $cmb_contact->add_field([
        'name' => 'Link para o Facebook da empresa',
        'id' => 'facebook',
        'type' => 'text',
        'desc' => 'Exemplo: https://www.facebook.com/jicassessoria',
    ]);
    $cmb_contact->add_field([
        'name' => 'Link para o Instagram da empresa',
        'id' => 'instagram',
        'type' => 'text',
        'desc' => 'Exemplo: https://www.instagram.com/jic.imob/',
    ]);
    $cmb_contact->add_field([
        'name' => 'Link para o YouTube da empresa',
        'id' => 'youtube',
        'type' => 'text',
        'desc' => 'Exemplo: https://www.youtube.com/channel/UCGS7ddYXctjbc4uVGKY3ZLQ',
    ]);

    $faq = $cmb_contact->add_field([
        'name' => 'Perguntas Frequentes',
        'id' => 'perguntas',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => '{#}ª Pergunta',
            'add_button' => 'Adicionar pergunta',
            'remove_button' => 'Remover pergunta',
            'sortable' => true,
        ],
    ]);
    $cmb_contact->add_group_field($faq, [
        'name' => 'Pergunta',
        'id' => 'pergunta',
        'type' => 'text',
        'desc' => 'Pergunta como "por onde posso entrar em contato com a empresa?" e etc',
    ]);
    $cmb_contact->add_group_field($faq, [
        'name' => 'Resposta para a pergunta',
        'id' => 'resposta',
        'type' => 'textarea_small',
        'desc' => 'Breve resposta para a pergunta acima',
    ]);
}

add_action('init', 'custom_post_type_imoveis');
function custom_post_type_imoveis()
{
    register_post_type('imoveis', array(
        'label' => 'Imóveis',
        'description' => 'Imóveis',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'anuncios', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),

        'labels' => array(
            'name' => 'Imóveis',
            'singular_name' => 'Imóvel',
            'menu_name' => 'Imóveis',
            'add_new' => 'Adicionar novo',
            'add_new_item' => 'Adicionar novo imóvel',
            'edit' => 'Editar',
            'edit_item' => 'Editar imóvel',
            'new_item' => 'Novo imóvel',
            'view' => 'Ver imóvel',
            'view_item' => 'Ver imóvel',
            'search_items' => 'Procurar imóveis',
            'not_found' => 'Nenhum imóvel encontrado.',
            'not_found_in_trash' => 'Nenhum imóvel encontrado na lixeira.',
            "item_published" => 'Anúncio publicado.',
            "item_published_privately " => "Anúncio publicado de forma privada.",
            "item_reverted_to_draft" => 'Anúncio movido para "rascunhos".',
            "item_scheduled" => "Anúncio agendado.",
            "item_updated" => "Anúncio atualizado."
        ),
    ));

    $conditionLabels = array(
        'name' => __('Condição'),
        'singular_name' => __('Condição'),
        'search_items' => __('Buscar'),
        'popular_items' => __('Mais utilizadas'),
        'all_items' => __('Todas as condições'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Editar condição'),
        'update_item' => __('Atualizar'),
        'add_new_item' => __('Adicionar nova condição'),
        'new_item_name' => __('Nova condição')
    );
    register_taxonomy('condicao_imoveis', array('imoveis'), array(
            'hierarchical' => true,
            'labels' => $conditionLabels,
            'singular_label' => 'condicao_imovel',
            'all_items' => 'Condições',
            'query_var' => true,
            'rewrite' => array('slug' => 'cat'))
    );

    $categoryLabels = array(
        'name' => __('Categoria'),
        'singular_name' => __('Categoria'),
        'search_items' => __('Buscar'),
        'popular_items' => __('Mais utilizadas'),
        'all_items' => __('Todas as categorias'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Editar categoria'),
        'update_item' => __('Atualizar'),
        'add_new_item' => __('Adicionar nova categoria'),
        'new_item_name' => __('Nova categoria')
    );
    register_taxonomy('categoria_imoveis', array('imoveis'), array(
            'hierarchical' => true,
            'labels' => $categoryLabels,
            'singular_label' => 'categoria_imovel',
            'all_items' => 'Categorias',
            'query_var' => true,
            'rewrite' => array('slug' => 'cat'))
    );

    $typeLabels = array(
        'name' => __('Tipo'),
        'singular_name' => __('Tipo'),
        'search_items' => __('Buscar'),
        'popular_items' => __('Mais utilizadas'),
        'all_items' => __('Todas os tipos'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Editar tipos'),
        'update_item' => __('Atualizar'),
        'add_new_item' => __('Adicionar novo tipo'),
        'new_item_name' => __('Novo tipo')
    );
    register_taxonomy('tipo_imoveis', array('imoveis'), array(
            'hierarchical' => true,
            'labels' => $typeLabels,
            'singular_label' => 'tipo_imovel',
            'all_items' => 'Tipos',
            'query_var' => true,
            'rewrite' => array('slug' => 'cat'))
    );

    flush_rewrite_rules();
}

add_action('cmb2_admin_init', 'cmb2_fields_imovel');

function cmb2_fields_imovel()
{
    $cmb_imovel = new_cmb2_box([
        'id' => 'imovel_box',
        'title' => 'Imóveis',
        'object_types' => ['imoveis'],
    ]);

    $cmb_imovel->add_field(array(
        'name' => 'Tipo do Anúncio',
        'id' => 'anuncio-type',
        'taxonomy' => 'categoria_imoveis',
        'type' => 'taxonomy_multicheck_inline',
        'select_all_button' => false,
        'remove_default' => true,
        'show_option_none' => false,
        'text' => array(
            'no_terms_text' => 'Nenhum tipo foi cadastrado.'
        ),
    ));
    $cmb_imovel->add_field(array(
        'name' => 'Estado do Imóvel',
        'id' => 'imovel-state',
        'taxonomy' => 'condicao_imoveis',
        'type' => 'taxonomy_radio_inline',
        'remove_default' => true,
        'show_option_none' => false,
        'text' => array(
            'no_terms_text' => 'Nenhum estado foi cadastrado.'
        ),
    ));
    $cmb_imovel->add_field(array(
        'name' => 'Tipo do Imóvel',
        'id' => 'imovel-type',
        'taxonomy' => 'tipo_imoveis',
        'type' => 'taxonomy_radio_inline',
        'remove_default' => true,
        'show_option_none' => false,
        'text' => array(
            'no_terms_text' => 'Nenhum tipo foi cadastrado.'
        ),
    ));
    $cmb_imovel->add_field([
        'name' => 'Cidade do imóvel',
        'id' => 'city',
        'type' => 'text',
        'desc' => 'Cidade do imóvel, por exemplo: Santos, São Vicente, Praia Grande, etc.',
    ]);
    $cmb_imovel->add_field([
        'name' => 'Preço do imóvel',
        'id' => 'preço',
        'type' => 'text',
        'desc' => 'Preço referente ao imóvel',
    ]);
    $cmb_imovel->add_field([
        'name' => 'Iptu',
        'id' => 'iptu',
        'type' => 'text',
        'desc' => 'Valor referente ao iptu do imóvel',
    ]);
    $cmb_imovel->add_field([
        'name' => 'Bairro do imóvel',
        'id' => 'neighbourhood',
        'type' => 'text',
        'desc' => 'Bairro do imóvel, por exemplo: Náutica III, Centro, Aparecida, etc.',
    ]);
    $images = $cmb_imovel->add_field([
        'name' => 'Imagens do imóvel',
        'desc' => 'Imagens do imóvel para o carrossel da página de detalhes do imóvel (a primeira imagem será a que ficará em destaque nas telas de listagem de imóveis)',
        'id' => 'images',
        'type' => 'group',
        'repeatable' => true,
        'options' => [
            'group_title' => '{#}ª imagem',
            'add_button' => 'Adicionar imagem',
            'remove_button' => 'Remover imagem',
            'sortable' => true
        ]
    ]);
    $cmb_imovel->add_group_field($images, [
        'name' => 'Imagem',
        'id' => 'inner-image',
        'type' => 'file',
        'options' => [
            'url' => false,
        ],
    ]);
    $cmb_imovel->add_field([
        'name' => 'Quantidade de dormitórios',
        'id' => 'dorms-quantity',
        'type' => 'text',
        'desc' => 'Quantidade de dormitórios do imóvel (SE NÃO HOUVER, INSERIR DOIS TRAÇOS COMO: "--")',
    ]);
    $cmb_imovel->add_field([
        'name' => 'Quantidade de suítes',
        'id' => 'suites-quantity',
        'type' => 'text',
        'desc' => 'Quantidade de suítes do imóvel (SE NÃO HOUVER, INSERIR DOIS TRAÇOS COMO: "--")',
    ]);
    $cmb_imovel->add_field([
        'name' => 'Quantidades de banheiros',
        'id' => 'bathroom-quantity',
        'type' => 'text',
        'desc' => 'Quantidade de banheiros do imóvel (SE NÃO HOUVER, INSERIR DOIS TRAÇOS COMO: "--")',
    ]);
    $cmb_imovel->add_field([
        'name' => 'Área do imóvel',
        'id' => 'area-quantity',
        'type' => 'text',
        'desc' => 'Inserir a área em metros quadrados e inserir apenas o número, como: "55"',
    ]);
    $cmb_imovel->add_field([
        'name' => 'Vagas de carro',
        'id' => 'parking-quantity',
        'type' => 'text',
        'desc' => 'Quantidade de vagas de estacionamento do imóvel (SE NÃO HOUVER, INSERIR DOIS TRAÇOS COMO: "--")',
    ]);
    $cmb_imovel->add_field([
        'name' => 'Endereço do Imóvel',
        'id' => 'address',
        'type' => 'textarea_small',
        'desc' => 'Logradouro completo do imóvel anunciado.',
    ]);
    $cmb_imovel->add_field([
        'name' => 'Detalhes do imóvel',
        'id' => 'detalhe',
        'type' => 'textarea_large',
        'desc' => 'informar de forma mais completa detalhes do imóvel a ser vendido',
    ]);
}


?>
