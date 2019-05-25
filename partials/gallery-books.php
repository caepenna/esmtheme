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

<section>
    <div>
        <div id="ajaxContainer">
            <?php
                $i = 1;
                while ($posts_query -> have_posts()) : $posts_query -> the_post();
                  $thumbnail = get_post_thumbnail_id();
                  $titulo = get_the_title();
                  $link = get_permalink();
            ?>
            <a href="<?php echo $link; ?>">
                <?php echo wp_get_attachment_image($thumbnail, 'large'); ?>
                <h3><?php echo $titulo; ?></h3>
                <div>
                  <p>Autor: <?php the_field('autor'); ?></p>
                  <p>Editora: <?php the_field('editora'); ?></p>
                  <p>Ano: <?php the_field('ano'); ?></p>
                </div>
            </a>

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
</section>

<?php endif; ?>
