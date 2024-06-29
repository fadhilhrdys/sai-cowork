// side menu function
$('.open-sidemenu').click(function() {
    $('.side-menu-bar').show();
})
$('.close-sidemenu').click(function() {
    $('.side-menu-bar').hide();
})

// slider logo partners and tenant
if (window.innerWidth < 600) {
    $(document).ready(function(){
        $('.logo-slide').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
        $('.galleries-mobile').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
        });
    });
} 
  