(function( $ ) {
	'use strict';
	/* Body Loader Start */
	jQuery(window).load(function() {
		jQuery('.siteloader').hide();
	});
	/* Body Loader End */

	/* Add Lazy Load Start */
	jQuery('.lazy').lazy({
		combined: true,
		placeholder: "data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwcHgiICBoZWlnaHQ9IjEwMHB4IiAgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ieE1pZFlNaWQiIGNsYXNzPSJsZHMtd2VkZ2VzIiBzdHlsZT0iYmFja2dyb3VuZDogbm9uZTsiPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUwLDUwKSI+PGcgbmctYXR0ci10cmFuc2Zvcm09InNjYWxlKHt7Y29uZmlnLnNjYWxlfX0pIiB0cmFuc2Zvcm09InNjYWxlKDAuNykiPjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC01MCwtNTApIj48ZyB0cmFuc2Zvcm09InJvdGF0ZSgxNTkuODkzIDUwIDUwKSI+PGFuaW1hdGVUcmFuc2Zvcm0gYXR0cmlidXRlTmFtZT0idHJhbnNmb3JtIiB0eXBlPSJyb3RhdGUiIGNhbGNNb2RlPSJsaW5lYXIiIHZhbHVlcz0iMCA1MCA1MDszNjAgNTAgNTAiIGtleVRpbWVzPSIwOzEiIGR1cj0iMC43NXMiIGJlZ2luPSIwcyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiPjwvYW5pbWF0ZVRyYW5zZm9ybT48cGF0aCBuZy1hdHRyLWZpbGwtb3BhY2l0eT0ie3tjb25maWcub3BhY2l0eX19IiBuZy1hdHRyLWZpbGw9Int7Y29uZmlnLmMxfX0iIGQ9Ik01MCA1MEw1MCAwQTUwIDUwIDAgMCAxIDEwMCA1MFoiIGZpbGwtb3BhY2l0eT0iMC44IiBmaWxsPSIjZTkwYzU5Ij48L3BhdGg+PC9nPjxnIHRyYW5zZm9ybT0icm90YXRlKDIwOS45MiA1MCA1MCkiPjxhbmltYXRlVHJhbnNmb3JtIGF0dHJpYnV0ZU5hbWU9InRyYW5zZm9ybSIgdHlwZT0icm90YXRlIiBjYWxjTW9kZT0ibGluZWFyIiB2YWx1ZXM9IjAgNTAgNTA7MzYwIDUwIDUwIiBrZXlUaW1lcz0iMDsxIiBkdXI9IjFzIiBiZWdpbj0iMHMiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIj48L2FuaW1hdGVUcmFuc2Zvcm0+PHBhdGggbmctYXR0ci1maWxsLW9wYWNpdHk9Int7Y29uZmlnLm9wYWNpdHl9fSIgbmctYXR0ci1maWxsPSJ7e2NvbmZpZy5jMn19IiBkPSJNNTAgNTBMNTAgMEE1MCA1MCAwIDAgMSAxMDAgNTBaIiB0cmFuc2Zvcm09InJvdGF0ZSg5MCA1MCA1MCkiIGZpbGwtb3BhY2l0eT0iMC44IiBmaWxsPSIjMjNjM2Q1Ij48L3BhdGg+PC9nPjxnIHRyYW5zZm9ybT0icm90YXRlKDI1OS45NDYgNTAgNTApIj48YW5pbWF0ZVRyYW5zZm9ybSBhdHRyaWJ1dGVOYW1lPSJ0cmFuc2Zvcm0iIHR5cGU9InJvdGF0ZSIgY2FsY01vZGU9ImxpbmVhciIgdmFsdWVzPSIwIDUwIDUwOzM2MCA1MCA1MCIga2V5VGltZXM9IjA7MSIgZHVyPSIxLjVzIiBiZWdpbj0iMHMiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIj48L2FuaW1hdGVUcmFuc2Zvcm0+PHBhdGggbmctYXR0ci1maWxsLW9wYWNpdHk9Int7Y29uZmlnLm9wYWNpdHl9fSIgbmctYXR0ci1maWxsPSJ7e2NvbmZpZy5jM319IiBkPSJNNTAgNTBMNTAgMEE1MCA1MCAwIDAgMSAxMDAgNTBaIiB0cmFuc2Zvcm09InJvdGF0ZSgxODAgNTAgNTApIiBmaWxsLW9wYWNpdHk9IjAuOCIgZmlsbD0iI2ZmZTZmNSI+PC9wYXRoPjwvZz48ZyB0cmFuc2Zvcm09InJvdGF0ZSgzMDkuOTczIDUwIDUwKSI+PGFuaW1hdGVUcmFuc2Zvcm0gYXR0cmlidXRlTmFtZT0idHJhbnNmb3JtIiB0eXBlPSJyb3RhdGUiIGNhbGNNb2RlPSJsaW5lYXIiIHZhbHVlcz0iMCA1MCA1MDszNjAgNTAgNTAiIGtleVRpbWVzPSIwOzEiIGR1cj0iM3MiIGJlZ2luPSIwcyIgcmVwZWF0Q291bnQ9ImluZGVmaW5pdGUiPjwvYW5pbWF0ZVRyYW5zZm9ybT48cGF0aCBuZy1hdHRyLWZpbGwtb3BhY2l0eT0ie3tjb25maWcub3BhY2l0eX19IiBuZy1hdHRyLWZpbGw9Int7Y29uZmlnLmM0fX0iIGQ9Ik01MCA1MEw1MCAwQTUwIDUwIDAgMCAxIDEwMCA1MFoiIHRyYW5zZm9ybT0icm90YXRlKDI3MCA1MCA1MCkiIGZpbGwtb3BhY2l0eT0iMC44IiBmaWxsPSJyZ2JhKDk5LjYwNzg0MzEzNzI1NDklLDQ0LjMxMzcyNTQ5MDE5NjA4JSw1NS4yOTQxMTc2NDcwNTg4MiUsMC43NjgpIj48L3BhdGg+PC9nPjwvZz48L2c+PC9nPjwvc3ZnPg=="            
	});
	/* Add Lazy Load End */

	// SCROLL TO TOP 
	jQuery("#top").hide();	
	jQuery(function toTop() {
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('#top').fadeIn();
			} else {
				jQuery('#top').fadeOut();
			}
		});

		jQuery('#top').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});	

	jQuery(window).on("resize", function() {
        stickTheHeader();
    });

    jQuery(window).scroll(function() {
        stickTheHeader();
    });       

    jQuery(window).resize(function(e){
        if(window.innerWidth < 768) {
            if(!jQuery('.three-col-listing').hasClass('slick-initialized')){
                mobileOnlySlider();
            }
        }else{
            if(jQuery('.three-col-listing').hasClass('slick-initialized')){
                jQuery('.three-col-listing').slick('unslick');
            }
        }
    });


	
})( jQuery );

// Header Sticky js starts ends here
function stickTheHeader() {
    var myHeight = jQuery(".header-main").outerHeight();
    if (jQuery(window).scrollTop() > jQuery(".header-main").outerHeight()) {
        jQuery(".header-main").addClass("fixed");
    } else {
        jQuery(".header-main").removeClass("fixed");
    }
}
function mobileOnlySlider() {
    jQuery('.three-col-listing').slick({
        dots: false,
        prevArrow: false,
        nextArrow: false,
        infinite: true,
        speed: 500,
        slidesToShow: 2,
        centerMode: false,
        variableWidth: true,
        adaptiveHeight: true
    });
}
if(window.innerWidth < 768) {
    mobileOnlySlider();
}
// Header Sticky js ends here
    