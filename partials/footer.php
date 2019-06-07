<?php
/**
 * The template for displaying the footer
 *
 * @package LLAL
 */

?>

<?php
    $baseurl = get_template_directory_uri();
?>


      <section class="section-follow">
        <div class="board">
          <h2 class="title -uppercase">Acompanhe a Frente</h2>
          <p class="subtitle">Caso você esteja sendo perseguido, responda nosso questionário de denúncia.</p>
          <!-- <form class="form" action="index.html" method="post"> -->
            <!-- <input class="esm-input" type="text" name="name" placeholder="seu nome">
            <input class="esm-input" type="text" name="email" placeholder="seu e-mail">
            <br> -->
            <a class="esm-button" href="http://www.parabolicadesign.com/escolasemmordaca/denuncie/">Responder</a>
          <!-- </form> -->
        </div>
      </section>

      <footer class="esm-footer">
        <div class="left">
          <img src="<?php echo $baseurl.'/assets/images/logo.svg' ?>" alt="Frente Nacional Escola sem Mordaça">
        </div>
        <div class="right">
          <h4>Encontre a Frente nas mídias:</h4>
          <nav class="medias">
            <a class="facebook" href="#">Facebook</a>
            <a class="twitter" href="#">Twitter</a>
            <a class="instagram" href="#">Instagram</a>
            <a class="youtube" href="#">Youtube</a>
          </nav>
        </div>
    </footer>

    <?php wp_footer(); ?>

  </body>

</html>
