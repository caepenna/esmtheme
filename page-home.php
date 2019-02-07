<?php
/**
 * The template for displaying all pages
 *
 * @package ESM
 */
  get_template_part( 'partials/header' );
?>

<?php
  $baseurl = get_template_directory_uri();
?>

<?php while ( have_posts() ) : the_post(); ?>

  <main>

    <section>
      <div class="logo">
        <h1>Frente Nacional Escola Sem Mordaça</h1>
      </div>
      <p>Aqui você encontra as orientações que precisa para enfrentar a censura nas escolas. Pais, alunos, o corpo técnico das escolas também estão convidados a aprenderem um pouco mais.</p>
      <a href="#">conheça a frente</a>
    </section>

    <section>
      <h2>Educador, proteja-se!</h2>
      <p>Aqui você encontra as orientações que precisa para enfrentar a censura nas escolas. Pais, alunos, o corpo técnico das escolas também estão convidados a aprenderem um pouco mais.</p>
      <a href="#">conheça a frente</a>
    </section>

  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
