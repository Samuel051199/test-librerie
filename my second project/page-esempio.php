<?php

/**
 * Template Name: Page Esempio
 *
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

global $post;

$editor = get_field('editor', $post->ID);



$immagini = get_field('immagini', $post->ID);

foreach ($immagini as $urlImmagine) {
?>
    <img src="<?php echo $urlImmagine ?>" alt="" />
<?php
}

$testo = get_field('testo', $post->ID);

$cellulare = get_field('cellulare', $post->ID);

$email = get_field('email', $post->ID);

$password = get_field('password', $post->ID);

$checkbox = get_field('checkbox', $post->ID);
foreach ($checkbox as $box) {
?>
    <p> <?php echo $box ?></p>
<?php
}

$radiobutton = get_field('radiobutton', $post->ID);

$true = get_field('true', $post->ID);

$false = get_field('false', $post->ID);

$link = get_field('link', $post->ID);

$mappa = get_field('mappa', $post->ID);

$messaggio = get_field('messaggio', $post->ID);

$utente = get_field('utente', $post->ID);

$ora = get_field('ora', $post->ID);

/*foreach ($utente as $user) {
    ?>
      <p> <?php echo $user ?></p>
    <?php
}*/

echo $utente["user_firstname"];

function my_acf_google_map_api($api)
{
    $api['key'] = 'xxx';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


?>
<div style="margin: 0 auto; display:block">
    <p><?php echo $testo; ?></p>
    <p><?php echo $cellulare; ?></p>
    <p><?php echo $email; ?></p>
    <p><?php echo $password; ?></p>
    <p><?php echo $checkbox; ?></p>
    <p><?php echo $radiobutton; ?></p>
    <p><?php echo $true; ?></p>
    <p><?php echo $false; ?></p>
    <a href="<?php echo $link; ?>" target="_blank">
        <p><?php echo $link; ?></p>
    </a>
    <a href="https://www.w3schools.com">Visit W3Schools</a>
    <p><?php echo $messaggio; ?></p>
    <p><?php echo $utente; ?></p>
    <p><?php echo $ora; ?></p>

    <?php echo $box . ' arancione'; ?>

    <?php acf_form_head(); ?>
    
</div>

<?php

get_footer();