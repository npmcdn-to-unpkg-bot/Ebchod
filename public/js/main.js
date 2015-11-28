/* 
 * onLoad
 */

$(document).ready(function() {
    $(window).load(function() {
        $('.grid').masonry({
            itemSelector: '.grid-item'
        }).masonry('reloadItems');
    });

    $(".toggle-filter").click(function() {
    	$(".filter").fadeToggle();
        clearFilter();
    });

    $('.img-header').imageScroll({
        image: null,
        imageAttribute: 'image',
        container: $('.header'),
        windowObject: $(window),
        speed: 0.2,
        coverRatio: 1,
        holderClass: 'img-holder',
        holderMinHeight: 1266,
        holderMaxHeight: null,
        extraHeight: 0,
        mediaWidth: 1600,
        mediaHeight: 1266,
        parallax: true,
        touch: false
    });
});