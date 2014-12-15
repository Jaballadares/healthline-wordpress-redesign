<?php
/*
Template Name: Form Template Page
*/
?>


<?php get_header(); ?>


<section class="gray">
  <div class="container">

    <div class="row text-center">
      <div class="span8 offset2">
      <?php if( get_field('page_content') ): while( has_sub_field('page_content') ): ?>
        <h2><?php the_sub_field('headline'); ?></h2>
        <p><?php the_sub_field('paragraph'); ?></p>
      <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

    <div class="row mar-t">
      <div class="span4 offset4 span-m-8 offset-m-2 form-template">
      <?php if( have_rows('form_html') ): while ( have_rows('form_html') ) : the_row(); ?>
        <?php the_sub_field('form_html'); ?>
      <?php endwhile; endif; ?>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>