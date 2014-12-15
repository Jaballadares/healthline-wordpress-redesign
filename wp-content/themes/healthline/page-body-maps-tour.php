<?php
/*
Template Name: Body Maps Tour Page Template
*/
?>


<?php get_header(); ?>


<section class="callout bg-img narrow">
  <div class="container">

    <div class="row">
      <div class="span10 offset1 span-m-12 span-m-o-0 text-center">
      <?php if( get_field('header_content') ): while( has_sub_field('header_content') ): ?>
        <h2><?php the_sub_field('headline'); ?></h2>
      <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section>
  <div class="container">

    <div class="row text-center">
      <div class="span10 offset1">
        <iframe width="959" height="615" src="//www.youtube.com/embed/Y6rkDkyJkFI?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div><!--! .row -->


  </div>
</section>


<?php get_footer(); ?>