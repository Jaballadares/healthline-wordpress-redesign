<?php
/*
Template Name: Scheduler Landing Page Template
*/
?>


<?php require('header-sales.php'); ?>

<div class="row salesTime">
    <div class="span12">
        <h2 class="confirmation">Want to Schedule a Demo of Coding InSight?</h2>
        <h4 class="letUsKnow">Let Us Know What Date and Time Works Best for You</h4>

      <div class="span6 form-template" id="myForm">

        <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" novalidate="novalidate" id="datePicker">
            <input type="hidden" name="oid" value="00DG0000000i5W2">
            <input type="hidden" name="retURL" value="http://corp.healthline.com/thanks/">
            <input type="hidden" select="" id="lead_source" name="lead_source" value="Coding_InSight_Demo">

            <p class="wrapper" style="display:flex;">
                <span class="fa fa-calendar" display: "text-align: right;"></span>
            <input type="text" class="picker fa fa-calendar" placeholder="Choose a Day" />
            </p>
            <input type="text" class="timepicker" placeholder="Choose a Time" id="myPicker"/>
        </form>
          </div>
    </div>
</div><!--! .row -->


<section id="form-section">
    <div class="container">

        <div class="row">

            <div class="span5 offset1 form-template">
                <div class="landing-page-form">
                    <!--  ----------------------------------------------------------------------  -->
                    <!--  NOTE: Please add the following <FORM> element to your page.             -->
                    <!--  ----------------------------------------------------------------------  -->

                    <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" novalidate="novalidate">

                        <input type="hidden" name="oid" value="00DG0000000i5W2">

                        <!-- Thank you page redirect -->
                        <input type="hidden" name="retURL" value="http://corp.healthline.com/thanks/">
                        <input type="hidden" select="" id="lead_source" name="lead_source" value="Coding_InSight_Demo">

                        <!--  ----------------------------------------------------------------------  -->
                        <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
                        <!--  these lines if you wish to test in debug mode.                          -->
                        <!--  <input type="hidden" name="debug" value=1>                              -->
                        <!--  <input type="hidden" name="debugEmail" value="johnb@healthline.com">    -->
                        <!--  ----------------------------------------------------------------------  -->

                        <label for="first_name">First Name</label><input id="first_name" maxlength="40" name="first_name" size="20" type="text"><br>

                        <label for="last_name">Last Name</label><input id="last_name" maxlength="80" name="last_name" size="20" type="text"><br>

                        <label for="company">Company</label><input id="company" maxlength="40" name="company" size="20" type="text"><br>

                        <label for="title">Title</label><input id="title" maxlength="40" name="title" size="20" type="text"><br>

                        <label for="email">Email</label><input id="email" maxlength="80" name="email" size="20" type="text"><br>

                        <label for="phone">Phone</label><input id="phone" maxlength="40" name="phone" size="20" type="text"><br>

                        <input type="submit" name="submit" value="Join now">

                    </form>        </div>
            </div>
        </div>

    </div>
</section>
<?php require('footer-sales.php'); ?>
