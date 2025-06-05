"use strict";
$(document).ready(function () {


    $(".date").each(function () {
        var d = new Date();
        d.setDate(d.getDate() - $(this).data("num"));
        $(this).text(d.toLocaleString().split(',')[0])
    })
    var date = new Date();
    var dd = new Date(date.getTime() - (86400 * 1000 * 3));
    var monthA = 'Styczeń, luty, marzec, kwiecień, maj, czerwiec, lipiec, sierpień, wrzesień, październik, listopad, grudzień'.split(',');
    var m1 = new Date(date.getTime()).toLocaleString("cs", {month: 'long',})
    $('#m1').text(m1)
    $('#m2').text(monthA[dd.getMonth() + 1])
});
