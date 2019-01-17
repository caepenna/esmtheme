<?php
/**
 * The header for our theme
 *
 * @package ESM
 */
?>

<?php
  $baseurl = get_template_directory_uri();
?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
    </header>
