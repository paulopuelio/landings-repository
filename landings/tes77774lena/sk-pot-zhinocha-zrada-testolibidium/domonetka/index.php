
<!DOCTYPE html>
<html lang="sk" dir="ltr">
<head><script src="js/jquery-3.6.4.min.js"></script> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Kúpiť Testolibidium lacno. Ceny, recenzie. Objednajte Testolibidium ihneď!</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.min.css">
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

<body data-invalid-name-text="Zadajte správne meno!" data-invalid-phone-text="Zadajte správne telefónne číslo, inak Vás nebudeme môcť kontaktovať!">
<div class="bg-header">
    <header class="navbar-topper navbar navbar-static-top bs-docs-nav" id="top" style="margin-bottom: 0px;">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <nav class="collapse navbar-collapse bs-navbar-collapse">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6 ">
                        <ul class="nav navbar-nav">
                            <li><a href="#bolezni">Choroby</a></li>
                            <li><a href="#abouttov">O produkte</a></li>
                            <li><a href="#clinisp">Skúšky</a></li>
                            <li><a href="#sost">Zloženie</a></li>
                            <li><a href="#mnenvr">Názor lekára</a></li>
                            <li><a href="#otzivipeople">Recenzie</a></li>
                            <li><a href="#zakazopl">Objednávka a úhrada</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <a href="#zakazopl" class="top-order">Vyplniť objednávku</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="container" id="zakazopl">
        <div class="row">
            <div class="col-lg-offset-5 col-lg-7">
                <div class="title-header">Testolibidium</div>
                <p class="title-p">Zdravie mužov začalo zlyhávať? Nevadí, „Testolibidium“ vám pomôže!</p>
            </div>
            <div class="col-sm-6 col-md-5 col-lg-offset-5 col-lg-3 clock-top">
                <p class="sale-end-text">Do konca akcie zostalo:</p>
                <div class="timer">
                    <!-- <div class="block">
                        <div class="rect ">0</div>
                        <label >dni</label>
                    </div> -->
                    <div class="block">
                        <div class="rect hours">11</div>
                        <label>hodin</label>
                    </div>
                    <div class="block">
                        <div class="rect mins">41</div>
                        <label>minút</label>
                    </div>
                    <div class="block">
                        <div class="rect secs">25</div>
                        <label>sekund</label>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="tovar-header">
                    <div class="sale-lable sale-hd"><span>iba</span><br>1 deň</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-7 col-lg-4">
                <div class="form">
                    <div class="form-inner">
                         <p class="old-price">Stará cena: <span class="x_price_previous">74</span> <span class="x_currency">eur</span></p>
                        <p class="new-price">Cena: <span class="realPrice x_price_current">37</span> <span class="x_currency">eur</span></p>
                        <form action="getform.php" method="post" class="x_order_form order_all"  onsubmit="gtag_report_conversion();">
	                        <input type="hidden" name="utm_source" value="<?=$_GET["cid"]?>">
	                        <input type="hidden" name="utm_campaign" value="{domonetka}">
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required placeholder="Moje meno" name="name" autocomplete="name">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control phone_n" required placeholder="Môj telefón" name="phone" autocomplete="tel">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="order-btn sub" value="Objednať s akciou">
                             
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main>

    <div class="guarantee">
        <div class="container">
            <div class="guarantee-inner">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="guarantee__item gi1">
                            <p class="guarantee-title">Doručenie</p>
                            <p class="guarantee-text">Rýchle doručenie po celom Slovensku</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="guarantee__item gi2">
                            <p class="guarantee-title">Úhrada</p>
                            <p class="guarantee-text">Úhrada iba pri prevzatí tovaru</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="guarantee__item gi3">
                            <p class="guarantee-title">Záruka</p>
                            <p class="guarantee-text">Záruka kvality a výsledku</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-polzaizl pos-rel">
        <div class="container" id="bolezni">
            <div class="col-xs-12">
                <div class="title-polzaizl">Testolibidium <span>pomôže </span> zbaviť sa:</div>
            </div>
            <div class="col-sm-12 col15-md-15 col15-lg-15 ">
                <div class="col-sm-4 col15-md-3 col15-lg-3 danger__item">
                    <div class="order-box">
                        <div class="bol-ico oi1"></div>
                    </div>
                    <p class="danger-text1">Prostata</p>
                </div>
                <div class="col-sm-4 col15-md-3 col15-lg-3 danger__item">
                    <div class="order-box">
                        <div class="bol-ico oi2"></div>
                    </div>
                    <p class="danger-text1">Peyronieho <br>choroba</p>
                </div>
                <div class="col-sm-4 col15-md-3 col15-lg-3 danger__item">
                    <div class="order-box">
                        <div class="bol-ico oi3"></div>
                    </div>
                    <p class="danger-text1">Hormonálna nerovnováha</p>
                </div>
                <div class="col-sm-offset-2 col-sm-4 col-md-offset-0 col15-md-3 col15-lg-offset-0 col15-lg-3 danger__item">
                    <div class="order-box">
                        <div class="bol-ico oi4"></div>
                    </div>
                    <p class="danger-text1">Uretritída</p>
                </div>
                <div class="col-sm-4 col15-md-3 col15-lg-3 danger__item">
                    <div class="order-box">
                        <div class="bol-ico oi5"></div>
                    </div>
                    <p class="danger-text1">Impotencia</p>
                </div>
            </div>
            <div class="col-sm-12 col15-md-15 col15-lg-15">
                <div class="col-sm-4 col15-md-3 col15-lg-3 danger__item">
                    <div class="order-box">
                        <div class="bol-ico oi6"></div>
                    </div>
                    <p class="danger-text1">Fimóza</p>
                </div>
                <div class="col-sm-4 col15-md-3 col15-lg-3 danger__item">
                    <div class="order-box">
                        <div class="bol-ico oi7"></div>
                    </div>
                    <p class="danger-text1">Predčasná ejakulácia</p>
                </div>
                <div class="col-sm-4 col15-md-3 col15-lg-3 danger__item">
                    <div class="order-box">
                        <div class="bol-ico oi8"></div>
                    </div>
                    <p class="danger-text1">Stres</p>
                </div>
                <div class="col-sm-offset-2 col-sm-4 col-md-offset-0 col15-md-3 col15-lg-offset-0 col15-lg-3 danger__item">
                    <div class="order-box">
                        <div class="bol-ico oi9"></div>
                    </div>
                    <p class="danger-text1">Zmeny s vekom</p>
                </div>
                <div class="col-sm-4 col15-md-3 col15-lg-3 danger__item">
                    <div class="order-box">
                        <div class="bol-ico oi10"></div>
                    </div>
                    <p class="danger-text1">Neaktívne spermie</p>
                </div>
            </div>
            <div class="button-down"></div>
        </div>
    </div>

    <div class="unisr-bg">
        <div class="container" id="abouttov">
            <div class="col-xs-12">
                <div class="title-unisr">
                    Prípravok  <span>«Testolibidium»</span> sa skladá z jalovca a dubovej kôry je unikátnym prípravkom, ktorý:
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="about">
                    <div class="col-sm-7 col-md-5 col-lg-5">
                        <div class="pen-bg"></div>
                    </div>
                    <div class="col-xs 12 col-sm-5 col-md-6 col-lg-6" style="padding: 0px;">
                        <ul class="unisr_ul">
                            <li class="unisr_ul__item">Pomáha posilňovať imunitu u mužov</li>
                            <li class="unisr_ul__item">Zabraňuje prenikaniu a rozvoju širokého spektra patogénnej flóry
                            </li>
                            <li class="unisr_ul__item">Zvyšuje potenciu</li>
                            <li class="unisr_ul__item">Zabraňuje predčasnej ejakulácii</li>
                            <li class="unisr_ul__item">Zabraňuje opotrebovaniu a vyčerpaniu tela súvisiacim s vekom</li>
                            <li class="unisr_ul__item">Zlepšuje kvalitu spermií a pohyblivosť spermií</li>
                            <li class="unisr_ul__item">Podporuje zvýšenú elasticitu pokožky a včasné odstránenie fimózy
                            </li>
                            <li class="unisr_ul__item">Je to vynikajúci prostriedok na prevenciu rakoviny prostaty, penisu a semenníkov
                            </li>
                            <li class="unisr_ul__item">Podporuje bezproblémovému počatiu detí v dospelom veku</li>
                        </ul>
                    </div>
                    <div class="col-md-1 col-lg-1 ab_bl">
                        <div class="kr-rght"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="zakazur-bg">
        <div class="container">
            <div class=" col-sm-12 col-xs-12 col-md-12 col-lg-offset-4 col-lg-8">
                <div class="title-ft-zakaz">Objednajte «Testolibidium» <br>práve teraz za výhodnú cenu!</div>
                <div class="zak-box">
                    <div class="zak-box-1">
                        <div class="txt-block-ft">
                            <p class="box-txt-salenew">
                                Cena: <span class="realPrice x_price_current">37</span> <span class="x_currency">eur</span>
                            </p>
                                          <p class="box-txt-saleold">
                                            Namiesto: <span class="old_price"><span class="x_price_previous">74</span> <span class="x_currency">eur</span></span>
                                          </p>
                        </div>
                        <div class="sale-lable "><span>iba</span><br>1 deň</div>
                        <div class="tovar-header_1"></div>
                    </div>
                    <div class="zak-box-2">
                        <p class="sale-end-text bl-clock-ft-p">Do konca akcie zostalo:</p>
                        <div class="timer">
                            <!-- <div class="block">
                                <div class="rect ">0</div>
                                <label >dni</label>
                            </div> -->
                            <div class="block">
                                <div class="rect hours">11</div>
                                <label>hodin</label>
                            </div>
                            <div class="block">
                                <div class="rect mins">41</div>
                                <label>minút</label>
                            </div>
                            <div class="block">
                                <div class="rect secs">25</div>
                                <label>sekund</label>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <button type="button" class="ever-popup-btn order-btn-1">Objednať s akciou</button>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-doc pos-rel">
        <div class="container" id="mnenvr">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-8">
                    <div class="specialist">
                        <h3 class="specialist-title">Odborný názor</h3>
                        <p class="specialist-text">Dnešný muž čelí obrovskému množstvu hrozieb pre svoje zdravie - od nesprávneho životného štýlu po náchylnosť k rôznym chorobám - od prostatitídy po onkológiu. Z dôvodu konzumácie rýchleho občerstvenia, mastných potravín, sedavému životnému štýlu a samozrejme obrovskému stresu sa muži majú prostatitídu a impotenciu už k 30 rokom. Preto vyzývam všetkých svojich súčasných a budúcich pacientov, aby sa starali o svoje zdravie a začali užívať „...“ - prírodný vysoko účinný prostriedok, ktorý dokonale zvláda úlohu liečby a prevencie väčšiny známych pohlavných chorôb u mužov. Pamätajte, že máme jedno zdravie a bez neho muž nemôže seba nazvať mužom. Začnite sa o to starať skôr, ako zlyhá. „...“ je skvelým pomocníkom pre zdravie mužov v každom veku!
                        </p>
                        <p class="specialist-name">Ján Kovač <br><span> Špecialista na urológiu</span>
                        </p>
						<picture>
	<source type="image/webp" srcset="images/pechat.webp">
	<source type="image/jpeg" srcset="images/pechat.png">
 <img src="images/pechat.png" alt="" class="autograph">
</picture> 
                       
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="img-doc"></div>
                </div>
            </div>
            <div class="button-down"></div>
        </div>
    </div>


    <div class="bg-instr pos-rel">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-10">
                    <div class="title-instr">Je veľmi jednoduché používať <span>«Testolibidium»</span>!</div>
                </div>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-sm-4 col-md-4 col-lg-offset-2 col-lg-3 instr__item">
                        <div class="instr-box arrow-instr">
                            <div class="instr-ico in1"></div>
                            <p class="instr-text1">Užívajte 1 kapsulu 1-2 krát denne</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-3 instr__item">
                        <div class="instr-box">
                            <div class="instr-ico in2"></div>
                            <p class="instr-text1">Dĺžka jedného kurzu je 45 dní.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="button-down"></div>
        </div>
    </div>

    <div class="rezissl-bg pos-rel">
        <div class="container" id="clinisp">
            <div class="col-xs-12">
                <div class="title-rezissl">Výsledky výskumu</div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="issl-1">
                        <div class="graph-1 graph">
						<picture>
	<source type="image/webp" srcset="images/rez-2.webp">
	<source type="image/jpeg" srcset="images/rez-2.png">
 <img src="images/rez-2.png" alt="">
</picture> 
                           
                            <div class="tabl-grapf">Počet pacientov, ktorí sa zbavili chorôb</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="issl-1">
                        <div class="graph-2 graph">
                            <picture>
	<source type="image/webp" srcset="images/rez-2.webp">
	<source type="image/jpeg" srcset="images/rez-2.png">
 <img src="images/rez-2.png" alt="">
</picture> 
                            <div class="tabl-grapf tabl-grapf-2">Pacienti, ktorí sa zbavili sexuálnych problémov</div>
                        </div>
                    </div>
                </div>
                <div class="button-down"></div>
            </div>
        </div>
    </div>

    <div class="container" id="otzivipeople">
        <section id="video-wrap" class="text-center">
            <h3 class="title-com">Spätná väzba od ľudí, ktorí užívali Testolibidium</h3>
        </section>
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10">
                <div class="com-block">
                    <div class="com-img-bl com-img-1"></div>
                    <div class="com-txt">Anonymne</div>
                    <div class="com-p">Mal som dosť vážne problémy s tým, čo je pod pásom. Zdalo sa mi, že som bol fyzicky zdravý, ale hneď ako to už išlo ku sexu, všetko bolo okamžite o pol šietej. Už som nevedel, čo mám robiť. Požiadal som o radu na internete, anonymne, tam mi odporučili „...“. Teraz s erekciou nieje problém - môžem manželku pár hodín za sebou! Dúfam, že vám to pomôže.
                    </div>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-10">
                <div class="com-block">
                    <div class="com-img-bl com-img-2 com-right"></div>
                    <div class="com-txt com-right">Anonymne</div>
                    <div class="com-p com-right">Liečil prostatitídu ľudovými metódami a tabletkami. Nebola žiadna nádej. Sotva spal v noci - 
a bolesť mučila a takmer každých päť minút som musel bežať na toaletu. Potom náhodou narazil na „Testolibidium“. Ukázalo sa, že je potrebné začať s tým! Teraz som úplne zdravý.
                    </div>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-10">
                <div class="com-block">
                    <div class="com-img-bl com-img-3"></div>
                    <div class="com-txt">Anonymne</div>
                    <div class="com-p">S manželom sme chceli mať dieťa, ale nevyšlo to. Prešli sme niekoľkými vyšetreniami, zdalo sa, že sme obidvaja boli zdravý, ale žiadny výsledok neprišiel. Potom sme začali hľadať alternatívne prostriedky a ukázalo sa, že Testolibidium nám pomohol! Ako výsledok - budúci mesiac sa chystám darovať manželovi syna. Vďaka Testolibidium!
                    </div>
                </div>
            </div>
            <div class="col-lg-offset-1 col-lg-10">
                <div class="com-block bord-n">
                    <div class="com-img-bl com-img-4 com-right"></div>
                    <div class="com-txt com-right">Anonymne</div>
                    <div class="com-p com-right">Na penise som mal dermatitídu. Bolo to dvojnásobne hrozné, pretože sex som mohol vyškrtnúť, a všetko bolo strašne svrbivé. Dermatológovia rozkladali rukami — a hovorili, že za obyčajných podmienok je možné vyliečiť za týždeň, ale vo vašom prípade je nejaká zložitá infekcia.Odporúčili Testolibidium užívať vnútorne, a nie vo forme masti atď. Okamžite sa všetko začalo zlepšovať - ​​škvrny začali miznúť a svrbenie zmizlo takmer okamžite. Teraz som zdravý a dermatológovia opäť rozkládajú rukami.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-best pos-rel">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 best__item">
                    <div class="best-box">
                        <div class="best-ico bs1"></div>
                        <p class="best-text">Certifikovaný produkt</p>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 best__item">
                    <div class="best-box">
                        <div class="best-ico bs2"></div>
                        <p class="best-text">Záruka vyliečenia</p>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 best__item">
                    <div class="best-box">
                        <div class="best-ico bs3"></div>
                        <p class="best-text">Účinná prevencia v každom veku</p>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 best__item">
                    <div class="best-box">
                        <div class="best-ico bs4"></div>
                        <p class="best-text">Prírodný produkt bez GMO</p>
                    </div>
                </div>
            </div>
            <div class="button-down"></div>
        </div>
    </div>

    <div class="bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="title-footer">Začalo zlyhávať mužské zdravie? To nevadím, «Testolibidium» pomôže!</div>
                </div>
                <div class="col-xs-12  col-sm-6 col-md-5 col-lg-offset-4 col-lg-4 clock-ft-pa">
                    <p class="sale-end-text ft-clk">Do konca akcie zostalo:</p>
                    <div class="timer fr-clk">
                        <!-- <div class="block block-1">
                            <div class="rect rect-1">0</div>
                            <label >dni</label>
                        </div> -->
                        <div class="block block-1">
                            <div class="rect hours rect-1">11</div>
                            <label>hodin</label>
                        </div>
                        <div class="block block-1">
                            <div class="rect mins rect-1">41</div>
                            <label>minút</label>
                        </div>
                        <div class="block block-1">
                            <div class="rect secs rect-2">25</div>
                            <label>sekund</label>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="tovar-header tovar-ft">
                        <div class="sale-lable sale-ft"><span>iba</span><br>1 deň</div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-4">
                    <div class="form">
                        <div class="form-inner">
                           <p class="old-price">Stará cena: <span class="x_price_previous">74</span> <span class="x_currency">eur</span></p>
                            <p class="new-price">Cena: <span class="realPrice x_price_current">37</span> <span class="x_currency">eur</span></p>
                            <form action="getform.php" method="post" class="x_order_form order_all2"  onsubmit="gtag_report_conversion();">
	                            <input type="hidden" name="utm_source" value="<?=$_GET["cid"]?>">
	                            <input type="hidden" name="utm_campaign" value="{domonetka}">
                                <div class="form-group">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required placeholder="Moje meno" name="name" autocomplete="name">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control phone_n2" required placeholder="Môj telefón" name="phone" autocomplete="tel">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="order-btn sub2" value="Objednať s akciou">
                                   
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="container">
<div class="footer__bottom">
<div class="ev-footer create_rom_footer" data-background-color="white" data-color_link="black" data-color_logo="orange">
</div>
</div>


</div></footer>

<div class="ever-popup-build">
    <div class="wrap-popup" id="cloneThis">
        <div class="form">
            <div class="form-inner">
			<picture>
 	<source type="image/jpeg" srcset="images/tovar-header.png">
<img src="images/tovar-header.png" alt="" class="popup-prod">
</picture> 
<div class="form-wrap">
    <p class="old-price">Stará cena: <span class="x_price_previous">74</span> <span class="x_currency">eur</span></p>
    <p class="new-price">Cena: <span class="realPrice x_price_current">37</span> <span class="x_currency">eur</span></p>
    <form action="getform.php" method="post" class="x_order_form order_all2"  onsubmit="gtag_report_conversion();">
	    <input type="hidden" name="utm_source" value="<?=$_GET["cid"]?>">
	    <input type="hidden" name="utm_campaign" value="{domonetka}">
        <div class="form-group">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" required placeholder="Moje meno" name="name" autocomplete="name">
        </div>
        <div class="form-group">
            <input type="tel" class="form-control phone_n2" required placeholder="Môj telefón" name="phone" autocomplete="tel">
        </div>
        <div class="form-group">
            <input type="submit" class="order-btn sub2" value="Objednať s akciou">
            
        </div>

    </form>
</div>
                

            </div>
        </div>
    </div>
</div>

<script src="js/index.js"></script>

<script>
    var cookies = (function(a) {
	if (a == "") return {};
	var b = {};
	for (var i = 0; i < a.length; ++i) {
		var p=a[i].split('=');
		if (p.length != 2) continue;
		b[p[0]] = p[1];
	}

	return b;
})(document.cookie.split('; '));

//для клонирования блока в попап используются следующие айдишники
// #cloneThis - для десктопа
// #cloneMobileThis - для мобильного (если нужно)
//брейкпоинт для переключения попапа при необходимости дефолт значение = 1000

// в случае, если мы не клонируем форму, а верстаем попап произвольно,
// то делать это необходимо в контейнере с классом .ever-popup-build
// false (показывать контейнер) / true (не показывать контейнер)

var popupBuild = true; // false/true


//.ever-popup-btn - класс для для открытия попапа

//проверка кода
//.check__field - класс для поля проверки кода
//.check__btn - класс для кнопки провеки кода
//.check__result - класс для контейнера с результатом проверки кода

//таймер
//для вывода счетчика таймера используется 3 контенера (часы, минуты, секунды)
//.hours класс для вывода часов
//.minutes класс для вывода минут
//.seconds класс для вывода секунд

function initiate(cookies) {

	var breakpoint = 1000;
	var desktop = document.querySelector('#cloneThis');
	var mobile = document.querySelector('#cloneMobileThis');

	if (popupBuild) {
		// в случае, если мы верстаем попап в контейнере .ever-popup-build, даное условие прячет его, если значение переменной popupBuild = true
		var style = document.createElement('style');
		style.innerHTML = '.ever-popup-build{position: fixed; opacity: 0;z-index: -1; top: 0; left: -9999px;}';
		document.querySelector('head').appendChild(style)
	}

	function addPopupStyle() {
		// добавляем стили для нашего поапа
		var cont = document.createElement('style'),
			head = document.querySelector('head');
		cont.innerHTML = '.ever-popup__body.ever-mobile{display:none}.ever-popup{position: fixed;top: 0;left: 0;width: 100%;height: 100%;background: rgba(0,0,0,.7);z-index: 111;display: none;overflow: auto;}.ever-popup__body{position: static;float: none;display: block;margin: 0 auto;width:auto}.ever-popup.show{display: block;align-items: center;}.ever-popup__inner{position: relative;margin: 0 auto;padding-top:35px}.ever-popup__close{width: 35px;height: 30px;position: absolute;cursor:pointer;top: 0;right: 0;z-index: 1;-webkit-transition: .3s; -moz-transition: .3s; -ms-transition: .3s; -o-transition: .3s; transition: .3s;}.ever-popup__close:after, .ever-popup__close:before {content: "";position: absolute;right: 0;top: 10px;width: 35px;height: 10px;background: #fff;transition: all 1s;}.ever-popup__close:after {-webkit-transform: rotate(-45deg);-ms-transform: rotate(-45deg);-o-transform: rotate(-45deg);transform: rotate(-45deg);}.ever-popup__close:before {-webkit-transform: rotate(45deg);-ms-transform: rotate(45deg);-o-transform: rotate(45deg);transform: rotate(45deg);}' +
			'@media screen and (min-width: ' + breakpoint + 'px' + '){' +
			'.ever-popup__body.ever-desktop{display:none}' +
			'.ever-popup__body.ever-mobile{display:block}' +
			'}';
		head.appendChild(cont)
	}
	function addMobilePopupStyle() {
		// добавляем стили для нашего поапа
		var cont = document.createElement('style'),
			head = document.querySelector('head');
		cont.innerHTML = '@media screen and (min-width: ' + breakpoint + 'px' + ') {.ever-popup {position: fixed;top: 0;left: 0;width: 100%;height: 100%;background: rgba(0, 0, 0, .7);z-index: 111;display: none;overflow: auto;}.ever-popup__body {position: static;float: none;display: block;margin: 0 auto;width: auto}.ever-popup.show {display: block;align-items: center;}.ever-popup__inner {position: relative;margin: 0 auto;padding-top: 35px}.ever-popup__close {width: 35px;height: 30px;position: absolute;cursor: pointer;top: 0;right: 0;z-index: 1;-webkit-transition: .3s;-moz-transition: .3s;-ms-transition: .3s;-o-transition: .3s;transition: .3s;}.ever-popup__close:after, .ever-popup__close:before {content: "";position: absolute;right: 0;top: 10px;width: 35px;height: 10px;background: #fff;transition: all 1s;}.ever-popup__close:after {-webkit-transform: rotate(-45deg);-ms-transform: rotate(-45deg);-o-transform: rotate(-45deg);transform: rotate(-45deg);}.ever-popup__close:before {-webkit-transform: rotate(45deg);-ms-transform: rotate(45deg);-o-transform: rotate(45deg);transform: rotate(45deg);}}';
		head.appendChild(cont)
	}

	function createOverlay() {
		// создаем затемненный фон для попапа и вставляем его в разметку html
		var parent = document.createElement('div'),
			parentInner = document.createElement('div'),
			closeParent = document.createElement('div');

		parent.classList.add('ever-popup');
		parentInner.classList.add('ever-popup__inner');
		closeParent.classList.add('ever-popup__close');

		parent.appendChild(parentInner);
		parentInner.appendChild(closeParent);
		document.body.appendChild(parent);
	}

	function createModalBody(breakpoint) {
		// функция определяет содержимое для попапа, клонирует его содержимое, и поещает в контейнер ever-popup__body
		var parent = document.querySelector('.ever-popup__inner');
		if (desktop) {
			var desktopClone = desktop.cloneNode(true);
			desktopClone.classList.add('ever-popup__body');
			desktopClone.removeAttribute('id');
			parent.appendChild(desktopClone);
			document.querySelector('.ever-popup .ever-popup__inner').style.width = document.querySelector('#cloneThis').offsetWidth + 'px';
		}

		if (mobile) {
			var mobileClone = mobile.cloneNode(true);
			if (desktopClone) {
				desktopClone.classList.add('ever-desktop');
			}
			mobileClone.classList.add('ever-popup__body');
			mobileClone.classList.add('ever-mobile');
			mobileClone.removeAttribute('id');
			parent.appendChild(mobileClone);
			var mobileStyles = '.ever-desktop{display: block}.ever-mobile{display: none}@media screen and (min-width: ' + breakpoint + 'px){.ever-mobile{display: block}.ever-desktop{display: none;}}';

			var mobileStylesContainer = document.createElement('style');
			mobileStylesContainer.innerHTML = mobileStyles;
			document.querySelector('head').appendChild(mobileStylesContainer)
			document.querySelector('.ever-popup .ever-popup__inner').style.width = document.querySelector('#cloneMobileThis').offsetWidth + 'px';
		}


	}

	function modalPosition(screenHeight) {
		//расчет ширины и вывод ее в html, функция вызывается при загрузке страницы, а так же при ресайзе
		var container = document.querySelector('.ever-popup  .ever-popup__inner');
		if (container) {

			var desktop = document.querySelector('#cloneThis'),
				mobile = document.querySelector('#cloneMobileThis');

			if (desktop) {
				if (window.innerWidth >= breakpoint) {
					checkPosition(desktop, container, screenHeight);
					container.style.width = desktop.offsetWidth + 'px';
				}
				if (!mobile) {
					checkPosition(desktop, container, screenHeight);
					container.style.width = desktop.offsetWidth + 'px';
				}
			}
			if (mobile) {
				if (window.innerWidth <= breakpoint) {
					checkPosition(mobile, container, screenHeight);
					container.style.width = mobile.offsetWidth + 'px';
				}
			}
		}
	}

	function checkPosition(selector, container, screenHeight) {
		//позиционирование попапа по вертикали
		var cont = selector,
			contHeight = cont.offsetHeight;

		if (contHeight > screenHeight) {
			container.style.margin = '40px auto';
		}
		else {
			var top = (screenHeight - contHeight) / 2;
			container.style.margin = top + 'px auto 20px';
		}
	}

	function showPopup() {
		//функция для показа попапа
		var popup = document.querySelector('.ever-popup');
		popup.classList.add('show')
	}

	function hidePopup() {
		//функция для скрытия попапа
		var popup = document.querySelector('.ever-popup');
		popup.classList.remove('show')
	}

	function notHide(e) {
		//функция для прерывания выполнения сценария по клику
		e.stopPropagation()
	}

	function checkCode(event) {
		// проверка кода подлинности
		event.preventDefault();

		var code = document.querySelector(".check__field").value,
			msg = document.querySelector(".check__result");

		if (code.length === 15) {
			msg.innerHTML = window.codeCorrect;
		}
		else if (code.length === 0) {
			msg.innerHTML = window.codeEmpty;
		} else {
			msg.innerHTML = window.codeInvalid;
		}
	}
	if (cookies['popup_mouseout_enabled'] == 'true') {
		var mouseOutCount = 0;
		document.body.addEventListener('mouseleave', function (event) {
			//событие на увод мышки со страницы. если мышка уходит за верхнюю границу документа, вызывается попап
			var e = event || window.event;
			e = e.clientY;
			var popup = document.querySelector('.ever-popup');

			if (popup && e < 10 && mouseOutCount === 0) {
				popup.classList.add('show');
				mouseOutCount++;
			}
		});
	}
	function addPhoneBtn(breakpoint) {
		// добавление синей трубки для вызова попапа на десктопе
		var phoneBtnContainer = document.createElement('div');
		phoneBtnContainer.classList.add('phoneBtnContainer');
		phoneBtnContainer.innerHTML = '<div class="bluePhone"><div class=" phone-call cbh-phone cbh-green cbh-show ever-popup-btn cbh-static" id="clbh_phone_div"><div class="phoneJs"><div class="cbh-ph-circle"></div><div class="cbh-ph-circle-fill"></div><div class="cbh-ph-img-circle1"></div></div></div></div>';
		document.body.appendChild(phoneBtnContainer);

		var phoneStyles = document.createElement('style');
		phoneStyles.innerHTML = '@media screen and (min-width: ' + breakpoint + 'px) {.phoneBtnContainer{position:fixed; right: 10px;bottom: 10px; visibility:hidden;background-color:transparent;width:200px;height:200px;cursor:pointer;z-index:99;-webkit-backface-visibility:hidden;-webkit-transform:translateZ(0);-webkit-transition:visibility .5s;-moz-transition:visibility .5s;-o-transition:visibility .5s;transition:visibility .5s}.cbh-phone.cbh-show{visibility:visible}@-webkit-keyframes fadeInRight{0%{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}100%{opacity:1;-webkit-transform:none;transform:none}}@keyframes fadeInRight{0%{opacity:0;-webkit-transform:translate3d(100%,0,0);-ms-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}100%{opacity:1;-webkit-transform:none;-ms-transform:none;transform:none}}@-webkit-keyframes fadeInRightBig{0%{opacity:0;-webkit-transform:translate3d(2000px,0,0);transform:translate3d(2000px,0,0)}100%{opacity:1;-webkit-transform:none;transform:none}}@-webkit-keyframes fadeOutRight{0%{opacity:1}100%{opacity:0;-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}@keyframes fadeOutRight{0%{opacity:1}100%{opacity:0;-webkit-transform:translate3d(100%,0,0);-ms-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}.fadeOutRight{-webkit-animation-name:fadeOutRight;animation-name:fadeOutRight}.cbh-phone.cbh-static1{opacity:.6}.cbh-phone.cbh-hover1{opacity:1}.cbh-ph-circle{width:160px;height:160px;top:20px;left:20px;position:absolute;background-color:transparent;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%;border:2px solid rgba(30,30,30,.4);opacity:.1;-webkit-animation:cbh-circle-anim 1.2s infinite ease-in-out;-moz-animation:cbh-circle-anim 1.2s infinite ease-in-out;-ms-animation:cbh-circle-anim 1.2s infinite ease-in-out;-o-animation:cbh-circle-anim 1.2s infinite ease-in-out;animation:cbh-circle-anim 1.2s infinite ease-in-out;-webkit-transition:all .5s;-moz-transition:all .5s;-o-transition:all .5s;transition:all .5s}.cbh-phone.cbh-active .cbh-ph-circle1{-webkit-animation:cbh-circle-anim 1.1s infinite ease-in-out!important;-moz-animation:cbh-circle-anim 1.1s infinite ease-in-out!important;-ms-animation:cbh-circle-anim 1.1s infinite ease-in-out!important;-o-animation:cbh-circle-anim 1.1s infinite ease-in-out!important;animation:cbh-circle-anim 1.1s infinite ease-in-out!important}.cbh-phone.cbh-static .cbh-ph-circle{-webkit-animation:cbh-circle-anim 2.2s infinite ease-in-out!important;-moz-animation:cbh-circle-anim 2.2s infinite ease-in-out!important;-ms-animation:cbh-circle-anim 2.2s infinite ease-in-out!important;-o-animation:cbh-circle-anim 2.2s infinite ease-in-out!important;animation:cbh-circle-anim 2.2s infinite ease-in-out!important}.cbh-phone.cbh-hover .cbh-ph-circle{border-color:rgba(0,175,242,1);opacity:.5}.cbh-phone.cbh-green.cbh-hover .cbh-ph-circle{border-color:rgba(117,235,80,1);opacity:.5}.cbh-phone.cbh-green .cbh-ph-circle{border-color:rgba(0,175,242,1);opacity:.5}.cbh-phone.cbh-gray.cbh-hover .cbh-ph-circle{border-color:rgba(204,204,204,1);opacity:.5}.cbh-phone.cbh-gray .cbh-ph-circle{border-color:rgba(117,235,80,1);opacity:.5}.cbh-ph-circle-fill{width:100px;height:100px;top:50px;left:50px;position:absolute;background-color:#000;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%;border:2px solid transparent;opacity:.1;-webkit-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;-moz-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;-ms-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;-o-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;animation:cbh-circle-fill-anim 2.3s infinite ease-in-out;-webkit-transition:all .5s;-moz-transition:all .5s;-o-transition:all .5s;transition:all .5s}.cbh-phone.cbh-active .cbh-ph-circle-fill{-webkit-animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important;-moz-animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important;-ms-animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important;-o-animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important;animation:cbh-circle-fill-anim 1.7s infinite ease-in-out!important}.cbh-phone.cbh-static .cbh-ph-circle-fill{-webkit-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;-moz-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;-ms-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;-o-animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;animation:cbh-circle-fill-anim 2.3s infinite ease-in-out!important;opacity:0!important} .cbh-phone.cbh-hover .cbh-ph-circle-fill{background-color:rgba(0,175,242,.5);opacity:.75!important}.cbh-phone.cbh-green.cbh-hover .cbh-ph-circle-fill{background-color:rgba(117,235,80,.5);opacity:.75!important}.cbh-phone.cbh-green .cbh-ph-circle-fill{background-color:rgba(0,175,242,.5);opacity:.75!important}.cbh-phone.cbh-gray.cbh-hover .cbh-ph-circle-fill{background-color:rgba(204,204,204,.5);opacity:.75!important}.cbh-phone.cbh-gray .cbh-ph-circle-fill{background-color:rgba(117,235,80,.5);opacity:.75!important}.cbh-ph-img-circle1{width:60px;height:60px;top:70px;left:70px;position:absolute;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAAB/ElEQVR42uya7W3CMBCG31QM4A1aNggTlG6QbpBMkHYC1AloJ4BOABuEDcgGtBOETnD9c1ERCH/lwxeaV8oPFGP86Hy+DxMREW5Bd7gRjSDSNGn4/RiAOvm8C0ZCRD5PSkQVXSr1nK/xE3mcWimA1ZV3JYBZCIO4giQANoYxMwYS6+xKY4lT5dJPreWZY+uspqSCKPYN27GJVBDXheVSQe494ksiEWTuMXcu1dld9SARxDX1OAJ4lgjy4zDnFsC076A4adEiRwAZg4hOUSpNoCsBPDGM+HqkNGynYBCuILuWj+dgWysGsNe8nwL4GsrW0m2fxZBq9rW0rNcX5MOQ9eZD8JFahcG5g/iKT671alGAYQggpYWvpEPYWrU/HDTOfeRIX0q2SL3QN4tGhZJukVobQyXYWw7WtLDKDIuM+ZSzscyCE9PCy5IttCvnZNaeiGLNHKuz8ZVh/MXTVu/1xQKmIqLEAuJ0fNo3iG5B51oSkeKnsBi/4bG9gYB/lCytU5G9DryFW+3Gm+JLwU7ehbJrwTjq4DJU8bHcVbEV9dXXqqP6uqO5e2/QZRYJpqu2IUAA4B3tXvx8hgKp05QZW6dJqrLTNkB6vrRURLRwPHqtYgkC3cLWQAcDQGGKH13FER/NATzi786+BPDNjm1dMkfjn2pGkBHkf4D8DgBJDuDHx9BN+gAAAABJRU5ErkJggg==);background-color:rgba(30,30,30,.1);background-position:center center;background-repeat:no-repeat;-webkit-border-radius:100%;-moz-border-radius:100%;border-radius:100%;border:2px solid transparent;opacity:.7;-webkit-animation:cbh-circle-img-anim 1s infinite ease-in-out;-moz-animation:cbh-circle-img-anim 1s infinite ease-in-out;-ms-animation:cbh-circle-img-anim 1s infinite ease-in-out;-o-animation:cbh-circle-img-anim 1s infinite ease-in-out;animation:cbh-circle-img-anim 1s infinite ease-in-out}.cbh-phone.cbh-active .cbh-ph-img-circle1{-webkit-animation:cbh-circle-img-anim 1s infinite ease-in-out!important;-moz-animation:cbh-circle-img-anim 1s infinite ease-in-out!important;-ms-animation:cbh-circle-img-anim 1s infinite ease-in-out!important;-o-animation:cbh-circle-img-anim 1s infinite ease-in-out!important;animation:cbh-circle-img-anim 1s infinite ease-in-out!important}.cbh-phone.cbh-static .cbh-ph-img-circle1{-webkit-animation:cbh-circle-img-anim 0s infinite ease-in-out!important;-moz-animation:cbh-circle-img-anim 0s infinite ease-in-out!important;-ms-animation:cbh-circle-img-anim 0s infinite ease-in-out!important;-o-animation:cbh-circle-img-anim 0s infinite ease-in-out!important;animation:cbh-circle-img-anim 0s infinite ease-in-out!important}.cbh-phone.cbh-hover .cbh-ph-img-circle1{background-color:rgba(0,175,242,1)}.cbh-phone.cbh-green.cbh-hover .cbh-ph-img-circle1:hover{background-color:rgba(117,235,80,1)}.cbh-phone.cbh-green .cbh-ph-img-circle1{background-color:rgba(0,175,242,1)}.cbh-phone.cbh-green .cbh-ph-img-circle1{background-color:rgba(0,175,242,1)}.cbh-phone.cbh-gray.cbh-hover .cbh-ph-img-circle1{background-color:rgba(204,204,204,1)}.cbh-phone.cbh-gray .cbh-ph-img-circle1{background-color:rgba(117,235,80,1)}@-moz-keyframes cbh-circle-anim{0%{-moz-transform:rotate(0deg) scale(0.5) skew(1deg);opacity:.1;-moz-opacity:.1;-webkit-opacity:.1;-o-opacity:.1}30%{-moz-transform:rotate(0deg) scale(.7) skew(1deg);opacity:.5;-moz-opacity:.5;-webkit-opacity:.5;-o-opacity:.5}100%{-moz-transform:rotate(0deg) scale(1) skew(1deg);opacity:.6;-moz-opacity:.6;-webkit-opacity:.6;-o-opacity:.1}}@-webkit-keyframes cbh-circle-anim{0%{-webkit-transform:rotate(0deg) scale(0.5) skew(1deg);-webkit-opacity:.1}30%{-webkit-transform:rotate(0deg) scale(.7) skew(1deg);-webkit-opacity:.5}100%{-webkit-transform:rotate(0deg) scale(1) skew(1deg);-webkit-opacity:.1}}@-o-keyframes cbh-circle-anim{0%{-o-transform:rotate(0deg) kscale(0.5) skew(1deg);-o-opacity:.1}30%{-o-transform:rotate(0deg) scale(.7) skew(1deg);-o-opacity:.5}100%{-o-transform:rotate(0deg) scale(1) skew(1deg);-o-opacity:.1}}@keyframes cbh-circle-anim{0%{transform:rotate(0deg) scale(0.5) skew(1deg);opacity:.1}30%{transform:rotate(0deg) scale(.7) skew(1deg);opacity:.5}100%{transform:rotate(0deg) scale(1) skew(1deg);opacity:.1}}@-moz-keyframes cbh-circle-fill-anim{0%{-moz-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}50%{-moz-transform:rotate(0deg) -moz-scale(1) skew(1deg);opacity:.2}100%{-moz-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}}@-webkit-keyframes cbh-circle-fill-anim{0%{-webkit-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}50%{-webkit-transform:rotate(0deg) scale(1) skew(1deg);opacity:.2}100%{-webkit-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}}@-o-keyframes cbh-circle-fill-anim{0%{-o-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}50%{-o-transform:rotate(0deg) scale(1) skew(1deg);opacity:.2}100%{-o-transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}}@keyframes cbh-circle-fill-anim{0%{transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}50%{transform:rotate(0deg) scale(1) skew(1deg);opacity:.2}100%{transform:rotate(0deg) scale(0.7) skew(1deg);opacity:.2}}@keyframes cbh-circle-img-anim{0%{transform:rotate(0deg) scale(1) skew(1deg)}10%{transform:rotate(-25deg) scale(1) skew(1deg)}20%{transform:rotate(25deg) scale(1) skew(1deg)}30%{transform:rotate(-25deg) scale(1) skew(1deg)}40%{transform:rotate(25deg) scale(1) skew(1deg)}100%,50%{transform:rotate(0deg) scale(1) skew(1deg)}}@-moz-keyframes cbh-circle-img-anim{0%{transform:rotate(0deg) scale(1) skew(1deg)}10%{-moz-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-moz-transform:rotate(25deg) scale(1) skew(1deg)}30%{-moz-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-moz-transform:rotate(25deg) scale(1) skew(1deg)}100%,50%{-moz-transform:rotate(0deg) scale(1) skew(1deg)}}@-webkit-keyframes cbh-circle-img-anim{0%{-webkit-transform:rotate(0deg) scale(1) skew(1deg)}10%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-webkit-transform:rotate(25deg) scale(1) skew(1deg)}30%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-webkit-transform:rotate(25deg) scale(1) skew(1deg)}100%,50%{-webkit-transform:rotate(0deg) scale(1) skew(1deg)}}@-o-keyframes cbh-circle-img-anim{0%{-o-transform:rotate(0deg) scale(1) skew(1deg)}10%{-o-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-o-transform:rotate(25deg) scale(1) skew(1deg)}30%{-o-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-o-transform:rotate(25deg) scale(1) skew(1deg)}100%,50%{-o-transform:rotate(0deg) scale(1) skew(1deg)}}.cbh-ph-img-circle1 {}.cbh-phone.cbh-green .cbh-ph-circle {border-color: rgba(0, 175, 242, 1)}.cbh-phone.cbh-green .cbh-ph-circle-fill {background-color: rgba(0, 175, 242, 1);}.cbh-phone.cbh-green .cbh-ph-img-circle1 {background-color:rgba(0, 175, 242, 1);}body, div, dl, dt, dd, ul, ol, li, nav, h1, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, input, button, textarea, p, blockquote, th, td, a {-webkit-transform-origin: center center;-ms-transform-origin: center center;-o-transform-origin: center center;transform-origin: center center;}}';
		document.querySelector('head').appendChild(phoneStyles);
		document.querySelector('.phoneBtnContainer').addEventListener('click', showPopup);
	}

	function init() {

		var desktopPopup = document.querySelector('#cloneThis'),
			mobilePopup = document.querySelector('#cloneMobileThis');
		var h = document.querySelector('.hours'), m = document.querySelector('.minutes'),
			s = document.querySelector('.seconds');

		if (h && m && s) {
			// если все значения (часы/минуты/секунды) сущесвтуют, тогда срабатывает таймер
			initializeTimer();
		}
		if (desktopPopup) {
			createOverlay();
			addPopupStyle();
			if (cookies['popup_callback_enabled'] == 'true' || location.hostname === 'localhost' || location.hostname === '127.0.0.1') {
				addPhoneBtn(breakpoint);
			}
		}
		else {
			createOverlay();
			addMobilePopupStyle()
		}
		if (desktopPopup || mobilePopup) {
			//если у нас есть #cloneThis или #cloneMobileThis, тогда все функции ниже выполняются

			createModalBody(breakpoint);
			modalPosition(window.innerHeight);

			document.addEventListener('click', function(e) {
				if (e.target === document.querySelector('.ever-popup') ||
						e.target === document.querySelector('.ever-popup__close')) {
						hidePopup();
				}
		});
			document.addEventListener('keydown', function(e) {
				if (e.keyCode === 27) {
						hidePopup();
				}
		});

			var modalBtn = document.querySelectorAll('.ever-popup-btn');
			for (var i = 0; i < modalBtn.length; i++) {
				modalBtn && modalBtn[i].addEventListener('click', function () {
                    showPopup();
					modalPosition(window.innerHeight)
                });
			}
		}
		// рабоатет если у нас есть класс .check__btn
		var checkBtn = document.querySelector(".check__btn");
		checkBtn && checkBtn.addEventListener('click', checkCode);
	}

	init();

	window.addEventListener('resize', function () {
		//при ресайзе пересчитываем позиционирование модального окна
		modalPosition(window.innerHeight);
	});

    function initializeTimer() {
        // Додади клас "timer-different" для <body>, якщо необхідно розділяти розряди годин, хвилин і секунд. Наприклад, http://prntscr.com/japnvo

        if (!localStorage.getItem("ever-timer")) {
            var time = {
                hours: 0,
                minutes: 27,
                seconds: 0
            };

            time = time.hours * 3600 + time.minutes * 60 + time.seconds;

            localStorage.setItem("time", time);
            localStorage.setItem("ever-timer", true);
        }

        timerSettings();
    }

    function timerSettings() {
        var time = localStorage.getItem('time'),
            different = document.querySelector(".timer-different"),
            hours = parseInt(time / 3600, 10),
            minutes = parseInt((time - hours * 3600 ) / 60, 10),
            seconds = parseInt(time % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : "" + minutes;
        seconds = seconds < 10 ? "0" + seconds : "" + seconds;
        hours = hours < 10 ? "0" + hours : "" + hours;

        var hoursHTML = document.getElementsByClassName("hours");
        var minutesHTML = document.getElementsByClassName("minutes");
        var secondsHTML = document.getElementsByClassName("seconds");

        if (--time < 0) {
            localStorage.removeItem("ever-timer");
            return;
        }
        if (different) {
            seconds = seconds.split("");
            minutes = minutes.split("");
            hours = hours.split("");

            diFilling(hoursHTML, hours);
            diFilling(minutesHTML, minutes);
            diFilling(secondsHTML, seconds);
        } else {
            filling(hoursHTML, hours);
            filling(minutesHTML, minutes);
            filling(secondsHTML, seconds);
        }

        localStorage.setItem("time", time);
        setTimeout(timerSettings, 1000);
    }

    function filling(obj, value) {
        for (var i = 0; i < obj.length; i++) {
            obj[i].innerHTML = value;
        }
    }

    function diFilling(obj, value) {
        for (var i = 0; i < obj.length; i++) {
            obj[i].innerHTML = value[i % 2];
        }
    }
};

document.addEventListener('DOMContentLoaded', function () {
	var modals = document.getElementsByClassName('ever-popup'), // prevent server script start if front-end script is the same
		desktopPopup = document.querySelector('#cloneThis'),
		mobilePopup = document.querySelector('#cloneMobileThis');

	if (desktopPopup || mobilePopup) {
		if (!modals.length) {
			initiate(cookies);
		}
	}
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