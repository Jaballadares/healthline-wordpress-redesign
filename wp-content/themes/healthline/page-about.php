<?php
/*
Template Name: About Page Template
*/
?>

<?php get_header(); ?>


<?php
  function queryPost( $type, $postCount ) {
    $args = array(
      'update_post_term_cache' => false,
      'no_found_rows' => true,
      'post_type' => $type,
      'post_status' => 'publish',
      'posts_per_page' => $postCount,
      'order' => 'DSC'
    );

    return $query = new WP_Query( $args );
  }
?>

<section class="callout bg-img bg-about">
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
            <li><a href="#leadership">Leadership</a></li>
            <li><a href="#careers">Careers</a></li>
            <li><a href="#news-press">News and Press</a></li>
            <li><a href="#contact-us">Contact Us</a></li>
          </ul>
        </nav>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section class="pad-t--10" id="leadership">
  <div class="container">
  <?php if( have_rows('about_us_page_content') ): while ( have_rows('about_us_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_1' ): ?>
    <div class="row text-center">
      <div class="span10 offset1">
        <h3><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->

    <div class="row">
      <div class="span12">
        <ul class="team list-inline team-photos">
        <?php if( get_sub_field('leadership_buckets') ): while( has_sub_field('leadership_buckets') ): ?>
          <li>
            <img src="<?php the_sub_field('image'); ?>" alt="Healthline Leadership" class="mar-b--10">
            <h5>
            <?php if( get_sub_field('linkedin_profile') ) : ?>
              <a href="<?php the_sub_field('linkedin_profile'); ?>" target="_blank"><i class="fa fa-linkedin-square"></i>
              <?php the_sub_field('name'); ?>
              </a>
            <?php else : ?>
              <?php the_sub_field('name'); ?>
            <?php endif; ?>
            </h5>
            <h6><small><?php the_sub_field('position'); ?></small></h6>
          </li>
        <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>

  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section class="gray">
  <div class="container">
  <?php if( have_rows('about_us_page_content') ): while ( have_rows('about_us_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_2' ): ?>

    <div class="row text-center">
      <div class="span10 offset1">
        <h3><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->

    <?php $i = 1; if( get_sub_field('directors_buckets') ): while( has_sub_field('directors_buckets') ): ?>
    <?php if ($i % 2 == 1): ?>
    <div class="row mar-t">
    <?php endif; ?>
      <div class="span6">
      <?php if( get_sub_field('position') ) : ?>
        <h6><small><?php the_sub_field('position'); ?></small></h6>
      <?php endif; ?>
        <h5><?php the_sub_field('name'); ?></h5>
        <p><?php the_sub_field('bio'); ?></p>
      </div>
    <?php if ($i % 2 == 0): ?>
    </div><!--! .row -->
    <?php endif; ?>

    <?php $i++; endwhile; endif; ?>

    <?php $i = $i - 1 ; if (0 != $i % 2): ?>
    </div><!--! .row -->
    <?php endif; ?>


  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>





<section class="gray">
  <div class="container">
  <?php if( have_rows('about_us_page_content') ): while ( have_rows('about_us_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_4' ): ?>

    <div class="row text-center">
      <div class="span8 offset2">
        <h3><?php the_sub_field('headline'); ?></h3>
      </div>
    </div><!--! .row -->

    <div class="row mar-t">
      <div class="span8 offset2">
        <?php the_sub_field('video_embed_code'); ?>
      </div>
    </div><!--! .row -->

  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>

<section>
  <div class="container">
  <?php if( have_rows('about_us_page_content') ): while ( have_rows('about_us_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_5' ): ?>

    <div class="row text-center">
      <div class="span8 offset2">
        <h3><?php the_sub_field('headline'); ?></h3>
         <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->

  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>

<section class="gray">
  <div class="container">
  <?php if( have_rows('about_us_page_content') ): while ( have_rows('about_us_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_6' ): ?>

    <div class="row text-center">
      <div class="span8 offset2">
        <h3><?php the_sub_field('headline'); ?></h3>
      </div>
    </div><!--! .row -->

    <div class="row text-center">
      <div class="span6 offset3">
         <ul class="lead list-two-column">
          <?php if( get_sub_field('bullet_points') ): while( has_sub_field('bullet_points') ): ?>
            <li><span class="text-center block"><?php the_sub_field('point'); ?></span></li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div><!--! .row -->

  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section id="customers">
  <div class="container">
  <?php if( have_rows('about_us_page_content') ): while ( have_rows('about_us_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_7' ): ?>

    <div class="row text-center">
      <div class="span8 offset2">
        <h3><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->

    <div class="row mar-t">
      <div class="span12">
        <ul class="list-logos mar-t--20">
        <?php if( get_sub_field('logos') ): while( has_sub_field('logos') ): ?>
          <li><img src="<?php the_sub_field('logo'); ?>" alt="Healthline Partner"></li>
        <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>

  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section class="gray" id="careers">
  <div class="container">
  <?php if( have_rows('about_us_page_content') ): while ( have_rows('about_us_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_8' ): ?>

    <div class="row text-center block">
      <div class="span8 offset2">
        <h3><?php the_sub_field('headline'); ?></h3>
      </div>
    </div><!--! .row -->

    <div class="row mar-t flex-v-align">
      <div class="span6">
        <h4><?php the_sub_field('sub_headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
        <?php if( get_sub_field('button') ): while( has_sub_field('button') ): ?>
        <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-purple"><?php the_sub_field('button_text'); ?></a>
        <?php endwhile; endif; ?>
      </div>
      <div class="span5 offset1">
        <img src="<?php the_sub_field('image'); ?>" alt="Healthline Offices">
      </div>
    </div><!--! .row -->

  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section class="press-news" id="news-press">
  <div class="container">

    <div class="row">
      <div class="span6">
        <h3>News</h3>
        <ul>
        <?php $query = queryPost('news', 3); ?>
        <?php if ( $query->have_posts() ) : while ($query->have_posts()) : $query->the_post(); ?>
        <?php $newsDate = DateTime::createFromFormat('Ymd', get_field('date_news')); ?>

          <li>
            <time datetime="<?php echo $newsDate->format('Y-m-d'); ?>"><?php echo $newsDate->format('M j, Y'); ?></time>
            <?php if ( get_field('article_link') ) { ?>
            <a href="<?php echo get_field('article_link'); ?>" target="_blank"><?php the_title(); ?></a>
            <?php } else { ?>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php } ?>
          </li>

        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
        </ul>
        <a href="/about-us/news/" class="btn btn-purple">All News</a>
      </div>

      <div class="span6">
        <h3>Press Releases</h3>
        <ul>
        <?php $query = queryPost('press_release', 3); ?>
        <?php if ( $query->have_posts() ) : while ($query->have_posts()) : $query->the_post(); ?>
        <?php $pressDate = DateTime::createFromFormat('Ymd', get_field('date_press_release')); ?>

          <li>
            <time datetime="<?php echo $newsDate->format('Y-m-d'); ?>"><?php echo $pressDate->format('M j, Y'); ?></time>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>

        <?php endwhile; endif; ?>
        <?php wp_reset_postdata(); ?>
        </ul>
        <a href="/about-us/press-releases/" class="btn btn-purple">All Press Releases</a>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section class="gray" id="contact-us">
  <div class="container">
  <?php if( have_rows('about_us_page_content') ): while ( have_rows('about_us_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_9' ): ?>

    <div class="row text-center">
      <div class="span8 offset2">
        <h3><?php the_sub_field('headline'); ?></h3>
      </div>
    </div><!--! .row -->

  <?php if( get_sub_field('contact_bucket') ): while( has_sub_field('contact_bucket') ): ?>
    <div class="row mar-t flex-v-align">
      <div class="span7">
        <?php the_sub_field('map_embed_code'); ?>
      </div>
      <div class="span5">
        <ul class="address">
          <li><h4><?php the_sub_field('headline'); ?></h4></li>
          <li><h5>Mailing Address</h5></li>
          <?php $address = get_sub_field('mailing_address_1') . '+' . get_sub_field('mailing_address_2'); ?>
          <?php $mapLink = str_replace(' ', '+', $address); ?>
          <li><a href="https://www.google.com/maps/place/<?php echo $mapLink; ?>" target="_blank"><?php the_sub_field('mailing_address_1'); ?> <br><?php the_sub_field('mailing_address_2'); ?></a></li>
          <li><h5>Phone</h5></li>
          <li><a href="tel:<?php the_sub_field('phone_number'); ?>"><?php the_sub_field('phone_number'); ?></a></li>
          <?php if( get_sub_field('email_address') ): ?>
          <li><h5>Email</h5></li>
          <?php while( has_sub_field('email_address') ): ?>
          <li><?php the_sub_field('send_to'); ?> <a href="mailto:<?php the_sub_field('email_address'); ?>" target="_blank"><?php the_sub_field('email_address'); ?></a></li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div><!--! .row -->
  <?php endwhile; endif; ?>

  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<?php get_footer(); ?>
