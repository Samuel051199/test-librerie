<?php

/**
 * Template Name: Page provaLogin
 *
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

global $post;

?>

<?php

if(isset($_POST['submit'])){
    if(wp_verify_nonce($POST['_nonce'], ['submit_user'])){
        //safe to submit data
    }else {
        die('security_check!');
    }
}

?>

<div class="entry-content">
    <form method="post">
        <?php wp_nonce_field( 'submit_user', '_nonce' ); ?>
        <input type="text" name="email" placeholder="Enter Email">
        <input type="password" name="pass" placeholder="Enter Password">
        <input type="hidden" name="_nonce" value="<?php echo wp_create_nonce('submit_user') ?>">
        <button type="button" input type="submit" name="submit" value="Submit"></button>
    </form>
</div>





<?php get_footer(); ?>