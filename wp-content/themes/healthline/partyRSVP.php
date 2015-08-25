<?php
/*
Template Name: Party RSVP
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Healthline Relaunch Party</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//use.typekit.net/gpy1eil.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/library/img/structure/favicon.png">
    <style media="screen">
body {
  font-family: "proxima-nova";
}

.rsvp_header {
  background: #00ABC7;
  text-align: center;
  padding-top: 1em;
  padding-bottom: 1em;
}

.rsvp-img-wrapper {
  text-align: center;
  padding-top: 4em;
  width: 100%;
}
@media (max-width: 767px) {
  .rsvp-img-wrapper {
    padding-top: 2em;
  }
}
.rsvp-img-wrapper .rsvp_wine {
  width: 15%;
  height: auto;
}
@media (max-width: 468px) {
  .rsvp-img-wrapper .rsvp_wine {
    width: 30%;
    height: auto;
  }
}

.rsvp-img-caption {
  color: #00ABC7;
  font-size: 3.2em;
  width: 60%;
  margin: 0 auto;
  text-align: center;
  padding-top: .2em;
  padding-bottom: .5em;
}
@media (max-width: 468px) {
  .rsvp-img-caption {
    width: 90%;
    font-size: 2.5em;
  }
}
@media (max-width: 767px) {
  .rsvp-img-caption {
    width: 90%;
    font-size: 1.3em;
  }
}
@media (min-width: 768px) and (max-width: 979px) {
  .rsvp-img-caption {
    width: 90%;
    font-size: 2em;
    padding-top: 1em;
    padding-bottom: 1em;
  }
}
@media (min-width: 980px) and (max-width: 1199px) {
  .rsvp-img-caption {
    width: 60%;
  }
}

.rsvp_logo {
  width: 25%;
}
@media (max-width: 468px) {
  .rsvp_logo {
    vertical-align: middle;
  }
}
@media (max-width: 767px) {
  .rsvp_logo {
    vertical-align: middle;
  }
}

.form-wrapper {
  text-align: center;
  margin: 0 auto;
  width: 70%;
}

input[type="text"] {
  margin: .5em auto;
  font-size: 1.5em;
  line-height: 2em;
  display: block;
  color: #606A6E;
  border: 1px solid #606A6E;
}
@media (max-width: 468px) {
  input[type="text"] {
    font-size: 1em;
  }
}
@media (max-width: 767px) {
  input[type="text"] {
    font-size: .9em;
  }
}

::-webkit-input-placeholder {
  color: #606A6E;
  padding-left: .5em;
  font-weight: lighter;
}

:-moz-placeholder {
  /* Firefox 18- */
  color: #606A6E;
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: #606A6E;
}

:-ms-input-placeholder {
  color: #606A6E;
}

input[type="text"] {
  border: 1px solid #00ABC9;
}

#ButtonSubmit {
  background: #8F4399;
  width: 30%;
  color: white;
  border: none;
  font-size: 1.6em;
  border-radius: 25px;
  padding: .5em;
  margin-top: .5em;
  letter-spacing: 1px;
}
#ButtonSubmit:hover {
  background: #7e3b87;
  cursor: pointer;
}
@media (max-width: 468px) {
  #ButtonSubmit {
    font-size: 1em;
    width: 50%;
  }
}
@media (max-width: 767px) {
  #ButtonSubmit {
    font-size: 1.3em;
  }
}

.flexInput {
  display: inline-flex;
  margin: 0 auto;
  text-align: center;
  width: 100%;
}
.flexInput #name {
  margin-right: 1em;
  width: 50%;
}
.flexInput #company {
  margin-left: 1em;
  width: 50%;
}

#email {
  width: 100%;
}

.rsvp_contact {
  text-align: center;
  margin-top: 2em;
}

.placeholder-hide {
  display: none;
}

.error {
  color: #00ABC9;
}
label#email-error {
  display: block;
  text-align: center;
}

.error::-webkit-input-placeholder {
  color: #00ABC9;
  font-size: 1em;
}
    </style>

  </head>
  <body>
  <header class="rsvp_header">
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/99201/Eblast-Party_Invite-HL-Logo-White.png" alt="Healthline-Logo-White" class="rsvp_logo" />
</header>

<div class="rsvp-img-wrapper">
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/99201/Eblast-Party_Invite-Wine-glasses.png" alt="Wine Glasses" class="rsvp_wine" />
</div>
  <h3 class="rsvp-img-caption">Please provide your information for our guest list.</h3>


<div class="form-wrapper" style="padding-bottom: 5em;">
  <form  class="partyRSVP" id="partyRSVP">
    <div class="flexInput" >
      <label class="placeholder-hide" for="name">Name</label>
      <input type="text" name="name" placeholder="Name" id="name" required/>
      <label class="placeholder-hide" for="company">Company</label>
      <input type="text" id="company" name="company" placeholder="Company" required/>
    </div>
    <label class="placeholder-hide" for="email">Email</label>
    <input type="text" name="email" placeholder="Email" id="email" required/>

    <input type="submit" id="ButtonSubmit" value="Submit!"></input>
  </form>
</div>


<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/library/js/vendor/jquery.validate.min.js"></script>
<script type="text/javascript">



(function(){

var partyRSVP = $('#partyRSVP');

  partyRSVP.validate({
    errorPlacement: function(error, element) {
      element.attr("placeholder", error.text());
    }
  });

   $('#partyRSVP').submit(function(e){
     e.preventDefault();
     if(partyRSVP.valid()) {
       postContactToGoogle();
       }
   });
   $('.form-wrapper input').keyup(function(){
     if(e.keyCode == 13){
        $('#partyRSVP').submit();
     }
   });


   function postContactToGoogle() {
    var email = $('#email').val();
    var name = $('#name').val();
    var company = $('#company').val();

    $.ajax({
      url: "https://docs.google.com/a/healthline.com/forms/d/1YihmptbRXABWgWhrjLIcz0jl9UY0BT195NTKRFi02cY/formResponse",
      data: {
        "entry_288041078": email,
        "entry_847259706": name,
        "entry_1423431081": company
      },
      type: "POST",
      dataType: "xml",
      statusCode: {
        0: function() {
          location.href = "http://corp.healthline.com/add-party-to-calendar/";
          // window.location.replace("add-party-to-calendar");
        },
        200: function() {
          location.href = "http://corp.healthline.com/add-party-to-calendar/";
          // window.location.replace("add-party-to-calendar");
        }
      }
    });
  }
})();

</script>
  </body>
</html>
