<?php
/**
 * Galeria de notícias
 *
 * @package ESM
 */
?>

<?php
    $postsPerPage = 6;
    $postType = 'livro';
    $order = 'desc';
    $query_args = array(
        'posts_per_page' => $postsPerPage,
        'post_type' => $postType,
        'order' => $order,
        'post_status' => 'publish'
    );
    $posts_query = new WP_Query( $query_args );
    if ($posts_query -> have_posts()) :
        $posts_count = wp_count_posts('post')->publish;
?>

  <div class="gallery-books">
      <div id="ajaxContainer">
          <?php
              $i = 1;
              while ($posts_query -> have_posts()) : $posts_query -> the_post();
                $thumbnail = get_post_thumbnail_id();
                $titulo = get_the_title();
                $link = get_permalink();
          ?>
          <a href="<?php echo $link; ?>" class="book">
            <div>
              <div class="cover">
                <?php echo wp_get_attachment_image($thumbnail, 'large'); ?>
              </div>
              <div>
                <h3 class="title"><?php echo $titulo; ?></h3>
                <div class="metainfo">
                  <p>Autor: <em><?php the_field('autor'); ?></em></p>
                  <p>Editora: <em><?php the_field('editora'); ?></em></p>
                  <p>Ano: <em><?php the_field('ano'); ?></em></p>
                </div>
              </div>
            </div>
          </a>

          <?php $i++; endwhile; ?>
      </div>
      <div class="more-books"
        <!-- A seguir, tem essas classes "d-none" e "d-inline-block" do bootstrap que eu uso pra esconder
        e mostrar esse botão com display:none. Mas você pode usar a que quiser. esse id também vai ser necessário. -->
        <a
          id="more_posts"
          class="esm-button loadmore <?php if ($i <= $posts_count): ?>d-inline-block<?php else: ?>d-none<?php endif; ?>"
          data-order="<?php echo $order; ?>"
          data-post-type="<?php echo $postType; ?>"
          data-ppp="<?php echo $postsPerPage; ?>"
          data-offset="<?php echo $postsPerPage; ?>">
          Carregar mais
        </a>
      </div>
  </div>

<?php endif; ?>
