<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>


<section class="callout bg-img bg-border">
  <div class="container">

    <div class="row">
      <div class="span12">
      <?php if( have_rows('header_content') ): while ( have_rows('header_content') ) : the_row(); ?>

        <h2><?php the_sub_field('headline'); ?></h2>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>

      <?php endwhile; endif; ?>

        <nav class="nav-scroll">
          <ul class="list-points mobile-hide">
            <li>
              <a href="#search-discover">
                <i class="icon-v2 icon-search-v2">search</i>
                <span><strong>Search &amp; Discovery</strong> Solutions</span>
              </a>
            </li>
            <li>
              <a href="#data">
                <i class="icon-v2 icon-graph-v2">graph</i>
                <span><strong>Data</strong> Solutions</span>
              </a>
            </li>
          <!--   <li>
              <a href="#content">
                <i class="icon-v2 icon-book-v2">book</i>
                <span><strong>Content</strong> Solutions</span>
              </a>
            </li> -->
            <li>
              <a href="#marketing">
                <i class="icon-v2 icon-target-v2">target</i>
                <span><strong>Marketing</strong> Solutions</span>
              </a>
            </li>
          </ul>
        </nav>

      </div>
    </div><!--! .row -->

  </div>
</section>


<section>
  <div class="container">

    <div class="row text-center">
      <div class="span12">
        <h6 class="uppercase text-light-gray">Our Customers</h6>
        <ul class="list-logos mar-t--20">
        <?php if( have_rows('home_page_content') ): while ( have_rows('home_page_content') ) : the_row(); ?>
        <?php if( get_row_layout() == 'row_1' ): ?>
        <?php if( have_rows('logos') ): while ( have_rows('logos') ) : the_row(); ?>
          <li><img src="<?php the_sub_field('logo'); ?>" alt="Healthline Customer Logo"></li>
        <?php endwhile; endif; ?>
        <?php endif; ?>
        <?php endwhile; endif; ?>
        </ul>
      </div>
    </div><!--! .row -->

  </div>
</section>

<hr>

<section>
  <div class="container">

    <div class="row text-center">
      <div class="span12">
      <?php if( have_rows('home_page_content') ): while ( have_rows('home_page_content') ) : the_row(); ?>
      <?php if( get_row_layout() == 'row_2' ): ?>
        <h3 class="text-green"><i class="icon-v2 icon-taxonomy-v2 mobile-hide">taxonomy</i> <?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>

        <div class="outline outline-thick mar-t">
          <ul class="list-stats">
          <?php if( get_sub_field('statistics') ): while( has_sub_field('statistics') ): ?>
            <li>
              <?php the_sub_field('headline'); ?>
              <span><?php the_sub_field('number'); ?></span>
            </li>
          <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>
    <?php endif; ?>
    <?php endwhile; endif; ?>
    </div><!--! .row -->

  </div>
</section>

<hr>

<section class="bg-icons" id="search-discover">
  <div class="container">
    <div class="row pad-b">
      <div class="span10">
      <?php if( have_rows('home_page_content') ): while ( have_rows('home_page_content') ) : the_row(); ?>
      <?php if( get_row_layout() == 'row_3' ): ?>
        <h3 class="h2 text-green"><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      <?php endif; ?>
      <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

    <div class="row mar-t flex-v-align">
    <?php if( have_rows('home_page_content') ): while ( have_rows('home_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_4' ): ?>
      <div class="span5 text-center">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline screenshot">
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


<section class="gray" id="data">
  <div class="container">

    <div class="row flex-v-align">
    <?php if( have_rows('home_page_content') ): while ( have_rows('home_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_5' ): ?>
      <div class="span5 text-center order-2">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline screenshot">
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


<section id="content">
  <div class="container">

    <div class="row flex-v-align">
    <?php if( have_rows('home_page_content') ): while ( have_rows('home_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_6' ): ?>
      <div class="span5 text-center">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline screenshot">
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
    </div>

  </div>
</section>


<section class="gray" id="marketing">
  <div class="container">

    <div class="row flex-v-align">
    <?php if( have_rows('home_page_content') ): while ( have_rows('home_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_7' ): ?>
      <div class="span5 text-center order-2">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline screenshot">
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
    </div>

  </div>
</section>


<section>
  <div class="container">

    <div class="row">
      <div class="span12">
        <div class="outline">
          <div class="row">
          <?php if( have_rows('home_page_content') ): while ( have_rows('home_page_content') ) : the_row(); ?>
          <?php if( get_row_layout() == 'row_8' ): ?>

            <div class="span4 offset1">
              <img src="<?php the_sub_field('image'); ?>" alt="Healthline screenshot" class="mar-b--20">
              <small class="line-height"><?php the_sub_field('small_text'); ?></small>
            </div>
            <div class="span6">
              <h2 class="text-green"><?php the_sub_field('headline'); ?></h2>
              <p class="lead"><?php the_sub_field('paragraph'); ?></p>
              <?php if( get_sub_field('button') ): while( has_sub_field('button') ): ?>
              <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-purple btn-large mar-t--10"><?php the_sub_field('button_text'); ?></a>
              <?php endwhile; endif; ?>
            </div>

          <?php endif; ?>
          <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section>
  <div class="container">

    <div class="row flex-v-align">
    <?php if( have_rows('home_page_content') ): while ( have_rows('home_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_9' ): ?>
      <div class="span4 text-center order-2">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline screenshot">
      </div>
      <div class="span8 order-1">
        <h3><?php the_sub_field('headline'); ?></h3>
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


<?php get_footer(); ?>
