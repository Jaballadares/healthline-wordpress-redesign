<?php
/*
Template Name: Platform Page Template
*/
?>

<?php get_header(); ?>


<section class="callout bg-img bg-platform">
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
            <li><a href="#taxonomy" id="taxonomy-nav">Taxonomy Platform</a></li>
            <li><a href="#applications" id="applications-nav">Applications</a></li>
            <li><a href="#semantic-coverage" id="semantic-coverage-nav">Semantic Coverage</a></li>
            <li><a href="#benefits" id="benefits-nav">Benefits</a></li>
          </ul>
        </nav>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section class="pad-b--0 pad-t--10" id="taxonomy">
  <div class="container">

    <div class="row text-center">
      <div class="span10 offset1">
      <?php if( have_rows('platform_page_content') ): while ( have_rows('platform_page_content') ) : the_row(); ?>
      <?php if( get_row_layout() == 'row_1' ): ?>
        <h3><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      <?php endif; ?>
      <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section>
  <div class="container">

    <div class="row">
      <div class="span12">
      <img src="http://healthline.dev/wp-content/uploads/2014/12/Breast-Cancer9-01.png" alt="">
      <!-- Use this if image source fails -->

       <!--  <img src="<?php bloginfo('template_directory'); ?>/library/img/platform/healthline-infographic.jpg" alt="Healthline Inforgraphic"> -->
      </div>
    </div><!--! .row -->

  </div>
</section>


<section class="gray" id="applications">
  <div class="container">

    <div class="row text-center">
      <div class="span10 offset1">
      <?php if( have_rows('platform_page_content') ): while ( have_rows('platform_page_content') ) : the_row(); ?>
      <?php if( get_row_layout() == 'row_2' ): ?>
        <h3><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      <?php endif; ?>
      <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

  <?php if( have_rows('platform_page_content') ): while ( have_rows('platform_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_3' ): ?>

  <?php $i = 1; if( have_rows('content_box') ): while ( have_rows('content_box') ) : the_row(); ?>

    <?php if ($i % 2 == 1): ?>
    <div class="row mar-t">
    <?php endif; ?>

      <div class="span6">
        <div class="white border-bottom pad equal-height">
          <h6 class="uppercase border-bottom-narrow text-center"><strong><?php the_sub_field('headline'); ?></strong></h6>
          <p><?php the_sub_field('paragraph'); ?></p>
        </div>
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


<section class="gray" id="semantic-coverage">
  <div class="container">

    <div class="row flex-v-align">
    <?php if( have_rows('platform_page_content') ): while ( have_rows('platform_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_4' ): ?>
      <div class="span7">
        <h3><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
      </div>
      <div class="span5 text-center">
        <img src="<?php the_sub_field('image'); ?>" alt="Taxonomy wheel">
      </div>
    <?php endif; ?>
    <?php endwhile; endif; ?>
    </div><!--! .row -->

    <div class="row mar-t" id="concepts-codes">
      <div class="span5">
        <div class="table-responsive table-striped">
          <table class="table">
            <tr>
              <th colspan="2">
                <h5><strong>700,000+ Medical Concepts*</strong></h5>
              </th>
            </tr>
            <tr>
              <td class="text-blue">90,259</td>
              <td>Diseases</td>
            </tr>
            <tr>
              <td class="text-blue">40,825</td>
              <td>Symptoms</td>
            </tr>
            <tr>
              <td class="text-blue">69,754</td>
              <td>Procedures</td>
            </tr>
            <tr>
              <td class="text-blue">12,337</td>
              <td>Clinical Findings</td>
            </tr>
            <tr>
              <td class="text-blue">26,842</td>
              <td>Drugs</td>
            </tr>
            <tr>
              <td class="text-blue">17,411</td>
              <td>Anatomy Terms</td>
            </tr>
            <tr>
              <td class="text-blue">5,625</td>
              <td>Occupations</td>
            </tr>
            <tr>
              <td colspan="2" class="tall text-center">
                <span class="break">*Categorized by 20 Semantic Groups</span> and 190 Semantic Types
              </td>
            </tr>
          </table>
        </div>

        <div class="table-responsive table-striped mar-t">
          <table class="table">
            <tr>
              <th colspan="2">
                <h5><strong>Codes</strong></h5>
              </th>
            </tr>
            <tr>
              <td>ICD9</td>
              <td>ICD10</td>

            </tr>
            <tr>
              <td>CPT</td>
              <td>SNOMED CT</td>
            </tr>
            <tr>
              <td>LOINC</td>
              <td>MeSH</td>
            </tr>
            <tr>
              <td>RxNorm</td>
              <td></td>
            </tr>
          </table>
        </div>

        <div class="white text-center mar-t pad--30 outline">
          <h6 class="text-blue">License Healthline's</h6>
          <h4>Taxonomy Mappings</h4>
          <p>Mappings are available via RESTful API or data export.</p>
          <a href="/taxonomy-mapping/" class="btn btn-purple btn-large">Learn More</a>
        </div>
      </div>
      <div class="span6 offset1">
        <div class="table-responsive table-striped">
          <table class="table">
            <tr>
              <th colspan="3">
                <h5><strong>2,000,000+ Semantic Relationships</strong></h5>
              </th>
            </tr>
            <tr>
              <td>Consumer Friendly Names</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Codes</td>
            </tr>
            <tr>
              <td>Medical Name</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Consumer Friendly Names</td>
            </tr>
            <tr>
              <td>Conditions</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Symptoms</td>
            </tr>
            <tr>
              <td>Anatomy</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Male Symptoms</td>
            </tr>
            <tr>
              <td>Anatomy</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Female Symptoms</td>
            </tr>
            <tr>
              <td>Conditions</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Physician Specialty</td>
            </tr>
            <tr>
              <td>Anatomy</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Physician Specialty</td>
            </tr>
            <tr>
              <td>Conditions</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Diagnostic Procedures</td>
            </tr>
            <tr>
              <td>Conditions</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Treatments</td>
            </tr>
            <tr>
              <td>Conditions</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Medications</td>
            </tr>
            <tr>
              <td>Conditions</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Risk Factors</td>
            </tr>
          </table>
        </div>

        <div class="table-responsive table-striped mar-t">
          <table class="table">
            <tr>
              <th>
                <h5><strong>Unique Features</strong></h5>
              </th>
            </tr>
            <tr>
              <td>Homonyms - Positive / Negative / Immunity</td>
            </tr>
            <tr>
              <td>Synonyms</td>
            </tr>
            <tr>
              <td>Acronyms and Abbreviations</td>
            </tr>
            <tr>
              <td>Consumer Friendly Names</td>
            </tr>
            <tr>
              <td>Consumer Friendly Definitions</td>
            </tr>
            <tr>
              <td>Hierarchical Relationships</td>
            </tr>
            <tr>
              <td>Clinical Rules</td>
            </tr>
            <tr>
              <td>Proprietary Relationships</td>
            </tr>
            <tr>
              <td>Rankings</td>
            </tr>
            <tr>
              <td>Concept Expansion</td>
            </tr>
          </table>
        </div>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section class="pad-b--0" id="benefits">
  <div class="container">

    <div class="row text-center">
      <div class="span8 offset2">
        <?php if( have_rows('platform_page_content') ): while ( have_rows('platform_page_content') ) : the_row(); ?>
        <?php if( get_row_layout() == 'row_5' ): ?>
        <h3 class="text-green"><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
        <?php endif; ?>
        <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

    <div class="row flex-v-align mar-t--2x">
      <div class="span6 text-center">
        <img src="<?php bloginfo('template_directory'); ?>/library/img/platform/streamline-search-2.png" alt="Streamline the Search Experience" class="left">
        <img src="<?php bloginfo('template_directory'); ?>/library/img/platform/streamline-search.png" alt="Streamline the Search Experience" class="right pull-up mobile-hide">
      </div>
      <div class="span5">
        <?php if( have_rows('platform_page_content') ): while ( have_rows('platform_page_content') ) : the_row(); ?>
        <?php if( get_row_layout() == 'row_6' ): ?>
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
        <?php endif; ?>
        <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

  </div>
</section>

<section class="gray pad-b--0">
  <div class="container">

    <div class="row flex-v-align">
      <div class="span6 order-2">
        <img src="<?php bloginfo('template_directory'); ?>/library/img/platform/enrich-value.png" alt="Enrich the Value of Information">
      </div>
      <div class="span5 offset1 order-1">
        <?php if( have_rows('platform_page_content') ): while ( have_rows('platform_page_content') ) : the_row(); ?>
        <?php if( get_row_layout() == 'row_7' ): ?>
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
        <?php endif; ?>
        <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

  </div>
</section>

<section>
  <div class="container">

    <div class="row flex-v-align">
      <div class="span6 text-center">
        <img src="<?php bloginfo('template_directory'); ?>/library/img/platform/take-users.jpg" alt="Take users where they want to go" width="555" height="172">
      </div>
      <div class="span5">
        <?php if( have_rows('platform_page_content') ): while ( have_rows('platform_page_content') ) : the_row(); ?>
        <?php if( get_row_layout() == 'row_8' ): ?>
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
        <?php endif; ?>
        <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section>
  <div class="container">
  <?php if( have_rows('platform_page_content') ): while ( have_rows('platform_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_9' ): ?>
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


<?php get_footer(); ?>
