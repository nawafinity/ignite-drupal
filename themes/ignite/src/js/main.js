// Owal
require('owl.carousel')

// AOS
window.AOS = require('aos')

window.Swal = require('sweetalert2/dist/sweetalert2')
// Load Bootstrap JS
import bootstrap from 'bootstrap'


// Globals
window.$ = window.jQuery = $;

require('./awsbg')

// App code
console.log(`Hello ${process.env.HELLO}`);


$(document).ready(function () {
    $("#loader").fadeOut('slow').hide()
    $("#app").show();

    // Sponsor
    const isRTL = $("html").attr('dir') === 'rtl'
    $('#sponsors .owl-carousel').owlCarousel({
        loop: true,
        rtl: isRTL,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });


    $("button[data-role='swipe']").on('click', function(e) {
        e.preventDefault()
        $(this).closest('.card').toggleClass('card-flipped')
    })

    $("#events .list-item .card-front").on('click', function(e) {
        e.preventDefault();
        $(this).closest('.card').toggleClass('card-flipped')
    })
    AOS.init();
})



