<?php
/*
Template Name: Developers Page Template
*/
?>

<?php get_header(); ?>


<section class="callout bg-img bg-developers">
  <div class="container">

    <div class="row">
      <div class="span8">
      <?php if( get_field('header_content') ): while( has_sub_field('header_content') ): ?>
        <h2 class="large"><?php the_sub_field('headline'); ?></h2>
        <p class="lead border-top mobile-hide"><?php the_sub_field('paragraph'); ?></p>
      <?php endwhile; endif; ?>
      </div>
      <div class="span3 offset1 span-m-4 span-m-o-0">
        <form action="#" class="form-login" id="request-license">
          <h5>Request a License</h5>
          <div class="form">
            <div class="input-wrap">
              <label for="email" class="placeholder-hide">Email</label>
              <input type="text" name="email" id="request-license-email" placeholder="EMAIL">
            </div>
            <input type="submit" value="Submit" id="request-license-submit" class="btn btn-purple btn-block">
          </div>
          <div class="message" style="display:none;height:69px;">
            <p><strong>Gracias!</strong> Your request has been sent.</p>
          </div>
          <p class="mar-t--20 mar-b--0 text-gray">Have a license?</p>
          <a href="http://portal.healthline.com" class="btn btn-gray btn-block">Login</a>
        </form>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section class="pad-b--10">
  <div class="container">
  <?php if( have_rows('developers_page_content') ): while ( have_rows('developers_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_1' ): ?>

    <div class="row text-center">
      <div class="span8 offset2">
        <h3><?php the_sub_field('headline'); ?></h3>
        <p><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->

    <div class="row mar-t text-center">
      <div class="span12">
        <h5><?php the_sub_field('sub_headline'); ?></h5>
      </div>
    </div><!--! .row -->

  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section class="gray">
  <div class="container">
    <div class="row">
    <?php if( have_rows('developers_page_content') ): while ( have_rows('developers_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_2' ): ?>

    <?php $i = 1; if( get_sub_field('content_box') ): while( has_sub_field('content_box') ): ?>

    <?php if( $i == 1 ): ?>
      <div class="span6">
        <div class="white border-bottom pad">
          <h4 class="text-purple"><i class="icon-v2 icon-search-medium-v2">search</i> <?php the_sub_field('headline'); ?></h4>
          <?php the_sub_field('content'); ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if( $i == 2 ): ?>
      <div class="span6">
        <div class="white border-bottom pad mar-b">
          <h4 class="text-purple"><i class="icon-v2 icon-book-medium-v2">book</i> <?php the_sub_field('headline'); ?></h4>
          <?php the_sub_field('content'); ?>
        </div>
    <?php endif; ?>
    <?php if( $i == 3 ): ?>
        <div class="white border-bottom pad">
          <h4 class="text-purple"><i class="icon-v2 icon-target-medium-v2">graph</i> <?php the_sub_field('headline'); ?></h4>
          <?php the_sub_field('content'); ?>
        </div>
      </div>
    <?php endif; ?>


    <?php $i++; endwhile; endif; ?>

    <?php endif; ?>
    <?php endwhile; endif; ?>
    </div>

  </div>
</section>


<section>
  <div class="container">
  <?php if( have_rows('developers_page_content') ): while ( have_rows('developers_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_3' ): ?>
    <div class="row">
      <div class="span12 text-center">
        <h3><?php the_sub_field('headline'); ?></h3>
      </div>
    </div><!--! .row -->

    <div class="row mar-t relative">

      <ul class="carousel-pagination list-inline"></ul>

      <div class="slider slider-partners">
        <div class="slider-wrap">

          <?php if( have_rows('partner_implementation') ): while ( have_rows('partner_implementation') ) : the_row(); ?>
          <div class="slide">
            <div class="row">
              <div class="span4">
                <img src="<?php the_sub_field('image'); ?>" alt="Healthline partner implementation">
              </div>
              <div class="span8">
                <img src="<?php the_sub_field('partner_logo'); ?>" alt="Healthline partner implementation" class="mar-b--20">
                <p><?php the_sub_field('paragraph'); ?></p>
              </div>
            </div><!--! .row -->
          </div><!--! .slide -->
          <?php endwhile; endif; ?>

        </div><!--! .slider-wrap -->
      </div><!--! .slider -->

    </div><!--! .row -->
  <?php endif; ?>
  <?php endwhile; endif; ?>
  </div>
</section>


<section>
  <div class="container">

    <div class="row">
      <div class="span12">

        <div class="outline">
          <div class="row text-center">
            <div class="span8 offset2">
            <?php if( have_rows('developers_page_content') ): while ( have_rows('developers_page_content') ) : the_row(); ?>
            <?php if( get_row_layout() == 'row_4' ): ?>
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


<script>
  $(function(){
    $('#request-license').submit(function(e){
      e.preventDefault();

      if ($('#request-license-email').val().length > 0) {
        $.ajax({
          type: 'POST',
          url: '/_functions/license-request.php',
          data: { email: $('#request-license-email').val() }
        }).done(function() {
          $('#request-license .form').fadeOut(function() {
            $('#request-license .message').fadeIn();

            setTimeout(function() {
              $('#request-license .message').fadeOut(function() {
                $('#request-license-email').val('');
                $('#request-license .form').fadeIn();
              });
            }, 2500);
          });
        });
      }

    });
  });
</script>