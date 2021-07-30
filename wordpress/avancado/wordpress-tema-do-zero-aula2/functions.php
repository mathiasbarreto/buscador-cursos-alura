<?php

add_theme_support( 'post-thumbnails' );


$labels = array(
'name' => 'Imóveis'
'name_singular' => 'Imóvel'
);

$args = array(
	'public' => true
	'labels' => $labels,

);

register_post_type('imoveis', $args);
