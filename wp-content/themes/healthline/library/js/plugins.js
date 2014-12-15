// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.





/**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****
  jQuery Throttle
**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****/

/*
 * jQuery throttle / debounce - v1.1 - 3/7/2010
 * http://benalman.com/projects/jquery-throttle-debounce-plugin/
 *
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */

(function(b,c){var $=b.jQuery||b.Cowboy||(b.Cowboy={}),a;$.throttle=a=function(e,f,j,i){var h,d=0;if(typeof f!=="boolean"){i=j;j=f;f=c}function g(){var o=this,m=+new Date()-d,n=arguments;function l(){d=+new Date();j.apply(o,n)}function k(){h=c}if(i&&!h){l()}h&&clearTimeout(h);if(i===c&&m>e){l()}else{if(f!==true){h=setTimeout(i?k:l,i===c?e-m:e)}}}if($.guid){g.guid=j.guid=j.guid||$.guid++}return g};$.debounce=function(d,e,f){return f===c?a(d,e,false):a(d,f,e!==false)}})(this);





/**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****
  Is On Screen
**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****/

/*
*
* http://upshots.org/javascript/jquery-test-if-element-is-in-viewport-visible-on-screen
*
*/

$.fn.isOnScreen = function(){

  var win = $(window);

  var viewport = {
    top : win.scrollTop(),
    left : win.scrollLeft()
  };
  viewport.right = viewport.left + win.width();
  viewport.bottom = viewport.top + win.height();

  var bounds = this.offset();
  bounds.right = bounds.left + this.outerWidth();
  bounds.bottom = bounds.top + this.outerHeight();

  return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

};





/**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****
  Equal Height
**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****/

/*
eqHeight.coffee v1.2.3
http://jsliang.github.com/eqHeight.coffee
Copyright (c) 2013, Jui-Shan Liang <jenny@jsliang.com>
All rights reserved.
Licensed under GPL v2.
*/
(function(){var a;a=jQuery,a.fn.extend({eqHeight:function(b){return this.each(function(){var c,d,e;return c=a(this).find(b),0===c.length&&(c=a(this).children(b)),0!==c.length?(e=function(){var b,c;return b=a(".eqHeight_row"),c=0,b.each(function(){return a(this).height()>c?c=a(this).height():void 0}),b.height(c),a(".eqHeight_row").removeClass("eqHeight_row")},d=function(){var b;return c.height("auto"),b=c.first().position().top,c.each(function(){var c;return c=a(this).position().top,c!==b&&(e(),b=a(this).position().top),a(this).addClass("eqHeight_row")}),e()},a(window).load(d),a(window).resize(d)):void 0})}})}).call(this);







/**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****
  jQuery Validation
**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****/

/*! jQuery Validation Plugin - v1.11.1 - 3/22/2013\n* https://github.com/jzaefferer/jquery-validation
* Copyright (c) 2013 Jörn Zaefferer; Licensed MIT */(function(t){t.extend(t.fn,{validate:function(e){if(!this.length)return e&&e.debug&&window.console&&console.warn("Nothing selected, can't validate, returning nothing."),void 0;var i=t.data(this[0],"validator");return i?i:(this.attr("novalidate","novalidate"),i=new t.validator(e,this[0]),t.data(this[0],"validator",i),i.settings.onsubmit&&(this.validateDelegate(":submit","click",function(e){i.settings.submitHandler&&(i.submitButton=e.target),t(e.target).hasClass("cancel")&&(i.cancelSubmit=!0),void 0!==t(e.target).attr("formnovalidate")&&(i.cancelSubmit=!0)}),this.submit(function(e){function s(){var s;return i.settings.submitHandler?(i.submitButton&&(s=t("<input type='hidden'/>").attr("name",i.submitButton.name).val(t(i.submitButton).val()).appendTo(i.currentForm)),i.settings.submitHandler.call(i,i.currentForm,e),i.submitButton&&s.remove(),!1):!0}return i.settings.debug&&e.preventDefault(),i.cancelSubmit?(i.cancelSubmit=!1,s()):i.form()?i.pendingRequest?(i.formSubmitted=!0,!1):s():(i.focusInvalid(),!1)})),i)},valid:function(){if(t(this[0]).is("form"))return this.validate().form();var e=!0,i=t(this[0].form).validate();return this.each(function(){e=e&&i.element(this)}),e},removeAttrs:function(e){var i={},s=this;return t.each(e.split(/\s/),function(t,e){i[e]=s.attr(e),s.removeAttr(e)}),i},rules:function(e,i){var s=this[0];if(e){var r=t.data(s.form,"validator").settings,n=r.rules,a=t.validator.staticRules(s);switch(e){case"add":t.extend(a,t.validator.normalizeRule(i)),delete a.messages,n[s.name]=a,i.messages&&(r.messages[s.name]=t.extend(r.messages[s.name],i.messages));break;case"remove":if(!i)return delete n[s.name],a;var u={};return t.each(i.split(/\s/),function(t,e){u[e]=a[e],delete a[e]}),u}}var o=t.validator.normalizeRules(t.extend({},t.validator.classRules(s),t.validator.attributeRules(s),t.validator.dataRules(s),t.validator.staticRules(s)),s);if(o.required){var l=o.required;delete o.required,o=t.extend({required:l},o)}return o}}),t.extend(t.expr[":"],{blank:function(e){return!t.trim(""+t(e).val())},filled:function(e){return!!t.trim(""+t(e).val())},unchecked:function(e){return!t(e).prop("checked")}}),t.validator=function(e,i){this.settings=t.extend(!0,{},t.validator.defaults,e),this.currentForm=i,this.init()},t.validator.format=function(e,i){return 1===arguments.length?function(){var i=t.makeArray(arguments);return i.unshift(e),t.validator.format.apply(this,i)}:(arguments.length>2&&i.constructor!==Array&&(i=t.makeArray(arguments).slice(1)),i.constructor!==Array&&(i=[i]),t.each(i,function(t,i){e=e.replace(RegExp("\\{"+t+"\\}","g"),function(){return i})}),e)},t.extend(t.validator,{defaults:{messages:{},groups:{},rules:{},errorClass:"error",validClass:"valid",errorElement:"label",focusInvalid:!0,errorContainer:t([]),errorLabelContainer:t([]),onsubmit:!0,ignore:":hidden",ignoreTitle:!1,onfocusin:function(t){this.lastActive=t,this.settings.focusCleanup&&!this.blockFocusCleanup&&(this.settings.unhighlight&&this.settings.unhighlight.call(this,t,this.settings.errorClass,this.settings.validClass),this.addWrapper(this.errorsFor(t)).hide())},onfocusout:function(t){this.checkable(t)||!(t.name in this.submitted)&&this.optional(t)||this.element(t)},onkeyup:function(t,e){(9!==e.which||""!==this.elementValue(t))&&(t.name in this.submitted||t===this.lastElement)&&this.element(t)},onclick:function(t){t.name in this.submitted?this.element(t):t.parentNode.name in this.submitted&&this.element(t.parentNode)},highlight:function(e,i,s){"radio"===e.type?this.findByName(e.name).addClass(i).removeClass(s):t(e).addClass(i).removeClass(s)},unhighlight:function(e,i,s){"radio"===e.type?this.findByName(e.name).removeClass(i).addClass(s):t(e).removeClass(i).addClass(s)}},setDefaults:function(e){t.extend(t.validator.defaults,e)},messages:{required:"This field is required.",remote:"Please fix this field.",email:"Please enter a valid email address.",url:"Please enter a valid URL.",date:"Please enter a valid date.",dateISO:"Please enter a valid date (ISO).",number:"Please enter a valid number.",digits:"Please enter only digits.",creditcard:"Please enter a valid credit card number.",equalTo:"Please enter the same value again.",maxlength:t.validator.format("Please enter no more than {0} characters."),minlength:t.validator.format("Please enter at least {0} characters."),rangelength:t.validator.format("Please enter a value between {0} and {1} characters long."),range:t.validator.format("Please enter a value between {0} and {1}."),max:t.validator.format("Please enter a value less than or equal to {0}."),min:t.validator.format("Please enter a value greater than or equal to {0}.")},autoCreateRanges:!1,prototype:{init:function(){function e(e){var i=t.data(this[0].form,"validator"),s="on"+e.type.replace(/^validate/,"");i.settings[s]&&i.settings[s].call(i,this[0],e)}this.labelContainer=t(this.settings.errorLabelContainer),this.errorContext=this.labelContainer.length&&this.labelContainer||t(this.currentForm),this.containers=t(this.settings.errorContainer).add(this.settings.errorLabelContainer),this.submitted={},this.valueCache={},this.pendingRequest=0,this.pending={},this.invalid={},this.reset();var i=this.groups={};t.each(this.settings.groups,function(e,s){"string"==typeof s&&(s=s.split(/\s/)),t.each(s,function(t,s){i[s]=e})});var s=this.settings.rules;t.each(s,function(e,i){s[e]=t.validator.normalizeRule(i)}),t(this.currentForm).validateDelegate(":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'] ,[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'] ","focusin focusout keyup",e).validateDelegate("[type='radio'], [type='checkbox'], select, option","click",e),this.settings.invalidHandler&&t(this.currentForm).bind("invalid-form.validate",this.settings.invalidHandler)},form:function(){return this.checkForm(),t.extend(this.submitted,this.errorMap),this.invalid=t.extend({},this.errorMap),this.valid()||t(this.currentForm).triggerHandler("invalid-form",[this]),this.showErrors(),this.valid()},checkForm:function(){this.prepareForm();for(var t=0,e=this.currentElements=this.elements();e[t];t++)this.check(e[t]);return this.valid()},element:function(e){e=this.validationTargetFor(this.clean(e)),this.lastElement=e,this.prepareElement(e),this.currentElements=t(e);var i=this.check(e)!==!1;return i?delete this.invalid[e.name]:this.invalid[e.name]=!0,this.numberOfInvalids()||(this.toHide=this.toHide.add(this.containers)),this.showErrors(),i},showErrors:function(e){if(e){t.extend(this.errorMap,e),this.errorList=[];for(var i in e)this.errorList.push({message:e[i],element:this.findByName(i)[0]});this.successList=t.grep(this.successList,function(t){return!(t.name in e)})}this.settings.showErrors?this.settings.showErrors.call(this,this.errorMap,this.errorList):this.defaultShowErrors()},resetForm:function(){t.fn.resetForm&&t(this.currentForm).resetForm(),this.submitted={},this.lastElement=null,this.prepareForm(),this.hideErrors(),this.elements().removeClass(this.settings.errorClass).removeData("previousValue")},numberOfInvalids:function(){return this.objectLength(this.invalid)},objectLength:function(t){var e=0;for(var i in t)e++;return e},hideErrors:function(){this.addWrapper(this.toHide).hide()},valid:function(){return 0===this.size()},size:function(){return this.errorList.length},focusInvalid:function(){if(this.settings.focusInvalid)try{t(this.findLastActive()||this.errorList.length&&this.errorList[0].element||[]).filter(":visible").focus().trigger("focusin")}catch(e){}},findLastActive:function(){var e=this.lastActive;return e&&1===t.grep(this.errorList,function(t){return t.element.name===e.name}).length&&e},elements:function(){var e=this,i={};return t(this.currentForm).find("input, select, textarea").not(":submit, :reset, :image, [disabled]").not(this.settings.ignore).filter(function(){return!this.name&&e.settings.debug&&window.console&&console.error("%o has no name assigned",this),this.name in i||!e.objectLength(t(this).rules())?!1:(i[this.name]=!0,!0)})},clean:function(e){return t(e)[0]},errors:function(){var e=this.settings.errorClass.replace(" ",".");return t(this.settings.errorElement+"."+e,this.errorContext)},reset:function(){this.successList=[],this.errorList=[],this.errorMap={},this.toShow=t([]),this.toHide=t([]),this.currentElements=t([])},prepareForm:function(){this.reset(),this.toHide=this.errors().add(this.containers)},prepareElement:function(t){this.reset(),this.toHide=this.errorsFor(t)},elementValue:function(e){var i=t(e).attr("type"),s=t(e).val();return"radio"===i||"checkbox"===i?t("input[name='"+t(e).attr("name")+"']:checked").val():"string"==typeof s?s.replace(/\r/g,""):s},check:function(e){e=this.validationTargetFor(this.clean(e));var i,s=t(e).rules(),r=!1,n=this.elementValue(e);for(var a in s){var u={method:a,parameters:s[a]};try{if(i=t.validator.methods[a].call(this,n,e,u.parameters),"dependency-mismatch"===i){r=!0;continue}if(r=!1,"pending"===i)return this.toHide=this.toHide.not(this.errorsFor(e)),void 0;if(!i)return this.formatAndAdd(e,u),!1}catch(o){throw this.settings.debug&&window.console&&console.log("Exception occurred when checking element "+e.id+", check the '"+u.method+"' method.",o),o}}return r?void 0:(this.objectLength(s)&&this.successList.push(e),!0)},customDataMessage:function(e,i){return t(e).data("msg-"+i.toLowerCase())||e.attributes&&t(e).attr("data-msg-"+i.toLowerCase())},customMessage:function(t,e){var i=this.settings.messages[t];return i&&(i.constructor===String?i:i[e])},findDefined:function(){for(var t=0;arguments.length>t;t++)if(void 0!==arguments[t])return arguments[t];return void 0},defaultMessage:function(e,i){return this.findDefined(this.customMessage(e.name,i),this.customDataMessage(e,i),!this.settings.ignoreTitle&&e.title||void 0,t.validator.messages[i],"<strong>Warning: No message defined for "+e.name+"</strong>")},formatAndAdd:function(e,i){var s=this.defaultMessage(e,i.method),r=/\$?\{(\d+)\}/g;"function"==typeof s?s=s.call(this,i.parameters,e):r.test(s)&&(s=t.validator.format(s.replace(r,"{$1}"),i.parameters)),this.errorList.push({message:s,element:e}),this.errorMap[e.name]=s,this.submitted[e.name]=s},addWrapper:function(t){return this.settings.wrapper&&(t=t.add(t.parent(this.settings.wrapper))),t},defaultShowErrors:function(){var t,e;for(t=0;this.errorList[t];t++){var i=this.errorList[t];this.settings.highlight&&this.settings.highlight.call(this,i.element,this.settings.errorClass,this.settings.validClass),this.showLabel(i.element,i.message)}if(this.errorList.length&&(this.toShow=this.toShow.add(this.containers)),this.settings.success)for(t=0;this.successList[t];t++)this.showLabel(this.successList[t]);if(this.settings.unhighlight)for(t=0,e=this.validElements();e[t];t++)this.settings.unhighlight.call(this,e[t],this.settings.errorClass,this.settings.validClass);this.toHide=this.toHide.not(this.toShow),this.hideErrors(),this.addWrapper(this.toShow).show()},validElements:function(){return this.currentElements.not(this.invalidElements())},invalidElements:function(){return t(this.errorList).map(function(){return this.element})},showLabel:function(e,i){var s=this.errorsFor(e);s.length?(s.removeClass(this.settings.validClass).addClass(this.settings.errorClass),s.html(i)):(s=t("<"+this.settings.errorElement+">").attr("for",this.idOrName(e)).addClass(this.settings.errorClass).html(i||""),this.settings.wrapper&&(s=s.hide().show().wrap("<"+this.settings.wrapper+"/>").parent()),this.labelContainer.append(s).length||(this.settings.errorPlacement?this.settings.errorPlacement(s,t(e)):s.insertAfter(e))),!i&&this.settings.success&&(s.text(""),"string"==typeof this.settings.success?s.addClass(this.settings.success):this.settings.success(s,e)),this.toShow=this.toShow.add(s)},errorsFor:function(e){var i=this.idOrName(e);return this.errors().filter(function(){return t(this).attr("for")===i})},idOrName:function(t){return this.groups[t.name]||(this.checkable(t)?t.name:t.id||t.name)},validationTargetFor:function(t){return this.checkable(t)&&(t=this.findByName(t.name).not(this.settings.ignore)[0]),t},checkable:function(t){return/radio|checkbox/i.test(t.type)},findByName:function(e){return t(this.currentForm).find("[name='"+e+"']")},getLength:function(e,i){switch(i.nodeName.toLowerCase()){case"select":return t("option:selected",i).length;case"input":if(this.checkable(i))return this.findByName(i.name).filter(":checked").length}return e.length},depend:function(t,e){return this.dependTypes[typeof t]?this.dependTypes[typeof t](t,e):!0},dependTypes:{"boolean":function(t){return t},string:function(e,i){return!!t(e,i.form).length},"function":function(t,e){return t(e)}},optional:function(e){var i=this.elementValue(e);return!t.validator.methods.required.call(this,i,e)&&"dependency-mismatch"},startRequest:function(t){this.pending[t.name]||(this.pendingRequest++,this.pending[t.name]=!0)},stopRequest:function(e,i){this.pendingRequest--,0>this.pendingRequest&&(this.pendingRequest=0),delete this.pending[e.name],i&&0===this.pendingRequest&&this.formSubmitted&&this.form()?(t(this.currentForm).submit(),this.formSubmitted=!1):!i&&0===this.pendingRequest&&this.formSubmitted&&(t(this.currentForm).triggerHandler("invalid-form",[this]),this.formSubmitted=!1)},previousValue:function(e){return t.data(e,"previousValue")||t.data(e,"previousValue",{old:null,valid:!0,message:this.defaultMessage(e,"remote")})}},classRuleSettings:{required:{required:!0},email:{email:!0},url:{url:!0},date:{date:!0},dateISO:{dateISO:!0},number:{number:!0},digits:{digits:!0},creditcard:{creditcard:!0}},addClassRules:function(e,i){e.constructor===String?this.classRuleSettings[e]=i:t.extend(this.classRuleSettings,e)},classRules:function(e){var i={},s=t(e).attr("class");return s&&t.each(s.split(" "),function(){this in t.validator.classRuleSettings&&t.extend(i,t.validator.classRuleSettings[this])}),i},attributeRules:function(e){var i={},s=t(e),r=s[0].getAttribute("type");for(var n in t.validator.methods){var a;"required"===n?(a=s.get(0).getAttribute(n),""===a&&(a=!0),a=!!a):a=s.attr(n),/min|max/.test(n)&&(null===r||/number|range|text/.test(r))&&(a=Number(a)),a?i[n]=a:r===n&&"range"!==r&&(i[n]=!0)}return i.maxlength&&/-1|2147483647|524288/.test(i.maxlength)&&delete i.maxlength,i},dataRules:function(e){var i,s,r={},n=t(e);for(i in t.validator.methods)s=n.data("rule-"+i.toLowerCase()),void 0!==s&&(r[i]=s);return r},staticRules:function(e){var i={},s=t.data(e.form,"validator");return s.settings.rules&&(i=t.validator.normalizeRule(s.settings.rules[e.name])||{}),i},normalizeRules:function(e,i){return t.each(e,function(s,r){if(r===!1)return delete e[s],void 0;if(r.param||r.depends){var n=!0;switch(typeof r.depends){case"string":n=!!t(r.depends,i.form).length;break;case"function":n=r.depends.call(i,i)}n?e[s]=void 0!==r.param?r.param:!0:delete e[s]}}),t.each(e,function(s,r){e[s]=t.isFunction(r)?r(i):r}),t.each(["minlength","maxlength"],function(){e[this]&&(e[this]=Number(e[this]))}),t.each(["rangelength","range"],function(){var i;e[this]&&(t.isArray(e[this])?e[this]=[Number(e[this][0]),Number(e[this][1])]:"string"==typeof e[this]&&(i=e[this].split(/[\s,]+/),e[this]=[Number(i[0]),Number(i[1])]))}),t.validator.autoCreateRanges&&(e.min&&e.max&&(e.range=[e.min,e.max],delete e.min,delete e.max),e.minlength&&e.maxlength&&(e.rangelength=[e.minlength,e.maxlength],delete e.minlength,delete e.maxlength)),e},normalizeRule:function(e){if("string"==typeof e){var i={};t.each(e.split(/\s/),function(){i[this]=!0}),e=i}return e},addMethod:function(e,i,s){t.validator.methods[e]=i,t.validator.messages[e]=void 0!==s?s:t.validator.messages[e],3>i.length&&t.validator.addClassRules(e,t.validator.normalizeRule(e))},methods:{required:function(e,i,s){if(!this.depend(s,i))return"dependency-mismatch";if("select"===i.nodeName.toLowerCase()){var r=t(i).val();return r&&r.length>0}return this.checkable(i)?this.getLength(e,i)>0:t.trim(e).length>0},email:function(t,e){return this.optional(e)||/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(t)},url:function(t,e){return this.optional(e)||/^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(t)},date:function(t,e){return this.optional(e)||!/Invalid|NaN/.test(""+new Date(t))},dateISO:function(t,e){return this.optional(e)||/^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/.test(t)},number:function(t,e){return this.optional(e)||/^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(t)},digits:function(t,e){return this.optional(e)||/^\d+$/.test(t)},creditcard:function(t,e){if(this.optional(e))return"dependency-mismatch";if(/[^0-9 \-]+/.test(t))return!1;var i=0,s=0,r=!1;t=t.replace(/\D/g,"");for(var n=t.length-1;n>=0;n--){var a=t.charAt(n);s=parseInt(a,10),r&&(s*=2)>9&&(s-=9),i+=s,r=!r}return 0===i%10},minlength:function(e,i,s){var r=t.isArray(e)?e.length:this.getLength(t.trim(e),i);return this.optional(i)||r>=s},maxlength:function(e,i,s){var r=t.isArray(e)?e.length:this.getLength(t.trim(e),i);return this.optional(i)||s>=r},rangelength:function(e,i,s){var r=t.isArray(e)?e.length:this.getLength(t.trim(e),i);return this.optional(i)||r>=s[0]&&s[1]>=r},min:function(t,e,i){return this.optional(e)||t>=i},max:function(t,e,i){return this.optional(e)||i>=t},range:function(t,e,i){return this.optional(e)||t>=i[0]&&i[1]>=t},equalTo:function(e,i,s){var r=t(s);return this.settings.onfocusout&&r.unbind(".validate-equalTo").bind("blur.validate-equalTo",function(){t(i).valid()}),e===r.val()},remote:function(e,i,s){if(this.optional(i))return"dependency-mismatch";var r=this.previousValue(i);if(this.settings.messages[i.name]||(this.settings.messages[i.name]={}),r.originalMessage=this.settings.messages[i.name].remote,this.settings.messages[i.name].remote=r.message,s="string"==typeof s&&{url:s}||s,r.old===e)return r.valid;r.old=e;var n=this;this.startRequest(i);var a={};return a[i.name]=e,t.ajax(t.extend(!0,{url:s,mode:"abort",port:"validate"+i.name,dataType:"json",data:a,success:function(s){n.settings.messages[i.name].remote=r.originalMessage;var a=s===!0||"true"===s;if(a){var u=n.formSubmitted;n.prepareElement(i),n.formSubmitted=u,n.successList.push(i),delete n.invalid[i.name],n.showErrors()}else{var o={},l=s||n.defaultMessage(i,"remote");o[i.name]=r.message=t.isFunction(l)?l(e):l,n.invalid[i.name]=!0,n.showErrors(o)}r.valid=a,n.stopRequest(i,a)}},s)),"pending"}}}),t.format=t.validator.format})(jQuery),function(t){var e={};if(t.ajaxPrefilter)t.ajaxPrefilter(function(t,i,s){var r=t.port;"abort"===t.mode&&(e[r]&&e[r].abort(),e[r]=s)});else{var i=t.ajax;t.ajax=function(s){var r=("mode"in s?s:t.ajaxSettings).mode,n=("port"in s?s:t.ajaxSettings).port;return"abort"===r?(e[n]&&e[n].abort(),e[n]=i.apply(this,arguments),e[n]):i.apply(this,arguments)}}}(jQuery),function(t){t.extend(t.fn,{validateDelegate:function(e,i,s){return this.bind(i,function(i){var r=t(i.target);return r.is(e)?s.apply(r,arguments):void 0})}})}(jQuery);







/**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****
  Socialite.js
**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****/

/*!
 * Socialite v2.0
 * http://socialitejs.com
 * Copyright (c) 2011 David Bushell
 * Dual-licensed under the BSD or MIT licenses: http://socialitejs.com/license.txt
 */
window.Socialite=function(e,t,n){"use strict"
var a=0,i=[],o={},r={},l=/^($|loaded|complete)/,s=e.encodeURIComponent,c={settings:{},trim:function(e){return e.trim?e.trim():e.replace(/^\s+|\s+$/g,"")},hasClass:function(e,t){return-1!==(" "+e.className+" ").indexOf(" "+t+" ")},addClass:function(e,t){c.hasClass(e,t)||(e.className=""===e.className?t:e.className+" "+t)},removeClass:function(e,t){e.className=c.trim(" "+e.className+" ".replace(" "+t+" "," "))},extendObject:function(e,t,a){for(var i in t){var o=e[i]!==n
o&&"object"==typeof t[i]?c.extendObject(e[i],t[i],a):(a||!o)&&(e[i]=t[i])}},getElements:function(e,t){for(var n=0,a=[],i=!!e.getElementsByClassName,o=i?e.getElementsByClassName(t):e.getElementsByTagName("*");o.length>n;n++)(i||c.hasClass(o[n],t))&&a.push(o[n])
return a},getDataAttributes:function(e,t,n){for(var a=0,i="",o={},r=e.attributes;r.length>a;a++){var l=r[a].name,c=r[a].value
c.length&&0===l.indexOf("data-")&&(t&&(l=l.substring(5)),n?o[l]=c:i+=s(l)+"="+s(c)+"&")}return n?o:i},copyDataAttributes:function(e,t,n,a){var i=c.getDataAttributes(e,n,!0)
for(var o in i)t.setAttribute(a?o.replace(/-/g,"_"):o,i[o])},createIframe:function(e,n){var a=t.createElement("iframe")
return a.style.cssText="overflow: hidden; border: none;",c.extendObject(a,{src:e,allowtransparency:"true",frameborder:"0",scrolling:"no"},!0),n&&(a.onload=a.onreadystatechange=function(){l.test(a.readyState||"")&&(a.onload=a.onreadystatechange=null,c.activateInstance(n))}),a},networkReady:function(e){return o[e]?o[e].loaded:n},appendNetwork:function(e){if(e&&!e.appended){if("function"==typeof e.append&&e.append(e)===!1)return e.appended=e.loaded=!0,c.activateAll(e),n
e.script&&(e.el=t.createElement("script"),c.extendObject(e.el,e.script,!0),e.el.async=!0,e.el.onload=e.el.onreadystatechange=function(){if(l.test(e.el.readyState||"")){if(e.el.onload=e.el.onreadystatechange=null,e.loaded=!0,"function"==typeof e.onload&&e.onload(e)===!1)return
c.activateAll(e)}},t.body.appendChild(e.el)),e.appended=!0}},removeNetwork:function(e){return c.networkReady(e.name)?(e.el.parentNode&&e.el.parentNode.removeChild(e.el),!(e.appended=e.loaded=!1)):!1},reloadNetwork:function(e){var t=o[e]
t&&c.removeNetwork(t)&&c.appendNetwork(t)},createInstance:function(e,t){var o=!0,r={el:e,uid:a++,widget:t}
return i.push(r),t.process!==n&&(o="function"==typeof t.process?t.process(r):!1),o&&c.processInstance(r),r.el.setAttribute("data-socialite",r.uid),r.el.className="socialite "+t.name+" socialite-instance",r},processInstance:function(e){var n=e.el
e.el=t.createElement("div"),e.el.className=n.className,c.copyDataAttributes(n,e.el),"a"!==n.nodeName.toLowerCase()||n.getAttribute("data-default-href")||e.el.setAttribute("data-default-href",n.getAttribute("href"))
var a=n.parentNode
a.insertBefore(e.el,n),a.removeChild(n)},activateInstance:function(e){return e&&!e.loaded?(e.loaded=!0,"function"==typeof e.widget.activate&&e.widget.activate(e),c.addClass(e.el,"socialite-loaded"),e.onload?e.onload(e.el):null):n},activateAll:function(e){"string"==typeof e&&(e=o[e])
for(var t=0;i.length>t;t++){var n=i[t]
n.init&&n.widget.network===e&&c.activateInstance(n)}},load:function(e,a,o,l,s){if(e=e&&"object"==typeof e&&1===e.nodeType?e:t,!a||"object"!=typeof a)return c.load(e,c.getElements(e,"socialite"),o,l,s),n
var d
if(/Array/.test(Object.prototype.toString.call(a)))for(d=0;a.length>d;d++)c.load(e,a[d],o,l,s)
else if(1===a.nodeType){if(!o||!r[o]){o=null
var p=a.className.split(" ")
for(d=0;p.length>d;d++)if(r[p[d]]){o=p[d]
break}if(!o)return}var u,f=r[o],g=parseInt(a.getAttribute("data-socialite"),10)
if(isNaN(g))u=c.createInstance(a,f)
else for(d=0;i.length>d;d++)if(i[d].uid===g){u=i[d]
break}!s&&u&&(u.init||(u.init=!0,u.onload="function"==typeof l?l:null,f.init(u)),f.network.appended?c.networkReady(f.network.name)&&c.activateInstance(u):c.appendNetwork(f.network))}},activate:function(t,n,a){e.Socialite.load(null,t,n,a)},process:function(t,n,a){e.Socialite.load(t,n,a,null,!0)},network:function(e,t){o[e]={name:e,el:null,appended:!1,loaded:!1,widgets:{}},t&&c.extendObject(o[e],t)},widget:function(e,t,n){n.name=e+"-"+t,o[e]&&!r[n.name]&&(n.network=o[e],o[e].widgets[t]=r[n.name]=n)},setup:function(e){c.extendObject(c.settings,e,!0)}}
return c}(window,window.document),function(e,n,a){a.setup({facebook:{lang:"en_GB",appId:null},twitter:{lang:"en"},googleplus:{lang:"en-GB"}}),a.network("facebook",{script:{src:"//connect.facebook.net/{{language}}/all.js",id:"facebook-jssdk"},append:function(t){var i=n.createElement("div"),o=a.settings.facebook,r={onlike:"edge.create",onunlike:"edge.remove",onsend:"message.send"}
i.id="fb-root",n.body.appendChild(i),t.script.src=t.script.src.replace("{{language}}",o.lang),e.fbAsyncInit=function(){e.FB.init({appId:o.appId,xfbml:!0})
for(var t in r)"function"==typeof o[t]&&e.FB.Event.subscribe(r[t],o[t])}}}),a.widget("facebook","like",{init:function(t){var i=n.createElement("div")
i.className="fb-like",a.copyDataAttributes(t.el,i),t.el.appendChild(i),e.FB&&e.FB.XFBML&&e.FB.XFBML.parse(t.el)}}),a.network("twitter",{script:{src:"//platform.twitter.com/widgets.js",id:"twitter-wjs",charset:"utf-8"},append:function(){var n="object"!=typeof e.twttr,i=a.settings.twitter,o=["click","tweet","retweet","favorite","follow"]
return n&&(e.twttr=t={_e:[],ready:function(e){t._e.push(e)}}),e.twttr.ready(function(e){for(var t=0;o.length>t;t++){var n=o[t]
"function"==typeof i["on"+n]&&e.events.bind(n,i["on"+n])}a.activateAll("twitter")}),n}})
var i=function(e){var t=n.createElement("a")
t.className=e.widget.name+"-button",a.copyDataAttributes(e.el,t),t.setAttribute("href",e.el.getAttribute("data-default-href")),t.setAttribute("data-lang",e.el.getAttribute("data-lang")||a.settings.twitter.lang),e.el.appendChild(t)},o=function(){e.twttr&&"object"==typeof e.twttr.widgets&&"function"==typeof e.twttr.widgets.load&&e.twttr.widgets.load()}
a.widget("twitter","share",{init:i,activate:o}),a.widget("twitter","follow",{init:i,activate:o}),a.widget("twitter","hashtag",{init:i,activate:o}),a.widget("twitter","mention",{init:i,activate:o}),a.widget("twitter","embed",{process:function(e){e.innerEl=e.el,e.innerEl.getAttribute("data-lang")||e.innerEl.setAttribute("data-lang",a.settings.twitter.lang),e.el=n.createElement("div"),e.el.className=e.innerEl.className,e.innerEl.className="",e.innerEl.parentNode.insertBefore(e.el,e.innerEl),e.el.appendChild(e.innerEl)},init:function(e){e.innerEl.className="twitter-tweet"},activate:o}),a.network("googleplus",{script:{src:"//apis.google.com/js/plusone.js"},append:function(){return e.gapi?!1:(e.___gcfg={lang:a.settings.googleplus.lang,parsetags:"explicit"},undefined)}})
var r=function(e){var t=n.createElement("div")
t.className="g-"+e.widget.gtype,a.copyDataAttributes(e.el,t),e.el.appendChild(t),e.gplusEl=t},l=function(e,t){return"function"!=typeof t?null:function(n){t(e.el,n)}},s=function(t){var n=t.widget.gtype
if(e.gapi&&e.gapi[n]){for(var i=a.settings.googleplus,o=a.getDataAttributes(t.el,!0,!0),r=["onstartinteraction","onendinteraction","callback"],s=0;r.length>s;s++)o[r[s]]=l(t,i[r[s]])
e.gapi[n].render(t.gplusEl,o)}}
a.widget("googleplus","one",{init:r,activate:s,gtype:"plusone"}),a.widget("googleplus","share",{init:r,activate:s,gtype:"plus"}),a.widget("googleplus","badge",{init:r,activate:s,gtype:"plus"}),a.network("linkedin",{script:{src:"//platform.linkedin.com/in.js"}})
var c=function(t){var i=n.createElement("script")
i.type="IN/"+t.widget.intype,a.copyDataAttributes(t.el,i),t.el.appendChild(i),"object"==typeof e.IN&&"function"==typeof e.IN.parse&&(e.IN.parse(t.el),a.activateInstance(t))}
a.widget("linkedin","share",{init:c,intype:"Share"}),a.widget("linkedin","recommend",{init:c,intype:"RecommendProduct"})}(window,window.document,window.Socialite),function(){var e=window._socialite
if(/Array/.test(Object.prototype.toString.call(e)))for(var t=0,n=e.length;n>t;t++)"function"==typeof e[t]&&e[t]()}();






/**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****
  jCarousel
**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****/

/*! jCarousel - v0.3.0 - 2013-11-22
* http://sorgalla.com/jcarousel
* Copyright (c) 2013 Jan Sorgalla; Licensed MIT */
(function(t){"use strict";var i=t.jCarousel={};i.version="0.3.0";var s=/^([+\-]=)?(.+)$/;i.parseTarget=function(t){var i=!1,e="object"!=typeof t?s.exec(t):null;return e?(t=parseInt(e[2],10)||0,e[1]&&(i=!0,"-="===e[1]&&(t*=-1))):"object"!=typeof t&&(t=parseInt(t,10)||0),{target:t,relative:i}},i.detectCarousel=function(t){for(var i;t.length>0;){if(i=t.filter("[data-jcarousel]"),i.length>0)return i;if(i=t.find("[data-jcarousel]"),i.length>0)return i;t=t.parent()}return null},i.base=function(s){return{version:i.version,_options:{},_element:null,_carousel:null,_init:t.noop,_create:t.noop,_destroy:t.noop,_reload:t.noop,create:function(){return this._element.attr("data-"+s.toLowerCase(),!0).data(s,this),!1===this._trigger("create")?this:(this._create(),this._trigger("createend"),this)},destroy:function(){return!1===this._trigger("destroy")?this:(this._destroy(),this._trigger("destroyend"),this._element.removeData(s).removeAttr("data-"+s.toLowerCase()),this)},reload:function(t){return!1===this._trigger("reload")?this:(t&&this.options(t),this._reload(),this._trigger("reloadend"),this)},element:function(){return this._element},options:function(i,s){if(0===arguments.length)return t.extend({},this._options);if("string"==typeof i){if(s===void 0)return this._options[i]===void 0?null:this._options[i];this._options[i]=s}else this._options=t.extend({},this._options,i);return this},carousel:function(){return this._carousel||(this._carousel=i.detectCarousel(this.options("carousel")||this._element),this._carousel||t.error('Could not detect carousel for plugin "'+s+'"')),this._carousel},_trigger:function(i,e,r){var n,o=!1;return r=[this].concat(r||[]),(e||this._element).each(function(){n=t.Event((s+":"+i).toLowerCase()),t(this).trigger(n,r),n.isDefaultPrevented()&&(o=!0)}),!o}}},i.plugin=function(s,e){var r=t[s]=function(i,s){this._element=t(i),this.options(s),this._init(),this.create()};return r.fn=r.prototype=t.extend({},i.base(s),e),t.fn[s]=function(i){var e=Array.prototype.slice.call(arguments,1),n=this;return"string"==typeof i?this.each(function(){var r=t(this).data(s);if(!r)return t.error("Cannot call methods on "+s+" prior to initialization; "+'attempted to call method "'+i+'"');if(!t.isFunction(r[i])||"_"===i.charAt(0))return t.error('No such method "'+i+'" for '+s+" instance");var o=r[i].apply(r,e);return o!==r&&o!==void 0?(n=o,!1):void 0}):this.each(function(){var e=t(this).data(s);e instanceof r?e.reload(i):new r(this,i)}),n},r}})(jQuery),function(t,i){"use strict";var s=function(t){return parseFloat(t)||0};t.jCarousel.plugin("jcarousel",{animating:!1,tail:0,inTail:!1,resizeTimer:null,lt:null,vertical:!1,rtl:!1,circular:!1,underflow:!1,relative:!1,_options:{list:function(){return this.element().children().eq(0)},items:function(){return this.list().children()},animation:400,transitions:!1,wrap:null,vertical:null,rtl:null,center:!1},_list:null,_items:null,_target:null,_first:null,_last:null,_visible:null,_fullyvisible:null,_init:function(){var t=this;return this.onWindowResize=function(){t.resizeTimer&&clearTimeout(t.resizeTimer),t.resizeTimer=setTimeout(function(){t.reload()},100)},this},_create:function(){this._reload(),t(i).on("resize.jcarousel",this.onWindowResize)},_destroy:function(){t(i).off("resize.jcarousel",this.onWindowResize)},_reload:function(){this.vertical=this.options("vertical"),null==this.vertical&&(this.vertical=this.list().height()>this.list().width()),this.rtl=this.options("rtl"),null==this.rtl&&(this.rtl=function(i){if("rtl"===(""+i.attr("dir")).toLowerCase())return!0;var s=!1;return i.parents("[dir]").each(function(){return/rtl/i.test(t(this).attr("dir"))?(s=!0,!1):void 0}),s}(this._element)),this.lt=this.vertical?"top":"left",this.relative="relative"===this.list().css("position"),this._list=null,this._items=null;var i=this._target&&this.index(this._target)>=0?this._target:this.closest();this.circular="circular"===this.options("wrap"),this.underflow=!1;var s={left:0,top:0};return i.length>0&&(this._prepare(i),this.list().find("[data-jcarousel-clone]").remove(),this._items=null,this.underflow=this._fullyvisible.length>=this.items().length,this.circular=this.circular&&!this.underflow,s[this.lt]=this._position(i)+"px"),this.move(s),this},list:function(){if(null===this._list){var i=this.options("list");this._list=t.isFunction(i)?i.call(this):this._element.find(i)}return this._list},items:function(){if(null===this._items){var i=this.options("items");this._items=(t.isFunction(i)?i.call(this):this.list().find(i)).not("[data-jcarousel-clone]")}return this._items},index:function(t){return this.items().index(t)},closest:function(){var i,e=this,r=this.list().position()[this.lt],n=t(),o=!1,l=this.vertical?"bottom":this.rtl&&!this.relative?"left":"right";return this.rtl&&this.relative&&!this.vertical&&(r+=this.list().width()-this.clipping()),this.items().each(function(){if(n=t(this),o)return!1;var a=e.dimension(n);if(r+=a,r>=0){if(i=a-s(n.css("margin-"+l)),!(0>=Math.abs(r)-a+i/2))return!1;o=!0}}),n},target:function(){return this._target},first:function(){return this._first},last:function(){return this._last},visible:function(){return this._visible},fullyvisible:function(){return this._fullyvisible},hasNext:function(){if(!1===this._trigger("hasnext"))return!0;var t=this.options("wrap"),i=this.items().length-1;return i>=0&&(t&&"first"!==t||i>this.index(this._last)||this.tail&&!this.inTail)?!0:!1},hasPrev:function(){if(!1===this._trigger("hasprev"))return!0;var t=this.options("wrap");return this.items().length>0&&(t&&"last"!==t||this.index(this._first)>0||this.tail&&this.inTail)?!0:!1},clipping:function(){return this._element["inner"+(this.vertical?"Height":"Width")]()},dimension:function(t){return t["outer"+(this.vertical?"Height":"Width")](!0)},scroll:function(i,s,e){if(this.animating)return this;if(!1===this._trigger("scroll",null,[i,s]))return this;t.isFunction(s)&&(e=s,s=!0);var r=t.jCarousel.parseTarget(i);if(r.relative){var n,o,l,a,h,u,c,f,d=this.items().length-1,_=Math.abs(r.target),p=this.options("wrap");if(r.target>0){var v=this.index(this._last);if(v>=d&&this.tail)this.inTail?"both"===p||"last"===p?this._scroll(0,s,e):t.isFunction(e)&&e.call(this,!1):this._scrollTail(s,e);else if(n=this.index(this._target),this.underflow&&n===d&&("circular"===p||"both"===p||"last"===p)||!this.underflow&&v===d&&("both"===p||"last"===p))this._scroll(0,s,e);else if(l=n+_,this.circular&&l>d){for(f=d,h=this.items().get(-1);l>f++;)h=this.items().eq(0),u=this._visible.index(h)>=0,u&&h.after(h.clone(!0).attr("data-jcarousel-clone",!0)),this.list().append(h),u||(c={},c[this.lt]=this.dimension(h),this.moveBy(c)),this._items=null;this._scroll(h,s,e)}else this._scroll(Math.min(l,d),s,e)}else if(this.inTail)this._scroll(Math.max(this.index(this._first)-_+1,0),s,e);else if(o=this.index(this._first),n=this.index(this._target),a=this.underflow?n:o,l=a-_,0>=a&&(this.underflow&&"circular"===p||"both"===p||"first"===p))this._scroll(d,s,e);else if(this.circular&&0>l){for(f=l,h=this.items().get(0);0>f++;){h=this.items().eq(-1),u=this._visible.index(h)>=0,u&&h.after(h.clone(!0).attr("data-jcarousel-clone",!0)),this.list().prepend(h),this._items=null;var g=this.dimension(h);c={},c[this.lt]=-g,this.moveBy(c)}this._scroll(h,s,e)}else this._scroll(Math.max(l,0),s,e)}else this._scroll(r.target,s,e);return this._trigger("scrollend"),this},moveBy:function(t,i){var e=this.list().position(),r=1,n=0;return this.rtl&&!this.vertical&&(r=-1,this.relative&&(n=this.list().width()-this.clipping())),t.left&&(t.left=e.left+n+s(t.left)*r+"px"),t.top&&(t.top=e.top+n+s(t.top)*r+"px"),this.move(t,i)},move:function(i,s){s=s||{};var e=this.options("transitions"),r=!!e,n=!!e.transforms,o=!!e.transforms3d,l=s.duration||0,a=this.list();if(!r&&l>0)return a.animate(i,s),void 0;var h=s.complete||t.noop,u={};if(r){var c=a.css(["transitionDuration","transitionTimingFunction","transitionProperty"]),f=h;h=function(){t(this).css(c),f.call(this)},u={transitionDuration:(l>0?l/1e3:0)+"s",transitionTimingFunction:e.easing||s.easing,transitionProperty:l>0?function(){return n||o?"all":i.left?"left":"top"}():"none",transform:"none"}}o?u.transform="translate3d("+(i.left||0)+","+(i.top||0)+",0)":n?u.transform="translate("+(i.left||0)+","+(i.top||0)+")":t.extend(u,i),r&&l>0&&a.one("transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd",h),a.css(u),0>=l&&a.each(function(){h.call(this)})},_scroll:function(i,s,e){if(this.animating)return t.isFunction(e)&&e.call(this,!1),this;if("object"!=typeof i?i=this.items().eq(i):i.jquery===void 0&&(i=t(i)),0===i.length)return t.isFunction(e)&&e.call(this,!1),this;this.inTail=!1,this._prepare(i);var r=this._position(i),n=this.list().position()[this.lt];if(r===n)return t.isFunction(e)&&e.call(this,!1),this;var o={};return o[this.lt]=r+"px",this._animate(o,s,e),this},_scrollTail:function(i,s){if(this.animating||!this.tail)return t.isFunction(s)&&s.call(this,!1),this;var e=this.list().position()[this.lt];this.rtl&&this.relative&&!this.vertical&&(e+=this.list().width()-this.clipping()),this.rtl&&!this.vertical?e+=this.tail:e-=this.tail,this.inTail=!0;var r={};return r[this.lt]=e+"px",this._update({target:this._target.next(),fullyvisible:this._fullyvisible.slice(1).add(this._visible.last())}),this._animate(r,i,s),this},_animate:function(i,s,e){if(e=e||t.noop,!1===this._trigger("animate"))return e.call(this,!1),this;this.animating=!0;var r=this.options("animation"),n=t.proxy(function(){this.animating=!1;var t=this.list().find("[data-jcarousel-clone]");t.length>0&&(t.remove(),this._reload()),this._trigger("animateend"),e.call(this,!0)},this),o="object"==typeof r?t.extend({},r):{duration:r},l=o.complete||t.noop;return s===!1?o.duration=0:t.fx.speeds[o.duration]!==void 0&&(o.duration=t.fx.speeds[o.duration]),o.complete=function(){n(),l.call(this)},this.move(i,o),this},_prepare:function(i){var e,r,n,o,l=this.index(i),a=l,h=this.dimension(i),u=this.clipping(),c=this.vertical?"bottom":this.rtl?"left":"right",f=this.options("center"),d={target:i,first:i,last:i,visible:i,fullyvisible:u>=h?i:t()};if(f&&(h/=2,u/=2),u>h)for(;;){if(e=this.items().eq(++a),0===e.length){if(!this.circular)break;if(e=this.items().eq(0),i.get(0)===e.get(0))break;if(r=this._visible.index(e)>=0,r&&e.after(e.clone(!0).attr("data-jcarousel-clone",!0)),this.list().append(e),!r){var _={};_[this.lt]=this.dimension(e),this.moveBy(_)}this._items=null}if(o=this.dimension(e),0===o)break;if(h+=o,d.last=e,d.visible=d.visible.add(e),n=s(e.css("margin-"+c)),u>=h-n&&(d.fullyvisible=d.fullyvisible.add(e)),h>=u)break}if(!this.circular&&!f&&u>h)for(a=l;;){if(0>--a)break;if(e=this.items().eq(a),0===e.length)break;if(o=this.dimension(e),0===o)break;if(h+=o,d.first=e,d.visible=d.visible.add(e),n=s(e.css("margin-"+c)),u>=h-n&&(d.fullyvisible=d.fullyvisible.add(e)),h>=u)break}return this._update(d),this.tail=0,f||"circular"===this.options("wrap")||"custom"===this.options("wrap")||this.index(d.last)!==this.items().length-1||(h-=s(d.last.css("margin-"+c)),h>u&&(this.tail=h-u)),this},_position:function(t){var i=this._first,s=i.position()[this.lt],e=this.options("center"),r=e?this.clipping()/2-this.dimension(i)/2:0;return this.rtl&&!this.vertical?(s-=this.relative?this.list().width()-this.dimension(i):this.clipping()-this.dimension(i),s+=r):s-=r,!e&&(this.index(t)>this.index(i)||this.inTail)&&this.tail?(s=this.rtl&&!this.vertical?s-this.tail:s+this.tail,this.inTail=!0):this.inTail=!1,-s},_update:function(i){var s,e=this,r={target:this._target||t(),first:this._first||t(),last:this._last||t(),visible:this._visible||t(),fullyvisible:this._fullyvisible||t()},n=this.index(i.first||r.first)<this.index(r.first),o=function(s){var o=[],l=[];i[s].each(function(){0>r[s].index(this)&&o.push(this)}),r[s].each(function(){0>i[s].index(this)&&l.push(this)}),n?o=o.reverse():l=l.reverse(),e._trigger(s+"in",t(o)),e._trigger(s+"out",t(l)),e["_"+s]=i[s]};for(s in i)o(s);return this}})}(jQuery,window),function(t){"use strict";t.jcarousel.fn.scrollIntoView=function(i,s,e){var r,n=t.jCarousel.parseTarget(i),o=this.index(this._fullyvisible.first()),l=this.index(this._fullyvisible.last());if(r=n.relative?0>n.target?Math.max(0,o+n.target):l+n.target:"object"!=typeof n.target?n.target:this.index(n.target),o>r)return this.scroll(r,s,e);if(r>=o&&l>=r)return t.isFunction(e)&&e.call(this,!1),this;for(var a,h=this.items(),u=this.clipping(),c=this.vertical?"bottom":this.rtl?"left":"right",f=0;;){if(a=h.eq(r),0===a.length)break;if(f+=this.dimension(a),f>=u){var d=parseFloat(a.css("margin-"+c))||0;f-d!==u&&r++;break}if(0>=r)break;r--}return this.scroll(r,s,e)}}(jQuery),function(t){"use strict";t.jCarousel.plugin("jcarouselControl",{_options:{target:"+=1",event:"click",method:"scroll"},_active:null,_init:function(){this.onDestroy=t.proxy(function(){this._destroy(),this.carousel().one("jcarousel:createend",t.proxy(this._create,this))},this),this.onReload=t.proxy(this._reload,this),this.onEvent=t.proxy(function(i){i.preventDefault();var s=this.options("method");t.isFunction(s)?s.call(this):this.carousel().jcarousel(this.options("method"),this.options("target"))},this)},_create:function(){this.carousel().one("jcarousel:destroy",this.onDestroy).on("jcarousel:reloadend jcarousel:scrollend",this.onReload),this._element.on(this.options("event")+".jcarouselcontrol",this.onEvent),this._reload()},_destroy:function(){this._element.off(".jcarouselcontrol",this.onEvent),this.carousel().off("jcarousel:destroy",this.onDestroy).off("jcarousel:reloadend jcarousel:scrollend",this.onReload)},_reload:function(){var i,s=t.jCarousel.parseTarget(this.options("target")),e=this.carousel();if(s.relative)i=e.jcarousel(s.target>0?"hasNext":"hasPrev");else{var r="object"!=typeof s.target?e.jcarousel("items").eq(s.target):s.target;i=e.jcarousel("target").index(r)>=0}return this._active!==i&&(this._trigger(i?"active":"inactive"),this._active=i),this}})}(jQuery),function(t){"use strict";t.jCarousel.plugin("jcarouselPagination",{_options:{perPage:null,item:function(t){return'<a href="#'+t+'">'+t+"</a>"},event:"click",method:"scroll"},_pages:{},_items:{},_currentPage:null,_init:function(){this.onDestroy=t.proxy(function(){this._destroy(),this.carousel().one("jcarousel:createend",t.proxy(this._create,this))},this),this.onReload=t.proxy(this._reload,this),this.onScroll=t.proxy(this._update,this)},_create:function(){this.carousel().one("jcarousel:destroy",this.onDestroy).on("jcarousel:reloadend",this.onReload).on("jcarousel:scrollend",this.onScroll),this._reload()},_destroy:function(){this._clear(),this.carousel().off("jcarousel:destroy",this.onDestroy).off("jcarousel:reloadend",this.onReload).off("jcarousel:scrollend",this.onScroll)},_reload:function(){var i=this.options("perPage");if(this._pages={},this._items={},t.isFunction(i)&&(i=i.call(this)),null==i)this._pages=this._calculatePages();else for(var s,e=parseInt(i,10)||0,r=this.carousel().jcarousel("items"),n=1,o=0;;){if(s=r.eq(o++),0===s.length)break;this._pages[n]=this._pages[n]?this._pages[n].add(s):s,0===o%e&&n++}this._clear();var l=this,a=this.carousel().data("jcarousel"),h=this._element,u=this.options("item");t.each(this._pages,function(i,s){var e=l._items[i]=t(u.call(l,i,s));e.on(l.options("event")+".jcarouselpagination",t.proxy(function(){var t=s.eq(0);if(a.circular){var e=a.index(a.target()),r=a.index(t);parseFloat(i)>parseFloat(l._currentPage)?e>r&&(t="+="+(a.items().length-e+r)):r>e&&(t="-="+(e+(a.items().length-r)))}a[this.options("method")](t)},l)),h.append(e)}),this._update()},_update:function(){var i,s=this.carousel().jcarousel("target");t.each(this._pages,function(t,e){return e.each(function(){return s.is(this)?(i=t,!1):void 0}),i?!1:void 0}),this._currentPage!==i&&(this._trigger("inactive",this._items[this._currentPage]),this._trigger("active",this._items[i])),this._currentPage=i},items:function(){return this._items},_clear:function(){this._element.empty(),this._currentPage=null},_calculatePages:function(){for(var t,i=this.carousel().data("jcarousel"),s=i.items(),e=i.clipping(),r=0,n=0,o=1,l={};;){if(t=s.eq(n++),0===t.length)break;l[o]=l[o]?l[o].add(t):t,r+=i.dimension(t),r>=e&&(o++,r=0)}return l}})}(jQuery),function(t){"use strict";t.jCarousel.plugin("jcarouselAutoscroll",{_options:{target:"+=1",interval:3e3,autostart:!0},_timer:null,_init:function(){this.onDestroy=t.proxy(function(){this._destroy(),this.carousel().one("jcarousel:createend",t.proxy(this._create,this))},this),this.onAnimateEnd=t.proxy(this.start,this)},_create:function(){this.carousel().one("jcarousel:destroy",this.onDestroy),this.options("autostart")&&this.start()},_destroy:function(){this.stop(),this.carousel().off("jcarousel:destroy",this.onDestroy)},start:function(){return this.stop(),this.carousel().one("jcarousel:animateend",this.onAnimateEnd),this._timer=setTimeout(t.proxy(function(){this.carousel().jcarousel("scroll",this.options("target"))},this),this.options("interval")),this},stop:function(){return this._timer&&(this._timer=clearTimeout(this._timer)),this.carousel().off("jcarousel:animateend",this.onAnimateEnd),this}})}(jQuery);






/**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****
  jCarousel - pagination
**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****/

/*! jCarousel - v0.3.0 - 2013-11-22
* http://sorgalla.com/jcarousel
* Copyright (c) 2013 Jan Sorgalla; Licensed MIT */
(function(t){"use strict";t.jCarousel.plugin("jcarouselPagination",{_options:{perPage:null,item:function(t){return'<a href="#'+t+'">'+t+"</a>"},event:"click",method:"scroll"},_pages:{},_items:{},_currentPage:null,_init:function(){this.onDestroy=t.proxy(function(){this._destroy(),this.carousel().one("jcarousel:createend",t.proxy(this._create,this))},this),this.onReload=t.proxy(this._reload,this),this.onScroll=t.proxy(this._update,this)},_create:function(){this.carousel().one("jcarousel:destroy",this.onDestroy).on("jcarousel:reloadend",this.onReload).on("jcarousel:scrollend",this.onScroll),this._reload()},_destroy:function(){this._clear(),this.carousel().off("jcarousel:destroy",this.onDestroy).off("jcarousel:reloadend",this.onReload).off("jcarousel:scrollend",this.onScroll)},_reload:function(){var i=this.options("perPage");if(this._pages={},this._items={},t.isFunction(i)&&(i=i.call(this)),null==i)this._pages=this._calculatePages();else for(var s,e=parseInt(i,10)||0,r=this.carousel().jcarousel("items"),n=1,o=0;;){if(s=r.eq(o++),0===s.length)break;this._pages[n]=this._pages[n]?this._pages[n].add(s):s,0===o%e&&n++}this._clear();var l=this,a=this.carousel().data("jcarousel"),h=this._element,c=this.options("item");t.each(this._pages,function(i,s){var e=l._items[i]=t(c.call(l,i,s));e.on(l.options("event")+".jcarouselpagination",t.proxy(function(){var t=s.eq(0);if(a.circular){var e=a.index(a.target()),r=a.index(t);parseFloat(i)>parseFloat(l._currentPage)?e>r&&(t="+="+(a.items().length-e+r)):r>e&&(t="-="+(e+(a.items().length-r)))}a[this.options("method")](t)},l)),h.append(e)}),this._update()},_update:function(){var i,s=this.carousel().jcarousel("target");t.each(this._pages,function(t,e){return e.each(function(){return s.is(this)?(i=t,!1):void 0}),i?!1:void 0}),this._currentPage!==i&&(this._trigger("inactive",this._items[this._currentPage]),this._trigger("active",this._items[i])),this._currentPage=i},items:function(){return this._items},_clear:function(){this._element.empty(),this._currentPage=null},_calculatePages:function(){for(var t,i=this.carousel().data("jcarousel"),s=i.items(),e=i.clipping(),r=0,n=0,o=1,l={};;){if(t=s.eq(n++),0===t.length)break;l[o]=l[o]?l[o].add(t):t,r+=i.dimension(t),r>=e&&(o++,r=0)}return l}})})(jQuery);






/**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****
  Skrollr
**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****/


/*!
 * skrollr core
 *
 * Alexander Prinzhorn - https://github.com/Prinzhorn/skrollr
 *
 * Free to use under terms of MIT license
 */
(function(window, document, undefined) {
  'use strict';

  /*
   * Global api.
   */
  var skrollr = {
    get: function() {
      return _instance;
    },
    //Main entry point.
    init: function(options) {
      return _instance || new Skrollr(options);
    },
    VERSION: '0.6.26'
  };

  //Minify optimization.
  var hasProp = Object.prototype.hasOwnProperty;
  var Math = window.Math;
  var getStyle = window.getComputedStyle;

  //They will be filled when skrollr gets initialized.
  var documentElement;
  var body;

  var EVENT_TOUCHSTART = 'touchstart';
  var EVENT_TOUCHMOVE = 'touchmove';
  var EVENT_TOUCHCANCEL = 'touchcancel';
  var EVENT_TOUCHEND = 'touchend';

  var SKROLLABLE_CLASS = 'skrollable';
  var SKROLLABLE_BEFORE_CLASS = SKROLLABLE_CLASS + '-before';
  var SKROLLABLE_BETWEEN_CLASS = SKROLLABLE_CLASS + '-between';
  var SKROLLABLE_AFTER_CLASS = SKROLLABLE_CLASS + '-after';

  var SKROLLR_CLASS = 'skrollr';
  var NO_SKROLLR_CLASS = 'no-' + SKROLLR_CLASS;
  var SKROLLR_DESKTOP_CLASS = SKROLLR_CLASS + '-desktop';
  var SKROLLR_MOBILE_CLASS = SKROLLR_CLASS + '-mobile';

  var DEFAULT_EASING = 'linear';
  var DEFAULT_DURATION = 1000;//ms
  var DEFAULT_MOBILE_DECELERATION = 0.004;//pixel/ms²

  var DEFAULT_SMOOTH_SCROLLING_DURATION = 200;//ms

  var ANCHOR_START = 'start';
  var ANCHOR_END = 'end';
  var ANCHOR_CENTER = 'center';
  var ANCHOR_BOTTOM = 'bottom';

  //The property which will be added to the DOM element to hold the ID of the skrollable.
  var SKROLLABLE_ID_DOM_PROPERTY = '___skrollable_id';

  var rxTouchIgnoreTags = /^(?:input|textarea|button|select)$/i;

  var rxTrim = /^\s+|\s+$/g;

  //Find all data-attributes. data-[_constant]-[offset]-[anchor]-[anchor].
  var rxKeyframeAttribute = /^data(?:-(_\w+))?(?:-?(-?\d*\.?\d+p?))?(?:-?(start|end|top|center|bottom))?(?:-?(top|center|bottom))?$/;

  var rxPropValue = /\s*(@?[\w\-\[\]]+)\s*:\s*(.+?)\s*(?:;|$)/gi;

  //Easing function names follow the property in square brackets.
  var rxPropEasing = /^(@?[a-z\-]+)\[(\w+)\]$/;

  var rxCamelCase = /-([a-z0-9_])/g;
  var rxCamelCaseFn = function(str, letter) {
    return letter.toUpperCase();
  };

  //Numeric values with optional sign.
  var rxNumericValue = /[\-+]?[\d]*\.?[\d]+/g;

  //Used to replace occurences of {?} with a number.
  var rxInterpolateString = /\{\?\}/g;

  //Finds rgb(a) colors, which don't use the percentage notation.
  var rxRGBAIntegerColor = /rgba?\(\s*-?\d+\s*,\s*-?\d+\s*,\s*-?\d+/g;

  //Finds all gradients.
  var rxGradient = /[a-z\-]+-gradient/g;

  //Vendor prefix. Will be set once skrollr gets initialized.
  var theCSSPrefix = '';
  var theDashedCSSPrefix = '';

  //Will be called once (when skrollr gets initialized).
  var detectCSSPrefix = function() {
    //Only relevant prefixes. May be extended.
    //Could be dangerous if there will ever be a CSS property which actually starts with "ms". Don't hope so.
    var rxPrefixes = /^(?:O|Moz|webkit|ms)|(?:-(?:o|moz|webkit|ms)-)/;

    //Detect prefix for current browser by finding the first property using a prefix.
    if(!getStyle) {
      return;
    }

    var style = getStyle(body, null);

    for(var k in style) {
      //We check the key and if the key is a number, we check the value as well, because safari's getComputedStyle returns some weird array-like thingy.
      theCSSPrefix = (k.match(rxPrefixes) || (+k == k && style[k].match(rxPrefixes)));

      if(theCSSPrefix) {
        break;
      }
    }

    //Did we even detect a prefix?
    if(!theCSSPrefix) {
      theCSSPrefix = theDashedCSSPrefix = '';

      return;
    }

    theCSSPrefix = theCSSPrefix[0];

    //We could have detected either a dashed prefix or this camelCaseish-inconsistent stuff.
    if(theCSSPrefix.slice(0,1) === '-') {
      theDashedCSSPrefix = theCSSPrefix;

      //There's no logic behind these. Need a look up.
      theCSSPrefix = ({
        '-webkit-': 'webkit',
        '-moz-': 'Moz',
        '-ms-': 'ms',
        '-o-': 'O'
      })[theCSSPrefix];
    } else {
      theDashedCSSPrefix = '-' + theCSSPrefix.toLowerCase() + '-';
    }
  };

  var polyfillRAF = function() {
    var requestAnimFrame = window.requestAnimationFrame || window[theCSSPrefix.toLowerCase() + 'RequestAnimationFrame'];

    var lastTime = _now();

    if(_isMobile || !requestAnimFrame) {
      requestAnimFrame = function(callback) {
        //How long did it take to render?
        var deltaTime = _now() - lastTime;
        var delay = Math.max(0, 1000 / 60 - deltaTime);

        return window.setTimeout(function() {
          lastTime = _now();
          callback();
        }, delay);
      };
    }

    return requestAnimFrame;
  };

  var polyfillCAF = function() {
    var cancelAnimFrame = window.cancelAnimationFrame || window[theCSSPrefix.toLowerCase() + 'CancelAnimationFrame'];

    if(_isMobile || !cancelAnimFrame) {
      cancelAnimFrame = function(timeout) {
        return window.clearTimeout(timeout);
      };
    }

    return cancelAnimFrame;
  };

  //Built-in easing functions.
  var easings = {
    begin: function() {
      return 0;
    },
    end: function() {
      return 1;
    },
    linear: function(p) {
      return p;
    },
    quadratic: function(p) {
      return p * p;
    },
    cubic: function(p) {
      return p * p * p;
    },
    swing: function(p) {
      return (-Math.cos(p * Math.PI) / 2) + 0.5;
    },
    sqrt: function(p) {
      return Math.sqrt(p);
    },
    outCubic: function(p) {
      return (Math.pow((p - 1), 3) + 1);
    },
    //see https://www.desmos.com/calculator/tbr20s8vd2 for how I did this
    bounce: function(p) {
      var a;

      if(p <= 0.5083) {
        a = 3;
      } else if(p <= 0.8489) {
        a = 9;
      } else if(p <= 0.96208) {
        a = 27;
      } else if(p <= 0.99981) {
        a = 91;
      } else {
        return 1;
      }

      return 1 - Math.abs(3 * Math.cos(p * a * 1.028) / a);
    }
  };

  /**
   * Constructor.
   */
  function Skrollr(options) {
    documentElement = document.documentElement;
    body = document.body;

    detectCSSPrefix();

    _instance = this;

    options = options || {};

    _constants = options.constants || {};

    //We allow defining custom easings or overwrite existing.
    if(options.easing) {
      for(var e in options.easing) {
        easings[e] = options.easing[e];
      }
    }

    _edgeStrategy = options.edgeStrategy || 'set';

    _listeners = {
      //Function to be called right before rendering.
      beforerender: options.beforerender,

      //Function to be called right after finishing rendering.
      render: options.render,

      //Function to be called whenever an element with the `data-emit-events` attribute passes a keyframe.
      keyframe: options.keyframe
    };

    //forceHeight is true by default
    _forceHeight = options.forceHeight !== false;

    if(_forceHeight) {
      _scale = options.scale || 1;
    }

    _mobileDeceleration = options.mobileDeceleration || DEFAULT_MOBILE_DECELERATION;

    _smoothScrollingEnabled = options.smoothScrolling !== false;
    _smoothScrollingDuration = options.smoothScrollingDuration || DEFAULT_SMOOTH_SCROLLING_DURATION;

    //Dummy object. Will be overwritten in the _render method when smooth scrolling is calculated.
    _smoothScrolling = {
      targetTop: _instance.getScrollTop()
    };

    //A custom check function may be passed.
    _isMobile = ((options.mobileCheck || function() {
      return (/Android|iPhone|iPad|iPod|BlackBerry/i).test(navigator.userAgent || navigator.vendor || window.opera);
    })());

    if(_isMobile) {
      _skrollrBody = document.getElementById('skrollr-body');

      //Detect 3d transform if there's a skrollr-body (only needed for #skrollr-body).
      if(_skrollrBody) {
        _detect3DTransforms();
      }

      _initMobile();
      _updateClass(documentElement, [SKROLLR_CLASS, SKROLLR_MOBILE_CLASS], [NO_SKROLLR_CLASS]);
    } else {
      _updateClass(documentElement, [SKROLLR_CLASS, SKROLLR_DESKTOP_CLASS], [NO_SKROLLR_CLASS]);
    }

    //Triggers parsing of elements and a first reflow.
    _instance.refresh();

    _addEvent(window, 'resize orientationchange', function() {
      var width = documentElement.clientWidth;
      var height = documentElement.clientHeight;

      //Only reflow if the size actually changed (#271).
      if(height !== _lastViewportHeight || width !== _lastViewportWidth) {
        _lastViewportHeight = height;
        _lastViewportWidth = width;

        _requestReflow = true;
      }
    });

    var requestAnimFrame = polyfillRAF();

    //Let's go.
    (function animloop(){
      _render();
      _animFrame = requestAnimFrame(animloop);
    }());

    return _instance;
  }

  /**
   * (Re)parses some or all elements.
   */
  Skrollr.prototype.refresh = function(elements) {
    var elementIndex;
    var elementsLength;
    var ignoreID = false;

    //Completely reparse anything without argument.
    if(elements === undefined) {
      //Ignore that some elements may already have a skrollable ID.
      ignoreID = true;

      _skrollables = [];
      _skrollableIdCounter = 0;

      elements = document.getElementsByTagName('*');
    } else if(elements.length === undefined) {
      //We also accept a single element as parameter.
      elements = [elements];
    }

    elementIndex = 0;
    elementsLength = elements.length;

    for(; elementIndex < elementsLength; elementIndex++) {
      var el = elements[elementIndex];
      var anchorTarget = el;
      var keyFrames = [];

      //If this particular element should be smooth scrolled.
      var smoothScrollThis = _smoothScrollingEnabled;

      //The edge strategy for this particular element.
      var edgeStrategy = _edgeStrategy;

      //If this particular element should emit keyframe events.
      var emitEvents = false;

      //If we're reseting the counter, remove any old element ids that may be hanging around.
      if(ignoreID && SKROLLABLE_ID_DOM_PROPERTY in el) {
        delete el[SKROLLABLE_ID_DOM_PROPERTY];
      }

      if(!el.attributes) {
        continue;
      }

      //Iterate over all attributes and search for key frame attributes.
      var attributeIndex = 0;
      var attributesLength = el.attributes.length;

      for (; attributeIndex < attributesLength; attributeIndex++) {
        var attr = el.attributes[attributeIndex];

        if(attr.name === 'data-anchor-target') {
          anchorTarget = document.querySelector(attr.value);

          if(anchorTarget === null) {
            throw 'Unable to find anchor target "' + attr.value + '"';
          }

          continue;
        }

        //Global smooth scrolling can be overridden by the element attribute.
        if(attr.name === 'data-smooth-scrolling') {
          smoothScrollThis = attr.value !== 'off';

          continue;
        }

        //Global edge strategy can be overridden by the element attribute.
        if(attr.name === 'data-edge-strategy') {
          edgeStrategy = attr.value;

          continue;
        }

        //Is this element tagged with the `data-emit-events` attribute?
        if(attr.name === 'data-emit-events') {
          emitEvents = true;

          continue;
        }

        var match = attr.name.match(rxKeyframeAttribute);

        if(match === null) {
          continue;
        }

        var kf = {
          props: attr.value,
          //Point back to the element as well.
          element: el,
          //The name of the event which this keyframe will fire, if emitEvents is
          eventType: attr.name.replace(rxCamelCase, rxCamelCaseFn)
        };

        keyFrames.push(kf);

        var constant = match[1];

        if(constant) {
          //Strip the underscore prefix.
          kf.constant = constant.substr(1);
        }

        //Get the key frame offset.
        var offset = match[2];

        //Is it a percentage offset?
        if(/p$/.test(offset)) {
          kf.isPercentage = true;
          kf.offset = (offset.slice(0, -1) | 0) / 100;
        } else {
          kf.offset = (offset | 0);
        }

        var anchor1 = match[3];

        //If second anchor is not set, the first will be taken for both.
        var anchor2 = match[4] || anchor1;

        //"absolute" (or "classic") mode, where numbers mean absolute scroll offset.
        if(!anchor1 || anchor1 === ANCHOR_START || anchor1 === ANCHOR_END) {
          kf.mode = 'absolute';

          //data-end needs to be calculated after all key frames are known.
          if(anchor1 === ANCHOR_END) {
            kf.isEnd = true;
          } else if(!kf.isPercentage) {
            //For data-start we can already set the key frame w/o calculations.
            //#59: "scale" options should only affect absolute mode.
            kf.offset = kf.offset * _scale;
          }
        }
        //"relative" mode, where numbers are relative to anchors.
        else {
          kf.mode = 'relative';
          kf.anchors = [anchor1, anchor2];
        }
      }

      //Does this element have key frames?
      if(!keyFrames.length) {
        continue;
      }

      //Will hold the original style and class attributes before we controlled the element (see #80).
      var styleAttr, classAttr;

      var id;

      if(!ignoreID && SKROLLABLE_ID_DOM_PROPERTY in el) {
        //We already have this element under control. Grab the corresponding skrollable id.
        id = el[SKROLLABLE_ID_DOM_PROPERTY];
        styleAttr = _skrollables[id].styleAttr;
        classAttr = _skrollables[id].classAttr;
      } else {
        //It's an unknown element. Asign it a new skrollable id.
        id = (el[SKROLLABLE_ID_DOM_PROPERTY] = _skrollableIdCounter++);
        styleAttr = el.style.cssText;
        classAttr = _getClass(el);
      }

      _skrollables[id] = {
        element: el,
        styleAttr: styleAttr,
        classAttr: classAttr,
        anchorTarget: anchorTarget,
        keyFrames: keyFrames,
        smoothScrolling: smoothScrollThis,
        edgeStrategy: edgeStrategy,
        emitEvents: emitEvents,
        lastFrameIndex: -1
      };

      _updateClass(el, [SKROLLABLE_CLASS], []);
    }

    //Reflow for the first time.
    _reflow();

    //Now that we got all key frame numbers right, actually parse the properties.
    elementIndex = 0;
    elementsLength = elements.length;

    for(; elementIndex < elementsLength; elementIndex++) {
      var sk = _skrollables[elements[elementIndex][SKROLLABLE_ID_DOM_PROPERTY]];

      if(sk === undefined) {
        continue;
      }

      //Parse the property string to objects
      _parseProps(sk);

      //Fill key frames with missing properties from left and right
      _fillProps(sk);
    }

    return _instance;
  };

  /**
   * Transform "relative" mode to "absolute" mode.
   * That is, calculate anchor position and offset of element.
   */
  Skrollr.prototype.relativeToAbsolute = function(element, viewportAnchor, elementAnchor) {
    var viewportHeight = documentElement.clientHeight;
    var box = element.getBoundingClientRect();
    var absolute = box.top;

    //#100: IE doesn't supply "height" with getBoundingClientRect.
    var boxHeight = box.bottom - box.top;

    if(viewportAnchor === ANCHOR_BOTTOM) {
      absolute -= viewportHeight;
    } else if(viewportAnchor === ANCHOR_CENTER) {
      absolute -= viewportHeight / 2;
    }

    if(elementAnchor === ANCHOR_BOTTOM) {
      absolute += boxHeight;
    } else if(elementAnchor === ANCHOR_CENTER) {
      absolute += boxHeight / 2;
    }

    //Compensate scrolling since getBoundingClientRect is relative to viewport.
    absolute += _instance.getScrollTop();

    return (absolute + 0.5) | 0;
  };

  /**
   * Animates scroll top to new position.
   */
  Skrollr.prototype.animateTo = function(top, options) {
    options = options || {};

    var now = _now();
    var scrollTop = _instance.getScrollTop();

    //Setting this to a new value will automatically cause the current animation to stop, if any.
    _scrollAnimation = {
      startTop: scrollTop,
      topDiff: top - scrollTop,
      targetTop: top,
      duration: options.duration || DEFAULT_DURATION,
      startTime: now,
      endTime: now + (options.duration || DEFAULT_DURATION),
      easing: easings[options.easing || DEFAULT_EASING],
      done: options.done
    };

    //Don't queue the animation if there's nothing to animate.
    if(!_scrollAnimation.topDiff) {
      if(_scrollAnimation.done) {
        _scrollAnimation.done.call(_instance, false);
      }

      _scrollAnimation = undefined;
    }

    return _instance;
  };

  /**
   * Stops animateTo animation.
   */
  Skrollr.prototype.stopAnimateTo = function() {
    if(_scrollAnimation && _scrollAnimation.done) {
      _scrollAnimation.done.call(_instance, true);
    }

    _scrollAnimation = undefined;
  };

  /**
   * Returns if an animation caused by animateTo is currently running.
   */
  Skrollr.prototype.isAnimatingTo = function() {
    return !!_scrollAnimation;
  };

  Skrollr.prototype.isMobile = function() {
    return _isMobile;
  };

  Skrollr.prototype.setScrollTop = function(top, force) {
    _forceRender = (force === true);

    if(_isMobile) {
      _mobileOffset = Math.min(Math.max(top, 0), _maxKeyFrame);
    } else {
      window.scrollTo(0, top);
    }

    return _instance;
  };

  Skrollr.prototype.getScrollTop = function() {
    if(_isMobile) {
      return _mobileOffset;
    } else {
      return window.pageYOffset || documentElement.scrollTop || body.scrollTop || 0;
    }
  };

  Skrollr.prototype.getMaxScrollTop = function() {
    return _maxKeyFrame;
  };

  Skrollr.prototype.on = function(name, fn) {
    _listeners[name] = fn;

    return _instance;
  };

  Skrollr.prototype.off = function(name) {
    delete _listeners[name];

    return _instance;
  };

  Skrollr.prototype.destroy = function() {
    var cancelAnimFrame = polyfillCAF();
    cancelAnimFrame(_animFrame);
    _removeAllEvents();

    _updateClass(documentElement, [NO_SKROLLR_CLASS], [SKROLLR_CLASS, SKROLLR_DESKTOP_CLASS, SKROLLR_MOBILE_CLASS]);

    var skrollableIndex = 0;
    var skrollablesLength = _skrollables.length;

    for(; skrollableIndex < skrollablesLength; skrollableIndex++) {
      _reset(_skrollables[skrollableIndex].element);
    }

    documentElement.style.overflow = body.style.overflow = '';
    documentElement.style.height = body.style.height = '';

    if(_skrollrBody) {
      skrollr.setStyle(_skrollrBody, 'transform', 'none');
    }

    _instance = undefined;
    _skrollrBody = undefined;
    _listeners = undefined;
    _forceHeight = undefined;
    _maxKeyFrame = 0;
    _scale = 1;
    _constants = undefined;
    _mobileDeceleration = undefined;
    _direction = 'down';
    _lastTop = -1;
    _lastViewportWidth = 0;
    _lastViewportHeight = 0;
    _requestReflow = false;
    _scrollAnimation = undefined;
    _smoothScrollingEnabled = undefined;
    _smoothScrollingDuration = undefined;
    _smoothScrolling = undefined;
    _forceRender = undefined;
    _skrollableIdCounter = 0;
    _edgeStrategy = undefined;
    _isMobile = false;
    _mobileOffset = 0;
    _translateZ = undefined;
  };

  /*
    Private methods.
  */

  var _initMobile = function() {
    var initialElement;
    var initialTouchY;
    var initialTouchX;
    var currentElement;
    var currentTouchY;
    var currentTouchX;
    var lastTouchY;
    var deltaY;

    var initialTouchTime;
    var currentTouchTime;
    var lastTouchTime;
    var deltaTime;

    _addEvent(documentElement, [EVENT_TOUCHSTART, EVENT_TOUCHMOVE, EVENT_TOUCHCANCEL, EVENT_TOUCHEND].join(' '), function(e) {
      var touch = e.changedTouches[0];

      currentElement = e.target;

      //We don't want text nodes.
      while(currentElement.nodeType === 3) {
        currentElement = currentElement.parentNode;
      }

      currentTouchY = touch.clientY;
      currentTouchX = touch.clientX;
      currentTouchTime = e.timeStamp;

      if(!rxTouchIgnoreTags.test(currentElement.tagName)) {
        e.preventDefault();
      }

      switch(e.type) {
        case EVENT_TOUCHSTART:
          //The last element we tapped on.
          if(initialElement) {
            initialElement.blur();
          }

          _instance.stopAnimateTo();

          initialElement = currentElement;

          initialTouchY = lastTouchY = currentTouchY;
          initialTouchX = currentTouchX;
          initialTouchTime = currentTouchTime;

          break;
        case EVENT_TOUCHMOVE:
          //Prevent default event on touchIgnore elements in case they don't have focus yet.
          if(rxTouchIgnoreTags.test(currentElement.tagName) && document.activeElement !== currentElement) {
            e.preventDefault();
          }

          deltaY = currentTouchY - lastTouchY;
          deltaTime = currentTouchTime - lastTouchTime;

          _instance.setScrollTop(_mobileOffset - deltaY, true);

          lastTouchY = currentTouchY;
          lastTouchTime = currentTouchTime;
          break;
        default:
        case EVENT_TOUCHCANCEL:
        case EVENT_TOUCHEND:
          var distanceY = initialTouchY - currentTouchY;
          var distanceX = initialTouchX - currentTouchX;
          var distance2 = distanceX * distanceX + distanceY * distanceY;

          //Check if it was more like a tap (moved less than 7px).
          if(distance2 < 49) {
            if(!rxTouchIgnoreTags.test(initialElement.tagName)) {
              initialElement.focus();

              //It was a tap, click the element.
              var clickEvent = document.createEvent('MouseEvents');
              clickEvent.initMouseEvent('click', true, true, e.view, 1, touch.screenX, touch.screenY, touch.clientX, touch.clientY, e.ctrlKey, e.altKey, e.shiftKey, e.metaKey, 0, null);
              initialElement.dispatchEvent(clickEvent);
            }

            return;
          }

          initialElement = undefined;

          var speed = deltaY / deltaTime;

          //Cap speed at 3 pixel/ms.
          speed = Math.max(Math.min(speed, 3), -3);

          var duration = Math.abs(speed / _mobileDeceleration);
          var targetOffset = speed * duration + 0.5 * _mobileDeceleration * duration * duration;
          var targetTop = _instance.getScrollTop() - targetOffset;

          //Relative duration change for when scrolling above bounds.
          var targetRatio = 0;

          //Change duration proportionally when scrolling would leave bounds.
          if(targetTop > _maxKeyFrame) {
            targetRatio = (_maxKeyFrame - targetTop) / targetOffset;

            targetTop = _maxKeyFrame;
          } else if(targetTop < 0) {
            targetRatio = -targetTop / targetOffset;

            targetTop = 0;
          }

          duration = duration * (1 - targetRatio);

          _instance.animateTo((targetTop + 0.5) | 0, {easing: 'outCubic', duration: duration});
          break;
      }
    });

    //Just in case there has already been some native scrolling, reset it.
    window.scrollTo(0, 0);
    documentElement.style.overflow = body.style.overflow = 'hidden';
  };

  /**
   * Updates key frames which depend on others / need to be updated on resize.
   * That is "end" in "absolute" mode and all key frames in "relative" mode.
   * Also handles constants, because they may change on resize.
   */
  var _updateDependentKeyFrames = function() {
    var viewportHeight = documentElement.clientHeight;
    var processedConstants = _processConstants();
    var skrollable;
    var element;
    var anchorTarget;
    var keyFrames;
    var keyFrameIndex;
    var keyFramesLength;
    var kf;
    var skrollableIndex;
    var skrollablesLength;
    var offset;
    var constantValue;

    //First process all relative-mode elements and find the max key frame.
    skrollableIndex = 0;
    skrollablesLength = _skrollables.length;

    for(; skrollableIndex < skrollablesLength; skrollableIndex++) {
      skrollable = _skrollables[skrollableIndex];
      element = skrollable.element;
      anchorTarget = skrollable.anchorTarget;
      keyFrames = skrollable.keyFrames;

      keyFrameIndex = 0;
      keyFramesLength = keyFrames.length;

      for(; keyFrameIndex < keyFramesLength; keyFrameIndex++) {
        kf = keyFrames[keyFrameIndex];

        offset = kf.offset;
        constantValue = processedConstants[kf.constant] || 0;

        kf.frame = offset;

        if(kf.isPercentage) {
          //Convert the offset to percentage of the viewport height.
          offset = offset * viewportHeight;

          //Absolute + percentage mode.
          kf.frame = offset;
        }

        if(kf.mode === 'relative') {
          _reset(element);

          kf.frame = _instance.relativeToAbsolute(anchorTarget, kf.anchors[0], kf.anchors[1]) - offset;

          _reset(element, true);
        }

        kf.frame += constantValue;

        //Only search for max key frame when forceHeight is enabled.
        if(_forceHeight) {
          //Find the max key frame, but don't use one of the data-end ones for comparison.
          if(!kf.isEnd && kf.frame > _maxKeyFrame) {
            _maxKeyFrame = kf.frame;
          }
        }
      }
    }

    //#133: The document can be larger than the maxKeyFrame we found.
    _maxKeyFrame = Math.max(_maxKeyFrame, _getDocumentHeight());

    //Now process all data-end keyframes.
    skrollableIndex = 0;
    skrollablesLength = _skrollables.length;

    for(; skrollableIndex < skrollablesLength; skrollableIndex++) {
      skrollable = _skrollables[skrollableIndex];
      keyFrames = skrollable.keyFrames;

      keyFrameIndex = 0;
      keyFramesLength = keyFrames.length;

      for(; keyFrameIndex < keyFramesLength; keyFrameIndex++) {
        kf = keyFrames[keyFrameIndex];

        constantValue = processedConstants[kf.constant] || 0;

        if(kf.isEnd) {
          kf.frame = _maxKeyFrame - kf.offset + constantValue;
        }
      }

      skrollable.keyFrames.sort(_keyFrameComparator);
    }
  };

  /**
   * Calculates and sets the style properties for the element at the given frame.
   * @param fakeFrame The frame to render at when smooth scrolling is enabled.
   * @param actualFrame The actual frame we are at.
   */
  var _calcSteps = function(fakeFrame, actualFrame) {
    //Iterate over all skrollables.
    var skrollableIndex = 0;
    var skrollablesLength = _skrollables.length;

    for(; skrollableIndex < skrollablesLength; skrollableIndex++) {
      var skrollable = _skrollables[skrollableIndex];
      var element = skrollable.element;
      var frame = skrollable.smoothScrolling ? fakeFrame : actualFrame;
      var frames = skrollable.keyFrames;
      var framesLength = frames.length;
      var firstFrame = frames[0];
      var lastFrame = frames[frames.length - 1];
      var beforeFirst = frame < firstFrame.frame;
      var afterLast = frame > lastFrame.frame;
      var firstOrLastFrame = beforeFirst ? firstFrame : lastFrame;
      var emitEvents = skrollable.emitEvents;
      var lastFrameIndex = skrollable.lastFrameIndex;
      var key;
      var value;

      //If we are before/after the first/last frame, set the styles according to the given edge strategy.
      if(beforeFirst || afterLast) {
        //Check if we already handled this edge case last time.
        //Note: using setScrollTop it's possible that we jumped from one edge to the other.
        if(beforeFirst && skrollable.edge === -1 || afterLast && skrollable.edge === 1) {
          continue;
        }

        //Add the skrollr-before or -after class.
        if(beforeFirst) {
          _updateClass(element, [SKROLLABLE_BEFORE_CLASS], [SKROLLABLE_AFTER_CLASS, SKROLLABLE_BETWEEN_CLASS]);

          //This handles the special case where we exit the first keyframe.
          if(emitEvents && lastFrameIndex > -1) {
            _emitEvent(element, firstFrame.eventType, _direction);
            skrollable.lastFrameIndex = -1;
          }
        } else {
          _updateClass(element, [SKROLLABLE_AFTER_CLASS], [SKROLLABLE_BEFORE_CLASS, SKROLLABLE_BETWEEN_CLASS]);

          //This handles the special case where we exit the last keyframe.
          if(emitEvents && lastFrameIndex < framesLength) {
            _emitEvent(element, lastFrame.eventType, _direction);
            skrollable.lastFrameIndex = framesLength;
          }
        }

        //Remember that we handled the edge case (before/after the first/last keyframe).
        skrollable.edge = beforeFirst ? -1 : 1;

        switch(skrollable.edgeStrategy) {
          case 'reset':
            _reset(element);
            continue;
          case 'ease':
            //Handle this case like it would be exactly at first/last keyframe and just pass it on.
            frame = firstOrLastFrame.frame;
            break;
          default:
          case 'set':
            var props = firstOrLastFrame.props;

            for(key in props) {
              if(hasProp.call(props, key)) {
                value = _interpolateString(props[key].value);

                //Set style or attribute.
                if(key.indexOf('@') === 0) {
                  element.setAttribute(key.substr(1), value);
                } else {
                  skrollr.setStyle(element, key, value);
                }
              }
            }

            continue;
        }
      } else {
        //Did we handle an edge last time?
        if(skrollable.edge !== 0) {
          _updateClass(element, [SKROLLABLE_CLASS, SKROLLABLE_BETWEEN_CLASS], [SKROLLABLE_BEFORE_CLASS, SKROLLABLE_AFTER_CLASS]);
          skrollable.edge = 0;
        }
      }

      //Find out between which two key frames we are right now.
      var keyFrameIndex = 0;

      for(; keyFrameIndex < framesLength - 1; keyFrameIndex++) {
        if(frame >= frames[keyFrameIndex].frame && frame <= frames[keyFrameIndex + 1].frame) {
          var left = frames[keyFrameIndex];
          var right = frames[keyFrameIndex + 1];

          for(key in left.props) {
            if(hasProp.call(left.props, key)) {
              var progress = (frame - left.frame) / (right.frame - left.frame);

              //Transform the current progress using the given easing function.
              progress = left.props[key].easing(progress);

              //Interpolate between the two values
              value = _calcInterpolation(left.props[key].value, right.props[key].value, progress);

              value = _interpolateString(value);

              //Set style or attribute.
              if(key.indexOf('@') === 0) {
                element.setAttribute(key.substr(1), value);
              } else {
                skrollr.setStyle(element, key, value);
              }
            }
          }

          //Are events enabled on this element?
          //This code handles the usual cases of scrolling through different keyframes.
          //The special cases of before first and after last keyframe are handled above.
          if(emitEvents) {
            //Did we pass a new keyframe?
            if(lastFrameIndex !== keyFrameIndex) {
              if(_direction === 'down') {
                _emitEvent(element, left.eventType, _direction);
              } else {
                _emitEvent(element, right.eventType, _direction);
              }

              skrollable.lastFrameIndex = keyFrameIndex;
            }
          }

          break;
        }
      }
    }
  };

  /**
   * Renders all elements.
   */
  var _render = function() {
    if(_requestReflow) {
      _requestReflow = false;
      _reflow();
    }

    //We may render something else than the actual scrollbar position.
    var renderTop = _instance.getScrollTop();

    //If there's an animation, which ends in current render call, call the callback after rendering.
    var afterAnimationCallback;
    var now = _now();
    var progress;

    //Before actually rendering handle the scroll animation, if any.
    if(_scrollAnimation) {
      //It's over
      if(now >= _scrollAnimation.endTime) {
        renderTop = _scrollAnimation.targetTop;
        afterAnimationCallback = _scrollAnimation.done;
        _scrollAnimation = undefined;
      } else {
        //Map the current progress to the new progress using given easing function.
        progress = _scrollAnimation.easing((now - _scrollAnimation.startTime) / _scrollAnimation.duration);

        renderTop = (_scrollAnimation.startTop + progress * _scrollAnimation.topDiff) | 0;
      }

      _instance.setScrollTop(renderTop, true);
    }
    //Smooth scrolling only if there's no animation running and if we're not forcing the rendering.
    else if(!_forceRender) {
      var smoothScrollingDiff = _smoothScrolling.targetTop - renderTop;

      //The user scrolled, start new smooth scrolling.
      if(smoothScrollingDiff) {
        _smoothScrolling = {
          startTop: _lastTop,
          topDiff: renderTop - _lastTop,
          targetTop: renderTop,
          startTime: _lastRenderCall,
          endTime: _lastRenderCall + _smoothScrollingDuration
        };
      }

      //Interpolate the internal scroll position (not the actual scrollbar).
      if(now <= _smoothScrolling.endTime) {
        //Map the current progress to the new progress using easing function.
        progress = easings.sqrt((now - _smoothScrolling.startTime) / _smoothScrollingDuration);

        renderTop = (_smoothScrolling.startTop + progress * _smoothScrolling.topDiff) | 0;
      }
    }

    //That's were we actually "scroll" on mobile.
    if(_isMobile && _skrollrBody) {
      //Set the transform ("scroll it").
      skrollr.setStyle(_skrollrBody, 'transform', 'translate(0, ' + -(_mobileOffset) + 'px) ' + _translateZ);
    }

    //Did the scroll position even change?
    if(_forceRender || _lastTop !== renderTop) {
      //Remember in which direction are we scrolling?
      _direction = (renderTop > _lastTop) ? 'down' : (renderTop < _lastTop ? 'up' : _direction);

      _forceRender = false;

      var listenerParams = {
        curTop: renderTop,
        lastTop: _lastTop,
        maxTop: _maxKeyFrame,
        direction: _direction
      };

      //Tell the listener we are about to render.
      var continueRendering = _listeners.beforerender && _listeners.beforerender.call(_instance, listenerParams);

      //The beforerender listener function is able the cancel rendering.
      if(continueRendering !== false) {
        //Now actually interpolate all the styles.
        _calcSteps(renderTop, _instance.getScrollTop());

        //Remember when we last rendered.
        _lastTop = renderTop;

        if(_listeners.render) {
          _listeners.render.call(_instance, listenerParams);
        }
      }

      if(afterAnimationCallback) {
        afterAnimationCallback.call(_instance, false);
      }
    }

    _lastRenderCall = now;
  };

  /**
   * Parses the properties for each key frame of the given skrollable.
   */
  var _parseProps = function(skrollable) {
    //Iterate over all key frames
    var keyFrameIndex = 0;
    var keyFramesLength = skrollable.keyFrames.length;

    for(; keyFrameIndex < keyFramesLength; keyFrameIndex++) {
      var frame = skrollable.keyFrames[keyFrameIndex];
      var easing;
      var value;
      var prop;
      var props = {};

      var match;

      while((match = rxPropValue.exec(frame.props)) !== null) {
        prop = match[1];
        value = match[2];

        easing = prop.match(rxPropEasing);

        //Is there an easing specified for this prop?
        if(easing !== null) {
          prop = easing[1];
          easing = easing[2];
        } else {
          easing = DEFAULT_EASING;
        }

        //Exclamation point at first position forces the value to be taken literal.
        value = value.indexOf('!') ? _parseProp(value) : [value.slice(1)];

        //Save the prop for this key frame with his value and easing function
        props[prop] = {
          value: value,
          easing: easings[easing]
        };
      }

      frame.props = props;
    }
  };

  /**
   * Parses a value extracting numeric values and generating a format string
   * for later interpolation of the new values in old string.
   *
   * @param val The CSS value to be parsed.
   * @return Something like ["rgba(?%,?%, ?%,?)", 100, 50, 0, .7]
   * where the first element is the format string later used
   * and all following elements are the numeric value.
   */
  var _parseProp = function(val) {
    var numbers = [];

    //One special case, where floats don't work.
    //We replace all occurences of rgba colors
    //which don't use percentage notation with the percentage notation.
    rxRGBAIntegerColor.lastIndex = 0;
    val = val.replace(rxRGBAIntegerColor, function(rgba) {
      return rgba.replace(rxNumericValue, function(n) {
        return n / 255 * 100 + '%';
      });
    });

    //Handle prefixing of "gradient" values.
    //For now only the prefixed value will be set. Unprefixed isn't supported anyway.
    if(theDashedCSSPrefix) {
      rxGradient.lastIndex = 0;
      val = val.replace(rxGradient, function(s) {
        return theDashedCSSPrefix + s;
      });
    }

    //Now parse ANY number inside this string and create a format string.
    val = val.replace(rxNumericValue, function(n) {
      numbers.push(+n);
      return '{?}';
    });

    //Add the formatstring as first value.
    numbers.unshift(val);

    return numbers;
  };

  /**
   * Fills the key frames with missing left and right hand properties.
   * If key frame 1 has property X and key frame 2 is missing X,
   * but key frame 3 has X again, then we need to assign X to key frame 2 too.
   *
   * @param sk A skrollable.
   */
  var _fillProps = function(sk) {
    //Will collect the properties key frame by key frame
    var propList = {};
    var keyFrameIndex;
    var keyFramesLength;

    //Iterate over all key frames from left to right
    keyFrameIndex = 0;
    keyFramesLength = sk.keyFrames.length;

    for(; keyFrameIndex < keyFramesLength; keyFrameIndex++) {
      _fillPropForFrame(sk.keyFrames[keyFrameIndex], propList);
    }

    //Now do the same from right to fill the last gaps

    propList = {};

    //Iterate over all key frames from right to left
    keyFrameIndex = sk.keyFrames.length - 1;

    for(; keyFrameIndex >= 0; keyFrameIndex--) {
      _fillPropForFrame(sk.keyFrames[keyFrameIndex], propList);
    }
  };

  var _fillPropForFrame = function(frame, propList) {
    var key;

    //For each key frame iterate over all right hand properties and assign them,
    //but only if the current key frame doesn't have the property by itself
    for(key in propList) {
      //The current frame misses this property, so assign it.
      if(!hasProp.call(frame.props, key)) {
        frame.props[key] = propList[key];
      }
    }

    //Iterate over all props of the current frame and collect them
    for(key in frame.props) {
      propList[key] = frame.props[key];
    }
  };

  /**
   * Calculates the new values for two given values array.
   */
  var _calcInterpolation = function(val1, val2, progress) {
    var valueIndex;
    var val1Length = val1.length;

    //They both need to have the same length
    if(val1Length !== val2.length) {
      throw 'Can\'t interpolate between "' + val1[0] + '" and "' + val2[0] + '"';
    }

    //Add the format string as first element.
    var interpolated = [val1[0]];

    valueIndex = 1;

    for(; valueIndex < val1Length; valueIndex++) {
      //That's the line where the two numbers are actually interpolated.
      interpolated[valueIndex] = val1[valueIndex] + ((val2[valueIndex] - val1[valueIndex]) * progress);
    }

    return interpolated;
  };

  /**
   * Interpolates the numeric values into the format string.
   */
  var _interpolateString = function(val) {
    var valueIndex = 1;

    rxInterpolateString.lastIndex = 0;

    return val[0].replace(rxInterpolateString, function() {
      return val[valueIndex++];
    });
  };

  /**
   * Resets the class and style attribute to what it was before skrollr manipulated the element.
   * Also remembers the values it had before reseting, in order to undo the reset.
   */
  var _reset = function(elements, undo) {
    //We accept a single element or an array of elements.
    elements = [].concat(elements);

    var skrollable;
    var element;
    var elementsIndex = 0;
    var elementsLength = elements.length;

    for(; elementsIndex < elementsLength; elementsIndex++) {
      element = elements[elementsIndex];
      skrollable = _skrollables[element[SKROLLABLE_ID_DOM_PROPERTY]];

      //Couldn't find the skrollable for this DOM element.
      if(!skrollable) {
        continue;
      }

      if(undo) {
        //Reset class and style to the "dirty" (set by skrollr) values.
        element.style.cssText = skrollable.dirtyStyleAttr;
        _updateClass(element, skrollable.dirtyClassAttr);
      } else {
        //Remember the "dirty" (set by skrollr) class and style.
        skrollable.dirtyStyleAttr = element.style.cssText;
        skrollable.dirtyClassAttr = _getClass(element);

        //Reset class and style to what it originally was.
        element.style.cssText = skrollable.styleAttr;
        _updateClass(element, skrollable.classAttr);
      }
    }
  };

  /**
   * Detects support for 3d transforms by applying it to the skrollr-body.
   */
  var _detect3DTransforms = function() {
    _translateZ = 'translateZ(0)';
    skrollr.setStyle(_skrollrBody, 'transform', _translateZ);

    var computedStyle = getStyle(_skrollrBody);
    var computedTransform = computedStyle.getPropertyValue('transform');
    var computedTransformWithPrefix = computedStyle.getPropertyValue(theDashedCSSPrefix + 'transform');
    var has3D = (computedTransform && computedTransform !== 'none') || (computedTransformWithPrefix && computedTransformWithPrefix !== 'none');

    if(!has3D) {
      _translateZ = '';
    }
  };

  /**
   * Set the CSS property on the given element. Sets prefixed properties as well.
   */
  skrollr.setStyle = function(el, prop, val) {
    var style = el.style;

    //Camel case.
    prop = prop.replace(rxCamelCase, rxCamelCaseFn).replace('-', '');

    //Make sure z-index gets a <integer>.
    //This is the only <integer> case we need to handle.
    if(prop === 'zIndex') {
      if(isNaN(val)) {
        //If it's not a number, don't touch it.
        //It could for example be "auto" (#351).
        style[prop] = val;
      } else {
        //Floor the number.
        style[prop] = '' + (val | 0);
      }
    }
    //#64: "float" can't be set across browsers. Needs to use "cssFloat" for all except IE.
    else if(prop === 'float') {
      style.styleFloat = style.cssFloat = val;
    }
    else {
      //Need try-catch for old IE.
      try {
        //Set prefixed property if there's a prefix.
        if(theCSSPrefix) {
          style[theCSSPrefix + prop.slice(0,1).toUpperCase() + prop.slice(1)] = val;
        }

        //Set unprefixed.
        style[prop] = val;
      } catch(ignore) {}
    }
  };

  /**
   * Cross browser event handling.
   */
  var _addEvent = skrollr.addEvent = function(element, names, callback) {
    var intermediate = function(e) {
      //Normalize IE event stuff.
      e = e || window.event;

      if(!e.target) {
        e.target = e.srcElement;
      }

      if(!e.preventDefault) {
        e.preventDefault = function() {
          e.returnValue = false;
          e.defaultPrevented = true;
        };
      }

      return callback.call(this, e);
    };

    names = names.split(' ');

    var name;
    var nameCounter = 0;
    var namesLength = names.length;

    for(; nameCounter < namesLength; nameCounter++) {
      name = names[nameCounter];

      if(element.addEventListener) {
        element.addEventListener(name, callback, false);
      } else {
        element.attachEvent('on' + name, intermediate);
      }

      //Remember the events to be able to flush them later.
      _registeredEvents.push({
        element: element,
        name: name,
        listener: callback
      });
    }
  };

  var _removeEvent = skrollr.removeEvent = function(element, names, callback) {
    names = names.split(' ');

    var nameCounter = 0;
    var namesLength = names.length;

    for(; nameCounter < namesLength; nameCounter++) {
      if(element.removeEventListener) {
        element.removeEventListener(names[nameCounter], callback, false);
      } else {
        element.detachEvent('on' + names[nameCounter], callback);
      }
    }
  };

  var _removeAllEvents = function() {
    var eventData;
    var eventCounter = 0;
    var eventsLength = _registeredEvents.length;

    for(; eventCounter < eventsLength; eventCounter++) {
      eventData = _registeredEvents[eventCounter];

      _removeEvent(eventData.element, eventData.name, eventData.listener);
    }

    _registeredEvents = [];
  };

  var _emitEvent = function(element, name, direction) {
    if(_listeners.keyframe) {
      _listeners.keyframe.call(_instance, element, name, direction);
    }
  };

  var _reflow = function() {
    var pos = _instance.getScrollTop();

    //Will be recalculated by _updateDependentKeyFrames.
    _maxKeyFrame = 0;

    if(_forceHeight && !_isMobile) {
      //un-"force" the height to not mess with the calculations in _updateDependentKeyFrames (#216).
      body.style.height = '';
    }

    _updateDependentKeyFrames();

    if(_forceHeight && !_isMobile) {
      //"force" the height.
      body.style.height = (_maxKeyFrame + documentElement.clientHeight) + 'px';
    }

    //The scroll offset may now be larger than needed (on desktop the browser/os prevents scrolling farther than the bottom).
    if(_isMobile) {
      _instance.setScrollTop(Math.min(_instance.getScrollTop(), _maxKeyFrame));
    } else {
      //Remember and reset the scroll pos (#217).
      _instance.setScrollTop(pos, true);
    }

    _forceRender = true;
  };

  /*
   * Returns a copy of the constants object where all functions and strings have been evaluated.
   */
  var _processConstants = function() {
    var viewportHeight = documentElement.clientHeight;
    var copy = {};
    var prop;
    var value;

    for(prop in _constants) {
      value = _constants[prop];

      if(typeof value === 'function') {
        value = value.call(_instance);
      }
      //Percentage offset.
      else if((/p$/).test(value)) {
        value = (value.slice(0, -1) / 100) * viewportHeight;
      }

      copy[prop] = value;
    }

    return copy;
  };

  /*
   * Returns the height of the document.
   */
  var _getDocumentHeight = function() {
    var skrollrBodyHeight = (_skrollrBody && _skrollrBody.offsetHeight || 0);
    var bodyHeight = Math.max(skrollrBodyHeight, body.scrollHeight, body.offsetHeight, documentElement.scrollHeight, documentElement.offsetHeight, documentElement.clientHeight);

    return bodyHeight - documentElement.clientHeight;
  };

  /**
   * Returns a string of space separated classnames for the current element.
   * Works with SVG as well.
   */
  var _getClass = function(element) {
    var prop = 'className';

    //SVG support by using className.baseVal instead of just className.
    if(window.SVGElement && element instanceof window.SVGElement) {
      element = element[prop];
      prop = 'baseVal';
    }

    return element[prop];
  };

  /**
   * Adds and removes a CSS classes.
   * Works with SVG as well.
   * add and remove are arrays of strings,
   * or if remove is ommited add is a string and overwrites all classes.
   */
  var _updateClass = function(element, add, remove) {
    var prop = 'className';

    //SVG support by using className.baseVal instead of just className.
    if(window.SVGElement && element instanceof window.SVGElement) {
      element = element[prop];
      prop = 'baseVal';
    }

    //When remove is ommited, we want to overwrite/set the classes.
    if(remove === undefined) {
      element[prop] = add;
      return;
    }

    //Cache current classes. We will work on a string before passing back to DOM.
    var val = element[prop];

    //All classes to be removed.
    var classRemoveIndex = 0;
    var removeLength = remove.length;

    for(; classRemoveIndex < removeLength; classRemoveIndex++) {
      val = _untrim(val).replace(_untrim(remove[classRemoveIndex]), ' ');
    }

    val = _trim(val);

    //All classes to be added.
    var classAddIndex = 0;
    var addLength = add.length;

    for(; classAddIndex < addLength; classAddIndex++) {
      //Only add if el not already has class.
      if(_untrim(val).indexOf(_untrim(add[classAddIndex])) === -1) {
        val += ' ' + add[classAddIndex];
      }
    }

    element[prop] = _trim(val);
  };

  var _trim = function(a) {
    return a.replace(rxTrim, '');
  };

  /**
   * Adds a space before and after the string.
   */
  var _untrim = function(a) {
    return ' ' + a + ' ';
  };

  var _now = Date.now || function() {
    return +new Date();
  };

  var _keyFrameComparator = function(a, b) {
    return a.frame - b.frame;
  };

  /*
   * Private variables.
   */

  //Singleton
  var _instance;

  /*
    A list of all elements which should be animated associated with their the metadata.
    Exmaple skrollable with two key frames animating from 100px width to 20px:

    skrollable = {
      element: <the DOM element>,
      styleAttr: <style attribute of the element before skrollr>,
      classAttr: <class attribute of the element before skrollr>,
      keyFrames: [
        {
          frame: 100,
          props: {
            width: {
              value: ['{?}px', 100],
              easing: <reference to easing function>
            }
          },
          mode: "absolute"
        },
        {
          frame: 200,
          props: {
            width: {
              value: ['{?}px', 20],
              easing: <reference to easing function>
            }
          },
          mode: "absolute"
        }
      ]
    };
  */
  var _skrollables;

  var _skrollrBody;

  var _listeners;
  var _forceHeight;
  var _maxKeyFrame = 0;

  var _scale = 1;
  var _constants;

  var _mobileDeceleration;

  //Current direction (up/down).
  var _direction = 'down';

  //The last top offset value. Needed to determine direction.
  var _lastTop = -1;

  //The last time we called the render method (doesn't mean we rendered!).
  var _lastRenderCall = _now();

  //For detecting if it actually resized (#271).
  var _lastViewportWidth = 0;
  var _lastViewportHeight = 0;

  var _requestReflow = false;

  //Will contain data about a running scrollbar animation, if any.
  var _scrollAnimation;

  var _smoothScrollingEnabled;

  var _smoothScrollingDuration;

  //Will contain settins for smooth scrolling if enabled.
  var _smoothScrolling;

  //Can be set by any operation/event to force rendering even if the scrollbar didn't move.
  var _forceRender;

  //Each skrollable gets an unique ID incremented for each skrollable.
  //The ID is the index in the _skrollables array.
  var _skrollableIdCounter = 0;

  var _edgeStrategy;


  //Mobile specific vars. Will be stripped by UglifyJS when not in use.
  var _isMobile = false;

  //The virtual scroll offset when using mobile scrolling.
  var _mobileOffset = 0;

  //If the browser supports 3d transforms, this will be filled with 'translateZ(0)' (empty string otherwise).
  var _translateZ;

  //Will contain data about registered events by skrollr.
  var _registeredEvents = [];

  //Animation frame id returned by RequestAnimationFrame (or timeout when RAF is not supported).
  var _animFrame;

  //Expose skrollr as either a global variable or a require.js module
  if(typeof define === 'function' && define.amd) {
    define('skrollr', function () {
      return skrollr;
    });
  } else if (typeof module !== 'undefined' && module.exports) {
    module.exports = skrollr;
  } else {
    window.skrollr = skrollr;
  }

}(window, document));




/**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****
  Twitter Bootstrap - scrollspy
**** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** **** ****/

;(function(){
  /* ========================================================================
   * Bootstrap: scrollspy.js v3.0.2
   * http://getbootstrap.com/javascript/#scrollspy
   * ========================================================================
   * Copyright 2013 Twitter, Inc.
   *
   * Licensed under the Apache License, Version 2.0 (the "License");
   * you may not use this file except in compliance with the License.
   * You may obtain a copy of the License at
   *
   * http://www.apache.org/licenses/LICENSE-2.0
   *
   * Unless required by applicable law or agreed to in writing, software
   * distributed under the License is distributed on an "AS IS" BASIS,
   * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   * See the License for the specific language governing permissions and
   * limitations under the License.
   * ======================================================================== */


  +function ($) { "use strict";

    // SCROLLSPY CLASS DEFINITION
    // ==========================

    function ScrollSpy(element, options) {
      var href
      var process  = $.proxy(this.process, this)

      this.$element       = $(element).is('body') ? $(window) : $(element)
      this.$body          = $('body')
      this.$scrollElement = this.$element.on('scroll.bs.scroll-spy.data-api', process)
      this.options        = $.extend({}, ScrollSpy.DEFAULTS, options)
      this.selector       = (this.options.target
        || ((href = $(element).attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')) //strip for ie7
        || '') + ' .spy-target li > a'
      this.offsets        = $([])
      this.targets        = $([])
      this.activeTarget   = null

      this.refresh()
      this.process()
    }

    ScrollSpy.DEFAULTS = {
      offset: 10
    }

    ScrollSpy.prototype.refresh = function () {
      var offsetMethod = this.$element[0] == window ? 'offset' : 'position'

      this.offsets = $([])
      this.targets = $([])

      var self     = this
      var $targets = this.$body
        .find(this.selector)
        .map(function () {
          var $el   = $(this)
          var href  = $el.data('target') || $el.attr('href')
          var $href = /^#\w/.test(href) && $(href)

          return ($href
            && $href.length
            && [[ $href[offsetMethod]().top + (!$.isWindow(self.$scrollElement.get(0)) && self.$scrollElement.scrollTop()), href ]]) || null
        })
        .sort(function (a, b) { return a[0] - b[0] })
        .each(function () {
          self.offsets.push(this[0])
          self.targets.push(this[1])
        })
    }

    ScrollSpy.prototype.process = function () {
      var scrollTop    = this.$scrollElement.scrollTop() + this.options.offset
      var scrollHeight = this.$scrollElement[0].scrollHeight || this.$body[0].scrollHeight
      var maxScroll    = scrollHeight - this.$scrollElement.height()
      var offsets      = this.offsets
      var targets      = this.targets
      var activeTarget = this.activeTarget
      var i

      if (scrollTop >= maxScroll) {
        return activeTarget != (i = targets.last()[0]) && this.activate(i)
      }

      for (i = offsets.length; i--;) {
        activeTarget != targets[i]
          && scrollTop >= offsets[i]
          && (!offsets[i + 1] || scrollTop <= offsets[i + 1])
          && this.activate( targets[i] )
      }
    }

    ScrollSpy.prototype.activate = function (target) {
      this.activeTarget = target

      $(this.selector)
        .parents('.active')
        .removeClass('active')

      var selector = this.selector
        + '[data-target="' + target + '"],'
        + this.selector + '[href="' + target + '"]'

      var active = $(selector)
        .parents('li')
        .addClass('active')

      if (active.parent('.dropdown-menu').length)  {
        active = active
          .closest('li.dropdown')
          .addClass('active')
      }

      active.trigger('activate.bs.scrollspy')
    }


    // SCROLLSPY PLUGIN DEFINITION
    // ===========================

    var old = $.fn.scrollspy

    $.fn.scrollspy = function (option) {
      return this.each(function () {
        var $this   = $(this)
        var data    = $this.data('bs.scrollspy')
        var options = typeof option == 'object' && option

        if (!data) $this.data('bs.scrollspy', (data = new ScrollSpy(this, options)))
        if (typeof option == 'string') data[option]()
      })
    }

    $.fn.scrollspy.Constructor = ScrollSpy


    // SCROLLSPY NO CONFLICT
    // =====================

    $.fn.scrollspy.noConflict = function () {
      $.fn.scrollspy = old
      return this
    }


    // SCROLLSPY DATA-API
    // ==================

    $(window).on('load', function () {
      $('[data-spy="scroll"]').each(function () {
        var $spy = $(this)
        $spy.scrollspy($spy.data())
      })
    })

  }(jQuery);

})();
