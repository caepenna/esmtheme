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

    <footer class="esm-footer">

      <section>
        <div class="board">
          <h2>Acompanhe a Frente</h2>
          <p>Participe da nossa lista de e-mails e fique por dentro de todas as novidades sobre a Frente, projetos e ações parceiros.</p>
          <form class="" action="index.html" method="post">
            <input type="text" name="name" placeholder="seu nome">
            <input type="text" name="email" placeholder="seu e-mail">
            <button type="submit">Cadastrar</button>
          </form>
        </div>
      </section>

      <section>
        <div class="left">
          <img src="" alt="">
        </div>
        <div class="right">
          <h3>Encontre a Frente nas mídias:</h3>
          <nav>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">Youtube</a>
            <a href="#">Flickr</a>
          </nav>
        </div>
      </section>

    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
