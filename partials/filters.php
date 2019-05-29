<?php
/**
 * Archive Filters
 *
 * @package ESM
 */
?>

<ul class="esm-filters">
  <li>
    <a class="filter filter_posts active" data-post-type="post" data-post-category="">Todas</a>
  </li>

  <?php
    $categories = get_terms( array(
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
    ) );
    foreach($categories as $term) {
      if( 0 != $term->count ): ?>
        <li>
          <a href="<?php echo get_category_link( $term->term_taxonomy_id ); ?>"><?php echo $term->name; ?></a>

          <!-- A alternativa a seguir é caso nós usemos ajax pra carregar a categoria dentro da página -->
          <!--<a class="filter filter_posts" data-post-type="post" data-category="<?php //echo $term->slug; ?>"><?php //echo $term->name; ?></a>-->
        </li>

      <?php endif;
    }
  ?>
</ul>
