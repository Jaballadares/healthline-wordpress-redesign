<?php
/*
Template Name: Get Started Page Template
*/
?>

<?php get_header();?>


<section class="gray">
  <div class="container">

    <div class="row text-center">
      <div class="span6 offset3">
      <?php if( get_field('page_content') ): while( has_sub_field('page_content') ): ?>
        <h2><?php the_sub_field('headline'); ?></h2>
        <p><?php the_sub_field('paragraph'); ?></p>
      <?php endwhile; endif; ?>
      </div>
    </div><!--! .row -->

    <div class="row mar-t">
      <div class="span6 offset3 span-m-8 offset-m-2">
        <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" class="form-general form-get-started">
          <input type="hidden" name="oid" value="00DG0000000i5W2">
          <!-- Thank you page redirect -->
          <input type="hidden" name="retURL" value="http://corp.healthline.com/thanks">
          <input type="hidden" select id="lead_source" name="lead_source" value="CorpSite">


          <div class="input-wrap left">
            <label class="placeholder-hide" for="first_name">First Name</label>
            <input id="first_name" maxlength="40" name="first_name" size="20" type="text" placeholder="First Name">
          </div>

          <div class="input-wrap right">
            <label class="placeholder-hide" for="last_name">Last Name</label>
            <input id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="Last Name">
          </div>

          <div class="input-wrap left">
            <label class="placeholder-hide" for="company">Company</label>
            <input id="company" maxlength="40" name="company" size="20" type="text" placeholder="Company">
          </div>

          <div class="input-wrap right">
            <label class="placeholder-hide" for="title">Title</label>
            <input id="title" maxlength="40" name="title" size="20" type="text" placeholder="Title">
          </div>

      <div class="input-wrap left">
            <label class="placeholder-hide" for="city">City</label>
            <input id="city" maxlength="40" name="city" size="20" type="text" placeholder="City">
          </div>

          <div class="input-wrap right">
            <label class="placeholder-hide" for="state">State/Province</label>
            <input id="state" maxlength="20" name="state" size="20" type="text" placeholder="State/Province">
          </div>

          <div class="input-wrap left">
            <label class="placeholder-hide" for="postal_code">Postal Code</label>
            <input id="postal_code" maxlength="20" name="postal_code" size="20" type="numever" placeholder="Postal Code">
          </div>

          <div class="input-wrap right">
            <label class="placeholder-hide" for="email">Email</label>
            <input id="email" maxlength="80" name="email" size="20" placeholder="Email">
          </div>

          <div class="input-wrap-full">
<select required id="00NG000000EM47A" name="00NG000000EM47A" title="Please Select the Product You Are Interested In" class="droppy-down" style="width:100%;">
<optgroup label="Solutions">
<option value="">Please Select the Solution You Are Interested In &#9660 &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;</option>
<option value=" Data Solutions">Data Solutions</option>
<option value="Engagement Solutions">Engagement Solutions</option>
<option value="Marketing Solutions">Marketing Solutions</option>
</optgroup>
</select>
</label>
    </div>



   <label for="description"></label><textarea name="description" placeholder="How Can We Help?" style="width:100%;"></textarea><br>
          <input type="submit" value="Submit" class="btn btn-purple btn-large">
        </form>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>