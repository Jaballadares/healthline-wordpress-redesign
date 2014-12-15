<?php
/*
Template Name: Custom Built Solutions Page Template
*/
?>

<?php get_header(); ?>


<section class="callout bg-img bg-solutions">
  <div class="container">

    <div class="row">
      <div class="span10 offset1 span-m-12 span-m-o-0">
      <?php if( get_field('header_content') ): while( has_sub_field('header_content') ): ?>
        <h2><?php the_sub_field('headline'); ?></h2>
        <p class="lead border-top"><?php the_sub_field('paragraph'); ?></p>
      <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section class="gray">
  <div class="container">

    <div class="row">
    <?php if( have_rows('custom_built_solutions_page_content') ): while ( have_rows('custom_built_solutions_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_1' ): ?>

    <?php if( get_sub_field('content_bucket') ): while( has_sub_field('content_bucket') ): ?>

      <div class="span6">
        <h4><?php the_sub_field('headline'); ?></h4>
        <ul class="list-square">
        <?php if( get_sub_field('bullet_points') ): while( has_sub_field('bullet_points') ): ?>
          <li><?php the_sub_field('point'); ?></li>
        <?php endwhile; endif; ?>
        </ul>
      </div>
    <?php endwhile; endif; ?>

    <?php endif; ?>
    <?php endwhile; endif; ?>
    </div><!--! .row -->

  </div>
</section>


<section>
  <div class="container">
  <?php if( have_rows('custom_built_solutions_page_content') ): while ( have_rows('custom_built_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_2' ): ?>
    <div class="row">
      <div class="span12 text-center">
        <h3><?php the_sub_field('headline'); ?></h3>
      </div>
    </div><!--! .row -->

    <div class="row mar-t relative">

      <ul class="carousel-pagination list-inline"></ul>

      <div class="slider slider-partners">
        <div class="slider-wrap">

          <?php if( have_rows('partner_implementation') ): while ( have_rows('partner_implementation') ) : the_row(); ?>
          <div class="slide">
            <div class="row">
              <div class="span4">
                <img src="<?php the_sub_field('image'); ?>" alt="Healthline partner implementation">
              </div>
              <div class="span8">
                <img src="<?php the_sub_field('partner_logo'); ?>" alt="Healthline partner implementation" class="mar-b--20">
                <p><?php the_sub_field('paragraph'); ?></p>
              </div>
            </div><!--! .row -->
          </div><!--! .slide -->
          <?php endwhile; endif; ?>

        </div><!--! .slider-wrap -->
      </div><!--! .slider -->

    </div><!--! .row -->
  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section>
  <div class="container">

    <div class="row">
      <div class="span12">

        <div class="outline">
          <div class="row text-center">
            <div class="span8 offset2">
            <?php if( have_rows('custom_built_solutions_page_content') ): while ( have_rows('custom_built_solutions_page_content') ) : the_row(); ?>
            <?php if( get_row_layout() == 'row_3' ): ?>
              <h3><?php the_sub_field('headline'); ?></h3>
              <p><?php the_sub_field('paragraph'); ?></p>
              <?php if( get_sub_field('button') ): while( has_sub_field('button') ): ?>
              <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-purple btn-large mar-t--20"><?php the_sub_field('button_text'); ?></a>
              <?php endwhile; endif; ?>
            <?php endif; ?>
            <?php endwhile; endif; ?>
            </div>
          </div><!--! .row -->
        </div>

      </div>
    </div><!--! .row -->

  </div>
</section>

<?php get_footer(); ?>