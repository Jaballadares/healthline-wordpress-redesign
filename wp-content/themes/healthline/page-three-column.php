<?php
/*
Template Name: Three Column
*/
?>

<?php get_header(); ?>



<section class="callout gray">
  <div class="container">

    <div class="row">
      <div class="span12">
        <h2>
          <?php the_field('headline'); ?>
          <strong><?php the_field('sub_headline'); ?></strong>
        </h2>
        <p class="lead border-top" style="margin-bottom:10px">
          <?php the_field('paragraph_heading'); ?>
        </p>
      </div>
    </div><!--! .row -->

    <div class="row">
      <div class="span4">
  <p>
  <?php the_field('paragraph'); ?></p>
      </div>
      <div class="span4 text-center">
        <div><img src="<?php the_field('page_main_image'); ?>" /></div>
      </div>
      <div class="span4">
        <?php the_field('right_column_box'); ?>
      </div>
    </div><!--! .row -->

  </div>
</section>

<?php get_footer(); ?>