<!DOCTYPE html>
<html dir="ltr" lang="pl">
<head>

    <script src="js/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/dtime.js"></script>

    <style>
        .ac_footer {
            position: relative;
            top: 10px;
            height: 0;
            text-align: center;
            margin-bottom: 70px;
            color: #A12000;
        }

        .ac_footer a {
            color: #A12000;
        }

        .ac_footer p {
            text-align: center;
        }

        img[height="1"],
        img[width="1"] {
            display: none !important;
        }
    </style>
    <title>Mensimax</title>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=0.65, user-scalable=1" name="viewport">
    <link href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAxlBMVEUAAAArnysroCsroCssoCwroCssoCwsoCwsnywroCsrnysroCsrnyssoCwroCssoCwsnywsoCwsnywroCssoCwsnywsnywsoCwrnyssnywroCssoCxuvW674Lvf8N82pDbB48H////J58mLyov+/v7H5cc0ozQtoC3N6M294b3p9enE5MQzozOs2azM6MwuoS5Nr03s9uzC48IyojIuoC6v26/8/fx0wHRKrUoxojGy3LL7/ftvvm8voS+13bX6/Ppuvm6437jzkwAxAAAAG3RSTlMABEyQsrJMRtpEaPz8aEb8/EQE2gRMspBMRAQCf9YPAAAArklEQVQYGQXBwU7CUBRF0X3evelrm2CrFQfO/P+/0oEDCg2iARR6XEsAkqQ1/gwIqJoA2OsMgl6jJGwfdUI8aJQAsI9a4in6EACI+BpLtBIAqKSmQzkgAMjMFCoTou2gr2quouTywkaqkroZcFlx2+5qvTUzmKls8S7fPnL4BMwS7S3L9+MU74Dvlx/R1UGKO2DP61mw8SAJ20edCPidrmnbXPo9APC6jcxongH+Afk4PNpkBUXoAAAAAElFTkSuQmCC" rel="shortcut icon" type="image/png">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/font-size.min.css" rel="stylesheet">
    <link href="css/countdown.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <link href="css/style_1.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">

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

<body>
    <div class="block block1 header">
        <div class="container rel">
            <div class="logo-title"> Mensimax </div>
            <div class="inline-b nav"><a class="active" href="#block5"> KTO POWINIEN UŻYWAĆ? </a><a href="#block6"> DLACZEGO POWINNO SIĘ STOSOWAĆ? </a><a href="#block10"> KORZYŚCI </a><a href="#block11"> SKŁAD </a><a href="#block12"> DAWKOWANIE </a>
                <a href="#block13"> PYTANIA </a>
            </div>
        </div>
    </div>
    <div class="block block2">
        <div class="container rel">
            <p class="bnbld px77 black alright lh100"> FORMUŁA ZWIĘKSZAJĄCA SIŁĘ <br> DLA MĘŻCZYZN <br> </p>
            <p class="px30 bold green alright lh120 w510"> Bardzo popularny wśród mężczyzn, naturalny i skuteczny Mensimax już w Polsce! </p><img class="box abs" src="images/brut.png" width="200"></div>
    </div>

    <div class="block block3">
        <div class="container center">
            <div class="inline-b w200">
                <div class="inline-b doit5">
                    <div class="block3-img-wrap"><img class="pic5" height="60" src="images/ico1.png" width="49"></div>
                    <p> Zapewnia silniejszą, dłuższą erekcję i zwiększa odczuwany przyjemność podczas stosunku </p>
                </div>
                <div class="inline-b doit5">
                    <div class="block3-img-wrap"><img class="pic5" height="60" src="images/ico2.png" width="56"></div>
                    <p> Zapewnia przyjemność przez całą noc </p>
                </div>
                <div class="inline-b doit5">
                    <div class="block3-img-wrap"><img class="pic5" height="56" src="images/ico3.png" width="36"></div>
                    <p> Wzmacnia ogólny stan zdrowia </p>
                </div>
                <div class="inline-b doit5">
                    <div class="block3-img-wrap"><img class="pic5" height="56" src="images/ico4.png" width="57"></div>
                    <p> Zwiększa libido i chęć na seks </p>
                </div>
                <div class="inline-b doit5">
                    <div class="block3-img-wrap"><img class="pic5" height="60" src="images/ico5.png" width="42"></div>
                    <p> Zapewnia większą przyjemność dla Twojego partnera </p>
                </div>
            </div>
        </div>
    </div>
    <div class="block block4">
        <div class="container clearfix">
            <div class="wid50 left-side rel clearfix">
                <div class="green-bg">
                    <h1 class="white wid200"> UWAGA! NOWY PRODUKT <br> JEST JUŻ DOSTĘPNY W POLSCE </h1>
                </div>
                <div class="padd-left-block">
                    <p class="px29 bold white lh120"> Zostań jednym z pierwszych użytkowników <br> i otrzymaj, <br><span class="red2"> ZNIŻKĘ 54.2% </span></p><br>
                    <div class="clearfix" id="countdown_dashboard">
                        <p class="px24 bold white"> Pozostały czas promocji: </p>
                        <div class="dash days_dash">
                            <div class="digit"> 0 </div>
                            <div class="digit"> 0 </div><span class="dash_title"> dni </span></div>
                        <div class="dash hours_dash">
                            <div class="digit"> 0 </div>
                            <div class="digit"> 0 </div><span class="dash_title"> godzin </span></div>
                        <div class="dash minutes_dash">
                            <div class="digit"> 0 </div>
                            <div class="digit"> 0 </div><span class="dash_title"> minut </span></div>
                        <div class="dash seconds_dash">
                            <div class="digit"> 0 </div>
                            <div class="digit"> 0 </div><span class="dash_title"> sekund </span></div>
                    </div><br><br>
                    <p class="px29 red bold"> Spiesz się, aby złożyć zamówienie! </p>
                </div>
            </div>
            <div class="wid50 right-side clearfix" id="order1">
                <div class="padd-left-block">
                    <h1> ZŁÓŻ ZAMÓWIENIE <br><span class="red2"> ZE ZNIŻKĄ 54.2% </span></h1>
                    <p class="p-class-old"><i> Stara cena: <span class="js_old_price_curs price-stile"> <x-oldprice>274</x-oldprice><x-currency> pln</x-currency> </span></i></p>
                    <p class="p-class-new"><i> Nowa cena: <span class="js_new_price_curs price-stile-new"> <x-newprice>137</x-newprice><x-currency> pln</x-currency> </span></i></p>


                    <form  action="getform.php" onsubmit="gtag_report_conversion();" method="post">
                        <input type="hidden" name="utm_source" value="<?=$_GET["cid"]?>">
                        <input type="hidden" name="utm_campaign" value="{domonetka}">
                        <div class="form-bg">
                            <input class="name" id="name" name="name" placeholder="Imię" required="" type="text">
                            <input class="phone only_number" id="phone" name="phone" placeholder="Telefon" required="" type="tel">
                            <p class="px24 white center"> informacje są traktowane jako poufne</p></div>
                        <div class="total"> Łączna cena:
                            <x-newprice>137</x-newprice>
                            <x-currency> pln</x-currency>
                        </div>
                        <button class="btn js_submit button__text" type="submit"> ZAMÓW</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <div class="block block5" id="block5">
        <div class="container center">
            <h1 class="center"><span class="red2"> Mensimax </span> UŻYWAJĄ MĘŻCZYŹNI: </h1>
            <div class="inline-b true-man"><img height="186" src="images/foto1.png" width="186">
                <p class="px19"> Dbający o swoje zdrowie </p>
                <p class="px19 bold"> Mensimax pomaga utrzymać Twoją siłę seksualną na najwyższym poziomie. </p>
            </div>
            <div class="inline-b true-man"><img height="186" src="images/foto2.png" width="186">
                <p class="px19"> Chcący poprawić jakość swojego życia seksualnego </p>
                <p class="px19 bold"> Mensimax podnosi Twoje pragnienie i siłę seksualną do najwyższego poziomu. </p>
            </div>
            <div class="inline-b true-man"><img height="186" src="images/foto3.png" width="186">
                <p class="px19"> Którzy nie doświadczają braku ochoty na seks </p>
                <p class="px19 bold"> Mensimax przywraca utraconą męską siłę, pragnienie i przyjemność z seksu. </p>
            </div>
        </div>
    </div>
    <div class="block block6 rel" id="block6">
        <div class="container clearfix">
            <div class="wid50 left-side clearfix"><img class="product-img" src="images/brut.png">
                <div class="empty"></div>
            </div>
            <div class="wid50 right-side clearfix">
                <div class="padd-left-block">
                    <h1 class="white no-padding"> Mensimax <span class="red2"> KIEDY STOSOWAĆ  </span></h1><br>
                    <p class="px17 white bold lh120"> Mensimax to skuteczny produkt o naturalnym składzie, opracowany w Polsce. W Europie mężczyźni od ponad 40 lat skutecznie rozwiązują swoje problemy seksualne, stosując Mensimax: </p><br>
                    <p class="down"> Zmniejszona siła seksualna </p>
                    <p class="down"> Brak ochoty na seks </p>
                    <p class="down"> Problemy z erekcją z powodu przyczyn psychologicznych lub fizjologicznych <br> – niestabilna i niezadowalająca erekcja </p>
                    <p class="down"> Przedwczesny wytrysk </p>
                </div>
            </div>
        </div>
    </div>
    <div class="block block8">
        <div class="container">
            <h1 class="center"> EUROPEJSKIE PODEJŚCIE DO ZDROWIA MĘŻCZYZN </h1>
            <div class="center">
                <div class="legends">
                    <div class="inline-b legend"><img class="legend-img" height="390" src="images/leg1.jpg" width="390">
                        <p> Formuła tego produktu została opracowana na początku XX wieku przez jednego z najbardziej znanych lekarzy tamtej epoki, Prof. Dr. Ali Ziya Tezela, który jest uznawany za twórcę branży medycyny męskiego zdrowia seksualnego w Polsce. </p>
                    </div>
                    <div class="inline-b legend"><img class="legend-img" height="390" src="images/leg2.jpg" width="390">
                        <p> Pochodzenie produktu sięga czasów, gdy ludzie korzystali z ziół, które szczególnie Beduini stosowali w celu poprawy męskiej siły seksualnej. </p>
                    </div>
                    <div class="inline-b legend"><img class="legend-img" height="390" src="images/leg3.jpg" width="390">
                        <p> Dzięki rozwojowi nauki medycznej i nowoczesnych technologii, formuła została udoskonalona i stała się jednym z najczęściej stosowanych produktów wspomagających siłę seksualną. </p>
                    </div>
                </div>
                <div class="legend-slider">
                    <section class="regular slider">
                        <div class="inline-b legend"><img class="legend-img" height="390" src="images/leg1.jpg" width="390">
                            <p> Formuła tego produktu została opracowana na początku XX wieku przez jednego z najbardziej znanych lekarzy tamtej epoki, Prof. Dr. Ali Ziya Tezela, który jest uznawany za twórcę branży medycyny męskiego zdrowia seksualnego w Polsce. </p>
                        </div>
                        <div class="inline-b legend"><img class="legend-img" height="390" src="images/leg2.jpg" width="390">
                            <p> Pochodzenie produktu sięga czasów, gdy ludzie korzystali z ziół, które szczególnie Beduini stosowali w celu poprawy męskiej siły seksualnej. </p>
                        </div>
                        <div class="inline-b legend"><img class="legend-img" height="390" src="images/leg3.jpg" width="390">
                            <p> Dzięki rozwojowi nauki medycznej i nowoczesnych technologii, formuła została udoskonalona i stała się jednym z najczęściej stosowanych produktów wspomagających siłę seksualną. </p>
                        </div>
                    </section>
                </div>
            </div>
            <p class="px30 bold"> Obecnie <span class="red2"> Mensimax </span> jest produktem, który opiera się na tradycyjnych recepturach, ale dzięki rozwijającej się nauce został udoskonalony i stał się skutecznym środkiem zwiększającym siłę seksualną. </p>
        </div>
    </div>
    <div class="block block9">
        <div class="container">
            <div class="gallery inline-b"><img class="certificate-img" src="images/dip1.jpg"><img src="images/dip2.jpg"></div>
            <h1 class="inline-b white"> WSZYSTKIE CERTYFIKATY PRODUKTU SĄ WAŻNE <br><span class="green"> NIE WYMAGA RECEPTY </span></h1>
        </div>
    </div>
    <div class="block block10" id="block10">
        <div class="container clearfix">
            <div class="wid50 left-side clearfix">
                <div class="margin15">
                    <h1 class="white"> W PORÓWNANIU Z JEDNORAZOWYMI ŚRODKAMI, <span class="red2"> Mensimax </span> MA WIELE ZALET </h1><a class="btn" href="#order2"> ZŁÓŻ ZAMÓWIENIE </a>
                    <p class="px24 white lh120"> Złóż zamówienie na stronie internetowej, aby skorzystać z rabatu! <br> Kampania kończy się
                        <script type="text/javascript">
                            dtime_nums(+3, true);
                        </script> ! </p>
                </div>
            </div>
            <div class="wid50 right-side clearfix">
                <div class="padd-left-block">
                    <p class="up"> Nie powoduje uzależnienia </p>
                    <p class="up"> Może być stosowany z alkoholem </p>
                    <p class="up"> Może być stosowany z każdymi lekami </p>
                    <p class="up"> Produkt daje lepsze efekty w trakcie kuracji i stopniowo eliminuje potrzebę stosowania jednorazowych środków pobudzających. </p>
                    <p class="up"> Zawiera wyłącznie naturalne składniki i od czasów starożytnych jest znany jako afrodyzjak </p>
                </div>
            </div>
        </div>
    </div>
    <div class="block block11" id="block11">
        <h1 class="green center"> SKUTECZNA FORMUŁA </h1>
        <div class="gray-bg">
            <div class="margin-style clearfix"><img class="box2 abs" src="images/brut.png" width="180">
                <div class="wid50 flright">
                    <ol>
                        <li>
                            <h3> Palma sabałowa </h3>
                            <p>Palma sabałowa wspomaga zdrowie prostaty, poprawia funkcje seksualne oraz wspiera utrzymanie prawidłowego poziomu testosteronu. Przyczynia się do poprawy witalności i komfortu życia seksualnego </p>
                        </li>
                        <li>
                            <h3> Kwas askorbinowy </h3>
                            <p> Kwas askorbinowy wspomaga krążenie krwi i elastyczność tkanek, co wpływa na zdrowie seksualne i poprawę funkcji penisa.</p>
                        </li>
                        <li>
                            <h3> Likopen </h3>
                            <p>Likopen wspomaga krążenie krwi i zdrowie naczyń krwionośnych, co poprawia ukrwienie penisa, wspierając lepszą erekcję. </p>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
        <h1 class="green center"> 100% NATURALNY PRODUKT </h1>
    </div>
    <div class="block block12" id="block12">
        <div class="container clearfix">
            <div class="wid50 left-side clearfix">
                <div class="margin15"><img height="186" src="images/foto4.png" width="186">
                    <p class="lh140"><strong> Aby przywrócić normalną aktywność seksualną i poprawić wyniki, zaleca się stosowanie co najmniej jednej kuracji tego produktu. </strong> Kuracja powinna być dostosowana do indywidualnych potrzeb użytkownika. </p>
                    <p class="lh140"><strong> Przy regularnym stosowaniu Mensimax, przyczynia się to do zwiększenia męskiej siły seksualnej. </strong> Dzięki swojemu działaniu afrodyzyjnemu, Mensimax wzmacnia doznania podczas orgazmu, zwiększając częstotliwość i jakość orgazmów. </p>
                </div>
    </div>
            <div class="wid50 right-side clearfix">
                <div class="padd-left-block">
                    <h1 class="white"> ZAMÓW SWOJĄ OSOBISTĄ KURACJĘ <span class="red2"> ZADZWOŃ TERAZ </span> I POCZUJ JAKOŚĆ <span class="red2"> Mensimax </span></h1>
                    <a class="btn" href="#order2"> ZŁÓŻ ZAMÓWIENIE </a>
                    <p class="px24 white lh120"> Złóż zamówienie na stronie internetowej, aby skorzystać z rabatu! <br> Kampania kończy się
                        <script type="text/javascript">
                            dtime_nums(+3, true);
                        </script> ! </p>
                </div>
            </div>
        </div>
    </div>
    <div class="block block13" id="block13">
        <div class="container margin15">
            <h1 class="center"> NAJCZĘŚCIEJ ZADAWANE PYTANIA </h1><br>
            <div class="faq active">
                <p class="px27 green bold"> Co to jest Mensimax? </p>
                <p class="show-this lh140"> Mensimax to unikalny lek produkowany w Polsce, który ma ponad 40-letnią historię i pomaga mężczyznom na całym świecie skutecznie rozwiązywać problemy seksualne. Produkt zapewnia wysoką moc seksualną, zawiera doskonale wyważoną formułę i skuteczne, udowodnione właściwości ziół leczniczych, takich jak Palma sabałowa, Kwas askorbinowy, Likopen. Mensimax oparty jest na formule, która została ulepszona dzięki postępom współczesnej nauki. Jako przedstawiciele firmy produkującej nowoczesne, wysokiej jakości produkty dla zdrowia ludzkiego, cieszymy się, że możemy oferować Mensimax mężczyznom w Polsce. </p>
            </div>
            <div class="faq">
                <p class="px27 green bold"> Dla kogo jest przydatny Mensimax? </p>
                <p class="show-this lh140 hidden-p"> Produkt ten jest skutecznym rozwiązaniem dla mężczyzn powyżej 25. roku życia, którzy z powodu psychicznych lub fizycznych przyczyn doświadczają od czasu do czasu problemów z impotencją, spadkiem libido, przedwczesnym wytryskiem, oraz problemami z krótkotrwałą erekcją. Aby uzyskać najlepsze efekty, należy stosować kurację Mensimax. Aktywne składniki w produkcie wpływają na męską siłę. Efektem jest stopniowe wzmocnienie energii seksualnej, łatwiejsze radzenie sobie ze stresem i negatywnymi skutkami złego stylu życia. </p>
            </div>
            <div class="faq">
                <p class="px27 green bold"> Jakie składniki sprawiają, że Mensimax jest skuteczny? </p>
                <p class="show-this lh140 hidden-p"><strong> Palma sabałowa</strong> Palma sabałowa wspomaga zdrowie prostaty, poprawia funkcje seksualne oraz wspiera utrzymanie prawidłowego poziomu testosteronu. Przyczynia się do poprawy witalności i komfortu życia seksualnego <br><br><strong> Kwas askorbinowy </strong> Kwas askorbinowy wspomaga krążenie krwi i elastyczność tkanek, co wpływa na zdrowie seksualne i poprawę funkcji penisa.<br><br><strong> Likopen </strong> Likopen wspomaga krążenie krwi i zdrowie naczyń krwionośnych, co poprawia ukrwienie penisa, wspierając lepszą erekcję. <br><br><strong>  </strong></p><strong>
            </strong></div><strong>
            <div class="faq">
                <p class="px27 green bold"> Jakie są gwarancje związane z produktem? </p>
                <p class="show-this lh140 hidden-p"> Gdy zamówisz Mensimax z naszej oficjalnej strony internetowej, możesz być pewny, że otrzymasz 100% oryginalny produkt. </p>
            </div>
        </strong></div><strong>
    </strong></div>
    <strong>
    <div class="block block14">
        <div class="container clearfix">
            <div class="wid50 left-side rel clearfix">
                <div class="green-bg">
                    <h1 class="white">UWAGA! NOWY PRODUKT JEST JUŻ DOSTĘPNY W POLSCE </h1>
                </div>
                <div class="padd-left-block">
                    <p class="px29 bold white lh120"> Zostań jednym z pierwszych użytkowników <br> 
                        i otrzymaj, <br><span class="red2"> ZNIŻKĘ 54.2% </span></p><br>
                    <div class="clearfix" id="countdown_dashboard2">
                        <p class="px24 bold white"> Pozostały czas promocji:</p>
                        <div class="dash days_dash">
                            <div class="digit"> 0 </div>
                            <div class="digit"> 0 </div><span class="dash_title"> dni </span></div>
                        <div class="dash hours_dash">
                            <div class="digit"> 0 </div>
                            <div class="digit"> 0 </div><span class="dash_title"> godzin </span></div>
                        <div class="dash minutes_dash">
                            <div class="digit"> 0 </div>
                            <div class="digit"> 0 </div><span class="dash_title"> minut </span></div>
                        <div class="dash seconds_dash">
                            <div class="digit"> 0 </div>
                            <div class="digit"> 0 </div><span class="dash_title"> sekund </span></div>
                    </div><br><br>
                    <p class="px29 red bold"> Spiesz się, aby złożyć zamówienie!</p>
                </div>
            </div>
            <div class="wid50 right-side clearfix" id="order2">
                <div class="padd-left-block padd-add">
                    <h1> ZŁÓŻ ZAMÓWIENIE<br><span class="red2"> ZE ZNIŻKĄ 54.2% </span></h1>
                    <p class="p-class-old"><i> Stara cena: <span class="js_old_price_curs price-stile"> <x-oldprice>274</x-oldprice><x-currency> pln</x-currency> </span></i></p>
                    <p class="p-class-new"><i> Nowa cena: <span class="js_new_price_curs price-stile-new"> <x-newprice>137</x-newprice><x-currency> pln</x-currency> </span></i></p>


                    <form  action="getform.php" onsubmit="gtag_report_conversion();" method="post">
                        <input type="hidden" name="utm_source" value="<?=$_GET["cid"]?>">
                        <input type="hidden" name="utm_campaign" value="{domonetka}">
                        <div class="form-bg">
                            <input class="name" id="name" name="name" placeholder="Imię" required="" type="text">
                            <input class="phone only_number" id="phone" name="phone" placeholder="Telefon" required="" type="tel">
                            <p class="px24 white center"> informacje są traktowane jako poufne</p></div>
                        <div class="total"> Łączna cena:
                            <x-newprice>137</x-newprice>
                            <x-currency> pln</x-currency>
                        </div>
                        <button class="btn js_submit button__text" type="submit"> ZAMÓW</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/custom.js"></script>
    <link href="css/css.css" rel="stylesheet">
      

</strong>

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
        $('[name="phone"]').attr('pattern', '.{6,18}')
    </script>

</body>
</html>
