

$('#navbarSideButton').on('click', function () {
    if ($('.modal-fixed').hasClass('d-none')) {
        $('#navbarSide').addClass('reveal')
        $('.modal-fixed').removeClass('d-none');
        $('#navbarSideButton .fa-bars').addClass('d-none');
        $('#navbarSideButton .fa-close').removeClass('d-none');
    }
    else {
        // console.log('asdas');
    }
});
$('.modal-fixed').on('click', function () {
    $('#navbarSide').removeClass('reveal')
    $('.modal-fixed').addClass('d-none');
    $('#navbarSideButton .fa-bars').removeClass('d-none');
    $('#navbarSideButton .fa-close').addClass('d-none');
});
/* image slider */
var owls = $('.image_slide').owlCarousel({
    loop: true,
    items: 1,
    nav: false,
    slideSpeed: 300,
    dots: true,
    autoplay: true
})
/* image slider */
var owls = $('.image_slide3').owlCarousel({
    loop: true,
    items: 1,
    nav: false,
    slideSpeed: 300,
    dots: true,
    autoplay: true
})
var owls = $('.image_slide2').owlCarousel({
    loop: true,
    items: 1,
    nav: false,
    slideSpeed: 100,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    dots: true,
    autoplay: true    
})
var owls = $('.youtubeslider').owlCarousel({
    loop: true,
    nav: true,
    slideSpeed: 300,
    dots: false,    
    mouseDrag: true,
    autoplay: false,
    responsive: {
        0: {
            items: 1,
        },
        550: {
            items: 2,
        },
        700: {
            items: 5,
        },
        1600: {
            items: 5,
        }
    }
})

/*video pause and play */
function playPause() {
    if (myVideo.paused)
        myVideo.play();
    else
        myVideo.pause();
}

$(document).ready(function () {
    var path = window.location.pathname;
    var url = path.substring(path.lastIndexOf('/') + 1);
    $(window).scroll(function () {
        var height = $(window).scrollTop();
        if (height > 100) {
            // $(".nav_bar").addClass("fix-bg");      
            $(".header").addClass("header-fixed");
            $(".sub-hea").addClass("d-none");
        } else {
            $(".header").removeClass("header-fixed");
            $(".sub-hea").removeClass("d-none");
            // $(".nav_bar").removeClass("fix-bg");                                           
        }
    });
    $(".read_more").click(function() {        
    $(this).prev().children().toggleClass("open");
    if ($(this).prev().children().hasClass("open")) {
        $(this).text("READ LESS")
        $(this).prev().children().addClass("hght-100")
    } else {
        $(this).text("READ MORE")
        $(this).prev().children().removeClass("hght-100")
    }
   })

});


$(document).ready(function () {
    var path = window.location.pathname;
    var url = path.substring(path.lastIndexOf('/') + 1);
    console.log(url)
    if (url == 'contact_us'/*|| url == 'gallery'*/) {
        $(".navbar-nav  ").addClass("bg-black");
        // $(".nav-link").removeClass("text-white");
        $(".nav-link").addClass("font2em");
    }
    else {
        $(".navbar-nav  ").removeClass("bg-black");
    }
    $(".lightgallery").lightGallery();
});
/*contact us page remove logo*/
$(document).ready(function () {
    var path = window.location.pathname;
    var url = path.substring(path.lastIndexOf('/') + 1);
    if (url == 'contact_us') {
        $(".new-contact").addClass("d-none")
    }
    else {
        // $('.new-contact').removeClass("d-none")
        $(".new-contact").removeClass("d-none")
    }
    $(function () {
        $('#select-name').selectize({
            // plugins: ['remove_button']
        });
        $('#select-name1').selectize({
            // plugins: ['remove_button']
        });
        $('#select-name2').selectize({
            // plugins: ['remove_button']
        });
        $("#select-name")[0].selectize.clear();
        $("#select-name1")[0].selectize.clear();
        $("#select-name2")[0].selectize.clear();
    });

    // $(".panel-collapse").on("show.bs.collapse", function () {
    //     (".panel-heading").addClass("active");
    // });

    // $(".panel-collapse").on("hide.bs.collapse", function () {
    //     (".panel-heading").removeClass("active");
    // });
    $('#accordion .panel .panel-heading a').on('click', function () {
        setTimeout(() => {
            // console.log($(this).next().hasClass("show"))
            if ($(".panel-collapse").hasClass("show")) {
                $(this).addClass("rot-kitchen");
            } else {
                $(this).removeClass("rot-kitchen");
            }
        }, 400);
    });


});

/*header nav click active section */
$(".nav-item [data-target]").on('click', function () {
    var target_ = $(this).attr("data-target");
    var targetSelector = $(target_);
    // console.log(targetSelector)
    if (targetSelector.length) {
        $("html, body").animate({ scrollTop: targetSelector.offset().top }, 1000);
    }
})




/*tab js */
const reel = document.querySelector('.tab_reel');
const tab1 = document.querySelector('.tab1');
const tab2 = document.querySelector('.tab2');
const panel1 = document.querySelector('.tab_panel1');
const panel2 = document.querySelector('.tab_panel2');

function slideLeft(e) {
    tab2.classList.remove('active');
    this.classList.add('active');
    reel.style.transform = "translateX(0%)";
}

function slideRight(e) {
    tab1.classList.remove('active');
    this.classList.add('active');
    reel.style.transform = "translateX(-50%)";
}

tab1.addEventListener('click', slideLeft);
tab2.addEventListener('click', slideRight);

/*header click scroll to active section */
function scrollToAnyPoint(navItem) {
    var getAttr;
    $('.navbar-nav li a').click(function (e) {
        e.preventDefault();
        getAttr = $(this).attr('href');
        var toSection = $(getAttr).offset().top - 1000;
        $("html, body").animate({ scrollTop: toSection }, 1000)
    });
}



$(document).ready(() => {
    $(".lightgallery").lightGallery({
        pager: true
    });
});



