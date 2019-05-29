<?php
/**
 * Lista de downloads
 *
 * @package ESM
 */
?>


<?php
    $postsPerPage = 6;
    $postType = $post_type;
    $order = 'desc';
    if ($tipo_de_arquivo):
      $query_args = array(
          'posts_per_page' => $postsPerPage,
          'post_type' => $postType,
          'order' => $order,
          'post_status' => 'publish',
          'tax_query' => array(
            array (
              'taxonomy' => 'tipo_de_arquivo',
              'field' => 'slug',
              'terms' => $tipo_de_arquivo,
            )
          )
      );
    else:
      $query_args = array(
          'posts_per_page' => $postsPerPage,
          'post_type' => $postType,
          'order' => $order,
          'post_status' => 'publish'
      );
    endif;
    $posts_query = new WP_Query( $query_args );
    if ($posts_query -> have_posts()) :
        $posts_count = wp_count_posts('post')->publish;
?>

<div class="section-downloadslist">
    <div id="ajaxContainer" class="list">
        <?php
            $i = 1;
            while ($posts_query -> have_posts()) : $posts_query -> the_post();
            $titulo = get_the_title();
            $link = get_field('arquivo');
            $postcat = get_the_category( $post->ID );
            if ( ! empty( $postcat ) ) {
                $area_slug = $postcat[0]->slug;
                $area_name = $postcat[0]->name;

                $term_id = $postcat[0]->term_id;
                $taxonomy = $postcat[0]->taxonomy;
            }
            $file_types = get_the_terms( get_the_ID(), 'tipo_de_arquivo' );
            if ( ! empty( $file_types ) ) {
                $file_type_slug = $file_types[0]->slug;
                $file_type_name = $file_types[0]->name;

                $file_type_id = $terms[0]->term_id;
            }
        ?>
          <div class="download">
            <div class="text">
              <p><?php echo $file_type_name; ?></p>
              <h3><?php echo $titulo; ?></h3>
            </div>
            <div class="link">
              <a href="<?php echo $link; ?>">Baixar</a>
            </div>
          </div>

        <?php $i++; endwhile; ?>
    </div>
      <!-- A seguir, tem essas classes "d-none" e "d-inline-block" do bootstrap que eu uso pra esconder
      e mostrar esse botão com display:none. Mas você pode usar a que quiser. esse id também vai ser necessário. -->
      <a
        id="more_posts"
        class="loadmore <?php if ($i <= $posts_count): ?>d-inline-block<?php else: ?>d-none<?php endif; ?>"
        data-order="<?php echo $order; ?>"
        data-post-type="<?php echo $postType; ?>"
        data-ppp="<?php echo $postsPerPage; ?>"
        data-offset="<?php echo $postsPerPage; ?>">
        Carregar mais
      </a>
</div>

<?php endif; ?>
