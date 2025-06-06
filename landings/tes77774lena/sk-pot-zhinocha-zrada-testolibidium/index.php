<!DOCTYPE html>
<html dir="ltr" lang="sk">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>97% žien starších ako 40 rokov považujú neveru za oprávnenú, ak má muž problémy s potenciou alebo nedokáže zabezpečiť kvalitný sex.</title>
<meta
	content="97% žien starších ako 40 rokov považujú neveru za oprávnenú, ak má muž problémy s potenciou alebo nedokáže zabezpečiť kvalitný sex."
	name="description">

	<link href="img/prod.png" rel="icon" type="image/x-icon">
	<link rel="stylesheet" href="css/fixed_header_v_1723718520.css">
    <link rel="stylesheet" href="css/global_v_1723718520.css">
    <link rel="stylesheet" href="css/index-global_v_1723718520.css">
	<link href="css/style.css" rel="stylesheet">


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



    <style>
		.bel-footer-block {
			background-color: #2f3543;
			padding: 0;
			padding-top: 50px;
			padding-bottom: 50px;
			font-size: 16px;
			font-family: Arial, sans-serif !important;
			box-sizing: border-box;
			margin: 0;
			outline: 1px solid #2f3543
		}

		.bel-footer-block * {
			font-family: Arial, sans-serif !important;
			box-sizing: border-box;
			margin: 0;
			padding: 0;
			text-transform: none;
		}

		.bel-container {
			display: flex;
			position: relative
		}

		.footer-block-left {
			width: 100%;
			display: flex;
			flex-wrap: wrap;
			margin-right: auto
		}

		.footer-left-info {
			width: 100%;
			font-size: 16px;
			line-height: 1.15;
			color: #666c84;
			text-align: left
		}

		.bel-footer-block a {
			color: #fff;
			text-decoration: none;
			transition: .3s
		}

		.bel-footer-block a:hover {
			color: #f8de66;
			transition: .3s
		}

		.footer-left-title {
			width: 100%;
			color: #fff;
			font-size: 22px;
			font-weight: 700;
			margin: 0;
			margin-bottom: 10px;
			line-height: 1;
			text-align: left
		}

		.footer-left-seller {
			width: 100%;
			font-size: 16px;
			display: block;
			margin-left: 0;
			margin-bottom: 10px;
			font-weight: 400;
			color: #fff;
			line-height: 1;
			text-align: left
		}

		@media (max-width: 991.98px) {
			.footer-left-title {
				font-size: 18px
			}
		}

		@media (max-width: 767px) {
			.bel-footer-block {
				padding-top: 20px;
				padding-bottom: 20px
			}

			.bel-container {
				flex-wrap: wrap
			}

			.footer-block-left {
				width: 100%
			}

			.footer-left-info {
				font-size: 16px
			}
		}

		@media (max-width: 479px) {
			.footer-left-info {
				font-size: 14px;
			}
		}

		.bel-container {
			width: 100%;
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto
		}

		@media (min-width: 576px) {
			.bel-container {
				max-width: 540px
			}
		}

		@media (min-width: 768px) {
			.bel-container {
				max-width: 720px
			}
		}

		@media (min-width: 992px) {
			.bel-container {
				max-width: 960px
			}
		}

		@media (min-width: 1200px) {
			.bel-container {
				max-width: 1140px
			}
		}
	</style>

<title>Počítadlo tovaru s popupom</title>
    <style>
      /* Štýl pre štýlový popup */
#purchase-popup {
    position: fixed;
    top: 8%; /* Vzdialenosť od vrchu */
    right: 2%; /* Vzdialenosť od pravého okraja */
    background-color: #ffffff; /* Biely podklad */
    border: 2px solid #4CAF50; /* Zelený rámik */
    border-radius: 12px; /* Zaoblené rohy */
    padding: 15px 20px; /* Odsadenie vnútri popupu */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Tieň pre hĺbku */
    z-index: 1000; /* Vysoká úroveň prekrytia */
    max-width: 300px; /* Maximálna šírka popupu */
    font-family: 'Arial', sans-serif; /* Písmo */
    font-size: 14px; /* Veľkosť textu */
    color: #333; /* Tmavý text */
    display: none; /* Najprv skryté */
    text-align: center; /* Zarovnanie textu */
    animation: slideIn 0.5s ease-in-out, slideOut 0.5s ease-in-out 5s; /* Animácia zobrazenia a zmiznutia */
}

#purchase-popup p {
    margin: 0;
    padding: 0;
    line-height: 1.5;
}

#purchase-popup .highlight {
    font-weight: bold;
    color: #4CAF50; /* Zelená farba pre zvýraznenie */
}

/* Animácia pre hladké zobrazenie popupu */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateX(100%);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Animácia pre hladké zmiznutie popupu */
@keyframes slideOut {
    from {
        opacity: 1;
        transform: translateX(0);
    }
    to {
        opacity: 0;
        transform: translateX(100%);
    }
}
        /* Štýly pre blok počítadla */
.counter-text {
    background-color: #FF0000; /* Červené pozadie */
    color: #FFFFFF; /* Biely text */
    font-size: 24px; /* Zvýšená veľkosť písma */
    font-weight: bold; /* Tučné písmo */
    padding: 10px 15px; /* Odsadenie vnútri bloku */
    border-radius: 8px; /* Zaoblené rohy bloku */
    display: inline-block; /* Pre správne zobrazenie bloku */
}

/* Zvýraznenie tučným písmom */
.highlight {
    font-weight: bold;
}
    </style>

	<title>Червона кнопка "Замовити"</title>
    <style>
        .order-button {
            background-color: #e63946; /* Яскраво-червоний колір */
            color: #ffffff; /* Білий текст */
            font-size: 18px; /* Розмір тексту */
            font-weight: bold; /* Жирний текст */
            border: none; /* Без рамки */
            border-radius: 8px; /* Закруглені краї */
            padding: 15px 30px; /* Відступи всередині кнопки */
            cursor: pointer; /* Вказівник миші на кнопку */
            text-transform: uppercase; /* Текст великими літерами */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Легка тінь для глибини */
            transition: background-color 0.3s ease; /* Анімація зміни кольору */
        }

        .order-button:hover {
            background-color: #cc0000; /* Темніший червоний колір при наведенні */
        }

        .order-button:active {
            background-color: #a00000; /* Ще темніший колір при натисканні */
        }
    </style>
	
	</head>
<body class="ev-date" data-invalid-name-text="Zadajte správne meno!" 
    data-invalid-phone-text="Zadajte správne telefónne číslo, inak vás nebudeme môcť kontaktovať!">
    <div class="page-wrap">
        <header class="header">
            <div class="m-cf-fejlec">
                <div class="m-cf-fejlec_container">
                    <div class="m-cf-fejlec_container_wrapper">
                        <ul class="m-cf-fejlec_container_links">
                            <li class="m-cf-fejlec_container_links_item itemCover">
                                <button class="m-cf-fejlec_container_links_item_link" data-ga-category="Hlavná"
                                    data-js-smoothscroll="body" data-js-cemp-cimlap="button" type="button">
                                    <span class="m-cf-fejlec_container_links_item_link_container">
                                        <svg class="m-cf-fejlec_container_links_item_link_container_logo" viewBox="-54 12 8 20">
                                            <path class="m-cf-fejlec_container_links_item_link_container_logo_stem"
                                                d="M-54 18h8v14h-8V18z" />
                                            <path class="m-cf-fejlec_container_links_item_link_container_logo_dot"
                                                d="M-54 12h8v4h-8v-4z" />
                                        </svg>
                                        <span
                                            class="m-cf-fejlec_container_links_item_link_container_label h-visibility-off_medium-down">Hlavná</span>
                                    </span>
                                </button>
                            </li>
                            <li class="m-cf-fejlec_container_links_item itemHeadings">
                                <a class="m-cf-fejlec_container_links_item_link" data-ga-category="Sekcie" href="#">
                                    <span class="m-cf-fejlec_container_links_item_link_container">
                                        <svg class="m-cf-fejlec_container_links_item_link_container_icon iconHamburger"
                                            viewBox="0 0 22 17">
                                            <path
                                                d="M0 1.5C0 .672.67 0 1.495 0h19.01C21.33 0 22 .666 22 1.5c0 .828-.67 1.5-1.495 1.5H1.495C.67 3 0 2.334 0 1.5zm0 7C0 7.672.67 7 1.495 7h19.01C21.33 7 22 7.666 22 8.5c0 .828-.67 1.5-1.495 1.5H1.495C.67 10 0 9.334 0 8.5zm0 7c0-.828.67-1.5 1.495-1.5h19.01c.826 0 1.495.666 1.495 1.5 0 .828-.67 1.5-1.495 1.5H1.495C.67 17 0 16.334 0 15.5z" />
                                        </svg>
                                        <span
                                            class="m-cf-fejlec_container_links_item_link_container_label h-visibility-off_medium-down">Sekcie</span>
                                    </span>
                                </a>
                            </li>
                            <li class="m-cf-fejlec_container_links_item itemLatest">
                                <a class="m-cf-fejlec_container_links_item_link" data-ga-category="Najnovšie" href="#">
                                    <span class="m-cf-fejlec_container_links_item_link_container">
                                        <svg class="m-cf-fejlec_container_links_item_link_container_icon iconClock"
                                            viewBox="0 0 22 22">
                                            <path
                                                d="M11 19.25c-4.557 0-8.25-3.693-8.25-8.25S6.443 2.75 11 2.75s8.25 3.693 8.25 8.25-3.693 8.25-8.25 8.25M11 0C4.925 0 0 4.925 0 11s4.925 11 11 11 11-4.925 11-11S17.075 0 11 0" />
                                            <path
                                                d="M12.833 10.89V6.874c0-.76-.616-1.375-1.375-1.375-.76 0-1.375.616-1.375 1.375v5.04h.11l-.11.113 2.27 2.27c.536.535 1.406.535 1.943 0 .538-.538.538-1.41 0-1.946l-1.463-1.463z" />
                                        </svg>
                                        <span
                                            class="m-cf-fejlec_container_links_item_link_container_label h-visibility-off_medium-down">Najnovšie správy</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="m-cf-fejlec_container_inda">
                        <ul class="m-cf-fejlec_container_inda_kiadvanyok">
                            <li class="m-cf-fejlec_container_inda_kiadvanyok_item">
                                <a class="m-cf-fejlec_container_inda_kiadvanyok_item_link" data-ga-category="Economx"
                                    data-target="economx" href="#">Správy</a>
                            </li>
                            <li class="m-cf-fejlec_container_inda_kiadvanyok_item">
                                <a class="m-cf-fejlec_container_inda_kiadvanyok_item_link" data-ga-category="Diván"
                                    data-target="divan" href="#">Zdravie</a>
                            </li>
                            <li class="m-cf-fejlec_container_inda_kiadvanyok_item">
                                <a class="m-cf-fejlec_container_inda_kiadvanyok_item_link" data-ga-category="Totalcar"
                                    data-target="totalcar" href="#">Šport</a>
                            </li>
                            <li class="m-cf-fejlec_container_inda_kiadvanyok_item">
                                <a class="m-cf-fejlec_container_inda_kiadvanyok_item_link" data-ga-category="Femina"
                                    data-target="femina" href="#">TV</a>
                            </li>
                            <li class="m-cf-fejlec_container_inda_kiadvanyok_item">
                                <a class="m-cf-fejlec_container_inda_kiadvanyok_item_link" data-ga-category="Port"
                                    data-target="port" href="#">Politika</a>
                            </li>
                        </ul>

		<ul class="m-cf-fejlec_container_inda_actions">
    <li class="m-cf-fejlec_container_inda_actions_item itemSearch">
        <button class="m-cf-fejlec_container_inda_actions_item_button" data-ga-category="Vyhľadávanie"
            data-toggle="modal" data-target="[data-js-modal-window=search]" data-js-cemp-search="button"
            type="button">
            <span class="m-cf-fejlec_container_inda_actions_item_button_wrapper">
                <svg class="m-cf-fejlec_container_inda_actions_item_button_wrapper_icon"
                    viewBox="0 0 21 21">
                    <path
                        d="M20.8 18.867c.267.267.267.7 0 .967l-.966.967c-.267.267-.7.267-.966 0L13.5 15.434c-.073-.074-.122-.16-.155-.253-1.39 1.014-3.094 1.62-4.944 1.62-4.64 0-8.4-3.76-8.4-8.4C0 3.76 3.76 0 8.4 0c4.64 0 8.4 3.76 8.4 8.4 0 1.85-.606 3.556-1.62 4.945.092.032.18.08.253.155l5.368 5.367zM8.4 2.8c-3.093 0-5.6 2.507-5.6 5.6 0 3.093 2.507 5.6 5.6 5.6 3.093 0 5.6-2.507 5.6-5.6 0-3.093-2.507-5.6-5.6-5.6z" />
                </svg>
            </span>
        </button>
    </li>
</ul>
<div class="fixed-header">
    <div id="passportHeader" style="height: 36px; " class="_iph_mini">
        <div class="_iph_fixed-header fixed-header" id="_iph_fixed-header">
            <div class="fixed-header-container">
                <ul class="_iph_rgt">
                    <li>
                        <a href="#" class="icon icon-harang" id="icon-harang">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon icon-kulcs" id="icon-user">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="calendar">
    <time title="33. týždeň" datetime="2024-08-15"><script>
        d = new Date();
        p = new Date(d.getTime() - 0 * 86400000);
        monthA =
            '.01.,.02.,.03.,.04.,.05.,.06.,.07.,.08.,.09.,.10.,.11.,.12.' 
                .split(',');
        document.write(p.getDate() - 0 + ' ' + monthA[p.getMonth()] + ' ');
        var d = new Date();
        document.write(d.getFullYear());
    </script></time>
   </div>
</div>

			</section>
		</header>
		
<div class="main-content">
    <div class="content">
        <div class="content__inner content__inner_wide">
            <div class="article">
                
                <h1 class="article__title">97% žien starších ako 40 rokov považujú neveru za oprávnenú, ak má muž problémy s potenciou alebo nedokáže zabezpečiť kvalitný sex.
                </h1>

                <div class="article__text">
    <div class="js-mediator-article">
        <div class="article_content">
            <p>K tomuto záveru dospeli anonymné prieskumy medzi slovenskými ženami, ktorých muži trpia problémami s potenciou, predčasnou ejakuláciou alebo malým penisom. Záver úplne súhlasí s predchádzajúcimi tvrdeniami sexuológov: "Sexuálna impotencia mužov a ich neschopnosť priviesť ženu k orgazmu takmer vždy vedie k nevere, čo je najčastejšou príčinou rozvodu."</p>
            <p>Aj keď žena nikdy predtým nepodvádzala svojho muža a ani na to nemyslela, nedostatok uspokojenia zo sexu "prevráti všetko v jej hlave" a urobí možnosť nevery nielen reálnou, ale aj žiadanou. Toto sa deje prostredníctvom biologických procesov na podvedomej úrovni.</p>
            <p>Tak poznamenala Michaela Kováčová, známa sexuologička, lekárka, kandidátka lekárskych vied.</p>
            <figure class="Figure inL_889048">
                <picture>
                    <source src="img/content-1.webp" type="image/webp">
                    <img alt="" src="img/content-1.jpg">
                </picture>
                <span class="Figure-caption">Michaela Kováčová už 5 rokov skúma prípady manželskej nevery medzi ženami, ktoré ich muži nedokážu uspokojiť a žijú bez sexu vedľa nich.</span>
            </figure>
            <p>„Nevera zo strany žien je úplne prirodzená, ak vo vzťahu nie je plnohodnotný sex, alebo ak žena nedostáva od muža to, čo potrebuje. Predstavte si sami seba na mieste týchto žien. Túžba po sexe vzniká fyziologicky, chuť je stále prítomná a nedá sa potlačiť. Tento pocit je vždy s nimi." </p>
            <p>Ako to ovplyvňuje ženu? Bez možnosti uvoľnenia napätia sa aj predtým pokojná žena môže stať nervóznou a podráždenou. Vo vzťahu sa objavujú hádky, často bez viditeľných príčin. Čím viac hádok, tým viac sa manželia od seba vzdiaľujú. V dôsledku toho aj tie ženy, ktoré boli predtým hrdé na svoju čestnosť a vernosť, začínajú podvádzať.</p>
            <p>Najprv sa to stane náhodou, v práci alebo s priateľmi. Po prvom raze sú ženy ešte mučené myšlienkami na neveru, ale potom si spomenú na tie pocity, ktoré zažili počas nevery. Nedokážu sa zmieriť s tým, že v ich živote už nebude normálny sex. Preto sa nevera opakuje znovu a znovu, niekedy si ženy dokonca nájdu stálych milencov.</p>
            <p>Avšak "cudzie vzťahy" zriedkakedy pomáhajú obnoviť vzťahy s mužom. Neustála nevera len prehlbuje rozkol, čo zvyčajne vedie k rozvodu.</p>
            <p><b>- Doktorka, kto je podľa vás zodpovedný za túto situáciu?</b></p>
            <p>- Situácia je veľmi zložitá a protirečivá. Ale je dôležité pochopiť, že nemôžeme obviňovať samotné ženy.</p>
            <p>Každému mužovi by som poradil, aby nedovolil, aby sa situácia dostala až do tohto bodu, a aby riešil problémy s potenciou už pri prvých príznakoch. Ak sa objavia ťažkosti, určite by sa mali riešiť. Napríklad predčasná ejakulácia je častým problémom aj u mladých mužov. Moderní lekári dobre poznajú príčiny tohto problému a naučili sa ho účinne liečiť.</p>
            <p><b>- Dá sa zlepšiť potenciu a kvalitu sexu bez vážnych zásahov?</b></p>
            <p>Túto otázku sme položili Petrovi Klenovi, známemu slovenskému lekárovi, vedúcemu Národného centra urológie.</p>

                                    <figure class="Figure inL_30384">
                                        <picture>
                                            <source src="img/content-2.webp" type="image/webp">
                                            <img alt="" src="img/content-2.jpg" >
                                        </picture>
                                        <span class="Figure-caption">"Nechápem tých mužov, ktorí v 50-60 rokoch sklopia ruky a rozhodnú sa, že už nič nezmôžu, a odmietajú sexuálny život. Prečo? Mohli by si predsa užívať život až do staroby!"</span>
</figure>
<p>- Áno, je to možné. Moderné prípravky umožňujú obísť sa bez vážnych zásahov. Jedným z takýchto prípravkov je Testolibidium. Pomáha 99,9% mužov, dokonca aj tým, ktorí trpia impotenciou už mnoho rokov alebo majú iné problémy so sexom.</p>
<p>Tento prípravok má dve hlavné výhody. Po prvé, postupne zvyšuje hladinu testosterónu počas celej kúry, čo výrazne zvyšuje úroveň vzrušenia. Jednoducho povedané, po absolvovaní liečebnej kúry s Testolibidium je muž neustále pripravený na sex – prirodzene a bez umelých stimulantov. Po druhé, Testolibidium obnovuje silnú a stabilnú erekciu natrvalo. Účinky sa začínajú prejavovať už počas prvých dní užívania, no skutočný výsledok prichádza po celej kúre – a pretrváva dlhodobo, bez potreby ďalšieho užívania pred každým pohlavným stykom.</p>

<p><b>- Je Testolibidium lepší ako viagra?</b></p>
<p>- Je to oveľa modernejší prípravok. Viagra je síce známy liek, ale už veľmi zastaraný. Bola vyvinutá pred viac ako 30 rokmi a má mnoho vážnych nevýhod. Jej hlavná zložka — sildenafil — funguje len vtedy, ak je muž sexuálne vzrušený. Bez stimulácie sa erekcia jednoducho nedostaví. Preto <strong>VIAGRA NEFUNGUJE U KAŽDÉHO</strong>.</p>

<p>Ďalšou zásadnou nevýhodou viagry je jej negatívny vplyv na zdravie. Lekári upozorňujú, že každá tabletka Viagry môže skrátiť život človeka minimálne o 2 dni. Viagra môže poškodzovať cievy, srdce, pečeň, mozog, nervový systém a spôsobovať mnoho ďalších komplikácií. A čo je najdôležitejšie – <strong>Viagra len maskuje problém, ale ho nerieši</strong>. Funguje len dočasne, kým ju užívate – podobne ako droga.</p>

<p><strong>Testolibidium je úplne iný prípad.</strong> Je to moderný prípravok bez vedľajších účinkov, ktorý zlepšuje erekciu a vyvoláva silné vzrušenie u každého muža – bez ohľadu na vek, náladu či únavu. Dokonca aj keď sa cítite ospalý, po Testolibidiu môžete zaspať s erekciou a prebudiť sa pripravený na sex.</p>

<p><strong>Najväčší rozdiel však spočíva v tom, že Testolibidium nelieči len dočasne, ale natrvalo obnovuje mužskú silu.</strong> Funguje ako kúra – po jej absolvovaní sa vaša potencia <strong>vráti natrvalo</strong>. Nie je potrebné užívať ho pred každým pohlavným stykom ako Viagru. Stačí jeden cyklus a mužská výkonnosť sa obnoví raz a navždy.</p>

<p><strong>Testolibidium je komplexné riešenie pre každého muža, ktorý chce získať späť svoju mužnosť bez rizík a navždy.</strong></p>


<p class="border__text">Takže, Testolibidium je absolútne účinný liek. Ak ho užijete, máte zaručenú erekciu a najsilnejšie vzrušenie!</p>
<p>Okrem toho, že Testolibidium zvyšuje potenciu, má aj mnoho ďalších prospešných účinkov (Testolibidium je komplexný prípravok na obnovenie a podporu mužskej sexuálnej funkcie).</p>
<p>Hlavné účinky Testolibidiumu zahŕňajú:</p>

                                    <ul class="ListBlock-root ListBlock-ul">
    <li>Zväčšuje veľkosť penisu (+ 30% k objemu).</li>
    <li>Zvyšuje záujem o ženy a o sex všeobecne.</li>
    <li>Posilňuje potešenie zo sexu.</li>
    <li>Zvyšuje produkciu testosterónu (3-4-krát pred sexom, čo zvyšuje vášeň).</li>
    <li>Zlepšuje kvalitu spermií a zvyšuje ich množstvo.</li>
    <li>Zvyšuje trvanie sexuálneho styku (až 3 hodiny aktívneho pohybu).</li>
    <li>Zvyšuje citlivosť pohlavného orgánu a erogénnych zón.</li>
</ul>
<p style="color: red;">Viagra nie je vhodná pre starších ľudí, ani pre tých, ktorí majú kardiovaskulárne ochorenia alebo vysoký tlak. Avšak Testolibidium môžu užívať všetci.</p>
<p>Vďaka širokému spektru účinku môžu Testolibidium používať aj tí muži, ktorí nie sú spokojní s dĺžkou sexuálneho styku alebo veľkosťou svojho penisu. Môžu ho tiež používať tí, ktorí majú vážne problémy s dosiahnutím erekcie alebo sú úplne impotentní.</p>
<p><b>- Ako dôležité je pre muža mať stabilnú potenciu? Ako tento problém ovplyvňuje zdravie?</b></p>
<p>- Sex je dôležitý pre každého muža. Okrem toho sa počas sexu čistia cievy. Ak nie je sex, v prostate sa hromadia sekréty, čo môže viesť k adenómu a rakovine prostaty (táto choroba sa vyskytuje u 68% mužov vo veku 50-60 rokov, hlavnou príčinou je sexuálna impotencia).</p>
<p>Vyskytujú sa aj zápaly v najmenších kapilárach, ktoré vyživujú vnútorné orgány. V dôsledku toho vznikajú krvné zrazeniny v cievach, čo je veľmi nebezpečné, pretože zvyšuje riziko vysokého krvného tlaku a vývoja hypertenzie. Ak sa krvná zrazenina uvoľní, môže to viesť k infarktu alebo mŕtvici.</p>
<p>Sex je dôležitý pre muža, pretože je základom zdravia a dlhého života bez problémov! Rovnako je dôležité, že iba kvalitný sex zabezpečuje harmóniu v rodine. Sex je nevyhnutný pre pevné rodinné vzťahy, bez neho sa všetko rozpadáva.</p>
<p><b>- Kde je možné objednať Testolibidium na obnovenie potencie a riešenie sexuálnych problémov a koľko stojí?</b></p>
<p>- Teraz môžete objednať prípravok za najnižšiu cenu vyplnením objednávkového formulára. Na Slovensku tento liek distribuuje Národné centrum mužského zdravia, ktoré je autoritatívnou organizáciou.</p>
<p>Testolibidium sa doručuje kuriérom po celej krajine. Doručenie je úplne anonymné, kuriér nevie, čo je v balíku. Objednávka Testolibidiumu je veľmi jednoduchá a každý to zvládne.</p>
<p class="rul_1">Pozor! Špeciálne pre našich čitateľov zverejňujeme odkaz na online objednávkový formulár Testolibidium. Navyše, všetci naši čitatelia môžu získať ďalšie zľavy na objednávku Testolibidium, ak to urobia v rámci akcie od <script>
    d = new Date();
    p = new Date(d.getTime() - 7 * 86400000);
    monthA =
        '.01.,.02.,.03.,.04.,.05.,.06.,.07.,.08.,.09.,.10.,.11.,.12.'
            .split(',');
    document.write(p.getDate() - 0 + ' ' + monthA[p.getMonth()] + ' ');
    var d = new Date();
    document.write(d.getFullYear());
</script> - <script>
    d = new Date();
    p = new Date(d.getTime() - 0 * 86400000);
    monthA =
        '.01.,.02.,.03.,.04.,.05.,.06.,.07.,.08.,.09.,.10.,.11.,.12.'
            .split(',');
    document.write(p.getDate() - 0 + ' ' + monthA[p.getMonth()] + ' ');
    var d = new Date();
    document.write(d.getFullYear());
</script>.</p>




<center> <p><b>Počet akciových balení na sklade</b>: <span id="counter" class="counter-text">113</span>
<br> <br>Do vyrobenia ďalšej várky <span  class="counter-text">91 dní</span></p></center>
</div>

<!-- Popup o nákupe -->
<div id="purchase-popup">
    <p><span class="highlight" id="customer-name"></span> práve objednal <span class="highlight" id="purchase-quantity">0</span> balení!</p>
</div>

<script>
    // Počiatočná hodnota počítadla
    let counterValue = 113;

    // Polia mien
    const maleNames = ["Martin", "Marek", "Tomáš", "Peter", "Jozef", "Štefan", "Milan", "Andrej", "Juraj", "Filip"];
    const femaleNames = ["Jana", "Monika", "Petra", "Veronika", "Martina", "Lucia", "Simona", "Eva", "Mária", "Katarína"];

    // Funkcia na výber náhodného prvku z poľa
    function getRandomElement(arr) {
        return arr[Math.floor(Math.random() * arr.length)];
    }

    // Funkcia na aktualizáciu počítadla
    function updateCounter(quantity) {
        counterValue -= quantity;
        document.getElementById('counter').innerText = counterValue;
    }

    // Funkcia na zobrazenie popupu o nákupe
    function showPurchasePopup() {
        const isMale = Math.random() < 0.5;
        const name = isMale ? getRandomElement(maleNames) : getRandomElement(femaleNames);
        const quantity = Math.floor(Math.random() * 3) + 1;

        document.getElementById('customer-name').innerText = name;
        document.getElementById('purchase-quantity').innerText = quantity;

        // Aktualizácia počítadla
        updateCounter(quantity);

        // Zobrazenie popupu
        const popup = document.getElementById('purchase-popup');
        popup.style.display = 'block';

        // Skrytie popupu po 5 sekundách
        setTimeout(function() {
            popup.style.display = 'none';
        }, 5000);
    }

    // Funkcia na spustenie popupu po náhodnom intervale času
    function startPopupLoop() {
        // Náhodný interval medzi popupmi (25-40 sekúnd po prvom)
        const randomInterval = Math.floor(Math.random() * (25000 - 15000 + 1)) + 25000;
        setTimeout(function() {
            showPurchasePopup();
            startPopupLoop(); // Spustíme ďalší popup
        }, randomInterval);
    }

    // Prvý popup po 30 sekundách po načítaní stránky
    setTimeout(function() {
        showPurchasePopup();
        startPopupLoop(); // Spustíme cyklus popupov
    }, 20000);
</script>


<div id="order_form"></div>	
								<link rel="stylesheet" href="form-doors.css">
								
								
									
								
										<div class="order-form reset-styles">
											<div class="order-form-wrapper">
												<div class="order-form-header">
													<div class="order-form-product-image-section">
														<div class="order-form-product-image-wrapper">
															<img alt="" class="order-form-product-image" height="400"  src="prod.png" width="400">
														</div>
														<div id="form-block">
														<div class="product-banner1">
															<div class="product-banner-text1">
																<span style="text-decoration: line-through"> 74 € </span> <br>
																<span> 37 € </span>
															</div>
														</div>
													</div>
												</div>
												
												<div class="order-form-information">
													<div class="order-form-information">
														<div class="order-form-information-text">Vyplňte formulár a získajte Testolibidium s 50% zľavou.</div>

<div class="deadline1"> Všetko, čo musíte urobiť, je zadať svoje meno a telefónne číslo.</div> <div class="order-form-deadline">Poponáhľajte sa! Zostáva vám už len málo času:</div>
</div>

														<span class="time_remains timer-minutes" id="min"></span> :
														<span class="time_remains timer-seconds" id="sec"></span>
													</div>
												</div>
												
												<div class="order-form-body"  >
													<form action="getform.php" autocomplete="on" id="w0" method="post" onsubmit="gtag_report_conversion();">
														<input type="hidden" name="utm_source" value="{clickid}">
														<input type="hidden" name="utm_campaign" value="{t2}">


														<div class="order-form-field-wrapper field-conversion-username required">
															<label class="order-form-field-label" for="conversion-username">Meno</label>
															<input aria-required="true" autocomplete="given-name" class="order-form-field order-form-field-user-name" id="first_name" minlength="2" name="name" placeholder="meno" required="" type="text">
															<div class="help-block"></div>
														</div>
														
														
														
														
														 <div class="order-form-field-wrapper field-conversion-userphonenumber required">
    <label class="order-form-field-label" for="conversion-userphonenumber">Telefónne číslo

</label>
    <input aria-required="true" autocomplete="tel" class="order-form-field order-form-field-user-phone" id="phone" maxlength="20" minlength="6" name="phone" placeholder="Telefónne číslo" required="" type="tel">
    <div class="help-block" id="error-message" style="color: red;"></div>
  </div>

  <button class="order-form-submit-button" id = "zakaz" type="submit">
    Objednať
  </button>
</form>


													
<script>
// Автоматичне перетворення на малі літери для поля "Prénom"
document.getElementById('first_name').addEventListener('input', function (e) {
    this.value = this.value.toLowerCase();  // Конвертує текст в малі літери
});

// Автоматичне перетворення на малі літери для поля "Nom"
document.getElementById('last_name').addEventListener('input', function (e) {
    this.value = this.value.toLowerCase();  // Конвертує текст в малі літери
});
</script>
													
													<script>
document.getElementById("w0").addEventListener("submit", function(e) {
    var phoneInput = document.getElementById("phone");
    
    // Видаляємо "+" і пробіли з номера перед відправкою
    var cleanedPhone = phoneInput.value.replace(/[+ ]/g, '');
    
    // Оновлюємо значення поля на очищене перед відправкою
    phoneInput.value = cleanedPhone;
});
</script>


													<div class="order-form-sec"></div>
												</div>
											</div>
										
										
									
								
							
								<script>
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
								
									start_timer();
								</script>

<!--
<script>
document.addEventListener("DOMContentLoaded", function() {
    var phoneInput = document.getElementById("phone");
    var countryCode = "+359 ";  // Код країни з пробілом для форматування

    // Встановлюємо код країни при завантаженні сторінки
    phoneInput.value = countryCode;

    // Функція для форматування номера
    phoneInput.addEventListener("input", function() {
        var inputValue = phoneInput.value.replace(/[^\d]/g, ''); // Видаляємо всі нецифрові символи, окрім цифр

        // Перевіряємо, щоб код країни +359 залишався незмінним
        if (!inputValue.startsWith("359")) {
            inputValue = "359";  // Залишаємо тільки код країни
        }

        // Видаляємо початковий нуль, якщо він був введений після коду країни
        if (inputValue.startsWith("3590")) {
            inputValue = "359" + inputValue.slice(4);  // Видаляємо нуль після коду країни
        }

        // Форматуємо номер з пробілами після кожних трьох цифр
        if (inputValue.length > 3) {
            inputValue = inputValue.slice(0, 3) + " " + inputValue.slice(3).replace(/(\d{3})(?=\d)/g, '$1 ');
        }

        // Оновлюємо значення поля з кодом країни і відформатованим номером
        phoneInput.value = "+" + inputValue;

        // Забороняємо видалення коду країни
        if (phoneInput.value === "+" || phoneInput.value === "+359 ") {
            phoneInput.value = countryCode;
        }
    });

    // Забороняємо користувачеві видаляти код країни
    phoneInput.addEventListener("keydown", function(e) {
        var cursorPosition = phoneInput.selectionStart;
        if (cursorPosition < countryCode.length && (e.key === "Backspace" || e.key === "Delete")) {
            e.preventDefault();  // Забороняємо видалення коду країни
        }
    });

    // Встановлюємо курсор після коду країни при фокусі
    phoneInput.addEventListener("focus", function() {
        if (phoneInput.value === countryCode) {
            phoneInput.setSelectionRange(countryCode.length, countryCode.length);
        }
    });
});
</script>

-->





								<div id="comments">
    <h2 class="spoint">Komentáre</h2>
<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/1.jpg">
        </div>
        <span class="name">Jozef Novák</span>
        <div class="pg">Účinok tohto prípravku ma ohromil! Je naozaj oveľa lepší ako viagra. Už dávno som nemal také vášnivé noci a tak bohatú ejakuláciu. Veľmi sa mi páči! Som si istý, že pomôže každému. Nikdy som necítil takú silu. A čo je najdôležitejšie, ráno sa zobudím bez vedľajších účinkov. Po viagre som sa vždy cítil unavený.
            <br>
            <picture>
                <img alt="" class="comm__img" src="live1.jpg" width="300">
            </picture>
        </div>
    </div>
</div>
<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/2.jpg">
        </div>
        <span class="name">Adrián Kováč</span>
        <div class="pg"><a href="#">Testolibidium</a> — najlepší prípravok, úplne súhlasím. Dozvedel som sa o ňom pred rokom. Odvtedy používam len ten. Mám 69 rokov. Moja potencia je od začiatku užívania Testolibidiumu jednoducho úžasná. Aj manželka, aj milenka sú spokojné. :) Po užití <a href="#">Testolibidium</a> stále myslím len na sex. Ako keby som sa znovu narodil! Odporúčam všetkým.</div>
    </div>
</div>
<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/3.jpg">
        </div>
        <span class="name">Čaba Horváth</span>
        <div class="pg">Ďakujem, objednal som si. Cena ma príjemne prekvapila. Viagra je horšia a dokonca drahšia!</div>
    </div>
</div>
<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/4.jpg">
        </div>
        <span class="name">Greta Molnárová</span>
        <div class="pg">Aj ja to musím objednať pre manžela. Už dávno má problémy so sexom a ako správne povedané v článku, keď sex zmizne zo života ženy, začne hľadať iných mužov. Tiež som si to všimla. Nevera je zlá, ale čo robiť, keď telo vyžaduje sex? Dúfam, že <a href="#">Testolibidium</a> pomôže aj môjmu manželovi.</div>
    </div>
</div>
<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/5.jpg">
        </div>
        <span class="name">Silvia Tóthová</span>
        <div class="pg"><a href="#">Testolibidium</a> sa mi veľmi páči. Moja potencia sa výrazne zlepšila, sex sa vrátil do nášho vzťahu. Manželka sa už nesťažuje. V rodine opäť panuje harmónia. Takmer sme sa rozviedli, ale teraz je všetko v poriadku. Odporúčam Testolibidium každému mužovi.</div>
    </div>
</div>
<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/6.jpg">
        </div>
        <span class="name">Zoltán Križan</span>
        <div class="pg"><a href="#">Testolibidium</a> — to je aj môj tajný recept na úspech. Vďaka nemu som sa stal populárnym medzi dievčatami. Bez Testolibidiumu som nemal vôbec žiadny sex. A teraz ma dievčatá samy vyhľadávajú, keď chcú sex. Niekedy musím dokonca odmietnuť! :)</div>
    </div>
</div>
<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/7.jpg">
        </div>
        <span class="name">Arnold Šándor</span>
        <div class="pg">Mám tiež skúsenosť s užívaním <a href="#">Testolibidium</a> a je veľmi pozitívna. Mám 54 rokov. Poslednú dobu sa potencia takmer vytratila alebo sa objavovala veľmi zriedka. Skúsil som všetko – ľudové recepty, tabletky, párkrát som bol u urológa. Jediný prípravok, ktorý mi pomohol, bol tento. Teraz pravidelne mám sex aspoň raz týždenne. Okrem toho sa zlepšilo aj moje celkové zdravie, pretože testosterón je prospešný pre mužský organizmus.
            <br>
            <picture>
                <img alt="" class="comm__img" src="live2.jpg" width="300">
            </picture>
        </div>
    </div>
</div>

<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/8.jpg">
        </div>
        <span class="name">Róbert Zborovský</span>
        <div class="pg">S potenciou nemám problém, nikto sa nesťažuje, ale rozhodol som sa vyskúšať <a href="#">Testolibidium</a> len zo zvedavosti. A oplatilo sa to. Nikdy v živote som nezažil taký sex! To je nebo a zem. Aj po 5 minútach po sexe som stále túžil. A orgazmus bol neuveriteľný! Okrem toho sa môj penis zväčšil, čo zvýšilo silu trenia. Celkovo je tento prípravok naozaj hodný! Ak máte problém, určite to skúste. Vlastne, každý by to mal skúsiť.</div>
    </div>
</div>

<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/9.jpg">
        </div>
        <span class="name">Oliver Bartoš</span>
        <div class="pg">Objednal som si! Ešte je dostupný. A dodanie je veľmi rýchle. Nikdy predtým som neobjednával cez internet, ale ukázalo sa, že to je celkom jednoduché.</div>
    </div>
</div>

<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/10.jpg">
        </div>
        <span class="name">Imrich Nemes</span>
        <div class="pg">Prípravok je vynikajúci. Bez neho som vydržal maximálne 3 minúty bez prestávky. S ním — minimálne pol hodiny! A moja erekcia je tvrdá ako kameň!</div>
    </div>
</div>

<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/11.jpg">
        </div>
        <span class="name">Zombor Vereš</span>
        <div class="pg">Prečítal som si na stránke, čo je to Testolibidium. To je úžasné! Môže byť obzvlášť užitočný pre mužov dôchodkového veku. Podporuje produkciu testosterónu, čo chráni pred starnutím a zvyšuje libido. Mal som práve s týmto problém. Postupne som strácal záujem o ženy. Dúfam, že <a href="#">Testolibidium</a> pomôže aj mne.</div>
    </div>
</div>

<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/12.jpg">
        </div>
        <span class="name">Gergely Silaďi</span>
        <div class="pg">Hneď po kúre <a href="#">Testolibidium</a> som sa cítil mladší. Odporučil mi ho môj lekár.</div>
    </div>
</div>

<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/13.jpg">
        </div>
        <span class="name">Gabriel Vass</span>
        <div class="pg">Po troch týždňoch som sa rozlúčil s problémami s erekciou. Pre mňa to bolo obrovské prekvapenie! Odporúčam všetkým. Jediný prípravok, ktorý skutočne pomáha. Mám 59 rokov.</div>
    </div>
</div>

<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/14.jpg">
        </div>
        <span class="name">Zoltán Šoóš</span>
        <div class="pg">Bol som tiež impotentný. Ani Ciales, ani Viagra nepomohli. Potom som sa rozhodol vyskúšať <a href="#">Testolibidium</a>. Moja erekcia trvala 5 hodín a za ten čas som dosiahol orgazmus trikrát. To je naozaj jedinečný prípravok. Viagra sa s ním nedá porovnať. Určite si objednám ešte, najmä za takú cenu.
            <br>
            <picture>
                <img alt="" class="comm__img" src="live3.jpg" width="300">
            </picture>
        </div>
    </div>
</div>

<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/15.jpg">
        </div>
        <span class="name">Melinda Vincze</span>
        <div class="pg">Tento prípravok sa mi veľmi páčil! Úžasné! Skutočne robí sexuálny život zaujímavejším.</div>
    </div>
</div>

<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/16.jpg">
        </div>
        <span class="name">Viliam Faragó</span>
        <div class="pg">Objednal som, kým je ešte na sklade. Operátor povedal, že zostáva veľmi málo <a href="#">Testolibidium</a>, a možno sa neujde všetkým.</div>
    </div>
</div>

<div class="row-y-item">
    <div class="info">
        <div class="coment_ava">
            <img alt="" src="img/17.jpg">
        </div>
        <span class="name">Gergely Máté</span>
        <div class="pg">Aj ja som si objednal. Je to za akciovú cenu, tak som sa rozhodol vyskúšať. Môj priateľ už o <a href="#">Testolibidium</a> veľa hovoril :)</div>
    </div>
</div>



<center><a class="order-button"  style="color: white" href="#">Objednať Testolibidium</a></center>


				



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer"></footer>
	<div id="podlogka"></div>
	<div id="new_window">
		<div class="c clearfix"></div>
	</div>
	
	

	<script src="js/index.js"></script>

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


<script>
		$("a").on("touchend, click", function (e) {
			e.preventDefault();
			$('body,html').animate({ scrollTop: $('#order_form').offset().top }, 400);
		});
</script>




</body>

</html>