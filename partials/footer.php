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
          <p class="subtitle">Participe da nossa lista de e-mails e fique por dentro de todas as novidades sobre a Frente, projetos e ações parceiros.</p>
          <form class="form" action="index.html" method="post">
            <input type="text" name="name" placeholder="seu nome">
            <input type="text" name="email" placeholder="seu e-mail">
            <br>
            <button type="submit">Cadastrar</button>
          </form>
        </div>
      </section>

      <footer class="esm-footer">
        <div class="left">
          <img src="" alt="Frente Nacional Escola sem Mordaça">
        </div>
        <div class="right">
          <h4>Encontre a Frente nas mídias:</h4>
          <nav class="medias">
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">Youtube</a>
            <a href="#">Flickr</a>
          </nav>
        </div>
    </footer>

    <?php wp_footer(); ?>

  </body>

</html>
