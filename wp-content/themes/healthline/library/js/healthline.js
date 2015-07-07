// $(document).ready(function() {
//     $('#item1').addClass('current');
// });



// /**** **** **** **** **** **** ****
//  -- Healthline Javascript --
// **** **** **** **** **** **** ****/
// (function($) {
//     $.fn.countTo = function(options) {
//         options = options || {};

//         return $(this).each(function() {
//             // set options for current element
//             var settings = $.extend({}, $.fn.countTo.defaults, {
//                 from: $(this).data('from'),
//                 to: $(this).data('to'),
//                 speed: $(this).data('speed'),
//                 refreshInterval: $(this).data('refresh-interval'),
//                 decimals: $(this).data('decimals')
//             }, options);

//             // how many times to update the value, and how much to increment the value on each update
//             var loops = Math.ceil(settings.speed / settings.refreshInterval),
//                 increment = (settings.to - settings.from) / loops;

//             // references & variables that will change with each update
//             var self = this,
//                 $self = $(this),
//                 loopCount = 0,
//                 value = settings.from,
//                 data = $self.data('countTo') || {};

//             $self.data('countTo', data);

//             // if an existing interval can be found, clear it first
//             if (data.interval) {
//                 clearInterval(data.interval);
//             }
//             data.interval = setInterval(updateTimer, settings.refreshInterval);

//             // initialize the element with the starting value
//             render(value);

//             function updateTimer() {
//                 value += increment;
//                 loopCount++;

//                 render(value);

//                 if (typeof (settings.onUpdate) == 'function') {
//                     settings.onUpdate.call(self, value);
//                 }

//                 if (loopCount >= loops) {
//                     // remove the interval
//                     $self.removeData('countTo');
//                     clearInterval(data.interval);
//                     value = settings.to;

//                     if (typeof (settings.onComplete) == 'function') {
//                         settings.onComplete.call(self, value);
//                     }
//                 }
//             }

//             function render(value) {
//                 var formattedValue = settings.formatter.call(self, value, settings);
//                 $self.html(formattedValue);
//             }
//         });
//     };

//     $.fn.countTo.defaults = {
//         from: 0, // the number the element should start at
//         to: 0, // the number the element should end at
//         speed: 1000, // how long it should take to count between the target numbers
//         refreshInterval: 100, // how often the element should be updated
//         decimals: 0, // the number of decimal places to show
//         formatter: formatter, // handler for formatting the value before rendering
//         onUpdate: null, // callback method for every time the element is updated
//         onComplete: null // callback method for when the element finishes updating
//     };

//     function formatter(value, settings) {
//         return value.toFixed(settings.decimals);
//     }
// }(jQuery));

// jQuery(function($) {
//     // custom formatting example
//     $('.timer').data('countToOptions', {
//         formatter: function(value, options) {
//             return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
//         }
//     });

//     // start all the timers
//     $('.timer').each(count);

//     function count(options) {
//         var $this = $(this);
//         options = $.extend({}, options || {}, $this.data('countToOptions') || {});
//         $this.countTo(options);
//     }
// });

// // Tabbing Through On Search and Discovery Page

// // --------------------
// // Content Swapper
// // --------------------

var swapperSelector = $('.swapper-selector').find('li'),
    swapperWrap = $('.swapper-wrap'),
    swapperContent = swapperWrap.find('.swapper-content');

var sliderToggle = function() {
    var items = $('.switch-item');
    for (var i = 0; i < items.length; i++) {
        if ($(items[i]).hasClass('current')) {
            $(items[i]).removeClass('current');
            var next = $(items[(i + 1) % 4]);
            next.addClass('current');
            break;
        }
    }
}
setInterval(sliderToggle, 3000);

var sliderContent = function() {
  var contentItems = $('.swapper-content');
  for (var i = 0; i < contentItems.length; i++) {
    if ($(contentItems[i]).hasClass('show')) {
        $(contentItems[i]).removeClass('show');
        var proximo = $(contentItems[(i + 1) % 4]);
        proximo.addClass('show');
        break;
    }
  }
}
setInterval(sliderContent, 3000);


swapperSelector.on('click', function() {

    var target = $(this).attr('data-target');
    target = swapperWrap.find('div.swapper-content[data-title=' + target + ']');
    var preVideo = swapperWrap.find('div.swapper-content.show iframe');

    swapperSelector.removeClass('current');
    $(this).addClass('current');

    swapperContent.removeClass('show');
    $(target).addClass('show');

    if (preVideo.length) {
        preVideo.each(function() {
            var src = $(this).attr('src');
            $(this).attr('src', '');
            $(this).attr('src', src);
        });
    }

});




// Modal

(function() {
    var exit = document.getElementById('exit');
    var modalBar = document.getElementById('modal-bar');

    exit.onclick = function() {
        modalBar.style.display = 'none';
    }

})();

