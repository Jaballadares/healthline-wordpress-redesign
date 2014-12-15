<?php
/*
Template Name: Solutions Page Template
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

    <div class="row flex-v-align">
    <?php if( have_rows('solutions_page_content') ): while ( have_rows('solutions_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_1' ): ?>
      <div class="span5 text-center">
        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('headline'); ?> screenshot">
      </div>
      <div class="span7">
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
        <?php if( get_sub_field('button') ): while( has_sub_field('button') ): ?>
        <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-purple"><?php the_sub_field('button_text'); ?></a>
        <?php endwhile; endif; ?>
      </div>
    <?php endif; ?>
    <?php endwhile; endif; ?>
    </div><!--! .row -->

  </div>
</section>


<section class="gray">
  <div class="container">

    <div class="row flex-v-align">
    <?php if( have_rows('solutions_page_content') ): while ( have_rows('solutions_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_2' ): ?>
      <div class="span5 text-center order-2">
        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('headline'); ?> screenshot">
      </div>
      <div class="span6 offset1 order-1">
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
        <?php if( get_sub_field('button') ): while( has_sub_field('button') ): ?>
        <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-purple"><?php the_sub_field('button_text'); ?></a>
        <?php endwhile; endif; ?>
      </div>
    <?php endif; ?>
    <?php endwhile; endif; ?>
    </div><!--! .row -->

  </div>
</section>


<section>
  <div class="container">

    <div class="row flex-v-align">
    <?php if( have_rows('solutions_page_content') ): while ( have_rows('solutions_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_3' ): ?>
      <div class="span5 text-center">
        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('headline'); ?> screenshot">
      </div>
      <div class="span7">
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
        <?php if( get_sub_field('button') ): while( has_sub_field('button') ): ?>
        <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-purple"><?php the_sub_field('button_text'); ?></a>
        <?php endwhile; endif; ?>
      </div>
    <?php endif; ?>
    <?php endwhile; endif; ?>
    </div><!--! .row -->

  </div>
</section>


<section class="gray">
  <div class="container">

    <div class="row flex-v-align">
    <?php if( have_rows('solutions_page_content') ): while ( have_rows('solutions_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_4' ): ?>
      <div class="span5 text-center order-2">
        <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('headline'); ?> screenshot">
      </div>
      <div class="span6 offset1 order-1">
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
        <?php if( get_sub_field('button') ): while( has_sub_field('button') ): ?>
        <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-purple"><?php the_sub_field('button_text'); ?></a>
        <?php endwhile; endif; ?>
      </div>
    <?php endif; ?>
    <?php endwhile; endif; ?>
    </div><!--! .row -->

  </div>
</section>


<section>
  <div class="container">

    <div class="row">
      <div class="span12">

        <div class="outline">
          <div class="row text-center">
            <div class="span8 offset2">
            <?php if( have_rows('solutions_page_content') ): while ( have_rows('solutions_page_content') ) : the_row(); ?>
            <?php if( get_row_layout() == 'row_5' ): ?>
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