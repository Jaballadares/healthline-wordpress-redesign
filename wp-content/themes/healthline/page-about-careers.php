<?php
/*
Template Name: Careers Page Template
*/
?>


<?php get_header(); ?>


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
        <script type="text/javascript" src="http://healthline.mycompas.com/corp/consol_careers/dyniframe2.js"></script>
        <script type="text/javascript">
          // dyniframe2.js loads getreq() function into global
          // call getreq() func after onload event
          window.onload = getreq;
        </script>
        <iframe width="100%" height="1500" id="compframe" name="compframe" frameborder="0" scrolling="no" allowTransparency="true"> </iframe>
      </div>
    </div><!--! .row -->

  </div>
</section>


<?php get_footer(); ?>