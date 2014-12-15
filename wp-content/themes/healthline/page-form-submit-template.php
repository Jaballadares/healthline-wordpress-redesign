<?php
/*
Template Name: Form Submitted Template
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

  </div>
</section>


<?php get_footer(); ?>