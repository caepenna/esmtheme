<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package LLAL
 */
    get_template_part( 'partials/header' );
?>

<?php
    $baseurl = get_template_directory_uri();
?>

<main>
  <h1><?php echo $message_404 ?></h1>
</main>

<?php get_template_part( 'partials/footer' );
