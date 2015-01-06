<?php
/*
Template Name: Marketing Solutions Page Template
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


<section>
  <div class="container">

    <div class="row">
      <div class="span12">
        <nav class="nav-scroll btn-scroll media-nav">
          <ul class="list-inline">
            <li><a href="#healthweb">Healthline Healthweb</a></li>
            <li><a href="#healthline-com">Healthline.com</a></li>
            <li><a href="#advertising-solutions">Advertising Solutions</a></li>
            <li><a href="<?php bloginfo('template_directory'); ?>/library/downloads/media-kit-2014.pdf" class="download" target="_blank">Media Kit <i class="fa fa-download"></i></a></li>
          </ul>
        </nav>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section class="pad-t--0">
  <div class="container">
  <?php if( have_rows('marketing_solutions_page_content') ): while ( have_rows('marketing_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_1' ): ?>
    <div class="row text-center">
      <div class="span10 offset1">
        <h3 class="text-green"><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->

    <div class="row mar-t flex-v-align">
      <div class="span6 text-center">
        <img src="<?php the_sub_field('image'); ?>" alt="A Unique Media Partner">
      </div>
      <div class="span5">
        <h4 class="mar-b--10"><?php the_sub_field('sub_headline'); ?></h4>
        <ul class="list-square">
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


<section class="gray" id="healthweb">
  <div class="container">
  <?php if( have_rows('marketing_solutions_page_content') ): while ( have_rows('marketing_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_2' ): ?>

    <div class="row text-center">
      <div class="span10 offset1">
        <h6 class="border-bottom-narrow uppercase">Healthline Healthweb</h6>
        <h3><?php the_sub_field('headline'); ?></h3>
        <p><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->

    <div class="row text-center mar-t">
    <?php if( get_sub_field('image_buckets') ): while( has_sub_field('image_buckets') ): ?>
      <div class="span4">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline" class="mar-b--20">
        <h6><?php the_sub_field('paragraph'); ?></h6>
      </div>
    <?php endwhile; endif; ?>
    </div><!--! .row -->

  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section>
  <div class="container">
  <?php if( have_rows('marketing_solutions_page_content') ): while ( have_rows('marketing_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_3' ): ?>
    <div class="row">
      <div class="span8 offset2 text-center">
        <h2 class="text-green"><?php the_sub_field('headline'); ?></h2>
      </div>
    </div><!--! .row -->

    <div class="row mar-t">
      <div class="span12 text-center">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline Healthweb" class="mar-b">
        <p><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->
  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section class="gray">
  <div class="container">
  <?php if( have_rows('marketing_solutions_page_content') ): while ( have_rows('marketing_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_4' ): ?>
    <div class="row text-center">
      <div class="span10 offset1">
        <h3><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div>

    <div class="row mar-t">
      <div class="span10 offset1">
        <div class="white text-center pad outline">
          <h4 class="mar-b"><?php the_sub_field('sub_headline'); ?></h4>
          <img src="<?php the_sub_field('image'); ?>" alt="Graph showing Healthlines Unique Users">
        </div>
      </div>
    </div><!--! .row -->
  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section id="healthline-com">
  <div class="container">
  <?php if( have_rows('marketing_solutions_page_content') ): while ( have_rows('marketing_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_5' ): ?>
    <div class="row text-center">
      <div class="span10 offset1">
        <h6 class="border-bottom-narrow uppercase">Healthline.com</h6>
        <h3><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->

    <?php $i = 1; if( get_sub_field('content_buckets') ): while( has_sub_field('content_buckets') ): ?>

    <?php if ($i % 3 == 1): ?>
    <div class="row mar-t healthline-com">
    <?php endif; ?>

      <div class="span4">
        <div class="left">
          <i class="fa fa-<?php echo $i; ?>"></i>
        </div>
        <div class="right">
          <h5><?php the_sub_field('headline'); ?></h5>
          <p><?php the_sub_field('paragraph'); ?></p>
        </div>
      </div>

    <?php if ($i % 3 == 0): ?>
    </div><!--! .row -->
    <?php endif; ?>

    <?php $i++; endwhile; endif; ?>

    <?php $i = $i - 1 ; if (0 != $i % 3): ?>
    </div><!--! .row -->
    <?php endif; ?>

  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section class="pad-b--0 gray" id="advertising-solutions">
  <div class="container">
  <?php if( have_rows('marketing_solutions_page_content') ): while ( have_rows('marketing_solutions_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_6' ): ?>
    <div class="row text-center">
      <div class="span12">
        <h3><?php the_sub_field('headline'); ?></h3>
        <ul class="mar-t swapper-selector swapper-inline">
          <li data-target="1" id="item1" class="current switch-item">Custom</li>
          <li data-target="2" class="switch-item">Distribution</li>
          <li data-target="3" class="switch-item">Media</li>
        </ul>
      </div>
    </div><!--! .row -->
  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section class="gray swapper-wrap pad-t--0">
<?php if( have_rows('marketing_solutions_page_content') ): while ( have_rows('marketing_solutions_page_content') ) : the_row(); ?>
<?php if( get_row_layout() == 'row_6' ): ?>

<?php $j = 1; if( have_rows('tab_content') ): while ( have_rows('tab_content') ) : the_row(); ?>
  <div class="container text-center swapper-content <?php if( $j == 1 ) { ?>show<?php }; ?>" data-title="<?php echo $j; ?>">

    <div class="row">
      <div class="span8 offset2">
        <h4><?php the_sub_field('sub_headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div>

  <?php $k = 1; if( have_rows('image_buckets') ): while ( have_rows('image_buckets') ) : the_row(); ?>

  <?php if ($k % 3 == 1): ?>
    <div class="row mar-t">
  <?php endif; ?>

      <div class="span4">
      <?php if( get_sub_field('image') ) {?>
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline Advertising Solutions">
      <?php } ?>
      <?php if( get_sub_field('text') ) {?>
        <h6 class="mar-t--20"><?php the_sub_field('text'); ?></h6>
      <?php } ?>
      </div>

  <?php if ($k % 3 == 0): ?>
    </div><!--! .row -->
  <?php endif; ?>

  <?php $k++; endwhile; endif; ?>

  <?php $k = $k - 1 ; if (0 != $k % 3): ?>
    </div><!--! .row -->
  <?php endif; ?>

  </div>

<?php $j++; endwhile; endif; ?>

<?php endif; ?>
<?php endwhile; endif; ?>
</section>


<section>
  <div class="container">

    <div class="row">
      <div class="span12">
      <?php if( have_rows('marketing_solutions_page_content') ): while ( have_rows('marketing_solutions_page_content') ) : the_row(); ?>
      <?php if( get_row_layout() == 'row_7' ): ?>

        <div class="outline">
          <div class="row text-center">
            <div class="span8 offset2">
              <h3><?php the_sub_field('headline'); ?></h3>
              <p class="lead"><?php the_sub_field('paragraph'); ?></p>

              <ul class="list-inline list-spacing list-mobile-full mar-t--20">
              <?php $l = 1; if( have_rows('button') ): while ( have_rows('button') ) : the_row(); ?>
                <li>
                  <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-purple btn-large" target="_blank">
                    <?php if($l == 2) { ?><i class="fa fa-twitter"></i><?php } ?>
                    <?php the_sub_field('button_text'); ?>
                  </a>
                </li>
              <?php $l++; endwhile; endif; ?>
              </ul>
            </div>
          </div><!--! .row -->
        </div>

      <?php endif; ?>
      <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

  </div>
</section>


<?php get_footer(); ?>