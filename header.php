<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class='bg-primary text-white p-3'>
  <div class='container d-flex justify-content-between align-items-center'>
    <div class='logo h4'>ShopMate</div>
    <nav><?php wp_nav_menu(array('theme_location'=>'primary','container'=>false,'menu_class'=>'d-flex gap-3')); ?></nav>
  </div>
</header>
<div class='mini-nav bg-light py-2 overflow-auto d-flex gap-2 px-3'></div>
