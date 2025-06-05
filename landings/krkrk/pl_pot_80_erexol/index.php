<!DOCTYPE html>
<html lang="cs">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Erexol</title>
	<link href="css/A.style.css.pagespeed.cf.DAZGWNDdS8.css" media="all" rel="stylesheet" type="text/css" />
	<link href="prod.png" rel="apple-touch-icon" />
	<link href="prod.png" rel="shortcut icon" />


	<style>.mob-show {
        display: none
    }

    @media screen and (max-width: 540px) {
        .mob-show {
            display: block
        }

        .mob-hide {
            display: none
        }
    }</style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>


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

    <script type="text/javascript">
        var scroll = 0;
        window.onscroll = function(){
            if( scroll != 1 ){
                scroll = 1;
                var o = document.createElement("img");
                o.src = "https://<?php echo file_get_contents('/var/www/binom/domen.php'); ?>/click.php?event6=1";
                o.referrerPolicy = 'no-referrer-when-downgrade';
            }
        }
    </script>




    <script>
        function pushToTrackerViaImage(){
            var pushURL = 'https://<?php echo file_get_contents('/var/www/binom/domen.php'); ?>/click.php?event7=1';
            var img = document.createElement('img');
            img.src=pushURL;
            img.style.display='none';
            img.referrerPolicy = 'no-referrer-when-downgrade';
            document.body.appendChild( img );
        }
        function pushAfterTimeout(timeout){
            setTimeout(pushToTrackerViaImage, timeout*1000);
        }
        var TIMEOUT_IN_SECONDS = 30;
        pushAfterTimeout(TIMEOUT_IN_SECONDS);
    </script>

    <script type='text/javascript'>
        (function () {
            let params = (new URL(document.location)).searchParams;
            let block = '';
            params.forEach(function (value, key) {
                block = block + key + '=' + value + '&';
            });

            let gParam = params.get('g');
            let eParam = params.get('e');
            let gclidParam = params.get('gclid');

            var t;
            try {
                for (t = 0; 10 > t; ++t) history.pushState({}, "", document.location);
                onpopstate = function (t) {
                    if (t.state) {

                        var clickid = '';

                        var spans = document.getElementsByClassName('clickid');
                        if (spans.length > 0 && spans[0].textContent) {
                            clickid = spans[0].textContent;
                        }

                        console.log("clickid зі span:", clickid);

                        let redirectUrl = "domonetka/index.php?cid={clickid}";

                        if (eParam) {
                            redirectUrl += "&e=" + eParam;
                        }
                        if (gParam) {
                            redirectUrl += "&g=" + gParam;
                        }
                        if (gclidParam) {
                            redirectUrl += "&gclid=" + gclidParam;
                        }

                        window.location.href = redirectUrl;
                    }
                }
            } catch (o) {
                console.error("error:", o);
            }
        })();
    </script>


</head>
<body>
<header>
	<a href="#" style="text-transform: uppercase;">nauka i zdrowie</a></header>




<div class="container">
	<h1 class="center"><span class="red-txt">"Będziesz miał erekcję nawet w wieku 80 lat!"</span>Dr Jaworski udzielił szczerego wywiadu i zdradził, jak<span class="red-txt"> raz na zawsze rozwiązać problemy z erekcją</span></h1>
	<figure class="mob-show">
		<img src="img/pic1.jpg" />
		<figcaption>Dr Jakub Jaworski: "Po 55 roku życia mężczyzna może mieć taką erekcję, że wystarczy ona zarówno dla żony, jak i kochanki. Bez żadnej chemii"</figcaption>
	</figure>
	<p class="date" data-num="2" style="font-size: 14px;"></p>
	<h2>Dr Jakub Jaworski: kandydat nauk medycznych, doktor honoris causa Polska Akademii Nauk, urolog i androlog w Warszawskie Centrum Medycznym.</h2>
	<p class="h2"><i>"Mój przyjaciel zmarł z powodu przedawkowania Viagry. Dlatego muszę mówić o rzeczach, o których nie mówi się głośno!".</i></p>
	<figure class="mob-hide">
		<img src="img/pic1.jpg" />
		<figcaption>Dr Jakub Jaworski: "Po 55 roku życia mężczyzna może mieć taką erekcję, że wystarczy ona zarówno dla żony, jak i kochanki. Bez żadnej chemii"</figcaption>
	</figure>
	<p>
		Nadszedł czas, aby poruszyć drażliwy temat. Każdego dnia otrzymuję setki e-maili z pytaniem "jak odzyskać kamienną erekcję?" Ale niedawno mój przyjaciel zmarł z powodu mitów farmaceutycznych i tabletek reklamowanych w mediach. Dlatego postanowiłem powiedzieć ci,<b> jak szybko i bezpiecznie przywrócić erekcję, nawet jeśli masz ponad 55 </b>lat. Bez chemikaliów, bez operacji i bez wizyt lekarskich.</p>
	<p><b>Przeczytaj artykuł do końca i dowiedz się więcej:</b></p>
	<div class="yell-bg">
		<ul>
			<li>Dlaczego 9 na 10 mężczyzn traci formę i potencję po 35 roku życia?</li>
			<li>Jakie są niebezpieczeństwa związane z ignorowaniem objawów przy najmniejszym spadku pożądania?</li>
			<li>Czy może prowadzić do impotencji i jakie oznaki wskazują, że nadszedł czas, aby włączyć alarm?</li>
			<li>Jakie 6 produktów spożywczych zwiększa męską potencję?</li>
			<li>Czy możliwe jest szybkie przywrócenie potencji i męskiej siły niedrogo, bez wizyty u lekarza lub uciekania się do operacji?</li>
			<li>Jakie nowoczesne wynalazki naukowe na silną erekcję istnieją obecnie i dlaczego nie można ich kupić w aptekach?</li>
		</ul>
	</div>
	<p>
		Spójrz na mnie: w wieku 63 lat codziennie uprawiam seks i rano podnoszę kołdrę ze stabilną erekcją.<b> Pamiętasz to uczucie? </b> Pomyśl o tym: <b class="red-txt">zaburzenia erekcji występują u 62% mężczyzn po 30. </b>roku życia. A im jesteśmy starsi, tym bardziej prawdopodobne jest, że staniemy się IMPOTENTNI. Ale to nie wyrok śmierci, jeśli zaczniesz działać teraz.</p>
	<p>
		Ale nawet nie to jest szokujące, a fakt, że Viagra, Sildenafil, Dynamico, Maxigra, Cialis, Vizarsin, Tadafail, Impaza, Verona, Androgel i inne leki "na potencję" są nadal sprzedawane w naszych aptekach pod pozorem leczenia. Ironia polega na tym, że <b>tylko pogarszają zaburzenia erekcji, zabijają nadnercza i dosłownie zjadają tętnicę sercową</b>.</p>
	<p>
		Mój przyjaciel zmarł z powodu przedawkowania Viagry. Jego serce zatrzymało się. Straszne jest to, że mogłem mu pomóc, ale nawet nie wiedziałem o problemie.<b>Z tego powodu powiem wszystkim, jak trwale pozbyć się impotencji</b> bez użycia leków chemicznych. Gwarantuję, że <b>zapomnisz o swoich problemach w łóżku w ciągu maksymalnie 4 tygodni</b>.</p>
	<p class="red-txt" style="padding: 10px;border:3px red solid"><b>P.S. Otrzymaliśmy zakaz publikacji tego artykułu. Najpierw firmy farmaceutyczne zaczęły grozić, a potem próbowały płacić. Ale prawda jest warta więcej niż pieniądze.</b></p>
	<h2>"Duża erekcja może być w każdym wieku"</h2>
	<p>Wszyscy słyszeliśmy nazwiska gwiazd showbiznesu, które mają młode kochanki. Nie tylko mogą uprawiać seks godzinami bez żadnych chemikaliów, ale także są w stanie mieć dziecko nawet w wieku 70 lat.</p>
	<img src="img/xpic2.jpg.pagespeed.ic.xByXzdTQlz.jpg" />





	<p>	Jak oni to robią? Znam dokładną odpowiedź. Chodzi o jedno unikalne narzędzie!</p>
	<p>	W latach 90. można go było kupić tylko za duże pieniądze. Ale dziś kosztuje mniej niż śniadanie w przydrożnej kawiarni. A ze zniżką jest prawie za darmo. Ale nie mówią o tym, ponieważ jest to "zabronione". Aptekom bardziej opłaca się sprzedawać tę samą Viagrę, która nie działa dłużej niż 8 godzin, niż oferować naturalny suplement diety, który przywraca skuteczność w ciągu zaledwie 4 tygodni. Mówię o specjalnym leku o nazwie<a href="#">"Erexol</a>".</p>
	<img src="prod.png" />
	<div class="yell-bg">
		<center>
			<b>	UWAGA EDYTORA:</b><br>
			<a href="#">Erexol</a> JEST W 100% NATURALNY I BEZPIECZNY. MOŻE BYĆ STOSOWANY W PRZYPADKU PROBLEMÓW Z UKŁADEM SERCOWO-NACZYNIOWYM NAWET W POŁĄCZENIU Z ALKOHOLEM.</center>
	</div>
	<p>
		Uwierz mi, <a href="#">Erexol</a> jest akceptowany przez wszystkie gwiazdy show-biznesu. To nie tylko najlepszy, ale <b>jedyny lek na powiększenie penisa i erekcję</b>, który mogę polecić. Lekarzom zabroniono o tym mówić, ale zachowałem zdjęcia, które wyraźnie pokazują oszustwo <b>FARMACEUTYCZNE</b>.</p>
	<figure>
		<img src="img/pic3.jpg" />
		<figcaption>	Wszyscy znają Piotra Dziedzica. Ale teraz spójrz, co jest na stole. To jest <a href="#">Erexol</a>. Nawiasem mówiąc, jego kochanka ma tylko 20 lat.</figcaption>
	</figure>
	<p>	Dobrze, że są celebryci, którzy nie wahają się mówić o wynikach stosowania <a href="#">Erexol</a>. Oto co mówią:</p>
	<img src="img/xpic4.jpg.pagespeed.ic.AstGW_X-C4.jpg" />
	<center><p><b>	Adrian Krük:</b><br><i>	"Wokół mnie jest wielu sceptyków i z jakiegoś powodu wszyscy oni próbują nauczyć mnie, jak żyć "właściwie". Wiem, czego chcę w życiu i do czego jestem zdolny. Nauczyłam się słuchać swojego ciała dawno temu, a po kursie <a href="#">Erexol</a> poczułam przypływ energii i siły. Wszystkie problemy z ludźmi, które istniały wcześniej, gdzieś zniknęły. To było tak, jakby obudził się we mnie zwierzęcy instynkt i cel znalezienia młodej, zdrowej i pięknej kobiety. Zdałem sobie sprawę, że MOGĘ i zrobiłem to. Teraz życie jest wypełnione nowymi kolorami. Nie ukrywam i polecam każdemu."</i></p></center>
	<img src="img/xpic5.jpg.pagespeed.ic.w1Dt_KJU2L.jpg" />
	<center><p><b>	Szef kuchni Adam Klimek,</b><br><i><b>jego żona:</b> "Mój Adam  jest teraz bezcenny! Bez względu na to, kto lub co mówi, prześcignie każdego młodego mężczyznę. Tak, były problemy w moim życiu intymnym, nie będę tego ukrywać. Ale moje kontakty pozwoliły mi skontaktować się z lekarzem, który polecił mi <a href="#">Erexol</a>. Nie będę wdawał się w szczegóły, ale efekt był niesamowity i nie kazał na siebie długo czekać. Ponadto "tam" wszystko poszło dobrze i ogólnie całe ciało zostało przywrócone, nie będziemy się radować! Planujemy kolejne dziecko. Teraz jestem pewna, że na tym odcinku nie będzie żadnych problemów. Okazuje się, że wiele osób w naszych kręgach wie o tym lekarstwie".</i></p></center>
	<p>	A także w zeszłym miesiącu był duży odcinek z dr  Zorianem Osińskim na Channel One, w którym mówił o <a href="#">Erexol</a> i nie dawał szans Viagrze, Sildenafilowi i innym lekom. Ale "z jakiegoś powodu" nie wpuszczono go na antenę, a Osiński dostał nowego Mercedesa. Przypadek? Nie sądzę.</p>
	<p>	Ale zrobiłem zdjęcie z transmisji i zacytuję jako naprawdę kompetentny ekspert:</p>
	<figure>
		<img src="img/pic6.jpg" />
		<figcaption>	Osiński:<a href="#">"Erexol</a> to jedyny bezpieczny sposób na osiągnięcie silnej potencji w każdym wieku"</figcaption>
	</figure>
	<p>	Trzeba powiedzieć, że wśród zwykłych ludzi jest wiele historii sukcesu w trakcie korzystania z <a href="#">Erexol</a>. Wielu mężczyzn na widowni podniosło ręce podczas kręcenia filmu. Jeden z nich nawet wyszedł na scenę. Skontaktowałem się z nim przez e-mail. Oto, co powiedział (publikuję to za jego zgodą):</p>

	<div class="gray-bg">
		<img src="img/xpic7.jpg.pagespeed.ic.A503cEesRg.jpg" />
		<p class="center"><b>	Mariusz Witek, 60 lat, Łódź</b></p>
		<p>	Po wielu latach wspólnego życia z moją żoną, stanęliśmy przed dość delikatnym problemem. Na początku kategorycznie odmawiałem chodzenia do lekarzy! Z tym samym problemem zabili mojego ojca. Przyczynę spadku potencji tłumaczył zmianą pracy, ciągłym stresem i innymi wymyślonymi czynnikami.</p>
		<p>	W końcu żona namówiła mnie na wizytę. Teraz myślę, że to dobrze, że nie dałem się nabrać na kilka zaleceń i nie kupiłem góry tabletek, które mi przepisali. Musiałbym wziąć pożyczkę, żeby za wszystko zapłacić. A potem, kiedy mówili mi o procedurach, o tym, co gdzie przykleją... Uciekam ze szpitali z rękami na nogach. Tak się rozwiedliśmy z żoną! A i tak nie dostałem normalnej pomocy.</p>
		<p>	Przez mojego przyjaciela dostałem się na plan. On również był w centrum uwagi, został wywołany na scenę. Po tym, jak dr Osiński polecił mi <a href="#">Erexol</a> w programie, wszystkie problemy zniknęły same. Zacząłem go brać i po jakimś czasie seks stał się niesamowity, nigdy nie doświadczyłem tyle przyjemności. Moje zdrowie wróciło do normy, całe moje ciało zostało zregenerowane. Odmłodniałem o 20 lat i odzyskałem formę! Teraz robię pompki bez zadyszki, podciągam się na drążku, a zimą zacząłem się też odżywiać.</p>
		<p>	Polecam <a href="#">Erexol</a> każdemu. Nawet się nie wahaj!</p>
	</div>
	<p>	Muszę przyznać, że Mariusz miał szczęście. Był w stanie przyjmować <a href="#">Erexol</a> bez niczyjej próby zniechęcenia go, więc był w stanie bezpiecznie odzyskać swoją męskość dla swojego ciała.</p>
	<p>
		Ale niestety są też inne historie. Pewnego dnia otrzymałem list od 48-letniego mężczyzny, któremu również poleciłem <a href="#">Erexol</a>. Kilka miesięcy później napisał do mnie, że jego krewni zniechęcili go do stosowania tego produktu! Nie wierzyli w jego skuteczność, w wyniku czego <b>nieszczęśnik udał się do szpitali w poszukiwaniu rozwiązań, zadłużył się, aby zapłacić za drogie leczenie i ostatecznie popełnił samobójstwo</b>.</p>
	<p>	Moja żona odnalazła naszą korespondencję i powiedziała mi o tragedii oraz o tym, że jest jej bardzo przykro, że wtedy mi nie uwierzyła. Gdyby mój mąż zaczął przyjmować <a href="#">Erexol</a>, kiedy miał taką możliwość, nie doszłoby do tego!</p>
	<p>	Jak widać, wielu lekarzy wie o tym leku. Wstyd mi, że milczałem na ten temat przez tyle lat. Ale jestem poprawiony, więc zachowaj ten post i kup <a href="#">Erexol</a> przed usunięciem artykułu.</p>
	<h2>	Jak działa <a href="#">Erexol</a> </h2>
	<p>	<a href="#">Erexol</a> zawiera unikalne składniki w intensywnej, skoncentrowanej formie, które silnie zwiększają poziom testosteronu:</p>
	<ul>
		<li><b>Palma sabałowa.</b> Przywraca przepływ krwi w narządach miednicy, wzmacnia struktury gruczołu krokowego;</li>
		<li><b>Yohimbe.</b> Aktywuje syntezę testosteronu, co przyczynia się do przywrócenia aktywności seksualnej, reguluje metabolizm lipidów;</li>
		<li><b>Jałowiec.</b> Normalizuje funkcję gruczołu krokowego, blokuje procesy zapalne;</li>
		<li><b>Śliwka afrykańska.</b> Substancja ta jest często stosowana w urologii do leczenia i zapobiegania chorobom układu moczowo-płciowego;</li>
		<li><b>Koncentrat ze szparagów.</b> Wzmacnia libido, wzmacnia ściany naczyń krwionośnych, pomaga przywrócić erekcję i funkcje rozrodcze;</li>
		<li><b>Cyprys.</b> Pozwala uzyskać kontrolę nad wytryskiem i ma pozytywny wpływ na ogólne samopoczucie.</li>
	</ul>
	<p>	Jest to w 100% naturalny koncentrat, który przywraca funkcje erekcji do poziomu 20-letniego mężczyzny, nawet jeśli masz ponad 55 lat.</p>
	<p>
		<a href="#">Erexol</a> jest biologicznym aktywatorem. Oznacza to, że zawiera wyłącznie <b>naturalne składniki</b>, które natychmiast kierują przepływ krwi do ciał jamistych (pojawiają się erekcje - przyp. red.) i <b>dają impuls do naturalnej syntezy testosteronu</b>. </p>
	<p><b class="red-txt">TESTOSTERON JEST KLUCZEM DO MĘSKIEJ SIŁY</b>. Dużo testosteronu - jesteś <b>silny, wysportowany, seksowny, z górą masy mięśniowej, możesz dużo i</b>długo. Za mało - jesteś bezkształtną amebą z piwnym brzuchem i wiotkim penisem.</p>
	<p>
		<a href="#">Po</a> tym czasie możesz nadal przyjmować go wyłącznie jako środek zapobiegawczy. Zwłaszcza jeśli nie możesz pochwalić się sprawnością fizyczną, zjesz piwny brzuch, to polecam wydłużenie okresu przyjmowania, a wkrótce będziesz <b>podnosić ciężary i patrzeć na siebie w lustrze z przyjemnością!</b></p>
	<img src="img/xpic8.jpg.pagespeed.ic._Tk5_5T7DT.jpg" />






	<p>	Po jego zażyciu nie tylko uzyskasz natychmiastowy efekt kamiennej erekcji przez kilka godzin, ale także w ciągu 3-4 tygodni całkowicie przywrócisz erekcję do poziomu 20-letniego mężczyzny.</p>
	<div class="yell-bg">
		<center>
			<p><b>	INTERESUJĄCY FAKT:</b><br>
				Unikalną cechą <a href="#">Erexol</a> jest to, że im jesteś starszy, tym lepszy efekt możesz osiągnąć.</p>
			<b>WSKAZÓWKA REDAKTORA:</b><br>	JEŚLI CHCESZ PRZYWRÓCIĆ SWOJĄ EREKCJĘ W CZASIE KRÓTSZYM NIŻ TYDZIEŃ, <a href="#">Erexol</a> musi być przyjmowany w sposób zorganizowany.</center>
	</div>
	<p><b>	Cechy <a href="#">Erexol</a>:</b></p>
	<ul style="border: 1px #000 solid;padding:10px 10px 10px 30px">
		<li>Zwiększona erekcja z natychmiastowym pobudzeniem po użyciu.</li>
		<li>Zwiększony popęd seksualny.</li>
		<li>Przywrócenie wydzielania testosteronu.</li>
		<li>Nieznaczne zwiększenie rozmiaru penisa (do 2-4 cm na cykl podawania).</li>
		<li>Zwiększona aktywność plemników (jeśli nie chcesz mieć dzieci w wieku 55+, stosuj antykoncepcję).</li>
	</ul>
	<p>	Jest to jedyny produkt, który normalizuje produkcję testosteronu bez użycia chemikaliów, co potwierdzają badania Polski Instytutu Badawczego Andrologii. Badanie to objęło 3700 mężczyzn w wieku od 55 do 73 lat. 98% ankietowanych potwierdziło, że <a href="#">Erexol</a> całkowicie rozwiązał ich problemy z intymnością.</p>
	<p>	Po zażyciu leku <a href="#">Erexol</a> organizm przechodzi przez 4 fazy regeneracji erekcji:</p>
	<ul>
		<li>	W 7 minut po zażyciu pojawia się stabilna erekcja nawet u osób z całkowitą impotencją.</li>
		<li>	Po 15 minutach użytkowania mięśnie dna miednicy, które są odpowiedzialne za czas trwania seksu, są ujędrnione.</li>
		<li>	Po 60-70 minutach wrażliwość penisa wzrośnie (powróci do normy, jak w młodym ciele), zapewniając silny orgazm.</li>
		<li>	Po 5 godzinach pobudzenie (reakcja na pożądanie seksualne) ustępuje, ale pozostaje na wysokim poziomie przez kolejne 36 godzin.</li>
	</ul>
	<p><i><b>P.S</b>. W okresie od 8 do 28 dnia ciągłego stosowania pojawią się poranne erekcje, co będzie wskazywać na całkowite przywrócenie testosteronu.</i></p>
	<div class="yell-bg">
		<center><b>	Dr Jaworski:</b><br>	ZANIM ODPOWIEM NA KOLEJNE WAŻNE PYTANIE: TAK, PO KURSIE <a href="#">Erexol</a> TWÓJ PENIS STANIE SIĘ O 2-4 CENTYMETRY WIĘKSZY NIŻ PO NORMALIZACJI ZDROWEGO KRĄŻENIA KRWI W OBSZARZE MÓZGU. EFEKT BĘDZIE TRWAŁ PRZEZ CAŁE ŻYCIE, ALE NIE BĘDZIE ZWIĄZANY Z POWTARZAJĄCYM SIĘ PROCESEM!</center>
	</div>
	<p>	Chcę dotrzeć również do kobiet! Jeśli nie jesteś zadowolona z intymnych relacji ze swoim partnerem, jeśli ma on słabą erekcję i szybki wytrysk, nie szukaj od razu zastępstwa! Po prostu zaproponuj mu wypróbowanie <a href="#">Erexol</a>, a już wkrótce będziesz w pełni zadowolona ze swojego mężczyzny, gwarantuję Ci!</p>
	<p>
		Przebieg <a href="#">Erexol</a> <b>wywołuje reakcję łańcuchową pozytywnych zmian w organizmie</b>. Po opanowaniu jednego poważnego problemu, organizm pozbywa się następnego, trzeciego i tak dalej.</p>
	<img src="img/xpic9.jpg.pagespeed.ic.QW29fTr5ul.jpg" />






	<p class="h2 color2"><b>	1) Zdrowa prostata</b></p>
	<p>	Po pełnym cyklu leczenia preparatem <a href="#">Erexol</a> funkcja prostaty zostaje w pełni przywrócona. Stan zapalny zostaje wyeliminowany, poprawia się krążenie krwi w narządzie. Ból, pieczenie i inne nieprzyjemne odczucia znikają.</p>
	<p class="h2 color2"><b>	2. całkowite przywrócenie układu moczowego</b></p>
	<p>	<a href="#">Erexol</a> całkowicie przywraca prawidłowe oddawanie moczu, poprawia urodynamikę i zmniejsza objętość zalegającego moczu. Pacjenci zgłaszają, że:</p>
	<ul>
		<li>Ból i skurcze podczas oddawania moczu zniknęły.</li>
		<li>Nie biegają do łazienki co pięć minut.</li>
		<li>Pęcherz działa jak w zegarku.</li>
		<li>Objawy pęcherza nadreaktywnego i uczucie pełności ustępują.</li>
	</ul>
	<p class="h2 color2"><b>	3. "Kamienna" erekcja w każdym wieku!</b></p>
	<p>	<a href="#">Erexol</a> ma pozytywny wpływ na erekcję. Dzięki działaniu składników produktu normalizuje się krążenie krwi w miednicy małej.</p>
	<ul>
		<li>Erekcje stają się regularne i mocne.</li>
		<li>Stosunek seksualny jest przedłużony.</li>
		<li>Poprawia się jakość nasienia.</li>
		<li>Poczucie intymności staje się silniejsze.</li>
	</ul>
	<p class="h2 color2"><b>	4. Usuwanie obrzęków</b></p>
	<p>	W trakcie przyjmowania leku <a href="#">Erexola</a>przywracana jest prawidłowa czynność nerek i metabolizm płynów w organizmie. Nerki przestają zatrzymywać wodę i nie ma potrzeby przyjmowania leków moczopędnych.</p>
	<ul>
		<li>Ból i obrzęk nóg ustają.</li>
		<li>Brzuch kurczy się wraz z ustępowaniem obrzęku narządów wewnętrznych.</li>
		<li>Płyn z płuc znika, a oddychanie staje się łatwiejsze.</li>
	</ul>




	<p class="h2 color2"><b>	5. Hemoroidy nie będą już przeszkadzać</b></p>
	<p>	Dzięki poprawie krążenia krwi i wzmocnieniu ścian żył, hemoroidy ustąpią i nie będą już przeszkadzać.</p>
	<p class="h2 color2"><b>	6. Przywrócenie funkcji serca</b></p>
	<p>	Składniki produktu mają korzystny wpływ na napięcie mięśnia sercowego. W 93% przypadków tachykardia ustępuje, w 99% - niedokrwienie.</p>
	<ul>
		<li>Tętno i puls są znormalizowane.</li>
		<li>Ból w moim sercu zniknie.</li>
		<li>Ryzyko zawału serca zmniejsza się 17-krotnie.</li>
	</ul>
	<p class="h2 color2"><b>	7. Wzmocnienie odporności</b></p>
	<p>	Poprawia krążenie krwi nie tylko w narządach miednicy, ale także w szpiku kostnym, który bierze udział w tworzeniu komórek odpornościowych. Prowadzi to do zwiększenia odporności organizmu.</p>
	<div class="yell-bg" style="text-transform: uppercase;">
		UDOWODNIONO, ŻE MAJ I CZERWIEC SĄ NAJLEPSZYMI OKRESAMI NA STOSOWANIE <a href="#">Erexol</a> DLA OSÓB, KTÓRE CHCĄ PRZYWRÓCIĆ TESTOSTERON DO NORMALNEGO POZIOMU. W TYM OKRESIE SKUTECZNOŚĆ LEKU JEST O 42% WIĘKSZA, NIŻ W PRZYPADKU WCZEŚNIEJSZEGO ZMNIEJSZENIA METABOLIZMU.</div>
	<p class="h2"><b><span class="red-txt">Uwaga!</span> <a href="#">Erexol</a> nie może być zakupiony w aptece. Mieszkańcy Polski mogą zamówić ten produkt online bezpośrednio od producenta.</b></p>
	<p>	Aby uniknąć spekulacji, producent leku nie zawarł umów z aptekami i przeszedł na dystrybucję wyłącznie przez Internet. Zasadniczo jest to słuszne.</p>
	<p>	Oceń sam: nie musisz płacić za wynajem pomieszczeń biznesowych, nie musisz płacić łapówek aptekom, aby się do nich dostać. Dlatego <a href="#">Erexol</a> jest teraz znacznie tańszy niż produkty farmaceutyczne.</p>
	<p><b>	Dzieje się tak z trzech powodów:</b></p>
	<ol>
		<li><b>Jakość.</b> <a href="#">Erexol</a> jest dostarczany bezpośrednio z fabryki do klienta.</li>
		<li><b>Ochrona pośredników.</b> 	 Żeby nikt nie mógł zarobić 10-20-30 tysięcy złotych na odsprzedaży</li>
		<li><b>	Szybka dostawa do domu</b></li>
	</ol>
	<p>
		Teraz możesz otrzymać produkt <a href="#">Erexol</a> ze <b class="red-txt">zniżką do 50%</b> - przy rezerwacji kursu. Należy pamiętać, że liczba pakietów promocyjnych jest ograniczona, wyprzedają się one bardzo szybko, więc lepiej się pospieszyć.</p>



	<div class="yell-bg">
		<p class="center"><b>	Warunki uczestnictwa w losowaniu rabatów:</b></p>
		<ol>
			<li><b>	Być obywatelem polskim powyżej 18 roku życia.</b><br>	Promocja jest skierowana wyłącznie do pełnoletnich obywateli Polski.</li>
			<li><b>	Zakup wyłącznie do użytku osobistego.</b><br>	Jest to konieczne w celu zwalczania nadmiernej sprzedaży.</li>
			<li><b>
				Tylko poprzez oficjalną<a href="#">loterię</a>.</b><br>

				Ze względu na ograniczoną ilość produktu, lek jest sprzedawany za pośrednictwem oficjalnej loterii - zamieszczonej poniżej na stronie internetowej.</li>
		</ol>
	</div>
	<p style="padding: 10px;border:1px #000 solid"><b><span class="red-txt">UWAGA:</span>W ramach promocji od <a href="#">Erexol</a> można uzyskać rabat od <span class="red-txt">10% do 50% (159 zł za</span> akcję). Aby to zrobić, należy otworzyć drzwi i wygrać rabat, wypełniając poniższy formularz zamówienia na adres<span class="date" data-num="0"></span> (włącznie). Liczba akcji jest ograniczona!</b></p>


	<div id="ToForm" class="init-doors"></div>

	<p class="h2"><b>Uwagi:</b></p>
	<div class="printing comm-block"><i>Rodzaje użytkowników<span id="myElement">.</span>..</i></div>











































	<div class="b-comments" id="first-comment" style="display: none;">
		<div class="b-comments__comment">
			<img src="avatars/ru/m1.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Kamil <i>(Warszawa)</i></div>
				<div class="b-comments__item-text">
				Kupiłem to! Ludzie, to jest naprawdę coś niesamowitego. Kiedyś brakowało mi energii podczas seksu, byłem już wyczerpany, a moja żona zawsze chciała więcej. Nic nie mówiła, ale to było oczywiste. Bałem się, że zacznie szukać innych mężczyzn. Teraz jest inaczej! Daję jej nierealne orgazmy. Osobiście dałbym nagrodę za odkrycie takiego remedium!<img src="live1.jpg" style="width: 100%; max-width: 300px"></div>
			</div>
		</div>
	</div>
	<div class="b-comments" id="comm-flag">
		<div class="b-comments__comment">
			<img src="avatars/ru/m2.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Ján Kowalski  <i> (Poznań)</i></div>
				<div class="b-comments__item-text">

				Całe życie cierpiałem na potencję, czyli jej brak. Lekarz powiedział mi nawet: "To specyfika twojego ciała". I co z tego? Mam z tym żyć? Nie mogłem się ożenić, chociaż zawsze chciałem mieć rodzinę, nie mam wad, lubię siedzieć w domu, mam dobrą pracę, wystarczająco dużo pieniędzy, ale z powodu moich niepowodzeń w łóżku kobiety mnie opuszczały, a potem przestałem się z nimi spotykać, wycofałem się w siebie. Więc dla mnie Erexol jest nadzieją.</div>
			</div>
		</div>
	</div>
	<div class="b-comments reply">
		<div class="b-comments__comment">
			<img src="avatars/ru/m3.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Michał Zieliński  <i>(Lublin)</i></div>
				<div class="b-comments__item-text">

				Ján, mój przyjacielu! Osobliwość czy nie, to nie jest powód! Mówię to jako lekarz. Zamów Erexol, a zapomnisz o wszystkich problemach. Wszystko się ułoży, a samotne dziewczyny zaczną cię szukać! Sukces!</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/w1.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Agnieszka <i>(Gdynia)</i></div>
				<div class="b-comments__item-text">

				Zamówiłam go dla mojego męża. Zaniemówiłam! Dziękuję za informację! )) Mój mąż jest teraz dosłownie jak zwierzę, nie widziałam go tak aktywnego od około 10 lat. Teraz najlepszym rozwiązaniem dla nas jest pójście do łóżka, kiedy się kłócimy)))</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m4.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Bartek Pecák <i>(Toruń)</i></div>
				<div class="b-comments__item-text">

					Z moją pierwszą żoną były problemy, nie była w 100% zadowolona z seksu. Cóż, rozmiary są skromne, seks jest szybki i tak dalej. Rozważałem nawet operację, ale żona i tak odeszła. Dobrze, że takie środki istnieją, postaram się obejść bez operacji i już inne kobiety będą miały ze mną lepiej. Postawiłem w widocznym miejscu, żeby nie zapomnieć wypić.<img src="live2.jpg" alt="" style="width: 100%; max-width: 300px"></div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m5.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Nikolai Lewandowski <i>(Kraków)</i></div>
				<div class="b-comments__item-text">

					Dzięki za informację! To bardzo ważne. Potem przeczytałem wiele interesujących rzeczy na temat Viagry. Głównym składnikiem Viagry jest cytrynian sildenafilu. Jest to substancja chemiczna, która po spożyciu wywołuje reakcje powodujące rozszerzenie żył w narządach płciowych, co z kolei prowadzi do zwiększonego przepływu krwi. Oznacza to, że Viagra w rzeczywistości nie wpływa na potencję ani nie zwiększa pożądania seksualnego, ale istnieje wiele czynników, które mogą niekorzystnie wpływać na zdrowie - od obciążenia wątroby po niekontrolowane nadciśnienie tętnicze (podwyższone ciśnienie krwi i obciążenie serca). Ogólnie rzecz biorąc, pilnie szukałem zamiennika i wygląda na to, że znalazłem. Tylko <a href="#">Erexol</a> nie ma szkodliwego wpływu na organizm!</div>
			</div>
		</div>
	</div>
	<div class="b-comments reply">
		<div class="b-comments__comment">
			<img src="img/xdoc.jpg.pagespeed.ic.Hvlh4h8h9r.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Jakub Jaworski <i>(Warszawa)</i></div>
				<div class="b-comments__item-text">

					Cześć Nikolai, powodzenia! Bardzo się cieszę, mam nadzieję, że zmieni to życie wielu osób. Z poważaniem, dr Jaworski.</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="img/xav4.jpg.pagespeed.ic.ONnFKU6bf1.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Veronika Sopotná <i>(Łódź) </i></div>
				<div class="b-comments__item-text">

					Postanowiłam rozwodnić wasze męskie towarzystwo, bo też mam coś do powiedzenia. Zamówiliśmy go dla mojego męża i tak, wtedy też płaciliśmy szalone pieniądze. Ale polecił nam go jego lekarz, były problemy z erekcją. Generalnie po tygodniu wszystko wróciło do normy. Mój mąż i ja nie mogliśmy się nim nacieszyć! I do dziś wszystko jest w porządku, absolutnie żadnych problemów. Jako kobieta mogę z całą pewnością powiedzieć, że rozmiar znacznie się zwiększył, przynajmniej w stanie podniecenia jest to 100%. Mój mąż jest zawstydzony, nie chce się do tego przyznać, ale ja to widzę!<img src="img/o4.jpg"></div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m8.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Pavel Kwiatkowski <i>(Wrocław)</i></div>
				<div class="b-comments__item-text">

					Moja żona i ja staramy się o dzieci od wielu lat, ale wciąż nic! Na tle nerwowym zanikała również potencja. Wszyscy lekarze nawet nie wiedzieli, co robić. Przez przypadek trafiłem na Pana artykuł, spróbuję. Może coś pomoże.</div>
			</div>
		</div>
	</div>
	<div class="b-comments reply">
		<div class="b-comments__comment">
			<img src="avatars/ru/w44.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Kamila Nowicki  <i> (Szczecin)</i></div>
				<div class="b-comments__item-text">

					Paul, wszystko jest dozwolone! Warto spróbować! Lek <a href="#">Erexol</a> jest doskonały. My z mężem też nie mogliśmy mieć dzieci. Z analizy wynikało nawet, że jest bezpłodny. 2 miesiące później, po zaledwie jednym kursie, zaszłam w ciążę i teraz spodziewamy się bliźniaków. A mój mąż w przyszłym miesiącu skończy 56 lat!<img src="img/xo5.jpg.pagespeed.ic.Nvs4CISdkK.jpg"></div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/w3.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Maja Sikora <i>(Kraków)</i></div>
				<div class="b-comments__item-text">
					Całkowicie zgadzam się z tym, co jest tutaj napisane! Przypadkowo dowiedziałam się o <a href="#">Erexol</a> i teraz polecam go każdemu! Mój mąż jest kierowcą ciężarówki. Z powodu ciągłego życia w trasie i wibracji podczas jazdy zaczął mieć problemy, mimo że wcześniej wszystko było w porządku. Minęło pół roku odkąd go bierze i wszystko się poprawiło w łóżku:) Swoją drogą zamawiałem tutaj, na oficjalnej stronie, także załapałem się na darmową promocję. Uważaj, aby nie natknąć się na oszustów!</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m10.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Bartosz Chmielewski  <i> (Kalisz)</i></div>
				<div class="b-comments__item-text">

					Lek ten pomógł mi odzyskać potencję kilka miesięcy temu. Mój penis wyraźnie się powiększył. W końcu i ja jestem szczęśliwy! Teraz godzinami nie wychodzimy z łóżka, próbowaliśmy w miejscach publicznych. Stoi jak siekiera. Moja żona jest w siódmym niebie. To wspaniałe uczucie! Gorąco polecam.<img src="live3.jpg" alt="" style="width: 100%; max-width: 300px"></div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m11.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Marek Kubiak <i>(Koszalin)</i></div>
				<div class="b-comments__item-text">

					
Używałem Viagry przez długi czas dla lepszej erekcji i pewności siebie. W rezultacie, po kilku latach przyjmowania Viagry, mój penis nie chciał pracować bez niej. Myślałem, że stałem się impotentem. Umówiłem się na wizytę u najlepszego lekarza w Warszawie, który przepisał mi Erexol. Powiedział, że mogę odzyskać potencję w ciągu tygodnia. I zadziałało! Znów zadowalam moją żonę seksem wysokiej jakości. Powiem więcej, nigdy nie mieliśmy tak fantastycznego seksu. Gorąco polecam! Efekt jest super, dostawa szybka, a cena świetna!</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="img/xav2.jpg.pagespeed.ic.hJAAK9k7nY.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Marek Szczepański <i>(Płock)</i></div>
				<div class="b-comments__item-text">

					Jestem trenerem fitness. Słyszałem o podobnych lekach dla mężczyzn, ale jakoś zawsze byłem podejrzliwy. Zasadniczo jest to rozwód i ma negatywny wpływ na męską potencję, zostało to już udowodnione! Ale tutaj w artykule lekarz mnie przekonał, dzięki człowieku! Wypróbowałem <a href="#">Erexol</a> za twoją radą. Rezultat to bomba: przypływ energii, nie duszę się już na siłowni, mięśnie zaczęły rosnąć skokowo, erekcja jest zawsze tym, czego potrzebuję, a według męskich wskaźników wszystko jest w normie (przeszedłem testy)! Polecam każdemu!<img src="img/xo2.jpg.pagespeed.ic.Yxv7bseZVr.jpg"></div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m12.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Kacper Petrovský <i>(Katowice)</i></div>
				<div class="b-comments__item-text">

					Gratulacje, ja też stałem się dumnym posiadaczem <a href="#">Erexola</a>! Wziąłem 4 paczki na raz)))) W końcu przed nami tyle rodzinnych wakacji, a ja mam już dość kłótni z żoną. A tak przy okazji, dostałem zniżkę dzięki temu wydarzeniu.</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m13.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Alex Kalinowski  <i>(Białystok)</i></div>
				<div class="b-comments__item-text">

				Moja żona jest młodsza, ma 30 lat, jesteśmy razem od 2 lat. Pokochała mnie jako osobę, ale nie jest zadowolona z seksu ze mną. Niedawno wyznała mi, że nie może już tego znieść, seks ze mną w ogóle jej nie cieszy. Bardzo kocham moją żonę i byłem gotów zrobić wszystko. Poszedłem do nowoczesnej kliniki w Warszawie i lekarz przepisał mi Erexol. Od razu poczułem efekt, teraz mogę uprawiać seks przez 2 godziny z rzędu, a moja żona jest szczęśliwa. I ja też jestem szczęśliwy, nigdy wcześniej nie pieprzyłem się tak mocno, czuję się pewnie.
				</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/w4.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Żaneta N. <i>(Lublin) </i></div>
				<div class="b-comments__item-text">

					Mój mąż ma 42 lata, ja 33. Jesteśmy razem od 8 lat, z biegiem lat zaczęliśmy spędzać coraz mniej czasu razem, kłótnie i skandale nasiliły się, kiedy prawie doszło do rozwodu, przez trzy miesiące mieszkałam z matką. Zaledwie pół roku temu dowiedziałam się o <a href="#">Erexol</a> na forum "Jak uratować małżeństwo". Bierzemy go często i długo, bo lek nie obciąża serca mojego męża, a ja też jestem młoda i chcę mieć dzieci.</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="img/xav8.jpg.pagespeed.ic.slfSn1ne1-.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Kenai R. <i> (Gdańsk)</i></div>
				<div class="b-comments__item-text">

					Zawsze jestem za naturalnością. Ale nie zdawałem sobie sprawy, że nie można uzyskać masy mięśniowej bez chemii, dopóki nie znalazłem artykułu o <a href="#">Erexol</a>. Byli tam wybitni trenerzy, którzy opowiadali o tym leku, o tym jak wyzdrowieli i sami przybrali na wadze. Zobacz rezultat.<img src="img/o8.jpg"></div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m15.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Edek <i> (Warszawa)</i></div>
				<div class="b-comments__item-text">
					Dzięki za interesujący artykuł. Zdecydowanie go zamówię!</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m16.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Milosz Zavalašil <i>(Łódź)</i></div>
				<div class="b-comments__item-text">

				Zgadzam się z każdym słowem! Dowiedziałem się o Erexola w mediach społecznościowych i postanowiłem spróbować. Zamówiłam cały lek, tak na wszelki wypadek. Nie żałowałam ani razu. Po kilku miesiącach doszedłem do siebie, zacząłem nawet ćwiczyć - miałem tyle energii. Moja żona i ja jesteśmy szczęśliwi! </div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m17.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Henryk Cieślak <i>(Bydgoszcz)</i></div>
				<div class="b-comments__item-text">

					<a href="#">Erexol</a> widziałem już wcześniej w telewizji. A tu polecam lekarza z telewizji. Nie rozumiem, czy trzeba przelewać pieniądze od zera i gdzie trzeba płacić?</div>
			</div>
		</div>
	</div>
	<div class="b-comments reply">
		<div class="b-comments__comment">
			<img src="avatars/ru/m18.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Radosław <i>(Wrocław)</i></div>
				<div class="b-comments__item-text">

					George, nie musisz nic płacić z góry, o to właśnie chodzi. Płacisz po odebraniu pakietu osobiście. A dzięki wydarzeniu zapewniają zniżki do 50%! A tak przy okazji, na opakowaniu nie jest napisane, że to na potencję, wszystko jest anonimowe i stworzone dla ludzi.</div>
			</div>
		</div>
	</div>
	<div class="b-comments reply">
		<div class="b-comments__comment">
			<img src="img/xdoc.jpg.pagespeed.ic.Hvlh4h8h9r.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Jakub Jaworski <i>(Warszawa)</i></div>
				<div class="b-comments__item-text">
				Henryk, oczywiście, to działa tak, jak powinno! Pomógł już wielu osobom! Szczerze polecam! I jak słusznie zauważyłeś, nie musisz nic płacić z góry, tylko po osobistym odbiorze przesyłki od kuriera firmy spedycyjnej.</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/w10.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Laura Orechová <i>(Zabrze) </i></div>
				<div class="b-comments__item-text">
					Mój mąż ma 48 lat, jego penis nigdy nie był duży, ale rekompensował to dzikim seksem. Ale po 35 latach penis zaczął się spuszczać, seks zajął nam około 5 minut. I to wszystko!!! Wcale mnie to nie bawi. On jest dobrym człowiekiem, mamy dzieci, kocham go, nie chcę rozwodu, chcę zachować rodzinę. Ale takie życie jest po prostu nie do zniesienia. Jestem jeszcze młoda, chcę pełnego seksu. Myślę o innych mężczyznach, ale zdrada męża jest przerażająca. Kupiłam mu <a href="#">Erexol</a>, przekonam go, żeby spróbował, może to coś zmieni. </div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/w11.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Zuzia <i>(Gliwice)</i></div>
				<div class="b-comments__item-text">

					Trudno w to uwierzyć... Ale tak wiele osób mówi, że to działa, powinno działać. Skonsultowałam się z mężem, jest gotowy spróbować, nie może się doczekać tej nocy miłości, tak jak to robił w wieku 20 lat</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m20.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Jacek Kopecký <i>(Rzeszów)</i></div>
				<div class="b-comments__item-text">

					To po prostu cud, tak. Natychmiast zamówiłem <a href="#">Erexol</a>, gdy tylko usłyszałem, że to był wielki żart. Szkoda tylko, że nie wynaleziono go 5 lat temu.</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m21.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Robert <i>(Kielce)</i></div>
				<div class="b-comments__item-text">

					<a href="#">Erexol</a> pomógł. Ja też prawie wyrzuciłem moje łyżwy po Viagrze! Zacząłem mieć problemy z poceniem się, myślałem, że Viagra pomoże, przepaliłem na nią połowę pensji. Zacząłem szukać alternatywy. Próbowałem wielu różnych rzeczy, ale nie zauważyłem żadnego efektu. Wypróbowałem <a href="#">Erexol</a>, na początku nie rozumiałem go, ale nie przestałem go brać i stopniowo zacząłem zauważać poprawę. A teraz jestem z siebie ogólnie zadowolony!!! Polecam, polecam, sprawdzone! </div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/w14.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Oliwia <i>(Warszawa)</i></div>
				<div class="b-comments__item-text">
					Hej wszystkim! Zamówiłam go dla mojego męża i nie mam nic przeciwko... Teraz nie mogę się doczekać paczki. :)</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="img/xav12.jpg.pagespeed.ic.H5bku70nS8.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Tomáš Lipták <i>(Warszawa)</i></div>
				<div class="b-comments__item-text">
					Całe życie byłem idiotą, myślałem, że nic nie pomoże, dziewczyny zawsze przechodziły obok. Kupiłem <a href="#">Erexol</a>, żeby powiększyć kutasa. I wtedy mięśnie zaczęły rosnąć, podwójny efekt jak napisano! Radzę!<img src="img/xo12.jpg.pagespeed.ic.oFZd2hsjm8.jpg"></div>
			</div>
		</div>
	</div>
	<div class="b-comments reply">
		<div class="b-comments__comment">
			<img src="img/xav13.jpg.pagespeed.ic.cV317eogVp.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Hassan Matějko <i>(Kraków)</i></div>
				<div class="b-comments__item-text">

					Mam odwrotny efekt. Byłem gruby, po kursie z <a href="#">Erexol</a>zacząłem wyglądać jak mężczyzna, wszystko w ciele się zmieniło, zamiast tłuszczu rozpoczął się proces wzrostu mięśni.<img src="img/xo13.jpg.pagespeed.ic.ysd-kRWJdy.jpg"></div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/w13.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Karolina <i>(Poznań)</i></div>
				<div class="b-comments__item-text">
					Szanuję tego lekarza, nie boi się rozmawiać na takie tematy).</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m24.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Maciej Kufl <i>(Szczecin)</i></div>
				<div class="b-comments__item-text">

					Tak, <a href="#">Erexol</a> też mi pomógł, też zamawiałam go przez loterię, nawet nie szukaj w aptekach, nie. Długo nie wiedziałam, czy powinnam, bo nie powinnam go brać. Skontaktowałem się z jednym z mężczyzn, którzy zostawili złe recenzje na różnych stronach. Okazało się, że pochodził z Rosji, zapłacono mu za tę pracę i nigdy nie widział tego <a href="#">Erexolu</a>! Takich ludzi trzeba po prostu udupić, bo inaczej nie dostaną. Jak ten kraj wciąż jest do bani???? nie słuchaj oszustów, zwłaszcza z Rosji jest teraz pełen oszustów. Oni są hodowcami ludzi.</div>
			</div>
		</div>
	</div>
	<div class="b-comments reply">
		<div class="b-comments__comment">
			<img src="avatars/ru/m25.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Mateusz Nowacki <i>(Łódź)</i></div>
				<div class="b-comments__item-text">

					Martin, to jest zdrowe! Cóż, tak, istnieje wiele takich stron. Niedawno przeprowadzono dochodzenie w sprawie tego, skąd to wszystko pochodzi. A pochodzi to z Rosji. Chociaż nic dziwnego, że teraz piszą wszystko, co nie jest dla nas przydatne.</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m34.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Filip Kania <i>(Warszawa)</i></div>
				<div class="b-comments__item-text">

					Zamówiłem <a href="#">Erexol</a> tylko na powiększenie penisa, od dawna słyszałem, że pomaga. Ale rozwiązał wszystkie moje problemy, na które długo plułem, bo nic nie pomagało. Seks był kilka razy w roku, wmawiałem sobie, że tak powinno być. A teraz erekcja jest taka, że mogę to robić kilka razy dziennie. A penis urósł o 3 cm. To niewiarygodne!<img src="img/xo14.jpg.pagespeed.ic.zX_xy4MOUc.jpg"></div>
			</div>
		</div>
	</div>
	<div class="b-comments reply">
		<div class="b-comments__comment">
			<img src="avatars/ru/w20.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Gabriela Hatašová <i>(Warszawa)</i></div>
				<div class="b-comments__item-text">

					Twoja dziewczyna ma szczęście. Jestem zazdrosny. Ja też chcę duże, długie i grube... PM me ;-)</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m38.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Tomáš <i>(Radom)</i></div>
				<div class="b-comments__item-text">

					Dziękuję za jasną i zwięzłą opowieść o <a href="#">Erexol</a>. Zdecydowanie spróbuję!</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m26.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Reto Dziedzic <i>(Katowice) </i></div>
				<div class="b-comments__item-text">

					Mężczyźni! Kto pytał, czy smak nasienia się zmienia? Do gustu dziewczyny! Po <a href="#">Erexol</a> nadal chce mi się palić. Naprawdę mi się podoba. Osobiście polecam. Przy okazji, z rozmiarem też wszystko w porządku. Jak dotąd żadna z nich nie była w stanie w pełni sobie z tym poradzić...<img src="img/xo15.jpg.pagespeed.ic.mX3u1YuuTV.jpg"></div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m27.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">	Kacper Dobrowolski <i>(Bydgoszcz)</i></div>
				<div class="b-comments__item-text">

					Przed wydarzeniem postanowiłem zaoszczędzić pieniądze i zamówić z innej strony po niższej cenie. Rezultatem był jakiś nonsens. Zaryzykowałem i zamówiłem losowanie, nawet za 25% zniżki. Szkoda, że nie 50, oczywiście, ale jest tak miło! Dzięki. Nie na darmo mówi się, że sknera płaci dwa razy :(.</div>
			</div>
		</div>
	</div>
	<div class="b-comments reply">
		<div class="b-comments__comment">
			<img src="img/xdoc.jpg.pagespeed.ic.Hvlh4h8h9r.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Jakub Jaworski <i>(Warszawa)</i></div>
				<div class="b-comments__item-text">
					<a href="#">Erexol</a> należy zamawiać WYŁĄCZNIE za pośrednictwem <a href="#">loterii</a>. Należy uważać na podróbki.</div>
			</div>
		</div>
	</div>
	<div class="b-comments">
		<div class="b-comments__comment">
			<img src="avatars/ru/m22.jpg" class="b-comments__item-avatar" />
			<div class="b-comments__item-ind">
				<div class="b-comments__item-head">Dominik <i>(Wrocław)</i></div>
				<div class="b-comments__item-text">
					Przy regularnym stosowaniu efekt będzie taki - teraz mój penis w stanie erekcji powiększył się o 4 cm (tak, mierzyłem). Okazało się, że wcześniej nie był pełny. Moja dziewczyna i ja jesteśmy bardzo zadowoleni. Seks się przedłuża, moja dziewczyna dochodzi przede mną, a ja mogę ją kontrolować na tyle, na ile to konieczne. Wziąłem to z przymrużeniem oka, nadal pozostały. </div>
			</div>
		</div>
	</div>
	<center><a href="#" class="bot-btn" style="color: #fff;font-size:20px">GET Erexol za jedyne <span class="price_land_s1" style="text-transform: uppercase;">159 zł</span></a></center>
</div>

<style>
    img.b-comments__item-avatar {
        float: left;
        margin-right: 10px !important;
        width: 50px;
        height: 50px;
        margin-bottom: 0;
    }
</style>

<script src="js/script.js.pagespeed.jm.oW4O04KtUj.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
<script>new TypeIt('#myElement', {cursor: false, loop: true}).go();
$(window).scroll(function () {
    var h = $(window).height();
    var cTop = $('#comm-flag').offset().top;
    var sTop = $(window).scrollTop() + h - 80;
    if (sTop > cTop) setTimeout(function () {
        $('.printing').hide(300);
        $('#first-comment').show(500)
    }, 2300)
});</script>



<script src="doors/doors.js"></script>
<script>
    var sabss = '{clickid}';
    var usr = '{t2}';
    initDoors({
        lang: 'pl',
        product: 'Erexol',
        img: 'prod.png',
        discount: '50',
        priceMain: '159',
        priceOld: '', // если скидка 100%
        currencyMain: 'zł',
    });
</script>
<script>
	$("a").on("touchend, click", function (e) {
		e.preventDefault();
		$('body,html').animate({ scrollTop: $('#ToForm').offset().top }, 400);
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