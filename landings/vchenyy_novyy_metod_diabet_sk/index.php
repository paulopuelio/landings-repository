<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="shortcut icon" href="images/med.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>

    <script src="js/script.js"></script>
    <title>Slovenský vedec získal najprestížnejšiu lekársku cenu za vývoj novej liečby cukrovky. Martin Novák pracoval
        celý život na tom, aby pomohol čo najväčšiemu počtu ľudí, a jeho sen sa napokon splnil.</title>
    <link href="css/all.css" rel="stylesheet" type="text/css">
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
    <div class="page-wrap">
        <header class="header">
            <div class="header__inner">
                <div class="header__logo">
                    <a class="logo" data-toggle="scroll" href="#form"> SPRÁVY <span>SK</span></a>
                    <a data-toggle="scroll" href="#form" class="spec">Spoločnosť</a>
                </div>
                <div class="nav">
                    <ul class="nav__inner">
                        <li class="mobile-show"> <a data-toggle="scroll" href="#form">Správy</a> </li>
                        <li class="mobile-show"> <a data-toggle="scroll" href="#form">Video</a> </li>
                        <li class="mobile-show"> <a data-toggle="scroll" href="#form">Živo</a> </li>
                        <li class=""> <a data-toggle="scroll" href="#form">Programy</a> </li>
                    </ul>
                </div> <a data-toggle="scroll" href="#form" class="header__menu-link"></a>
                <div class="search ">
                    <div class="search__form"> <input class="search__text" type="text" name="q" value=""
                            placeholder="Vyhľadávanie"> <input class="search__submit" type="submit" value=""> </div>
                </div>
            </div>
        </header>


        <div class="nav_mobile">
            <ul class="nav__list_mobile">
                <li class="mobile-show"> <a data-toggle="scroll" href="#form">Správy</a> </li>
                <li class="mobile-show"> <a data-toggle="scroll" href="#form">Video</a> </li>
                <li class="mobile-show"> <a data-toggle="scroll" href="#form">Živo</a> </li>
            </ul>
        </div>


        <div class="main-content">
            <div class="content">
                <div class="content__inner content__inner_wide">
                    <div class="article">
                        <div data-format="dd month yyyy" class="article__date date-15 time">23 február 2025 08:26
                        </div>
                        <h1 class="article__title">Slovenský vedec získal najprestížnejšiu lekársku cenu za vývoj novej
                            liečby cukrovky. Martin Novák pracoval celý život na tom, aby pomohol čo najväčšiemu počtu
                            ľudí, a jeho sen sa napokon splnil.</h1>




                        <div class="article__text">
                            <div class="js-mediator-article">

                                <div class="article_content">

                                    <figure class="Figure" style="text-align: center;">
                                        <img src="images/content-1.jpg">
                                        <span class="Figure-caption">Martin Novák: Slovenský vedec nedokázal zadržať
                                            slzy, keď jeho meno počas ceremónie vyhlásil moderátor. Vedec obetoval veľa,
                                            aby zdolal cukrovku, a napokon dosiahol svoj cieľ.</span>
                                    </figure>

                                    <p class="red">Reportáž o najslávnejšom slovenskom vedcovi, pravom patriotovi
                                        Slovenska. Vďaka Martinovi Novákovi sa počet ľudí trpiacich cukrovkou v krajine
                                        môže drasticky znížiť!</p>

                                    <figure class="Figure" style="text-align: center;">
                                        <img src="images/content-2.jpg">
                                        <span class="Figure-caption"></span>
                                    </figure>

                                    <h2>Začiatok ťažkej cesty</h2>

                                    <p>Martin Novák sa narodil v chudobnej rodine. Jeho matka bola učiteľka a otec
                                        pracoval v továrni. Od detstva prejavoval záujem o chémiu a výrazne prevyšoval
                                        svojich spolužiakov na základnej škole. Zúčastňoval sa všetkých školských súťaží
                                        a vždy skončil na prvom mieste. Rodičia si uvedomili, že z ich syna by mohol byť
                                        veľký vedec a sľúbili, že urobia všetko pre to, aby ho podporili.</p>

                                    <p>Neskôr, s veľkým úsilím, si zobrali pôžičku, aby mohli poslať svojho syna
                                        študovať na Univerzitu Komenského v Bratislave. Martin Novák bol prijatý na
                                        Fakultu chémie, ale po roku musel zmeniť svoj odbor.</p>

                                    <h2>Hrozná choroba jeho otca</h2>

                                    <p>O rok neskôr rodina Martina Nováka prežila veľkú tragédiu. Jeho otec zomrel.
                                        <u>Príčinou smrti bol náhly nárast hladiny cukru v krvi.</u> Neskôr sa zistilo,
                                        že trpel cukrovkou, o ktorej nevedel. Rodina nikdy nemala dostatok peňazí a
                                        nechodievali na lekárske prehliadky, a otec jednoducho znášal zhoršovanie svojho
                                        zdravotného stavu.
                                    </p>

                                    <p>Smrť jeho otca zasiahla mladého vedca ako blesk z jasného neba. Spočiatku chcel
                                        Martin Novák školu opustiť a vrátiť sa do rodného mesta svojej matky. Matka ho
                                        však odhovorila, hovorila mu, že jeho otec mal len jedno želanie: aby sa Martin
                                        stal vedcom. To bolo jeho životné poslanie, ktorému venoval celý život. TAKŽE
                                        MARTIN PROSTO NEMOHOL PRESTAŤ ŠTUDOVAŤ!</p>

                                    <p class="center big"><i>Na otcovej hrobke Martin Novák sľúbil, že nájde liek na
                                            cukrovku, ktorý bude dostupný pre všetkých, vrátane chudobných. Vtedy sa
                                            tento sľub mnohým zdal naivný a detinský, no Martin Novák to nevzdal a
                                            venoval svoj život tomuto cieľu.</i></p>

                                    <p>V druhom ročníku požiadal vedenie školy o presun na Lekársku fakultu. Už nechcel
                                        byť chemikom, chcel liečiť ľudí. Namiesto chemických látok chcel vyvíjať lieky.
                                        Vedenie s tým súhlasilo.</p>

                                    <h2>Chudobný život na Slovensku a hľadanie snov</h2>

                                    <p>Kým bol Martin Novák v treťom ročníku, vedenie školy nečakane zvýšilo školné
                                        takmer o polovicu. To vyčerpalo úspory jeho rodičov, zhromaždené na jeho
                                        vzdelanie. Matka už nemohla finančne pomáhať.</p>

                                    <p>Martin Novák začal pracovať ako lekársky asistent v Národnom endokrinologickom
                                        centre v Bratislave. Pacientmi centra boli prevažne imigranti a mali prístup k
                                        bezplatným lekárskym službám. Preto bolo vždy veľa pacientov. Keď lekári
                                        nestíhali, Martin sa staral o väčšinu z nich.</p>

                                    <p>Vtedy sa Martin Novák naučil o endokrinných patológiách a samotnej cukrovke
                                        niečo, čo sa v lekárskych knihách nevyskytuje. <u>Táto choroba spôsobuje
                                            skutočné utrpenie ľudí. Viděl, ako ľudia slabnú, keď sa stanú diabetikmi.
                                            Ako vnútorné orgány hynú kvôli nadbytku cukru.</u></p>

                                    <p class="red">Tiež videl, ako sa liečba cukrovky líši medzi bohatými, ktorí si môžu
                                        dovoliť všetky terapie, a chudobnými, ktorí si nemôžu dovoliť ani bežnú
                                        metformín.</p>

                                    <p><u>Chudobní diabetici jednoducho zomierajú pomaly, zatiaľ čo čakajú na svoj
                                            nevyhnutný osud!</u></p>

                                    <p>Toto obdobie naňho zanechalo nezmazateľné stopy, rovnako ako smrť jeho otca, a
                                        len posilnilo Martinovu túžbu nájsť liek na cukrovku, ktorý by pomohol všetkým
                                        ľuďom.</p>

                                    <h2>Prvé objavy a s vyznamenaním na Univerzite Komenského</h2>

                                    <p>V štvrtom ročníku Martin Novák spolu so svojím školiteľom urobil prvý významný
                                        objav v oblasti endokrinológie. Objavili glykolytické siete v mitochondriálnych
                                        chrobákoch. Tento objav neskôr slúžil na vysvetlenie niektorých zložitých
                                        biochemických procesov v organizme.</p>

                                    <p>Tento prvý významný príspevok Martina Nováka bol vysoko ocenený nielen vedením
                                        školy, ale i medzinárodnou vedeckou komunitou. Martin získal peňažnú cenu
                                        Slovenskej endokrinologickej spoločnosti za svoj objav, čo mu umožnilo úspešne
                                        dokončiť štúdium.</p>

                                    <p>Niet divu, že Martin Novák bol najlepším študentom ročníka 1981. Niekoľko
                                        slovenských farmaceutických spoločností mu ponúklo lukratívne ponuky, ale
                                        odmietol ich a zostal na univerzite. <u>Vo svojom neskoršom rozhovore</u>
                                        priznal, že nikdy neveril farmaceutickým korporáciám.</p>

                                    <p class="center big"><i>Vedec verí, že globálne farmaceutické korporácie nechcú
                                            pomáhať ľuďom, ale klamať obyčajných ľudí, ako bol aj jeho otec.</i></p>

                                    <figure class="Figure" style="text-align: center;">
                                        <img src="images/content-3.jpg">
                                        <span class="Figure-caption"></span>
                                    </figure>

                                    <p><u>Farmaceutickým spoločnostiam sa nikdy nesmie veriť. Nerobia nič iné, len
                                            ponúkajú diabetikom lieky, ktoré dočasne znižujú hladinu cukru v krvi
                                            (metformín, sulfónylmočoviny atď.), ale tým držia diabetikov ako
                                            rukojemníkov. Nikdy nevytvárajú lieky, ktoré by skutočne mohli zdolať
                                            cukrovku, pretože by v takom prípade prišli o veľa klientov!</u></p>

                                    <p class="red">Dnes všetci lekári tvrdia, že počet diabetikov na svete stále rastie
                                        a tento proces je jednoznačne v rukách farmaceutických korporácií.</p>

                                    <p>Martin Novák mal možnosť robiť voľný výskum a prístup k potrebnému vybaveniu iba
                                        v priestoroch univerzity!</p>

                                    <h2>Roky práce a očakávané výsledky</h2>

                                    <p class="center big"><i>Za tie roky Martin Novák zverejnil vyše 300 vedeckých
                                            článkov o biochemických patológiách endokrinných procesov a získal niekoľko
                                            medzinárodných ocenení za rôzne svoje výskumy.</i></p>
                                    <!--  -->

                                    <p>Neskôr sa stal vedúcim Katedry endokrinológie na Univerzite Komenského. Po roku v
                                        tejto funkcii však vedúcu pozíciu odmietol, pretože administratívna práca mu
                                        zaberala príliš veľa času a odvádzala ho od hlavnej činnosti. Martin Novák,
                                        ktorý si dávno sľúbil vyvinúť SKUTOČNE ÚČINNÝ liek na cukrovku, pokračoval počas
                                        tohto obdobia vo svojom výskume.</p>

                                    <p>Vývoj nového lieku trval celkovo 38 rokov. Výsledok však predčil aj tie
                                        najodvážnejšie očakávania. Martin Novák získal najprestížnejšiu lekársku cenu –
                                        Slovenskú lekársku cenu (ekvivalent Nobelovej ceny za medicínu) – za vývoj
                                        unikátneho lieku na liečbu cukrovky.</p>

                                    <p>Eva Kováčová, súčasná predsedníčka Slovenskej lekárskej nadácie, nazvala liek
                                        vyvinutý Martinom Novákom „najlepším liekom na cukrovku v dejinách
                                        farmakológie“. Mnoho endokrinológov s ňou súhlasí a považuje Metaglucin za
                                        spasiteľa ľudí trpiacich cukrovkou.</p>

                                    <figure class="Figure" style="text-align: center;">
                                        <img src="images/content-4.jpg">
                                        <span class="Figure-caption">Počas ceremónie celá sála tlieskala Martinovi
                                            Novákovi.</span>
                                    </figure>

                                    <h2>Čo Metaglucin obsahuje, čo ostatné lieky nemajú?</h2>

                                    <p>Väčšina liekov na cukrovku, vyrábaných veľkými farmaceutickými korporáciami,
                                        nelieči chorobu. Jednoducho na to nie sú určené. Ich hlavná funkcia je dočasne
                                        stabilizovať hladinu cukru v krvi. Preto lekárne pacientom odporúčajú metformín,
                                        sulfónylmočoviny a iné lieky.</p>

                                    <p class="red">Liek Metaglucin, vyvinutý slovenským vedcom, je špeciálne určený na
                                        liečbu cukrovky, teda na vyliečenie patológie.</p>

                                    <p>Na rozdiel od liekov z lekární, Metaglucin nie je potrebné užívať denne počas
                                        celého života. Podáva sa v cykloch počas niekoľkých rokov. Metaglucin umožňuje
                                        stabilizovať glukózu, zastaviť rozvoj nebezpečných komplikácií cukrovky a
                                        umožňuje návrat k zdraviu.</p>

                                    <p>Podľa lekárskych štatistík diabetici žijú o 20 až 30 rokov menej než ľudia bez
                                        cukrovky a zriedka sa dožívajú 70 rokov. Metaglucin umožňuje predĺžiť život.</p>

                                    <ul class="ListBlock-root ListBlock-ul">
                                        <p><b>Metaglucin pôsobí súčasne na 4 frontoch:</b></p>
                                        <li>Znižuje inzulínovú rezistenciu, čo umožňuje lepšie vstrebávanie glukózy
                                            bunkami aj pri minimálnom množstve inzulínu (ktorý takmer každý diabetik
                                            produkuje).</li>
                                        <li>Obnovuje funkciu pankreasu, čím zmierňuje jeho nadmerné zaťaženie.</li>
                                        <li>Odstraňuje nadbytočný cukor z ciev vrátane kapilár, čo úplne zabraňuje
                                            rozvoju nebezpečných komplikácií cukrovky a opravuje už poškodené orgány.
                                        </li>
                                        <li>Stabilizuje hladinu glukózy, čím zjemňuje jej výkyvy a predvídateľnosť,
                                            znižuje dávky a frekvenciu podávania inzulínu pri cukrovke typu 1.</li>
                                    </ul>

                                    <p>Metaglucin prekonáva všetky ostatné spôsoby liečby z hľadiska účinnosti proti
                                        cukrovke. Skladá sa výhradne z prírodných rastlinných zložiek. Obsahuje viac než
                                        70 aktívnych látok: prospešné vitamíny, makro- a mikroživiny pre diabetikov.</p>

                                    <figure class="Figure" style="text-align: center;">
                                        <div class="img_m">
                                            <img class="img-content" src="images/content-5.jpg">
                                            <img class="img_tovar" src="prod.png">
                                        </div>
                                        <span class="Figure-caption">Metaglucin prešiel všetkými klinickými a
                                            certifikačnými testami, ktoré potvrdili vysokú účinnosť lieku.</span>
                                    </figure>

                                    <h2>Počas ceremónie Martin Novák otvorene vyhlásil: slovenskí diabetici dostanú
                                        Metaglucin ako prví!</h2>

                                    <p>Mnohé kliniky prejavili záujem o Metaglucin, vrátane popredných kliník a centier
                                        na Slovensku a v Európe. Vo svojom prejave Martin Novák jasne povedal, že
                                        prioritne chce liečiť slovenských pacientov.</p>

                                    <p>Doslova povedal: „Zo srdca ďakujem Slovensku za vzdelanie a príležitosť vyvinúť
                                        tento liek. Som však úplne oddaný Slovensku a chcem, aby diabetici na Slovensku
                                        boli prví, ktorí budú touto patológiou vyliečení, a garantujem, že lieku bude
                                        určite dosť pre všetkých. Metaglucin venujem svojim rodičom, bez ktorých by som
                                        tu dnes nebol. Preto osobne budem sledovať proces distribúcie Metaglucin na
                                        Slovensku, aby bol dostupný pre všetky sociálne vrstvy.“</p>

                                    <h2>Ako môžu slovenskí diabetici získať tento liek?</h2>

                                    <p>Tu na Slovensku založil Martin Novák Nadáciu pre cukrovku nesúcu meno jeho otca.
                                        Táto nadácia spolu s Národným endokrinologickým centrom Bratislava koordinuje
                                        distribúciu Metaglucin.</p>

                                    <h2 class="red">Metaglucin bude dostupný všetkým slovenským diabetikom od <span>
                                            <script>
                                                d = new Date();
                                                var localeString = new Date(d.getTime() - 90 * 86400000).toLocaleString("sk", {
                                                    year: 'numeric',
                                                    month: 'numeric',
                                                    day: 'numeric',
                                                });
                                                document.write(localeString);
                                            </script>
                                        </span>. Program platí tri mesiace, teda do <span>
                                            <script>
                                                d = new Date();
                                                var localeString = new Date(d.getTime() - 0 * 86400000).toLocaleString("sk", {
                                                    year: 'numeric',
                                                    month: 'numeric',
                                                    day: 'numeric',
                                                });
                                                document.write(localeString);
                                            </script>
                                        </span> (vrátane posledného dňa).</h2>

                                    <p class="red center bu">Keďže výroba lieku je nákladná, nadácia hradí časť
                                        nákladov. Preto slovenskí diabetici zaplatia menej než za metformín!</p>


                                    <p>Naša redakcia kontaktovala Národné endokrinologické centrum v Bratislave a
                                        získala podrobnosti o prístupe k lieku.</p>
                                    <p>Liek je doručovaný priamo domov kuriérskou službou.</p>
                                    <p>Liek Metaglucin je ponúkaný za zníženú cenu za nasledujúcich podmienok:</p>

                                    <ul class="ListBlock-root" style="list-style-type: decimal;">
                                        <li>Musíte sa nachádzať na Slovensku. Liek sa neodosiela mimo krajinu.</li>
                                        <li>Na objednanie Metaglucin musíte odoslať žiadosť cez špeciálny formulár, ktorý
                                            je dostupný na niekoľkých lekárskych stránkach (poznámka redakcie:
                                            objednávkový formulár nájdete aj na konci tejto stránky).</li>
                                        <li>Doručenie Metaglucin trvá 3–4 dni, kuriér vám ho privezie priamo domov. Platí
                                            sa pri doručení – nie je potrebné posielať peniaze vopred.</li>
                                    </ul>

                                    <h2 class="red">DODANÉ: <span class="date-7">03.03.2025</span>.</h2>

                                    <h2 class="red">Metaglucin je na Slovensku dostupný už viac než 2,5 mesiaca a viac
                                        než 8000 slovenských diabetikov ho už vyskúšalo.</h2>

                                    <p class="red"><b>Mnohí z nich zdieľali svoje názory na stránkach Národného
                                            endokrinologického centra.</b></p>

                                    <p class="red"><b>Väčšina diabetikov uviedla, že po použití sa cítili výrazne lepšie
                                            – u 93% z nich výkyvy hladiny cukru v krvi zmizli <u>a úspešne prerušili
                                                každodenné užívanie liekov.</u></b></p>

                                    <ul class="ListBlock-root" style="list-style-type: decimal;">
                                        <p><b>Medzi pozitívnymi účinkami Metaglucin patrí aj:</b></p>
                                        <li>Zlepšenie periférneho nervového systému (obnovuje sa citlivosť nôh a
                                            prstov).</li>
                                        <li>Zlepšenie funkcie obličiek (pozitívny vývoj pri liečbe diabetickej
                                            pyelitídy).</li>
                                        <li>Zlepšenie stavu pokožky, rany sa rýchlejšie hojili.</li>
                                        <li>Zlepšenie zraku.</li>
                                        <li>U mužov sa zvyšuje potenciu.</li>
                                        <li>Znižuje sa hladina cholesterolu v krvi.</li>
                                        <li>Zbavuje výkyvov krvného tlaku (hypertenzia ustupuje).</li>
                                    </ul>

                                    <p>Viac než 98% slovenských diabetikov uviedlo, že Metaglucin je najlepší liek na
                                        liečbu cukrovky doteraz.</p>

                                    <h2 class="red center">Pozor! Dnes je posledný deň, kedy centrum ešte prijíma
                                        objednávky od diabetikov na Metaglucin so zľavou čiastočne krytou charitatívnou
                                        organizáciou. Od zajtra už nebude možné objednať Metaglucin za minimálnu cenu!
                                    </h2>

                                    <p class="rul_1">Aktuálny počet dostupných balení Metaglucin:</p>

                                    <h3 class="left_count" style="cursor: pointer"><b class="prod_left_val">7</b> </h3>

                                    <p class="rul_1">Metaglucin sa rýchlo míňa!</p>

                                    <span id="cta"></span>
                                    <span id="form"></span>

                                    <p>Pozor! Môžete si objednať Metaglucin za najnižšiu možnú cenu a získať ďalšiu
                                        zľavu! Zľavy sú dostupné len našim čitateľom.</p>

                                    <p>Na zapojenie do súťaže odstráňte ochrannú vrstvu na žetóne nižšie. Ihneď potom sa
                                        otvorí objednávkový formulár, ktorý vyplňte.</p>

                                    <p>Dôležité! Skontrolujte prítomnosť bezpečnostného hologramu!</p>

                                    <p>Prítomnosť hologramu zaručuje 100 % kvalitu a pravosť produktu, ako aj to, že
                                        vyplňujete oficiálny objednávkový formulár.</p>

                                    <div id="form" class="bilet">
                                        <div class="text-column"><img class="gerbmobile" src="images/med.png"
                                                style="width: 100%; max-width: 80px;">
                                            <p></p>
                                            <center>Jedinečné číslo žetónu<br>№ 1000 8976 2456 643 <img class="gerbpk"
                                                    src="images/med1.png"
                                                    style="width: 100%; max-width: 182px; display: block; margin: auto;">
                                            </center>
                                            <p></p>
                                            <p class="logo1"></p>
                                        </div>
                                        <div class="erase_column">
                                            <div class="erase">
                                                <div class="erase_text">Kliknite na oblasť na odstránenie, aby ste
                                                    videli, čo je pod ňou.</div>
                                                <div class="arrow"></div>
                                                <div id="square"><button class="qqq"
                                                        onclick="replace();return false"></button></div>
                                                <div id="square2"><span>50% zľava</span></div>
                                            </div>
                                            <div class="blabla">
                                                <center>S týmto žetónom môžete získať minimálnu zľavu 0 %, maximálne
                                                    však 50 %, ktorú možno využiť pri kúpe lieku Metaglucin.</center>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="form" class="order_block">
                                        <div id="form" class="api-form1">
                                            <div class="form-header1">
                                                <div class="cta-form1">
                                                    <div class="product-image1">
                                                        <p class="green_text">Rezervovali sme pre vás liek Metaglucin.
                                                            Máte 10 minút na odoslanie objednávky.</p>
                                                        <p class="green_text">Zľavnená cena: 37€</p>
                                                        <center><img src="prod.png"></center>
                                                        <div class="priceс">
                                                            <span class="discountс">50%!</span>
                                                            <s><span class="js_old_price price_old">74€</span></s>
                                                            <b class="new_price js_new_price price_main">37€</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="form2"></div>
                                            <div class="form-body">
                                                <div class="text"></div>
                                                <div class="deadline1"><b>Prosím, zadajte svoje meno a telefónne číslo
                                                        pre objednávku!<br>Zostávajúci čas:<br><span
                                                            class="time_remains" id="min">10</span>:<span
                                                            class="time_remains" id="sec">00</span></b></div>
                                                <form id="form1" method="post" action="getform.php" onsubmit="gtag_report_conversion();"
                                                >
                                                    <input type="hidden" name="utm_source" value="{clickid}">
                                                    <input type="hidden" name="utm_campaign" value="{t2}">

                                                    <input type="text" class="name" name="name" maxlength="30"
                                                        placeholder="Zadajte svoje meno" required autocomplete="off">
                                                    <input type="tel" class="name" name="phone" id="phoneNumber"
                                                        placeholder="Zadajte svoje telefónne číslo" required
                                                        autocomplete="off">
                                                    <div id="phone_error" style="color: red; display: none;">Zadajte
                                                        platné telefónne číslo</div>
                                                    <button class="btn1 px30 bold upp white blg opacity"
                                                        type="submit">Odoslať</button>
                                                </form>
                                                <p class="footnote1">*(ak nevyplníte formulár pred uplynutím času,
                                                    rezervácia bude zrušená, pretože liek je dostupný v obmedzenom
                                                    množstve).</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="spin-result-wrapper">
                                        <div class="pop-up-window">
                                            <div class="close-popup"></div>
                                            <span class="pop-up-heading">Blahoželáme!</span>
                                            <p class="ruletka-p pop-up-text">Vyhrali ste maximálnu 50% zľavu!</p>
                                            <a class="pop-up-button" href="#form2">Ok</a>
                                        </div>
                                    </div>



                                    <style>
                                        .logo1 {
                                            background: transparent url("prod.png") no-repeat scroll center center;
                                            width: 250px;
                                            height: 260px;
                                            background-size: contain;
                                            position: relative
                                        }
                                    </style>

                                </div>
                                <div id="comments">
                                    <h2 class="spoint" data="11">Komentáre</h2>
                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/1.jpg"></div>
                                            <span class="name">Peter Horváth <span
                                                    class="randdate date-6">04.03.2025</span></span>
                                            <div class="pg">Toto je úžasný liek! Pomohol mi. Aj ja som bol diabetik, ale
                                                teraz už nie som. Moja hladina cukru v krvi už nevyskakuje. Predtým to
                                                bol problém 4 roky. Nikdy by som si nemyslel, že sa cukrovka dá liečiť
                                                tak ľahko. Veľká vďaka vedcom!<br>
                                                <img style="width:100%;max-width:350px;display:block;margin:10px auto 10px 0" src="live1.jpg" alt=""  >

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/2.jpg"></div>
                                            <span class="name">Ján Novotný <span
                                                    class="randdate date-6">04.03.2025</span></span>
                                            <div class="pg">Možno si ho aj ja objednám.</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/3.jpg"></div>
                                            <span class="name">Tomáš Kováč <span
                                                    class="randdate date-6">04.03.2025</span></span>
                                            <div class="pg">Kým tu rozmýšľate, už bude po všetkom. Som skúsený diabetik
                                                a vyskúšal som veľa vecí. Metaglucin je najlepší liek.</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/4.jpg"></div>
                                            <span class="name">Marek János <span
                                                    class="randdate date-5">05.03.2025</span></span>
                                            <div class="pg">Úplne súhlasím! Metaglucin je vynikajúci liek pre diabetikov.
                                                Užíval som ho na odporúčanie lekárov, navyše k mojej hlavnej liečbe. Mám
                                                52 rokov, ale zdravie som mal veľmi zlé – niekedy ma bolela jedna časť
                                                tela, inokedy iná. Urobil som si cyklus s Metaglucin a cítil som sa oveľa
                                                lepšie. Teraz som zdravý ako byvol a cítim sa skvele. Vrelo odporúčam
                                                všetkým.</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/5.jpg"></div>
                                            <span class="name">Zuzana Bartošová <span
                                                    class="randdate date-4">06.03.2025</span></span>
                                            <div class="pg">Tiež mám skúsenosť s Metaglucin a má veľmi pozitívny účinok.
                                                Môj zdravotný stav sa výrazne zlepšil. Srdcové bolesti ustúpili, môj
                                                zrak sa zlepšil, noha je citlivejšia. Odporúčam všetkým – kým je liek
                                                dostupný a za túto cenu, mali by ste si ho objednať!<br></div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/6.jpg"></div>
                                            <span class="name">Daniel Čech <span
                                                    class="randdate date-4">06.03.2025</span></span>
                                            <div class="pg">Plne podporujem predchádzajúce komentáre! Tento vedec si
                                                zaslúži pomník. Koľko životov tento liek zachráni? Výroba musí byť
                                                zvýšená, aby Metaglucin nebol nedostatkový. Beriem ho už 2 týždne a deň
                                                čo deň sa cítim lepšie.</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/7.jpg"></div>
                                            <span class="name">Kristián Urban <span
                                                    class="randdate date-3">07.03.2025</span></span>
                                            <div class="pg">Aj ja mám skúsenosť s týmto liekom. Veľmi sa mi páči! Vďaka
                                                nemu môžeme očakávať veľa pozitívnych zmien v našom zdraví. V mojom
                                                prípade sa vrátila citlivosť nôh a prstov; predtým som mal silnú smäd,
                                                ktorá teraz takmer ustúpila. Mám menej bolestí hlavy a lepší zrak –
                                                teraz pozerám TV bez okuliarov! Kĺby nebolia, hladina cukru nestúpa ani
                                                keď zabudnem zobrať tabletku. Začal som viac jesť a nevšimol som si
                                                žiadne negatívne reakcie.
                                                <img style="width:100%;max-width:350px;display:block;margin:10px auto 10px 0" src="live2.jpg" alt=""  >

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/8.jpg"></div>
                                            <span class="name">Jana Šimková <span
                                                    class="randdate date-3">07.03.2025</span></span>
                                            <div class="pg">Ahojte! Mám 59 rokov, pôvodná váha 124 kg, teraz mám 80 kg
                                                pri výške 168 cm. Moja hladina cukru kolísala medzi 18 a 12, niekedy až
                                                29. Teraz je iba 5,0. Užívala som Metaglucin 2,5 týždňa a som viac než
                                                spokojná s výsledkom. Iné lieky nepomáhali – metformín bol len dočasné
                                                riešenie, ale Metaglucin zlepšuje celkové zdravie.</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/9.jpg"></div>
                                            <span class="name">Lívia Kollárová <span
                                                    class="randdate date-3">07.03.2025</span></span>
                                            <div class="pg">Videla som program o tomto lieku v televízii a hovorili o
                                                ňom samé dobré veci. Nevedela som, kde ho nájsť. Ukázalo sa, že ho je
                                                veľmi ľahké objednať a cena je nízka. Objednala som si ho a želám tomuto
                                                slovenskému vedcovi veľa zdravia – pravému patriotovi, ktorý vie, odkiaľ
                                                pochádza.</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/10.jpg"></div>
                                            <span class="name">Anna Kováčová <span
                                                    class="randdate date-3">07.03.2025</span></span>
                                            <div class="pg">Cena je veľmi nízka. Veľká vďaka za túto príležitosť!
                                                Bohužiaľ, väčšina diabetikov je chudobná a nemôže si dovoliť drahé
                                                liečby. S Metaglucin sa môžete stať zdravým za veľmi dostupnú cenu.<br>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/11.jpg"></div>
                                            <span class="name">Marek Polák <span
                                                    class="randdate date-3">07.03.2025</span></span>
                                            <div class="pg">Aj ja som si objednal. Sľúbili dodanie do 3 dní. Za tú cenu
                                                to stojí za to. Myslím, že by sme sa mali cukrovke vytrvalo brániť. Inak
                                                rýchlo zomrieme. Môj kamarát zomrel na cukrovku vo veku 61 rokov.</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/12.jpg"></div>
                                            <span class="name">Soňa Žiaková <span
                                                    class="randdate date-2">08.03.2025</span></span>
                                            <div class="pg">Úplne súhlasím, že cukrovku treba liečiť! Mám veľa
                                                diabetických priateľov. Žiadny z nich sa nedožil 70 rokov! Väčšina je
                                                nad 60, jeden zomrel v 68, a posledné roky veľmi trpel vredmi a
                                                ochoreniami obličiek, stále mal krv v moči.</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/13.jpg"></div>
                                            <span class="name">Laura Varga <span
                                                    class="randdate date-2">08.03.2025</span></span>
                                            <div class="pg"><b>Metaglucin JE VYPREDANÝ!!!!!!</b> Už nemám. Povedali, že
                                                včera ešte pár balení bolo, ale dnes už nie... Tak veľmi som trpela
                                                kvôli cukrovke! Neviem, čo ešte brať. Metaglucin bola moja posledná
                                                nádej. Je naozaj už koniec?</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/14.jpg"></div>
                                            <span class="name">Nina Kováčová <span
                                                    class="randdate date-2">08.03.2025</span></span>
                                            <div class="pg">Aj ja som prišla o šancu. Čo mám teraz robiť so svojou
                                                cukrovkou??? Priateľka mi hovorila o Metaglucin. Veľmi ho chválila,
                                                chcela som si ho tiež objednať, ale bol vypredaný. Škoda.</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/15.jpg"></div>
                                            <span class="name">Katarína Novotná <span
                                                    class="randdate date-1">09.03.2025</span></span>
                                            <div class="pg">Pozor! <b>Metaglucin JE OPÄŤ DOSTUPNÝ!</b> Podľa stránky je k
                                                dispozícii asi 800 balení Metaglucin. Centrum hovorí, že viac nedokáže
                                                dodať. Program zliav však končí zajtra, takže potom už možno nebude
                                                možné si liek objednať.</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/16.jpg"></div>
                                            <span class="name">Fedor Kučera <span
                                                    class="randdate date-1">09.03.2025</span></span>
                                            <div class="pg">Cukrovka je zákerné ochorenie. Som diabetik 4 roky, bez
                                                vonkajších príznakov, len sem-tam suchá ústa. Preto som neveril
                                                povestiam o amputáciách a podobne. Nedávno som ale stratil vedomie.
                                                Išiel som do nemocnice a vyšetrili ma. Stav bol veľmi vážny. Moje
                                                obličky boli predrakovinové, cievy také poškodené, že lekári ostali v
                                                šoku. To sa stáva, keď neliečite chorobu. A to som dodržiaval predpísanú
                                                liečbu!!!</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/17.jpg"></div>
                                            <span class="name">Emília Poláková <span
                                                    class="randdate date-1">09.03.2025</span></span>
                                            <div class="pg">Môj otec je diabetik a mal amputovanú nohu. Vie niekto, či
                                                Metaglucin dokáže zastaviť postup gangrény?</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/18.jpg"></div>
                                            <span class="name">Mária Kováčová <span
                                                    class="randdate date-0">10.03.2025</span></span>
                                            <div class="pg">Samozrejme, že áno, môže. Skúste tento liek! Je lepší než
                                                nič.</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/19.jpg"></div>
                                            <span class="name">Soňa Juríček <span
                                                    class="randdate date-0">10.03.2025</span></span>
                                            <div class="pg">Ďakujem! Objednala som 10 balení. Mali by ste si ho kúpiť,
                                                kým je ešte dostupný.</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/20.jpg"></div>
                                            <span class="name">Lucia Dubovská <span
                                                    class="randdate date-0">10.03.2025</span></span>
                                            <div class="pg">No, už ste si objednali 10 balení, a iní možno nedostanú ani
                                                jedno...</div>
                                        </div>
                                    </div>

                                    <div class="row-y-item">
                                        <div class="info">
                                            <div class="coment_ava"><img src="images/21.jpg"></div>
                                            <span class="name">Tomáš Bielik <span
                                                    class="randdate date-0">10.03.2025</span></span>
                                            <div class="pg">Ďakujem. Objednal som.</div>
                                        </div>
                                    </div>

                                    <a class="button" data-toggle="scroll" href="#form">Objednajte si Metaglucin, kým je
                                        ešte dostupný!</a>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-wrapper footer-wrapper_top">
            <div class="footer__inner">
                <div class="soc-buttons">
                    <p>Správy SK na sociálnych sieťach:</p>
                    <a class="soc-buttons_vk" data-toggle="scroll" href="#form"></a>
                    <a class="soc-buttons_fb" data-toggle="scroll" href="#form"></a>
                    <a class="soc-buttons_twt" data-toggle="scroll" href="#form"></a>
                    <a class="soc-buttons_ok" data-toggle="scroll" href="#form"></a>
                    <a class="soc-buttons_insta" data-toggle="scroll" href="#form"></a>
                    <a class="soc-buttons_youtube" data-toggle="scroll" href="#form"></a>
                    <a class="soc-buttons_flipboard" data-toggle="scroll" href="#form"></a>
                    <a class="soc-buttons_rss" data-toggle="scroll" href="#form"></a>
                </div>
            </div>
        </div>
    </footer>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">


    <link href="css/form.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/bilet.js"></script>
    <link href="css/bilet.css" rel="stylesheet" type="text/css">

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