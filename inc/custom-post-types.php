<?php

function bw_register_cpts_reviews()
{
    /**
     * Post Type: Reviews.
     */
    $labels = array(
        'name' => __('Reviews', 'brainworks'),
        'singular_name' => __('Review', 'brainworks'),
    );

    $args = array(
        'label' => __('Reviews', 'brainworks'),
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'delete_with_user' => false,
        'show_in_rest' => false,
        'rest_base' => 'reviews',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'has_archive' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'reviews', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('reviews', $args);
}

add_action('init', 'bw_register_cpts_reviews');


/**
 * Custom post tupe category * 
 */
function sn_register_post_types()
{
    register_post_type('catalog', array(
        'labels' => array(
            'name'               => 'Каталоги', // основное название для типа записи
            'singular_name'      => 'Каталог', // название для одной записи этого типа
            'add_new'            => 'Добавить каталог', // для добавления новой записи
            'add_new_item'       => 'Добавленный каталог', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактировать каталог', // для редактирования типа записи
            'new_item'           => 'Новый каталоги', // текст новой записи
            'view_item'          => 'Посмотреть', // для просмотра записи этого типа.
            'search_items'       => 'Искать', // для поиска по этим типам записи
            'not_found'          => 'Не найтден', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найтден в карзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Каталог', // название меню
        ),
        'public'              => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-list-view',
        'supports'            => ['title', 'editor', 'thumbnail', 'custom-fields', 'post-formats'],
        'has_archive'         => 'catalog',
    ));

    register_taxonomy(
        'sn_catalogs',
        'catalog',
        array(
            'label' => __('Категории'),
            'rewrite' => array('slug' => 'category-prod'),
            'hierarchical' => true,
        )
    );
}

add_action('init', 'sn_register_post_types');
