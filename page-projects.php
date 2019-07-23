<?php
/* Template Name: Projetos */
/**
 * The template for displaying Projects page
 *
 * @package ESM
 */
  get_template_part( 'partials/header' );
?>

<?php
  $projetos = get_posts(array(
  	'numberposts'	=>     -1,
  	'post_type'		=>     'projeto'
  ));
?>

<?php while ( have_posts() ) : the_post(); ?>

  <main>

    <section class="section-title">
      <h2 class="title">Descubra projetos pela educação sem censura <em>pelo Brasil.</em></h2>
    </section>

    <?php
      global $wpdb;
      $user_count = $wpdb->get_var( "SELECT COUNT(*) FROM {$wpdb->prefix}projects" );
      $projects_query = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}projects", ARRAY_A);
    ?>

      <section class="project-filters">

        <div class="select">
          <label for="">Esfera:</label>
          <select>
            <option data-filter="" disabled selected>Selecione a esfera</option>
            <?php
              $slugs_esferas = array();
              $nomes_esferas = array();
              foreach($projects_query as $project){
                if(!in_array(slugify($project[esfera]), $slugs_esferas)){
                  $slugs_esferas[] = slugify($project[esfera]);
                  $nomes_esferas[] = $project[esfera];
                  if(slugify($project[esfera] != '')){ ?>
                      <option data-filter="<?php echo slugify($project[esfera]); ?>"><?php echo $project[esfera]; ?></option>
                  <?php
                  }
                }
              }
           ?>
          </select>
        </div>

        <div class="select">
          <label for="">Estado:</label>
          <select>
            <option data-filter="" disabled selected>Selecione a UF</option>
            <?php
              $slugs_estados = array();
              $nomes_estados = array();
              foreach($projects_query as $project){
                if(!in_array(slugify($project[estado]), $slugs_estados)){
                  $slugs_estados[] = slugify($project[estado]);
                  $nomes_estados[] = $project[estado];
                  if(slugify($project[estado] != '')){ ?>
                      <option data-filter="<?php echo slugify($project[estado]); ?>"><?php echo $project[estado]; ?></option>
                  <?php
                  }
                }
              }
           ?>
          </select>
        </div>

        <div class="select full">
          <label for="">Município:</label>
          <select>
            <option data-filter="" disabled selected>Selecione o município</option>
            <?php
              $slugs_municipios = array();
              $nomes_municipios = array();
              foreach($projects_query as $project){
                if(!in_array(slugify($project[municipio]), $slugs_municipios)){
                  $slugs_municipios[] = slugify($project[municipio]);
                  $nomes_municipios[] = $project[municipio];
                  if(slugify($project[municipio] != '')){ ?>
                      <option data-filter="<?php echo slugify($project[municipio]); ?>"><?php echo $project[municipio]; ?></option>
                  <?php
                  }
                }
              }
           ?>
          </select>
        </div>

        <div class="select full">
          <label for="">Tipo:</label>
          <select>
            <option data-filter="" disabled selected>Selecione o tipo</option>
            <?php
              $slugs_tipo_projetos = array();
              $nomes_tipo_projetos = array();
              foreach($projects_query as $project){
                if(!in_array(slugify($project[tipo_projeto]), $slugs_tipo_projetos)){
                  $slugs_tipo_projetos[] = slugify($project[tipo_projeto]);
                  $nomes_tipo_projetos[] = $project[tipo_projeto];
                  if(slugify($project[tipo_projeto] != '')){ ?>
                      <option data-filter="<?php echo slugify($project[tipo_projeto]); ?>"><?php echo $project[tipo_projeto]; ?></option>
                  <?php
                  }
                }
              }
           ?>
          </select>
        </div>

        <div class="select">
          <label for="">Ano:</label>
          <select>
            <option data-filter="" disabled selected>Selecione o ano</option>
            <?php
              $slugs_ano_projetos = array();
              $nomes_ano_projetos = array();
              foreach($projects_query as $project){
                if(!in_array(slugify($project[ano_projeto]), $slugs_ano_projetos)){
                  $slugs_ano_projetos[] = slugify($project[ano_projeto]);
                  $nomes_ano_projetos[] = $project[ano_projeto];
                  if(slugify($project[ano_projeto] != 0000)){ ?>
                      <option data-filter="<?php echo slugify($project[ano_projeto]); ?>"><?php echo $project[ano_projeto]; ?></option>
                  <?php
                  }
                }
              }
           ?>
          </select>
        </div>

        <div class="select">
          <label for="">Categoria:</label>
          <select>
            <option data-filter="" disabled selected>Selecione a categoria</option>
            <?php
              $slugs_categorias = array();
              $nomes_categorias = array();
              foreach($projects_query as $project){
                if(!in_array(slugify($project[categoria]), $slugs_categorias)){
                  $slugs_categorias[] = slugify($project[categoria]);
                  $nomes_categorias[] = $project[categoria];
                  if(slugify($project[categoria] != '')){ ?>
                      <option data-filter="<?php echo slugify($project[categoria]); ?>"><?php echo $project[categoria]; ?></option>
                  <?php
                  }
                }
              }
           ?>
          </select>
        </div>

        <div class="select">
          <label for="">Partido:</label>
          <select>
            <option data-filter="" disabled selected>Selecione o partido</option>
            <?php
              $slugs_partidos = array();
              $nomes_partidos = array();
              foreach($projects_query as $project){

                $pieces = explode(";", $project[partido]);

                foreach($pieces as $piece){
                  $text = slugify($piece);
                  if(!in_array($text, $slugs_partidos)){
                    $slugs_partidos[] = $text;
                    $nomes_partidos[] = $project[partido];
                    if($text != ''){ ?>
                        <option data-filter="<?php echo $text; ?>"><?php echo $piece; ?></option>
                    <?php
                    }
                  }
                }
              }
           ?>
          </select>
        </div>

        <div class="select">
          <label for="">Status:</label>
          <select>
            <option data-filter="" disabled selected>Selecione o status</option>
            <?php
              $slugs_status = array();
              $nomes_status = array();
              foreach($projects_query as $project){
                if(!in_array(slugify($project[status]), $slugs_status)){
                  $slugs_status[] = slugify($project[status]);
                  $nomes_status[] = $project[status];
                  if(slugify($project[status] != '')){ ?>
                      <option data-filter="<?php echo slugify($project[status]); ?>"><?php echo $project[status]; ?></option>
                  <?php
                  }
                }
              }
           ?>
          </select>
        </div>

      </section>

      <section class="section-projects">

        <?php
          foreach($projects_query as $project){
        ?>
          <div class="project <?php
          echo slugify($project[esfera])
          . " "
          . slugify($project[estado])
          . " "
          . slugify($project[municipio])
          . " "
          . slugify($project[tipo_projeto])
          . " "
          . slugify($project[categoria])
          . " "
          . slugify($project[status])
          . " ";
          if($project[ano_projeto] != 0000){ echo $project[ano_projeto] . " "; }

          $pieces = explode(";", $project[partido]);
          foreach($pieces as $piece){
            $text = slugify($piece);
            if($text != ''){
              echo $text . " ";
            }
          }
          ?>">
            <div class="status">
              <?php
                if ($project[status] == ''):
                  echo "Status desconhecido";
                else:
                  echo $project[status];
                endif;
              ?>
              <?php if ($project[link] != ''): ?>
                <a class="link" href="<?php echo $project[link]; ?>" target="_blank">Link</a>
              <?php endif; ?>
            </div>

            <div class="content">

              <h6 class="title">
                <?php
                  echo $project[tipo_projeto];
                  if ($project[numero_projeto] != ''):
                    echo ' / ' . $project[numero_projeto];
                  endif;
                ?>
              </h6>


              <?php if ($project[ano_projeto] != '0000'): ?>
                <p class="ano">
                  <?php echo $project[ano_projeto]; ?>
                </p>
              <?php endif; ?>

              <p class="local">
                <?php
                  if ($project[municipio] != ''):
                    echo $project[municipio] . ' | ';
                  endif;
                  echo $project[estado];
                ?>
              </p>

              <?php if ($project[esfera] != ''): ?>
                <p class="esfera">
                  <em>Abrangência: </em><?php echo $project[esfera]; ?>
                </p>
              <?php endif; ?>

              <?php if ($project[categoria] != ''): ?>
                <p class="categoria">
                  <em>Categoria: </em><?php echo $project[categoria]; ?>
                </p>
              <?php endif; ?>

              <?php if ($project[partido] != ''): ?>
                <p class="partido">
                  <em>Iniciativa:</em>
                  <?php echo $project[partido]; ?>
                </p>
              <?php endif; ?>


            </div>

          </div>
        <?php } ?>

      </section>

    <?php endwhile; ?>

</main>

<script>
  $( 'select' ).change(function() {

    var filter = $(this).find("option:selected").data("filter");

    $('select').removeClass('selected');
    $(this).addClass('selected');

    $('select').not(this).each(function(){
      $(this).val($(this).find('option:first').val());
     });

    $('.section-projects .project:not(.hidden)').each(function(){
      $(this).addClass('hidden');
    });

    $('.section-projects .project.' + filter ).each(function(){
      $(this).removeClass('hidden');
    });

  });
</script>

<?php get_template_part( 'partials/footer' ); ?>
