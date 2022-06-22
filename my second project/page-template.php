<?php

/**
 * Template Name: Page Template
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

global $post;

$testo = get_field('testo', $post->ID);
$link = get_field('link', $post->ID);
?>

<body>
<?php $testo = "ciao";?>
<p><?php echo $testo; ?></p>
<p><?php echo $link; ?></p>



<h1>Hello World</h1>
</body>
<?php
