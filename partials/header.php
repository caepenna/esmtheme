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
      <h1 class="title">?php the_field(titulo_curto); ?></h1>
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

    <main>

      <section class="section-hero">
        <div class="board">
          <h1 class="title">Frente</br>Nacional</br>Escola Sem</br><span class="-strike">Mordaça</span></h1>
        </div>
        <p>Aqui você encontra as orientações que precisa para enfrentar a censura nas escolas. Pais, alunos, o corpo técnico das escolas também estão convidados a aprenderem um pouco mais.</p>
        <a class="link" href="#">conheça a frente</a>
      </section>

      <section>
        <h2>Educador, proteja-se!</h2>
        <p>Aqui você encontra as orientações que precisa para enfrentar a censura nas escolas. Pais, alunos, o corpo técnico das escolas também estão convidados a aprenderem um pouco mais.</p>
        <a href="#">conheça a frente</a>
      </section>

      <section>
        <h2>Notícias</h2>
        <ul>
          <li>
            <img src="" alt="">
            <div class="">
              <h4>Cateforia</h4>
              <h3>Exemplo de notícia: título curto em duas linhas</h3>
            </div>
          </li>
          <li>
            <img src="" alt="">
            <div class="">
              <h4>Cateforia</h4>
              <h3>Exemplo de notícia: título curto em duas linhas</h3>
            </div>
          </li>
          <li>
            <img src="" alt="">
            <div class="">
              <h4>Cateforia</h4>
              <h3>Exemplo de notícia: título curto em duas linhas</h3>
            </div>
          </li>
        </ul>
      </section>

    </main>
