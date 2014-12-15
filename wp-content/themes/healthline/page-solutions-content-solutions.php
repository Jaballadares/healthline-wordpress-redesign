<?php
/*
Template Name: Content Solutions Page Template
*/
?>

<?php get_header(); ?>


<section class="callout bg-img bg-solutions-d">
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


<section>
  <div class="container">

    <div class="row">
      <div class="span12">
        <nav class="nav-scroll btn-scroll">
          <ul class="list-inline">
            <li><a href="#reference-library">Health<strong>Reference</strong></a></li>
            <li><a href="#body-maps">Body<strong>Maps<sup>&trade;</sup></strong></a></li>
            <li><a href="#bodies-in-motion">Visual<strong>Health</strong></a></li>
            <li><a href="#health-news">Health<strong>News</strong></a></li>
          </ul>
        </nav>
      </div>
    </div><!--! .row -->

  </div>
</section>

<section class="pad-t--10" id="reference-library">
  <div class="container">
  <?php if( have_rows('content_solutions_page_content') ): while ( have_rows('content_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_1' ): ?>
    <div class="row text-center">
      <div class="span10 offset1">
        <h3 class="text-green"><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->

    <div class="row mar-t flex-v-align">
      <div class="span5 text-center">
        <img src="<?php the_sub_field('image'); ?>" alt="Content Solutions Diagram">
      </div>
      <div class="span5 pad-v">
        <ul class="list-spacing-v list-square lead">
        <?php if( get_sub_field('bullet_points') ): while( has_sub_field('bullet_points') ): ?>
          <li><?php the_sub_field('point'); ?></li>
        <?php endwhile; endif; ?>
        </ul>
      </div>
    </div><!--! .row -->
  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section class="gray">
  <div class="container">
  <?php if( have_rows('content_solutions_page_content') ): while ( have_rows('content_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_2' ): ?>
    <div class="row flex-v-align">
      <div class="span5 text-center order-2">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline Screenshot">
      </div>
      <div class="span6 offset1 order-1">
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div>
  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section id="body-maps">
  <div class="container">
  <?php if( have_rows('content_solutions_page_content') ): while ( have_rows('content_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_3' ): ?>
    <div class="row flex-v-align">
      <div class="span7 text-center">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline Screenshot">
      </div>
      <div class="span5">
        <h3><?php the_sub_field('headline'); ?></h3>
        <p><?php the_sub_field('paragraph'); ?></p>
        <ul class="list-inline list-spacing-right list-mobile-full">
          <li><a href="http://www.healthline.com/human-body-maps/" class="btn btn-purple btn-large">Try</a></li>
          <?php if( get_sub_field('button') ): while( has_sub_field('button') ): ?>
          <li><a href="<?php the_sub_field('button_link'); ?>" class="btn btn-purple btn-large"><?php the_sub_field('button_text'); ?></a></li>
          <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->
  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section class="gray" id="bodies-in-motion">
  <div class="container">
  <?php if( have_rows('content_solutions_page_content') ): while ( have_rows('content_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_4' ): ?>
    <div class="row text-center">
    <?php if( get_sub_field('bucket') ): while( has_sub_field('bucket') ): ?>
      <div class="span6">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline Screenshot" class="mar-b--20">
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
      </div>
    <?php endwhile; endif; ?>
    </div><!--! .row -->
  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section id="health-news">
  <div class="container">

    <div class="row flex-v-align">
      <div class="span5 order-2 text-center">
        <div id="NewsWidget" style="overflow:hidden"></div>
        <p class="pad-t--10">Click a story to learn more.</p>
      </div>
      <div class="span7 order-1">
      <?php if( have_rows('content_solutions_page_content') ): while ( have_rows('content_solutions_page_content') ) : the_row(); ?>
      <?php if( get_row_layout() == 'row_5' ): ?>
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
      <?php endif; ?>
      <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section class="gray">
  <div class="container">
  <?php if( have_rows('content_solutions_page_content') ): while ( have_rows('content_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_6' ): ?>
    <div class="row flex-v-align">
      <div class="span5 text-center">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline Screenshot">
      </div>
      <div class="span6">
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->
  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section>
  <div class="container">
  <?php if( have_rows('content_solutions_page_content') ): while ( have_rows('content_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_7' ): ?>
    <div class="row mar-t flex-v-align">
      <div class="span5 order-2">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline Screenshot">
      </div>
      <div class="span6 offset1 order-1">
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->
  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>

<hr>

<section>
  <div class="container">
  <?php if( have_rows('content_solutions_page_content') ): while ( have_rows('content_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_8' ): ?>
    <div class="row text-center">
      <div class="span10 offset1">
        <h3 class="text-green"><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->
  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>

<hr>

<section>
  <div class="container">
  <?php if( have_rows('content_solutions_page_content') ): while ( have_rows('content_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_9' ): ?>
    <div class="row">
      <div class="span12 text-center">
        <h3><?php the_sub_field('headline'); ?></h3>
      </div>
    </div><!--! .row -->

    <div class="row mar-t relative">

      <ul class="carousel-pagination list-inline"></ul>

      <div class="slider slider-partners">
        <div class="slider-wrap">

          <?php if( have_rows('partner_implementations') ): while ( have_rows('partner_implementations') ) : the_row(); ?>
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
            <?php if( have_rows('content_solutions_page_content') ): while ( have_rows('content_solutions_page_content') ) : the_row(); ?>
            <?php if( get_row_layout() == 'row_10' ): ?>
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


<script type="text/javascript" src="http://healthline.com/corporate/news-widget/js/nsw.js"></script>

<script type="text/javascript">
    NewsSyndicationWidget.init({
      containerId: '#NewsWidget',
      size: 'large',
      thumbnail: true,
      color: '#00adee',
      partnerId: '8589f02c-123a-449d-9c60-f670b083ea88'
    });
</script>
