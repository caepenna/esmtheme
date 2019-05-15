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
    <link rel="stylesheet" href="https://use.typekit.net/zgj0rir.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="esm-header">
      <button class="menu js-menu" type="button" name="button"></button>
      <h1 class="title">Título da página</h1>
      <div class="navigation">
        <nav>
          <a href="#">Início</a>
          <a href="#">Estratégias</a>
          <a href="#">Casos modelo</a>
          <a href="#">Downloads</a>
          <a href="#">Bibliografia</a>
          <a href="#">Projetos</a>
          <a href="#">Blog</a>
        </nav>
        <img src="" alt="Frente Nacional Escola sem Mordaça">
      </div>
    </header>
