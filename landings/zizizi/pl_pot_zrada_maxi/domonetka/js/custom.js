$(document).ready(function() {

    $(document).on('ready', function() {
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    });

    /* Smooth Scroll */
    $(function() {
        $('a').click(function() {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 79
                }, 850);
                return false;
            }
        });
    });



    /* Get time */
    var dt = new Date(), //Date
        time = dt.getDate() + "/" + (dt.getMonth() + 1) + "/" + dt.getFullYear() + " " + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds(),
        year = dt.getFullYear(),
        month = (dt.getMonth() + 1),
        day = dt.getDate(),
        hour = dt.getHours(),
        min = dt.getMinutes(),
        sec = dt.getSeconds();
    //console.log('дата и время: ' + time);

    /* Countdown */
    $("#countdown_dashboard").countDown({ //Count
        targetDate: {
            'day': day,
            'month': month,
            'year': year,
            'hour': 23,
            'min': 59,
            'sec': 0
        }

    });

    $("#countdown_dashboard2").countDown({ //Count
        targetDate: {
            'day': day,
            'month': month,
            'year': year,
            'hour': 23,
            'min': 59,
            'sec': 0
        }
    });

    /* Add class headers */
    $(window).scroll(function() {
        if ($(this).scrollTop() > 30) {
            $('.header').addClass('scroll');
        } else {
            $('.header').removeClass('scroll');
        }
    });

    /* Show-hide responses */
    $(".faq").click(function() {
        $(this).find(".show-this").toggle('slow');
        $(this).toggleClass('active');
    });


});