<?php
/**
 * Galeria de notícias
 *
 * @package ESM
 */
?>

<?php
    $postsPerPage = 6;
    $postType = $post_type;
    $order = 'desc';
    if ($current_category):
      $query_args = array(
          'posts_per_page' => $postsPerPage,
          'post_type' => $postType,
          'order' => $order,
          'post_status' => 'publish',
          'cat' => $current_category
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

<section class="section-postlist">
    <div class="list">
        <div id="ajaxContainer">
            <?php
                $i = 1;
                while ($posts_query -> have_posts()) : $posts_query -> the_post();
                $thumbnail = get_post_thumbnail_id();
                $titulo = get_the_title();
                $link = get_permalink();
                $postcat = get_the_category( $post->ID );
                if ( ! empty( $postcat ) ) {
                    $area_slug = $postcat[0]->slug;
                    $area_name = $postcat[0]->name;

                    $term_id = $postcat[0]->term_id;
                    $taxonomy = $postcat[0]->taxonomy;

                }
            ?>
            <a href="<?php echo $link; ?>" class="post">
                <figure class="thumb">
                  <?php echo wp_get_attachment_image($thumbnail, 'large'); ?>
                  <h4 class="tag"><?php echo $area_name; ?></h4>
                </figure>
                <div>
                  <h3 class="title"><?php echo $titulo; ?></h3>
                </div>
              </a>

            <?php $i++; endwhile; ?>
        </div>
          <!-- A seguir, tem essas classes "d-none" e "d-inline-block" do bootstrap que eu uso pra esconder
          e mostrar esse botão com display:none. Mas você pode usar a que quiser. esse id também vai ser necessário. -->
          <a
            id="more_posts"
            class="esm-button loadmore <?php if ($i <= $posts_count): ?>d-inline-block<?php else: ?>d-none<?php endif; ?>"
            data-order="<?php echo $order; ?>"
            data-post-type="<?php echo $postType; ?>"
            data-ppp="<?php echo $postsPerPage; ?>"
            data-offset="<?php echo $postsPerPage; ?>">
            Ver mais
          </a>
    </div>
</section>

<?php endif; ?>
