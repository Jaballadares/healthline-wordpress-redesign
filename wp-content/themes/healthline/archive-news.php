<?php get_header(); ?>

<section class="callout bg-img bg-blog narrow">
  <div class="container">

    <div class="row">
      <div class="span12">
        <h2><strong>Healthline News</strong></h2>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section>
  <div class="container">

    <div class="row">
      <div class="span8">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php $newsDate = DateTime::createFromFormat('Ymd', get_field('date_news')); ?>
      <?php $url = get_permalink(); $newUrl = str_replace('/blog', '', $url); ?>

        <article class="post-excerpt">
          <?php if ( get_field('article_link') ) { ?>
            <h2 class="h3"><a href="<?php echo get_field('article_link'); ?>" target="_blank"><?php the_title(); ?></a></h2>
          <?php } else { ?>
            <h2 class="h3"><a href="<?php echo $newUrl; ?>"><?php the_title(); ?></a></h2>
          <?php } ?>

          <ul class="blog-meta mar-b--20">
            <li><time><?php echo $newsDate->format('M j, Y'); ?></time></li>
            <?php if ( get_field('author') ) { ?>
            <li>by <?php echo get_field('author'); ?></li>
            <?php } ?>
            <?php if ( get_field('publication') ) { ?>
            <li><?php echo get_field('publication'); ?></li>
            <?php } ?>
          </ul>

          <?php if ( get_field('article_link') ) { ?>
            <?php the_content(); ?>
            <p><a class="read-more" href="<?php echo get_field('article_link'); ?>">Read more <i class="fa fa-angle-right"></i></a></p>
          <?php } else { ?>
            <?php the_excerpt(); ?>
          <?php } ?>

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