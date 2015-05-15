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
            <input type="hidden" select="" id="lead_source" name="lead_source" value="Coding_InSight_Demo" class="special">

            <input type="text" name="first_name" placeholder="First Name" class="sudoPicker"/>

            <input type="text" name="last_name" placeholder="Last Name" class="sudoPicker"/>

            <input type="text" name="preferred_day" class="picker fa fa-calendar" style="font-weight:100;"  placeholder="Preferred Day &dtrif; " />

            <input type="text" name="preferred_time" class="timepicker" placeholder="Preferred Time &dtrif; " style="font-weight:normal;" id="myPicker"/>
        </form>
          </div>
    </div>
</div><!--! .row -->

<?php require('footer-sales.php'); ?>
