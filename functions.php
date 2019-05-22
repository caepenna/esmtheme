<?php
/**
 * ESM functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ESM
 */

if ( ! function_exists( 'esm_setup' ) ) :
  function esm_setup() {
    register_nav_menus( array(
      'header-menu' => esc_html__( 'Header Menu', 'esm' )
    ) );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );
  }
endif;
add_action( 'after_setup_theme', 'esm_setup' );

function esm_scripts() {
  $theme_style = get_template_directory_uri() . '/css/style.css';
  wp_enqueue_style('theme_style', $theme_style);
  wp_deregister_script('jquery');
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), $ver = false, false );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), $ver = false, true );
}
add_action( 'wp_enqueue_scripts', 'esm_scripts' );

function ag_tinymce_paste_as_text( $init ) {
  $init['paste_as_text'] = true;
  return $init;
}
add_filter('tiny_mce_before_init', 'ag_tinymce_paste_as_text');

function custom_editor_styles() {
  add_editor_style( '/css/editor.css');
}
add_action( 'admin_init', 'custom_editor_styles' );


// Custom post types

function cptui_register_my_cpts() {

	/**
	 * Post Type: Projetos.
	 */

	$labels = array(
		"name" => __( "Projetos", "esm" ),
		"singular_name" => __( "Projeto Modelo", "esm" ),
		"menu_name" => __( "Projetos", "esm" ),
		"all_items" => __( "Todos os projetos", "esm" ),
		"add_new" => __( "Adicionar novo", "esm" ),
		"add_new_item" => __( "Adicionar projeto", "esm" ),
		"edit_item" => __( "Editar projeto", "esm" ),
		"new_item" => __( "Novo projeto", "esm" ),
		"view_item" => __( "Ver projeto", "esm" ),
		"view_items" => __( "Ver projetos", "esm" ),
		"search_items" => __( "Procurar projeto", "esm" ),
		"not_found" => __( "Nenhum projeto encontrado", "esm" ),
		"not_found_in_trash" => __( "Nenhum projeto encontrado na lixeira", "esm" ),
		"parent_item_colon" => __( "Projeto ascendente:", "esm" ),
		"featured_image" => __( "Imagem de destaque para este projeto", "esm" ),
		"set_featured_image" => __( "Definir imagem de destaque para este projeto", "esm" ),
		"remove_featured_image" => __( "Remover imagem de destaque para este projeto", "esm" ),
		"use_featured_image" => __( "Usar como imagem de destaque para este projeto", "esm" ),
		"archives" => __( "Arquivos de projetos", "esm" ),
		"insert_into_item" => __( "Insira neste projeto", "esm" ),
		"uploaded_to_this_item" => __( "Enviado para este projeto", "esm" ),
		"filter_items_list" => __( "Filtrar lista de projetos", "esm" ),
		"items_list_navigation" => __( "Navegação na lista de projetos", "esm" ),
		"items_list" => __( "Lista de projetos", "esm" ),
		"attributes" => __( "Atributos dos projetos", "esm" ),
		"name_admin_bar" => __( "Projeto", "esm" ),
		"parent_item_colon" => __( "Projeto ascendente:", "esm" ),
	);

	$args = array(
		"label" => __( "Projetos", "esm" ),
		"labels" => $labels,
		"description" => "Experiências reais, vividas por colegas professores, em diferentes regiões do país.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "projeto", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 6,
		"supports" => array( "title", "editor", "thumbnail", "custom-fields" ),
	);

	register_post_type( "projeto", $args );

	/**
	 * Post Type: Arquivos.
	 */

	$labels = array(
		"name" => __( "Arquivos", "esm" ),
		"singular_name" => __( "Arquivo", "esm" ),
		"menu_name" => __( "Arquivos", "esm" ),
		"all_items" => __( "Todos os arquivos", "esm" ),
		"add_new" => __( "Adicionar novo", "esm" ),
		"add_new_item" => __( "Adicionar arquivo", "esm" ),
		"edit_item" => __( "Editar arquivo", "esm" ),
		"new_item" => __( "Novo arquivo", "esm" ),
		"view_item" => __( "Ver arquivo", "esm" ),
		"view_items" => __( "Ver arquivos", "esm" ),
		"search_items" => __( "Procurar arquivo", "esm" ),
		"not_found" => __( "Nenhum arquivo encontrado", "esm" ),
		"not_found_in_trash" => __( "Nenhum arquivo encontrado na lixeira", "esm" ),
		"parent_item_colon" => __( "Arquivo ascendente:", "esm" ),
		"featured_image" => __( "Imagem de destaque para este arquivo", "esm" ),
		"set_featured_image" => __( "Definir imagem de destaque para este arquivo", "esm" ),
		"remove_featured_image" => __( "Remover imagem de destaque para este arquivo", "esm" ),
		"use_featured_image" => __( "Usar como imagem de destaque para este arquivo", "esm" ),
		"archives" => __( "Arquivos de arquivos", "esm" ),
		"insert_into_item" => __( "Insira neste arquivo", "esm" ),
		"uploaded_to_this_item" => __( "Enviado para este arquivo", "esm" ),
		"filter_items_list" => __( "Filtrar lista de arquivos", "esm" ),
		"items_list_navigation" => __( "Navegação na lista de arquivos", "esm" ),
		"items_list" => __( "Lista de arquivos", "esm" ),
		"attributes" => __( "Atributos dos arquivos", "esm" ),
		"name_admin_bar" => __( "Arquivo", "esm" ),
		"parent_item_colon" => __( "Arquivo ascendente:", "esm" ),
	);

	$args = array(
		"label" => __( "Arquivos", "esm" ),
		"labels" => $labels,
		"description" => "Experiências reais, vividas por colegas professores, em diferentes regiões do país.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "arquivo", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 7,
		"supports" => array( "title", "editor", "thumbnail", "custom-fields" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "arquivo", $args );

	/**
	 * Post Type: Vídeos.
	 */

	$labels = array(
		"name" => __( "Vídeos", "esm" ),
		"singular_name" => __( "Vídeo Modelo", "esm" ),
		"menu_name" => __( "Vídeos", "esm" ),
		"all_items" => __( "Todos os vídeos", "esm" ),
		"add_new" => __( "Adicionar novo", "esm" ),
		"add_new_item" => __( "Adicionar vídeo", "esm" ),
		"edit_item" => __( "Editar vídeo", "esm" ),
		"new_item" => __( "Novo vídeo", "esm" ),
		"view_item" => __( "Ver vídeo", "esm" ),
		"view_items" => __( "Ver vídeos", "esm" ),
		"search_items" => __( "Procurar vídeo", "esm" ),
		"not_found" => __( "Nenhum vídeo encontrado", "esm" ),
		"not_found_in_trash" => __( "Nenhum vídeo encontrado na lixeira", "esm" ),
		"parent_item_colon" => __( "Vídeo ascendente:", "esm" ),
		"featured_image" => __( "Imagem de destaque para este vídeo", "esm" ),
		"set_featured_image" => __( "Definir imagem de destaque para este vídeo", "esm" ),
		"remove_featured_image" => __( "Remover imagem de destaque para este vídeo", "esm" ),
		"use_featured_image" => __( "Usar como imagem de destaque para este vídeo", "esm" ),
		"archives" => __( "Arquivos de vídeos", "esm" ),
		"insert_into_item" => __( "Insira neste vídeo", "esm" ),
		"uploaded_to_this_item" => __( "Enviado para este vídeo", "esm" ),
		"filter_items_list" => __( "Filtrar lista de vídeos", "esm" ),
		"items_list_navigation" => __( "Navegação na lista de vídeos", "esm" ),
		"items_list" => __( "Lista de vídeos", "esm" ),
		"attributes" => __( "Atributos dos vídeos", "esm" ),
		"name_admin_bar" => __( "Vídeo", "esm" ),
		"parent_item_colon" => __( "Vídeo ascendente:", "esm" ),
	);

	$args = array(
		"label" => __( "Vídeos", "esm" ),
		"labels" => $labels,
		"description" => "Experiências reais, vividas por colegas professores, em diferentes regiões do país.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "video", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 9,
		"supports" => array( "title", "editor", "thumbnail", "custom-fields" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "video", $args );

	/**
	 * Post Type: Livros.
	 */

	$labels = array(
		"name" => __( "Livros", "esm" ),
		"singular_name" => __( "Livro", "esm" ),
		"menu_name" => __( "Livros", "esm" ),
		"all_items" => __( "Todos os livros", "esm" ),
		"add_new" => __( "Adicionar novo", "esm" ),
		"add_new_item" => __( "Adicionar livro", "esm" ),
		"edit_item" => __( "Editar livro", "esm" ),
		"new_item" => __( "Novo livro", "esm" ),
		"view_item" => __( "Ver livro", "esm" ),
		"view_items" => __( "Ver livros", "esm" ),
		"search_items" => __( "Procurar livro", "esm" ),
		"not_found" => __( "Nenhum livro encontrado", "esm" ),
		"not_found_in_trash" => __( "Nenhum livro encontrado na lixeira", "esm" ),
		"parent_item_colon" => __( "Livro ascendente:", "esm" ),
		"featured_image" => __( "Imagem de destaque para este livro", "esm" ),
		"set_featured_image" => __( "Definir imagem de destaque para este livro", "esm" ),
		"remove_featured_image" => __( "Remover imagem de destaque para este livro", "esm" ),
		"use_featured_image" => __( "Usar como imagem de destaque para este livro", "esm" ),
		"archives" => __( "Arquivos de livros", "esm" ),
		"insert_into_item" => __( "Insira neste livro", "esm" ),
		"uploaded_to_this_item" => __( "Enviado para este livro", "esm" ),
		"filter_items_list" => __( "Filtrar lista de livros", "esm" ),
		"items_list_navigation" => __( "Navegação na lista de livros", "esm" ),
		"items_list" => __( "Lista de livros", "esm" ),
		"attributes" => __( "Atributos dos livros", "esm" ),
		"name_admin_bar" => __( "Livro", "esm" ),
		"parent_item_colon" => __( "Livro ascendente:", "esm" ),
	);

	$args = array(
		"label" => __( "Livros", "esm" ),
		"labels" => $labels,
		"description" => "Experiências reais, vividas por colegas professores, em diferentes regiões do país.",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "livro", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 8,
		"supports" => array( "title", "editor", "thumbnail", "custom-fields" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "livro", $args );

	/**
	 * Post Type: Casos Modelo.
	 */

	$labels = array(
		"name" => __( "Casos Modelo", "esm" ),
		"singular_name" => __( "Caso Modelo", "esm" ),
		"menu_name" => __( "Casos modelo", "esm" ),
		"all_items" => __( "Todos os casos", "esm" ),
		"add_new" => __( "Adicionar novo", "esm" ),
		"add_new_item" => __( "Adicionar caso", "esm" ),
		"edit_item" => __( "Editar caso", "esm" ),
		"new_item" => __( "Novo caso", "esm" ),
		"view_item" => __( "Ver caso", "esm" ),
		"view_items" => __( "Ver casos", "esm" ),
		"search_items" => __( "Procurar caso", "esm" ),
		"not_found" => __( "Nenhum caso encontrado", "esm" ),
		"not_found_in_trash" => __( "Nenhum caso encontrado na lixeira", "esm" ),
		"parent_item_colon" => __( "Caso ascendente:", "esm" ),
		"featured_image" => __( "Imagem de destaque para este caso", "esm" ),
		"set_featured_image" => __( "Definir imagem de destaque para este caso", "esm" ),
		"remove_featured_image" => __( "Remover imagem de destaque para este caso", "esm" ),
		"use_featured_image" => __( "Usar como imagem de destaque para este caso", "esm" ),
		"archives" => __( "Arquivos de casos", "esm" ),
		"insert_into_item" => __( "Insira neste caso", "esm" ),
		"uploaded_to_this_item" => __( "Enviado para este caso", "esm" ),
		"filter_items_list" => __( "Filtrar lista de casos", "esm" ),
		"items_list_navigation" => __( "Navegação na lista de casos", "esm" ),
		"items_list" => __( "Lista de casos", "esm" ),
		"attributes" => __( "Atributos dos casos", "esm" ),
		"name_admin_bar" => __( "Caso", "esm" ),
		"parent_item_colon" => __( "Caso ascendente:", "esm" ),
	);

	$args = array(
		"label" => __( "Casos Modelo", "esm" ),
		"labels" => $labels,
		"description" => "Experiências reais, vividas por colegas professores, em diferentes regiões do país.",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "caso", "with_front" => true ),
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "thumbnail", "custom-fields" ),
	);

	register_post_type( "caso", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


// Advanced custom fields

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title' 	=> 'Global Content',
    'menu_title'	=> 'Global Content',
    'menu_slug' 	=> 'global-content'
  ));
}

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5ce042d60fe2d',
	'title' => 'Estratégias',
	'fields' => array(
		array(
			'key' => 'field_5ce0433bfd034',
			'label' => 'Estratégias',
			'name' => 'estrategias',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5ce0439bfd035',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Adicionar estratégia',
			'sub_fields' => array(
				array(
					'key' => 'field_5ce0439bfd035',
					'label' => 'Título',
					'name' => 'titulo',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '66.66666',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5ce043b1fd037',
					'label' => 'Imagem',
					'name' => 'imagem',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33.33333',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'id',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5ce043a4fd036',
					'label' => 'Texto',
					'name' => 'texto',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '100',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => 'br',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-tactics.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ce04dc0ad483',
	'title' => 'Página',
	'fields' => array(
		array(
			'key' => 'field_5ce04dc5a9ec3',
			'label' => 'Título Curto',
			'name' => 'titulo_curto',
			'type' => 'text',
			'instructions' => 'Título a ser exibido no cabeçalho da página e no menu',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ce04e4fa9ec4',
			'label' => 'Voltar ao topo',
			'name' => 'voltar_ao_topo',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ce03bd2ae850',
	'title' => 'Página Inicial',
	'fields' => array(
		array(
			'key' => 'field_5ce03c6c50373',
			'label' => 'Botão da Capa',
			'name' => 'botao_capa',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ce2a3bc665ed',
	'title' => 'Caso Modelo',
	'fields' => array(
		array(
			'key' => 'field_5ce2c03e34813',
			'label' => 'Depoimento',
			'name' => 'depoimento',
			'type' => 'text',
			'instructions' => 'Resumo do caso de censura em uma frase curtíssima, utilizada na página inicial. Deve gerar uma identificação imediata no leitor que já vivenciou a situação.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5ce2a3c44704e',
			'label' => 'Intro',
			'name' => 'intro',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5ce2bbf38dbdc',
			'label' => 'Detalhes',
			'name' => 'detalhes',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5ce2bf14778b9',
			'label' => 'Como se proteger?',
			'name' => 'como_se_proteger',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'caso',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'slug',
	),
	'active' => true,
	'description' => '',
));

endif;
