<?php

/**
 * Template Name: Page Archive-Template
 *
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

global $post;

$data = get_field('data', $post->ID);
$colore = get_field('colore', $post->ID);

?>
<body>
    

<p><?php echo $data; ?></p>
<p><?php echo $colore; ?></p>

<h1>Hello</h1>
</body>
<?php