<?php
/*
Template Name: Taxonomy Mapping Page Template
*/
?>

<?php get_header(); ?>


<section class="callout bg-img">
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

     <div class="row mar-t">
      <div class="span5 offset1">
        <div class="table-responsive table-striped table-no-head">
          <table class="table">
            <tr>
              <td>Anatomy</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Symptoms</td>
            </tr>
            <tr>
              <td>Conditions</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Physician Specialty</td>
            </tr>
            <tr>
              <td>Conditions</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Diagnostic Tests</td>
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
      </div>
      <div class="span5">
        <div class="table-responsive table-striped table-no-head">
          <table class="table">
            <tr>
              <td>Consumer Friendly Names</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Symptoms</td>
            </tr>
            <tr>
              <td>ICD9</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>ICD10</td>
            </tr>
            <tr>
              <td>ICD9</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Consumer Friendly Names</td>
            </tr>
            <tr>
              <td>CPT4</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Consumer Friendly Names</td>
            </tr>
            <tr>
              <td>RxNorm</td>
              <td><i class="fa fa-arrows-h text-blue"></i></td>
              <td>Consumer Friendly Names</td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <div class="row mar-t">
      <div class="span12 text-center">
        <p>Custom mappings are also available</p>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>