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
      <?php if (is_category()) { ?>
        <h2 class="h3 mar-b--20">
          <span><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?>
        </h2>
      <?php } elseif (is_tag()) { ?>
        <h2 class="h3 mar-b--20">
          <span><?php _e( 'Posts Tagged:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?>
        </h2>
      <?php } elseif (is_author()) {
        global $post;
        $author_id = $post->post_author;
      ?>
        <h2 class="h3 mar-b--20">
          <span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?>
        </h2>
      <?php } elseif (is_day()) { ?>
        <h2 class="h3 mar-b--20">
          <span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?>
        </h2>
      <?php } elseif (is_month()) { ?>
        <h2 class="h3 mar-b--20">
          <span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?>
        </h2>
      <?php } elseif (is_year()) { ?>
        <h2 class="h3 mar-b--20">
          <span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?>
        </h2>
      <?php } ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post-excerpt">

          <h2 class="h3"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

          <ul class="blog-meta mar-b--20">
            <?php
              printf( __( '<li><time datetime="%1$s" pubdate>%2$s</time><li> <li>by %3$s</li></li> <li>filed under %4$s</li>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
            ?>
          </ul>

          <?php if ( has_post_thumbnail()) { ?>
            <a href="<?php the_permalink() ?>" class="block mar-b--20">
              <?php the_post_thumbnail('large'); ?>
            </a>
          <?php } ?>

          <?php the_excerpt(); ?>

        </article>

      <?php endwhile; ?>

      <?php if ( function_exists( 'bones_page_navi' ) ) { ?>
          <?php bones_page_navi(); ?>
      <?php } else { ?>
          <nav class="wp-prev-next">
              <ul class="clearfix">
                <li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
                <li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
              </ul>
          </nav>
      <?php } ?>

      <?php endif; ?>
      </div>
      <div class="span4 sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div><!--! .row -->

  </div>
</section>


<?php get_footer(); ?>