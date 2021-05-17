$(document).ready(function() {

    $("#owl-demo").owlCarousel({
        autoPlay : 3000,
        stopOnHover : true,
        navigation:true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        loop: true,
        autoplay: true,
        autoplayTimeout: 10000,
        smartSpeed: 1000,
        singleItem : true,
        items : 1,
        autoHeight : true,
        transitionStyle:"fade"
    });

    $("#categories").owlCarousel({
        stagePadding: 50,
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
    })
    $("#categories1").owlCarousel({
        stagePadding: 50,
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
    })
    $("#categories_news").owlCarousel({
        stagePadding: 50,
        loop:true,
        margin:20,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false
            },
            900:{
                items:2,
                nav:false,
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }
    })
});
