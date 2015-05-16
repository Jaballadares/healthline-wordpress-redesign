<?php
/*
Template Name: Scheduler Landing Page Template
*/
?>


<?php require('header-sales.php'); ?>

<div class="row salesTime" style="margin:0;">
    <div class="span12">
        <h2 class="confirmation">Schedule Your Demo</h2>

      <div class="span6 form-template" id="myForm">
        <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" novalidate="novalidate" id="datePicker">
            <input type="hidden" name="oid" value="00DG0000000i5W2">
            <input type="hidden" name="retURL" value="http://corp.healthline.com/thanks/">
            <input type="hidden" select="" id="lead_source" name="leadsource" value="Coding_InSight_Demo" class="special">

            <input type="text" name="first_name" placeholder="First Name" class="sudoPicker"/>

            <input type="text" name="last_name" placeholder="Last Name" class="sudoPicker"/>

            <input type="text" name="Get_In_Contact_Date__c" class="picker fa fa-calendar" style="color: #706259; font-family:'proxima-nova';"  placeholder="Preferred Day" id="calendar" />

            <input type="text" name="Get_In_Contact_Time__c" class="timepicker" id="clock" placeholder="Preferred Time" style="color:#706259; font-family:'proxima-nova';"/>



            <div class="checkBox-wrapper">
                <h4 class="preferences">Preferred Method of Contact:</h4>
                <div class="wrappingEmail">
                    <input type="radio" name="choice-contact" id="choice-contact-email" />
                    <label for="choice-contact-email" class="labelEmail">I Prefer Email</label>

                    <div class="reveal-if-active">
                        <label for="which-email" class="revealingNow">Please Provide Your Email</label>
                        <input type="text" id="which-email" name="which-email" class="require-if-active" data-require-pair="#choice-contact-email">

                    </div>
                </div>

                <div class="wrappingEmail">
                    <input type="radio" name="Preferred_Method_of_Contact__c" id="choice-contact-phone"/>
                    <label for="choice-contact-phone" class="phoneChoice">I Prefer Phone</label>

                    <div class="reveal-if-active">
                        <label for="which-phone" class="revealingNow">Please Provide Your Phone Number</label>
                        <input type="text" id="which-phone" class="require-if-active" data-require-pair="#choice-contact-phone" placeholder="Please Provide Us With the Best Way to Contact You" name="Preferred_Method_of_Contact__c">

                    </div>
                </div>
            </div>

            <div class="row" id="salesSubmit">
                <input type="submit" name="submit" value="Submit!" class="sudoPicker" id="submitTime">
            </div>

        </form>
          </div>
    </div>
</div><!--! .row -->

<?php require('footer-sales.php'); ?>
