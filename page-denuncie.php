<?php
/* Template Name: Denuncie */
/**
 * The template for displaying denuncie page
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
    <section class="report-header">
      <h1 class="title">Professor/a, denuncie ataques à sua liberdade de ensinar!</h1>
      <div class="paragraphs">
        <p>Através desse formulário, o grupo Professores contra o Escola Sem Partido busca coletar dados sobre os efeitos da atuação do Movimento Escola Sem Partido (ESP) e seus ataques à liberdade de ensinar de professoras e professores de todo o Brasil. Embora poucos projetos de lei tenham sido de fato aprovados e sancionados, sabemos que o movimento vem encontrando sucesso nas suas campanhas de perseguição e censura. </p>
        <p>O objetivo desse formulário é construir um banco de dados para auxiliar na organização de sistemas de apoio jurídico, produção de conteúdo jornalístico, etc, sobre os efeitos antidemocráticos do ESP. Nossa meta é que esses casos de perseguição e censura consigam ter um maior alcance junto às instituições e meios acadêmicos e jurídicos. Assim,  buscaremos conscientizar todas e todos do perigo desses projetos para uma educação pública de qualidade.</p>
        <p>Por isso pedimos que, ao descrever o seu caso, cite as informações necessárias para que nós - e eventuais pesquisadores, jornalistas, advogados, etc - possamos compreender a dimensão e os efeitos reais da perseguição perpetrada contra educadores. </p>
        <p><em>NENHUMA</em> informação será divulgada sem que haja consentimento de sua parte. </p>
        <p>Quaisquer dúvidas, fale conosco pelo email: professorescontraoesp@gmail.com.</p>
      </div>
    </section>
    <form class="report-form">
      <label for="name">1 - Nome completo:</label>
      <input type="text" id="name" name="name" value="" placeholder="seu nome">
      <label for="cpf">2 - CPF (precisamos disso para garantir que somente pessoas reais preencham esse formulário)</label>
      <input type="text" id="cpf" name="cpf" value="" placeholder="seu CPF">
      <input class="esm-button" type="submit" name="" value="Próximo">
    </form>
  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
