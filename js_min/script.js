!function(n){n(document).ready(function(){function l(e){var t=e,i=n('<div class="no-child-margins opposite"><button class="btn btn--grey">'+t.attr("data-toggle-label")+"</button></div>"),a=0;t.off("click"),t.toggleClass("flip"),t.blur(),setTimeout(function(){t.prepend('<svg class="svg-inline--fa fa-check fa-w-16" aria-hidden="true" data-prefix="fa" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg> '),t.removeClass("flip"),t.prop("disabled",!0),t.addClass("disabled"),n(".disabled").click(function(e){e.preventDefault()})},200),i.css({opacity:0}),t.after(i),console.log("hello sergey"),t.parent().hasClass("btn-list--center")||(a=t.offset().top-i.offset().top-4),i.css({display:"none",marginTop:a}),i.slideToggle(200),i.animate({opacity:1},200),i.children(".btn").click(function(e){var t,i,a;e.preventDefault(),t=n(this),i=t.parent(),a=i.prev(".btn--interest"),i.off("click"),i.animate({opacity:0},200),i.slideToggle(200,function(){i.remove()}),a.prop("disabled",!1),a.removeClass("disabled"),a.toggleClass("flip"),setTimeout(function(){a.find("svg").remove(),a.removeClass("flip"),a.prop("disabled",!1),a.removeClass("disabled"),a.click(function(e){e.preventDefault(),l(n(this))})},200)})}n(".disabled").click(function(e){e.preventDefault()}),n("a.account-info__wrapper").click(function(e){e.preventDefault(),n(".account-info__dropdown").toggle(200)}),n(".btn--interest:not([disabled])").click(function(e){e.preventDefault(),l(n(this))})})}(JQuery);