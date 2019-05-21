<?php
/**
 * Archive Filters
 *
 * @package ESM
 */
?>

<div>
  <a class="filter filter_posts active" data-post-type="post" data-post-category="">Todas</a>

  <?php
    $categories = get_terms( array(
        'taxonomy' => 'category',
        'hide_empty' => false,
    ) );
    foreach($categories as $term) {
      if( 0 != $term->count ): ?>

        <a class="filter filter_posts" data-post-type="post" data-category="<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>

      <?php endif;
    }
  ?>
</div>
