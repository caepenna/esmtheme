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
        <h1 class="title">Frente</br>Nacional</br>Escola</br>Sem</br><span class="-strike">Mordaça</span></h1>
      </div>
      <p><?php the_content(); ?></p>
      <a class="link" href="<?php echo $botao_capa['url']; ?>"><?php echo $botao_capa['title']; ?></a>
    </section>

		<?php get_template_part( 'partials/slider', 'cases' ); ?>

		<section class="section-news">
<<<<<<< HEAD
      <h2>Notícias</h2>
				<?php get_template_part( 'partials/slider', 'posts' ); ?>
      	<a href="/noticias">Mais notícias</a>
    </section>

		<section class="section-books">
      <h2>Conheça a causa, suas origens e seus fundamentos.</h2>
			<?php get_template_part( 'partials/slider', 'books' ); ?>
      <a href="<?php echo get_post_type_archive_link('livro');?>">Mais livros</a>
=======
      <h2 class="title -uppercase">Notícias</h2>
			<?php get_template_part( 'partials/slider', 'archive' ); ?>
>>>>>>> a171a8bb3508a795bad2e6633c80f114b113a0b7
    </section>

  </main>

<?php endif; ?>

<?php get_template_part( 'partials/footer' ); ?>
