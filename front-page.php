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

    <section class="section-hero">
      <div class="board">
        <h1 class="title">Frente</br>Nacional</br>Escola</br>Sem</br><span class="-strike">Mordaça</span></h1>
      </div>
      <p><?php the_content(); ?></p>
      <a href="<?php echo $botao_capa['url']; ?>"><?php echo $botao_capa['title']; ?></a>
    </section>

    <section>
      <h2>Educador, proteja-se!</h2>
      <p>Aqui você encontra as orientações que precisa para enfrentar a censura nas escolas. Pais, alunos, o corpo técnico das escolas também estão convidados a aprenderem um pouco mais.</p>
      <a class="link" href="#">conheça a frente</a>
    </section>

		<?php get_template_part( 'partials/slider', 'casos' ); ?>

		<section>
      <h2>Notícias</h2>
				<?php get_template_part( 'partials/slider', 'archive' ); ?>
      <a href="<?php echo get_post_type_archive_link('post');?>">Mais notícias</a>
    </section>

  </main>

<?php endif; ?>

<?php
  get_template_part( 'partials/footer' );
?>
