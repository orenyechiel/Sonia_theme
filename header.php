<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php get_bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body dir="rtl" <?php body_class(); ?>>
    <div class="container-fluid" style="position: relative;">
        <div class="row head">
            <div class="col-sm-12 mb-5">
            
           <?php 
        
            $defaults = array(
                'container' => 'nav',
                'menu_class' => 'mr-5'
            );
        
            wp_nav_menu($defaults);  ?>

            </div>