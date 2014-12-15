<?php get_header(); ?>


<section class="callout bg-img bg-blog">
  <div class="container">

    <div class="row">
      <div class="span12">
        <h2>Welcome to the Healthline Blog. <strong>The Hub that Powers Intelligent Conversations.</strong></h2>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section>
  <div class="container">

    <div class="row">
      <div class="span8">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post">
          <div class="post-header">
            <a href="/blog/" class="back"><i class="fa fa-angle-left"></i>All Posts</a>
            <ul class="blog-social">
              <li class="google-plus">
                <a class="socialite googleplus-one" href="http://twitter.com/share" data-href="<?php the_permalink(); ?>" data-annotation="none">Share on Google+</a>
              </li>
              <li class="facebook">
                <a class="socialite facebook-like" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="60" data-show-faces="false" rel="nofollow" target="_blank">Share on Facebook</a>
              </li>
              <li class="twitter">
                <a class="socialite twitter-share" href="http://twitter.com/share" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?> via @Healthline" data-count="none" target="_blank">Share on Twitter</a>
              </li>
            </ul>
          </div>

          <h2 class="h3"><?php the_title(); ?></h2>

          <ul class="blog-meta mar-b--20">
            <?php
              printf( __( '<li><time datetime="%1$s" pubdate>%2$s</time><li> <li>by %3$s</li></li> <li>filed under %4$s</li>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
            ?>
          </ul>


          <?php the_content(); ?>

        </article>

      <?php endwhile; endif; ?>
      </div>
      <div class="span4 sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div><!--! .row -->

  </div>
</section>


<?php get_footer(); ?>