/**
* @author: karthik
* @date: 2023/3/10
* @description:
* @version: 1.0
*//*--    Sticy nav bar js --*/
$(window).scroll(function() {
    if ($(window).scrollTop() >= 300) {
        $('#fixed_navbar').addClass('fixed-header');
    } else {
        $('#fixed_navbar').removeClass('fixed-header');

    }
});