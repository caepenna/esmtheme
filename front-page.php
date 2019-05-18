<?php
/* Template Name: Home */
/**
 * The template for displaying the home
 *
 * @package ESM
 */
	get_template_part( 'partials/header' );
?>

<?php
	// vars
  $baseurl = get_template_directory_uri();
	$botao_capa = get_field('botao_capa');
?>

<?php if ( have_posts() ) : the_post(); ?>

  <main>

    <section>
      <div class="logo">
        <h1>Frente Nacional Escola Sem Mordaça</h1>
      </div>
      <p><?php the_content(); ?></p>
      <a href="<?php echo $botao_capa['url']; ?>"><?php echo $botao_capa['title']; ?></a>
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
            <h4>Categoria</h4>
            <h3>Exemplo de notícia: título curto em duas linhas</h3>
          </div>
        </li>
        <li>
          <img src="" alt="">
          <div class="">
            <h4>Categoria</h4>
            <h3>Exemplo de notícia: título curto em duas linhas</h3>
          </div>
        </li>
        <li>
          <img src="" alt="">
          <div class="">
            <h4>Categoria</h4>
            <h3>Exemplo de notícia: título curto em duas linhas</h3>
          </div>
        </li>
      </ul>
    </section>

  </main>

<?php endif; ?>

<?php
  get_template_part( 'partials/footer' );
?>
