<?php
/*
Template Name: Engagement Solutions Page Template
*/
?>

<?php get_header(); ?>


<section class="callout bg-img bg-solutions-b">
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
            <li><a href="#applications">Applications</a></li>
            <li><a href="#search">Intelligent Search</a></li>
            <li><a href="#mapping">Concept Mapping</a></li>
            <li><a href="#implementation">Implementation</a></li>
          </ul>
        </nav>
      </div>
    </div><!--! .row -->

  </div>
</section>

<section>
  <div class="container">

  <?php if( have_rows('search_discovery_page_content') ): while ( have_rows('search_discovery_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_6' ): ?>
    <div class="row text-center">
      <div class="span12">
        <h3><?php the_sub_field('headline'); ?></h3>
      </div>
    </div><!--! .row -->

    <div class="row mar-t text-center mobile-hide">
      <ul class="swapper-selector swapper-icons">
        <li class="switch-item current" id="item1" data-target="1">
          <i class="icon-solutions icon-precision mar-t--10">Precision and Recall Icon</i>
          <h6 class="uppercase">Precision &amp; Recall</h6>
        </li>
        <li class="switch-item" data-target="2">
          <i class="icon-solutions icon-scale mar-t--10">Scale Icon</i>
          <h6 class="uppercase">Scale</h6>
        </li>
        <li class="switch-item" data-target="3">
          <i class="icon-solutions icon-speed mar-t--10">Speed Icon</i>
          <h6 class="uppercase">Speed</h6>
        </li>
        <li class="switch-item" data-target="4">
          <i class="icon-solutions icon-personalization mar-t--10">Personalization Icon</i>
          <h6 class="uppercase">Personalization</h6>
        </li>
      </ul>
    </div><!--! .row -->

    <div class="row swapper-wrap swapper-wrap-alt">
      <div class="span10 offset1">
      <?php $j = 1; if( get_sub_field('search_boxes') ): while( has_sub_field('search_boxes') ): ?>
        <div class="swapper-content <?php if ( $j == 1 ) { ?>show<?php }; ?>" data-title="<?php echo $j; ?>">
          <p><?php the_sub_field('paragraph'); ?></p>
          <?php if( get_sub_field('link') ): while( has_sub_field('link') ): ?>
          <a href="<?php the_sub_field('link'); ?>"><strong><?php the_sub_field('link_text'); ?></strong></a>
          <?php endwhile; endif; ?>
        </div>
      <?php $j++; endwhile; endif; ?>
      </div>
    </div>
    <?php endif; ?>
    <?php endwhile; endif; ?>

  </div>
</section>

<section class="pad-t--10">
  <div class="container">

    <div class="row">
    <?php if( have_rows('search_discovery_page_content') ): while ( have_rows('search_discovery_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_1' ): ?>
      <div class="span4 text-center">
        <img src="<?php the_sub_field('image'); ?>" alt="Search integration icon">
      </div>
      <div class="span8">
        <h3><?php the_sub_field('headline'); ?></h3>
        <p class="lead"><?php the_sub_field('paragraph'); ?></p>
        <ul class="list-spacing-v list-square lead">
        <?php if( get_sub_field('bullet_points') ): while( has_sub_field('bullet_points') ): ?>
          <li><?php the_sub_field('point'); ?></li>
        <?php endwhile; endif; ?>
        </ul>
      </div>
    <?php endif; ?>
    <?php endwhile; endif; ?>
    </div><!--! .row -->

  </div>
</section>


<section id="applications" class="pad-b--10">
  <div class="container">

    <div class="row text-center">
      <div class="span8 offset2">
      <?php if( have_rows('search_discovery_page_content') ): while ( have_rows('search_discovery_page_content') ) : the_row(); ?>
      <?php if( get_row_layout() == 'row_2' ): ?>
        <h3 class="text-green"><?php the_sub_field('headline'); ?></h3>
        <p><?php the_sub_field('paragraph'); ?></p>
      <?php endif; ?>
      <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

  </div>
</section>

<section class="bg-circles text-center">
  <div class="container">

    <div class="row">
      <div class="span12">
        <div class="circle-content circle-content-1">
          <i class="icon-s-d icon-search-blue"></i>
          <h5>Search Tools</h5>
          <p>Retrieval of ranked results from document warehouses and databases</p>
        </div>
        <div class="circle-content circle-content-2">
          <i class="icon-s-d icon-language"></i>
          <h5>Natural Language Processing</h5>
          <p>Identification of clinical concepts and query analysis</p>
        </div>
        <div class="circle-content circle-content-3">
          <i class="icon-s-d icon-suggest"></i>
          <h5>Suggestive Search</h5>
          <p>Provide relevant query suggestions via type-ahead or other navigation</p>
        </div>
        <div class="circle-content circle-content-4">
          <i class="icon-s-d icon-navigate"></i>
          <h5>Navigator Tagging</h5>
          <p>Hyperlinking clinical concepts within a body of content to a set of related search results</p>
        </div>
        <div class="circle-content circle-content-5">
          <i class="icon-s-d icon-health"></i>
          <h5>Health Linking</h5>
          <p>Hyperlinking clinical concepts within a body of content to a single reference</p>
        </div>
      </div>
    </div><!--! .row -->

  </div>
</section>


<section>
  <div class="container">

    <div class="row flex-v-align">
    <?php if( have_rows('search_discovery_page_content') ): while ( have_rows('search_discovery_page_content') ) : the_row(); ?>
    <?php if( get_row_layout() == 'row_3' ): ?>
      <div class="span4 text-center">
        <img src="<?php the_sub_field('image'); ?>" alt="Icons">
      </div>
      <div class="span6 offset1">
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
        <?php if( get_sub_field('button') ): while( has_sub_field('button') ): ?>
        <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-blue"><?php the_sub_field('button_text'); ?></a>
        <?php endwhile; endif; ?>
      </div>
    <?php endif; ?>
    <?php endwhile; endif; ?>
    </div><!--! .row -->

  </div>
</section>


<section class="gray text-center" id="search">
  <div class="container">

    <div class="row">
      <div class="span12">
      <?php if( have_rows('search_discovery_page_content') ): while ( have_rows('search_discovery_page_content') ) : the_row(); ?>
      <?php if( get_row_layout() == 'row_4' ): ?>
        <h2 class="text-green"><?php the_sub_field('headline'); ?></h2>
        <p><?php the_sub_field('paragraph'); ?></p>
        <h4 class="mar-t--20"><?php the_sub_field('sub_headline'); ?></h4>
        <p><?php the_sub_field('paragraph_2'); ?></p>
      <?php endif; ?>
      <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

    <div class="row mar-t concept-search visible-check">

      <div class="span6">
        <div class="dark-gray equal-height pad--25">
          <h4 class="text-gray">Standard Search</h4>
          <div class="search-box">
            <p><span class="type type-1">H</span><span class="type type-2">e</span><span class="type type-3">a</span><span class="type type-4">r</span><span class="type type-5">t</span><span class="type type-6">&nbsp;</span><span class="type type-7">A</span><span class="type type-8">t</span><span class="type type-9">t</span><span class="type type-10">a</span><span class="type type-11">c</span><span class="type type-12">k</span> <i class="fa fa-search"></i></p>
          </div>
          <i class="fa fa-long-arrow-down animate delay-1"></i>
          <div class="result-box animate delay-2 v-align">
            <div class="inner">
              <h5 class="text-purple">Query Analysis</h5>
              <p>None. The search term is “heart attack”.</p>
            </div>
          </div>
          <i class="fa fa-long-arrow-down animate delay-3"></i>
          <div class="result-box animate delay-4 v-align">
            <div class="inner">
              <h5 class="text-purple">Full-Text Search</h5>
              <p>Locates all documents that contain the search term.</p>
            </div>
          </div>
          <i class="fa fa-long-arrow-down animate delay-5"></i>
          <div class="result-box animate delay-6 v-align">
            <div class="inner">
              <h5 class="text-purple">Search Results</h5>
              <p>All retrieved documents are displayed and ranked based only on the frequency and placement of exact match search term.</p>
            </div>
          </div>
          <div class="icon-box v-align">
            <div class="inner">
              <ul class="list-inline">
                <li>
                  <i class="icon icon-file">File Icon</i>
                </li>
                <li>
                  <i class="fa fa-question"></i>
                  <i class="fa fa-long-arrow-right"></i>
                  <i class="fa fa-long-arrow-left"></i>
                </li>
                <li>
                  <i class="icon icon-files-multi">Multiple File Icon</i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="span6">
        <div class="blue equal-height pad--25">
          <h4 class="text-white">Healthline Concept Search</h4>
          <div class="search-box">
            <p><span class="type type-13">H</span><span class="type type-14">e</span><span class="type type-15">a</span><span class="type type-16">r</span><span class="type type-17">t</span><span class="type type-18">&nbsp;</span><span class="type type-19">A</span><span class="type type-20">t</span><span class="type type-21">t</span><span class="type type-22">a</span><span class="type type-23">c</span><span class="type type-24">k</span> <i class="fa fa-search"></i></p>
          </div>
          <i class="fa fa-long-arrow-down animate delay-7"></i>
          <div class="result-box animate delay-8 v-align">
            <div class="inner">
              <h5 class="text-purple">Query Analysis</h5>
              <p>The query is analyzed and the medical concept matching the user’s search intent is identified.</p>
            </div>
          </div>
          <i class="fa fa-long-arrow-down animate delay-9"></i>
          <div class="result-box animate delay-10 v-align">
            <div class="inner">
              <h5 class="text-purple">Relevance-Based Search</h5>
              <p>Locates all documents related to the concept, and assigns a relevancy score to each document.</p>
            </div>
          </div>
          <i class="fa fa-long-arrow-down animate delay-11"></i>
          <div class="result-box animate delay-12 v-align">
            <div class="inner">
              <h5 class="text-purple">Search Results</h5>
              <p>Only documents that are related to the search term and/or synonyms are displayed and ranked by relevance.</p>
            </div>
          </div>
          <div class="icon-box v-align">
            <div class="inner">
              <ul class="list-inline">
                <li>
                  <i class="icon icon-file-medic">File Medic Icon</i>
                  <strong>100%</strong> Match
                </li>
                <li>
                  <i class="icon icon-file-check">File Checklist Icon</i>
                  <strong>86%</strong> Match
                </li>
                <li>
                  <i class="icon icon-file-scope">File Stethoscope Icon</i>
                  <strong>55%</strong> Match
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div><!--! .row -->

  </div>
</section>


<section id="mapping">
  <div class="container">

  <?php if( have_rows('search_discovery_page_content') ): while ( have_rows('search_discovery_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_5' ): ?>
    <div class="row text-center">
      <div class="span12">
        <h3 class="text-green"><?php the_sub_field('headline'); ?></h3>
      </div>
    </div><!--! .row -->

    <div class="row mar-t text-center">
      <div class="span12">
        <ul class="list-three-column">
        <?php $i = 1; if( get_sub_field('concept_buckets') ): while( has_sub_field('concept_buckets') ): ?>
          <li>

            <?php if( $i == 1 ) { ?>
            <img src="<?php bloginfo('template_directory'); ?>/library/img/solutions/search-code-1.png" alt="Code example" width="158" height="93" class="center mar-b--20">
            <?php } elseif( $i == 2 ) { ?>
            <img src="<?php bloginfo('template_directory'); ?>/library/img/solutions/search-code-2.png" alt="Code example" width="158" height="93" class="center mar-b--20">
            <?php } else { ?>
            <img src="<?php bloginfo('template_directory'); ?>/library/img/solutions/search-code-3.png" alt="Code example" width="158" height="93" class="center mar-b--20">
            <?php } ?>

            <h5><?php the_sub_field('headline'); ?></h5>
            <?php the_sub_field('paragraph'); ?>
          </li>
        <?php $i++; endwhile; endif; ?>
        </ul>
      </div>
    </div><!--! .row -->
    <?php endif; ?>
    <?php endwhile; endif; ?>

  </div>
</section>


<section class="gray pad-t--10 pad-b--10">
  <div class="container">

    <div class="row">
      <div class="span12 text-center">
        <div class="pad-t--10 pad-b--10">
          <a href="/get-started/" class="btn btn-purple btn-large">Get Started</a>
        </div>
      </div>
    </div><!--! .row -->

  </div>
</section>




<section class="gray" id="implementation">
  <div class="container text-center">

  <?php if( have_rows('search_discovery_page_content') ): while ( have_rows('search_discovery_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_7' ): ?>

    <div class="row">
      <div class="span8 offset2">
        <h3><?php the_sub_field('headline'); ?></h3>
        <p><?php the_sub_field('paragraph'); ?></p>
      </div>
    </div><!--! .row -->

    <?php $k = 1; if( get_sub_field('search_boxes') ): while( has_sub_field('search_boxes') ): ?>

    <?php if ($k % 2 == 1): ?>
    <div class="row mar-t">
    <?php endif; ?>

      <div class="span6">
        <div class="white border-bottom pad pad-t--20 pad-b--20 equal-height">
          <h6 class="uppercase border-bottom-narrow"><strong><?php the_sub_field('headline'); ?></strong></h6>
          <p><?php the_sub_field('paragraph'); ?></p>
        </div>
      </div>

    <?php if ($k % 2 == 0): ?>
    </div><!--! .row -->
    <?php endif; ?>

    <?php $k++; endwhile; endif; ?>

    <?php $k = $k - 1 ; if (0 != $k % 2): ?>
    </div><!--! .row -->
    <?php endif; ?>

    <div class="row text-center mar-t">

    <?php $l = 1; if( get_sub_field('solution_buckets') ): while( has_sub_field('solution_buckets') ): ?>
      <div class="span6">
        <i class="fa <?php if ( $l == 1 ) { ?>fa-wrench<?php } else { ?>fa-link<?php }; ?> fa-large mar-b--10"></i>
        <h4><?php the_sub_field('headline'); ?></h4>
        <p><?php the_sub_field('paragraph'); ?></p>
        <?php if( get_sub_field('button') ): while( has_sub_field('button') ): ?>
        <a href="<?php the_sub_field('button_link'); ?>" class="btn btn-purple btn-large"><?php the_sub_field('button_text'); ?></a>
        <?php endwhile; endif; ?>
      </div>
    <?php $l++; endwhile; endif; ?>

    </div><!--! .row -->
  <?php endif; ?>
  <?php endwhile; endif; ?>

  </div>
</section>

<section class="bQuote" style="margin-top: 2.5%;">

    <p class="blueLetters">"Healthline is helping us to harness the power of their medical taxonomy<br> to develop clinically intelligent applications and make our vast library <br>of health content smarter and easier to search."</p>
    <footer>
      <cite class="citing">- Elsevier</cite>
    </footer>

</section>

<section>
  <div class="container">
  <?php if( have_rows('search_discovery_page_content') ): while ( have_rows('search_discovery_page_content') ) : the_row(); ?>
  <?php if( get_row_layout() == 'row_8' ): ?>
    <div class="row">
      <div class="span12 text-center">
        <h3><?php the_sub_field('headline'); ?></h3>
      </div>
    </div><!--! .row -->

    <div class="row mar-t relative">

      <ul class="carousel-pagination list-inline"></ul>

      <div class="slider slider-partners">
        <div class="slider-wrap">

          <?php if( have_rows('partner_implementations') ): while ( have_rows('partner_implementations') ) : the_row(); ?>
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