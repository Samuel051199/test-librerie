<?php

/**
 * Template Name: Page Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

global $post;

$intervallo = get_field('intervallo', $post->ID);

?>

<body>
    

<h1><?php echo $intervallo; ?></h1>

<?php acf_form_head(); ?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php acf_form(array(
        'post_id'       => 123,
        $title = 'post_title'    => true,
        'post_content'  => true,
        'submit_value'  => __('Submit')
    )); ?>
    <?php endwhile; ?>
    </div><!-- #content -->
    </div><!-- #primary -->
    <?php 

    if(isset($_GET['post_title'])) {
        $_GET = cambiaStatoTitolo();
    }

    function cambiaStatoTitolo($title)
    {
        if($title == true)
        $title = false;
        else
        $title == true;
    }
    
    var_dump($title);

    
    ?>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>

</body>
<?php
