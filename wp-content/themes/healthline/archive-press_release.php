<?php get_header(); ?>


<section class="callout bg-img bg-blog narrow">
  <div class="container">

    <div class="row">
      <div class="span12">
        <h2><strong>Healthline Press Releases</strong></h2>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section>
  <div class="container">

    <div class="row">
      <div class="span8">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php $pressDate = DateTime::createFromFormat('Ymd', get_field('date_press_release')); ?>
      <?php $url = get_permalink(); $newUrl = str_replace('/blog', '', $url); ?>

      	<article class="post-excerpt">

					<h2 class="h3"><a href="<?php echo $newUrl; ?>"><?php the_title(); ?></a></h2>

					<ul class="blog-meta mar-b--20">
						<li><time><?php echo $pressDate->format('M j, Y'); ?></time></li>
					</ul>


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