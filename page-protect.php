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
        <h1>Guia da Resistência</h1>
        <div class="board">
          <h2>Educador, Proteja-se!</h2>
          <p>Você se sente desconfortável em abordar certos temas ou tem sofrido algum tipo de abuso ou pressão por defender uma escola livre de preconceitos e aberta à discussão? Saiba como e a quem recorrer.</p>
        </div>
        <nav>
          <a href="#">Compartilhar</a>
          <a href="#">Baixar</a>
          <a href="#">Imprimir</a>
        </nav>
    </section>

    <section>
      <h2>O professor não pode ser amordaçado</h2>
      <p>Todo aluno tem a liberdade de aprender. Todo professor tem a liberdade de ensinar. Essas duas liberdades só podem ser respeitadas com pluralismo, ou seja, com ideias e visões diferentes são abordadas e debatidas em salada de aula. Política, religião, raça, gênero são tema permitidos e necessárias em sala de aula. Sabe por quê? Por que são essenciais na formação do aluno. Proibir o educador de abordar algum assunto em sala de aula é proibir que o aluno aprenda.</p>
    </section>

    <section>
      <h2>A responsabilidade das instituições de ensino</h2>
      <p>As instituições são empregadoras. Elas são responsáveis por garantir a segurança dos professores e dos demais empregados no ambiente de trabalho. Somente com segurança, eles podem exercer suas atividades de forma plena. Ou seja, elas têm a obrigação de garantir o processo de ensino e aprendizagem, assim como o cumprimento do projeto político-pedagógico. Isso só pode ser feito se as liberdades de manifestação, de pensamento, de expressão e de cátedra forem garantidas.</p>
    </section>

    <section>
      <h2>A aula está protegida pelo direito autoral</h2>
      <p>As aulas e todo material de apoio produzido pelo professor não podem ser divulgados ou reproduzidos sem a sua autorização prévia. Slides, apostilas e o conteúdo verbalizado em sala fazem parte deste material protegido por lei. Quem viola esta regra está sujeito a medidas judiciais. É importante avisar as turmas se gravações e filmagens estão permitidas, ou não. Em caso negativo, os alunos devem ser avisados de que poderá haverá sanções disciplinares para quem descumprir a regra.</p>
    </section>

    <section>
      <h2>O papel das instâncias universitárias</h2>
      <p>Nas instituições de ensino superior, órgãos colegiados são importantes espaços consultivos e deliberativos. Também é comum que esses órgãos regulem questões de âmbito interno. Entre essas questões estão as normas de convívio no ambiente acadêmico, sobretudo, em sala de aula. Regulamentar o uso ou a vedação dos meios de gravação das aulas por alunos ou terceiros, é uma forma de retirar o docente do embate físico e psicológico de tal discussão em sala de aula.</p>
    </section>

  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
