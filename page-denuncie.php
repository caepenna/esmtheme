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

      <label for="email">1 - Endereço de e-mail *</label>
      <input type="text" id="email" name="email" value="" placeholder="seu e-mail">


      <label for="name">2 - Nome completo:*</label>
      <input type="text" id="name" name="name" value="" placeholder="seu nome">

      <label for="cpf">3 - CPF (precisamos disso para garantir que somente pessoas reais preencham esse formulário)</label>
      <input type="text" id="cpf" name="cpf" value="" placeholder="seu CPF">

      <div class="select">
        <label for="estado">4 - Estado:*</label>
        <select id="estado" name="estado" placeholder="Selecione seu estado">
          <option value="AC">Acre</option>
          <option value="AL">Alagoas</option>
          <option value="AP">Amapá</option>
          <option value="AM">Amazonas</option>
          <option value="BA">Bahia</option>
          <option value="CE">Ceará</option>
          <option value="DF">Distrito Federal</option>
          <option value="ES">Espírito Santo</option>
          <option value="GO">Goiás</option>
          <option value="MA">Maranhão</option>
          <option value="MT">Mato Grosso</option>
          <option value="MS">Mato Grosso do Sul</option>
          <option value="MG">Minas Gerais</option>
          <option value="PA">Pará</option>
          <option value="PB">Paraíba</option>
          <option value="PR">Paraná</option>
          <option value="PE">Pernambuco</option>
          <option value="PI">Piauí</option>
          <option value="RJ">Rio de Janeiro</option>
          <option value="RN">Rio Grande do Norte</option>
          <option value="RS">Rio Grande do Sul</option>
          <option value="RO">Rondônia</option>
          <option value="RR">Roraima</option>
          <option value="SC">Santa Catarina</option>
          <option value="SP">São Paulo</option>
          <option value="SE">Sergipe</option>
          <option value="TO">Tocantins</option>
        </select>
      </div>

      <div class="field-group">
        <p class="label">5 - Você aceitaria ser entrevistado/a sobre a perseguição que sofreu? *</p>

        <?php $name = "Você aceitaria ser entrevistado/a sobre a perseguição que sofreu?" ?>

        <?php $text = 'Sim'; $slug = slugify($text); ?>
        <input type="radio" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Não'; $slug = slugify($text); ?>
        <input type="radio" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Talvez'; $slug = slugify($text); ?>
        <input type="radio" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

      </div>

      <label for="telefone">6 - Telefone com DDD (opcional)</label>
      <input type="text" id="telefone" name="telefone" value="" placeholder="seu telefone">

      <div class="field-group">

        <p class="label">7 - Onde ocorreu a perseguição? *</p>
        <?php $name = "Onde ocorreu a perseguição?" ?>

        <?php $text = 'Escola pública municipal'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Escola pública estadual'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Escola pública federal'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Colégio militar'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Escola particular'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Nível superior público'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Nível superior privado'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

      </div>

      <div class="field-group">

        <p class="label">8 - Em qual nível de ensino se deu a perseguição? *</p>
        <?php $name = "Em qual nível de ensino se deu a perseguição?" ?>

        <?php $text = 'Educação Infantil'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Ensino fundamental'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Ensino médio'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Ensino superior'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Pós-graduação'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Preparatório / pré-vestibular'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = 'Nível superior privado'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

      </div>

      <label for="local">9 - Qual o local específico?</label>
      <input type="text" id="local" name="local" value="" placeholder="Nome da instituição de ensino">

      <div class="field-group">

        <p class="label">10 - Do que você foi "acusado/a"? *</p>
        <?php $name = 'Do que você foi "acusado/a"?' ?>

        <?php $text = '"Doutrinação"'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = '"Ideologia de gênero" [sic]'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = '"Partidarização do ensino"'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

        <?php $text = '"Proselitismo Religioso"'; $slug = slugify($text); ?>
        <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
        <label for="<?php echo $slug ?>"><?php echo $text ?></label>

      </div>

      <div class="field-group">

        <p class="label">11 - Do que você foi "acusado/a"? *</p>
        <?php
          $name = 'Do que você foi "acusado/a"?';
          $perguntas = array("No meu local de trabalho", "Exposição em rede social", "Notificação extrajudicial", "Processo judicial");
          foreach ($perguntas as $pergunta) { ?>
          <?php $text = $pergunta; $slug = slugify($text); ?>
          <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
          <label for="<?php echo $slug ?>"><?php echo $text ?></label>
        <?php } ?>

      </div>

      <div class="field-group">

        <p class="label">12 - De quem partiu a perseguição? *</p>
        <?php
          $name = 'De quem partiu a perseguição? ';
          $perguntas = array("Aluno / responsável", "Algum político (vereador, deputado, senador, ministro etc)", "Grupo religioso", "Movimento político (Escola Sem Partido, MBL etc)", "Colegas, direção da escola, secretaria de educação", "Ministério Público");
          foreach ($perguntas as $pergunta) { ?>
          <?php $text = $pergunta; $slug = slugify($text); ?>
          <input type="checkbox" id="<?php echo $slug ?>" name="<?php echo $name ?>" value="<?php echo $slug ?>">
          <label for="<?php echo $slug ?>"><?php echo $text ?></label>
        <?php } ?>

      </div>

      <label for="caso">13 - Descreva o caso da maneira como se sentir confortável. *</label>
      <p>Use o espaço que precisar e conte com a quantidade de detalhes que achar conveniente. Se possível conte como está a questão no momento.
</p>
      <input type="text" id="caso" name="caso" value="" placeholder="Descreva seu caso">

      <label for="fonte">14 - Existe alguma fonte sobre o seu caso que gostaria de citar? (Caso já tenha sido divulgado em matérias de jornal, notas de sindicato etc.)</label>
      <input type="text" id="fonte" name="fonte" value="" placeholder="Nos conte sua fonte">

      <div class="field-group">
        <?php
          $pergunta = "Você é sindicalizado? *";
          $type = "radio";
        ?>
        <p class="label">15 - <?php echo $pergunta; ?></p>
        <?php
          $name = $pergunta;
          $respostas = array("Sim", "Não");
          foreach ($respostas as $resposta) { ?>
          <?php $text = $resposta; $slug = slugify($text); ?>
          <input type="<?php echo $type; ?>" id="<?php echo slugify($name) . "_" . $slug ?>" name="<?php echo slugify($name); ?>" value="<?php echo slugify($name) . "_" . $slug ?>">
          <label for="<?php echo slugify($name) . "_" . $slug ?>"><?php echo $text ?></label>
        <?php } ?>

      </div>

      <label for="sindicato">16 - Caso tenha respondido afirmativamente a pergunta anterior, qual o seu sindicato? Se possível, deixar os dados de contato do sindicato.</label>
      <input type="text" id="sindicato" name="sindicato" value="" placeholder="Qual é o seu sindicato?">


      <div class="field-group">
        <?php
          $pergunta = "Você recorreu a algum órgão ou instituição para ajudá-lo/a quando da perseguição? *";
          $type = "radio";
        ?>
        <p class="label">17 - <?php echo $pergunta; ?></p>
        <?php
          $name = 'recorreu';
          $respostas = array("Sim", "Não");
          foreach ($respostas as $resposta) { ?>
          <?php $text = $resposta; $slug = slugify($text); ?>
          <input type="<?php echo $type; ?>" id="<?php echo slugify($name) . "_" . $slug ?>" name="<?php echo slugify($name); ?>" value="<?php echo slugify($name) . "_" . $slug ?>">
          <label for="<?php echo slugify($name) . "_" . $slug ?>"><?php echo $text ?></label>
        <?php } ?>

      </div>

      <label for="orgao_recorrido">18 - Se você respondeu sim na resposta anterior, qual foi o órgão ou instituição?</label>
      <input type="text" id="orgao_recorrido" name="orgao_recorrido" value="" placeholder="Cite o órgão ou instituição">

      <div class="field-group">
        <?php
          $pergunta = "Você recebeu o apoio requisitado?";
          $type = "radio";
        ?>
        <p class="label">19 - <?php echo $pergunta; ?></p>
        <?php
          $name = 'recebeu_apoio';
          $respostas = array("Sim", "Não");
          foreach ($respostas as $resposta) { ?>
          <?php $text = $resposta; $slug = slugify($text); ?>
          <input type="<?php echo $type; ?>" id="<?php echo slugify($name) . "_" . $slug ?>" name="<?php echo slugify($name); ?>" value="<?php echo slugify($name) . "_" . $slug ?>">
          <label for="<?php echo slugify($name) . "_" . $slug ?>"><?php echo $text ?></label>
        <?php } ?>

      </div>

      <label for="pedido_de_apoio">20 - Descreva como se deu o processo de pedido de apoio</label>
      <input type="text" id="pedido_de_apoio" name="pedido_de_apoio" value="" placeholder="Descreva o pedido">

      <label for="info_adicional">21 - Caso deseje, use este espaço para colocar alguma informação adicional:</label>
      <input type="text" id="info_adicional" name="info_adicional" value="" placeholder="Informações adicionais">


      <input class="esm-button" type="submit" name="" value="Enviar">

    </form>
  </main>

<?php endwhile; ?>

<?php
  get_template_part( 'partials/footer' );
?>
