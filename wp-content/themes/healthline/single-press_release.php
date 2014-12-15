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

      	<article class="post">
          <div class="post-header">
            <a href="/about-us/press-releases/" class="back"><i class="fa fa-angle-left"></i>All Press Releases</a>
            <ul class="blog-social">
              <li class="google-plus">
                <a class="socialite googleplus-one" href="http://twitter.com/share" data-href="<?php echo $newUrl; ?>" data-annotation="none">Share on Google+</a>
              </li>
              <li class="facebook">
                <a class="socialite facebook-like" href="http://www.facebook.com/sharer.php?u=<?php echo $newUrl; ?>" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="60" data-show-faces="false" rel="nofollow" target="_blank">Share on Facebook</a>
              </li>
              <li class="twitter">
                <a class="socialite twitter-share" href="http://twitter.com/share" data-url="<?php echo $newUrl; ?>" data-text="<?php the_title(); ?> via @Healthline" data-count="none" target="_blank">Share on Twitter</a>
              </li>
            </ul>
          </div>

					<h2 class="h3"><?php the_title(); ?></h2>

					<ul class="blog-meta mar-b--20">
						<li><time><?php echo $pressDate->format('M j, Y'); ?></time></li>
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