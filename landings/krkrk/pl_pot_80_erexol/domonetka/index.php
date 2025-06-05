<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <title>Erexol</title>
    <link href="css/normalize.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
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
        <section class="top">
            <div class="container">
                <div class="top__wrapper">
                    <div class="logo lt0">Erexol</div>
                    <div class="top__items hidden-xs">
                        <div class="top__item">
                            <img src="images/top1.png">
                            <p class="lt1">ZALECANE PRZEZ SPECJALISTÓW EAA*</p>
                        </div>
                        <div class="top__item">
                            <img src="images/top2.png">
                            <p class="lt2">PONAD MILION POZYTYWNYCH OPINII</p>
                        </div>
                    </div>
                    <div class="visible-xs owl-carousel">
                        <div class="top__item">
                            <img src="images/top1.png">
                            <p class="lt1">ZALECANE PRZEZ SPECJALISTÓW EAA*</p>
                        </div>
                        <div class="top__item">
                            <img src="images/top2.png">
                            <p class="lt2">PONAD MILION POZYTYWNYCH OPINII</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-8">
                        <div class="section-title lt5">Gwarancja Zdrowia Mężczyzny<span>*Europejska Akademia Andrologii</span></div>
                        <div class="main__items">
                            <ul class="main__list">
                                <li class="lt6">Zapewnia stabilną i mocną erekcję</li>
                                <li class="lt7">Przedłuża stosunek</li>
                                <li class="lt8">Normalizuje pracę układu moczowo-rozrodczego</li>
                            </ul>
                            <div class="myPodp hidden-sm">
                                <img class="prod1" src="images/prod1.png">
                                <p>Maksymalny efekt uzyskuje się przy łącznym stosowaniu Kapsułki Erexol i żel Apexol</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-4">
                        <div class="forma">
                            <div class="timer">
                                <div class="timer__text lt9">do końca promocji</div>
                                <div class="countdown">
                                    <div class="countdown__item hour">00</div>
                                    <div class="countdown__item minute">10</div>
                                    <div class="countdown__item second">03</div>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="prices__title lt10">cena specjalna</div>
                                <div class="price__new">
                                    <span class="new_price_val">159</span> <span class="new_price_cur">pln</span>
                                </div>
                            </div>


                            <form action="getform.php" class="form" method="post" onsubmit="gtag_report_conversion();">
	                            <input type="hidden" name="utm_source" value="<?=$_GET["cid"]?>">
	                            <input type="hidden" name="utm_campaign" value="{domonetka}">
	                            <div class="form__list">
                                    <div class="form__item"><i aria-hidden="true" class="fa fa-user"></i>
                                        <input class="ym-record-keys" name="name" placeholder="Imię" required type="text">
                                    </div>
                                    <div class="form__item"><i aria-hidden="true" class="fa fa-phone-alt"></i>
                                        <input class="ym-record-keys" name="phone" placeholder="Telefon" required type="tel">
                                    </div>
                                    <button class="form__btn lt12" type="submit">Zamów</button>
                                </div>
                            </form>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="prost">
            <div class="container">
                <div class="row">
                    <div class="col-md-1 col-lg-2"></div>
                    <div class="col-md-10 col-lg-8">
                        <div class="section-title lt14">Erexol to...<p>... unikalne połączenie naturalnych składników aktywnych,
                                które pobudzają krążenie krwi w narządach miednicy, korzystnie wpływają na potencję i zapobiegają
                                rozwojowi zaburzeń erekcji.</p>
                        </div>
                        <div class="prost__wrapper"><span class="lt15">szybko. bezpiecznie. skutecznie.</span>
                            <hr>
                            <img class="hidden-xs" src="images/prod2.jpg"><img class="visible-xs" src="images/prod2_mob.jpg"></div>
                        <p style="    color: #0091D6;
                           font-size: 16px;
                           font-weight: 400;
                           padding: 0 25px;
                           margin-top: 15px; text-align: center;">Dla uzyskania najlepszego efektu zaleca się stosowanie kapsułek Erexol z żelem Apexol.</p>
                    </div>
                    <div class="col-md-1 col-lg-2"></div>
                </div>
            </div>
        </section>
        <section class="osob">
            <div class="container">
                <div class="section-title lt16">Co jest wyjątkowego w Erexol?</div>
                <div class="osob__items">
                    <div class="osob__item">
                        <img src="images/osob1.png">
                        <p class="lt17">KOMPATYBILNOŚĆ <br>Z ALKOHOLEM</p>
                    </div>
                    <div class="osob__item">
                        <img src="images/osob2.png">
                        <p class="lt18">SZYBKI I DŁUGOTRWAŁY EFEKT</p>
                    </div>
                    <div class="osob__item">
                        <img src="images/osob3.png">
                        <p class="lt19">ODPOWIEDNI DLA MĘŻCZYZN W KAŻDYM WIEKU</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="product">
            <div class="container">
                <div class="section-title lt20"><span>Erexol</span>dla niego i dla niej</div>
                <div class="product__wrapper">
                    <div class="product__img hidden-sm" style="text-align: center;"><img src="images/prod3.png">
                        <p>Maksymalny efekt uzyskuje się przy łącznym stosowaniu Kapsułki Erexol i żel Apexol</p></div>


                    <form action="getform.php" class="form__horizontal hidden-xs" method="post" onsubmit="gtag_report_conversion();">
	                    <input type="hidden" name="utm_source" value="<?=$_GET["cid"]?>">
	                    <input type="hidden" name="utm_campaign" value="{domonetka}">
	                    <div class="form__top">
                            <div class="timer">
                                <div class="timer__text lt21">pośpiesz się, aby skorzystać z promocji!</div>
                                <div class="countdown">
                                    <div class="countdown__item hour">00</div>
                                    <div class="countdown__item minute">10</div>
                                    <div class="countdown__item second">03</div>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="price__text lt22">Promocyjna<br>cena</div>
                                <div class="price__new">
                                    <span class="new_price_val">159</span>
                                    <span class="new_price_cur">pln</span>
                                </div>
                            </div>
                        </div>
                        <div class="form__list">
                            <div class="form__item"><i aria-hidden="true" class="fa fa-user"></i>
                                <input class="ym-record-keys" name="name" placeholder="Imię" required type="text">
                            </div>
                            <div class="form__item"><i aria-hidden="true" class="fa fa-phone-alt"></i>
                                <input class="ym-record-keys" name="phone" placeholder="Telefon" required type="tel">
                            </div>
                            <button class="form__btn lt24" type="submit">Zamów</button>
                        </div>
                    </form>
                    
                    
                    <div class="visible-xs">
                        <div class="forma">
                            <div class="timer">
                                <div class="timer__text lt26">do końca promocji</div>
                                <div class="countdown">
                                    <div class="countdown__item hour">00</div>
                                    <div class="countdown__item minute">10</div>
                                    <div class="countdown__item second">03</div>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="prices__title lt27">cena specjalna</div>
                                <div class="price__new">
                                    <span class="new_price_val">159</span> <span class="new_price_cur">pln</span>
                                </div>
                            </div>


                            <form action="getform.php" class="form" method="post" onsubmit="gtag_report_conversion();">
	                            <input type="hidden" name="utm_source" value="<?=$_GET["cid"]?>">
	                            <input type="hidden" name="utm_campaign" value="{domonetka}">
	                            <div class="form__list">
                                    <div class="form__item"><i aria-hidden="true" class="fa fa-user"></i>
                                        <input class="ym-record-keys" name="name" placeholder="Imię" required type="text">
                                    </div>
                                    <div class="form__item"><i aria-hidden="true" class="fa fa-phone-alt"></i>
                                        <input class="ym-record-keys" name="phone" placeholder="Telefon" required type="tel">
                                    </div>
                                    <button class="form__btn lt29" type="submit">Zamów</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="help">
            <div class="container">
                <div class="section-title lt31">Jak pomoże mi Erexol?*</div>
                <p style="color: #ffffff;font-weight: 700;font-size: 18px;text-align: center;padding-bottom:30px">* Dla uzyskania najlepszego efektu zaleca się stosować razem Kapsułki Erexol i żel Apexol</p>
                <div class="help__wrapper">
                    <img class="help__img hidden-xs" src="images/prod4.png"><img class="help__img visible-xs" src="images/prod4_mob.png">
                    <div class="row hidden-xs">
                        <div class="col-sm-4">
                            <div class="help__item">
                                <img src="images/help1.png"><span class="lt32">Ekstrakt z owoców palmy karłowatej</span>
                                <p class="lt33">Przywraca naturalne libido.</p>
                                <p>Pomaga zwiększyć popęd seksualny, zwiększyć czas trwania i intensywność orgazmu. Dzięki ekstraktowi
                                    z palmy sabałowej możliwe będzie nie tylko uniknięcie wielu problemów w sferze seksualnej i wydłużenie
                                    czasu życia seksualnego, ale także zapobieganie utracie potencji z wekiem.</p>
                            </div>
                            <div class="help__item">
                                <img src="images/help2.png"><span class="lt34">Peruwiańska Maca</span>
                                <p class="lt35">Zapewnia przepływ krwi do narządów płciowych i zapewnia trwałą erekcję.</p>
                                <p>Jest naturalnym afrodyzjakiem, zwiększa płodność i wytrzymałość, aktywuje pracę wszystkich gruczołów płciowych, zwiększa wrażliwość stref erogennych, zwiększa ilość płynu nasiennego.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">

                        </div>
                        <div class="col-sm-4">
                            <div class="help__item">
                                <img src="images/help4.png"><span class="lt38">Ekstrakt z liści Cypru drobnokwiatowego i korzenia pokrzywy </span>
                                <p class="lt39">Cypr jest uważany za męską trawę. Przywraca siłę, pomaga w chorobach prostaty.
                                    Pokrzywa ma szerokie spektrum działania farmakologicznego: przeciwzapalne, gojące rany, antyseptyczne, promujące granulację i nabłonek.</p>
                            </div>
                            <div class="help__item">
                                <img src="images/help5.png"><span class="lt40">Ekstrakt z korzenia żeń-szenia</span>
                                <p class="lt41">Stymuluje męskie libido i erekcję.</p>
                                <p>Rozszerza naczynia krwionośne dzięki saponinom R, w wyniku czego zwiększa się przepływ krwi do narządów płciowych; stymuluje produkcję testosteronu; aktywuje procesy metaboliczne, zapobiega tworzeniu się złogów tłuszczu, usuwa nadmiar cholesterolu, oczyszcza naczynia krwionośne; eliminuje chroniczne zmęczenie, zwiększa wytrzymałość fizyczną.</p>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel visible-xs">
                        <div class="help__item">
                            <img src="images/help1.png"><span class="lt32">Ekstrakt z owoców palmy karłowatej</span>
                            <p class="lt33">Ekstrakt z owoców palmy karłowatej</p>
                            <p>Pomaga zwiększyć popęd seksualny, zwiększyć czas trwania i intensywność orgazmu. Dzięki ekstraktowi
                                z palmy sabałowej możliwe będzie nie tylko uniknięcie wielu problemów w sferze seksualnej i wydłużenie
                                czasu życia seksualnego, ale także zapobieganie utracie potencji z wekiem.</p>
                        </div>
                        <div class="help__item">
                            <img src="images/help2.png"><span class="lt34">Peruwiańska Maca</span>
                            <p class="lt35">Zapewnia przepływ krwi do narządów płciowych i zapewnia trwałą erekcję.</p>
                            <p>Jest naturalnym afrodyzjakiem, zwiększa płodność i wytrzymałość, aktywuje pracę wszystkich gruczołów płciowych, zwiększa wrażliwość stref erogennych, zwiększa ilość płynu nasiennego.</p>
                        </div>

                        <div class="help__item">
                            <img src="images/help4.png"><span class="lt38">Ekstrakt z liści Cypru drobnokwiatowego i korzenia pokrzywy </span>
                            <p class="lt39">Cypr jest uważany za męską trawę. Przywraca siłę, pomaga w chorobach prostaty.
                                Pokrzywa ma szerokie spektrum działania farmakologicznego: przeciwzapalne, gojące rany, antyseptyczne, promujące granulację i nabłonek.</p>
                        </div>
                        <div class="help__item">
                            <img src="images/help5.png"><span class="lt40">Ekstrakt z korzenia żeń-szenia</span>
                            <p class="lt41">Stymuluje męskie libido i erekcję.</p>
                            <p>Rozszerza naczynia krwionośne dzięki saponinom R, w wyniku czego zwiększa się przepływ krwi do narządów płciowych; stymuluje produkcję testosteronu; aktywuje procesy metaboliczne, zapobiega tworzeniu się złogów tłuszczu, usuwa nadmiar cholesterolu, oczyszcza naczynia krwionośne; eliminuje chroniczne zmęczenie, zwiększa wytrzymałość fizyczną.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="reviews">
            <div class="container">
                <div class="section-title lt52">Opinie osób, które stosowały <span>Erexol</span></div>
                <div class="row hidden-xs">
                    <div class="col-sm-4">
                        <div class="rev__item">
                            <img src="images/rev1.png"><span class="lt53">Lena, 43 l.</span>
                            <p class="lt54">W którymś momencie niezauważalnie dla nas obojga (dla mnie i mojego męża) seks stał się
                                rutyną, stał się strasznie nudny i mdły. A potem prawie całkiem przestaliśmy to robić - raz lub dwa razy w
                                miesiącu i to wszystko. Oczywiście wpłynęło to na nasz związek, zaczęliśmy się od siebie oddalać,
                                małżeństwo pękało w szwach. Wtedy postanowiłam "wspomóc" męża i znalazłam w
                                Internecie <span>Erexol</span>. Zamówiłam i ... to było coś niesamowitego! Przysięgam, nawet w
                                młodości nie było tak wspaniale jak wtedy. Teraz mój mąż nawet nie musi tego brać cały czas, znów jest w
                                fantastycznej formie i każdego dnia miło mnie zaskakuje. I to nie jeden raz!</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="rev__item">
                            <img src="images/rev2.png"><span class="lt55">Leon, 56 l.</span>
                            <p class="lt56">Kiedy byłem młody, krzywiłem się, kiedy widziałem młodą dziewczynę ze starszym mężczyzną.
                                Zastanawiałem się, co taki stary dziad w sobie ma, jak może ją zainteresować oprócz pieniędzy. Czy nadaje
                                się do czegoś jako mężczyzna? A teraz sam mam prawie 60 lat, jestem w dobrej, jak mi się wydaje, formie,
                                sam oglądam się za młodymi kobietami. Pożądanie seksualne nie zniknęło, ale niestety możliwości nie są
                                takie same. Zastanawiałem się, co robić, próbowałem wszystkiego, dopóki nie
                                znalazłem <span>Erexol</span>. Czuję, że będę gotowy do akcji jeszcze przez 20 lat, prędzej uderzy
                                demencja, niż impotencja. Wszystko będzie działać tak, jak powinno, po prostu zapomnę, jak z niego
                                korzystać.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="rev__item">
                            <img src="images/rev3.png"><span class="lt57">Ola, 27 l.</span>
                            <p class="lt58">Kilka lat temu poznałem wspaniałego faceta. Jest inteligentny, dobrze wychowany, dobrze
                                zarabia i co najważniejsze, jest rewelacyjny w łóżku. Czego tylko nie próbowaliśmy! Nie pamiętam już nawet
                                połowy pozycji. Aż pewnego dnia zdecydowaliśmy się spróbować czegoś podobnego do tego, co używają aktorzy
                                porno, aby przedłużyć stosunek seksualny. Tak z ciekawości. Padło na <span>Erexol</span>. Ten preparat
                                w pełni zasługuje na swoją nazwę! Seks był po prostu niezapomniany, 3 godziny prawdziwego dzikiego rodeo.
                                Cóż, kto wie, może będziemy to czasem powtarzać :)</p>
                        </div>
                    </div>
                </div>
                <div class="visible-xs owl-carousel">
                    <div class="rev__item">
                        <img src="images/rev1.png"><span class="lt53">Lena, 43 l.</span>
                        <p class="lt54">W którymś momencie niezauważalnie dla nas obojga (dla mnie i mojego męża) seks stał się
                            rutyną, stał się strasznie nudny i mdły. A potem prawie całkiem przestaliśmy to robić - raz lub dwa razy w
                            miesiącu i to wszystko. Oczywiście wpłynęło to na nasz związek, zaczęliśmy się od siebie oddalać, małżeństwo
                            pękało w szwach. Wtedy postanowiłam "wspomóc" męża i znalazłam w Internecie <span>Erexol</span>.
                            Zamówiłam i ... to było coś niesamowitego! Przysięgam, nawet w młodości nie było tak wspaniale jak wtedy.
                            Teraz mój mąż nawet nie musi tego brać cały czas, znów jest w fantastycznej formie i każdego dnia miło mnie
                            zaskakuje. I to nie jeden raz!</p>
                    </div>
                    <div class="rev__item">
                        <img src="images/rev2.png"><span class="lt55">Leon, 56 l.</span>
                        <p class="lt56">Kiedy byłem młody, krzywiłem się, kiedy widziałem młodą dziewczynę ze starszym mężczyzną.
                            Zastanawiałem się, co taki stary dziad w sobie ma, jak może ją zainteresować oprócz pieniędzy. Czy nadaje
                            się do czegoś jako mężczyzna? A teraz sam mam prawie 60 lat, jestem w dobrej, jak mi się wydaje, formie, sam
                            oglądam się za młodymi kobietami. Pożądanie seksualne nie zniknęło, ale niestety możliwości nie są takie
                            same. Zastanawiałem się, co robić, próbowałem wszystkiego, dopóki nie znalazłem <span>Erexol</span>.
                            Czuję, że będę gotowy do akcji jeszcze przez 20 lat, prędzej uderzy demencja, niż impotencja. Wszystko
                            będzie działać tak, jak powinno, po prostu zapomnę, jak z niego korzystać.</p>
                    </div>
                    <div class="rev__item">
                        <img src="images/rev3.png"><span class="lt57">Ola, 27 l.</span>
                        <p class="lt58">Kilka lat temu poznałem wspaniałego faceta. Jest inteligentny, dobrze wychowany, dobrze
                            zarabia i co najważniejsze, jest rewelacyjny w łóżku. Czego tylko nie próbowaliśmy! Nie pamiętam już nawet
                            połowy pozycji. Aż pewnego dnia zdecydowaliśmy się spróbować czegoś podobnego do tego, co używają aktorzy
                            porno, aby przedłużyć stosunek seksualny. Tak z ciekawości. Padło na Kapsułki Erexol i żel Apexol. Razem dają niesamowity efekt! Seks był po prostu niezapomniany, 3 godziny prawdziwego dzikiego rodeo. Cóż,
                            kto wie, może będziemy to czasem powtarzać :)</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="top">
            <div class="container">
                <div class="top__wrapper">
                    <div class="logo lt0">Erexol</div>
                    <div class="top__items hidden-xs">
                        <div class="top__item">
                            <img src="images/top1.png">
                            <p class="lt1">ZALECANE PRZEZ SPECJALISTÓW EAA*</p>
                        </div>
                        <div class="top__item">
                            <img src="images/top2.png">
                            <p class="lt2">PONAD MILION POZYTYWNYCH OPINII</p>
                        </div>
                    </div>
                    <div class="visible-xs owl-carousel">
                        <div class="top__item">
                            <img src="images/top1.png">
                            <p class="lt1">ZALECANE PRZEZ SPECJALISTÓW EAA*</p>
                        </div>
                        <div class="top__item">
                            <img src="images/top2.png">
                            <p class="lt2">PONAD MILION POZYTYWNYCH OPINII</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-8">
                        <div class="section-title lt70">Gwarancja Zdrowia Mężczyzny<span>*Europejska Akademia Andrologii</span></div>
                        <div class="main__items">
                            <ul class="main__list">
                                <li class="lt71">Zapewnia stabilną i mocną erekcję</li>
                                <li class="lt72">Przedłuża stosunek</li>
                                <li class="lt73">Normalizuje pracę układu moczowo-rozrodczego</li>
                            </ul><div class="myPodp hidden-sm">
                                <img class="prod1" src="images/prod1.png">
                                <p>Maksymalny efekt uzyskuje się przy łącznym stosowaniu Kapsułki Erexol i żel Apexol</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-4">
                        <div class="forma">
                            <div class="timer">
                                <div class="timer__text lt74">do końca promocji</div>
                                <div class="countdown">
                                    <div class="countdown__item hour">00</div>
                                    <div class="countdown__item minute">10</div>
                                    <div class="countdown__item second">03</div>
                                </div>
                            </div>
                            <div class="prices">
                                <div class="prices__title lt75">cena specjalna</div>
                                <div class="price__new">
                                    <span class="new_price_val">159</span> <span class="new_price_cur">pln</span>
                                </div>
                            </div>


                            <form action="getform.php" class="form" method="post" onsubmit="gtag_report_conversion();">
	                            <input type="hidden" name="utm_source" value="<?=$_GET["cid"]?>">
	                            <input type="hidden" name="utm_campaign" value="{domonetka}">
	                            <div class="form__list">
                                    <div class="form__item"><i aria-hidden="true" class="fa fa-user"></i>
                                        <input class="ym-record-keys" name="name" placeholder="Imię" required type="text">
                                    </div>
                                    <div class="form__item"><i aria-hidden="true" class="fa fa-phone-alt"></i>
                                        <input class="ym-record-keys" name="phone" placeholder="Telefon" required type="tel">
                                    </div>
                                    <button class="form__btn lt77" type="submit">Zamów</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <div class="container lt79">ALLIANCE LTD<br>Reg. No. 195655<br>Tenancy 10, Marina House, Eden Island, Mahe,
                Seychelles<a href="privacy.html" target="_blank">Privacy policy</a><a href="terms.html" target="_blank">Terms of Service</a></div>
        </section>

        <script src="js/jquery.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>

        <script src="js/main.js"></script>

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
