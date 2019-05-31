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
	$botao_capa = get_field('botao_capa');
?>

<?php if ( have_posts() ) : the_post(); ?>

  <main>

    <section class="section-hero">
      <div class="board">
        <h1 class="title">Frente</br>Nacional</br>Escola Sem</br><span class="-strike">Mordaça</span></h1>
      </div>
      <?php the_content(); ?>
      <!-- O Wordpress tá printando uns <p> a mais aqui -->
      <a class="link" href="<?php echo $botao_capa['url']; ?>"><?php echo $botao_capa['title']; ?></a>
    </section>

    <?php get_template_part( 'partials/slider', 'cases' ); ?>

		<section class="section-news">
      <h2 class="title">Notícias</h2>
			<?php get_template_part( 'partials/slider', 'archive' ); ?>
    	<a class="link" href="/noticias">Mais notícias</a>
    </section>

		<section class="section-books">
      <h2 class="-uppercase">Conheça a causa, <em>suas origens</em> e <em>fundamentos</em></h2>
      <hr />
			<?php get_template_part( 'partials/slider', 'books' ); ?>
    </section>

  </main>

<?php endif; ?>

<?php get_template_part( 'partials/footer' ); ?>
