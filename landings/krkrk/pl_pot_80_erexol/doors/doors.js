function initDoors(settings) {
    const translation = {
        source: {
            text01: "Enter the sweepstakes to win up to " + settings.discount + "% off your " + settings.product + " purchase.",
            text02: "GUESS, AFTER WHICH DOOR IT'S " + settings.discount + "% OFF",
            text03: "Fill out the form and get <span>" + settings.product + "</span> with a " + settings.discount + "% discount.",
            text04: "All you have to do is enter your name and phone number.",
            text05: "Hurry up! You still have time available:",
            text06: "Your name",
            text07: "Your phone",
            text08: "Order",
            text09:"Congratulations!",
            text10:"You can get " + settings.product + " for <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>!"
        },
        al: {
            text01: "Hyni në lotari për të fituar deri në " + settings.discount + "% ulje në blerjen tuaj " + settings.product + ".",
            text02: "MENDOJENI, PAS SE CILE DERË ËSHTË  " + settings.discount + "%  ULJE",
            text03: "Plotësoni formularin dhe merrni <span>" + settings.product + "</span> me " + settings.discount + "% zbritje.",
            text04: "Gjithçka që duhet të bëni është të shkruani emrin dhe numrin tuaj të telefonit.",
            text05: "Nxitoni! Keni ende kohë në dispozicion:",
            text06: "Emri juaj",
            text07: "Telefoni juaj",
            text08: "Urdhëroj",
            text09:"Urime!",
            text10:"Ju mund të merrni " + settings.product + " për <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>!"
        },

        cz: {
            text01: "Zapojte se do loterie a vyhrajte až " + settings.discount + "% slevu na nákup " + settings.product + ".",
            text02: "HÁDEJTE, PO KTERÝCH DVEŘÍCH JE SLEVA " + settings.discount + "%",
            text03: "Vyplňte formulář a získejte <span>" + settings.product + "</span>  s  " + settings.discount + "% slevou.",
            text04: "Vše, co musíte udělat, je zadat své jméno a telefonní číslo.",
            text05: "Pospěš si! Ještě máš čas:",
            text06: "Vaše jméno",
            text07: "Váš telefon",
            text08: "Objednávka",
            text09:"Blahopřejeme!",
            text10:"" + settings.product + " pořídíte za <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>!"
        },
        fr: {
            text01: "Participez au tirage au sort pour gagner jusqu'à " + settings.discount + "%  de réduction sur votre achat d'" + settings.product + ".",
            text02: "DEVINEZ, APRÈS QUELLE PORTE C'EST  " + settings.discount + "% DE RÉDUCTION",
            text03: "Remplissez le formulaire et obtenez  <span>" + settings.product + "</span> avec une réduction de " + settings.discount + "%.",
            text04: "Tout ce que vous avez à faire est de saisir votre nom et votre numéro de téléphone.",
            text05: "Dépêche-toi! Il vous reste encore du temps disponible :",
            text06: "Votre nom",
            text07: "Ton téléphone",
            text08: "COMMANDE",
            text09:"TOUTES NOS FÉLICITATIONS!",
            text10:"Vous pouvez vous procurer " + settings.product + " pour <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>!"
        },

        gr: {
            text01: "Δηλώστε συμμετοχή στην κλήρωση για να κερδίσετε έως και " + settings.discount + "% έκπτωση στην αγορά του " + settings.product + ".",
            text02: "ΜΑΝΤΈΨΤΕ, ΜΕΤΆ ΤΗΝ ΟΠΟΊΑ ΠΌΡΤΑ ΕΊΝΑΙ " + settings.discount + "% ΈΚΠΤΩΣΗ",
            text03: "Συμπληρώστε τη φόρμα και αποκτήστε το  <span>" + settings.product + "</span> με έκπτωση " + settings.discount + "%.",
            text04: "Το μόνο που έχετε να κάνετε είναι να εισάγετε το όνομα και τον αριθμό τηλεφώνου σας.",
            text05: "Βιαστείτε! Έχετε ακόμα διαθέσιμο χρόνο:",
            text06: "Το όνομά σας",
            text07: "Το τηλέφωνό σας",
            text08: "Παραγγελία",
            text09: "Συγχαρητήρια!",
            text10:"Μπορείτε να πάρετε το " + settings.product + " για <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>!"
        },
        hr: {
            text01: "Sudjelujte u nagradnoj igri kako biste osvojili do " + settings.discount + "% popusta na kupnju " + settings.product + ".",
            text02: "POGODITE IZA KOJIH JE VRATA SNIŽENO " + settings.discount + "%.",
            text03: "Ispunite obrazac i nabavite <span>" + settings.product + "</span> uz " + settings.discount + "% popusta.",
            text04: "Sve što trebate učiniti je unijeti svoje ime i broj telefona.",
            text05: "Požurite! Još uvijek imate slobodnog vremena:",
            text06: "Vaše ime",
            text07: "Vaš telefon",
            text08: "Narudžba",
            text09:"Čestitamo!",
            text10:"" + settings.product + " možete dobiti za <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>!"
        },
        hu: {
            text01: "Vegyél részt a sorsoláson, és nyerj akár " + settings.discount + "% kedvezményt   " + settings.product + " vásárlásodból.",
            text02: "TALÁLJON, MELYIK AJTÓ UTÁN " + settings.discount + "% KEDVEZMÉNY",
            text03: "Töltse ki az űrlapot, és szerezze be az <span>" + settings.product + "</span> " + settings.discount + "% kedvezménnyel.",
            text04: "Nincs más dolgod, mint megadni a neved és a telefonszámod.",
            text05: "Siess! Még van szabad időd:",
            text06: "Név",
            text07: "Telefonszám",
            text08: "Rendelés",
            text09:"Gratulálunk!",
            text10: "Az " + settings.product + "-t  <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>-ért kaphatod meg!"

        },
        lv: {
            text01: "Ievadiet totalizatoru, lai vinnētu līdz pat  " + settings.discount + "% atlaidi " + settings.product + "  iegādei.",
            text02: "UZMINĒT, PĒC KURĀM DURVĪM TAS IR " + settings.discount + "% ATLAIDE",
            text03: "Aizpildiet formu un saņemiet <span>" + settings.product + "</span> ar " + settings.discount + "% atlaidi.",
            text04: "Viss, kas jums jādara, ir jāievada savs vārds, uzvārds un tālruņa numurs.",
            text05: "Pasteidzieties! Jums vēl ir pieejams laiks:",
            text06: "Jūsu vārds",
            text07: "Jūsu tālrunis",
            text08: "Pasūtīt",
            text09: "Apsveicam!",
            text10:"Jūs varat iegādāties " + settings.product + " par <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>!"

        },
        pl: {

            text01: "Weź udział w loterii, aby wygrać do  " + settings.discount + "% zniżki na zakup " + settings.product + ".",
            text02: "ZGADNIJCIE, PO KTÓRYCH DRZWIACH " + settings.discount + "% TANIEJ ",
            text03: "Wypełnij formularz i odbierz <span>" + settings.product + "</span> z   " + settings.discount + "% rabatem.",
            text04: "Wystarczy podać swoje imię i nazwisko oraz numer telefonu.",
            text05: "Pospiesz się! Masz jeszcze czas:",
            text06: "Twoje imię",
            text07: "Twój telefon",
            text08: "Zamów",
            text09:"Gratulacje!",
            text10:"" + settings.product + " kupisz już za  <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>!"
        },
        ro: {
            text01: "Participați la tombolă pentru a câștiga până la  " + settings.discount + "% reducere la achiziționarear " + settings.product + ".",
            text02: "GHICIȚI, DUPĂ CARE UȘĂ ESTE   " + settings.discount + "% REDUCERE",
            text03: "Completați formularul și obțineți <span>" + settings.product + "</span> cu o reducere de " + settings.discount + "%.",
            text04: "Tot ce trebuie să faceți este să vă introduceți numele și numărul de telefon.",
            text05: "Grăbiți-vă! Mai aveți timp disponibil:",
            text06: "Introduceți numele",
            text07: "Introduceți numărul",
            text08: "Obțineți",
            text09:"Felicitări!",
            text10: "Puteți obține " + settings.product + " la <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>!"

        },
        rs: {
            text01: " Učestvujte u nagradnoj igri i osvojite do " + settings.discount + "% popusta na kupovinu " + settings.product + ".",
            text02: " POGODI, NAKON KOJIH VRATA JE " + settings.discount + "% POPUSTA",
            text03: "Popunite formular i nabavite <span>" + settings.product + "</span> sa  " + settings.discount + "% popusta. ",
            text04: "Sve što treba da uradite je da unesete svoje ime i broj telefona.",
            text05: "Požurite! Još imate slobodnog vremena:",
            text06: "Vaše ime",
            text07: "Vaš telefon",
            text08: "Narudžba",
            text09:"Čestitamo!",
            text10:"" + settings.product + "  možete dobiti za  <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>!"
        },
        si: {
            text01: " Sodelujte v nagradni igri in osvojite do " + settings.discount + "% popusta pri nakupu " + settings.product + ".",
            text02: " UGANETE, ZA KATERIMI VRATI JE  " + settings.discount + "% CENEJE",
            text03: "Izpolnite obrazec in si zagotovite  <span>" + settings.product + "</span>  s " + settings.discount + "% popustom. ",
            text04: "Vse kar morate storiti je, da vnesete svoje ime in telefonsko številko.",
            text05: "Pohiti! Še vedno imaš čas:",
            text06: "Vaše ime",
            text07: "Vaš telefon",
            text08: "Naročilo",
            text09:"Čestitamo!",
            text10:"" + settings.product + " dobite že za <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>!"
        },
        sk: {
            text01: "Zapojte sa do zlosovania a vyhrajte až " + settings.discount + "% zľavu na nákup " + settings.product + ".",
            text02: "HÁDAJTE, PO KTORÝCH DVERÁCH JE " + settings.discount + "% ZĽAVA",
            text03: "Vyplňte formulár a získajte <span>" + settings.product + "</span> s " + settings.discount + "% zľavou.",
            text04: "Jediné, čo musíte urobiť, je zadať svoje meno a telefónne číslo.",
            text05: "Ponáhľaj sa! Ešte máte čas:",
            text06: "Meno",
            text07: "Telefónne číslo",
            text08: "Získajte",
            text09:"Gratulujem!",
            text10:"" + settings.product + " zoženiete za <span class='danger-text'>" + settings.priceMain + " " + settings.currencyMain + "</span>!"

        },

    }


    lang=settings.lang;

    var langTranslation='';
    if(translation[lang] && Object.keys(translation[lang]).length > 0){
        langTranslation=translation[lang];
    }
    else{
        langTranslation=translation["source"];
    }
    if(settings.discount!='100'){
       var  priceOld=parseInt(settings.priceMain*100/(100-settings.discount));
    }else {
        var priceOld=settings.priceOld;
    }


var doors_code='<div id="form-block" style="margin-bottom: 50px;">\n' +
'<div id="goToForm"></div>\n' +
'<h3 class="door__head">'+ langTranslation['text01'] +'</h3>\n' +
'<div class="door__wrapper">\n' +
'<h2 class="door__title" style="margin-bottom: 20px;">'+ langTranslation['text02'] +'</h2>\n' +
'<div class="door__container">\n' +
'<div class="door_box">\n' +
'<div class="hi">\n' +
'<p class="door__sales " id="door__sales2"></p>\n' +
'</div>\n' +
'<div class="door" id="door__2"></div>\n' +
'</div>\n' +
'<div class="door_box">\n' +
'<div class="hi">\n' +
'<p class="door__sales " id="door__sales1"></p>\n' +
'</div>\n' +
'<div class="door" id="door__1"></div>\n' +
'</div>\n' +
'<div class="door_box">\n' +
'<div class="hi">\n' +
'<p class="door__sales " id="door__sales3"></p>\n' +
'</div>\n' +
'<div class="door" id="door__3"></div>\n' +
'</div>\n' +
'</div>\n' +
'</div>\n' +
'<div id="order">\n' +
'\n' +
'<div class="order-form reset-styles">\n' +
'<div class="order-form-wrapper">\n' +
'<div class="order-form-header">\n' +
'<div class="order-form-product-image-section">\n' +
'<div class="order-form-product-image-wrapper">\n' +
'<img alt="" class="order-form-product-image" height="400" loading="lazy" src="prod.png" width="400">\n' +
'</div>\n' +
'<div class="product-banner1">\n' +
'<div class="product-banner-text1">\n' +
'<span style="text-decoration: line-through">   ' + priceOld + ' ' + settings.currencyMain + ' </span> <br>\n' +
'<span> ' + settings.priceMain + ' ' + settings.currencyMain + ' </span>\n' +
'</div>\n' +
'</div>\n' +
'\n' +
'</div>\n' +
'</div>\n' +
'<div class="order-form-information">\n' +
'<div class="order-form-information-text">'+ langTranslation['text03'] +'\n' +
'</div>\n' +
'\n' +
'<div class="deadline1"> '+ langTranslation['text04'] +'</div>\n' +
'\n' +
'\n' +
'</div>\n' +
'<div class="order-form-deadline">\n' +
''+ langTranslation['text05'] +'\n' +
'<div class="order-form-timer">\n' +
'<span class="time_remains timer-minutes" id="min"></span> :\n' +
'<span class="time_remains timer-seconds" id="sec"></span>\n' +
'</div>\n' +
'</div>\n' +
'<div class="order-form-body">\n' +
'<form action="getform.php" onsubmit="gtag_report_conversion();" autocomplete="off" id="w0" method="post">\n' +
'<input type="hidden" name="utm_source" value="'+sabss+'"><input type="hidden" name="utm_campaign" value="'+usr+'">\n' +
'<div class="order-form-field-wrapper field-conversion-username required">\n' +
'<label class="order-form-field-label" for="conversion-username">'+ langTranslation['text06'] +'</label>\n' +
'<input aria-required="true" autocomplete="off" class="order-form-field order-form-field-user-name" id="conversion-username" minlength="2" name="name" placeholder="'+ langTranslation['text06'] +'" required="" type="text">\n' +
'<div class="help-block"></div>\n' +
'</div>\n' +
'<div class="order-form-field-wrapper field-conversion-userphonenumber required">\n' +
'<label class="order-form-field-label" for="conversion-userphonenumber">'+ langTranslation['text07'] +'</label>\n' +
'<input aria-required="true" autocomplete="off" class="order-form-field order-form-field-user-phone" id="conversion-userphonenumber" maxlength="18" minlength="8" name="phone" placeholder="'+ langTranslation['text07'] +'" required="" type="tel">\n' +
'<div class="help-block"></div>\n' +
'</div>\n' +
'<button class="order-form-submit-button" type="submit">'+ langTranslation['text08'] +'</button>\n' +
'</form>\n' +
'<div class="order-form-sec"></div>\n' +
'</div>\n' +
'</div>\n' +
'</div>\n' +
'<div class="spin-result-wrapper">\n' +
'<div class="pop-up-window">\n' +
'<div class="close-popup"></div>\n' +
'<h1 class="popup-title">'+ langTranslation['text09'] +'</h1>\n' +
'<p class="ruletka-p pop-up-text">'+ langTranslation['text10'] +'</p>\n' +
'<a class="pop-up-button goScrollToForm">OK</a>\n' +
'</div>\n' +
'</div>\n' +
'</div>\n' +
'</div>\n' +
'<style>@import url("doors/doors.css")</style>';


$('.init-doors').append(doors_code);




let doors = document.querySelectorAll(".door");
let doorSales = document.querySelectorAll(".door__sales");
let doorWrapper = document.querySelector(".door__wrapper");
let spinResultWrapper = document.querySelector(".spin-result-wrapper");
let orderBlock = document.querySelector("#order");
let door1 = document.getElementById("door__1");
let door2 = document.getElementById("door__2");
let door3 = document.getElementById("door__3");
let doorSale1 = document.getElementById("door__sales1");
let doorSale2 = document.getElementById("door__sales2");
let doorSale3 = document.getElementById("door__sales3");
let discount = settings.discount+"%";
doors.forEach(function (door) {
    door.addEventListener("click", openDoor);
});
var closePopup = document.querySelector(".close-popup");
$(".pop-up-button").click(function (a) {
    $(".spin-result-wrapper").fadeOut();
    a.preventDefault();
    $(".spin-result-wrapper").fadeOut();
    var b = $("#goToForm").offset().top;
    $("body,html").animate({scrollTop: b}, 400);
});
$(".close-popup, .pop-up-button").click(function (a) {
    $(".spin-result-wrapper").fadeOut();
    a.preventDefault();
    $(".spin-result-wrapper").fadeOut();
});

function openDoor(e) {
    e.currentTarget.classList.add("open");
    setTimeout(function () {
        spinResultWrapper.style.display = "block";
        setTimeout(function () {
            orderBlock.style.display = "block";
            doorWrapper.style.display = "none";
            document.querySelector(".door__head").style.display = "none";
            start_timer && start_timer();
        }, 3500);
    }, 1500);
    doorSales.forEach(function (sale) {
        if (door1.classList.contains("open")) {
            doorSale1.innerHTML = discount;
            doorSale2.innerHTML = discount === "50%" ? "25%" : "50%";
            doorSale3.innerHTML = discount === "50%" ? "10%" : "25%";
        } else if (door2.classList.contains("open")) {
            doorSale2.innerHTML = discount;
            doorSale1.innerHTML = discount === "50%" ? "10%" : "25%";
            doorSale3.innerHTML = discount === "50%" ? "25%" : "50%";
        } else if (door3.classList.contains("open")) {
            doorSale1.innerHTML = discount === "50%" ? "25%" : "50%";
            doorSale3.innerHTML = discount;
            doorSale2.innerHTML = discount === "50%" ? "10%" : "25%";
        }
    });
    for (let i = 0; i < doors.length; i++) {
        if (!doors[i].classList.contains("open")) {
            setTimeout(function () {
                doors[i].classList.add("open");
            }, 2500);
        }
    }
    for (let j = 0; j < doors.length; j++) {
        doors[j].removeEventListener("click", openDoor);
    }
}

const PopUpCss = document.createElement("style");
PopUpCss.innerHTML = ``;
document.head.appendChild(PopUpCss);
var time = 600;
var intr;

function start_timer() {
    intr = setInterval(tick, 1000);
}

function tick() {
    time = time - 1;
    var mins = Math.floor(time / 60);
    var secs = time - mins * 60;
    if (mins == 0 && secs == 0) {
        clearInterval(intr);
    }
    secs = secs >= 10 ? secs : "0" + secs;
    mins = mins >= 10 ? mins : "0" + mins;
    $("#min").html(mins);
    $("#sec").html(secs);
}

    document.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", function (e) {
        e.preventDefault();
        scroll({
            top: document.querySelector("#goToForm").offsetTop,
            behavior: "smooth",
        });
    });
});

}