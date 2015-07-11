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
        <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" id="datePicker" class="form-scheduler">
            <input type="hidden" name="oid" value="00DG0000000i5W2">
            <input type="hidden" name="retURL" value="http://corp.healthline.com/solutions/coding-insight/?thanks">
            <input type="hidden" select="" id="lead_source" name="lead_source" value="Coding_InSight_Demo" class="special">

            <label for="first_name" class="placeholder-hide"></label>
            <input type="text"  placeholder="First Name" name="first_name" id="first_name" class="sudoPicker" size="20" maxlength="40" required/>

            <label for="last_name" class="placeholder-hide"></label>
            <input type="text" name="last_name" placeholder="Last Name" class="sudoPicker" id="last_name" name="last_name" required/>

            <label for="calendar" class="placeholder-hide"></label>
            <input type="text" name="Get_In_Contact_Date__c" class="picker fa fa-calendar" style="color: #706259; font-family:'proxima-nova';" name="date" placeholder="Preferred Day" id="calendar" required />

            <label for="clock" class="placeholder-hide"></label>
            <input type="text" name="Get_In_Contact_Time__c" class="timepicker" id="clock" placeholder="Preferred Time" name="time" style="color:#706259; font-family:'proxima-nova';" required/>



            <div class="checkBox-wrapper">
                <h4 class="preferences">Preferred Method of Contact:</h4>
                <div class="wrappingEmail">

                    <input type="checkbox" name="choice-contact" id="choice-contact-email" onchange="onCheck(this)"/>
                    <label for="choice-contact-email" class="labelEmail" id="label-email">Email</label>
                    <label for="email" class="placeholder-hide"></label>
                    <input type="text" name="email" id="want-email" placeholder="Please Provide Your Email" name="email" >

                </div>

                <div class="wrappingEmail">

                    <input type="checkbox" id="choice-contact-phone" id="choice-contact-phone" onchange="onCheck(this)" name="choice-contact"/>

                    <label for="choice-contact-phone" class="phoneChoice" id="label-phone">Phone</label>
                    <input type="text" id="want-phone" placeholder="Please Provide Your Phone #" name="phone" required>
                     <input type="text" name="Preferred_Method_of_Contact__c" style="background:pink; display: none;" id="preferred-method" required>
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
