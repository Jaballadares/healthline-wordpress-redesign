<?php
/*
Template Name: Landing Page Template
*/
?>


<?php require('header-simple.php'); ?>

<section class="gray callout">
  <div class="container">

    <div class="row">
      <div class="span12">
        <h1><?php the_field('headline'); ?></h1>
        <h4><?php the_field('sub_headline'); ?></h4>
      </div>
    </div><!--! .row -->

    <?php if( have_rows('slide') ): ?>
    <div class="row">

      <div class="slider">
        <div class="slider-wrap">
          <?php while ( have_rows('slide') ) : the_row(); ?>
          <div class="slide">
            <div class="row flex-v-align">
              <div class="span7">
                <img src="<?php the_sub_field('image'); ?>" alt="Healthline">
              </div>
              <div class="span5">
                <ul class="highlight-list">
                  <?php if( have_rows('bullet_points') ): while ( have_rows('bullet_points') ) : the_row(); ?>
                  <li><?php the_sub_field('point'); ?></li>
                  <?php endwhile; endif; ?>
                </ul>
              </div>
            </div>
          </div>
          <?php endwhile; ?>

        </div>
      </div>

    </div>
    <div class="row">
      <div class="span12">
        <ul class="carousel-pagination list-inline"></ul>
      </div>
    </div>
    <?php endif; ?>

  </div>
</section>

<section id="form-section">
  <div class="container">

    <div class="row">
      <div class="span6">
        <h3><?php the_field('form_headline'); ?></h3>
        <p><?php the_field('form_sub_headline'); ?></p>
      </div>
      <div class="span5 offset1 form-template">
        <div class="landing-page-form">
          <?php the_field('form_html'); ?>
        </div>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>
