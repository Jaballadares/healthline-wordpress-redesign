$('#dataPicker').validate();

var choice_email = document.getElementById("choice-contact-email");
var choice_phone = document.getElementById("choice-contact-phone");
var preferred_method = document.getElementById("preferred-method");


var input_email = document.getElementById("want-email");
var input_phone = document.getElementById("want-phone");

var label_email = document.getElementById("label-email");
var label_phone = document.getElementById("label-phone");

var setPreferredMethod = function(method) {
  preferred_method.value = method;
};

var setPhoneChecked = function(bool) {
  choice_phone.checked = bool;
};

var setEmailChecked = function(bool) {
  choice_email.checked = bool;
};

var setPhoneVisible = function(bool) {
  if (bool) {
    input_phone.style.visibility = "visible";
  } else {
    input_phone.style.visibility = "hidden";
  }
};

var setEmailVisible = function(bool) {
  if (bool) {
    input_email.style.visibility = "visible";
  } else {
    input_email.style.visibility = "hidden";
  }
};

var setRequiredEmail = function(bool) {
  if (bool) {
    $(input_email).attr("required", "required");
  } else {
    $(input_email).removeAttr("required")
  }
};

var setRequiredPhone = function(bool) {
  if (bool) {
    $(input_phone).attr("required", "required");
  } else {
    $(input_phone).removeAttr("required")
  }
};

var setLabelPhoneVisible = function(bool) {
  if (bool) {
    label_phone.style.display = "inline";
  } else {
    label_phone.style.display = "none";
  }
};

var setLabelEmailVisible = function(bool) {
  if (bool) {
    label_email.style.display = "inline";
  } else {
    label_email.style.display = "none";
  }
};

//When a checkbox is checked
function onCheck(radio) {
  // If its the email checkbox
  if (radio == choice_email) {
    if (radio.checked) {
      input_email.style.visibility = "visible";
      input_phone.style.visibility = "hidden";
      setPhoneChecked(false);
      setPreferredMethod("email");
      setRequiredEmail(true);
      setRequiredPhone(false);
      setLabelEmailVisible(false);
      setLabelPhoneVisible(true);
    }
  }
  // If its the phone checkbox
  if (radio == choice_phone) {
    if (radio.checked) {
      input_phone.style.visibility = "visible";
      input_email.style.visibility = "hidden";
      setEmailChecked(false);
      setPreferredMethod("phone");
      setRequiredEmail(false);
      setRequiredPhone(true);
      setLabelEmailVisible(true);
      setLabelPhoneVisible(false);
    }
  }
}

choice_phone.checked = true;
input_email.style.visibility = "hidden";
input_phone.style.visibility = "visible";
setRequiredPhone(true);
setPreferredMethod("phone");
setLabelPhoneVisible(false);
