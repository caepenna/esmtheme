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
  <body <?php if ( is_front_page() ): echo 'class="home"'; endif; ?> >
    <?php if ( is_front_page() ): ?>
      <header class="esm-header -home">
    <?php else: ?>
      <header class="esm-header">
    <?php endif; ?>
      <button class="menu js-menu" type="button" name="button"></button>
      <h1 class="title">
        <?php
          if($page_title):
            echo $page_title;
          else:
            the_field(titulo_curto);
          endif;
        ?>
      </h1>
      <div class="navigation">
        <div class="links">
          <?php wp_nav_menu(
            array(
              'theme_location' => 'header-menu',
              'container' => '',
              'container_id' => '',
              'container_class' => 'container-class',
              'items_wrap' => '<ul>%3$s</ul>'
            )
          ); ?>
          <div class="medias">
            <a class="facebook" href="#">Facebook</a>
            <a class="twitter" href="#">Twitter</a>
            <a class="instagram" href="#">Instagram</a>
            <a class="youtube" href="#">Youtube</a>
          </div>
        </div>
        <img src="<?php echo $baseurl.'/assets/images/logo.svg' ?>" alt="Frente Nacional Escola sem Mordaça">
      </div>
    </header>
