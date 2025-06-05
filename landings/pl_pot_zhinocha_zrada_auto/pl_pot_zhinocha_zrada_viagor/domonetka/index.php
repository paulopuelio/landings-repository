<!DOCTYPE html><html lang="pl"><head>
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" href="favicon.ico">


    <style>
        .hide, .flag-dropdown {
            display: none;
        }

        /* обязательно */
        .error-box { /* CSS ошибки */
            color: #fff;
            background-color: #DE5042;
            border-radius: 5px;
            text-align: center;
            width: 100%;
            font-size: 13px;
            line-height: 20px;

            margin: 3px 0 0 !important;
            z-index: 100;
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Viagor Power</title>
    <link href="css/all.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Roboto:700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700&amp;subset=cyrillic,latin" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
    <!-- INTH_SNIPPET_TOP -->

    <script>
        let awtag = '';
        let eventid = '';
        let conversionId = '';

        let params = (new URL(document.location)).searchParams;
        let gParam = params.get('g');
        let eParam = params.get('e');

        if (gParam && eParam) {
            // Безпечне використання параметрів
            awtag = 'AW-' + gParam;
            eventid = '/' + eParam;
            conversionId = awtag + eventid;

            var script = document.createElement("script");
            script.type = "text/javascript";
            script.async = true;
            script.src = "https://www.googletagmanager.com/gtag/js?id=" + awtag;
            document.getElementsByTagName('head')[0].appendChild(script);

            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', awtag);
        }
    </script>
    <script>
        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };

            if (conversionId) {
                gtag('event', 'conversion', {
                    'send_to': conversionId,
                    'event_callback': callback
                });
                return false;
            } else {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
                return false;
            }
        }
    </script>

</head>

<body data-lang="IT">

<div class="container cf s__main">
    <header class="header-main">
        <div class="container">
            <div class="logo">
                <div class="logo__link">Viagor Power</div>
            </div>
            <div class="product">
                <h1 class="h1">Jesteście gotowi <b style="color:#fff;">stać się </b> <b>zwierzęciem?</b></h1>
                <div class="two-columns">
                    <div class="col-left">
                        <ul class="product__list">
                            <li class="product__list-item"><i class="icon-heart"></i><span><strong> Intensywne życie </strong>seksualne</span>
                            </li>
                            <li class="product__list-item"><i class="icon-clock-o"></i><span><strong>Długotrwały </strong>związek seksualny </span>
                            </li>
                            <li class="product__list-item"><i class="icon-rocket"></i><span><strong>Gigantyczna </strong> erekcja</span></li>
                            <li class="product__list-item"><i class="icon-female"></i><span><strong>Fantastyczny </strong> orgazm</span></li>
                        </ul>
                        <div class="order">
                            <div class="order__price"><span class="order__price-head">Tylko dzisiaj </span><span class="order__price-money"><span class="priceAndLabelForLandingInfoApi">147</span><strong>pln</strong></span></div>
                            <button class="order__btn pre_toform"><span>ZAMÓWIĆ</span></button>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="product__img"><img alt="" src="images/product.png"></div>
                        <div class="product__garant">
                            <div class="product__garant-result">Gwarancja <br>efektywności</div>
                            <div class="product__garant-substance"><strong class="js-letter">Zawiera </strong><span>grzyb Phallus</span>
                            </div>
                            <div class="product__garant-txt">
                                <span>Częściej<span><br>Dłużej<br><span>Mocniej</span></span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="doctor-container">
                <div class="two-columns">
                    <div class="col-left">
                        <div class="doctor"><img alt="" class="doctor__img" src="images/doctor.png">
                            <div class="doctor__txt"><span class="doctor__txt-name">Max Hirsch </span>
                                <p class="doctor__txt-desc">Specjalista w przywracaniu zdrowia męskiego układu
                                    moczowo-płciowego
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-right">
                        <div class="comment">
                            <h3>Grzyb Phallus i męska potencja</h3>
                            <p class="comment__txt"><strong>Grzyb Phallus </strong> – (naukowa nazwa Phallus Impudicus)
                                - to naturalny "eliksir męskiej siły"</p>
                            <p class="comment__txt"><strong>Phallus Impudicus</strong> jest legendarnym grzybem, który
                                od wieków był wykorzystywany do przywracania i wzmacniania męskiej potęgi (potencji i
                                erekcji) w Tybecie i na Bliskim Wschodzie. Dzięki regularnemu stosowaniu grzybów Phallus
                                Impudicus, tybetańscy i orientalni mężczyźni zawsze byli znani ze swojego silnego
                                seksualnego temperamentu i wytrzymałości w łóżku.</p>
                            <p class="comment__txt">Dzisiaj "eliksir męskiej potęgi" oparty na grzybie Phallus Impudicus
                                zyskał ogromną popularność w Europie i Stanach Zjednoczonych. W Polsce wielu mężczyzn
                                również używa Viagor Power, zauważając poprawę erekcji i jakość życia seksualnego</p>
                            <div class="comment__result">
                                <p><strong>Męskie problemy:</strong> zła erekcja, słabe pobudzenie, przedwczesny
                                    wytrysk.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="people-container">
                    <div class="col-left">
                        <div class="people__txt">1 na 10 osób w wieku<br> <strong>18 i 30 lat</strong></div>
                        <img alt="" class="people__img" src="images/people.png">
                    </div>
                    <div class="col-center">
                        <p class="people__col"><span class="people__col-txt">Częściej <br>Dłużej<br>Mocniej</span></p>
                    </div>
                    <div class="col-right">
                        <div class="people__txt">5 na 10 osób w wieku <br> <strong>od 30 do 70 lat </strong> żyje z
                            zaburzeniami erekcji.
                        </div>
                        <img alt="" class="people__img" src="images/people-2.png">
                    </div>
                </div>
            </div>
            <div class="work-container">
                <div class="col-left">
                    <div class="work__up">
                        <div class="work__up-before">DO</div>
                    </div>
                    <div class="work__down">
                        <div class="work__down-after">PO</div>
                    </div>
                </div>
                <div class="col-right">
                    <div class="h2"> Jak działa <span>Viagor Power</span></div>
                    <p class="work__txt">
                        Viagor Power to skuteczna formuła naukowa z wyciągiem Phallus Impudicus, wzbogacona o mikroelementy.
                        Absolutnie bezpieczny i skuteczny środek dla mężczyzn!
                    </p>
                    <ul class="work__list">
                        <li class="work__list-item"><span class="work__list-check"><i class="icon-check"></i></span>
                            <p class="work__list-txt"><span class="work__list-head">Zwiększa rozmiar</span> – WIELKI
                                gruby CZŁONEK
                            </p>
                        </li>
                        <li class="work__list-item"><span class="work__list-check"><i class="icon-check"></i></span>
                            <p class="work__list-txt"><span class="work__list-head">Czyni członek twardym</span> –
                                GIGANTYCZNA EREKCJA
                            </p>
                        </li>
                        <li class="work__list-item"><span class="work__list-check"><i class="icon-check"></i></span>
                            <p class="work__list-txt"><span class="work__list-head">Daje przyjemność</span> – SILNE
                                ORGAZMY
                            </p>
                        </li>
                        <li class="work__list-item"><span class="work__list-check"><i class="icon-check"></i></span>
                            <p class="work__list-txt"><span class="work__list-head">Ponad 1 milion mężczyzn</span> -
                                upewnili się już w tym
                            </p>
                        </li>
                    </ul>
                    <img alt="" class="work__img" src="images/product.png">
                    <div class="work__circle"><span class="work__circle-head js-head"></span><span class="work__circle-bottom js-bottom">2 razy <br>w dzień</span></div>
                </div>
            </div>
            <div class="result-container">
                <div class="h2">Wynik nie zostanie niezauważony</div>
                <ul class="result__list">
                    <li class="result__list-item"><i class="icon-child"></i>
                        <p class="result__list-txt"><span class="result__list-head">Osiągniesz szczyt przyjemności!
 </span>Seks będzie trwał dłużej z silniejszym orgazmem</p>
                    </li>
                    <li class="result__list-item"><i class="icon-smile-o"></i>
                        <p class="result__list-txt"><span class="result__list-head">Twój partner będzie zadowolony!
                </span>Możesz z łatwością doprowadzić go do orgazmu kilka razy
                        </p>
                    </li>
                    <li class="result__list-item"><i class="icon-thumbs-up"></i>
                        <p class="result__list-txt"><span class="result__list-head">100% gotowości!</span>W dowolnym
                            czasie i miejscu zawsze będziesz gotowy na seks!
                        </p>
                    </li>
                </ul>
                <div class="order">
                    <p class="order__txt">ZWIĘKSZ NAMIĘTNOŚĆ! <span>OTRZYMASZ MOC SUPER - MĘŻCZYZNY!</span></p>
                    <button class="order__btn order__btn1 pre_toform"><span>ZAMÓWIĆ</span></button>
                </div>
            </div>
            <div class="comments-container">
                <h3 class="comments__title"><i class="facebook"></i><span>Prawdziwi ludzie - prawdziwe wyniki </span>
                </h3>
                <div class="comments__item">
                    <div class="comments__ava"><img alt="" class="comments__img" src="images/3a.jpg"></div>
                    <div class="comments__box"><a class="comments__name" href="#">Darek Gornej</a>
                        <div class="comments__txt">
                            Wcześniej miałem problem: nie mogłem uprawiać seksu dłużej niż 5 minut, ponieważ szybko
                            kończyłem. Moja dziewczyna dała mi znać, że muszę coś z tym zrobić. Powiedziała, że między
                            nią i byłym chłopakiem seks trwał godzinę lub dłużej. Na początku nie wierzyłem, ale teraz z
                            CASANOVĄ mogę uprawiać seks przez 2-3 godziny z rzędu. Jestem po prostu szczęśliwy, że moja
                            dziewczyna regularnie osiąga orgazm. Przyznała mi, że wcześniej nie doznała nic podobnego!
                        </div>
                        <div class="comments__control"><span class="comments__date">Wczoraj o 11:33  </span><a class="comments__comm" href="#">Odpowiedzieć </a><a class="link comments__fav" href="#"><span>Lubię to</span><i class="icon-heart"></i><strong>155</strong></a></div>
                    </div>
                </div>
                <div class="comments__item">
                    <div class="comments__ava"><img alt="" class="comments__img" src="images/2a.jpg"></div>
                    <div class="comments__box"><a class="comments__name" href="#">Marek Koryta</a>
                        <div class="comments__txt">
                            Viagor Power to coś niesamowitego. Mam kontakty seksualne odkąd skończyłem 16 lat i myślałem, że
                            nic nie może zaskoczyć mnie w seksie. Ale myliłem się. Jak kamień pionowy i potężne orgazmy
                            z fontanną spermy! Każdej nocy uprawiam seks 3 lub 4 razy. Dziewczyny są szczęśliwe i mówią,
                            że mają najlepszy seks - ze mną. I wiesz, że dostarczenie orgazmu kobiecie nie jest takie
                            proste i nie każdy jest w stanie tego zrobić. Ale dzięki Viagor Power możesz dać jej nie jedną,
                            ale wiele orgazmów na noc!
                        </div>
                        <div class="comments__control"><span class="comments__date">Wczoraj o  17:26 </span><a class="comments__comm" href="#">Odpowiedzieć </a><a class="link comments__fav" href="#"><span>Lubię to</span><i class="icon-heart"></i><strong>348</strong></a></div>
                    </div>
                </div>
                <div class="comments__item">
                    <div class="comments__ava"><img alt="" class="comments__img" src="images/1a.jpg"></div>
                    <div class="comments__box"><a class="comments__name" href="#">Damian Tyrka</a>
                        <div class="comments__txt">
                            Po 50 latach członek traci pewność siebie i często zawodzi w najmniej odpowiedniej chwili.
                            Mam piękną młodą żonę, dobrze zarabiam, ale ... Miałem słabą erekcję i nie mogłem zadowolić
                            żony. O kroplach Viagor Power Przeczytałem na internetowym forum mężczyzn natychmiast
                            postanowiłem zamówić. Nigdy nie doświadczyłem takiej przyjemności z seksu jak teraz! To
                            prawdziwa ekstaza! Mój członek już mnie nie zawodzi. Ponadto mogę uprawiać seks przez ponad
                            godzinę i dostarczyć mojej żonie DZIKIE orgazmY!
                        </div>
                        <div class="comments__control"><span class="comments__date">Wczoraj o 22:18 </span><a class="comments__comm" href="#">Odpowiedzieć </a><a class="link comments__fav" href="#"><span>Lubię to</span><i class="icon-heart"></i><strong>233</strong></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <div class="two-columns">
                <div class="col-left"><h2 class="h2 text-center">Kupić <span>Viagor Power</span></h2>
                    <div class="output__num"><img alt="" class="output__img" src="images/product.png" width="250">
                        <div class="output__num-row"><span class="output__num-head"><strong>Tylko dzisiaj</strong></span><span class="output__num-text"></span></div>
                        <div class="output__num-row"><span class="output__txt"><s class="oldPriceAndLabelForLandingInfoApi">294 pln</s></span>
                            <span class="output__num-text--small"><span class="priceAndLabelForLandingInfoApi">147 pln</span></span></div>
                        <div>
                        </div>
                    </div>
                </div>
                <div class="col-right">

                    <div class="form-container">


                        <form action="getform.php" onsubmit="gtag_report_conversion();" class="myform orderForm" id="order_form" method="post">

	                        <input type="hidden" name="utm_source" value="<?=$_GET["cid"]?>">
	                        <input type="hidden" name="utm_campaign" value="{domonetka}">

                            <div class="form__item">
                                <label class="form__item-label">Imie Nazwisko</label>
                                <div class="form__controls">
                                    <input class="form__item-field" name="name" placeholder="Imie Nazwisko" required type="text">
                                </div>
                            </div>
                            <div class="form__item">
                                <label class="form__item-label">Numer telefonu</label>
                                <div class="form__controls">
                                    <input class="form__item-field" name="phone" placeholder="" required type="tel">
                                </div>
                            </div>
                            <div class="form__item">
                                <div class="form__controls">
                                    <!---->
                                    <button class="order__btn " type="submit">
                                        <span>ZAMÓWIĆ</span>
                                    </button>
                                    <!---->
                                </div>
                            </div>
                        </form>


                    </div>
                </div>

            </div>
        </div>
    </main>
</div>
<script src="js/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $(".pre_toform").on("touchend click", function (e) {
            e.preventDefault();
            $('body,html').animate({scrollTop: $('#order_form,.scrollform').offset().top}, 400);
        });
    });
</script>

<script>
    $('[name="name"]').on('input change', function () {
        var val = $(this).val();
        $(this).val(val.replace(/[0-9+]/g, ''));
    });
    $('[name="name"]').attr('autocomplete', 'name');
    $('[name="name"]').attr('pattern', '.{2,25}');

    $('[name="phone"]').on('input change', function (e) {
        var val = $(this).val();
        $(this).val(val.replace(/[A-zА-яіїЁё ]/g, ''));
    });
    $('[name="phone"]').get(0).type = 'tel';
    $('[name="phone"]').attr('autocomplete', 'tel');
    $('[name="phone"]').attr('pattern', '[0-9+].{6,18}')
</script>


</body>
</html>
