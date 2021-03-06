<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.2.2
 */

get_header();
?>
  <div class="column is-9">
    <?php
    bulmawp_get_breadcrumbs();
    if( have_posts() ) : while( have_posts() ) : the_post();
    ?>
      <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="content">
        <?php the_content(); ?>
      </div>
      <?php
      comments_template();
    endwhile; endif;
    ?>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>
