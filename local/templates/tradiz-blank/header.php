<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html>
<head>
    <? $APPLICATION->ShowHead(); ?>
    <meta charset="utf-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!--metatextblock--><title>Виртуальный
        музей</title>
    <meta name="description" content="Ассоциация «Клуб Морская Традиция»"/>
    <meta property="og:url" content="http://clubrmt.tilda.ws"/>
    <meta property="og:title" content="Виртуальный музей"/>
    <meta property="og:description" content="Ассоциация «Клуб Морская Традиция»"/>
    <meta property="og:type" content="website"/>
    <link rel="canonical" href="http://clubrmt.tilda.ws"><!--/metatextblock-->
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://ws.tildacdn.com">
    <link rel="shortcut icon" href="images/tildafavicon.ico" type="image/x-icon"/><!-- Assets -->
    <script src="https://neo.tildacdn.com/js/tilda-fallback-1.0.min.js" async charset="utf-8"></script>
    <link rel="stylesheet" href="css/tilda-grid-3.0.min.css" type="text/css" media="all"
          onerror="this.loaderr='y';"/>
    <link rel="stylesheet" href="css/tilda.css" type="text/css" media="all" onerror="this.loaderr='y';"/>
    <link rel="stylesheet" href="css/tilda-blocks-page39473367.min.css?t=1703098534" type="text/css" media="all"
          onerror="this.loaderr='y';"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@400;700&family=PT+Sans:wght@400;700&subset=latin,cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" href="css/tilda-animation-2.0.min.css" type="text/css" media="all"
          onerror="this.loaderr='y';"/>
    <link rel="stylesheet" href="css/highlight.min.css" type="text/css" media="all" onerror="this.loaderr='y';"/>
    <link rel="stylesheet" href="css/tilda-slds-1.4.min.css" type="text/css" media="print"
          onload="this.media='all';"
          onerror="this.loaderr='y';"/>
    <noscript>
        <link rel="stylesheet" href="css/tilda-slds-1.4.min.css" type="text/css" media="all"/>
    </noscript>
    <link rel="stylesheet" href="css/tilda-zero-gallery-1.0.min.css" type="text/css" media="all"
          onerror="this.loaderr='y';"/>
    <script nomodule src="js/tilda-polyfill-1.0.min.js" charset="utf-8"></script>
    <script type="text/javascript">function t_onReady(func) {
            if (document.readyState != 'loading') {
                func();
            } else {
                document.addEventListener('DOMContentLoaded', func);
            }
        }

        function t_onFuncLoad(funcName, okFunc, time) {
            if (typeof window[funcName] === 'function') {
                okFunc();
            } else {
                setTimeout(function () {
                    t_onFuncLoad(funcName, okFunc, time);
                }, (time || 100));
            }
        }

        function t396_initialScale(t) {
            var e = document.getElementById("rec" + t);
            if (e) {
                var r = e.querySelector(".t396__artboard");
                if (r) {
                    var a, i = document.documentElement.clientWidth, l = [],
                        d = r.getAttribute("data-artboard-screens");
                    if (d) {
                        d = d.split(",");
                        for (var o = 0; o < d.length; o++) l[o] = parseInt(d[o], 10)
                    } else l = [320, 480, 640, 960, 1200];
                    for (o = 0; o < l.length; o++) {
                        var n = l[o];
                        n <= i && (a = n)
                    }
                    var g = "edit" === window.allrecords.getAttribute("data-tilda-mode"),
                        u = "center" === t396_getFieldValue(r, "valign", a, l),
                        c = "grid" === t396_getFieldValue(r, "upscale", a, l),
                        t = t396_getFieldValue(r, "height_vh", a, l),
                        f = t396_getFieldValue(r, "height", a, l),
                        e = !!window.opr && !!window.opr.addons || !!window.opera || -1 !== navigator.userAgent.indexOf(" OPR/");
                    if (!g && u && !c && !t && f && !e) {
                        for (var s = parseFloat((i / a).toFixed(3)), _ = [r, r.querySelector(".t396__carrier"), r.querySelector(".t396__filter")], o = 0; o < _.length; o++) _[o].style.height = parseInt(f, 10) * s + "px";
                        for (var h = r.querySelectorAll(".t396__elem"), o = 0; o < h.length; o++) h[o].style.zoom = s
                    }
                }
            }
        }

        function t396_getFieldValue(t, e, r, a) {
            var i = a[a.length - 1],
                l = r === i ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + r);
            if (!l) for (var d = 0; d < a.length; d++) {
                var o = a[d];
                if (!(o <= r) && (l = o === i ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + o))) break
            }
            return l
        }</script>
    <script src="js/jquery-1.10.2.min.js" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script src="js/tilda-scripts-3.0.min.js" charset="utf-8" defer onerror="this.loaderr='y';"></script>
    <script src="js/tilda-blocks-page39473367.min.js?t=1703098534" charset="utf-8" async
            onerror="this.loaderr='y';"></script>
    <script src="js/tilda-lazyload-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-animation-2.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-zero-1.1.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/highlight.min.js" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script src="js/tilda-slds-1.4.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-zero-gallery-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/hammer.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-animation-sbs-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-zero-scale-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-zero-fixed-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="js/tilda-events-1.0.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script type="text/javascript">window.dataLayer = window.dataLayer || [];</script>
    <script type="text/javascript">(function () {
            if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent)) === false && typeof (sessionStorage) != 'undefined' && sessionStorage.getItem('visited') !== 'y' && document.visibilityState) {
                var style = document.createElement('style');
                style.type = 'text/css';
                style.innerHTML = '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
                document.getElementsByTagName('head')[0].appendChild(style);

                function t_setvisRecs() {
                    var alr = document.querySelectorAll('.t-records');
                    Array.prototype.forEach.call(alr, function (el) {
                        el.classList.add("t-records_animated");
                    });
                    setTimeout(function () {
                        Array.prototype.forEach.call(alr, function (el) {
                            el.classList.add("t-records_visible");
                        });
                        sessionStorage.setItem("visited", "y");
                    }, 400);
                }

                document.addEventListener('DOMContentLoaded', t_setvisRecs);
            }
        })();</script>
    <style>@media screen and (min-width: 980px) {
            .t-records {
                opacity: 0;
            }

            .t-records_animated {
                -webkit-transition: opacity ease-in-out 1s;
                -moz-transition: opacity ease-in-out 1s;
                -o-transition: opacity ease-in-out 1s;
                transition: opacity ease-in-out 1s;
            }

            .t-records.t-records_visible,
            .t-records .t-records {
                opacity: 1;
            }
        }</style>

    <style>
        #rec638379583 .t396__artboard {
            min-height: 650px;
            height: 100vh;
        }

        #rec638379583 .t396__filter {
            min-height: 650px;
            height: 100vh;
        }

        #rec638379583 .t396__carrier {
            min-height: 650px;
            height: 100vh;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .t396__artboard {
            }

            #rec638379583 .t396__filter {
            }

            #rec638379583 .t396__carrier {
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .t396__artboard {
                min-height: 850px;
            }

            #rec638379583 .t396__filter {
                min-height: 850px;
            }

            #rec638379583 .t396__carrier {
                min-height: 850px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379583 .t396__artboard {
                min-height: 500px;
            }

            #rec638379583 .t396__filter {
                min-height: 500px;
            }

            #rec638379583 .t396__carrier {
                min-height: 500px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379583 .t396__artboard {
                min-height: 650px;
                height: 10vh;
            }

            #rec638379583 .t396__filter {
                min-height: 650px;
                height: 10vh;
            }

            #rec638379583 .t396__carrier {
                min-height: 650px;
                height: 10vh;
                background-attachment: scroll;
            }
        }

        #rec638379583 .tn-elem[data-elem-id="1609975679282"] {
            z-index: 2;
            top: calc(50vh - 50px + 0px);
            left: calc(50% - 50% + 0px);
            width: 100%;
            height: 100%;
        }

        #rec638379583 .tn-elem[data-elem-id="1609975679282"] .tn-atom {
            background-color: #10161d;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
        }

        @media screen and (max-width: 959px) {
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379583 .tn-elem[data-elem-id="1694465462159"] {
            z-index: 3;
            top: calc(50vh - 16.5px + 159px);
            left: calc(50% - 408.5px + -5px);
            width: 817px;
            height: 33px;
        }

        #rec638379583 .tn-elem[data-elem-id="1694465462159"] .tn-atom {
            border-width: 0px;
            border-radius: 300px;
            background-color: #0a1521;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 40px 40px rgba(10, 21, 33, 1);
        }

        @media screen and (max-width: 1199px) {
        }

        @media screen and (max-width: 959px) {
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
            #rec638379583 .tn-elem[data-elem-id="1694465462159"] {
                top: calc(5vh - 16.5px + 175px);
                left: calc(50% - 408.5px + -41px);
                width: 178px;
                height: 90px;
            }
        }

        #rec638379583 .tn-elem[data-elem-id="1609976020624"] {
            color: #e8e8e8;
            z-index: 4;
            top: calc(50vh - 0px + 48px);
            left: calc(50% - 193.5px + -418px);
            width: 387px;
        }

        #rec638379583 .tn-elem[data-elem-id="1609976020624"] .tn-atom {
            color: #e8e8e8;
            font-size: 110px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 300;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .tn-elem[data-elem-id="1609976020624"] {
                top: calc(5vh - 0px + 82px);
                left: calc(50% - 193.5px + 116px);
                width: 700px;
            }

            #rec638379583 .tn-elem[data-elem-id="1609976020624"] .tn-atom {
                font-size: 90px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1609976020624"] {
                top: calc(5vh - 0px + 62px);
                left: calc(50% - 193.5px + 1px);
                width: 640px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379583 .tn-elem[data-elem-id="1609976020624"] {
                top: calc(5vh - 0px + 174px);
                left: calc(50% - 193.5px + 10px);
                width: 460px;
            }

            #rec638379583 .tn-elem[data-elem-id="1609976020624"] {
                text-align: left;
            }

            #rec638379583 .tn-elem[data-elem-id="1609976020624"] .tn-atom {
                font-size: 45px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379583 .tn-elem[data-elem-id="1609976020624"] {
                top: calc(5vh - 0px + 406px);
                left: calc(50% - 193.5px + 20px);
                width: 269px;
            }
        }

        #rec638379583 .tn-elem[data-elem-id="1609976762936"] {
            color: #e8e8e8;
            z-index: 5;
            top: calc(50vh - 0px + 156px);
            left: calc(50% - 417px + -5px);
            width: 834px;
        }

        #rec638379583 .tn-elem[data-elem-id="1609976762936"] .tn-atom {
            color: #e8e8e8;
            font-size: 110px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 300;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .tn-elem[data-elem-id="1609976762936"] {
                top: calc(5vh - 0px + 177px);
                left: calc(50% - 417px + -4px);
                width: 940px;
            }

            #rec638379583 .tn-elem[data-elem-id="1609976762936"] .tn-atom {
                font-size: 90px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1609976762936"] {
                top: calc(5vh - 0px + 202px);
                left: calc(50% - 417px + 1px);
                width: 620px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379583 .tn-elem[data-elem-id="1609976762936"] {
                top: calc(5vh - 0px + 227px);
                left: calc(50% - 417px + 10px);
                width: 460px;
            }

            #rec638379583 .tn-elem[data-elem-id="1609976762936"] {
                text-align: left;
            }

            #rec638379583 .tn-elem[data-elem-id="1609976762936"] .tn-atom {
                font-size: 45px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379583 .tn-elem[data-elem-id="1609976762936"] {
                top: calc(5vh - 0px + 456px);
                left: calc(50% - 417px + 20px);
                width: 246px;
            }
        }

        #rec638379583 .tn-elem[data-elem-id="1609976992636"] {
            color: #e8e8e8;
            text-align: right;
            z-index: 6;
            top: calc(50vh - 0px + 268px);
            left: calc(50% - 480px + 110px);
            width: 960px;
        }

        #rec638379583 .tn-elem[data-elem-id="1609976992636"] .tn-atom {
            color: #e8e8e8;
            font-size: 110px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 100;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .tn-elem[data-elem-id="1609976992636"] {
                top: calc(5vh - 0px + 272px);
                left: calc(50% - 480px + 76px);
                width: 780px;
            }

            #rec638379583 .tn-elem[data-elem-id="1609976992636"] .tn-atom {
                font-size: 90px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1609976992636"] {
                top: calc(5vh - 0px + 337px);
                left: calc(50% - 480px + 1px);
                width: 620px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379583 .tn-elem[data-elem-id="1609976992636"] {
                top: calc(5vh - 0px + 280px);
                left: calc(50% - 480px + 10px);
                width: 460px;
            }

            #rec638379583 .tn-elem[data-elem-id="1609976992636"] {
                text-align: left;
            }

            #rec638379583 .tn-elem[data-elem-id="1609976992636"] .tn-atom {
                font-size: 45px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379583 .tn-elem[data-elem-id="1609976992636"] {
                top: calc(5vh - 0px + 549px);
                left: calc(50% - 480px + 20px);
                width: 246px;
            }
        }

        #rec638379583 .tn-elem[data-elem-id="1609978626161"] {
            z-index: 7;
            top: 88px;
            left: calc(50% - 600px + 0px);
            width: 100%;
            height: 2px;
        }

        #rec638379583 .tn-elem[data-elem-id="1609978626161"] .tn-atom {
            background-color: #e8e8e8;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .tn-elem[data-elem-id="1609978626161"] {
                top: 86px;
                left: calc(50% - 480px + 0px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1609978626161"] {
                top: 86px;
                left: calc(50% - 320px + 0px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379583 .tn-elem[data-elem-id="1609978626161"] {
                top: 66px;
                left: calc(50% - 240px + 0px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379583 .tn-elem[data-elem-id="1609978626161"] {
                top: 87px;
            }
        }

        #rec638379583 .tn-elem[data-elem-id="1609977389102"] {
            color: #ffffff;
            text-align: center;
            z-index: 8;
            top: 34px;
            left: calc(50% - 600px + 845px);
            width: 73px;
            height: 28px;
        }

        #rec638379583 .tn-elem[data-elem-id="1609977389102"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638379583 .tn-elem[data-elem-id="1609977389102"] .tn-atom:hover {
            }

            #rec638379583 .tn-elem[data-elem-id="1609977389102"] .tn-atom:hover {
                color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .tn-elem[data-elem-id="1609977389102"] {
                top: 30px;
                left: calc(50% - 480px + 397px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1609977389102"] {
                top: 34px;
                left: calc(50% - 320px + 354px);
            }

            #rec638379583 .tn-elem[data-elem-id="1609977389102"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379583 .tn-elem[data-elem-id="1610122263462"] {
            z-index: 9;
            top: 87px;
            left: calc(50% - 600px + 840px);
            width: 100px;
            height: 4px;
        }

        #rec638379583 .tn-elem.t396__elem--anim-hidden[data-elem-id="1610122263462"] {
            opacity: 0;
        }

        #rec638379583 .tn-elem[data-elem-id="1610122263462"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .tn-elem[data-elem-id="1610122263462"] {
                top: 84px;
                left: calc(50% - 480px + 392px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1610122263462"] {
                top: -35px;
                left: calc(50% - 320px + 351px);
            }

            #rec638379583 .tn-elem[data-elem-id="1610122263462"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379583 .tn-elem[data-elem-id="1609977405548"] {
            color: #ffffff;
            text-align: center;
            z-index: 10;
            top: 34px;
            left: calc(50% - 600px + 700px);
            width: 67px;
            height: 28px;
        }

        #rec638379583 .tn-elem[data-elem-id="1609977405548"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638379583 .tn-elem[data-elem-id="1609977405548"] .tn-atom:hover {
            }

            #rec638379583 .tn-elem[data-elem-id="1609977405548"] .tn-atom:hover {
                color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .tn-elem[data-elem-id="1609977405548"] {
                top: 30px;
                left: calc(50% - 480px + 540px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1609977405548"] {
                top: -84px;
                left: calc(50% - 320px + 485px);
            }

            #rec638379583 .tn-elem[data-elem-id="1609977405548"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379583 .tn-elem[data-elem-id="1610122496008"] {
            z-index: 11;
            top: 87px;
            left: calc(50% - 600px + 704px);
            width: 100px;
            height: 4px;
        }

        #rec638379583 .tn-elem.t396__elem--anim-hidden[data-elem-id="1610122496008"] {
            opacity: 0;
        }

        #rec638379583 .tn-elem[data-elem-id="1610122496008"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .tn-elem[data-elem-id="1610122496008"] {
                top: 84px;
                left: calc(50% - 480px + 543px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1610122496008"] {
                top: -35px;
                left: calc(50% - 320px + 468px);
            }

            #rec638379583 .tn-elem[data-elem-id="1610122496008"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379583 .tn-elem[data-elem-id="1609977444725"] {
            color: #ffffff;
            text-align: center;
            z-index: 12;
            top: 34px;
            left: calc(50% - 600px + 973px);
            width: 84px;
            height: 28px;
        }

        #rec638379583 .tn-elem[data-elem-id="1609977444725"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638379583 .tn-elem[data-elem-id="1609977444725"] .tn-atom:hover {
            }

            #rec638379583 .tn-elem[data-elem-id="1609977444725"] .tn-atom:hover {
                color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .tn-elem[data-elem-id="1609977444725"] {
                top: 30px;
                left: calc(50% - 480px + 706px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1609977444725"] {
                top: -84px;
                left: calc(50% - 320px + 706px);
            }

            #rec638379583 .tn-elem[data-elem-id="1609977444725"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379583 .tn-elem[data-elem-id="1610122641981"] {
            z-index: 13;
            top: 87px;
            left: calc(50% - 600px + 968px);
            width: 100px;
            height: 4px;
        }

        #rec638379583 .tn-elem.t396__elem--anim-hidden[data-elem-id="1610122641981"] {
            opacity: 0;
        }

        #rec638379583 .tn-elem[data-elem-id="1610122641981"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .tn-elem[data-elem-id="1610122641981"] {
                top: 84px;
                left: calc(50% - 480px + 698px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1610122641981"] {
                top: -35px;
                left: calc(50% - 320px + 698px);
            }

            #rec638379583 .tn-elem[data-elem-id="1610122641981"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379583 .tn-elem[data-elem-id="1609977545388"] {
            color: #ffffff;
            text-align: center;
            z-index: 14;
            top: 34px;
            left: calc(50% + 600px - 93px + -23px);
            width: 93px;
            height: 28px;
        }

        #rec638379583 .tn-elem[data-elem-id="1609977545388"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638379583 .tn-elem[data-elem-id="1609977545388"] .tn-atom:hover {
            }

            #rec638379583 .tn-elem[data-elem-id="1609977545388"] .tn-atom:hover {
                color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .tn-elem[data-elem-id="1609977545388"] {
                top: 30px;
                left: calc(50% + 480px - 93px + -10px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1609977545388"] {
                top: -84px;
                left: calc(50% + 320px - 93px + 305px);
            }

            #rec638379583 .tn-elem[data-elem-id="1609977545388"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379583 .tn-elem[data-elem-id="1610122666566"] {
            z-index: 15;
            top: 87px;
            left: calc(50% - 600px + 1083px);
            width: 100px;
            height: 4px;
        }

        #rec638379583 .tn-elem.t396__elem--anim-hidden[data-elem-id="1610122666566"] {
            opacity: 0;
        }

        #rec638379583 .tn-elem[data-elem-id="1610122666566"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379583 .tn-elem[data-elem-id="1610122666566"] {
                top: 84px;
                left: calc(50% - 480px + 853px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1610122666566"] {
                top: -35px;
                left: calc(50% - 320px + 853px);
            }

            #rec638379583 .tn-elem[data-elem-id="1610122666566"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379583 .tn-elem[data-elem-id="1694375211775"] {
            z-index: 16;
            top: 9px;
            left: calc(50% - 600px + 3px);
            width: 74px;
            height: 65px;
        }

        #rec638379583 .tn-elem[data-elem-id="1694375211775"] .tn-atom {
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
        }

        @media screen and (max-width: 959px) {
            #rec638379583 .tn-elem[data-elem-id="1694375211775"] {
                top: 22px;
                left: calc(50% - 320px + 22px);
                width: 55px;
                height: 48px;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379583 .tn-elem[data-elem-id="1694468629043"] {
            color: #ffffff;
            z-index: 17;
            top: 24px;
            left: calc(50% - 600px + 88px);
            width: 202px;
        }

        #rec638379583 .tn-elem[data-elem-id="1694468629043"] .tn-atom {
            color: #ffffff;
            font-size: 14px;
            font-family: 'PT Serif', serif;
            line-height: 1.2;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
        }

        @media screen and (max-width: 959px) {
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }</style>

    <style>
        #rec638379585 .t396__artboard {
            height: 610px;
            background-color: #0b2543;
        }

        #rec638379585 .t396__filter {
            height: 610px;
        }

        #rec638379585 .t396__carrier {
            height: 610px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .t396__artboard {
                height: 610px;
            }

            #rec638379585 .t396__filter {
                height: 610px;
            }

            #rec638379585 .t396__carrier {
                height: 610px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .t396__artboard {
                height: 1240px;
            }

            #rec638379585 .t396__filter {
                height: 1240px;
            }

            #rec638379585 .t396__carrier {
                height: 1240px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .t396__artboard {
                height: 1530px;
            }

            #rec638379585 .t396__filter {
                height: 1530px;
            }

            #rec638379585 .t396__carrier {
                height: 1530px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .t396__artboard {
                height: 1510px;
            }

            #rec638379585 .t396__filter {
                height: 1510px;
            }

            #rec638379585 .t396__carrier {
                height: 1510px;
                background-attachment: scroll;
            }
        }

        #rec638379585 .tn-elem[data-elem-id="1610356049900"] {
            z-index: 2;
            top: 485px;
            left: calc(50% - 600px + 169px);
            width: 60px;
        }

        #rec638379585 .tn-elem[data-elem-id="1610356049900"] .tn-atom {
            opacity: 0.65;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .tn-elem[data-elem-id="1610356049900"] {
                top: 418px;
                left: calc(50% - 480px + 310px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .tn-elem[data-elem-id="1610356049900"] {
                top: 1063px;
                left: calc(50% - 320px + 90px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .tn-elem[data-elem-id="1610356049900"] {
                top: 730px;
                left: calc(50% - 240px + 400px);
                width: 60px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .tn-elem[data-elem-id="1610356049900"] {
                top: 638px;
                left: calc(50% - 160px + 270px);
                width: 50px;
            }
        }

        #rec638379585 .tn-elem[data-elem-id="1610356049907"] {
            z-index: 3;
            top: 444px;
            left: calc(50% - 600px + 349px);
            width: 60px;
        }

        #rec638379585 .tn-elem[data-elem-id="1610356049907"] .tn-atom {
            opacity: 0.65;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .tn-elem[data-elem-id="1610356049907"] {
                top: 367px;
                left: calc(50% - 480px + 202px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .tn-elem[data-elem-id="1610356049907"] {
                top: 1009px;
                left: calc(50% - 320px + 10px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .tn-elem[data-elem-id="1610356049907"] {
                top: 680px;
                left: calc(50% - 240px + 326px);
                width: 60px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .tn-elem[data-elem-id="1610356049907"] {
                top: 596px;
                left: calc(50% - 160px + 210px);
                width: 50px;
            }
        }

        #rec638379585 .tn-elem[data-elem-id="1610356049914"] {
            z-index: 4;
            top: 501px;
            left: calc(50% - 600px + 315px);
            width: 30px;
        }

        #rec638379585 .tn-elem[data-elem-id="1610356049914"] .tn-atom {
            opacity: 0.65;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .tn-elem[data-elem-id="1610356049914"] {
                top: 350px;
                left: calc(50% - 480px + 284px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .tn-elem[data-elem-id="1610356049914"] {
                top: 979px;
                left: calc(50% - 320px + 70px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .tn-elem[data-elem-id="1610356049914"] {
                top: 648px;
                left: calc(50% - 240px + 368px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .tn-elem[data-elem-id="1610356049914"] {
                top: 564px;
                left: calc(50% - 160px + 252px);
            }
        }

        #rec638379585 .tn-elem[data-elem-id="1610355475885"] {
            z-index: 5;
            top: 170px;
            left: calc(50% - 600px + 820px);
            width: 360px;
            height: 195px;
        }

        #rec638379585 .tn-elem[data-elem-id="1610355475885"] .tn-atom {
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .tn-elem[data-elem-id="1610355475885"] {
                top: 155px;
                left: calc(50% - 480px + 650px);
                width: 300px;
                height: 243px;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355475885"] .tn-atom {
                background-position: center bottom;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .tn-elem[data-elem-id="1610355475885"] {
                top: 868px;
                left: calc(50% - 320px + 330px);
                width: 300px;
                height: 170px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .tn-elem[data-elem-id="1610355475885"] {
                top: 1211px;
                left: calc(50% - 240px + 0px);
                width: 96%;
                height: 170px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .tn-elem[data-elem-id="1610355475885"] {
                top: 1110px;
                left: calc(50% - 160px + 1px);
            }
        }

        #rec638379585 .tn-elem[data-elem-id="1610355539776"] {
            color: #3e3e3e;
            text-align: center;
            z-index: 6;
            top: 215px;
            left: calc(50% - 600px + -57px);
            width: 120px;
            height: 120px;
        }

        #rec638379585 .tn-elem[data-elem-id="1610355539776"] .tn-atom {
            color: #3e3e3e;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-width: 2px;
            border-radius: 500px;
            background-position: center center;
            border-color: #fc9f17;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .tn-elem[data-elem-id="1610355539776"] {
                top: 200px;
                left: calc(50% - 480px + -60px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .tn-elem[data-elem-id="1610355539776"] {
                top: 265px;
                left: calc(50% - 320px + 10px);
                width: 100px;
                height: 100px;
                border-radius: 200px;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355539776"] .tn-atom {
                font-size: 55px;
                border-radius: 200px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .tn-elem[data-elem-id="1610355539776"] {
                top: 178px;
                left: calc(50% - 240px + 10px);
                width: 80px;
                height: 80px;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355539776"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .tn-elem[data-elem-id="1610355539776"] {
                top: 110px;
                width: 70px;
                height: 70px;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355539776"] .tn-atom {
                font-size: 30px;
            }
        }

        #rec638379585 .tn-elem[data-elem-id="1610355623559"] {
            color: #3e3e3e;
            text-align: center;
            z-index: 7;
            top: 430px;
            left: calc(50% - 600px + 540px);
            width: 120px;
            height: 120px;
        }

        #rec638379585 .tn-elem[data-elem-id="1610355623559"] .tn-atom {
            color: #3e3e3e;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-width: 2px;
            border-radius: 500px;
            background-position: center center;
            border-color: #fc9f17;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .tn-elem[data-elem-id="1610355623559"] {
                top: 490px;
                left: calc(50% - 480px + 420px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .tn-elem[data-elem-id="1610355623559"] {
                top: 265px;
                left: calc(50% - 320px + 330px);
                width: 100px;
                height: 100px;
                border-radius: 200px;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355623559"] .tn-atom {
                font-size: 55px;
                border-radius: 200px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .tn-elem[data-elem-id="1610355623559"] {
                top: 729px;
                left: calc(50% - 240px + 10px);
                width: 80px;
                height: 80px;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355623559"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .tn-elem[data-elem-id="1610355623559"] {
                top: 623px;
                left: calc(50% - 160px + 10px);
                width: 70px;
                height: 70px;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355623559"] .tn-atom {
                font-size: 30px;
            }
        }

        #rec638379585 .tn-elem[data-elem-id="1610355644222"] {
            color: #3e3e3e;
            text-align: center;
            z-index: 8;
            top: 105px;
            left: calc(50% - 600px + 1120px);
            width: 120px;
            height: 120px;
        }

        #rec638379585 .tn-elem[data-elem-id="1610355644222"] .tn-atom {
            color: #3e3e3e;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-width: 2px;
            border-radius: 500px;
            background-position: center center;
            border-color: #fc9f17;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .tn-elem[data-elem-id="1610355644222"] {
                top: 92px;
                left: calc(50% - 480px + 898px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .tn-elem[data-elem-id="1610355644222"] {
                top: 728px;
                left: calc(50% - 320px + 330px);
                width: 100px;
                height: 100px;
                border-radius: 200px;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355644222"] .tn-atom {
                font-size: 55px;
                border-radius: 200px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .tn-elem[data-elem-id="1610355644222"] {
                top: 1091px;
                left: calc(50% - 240px + 10px);
                width: 80px;
                height: 80px;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355644222"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .tn-elem[data-elem-id="1610355644222"] {
                top: 1000px;
                left: calc(50% - 160px + 10px);
                width: 70px;
                height: 70px;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355644222"] .tn-atom {
                font-size: 30px;
            }
        }

        #rec638379585 .tn-elem[data-elem-id="1610355020675"] {
            color: #fc9f17;
            z-index: 9;
            top: -9px;
            left: calc(50% - 600px + 20px);
            width: 1180px;
        }

        #rec638379585 .tn-elem[data-elem-id="1610355020675"] .tn-atom {
            color: #fc9f17;
            font-size: 100px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .tn-elem[data-elem-id="1610355020675"] {
                top: -6px;
                left: calc(50% - 480px + 10px);
                width: 243px;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355020675"] .tn-atom {
                font-size: 90px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .tn-elem[data-elem-id="1610355020675"] {
                top: 0px;
                left: calc(50% - 320px + 10px);
                width: 270px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .tn-elem[data-elem-id="1610355020675"] {
                top: 0px;
                left: calc(50% - 240px + 10px);
                width: 460px;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355020675"] {
                text-align: left;
            }

            #rec638379585 .tn-elem[data-elem-id="1610355020675"] .tn-atom {
                font-size: 45px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .tn-elem[data-elem-id="1610355020675"] {
                top: 0px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379585 .tn-elem[data-elem-id="1610355057367"] {
            z-index: 10;
            top: 35px;
            left: calc(50% - 600px + 533px);
            width: 200px;
            height: 30px;
        }

        #rec638379585 .tn-elem[data-elem-id="1610355057367"] .tn-atom {
            opacity: 0.55;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .tn-elem[data-elem-id="1610355057367"] {
                top: 15px;
                left: calc(50% - 480px + 283px);
                width: 138px;
                height: 30px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .tn-elem[data-elem-id="1610355057367"] {
                top: 30px;
                left: calc(50% - 320px + 283px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .tn-elem[data-elem-id="1610355057367"] {
                top: 7px;
                left: calc(50% - 240px + 143px);
                width: 99px;
                height: 30px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .tn-elem[data-elem-id="1610355057367"] {
                top: 60px;
                left: calc(50% - 160px + 170px);
            }
        }

        #rec638379585 .tn-elem[data-elem-id="1610355188360"] {
            color: #e8e8e8;
            z-index: 11;
            top: 171px;
            left: calc(50% - 600px + 20px);
            width: 328px;
        }

        #rec638379585 .tn-elem[data-elem-id="1610355188360"] .tn-atom {
            color: #e8e8e8;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .tn-elem[data-elem-id="1610355188360"] {
                top: 155px;
                left: calc(50% - 480px + 10px);
                width: 300px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .tn-elem[data-elem-id="1610355188360"] {
                top: 405px;
                left: calc(50% - 320px + 10px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .tn-elem[data-elem-id="1610355188360"] {
                top: 298px;
                left: calc(50% - 240px + 10px);
                width: 402px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .tn-elem[data-elem-id="1610355188360"] {
                top: 210px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379585 .tn-elem[data-elem-id="1610355289942"] {
            color: #e8e8e8;
            z-index: 12;
            top: 170px;
            left: calc(50% - 600px + 420px);
            width: 360px;
        }

        #rec638379585 .tn-elem[data-elem-id="1610355289942"] .tn-atom {
            color: #e8e8e8;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .tn-elem[data-elem-id="1610355289942"] {
                top: 155px;
                left: calc(50% - 480px + 330px);
                width: 300px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .tn-elem[data-elem-id="1610355289942"] {
                top: 405px;
                left: calc(50% - 320px + 330px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .tn-elem[data-elem-id="1610355289942"] {
                top: 849px;
                left: calc(50% - 240px + 10px);
                width: 410px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .tn-elem[data-elem-id="1610355289942"] {
                top: 726px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379585 .tn-elem[data-elem-id="1610355305910"] {
            color: #e8e8e8;
            z-index: 13;
            top: 397px;
            left: calc(50% - 600px + 820px);
            width: 360px;
        }

        #rec638379585 .tn-elem[data-elem-id="1610355305910"] .tn-atom {
            color: #e8e8e8;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379585 .tn-elem[data-elem-id="1610355305910"] {
                top: 448px;
                left: calc(50% - 480px + 650px);
                width: 300px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379585 .tn-elem[data-elem-id="1610355305910"] {
                top: 1078px;
                left: calc(50% - 320px + 330px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379585 .tn-elem[data-elem-id="1610355305910"] {
                top: 1421px;
                left: calc(50% - 240px + 10px);
                width: 410px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379585 .tn-elem[data-elem-id="1610355305910"] {
                top: 1320px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }</style>

    <script>t_onReady(function () {
            var allRecords = document.querySelector('.t-records');
            window.addEventListener('pageshow', function (event) {
                if (event.persisted) {
                    allRecords.classList.add('t-records_visible');
                }
            });
            var rec = document.querySelector('#rec638379581');
            if (!rec) return;
            rec.setAttribute('data-animationappear', 'off');
            rec.style.opacity = '1';
            allRecords.classList.add('t-records_animated');
            setTimeout(function () {
                allRecords.classList.add('t-records_visible');
            }, 200);
        });</script>
    <script>t_onReady(function () {
            var selects = 'button:not(.t-submit):not(.t835__btn_next):not(.t835__btn_prev):not(.t835__btn_result):not(.t862__btn_next):not(.t862__btn_prev):not(.t862__btn_result):not(.t854__news-btn):not(.t862__btn_next),' +
                'a:not([href*="#"]):not(.carousel-control):not(.t-carousel__control):not(.t807__btn_reply):not([href^="#price"]):not([href^="javascript"]):not([href^="mailto"]):not([href^="tel"]):not([href^="link_sub"]):not(.js-feed-btn-show-more):not(.t367__opener):not([href^="https://www.dropbox.com/"])';
            var elements = document.querySelectorAll(selects);
            Array.prototype.forEach.call(elements, function (element) {
                if (element.getAttribute('data-menu-submenu-hook')) return;
                element.addEventListener('click', function (event) {
                    var goTo = this.getAttribute('href');
                    if (goTo !== null) {
                        var ctrl = event.ctrlKey;
                        var cmd = event.metaKey && navigator.platform.indexOf('Mac') !== -1;
                        if (!ctrl && !cmd) {
                            var target = this.getAttribute('target');
                            if (target !== '_blank') {
                                event.preventDefault();
                                var allRecords = document.querySelector('.t-records');
                                if (allRecords) {
                                    allRecords.classList.remove('t-records_visible');
                                }
                                setTimeout(function () {
                                    window.location = goTo;
                                }, 500);
                            }
                        }
                    }
                });
            });
        });</script>
    <style>.t360__bar {
            background-color: #030bff;
        }</style>

    <style>
        #rec638379582 .t396__artboard {
            position: fixed;
            width: 100%;
            left: 0;
            top: 0;
            transform: translateY(-100%);
            transition: transform 0.15s;
            z-index: 990;
        }

        #rec638379582 .t396__artboard {
            height: 90px;
            background-color: #0b2543;
        }

        #rec638379582 .t396__filter {
            height: 90px;
        }

        #rec638379582 .t396__carrier {
            height: 90px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec638379582 .t396__artboard {
            }

            #rec638379582 .t396__filter {
            }

            #rec638379582 .t396__carrier {
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379582 .t396__artboard {
            }

            #rec638379582 .t396__filter {
            }

            #rec638379582 .t396__carrier {
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379582 .t396__artboard {
                height: 70px;
            }

            #rec638379582 .t396__filter {
                height: 70px;
            }

            #rec638379582 .t396__carrier {
                height: 70px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379582 .t396__artboard {
                height: 83px;
            }

            #rec638379582 .t396__filter {
                height: 83px;
            }

            #rec638379582 .t396__carrier {
                height: 83px;
                background-attachment: scroll;
            }
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440239"] {
            z-index: 2;
            top: 88px;
            left: calc(50% - 600px + -1px);
            width: 100%;
            height: 2px;
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440239"] .tn-atom {
            background-color: #e8e8e8;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440239"] {
                top: 86px;
                left: calc(50% - 480px + 0px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440239"] {
                top: 86px;
                left: calc(50% - 320px + 0px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440239"] {
                top: 66px;
                left: calc(50% - 240px + 0px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440239"] {
                top: 82px;
            }
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440248"] {
            color: #ffffff;
            text-align: center;
            z-index: 3;
            top: 34px;
            left: calc(50% - 600px + 844px);
            width: 73px;
            height: 28px;
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440248"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638379582 .tn-elem[data-elem-id="1694463440248"] .tn-atom:hover {
            }

            #rec638379582 .tn-elem[data-elem-id="1694463440248"] .tn-atom:hover {
                color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440248"] {
                top: 30px;
                left: calc(50% - 480px + 362px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440248"] {
                top: -84px;
                left: calc(50% - 320px + 362px);
            }

            #rec638379582 .tn-elem[data-elem-id="1694463440248"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440257"] {
            z-index: 4;
            top: 86px;
            left: calc(50% - 600px + 839px);
            width: 100px;
            height: 4px;
        }

        #rec638379582 .tn-elem.t396__elem--anim-hidden[data-elem-id="1694463440257"] {
            opacity: 0;
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440257"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440257"] {
                top: 84px;
                left: calc(50% - 480px + 351px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440257"] {
                top: -35px;
                left: calc(50% - 320px + 351px);
            }

            #rec638379582 .tn-elem[data-elem-id="1694463440257"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440263"] {
            color: #ffffff;
            text-align: center;
            z-index: 5;
            top: 34px;
            left: calc(50% - 600px + 972px);
            width: 84px;
            height: 28px;
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440263"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638379582 .tn-elem[data-elem-id="1694463440263"] .tn-atom:hover {
            }

            #rec638379582 .tn-elem[data-elem-id="1694463440263"] .tn-atom:hover {
                color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440263"] {
                top: 30px;
                left: calc(50% - 480px + 706px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440263"] {
                top: -84px;
                left: calc(50% - 320px + 706px);
            }

            #rec638379582 .tn-elem[data-elem-id="1694463440263"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440271"] {
            color: #ffffff;
            text-align: center;
            z-index: 6;
            top: 34px;
            left: calc(50% + 600px - 93px + -24px);
            width: 93px;
            height: 28px;
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440271"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638379582 .tn-elem[data-elem-id="1694463440271"] .tn-atom:hover {
            }

            #rec638379582 .tn-elem[data-elem-id="1694463440271"] .tn-atom:hover {
                color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440271"] {
                top: 30px;
                left: calc(50% + 480px - 93px + -10px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440271"] {
                top: -84px;
                left: calc(50% + 320px - 93px + 305px);
            }

            #rec638379582 .tn-elem[data-elem-id="1694463440271"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440274"] {
            z-index: 7;
            top: 87px;
            left: calc(50% - 600px + 967px);
            width: 100px;
            height: 4px;
        }

        #rec638379582 .tn-elem.t396__elem--anim-hidden[data-elem-id="1694463440274"] {
            opacity: 0;
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440274"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440274"] {
                top: 84px;
                left: calc(50% - 480px + 698px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440274"] {
                top: -35px;
                left: calc(50% - 320px + 698px);
            }

            #rec638379582 .tn-elem[data-elem-id="1694463440274"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440279"] {
            z-index: 8;
            top: 87px;
            left: calc(50% - 600px + 1082px);
            width: 100px;
            height: 4px;
        }

        #rec638379582 .tn-elem.t396__elem--anim-hidden[data-elem-id="1694463440279"] {
            opacity: 0;
        }

        #rec638379582 .tn-elem[data-elem-id="1694463440279"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440279"] {
                top: 84px;
                left: calc(50% - 480px + 853px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379582 .tn-elem[data-elem-id="1694463440279"] {
                top: -35px;
                left: calc(50% - 320px + 853px);
            }

            #rec638379582 .tn-elem[data-elem-id="1694463440279"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379582 .tn-elem[data-elem-id="1694468791221"] {
            z-index: 9;
            top: 9px;
            left: calc(50% - 600px + 3px);
            width: 74px;
            height: 65px;
        }

        #rec638379582 .tn-elem[data-elem-id="1694468791221"] .tn-atom {
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
        }

        @media screen and (max-width: 959px) {
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379582 .tn-elem[data-elem-id="1694468791228"] {
            color: #ffffff;
            z-index: 10;
            top: 24px;
            left: calc(50% - 600px + 88px);
            width: 202px;
        }

        #rec638379582 .tn-elem[data-elem-id="1694468791228"] .tn-atom {
            color: #ffffff;
            font-size: 14px;
            font-family: 'PT Serif', serif;
            line-height: 1.2;
            font-weight: 700;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
        }

        @media screen and (max-width: 959px) {
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379582 .tn-elem[data-elem-id="1694515464891"] {
            color: #ffffff;
            text-align: center;
            z-index: 11;
            top: 34px;
            left: calc(50% - 600px + 700px);
            width: 67px;
            height: 28px;
        }

        #rec638379582 .tn-elem[data-elem-id="1694515464891"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638379582 .tn-elem[data-elem-id="1694515464891"] .tn-atom:hover {
            }

            #rec638379582 .tn-elem[data-elem-id="1694515464891"] .tn-atom:hover {
                color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379582 .tn-elem[data-elem-id="1694515464891"] {
                top: 30px;
                left: calc(50% - 480px + 485px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379582 .tn-elem[data-elem-id="1694515464891"] {
                top: -84px;
                left: calc(50% - 320px + 485px);
            }

            #rec638379582 .tn-elem[data-elem-id="1694515464891"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379582 .tn-elem[data-elem-id="1694515464898"] {
            z-index: 12;
            top: 87px;
            left: calc(50% - 600px + 704px);
            width: 100px;
            height: 4px;
        }

        #rec638379582 .tn-elem.t396__elem--anim-hidden[data-elem-id="1694515464898"] {
            opacity: 0;
        }

        #rec638379582 .tn-elem[data-elem-id="1694515464898"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379582 .tn-elem[data-elem-id="1694515464898"] {
                top: 84px;
                left: calc(50% - 480px + 468px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379582 .tn-elem[data-elem-id="1694515464898"] {
                top: -35px;
                left: calc(50% - 320px + 468px);
            }

            #rec638379582 .tn-elem[data-elem-id="1694515464898"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }</style>

    <style>
        #rec638379584 .t396__artboard {
            height: 745px;
            background-color: #0b2543;
        }

        #rec638379584 .t396__filter {
            height: 745px;
        }

        #rec638379584 .t396__carrier {
            height: 745px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec638379584 .t396__artboard {
            }

            #rec638379584 .t396__filter {
            }

            #rec638379584 .t396__carrier {
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379584 .t396__artboard {
                height: 950px;
            }

            #rec638379584 .t396__filter {
                height: 950px;
            }

            #rec638379584 .t396__carrier {
                height: 950px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379584 .t396__artboard {
                height: 840px;
            }

            #rec638379584 .t396__filter {
                height: 840px;
            }

            #rec638379584 .t396__carrier {
                height: 840px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379584 .t396__artboard {
                height: 700px;
            }

            #rec638379584 .t396__filter {
                height: 700px;
            }

            #rec638379584 .t396__carrier {
                height: 700px;
                background-attachment: scroll;
            }
        }

        #rec638379584 .tn-elem[data-elem-id="1610352359638"] {
            z-index: 2;
            top: 115px;
            left: calc(50% - 600px + 20px);
            width: 600px;
            height: 540px;
            -webkit-filter: brightness(90%);
            filter: brightness(90%);
        }

        #rec638379584 .tn-elem[data-elem-id="1610352359638"] .tn-atom {
            opacity: 0.65;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379584 .tn-elem[data-elem-id="1610352359638"] {
                top: 122px;
                left: calc(50% - 480px + 10px);
                width: 460px;
                height: 530px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379584 .tn-elem[data-elem-id="1610352359638"] {
                top: 0px;
                left: calc(50% - 320px + 80px);
                width: 550px;
                height: 530px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379584 .tn-elem[data-elem-id="1610352359638"] {
                top: 0px;
                left: calc(50% - 240px + 0px);
                width: 96%;
                height: 400px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379584 .tn-elem[data-elem-id="1610352359638"] {
                top: 0px;
                left: calc(50% - 160px + 0px);
                width: 96%;
                height: 267px;
            }
        }

        #rec638379584 .tn-elem[data-elem-id="1610351361912"] {
            color: #e8e8e8;
            z-index: 3;
            top: 190px;
            left: calc(50% - 600px + 419px);
            width: 779px;
        }

        #rec638379584 .tn-elem[data-elem-id="1610351361912"] .tn-atom {
            color: #e8e8e8;
            font-size: 40px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.5;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379584 .tn-elem[data-elem-id="1610351361912"] {
                top: -15px;
                left: calc(50% - 480px + 250px);
                width: 640px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379584 .tn-elem[data-elem-id="1610351361912"] {
                top: 467px;
                left: calc(50% - 320px + 10px);
                width: 553px;
            }

            #rec638379584 .tn-elem[data-elem-id="1610351361912"] .tn-atom {
                font-size: 34px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379584 .tn-elem[data-elem-id="1610351361912"] {
                top: 440px;
                left: calc(50% - 240px + 10px);
                width: 460px;
            }

            #rec638379584 .tn-elem[data-elem-id="1610351361912"] .tn-atom {
                font-size: 26px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379584 .tn-elem[data-elem-id="1610351361912"] {
                top: 307px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }

            #rec638379584 .tn-elem[data-elem-id="1610351361912"] .tn-atom {
                font-size: 24px;
            }
        }

        #rec638379584 .tn-elem[data-elem-id="1610352545095"] {
            z-index: 4;
            top: 0px;
            left: calc(50% - 600px + 120px);
            width: 140px;
        }

        #rec638379584 .tn-elem[data-elem-id="1610352545095"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379584 .tn-elem[data-elem-id="1610352545095"] {
                top: 0px;
                left: calc(50% - 480px + 30px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379584 .tn-elem[data-elem-id="1610352545095"] {
                top: 0px;
                left: calc(50% - 320px + 10px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379584 .tn-elem[data-elem-id="1610352545095"] {
                top: 14px;
                left: calc(50% - 240px + -85px);
                width: 60px;
            }

            #rec638379584 .tn-elem[data-elem-id="1610352545095"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379584 .tn-elem[data-elem-id="1610352718075"] {
            z-index: 5;
            top: 555px;
            left: calc(50% - 600px + 661px);
            width: 60px;
        }

        #rec638379584 .tn-elem[data-elem-id="1610352718075"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379584 .tn-elem[data-elem-id="1610352718075"] {
                top: 545px;
                left: calc(50% - 480px + 441px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379584 .tn-elem[data-elem-id="1610352718075"] {
                top: 371px;
                left: calc(50% - 320px + 490px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379584 .tn-elem[data-elem-id="1610352718075"] {
                top: 370px;
                left: calc(50% - 240px + 410px);
                width: 60px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379584 .tn-elem[data-elem-id="1610352718075"] {
                top: 242px;
                left: calc(50% - 160px + 270px);
                width: 50px;
            }
        }

        #rec638379584 .tn-elem[data-elem-id="1610352804072"] {
            z-index: 6;
            top: 511px;
            left: calc(50% - 600px + 506px);
            width: 60px;
        }

        #rec638379584 .tn-elem[data-elem-id="1610352804072"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379584 .tn-elem[data-elem-id="1610352804072"] {
                top: 511px;
                left: calc(50% - 480px + 346px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379584 .tn-elem[data-elem-id="1610352804072"] {
                top: 317px;
                left: calc(50% - 320px + 410px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379584 .tn-elem[data-elem-id="1610352804072"] {
                top: 308px;
                left: calc(50% - 240px + 350px);
                width: 60px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379584 .tn-elem[data-elem-id="1610352804072"] {
                top: 200px;
                left: calc(50% - 160px + 210px);
                width: 50px;
            }
        }

        #rec638379584 .tn-elem[data-elem-id="1610352845750"] {
            z-index: 7;
            top: 484px;
            left: calc(50% - 600px + 566px);
            width: 30px;
        }

        #rec638379584 .tn-elem[data-elem-id="1610352845750"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379584 .tn-elem[data-elem-id="1610352845750"] {
                top: 481px;
                left: calc(50% - 480px + 406px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379584 .tn-elem[data-elem-id="1610352845750"] {
                top: 287px;
                left: calc(50% - 320px + 470px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379584 .tn-elem[data-elem-id="1610352845750"] {
                top: 276px;
                left: calc(50% - 240px + 392px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379584 .tn-elem[data-elem-id="1610352845750"] {
                top: 168px;
                left: calc(50% - 160px + 252px);
            }
        }

        #rec638379584 .tn-elem[data-elem-id="1610353515643"] {
            color: #ffffff;
            text-align: center;
            z-index: 8;
            top: 420px;
            left: calc(50% - 600px + 836px);
            width: 220px;
            height: 80px;
        }

        #rec638379584 .tn-elem[data-elem-id="1610353515643"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 2px;
            border-radius: 100px;
            background-position: center center;
            border-color: #3e3e3e;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638379584 .tn-elem[data-elem-id="1610353515643"] .tn-atom:hover {
                background-color: #fc9f17;
                background-image: none;
                border-color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379584 .tn-elem[data-elem-id="1610353515643"] {
                top: 457px;
                left: calc(50% - 480px + 570px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379584 .tn-elem[data-elem-id="1610353515643"] {
                top: 869px;
                left: calc(50% - 320px + 10px);
                width: 210px;
                height: 80px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379584 .tn-elem[data-elem-id="1610353515643"] {
                top: 760px;
                left: calc(50% - 240px + 10px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379584 .tn-elem[data-elem-id="1610353515643"] {
                top: 538px;
                left: calc(50% - 160px + 8px);
                width: 299px;
            }
        }</style>

    <style>
        #rec638379586 .t396__artboard {
            min-height: 650px;
            height: 100vh;
            background-color: #ffffff;
        }

        #rec638379586 .t396__filter {
            min-height: 650px;
            height: 100vh;
        }

        #rec638379586 .t396__carrier {
            min-height: 650px;
            height: 100vh;
            background-position: center center;
            background-attachment: fixed;
            transform: translate3d(0, 0, 0);
            -moz-transform: unset;
            background-image: url('images/tild6532-3461-4731-a336-383336653364__-__resize__20x__cover2_1.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (min-width: 1199px) {
            #rec638379586 .t396__carrier-wrapper {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                -webkit-clip-path: inset(0 0 0 0);
                clip-path: inset(0 0 0 0);
            }

            #rec638379586 .t396__carrier {
                position: fixed;
                display: block;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background-size: cover;
                background-position: center center;
                transform: translateZ(0);
                will-change: transform;
                pointer-events: none;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379586 .t396__artboard {
            }

            #rec638379586 .t396__filter {
            }

            #rec638379586 .t396__carrier {
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379586 .t396__artboard {
            }

            #rec638379586 .t396__filter {
            }

            #rec638379586 .t396__carrier {
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379586 .t396__artboard {
                min-height: 550px;
            }

            #rec638379586 .t396__filter {
                min-height: 550px;
            }

            #rec638379586 .t396__carrier {
                min-height: 550px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379586 .t396__artboard {
                min-height: 650px;
                height: 10vh;
            }

            #rec638379586 .t396__filter {
                min-height: 650px;
                height: 10vh;
            }

            #rec638379586 .t396__carrier {
                min-height: 650px;
                height: 10vh;
                background-attachment: scroll;
            }
        }

        #rec638379586 .tn-elem[data-elem-id="1694466732945"] {
            z-index: 2;
            top: calc(50vh - 2px + 180px);
            left: calc(50% - 219.5px + -283px);
            width: 439px;
            height: 4px;
        }

        #rec638379586 .tn-elem[data-elem-id="1694466732945"] .tn-atom {
            border-width: 0px;
            border-radius: 300px;
            background-color: #0a1521;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 20px 20px rgba(10, 21, 33, 1);
        }

        @media screen and (max-width: 1199px) {
        }

        @media screen and (max-width: 959px) {
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
            #rec638379586 .tn-elem[data-elem-id="1694466732945"] {
                top: calc(5vh - 2px + 203px);
                left: calc(50% - 219.5px + -30px);
                width: 201px;
                height: 10px;
            }
        }

        #rec638379586 .tn-elem[data-elem-id="1694466805617"] {
            z-index: 3;
            top: calc(50vh - 2px + 254px);
            left: calc(50% - 295.5px + -198px);
            width: 591px;
            height: 4px;
        }

        #rec638379586 .tn-elem[data-elem-id="1694466805617"] .tn-atom {
            border-width: 0px;
            border-radius: 300px;
            background-color: #0a1521;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 20px 20px rgba(10, 21, 33, 1);
        }

        @media screen and (max-width: 1199px) {
        }

        @media screen and (max-width: 959px) {
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
            #rec638379586 .tn-elem[data-elem-id="1694466805617"] {
                top: calc(5vh - 2px + 258px);
                left: calc(50% - 295.5px + -77px);
                width: 104px;
                height: 30px;
            }
        }

        #rec638379586 .tn-elem[data-elem-id="1610360171115"] {
            z-index: 4;
            top: calc(50vh - 50px + 255px);
            left: calc(50% - 600px + 1070px);
            width: 100px;
            height: 100px;
        }

        #rec638379586 .tn-elem[data-elem-id="1610360171115"] .tn-atom {
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379586 .tn-elem[data-elem-id="1610360171115"] {
                top: calc(5vh - 50px + 45px);
                left: calc(50% - 480px + 10px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379586 .tn-elem[data-elem-id="1610360171115"] {
                top: calc(5vh - 50px + 32px);
                left: calc(50% - 320px + 10px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379586 .tn-elem[data-elem-id="1610360171115"] {
                top: calc(5vh - 50px + 26px);
                left: calc(50% - 240px + 10px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379586 .tn-elem[data-elem-id="1610360171115"] {
                top: calc(5vh - 50px + 10px);
                left: calc(50% - 160px + 10px);
                width: 82px;
                height: 82px;
            }
        }

        #rec638379586 .tn-elem[data-elem-id="1694466852600"] {
            z-index: 5;
            top: calc(50vh - 1px + 177px);
            left: calc(50% - 139.5px + 429px);
            width: 279px;
            height: 2px;
        }

        #rec638379586 .tn-elem[data-elem-id="1694466852600"] .tn-atom {
            border-width: 0px;
            border-radius: 300px;
            background-color: #0a1521;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 10px 10px rgba(10, 21, 33, 1);
        }

        @media screen and (max-width: 1199px) {
        }

        @media screen and (max-width: 959px) {
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379586 .tn-elem[data-elem-id="1610360722403"] {
            color: #fc9f17;
            z-index: 6;
            top: calc(50vh - 0px + 173px);
            left: calc(50% - 600px + 880px);
            width: 299px;
        }

        #rec638379586 .tn-elem[data-elem-id="1610360722403"] .tn-atom {
            color: #fc9f17;
            font-size: 40px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379586 .tn-elem[data-elem-id="1610360722403"] {
                top: calc(5vh - 0px + 28px);
                left: calc(50% - 480px + 650px);
                width: 260px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379586 .tn-elem[data-elem-id="1610360722403"] {
                top: calc(5vh - 0px + 20px);
                left: calc(50% - 320px + 170px);
                width: 220px;
            }

            #rec638379586 .tn-elem[data-elem-id="1610360722403"] .tn-atom {
                font-size: 34px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379586 .tn-elem[data-elem-id="1610360722403"] {
                top: calc(5vh - 0px + 11px);
                left: calc(50% - 240px + 150px);
                width: 170px;
            }

            #rec638379586 .tn-elem[data-elem-id="1610360722403"] .tn-atom {
                font-size: 26px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379586 .tn-elem[data-elem-id="1610360722403"] {
                top: calc(5vh - 0px + -9px);
                left: calc(50% - 160px + 130px);
                width: 180px;
            }

            #rec638379586 .tn-elem[data-elem-id="1610360722403"] .tn-atom {
                font-size: 24px;
            }
        }

        #rec638379586 .tn-elem[data-elem-id="1610361087879"] {
            color: #e8e8e8;
            z-index: 7;
            top: calc(50vh - 0px + 246px);
            left: calc(50% - 600px + 880px);
            width: 60px;
        }

        #rec638379586 .tn-elem[data-elem-id="1610361087879"] .tn-atom {
            color: #e8e8e8;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379586 .tn-elem[data-elem-id="1610361087879"] {
                top: calc(5vh - 0px + 77px);
                left: calc(50% - 480px + 650px);
                width: 90px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379586 .tn-elem[data-elem-id="1610361087879"] {
                top: calc(5vh - 0px + 66px);
                left: calc(50% - 320px + 171px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379586 .tn-elem[data-elem-id="1610361087879"] {
                top: calc(5vh - 0px + 53px);
                left: calc(50% - 240px + 150px);
                width: 80px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379586 .tn-elem[data-elem-id="1610361087879"] {
                top: calc(5vh - 0px + 49px);
                left: calc(50% - 160px + 130px);
                width: 180px;
            }

            #rec638379586 .tn-elem[data-elem-id="1610361087879"] .tn-atom {
                line-height: 1.3;
            }
        }

        #rec638379586 .tn-elem[data-elem-id="1610360119346"] {
            color: #ffffff;
            z-index: 8;
            top: calc(50vh - 0px + 211px);
            left: calc(50% - 600px + 80px);
            width: 670px;
        }

        #rec638379586 .tn-elem[data-elem-id="1610360119346"] .tn-atom {
            color: #ffffff;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.1;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379586 .tn-elem[data-elem-id="1610360119346"] {
                top: calc(5vh - 0px + 211px);
                left: calc(50% - 480px + 10px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379586 .tn-elem[data-elem-id="1610360119346"] {
                top: calc(5vh - 0px + 207px);
                left: calc(50% - 320px + 10px);
                width: 530px;
            }

            #rec638379586 .tn-elem[data-elem-id="1610360119346"] .tn-atom {
                font-size: 50px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379586 .tn-elem[data-elem-id="1610360119346"] {
                top: calc(5vh - 0px + 158px);
                left: calc(50% - 240px + 10px);
                width: 460px;
            }

            #rec638379586 .tn-elem[data-elem-id="1610360119346"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379586 .tn-elem[data-elem-id="1610360119346"] {
                top: calc(5vh - 0px + 238px);
                left: calc(50% - 160px + 10px);
                width: 300px;
            }

            #rec638379586 .tn-elem[data-elem-id="1610360119346"] .tn-atom {
                font-size: 34px;
            }
        }</style>

    <style>
        #rec638703622 .t396__artboard {
            height: 745px;
            background-color: #0b2543;
        }

        #rec638703622 .t396__filter {
            height: 745px;
        }

        #rec638703622 .t396__carrier {
            height: 745px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .t396__artboard {
            }

            #rec638703622 .t396__filter {
            }

            #rec638703622 .t396__carrier {
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .t396__artboard {
                height: 950px;
            }

            #rec638703622 .t396__filter {
                height: 950px;
            }

            #rec638703622 .t396__carrier {
                height: 950px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .t396__artboard {
                height: 840px;
            }

            #rec638703622 .t396__filter {
                height: 840px;
            }

            #rec638703622 .t396__carrier {
                height: 840px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .t396__artboard {
                height: 690px;
            }

            #rec638703622 .t396__filter {
                height: 690px;
            }

            #rec638703622 .t396__carrier {
                height: 690px;
                background-attachment: scroll;
            }
        }

        #rec638703622 .tn-elem[data-elem-id="1610352359638"] {
            z-index: 2;
            top: 115px;
            left: calc(50% - 600px + 20px);
            width: 600px;
            height: 540px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610352359638"] .tn-atom {
            opacity: 0.45;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610352359638"] {
                top: 122px;
                left: calc(50% - 480px + 10px);
                width: 460px;
                height: 530px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610352359638"] {
                top: 0px;
                left: calc(50% - 320px + 80px);
                width: 550px;
                height: 530px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610352359638"] {
                top: 0px;
                left: calc(50% - 240px + 0px);
                width: 96%;
                height: 400px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .tn-elem[data-elem-id="1610352359638"] {
                top: 0px;
                left: calc(50% - 160px + 0px);
                width: 96%;
                height: 267px;
            }
        }

        #rec638703622 .tn-elem[data-elem-id="1610351361912"] {
            color: #e8e8e8;
            z-index: 3;
            top: 193px;
            left: calc(50% - 600px + 420px);
            width: 711px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610351361912"] .tn-atom {
            color: #e8e8e8;
            font-size: 40px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.5;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610351361912"] {
                top: -15px;
                left: calc(50% - 480px + 250px);
                width: 640px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610351361912"] {
                top: 467px;
                left: calc(50% - 320px + 10px);
                width: 553px;
            }

            #rec638703622 .tn-elem[data-elem-id="1610351361912"] .tn-atom {
                font-size: 34px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610351361912"] {
                top: 440px;
                left: calc(50% - 240px + 10px);
                width: 460px;
            }

            #rec638703622 .tn-elem[data-elem-id="1610351361912"] .tn-atom {
                font-size: 26px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .tn-elem[data-elem-id="1610351361912"] {
                top: 307px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }

            #rec638703622 .tn-elem[data-elem-id="1610351361912"] .tn-atom {
                font-size: 24px;
            }
        }

        #rec638703622 .tn-elem[data-elem-id="1610352545095"] {
            z-index: 4;
            top: 0px;
            left: calc(50% - 600px + 120px);
            width: 140px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610352545095"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610352545095"] {
                top: 0px;
                left: calc(50% - 480px + 30px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610352545095"] {
                top: 0px;
                left: calc(50% - 320px + 10px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610352545095"] {
                top: 14px;
                left: calc(50% - 240px + -85px);
                width: 60px;
            }

            #rec638703622 .tn-elem[data-elem-id="1610352545095"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 479px) {
        }

        #rec638703622 .tn-elem[data-elem-id="1610352718075"] {
            z-index: 5;
            top: 555px;
            left: calc(50% - 600px + 661px);
            width: 60px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610352718075"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610352718075"] {
                top: 545px;
                left: calc(50% - 480px + 441px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610352718075"] {
                top: 371px;
                left: calc(50% - 320px + 490px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610352718075"] {
                top: 370px;
                left: calc(50% - 240px + 410px);
                width: 60px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .tn-elem[data-elem-id="1610352718075"] {
                top: 242px;
                left: calc(50% - 160px + 270px);
                width: 50px;
            }
        }

        #rec638703622 .tn-elem[data-elem-id="1610352804072"] {
            z-index: 6;
            top: 511px;
            left: calc(50% - 600px + 506px);
            width: 60px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610352804072"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610352804072"] {
                top: 511px;
                left: calc(50% - 480px + 346px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610352804072"] {
                top: 317px;
                left: calc(50% - 320px + 410px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610352804072"] {
                top: 308px;
                left: calc(50% - 240px + 350px);
                width: 60px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .tn-elem[data-elem-id="1610352804072"] {
                top: 200px;
                left: calc(50% - 160px + 210px);
                width: 50px;
            }
        }

        #rec638703622 .tn-elem[data-elem-id="1610352845750"] {
            z-index: 7;
            top: 484px;
            left: calc(50% - 600px + 566px);
            width: 30px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610352845750"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610352845750"] {
                top: 481px;
                left: calc(50% - 480px + 406px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610352845750"] {
                top: 287px;
                left: calc(50% - 320px + 470px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610352845750"] {
                top: 276px;
                left: calc(50% - 240px + 392px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .tn-elem[data-elem-id="1610352845750"] {
                top: 168px;
                left: calc(50% - 160px + 252px);
            }
        }

        #rec638703622 .tn-elem[data-elem-id="1610353515643"] {
            color: #ffffff;
            text-align: center;
            z-index: 8;
            top: 369px;
            left: calc(50% - 600px + 838px);
            width: 220px;
            height: 80px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610353515643"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 2px;
            border-radius: 100px;
            background-position: center center;
            border-color: #3e3e3e;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638703622 .tn-elem[data-elem-id="1610353515643"] .tn-atom:hover {
                background-color: #fc9f17;
                background-image: none;
                border-color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610353515643"] {
                top: 457px;
                left: calc(50% - 480px + 570px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610353515643"] {
                top: 869px;
                left: calc(50% - 320px + 10px);
                width: 210px;
                height: 80px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610353515643"] {
                top: 760px;
                left: calc(50% - 240px + 10px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .tn-elem[data-elem-id="1610353515643"] {
                top: 595px;
                left: calc(50% - 160px + 10px);
            }
        }</style>

    <style>
        #rec638703622 .t396__artboard {
            height: 745px;
            background-color: #0b2543;
        }

        #rec638703622 .t396__filter {
            height: 745px;
        }

        #rec638703622 .t396__carrier {
            height: 745px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .t396__artboard {
            }

            #rec638703622 .t396__filter {
            }

            #rec638703622 .t396__carrier {
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .t396__artboard {
                height: 950px;
            }

            #rec638703622 .t396__filter {
                height: 950px;
            }

            #rec638703622 .t396__carrier {
                height: 950px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .t396__artboard {
                height: 840px;
            }

            #rec638703622 .t396__filter {
                height: 840px;
            }

            #rec638703622 .t396__carrier {
                height: 840px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .t396__artboard {
                height: 690px;
            }

            #rec638703622 .t396__filter {
                height: 690px;
            }

            #rec638703622 .t396__carrier {
                height: 690px;
                background-attachment: scroll;
            }
        }

        #rec638703622 .tn-elem[data-elem-id="1610352359638"] {
            z-index: 2;
            top: 115px;
            left: calc(50% - 600px + 20px);
            width: 600px;
            height: 540px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610352359638"] .tn-atom {
            opacity: 0.45;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610352359638"] {
                top: 122px;
                left: calc(50% - 480px + 10px);
                width: 460px;
                height: 530px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610352359638"] {
                top: 0px;
                left: calc(50% - 320px + 80px);
                width: 550px;
                height: 530px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610352359638"] {
                top: 0px;
                left: calc(50% - 240px + 0px);
                width: 96%;
                height: 400px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .tn-elem[data-elem-id="1610352359638"] {
                top: 0px;
                left: calc(50% - 160px + 0px);
                width: 96%;
                height: 267px;
            }
        }

        #rec638703622 .tn-elem[data-elem-id="1610351361912"] {
            color: #e8e8e8;
            z-index: 3;
            top: 193px;
            left: calc(50% - 600px + 420px);
            width: 711px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610351361912"] .tn-atom {
            color: #e8e8e8;
            font-size: 40px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.5;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610351361912"] {
                top: -15px;
                left: calc(50% - 480px + 250px);
                width: 640px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610351361912"] {
                top: 467px;
                left: calc(50% - 320px + 10px);
                width: 553px;
            }

            #rec638703622 .tn-elem[data-elem-id="1610351361912"] .tn-atom {
                font-size: 34px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610351361912"] {
                top: 440px;
                left: calc(50% - 240px + 10px);
                width: 460px;
            }

            #rec638703622 .tn-elem[data-elem-id="1610351361912"] .tn-atom {
                font-size: 26px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .tn-elem[data-elem-id="1610351361912"] {
                top: 307px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }

            #rec638703622 .tn-elem[data-elem-id="1610351361912"] .tn-atom {
                font-size: 24px;
            }
        }

        #rec638703622 .tn-elem[data-elem-id="1610352545095"] {
            z-index: 4;
            top: 0px;
            left: calc(50% - 600px + 120px);
            width: 140px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610352545095"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610352545095"] {
                top: 0px;
                left: calc(50% - 480px + 30px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610352545095"] {
                top: 0px;
                left: calc(50% - 320px + 10px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610352545095"] {
                top: 14px;
                left: calc(50% - 240px + -85px);
                width: 60px;
            }

            #rec638703622 .tn-elem[data-elem-id="1610352545095"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 479px) {
        }

        #rec638703622 .tn-elem[data-elem-id="1610352718075"] {
            z-index: 5;
            top: 555px;
            left: calc(50% - 600px + 661px);
            width: 60px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610352718075"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610352718075"] {
                top: 545px;
                left: calc(50% - 480px + 441px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610352718075"] {
                top: 371px;
                left: calc(50% - 320px + 490px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610352718075"] {
                top: 370px;
                left: calc(50% - 240px + 410px);
                width: 60px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .tn-elem[data-elem-id="1610352718075"] {
                top: 242px;
                left: calc(50% - 160px + 270px);
                width: 50px;
            }
        }

        #rec638703622 .tn-elem[data-elem-id="1610352804072"] {
            z-index: 6;
            top: 511px;
            left: calc(50% - 600px + 506px);
            width: 60px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610352804072"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610352804072"] {
                top: 511px;
                left: calc(50% - 480px + 346px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610352804072"] {
                top: 317px;
                left: calc(50% - 320px + 410px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610352804072"] {
                top: 308px;
                left: calc(50% - 240px + 350px);
                width: 60px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .tn-elem[data-elem-id="1610352804072"] {
                top: 200px;
                left: calc(50% - 160px + 210px);
                width: 50px;
            }
        }

        #rec638703622 .tn-elem[data-elem-id="1610352845750"] {
            z-index: 7;
            top: 484px;
            left: calc(50% - 600px + 566px);
            width: 30px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610352845750"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610352845750"] {
                top: 481px;
                left: calc(50% - 480px + 406px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610352845750"] {
                top: 287px;
                left: calc(50% - 320px + 470px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610352845750"] {
                top: 276px;
                left: calc(50% - 240px + 392px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .tn-elem[data-elem-id="1610352845750"] {
                top: 168px;
                left: calc(50% - 160px + 252px);
            }
        }

        #rec638703622 .tn-elem[data-elem-id="1610353515643"] {
            color: #ffffff;
            text-align: center;
            z-index: 8;
            top: 369px;
            left: calc(50% - 600px + 838px);
            width: 220px;
            height: 80px;
        }

        #rec638703622 .tn-elem[data-elem-id="1610353515643"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 600;
            border-width: 2px;
            border-radius: 100px;
            background-position: center center;
            border-color: #3e3e3e;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638703622 .tn-elem[data-elem-id="1610353515643"] .tn-atom:hover {
                background-color: #fc9f17;
                background-image: none;
                border-color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638703622 .tn-elem[data-elem-id="1610353515643"] {
                top: 457px;
                left: calc(50% - 480px + 570px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638703622 .tn-elem[data-elem-id="1610353515643"] {
                top: 869px;
                left: calc(50% - 320px + 10px);
                width: 210px;
                height: 80px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638703622 .tn-elem[data-elem-id="1610353515643"] {
                top: 760px;
                left: calc(50% - 240px + 10px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638703622 .tn-elem[data-elem-id="1610353515643"] {
                top: 595px;
                left: calc(50% - 160px + 10px);
            }
        }</style>

    <style>
        #rec639044496 .t396__artboard {
            height: 610px;
            background-color: #0b2543;
        }

        #rec639044496 .t396__filter {
            height: 610px;
        }

        #rec639044496 .t396__carrier {
            height: 610px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .t396__artboard {
                height: 610px;
            }

            #rec639044496 .t396__filter {
                height: 610px;
            }

            #rec639044496 .t396__carrier {
                height: 610px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .t396__artboard {
                height: 1240px;
            }

            #rec639044496 .t396__filter {
                height: 1240px;
            }

            #rec639044496 .t396__carrier {
                height: 1240px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .t396__artboard {
                height: 1530px;
            }

            #rec639044496 .t396__filter {
                height: 1530px;
            }

            #rec639044496 .t396__carrier {
                height: 1530px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .t396__artboard {
                height: 1190px;
            }

            #rec639044496 .t396__filter {
                height: 1190px;
            }

            #rec639044496 .t396__carrier {
                height: 1190px;
                background-attachment: scroll;
            }
        }

        #rec639044496 .tn-elem[data-elem-id="1610356049900"] {
            z-index: 2;
            top: 485px;
            left: calc(50% - 600px + 169px);
            width: 60px;
        }

        #rec639044496 .tn-elem[data-elem-id="1610356049900"] .tn-atom {
            opacity: 0.7;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .tn-elem[data-elem-id="1610356049900"] {
                top: 418px;
                left: calc(50% - 480px + 310px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .tn-elem[data-elem-id="1610356049900"] {
                top: 1063px;
                left: calc(50% - 320px + 90px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .tn-elem[data-elem-id="1610356049900"] {
                top: 730px;
                left: calc(50% - 240px + 400px);
                width: 60px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .tn-elem[data-elem-id="1610356049900"] {
                top: 497px;
                left: calc(50% - 160px + 270px);
                width: 50px;
            }
        }

        #rec639044496 .tn-elem[data-elem-id="1610356049907"] {
            z-index: 3;
            top: 444px;
            left: calc(50% - 600px + 349px);
            width: 60px;
        }

        #rec639044496 .tn-elem[data-elem-id="1610356049907"] .tn-atom {
            opacity: 0.7;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .tn-elem[data-elem-id="1610356049907"] {
                top: 367px;
                left: calc(50% - 480px + 202px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .tn-elem[data-elem-id="1610356049907"] {
                top: 1009px;
                left: calc(50% - 320px + 10px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .tn-elem[data-elem-id="1610356049907"] {
                top: 680px;
                left: calc(50% - 240px + 326px);
                width: 60px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .tn-elem[data-elem-id="1610356049907"] {
                top: 455px;
                left: calc(50% - 160px + 210px);
                width: 50px;
            }
        }

        #rec639044496 .tn-elem[data-elem-id="1610356049914"] {
            z-index: 4;
            top: 501px;
            left: calc(50% - 600px + 315px);
            width: 30px;
        }

        #rec639044496 .tn-elem[data-elem-id="1610356049914"] .tn-atom {
            opacity: 0.7;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .tn-elem[data-elem-id="1610356049914"] {
                top: 350px;
                left: calc(50% - 480px + 284px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .tn-elem[data-elem-id="1610356049914"] {
                top: 979px;
                left: calc(50% - 320px + 70px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .tn-elem[data-elem-id="1610356049914"] {
                top: 648px;
                left: calc(50% - 240px + 368px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .tn-elem[data-elem-id="1610356049914"] {
                top: 423px;
                left: calc(50% - 160px + 252px);
            }
        }

        #rec639044496 .tn-elem[data-elem-id="1610355539776"] {
            color: #3e3e3e;
            text-align: center;
            z-index: 5;
            top: 215px;
            left: calc(50% - 600px + -57px);
            width: 120px;
            height: 120px;
        }

        #rec639044496 .tn-elem[data-elem-id="1610355539776"] .tn-atom {
            color: #3e3e3e;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-width: 2px;
            border-radius: 500px;
            background-position: center center;
            border-color: #fc9f17;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .tn-elem[data-elem-id="1610355539776"] {
                top: 200px;
                left: calc(50% - 480px + -60px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .tn-elem[data-elem-id="1610355539776"] {
                top: 265px;
                left: calc(50% - 320px + 10px);
                width: 100px;
                height: 100px;
                border-radius: 200px;
            }

            #rec639044496 .tn-elem[data-elem-id="1610355539776"] .tn-atom {
                font-size: 55px;
                border-radius: 200px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .tn-elem[data-elem-id="1610355539776"] {
                top: 178px;
                left: calc(50% - 240px + 10px);
                width: 80px;
                height: 80px;
            }

            #rec639044496 .tn-elem[data-elem-id="1610355539776"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .tn-elem[data-elem-id="1610355539776"] {
                top: 110px;
                width: 70px;
                height: 70px;
            }

            #rec639044496 .tn-elem[data-elem-id="1610355539776"] .tn-atom {
                font-size: 30px;
            }
        }

        #rec639044496 .tn-elem[data-elem-id="1610355623559"] {
            color: #3e3e3e;
            text-align: center;
            z-index: 6;
            top: 430px;
            left: calc(50% - 600px + 540px);
            width: 120px;
            height: 120px;
        }

        #rec639044496 .tn-elem[data-elem-id="1610355623559"] .tn-atom {
            color: #3e3e3e;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-width: 2px;
            border-radius: 500px;
            background-position: center center;
            border-color: #fc9f17;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .tn-elem[data-elem-id="1610355623559"] {
                top: 490px;
                left: calc(50% - 480px + 420px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .tn-elem[data-elem-id="1610355623559"] {
                top: 265px;
                left: calc(50% - 320px + 330px);
                width: 100px;
                height: 100px;
                border-radius: 200px;
            }

            #rec639044496 .tn-elem[data-elem-id="1610355623559"] .tn-atom {
                font-size: 55px;
                border-radius: 200px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .tn-elem[data-elem-id="1610355623559"] {
                top: 729px;
                left: calc(50% - 240px + 10px);
                width: 80px;
                height: 80px;
            }

            #rec639044496 .tn-elem[data-elem-id="1610355623559"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .tn-elem[data-elem-id="1610355623559"] {
                top: 482px;
                left: calc(50% - 160px + 10px);
                width: 70px;
                height: 70px;
            }

            #rec639044496 .tn-elem[data-elem-id="1610355623559"] .tn-atom {
                font-size: 30px;
            }
        }

        #rec639044496 .tn-elem[data-elem-id="1610355644222"] {
            color: #3e3e3e;
            text-align: center;
            z-index: 7;
            top: 105px;
            left: calc(50% - 600px + 1120px);
            width: 120px;
            height: 120px;
        }

        #rec639044496 .tn-elem[data-elem-id="1610355644222"] .tn-atom {
            color: #3e3e3e;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.55;
            font-weight: 400;
            border-width: 2px;
            border-radius: 500px;
            background-position: center center;
            border-color: #fc9f17;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .tn-elem[data-elem-id="1610355644222"] {
                top: 92px;
                left: calc(50% - 480px + 898px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .tn-elem[data-elem-id="1610355644222"] {
                top: 728px;
                left: calc(50% - 320px + 330px);
                width: 100px;
                height: 100px;
                border-radius: 200px;
            }

            #rec639044496 .tn-elem[data-elem-id="1610355644222"] .tn-atom {
                font-size: 55px;
                border-radius: 200px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .tn-elem[data-elem-id="1610355644222"] {
                top: 1091px;
                left: calc(50% - 240px + 10px);
                width: 80px;
                height: 80px;
            }

            #rec639044496 .tn-elem[data-elem-id="1610355644222"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .tn-elem[data-elem-id="1610355644222"] {
                top: 953px;
                left: calc(50% - 160px + 10px);
                width: 70px;
                height: 70px;
            }

            #rec639044496 .tn-elem[data-elem-id="1610355644222"] .tn-atom {
                font-size: 30px;
            }
        }

        #rec639044496 .tn-elem[data-elem-id="1610355020675"] {
            color: #fc9f17;
            z-index: 8;
            top: -9px;
            left: calc(50% - 600px + 20px);
            width: 1180px;
        }

        #rec639044496 .tn-elem[data-elem-id="1610355020675"] .tn-atom {
            color: #fc9f17;
            font-size: 100px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .tn-elem[data-elem-id="1610355020675"] {
                top: -6px;
                left: calc(50% - 480px + 10px);
                width: 243px;
            }

            #rec639044496 .tn-elem[data-elem-id="1610355020675"] .tn-atom {
                font-size: 90px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .tn-elem[data-elem-id="1610355020675"] {
                top: 0px;
                left: calc(50% - 320px + 10px);
                width: 270px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .tn-elem[data-elem-id="1610355020675"] {
                top: 0px;
                left: calc(50% - 240px + 10px);
                width: 460px;
            }

            #rec639044496 .tn-elem[data-elem-id="1610355020675"] {
                text-align: left;
            }

            #rec639044496 .tn-elem[data-elem-id="1610355020675"] .tn-atom {
                font-size: 45px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .tn-elem[data-elem-id="1610355020675"] {
                top: 0px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec639044496 .tn-elem[data-elem-id="1610355057367"] {
            z-index: 9;
            top: 36px;
            left: calc(50% - 600px + 768px);
            width: 200px;
            height: 30px;
        }

        #rec639044496 .tn-elem[data-elem-id="1610355057367"] .tn-atom {
            opacity: 0.6;
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .tn-elem[data-elem-id="1610355057367"] {
                top: 15px;
                left: calc(50% - 480px + 283px);
                width: 138px;
                height: 30px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .tn-elem[data-elem-id="1610355057367"] {
                top: 30px;
                left: calc(50% - 320px + 283px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .tn-elem[data-elem-id="1610355057367"] {
                top: 7px;
                left: calc(50% - 240px + 143px);
                width: 99px;
                height: 30px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .tn-elem[data-elem-id="1610355057367"] {
                top: 122px;
                left: calc(50% - 160px + 177px);
            }
        }

        #rec639044496 .tn-elem[data-elem-id="1610355188360"] {
            color: #e8e8e8;
            z-index: 10;
            top: 171px;
            left: calc(50% - 600px + 20px);
            width: 297px;
        }

        #rec639044496 .tn-elem[data-elem-id="1610355188360"] .tn-atom {
            color: #e8e8e8;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .tn-elem[data-elem-id="1610355188360"] {
                top: 155px;
                left: calc(50% - 480px + 10px);
                width: 300px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .tn-elem[data-elem-id="1610355188360"] {
                top: 405px;
                left: calc(50% - 320px + 10px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .tn-elem[data-elem-id="1610355188360"] {
                top: 298px;
                left: calc(50% - 240px + 10px);
                width: 402px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .tn-elem[data-elem-id="1610355188360"] {
                top: 210px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec639044496 .tn-elem[data-elem-id="1610355289942"] {
            color: #e8e8e8;
            z-index: 11;
            top: 170px;
            left: calc(50% - 600px + 420px);
            width: 340px;
        }

        #rec639044496 .tn-elem[data-elem-id="1610355289942"] .tn-atom {
            color: #e8e8e8;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .tn-elem[data-elem-id="1610355289942"] {
                top: 155px;
                left: calc(50% - 480px + 330px);
                width: 300px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .tn-elem[data-elem-id="1610355289942"] {
                top: 405px;
                left: calc(50% - 320px + 330px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .tn-elem[data-elem-id="1610355289942"] {
                top: 849px;
                left: calc(50% - 240px + 10px);
                width: 410px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .tn-elem[data-elem-id="1610355289942"] {
                top: 585px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec639044496 .tn-elem[data-elem-id="1610355305910"] {
            color: #e8e8e8;
            z-index: 12;
            top: 170px;
            left: calc(50% - 600px + 820px);
            width: 329px;
        }

        #rec639044496 .tn-elem[data-elem-id="1610355305910"] .tn-atom {
            color: #e8e8e8;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .tn-elem[data-elem-id="1610355305910"] {
                top: 448px;
                left: calc(50% - 480px + 650px);
                width: 300px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .tn-elem[data-elem-id="1610355305910"] {
                top: 1078px;
                left: calc(50% - 320px + 330px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .tn-elem[data-elem-id="1610355305910"] {
                top: 1421px;
                left: calc(50% - 240px + 10px);
                width: 410px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .tn-elem[data-elem-id="1610355305910"] {
                top: 1049px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec639044496 .tn-elem[data-elem-id="1694511598931"] {
            z-index: 13;
            top: calc(610px + -207px);
            left: calc(50% + 600px - 60px + -180px);
            width: 60px;
        }

        #rec639044496 .tn-elem[data-elem-id="1694511598931"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec639044496 .tn-elem[data-elem-id="1694511598931"] {
                top: calc(610px + -60px);
                left: calc(50% + 480px - 60px + -10px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec639044496 .tn-elem[data-elem-id="1694511598931"] {
                top: calc(610px + -50px);
                left: calc(50% + 320px - 60px + -30px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec639044496 .tn-elem[data-elem-id="1694511598931"] {
                top: calc(610px + 14px);
                left: calc(50% + 240px - 60px + -85px);
                width: 60px;
            }

            #rec639044496 .tn-elem[data-elem-id="1694511598931"] .tn-atom {
                opacity: 0;
            }
        }

        @media screen and (max-width: 479px) {
            #rec639044496 .tn-elem[data-elem-id="1694511598931"] {
                top: calc(610px + -246px);
                left: calc(50% + 160px - 60px + 157px);
            }
        }</style>

    <style>
        .responsive-single-iframe {
            width: 100%;
        }

        @media (max-width: 768px) {
            .responsive-single-iframe {
                height: 300px;
            }
        }

        @media (min-width: 769px) {
            .responsive-single-iframe {
                height: 500px;
            }
        }
    </style>

    <style>
        #rec638379587 .t396__artboard {
            height: 1751px;
            background-color: #0b2543;
        }

        #rec638379587 .t396__filter {
            height: 1751px;
        }

        #rec638379587 .t396__carrier {
            height: 1751px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .t396__artboard {
                height: 1133px;
            }

            #rec638379587 .t396__filter {
                height: 1133px;
            }

            #rec638379587 .t396__carrier {
                height: 1133px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .t396__artboard {
                height: 1801px;
            }

            #rec638379587 .t396__filter {
                height: 1801px;
            }

            #rec638379587 .t396__carrier {
                height: 1801px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .t396__artboard {
                height: 1528px;
            }

            #rec638379587 .t396__filter {
                height: 1528px;
            }

            #rec638379587 .t396__carrier {
                height: 1528px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .t396__artboard {
                height: 2970px;
            }

            #rec638379587 .t396__filter {
                height: 2970px;
            }

            #rec638379587 .t396__carrier {
                height: 2970px;
                background-attachment: scroll;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1610398255204"] {
            color: #e8e8e8;
            z-index: 2;
            top: 228px;
            left: calc(50% - 600px + 320px);
            width: 378px;
        }

        #rec638379587 .tn-elem[data-elem-id="1610398255204"] .tn-atom {
            color: #e8e8e8;
            font-size: 32px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.2;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1610398255204"] {
                top: 210px;
                left: calc(50% - 480px + 250px);
                width: 380px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1610398255204"] {
                top: 292px;
                left: calc(50% - 320px + 250px);
                width: 320px;
            }

            #rec638379587 .tn-elem[data-elem-id="1610398255204"] .tn-atom {
                font-size: 34px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1610398255204"] {
                top: 217px;
                left: calc(50% - 240px + 170px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1610398255204"] .tn-atom {
                font-size: 26px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1610398255204"] {
                top: 322px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1610398255204"] .tn-atom {
                font-size: 24px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1610398367500"] {
            color: #fc9f17;
            z-index: 3;
            top: 228px;
            left: calc(50% - 600px + 20px);
            width: 200px;
        }

        #rec638379587 .tn-elem[data-elem-id="1610398367500"] .tn-atom {
            color: #fc9f17;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            letter-spacing: -3px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1610398367500"] {
                top: 210px;
                left: calc(50% - 480px + 10px);
                width: 220px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1610398367500"] {
                top: 292px;
                left: calc(50% - 320px + 10px);
                width: 160px;
            }

            #rec638379587 .tn-elem[data-elem-id="1610398367500"] .tn-atom {
                font-size: 50px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1610398367500"] {
                top: 217px;
                left: calc(50% - 240px + 10px);
                width: 140px;
            }

            #rec638379587 .tn-elem[data-elem-id="1610398367500"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1610398367500"] {
                top: 173px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1610398367500"] .tn-atom {
                font-size: 34px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1610398405921"] {
            color: #e8e8e8;
            z-index: 4;
            top: 277px;
            left: calc(50% - 600px + 19px);
            width: 120px;
        }

        #rec638379587 .tn-elem[data-elem-id="1610398405921"] .tn-atom {
            color: #e8e8e8;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            letter-spacing: 2px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1610398405921"] {
                top: 300px;
                left: calc(50% - 480px + 10px);
                width: 220px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1610398405921"] {
                top: 362px;
                left: calc(50% - 320px + 10px);
                width: 160px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1610398405921"] {
                top: 277px;
                left: calc(50% - 240px + 10px);
                width: 140px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1610398405921"] {
                top: 199px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1610398405921"] .tn-atom {
                font-size: 34px;
                letter-spacing: 1px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1610398499350"] {
            color: #3e3e3e;
            z-index: 5;
            top: 171px;
            left: calc(50% - 600px + 19px);
            width: 200px;
        }

        #rec638379587 .tn-elem[data-elem-id="1610398499350"] .tn-atom {
            color: #3e3e3e;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1610398499350"] {
                top: 153px;
                left: calc(50% - 480px + 9px);
                width: 220px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1610398499350"] {
                top: 245px;
                left: calc(50% - 320px + 9px);
                width: 160px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1610398499350"] {
                top: 170px;
                left: calc(50% - 240px + 3px);
                width: 140px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1610398499350"] {
                top: 135px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1610398527438"] {
            color: #3e3e3e;
            z-index: 6;
            top: 171px;
            left: calc(50% - 600px + 320px);
            width: 460px;
        }

        #rec638379587 .tn-elem[data-elem-id="1610398527438"] .tn-atom {
            color: #3e3e3e;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1610398527438"] {
                top: 153px;
                left: calc(50% - 480px + 250px);
                width: 300px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1610398527438"] {
                top: 245px;
                left: calc(50% - 320px + 250px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1610398527438"] {
                top: 170px;
                left: calc(50% - 240px + 170px);
                width: 300px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1610398527438"] {
                top: 285px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1610398536463"] {
            color: #3e3e3e;
            z-index: 7;
            top: 171px;
            left: calc(50% - 600px + 820px);
            width: 360px;
        }

        #rec638379587 .tn-elem[data-elem-id="1610398536463"] .tn-atom {
            color: #3e3e3e;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1610398536463"] {
                top: 153px;
                left: calc(50% - 480px + 650px);
                width: 300px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1610398536463"] {
                top: 495px;
                left: calc(50% - 320px + 250px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1610398536463"] {
                top: 374px;
                left: calc(50% - 240px + 170px);
                width: 300px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1610398536463"] {
                top: 425px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1610398575898"] {
            color: #e8e8e8;
            z-index: 8;
            top: 239px;
            left: calc(50% - 600px + 820px);
            width: 360px;
        }

        #rec638379587 .tn-elem[data-elem-id="1610398575898"] .tn-atom {
            color: #e8e8e8;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1610398575898"] {
                top: 350px;
                left: calc(50% - 480px + 650px);
                width: 300px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1610398575898"] {
                top: 664px;
                left: calc(50% - 320px + 250px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1610398575898"] {
                top: 519px;
                left: calc(50% - 240px + 170px);
                width: 300px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1610398575898"] {
                top: 463px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1610399466942"] {
            z-index: 9;
            top: 469px;
            left: calc(50% - 600px + 20px);
            width: 1160px;
            height: 2px;
        }

        #rec638379587 .tn-elem[data-elem-id="1610399466942"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1610399466942"] {
                top: 441px;
                left: calc(50% - 480px + 10px);
                width: 940px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1610399466942"] {
                top: 742px;
                width: 620px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1610399466942"] {
                top: 597px;
                width: 460px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1610399466942"] {
                top: 738px;
                left: calc(50% - 160px + 8px);
                width: 95%;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1610399987355"] {
            z-index: 10;
            top: 465px;
            left: calc(50% - 600px + 250px);
            width: 10px;
            height: 10px;
        }

        #rec638379587 .tn-elem[data-elem-id="1610399987355"] .tn-atom {
            border-radius: 3000px;
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1610399987355"] {
                top: 437px;
                left: calc(50% - 480px + 250px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1610399987355"] {
                top: 738px;
                left: calc(50% - 320px + 70px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1610399987355"] {
                top: 593px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1610399987355"] {
                top: 734px;
                left: calc(50% - 160px + 20px);
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873121"] {
            color: #e8e8e8;
            z-index: 11;
            top: 1434px;
            left: calc(50% - 600px + 325px);
            width: 312px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873121"] .tn-atom {
            color: #e8e8e8;
            font-size: 32px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.2;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873121"] {
                top: 549px;
                left: calc(50% - 480px + 250px);
                width: 380px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873121"] {
                top: 840px;
                left: calc(50% - 320px + 250px);
                width: 370px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658824873121"] .tn-atom {
                font-size: 34px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873121"] {
                top: 695px;
                left: calc(50% - 240px + 170px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658824873121"] .tn-atom {
                font-size: 26px;
                opacity: 1;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873121"] {
                top: 2548px;
                left: calc(50% - 160px + 11px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658824873121"] .tn-atom {
                font-size: 24px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873140"] {
            color: #3e3e3e;
            z-index: 12;
            top: 1377px;
            left: calc(50% - 600px + 24px);
            width: 200px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873140"] .tn-atom {
            color: #3e3e3e;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873140"] {
                top: 492px;
                left: calc(50% - 480px + 9px);
                width: 220px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873140"] {
                top: 793px;
                left: calc(50% - 320px + 9px);
                width: 160px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873140"] {
                top: 648px;
                left: calc(50% - 240px + 3px);
                width: 140px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658824873140"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873140"] {
                top: 2351px;
                left: calc(50% - 160px + 9px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873144"] {
            color: #3e3e3e;
            z-index: 13;
            top: 1377px;
            left: calc(50% - 600px + 325px);
            width: 460px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873144"] .tn-atom {
            color: #3e3e3e;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873144"] {
                top: 492px;
                left: calc(50% - 480px + 250px);
                width: 300px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873144"] {
                top: 793px;
                left: calc(50% - 320px + 250px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873144"] {
                top: 648px;
                left: calc(50% - 240px + 170px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658824873144"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873144"] {
                top: 2506px;
                left: calc(50% - 160px + 11px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873148"] {
            color: #3e3e3e;
            z-index: 14;
            top: 1377px;
            left: calc(50% - 600px + 825px);
            width: 360px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873148"] .tn-atom {
            color: #3e3e3e;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873148"] {
                top: 492px;
                left: calc(50% - 480px + 650px);
                width: 300px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873148"] {
                top: 1043px;
                left: calc(50% - 320px + 250px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873148"] {
                top: 852px;
                left: calc(50% - 240px + 170px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658824873148"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873148"] {
                top: 2681px;
                left: calc(50% - 160px + 11px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873152"] {
            color: #e8e8e8;
            z-index: 15;
            top: 1440px;
            left: calc(50% - 600px + 825px);
            width: 360px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873152"] .tn-atom {
            color: #e8e8e8;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873152"] {
                top: 689px;
                left: calc(50% - 480px + 650px);
                width: 300px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873152"] {
                top: 1212px;
                left: calc(50% - 320px + 250px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873152"] {
                top: 997px;
                left: calc(50% - 240px + 170px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658824873152"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873152"] {
                top: 2719px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703096499574"] {
            color: #fc9f17;
            z-index: 16;
            top: 1435px;
            left: calc(50% - 600px + 25px);
            width: 200px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703096499574"] .tn-atom {
            color: #fc9f17;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            letter-spacing: -3px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703096499574"] {
                top: 220pxpx;
                left: calc(50% - 480px + 20pxpx);
                width: 220px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703096499574"] {
                top: 302pxpx;
                left: calc(50% - 320px + 20pxpx);
                width: 160px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703096499574"] .tn-atom {
                font-size: 50px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703096499574"] {
                top: 227pxpx;
                left: calc(50% - 240px + 20pxpx);
                width: 140px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703096499574"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703096499574"] {
                top: 2392px;
                left: calc(50% - 160px + 9px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703096499574"] .tn-atom {
                font-size: 34px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703096499593"] {
            color: #e8e8e8;
            z-index: 17;
            top: 1482px;
            left: calc(50% - 600px + 25px);
            width: 120px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703096499593"] .tn-atom {
            color: #e8e8e8;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            letter-spacing: 2px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703096499593"] {
                top: 310pxpx;
                left: calc(50% - 480px + 20pxpx);
                width: 220px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703096499593"] {
                top: 372pxpx;
                left: calc(50% - 320px + 20pxpx);
                width: 160px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703096499593"] {
                top: 287pxpx;
                left: calc(50% - 240px + 20pxpx);
                width: 140px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703096499593"] {
                top: 2418px;
                left: calc(50% - 160px + 9px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703096499593"] .tn-atom {
                font-size: 34px;
                letter-spacing: 1px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873166"] {
            z-index: 18;
            top: 1637px;
            left: calc(50% - 600px + 1057px);
            width: 10px;
            height: 10px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873166"] .tn-atom {
            border-radius: 3000px;
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873166"] {
                top: 780px;
                left: calc(50% - 480px + 796px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873166"] {
                top: 1290px;
                left: calc(50% - 320px + 560px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873166"] {
                top: 1075px;
                left: calc(50% - 240px + 440px);
            }

            #rec638379587 .tn-elem[data-elem-id="1658824873166"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873166"] {
                top: 2904px;
                left: calc(50% - 160px + 291px);
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873161"] {
            z-index: 19;
            top: 1641px;
            left: calc(50% - 600px + 25px);
            width: 1160px;
            height: 2px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658824873161"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873161"] {
                top: 784px;
                left: calc(50% - 480px + 10px);
                width: 940px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873161"] {
                top: 1294px;
                left: calc(50% - 320px + 10px);
                width: 620px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873161"] {
                top: 1079px;
                left: calc(50% - 240px + 10px);
                width: 460px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658824873161"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658824873161"] {
                top: 2908px;
                left: calc(50% - 160px + 9px);
                width: 95%;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1610398203301"] {
            color: #fc9f17;
            z-index: 20;
            top: 7px;
            left: calc(50% - 600px + 20px);
            width: 1180px;
        }

        #rec638379587 .tn-elem[data-elem-id="1610398203301"] .tn-atom {
            color: #fc9f17;
            font-size: 110px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1610398203301"] {
                top: -7px;
                left: calc(50% - 480px + 10px);
                width: 964px;
            }

            #rec638379587 .tn-elem[data-elem-id="1610398203301"] .tn-atom {
                font-size: 90px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1610398203301"] {
                top: -6px;
                left: calc(50% - 320px + 10px);
                width: 270px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1610398203301"] {
                top: 0px;
                left: calc(50% - 240px + 10px);
                width: 460px;
            }

            #rec638379587 .tn-elem[data-elem-id="1610398203301"] {
                text-align: left;
            }

            #rec638379587 .tn-elem[data-elem-id="1610398203301"] .tn-atom {
                font-size: 45px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1610398203301"] {
                top: 0px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067451"] {
            color: #e8e8e8;
            z-index: 21;
            top: 575px;
            left: calc(50% - 600px + 324px);
            width: 324px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067451"] .tn-atom {
            color: #e8e8e8;
            font-size: 32px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.2;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067451"] {
                top: 892px;
                left: calc(50% - 480px + 250px);
                width: 380px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658827067451"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067451"] {
                top: 1392px;
                left: calc(50% - 320px + 250px);
                width: 370px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658827067451"] .tn-atom {
                font-size: 34px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067451"] {
                top: 1177px;
                left: calc(50% - 240px + 170px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658827067451"] .tn-atom {
                font-size: 26px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067451"] {
                top: 996px;
                left: calc(50% - 160px + 8px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658827067451"] .tn-atom {
                font-size: 24px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067471"] {
            color: #3e3e3e;
            z-index: 22;
            top: 518px;
            left: calc(50% - 600px + 23px);
            width: 200px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067471"] .tn-atom {
            color: #3e3e3e;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067471"] {
                top: 835px;
                left: calc(50% - 480px + 9px);
                width: 220px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658827067471"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067471"] {
                top: 1345px;
                left: calc(50% - 320px + 9px);
                width: 160px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067471"] {
                top: 1130px;
                left: calc(50% - 240px + 3px);
                width: 140px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067471"] {
                top: 801px;
                left: calc(50% - 160px + 8px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067475"] {
            color: #3e3e3e;
            z-index: 23;
            top: 518px;
            left: calc(50% - 600px + 324px);
            width: 460px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067475"] .tn-atom {
            color: #3e3e3e;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067475"] {
                top: 835px;
                left: calc(50% - 480px + 250px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658827067475"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067475"] {
                top: 1345px;
                left: calc(50% - 320px + 250px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067475"] {
                top: 1130px;
                left: calc(50% - 240px + 170px);
                width: 300px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067475"] {
                top: 958px;
                left: calc(50% - 160px + 8px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067479"] {
            color: #3e3e3e;
            z-index: 24;
            top: 518px;
            left: calc(50% - 600px + 824px);
            width: 360px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067479"] .tn-atom {
            color: #3e3e3e;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067479"] {
                top: 835px;
                left: calc(50% - 480px + 650px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658827067479"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067479"] {
                top: 1595px;
                left: calc(50% - 320px + 250px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067479"] {
                top: 1334px;
                left: calc(50% - 240px + 170px);
                width: 300px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067479"] {
                top: 1135px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067483"] {
            color: #e8e8e8;
            z-index: 25;
            top: 581px;
            left: calc(50% - 600px + 824px);
            width: 360px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067483"] .tn-atom {
            color: #e8e8e8;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067483"] {
                top: 972px;
                left: calc(50% - 480px + 650px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658827067483"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067483"] {
                top: 1713px;
                left: calc(50% - 320px + 250px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067483"] {
                top: 1440px;
                left: calc(50% - 240px + 170px);
                width: 300px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067483"] {
                top: 1170px;
                left: calc(50% - 160px + 9px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703097267752"] {
            color: #fc9f17;
            z-index: 26;
            top: 577px;
            left: calc(50% - 600px + 24px);
            width: 200px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703097267752"] .tn-atom {
            color: #fc9f17;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            letter-spacing: -3px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703097267752"] {
                top: 230pxpx;
                left: calc(50% - 480px + 30pxpx);
                width: 220px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703097267752"] {
                top: 312pxpx;
                left: calc(50% - 320px + 30pxpx);
                width: 160px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097267752"] .tn-atom {
                font-size: 50px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703097267752"] {
                top: 237pxpx;
                left: calc(50% - 240px + 30pxpx);
                width: 140px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097267752"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703097267752"] {
                top: 844px;
                left: calc(50% - 160px + 7px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097267752"] .tn-atom {
                font-size: 34px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703097267785"] {
            color: #e8e8e8;
            z-index: 27;
            top: 627px;
            left: calc(50% - 600px + 24px);
            width: 120px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703097267785"] .tn-atom {
            color: #e8e8e8;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            letter-spacing: 2px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703097267785"] {
                top: 320pxpx;
                left: calc(50% - 480px + 30pxpx);
                width: 220px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703097267785"] {
                top: 382pxpx;
                left: calc(50% - 320px + 30pxpx);
                width: 160px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703097267785"] {
                top: 297pxpx;
                left: calc(50% - 240px + 30pxpx);
                width: 140px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703097267785"] {
                top: 869px;
                left: calc(50% - 160px + 7px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097267785"] .tn-atom {
                font-size: 34px;
                letter-spacing: 0px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067493"] {
            z-index: 28;
            top: 882px;
            left: calc(50% - 600px + 24px);
            width: 1160px;
            height: 2px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067493"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067493"] {
                top: 1127px;
                left: calc(50% - 480px + 10px);
                width: 940px;
            }

            #rec638379587 .tn-elem[data-elem-id="1658827067493"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067493"] {
                top: 1795px;
                left: calc(50% - 320px + 10px);
                width: 620px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067493"] {
                top: 1522px;
                left: calc(50% - 240px + 10px);
                width: 460px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067493"] {
                top: 1523px;
                left: calc(50% - 160px + 6px);
                width: 95%;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067498"] {
            z-index: 29;
            top: 878px;
            left: calc(50% - 600px + 84px);
            width: 10px;
            height: 10px;
        }

        #rec638379587 .tn-elem[data-elem-id="1658827067498"] .tn-atom {
            border-radius: 3000px;
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067498"] {
                top: 1123px;
                left: calc(50% - 480px + 249px);
            }

            #rec638379587 .tn-elem[data-elem-id="1658827067498"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067498"] {
                top: 1791px;
                left: calc(50% - 320px + 70px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067498"] {
                top: 1518px;
                left: calc(50% - 240px + 70px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1658827067498"] {
                top: 1519px;
                left: calc(50% - 160px + 18px);
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866316"] {
            color: #e8e8e8;
            z-index: 30;
            top: 991px;
            left: calc(50% - 600px + 321px);
            width: 324px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866316"] .tn-atom {
            color: #e8e8e8;
            font-size: 32px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.2;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866316"] {
                top: 902pxpx;
                left: calc(50% - 480px + 260pxpx);
                width: 380px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866316"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866316"] {
                top: 1402pxpx;
                left: calc(50% - 320px + 260pxpx);
                width: 370px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866316"] .tn-atom {
                font-size: 34px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866316"] {
                top: 1187pxpx;
                left: calc(50% - 240px + 180pxpx);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866316"] .tn-atom {
                font-size: 26px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866316"] {
                top: 1771px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866316"] .tn-atom {
                font-size: 24px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866323"] {
            color: #3e3e3e;
            z-index: 31;
            top: 934px;
            left: calc(50% - 600px + 20px);
            width: 200px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866323"] .tn-atom {
            color: #3e3e3e;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866323"] {
                top: 845pxpx;
                left: calc(50% - 480px + 19pxpx);
                width: 220px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866323"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866323"] {
                top: 1355pxpx;
                left: calc(50% - 320px + 19pxpx);
                width: 160px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866323"] {
                top: 1140pxpx;
                left: calc(50% - 240px + 13pxpx);
                width: 140px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866323"] {
                top: 1576px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866330"] {
            color: #3e3e3e;
            z-index: 32;
            top: 934px;
            left: calc(50% - 600px + 321px);
            width: 460px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866330"] .tn-atom {
            color: #3e3e3e;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866330"] {
                top: 845pxpx;
                left: calc(50% - 480px + 260pxpx);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866330"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866330"] {
                top: 1355pxpx;
                left: calc(50% - 320px + 260pxpx);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866330"] {
                top: 1140pxpx;
                left: calc(50% - 240px + 180pxpx);
                width: 300px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866330"] {
                top: 1733px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866335"] {
            color: #3e3e3e;
            z-index: 33;
            top: 934px;
            left: calc(50% - 600px + 821px);
            width: 360px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866335"] .tn-atom {
            color: #3e3e3e;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866335"] {
                top: 845pxpx;
                left: calc(50% - 480px + 660pxpx);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866335"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866335"] {
                top: 1605pxpx;
                left: calc(50% - 320px + 260pxpx);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866335"] {
                top: 1344pxpx;
                left: calc(50% - 240px + 180pxpx);
                width: 300px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866335"] {
                top: 1852px;
                left: calc(50% - 160px + 10px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866339"] {
            color: #e8e8e8;
            z-index: 34;
            top: 996px;
            left: calc(50% - 600px + 821px);
            width: 360px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866339"] .tn-atom {
            color: #e8e8e8;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866339"] {
                top: 982pxpx;
                left: calc(50% - 480px + 660pxpx);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866339"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866339"] {
                top: 1723pxpx;
                left: calc(50% - 320px + 260pxpx);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866339"] {
                top: 1450pxpx;
                left: calc(50% - 240px + 180pxpx);
                width: 300px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866339"] {
                top: 1886px;
                left: calc(50% - 160px + 8px);
                width: 300px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866345"] {
            color: #fc9f17;
            z-index: 35;
            top: 993px;
            left: calc(50% - 600px + 21px);
            width: 200px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866345"] .tn-atom {
            color: #fc9f17;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            letter-spacing: -3px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866345"] {
                top: 240pxpx;
                left: calc(50% - 480px + 40pxpx);
                width: 220px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866345"] {
                top: 322pxpx;
                left: calc(50% - 320px + 40pxpx);
                width: 160px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866345"] .tn-atom {
                font-size: 50px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866345"] {
                top: 247pxpx;
                left: calc(50% - 240px + 40pxpx);
                width: 140px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866345"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866345"] {
                top: 1619px;
                left: calc(50% - 160px + 9px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866345"] .tn-atom {
                font-size: 34px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866350"] {
            color: #e8e8e8;
            z-index: 36;
            top: 1043px;
            left: calc(50% - 600px + 21px);
            width: 120px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866350"] .tn-atom {
            color: #e8e8e8;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.6;
            font-weight: 600;
            letter-spacing: 2px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866350"] {
                top: 330pxpx;
                left: calc(50% - 480px + 40pxpx);
                width: 220px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866350"] {
                top: 392pxpx;
                left: calc(50% - 320px + 40pxpx);
                width: 160px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866350"] {
                top: 307pxpx;
                left: calc(50% - 240px + 40pxpx);
                width: 140px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866350"] {
                top: 1644px;
                left: calc(50% - 160px + 9px);
                width: 300px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866350"] .tn-atom {
                font-size: 34px;
                letter-spacing: 0px;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866354"] {
            z-index: 37;
            top: 1320px;
            left: calc(50% - 600px + 21px);
            width: 1160px;
            height: 2px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866354"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866354"] {
                top: 1137pxpx;
                left: calc(50% - 480px + 20pxpx);
                width: 940px;
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866354"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866354"] {
                top: 1805pxpx;
                left: calc(50% - 320px + 20pxpx);
                width: 620px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866354"] {
                top: 1532pxpx;
                left: calc(50% - 240px + 20pxpx);
                width: 460px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866354"] {
                top: 2294px;
                left: calc(50% - 160px + 8px);
                width: 95%;
            }
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866359"] {
            z-index: 38;
            top: 1316px;
            left: calc(50% - 600px + 81px);
            width: 10px;
            height: 10px;
        }

        #rec638379587 .tn-elem[data-elem-id="1703097866359"] .tn-atom {
            border-radius: 3000px;
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866359"] {
                top: 1133pxpx;
                left: calc(50% - 480px + 259pxpx);
            }

            #rec638379587 .tn-elem[data-elem-id="1703097866359"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866359"] {
                top: 1801pxpx;
                left: calc(50% - 320px + 80pxpx);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866359"] {
                top: 1528pxpx;
                left: calc(50% - 240px + 80pxpx);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379587 .tn-elem[data-elem-id="1703097866359"] {
                top: 2290px;
                left: calc(50% - 160px + 20px);
            }
        }</style>

    <script>t_onReady(function () {
            var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
            if (!isSafari) {
                document.body.insertAdjacentHTML('beforeend', '<div class="t360__progress"><div class="t360__bar"></div></div>');
                setTimeout(function () {
                    var bar = document.querySelector('.t360__bar');
                    if (bar) bar.classList.add('t360__barprogress');
                }, 10);
            }
        });
        window.addEventListener('load', function () {
            var bar = document.querySelector('.t360__bar');
            if (!bar) return;
            bar.classList.remove('t360__barprogress');
            bar.classList.add('t360__barprogressfinished');
            setTimeout(function () {
                bar.classList.add('t360__barprogresshidden');
            }, 20);
            setTimeout(function () {
                var progress = document.querySelector('.t360__progress');
                if (progress) progress.style.display = 'none';
            }, 500);
        });</script>

    <style>
        #rec638379588 .t396__artboard {
            height: 660px;
            background-color: #0b2543;
        }

        #rec638379588 .t396__filter {
            height: 660px;
        }

        #rec638379588 .t396__carrier {
            height: 660px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec638379588 .t396__artboard {
                height: 662px;
            }

            #rec638379588 .t396__filter {
                height: 662px;
            }

            #rec638379588 .t396__carrier {
                height: 662px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379588 .t396__artboard {
                height: 550px;
            }

            #rec638379588 .t396__filter {
                height: 550px;
            }

            #rec638379588 .t396__carrier {
                height: 550px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379588 .t396__artboard {
                height: 443px;
            }

            #rec638379588 .t396__filter {
                height: 443px;
            }

            #rec638379588 .t396__carrier {
                height: 443px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379588 .t396__artboard {
                height: 425px;
                background-color: #0b2543;
            }

            #rec638379588 .t396__filter {
                height: 425px;
            }

            #rec638379588 .t396__carrier {
                height: 425px;
                background-position: center center;
                background-attachment: scroll;
            }
        }

        #rec638379588 .tn-elem[data-elem-id="1610528167520"] {
            color: #fc9f17;
            text-align: right;
            z-index: 2;
            top: 0px;
            left: calc(50% - 600px + 20px);
            width: 1160px;
            height: 500px;
        }

        #rec638379588 .tn-elem[data-elem-id="1610528167520"] .tn-atom {
            color: #fc9f17;
            font-size: 120px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            letter-spacing: -5.2px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379588 .tn-elem[data-elem-id="1610528167520"] {
                top: 0px;
                left: calc(50% - 480px + 10px);
                width: 940px;
                height: 500px;
            }

            #rec638379588 .tn-elem[data-elem-id="1610528167520"] .tn-atom__slds-img {
                background-size: cover;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379588 .tn-elem[data-elem-id="1610528167520"] {
                top: 0px;
                left: calc(50% - 320px + 10px);
                width: 620px;
                height: 400px;
            }

            #rec638379588 .tn-elem[data-elem-id="1610528167520"] .tn-atom {
                font-size: 100px;
            }

            #rec638379588 .tn-elem[data-elem-id="1610528167520"] .tn-atom__slds-img {
                background-size: cover;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379588 .tn-elem[data-elem-id="1610528167520"] {
                top: 0px;
                left: calc(50% - 240px + 10px);
                width: 460px;
                height: 296px;
            }

            #rec638379588 .tn-elem[data-elem-id="1610528167520"] .tn-atom__slds-img {
                background-size: cover;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379588 .tn-elem[data-elem-id="1610528167520"] {
                top: 0px;
                left: calc(50% - 160px + 10px);
                width: 300px;
                height: 258px;
            }

            #rec638379588 .tn-elem[data-elem-id="1610528167520"] .tn-atom {
                font-size: 34px;
                letter-spacing: -3px;
            }

            #rec638379588 .tn-elem[data-elem-id="1610528167520"] .tn-atom__slds-img {
                background-size: cover;
            }
        }

        #rec638379588 .tn-elem[data-elem-id="1694469563740"] {
            z-index: 3;
            top: calc(330px - 5px + 486px);
            left: calc(50% - 56px + 249px);
            width: 112px;
            height: 10px;
        }

        #rec638379588 .tn-elem[data-elem-id="1694469563740"] .tn-atom {
            border-width: 0px;
            border-radius: 300px;
            background-color: #0a1521;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            box-shadow: 0px 0px 40px 40px rgba(10, 21, 33, 1);
        }

        @media screen and (max-width: 1199px) {
        }

        @media screen and (max-width: 959px) {
        }

        @media screen and (max-width: 639px) {
        }

        @media screen and (max-width: 479px) {
        }

        #rec638379588 .tn-elem[data-elem-id="1610528504619"] {
            z-index: 4;
            top: 524px;
            left: calc(50% - 580px + 0px);
            width: 1160px;
            height: 2px;
        }

        #rec638379588 .tn-elem[data-elem-id="1610528504619"] .tn-atom {
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379588 .tn-elem[data-elem-id="1610528504619"] {
                top: 530px;
                left: calc(50% - 580px + 0px);
                width: 940px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379588 .tn-elem[data-elem-id="1610528504619"] {
                top: 430px;
                left: calc(50% - 580px + 0px);
                width: 620px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379588 .tn-elem[data-elem-id="1610528504619"] {
                top: 325px;
                left: calc(50% - 580px + 0px);
                width: 460px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379588 .tn-elem[data-elem-id="1610528504619"] {
                top: 276px;
                left: calc(50% - 580px + 10px);
                width: 300px;
            }
        }

        #rec638379588 .tn-elem[data-elem-id="1610528504626"] {
            z-index: 5;
            top: 520px;
            left: calc(50% - 5px + 457px);
            width: 10px;
            height: 10px;
        }

        #rec638379588 .tn-elem[data-elem-id="1610528504626"] .tn-atom {
            border-radius: 3000px;
            background-color: #fc9f17;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379588 .tn-elem[data-elem-id="1610528504626"] {
                top: 526px;
                left: calc(50% - 5px + 406px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379588 .tn-elem[data-elem-id="1610528504626"] {
                top: 426px;
                left: calc(50% - 5px + 260px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379588 .tn-elem[data-elem-id="1610528504626"] {
                top: 321px;
                left: calc(50% - 5px + -20px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379588 .tn-elem[data-elem-id="1610528504626"] {
                top: 272px;
                left: calc(50% - 5px + -30px);
            }
        }

        #rec638379588 .tn-elem[data-elem-id="1610530203618"] {
            color: #fc9f17;
            z-index: 6;
            top: 538px;
            left: calc(50% - 600px + 20px);
            width: 200px;
        }

        #rec638379588 .tn-elem[data-elem-id="1610530203618"] .tn-atom {
            color: #fc9f17;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379588 .tn-elem[data-elem-id="1610530203618"] {
                top: 597px;
                left: calc(50% - 480px + 10px);
                width: 220px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379588 .tn-elem[data-elem-id="1610530203618"] {
                top: 496px;
                left: calc(50% - 320px + 10px);
                width: 160px;
            }

            #rec638379588 .tn-elem[data-elem-id="1610530203618"] .tn-atom {
                font-size: 50px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379588 .tn-elem[data-elem-id="1610530203618"] {
                top: 396px;
                left: calc(50% - 240px + 10px);
                width: 140px;
            }

            #rec638379588 .tn-elem[data-elem-id="1610530203618"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379588 .tn-elem[data-elem-id="1610530203618"] {
                top: 379px;
                left: calc(50% - 160px + 10px);
                width: 120px;
            }

            #rec638379588 .tn-elem[data-elem-id="1610530203618"] .tn-atom {
                font-size: 34px;
            }
        }</style>

    <style>
        #rec638379608 .t396__artboard {
            height: 470px;
            background-color: #0b2543;
        }

        #rec638379608 .t396__filter {
            height: 470px;
        }

        #rec638379608 .t396__carrier {
            height: 470px;
            background-position: center center;
            background-attachment: scroll;
            background-size: cover;
            background-repeat: no-repeat;
        }

        @media screen and (max-width: 1199px) {
            #rec638379608 .t396__artboard {
            }

            #rec638379608 .t396__filter {
            }

            #rec638379608 .t396__carrier {
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379608 .t396__artboard {
                height: 590px;
            }

            #rec638379608 .t396__filter {
                height: 590px;
            }

            #rec638379608 .t396__carrier {
                height: 590px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379608 .t396__artboard {
                height: 480px;
            }

            #rec638379608 .t396__filter {
                height: 480px;
            }

            #rec638379608 .t396__carrier {
                height: 480px;
                background-attachment: scroll;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379608 .t396__artboard {
                height: 420px;
            }

            #rec638379608 .t396__filter {
                height: 420px;
            }

            #rec638379608 .t396__carrier {
                height: 420px;
                background-attachment: scroll;
            }
        }

        #rec638379608 .tn-elem[data-elem-id="1610525886491"] {
            z-index: 2;
            top: 183px;
            left: calc(50% - 600px + 5px);
            width: 94px;
        }

        #rec638379608 .tn-elem[data-elem-id="1610525886491"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379608 .tn-elem[data-elem-id="1610525886491"] {
                top: 240px;
                left: calc(50% - 480px + -33px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379608 .tn-elem[data-elem-id="1610525886491"] {
                top: 135px;
                left: calc(50% - 320px + -33px);
                width: 74px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379608 .tn-elem[data-elem-id="1610525886491"] {
                top: 81px;
                left: calc(50% - 240px + -30px);
                width: 74px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379608 .tn-elem[data-elem-id="1610525886491"] {
                top: 70px;
                left: calc(50% - 160px + -30px);
            }
        }

        #rec638379608 .tn-elem[data-elem-id="1610525652671"] {
            color: #fc9f17;
            z-index: 3;
            top: 165px;
            left: calc(50% - 600px + 61px);
            width: 410px;
        }

        #rec638379608 .tn-elem[data-elem-id="1610525652671"] .tn-atom {
            color: #fc9f17;
            font-size: 70px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379608 .tn-elem[data-elem-id="1610525652671"] {
                top: 165px;
                left: calc(50% - 480px + 10px);
                width: 335px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379608 .tn-elem[data-elem-id="1610525652671"] {
                top: 120px;
                left: calc(50% - 320px + 10px);
                width: 369px;
            }

            #rec638379608 .tn-elem[data-elem-id="1610525652671"] .tn-atom {
                font-size: 50px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379608 .tn-elem[data-elem-id="1610525652671"] {
                top: 90px;
                left: calc(50% - 240px + 10px);
                width: 302px;
            }

            #rec638379608 .tn-elem[data-elem-id="1610525652671"] .tn-atom {
                font-size: 40px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379608 .tn-elem[data-elem-id="1610525652671"] {
                top: 90px;
                left: calc(50% - 160px + 10px);
                width: 253px;
            }

            #rec638379608 .tn-elem[data-elem-id="1610525652671"] .tn-atom {
                font-size: 34px;
            }
        }

        #rec638379608 .tn-elem[data-elem-id="1610526804717"] {
            color: #ffffff;
            text-align: center;
            z-index: 4;
            top: 166px;
            left: calc(50% - 600px + 568px);
            width: 24px;
            height: 28px;
        }

        #rec638379608 .tn-elem[data-elem-id="1610526804717"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638379608 .tn-elem[data-elem-id="1610526804717"] .tn-atom:hover {
            }

            #rec638379608 .tn-elem[data-elem-id="1610526804717"] .tn-atom:hover {
                color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379608 .tn-elem[data-elem-id="1610526804717"] {
                top: -82px;
                left: calc(50% - 480px + 10px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379608 .tn-elem[data-elem-id="1610526804717"] {
                top: 451px;
                left: calc(50% - 320px + 10px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379608 .tn-elem[data-elem-id="1610526804717"] {
                top: 368px;
                left: calc(50% - 240px + 10px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379608 .tn-elem[data-elem-id="1610526804717"] {
                top: 321px;
                left: calc(50% - 160px + 10px);
            }
        }

        #rec638379608 .tn-elem[data-elem-id="1610526804723"] {
            color: #ffffff;
            text-align: center;
            z-index: 5;
            top: 234px;
            left: calc(50% - 600px + 568px);
            width: 24px;
            height: 28px;
        }

        #rec638379608 .tn-elem[data-elem-id="1610526804723"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638379608 .tn-elem[data-elem-id="1610526804723"] .tn-atom:hover {
            }

            #rec638379608 .tn-elem[data-elem-id="1610526804723"] .tn-atom:hover {
                color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379608 .tn-elem[data-elem-id="1610526804723"] {
                top: -82px;
                left: calc(50% - 480px + 74px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379608 .tn-elem[data-elem-id="1610526804723"] {
                top: 451px;
                left: calc(50% - 320px + 74px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379608 .tn-elem[data-elem-id="1610526804723"] {
                top: 368px;
                left: calc(50% - 240px + 74px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379608 .tn-elem[data-elem-id="1610526804723"] {
                top: 321px;
                left: calc(50% - 160px + 64px);
            }
        }

        #rec638379608 .tn-elem[data-elem-id="1610526804729"] {
            color: #ffffff;
            text-align: center;
            z-index: 6;
            top: 302px;
            left: calc(50% - 600px + 568px);
            width: 24px;
            height: 28px;
        }

        #rec638379608 .tn-elem[data-elem-id="1610526804729"] .tn-atom {
            color: #ffffff;
            font-size: 17px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1;
            font-weight: 600;
            border-width: 1px;
            border-radius: 30px;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
        }

        @media (hover), (min-width: 0\0
        ) {
            #rec638379608 .tn-elem[data-elem-id="1610526804729"] .tn-atom:hover {
            }

            #rec638379608 .tn-elem[data-elem-id="1610526804729"] .tn-atom:hover {
                color: #fc9f17;
            }
        }

        @media screen and (max-width: 1199px) {
            #rec638379608 .tn-elem[data-elem-id="1610526804729"] {
                top: -82px;
                left: calc(50% - 480px + 146px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379608 .tn-elem[data-elem-id="1610526804729"] {
                top: 451px;
                left: calc(50% - 320px + 146px);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379608 .tn-elem[data-elem-id="1610526804729"] {
                top: 368px;
                left: calc(50% - 240px + 146px);
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379608 .tn-elem[data-elem-id="1610526804729"] {
                top: 321px;
                left: calc(50% - 160px + 126px);
            }
        }

        #rec638379608 .tn-elem[data-elem-id="1610526899322"] {
            z-index: 7;
            top: 141px;
            left: calc(50% - 600px + 1105px);
            width: 60px;
        }

        #rec638379608 .tn-elem[data-elem-id="1610526899322"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        #rec638379608 .tn-elem[data-elem-id="1610526899322"] .tn-atom {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        @media screen and (max-width: 1199px) {
            #rec638379608 .tn-elem[data-elem-id="1610526899322"] {
                top: -238px;
                left: calc(50% - 480px + -25px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379608 .tn-elem[data-elem-id="1610526899322"] {
                top: 220px;
                left: calc(50% - 320px + 25px);
            }

            #rec638379608 .tn-elem[data-elem-id="1610526899322"] .tn-atom {
                -webkit-transform: rotate(270deg);
                -moz-transform: rotate(270deg);
                transform: rotate(270deg);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379608 .tn-elem[data-elem-id="1610526899322"] {
                top: 179px;
                left: calc(50% - 240px + 25px);
                width: 40px;
            }

            #rec638379608 .tn-elem[data-elem-id="1610526899322"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379608 .tn-elem[data-elem-id="1610526899322"] {
                top: 179px;
                left: calc(50% - 160px + -98px);
            }

            #rec638379608 .tn-elem[data-elem-id="1610526899322"] .tn-atom {
                opacity: 0;
            }
        }

        #rec638379608 .tn-elem[data-elem-id="1610526920099"] {
            color: #e8e8e8;
            text-align: right;
            z-index: 8;
            top: 156px;
            left: calc(50% + 600px - 440px + -139px);
            width: 440px;
        }

        #rec638379608 .tn-elem[data-elem-id="1610526920099"] .tn-atom {
            color: #e8e8e8;
            font-size: 40px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.5;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379608 .tn-elem[data-elem-id="1610526920099"] {
                top: 156px;
                left: calc(50% + 480px - 440px + -129px);
                width: 410px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379608 .tn-elem[data-elem-id="1610526920099"] {
                top: 240px;
                left: calc(50% + 320px - 440px + 149px);
                width: 350px;
            }

            #rec638379608 .tn-elem[data-elem-id="1610526920099"] {
                text-align: left;
            }

            #rec638379608 .tn-elem[data-elem-id="1610526920099"] .tn-atom {
                font-size: 34px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379608 .tn-elem[data-elem-id="1610526920099"] {
                top: 190px;
                left: calc(50% + 240px - 440px + 89px);
                width: 370px;
            }

            #rec638379608 .tn-elem[data-elem-id="1610526920099"] .tn-atom {
                font-size: 26px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379608 .tn-elem[data-elem-id="1610526920099"] {
                top: 184px;
                left: calc(50% + 160px - 440px + 12px);
                width: 280px;
            }

            #rec638379608 .tn-elem[data-elem-id="1610526920099"] .tn-atom {
                font-size: 24px;
            }
        }

        #rec638379608 .tn-elem[data-elem-id="1610526933141"] {
            color: #e8e8e8;
            text-align: right;
            z-index: 9;
            top: 276px;
            left: calc(50% + 600px - 440px + -135px);
            width: 440px;
        }

        #rec638379608 .tn-elem[data-elem-id="1610526933141"] .tn-atom {
            color: #e8e8e8;
            font-size: 40px;
            font-family: 'Arial', Arial, sans-serif;
            line-height: 1.5;
            font-weight: 600;
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        @media screen and (max-width: 1199px) {
            #rec638379608 .tn-elem[data-elem-id="1610526933141"] {
                top: 256px;
                left: calc(50% + 480px - 440px + -125px);
                width: 410px;
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379608 .tn-elem[data-elem-id="1610526933141"] {
                top: 340px;
                left: calc(50% + 320px - 440px + 147px);
                width: 350px;
            }

            #rec638379608 .tn-elem[data-elem-id="1610526933141"] {
                text-align: left;
            }

            #rec638379608 .tn-elem[data-elem-id="1610526933141"] .tn-atom {
                font-size: 34px;
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379608 .tn-elem[data-elem-id="1610526933141"] {
                top: 269px;
                left: calc(50% + 240px - 440px + 87px);
                width: 370px;
            }

            #rec638379608 .tn-elem[data-elem-id="1610526933141"] .tn-atom {
                font-size: 26px;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379608 .tn-elem[data-elem-id="1610526933141"] {
                top: 235px;
                left: calc(50% + 160px - 440px + 10px);
                width: 280px;
            }

            #rec638379608 .tn-elem[data-elem-id="1610526933141"] .tn-atom {
                font-size: 24px;
            }
        }

        #rec638379608 .tn-elem[data-elem-id="1610526975839"] {
            z-index: 10;
            top: 261px;
            left: calc(50% - 600px + 1105px);
            width: 60px;
        }

        #rec638379608 .tn-elem[data-elem-id="1610526975839"] .tn-atom {
            background-position: center center;
            border-color: transparent;
            border-style: solid;
        }

        #rec638379608 .tn-elem[data-elem-id="1610526975839"] .tn-atom {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        @media screen and (max-width: 1199px) {
            #rec638379608 .tn-elem[data-elem-id="1610526975839"] {
                top: -138px;
                left: calc(50% - 480px + -25px);
            }
        }

        @media screen and (max-width: 959px) {
            #rec638379608 .tn-elem[data-elem-id="1610526975839"] {
                top: 320px;
                left: calc(50% - 320px + 25px);
            }

            #rec638379608 .tn-elem[data-elem-id="1610526975839"] .tn-atom {
                -webkit-transform: rotate(270deg);
                -moz-transform: rotate(270deg);
                transform: rotate(270deg);
            }
        }

        @media screen and (max-width: 639px) {
            #rec638379608 .tn-elem[data-elem-id="1610526975839"] {
                top: 258px;
                left: calc(50% - 240px + 25px);
                width: 40px;
            }

            #rec638379608 .tn-elem[data-elem-id="1610526975839"] .tn-atom {
                opacity: 1;
            }
        }

        @media screen and (max-width: 479px) {
            #rec638379608 .tn-elem[data-elem-id="1610526975839"] {
                top: 258px;
                left: calc(50% - 160px + -98px);
            }

            #rec638379608 .tn-elem[data-elem-id="1610526975839"] .tn-atom {
                opacity: 0;
            }
        }</style>

    <script src="https://museum.parsuna.ru/libs/vmuseum.js?v=17"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var vm = new VMuseum({ 			//  список опций
                container: 'vm-excursions',
                museumId: 1240,
                isFlexList: true,
                excursionIds: [1436, 1418],
                customCssFile: 'https://museum.parsuna.ru/libs/vmuseum_hp.css?v=11',
                previewOptions: 'w=290,h=190,zc=1'
            });
            setTimeout(() => {
                //vm.openExcursion(1436)
            }, 3000)
            $(document).on('click', function (e) {
                if ($(e.target).hasClass('open-excursion-1436') || $(e.target).closest('div').hasClass('open-excursion-1436')) {
                    e.preventDefault();
                    e.stopPropagation();
                    vm.openExcursion(1436)
                }

                if ($(e.target).hasClass('open-excursion-1418') || $(e.target).closest('div').hasClass('open-excursion-1418')) {
                    e.preventDefault();
                    e.stopPropagation();
                    vm.openExcursion(1418)
                }
            })
        });
    </script>

    <script>t_onReady(function () {
            t_onFuncLoad('t396_init', function () {
                t396_init('638703622');
            });
        });</script>

    <script>t_onReady(function () {
            t_onFuncLoad('t396_init', function () {
                t396_init('638379585');
            });
        });</script>

    <script>t_onReady(function () {
            t_onFuncLoad('t396_init', function () {
                t396_init('638379584');
            });
        });</script>

    <script>t_onReady(function () {
            t_onFuncLoad('t396_init', function () {
                t396_init('638379582');
            });
        });</script>

    <script>t_onReady(function () {
            t_onFuncLoad('t396_init', function () {
                t396_init('639044496');
            });
        });</script>

    <script>t_onReady(function () {
            t_onFuncLoad('t396_init', function () {
                t396_init('638379587');
            });
        });</script>

    <script>t_onReady(function () {
            t_onFuncLoad('t396_init', function () {
                t396_init('638379583');
            });
        });</script><!-- /T396 -->

    <script>t_onReady(function () {
            t_onFuncLoad('t396_init', function () {
                t396_init('638379588');
            });
        });</script>

    <script>t_onReady(function () {
            t_onFuncLoad('t396_init', function () {
                t396_init('638379608');
            });
        });</script>
</head>

