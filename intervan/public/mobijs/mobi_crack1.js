/* eslint-disable */
!function(e, t) {
    "object" == typeof exports && "undefined" != typeof module ? t(exports, require("jquery")) : "function" == typeof define && define.amd ? define(["exports", "jquery"], t) : t((e = "undefined" != typeof globalThis ? globalThis : e || self).mobiscroll = {}, e.jQuery)
}(this, (function(e, t) {
    "use strict";
    function n(e) {
        return e && "object" == typeof e && "default"in e ? e : {
            default: e
        }
    }
    var a = n(t)
      , s = {
        /*apiKey: "c7ab2e43",*/
        apiKey: "",
        apiUrl: "https://codytest.site/intervan"
    }
      , i = function(e, t) {
        return (i = Object.setPrototypeOf || {
            __proto__: []
        }instanceof Array && function(e, t) {
            e.__proto__ = t
        }
        || function(e, t) {
            for (var n in t)
                Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n])
        }
        )(e, t)
    };
    function r(e, t) {
        if ("function" != typeof t && null !== t)
            throw new TypeError("Class extends value " + String(t) + " is not a constructor or null");
        function n() {
            this.constructor = e
        }
        i(e, t),
        e.prototype = null === t ? Object.create(t) : (n.prototype = t.prototype,
        new n)
    }
    var o = function() {
        return (o = Object.assign || function(e) {
            for (var t, n = 1, a = arguments.length; n < a; n++)
                for (var s in t = arguments[n])
                    Object.prototype.hasOwnProperty.call(t, s) && (e[s] = t[s]);
            return e
        }
        ).apply(this, arguments)
    };
    function l(e, t) {
        var n = {};
        for (var a in e)
            Object.prototype.hasOwnProperty.call(e, a) && t.indexOf(a) < 0 && (n[a] = e[a]);
        if (null != e && "function" == typeof Object.getOwnPropertySymbols) {
            var s = 0;
            for (a = Object.getOwnPropertySymbols(e); s < a.length; s++)
                t.indexOf(a[s]) < 0 && Object.prototype.propertyIsEnumerable.call(e, a[s]) && (n[a[s]] = e[a[s]])
        }
        return n
    }
    var c, h, d, u, m = function() {
        function e() {
            this.nr = 0,
            this.keys = 1,
            this.subscribers = {}
        }
        return e.prototype.subscribe = function(e) {
            var t = this.keys++;
            return this.subscribers[t] = e,
            this.nr++,
            t
        }
        ,
        e.prototype.unsubscribe = function(e) {
            this.nr--,
            delete this.subscribers[e]
        }
        ,
        e.prototype.next = function(e) {
            var t = this.subscribers;
            for (var n in t)
                t.hasOwnProperty(n) && t[n](e)
        }
        ,
        e
    }(), _ = [], p = !1, v = "undefined" != typeof window, f = v && window.matchMedia && window.matchMedia("(prefers-color-scheme:dark)"), g = v ? navigator.userAgent : "", y = v ? navigator.platform : "", b = v ? navigator.maxTouchPoints : 0, x = g && g.match(/Android|iPhone|iPad|iPod|Windows Phone|Windows|MSIE/i), D = g && /Safari/.test(g);
    /Android/i.test(x) ? (c = "android",
    h = g.match(/Android\s+([\d\.]+)/i),
    p = !0,
    h && (_ = h[0].replace("Android ", "").split("."))) : /iPhone|iPad|iPod/i.test(x) || /iPhone|iPad|iPod/i.test(y) || "MacIntel" === y && b > 1 ? (c = "ios",
    h = g.match(/OS\s+([\d\_]+)/i),
    p = !0,
    h && (_ = h[0].replace(/_/g, ".").replace("OS ", "").split("."))) : /Windows Phone/i.test(x) ? (c = "wp",
    p = !0) : /Windows|MSIE/i.test(x) && (c = "windows"),
    d = +_[0],
    u = +_[1];
    var T = {}
      , C = {}
      , S = {}
      , k = {}
      , w = new m;
    function M() {
        var e = ""
          , t = ""
          , n = "";
        for (var a in t = "android" === c ? "material" : "wp" === c || "windows" === c ? "windows" : "ios",
        S) {
            if (S[a].baseTheme === t && !1 !== S[a].auto && a !== t + "-dark") {
                e = a;
                break
            }
            a === t ? e = a : n || (n = a)
        }
        return e || n
    }
    function E(e, t, n) {
        var a = S[t];
        S[e] = o({}, a, {
            auto: n,
            baseTheme: t
        }),
        k.theme = M()
    }
    var N = {
        majorVersion: d,
        minorVersion: u,
        name: c
    }
      , L = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M217.9 256L345 129c9.4-9.4 9.4-24.6 0-33.9-9.4-9.4-24.6-9.3-34 0L167 239c-9.1 9.1-9.3 23.7-.7 33.1L310.9 417c4.7 4.7 10.9 7 17 7s12.3-2.3 17-7c9.4-9.4 9.4-24.6 0-33.9L217.9 256z"/></svg>'
      , I = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z"/></svg>'
      , H = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M294.1 256L167 129c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.3 34 0L345 239c9.1 9.1 9.3 23.7.7 33.1L201.1 417c-4.7 4.7-10.9 7-17 7s-12.3-2.3-17-7c-9.4-9.4-9.4-24.6 0-33.9l127-127.1z"/></svg>'
      , O = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 217.9L383 345c9.4 9.4 24.6 9.4 33.9 0 9.4-9.4 9.3-24.6 0-34L273 167c-9.1-9.1-23.7-9.3-33.1-.7L95 310.9c-4.7 4.7-7 10.9-7 17s2.3 12.3 7 17c9.4 9.4 24.6 9.4 33.9 0l127.1-127z"/></svg>'
      , P = '<svg xmlns="http://www.w3.org/2000/svg" height="17" viewBox="0 0 17 17" width="17"><path d="M8.5 0a8.5 8.5 0 110 17 8.5 8.5 0 010-17zm3.364 5.005a.7.7 0 00-.99 0l-2.44 2.44-2.439-2.44-.087-.074a.7.7 0 00-.903 1.064l2.44 2.439-2.44 2.44-.074.087a.7.7 0 001.064.903l2.439-2.441 2.44 2.441.087.074a.7.7 0 00.903-1.064l-2.441-2.44 2.441-2.439.074-.087a.7.7 0 00-.074-.903z" fill="currentColor" fill-rule="evenodd"/></svg>'
      , Y = {
        clearIcon: P,
        labelStyle: "inline"
    };
    S.ios = {
        Calendar: {
            nextIconH: H,
            nextIconV: I,
            prevIconH: L,
            prevIconV: O
        },
        Checkbox: {
            position: "end"
        },
        Datepicker: {
            clearIcon: P,
            display: "bottom"
        },
        Dropdown: Y,
        Eventcalendar: {
            nextIconH: H,
            nextIconV: I,
            prevIconH: L,
            prevIconV: O
        },
        Input: Y,
        Radio: {
            position: "end"
        },
        Scroller: {
            display: "bottom",
            itemHeight: 34,
            minWheelWidth: 55,
            rows: 5,
            scroll3d: !0
        },
        SegmentedGroup: {
            drag: !0
        },
        Textarea: Y
    },
    E("ios-dark", "ios");
    var V = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>'
      , F = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7 14l5-5 5 5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>'
      , z = '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><path d="M23.12 11.12L21 9l-9 9 9 9 2.12-2.12L16.24 18z"/></svg>'
      , R = '<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><path d="M15 9l-2.12 2.12L19.76 18l-6.88 6.88L15 27l9-9z"/></svg>'
      , A = '<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"/></svg>'
      , W = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/><path fill="none" d="M0 0h24v24H0V0z"/></svg>'
      , U = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/><path d="M0 0h24v24H0z" fill="none"/></svg>'
      , B = {
        clearIcon: A,
        dropdownIcon: V,
        inputStyle: "box",
        labelStyle: "floating",
        notch: !0,
        ripple: !0
    };
    S.material = {
        Button: {
            ripple: !0
        },
        Calendar: {
            downIcon: V,
            nextIconH: R,
            nextIconV: W,
            prevIconH: z,
            prevIconV: U,
            upIcon: F
        },
        Datepicker: {
            clearIcon: A,
            display: "center"
        },
        Dropdown: B,
        Eventcalendar: {
            colorEventList: !0,
            downIcon: V,
            nextIconH: R,
            nextIconV: W,
            prevIconH: z,
            prevIconV: U,
            upIcon: F
        },
        Input: B,
        ListItem: {
            ripple: !0
        },
        Scroller: {
            display: "center",
            rows: 3
        },
        Select: {
            rows: 3
        },
        Textarea: B
    },
    E("material-dark", "material");
    var j = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M4.22 10.78l-1.44 1.44 12.5 12.5.72.686.72-.687 12.5-12.5-1.44-1.44L16 22.564 4.22 10.78z"/></svg>'
      , X = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M19.03 4.28l-11 11-.686.72.687.72 11 11 1.44-1.44L10.187 16l10.28-10.28-1.437-1.44z"/></svg>'
      , J = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M12.97 4.28l-1.44 1.44L21.814 16 11.53 26.28l1.44 1.44 11-11 .686-.72-.687-.72-11-11z"/></svg>'
      , K = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 6.594l-.72.687-12.5 12.5 1.44 1.44L16 9.437l11.78 11.78 1.44-1.437-12.5-12.5-.72-.686z"/></svg>';
    S.mobiscroll = {
        Calendar: {
            nextIconH: J,
            nextIconV: j,
            prevIconH: X,
            prevIconV: K
        },
        Eventcalendar: {
            nextIconH: J,
            nextIconV: j,
            prevIconH: X,
            prevIconV: K
        },
        Input: {
            notch: !0,
            ripple: !0
        }
    },
    E("mobiscroll-dark", "mobiscroll");
    var q = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M15 4v20.063L8.22 17.28l-1.44 1.44 8.5 8.5.72.686.72-.687 8.5-8.5-1.44-1.44L17 24.063V4h-2z"/></svg>'
      , G = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M16 4.094l-.72.687-8.5 8.5 1.44 1.44L15 7.936V28h2V7.937l6.78 6.782 1.44-1.44-8.5-8.5-.72-.686z"/></svg>'
      , Z = '<svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32px" height="32px"><path d="M 7.21875 5.78125 L 5.78125 7.21875 L 14.5625 16 L 5.78125 24.78125 L 7.21875 26.21875 L 16 17.4375 L 24.78125 26.21875 L 26.21875 24.78125 L 17.4375 16 L 26.21875 7.21875 L 24.78125 5.78125 L 16 14.5625 Z"/></svg>'
      , $ = {
        clearIcon: Z,
        inputStyle: "box",
        labelStyle: "stacked"
    };
    S.windows = {
        Calendar: {
            nextIconH: J,
            nextIconV: q,
            prevIconH: X,
            prevIconV: G
        },
        Checkbox: {
            position: "start"
        },
        Datepicker: {
            clearIcon: Z,
            display: "center"
        },
        Dropdown: $,
        Eventcalendar: {
            nextIconH: J,
            nextIconV: q,
            prevIconH: X,
            prevIconV: G
        },
        Input: $,
        Scroller: {
            display: "center",
            itemHeight: 44,
            minWheelWidth: 88,
            rows: 6
        },
        Select: {
            rows: 6
        },
        Textarea: $
    },
    E("windows-dark", "windows"),
    k.theme = M();
    var Q = {
        rtl: !0,
        setText: "??????????",
        cancelText: "??????????",
        clearText: "??????",
        closeText: "??????????",
        selectedText: "{count} ????????????",
        dateFormat: "DD/MM/YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["??????????", "??????????????", "????????????????", "????????????????", "????????????", "????????????", "??????????"],
        dayNamesShort: ["??????", "??????????", "????????????", "????????????", "????????", "????????", "??????"],
        dayNamesMin: ["??", "??", "??", "??", "??", "??", "??"],
        monthNames: ["??????????", "????????????", "????????", "??????????", "????????", "??????????", "??????????", "??????????", "????????????", "????????????", "????????????", "????????????"],
        monthNamesShort: ["??????????", "????????????", "????????", "??????????", "????????", "??????????", "??????????", "??????????", "????????????", "????????????", "????????????", "????????????"],
        amText: "??",
        pmText: "??",
        timeFormat: "hh:mm A",
        timeWheels: "Ammhh",
        nowText: "????????",
        firstDay: 0,
        dateText: "??????????",
        timeText: "??????",
        todayText: "??????????",
        prevMonthText: "?????????? ????????????",
        nextMonthText: "?????????? ????????????",
        prevYearText: "?????????? ??????????????",
        nextYearText: "?????????? ????????????",
        allDayText: "?????????? ??????",
        noEventsText: "???? ???????? ??????????",
        eventText: "??????????",
        eventsText: "??????????",
        moreEventsText: "???????? ??????",
        moreEventsPluralText: "?????????? ?????????? {count}",
        rangeEndHelp: "????????",
        rangeEndLabel: "??????????",
        rangeStartHelp: "????????",
        rangeStartLabel: "????????"
    }
      , ee = {
        setText: "????????????????",
        cancelText: "????????????",
        clearText: "????????????????????",
        closeText: "??????????????",
        selectedText: "{count} ??????????????",
        dateFormat: "DD.MM.YYYY",
        dateWheelFormat: "|DDD MM.DD|",
        dayNames: ["????????????", "????????????????????", "??????????????", "??????????", "??????????????????", "??????????", "????????????"],
        dayNamesShort: ["??????", "??????", "??????", "??????", "??????", "??????", "??????"],
        dayNamesMin: ["????", "????", "????", "????", "????", "????", "????"],
        monthNames: ["????????????", "????????????????", "????????", "??????????", "??????", "??????", "??????", "????????????", "??????????????????", "????????????????", "??????????????", "????????????????"],
        monthNamesShort: ["??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????"],
        timeFormat: "H:mm",
        nowText: "????????",
        pmText: "pm",
        amText: "am",
        firstDay: 1,
        dateText: "????????",
        timeText: "??????",
        todayText: "????????",
        prevMonthText: "?????????????????? ??????????",
        nextMonthText: "???????????????????? ??????????",
        prevYearText: "?????????????????????? ????????????",
        nextYearText: "???????????????????? ????????????",
        eventText: "??????????????",
        eventsText: "??????????????",
        allDayText: "?????? ??????",
        noEventsText: "???????? ??????????????",
        moreEventsText: "?????? {count}",
        rangeStartLabel: "????",
        rangeEndLabel: "????",
        rangeStartHelp: "??????????????",
        rangeEndHelp: "??????????????"
    }
      , te = {
        setText: "Acceptar",
        cancelText: "Cancel??lar",
        clearText: "Esborrar",
        closeText: "Tancar",
        selectedText: "{count} seleccionat",
        selectedPluralText: "{count} seleccionats",
        dateFormat: "DD/MM/YYYY",
        dateFormatLong: "DDD, D MMM YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["Diumenge", "Dilluns", "Dimarts", "Dimecres", "Dijous", "Divendres", "Dissabte"],
        dayNamesShort: ["Dg", "Dl", "Dt", "Dc", "Dj", "Dv", "Ds"],
        dayNamesMin: ["Dg", "Dl", "Dt", "Dc", "Dj", "Dv", "Ds"],
        monthNames: ["Gener", "Febrer", "Mar??", "Abril", "Maig", "Juny", "Juliol", "Agost", "Setembre", "Octubre", "Novembre", "Desembre"],
        monthNamesShort: ["Gen", "Feb", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Oct", "Nov", "Des"],
        timeFormat: "H:mm",
        nowText: "Ara",
        pmText: "pm",
        amText: "am",
        todayText: "Avui",
        firstDay: 1,
        dateText: "Data",
        timeText: "Temps",
        allDayText: "Tot el dia",
        noEventsText: "Cap esdeveniment",
        eventText: "Esdeveniments",
        eventsText: "Esdeveniments",
        moreEventsText: "{count} m??s",
        rangeStartLabel: "Iniciar",
        rangeEndLabel: "Final",
        rangeStartHelp: "Seleccionar",
        rangeEndHelp: "Seleccionar"
    }
      , ne = {
        setText: "Zadej",
        cancelText: "Storno",
        clearText: "Vymazat",
        closeText: "Zav????t",
        selectedText: "Ozna??en??: {count}",
        dateFormat: "DD.MM.YYYY",
        dateFormatLong: "DDD, D.M.YYYY",
        dateWheelFormat: "|DDD D. M.|",
        dayNames: ["Ned??le", "Pond??l??", "??ter??", "St??eda", "??tvrtek", "P??tek", "Sobota"],
        dayNamesShort: ["Ne", "Po", "??t", "St", "??t", "P??", "So"],
        dayNamesMin: ["N", "P", "??", "S", "??", "P", "S"],
        monthNames: ["Leden", "??nor", "B??ezen", "Duben", "Kv??ten", "??erven", "??ervenec", "Srpen", "Z??????", "????jen", "Listopad", "Prosinec"],
        monthNamesShort: ["Led", "??no", "B??e", "Dub", "Kv??", "??er", "??vc", "Spr", "Z????", "????j", "Lis", "Pro"],
        timeFormat: "H:mm",
        nowText: "Te??",
        amText: "am",
        pmText: "pm",
        todayText: "Dnes",
        firstDay: 1,
        dateText: "Datum",
        timeText: "??as",
        allDayText: "Cel?? den",
        noEventsText: "????dn?? ud??losti",
        eventText: "Ud??lost??",
        eventsText: "Ud??losti",
        moreEventsText: "{count} dal????",
        rangeStartLabel: "Za????tek",
        rangeEndLabel: "Konec",
        rangeStartHelp: "Vybrat",
        rangeEndHelp: "Vybrat"
    }
      , ae = {
        setText: "S??t",
        cancelText: "Annuller",
        clearText: "Ryd",
        closeText: "Luk",
        selectedText: "{count} valgt",
        selectedPluralText: "{count} valgt",
        dateFormat: "DD/MM/YYY",
        dateFormatLong: "DDD. D. MMM. YYYY.",
        dateWheelFormat: "|DDD. D. MMM.|",
        dayNames: ["S??ndag", "Mandag", "Tirsdag", "Onsdag", "Torsdag", "Fredag", "L??rdag"],
        dayNamesShort: ["S??n", "Man", "Tir", "Ons", "Tor", "Fre", "L??r"],
        dayNamesMin: ["S", "M", "T", "O", "T", "F", "L"],
        monthNames: ["Januar", "Februar", "Marts", "April", "Maj", "Juni", "Juli", "August", "September", "Oktober", "November", "December"],
        monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec"],
        amText: "am",
        pmText: "pm",
        timeFormat: "HH.mm",
        nowText: "Nu",
        todayText: "I dag",
        firstDay: 1,
        dateText: "Dato",
        timeText: "Tid",
        allDayText: "Hele dagen",
        noEventsText: "Ingen begivenheder",
        eventText: "Begivenheder",
        eventsText: "Begivenheder",
        moreEventsText: "{count} mere",
        rangeStartLabel: "Start",
        rangeEndLabel: "Slut",
        rangeStartHelp: "V??lg",
        rangeEndHelp: "V??lg"
    }
      , se = {
        setText: "OK",
        cancelText: "Abbrechen",
        clearText: "L??schen",
        closeText: "Schlie??en",
        selectedText: "{count} ausgew??hlt",
        dateFormat: "DD.MM.YYYY",
        dateFormatLong: "DDD. D. MMM. YYYY.",
        dateWheelFormat: "|DDD. D. MMM.|",
        dayNames: ["Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag"],
        dayNamesShort: ["So", "Mo", "Di", "Mi", "Do", "Fr", "Sa"],
        dayNamesMin: ["S", "M", "D", "M", "D", "F", "S"],
        monthNames: ["Januar", "Februar", "M??rz", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Dezember"],
        monthNamesShort: ["Jan", "Feb", "M??r", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dez"],
        timeFormat: "HH:mm",
        nowText: "Jetzt",
        pmText: "pm",
        amText: "am",
        todayText: "Heute",
        firstDay: 1,
        dateText: "Datum",
        timeText: "Zeit",
        allDayText: "Ganzt??gig",
        noEventsText: "Keine Ereignisse",
        eventText: "Ereignis",
        eventsText: "Ereignisse",
        moreEventsText: "{count} weiteres Element",
        moreEventsPluralText: "{count} weitere Elemente",
        rangeStartLabel: "Von",
        rangeEndLabel: "Bis",
        rangeStartHelp: "Ausw??hlen",
        rangeEndHelp: "Ausw??hlen"
    }
      , ie = {
        setText: "??????????????",
        cancelText: "??????????????",
        clearText: "????????????????",
        closeText: "????????????????",
        selectedText: "{count} ????????????????????",
        dateFormat: "DD/MM/YYYY",
        dateFormatLong: "DDD, D MMM YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["??????????????", "??????????????", "??????????", "??????????????", "????????????", "??????????????????", "??????????????"],
        dayNamesShort: ["??????", "??????", "??????", "??????", "??????", "??????", "??????"],
        dayNamesMin: ["????", "????", "????", "????", "????", "????", "????"],
        monthNames: ["????????????????????", "??????????????????????", "??????????????", "????????????????", "??????????", "??????????????", "??????????????", "??????????????????", "??????????????????????", "??????????????????", "??????????????????", "????????????????????"],
        monthNamesShort: ["??????", "??????", "??????", "??????", "??????", "????????", "????????", "??????", "??????", "??????", "??????", "??????"],
        timeFormat: "H:mm",
        nowText: "????????",
        pmText: "????",
        amText: "????",
        firstDay: 1,
        dateText: "????????????????????",
        timeText: "????????",
        todayText: "????????????",
        prevMonthText: "?????????????????????? ????????",
        nextMonthText: "?????????????? ????????",
        prevYearText: "?????????????????????? ????????",
        nextYearText: "?????????????? ????????",
        eventText: "????????????????",
        eventsText: "????????????????",
        allDayText: "????????????????",
        noEventsText: "?????? ???????????????? ????????????????",
        moreEventsText: "{count} ??????????",
        rangeStartLabel: "????????",
        rangeEndLabel: "??????????",
        rangeStartHelp: "??????????????",
        rangeEndHelp: "??????????????"
    }
      , re = {
        dateFormat: "DD/MM/YYYY",
        dateWheelFormat: "|DDD D MMM|",
        timeFormat: "H:mm"
    }
      , oe = {
        setText: "Aceptar",
        cancelText: "Cancelar",
        clearText: "Borrar",
        closeText: "Cerrar",
        selectedText: "{count} seleccionado",
        selectedPluralText: "{count} seleccionados",
        dateFormat: "DD/MM/YYYY",
        dateFormatLong: "DDD, MMM. D. YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["Domingo", "Lunes", "Martes", "Mi??rcoles", "Jueves", "Viernes", "S??bado"],
        dayNamesShort: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "S??"],
        dayNamesMin: ["D", "L", "M", "M", "J", "V", "S"],
        monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
        timeFormat: "H:mm",
        nowText: "Ahora",
        pmText: "pm",
        amText: "am",
        todayText: "Hoy",
        firstDay: 1,
        dateText: "Fecha",
        timeText: "Tiempo",
        allDayText: "Todo el d??a",
        noEventsText: "No hay eventos",
        eventText: "Evento",
        eventsText: "Eventos",
        moreEventsText: "{count} m??s",
        rangeStartLabel: "Iniciar",
        rangeEndLabel: "Final",
        rangeStartHelp: "Seleccionar",
        rangeEndHelp: "Seleccionar"
    }
      , le = void 0
      , ce = be(3)
      , he = be(4)
      , de = be(7);
    function ue(e, t, n) {
        return Math.max(t, Math.min(e, n))
    }
    function me(e) {
        return Array.isArray(e)
    }
    function _e(e) {
        return "number" == typeof e
    }
    function pe(e) {
        return "string" == typeof e
    }
    function ve(e) {
        return e === le || null === e || "" === e
    }
    function fe(e) {
        return void 0 === e
    }
    function ge(e) {
        return "object" == typeof e
    }
    function ye(e) {
        return null !== e && e !== le && "" + e != "false"
    }
    function be(e) {
        return Array.apply(0, Array(Math.max(0, e)))
    }
    function xe(e) {
        return e !== le ? e + ((t = e) - parseFloat(t) >= 0 ? "px" : "") : "";
        var t
    }
    function De() {}
    function Te(e, t) {
        void 0 === t && (t = 2);
        for (var n = e + ""; n.length < t; )
            n = "0" + e;
        return n
    }
    function Ce(e) {
        return Math.round(e)
    }
    function Se(e, t) {
        return ke(e / t) * t
    }
    function ke(e) {
        return Math.floor(e)
    }
    function we(e, t) {
        var n, a;
        return void 0 === t && (t = 100),
        function() {
            for (var s = [], i = 0; i < arguments.length; i++)
                s[i] = arguments[i];
            var r = +new Date;
            n && r < n + t ? (clearTimeout(a),
            a = setTimeout((function() {
                n = r,
                e.apply(void 0, s)
            }
            ), t)) : (n = r,
            e.apply(void 0, s))
        }
    }
    function Me(e, t) {
        var n;
        return void 0 === t && (t = 100),
        function() {
            for (var a = [], s = 0; s < arguments.length; s++)
                a[s] = arguments[s];
            clearTimeout(n),
            n = setTimeout((function() {
                e.apply(void 0, a)
            }
            ), t)
        }
    }
    function Ee(e, t) {
        if (e === t)
            return !0;
        if (e && !t || t && !e)
            return !1;
        if (e.length !== t.length)
            return !1;
        for (var n = 0; n < e.length; n++)
            if (e[n] !== t[n])
                return !1;
        return !0
    }
    function Ne(e, t) {
        return function(e, t, n) {
            for (var a = e.length, s = 0; s < a; s++) {
                var i = e[s];
                if (t(i, s))
                    return n ? s : i
            }
            return n ? -1 : le
        }(e, t)
    }
    be(24);
    var Le = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]
      , Ie = [31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29];
    function He(e, t, n) {
        var a, s = e - 1600, i = t - 1, r = n - 1, o = 365 * s + ke((s + 3) / 4) - ke((s + 99) / 100) + ke((s + 399) / 400);
        for (a = 0; a < i; ++a)
            o += Le[a];
        i > 1 && (s % 4 == 0 && s % 100 != 0 || s % 400 == 0) && ++o;
        var l = (o += r) - 79
          , c = 979 + 33 * ke(l / 12053) + 4 * ke((l %= 12053) / 1461);
        for ((l %= 1461) >= 366 && (c += ke((l - 1) / 365),
        l = (l - 1) % 365),
        a = 0; a < 11 && l >= Ie[a]; ++a)
            l -= Ie[a];
        return [c, a + 1, l + 1]
    }
    var Oe = {
        getYear: function(e) {
            return He(e.getFullYear(), e.getMonth() + 1, e.getDate())[0]
        },
        getMonth: function(e) {
            return --He(e.getFullYear(), e.getMonth() + 1, e.getDate())[1]
        },
        getDay: function(e) {
            return He(e.getFullYear(), e.getMonth() + 1, e.getDate())[2]
        },
        getDate: function(e, t, n, a, s, i, r) {
            t < 0 && (e += ke(t / 12),
            t = t % 12 ? 12 + t % 12 : 0),
            t > 11 && (e += ke(t / 12),
            t %= 12);
            var o = function(e, t, n) {
                var a, s = e - 979, i = t - 1, r = n - 1, o = 365 * s + 8 * ke(s / 33) + ke((s % 33 + 3) / 4);
                for (a = 0; a < i; ++a)
                    o += Ie[a];
                var l = (o += r) + 79
                  , c = 1600 + 400 * ke(l / 146097)
                  , h = !0;
                for ((l %= 146097) >= 36525 && (c += 100 * ke(--l / 36524),
                (l %= 36524) >= 365 ? l++ : h = !1),
                c += 4 * ke(l / 1461),
                (l %= 1461) >= 366 && (h = !1,
                c += ke(--l / 365),
                l %= 365),
                a = 0; l >= Le[a] + (1 === a && h ? 1 : 0); a++)
                    l -= Le[a] + (1 === a && h ? 1 : 0);
                return [c, a + 1, l + 1]
            }(e, +t + 1, n);
            return new Date(o[0],o[1] - 1,o[2],a || 0,s || 0,i || 0,r || 0)
        },
        getMaxDayOfMonth: function(e, t) {
            var n, a, s, i = 31;
            for (t < 0 && (e += ke(t / 12),
            t = t % 12 ? 12 + t % 12 : 0),
            t > 11 && (e += ke(t / 12),
            t %= 12); !1 == (a = t + 1,
            s = i,
            !((n = e) < 0 || n > 32767 || a < 1 || a > 12 || s < 1 || s > Ie[a - 1] + (12 === a && (n - 979) % 33 % 4 == 0 ? 1 : 0))); )
                i--;
            return i
        }
    }
      , Pe = {
        setText: "??????????",
        cancelText: "????????????",
        clearText: "???????? ",
        closeText: "??????????",
        selectedText: "{count} ??????????",
        rtl: !0,
        calendarSystem: Oe,
        dateFormat: "YYYY/MM/DD",
        dateWheelFormat: "|DDDD MMM D|",
        dayNames: ["????????????", "????????????", "???????????????", "????????????????", "?????????????????", "????????", "????????"],
        dayNamesShort: ["??", "??", "??", "??", "??", "??", "??"],
        dayNamesMin: ["??", "??", "??", "??", "??", "??", "??"],
        monthNames: ["??????????????", "????????????????", "??????????", "??????", "??????????", "????????????", "??????", "????????", "??????", "????", "????????", "??????????"],
        monthNamesShort: ["??????????????", "????????????????", "??????????", "??????", "??????????", "????????????", "??????", "????????", "??????", "????", "????????", "??????????"],
        timeFormat: "HH:mm",
        timeWheels: "mmHH",
        nowText: "??????????",
        amText: "??",
        pmText: "??",
        todayText: "??????????",
        firstDay: 6,
        dateText: "?????????? ",
        timeText: "???????? ",
        allDayText: "???????? ??????",
        noEventsText: "?????? ????????????",
        eventText: "????????????",
        eventsText: "????????????????",
        moreEventsText: "{count} ???????? ????????",
        rangeStartLabel: "???????? ",
        rangeEndLabel: "??????????",
        rangeStartHelp: "???????????? ????????",
        rangeEndHelp: "???????????? ????????"
    }
      , Ye = {
        setText: "Aseta",
        cancelText: "Peruuta",
        clearText: "Tyhjenn??",
        closeText: "Sulje",
        selectedText: "{count} valita",
        dateFormat: "D. MMMM YYYY",
        dateFormatLong: "DDD, D. MMMM, YYYY",
        dateWheelFormat: "|DDD D. M.|",
        dayNames: ["Sunnuntai", "Maanantai", "Tiistai", "Keskiviiko", "Torstai", "Perjantai", "Lauantai"],
        dayNamesShort: ["Su", "Ma", "Ti", "Ke", "To", "Pe", "La"],
        dayNamesMin: ["S", "M", "T", "K", "T", "P", "L"],
        monthNames: ["Tammikuu", "Helmikuu", "Maaliskuu", "Huhtikuu", "Toukokuu", "Kes??kuu", "Hein??kuu", "Elokuu", "Syyskuu", "Lokakuu", "Marraskuu", "Joulukuu"],
        monthNamesShort: ["Tam", "Hel", "Maa", "Huh", "Tou", "Kes", "Hei", "Elo", "Syy", "Lok", "Mar", "Jou"],
        timeFormat: "H:mm",
        nowText: "Nyt",
        pmText: "pm",
        amText: "am",
        firstDay: 1,
        dateText: "P??iv??ys",
        timeText: "Aika",
        todayText: "T??n????n",
        prevMonthText: "Edellinen kuukausi",
        nextMonthText: "Ensi kuussa",
        prevYearText: "Edellinen vuosi",
        nextYearText: "Ensi vuosi",
        eventText: "Tapahtumia",
        eventsText: "Tapahtumia",
        allDayText: "Koko p??iv??",
        noEventsText: "Ei tapahtumia",
        moreEventsText: "{count} muu",
        moreEventsPluralText: "{count} muuta",
        rangeStartLabel: "Alkaa",
        rangeEndLabel: "P????ttyy",
        rangeStartHelp: "Valitse",
        rangeEndHelp: "Valitse"
    }
      , Ve = {
        setText: "Terminer",
        cancelText: "Annuler",
        clearText: "Effacer",
        closeText: "Fermer",
        selectedText: "{count} s??lectionn??",
        selectedPluralText: "{count} s??lectionn??s",
        dateFormat: "DD/MM/YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
        dayNamesShort: ["Dim.", "Lun.", "Mar.", "Mer.", "Jeu.", "Ven.", "Sam."],
        dayNamesMin: ["D", "L", "M", "M", "J", "V", "S"],
        monthNames: ["Janvier", "F??vrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Ao??t", "Septembre", "Octobre", "Novembre", "D??cembre"],
        monthNamesShort: ["Janv.", "F??vr.", "Mars", "Avril", "Mai", "Juin", "Juil.", "Ao??t", "Sept.", "Oct.", "Nov.", "D??c."],
        timeFormat: "HH:mm",
        nowText: "Maintenant",
        pmText: "pm",
        amText: "am",
        todayText: "Aujourd'hui",
        firstDay: 1,
        dateText: "Date",
        timeText: "Heure",
        allDayText: "Toute la journ??e",
        noEventsText: "Aucun ??v??nement",
        eventText: "??v??nement",
        eventsText: "??v??nements",
        moreEventsText: "{count} autre",
        moreEventsPluralText: "{count} autres",
        rangeStartLabel: "D??marrer",
        rangeEndLabel: "Fin",
        rangeStartHelp: "Choisir",
        rangeEndHelp: "Choisir"
    }
      , Fe = {
        rtl: !0,
        setText: "??????????",
        cancelText: "??????????",
        clearText: "??????",
        closeText: "??????????",
        selectedText: "{count} ????????",
        selectedPluralText: "{count} ??????????",
        dateFormat: "DD/MM/YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["??????????", "??????", "??????????", "??????????", "??????????", "????????", "??????"],
        dayNamesShort: ["??'", "??'", "??'", "??'", "??'", "??'", "??'"],
        dayNamesMin: ["??", "??", "??", "??", "??", "??", "??"],
        monthNames: ["??????????", "????????????", "??????", "??????????", "??????", "????????", "????????", "????????????", "????????????", "??????????????", "????????????", "??????????"],
        monthNamesShort: ["??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????"],
        amText: "am",
        pmText: "pm",
        timeFormat: "H:mm",
        timeWheels: "mmH",
        nowText: "??????????",
        firstDay: 0,
        dateText: "??????????",
        timeText: "??????",
        todayText: "????????",
        allDayText: "???? ????????",
        noEventsText: "?????? ??????????????",
        eventText: "????????????",
        eventsText: "????????????",
        moreEventsText: "?????????? ?????? ????????",
        moreEventsPluralText: "{count} ?????????????? ????????????",
        rangeStartLabel: "??????????",
        rangeEndLabel: "????????",
        rangeStartHelp: "??????",
        rangeEndHelp: "??????"
    }
      , ze = {
        setText: "????????? ????????????",
        cancelText: "???????????? ????????????",
        clearText: "????????? ??????",
        closeText: "?????????",
        selectedText: "{count} ???????????????",
        dateFormat: "DD/MM/YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["??????????????????", "??????????????????", "?????????????????????", "??????????????????", "?????????????????????", "????????????????????????", "??????????????????"],
        dayNamesShort: ["?????????", "?????????", "????????????", "?????????", "????????????", "???????????????", "?????????"],
        dayNamesMin: ["?????????", "?????????", "????????????", "?????????", "????????????", "???????????????", "?????????"],
        monthNames: ["??????????????? ", "???????????????", "???????????????", "??????????????????", "??????", "?????????", "???????????????", "??????????????? ", "?????????????????????", "?????????????????????", "??????????????????", "?????????????????????"],
        monthNamesShort: ["??????", "??????", "???????????????", "??????????????????", "??????", "?????????", "???????????????", "??????", "?????????", "????????????", "??????", "??????"],
        timeFormat: "H:mm",
        nowText: "??????",
        pmText: "?????????????????????",
        amText: "???????????????????????????",
        firstDay: 1,
        dateText: "????????????",
        timeText: "?????????",
        todayText: "??????",
        prevMonthText: "?????????????????? ???????????????",
        nextMonthText: "???????????? ???????????????",
        prevYearText: "??????????????? ?????????",
        nextYearText: "???????????? ????????????",
        eventText: "???????????????",
        eventsText: "???????????????",
        allDayText: "???????????? ?????????",
        noEventsText: "Ei tapahtumia",
        moreEventsText: "{count} ??????",
        rangeStartLabel: "??????",
        rangeEndLabel: "??????",
        rangeStartHelp: "???????????????",
        rangeEndHelp: "???????????????"
    }
      , Re = {
        setText: "Postavi",
        cancelText: "Izlaz",
        clearText: "Izbri??i",
        closeText: "Zatvori",
        selectedText: "{count} odabran",
        dateFormat: "DD.MM.YYYY",
        dateFormatLong: "DDD, D. MMM. YYYY.",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["Nedjelja", "Ponedjeljak", "Utorak", "Srijeda", "??etvrtak", "Petak", "Subota"],
        dayNamesShort: ["Ned", "Pon", "Uto", "Sri", "??et", "Pet", "Sub"],
        dayNamesMin: ["Ne", "Po", "Ut", "Sr", "??e", "Pe", "Su"],
        monthNames: ["Sije??anj", "Velja??a", "O??ujak", "Travanj", "Svibanj", "Lipanj", "Srpanj", "Kolovoz", "Rujan", "Listopad", "Studeni", "Prosinac"],
        monthNamesShort: ["Sij", "Velj", "O??u", "Tra", "Svi", "Lip", "Srp", "Kol", "Ruj", "Lis", "Stu", "Pro"],
        timeFormat: "H:mm",
        nowText: "Sada",
        pmText: "pm",
        amText: "am",
        firstDay: 1,
        dateText: "Datum",
        timeText: "Vrijeme",
        todayText: "Danas",
        prevMonthText: "Prethodni mjesec",
        nextMonthText: "Sljede??i mjesec",
        prevYearText: "Prethodni godina",
        nextYearText: "Slijede??e godine",
        eventText: "Doga??aj",
        eventsText: "doga??aja",
        allDayText: "Cijeli dan",
        noEventsText: "Bez doga??aja",
        moreEventsText: "Jo?? {count}",
        rangeStartLabel: "Po??inje",
        rangeEndLabel: "Zavr??ava",
        rangeStartHelp: "Odaberite",
        rangeEndHelp: "Odaberite"
    }
      , Ae = {
        setText: "OK",
        cancelText: "M??gse",
        clearText: "T??rl??s",
        closeText: "Bez??r",
        selectedText: "{count} kiv??lasztva",
        dateFormat: "YYYY.MM.DD.",
        dateFormatLong: "YYYY. MMM. D., DDD",
        dateWheelFormat: "|MMM. D. DDD|",
        dayNames: ["Vas??rnap", "H??tf??", "Kedd", "Szerda", "Cs??t??rt??k", "P??ntek", "Szombat"],
        dayNamesShort: ["Va", "H??", "Ke", "Sze", "Cs??", "P??", "Szo"],
        dayNamesMin: ["V", "H", "K", "Sz", "Cs", "P", "Sz"],
        monthNames: ["Janu??r", "Febru??r", "M??rcius", "??prilis", "M??jus", "J??nius", "J??lius", "Augusztus", "Szeptember", "Okt??ber", "November", "December"],
        monthNamesShort: ["Jan", "Feb", "M??r", "??pr", "M??j", "J??n", "J??l", "Aug", "Szep", "Okt", "Nov", "Dec"],
        timeFormat: "H:mm",
        nowText: "Most",
        pmText: "pm",
        amText: "am",
        firstDay: 1,
        dateText: "D??tum",
        timeText: "Id??",
        todayText: "Ma",
        prevMonthText: "El??z?? h??nap",
        nextMonthText: "K??vetkez?? h??nap",
        prevYearText: "El??z?? ??v",
        nextYearText: "K??vetkez?? ??v",
        eventText: "esem??ny",
        eventsText: "esem??ny",
        allDayText: "Eg??sz nap",
        noEventsText: "Nincs esem??ny",
        moreEventsText: "{count} tov??bbi",
        rangeStartLabel: "Eleje",
        rangeEndLabel: "V??ge",
        rangeStartHelp: "V??lasszon",
        rangeEndHelp: "V??lasszon"
    }
      , We = {
        setText: "OK",
        cancelText: "Annulla",
        clearText: "Chiarire",
        closeText: "Chiudere",
        selectedText: "{count} selezionato",
        selectedPluralText: "{count} selezionati",
        dateFormat: "DD/MM/YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["Domenica", "Luned??", "Marted??", "Mercoled??", "Gioved??", "Venerd??", "Sabato"],
        dayNamesShort: ["Do", "Lu", "Ma", "Me", "Gi", "Ve", "Sa"],
        dayNamesMin: ["D", "L", "M", "M", "G", "V", "S"],
        monthNames: ["Gennaio", "Febbraio", "Marzo", "Aprile", "Maggio", "Giugno", "Luglio", "Agosto", "Settembre", "Ottobre", "Novembre", "Dicembre"],
        monthNamesShort: ["Gen", "Feb", "Mar", "Apr", "Mag", "Giu", "Lug", "Ago", "Set", "Ott", "Nov", "Dic"],
        timeFormat: "HH:mm",
        nowText: "Ora",
        pmText: "pm",
        amText: "am",
        todayText: "Oggi",
        firstDay: 1,
        dateText: "Data",
        timeText: "Volta",
        allDayText: "Tutto il giorno",
        noEventsText: "Nessun evento",
        eventText: "Evento",
        eventsText: "Eventi",
        moreEventsText: "{count} altro",
        moreEventsPluralText: "altri {count}",
        rangeStartLabel: "Inizio",
        rangeEndLabel: "Fine",
        rangeStartHelp: "Scegli",
        rangeEndHelp: "Scegli"
    }
      , Ue = {
        setText: "?????????",
        cancelText: "???????????????",
        clearText: "?????????",
        closeText: "????????????",
        selectedText: "{count} ??????",
        dateFormat: "YYYY???MM???DD???",
        dateWheelFormat: "|M???D??? DDD|",
        dayNames: ["???", "???", "???", "???", "???", "???", "???"],
        dayNamesShort: ["???", "???", "???", "???", "???", "???", "???"],
        dayNamesMin: ["???", "???", "???", "???", "???", "???", "???"],
        monthNames: ["1???", "2???", "3???", "4???", "5???", "6???", "7???", "8???", "9???", "10???", "11???", "12???"],
        monthNamesShort: ["1???", "2???", "3???", "4???", "5???", "6???", "7???", "8???", "9???", "10???", "11???", "12???"],
        timeFormat: "H:mm",
        nowText: "???",
        pmText: "??????",
        amText: "??????",
        yearSuffix: "???",
        monthSuffix: "???",
        daySuffix: "???",
        todayText: "??????",
        dateText: "??????",
        timeText: "??????",
        allDayText: "??????",
        noEventsText: "??????????????????????????????",
        eventText: "????????????",
        eventsText: "????????????",
        moreEventsText: "??? {count} ???",
        rangeStartLabel: "??????",
        rangeEndLabel: "?????????",
        rangeStartHelp: "??????",
        rangeEndHelp: "??????"
    }
      , Be = {
        setText: "??????",
        cancelText: "??????",
        clearText: "??????",
        closeText: "??????",
        selectedText: "{count} ?????????",
        dateFormat: "YYYY???MM???DD???",
        dateWheelFormat: "|M??? D??? DDD|",
        dayNames: ["?????????", "?????????", "?????????", "?????????", "?????????", "?????????", "?????????"],
        dayNamesShort: ["???", "???", "???", "???", "???", "???", "???"],
        dayNamesMin: ["???", "???", "???", "???", "???", "???", "???"],
        monthNames: ["1???", "2???", "3???", "4???", "5???", "6???", "7???", "8???", "9???", "10???", "11???", "12???"],
        monthNamesShort: ["1???", "2???", "3???", "4???", "5???", "6???", "7???", "8???", "9???", "10???", "11???", "12???"],
        timeFormat: "H:mm",
        nowText: "??????",
        pmText: "??????",
        amText: "??????",
        yearSuffix: "???",
        monthSuffix: "???",
        daySuffix: "???",
        firstDay: 0,
        dateText: "??????",
        timeText: "??????",
        todayText: "??????",
        prevMonthText: "?????? ???",
        nextMonthText: "?????? ???",
        prevYearText: "?????? ???",
        nextYearText: "?????? ???",
        eventText: "?????????",
        eventsText: "?????????",
        allDayText: "??????",
        noEventsText: "????????? ??????",
        moreEventsText: "{count}??? ?????????",
        rangeStartLabel: "??????",
        rangeEndLabel: "??????",
        rangeStartHelp: "??????",
        rangeEndHelp: "??????"
    }
      , je = {
        setText: "OK",
        cancelText: "At??aukti",
        clearText: "I??valyti",
        closeText: "U??daryti",
        selectedText: "Pasirinktas {count}",
        selectedPluralText: "Pasirinkti {count}",
        dateFormat: "YYYY-MM-DD",
        dateWheelFormat: "|MM-DD DDD|",
        dayNames: ["Sekmadienis", "Pirmadienis", "Antradienis", "Tre??iadienis", "Ketvirtadienis", "Penktadienis", "??e??tadienis"],
        dayNamesShort: ["S", "Pr", "A", "T", "K", "Pn", "??"],
        dayNamesMin: ["S", "Pr", "A", "T", "K", "Pn", "??"],
        monthNames: ["Sausis", "Vasaris", "Kovas", "Balandis", "Gegu????", "Bir??elis", "Liepa", "Rugpj??tis", "Rugs??jis", "Spalis", "Lapkritis", "Gruodis"],
        monthNamesShort: ["Sau", "Vas", "Kov", "Bal", "Geg", "Bir", "Lie", "Rugp", "Rugs", "Spa", "Lap", "Gruo"],
        amText: "am",
        pmText: "pm",
        timeFormat: "HH:mm",
        nowText: "Dabar",
        todayText: "??iandien",
        firstDay: 1,
        dateText: "Data",
        timeText: "Laikas",
        allDayText: "Vis?? dien??",
        noEventsText: "N??ra ??vyki??",
        eventText: "??vyki??",
        eventsText: "??vykiai",
        moreEventsText: "Dar {count}",
        rangeStartLabel: "Nuo",
        rangeEndLabel: "Iki",
        rangeStartHelp: "Pasirinkti",
        rangeEndHelp: "Pasirinkti"
    }
      , Xe = {
        setText: "Instellen",
        cancelText: "Annuleren",
        clearText: "Leegmaken",
        closeText: "Sluiten",
        selectedText: "{count} gekozen",
        dateFormat: "DD-MM-YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["Zondag", "Maandag", "Dinsdag", "Woensdag", "Donderdag", "Vrijdag", "Zaterdag"],
        dayNamesShort: ["zo", "ma", "di", "wo", "do", "vr", "za"],
        dayNamesMin: ["z", "m", "d", "w", "d", "v", "z"],
        monthNames: ["januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december"],
        monthNamesShort: ["jan", "feb", "mrt", "apr", "mei", "jun", "jul", "aug", "sep", "okt", "nov", "dec"],
        timeFormat: "HH:mm",
        nowText: "Nu",
        pmText: "pm",
        amText: "am",
        todayText: "Vandaag",
        firstDay: 1,
        dateText: "Datum",
        timeText: "Tijd",
        allDayText: "Hele dag",
        noEventsText: "Geen activiteiten",
        eventText: "Activiteit",
        eventsText: "Activiteiten",
        moreEventsText: "nog {count}",
        rangeStartLabel: "Start",
        rangeEndLabel: "Einde",
        rangeStartHelp: "Kies",
        rangeEndHelp: "Kies"
    }
      , Je = {
        setText: "OK",
        cancelText: "Avbryt",
        clearText: "T??mme",
        closeText: "Lukk",
        selectedText: "{count} valgt",
        dateFormat: "DD.MM.YYY",
        dateFormatLong: "DDD. D. MMM. YYYY",
        dateWheelFormat: "|DDD. D. MMM.|",
        dayNames: ["S??ndag", "Mandag", "Tirsdag", "Onsdag", "Torsdag", "Fredag", "L??rdag"],
        dayNamesShort: ["S??", "Ma", "Ti", "On", "To", "Fr", "L??"],
        dayNamesMin: ["S", "M", "T", "O", "T", "F", "L"],
        monthNames: ["Januar", "Februar", "Mars", "April", "Mai", "Juni", "Juli", "August", "September", "Oktober", "November", "Desember"],
        monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Des"],
        timeFormat: "HH:mm",
        nowText: "N??",
        pmText: "pm",
        amText: "am",
        todayText: "I dag",
        firstDay: 1,
        dateText: "Dato",
        timeText: "Tid",
        allDayText: "Hele dagen",
        noEventsText: "Ingen hendelser",
        eventText: "Hendelse",
        eventsText: "Hendelser",
        moreEventsText: "{count} mere",
        rangeStartLabel: "Start",
        rangeEndLabel: "End",
        rangeStartHelp: "Velg",
        rangeEndHelp: "Velg"
    }
      , Ke = {
        setText: "Zestaw",
        cancelText: "Anuluj",
        clearText: "Oczy??ci??",
        closeText: "Zako??czenie",
        selectedText: "Wyb??r: {count}",
        dateFormat: "YYYY-MM-DD",
        dateFormatLong: "DDD, D.MM.YYYY",
        dateWheelFormat: "|DDD D.MM|",
        dayNames: ["Niedziela", "Poniedzia??ek", "Wtorek", "??roda", "Czwartek", "Pi??tek", "Sobota"],
        dayNamesShort: ["Niedz.", "Pon.", "Wt.", "??r.", "Czw.", "Pt.", "Sob."],
        dayNamesMin: ["N", "P", "W", "??", "C", "P", "S"],
        monthNames: ["Stycze??", "Luty", "Marzec", "Kwiecie??", "Maj", "Czerwiec", "Lipiec", "Sierpie??", "Wrzesie??", "Pa??dziernik", "Listopad", "Grudzie??"],
        monthNamesShort: ["Sty", "Lut", "Mar", "Kwi", "Maj", "Cze", "Lip", "Sie", "Wrz", "Pa??", "Lis", "Gru"],
        timeFormat: "HH:mm",
        nowText: "Teraz",
        amText: "am",
        pmText: "pm",
        todayText: "Dzisiaj",
        firstDay: 1,
        dateText: "Data",
        timeText: "Czas",
        allDayText: "Ca??y dzie??",
        noEventsText: "Brak wydarze??",
        eventText: "Wydarze??",
        eventsText: "Wydarzenia",
        moreEventsText: "Jeszcze {count}",
        rangeStartLabel: "Rozpocz??cie",
        rangeEndLabel: "Koniec",
        rangeStartHelp: "Wybierz",
        rangeEndHelp: "Wybierz"
    }
      , qe = {
        setText: "Seleccionar",
        cancelText: "Cancelar",
        clearText: "Claro",
        closeText: "Fechar",
        selectedText: "{count} selecionado",
        selectedPluralText: "{count} selecionados",
        dateFormat: "DD-MM-YYYY",
        dateFormatLong: "DDD, D MMM, YYYY",
        dateWheelFormat: "|DDD D de MMM|",
        dayNames: ["Domingo", "Segunda-feira", "Ter??a-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "S??bado"],
        dayNamesShort: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "S??b"],
        dayNamesMin: ["D", "S", "T", "Q", "Q", "S", "S"],
        monthNames: ["Janeiro", "Fevereiro", "Mar??o", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
        monthNamesShort: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
        timeFormat: "HH:mm",
        nowText: "Actualizar",
        pmText: "pm",
        amText: "am",
        todayText: "Hoy",
        firstDay: 1,
        dateText: "Data",
        timeText: "Tempo",
        allDayText: "Todo o dia",
        noEventsText: "Nenhum evento",
        eventText: "Evento",
        eventsText: "Eventos",
        moreEventsText: "Mais {count}",
        rangeStartLabel: "In??cio",
        rangeEndLabel: "Fim",
        rangeStartHelp: "Escolha",
        rangeEndHelp: "Escolha"
    }
      , Ge = o({}, qe, {
        setText: "Selecionar",
        dateFormat: "DD/MM/YYYY",
        nowText: "Agora",
        todayText: "Hoje",
        allDayText: "Dia inteiro"
    })
      , Ze = {
        setText: "Setare",
        cancelText: "Anulare",
        clearText: "??tergere",
        closeText: "??nchidere",
        selectedText: "{count} selectat",
        selectedPluralText: "{count} selectate",
        dateFormat: "DD.MM.YYYY",
        dateFormatLong: "DDD., D MMM YYYY",
        dateWheelFormat: "|DDD. D MMM|",
        dayNames: ["Duminic??", "Luni", "Mar??i", "Miercuri", "Joi", "Vineri", "S??mb??t??"],
        dayNamesShort: ["Du", "Lu", "Ma", "Mi", "Jo", "Vi", "S??"],
        dayNamesMin: ["D", "L", "M", "M", "J", "V", "S"],
        monthNames: ["Ianuarie", "Februarie", "Martie", "Aprilie", "Mai", "Iunie", "Iulie", "August", "Septembrie", "Octombrie", "Noiembrie", "Decembrie"],
        monthNamesShort: ["Ian.", "Feb.", "Mar.", "Apr.", "Mai", "Iun.", "Iul.", "Aug.", "Sept.", "Oct.", "Nov.", "Dec."],
        timeFormat: "HH:mm",
        nowText: "Acum",
        amText: "am",
        pmText: "pm",
        todayText: "Ast??zi",
        prevMonthText: "Luna anterioar??",
        nextMonthText: "Luna urm??toare",
        prevYearText: "Anul anterior",
        nextYearText: "Anul urm??tor",
        eventText: "Eveniment",
        eventsText: "Evenimente",
        allDayText: "Toat?? ziua",
        noEventsText: "Niciun eveniment",
        moreEventsText: "??nc?? unul",
        moreEventsPluralText: "??nc?? {count}",
        firstDay: 1,
        dateText: "Data",
        timeText: "Ora",
        rangeStartLabel: "Start",
        rangeEndLabel: "Final",
        rangeStartHelp: "Selectare",
        rangeEndHelp: "Selectare"
    }
      , $e = {
        setText: "????????????????????",
        cancelText: "????????????",
        clearText: "????????????????",
        closeText: "??????????????",
        selectedText: "{count} ??????????????",
        dateFormat: "DD.MM.YYYY",
        dateFormatLong: "DDD, D MMM YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["??????????????????????", "??????????????????????", "??????????????", "??????????", "??????????????", "??????????????", "??????????????"],
        dayNamesShort: ["????", "????", "????", "????", "????", "????", "????"],
        dayNamesMin: ["??", "??", "??", "??", "??", "??", "??"],
        monthNames: ["????????????", "??????????????", "????????", "????????????", "??????", "????????", "????????", "????????????", "????????????????", "??????????????", "????????????", "??????????????"],
        monthNamesShort: ["??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????"],
        timeFormat: "HH:mm",
        nowText: "????????????",
        amText: "am",
        pmText: "pm",
        todayText: "C????????????",
        firstDay: 1,
        dateText: "????????",
        timeText: "??????????",
        allDayText: "???????? ????????",
        noEventsText: "?????? ??????????????",
        eventText: "??????????????????????",
        eventsText: "??????????????????????",
        moreEventsText: "?????? {count}",
        rangeStartLabel: "????????????",
        rangeEndLabel: "??????????",
        rangeStartHelp: "????????????????",
        rangeEndHelp: "????????????????"
    }
      , Qe = o({}, $e, {
        cancelText: "????????????????",
        clearText: "????????????????r",
        selectedText: "{count} ??????????????",
        monthNamesShort: ["??????.", "????????.", "????????", "??????.", "??????", "????????", "????????", "??????.", "????????.", "??????.", "????????.", "??????."]
    })
      , et = {
        setText: "Zadaj",
        cancelText: "Zru??i??",
        clearText: "Vymaza??",
        closeText: "Zavrie??",
        selectedText: "Ozna??en??: {count}",
        dateFormat: "D.M.YYYY",
        dateFormatLong: "DDD D. MMM YYYY",
        dateWheelFormat: "|DDD D. MMM|",
        dayNames: ["Nede??a", "Pondelok", "Utorok", "Streda", "??tvrtok", "Piatok", "Sobota"],
        dayNamesShort: ["Ne", "Po", "Ut", "St", "??t", "Pi", "So"],
        dayNamesMin: ["N", "P", "U", "S", "??", "P", "S"],
        monthNames: ["Janu??r", "Febru??r", "Marec", "Apr??l", "M??j", "J??n", "J??l", "August", "September", "Okt??ber", "November", "December"],
        monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "M??j", "J??n", "J??l", "Aug", "Sep", "Okt", "Nov", "Dec"],
        timeFormat: "H:mm",
        nowText: "Teraz",
        amText: "am",
        pmText: "pm",
        todayText: "Dnes",
        firstDay: 1,
        dateText: "Datum",
        timeText: "??as",
        allDayText: "Cel?? de??",
        noEventsText: "??iadne udalosti",
        eventText: "Udalost??",
        eventsText: "Udalosti",
        moreEventsText: "{count} ??al??ia",
        moreEventsPluralText: "{count} ??al??ie",
        rangeStartLabel: "Za??iatok",
        rangeEndLabel: "Koniec",
        rangeStartHelp: "Vybra??",
        rangeEndHelp: "Vybra??"
    }
      , tt = {
        setText: "??????????????",
        cancelText: "????????????",
        clearText: "????????????",
        selectedText: "{count} ????????????????",
        dateFormat: "DD.MM.YYYY",
        dateWheelFormat: "|DDD D. MMM|",
        dayNames: ["????????????", "??????????????????", "????????????", "??????????", "????????????????", "??????????", "????????????"],
        dayNamesShort: ["??????", "??????", "??????", "??????", "??????", "??????", "??????"],
        dayNamesMin: ["????", "????", "????", "????", "????", "????", "????"],
        monthNames: ["????????????", "??????????????", "????????", "??????????", "??????", "??????", "??????", "????????????", "??????????????????", "??????????????", "????????????????", "????????????????"],
        monthNamesShort: ["??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????"],
        timeFormat: "HH:mm",
        nowText: "????????",
        pmText: "pm",
        amText: "am",
        firstDay: 1,
        dateText: "??????????",
        timeText: "??????????",
        todayText: "??????????",
        prevMonthText: "?????????????????? ????????????",
        nextMonthText: "???????????????? ????????????",
        prevYearText: "?????????????????? ????????????",
        nextYearText: "?????????????? ????????????",
        closeText: "??????????????",
        eventText: "??????????????",
        eventsText: "????????????????",
        allDayText: "?????? ??????",
        noEventsText: "???????? ????????????????",
        moreEventsText: "?????? {count}",
        rangeStartLabel: "????",
        rangeEndLabel: "????",
        rangeStartHelp: "??????????????????",
        rangeEndHelp: "??????????????????"
    }
      , nt = {
        setText: "OK",
        cancelText: "Avbryt",
        clearText: "Klara",
        closeText: "St??ng",
        selectedText: "{count} vald",
        dateFormat: "YYYY-MM-DD",
        dateFormatLong: "DDD D MMM. YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["S??ndag", "M??ndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "L??rdag"],
        dayNamesShort: ["S??", "M??", "Ti", "On", "To", "Fr", "L??"],
        dayNamesMin: ["S", "M", "T", "O", "T", "F", "L"],
        monthNames: ["Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December"],
        monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "Maj", "Jun", "Jul", "Aug", "Sep", "Okt", "Nov", "Dec"],
        timeFormat: "HH:mm",
        nowText: "Nu",
        pmText: "pm",
        amText: "am",
        todayText: "I dag",
        firstDay: 1,
        dateText: "Datum",
        timeText: "Tid",
        allDayText: "Heldag",
        noEventsText: "Inga aktiviteter",
        eventText: "H??ndelse",
        eventsText: "H??ndelser",
        moreEventsText: "{count} till",
        rangeStartLabel: "Start",
        rangeEndLabel: "Slut",
        rangeStartHelp: "V??lj",
        rangeEndHelp: "V??lj"
    }
      , at = {
        setText: "?????????????????????",
        cancelText: "??????????????????",
        clearText: "????????????",
        closeText: "?????????",
        selectedText: "{count} ???????????????",
        dateFormat: "DD/MM/YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["?????????????????????", "??????????????????", "??????????????????", "?????????", "????????????????????????", "???????????????", "???????????????"],
        dayNamesShort: ["??????.", "???.", "???.", "???.", "??????.", "???.", "???."],
        dayNamesMin: ["??????.", "???.", "???.", "???.", "??????.", "???.", "???."],
        monthNames: ["??????????????????", "??????????????????????????????", "??????????????????", "??????????????????", "?????????????????????", "????????????????????????", "?????????????????????", "?????????????????????", "?????????????????????", "??????????????????", "???????????????????????????", "?????????????????????"],
        monthNamesShort: ["???.???.", "???.???.", "??????.???.", "??????.???.", "???.???.", "??????.???.", "???.???.", "???.???.", "???.???.", "???.???.", "???.???.", "???.???."],
        timeFormat: "HH:mm",
        nowText: "??????????????????",
        pmText: "pm",
        amText: "am",
        firstDay: 0,
        dateText: "?????????",
        timeText: "????????????",
        todayText: "??????????????????",
        prevMonthText: "???????????????????????????????????????",
        nextMonthText: "??????????????????????????????",
        prevYearText: "??????????????????????????????",
        nextYearText: "?????????????????????",
        eventText: "???????????????????????????",
        eventsText: "???????????????????????????",
        allDayText: "?????????????????????",
        noEventsText: "????????????????????????????????????",
        moreEventsText: "????????? {count} ?????????????????????",
        rangeStartLabel: "?????????",
        rangeEndLabel: "?????????",
        rangeStartHelp: "???????????????",
        rangeEndHelp: "???????????????"
    }
      , st = {
        setText: "Se??",
        cancelText: "??ptal",
        clearText: "Temizleyin",
        closeText: "Kapatmak",
        selectedText: "{count} se??ilmi??",
        dateFormat: "DD.MM.YYYY",
        dateFormatLong: "D MMMM DDD, YYYY",
        dateWheelFormat: "|D MMM DDD|",
        dayNames: ["Pazar", "Pazartesi", "Sal??", "??ar??amba", "Per??embe", "Cuma", "Cumartesi"],
        dayNamesShort: ["Paz", "Pzt", "Sal", "??ar", "Per", "Cum", "Cmt"],
        dayNamesMin: ["P", "P", "S", "??", "P", "C", "C"],
        monthNames: ["Ocak", "??ubat", "Mart", "Nisan", "May??s", "Haziran", "Temmuz", "A??ustos", "Eyl??l", "Ekim", "Kas??m", "Aral??k"],
        monthNamesShort: ["Oca", "??ub", "Mar", "Nis", "May", "Haz", "Tem", "A??u", "Eyl", "Eki", "Kas", "Ara"],
        timeFormat: "HH:mm",
        nowText: "??imdi",
        pmText: "pm",
        amText: "am",
        todayText: "Bug??n",
        firstDay: 1,
        dateText: "Tarih",
        timeText: "Zaman",
        allDayText: "T??m g??n",
        noEventsText: "Etkinlik Yok",
        eventText: "Etkinlik",
        eventsText: "Etkinlikler",
        moreEventsText: "{count} tane daha",
        rangeStartLabel: "Ba??la",
        rangeEndLabel: "Son",
        rangeStartHelp: "Se??",
        rangeEndHelp: "Se??"
    }
      , it = {
        setText: "????????????????????",
        cancelText: "??????????????",
        clearText: "????????????????",
        closeText: "??????????????",
        selectedText: "{count} ??????????????",
        dateFormat: "DD.MM.YYYY",
        dateFormatLong: "DDD, D MMM. YYYY",
        dateWheelFormat: "|DDD D MMM.|",
        dayNames: ["????????????", "??????????????????", "????????????????", "????????????", "????????????", "?????????????????", "????????????"],
        dayNamesShort: ["??????", "??????", "??????", "??????", "??????", "??????", "??????"],
        dayNamesMin: ["????", "????", "????", "????", "????", "????", "????"],
        monthNames: ["????????????", "??????????", "????????????????", "??????????????", "??????????????", "??????????????", "????????????", "??????????????", "????????????????", "??????????????", "????????????????", "??????????????"],
        monthNamesShort: ["??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????", "??????"],
        timeFormat: "H:mm",
        nowText: "??????????",
        pmText: "pm",
        amText: "am",
        firstDay: 1,
        dateText: "????????",
        timeText: "??????",
        todayText: "????????????????",
        prevMonthText: "???????????????????? ????????????",
        nextMonthText: "???????????????????? ????????????",
        prevYearText: "???????????????????? ??????",
        nextYearText: "???????????????????? ????????",
        eventText: "??????????",
        eventsText: "??????????",
        allDayText: "?????????? ????????",
        noEventsText: "???????????? ??????????",
        moreEventsText: "???? ???? {count}",
        rangeStartLabel: "??????",
        rangeEndLabel: "????????????",
        rangeEndHelp: "????????????",
        rangeStartHelp: "????????????"
    }
      , rt = {
        setText: "?????t",
        cancelText: "H???y b??",
        clearText: "X??a",
        closeText: "????ng",
        selectedText: "{count} ch???n",
        dateFormat: "DD/MM/YYYY",
        dateFormatLong: "DDD D, MMM YYYY",
        dateWheelFormat: "|DDD D MMM|",
        dayNames: ["Ch??? Nh???t", "Th??? Hai", "Th??? Ba", "Th??? T??", "Th??? N??m", "Th??? S??u", "Th??? B???y"],
        dayNamesShort: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
        dayNamesMin: ["CN", "T2", "T3", "T4", "T5", "T6", "T7"],
        monthNames: ["Th??ng M???t", "Th??ng Hai", "Th??ng Ba", "Th??ng T??", "Th??ng N??m", "Th??ng S??u", "Th??ng B???y", "Th??ng T??m", "Th??ng Ch??n", "Th??ng M?????i", "Th??ng M?????i M???t", "Th??ng M?????i Hai"],
        monthNamesShort: ["Th??ng 1", "Th??ng 2", "Th??ng 3", "Th??ng 4", "Th??ng 5", "Th??ng 6", "Th??ng 7", "Th??ng 8", "Th??ng 9", "Th??ng 10", "Th??ng 11", "Th??ng 12"],
        timeFormat: "H:mm",
        nowText: "B??y gi???",
        pmText: "pm",
        amText: "am",
        firstDay: 0,
        dateText: "Ng??y",
        timeText: "H????i",
        todayText: "H??m nay",
        prevMonthText: "Th??ng tr?????c",
        nextMonthText: "Th??ng t???i",
        prevYearText: "M??m tr?????c",
        nextYearText: "N??m t???i",
        eventText: "S??? ki???n",
        eventsText: "S??? ki???n",
        allDayText: "C??? ng??y",
        noEventsText: "Kh??ng c?? s??? ki???n",
        moreEventsText: "{count} th??? kh??c",
        rangeStartLabel: "T???",
        rangeEndLabel: "T???i",
        rangeStartHelp: "Ch???n",
        rangeEndHelp: "Ch???n"
    }
      , ot = {
        setText: "??????",
        cancelText: "??????",
        clearText: "??????",
        closeText: "??????",
        selectedText: "{count} ???",
        dateFormat: "YYYY???M???D???",
        dateWheelFormat: "|M???D??? DDD|",
        dayNames: ["??????", "??????", "??????", "??????", "??????", "??????", "??????"],
        dayNamesShort: ["???", "???", "???", "???", "???", "???", "???"],
        dayNamesMin: ["???", "???", "???", "???", "???", "???", "???"],
        monthNames: ["1???", "2???", "3???", "4???", "5???", "6???", "7???", "8???", "9???", "10???", "11???", "12???"],
        monthNamesShort: ["???", "???", "???", "???", "???", "???", "???", "???", "???", "???", "??????", "??????"],
        timeFormat: "H:mm",
        nowText: "??????",
        pmText: "??????",
        amText: "??????",
        yearSuffix: "???",
        monthSuffix: "???",
        daySuffix: "???",
        todayText: "??????",
        dateText: "???",
        timeText: "??????",
        allDayText: "??????",
        noEventsText: "?????????",
        eventText: "??????",
        eventsText: "??????",
        moreEventsText: "??? {count} ???",
        rangeStartLabel: "????????????",
        rangeEndLabel: "????????????",
        rangeStartHelp: "??????",
        rangeEndHelp: "??????"
    };
    function lt(e) {
        return e < -1e-7 ? Math.ceil(e - 1e-7) : Math.floor(e + 1e-7)
    }
    function ct(e, t, n) {
        var a, s, i, r, o = new Array(0,0,0);
        return a = e > 1582 || 1582 === e && t > 10 || 1582 === e && 10 === t && n > 14 ? lt(1461 * (e + 4800 + lt((t - 14) / 12)) / 4) + lt(367 * (t - 2 - 12 * lt((t - 14) / 12)) / 12) - lt(3 * lt((e + 4900 + lt((t - 14) / 12)) / 100) / 4) + n - 32075 : 367 * e - lt(7 * (e + 5001 + lt((t - 9) / 7)) / 4) + lt(275 * t / 9) + n + 1729777,
        r = lt(((s = a - 1948440 + 10632) - 1) / 10631),
        i = lt((10985 - (s = s - 10631 * r + 354)) / 5316) * lt(50 * s / 17719) + lt(s / 5670) * lt(43 * s / 15238),
        s = s - lt((30 - i) / 15) * lt(17719 * i / 50) - lt(i / 16) * lt(15238 * i / 43) + 29,
        t = lt(24 * s / 709),
        n = s - lt(709 * t / 24),
        e = 30 * r + i - 30,
        o[2] = n,
        o[1] = t,
        o[0] = e,
        o
    }
    var ht = {
        getYear: function(e) {
            return ct(e.getFullYear(), e.getMonth() + 1, e.getDate())[0]
        },
        getMonth: function(e) {
            return --ct(e.getFullYear(), e.getMonth() + 1, e.getDate())[1]
        },
        getDay: function(e) {
            return ct(e.getFullYear(), e.getMonth() + 1, e.getDate())[2]
        },
        getDate: function(e, t, n, a, s, i, r) {
            t < 0 && (e += Math.floor(t / 12),
            t = t % 12 ? 12 + t % 12 : 0),
            t > 11 && (e += Math.floor(t / 12),
            t %= 12);
            var o = function(e, t, n) {
                var a, s, i, r, o, l = new Array(3), c = lt((11 * e + 3) / 30) + 354 * e + 30 * t - lt((t - 1) / 2) + n + 1948440 - 385;
                return c > 2299160 ? (i = lt(4 * (a = c + 68569) / 146097),
                a -= lt((146097 * i + 3) / 4),
                r = lt(4e3 * (a + 1) / 1461001),
                a = a - lt(1461 * r / 4) + 31,
                s = lt(80 * a / 2447),
                n = a - lt(2447 * s / 80),
                t = s + 2 - 12 * (a = lt(s / 11)),
                e = 100 * (i - 49) + r + a) : (o = lt(((s = c + 1402) - 1) / 1461),
                i = lt(((a = s - 1461 * o) - 1) / 365) - lt(a / 1461),
                s = lt(80 * (r = a - 365 * i + 30) / 2447),
                n = r - lt(2447 * s / 80),
                t = s + 2 - 12 * (r = lt(s / 11)),
                e = 4 * o + i + r - 4716),
                l[2] = n,
                l[1] = t,
                l[0] = e,
                l
            }(e, +t + 1, n);
            return new Date(o[0],o[1] - 1,o[2],a || 0,s || 0,i || 0,r || 0)
        },
        getMaxDayOfMonth: function(e, t) {
            t < 0 && (e += Math.floor(t / 12),
            t = t % 12 ? 12 + t % 12 : 0),
            t > 11 && (e += Math.floor(t / 12),
            t %= 12);
            return [30, 29, 30, 29, 30, 29, 30, 29, 30, 29, 30, 29][t] + (11 === t && (11 * e + 14) % 30 < 11 ? 1 : 0)
        }
    }
      , dt = {}
      , ut = {
        ar: Q,
        bg: ee,
        ca: te,
        cs: ne,
        da: ae,
        de: se,
        el: ie,
        en: dt,
        "en-GB": re,
        es: oe,
        fa: Pe,
        fi: Ye,
        fr: Ve,
        he: Fe,
        hi: ze,
        hr: Re,
        hu: Ae,
        it: We,
        ja: Ue,
        ko: Be,
        lt: je,
        nl: Xe,
        no: Je,
        pl: Ke,
        "pt-BR": Ge,
        "pt-PT": qe,
        ro: Ze,
        ru: $e,
        "ru-UA": Qe,
        sk: et,
        sr: tt,
        sv: nt,
        th: at,
        tr: st,
        ua: it,
        vi: rt,
        zh: ot
    }
      , mt = v ? document : le
      , _t = v ? window : le
      , pt = ["Webkit", "Moz"]
      , vt = mt && mt.createElement("div").style
      , ft = mt && mt.createElement("canvas")
      , gt = ft && ft.getContext("2d")
      , yt = _t && _t.CSS
      , bt = {}
      , xt = _t && _t.requestAnimationFrame || function(e) {
        return setTimeout(e, 20)
    }
      , Dt = _t && _t.cancelAnimationFrame || function(e) {
        clearTimeout(e)
    }
      , Tt = vt && vt.animationName !== le
      , Ct = "ios" === c && !D
      , St = Ct && _t && _t.webkit && _t.webkit.messageHandlers
      , kt = vt && vt.touchAction === le || Ct && !St
      , wt = function() {
        if (!vt || vt.transform !== le)
            return "";
        for (var e = 0, t = pt; e < t.length; e++) {
            var n = t[e];
            if (vt[n + "Transform"] !== le)
                return n
        }
        return ""
    }()
      , Mt = wt ? "-" + wt.toLowerCase() + "-" : ""
      , Et = yt && yt.supports && yt.supports("(transform-style: preserve-3d)");
    function Nt(e, t, n, a) {
        e && e.addEventListener(t, n, a)
    }
    function Lt(e, t, n, a) {
        e && e.removeEventListener(t, n, a)
    }
    function It(e) {
        return v ? e && e.ownerDocument ? e.ownerDocument : mt : le
    }
    function Ht(e, t) {
        return parseFloat(getComputedStyle(e)[t] || "0")
    }
    function Ot(e) {
        return e.scrollLeft !== le ? e.scrollLeft : e.pageXOffset
    }
    function Pt(e) {
        return e.scrollTop !== le ? e.scrollTop : e.pageYOffset
    }
    function Yt(e) {
        return v ? e && e.ownerDocument && e.ownerDocument.defaultView ? e.ownerDocument.defaultView : _t : le
    }
    function Vt(e, t) {
        var n = getComputedStyle(e)
          , a = (wt ? n[wt + "Transform"] : n.transform).split(")")[0].split(", ");
        return +(t ? a[13] || a[5] : a[12] || a[4]) || 0
    }
    function Ft(e) {
        if (bt[e])
            return bt[e];
        if (!gt)
            return "#fff";
        gt.fillStyle = e,
        gt.fillRect(0, 0, 1, 1);
        var t = gt.getImageData(0, 0, 1, 1).data
          , n = .299 * +t[0] + .587 * +t[1] + .114 * +t[2] < 130 ? "#fff" : "#000";
        return bt[e] = n,
        n
    }
    function zt(e, t, n, a, s, i) {
        var r = Math.min(1, (+new Date - t) / 468)
          , o = .5 * (1 - Math.cos(Math.PI * r))
          , l = Ce(n + (a - n) * o);
        s ? e.scrollLeft = l : e.scrollTop = l,
        l !== a ? xt((function() {
            zt(e, t, n, a, s, i)
        }
        )) : i && i()
    }
    function Rt(e, t, n, a, s) {
        t = Math.max(0, Ce(t)),
        n ? zt(e, +new Date, a ? e.scrollLeft : e.scrollTop, t, a, s) : (a ? e.scrollLeft = t : e.scrollTop = t,
        s && s())
    }
    function At(e) {
        if (mt && e) {
            var t = mt.createElement("div");
            return t.innerHTML = e,
            t.textContent.trim()
        }
        return e || ""
    }
    function Wt(e) {
        var t = e.getBoundingClientRect()
          , n = {
            left: t.left,
            top: t.top
        }
          , a = Yt(e);
        return a !== le && (n.top += Pt(a),
        n.left += Ot(a)),
        n
    }
    function Ut(e, t) {
        var n = e && (e.matches || e.msMatchesSelector);
        return n && n.call(e, t)
    }
    function Bt(e, t, n) {
        for (; e && !Ut(e, t); ) {
            if (e === n || e.nodeType === e.DOCUMENT_NODE)
                return null;
            e = e.parentNode
        }
        return e
    }
    function jt(e, t, n) {
        var a;
        try {
            a = new CustomEvent(t,{
                bubbles: !0,
                cancelable: !0,
                detail: n
            })
        } catch (e) {
            (a = document.createEvent("Event")).initEvent(t, !0, !0),
            a.detail = n
        }
        e.dispatchEvent(a)
    }
    function Xt(e, t) {
        for (var n = 0; n < e.length; n++)
            t(e[n], n)
    }
    var Jt = {}
      , Kt = []
      , qt = /acit|ex(?:s|g|n|p|$)|rph|grid|ows|mnc|ntw|ine[ch]|zoo|^ord|itera/i;
    function Gt(e, t) {
        for (var n in t)
            e[n] = t[n];
        return e
    }
    function Zt(e) {
        var t = e.parentNode;
        t && t.removeChild(e)
    }
    var $t = {
        _catchError: function(e, t) {
            for (var n, a, s; t = t._parent; )
                if ((n = t._component) && !n._processingException)
                    try {
                        if ((a = n.constructor) && null != a.getDerivedStateFromError && (n.setState(a.getDerivedStateFromError(e)),
                        s = n._dirty),
                        null != n.componentDidCatch && (n.componentDidCatch(e),
                        s = n._dirty),
                        s)
                            return n._pendingError = n
                    } catch (t) {
                        e = t
                    }
            throw e
        },
        _vnodeId: 0
    };
    function Qt(e, t, n) {
        var a, s, i, r = {};
        for (i in t)
            "key" == i ? a = t[i] : "ref" == i ? s = t[i] : r[i] = t[i];
        if (arguments.length > 3)
            for (n = [n],
            i = 3; i < arguments.length; i++)
                n.push(arguments[i]);
        if (null != n && (r.children = n),
        "function" == typeof e && null != e.defaultProps)
            for (i in e.defaultProps)
                void 0 === r[i] && (r[i] = e.defaultProps[i]);
        return en(e, r, a, s, null)
    }
    function en(e, t, n, a, s) {
        var i = {
            type: e,
            props: t,
            key: n,
            ref: a,
            _children: null,
            _parent: null,
            _depth: 0,
            _dom: null,
            _nextDom: void 0,
            _component: null,
            _hydrating: null,
            constructor: void 0,
            _original: null == s ? ++$t._vnodeId : s
        };
        return null != $t.vnode && $t.vnode(i),
        i
    }
    function tn(e) {
        return e.children
    }
    function nn(e, t) {
        this.props = e,
        this.context = t
    }
    function an(e, t) {
        if (null == t)
            return e._parent ? an(e._parent, e._parent._children.indexOf(e) + 1) : null;
        for (var n; t < e._children.length; t++)
            if (null != (n = e._children[t]) && null != n._dom)
                return n._dom;
        return "function" == typeof e.type ? an(e) : null
    }
    function sn(e) {
        var t = e._vnode
          , n = t._dom
          , a = e._parentDom;
        if (a) {
            var s = []
              , i = Gt({}, t);
            i._original = t._original + 1,
            yn(a, t, i, e._globalContext, void 0 !== a.ownerSVGElement, null != t._hydrating ? [n] : null, s, null == n ? an(t) : n, t._hydrating),
            bn(s, t),
            t._dom != n && rn(t)
        }
    }
    function rn(e) {
        if (null != (e = e._parent) && null != e._component) {
            e._dom = e._component.base = null;
            for (var t = 0; t < e._children.length; t++) {
                var n = e._children[t];
                if (null != n && null != n._dom) {
                    e._dom = e._component.base = n._dom;
                    break
                }
            }
            return rn(e)
        }
    }
    nn.prototype.setState = function(e, t) {
        var n;
        n = null != this._nextState && this._nextState !== this.state ? this._nextState : this._nextState = Gt({}, this.state),
        "function" == typeof e && (e = e(Gt({}, n), this.props)),
        e && Gt(n, e),
        null != e && this._vnode && (t && this._renderCallbacks.push(t),
        hn(this))
    }
    ,
    nn.prototype.forceUpdate = function(e) {
        this._vnode && (this._force = !0,
        e && this._renderCallbacks.push(e),
        hn(this))
    }
    ,
    nn.prototype.render = tn;
    var on, ln = [], cn = "function" == typeof Promise ? Promise.prototype.then.bind(Promise.resolve()) : setTimeout;
    function hn(e) {
        (!e._dirty && (e._dirty = !0) && ln.push(e) && !dn._rerenderCount++ || on !== $t.debounceRendering) && ((on = $t.debounceRendering) || cn)(dn)
    }
    function dn() {
        for (var e; dn._rerenderCount = ln.length; )
            e = ln.sort((function(e, t) {
                return e._vnode._depth - t._vnode._depth
            }
            )),
            ln = [],
            e.some((function(e) {
                e._dirty && sn(e)
            }
            ))
    }
    function un(e, t, n, a, s, i, r, o, l, c) {
        var h, d, u, m, _, p, v, f = a && a._children || Kt, g = f.length;
        for (n._children = [],
        h = 0; h < t.length; h++)
            if (null != (m = null == (m = t[h]) || "boolean" == typeof m ? n._children[h] = null : "string" == typeof m || "number" == typeof m || "bigint" == typeof m ? n._children[h] = en(null, m, null, null, m) : Array.isArray(m) ? n._children[h] = en(tn, {
                children: m
            }, null, null, null) : m._depth > 0 ? n._children[h] = en(m.type, m.props, m.key, null, m._original) : n._children[h] = m)) {
                if (m._parent = n,
                m._depth = n._depth + 1,
                null === (u = f[h]) || u && m.key == u.key && m.type === u.type)
                    f[h] = void 0;
                else
                    for (d = 0; d < g; d++) {
                        if ((u = f[d]) && m.key == u.key && m.type === u.type) {
                            f[d] = void 0;
                            break
                        }
                        u = null
                    }
                yn(e, m, u = u || Jt, s, i, r, o, l, c),
                _ = m._dom,
                (d = m.ref) && u.ref != d && (v || (v = []),
                u.ref && v.push(u.ref, null, m),
                v.push(d, m._component || _, m)),
                null != _ ? (null == p && (p = _),
                "function" == typeof m.type && null != m._children && m._children === u._children ? m._nextDom = l = mn(m, l, e) : l = _n(e, m, u, f, _, l),
                c || "option" !== n.type ? "function" == typeof n.type && (n._nextDom = l) : e.value = "") : l && u._dom == l && l.parentNode != e && (l = an(u))
            }
        for (n._dom = p,
        h = g; h--; )
            null != f[h] && ("function" == typeof n.type && null != f[h]._dom && f[h]._dom == n._nextDom && (n._nextDom = an(a, h + 1)),
            Dn(f[h], f[h]));
        if (v)
            for (h = 0; h < v.length; h++)
                xn(v[h], v[++h], v[++h])
    }
    function mn(e, t, n) {
        for (var a = 0; a < e._children.length; a++) {
            var s = e._children[a];
            s && (s._parent = e,
            t = "function" == typeof s.type ? mn(s, t, n) : _n(n, s, s, e._children, s._dom, t))
        }
        return t
    }
    function _n(e, t, n, a, s, i) {
        var r;
        if (void 0 !== t._nextDom)
            r = t._nextDom,
            t._nextDom = void 0;
        else if (null == n || s != i || null == s.parentNode)
            e: if (null == i || i.parentNode !== e)
                e.appendChild(s),
                r = null;
            else {
                for (var o = i, l = 0; (o = o.nextSibling) && l < a.length; l += 2)
                    if (o == s)
                        break e;
                e.insertBefore(s, i),
                r = i
            }
        return i = void 0 !== r ? r : s.nextSibling
    }
    function pn(e, t, n) {
        "-" === t[0] ? e.setProperty(t, n) : null == n ? e[t] = "" : "number" != typeof n || qt.test(t) ? e[t] = n : e[t] = n + "px"
    }
    function vn(e, t, n, a, s) {
        var i;
        e: if ("style" === t)
            if ("string" == typeof n)
                e.style.cssText = n;
            else {
                if ("string" == typeof a && (e.style.cssText = a = ""),
                a)
                    for (t in a)
                        n && t in n || pn(e.style, t, "");
                if (n)
                    for (t in n)
                        a && n[t] === a[t] || pn(e.style, t, n[t])
            }
        else if ("o" === t[0] && "n" === t[1])
            if (i = t !== (t = t.replace(/Capture$/, "")),
            t = t.toLowerCase()in e ? t.toLowerCase().slice(2) : t.slice(2),
            e._listeners || (e._listeners = {}),
            e._listeners[t + i] = n,
            n) {
                if (!a) {
                    var r = i ? gn : fn;
                    e.addEventListener(t, r, i)
                }
            } else {
                var o = i ? gn : fn;
                e.removeEventListener(t, o, i)
            }
        else if ("dangerouslySetInnerHTML" !== t) {
            if (s)
                t = t.replace(/xlink[H:h]/, "h").replace(/sName$/, "s");
            else if ("href" !== t && "list" !== t && "form" !== t && "tabIndex" !== t && "download" !== t && t in e)
                try {
                    e[t] = null == n ? "" : n;
                    break e
                } catch (e) {}
            "function" == typeof n || (null != n && (!1 !== n || "a" === t[0] && "r" === t[1]) ? e.setAttribute(t, n) : e.removeAttribute(t))
        }
    }
    function fn(e) {
        this._listeners[e.type + !1]($t.event ? $t.event(e) : e)
    }
    function gn(e) {
        this._listeners[e.type + !0]($t.event ? $t.event(e) : e)
    }
    function yn(e, t, n, a, s, i, r, o, l) {
        var c, h = t.type;
        if (void 0 !== t.constructor)
            return null;
        null != n._hydrating && (l = n._hydrating,
        o = t._dom = n._dom,
        t._hydrating = null,
        i = [o]),
        (c = $t._diff) && c(t);
        try {
            e: if ("function" == typeof h) {
                var d, u, m, _, p, v, f = t.props, g = (c = h.contextType) && a[c._id], y = c ? g ? g.props.value : c._defaultValue : a;
                if (n._component ? v = (d = t._component = n._component)._processingException = d._pendingError : ("prototype"in h && h.prototype.render ? t._component = d = new h(f,y) : (t._component = d = new nn(f,y),
                d.constructor = h,
                d.render = Tn),
                g && g.sub(d),
                d.props = f,
                d.state || (d.state = {}),
                d.context = y,
                d._globalContext = a,
                u = d._dirty = !0,
                d._renderCallbacks = []),
                null == d._nextState && (d._nextState = d.state),
                null != h.getDerivedStateFromProps && (d._nextState == d.state && (d._nextState = Gt({}, d._nextState)),
                Gt(d._nextState, h.getDerivedStateFromProps(f, d._nextState))),
                m = d.props,
                _ = d.state,
                u)
                    null == h.getDerivedStateFromProps && null != d.componentWillMount && d.componentWillMount(),
                    null != d.componentDidMount && d._renderCallbacks.push(d.componentDidMount);
                else {
                    if (null == h.getDerivedStateFromProps && f !== m && null != d.componentWillReceiveProps && d.componentWillReceiveProps(f, y),
                    !d._force && null != d.shouldComponentUpdate && !1 === d.shouldComponentUpdate(f, d._nextState, y) || t._original === n._original) {
                        d.props = f,
                        d.state = d._nextState,
                        t._original !== n._original && (d._dirty = !1),
                        d._vnode = t,
                        t._dom = n._dom,
                        t._children = n._children,
                        t._children.forEach((function(e) {
                            e && (e._parent = t)
                        }
                        )),
                        d._renderCallbacks.length && r.push(d);
                        break e
                    }
                    null != d.componentWillUpdate && d.componentWillUpdate(f, d._nextState, y),
                    null != d.componentDidUpdate && d._renderCallbacks.push((function() {
                        d.componentDidUpdate(m, _, p)
                    }
                    ))
                }
                d.context = y,
                d.props = f,
                d.state = d._nextState,
                (c = $t._render) && c(t),
                d._dirty = !1,
                d._vnode = t,
                d._parentDom = e,
                c = d.render(d.props, d.state, d.context),
                d.state = d._nextState,
                null != d.getChildContext && (a = Gt(Gt({}, a), d.getChildContext())),
                u || null == d.getSnapshotBeforeUpdate || (p = d.getSnapshotBeforeUpdate(m, _));
                var b = null != c && c.type === tn && null == c.key ? c.props.children : c;
                un(e, Array.isArray(b) ? b : [b], t, n, a, s, i, r, o, l),
                d.base = t._dom,
                t._hydrating = null,
                d._renderCallbacks.length && r.push(d),
                v && (d._pendingError = d._processingException = null),
                d._force = !1
            } else
                null == i && t._original === n._original ? (t._children = n._children,
                t._dom = n._dom) : t._dom = function(e, t, n, a, s, i, r, o) {
                    var l = n.props
                      , c = t.props
                      , h = t.type
                      , d = 0;
                    "svg" === h && (s = !0);
                    if (null != i)
                        for (; d < i.length; d++) {
                            var u = i[d];
                            if (u && (u === e || (h ? u.localName == h : 3 == u.nodeType))) {
                                e = u,
                                i[d] = null;
                                break
                            }
                        }
                    if (null == e) {
                        if (null === h)
                            return document.createTextNode(c);
                        e = s ? document.createElementNS("http://www.w3.org/2000/svg", h) : document.createElement(h, c.is && c),
                        i = null,
                        o = !1
                    }
                    if (null === h)
                        l === c || o && e.data === c || (e.data = c);
                    else {
                        i = i && Kt.slice.call(e.childNodes);
                        var m = (l = n.props || Jt).dangerouslySetInnerHTML
                          , _ = c.dangerouslySetInnerHTML;
                        if (o || (null != i && (l = {}),
                        (_ || m) && (_ && (m && _.__html == m.__html || _.__html === e.innerHTML) || (e.innerHTML = _ && _.__html || ""))),
                        function(e, t, n, a, s) {
                            var i;
                            for (i in n)
                                "children" === i || "key" === i || i in t || vn(e, i, null, n[i], a);
                            for (i in t)
                                s && "function" != typeof t[i] || "children" === i || "key" === i || "value" === i || "checked" === i || n[i] === t[i] || vn(e, i, t[i], n[i], a)
                        }(e, c, l, s, o),
                        _)
                            t._children = [];
                        else if (d = t.props.children,
                        un(e, Array.isArray(d) ? d : [d], t, n, a, s && "foreignObject" !== h, i, r, e.firstChild, o),
                        null != i)
                            for (d = i.length; d--; )
                                null != i[d] && Zt(i[d]);
                        o || ("value"in c && void 0 !== (d = c.value) && (d !== e.value || "progress" === h && !d) && vn(e, "value", d, l.value, !1),
                        "checked"in c && void 0 !== (d = c.checked) && d !== e.checked && vn(e, "checked", d, l.checked, !1))
                    }
                    return e
                }(n._dom, t, n, a, s, i, r, l);
            (c = $t.diffed) && c(t)
        } catch (e) {
            t._original = null,
            (l || null != i) && (t._dom = o,
            t._hydrating = !!l,
            i[i.indexOf(o)] = null),
            $t._catchError(e, t, n)
        }
    }
    function bn(e, t) {
        $t._commit && $t._commit(t, e),
        e.some((function(t) {
            try {
                e = t._renderCallbacks,
                t._renderCallbacks = [],
                e.some((function(e) {
                    e.call(t)
                }
                ))
            } catch (e) {
                $t._catchError(e, t._vnode)
            }
        }
        ))
    }
    function xn(e, t, n) {
        try {
            "function" == typeof e ? e(t) : e.current = t
        } catch (e) {
            $t._catchError(e, n)
        }
    }
    function Dn(e, t, n) {
        var a, s;
        if ($t.unmount && $t.unmount(e),
        (a = e.ref) && (a.current && a.current !== e._dom || xn(a, null, t)),
        n || "function" == typeof e.type || (n = null != (s = e._dom)),
        e._dom = e._nextDom = void 0,
        null != (a = e._component)) {
            if (a.componentWillUnmount)
                try {
                    a.componentWillUnmount()
                } catch (e) {
                    $t._catchError(e, t)
                }
            a.base = a._parentDom = null
        }
        if (a = e._children)
            for (var i = 0; i < a.length; i++)
                a[i] && Dn(a[i], t, n);
        null != s && Zt(s)
    }
    function Tn(e, t, n) {
        return this.constructor(e, n)
    }
    function Cn(e, t, n) {
        $t._root && $t._root(e, t);
        var a = "function" == typeof n
          , s = a ? null : n && n._children || t._children
          , i = [];
        yn(t, e = (!a && n || t)._children = Qt(tn, null, [e]), s || Jt, Jt, void 0 !== t.ownerSVGElement, !a && n ? [n] : s ? null : t.firstChild ? Kt.slice.call(t.childNodes) : null, i, !a && n ? n : s ? s._dom : t.firstChild, a),
        bn(i, e)
    }
    dn._rerenderCount = 0;
    var Sn = 0;
    function kn(e, t) {
        var n = {
            _id: t = "__cC" + Sn++,
            _defaultValue: e,
            Consumer: function(e, t) {
                return e.children(t)
            },
            Provider: function(e) {
                if (!this.getChildContext) {
                    var n = []
                      , a = {};
                    a[t] = this,
                    this.getChildContext = function() {
                        return a
                    }
                    ,
                    this.shouldComponentUpdate = function(e) {
                        this.props.value !== e.value && n.some(hn)
                    }
                    ,
                    this.sub = function(e) {
                        n.push(e);
                        var t = e.componentWillUnmount;
                        e.componentWillUnmount = function() {
                            n.splice(n.indexOf(e), 1),
                            t && t.call(e)
                        }
                    }
                }
                return e.children
            }
        };
        return n.Provider._contextRef = n.Consumer.contextType = n
    }
    var wn = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype.render = function() {}
        ,
        t.prototype.shouldComponentUpdate = function(e, t) {
            return Mn(e, this.props) || Mn(t, this.state)
        }
        ,
        t
    }(nn);
    function Mn(e, t) {
        for (var n in e)
            if (e[n] !== t[n])
                return !0;
        for (var n in t)
            if (!(n in e))
                return !0;
        return !1
    }
    var En = Qt;
    $t.vnode = function(e) {
        var t = e.props
          , n = {};
        if (pe(e.type)) {
            for (var a in t) {
                var s = t[a];
                /^onAni/.test(a) ? a = a.toLowerCase() : /ondoubleclick/i.test(a) && (a = "ondblclick"),
                n[a] = s
            }
            e.props = n
        }
    }
    ;
    var Nn = {}
      , Ln = 0;
    function In(e, t, n, a, s) {
        Ut(e, t) ? e.__mbscFormInst || Hn(n, e, s, a, !0) : Xt(e.querySelectorAll(t), (function(e) {
            e.__mbscFormInst || Hn(n, e, s, a, !0)
        }
        ))
    }
    function Hn(e, t, n, a, s) {
        var i, r, l = [], c = [], h = {}, d = a || {}, u = d.renderToParent ? t.parentNode : t, m = u.parentNode, _ = d.useOwnChildren ? t : u, p = t.getAttribute("class"), v = t.value, f = o({
            className: u.getAttribute("class")
        }, t.dataset, n, {
            ref: function(e) {
                r = e
            }
        });
        d.readProps && d.readProps.forEach((function(e) {
            var n = t[e];
            n !== le && (f[e] = n)
        }
        )),
        d.readAttrs && d.readAttrs.forEach((function(e) {
            var n = t.getAttribute(e);
            null !== n && (f[e] = n)
        }
        ));
        var g = d.slots;
        if (g)
            for (var y in g)
                if (g.hasOwnProperty(y)) {
                    var b = g[y]
                      , x = u.querySelector("[mbsc-" + b + "]");
                    x && (h[y] = x,
                    x.parentNode.removeChild(x),
                    f[y] = En("span", {
                        className: "mbsc-slot-" + b
                    }))
                }
        if (d.hasChildren && (Xt(_.childNodes, (function(e) {
            e !== t && 8 !== e.nodeType && (3 !== e.nodeType || 3 === e.nodeType && /\S/.test(e.nodeValue)) && l.push(e),
            c.push(e)
        }
        )),
        Xt(l, (function(e) {
            _.removeChild(e)
        }
        )),
        l.length && (f.hasChildren = !0)),
        t.id || (t.id = "mbsc-control-" + Ln++),
        d.before && d.before(t, f, l),
        Cn(En(e, f), m, u),
        p && d.renderToParent && (i = t.classList).add.apply(i, p.replace(/^\s+|\s+$/g, "").replace(/\s+|^\s|\s$/g, " ").split(" ")),
        d.hasChildren) {
            var D = "." + d.parentClass
              , T = Ut(u, D) ? u : u.querySelector(D);
            T && Xt(l, (function(e) {
                T.appendChild(e)
            }
            ))
        }
        if (d.hasValue && (t.value = v),
        g) {
            var C = function(e) {
                if (h.hasOwnProperty(e)) {
                    var t = g[e]
                      , n = h[e];
                    Xt(u.querySelectorAll(".mbsc-slot-" + t), (function(e, t) {
                        var a = t > 0 ? n.cloneNode(!0) : n;
                        e.appendChild(a)
                    }
                    ))
                }
            };
            for (var y in h)
                C(y)
        }
        return r.destroy = function() {
            var e = u.parentNode
              , n = mt.createComment("");
            e.insertBefore(n, u),
            Cn(null, u),
            delete t.__mbscInst,
            delete t.__mbscFormInst,
            u.innerHTML = "",
            u.setAttribute("class", f.className),
            e.replaceChild(u, n),
            d.hasChildren && Xt(c, (function(e) {
                _.appendChild(e)
            }
            )),
            d.renderToParent && t.setAttribute("class", p)
        }
        ,
        s ? (t.__mbscInst || (t.__mbscInst = r),
        t.__mbscFormInst = r) : t.__mbscInst = r,
        r
    }
    function On(e, t) {
        if (e)
            for (var n in Nn)
                if (Nn.hasOwnProperty(n)) {
                    var a = Nn[n];
                    In(e, a._selector, a, a._renderOpt, t)
                }
    }
    var Pn, Yn = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._newProps = {},
            t._setEl = function(e) {
                t._el = e ? e._el || e : null
            }
            ,
            t
        }
        return r(t, e),
        t.prototype.componentDidMount = function() {
            this.__init(),
            this._init(),
            this._mounted(),
            this._updated()
        }
        ,
        t.prototype.componentDidUpdate = function() {
            this._updated()
        }
        ,
        t.prototype.componentWillUnmount = function() {
            this._destroy(),
            this.__destroy()
        }
        ,
        t.prototype.render = function() {
            return this._willUpdate(),
            this._template(this.s, this.state)
        }
        ,
        t.prototype.getInst = function() {
            return this
        }
        ,
        t.prototype.setOptions = function(e) {
            this._newProps = o({}, this._newProps, e),
            this.forceUpdate()
        }
        ,
        t.prototype._safeHtml = function(e) {
            return {
                __html: e
            }
        }
        ,
        t.prototype._init = function() {}
        ,
        t.prototype.__init = function() {}
        ,
        t.prototype._emit = function(e, t) {}
        ,
        t.prototype._template = function(e, t) {}
        ,
        t.prototype._mounted = function() {}
        ,
        t.prototype._updated = function() {}
        ,
        t.prototype._destroy = function() {}
        ,
        t.prototype.__destroy = function() {}
        ,
        t.prototype._willUpdate = function() {}
        ,
        t
    }(wn), Vn = "5.7.2", Fn = 0, zn = {}, Rn = new Function("textParam,p",function() {
        var e, t = function(e, t) {
            var n, a = function(e) {
                var t, n = e[0];
                for (t = 0; t < 16; ++t)
                    if (n * t % 16 == 1)
                        return [t, e[1]]
            }(t), s = function(e, t, n, a) {
                var s, i = "0123456789abcdef", r = "", o = t.length;
                for (s = 0; s < o; ++s)
                    r += e ? i[(n * i.indexOf(t[s]) + a) % 16] : i[((n * i.indexOf(t[s]) - n * a) % 16 + 16) % 16];
                return r
            }(0, e, a[0], a[1]), i = s.length, r = [];
            for (n = 0; n < i; n += 2)
                r.push(s[n] + s[n + 1]);
            return r
        }("7c7a797b7ce5707c58e17ae1eda67ee1e43d313b7ae57c757ae6a0cde17ce0a67ae1e6ecefeda0a934cde17ce0a6ede170a038a6383ea478a93fa734ece97ea8737c79e4e53daaa7abee75e6e37ce9efe6a0e5a97b7ee17aa87c3de5a6e4e5e6e77ce0a4e6a47a3b77e0e9e4e5a038a13d3d7ca97b7a3dcde17ce0a6eee4efef7aa0cde17ce0a67ae1e6ecefeda0a9a27ca93b7cad3d313be63de55b7c5d3be55b7c5d3de55b7a5d3be55b7a5d3de67d7ae57c757ae6a8e57da05ba778efe9e67ce57aade57ee5e67c7332e6efe6e5a7a4a7ece97378e4e17932eae4efe3eba1e9ed78ef7a7ce1e67ca7a4a778ef73e97ce9efe632e1ea73efe4757ce5a1e9ed78ef7a7ce1e67ca7a4a77cef783238a1e9ed78ef7a7ce1e67ca7a4a7e4e5ee7c3238a1e9ed78ef7a7ce1e67ca7a4a7eaef7c7cefed3238a1e9ed78ef7a7ce1e67ca7a4a77ae9e7e07c3238a1e9ed78ef7a7ce1e67ca7a4a7ede17ae7e9e63238a1e9ed78ef7a7ce1e67ca7a4a778e1ecece9e6e73238a1e9ed78ef7a7ce1e67ca7a4a7eeefe67cad73e972e532307870a1e9ed78ef7a7ce1e67ca7a4a7e4e9e6e5ade0e5e9e7e07c32313a7870a7a4a77ce5707cade1e4e9e7e632e3e5e67ce57aa7a4a7ef78e1e3e97c7932a7aba0cde17ce0a6eee4efef7aa0cde17ce0a67ae1e6ecefeda0a9a23a38a9af313838ab38a630a9aba7a1e9ed78ef7a7ce1e67ca75da9a6e2efe9e6a0a73ba7a9aba7aa3654753838353c54753838353a547538383c39547538383c31547538383ce334afece97e36a732a7a7a97de3e17ce3e0a0e5a97b7ae57c757ae6a8a7a77dd2", [9, 8]), n = "", a = t.length;
        for (e = 0; e < a; e++)
            n += String.fromCharCode(parseInt(t[e], 16));
        return n
    }()), An = {
        large: 992,
        medium: 768,
        small: 576,
        xlarge: 1200,
        xsmall: 0
    };
    f && (Pn = f.matches,
    f.addListener((function(e) {
        Pn = e.matches,
        w.next()
    }
    )));
    var Wn, Un, Bn = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t.s = {},
            t.state = {},
            t._mbsc = !0,
            t._v = {
                version: "5.7.2"
            },
            t._uid = ++Fn,
            t.__getText = Rn,
            t
        }
        return r(t, e),
        Object.defineProperty(t.prototype, "nativeElement", {
            get: function() {
                return this._el
            },
            enumerable: !0,
            configurable: !0
        }),
        Object.defineProperty(t.prototype, "__getTextParam", {
            get: function() {
                return zn.val
            },
            enumerable: !0,
            configurable: !0
        }),
        Object.defineProperty(t.prototype, "textParam", {
            get: function() {
                return void 0 === this._textParam && (this._textParam = this.__getText(zn, .15)),
                this._safeHtml(this._textParam)
            },
            enumerable: !0,
            configurable: !0
        }),
        t.prototype.destroy = function() {}
        ,
        t.prototype._hook = function(e, t) {
            var n = this.s;
            if (t.inst = this,
            t.type = e,
            this._emit(e, t),
            n[e])
                return n[e](t, this)
        }
        ,
        t.prototype.__init = function() {
            var e = this;
            this.constructor.defaults && (this._optChange = w.subscribe((function() {
                e.forceUpdate()
            }
            ))),
            this._hook("onInit", {})
        }
        ,
        t.prototype.__destroy = function() {
            this._optChange !== le && w.unsubscribe(this._optChange),
            this._hook("onDestroy", {})
        }
        ,
        t.prototype._render = function(e, t) {}
        ,
        t.prototype._willUpdate = function() {
            this._merge(),
            this._render(this.s, this.state)
        }
        ,
        t.prototype._resp = function(e) {
            var t, n = e.responsive, a = -1, s = this.state.width;
            if (s === le && (s = _t ? _t.innerWidth : 375),
            n && s)
                for (var i in n)
                    if (n.hasOwnProperty(i)) {
                        var r = n[i]
                          , o = r.breakpoint || An[i];
                        s >= o && o > a && (t = r,
                        a = o)
                    }
            return t
        }
        ,
        t.prototype._merge = function() {
            var e, t, n, a = this.constructor, s = a.defaults, i = this._opt || {}, r = {};
            if (this._prevS = this.s || {},
            s) {
                for (var l in this.props)
                    this.props[l] !== le && (r[l] = this.props[l]);
                if (this._newProps)
                    for (var l in this._newProps)
                        this._newProps[l] !== le && (r[l] = this._newProps[l]);
                var h = r.locale || i.locale || T.locale || {}
                  , d = r.calendarSystem || h.calendarSystem || i.calendarSystem || T.calendarSystem
                  , u = r.theme || i.theme || T.theme
                  , m = r.themeVariant || i.themeVariant || T.themeVariant;
                "auto" !== u && u || (u = k.theme),
                "dark" !== m && (!Pn || "auto" !== m && m) || !S[u + "-dark"] || (u += "-dark"),
                r.theme = u;
                var _ = (n = S[u]) && S[u][a._name];
                t = o({}, s, T, _, h, i, d, r);
                var v = this._resp(t);
                this._respProps = v,
                v && (t = o({}, t, v))
            } else
                t = o({}, this.props),
                n = S[t.theme];
            e = n && n.baseTheme,
            t.baseTheme = e,
            this.s = t,
            this._className = t.cssClass || t.class || t.className || "",
            this._rtl = " mbsc-" + (t.rtl ? "rtl" : "ltr"),
            this._theme = " mbsc-" + t.theme + (e ? " mbsc-" + e : ""),
            this._touchUi = "auto" === t.touchUi || t.touchUi === le ? p : t.touchUi,
            this._hb = "ios" !== c || "ios" !== t.theme && "ios" !== e ? "" : " mbsc-hb"
        }
        ,
        t.defaults = le,
        t._name = "",
        t
    }(Yn), jn = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            return En("span", {
                onClick: e.onClick,
                className: this._cssClass,
                dangerouslySetInnerHTML: this._svg
            }, this._hasChildren && e.name)
        }
        ,
        t
    }(function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._render = function(e) {
            this._hasChildren = !pe(e.name),
            this._cssClass = this._className + " mbsc-icon" + this._theme + (e.name && !this._hasChildren ? -1 !== e.name.indexOf(" ") ? " " + e.name : " mbsc-font-icon mbsc-icon-" + e.name : ""),
            this._svg = e.svg ? this._safeHtml(e.svg) : le
        }
        ,
        t
    }(Bn)), Xn = "animationstart", Jn = "blur", Kn = "change", qn = "click", Gn = "contextmenu", Zn = "dblclick", $n = "focus", Qn = "focusin", ea = "input", ta = "keydown", na = "mousedown", aa = "mousemove", sa = "mouseup", ia = "mouseenter", ra = "mouseleave", oa = "mousewheel", la = "resize", ca = "scroll", ha = "touchstart", da = "touchmove", ua = "touchend", ma = "touchcancel", _a = "wheel", pa = 0;
    function va(e, t, n) {
        var a = (n ? "page" : "client") + t;
        return e.targetTouches && e.targetTouches[0] ? e.targetTouches[0][a] : e.changedTouches && e.changedTouches[0] ? e.changedTouches[0][a] : e[a]
    }
    function fa(e, t) {
        if (!t.mbscClick) {
            var n = (e.originalEvent || e).changedTouches[0]
              , a = document.createEvent("MouseEvents");
            a.initMouseEvent("click", !0, !0, window, 1, n.screenX, n.screenY, n.clientX, n.clientY, !1, !1, !1, !1, 0, null),
            a.isMbscTap = !0,
            a.isIonicTap = !0,
            Wn = !0,
            t.mbscChange = !0,
            t.mbscClick = !0,
            t.dispatchEvent(a),
            Wn = !1,
            pa++,
            setTimeout((function() {
                pa--
            }
            ), 500),
            setTimeout((function() {
                delete t.mbscClick
            }
            ))
        }
    }
    function ga(e) {
        !pa || Wn || e.isMbscTap || "TEXTAREA" === e.target.nodeName && e.type === na || (e.stopPropagation(),
        e.preventDefault())
    }
    function ya(e) {
        Yt(e.target).__mbscFocusVisible = !1
    }
    function ba(e) {
        Yt(e.target).__mbscFocusVisible = !0
    }
    function xa(e) {
        It(e.target).__mbscMoveObs.next(e)
    }
    function Da(e) {
        e && setTimeout((function() {
            e.style.opacity = "0",
            e.style.transition = "opacity linear .4s",
            setTimeout((function() {
                e && e.parentNode && e.parentNode.removeChild(e)
            }
            ), 400)
        }
        ), 200)
    }
    function Ta(e, t) {
        var n, a, s, i, r, o, l, c, h, d, u, _, p, v, f, g, y = {}, b = Yt(e), x = It(e);
        function D(e) {
            if (e.type === ha)
                Un = !0;
            else if (Un)
                return e.type === na && (Un = !1),
                !0;
            return !1
        }
        function T() {
            l && (Da(i),
            i = function(e, t, n) {
                var a = e.getBoundingClientRect()
                  , s = t - a.left
                  , i = n - a.top
                  , r = Math.max(s, e.offsetWidth - s)
                  , o = Math.max(i, e.offsetHeight - i)
                  , l = 2 * Math.sqrt(Math.pow(r, 2) + Math.pow(o, 2))
                  , c = mt.createElement("span");
                c.classList.add("mbsc-ripple");
                var h = c.style;
                return h.backgroundColor = getComputedStyle(e).color,
                h.width = l + "px",
                h.height = l + "px",
                h.top = n - a.top - l / 2 + "px",
                h.left = t - a.left - l / 2 + "px",
                e.appendChild(c),
                setTimeout((function() {
                    h.opacity = ".2",
                    h.transform = "scale(1)",
                    h.transition = "opacity linear .1s, transform cubic-bezier(0, 0, 0.2, 1) .4s"
                }
                ), 30),
                c
            }(e, _, p)),
            t.onPress(),
            n = !0
        }
        function C(e, i) {
            a = !1,
            Da(e),
            clearTimeout(s),
            s = setTimeout((function() {
                n && (t.onRelease(),
                n = !1)
            }
            ), i)
        }
        function S(e) {
            if (!D(e) && (e.type !== na || 0 === e.button && !e.ctrlKey)) {
                if (d = va(e, "X"),
                u = va(e, "Y"),
                _ = d,
                p = u,
                n = !1,
                a = !1,
                c = !1,
                g = !0,
                y.moved = c,
                y.startX = d,
                y.startY = u,
                y.endX = _,
                y.endY = p,
                y.deltaX = 0,
                y.deltaY = 0,
                y.domEvent = e,
                y.isTouch = Un,
                Da(i),
                t.onStart) {
                    var r = t.onStart(y);
                    l = r && r.ripple
                }
                t.onPress && (a = !0,
                clearTimeout(s),
                s = setTimeout(T, 50)),
                e.type === na && (Nt(x, aa, k),
                Nt(x, sa, w)),
                Nt(x, Gn, P)
            }
        }
        function k(e) {
            g && (_ = va(e, "X"),
            p = va(e, "Y"),
            v = _ - d,
            f = p - u,
            !c && (Math.abs(v) > 9 || Math.abs(f) > 9) && (c = !0,
            C(i)),
            y.moved = c,
            y.endX = _,
            y.endY = p,
            y.deltaX = v,
            y.deltaY = f,
            y.domEvent = e,
            y.isTouch = e.type === da,
            t.onMove && t.onMove(y))
        }
        function w(e) {
            g && (a && !n && (clearTimeout(s),
            T()),
            y.domEvent = e,
            y.isTouch = e.type === ua,
            t.onEnd && t.onEnd(y),
            C(i, 75),
            g = !1,
            e.type === ua && t.click && kt && !c && fa(e, e.target),
            e.type === sa && (Lt(x, aa, k),
            Lt(x, sa, w)),
            Lt(x, Gn, P))
        }
        function M(e) {
            D(e) || (o = !0,
            t.onHoverIn(e))
        }
        function E(e) {
            o && t.onHoverOut(e),
            o = !1
        }
        function N(e) {
            t.onKeyDown(e)
        }
        function L(e) {
            (t.keepFocus || b.__mbscFocusVisible) && (r = !0,
            t.onFocus(e))
        }
        function I(e) {
            r && t.onBlur(e),
            r = !1
        }
        function H(e) {
            t.onChange(e)
        }
        function O(e) {
            y.domEvent = e,
            Un || t.onDoubleClick(y)
        }
        function P(e) {
            Un && e.preventDefault()
        }
        if (Nt(e, ha, S, {
            passive: !0
        }),
        Nt(e, na, S),
        Nt(e, ua, w),
        Nt(e, ma, w),
        x) {
            var Y = x.__mbscMoveCount || 0
              , V = x.__mbscMoveObs || new m;
            0 === Y && Nt(x, da, xa, {
                passive: !1
            }),
            x.__mbscMoveObs = V,
            x.__mbscMoveCount = ++Y,
            h = V.subscribe(k)
        }
        if (t.onChange && Nt(e, Kn, H),
        t.onHoverIn && Nt(e, ia, M),
        t.onHoverOut && Nt(e, ra, E),
        t.onKeyDown && Nt(e, ta, N),
        t.onFocus && b && (Nt(e, $n, L),
        !t.keepFocus)) {
            var F = b.__mbscFocusCount || 0;
            0 === F && (Nt(b, na, ya, !0),
            Nt(b, ta, ba, !0)),
            b.__mbscFocusCount = ++F
        }
        return t.onBlur && Nt(e, Jn, I),
        t.onDoubleClick && Nt(e, Zn, O),
        function() {
            if (clearTimeout(s),
            t.onFocus && b && !t.keepFocus) {
                var n = b.__mbscFocusCount || 0;
                b.__mbscFocusCount = --n,
                n <= 0 && (Lt(b, na, ya),
                Lt(b, ta, ba))
            }
            if (x) {
                var a = x.__mbscMoveCount || 0;
                x.__mbscMoveCount = --a,
                x.__mbscMoveObs && x.__mbscMoveObs.unsubscribe(h),
                a <= 0 && (delete x.__mbscMoveCount,
                delete x.__mbscMoveObs,
                Lt(x, da, xa, {
                    passive: !1
                }))
            }
            Lt(e, na, S, {
                passive: !0
            }),
            Lt(e, ua, w),
            Lt(e, ma, w),
            Lt(x, aa, k),
            Lt(x, sa, w),
            Lt(x, Gn, P),
            Lt(e, Kn, H),
            Lt(e, ia, M),
            Lt(e, ra, E),
            Lt(e, ta, N),
            Lt(e, ha, S),
            Lt(e, $n, L),
            Lt(e, Jn, I),
            Lt(e, Zn, O)
        }
    }
    v && (["mousedown", ia, na, sa, qn].forEach((function(e) {
        mt.addEventListener(e, ga, !0)
    }
    )),
    "android" === c && d < 5 && mt.addEventListener(Kn, (function(e) {
        var t = e.target;
        pa && "checkbox" === t.type && !t.mbscChange && (e.stopPropagation(),
        e.preventDefault()),
        delete t.mbscChange
    }
    ), !0));
    var Ca, Sa = new m, ka = 0;
    function wa() {
        clearTimeout(Ca),
        Ca = setTimeout((function() {
            Sa.next()
        }
        ), 100)
    }
    function Ma(e) {
        try {
            return Ut(e, "*:-webkit-autofill")
        } catch (e) {
            return !1
        }
    }
    var Ea = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        Object.defineProperty(t.prototype, "value", {
            get: function() {
                return this._el && this._el.value
            },
            set: function(e) {
                this._el.value = e,
                this._checkFloating()
            },
            enumerable: !0,
            configurable: !0
        }),
        t.prototype._template = function(e, t) {
            var n = this
              , a = this.props
              , s = a.children
              , i = a.dropdown;
            a.dropdownIcon,
            a.endIcon,
            a.endIconSrc,
            a.endIconSvg,
            a.error;
            var r = a.errorMessage
              , c = a.hasChildren;
            a.hideIcon,
            a.hideIconSvg,
            a.inputClass,
            a.inputStyle,
            a.label,
            a.labelStyle,
            a.notch,
            a.passwordToggle,
            a.pickerMap,
            a.pickerValue,
            a.ripple,
            a.rows,
            a.rtl,
            a.showIcon,
            a.showIconSvg,
            a.startIcon,
            a.startIconSrc,
            a.startIconSvg;
            var h = a.tags;
            a.theme,
            a.themeVariant;
            var d = a.type
              , u = l(a, ["children", "dropdown", "dropdownIcon", "endIcon", "endIconSrc", "endIconSvg", "error", "errorMessage", "hasChildren", "hideIcon", "hideIconSvg", "inputClass", "inputStyle", "label", "labelStyle", "notch", "passwordToggle", "pickerMap", "pickerValue", "ripple", "rows", "rtl", "showIcon", "showIconSvg", "startIcon", "startIconSrc", "startIconSvg", "tags", "theme", "themeVariant", "type"])
              , m = e.label;
            return En("label", {
                className: this._cssClass,
                onMouseDown: this._onMouseDown
            }, (m || c) && En("span", {
                className: this._labelClass
            }, c ? "" : m), En("span", {
                className: this._innerClass
            }, "input" === this._tag && En("input", o({}, u, {
                ref: this._setEl,
                className: this._nativeElmClass + (e.tags ? " mbsc-textfield-hidden" : ""),
                disabled: this._disabled,
                type: e.passwordToggle ? this._hidePass ? "password" : "text" : d
            })), "file" === d && En("input", {
                className: this._dummyElmClass,
                disabled: this._disabled,
                placeholder: e.placeholder,
                readOnly: !0,
                type: "text",
                value: t.files || ""
            }), "select" === this._tag && En("select", o({}, u, {
                ref: this._setEl,
                className: "mbsc-select" + this._nativeElmClass,
                disabled: this._disabled
            }), s), "textarea" === this._tag && En("textarea", o({}, u, {
                ref: this._setEl,
                className: this._nativeElmClass,
                disabled: this._disabled
            })), h && En("span", {
                className: "mbsc-textfield-tags" + this._nativeElmClass
            }, this._tagsArray.map((function(t, a) {
                return t && En("span", {
                    key: a,
                    className: "mbsc-textfield-tag" + n._theme + n._rtl
                }, En("span", {
                    className: "mbsc-textfield-tag-text" + n._theme
                }, t), En(jn, {
                    className: "mbsc-textfield-tag-clear",
                    onClick: function(e) {
                        return n._onTagClear(e, a)
                    },
                    svg: e.clearIcon,
                    theme: e.theme
                }))
            }
            ))), ("select" === this._tag || i) && En(jn, {
                className: this._selectIconClass,
                svg: e.dropdownIcon,
                theme: e.theme
            }), this._hasStartIcon && En(jn, {
                className: this._startIconClass,
                name: e.startIcon,
                svg: e.startIconSvg,
                theme: e.theme
            }), this._hasEndIcon && !e.passwordToggle && En(jn, {
                className: this._endIconClass,
                name: e.endIcon,
                svg: e.endIconSvg,
                theme: e.theme
            }), e.passwordToggle && En(jn, {
                onClick: this._onClick,
                className: this._passIconClass,
                name: this._hidePass ? e.showIcon : e.hideIcon,
                svg: this._hidePass ? e.showIconSvg : e.hideIconSvg,
                theme: e.theme
            }), this._hasError && En("span", {
                className: this._errorClass
            }, r), e.notch && "outline" === e.inputStyle && En("fieldset", {
                "aria-hidden": "true",
                className: this._fieldSetClass
            }, En("legend", {
                className: this._legendClass
            }, m && "inline" !== e.labelStyle ? m : "&nbsp;")), e.ripple && "outline" !== e.inputStyle && En("span", {
                className: this._rippleClass
            })))
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._tag = "input",
            t._onClick = function() {
                t._hidePass = !t._hidePass
            }
            ,
            t._onMouseDown = function(e) {
                t.s.tags && (t._preventFocus = !0)
            }
            ,
            t._onTagClear = function(e, n) {
                e.stopPropagation(),
                e.preventDefault();
                var a = t.s.pickerValue.slice();
                a.splice(n, 1),
                jt(t._el, Kn, a)
            }
            ,
            t._onAutoFill = function() {
                "floating" === t.s.labelStyle && Ma(t._el) && t.setState({
                    isFloatingActive: !0
                })
            }
            ,
            t._sizeTextArea = function() {
                var e, n, a, s = t._el, i = t.s.rows;
                s.offsetHeight && (s.style.height = "",
                a = s.scrollHeight - s.offsetHeight,
                e = s.offsetHeight + (a > 0 ? a : 0),
                (n = Math.round(e / 24)) > i ? (e = 24 * i + (e - 24 * n),
                s.style.overflow = "auto") : s.style.overflow = "",
                e && (s.style.height = e + "px"))
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._checkFloating = function() {
            var e = this._el
              , t = this.s
              , n = Ma(e)
              , a = this.state.hasFocus || n || this.value;
            if (e && "floating" === t.labelStyle) {
                if ("select" === this._tag) {
                    var s = e
                      , i = s.options[0];
                    a = !!(a || s.multiple || s.value || s.selectedIndex > -1 && i && i.label)
                } else {
                    a = !(!a && !e.value)
                }
                this._valueChecked = !0,
                this.setState({
                    isFloatingActive: a
                })
            }
        }
        ,
        t.prototype._mounted = function() {
            var e, t = this, n = this.s, a = this._el;
            Nt(a, Xn, this._onAutoFill),
            "textarea" === this._tag && (Nt(a, ea, this._sizeTextArea),
            this._unsubscribe = (e = this._sizeTextArea,
            ka || Nt(_t, la, wa),
            ka++,
            Sa.subscribe(e))),
            this._unlisten = Ta(a, {
                keepFocus: !0,
                onBlur: function() {
                    t.setState({
                        hasFocus: !1,
                        isFloatingActive: !!a.value
                    })
                },
                onChange: function(e) {
                    if ("file" === n.type) {
                        for (var a = [], s = 0, i = e.target.files; s < i.length; s++) {
                            var r = i[s];
                            a.push(r.name)
                        }
                        t.setState({
                            files: a.join(", ")
                        })
                    }
                    n.tags && n.value === le && n.defaultValue === le && t.setState({
                        value: e.target.value
                    }),
                    t._checkFloating(),
                    t._emit("onChange", e)
                },
                onFocus: function() {
                    t._preventFocus || t.setState({
                        hasFocus: !0,
                        isFloatingActive: !0
                    }),
                    t._preventFocus = !1
                },
                onHoverIn: function() {
                    t._disabled || t.setState({
                        hasHover: !0
                    })
                },
                onHoverOut: function() {
                    t.setState({
                        hasHover: !1
                    })
                }
            })
        }
        ,
        t.prototype._render = function(e, t) {
            var n = !(!e.endIconSvg && !e.endIcon)
              , a = e.pickerValue
              , s = !(!e.startIconSvg && !e.startIcon)
              , i = e.label !== le || e.hasChildren
              , r = e.error
              , o = e.rtl ? "right" : "left"
              , l = e.rtl ? "left" : "right"
              , c = e.inputStyle
              , h = e.labelStyle
              , d = "floating" === h
              , u = !(!d || !i || !t.isFloatingActive && !e.value)
              , m = e.disabled === le ? t.disabled : e.disabled
              , _ = this._prevS
              , p = e.value || t.value || e.defaultValue
              , v = this._theme + this._rtl + (r ? " mbsc-error" : "") + (m ? " mbsc-disabled" : "") + (t.hasHover ? " mbsc-hover" : "") + (t.hasFocus && !m ? " mbsc-focus" : "");
            if ("file" !== e.type || n || (e.endIconSvg = '<svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM14 13v4h-4v-4H7l5-5 5 5h-3z"/></svg>',
            n = !0),
            e.tags && (ve(a) && (a = []),
            me(a) || (a = [a]),
            this._tagsArray = e.pickerMap ? a.map((function(t) {
                return e.pickerMap.get(t)
            }
            )) : p === le ? [] : p.split(", ")),
            this._hasStartIcon = s,
            this._hasEndIcon = n,
            this._hasError = r,
            this._disabled = m,
            this._cssClass = this._className + this._hb + v + " mbsc-form-control-wrapper mbsc-textfield-wrapper mbsc-font mbsc-textfield-wrapper-" + c + (m ? " mbsc-disabled" : "") + (i ? " mbsc-textfield-wrapper-" + h : "") + (s ? " mbsc-textfield-wrapper-has-icon-" + o + " " : "") + (n ? " mbsc-textfield-wrapper-has-icon-" + l + " " : ""),
            i && (this._labelClass = v + " mbsc-label mbsc-label-" + h + " mbsc-label-" + c + "-" + h + (s ? " mbsc-label-" + c + "-" + h + "-has-icon-" + o + " " : "") + (n ? " mbsc-label-" + c + "-" + h + "-has-icon-" + l + " " : "") + (d && this._animateFloating ? " mbsc-label-floating-animate" : "") + (u ? " mbsc-label-floating-active" : "")),
            this._innerClass = v + " mbsc-textfield-inner mbsc-textfield-inner-" + c + (i ? " mbsc-textfield-inner-" + h : ""),
            s && (this._startIconClass = v + " mbsc-textfield-icon mbsc-textfield-icon-" + c + " mbsc-textfield-icon-" + o + " mbsc-textfield-icon-" + c + "-" + o + (i ? " mbsc-textfield-icon-" + h : "")),
            n && (this._endIconClass = v + " mbsc-textfield-icon mbsc-textfield-icon-" + c + " mbsc-textfield-icon-" + l + " mbsc-textfield-icon-" + c + "-" + l + (i ? " mbsc-textfield-icon-" + h : "")),
            e.passwordToggle && (this._passIconClass = v + " mbsc-toggle-icon mbsc-textfield-icon mbsc-textfield-icon-" + c + " mbsc-textfield-icon-" + l + " mbsc-textfield-icon-" + c + "-" + l + (i ? " mbsc-textfield-icon-" + h : ""),
            this._hidePass = this._hidePass === le ? "password" === this.s.type : this._hidePass),
            this._nativeElmClass = v + " " + (e.inputClass || "") + " mbsc-textfield mbsc-textfield-" + c + (e.dropdown ? " mbsc-select" : "") + (i ? " mbsc-textfield-" + h + " mbsc-textfield-" + c + "-" + h : "") + (u ? " mbsc-textfield-floating-active" : "") + (s ? " mbsc-textfield-has-icon-" + o + " mbsc-textfield-" + c + "-has-icon-" + o + (i ? " mbsc-textfield-" + c + "-" + h + "-has-icon-" + o : "") : "") + (n ? " mbsc-textfield-has-icon-" + l + " mbsc-textfield-" + c + "-has-icon-" + l + (i ? " mbsc-textfield-" + c + "-" + h + "-has-icon-" + l : "") : ""),
            ("select" === this._tag || e.dropdown) && (this._selectIconClass = "mbsc-select-icon mbsc-select-icon-" + c + this._rtl + this._theme + (i ? " mbsc-select-icon-" + h : "") + (s ? " mbsc-select-icon-" + o : "") + (n ? " mbsc-select-icon-" + l : "")),
            "textarea" === this._tag || e.tags) {
                this._cssClass += " mbsc-textarea-wrapper",
                this._innerClass += " mbsc-textarea-inner",
                this._nativeElmClass += " mbsc-textarea";
                var f = _.value || _.defaultValue;
                "textarea" !== this._tag || p === f && e.inputStyle === _.inputStyle && e.labelStyle === _.labelStyle && e.rows === _.rows && e.theme === _.theme || (this._shouldSize = !0)
            }
            e.tags && (this._innerClass += " mbsc-textfield-tags-inner"),
            "file" === e.type && (this._dummyElmClass = this._nativeElmClass,
            this._nativeElmClass += " mbsc-textfield-file"),
            this._errorClass = this._theme + this._rtl + " mbsc-error-message mbsc-error-message-" + c + (i ? " mbsc-error-message-" + h : "") + (s ? " mbsc-error-message-has-icon-" + o : "") + (n ? " mbsc-error-message-has-icon-" + l : ""),
            e.notch && "outline" === c && (this._fieldSetClass = "mbsc-textfield-fieldset" + v + (s ? " mbsc-textfield-fieldset-has-icon-" + o : "") + (n ? " mbsc-textfield-fieldset-has-icon-" + l : ""),
            this._legendClass = "mbsc-textfield-legend" + this._theme + (u || i && "stacked" === h ? " mbsc-textfield-legend-active" : "")),
            e.ripple && "outline" !== e.inputStyle && (this._rippleClass = "mbsc-textfield-ripple" + this._theme + (r ? " mbsc-error" : "") + (t.hasFocus ? " mbsc-textfield-ripple-active" : "")),
            this._valueChecked && (this._animateFloating = !0)
        }
        ,
        t.prototype._updated = function() {
            this._shouldSize && (this._shouldSize = !1,
            this._sizeTextArea()),
            this._checkFloating()
        }
        ,
        t.prototype._destroy = function() {
            Lt(this._el, Xn, this._onAutoFill),
            Lt(this._el, ea, this._sizeTextArea),
            function(e) {
                ka--,
                Sa.unsubscribe(e),
                ka || Lt(_t, la, wa)
            }(this._unsubscribe),
            this._unlisten()
        }
        ,
        t.defaults = {
            dropdown: !1,
            dropdownIcon: I,
            hideIcon: "eye-blocked",
            inputStyle: "underline",
            labelStyle: "stacked",
            placeholder: "",
            ripple: !1,
            rows: 6,
            showIcon: "eye",
            type: "text"
        },
        t._name = "Input",
        t
    }(Bn));
    function Na(e) {
        return this.getChildContext = function() {
            return e.context
        }
        ,
        e.children
    }
    function La(e) {
        var t = this
          , n = e._container;
        t.componentWillUnmount = function() {
            Cn(null, t._temp),
            t._temp = null,
            t._container = null
        }
        ,
        t._container && t._container !== n && t.componentWillUnmount(),
        e._vnode ? (t._temp || (t._container = n,
        t._temp = {
            nodeType: 1,
            parentNode: n,
            childNodes: [],
            appendChild: function(e) {
                this.childNodes.push(e),
                t._container.appendChild(e)
            },
            insertBefore: function(e, n) {
                this.childNodes.push(e),
                t._container.appendChild(e)
            },
            removeChild: function(e) {
                this.childNodes.splice(this.childNodes.indexOf(e) >>> 1, 1),
                t._container.removeChild(e)
            }
        }),
        Cn(Qt(Na, {
            context: t.context
        }, e._vnode), t._temp)) : t._temp && t.componentWillUnmount()
    }
    function Ia(e, t) {
        return Qt(La, {
            _vnode: e,
            _container: t
        })
    }
    var Ha, Oa, Pa = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype.render = function() {
            var e = this.props.context;
            return e ? Ia(this.props.children, e) : null
        }
        ,
        t
    }(nn), Ya = 13, Va = 32, Fa = 33, za = 34, Ra = 35, Aa = 36, Wa = 37, Ua = 38, Ba = 39, ja = 40, Xa = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            var t = this.props
              , n = t.ariaLabel
              , a = t.children;
            t.className,
            t.color;
            var s = t.endIcon;
            t.endIconSrc;
            var i = t.endIconSvg;
            t.hasChildren;
            var r = t.icon;
            t.iconSrc;
            var c = t.iconSvg;
            t.ripple,
            t.rtl;
            var h = t.startIcon;
            t.startIconSrc;
            var d = t.startIconSvg;
            t.tag,
            t.theme,
            t.themeVariant,
            t.variant;
            var u = l(t, ["ariaLabel", "children", "className", "color", "endIcon", "endIconSrc", "endIconSvg", "hasChildren", "icon", "iconSrc", "iconSvg", "ripple", "rtl", "startIcon", "startIconSrc", "startIconSvg", "tag", "theme", "themeVariant", "variant"])
              , m = o({
                "aria-label": n,
                className: this._cssClass,
                ref: this._setEl
            }, u)
              , _ = En(tn, null, this._isIconOnly && En(jn, {
                className: this._iconClass,
                name: r,
                svg: c,
                theme: e.theme
            }), this._hasStartIcon && En(jn, {
                className: this._startIconClass,
                name: h,
                svg: d,
                theme: e.theme
            }), a, this._hasEndIcon && En(jn, {
                className: this._endIconClass,
                name: s,
                svg: i,
                theme: e.theme
            }));
            return "span" === e.tag ? En("span", o({
                role: "button",
                tabIndex: this._tabIndex
            }, m), _) : "a" === e.tag ? En("a", o({}, m), _) : En("button", o({}, m), _)
        }
        ,
        t
    }(function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._mounted = function() {
            var e = this;
            this._unlisten = Ta(this._el, {
                click: !0,
                onBlur: function() {
                    e.setState({
                        hasFocus: !1
                    })
                },
                onFocus: function() {
                    e.setState({
                        hasFocus: !0
                    })
                },
                onHoverIn: function() {
                    e.s.disabled || e.setState({
                        hasHover: !0
                    })
                },
                onHoverOut: function() {
                    e.setState({
                        hasHover: !1
                    })
                },
                onKeyDown: function(t) {
                    switch (t.keyCode) {
                    case Ya:
                    case Va:
                        e._el.click(),
                        t.preventDefault()
                    }
                },
                onPress: function() {
                    e.setState({
                        isActive: !0
                    })
                },
                onRelease: function() {
                    e.setState({
                        isActive: !1
                    })
                },
                onStart: function() {
                    return {
                        ripple: e.s.ripple && !e.s.disabled
                    }
                }
            })
        }
        ,
        t.prototype._render = function(e, t) {
            var n = this
              , a = e.disabled;
            this._isIconOnly = !(!e.icon && !e.iconSvg),
            this._hasStartIcon = !(!e.startIcon && !e.startIconSvg),
            this._hasEndIcon = !(!e.endIcon && !e.endIconSvg),
            this._tabIndex = a ? le : e.tabIndex || 0,
            this._cssClass = this._className + " mbsc-reset mbsc-font mbsc-button" + this._theme + this._rtl + " mbsc-button-" + e.variant + (this._isIconOnly ? " mbsc-icon-button" : "") + (a ? " mbsc-disabled" : "") + (e.color ? " mbsc-button-" + e.color : "") + (t.hasFocus && !a ? " mbsc-focus" : "") + (t.isActive && !a ? " mbsc-active" : "") + (t.hasHover && !a ? " mbsc-hover" : ""),
            this._iconClass = "mbsc-button-icon" + this._rtl,
            this._startIconClass = this._iconClass + " mbsc-button-icon-start",
            this._endIconClass = this._iconClass + " mbsc-button-icon-end",
            e.disabled && t.hasHover && setTimeout((function() {
                n.setState({
                    hasHover: !1
                })
            }
            ))
        }
        ,
        t.prototype._destroy = function() {
            this._unlisten()
        }
        ,
        t.defaults = {
            ripple: !1,
            tag: "button",
            variant: "standard"
        },
        t._name = "Button",
        t
    }(Bn)), Ja = 0;
    function Ka(e, t, n) {
        var a, s, i, r, o, l, c, h = 0;
        function d() {
            s.style.width = "100000px",
            s.style.height = "100000px",
            a.scrollLeft = 1e5,
            a.scrollTop = 1e5,
            l.scrollLeft = 1e5,
            l.scrollTop = 1e5
        }
        function u() {
            var e = +new Date;
            r = 0,
            c || (e - h > 200 && !a.scrollTop && !a.scrollLeft && (h = e,
            d()),
            r || (r = xt(u)))
        }
        function m() {
            o || (o = xt(_))
        }
        function _() {
            o = 0,
            d(),
            t()
        }
        return _t && _t.ResizeObserver ? (Ha || (Ha = new _t.ResizeObserver((function(e) {
            for (var t = 0, n = e; t < n.length; t++) {
                var a = n[t];
                a.target.__mbscResize && a.target.__mbscResize()
            }
        }
        ))),
        Ja++,
        e.__mbscResize = function() {
            n ? n.run(t) : t()
        }
        ,
        Ha.observe(e)) : i = mt && mt.createElement("div"),
        i && (i.innerHTML = '<div class="mbsc-resize"><div class="mbsc-resize-i mbsc-resize-x"></div></div><div class="mbsc-resize"><div class="mbsc-resize-i mbsc-resize-y"></div></div>',
        i.dir = "ltr",
        l = i.childNodes[1],
        a = i.childNodes[0],
        s = a.childNodes[0],
        e.appendChild(i),
        Nt(a, "scroll", m),
        Nt(l, "scroll", m),
        n ? n.runOutsideAngular((function() {
            xt(u)
        }
        )) : xt(u)),
        {
            detach: function() {
                Ha ? (Ja--,
                delete e.__mbscResize,
                Ha.unobserve(e),
                Ja || (Ha = le)) : (i && (Lt(a, "scroll", m),
                Lt(l, "scroll", m),
                e.removeChild(i),
                Dt(o),
                i = le),
                c = !0)
            }
        }
    }
    var qa = "input,select,textarea,button"
      , Ga = 'textarea,button,input[type="button"],input[type="submit"]'
      , Za = qa + ',[tabindex="0"]'
      , $a = {
        enter: Ya,
        esc: 27,
        space: Va
    }
      , Qa = v && /(iphone|ipod)/i.test(g) && d >= 7;
    function es(e, t) {
        var n = e.s
          , a = []
          , s = {
            cancel: {
                cssClass: "mbsc-popup-button-close",
                name: "cancel",
                text: n.cancelText
            },
            close: {
                cssClass: "mbsc-popup-button-close",
                name: "close",
                text: n.closeText
            },
            ok: {
                cssClass: "mbsc-popup-button-primary",
                keyCode: Ya,
                name: "ok",
                text: n.okText
            },
            set: {
                cssClass: "mbsc-popup-button-primary",
                keyCode: Ya,
                name: "set",
                text: n.setText
            }
        };
        if (t && t.length)
            return t.forEach((function(t) {
                var n = pe(t) ? s[t] || {
                    text: t
                } : t;
                n.handler && !pe(n.handler) || (pe(n.handler) && (n.name = n.handler),
                n.handler = function(t) {
                    e._onButtonClick({
                        domEvent: t,
                        button: n
                    })
                }
                ),
                a.push(n)
            }
            )),
            a
    }
    var ts = Pa
      , ns = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._setActive = function(e) {
                t._active = e
            }
            ,
            t._setContent = function(e) {
                t._content = e
            }
            ,
            t._setLimitator = function(e) {
                t._limitator = e
            }
            ,
            t._setPopup = function(e) {
                t._popup = e
            }
            ,
            t._setWrapper = function(e) {
                t._wrapper = e
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._template = function(e, t) {
            var n = this;
            return this._isModal ? this._isVisible ? En(ts, {
                context: this._ctx
            }, En("div", {
                className: "mbsc-font mbsc-popup-wrapper mbsc-popup-wrapper-" + e.display + this._theme + this._rtl + " " + this._className + (e.fullScreen ? " mbsc-popup-wrapper-" + e.display + "-full" : "") + (this._touchUi ? "" : " mbsc-popup-pointer") + (this._round ? " mbsc-popup-round" : "") + (this._hasContext ? " mbsc-popup-wrapper-ctx" : "") + (t.isReady ? "" : " mbsc-popup-hidden"),
                ref: this._setWrapper,
                onKeyDown: this._onKeyDown
            }, e.showOverlay && En("div", {
                className: "mbsc-popup-overlay mbsc-popup-overlay-" + e.display + this._theme + (this._isClosing ? " mbsc-popup-overlay-out" : "") + (this._isOpening && t.isReady ? " mbsc-popup-overlay-in" : ""),
                onClick: this._onOverlayClick
            }), En("div", {
                className: "mbsc-popup-limits mbsc-popup-limits-" + e.display,
                ref: this._setLimitator,
                style: this._limits
            }), En("div", {
                className: "mbsc-popup " + this._theme + this._hb + " mbsc-popup-" + e.display + (e.fullScreen ? "-full" : "") + (t.bubblePos && t.showArrow && "anchored" === e.display ? " mbsc-popup-anchored-" + t.bubblePos : "") + (this._isClosing ? " mbsc-popup-" + this._animation + "-out" : "") + (this._isOpening && t.isReady ? " mbsc-popup-" + this._animation + "-in" : ""),
                role: "dialog",
                ref: this._setPopup,
                style: this._style,
                onClick: this._onPopupClick,
                onAnimationEnd: this._onAnimationEnd
            }, "anchored" === e.display && t.showArrow && En("div", {
                className: "mbsc-popup-arrow-wrapper mbsc-popup-arrow-wrapper-" + t.bubblePos + this._theme
            }, En("div", {
                className: "mbsc-popup-arrow mbsc-popup-arrow-" + t.bubblePos + this._theme,
                style: t.arrowPos
            })), En("div", {
                className: "mbsc-popup-focus",
                tabIndex: -1,
                ref: this._setActive
            }), En("div", {
                className: "mbsc-popup-body mbsc-popup-body-" + e.display + this._theme + this._hb + (e.fullScreen ? " mbsc-popup-body-" + e.display + "-full" : "") + (this._round ? " mbsc-popup-body-round" : "")
            }, this._headerText && En("div", {
                className: "mbsc-popup-header mbsc-popup-header-" + e.display + this._theme + this._hb + (this._buttons ? "" : " mbsc-popup-header-no-buttons"),
                dangerouslySetInnerHTML: this._headerText
            }), En("div", {
                className: "mbsc-popup-content" + (e.contentPadding ? " mbsc-popup-padding" : ""),
                ref: this._setContent
            }, e.children), this._buttons && En("div", {
                className: "mbsc-popup-buttons mbsc-popup-buttons-" + e.display + this._theme + this._rtl + this._hb + (this._flexButtons ? " mbsc-popup-buttons-flex" : "") + (e.fullScreen ? " mbsc-popup-buttons-" + e.display + "-full" : "")
            }, this._buttons.map((function(t, a) {
                return En(Xa, {
                    color: t.color,
                    className: "mbsc-popup-button mbsc-popup-button-" + e.display + n._rtl + n._hb + (n._flexButtons ? " mbsc-popup-button-flex" : "") + " " + (t.cssClass || ""),
                    icon: t.icon,
                    disabled: t.disabled,
                    key: a,
                    theme: e.theme,
                    themeVariant: e.themeVariant,
                    variant: t.variant || e.buttonVariant,
                    onClick: t.handler
                }, t.text)
            }
            ))))))) : null : En(tn, null, e.children)
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._lastFocus = +new Date,
            t._onOverlayClick = function() {
                t._isOpen && t.s.closeOnOverlayClick && !t._preventClose && t._close("overlay"),
                t._preventClose = !1
            }
            ,
            t._onDocClick = function() {
                t.s.showOverlay || Oa !== t || t._onOverlayClick()
            }
            ,
            t._onMouseDown = function(e) {
                t.s.showOverlay || (t._target = e.target)
            }
            ,
            t._onMouseUp = function(e) {
                t._target && t._popup && t._popup.contains(t._target) && !t._popup.contains(e.target) && (t._preventClose = !0),
                t._target = !1
            }
            ,
            t._onPopupClick = function() {
                t.s.showOverlay || (t._preventClose = !0)
            }
            ,
            t._onAnimationEnd = function(e) {
                e.target === t._popup && (t._isClosing && (t._onClosed(),
                t._isClosing = !1,
                t.setState({
                    isReady: !1
                })),
                t._isOpening && (t._onOpened(),
                t._isOpening = !1,
                t.forceUpdate()))
            }
            ,
            t._onButtonClick = function(e) {
                var n = e.domEvent
                  , a = e.button;
                t._hook("onButtonClick", {
                    domEvent: n,
                    button: a
                }),
                /cancel|close|ok|set/.test(a.name) && t._close(a.name)
            }
            ,
            t._onFocus = function(e) {
                var n = +new Date;
                Oa === t && e.target.nodeType && t._ctx.contains(e.target) && !t._popup.contains(e.target) && n - t._lastFocus > 100 && (t._lastFocus = n,
                t._active.focus())
            }
            ,
            t._onKeyDown = function(e) {
                var n = t.s
                  , a = e.keyCode;
                if ((a === Va && !Ut(e.target, qa) || t._lock && (a === Ua || a === ja)) && e.preventDefault(),
                n.focusTrap && 9 === a) {
                    var s = t._popup.querySelectorAll(Za)
                      , i = []
                      , r = -1
                      , o = 0
                      , l = -1;
                    Xt(s, (function(e) {
                        e.disabled || !e.offsetHeight && !e.offsetWidth || (i.push(e),
                        r++,
                        e === t._doc.activeElement && (l = r))
                    }
                    )),
                    e.shiftKey && (o = r,
                    r = 0),
                    l === r && (i[o].focus(),
                    e.preventDefault())
                }
            }
            ,
            t._onContentScroll = function(e) {
                !t._lock || e.type === da && "stylus" === e.touches[0].touchType || e.preventDefault()
            }
            ,
            t._onScroll = function(e) {
                var n = t.s;
                n.closeOnScroll ? t._close("scroll") : (t._hasContext || "anchored" === n.display) && t.position()
            }
            ,
            t._onWndKeyDown = function(e) {
                var n = t.s
                  , a = e.keyCode;
                if (Oa === t) {
                    if (t._hook("onKeyDown", {
                        keyCode: a
                    }),
                    n.closeOnEsc && 27 === a && t._close("esc"),
                    a === Ya && Ut(e.target, Ga) && !e.shiftKey)
                        return;
                    if (t._buttons)
                        for (var s = 0, i = t._buttons; s < i.length; s++)
                            for (var r = i[s], o = 0, l = me(r.keyCode) ? r.keyCode : [r.keyCode]; o < l.length; o++) {
                                var c = l[o];
                                if (!r.disabled && c !== le && (c === a || $a[c] === a))
                                    return void r.handler(e)
                            }
                }
            }
            ,
            t._onResize = function() {
                var e = t._wrapper
                  , n = t._hasContext;
                t._vpWidth = Math.min(e.clientWidth, n ? 1 / 0 : t._win.innerWidth),
                t._vpHeight = Math.min(e.clientHeight, n ? 1 / 0 : t._win.innerHeight),
                t._maxWidth = t._limitator.offsetWidth,
                t._maxHeight = t.s.maxHeight !== le || t._vpWidth < 768 || t._vpHeight < 650 ? t._limitator.offsetHeight : 600,
                t._round = !1 === t.s.touchUi || t._popup.offsetWidth < t._vpWidth && t._vpWidth > t._maxWidth;
                var a = {
                    isLarge: t._round,
                    maxPopupHeight: t._maxHeight,
                    maxPopupWidth: t._maxWidth,
                    target: t._wrapper,
                    windowHeight: t._vpHeight,
                    windowWidth: t._vpWidth
                };
                !1 === t._hook("onResize", a) || a.cancel || t.position()
            }
            ,
            t
        }
        return r(t, e),
        t.prototype.open = function() {
            this._isOpen || this.setState({
                isOpen: !0
            })
        }
        ,
        t.prototype.close = function() {
            this._close()
        }
        ,
        t.prototype.isVisible = function() {
            return !!this._isOpen
        }
        ,
        t.prototype.position = function() {
            if (this._isOpen) {
                var e = this.s
                  , t = this.state
                  , n = this._wrapper
                  , a = this._popup
                  , s = this._hasContext
                  , i = e.anchor
                  , r = e.anchorAlign
                  , o = e.rtl
                  , l = Pt(this._scrollCont)
                  , c = Ot(this._scrollCont)
                  , h = this._vpWidth
                  , d = this._vpHeight
                  , u = this._maxWidth
                  , m = this._maxHeight
                  , _ = Math.min(a.offsetWidth, u)
                  , p = Math.min(a.offsetHeight, m)
                  , v = e.showArrow;
                this._lock = e.scrollLock && this._content.scrollHeight <= this._content.clientHeight,
                s && (n.style.top = l + "px",
                n.style.left = c + "px");
                var f = !1 === this._hook("onPosition", {
                    isLarge: this._round,
                    maxPopupHeight: m,
                    maxPopupWidth: u,
                    target: this._wrapper,
                    windowHeight: d,
                    windowWidth: h
                });
                if ("anchored" !== e.display || f)
                    this.setState({
                        height: d,
                        isReady: !0,
                        showArrow: v,
                        width: h
                    });
                else {
                    var g = 0
                      , y = 0
                      , b = ue(t.modalLeft || 0, 8, h - _ - 8)
                      , x = t.modalTop || 8
                      , D = "bottom"
                      , T = {}
                      , C = v ? 16 : 4
                      , S = (n.offsetWidth - h) / 2
                      , k = (n.offsetHeight - d) / 2;
                    if (s) {
                        var w = this._ctx.getBoundingClientRect();
                        y = w.top,
                        g = w.left
                    }
                    if (i && this._ctx.contains(i)) {
                        var M = i.getBoundingClientRect()
                          , E = M.top - y
                          , N = M.left - g
                          , L = i.offsetWidth
                          , I = i.offsetHeight;
                        if (b = ue(b = "start" === r && !o || "end" === r && o ? N : "end" === r && !o || "start" === r && o ? N + L - _ : N - (_ - L) / 2, 8, h - _ - 8),
                        x = E + I + C,
                        T = {
                            left: ue(N + L / 2 - b - S, 30, _ - 30) + "px"
                        },
                        x + p + C > d)
                            if (E - p - C > 0)
                                D = "top",
                                x = E - p - C;
                            else if (!e.disableLeftRight) {
                                var H = N - _ - 8 > 0;
                                (H || N + L + _ + 8 <= h) && ((x = ue(E - (p - I) / 2, 8, d - p - 8)) + p + 8 > d && (x = Math.max(d - p - 8, 0)),
                                T = {
                                    top: ue(E + I / 2 - x - k, 30, p - 30) + "px"
                                },
                                D = H ? "left" : "right",
                                b = H ? N - _ : N + L)
                            }
                    }
                    "top" !== D && "bottom" !== D || x + p + C > d && (x = Math.max(d - p - C, 0),
                    v = !1),
                    this.setState({
                        arrowPos: T,
                        bubblePos: D,
                        height: d,
                        isReady: !0,
                        modalLeft: b,
                        modalTop: x,
                        showArrow: v,
                        width: h
                    })
                }
            }
        }
        ,
        t.prototype._render = function(e, t) {
            "bubble" === e.display && (e.display = "anchored");
            var n = e.animation
              , a = e.display
              , s = this._prevS
              , i = "anchored" === a
              , r = "inline" !== a
              , o = e.fullScreen && r
              , l = !!r && (e.isOpen === le ? t.isOpen : e.isOpen);
            if (l && (e.windowWidth !== s.windowWidth || e.display !== s.display || e.showArrow !== s.showArrow || e.anchor !== s.anchor && "anchored" === e.display) && (this._shouldPosition = !0),
            this._limits = {
                maxHeight: xe(e.maxHeight),
                maxWidth: xe(e.maxWidth)
            },
            this._style = {
                height: o ? "100%" : xe(e.height),
                left: i && t.modalLeft ? t.modalLeft + "px" : "",
                maxHeight: xe(this._maxHeight || e.maxHeight),
                maxWidth: xe(this._maxWidth || e.maxWidth),
                top: i && t.modalTop ? t.modalTop + "px" : "",
                width: o ? "100%" : xe(e.width)
            },
            this._hasContext = "body" !== e.context && e.context !== le,
            this._needsLock = Qa && !this._hasContext && "anchored" !== a && e.scrollLock,
            this._isModal = r,
            this._flexButtons = "center" === a || !this._touchUi && !o && ("top" === a || "bottom" === a),
            n !== le && !0 !== n)
                this._animation = pe(n) ? n : "";
            else
                switch (a) {
                case "bottom":
                    this._animation = "slide-up";
                    break;
                case "top":
                    this._animation = "slide-down";
                    break;
                default:
                    this._animation = "pop"
                }
            e.buttons ? e.buttons !== s.buttons && (this._buttons = es(this, e.buttons)) : this._buttons = le,
            e.headerText !== s.headerText && (this._headerText = e.headerText ? this._safeHtml(e.headerText) : le),
            l && !this._isOpen && this._onOpen(),
            !l && this._isOpen && this._onClose(),
            this._isOpen = l,
            this._isVisible = l || this._isClosing
        }
        ,
        t.prototype._updated = function() {
            var e = this
              , t = this.s;
            if (mt && (t.context !== this._prevS.context || !this._ctx) && ((n = pe(t.context) ? mt.querySelector(t.context) : t.context) || (n = mt.body),
            n.__mbscLock = n.__mbscLock || 0,
            n.__mbscIOSLock = n.__mbscIOSLock || 0,
            n.__mbscModals = n.__mbscModals || 0,
            this._ctx = n,
            this._justOpened))
                return void setTimeout((function() {
                    e.forceUpdate()
                }
                ));
            if (this._justOpened) {
                var n = this._ctx
                  , a = this._wrapper
                  , s = this._hasContext
                  , i = this._doc = It(a)
                  , r = this._win = Yt(a);
                if (!this._hasWidth && t.responsive) {
                    var o = Math.min(a.clientWidth, s ? 1 / 0 : r.innerWidth)
                      , l = Math.min(a.clientHeight, s ? 1 / 0 : r.innerHeight);
                    if (this._hasWidth = !0,
                    o !== this.state.width || l !== this.state.height)
                        return void setTimeout((function() {
                            e.setState({
                                height: l,
                                width: o
                            })
                        }
                        ))
                }
                if (this._scrollCont = s ? n : r,
                this._observer = Ka(a, this._onResize, this._zone),
                this._prevFocus = t.focusElm || i.activeElement,
                n.__mbscModals++,
                t.focusOnOpen && i.activeElement && setTimeout((function() {
                    i.activeElement.blur()
                }
                )),
                this._needsLock) {
                    if (!n.__mbscIOSLock) {
                        var c = Pt(this._scrollCont)
                          , h = Ot(this._scrollCont);
                        n.style.left = -h + "px",
                        n.style.top = -c + "px",
                        n.__mbscScrollLeft = h,
                        n.__mbscScrollTop = c,
                        n.classList.add("mbsc-popup-open-ios"),
                        n.parentNode.classList.add("mbsc-popup-open-ios")
                    }
                    n.__mbscIOSLock++
                }
                s && n.classList.add("mbsc-popup-ctx"),
                t.focusTrap && Nt(r, Qn, this._onFocus),
                Nt(this._scrollCont, da, this._onContentScroll, {
                    passive: !1
                }),
                Nt(this._scrollCont, _a, this._onContentScroll, {
                    passive: !1
                }),
                Nt(this._scrollCont, oa, this._onContentScroll, {
                    passive: !1
                }),
                setTimeout((function() {
                    Nt(i, na, e._onMouseDown),
                    Nt(i, sa, e._onMouseUp),
                    Nt(i, qn, e._onDocClick)
                }
                )),
                this._hook("onOpen", {
                    target: this._wrapper
                })
            }
            this._shouldPosition && setTimeout((function() {
                e._onResize()
            }
            )),
            this._justOpened = !1,
            this._justClosed = !1,
            this._shouldPosition = !1
        }
        ,
        t.prototype._destroy = function() {
            this._isOpen && (this._onClosed(),
            this._unlisten(),
            Oa === this && (Oa = this._prevModal))
        }
        ,
        t.prototype._onOpen = function() {
            var e = this;
            Tt && this._animation ? (this._isOpening = !0,
            this._isClosing = !1) : this._onOpened(),
            this._justOpened = !0,
            this._preventClose = !1,
            setTimeout((function() {
                e._prevModal = Oa,
                Oa = e
            }
            ))
        }
        ,
        t.prototype._onClose = function() {
            var e = this;
            Tt && this._animation ? (this._isClosing = !0,
            this._isOpening = !1) : setTimeout((function() {
                e._onClosed(),
                e.setState({
                    isReady: !1
                })
            }
            )),
            this._hasWidth = !1,
            this._unlisten()
        }
        ,
        t.prototype._onOpened = function() {
            var e = this.s;
            if (e.focusOnOpen) {
                var t = e.activeElm
                  , n = t ? pe(t) ? this._popup.querySelector(t) : t : this._active;
                n && n.focus && n.focus()
            }
            Nt(this._win, ta, this._onWndKeyDown),
            Nt(this._scrollCont, ca, this._onScroll)
        }
        ,
        t.prototype._onClosed = function() {
            var e = this
              , t = this._ctx
              , n = this._prevFocus && this._prevFocus.focus && this.s.focusOnClose;
            t.mbscModals--,
            this._justClosed = !0,
            this._needsLock && (t.__mbscIOSLock--,
            t.__mbscIOSLock || (t.classList.remove("mbsc-popup-open-ios"),
            t.parentNode.classList.remove("mbsc-popup-open-ios"),
            t.style.left = "",
            t.style.top = "",
            function(e, t) {
                e.scrollTo ? e.scrollTo(t, e.scrollY) : e.scrollLeft = t
            }(this._scrollCont, t.__mbscScrollLeft),
            function(e, t) {
                e.scrollTo ? e.scrollTo(e.scrollX, t) : e.scrollTop = t
            }(this._scrollCont, t.__mbscScrollTop))),
            this._hasContext && !t.mbscModals && t.classList.remove("mbsc-popup-ctx"),
            this._hook("onClosed", {
                focus: n
            }),
            n && this._prevFocus.focus(),
            setTimeout((function() {
                Oa === e && (Oa = e._prevModal)
            }
            ))
        }
        ,
        t.prototype._unlisten = function() {
            Lt(this._win, ta, this._onWndKeyDown),
            Lt(this._scrollCont, ca, this._onScroll),
            Lt(this._scrollCont, da, this._onContentScroll, {
                passive: !1
            }),
            Lt(this._scrollCont, _a, this._onContentScroll, {
                passive: !1
            }),
            Lt(this._scrollCont, oa, this._onContentScroll, {
                passive: !1
            }),
            Lt(this._doc, na, this._onMouseDown),
            Lt(this._doc, sa, this._onMouseUp),
            Lt(this._doc, qn, this._onDocClick),
            this.s.focusTrap && Lt(this._win, Qn, this._onFocus),
            this._observer && (this._observer.detach(),
            this._observer = null)
        }
        ,
        t.prototype._close = function(e) {
            this._isOpen && (this.s.isOpen === le && this.setState({
                isOpen: !1
            }),
            this._hook("onClose", {
                source: e
            }))
        }
        ,
        t.defaults = {
            buttonVariant: "flat",
            cancelText: "Cancel",
            closeOnEsc: !0,
            closeOnOverlayClick: !0,
            closeText: "Close",
            contentPadding: !0,
            display: "center",
            focusOnClose: !0,
            focusOnOpen: !0,
            focusTrap: !0,
            maxWidth: 600,
            okText: "Ok",
            scrollLock: !0,
            setText: "Set",
            showArrow: !0,
            showOverlay: !0
        },
        t
    }(Bn));
    function as(e, t, n) {
        var a = t.inputComponent
          , s = o({
            defaultValue: e._value && e._valueText || "",
            ref: e._setInput
        }, t.inputProps);
        t.inputComponent || (a = Ea,
        s = o({
            disabled: t.disabled,
            dropdown: t.dropdown,
            endIcon: t.endIcon,
            endIconSrc: t.endIconSrc,
            endIconSvg: t.endIconSvg,
            error: t.error,
            errorMessage: t.errorMessage,
            inputStyle: t.inputStyle,
            label: t.label,
            labelStyle: t.labelStyle,
            name: t.name,
            pickerMap: t.valueMap,
            pickerValue: e._value,
            placeholder: t.placeholder,
            rtl: t.rtl,
            startIcon: t.startIcon,
            startIconSrc: t.startIconSrc,
            startIconSvg: t.startIconSvg,
            tags: t.tagInput === le ? t.selectMultiple : t.tagInput,
            theme: t.theme,
            themeVariant: t.themeVariant
        }, s));
        var i = En(a, s);
        return En(tn, null, e._showInput && i, En(ns, {
            anchor: e._anchor,
            anchorAlign: e._anchorAlign,
            animation: t.animation,
            buttons: e._buttons,
            cancelText: t.cancelText,
            closeOnEsc: t.closeOnEsc,
            closeOnOverlayClick: t.closeOnOverlayClick,
            closeOnScroll: t.closeOnScroll,
            closeText: t.closeText,
            contentPadding: !1,
            context: t.context,
            cssClass: e._cssClass,
            disableLeftRight: !0,
            display: t.display,
            focusElm: e._focusElm,
            focusOnClose: t.focusOnClose,
            focusTrap: t.focusTrap,
            fullScreen: t.fullScreen,
            headerText: e._headerText,
            height: t.height,
            isOpen: e._isOpen,
            maxHeight: t.maxHeight,
            maxWidth: e._maxWidth,
            onClose: e._onPopupClose,
            onClosed: e._onPopupClosed,
            onKeyDown: e._onPopupKey,
            onOpen: e._onPopupOpen,
            onResize: e._onResize,
            setText: t.setText,
            showArrow: t.showArrow,
            showOverlay: t.showOverlay,
            ref: e._setPopup,
            rtl: t.rtl,
            scrollLock: t.scrollLock,
            theme: t.theme,
            themeVariant: t.themeVariant,
            touchUi: e._touchUi,
            windowWidth: e.state.width,
            width: t.width
        }, n))
    }
    var ss = 6e4
      , is = 36e5
      , rs = 864e5;
    function os(e) {
        return !!e._mbsc
    }
    var ls = {
        amText: "am",
        dateFormat: "MM/DD/YYYY",
        dateFormatLong: "D DDD MMM YYYY",
        dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
        dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        daySuffix: "",
        firstDay: 0,
        fromText: "Start",
        getDate: Ds,
        monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        monthSuffix: "",
        pmText: "pm",
        separator: " ",
        shortYearCutoff: "+10",
        timeFormat: "h:mm A",
        toText: "End",
        todayText: "Today",
        yearSuffix: "",
        getMonth: function(e) {
            return e.getMonth()
        },
        getDay: function(e) {
            return e.getDate()
        },
        getYear: function(e) {
            return e.getFullYear()
        },
        getMaxDayOfMonth: function(e, t) {
            return 32 - new Date(e,t,32,12).getDate()
        },
        getWeekNumber: function(e) {
            var t = new Date(+e);
            t.setHours(0, 0, 0),
            t.setDate(t.getDate() + 4 - (t.getDay() || 7));
            var n = new Date(t.getFullYear(),0,1);
            return Math.ceil(((t - n) / 864e5 + 1) / 7)
        }
    }
      , cs = /^(\d{4}|[+\-]\d{6})(?:-(\d{2})(?:-(\d{2}))?)?(?:T(\d{2}):(\d{2})(?::(\d{2})(?:\.(\d{3}))?)?((Z)|([+\-])(\d{2})(?::?(\d{2}))?)?)?$/
      , hs = /^((\d{2}):(\d{2})(?::(\d{2})(?:\.(\d{3}))?)?(?:(Z)|([+\-])(\d{2})(?::?(\d{2}))?)?)?$/;
    function ds(e, t, n) {
        var a, s, i = {
            y: 1,
            m: 2,
            d: 3,
            h: 4,
            i: 5,
            s: 6,
            u: 7,
            tz: 8
        };
        if (n)
            for (a in i)
                i.hasOwnProperty(a) && (s = e[i[a] - t]) && (n[a] = "tz" === a ? s : 1)
    }
    function us(e) {
        return +new Date(1970,0,1,e.getHours(),e.getMinutes(),e.getSeconds(),e.getMilliseconds()) - +new Date(1970,0,1)
    }
    function ms(e, t, n, a) {
        return e <= n && n < t || (e < a && a <= t || n < e && t < a)
    }
    function _s(e, t, n) {
        return e.exclusiveEndDates && t && n && t < n ? Cs(e, +n - 1) : n
    }
    function ps(e) {
        return e.getFullYear() + "-" + (e.getMonth() + 1) + "-" + e.getDate()
    }
    function vs(e) {
        return os(e) ? e.createDate(e.getFullYear(), e.getMonth(), e.getDate()) : Ds(e.getFullYear(), e.getMonth(), e.getDate())
    }
    function fs(e) {
        return Date.UTC(e.getFullYear(), e.getMonth(), e.getDate())
    }
    function gs(e, t) {
        return Ce((fs(t) - fs(e)) / rs)
    }
    function ys(e, t, n) {
        var a = e.getFullYear()
          , s = e.getMonth()
          , i = e.getDay()
          , r = n === le ? t.firstDay : n;
        return new Date(a,s,r - (r - i > 0 ? 7 : 0) - i + e.getDate())
    }
    function bs(e, t) {
        return e.getFullYear() === t.getFullYear() && e.getMonth() === t.getMonth() && e.getDate() === t.getDate()
    }
    function xs(e, t, n) {
        return n.getYear(e) === n.getYear(t) && n.getMonth(e) === n.getMonth(t)
    }
    function Ds(e, t, n, a, s, i, r) {
        var o = new Date(e,t,n,a || 0,s || 0,i || 0,r || 0);
        return 23 === o.getHours() && 0 === (a || 0) && o.setHours(o.getHours() + 2),
        o
    }
    function Ts(e) {
        return e.getTime
    }
    function Cs(e, t, n, a, s, i, r, o) {
        return t && (_e(t) || pe(t)) && fe(n) ? Ss(t, e) : e && e.timezonePlugin ? e.timezonePlugin.createDate(e, t, n, a, s, i, r, o) : ge(t) ? new Date(t) : fe(t) ? new Date : new Date(t,n || 0,a || 1,s || 0,i || 0,r || 0,o || 0)
    }
    function Ss(e, t, n, a) {
        var s;
        if (!e)
            return null;
        var i = t && t.timezonePlugin;
        if (i) {
            var r = os(e) ? e : i.parse(e, t);
            return r.setTimezone(t.displayTimezone),
            r
        }
        return Ts(e) ? e : e._isAMomentObject ? e.toDate() : _e(e) ? new Date(e) : (pe(e) && (e = e.trim()),
        (s = hs.exec(e)) ? (ds(s, 2, a),
        new Date(1970,0,1,s[2] ? +s[2] : 0,s[3] ? +s[3] : 0,s[4] ? +s[4] : 0,s[5] ? +s[5] : 0)) : (s = cs.exec(e)) ? (ds(s, 0, a),
        new Date(s[1] ? +s[1] : 1970,s[2] ? s[2] - 1 : 0,s[3] ? +s[3] : 1,s[4] ? +s[4] : 0,s[5] ? +s[5] : 0,s[6] ? +s[6] : 0,s[7] ? +s[7] : 0)) : Ms(n, e, t))
    }
    function ks(e, t, n, a) {
        var s = v && window.moment || t.moment
          , i = t.returnFormat;
        if (e) {
            if ("moment" === i && s)
                return s(e);
            if ("locale" === i)
                return ws(n, e, t);
            if ("iso8601" === i)
                return function(e, t) {
                    var n = ""
                      , a = "";
                    return e && (t.h && (a += Te(e.getHours()) + ":" + Te(e.getMinutes()),
                    t.s && (a += ":" + Te(e.getSeconds())),
                    t.u && (a += "." + Te(e.getMilliseconds(), 3)),
                    t.tz && (a += t.tz)),
                    t.y ? (n += e.getFullYear(),
                    t.m && (n += "-" + Te(e.getMonth() + 1),
                    t.d && (n += "-" + Te(e.getDate())),
                    t.h && (n += "T" + a))) : t.h && (n = a)),
                    n
                }(e, a)
        }
        return e
    }
    function ws(e, t, n) {
        var a, s, i = "", r = !1, l = o({}, ls, n), c = function(t) {
            for (var n = 0, s = a; s + 1 < e.length && e.charAt(s + 1) === t; )
                n++,
                s++;
            return n
        }, h = function(e) {
            var t = c(e);
            return a += t,
            t
        }, d = function(e, t, n) {
            var a = "" + t;
            if (h(e))
                for (; a.length < n; )
                    a = "0" + a;
            return a
        }, u = function(e, t, n, a) {
            return 3 === h(e) ? a[t] : n[t]
        };
        for (a = 0; a < e.length; a++)
            if (r)
                "'" !== e.charAt(a) || h("'") ? i += e.charAt(a) : r = !1;
            else
                switch (e.charAt(a)) {
                case "D":
                    i += c("D") > 1 ? u("D", t.getDay(), l.dayNamesShort, l.dayNames) : d("D", l.getDay(t), 2);
                    break;
                case "M":
                    i += c("M") > 1 ? u("M", l.getMonth(t), l.monthNamesShort, l.monthNames) : d("M", l.getMonth(t) + 1, 2);
                    break;
                case "Y":
                    s = l.getYear(t),
                    i += 3 === h("Y") ? s : (s % 100 < 10 ? "0" : "") + s % 100;
                    break;
                case "h":
                    var m = t.getHours();
                    i += d("h", m > 12 ? m - 12 : 0 === m ? 12 : m, 2);
                    break;
                case "H":
                    i += d("H", t.getHours(), 2);
                    break;
                case "m":
                    i += d("m", t.getMinutes(), 2);
                    break;
                case "s":
                    i += d("s", t.getSeconds(), 2);
                    break;
                case "a":
                    i += t.getHours() > 11 ? l.pmText : l.amText;
                    break;
                case "A":
                    i += t.getHours() > 11 ? l.pmText.toUpperCase() : l.amText.toUpperCase();
                    break;
                case "'":
                    h("'") ? i += "'" : r = !0;
                    break;
                default:
                    i += e.charAt(a)
                }
        return i
    }
    function Ms(e, t, n) {
        var a = o({}, ls, n)
          , s = Ss(a.defaultValue || new Date);
        if (!t)
            return s;
        e || (e = a.dateFormat + a.separator + a.timeFormat);
        var i, r = a.shortYearCutoff, l = a.getYear(s), c = a.getMonth(s) + 1, h = a.getDay(s), d = s.getHours(), u = s.getMinutes(), m = 0, _ = -1, p = !1, v = 0, f = function(t) {
            for (var n = 0, a = i; a + 1 < e.length && e.charAt(a + 1) === t; )
                n++,
                a++;
            return n
        }, g = function(e) {
            var t = f(e);
            return i += t,
            t
        }, y = function(e) {
            var n = g(e)
              , a = new RegExp("^\\d{1," + (n >= 2 ? 4 : 2) + "}")
              , s = t.substr(v).match(a);
            return s ? (v += s[0].length,
            parseInt(s[0], 10)) : 0
        }, b = function(e, n, a) {
            for (var s = 3 === g(e) ? a : n, i = 0; i < s.length; i++)
                if (t.substr(v, s[i].length).toLowerCase() === s[i].toLowerCase())
                    return v += s[i].length,
                    i + 1;
            return 0
        }, x = function() {
            v++
        };
        for (i = 0; i < e.length; i++)
            if (p)
                "'" !== e.charAt(i) || g("'") ? x() : p = !1;
            else
                switch (e.charAt(i)) {
                case "Y":
                    l = y("Y");
                    break;
                case "M":
                    c = f("M") < 2 ? y("M") : b("M", a.monthNamesShort, a.monthNames);
                    break;
                case "D":
                    f("D") < 2 ? h = y("D") : b("D", a.dayNamesShort, a.dayNames);
                    break;
                case "H":
                    d = y("H");
                    break;
                case "h":
                    d = y("h");
                    break;
                case "m":
                    u = y("m");
                    break;
                case "s":
                    m = y("s");
                    break;
                case "a":
                    _ = b("a", [a.amText, a.pmText], [a.amText, a.pmText]) - 1;
                    break;
                case "A":
                    _ = b("A", [a.amText, a.pmText], [a.amText, a.pmText]) - 1;
                    break;
                case "'":
                    g("'") ? x() : p = !0;
                    break;
                default:
                    x()
                }
        if (l < 100) {
            var D = void 0;
            D = l <= (pe(r) ? (new Date).getFullYear() % 100 + parseInt(r, 10) : +r) ? 0 : -100,
            l += (new Date).getFullYear() - (new Date).getFullYear() % 100 + D
        }
        d = -1 === _ ? d : _ && d < 12 ? d + 12 : _ || 12 !== d ? d : 0;
        var T = a.getDate(l, c - 1, h, d, u, m);
        return a.getYear(T) !== l || a.getMonth(T) + 1 !== c || a.getDay(T) !== h ? s : T
    }
    function Es(e, t, n) {
        if (e === t)
            return !0;
        if (me(e) && !e.length && null === t || me(t) && !t.length && null === e)
            return !0;
        if (null === e || null === t || e === le || t === le)
            return !1;
        if (pe(e) && pe(t))
            return e === t;
        var a = n && n.dateFormat;
        if (me(e) || me(t)) {
            if (e.length !== t.length)
                return !1;
            for (var s = 0; s < e.length; s++) {
                var i = e[s]
                  , r = t[s];
                if (!(pe(i) && pe(r) ? i === r : +Ss(i, n, a) == +Ss(r, n, a)))
                    return !1
            }
            return !0
        }
        return +Ss(e, n, a) == +Ss(t, n, a)
    }
    function Ns(e, t) {
        var n = os(e) ? e.clone() : new Date(e);
        return n.setDate(n.getDate() + t),
        n
    }
    function Ls(e, t) {
        var n = ss * t
          , a = (os(e) ? e.clone() : new Date(e)).setHours(0, 0, 0, 0)
          , s = a + Math.round((+e - +a) / n) * n;
        return os(e) ? e.createDate(s) : new Date(s)
    }
    v && "undefined" == typeof Symbol && (window.Symbol = {
        toPrimitive: "toPrimitive"
    }),
    C.datetime = {
        formatDate: ws,
        parseDate: Ms
    };
    var Is = {
        SU: 0,
        MO: 1,
        TU: 2,
        WE: 3,
        TH: 4,
        FR: 5,
        SA: 6
    }
      , Hs = {
        byday: "weekDays",
        bymonth: "month",
        bymonthday: "day",
        dtstart: "from",
        freq: "repeat"
    };
    function Os(e, t, n, a) {
        var s = Ss(t.start, n)
          , i = Ss(t.end, n);
        for (a && (t.start = s,
        t.end = i),
        s = vs(s),
        i = n.exclusiveEndDates ? i : vs(Ns(i, 1)); s < i; )
            Ps(e, s, t),
            s = Ns(s, 1)
    }
    function Ps(e, t, n) {
        var a = ps(t);
        e[a] = e[a] || [],
        e[a].push(n)
    }
    function Ys(e, t, n, a, s, i) {
        var r = {};
        if (s)
            for (var o = 0, l = zs(s); o < l.length; o++) {
                r[ps(Ss(l[o]))] = !0
            }
        if (i)
            for (var c = 0, h = Rs(i, e, t, n, a); c < h.length; c++) {
                r[ps(h[c].d)] = !0
            }
        return r
    }
    function Vs(e) {
        for (var t = {}, n = 0, a = e.split(";"); n < a.length; n++) {
            var s = a[n].split("=")
              , i = s[0].trim().toLowerCase()
              , r = s[1].trim();
            t[Hs[i] || i] = r
        }
        return t
    }
    function Fs(e, t, n, a) {
        for (var s = n.getYear, i = n.getMonth, r = n.getDay, o = n.getDate, l = n.getMaxDayOfMonth, c = 0, h = null, d = function() {
            var d = e[c]
              , u = pe(d) || d.getTime || d.toDate;
            if (u || d.date && !d.recurring) {
                var m = Ss(u ? d : d.date, n, a);
                m > t && (null === h || m < h) && (h = m)
            } else if (d.recurring) {
                var _ = d.recurring;
                pe(_) && (_ = Vs(_));
                var p = (_.repeat || "").toLowerCase()
                  , v = _.interval || 1
                  , f = _.count
                  , g = _.from ? Ss(_.from) : Ss(d.start || d.date) || (1 !== v || f !== le ? new Date : t)
                  , y = _.until ? Ss(_.until) : 1 / 0
                  , b = g < t
                  , x = b ? t : vs(g)
                  , D = y
                  , T = f === le ? 1 / 0 : f
                  , C = (_.weekDays || "").split(",")
                  , S = +(_.day || r(g))
                  , k = +(_.month || i(g))
                  , w = d.recurringException
                  , M = d.recurringExceptionRule
                  , E = void 0
                  , N = void 0
                  , L = !0
                  , I = 0
                  , H = 0
                  , O = void 0
                  , P = void 0;
                switch (p) {
                case "daily":
                    for (H = f && b ? ke(gs(g, t) / v) : 0; L; )
                        P = Ys(N = o(s(g), i(g), r(g) + H * v), N, Ns(N, 1), n, w, M),
                        N < D && H < T ? (N >= t && !P[ps(N)] && (h = h && h < N ? h : N,
                        L = !1),
                        H++) : L = !1;
                    break;
                case "weekly":
                    for (var Y = {}, V = [], F = g.getDay(), z = 0, R = C; z < R.length; z++) {
                        var A = R[z];
                        V.push(Is[A.toUpperCase()])
                    }
                    if (V.sort((function(e, t) {
                        return (e = (e -= F) < 0 ? e + 7 : e) - (t = (t -= F) < 0 ? t + 7 : t)
                    }
                    )),
                    b && f === le)
                        for (var W = ke(gs(ys(g, n), ys(t, n))), U = 0, B = V; U < B.length; U++) {
                            A = B[U];
                            var j = ke(W / (7 * v));
                            A < g.getDay() && j--,
                            A < t.getDay() && j++,
                            Y[A] = j,
                            H += j
                        }
                    for (; L; ) {
                        for (var X = 0, J = V; X < J.length; X++) {
                            A = J[X];
                            O = (E = ys(g, n, A)) < g ? 1 : 0,
                            P = Ys(N = o(s(E), i(E), r(E) + 7 * ((Y[A] || 0) + I + O) * v), N, Ns(N, 1), n, w, M),
                            N < D && H < T ? (N >= t && !P[ps(N)] && (h = h && h < N ? h : N,
                            L = !1),
                            H++) : L = !1
                        }
                        I++
                    }
                    break;
                case "monthly":
                    for (; L; ) {
                        var K = l(s(g), i(g) + I * v);
                        P = Ys(N = o(s(g), i(g) + I * v, S < 0 ? K + S + 1 : S), N, Ns(N, 1), n, w, M),
                        N < D && H < T ? K >= S && (N >= x && N >= t && !P[ps(N)] && (h = h && h < N ? h : N,
                        L = !1),
                        H++) : L = !1,
                        I++
                    }
                    break;
                case "yearly":
                    for (; L; ) {
                        K = l(s(g) + I * v, k - 1);
                        P = Ys(N = o(s(g) + I * v, k - 1, S < 0 ? K + S + 1 : S), N, Ns(N, 1), n, w, M),
                        N < D && H < T ? K >= S && (N >= x && N >= t && !P[ps(N)] && (h = h && h < N ? h : N,
                        L = !1),
                        H++) : L = !1,
                        I++
                    }
                }
            } else if (d.start && d.end) {
                var q = Ss(d.start, n, a);
                Ss(d.end, n, a) > t && (h = q <= t ? t : h && h < q ? h : q)
            }
            c++
        }; c < e.length; )
            d();
        return h
    }
    function zs(e) {
        return e ? me(e) ? e : pe(e) ? e.split(",") : [e] : []
    }
    function Rs(e, t, n, a, s, i, r) {
        pe(e) && (e = Vs(e));
        var o, l, c, h = s.getYear, d = s.getMonth, u = s.getDay, m = s.getDate, _ = s.getMaxDayOfMonth, p = (e.repeat || "").toLowerCase(), v = e.interval || 1, f = e.count, g = [], y = e.from ? Ss(e.from) : t || (1 !== v || f !== le ? new Date : n), b = e.until ? Ss(e.until) : 1 / 0, x = y < n, D = x ? n : vs(y), T = b < a ? b : a, C = f === le ? 1 / 0 : f, S = (e.weekDays || "").split(","), k = +(e.day || u(y)), w = +(e.month || d(y)), M = Ys(t, n, a, s, i, r), E = !0, N = 0, L = 0;
        switch (p) {
        case "daily":
            for (L = f && x ? ke(gs(y, n) / v) : 0; E; )
                (l = m(h(y), d(y), u(y) + L * v)) < T && L < C ? (M[ps(l)] || g.push({
                    d: l,
                    i: L
                }),
                L++) : E = !1;
            break;
        case "weekly":
            for (var I = {}, H = [], O = y.getDay(), P = 0, Y = S; P < Y.length; P++) {
                var V = Y[P];
                H.push(Is[V.trim().toUpperCase()])
            }
            if (H.sort((function(e, t) {
                return (e = (e -= O) < 0 ? e + 7 : e) - (t = (t -= O) < 0 ? t + 7 : t)
            }
            )),
            x && f === le)
                for (var F = ke(gs(ys(y, s), ys(n, s))), z = 0, R = H; z < R.length; z++) {
                    V = R[z];
                    var A = ke(F / (7 * v));
                    V < y.getDay() && A--,
                    V < n.getDay() && A++,
                    I[V] = A,
                    L += A
                }
            for (; E; ) {
                for (var W = 0, U = H; W < U.length; W++) {
                    c = (o = ys(y, s, V = U[W])) < vs(y) ? 1 : 0,
                    (l = m(h(o), d(o), u(o) + 7 * ((I[V] || 0) + N + c) * v)) < T && L < C ? (M[ps(l)] || g.push({
                        d: l,
                        i: L
                    }),
                    L++) : E = !1
                }
                N++
            }
            break;
        case "monthly":
            for (; E; ) {
                var B = _(h(y), d(y) + N * v);
                (l = m(h(y), d(y) + N * v, k < 0 ? B + k + 1 : k)) < T && L < C ? B >= k && (l >= D && !M[ps(l)] && g.push({
                    d: l,
                    i: L
                }),
                L++) : E = !1,
                N++
            }
            break;
        case "yearly":
            for (; E; ) {
                B = _(h(y) + N * v, w - 1);
                (l = m(h(y) + N * v, w - 1, k < 0 ? B + k + 1 : k)) < T && L < C ? B >= k && (l >= D && !M[ps(l)] && g.push({
                    d: l,
                    i: L
                }),
                L++) : E = !1,
                N++
            }
        }
        return g
    }
    function As(e, t, n, a, s) {
        var i = {}
          , r = a.timezonePlugin
          , l = a.dataTimezone || a.displayTimezone
          , c = r ? {
            displayTimezone: l,
            timezonePlugin: r
        } : a;
        if (e) {
            for (var h = 0, d = e; h < d.length; h++) {
                var u = d[h]
                  , m = pe(u) || u.getTime || u.toDate ? u : u.start || u.date
                  , _ = Ss(m, a);
                if (u.recurring)
                    for (var p = hs.test(m) ? null : _, v = Rs(u.recurring, p, t, n, a, u.recurringException, u.recurringExceptionRule), f = Cs(c, _), g = u.end ? +Ss(u.end, a) - +f : 0, y = 0, b = v; y < b.length; y++) {
                        var x = b[y]
                          , D = x.d
                          , T = o({}, u);
                        u.start ? T.start = Cs(c, D.getFullYear(), D.getMonth(), D.getDate(), f.getHours(), f.getMinutes(), f.getSeconds()) : (T.allDay = !0,
                        T.start = Cs(a, D.getFullYear(), D.getMonth(), D.getDate())),
                        u.end && (T.end = Cs(a, +T.start + g)),
                        T.nr = x.i,
                        T.original = u,
                        T.start && T.end ? Os(i, T, a, s) : Ps(i, D, T)
                    }
                else
                    u.start && u.end ? Os(i, u, a, s) : _ && Ps(i, _, u)
            }
            return i
        }
    }
    var Ws = new Date(1970,0,1)
      , Us = "month"
      , Bs = "year"
      , js = "multi-year"
      , Xs = 1
      , Js = o({}, ls, {
        dateText: "Date",
        eventText: "event",
        eventsText: "events",
        moreEventsText: "{count} more",
        nextText: "Next",
        prevText: "Previous",
        showToday: !0,
        timeText: "Time"
    });
    function Ks(e, t) {
        var n = t.eventRangeSize || 1
          , a = "month" === t.calendarType
          , s = t.showCalendar
          , i = t.getDate
          , r = s && a || !s && "week" !== t.eventRange ? Ws : ys(Ws, t)
          , o = t.getYear(r)
          , l = t.getMonth(r)
          , c = t.getDay(r);
        if (s)
            return a ? i(o, l + e, 1) : i(o, l, c + 7 * t.weeks * e);
        switch (t.eventRange) {
        case "year":
            return i(o + e * n, l, 1);
        case "week":
            return i(o, l, c + 7 * n * e);
        case "day":
            return i(o, l, c + n * e);
        default:
            return i(o, l + e * n, 1)
        }
    }
    function qs(e, t) {
        var n, a = t.getYear, s = t.getMonth, i = "month" === t.calendarType, r = t.eventRangeSize || 1;
        if (t.showCalendar)
            return i ? s(e) - s(Ws) + 12 * (a(e) - a(Ws)) : ke(gs(ys(Ws, t), ys(e, t)) / (7 * t.weeks));
        switch (t.eventRange) {
        case "year":
            n = a(e) - a(Ws);
            break;
        case "week":
            n = gs(ys(Ws, t), ys(e, t)) / 7;
            break;
        case "day":
            n = gs(Ws, e);
            break;
        case "month":
            n = s(e) - s(Ws) + 12 * (a(e) - a(Ws));
            break;
        default:
            return
        }
        return ke(n / r)
    }
    function Gs(e, t) {
        return ke((t.getYear(e) - t.getYear(Ws)) / 12)
    }
    function Zs(e, t) {
        return t.getYear(e) - t.getYear(Ws)
    }
    function $s(e, t) {
        var n = Ss(e.start)
          , a = Ss(t.start)
          , s = e.title || e.text
          , i = t.title || t.text
          , r = n ? e.allDay ? 1 : +n : 0
          , o = a ? t.allDay ? 1 : +a : 0;
        return r === o ? s > i ? 1 : -1 : r - o
    }
    function Qs(e, t) {
        return "auto" === e ? Math.max(1, Math.min(3, Math.floor(t ? t / 296 : 1))) : e ? +e : 1
    }
    function ei(e, t, n, a, s, i, r, o, l, c, h, d) {
        for (var u = bs(n, new Date(+a - 1)), m = {}, _ = {}, p = n, v = 0, f = function() {
            p.getDay() === o && (_ = {});
            var n, a, f = ps(p), g = ti(t[f] || [], l), y = 0, b = 0, x = 0, D = void 0;
            r && (g = g.filter((function(e) {
                return e.allDay
            }
            )),
            s = Math.max(s, g.length + 1));
            var T = g.length
              , C = [];
            c && (C.push({
                id: "count_" + +p,
                count: T,
                placeholder: 0 === T
            }),
            y = s);
            for (var S = function() {
                if (n = null,
                g.forEach((function(e, t) {
                    _[y] === e && (n = e,
                    a = t)
                }
                )),
                y === s - 1 && (b < T - 1 || x === T && !n)) {
                    var t = T - b
                      , r = h || ""
                      , l = (t > 1 && d || r).replace(/{count}/, t);
                    t && C.push({
                        id: "more_" + ++v,
                        more: l
                    }),
                    n && (_[y] = null,
                    n._days.forEach((function(e) {
                        m[ps(e)].data[y] = {
                            id: "more_" + ++v,
                            more: r.replace(/{count}/, "1")
                        }
                    }
                    ))),
                    b++,
                    y++
                } else if (n)
                    a === x && x++,
                    bs(p, Ss(n.end, e)) && (_[y] = null),
                    C.push({
                        id: n.id + (n.recurring ? "_" + n.nr : ""),
                        event: n
                    }),
                    y++,
                    b++,
                    n._days.push(p);
                else if (x < T) {
                    var c = g[x]
                      , f = c.start && Ss(c.start, e)
                      , S = c.end && Ss(c.end, e)
                      , k = _s(e, f, S)
                      , w = p.getDay()
                      , M = o - w > 0 ? 7 : 0
                      , E = k && !bs(f, k);
                    (!f || bs(p, f) || u || w === o) && (c.id === le && (c.id = "mbsc_" + Xs++),
                    E && (_[y] = c),
                    c._days = [p],
                    D = E && !u ? 100 * Math.min(gs(p, k) + 1, i + o - w - M) : 100,
                    C.push({
                        id: c.id + (c.recurring ? "_" + c.nr : ""),
                        event: c,
                        multiDay: E,
                        width: D,
                        showText: !0
                    }),
                    y++,
                    b++),
                    x++
                } else
                    b < T && C.push({
                        id: "ph_" + ++v,
                        placeholder: !0
                    }),
                    y++
            }; T && y < s; )
                S();
            m[f] = {
                data: C,
                events: g
            },
            p = vs(Ns(p, 1))
        }; p < a; )
            f();
        return m
    }
    function ti(e, t) {
        return e && e.slice(0).sort(t || $s)
    }
    var ni = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t.state = {
                height: "sm",
                maxLabels: 0,
                pageSize: 0,
                pickerSize: 0,
                width: "sm"
            },
            t._dim = {},
            t._months = [1, 2, 3],
            t._title = [],
            t.MONTH_VIEW = Us,
            t.YEAR_VIEW = Bs,
            t.MULTI_YEAR_VIEW = js,
            t.nextPage = function() {
                switch (t._prevDocClick(),
                t._view) {
                case js:
                    t._activeYearsChange(1);
                    break;
                case Bs:
                    t._activeYearChange(1);
                    break;
                default:
                    t._activeChange(1)
                }
            }
            ,
            t.prevPage = function() {
                switch (t._prevDocClick(),
                t._view) {
                case js:
                    t._activeYearsChange(-1);
                    break;
                case Bs:
                    t._activeYearChange(-1);
                    break;
                default:
                    t._activeChange(-1)
                }
            }
            ,
            t._changeView = function(e) {
                var n = t._view
                  , a = t._hasPicker
                  , s = t.s.selectView;
                if (!e)
                    switch (n) {
                    case Us:
                        e = js;
                        break;
                    case js:
                        e = Bs;
                        break;
                    default:
                        e = a || s === Bs ? js : Us
                    }
                var i = a && e === s;
                t.setState({
                    view: e,
                    viewClosing: i ? le : n,
                    viewOpening: i ? le : e
                })
            }
            ,
            t._onDayHoverIn = function(e) {
                t._disableHover || (t._hook("onDayHoverIn", e),
                t._hoverTimer = setTimeout((function() {
                    var n = ps(e.date);
                    t._labels && (e.labels = t._labels[n]),
                    t._marked && (e.marked = t._marked[n]),
                    t._isHover = !0,
                    t._hook("onCellHoverIn", e)
                }
                ), 150))
            }
            ,
            t._onDayHoverOut = function(e) {
                if (!t._disableHover && (t._hook("onDayHoverOut", e),
                clearTimeout(t._hoverTimer),
                t._isHover)) {
                    var n = ps(e.date);
                    t._labels && (e.labels = t._labels[n]),
                    t._marked && (e.marked = t._marked[n]),
                    t._isHover = !1,
                    t._hook("onCellHoverOut", e)
                }
            }
            ,
            t._onLabelClick = function(e) {
                t._isLabelClick = !0,
                t._hook("onLabelClick", e)
            }
            ,
            t._onDayClick = function(e) {
                t._shouldFocus = !t._isLabelClick,
                t._prevAnim = !1,
                t._prevPageChange = t.s.noOuterChange,
                t._isLabelClick = !1,
                t._hook("onDayClick", e)
            }
            ,
            t._onTodayClick = function(e) {
                t._prevAnim = !1,
                t._hook("onActiveChange", {
                    date: +new Date,
                    today: !0
                }),
                t._hook("onTodayClick", {})
            }
            ,
            t._onMonthClick = function(e) {
                var n = e.date
                  , a = t.s;
                if (a.selectView === Bs)
                    t._hook("onDayClick", e);
                else {
                    var s = qs(n, a) - t._offset;
                    t._changeView(Us),
                    t._shouldFocus = !0,
                    t._prevAnim = !t._hasPicker,
                    t._hook("onActiveChange", {
                        date: +n,
                        pageChange: s !== t._pageIndex
                    })
                }
            }
            ,
            t._onYearClick = function(e) {
                var n = t.s.selectView;
                n === js ? t._hook("onDayClick", e) : (t._shouldFocus = !0,
                t._prevAnim = n === Bs,
                t._activeMonth = +e.date,
                t._changeView())
            }
            ,
            t._onPageChange = function(e) {
                t._isSwipeChange = !0,
                t._activeChange(e.diff)
            }
            ,
            t._onYearPageChange = function(e) {
                t._activeYearChange(e.diff)
            }
            ,
            t._onYearsPageChange = function(e) {
                t._activeYearsChange(e.diff)
            }
            ,
            t._onAnimationEnd = function(e) {
                t._disableHover = !1,
                t._isIndexChange && (t._pageLoaded(),
                t._isIndexChange = !1)
            }
            ,
            t._onStart = function() {
                clearTimeout(t._hoverTimer)
            }
            ,
            t._onGestureStart = function(e) {
                t._disableHover = !0,
                t._hook("onGestureStart", e)
            }
            ,
            t._onGestureEnd = function(e) {
                t._prevDocClick()
            }
            ,
            t._onPickerClose = function() {
                t.setState({
                    view: Us
                })
            }
            ,
            t._onPickerOpen = function() {
                var e = t._pickerCont.clientHeight
                  , n = t._pickerCont.clientWidth;
                t.setState({
                    pickerSize: t._isVertical ? e : n
                })
            }
            ,
            t._onPickerBtnClick = function(e) {
                t._view === Us && (t._pickerBtn = e.currentTarget),
                t._prevDocClick(),
                t._changeView()
            }
            ,
            t._onDocClick = function(e) {
                var n = t.s.selectView;
                t._prevClick || t._hasPicker || t._view === n || !t._pickerCont || t._pickerCont.contains(e.target) || t._changeView(n)
            }
            ,
            t._onViewAnimationEnd = function() {
                t.state.viewOpening === le ? t.setState({
                    viewClosing: le
                }) : t.setState({
                    viewOpening: le
                })
            }
            ,
            t._onResize = function() {
                if (t._body && v) {
                    var e = t.state
                      , n = t.s.showCalendar
                      , a = n && t.__getTextParam ? t._body.querySelector(".mbsc-calendar-body-inner") : t._body
                      , s = t._el.offsetHeight
                      , i = a.clientHeight
                      , r = a.clientWidth
                      , o = t._isVertical ? i : r
                      , l = t._hasPicker ? e.pickerSize : o
                      , c = "sm"
                      , h = "sm"
                      , d = 0;
                    if (t.s.responsiveStyle && (i > 300 && (h = "md"),
                    r > 767 && (c = "md")),
                    c !== e.width || h !== e.height)
                        t._shouldCheckSize = !0,
                        t.setState({
                            width: c,
                            height: h
                        });
                    else {
                        var u = [];
                        if (t._labels && n && t.__getTextParam) {
                            var m = a.querySelector(".mbsc-calendar-text")
                              , _ = a.querySelector(".mbsc-calendar-day-inner")
                              , p = _.querySelector(".mbsc-calendar-day-text")
                              , f = Ht(p, "marginTop")
                              , g = Ht(p, "marginBottom")
                              , y = m ? Ht(m, "marginBottom") : 2
                              , b = m ? m.offsetHeight : 18
                              , x = _.clientHeight - p.offsetHeight - f - g;
                            d = Math.max(1, ke(x / (b + y)));
                            for (var D = a.querySelector(".mbsc-calendar-row").querySelectorAll(".mbsc-calendar-cell"), T = 0; T < D.length; T++)
                                if (T || !t.s.showWeekNumbers) {
                                    var C = D[T].getBoundingClientRect().width;
                                    u.push(C)
                                }
                        }
                        t._hook("onResize", {
                            height: s,
                            target: t._el,
                            width: r
                        }),
                        t.setState({
                            cellSizes: u,
                            pageSize: o,
                            pickerSize: l,
                            maxLabels: d
                        })
                    }
                }
            }
            ,
            t._onKeyDown = function(e) {
                var n, a = t.s, s = t._view, i = s === Us ? t._active : t._activeMonth, r = new Date(i), o = a.getYear(r), l = a.getMonth(r), c = a.getDay(r), h = a.getDate, d = a.weeks, u = "month" === a.calendarType;
                if (s === js) {
                    var m = void 0;
                    switch (e.keyCode) {
                    case Wa:
                        m = o - 1 * t._rtlNr;
                        break;
                    case Ba:
                        m = o + 1 * t._rtlNr;
                        break;
                    case Ua:
                        m = o - 3;
                        break;
                    case ja:
                        m = o + 3;
                        break;
                    case Aa:
                        m = t._getPageYears(t._yearsIndex);
                        break;
                    case Ra:
                        m = t._getPageYears(t._yearsIndex) + 11;
                        break;
                    case Fa:
                        m = o - 12;
                        break;
                    case za:
                        m = o + 12
                    }
                    m && t._minYears <= m && t._maxYears >= m && (e.preventDefault(),
                    t._shouldFocus = !0,
                    t._prevAnim = !1,
                    t._activeMonth = +h(m, 0, 1),
                    t.forceUpdate())
                } else if (s === Bs) {
                    switch (e.keyCode) {
                    case Wa:
                        n = h(o, l - 1 * t._rtlNr, 1);
                        break;
                    case Ba:
                        n = h(o, l + 1 * t._rtlNr, 1);
                        break;
                    case Ua:
                        n = h(o, l - 3, 1);
                        break;
                    case ja:
                        n = h(o, l + 3, 1);
                        break;
                    case Aa:
                        n = h(o, 0, 1);
                        break;
                    case Ra:
                        n = h(o, 11, 1);
                        break;
                    case Fa:
                        n = h(o - 1, l, 1);
                        break;
                    case za:
                        n = h(o + 1, l, 1)
                    }
                    n && t._minYear <= n && t._maxYear >= n && (e.preventDefault(),
                    t._shouldFocus = !0,
                    t._prevAnim = !1,
                    t._activeMonth = +n,
                    t.forceUpdate())
                } else if (s === Us) {
                    switch (e.keyCode) {
                    case Wa:
                        n = h(o, l, c - 1 * t._rtlNr);
                        break;
                    case Ba:
                        n = h(o, l, c + 1 * t._rtlNr);
                        break;
                    case Ua:
                        n = h(o, l, c - 7);
                        break;
                    case ja:
                        n = h(o, l, c + 7);
                        break;
                    case Aa:
                        n = h(o, l, 1);
                        break;
                    case Ra:
                        n = h(o, l + 1, 0);
                        break;
                    case Fa:
                        n = e.altKey ? h(o - 1, l, c) : u ? h(o, l - 1, c) : h(o, l, c - 7 * d);
                        break;
                    case za:
                        n = e.altKey ? h(o + 1, l, c) : u ? h(o, l + 1, c) : h(o, l, c + 7 * d)
                    }
                    if (n && t._minDate <= n && t._maxDate >= n) {
                        e.preventDefault();
                        var _ = qs(n, a) - t._offset;
                        t._shouldFocus = !0,
                        t._prevAnim = !1,
                        t._pageChange = a.noOuterChange && _ !== t._pageIndex,
                        t._hook("onActiveChange", {
                            date: +n,
                            pageChange: t._pageChange
                        })
                    }
                }
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._getPageDay = function(e) {
            return +Ks(e + this._offset, this.s)
        }
        ,
        t.prototype._getPageStyle = function(e, t, n) {
            var a;
            return (a = {})[(wt ? wt + "T" : "t") + "ransform"] = "translate" + this._axis + "(" + 100 * (e - t) * this._rtlNr + "%)",
            a.width = 100 / (n || 1) + "%",
            a
        }
        ,
        t.prototype._getPageYear = function(e) {
            return this.s.getYear(Ws) + e + this._yearOffset
        }
        ,
        t.prototype._getPageYears = function(e) {
            return this.s.getYear(Ws) + 12 * (e + this._yearsOffset)
        }
        ,
        t.prototype._getPickerClass = function(e) {
            var t, n = e === this.s.selectView ? " mbsc-calendar-picker-main" : "", a = "mbsc-calendar-picker", s = this._hasPicker, i = this.state, r = i.viewClosing, o = i.viewOpening;
            switch (e) {
            case Us:
                t = s ? "" : (o === Us ? "in-down" : "") + (r === Us ? "out-down" : "");
                break;
            case js:
                t = s && r === Us ? "" : (o === js ? "in-up" : "") + (r === js ? "out-up" : "");
                break;
            default:
                t = s && o === Us ? "" : (o === Bs ? r === js ? "in-down" : "in-up" : "") + (r === Bs ? o === js ? "out-down" : "out-up" : "")
            }
            return a + n + (Tt && t ? " " + a + "-" + t : "")
        }
        ,
        t.prototype._isNextDisabled = function(e) {
            if (!this._hasPicker || e) {
                var t = this._view;
                if (t === js)
                    return this._yearsIndex + 1 > this._maxYearsIndex;
                if (t === Bs)
                    return this._yearIndex + 1 > this._maxYearIndex
            }
            return this._pageIndex + 1 > this._maxIndex
        }
        ,
        t.prototype._isPrevDisabled = function(e) {
            if (!this._hasPicker || e) {
                var t = this._view;
                if (t === js)
                    return this._yearsIndex - 1 < this._minYearsIndex;
                if (t === Bs)
                    return this._yearIndex - 1 < this._minYearIndex
            }
            return this._pageIndex - 1 < this._minIndex
        }
        ,
        t.prototype._render = function(e, t) {
            var n = e.getDate
              , a = e.getYear
              , s = e.getMonth
              , i = e.showCalendar
              , r = "month" === e.calendarType
              , o = i ? r ? 6 : e.weeks : 0
              , l = e.activeDate || this._active || +new Date
              , c = l !== this._active
              , h = new Date(l)
              , d = this._prevS
              , u = e.dateFormat
              , m = e.monthNames
              , _ = e.yearSuffix
              , p = e.calendarType !== d.calendarType || e.eventRange !== d.eventRange || e.eventRangeSize !== d.eventRangeSize || e.showCalendar !== d.showCalendar || e.weeks !== d.weeks
              , v = this._pageChange || this._pageIndex === le || p || !this._prevPageChange && c && (l < +this._firstDay || l >= +this._lastDay) ? qs(h, e) : this._pageIndex + this._offset;
            o === this._weeks && this._pageIndex !== le || (this._offset = v),
            c && (this._activeMonth = l);
            var f = Gs(new Date(this._activeMonth), e)
              , g = Zs(new Date(this._activeMonth), e);
            if (c && (this._yearsOffset = f,
            this._yearOffset = g),
            this._view = t.view || e.selectView,
            this._yearsIndex = f - this._yearsOffset,
            this._yearIndex = g - this._yearOffset,
            this._view === Bs)
                this._viewTitle = this._getPageYear(this._yearIndex) + "";
            else if (this._view === js) {
                var y = this._getPageYears(this._yearsIndex);
                this._viewTitle = y + " - " + (y + 12)
            }
            var b = Qs(e.pages, t.pageSize)
              , x = "vertical" === e.calendarScroll && "auto" !== e.pages && (e.pages === le || 1 === e.pages)
              , D = e.showOuterDays !== le ? e.showOuterDays : !x && b < 2
              , T = Ks(v, e)
              , C = Ks(v + b, e)
              , S = i && D ? ys(T, e) : T
              , k = Ks(v + b - 1, e)
              , w = i && D ? Ns(ys(k, e), 7 * o) : C
              , M = i ? ys(Ks(v - 0 - 1, e), e) : T
              , E = i ? ys(Ks(v - 0 + b + 1 - 1, e), e) : C
              , N = i ? Ns(E, 7 * o) : C
              , L = u.search(/m/i)
              , I = u.search(/y/i);
            if (ve(e.min))
                this._minDate = -1 / 0,
                this._minIndex = -1 / 0,
                this._minYears = -1 / 0,
                this._minYearsIndex = -1 / 0,
                this._minYear = -1 / 0,
                this._minYearIndex = -1 / 0;
            else {
                if (d.min !== e.min || e.getDate !== d.getDate) {
                    var H = Ss(e.min);
                    this._minDate = vs(H),
                    this._minYear = n(a(H), s(H), 1),
                    this._minYears = a(H)
                }
                this._minIndex = qs(this._minDate, e) - this._offset,
                this._minYearIndex = Zs(this._minDate, e) - this._yearOffset,
                this._minYearsIndex = Gs(this._minDate, e) - this._yearsOffset
            }
            if (ve(e.max))
                this._maxDate = 1 / 0,
                this._maxIndex = 1 / 0,
                this._maxYears = 1 / 0,
                this._maxYearsIndex = 1 / 0,
                this._maxYear = 1 / 0,
                this._maxYearIndex = 1 / 0;
            else {
                if (d.max !== e.max || e.getDate !== d.getDate) {
                    var O = Ss(e.max);
                    this._maxDate = O,
                    this._maxYear = n(a(O), s(O) + 1, 1),
                    this._maxYears = a(this._maxDate)
                }
                this._maxIndex = qs(this._maxDate, e) - this._offset,
                this._maxYearIndex = Zs(this._maxDate, e) - this._yearOffset,
                this._maxYearsIndex = Gs(this._maxDate, e) - this._yearsOffset
            }
            e.theme === d.theme && e.calendarScroll === d.calendarScroll && e.calendarType === d.calendarType && e.hasContent === d.hasContent && e.showWeekNumbers === d.showWeekNumbers && e.weeks === d.weeks || (this._shouldCheckSize = !0),
            d.width === e.width && d.height === e.height || (this._dim = {
                height: xe(e.height),
                width: xe(e.width)
            }),
            "sm" === t.width ? this._dayNames = e.dayNamesMin : this._dayNames = e.dayNamesShort,
            this._cssClass = "mbsc-calendar mbsc-font" + this._theme + this._rtl + (t.pageSize ? "" : " mbsc-calendar-hidden") + " mbsc-calendar-height-" + t.height + " mbsc-calendar-width-" + t.width + " " + e.cssClass,
            this._isSwipeChange = !1,
            this._firstDay = T,
            this._firstPageDay = S,
            this._lastDay = C,
            this._lastPageDay = w,
            this._yearFirst = I < L,
            this._pageNr = b;
            var P = e.pageLoad !== d.pageLoad
              , Y = +M != +this._viewStart || +N != +this._viewEnd;
            if (this._pageIndex !== le && Y && (this._isIndexChange = !this._isSwipeChange && !p,
            this._hook("onPageChange", {
                firstDay: S,
                lastDay: w,
                month: r ? T : le,
                viewEnd: N,
                viewStart: M
            })),
            v !== le && (this._pageIndex = v - this._offset),
            v !== le && (e.marked !== d.marked || e.colors !== d.colors || e.labels !== d.labels || e.invalid !== d.invalid || e.valid !== d.valid || t.maxLabels !== this._maxLabels || Y || P)) {
                (Y || P) && (this._marksMap = le,
                this._labelsMap = le,
                this._hook("onPageLoading", {
                    firstDay: S,
                    lastDay: w,
                    month: r ? T : le,
                    viewChanged: Y,
                    viewEnd: N,
                    viewStart: M
                })),
                this._maxLabels = t.maxLabels,
                this._viewStart = M,
                this._viewEnd = N;
                var V = this._labelsMap || As(e.labels, M, N, e)
                  , F = V && ei(e, V, M, N, t.maxLabels, 7, !1, e.firstDay, e.eventOrder, e.showLabelCount, e.moreEventsText, e.moreEventsPluralText);
                F && !this._labels && (this._shouldCheckSize = !0),
                (F && t.maxLabels || !F) && (this._shouldPageLoad = !this._isIndexChange || this._prevAnim || !i || P),
                this._labelsLayout = F,
                this._labels = V,
                this._marked = !V && (this._marksMap || As(e.marked, M, N, e)),
                this._colors = As(e.colors, M, N, e),
                this._valid = As(e.valid, M, N, e, !0),
                this._invalid = As(e.invalid, M, N, e, !0)
            }
            if (Y || c || e.monthNames !== d.monthNames) {
                this._title = [];
                var z = Ns(C, -1)
                  , R = v === le ? h : T;
                if ("week" === e.calendarType)
                    for (var A = 0, W = Object.keys(e.selectedDates); A < W.length; A++) {
                        var U = W[A];
                        if (+U >= +T && +U < +C) {
                            R = new Date(+U);
                            break
                        }
                    }
                if (this._pageNr > 1)
                    for (var B = 0; B < b; B++) {
                        var j = n(a(T), s(T) + B, 1)
                          , X = a(j) + _
                          , J = m[s(j)];
                        this._title.push({
                            yearTitle: X,
                            monthTitle: J
                        })
                    }
                else {
                    var K = {
                        yearTitle: a(R) + _,
                        monthTitle: m[s(R)]
                    }
                      , q = e.showSchedule ? "month" : i ? e.calendarType : e.eventRange
                      , G = e.eventRange && !e.showSchedule && !i
                      , Z = +(e.eventRangeSize || 1);
                    switch (q) {
                    case "year":
                        K.title = a(T) + _,
                        Z > 1 && (K.title += " - " + (a(z) + _));
                        break;
                    case "month":
                        if (Z > 1 && !i) {
                            var $ = m[s(T)]
                              , Q = a(T) + _
                              , ee = this._yearFirst ? Q + " " + $ : $ + " " + Q
                              , te = m[s(z)]
                              , ne = a(z) + _
                              , ae = this._yearFirst ? ne + " " + te : te + " " + ne;
                            K.title = ee + " - " + ae
                        }
                        break;
                    case "week":
                        if (G) {
                            var se = u.search(/d/i) < L ? "D MMM" : "MMM D";
                            K.title = ws(se, T, e) + " - " + ws(se, z, e)
                        }
                        break;
                    case "day":
                        G && (K.title = ws(u, T, e),
                        Z > 1 && (K.title += " - " + ws(u, z, e)))
                    }
                    this._title.push(K)
                }
            }
            if (this._headerHTML = this._headerContent = le,
            e.renderHeader) {
                var ie = e.renderHeader();
                pe(ie) ? (ie !== this._headerLastHTML && (this._headerLastHTML = ie,
                this._shouldEnhanceHeader = !0),
                this._headerHTML = this._safeHtml(ie)) : this._headerContent = ie
            } else
                this._renderHeader && (this._headerContent = this._renderHeader(e, t));
            this._active = l,
            this._activeMonth = ue(this._activeMonth, +this._minDate, +this._maxDate),
            this._hasPicker = e.hasPicker || !r || !i || "md" === t.width && !1 !== e.hasPicker,
            this._axis = x ? "Y" : "X",
            this._rtlNr = !x && e.rtl ? -1 : 1,
            this._weeks = o,
            this._nextIcon = x ? e.nextIconV : e.rtl ? e.prevIconH : e.nextIconH,
            this._prevIcon = x ? e.prevIconV : e.rtl ? e.nextIconH : e.prevIconH,
            this._mousewheel = e.mousewheel === le ? x : e.mousewheel,
            this._isVertical = x,
            this._showOuter = D
        }
        ,
        t.prototype._mounted = function() {
            this._observer = Ka(this._el, this._onResize, this._zone),
            this._doc = It(this._el),
            Nt(this._doc, qn, this._onDocClick)
        }
        ,
        t.prototype._updated = function() {
            var e = this;
            this._shouldCheckSize ? (setTimeout((function() {
                e._onResize()
            }
            )),
            this._shouldCheckSize = !1) : this._shouldPageLoad && (this._pageLoaded(),
            this._shouldPageLoad = !1),
            this._shouldFocus && setTimeout((function() {
                e._focusActive(),
                e._shouldFocus = !1
            }
            )),
            this.s.instanceService !== le && this.s.instanceService.onComponentChange.next({}),
            this._pageChange = !1,
            this._prevPageChange = !1
        }
        ,
        t.prototype._destroy = function() {
            this._observer && this._observer.detach(),
            Lt(this._doc, qn, this._onDocClick),
            clearTimeout(this._hoverTimer)
        }
        ,
        t.prototype._getActiveCell = function() {
            var e = this._view
              , t = e === Us ? this._body : this._pickerCont
              , n = e === js ? "year" : e === Bs ? "month" : "cell";
            return t && t.querySelector(".mbsc-calendar-" + n + '[tabindex="0"]')
        }
        ,
        t.prototype._focusActive = function() {
            var e = this._getActiveCell();
            e && e.focus()
        }
        ,
        t.prototype._pageLoaded = function() {
            this._hook("onPageLoaded", {
                activeElm: this._getActiveCell(),
                firstDay: this._firstPageDay,
                lastDay: this._lastPageDay,
                month: "month" === this.s.calendarType ? this._firstDay : le,
                viewEnd: this._viewEnd,
                viewStart: this._viewStart
            })
        }
        ,
        t.prototype._activeChange = function(e) {
            var t = this._pageIndex + e;
            this._minIndex <= t && this._maxIndex >= t && this.__getTextParam && (this._prevAnim = !1,
            this._pageChange = !0,
            this._hook("onActiveChange", {
                date: this._getPageDay(t),
                pageChange: !0
            }))
        }
        ,
        t.prototype._activeYearsChange = function(e) {
            var t = this._yearsIndex + e;
            if (this._minYearsIndex <= t && this._maxYearsIndex >= t) {
                var n = this._getPageYears(t);
                this._prevAnim = !1,
                this._activeMonth = +this.s.getDate(n, 0, 1),
                this.forceUpdate()
            }
        }
        ,
        t.prototype._activeYearChange = function(e) {
            var t = this._yearIndex + e;
            if (this._minYearIndex <= t && this._maxYearIndex >= t) {
                var n = this._getPageYear(t);
                this._prevAnim = !1,
                this._activeMonth = +this.s.getDate(n, 0, 1),
                this.forceUpdate()
            }
        }
        ,
        t.prototype._prevDocClick = function() {
            var e = this;
            this._prevClick = !0,
            setTimeout((function() {
                e._prevClick = !1
            }
            ))
        }
        ,
        t
    }(Bn)
      , ai = kn({})
      , si = function(e) {
        function t(t) {
            return e.call(this, t) || this
        }
        return r(t, e),
        t.prototype.componentDidMount = function() {
            this.setupService()
        }
        ,
        t.prototype.componentDidUpdate = function() {
            this.setupService()
        }
        ,
        t.prototype.componentWillUnmount = function() {
            var e = this.props.host || this.contextHost;
            e && this.handler !== le && e._instanceService.onComponentChange.unsubscribe(this.handler)
        }
        ,
        t.prototype.render = function() {
            var e = this
              , t = this.props
              , n = t.host
              , a = t.component
              , s = l(t, ["host", "component"]);
            return En(ai.Consumer, null, (function(t) {
                var i = t.instance;
                e.contextHost = i;
                var r = n || i;
                if (!r || !r._calendarView)
                    return null;
                var l = r._calendarView;
                return En(a, o({
                    inst: l
                }, s))
            }
            ))
        }
        ,
        t.prototype.setupService = function() {
            var e = this
              , t = this.props.host || this.contextHost;
            t && this.handler === le && (this.handler = t._instanceService.onComponentChange.subscribe((function() {
                e.forceUpdate()
            }
            )))
        }
        ,
        t
    }(wn)
      , ii = function(e) {
        var t = e.inst
          , n = e.className;
        return En(Xa, {
            ariaLabel: t.s.prevText,
            className: "mbsc-calendar-button " + (n || ""),
            disabled: t._isPrevDisabled(),
            iconSvg: t._prevIcon,
            onClick: t.prevPage,
            theme: t.s.theme,
            themeVariant: t.s.themeVariant,
            type: "button",
            variant: "flat"
        })
    }
      , ri = function(e) {
        var t = e.inst
          , n = e.className;
        return En(Xa, {
            ariaLabel: t.s.nextText,
            disabled: t._isNextDisabled(),
            className: "mbsc-calendar-button " + (n || ""),
            iconSvg: t._nextIcon,
            onClick: t.nextPage,
            theme: t.s.theme,
            themeVariant: t.s.themeVariant,
            type: "button",
            variant: "flat"
        })
    }
      , oi = function(e) {
        var t = e.inst
          , n = e.className;
        return En(Xa, {
            className: "mbsc-calendar-button mbsc-calendar-button-today " + (n || ""),
            onClick: t._onTodayClick,
            theme: t.s.theme,
            themeVariant: t.s.themeVariant,
            type: "button",
            variant: "flat"
        }, t.s.todayText)
    }
      , li = function(e) {
        var t = e.inst
          , n = e.className;
        return En("div", {
            className: (n || "") + t._theme
        }, t._title.length > 0 && t._title.map((function(e, n) {
            if (!(t._pageNr > 1 && n > 0) || t._hasPicker || t._view === Us)
                return En(Xa, {
                    className: "mbsc-calendar-button",
                    "data-index": n,
                    onClick: t._onPickerBtnClick,
                    key: n,
                    theme: t.s.theme,
                    themeVariant: t.s.themeVariant,
                    type: "button",
                    variant: "flat"
                }, (t._hasPicker || t._view === Us) && (e.title ? En("span", {
                    className: "mbsc-calendar-title" + t._theme
                }, e.title) : En(tn, null, t._yearFirst && En("span", {
                    className: "mbsc-calendar-title mbsc-calendar-year" + t._theme
                }, e.yearTitle), En("span", {
                    className: "mbsc-calendar-title mbsc-calendar-month" + t._theme
                }, e.monthTitle), !t._yearFirst && En("span", {
                    className: "mbsc-calendar-title mbsc-calendar-year" + t._theme
                }, e.yearTitle))), !t._hasPicker && t._view !== Us && En("span", {
                    className: "mbsc-calendar-title" + t._theme
                }, t._viewTitle), t.s.downIcon && 1 === t._pageNr ? En(jn, {
                    svg: t._view === Us ? t.s.downIcon : t.s.upIcon,
                    theme: t.s.theme
                }) : null)
        }
        )))
    }
      , ci = function(e) {
        var t = e.calendar
          , n = l(e, ["calendar"]);
        return En(si, o({
            component: ii,
            host: t
        }, n))
    };
    ci._name = "CalendarPrev";
    var hi = function(e) {
        var t = e.calendar
          , n = l(e, ["calendar"]);
        return En(si, o({
            component: ri,
            host: t
        }, n))
    };
    hi._name = "CalendarNext";
    var di = function(e) {
        var t = e.calendar
          , n = l(e, ["calendar"]);
        return En(si, o({
            component: oi,
            host: t
        }, n))
    };
    di._name = "CalendarToday";
    var ui = function(e) {
        var t = e.calendar
          , n = l(e, ["calendar"]);
        return En(si, o({
            component: li,
            host: t
        }, n))
    };
    function mi(e, t, n, a) {
        var s;
        if (!(t < n || t > a)) {
            if (me(e)) {
                var i = e.length
                  , r = t % i;
                s = e[r >= 0 ? r : r + i]
            } else
                s = e(t);
            return s
        }
    }
    ui._name = "CalendarNav";
    var _i = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._setInnerEl = function(e) {
                t._innerEl = e
            }
            ,
            t._setScrollEl = function(e) {
                t._scrollEl = e
            }
            ,
            t._setScrollEl3d = function(e) {
                t._scrollEl3d = e
            }
            ,
            t._setScrollbarEl = function(e) {
                t._scrollbarEl = e
            }
            ,
            t._setScrollbarContEl = function(e) {
                t._scrollbarContEl = e
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._template = function(e) {
            var t, n = this, a = e.children;
            return e.itemRenderer && (a = this.visibleItems.map((function(t) {
                return e.itemRenderer(t, n._offset)
            }
            )),
            e.scroll3d && (t = this.visible3dItems.map((function(t) {
                return e.itemRenderer(t, n._offset, !0)
            }
            )))),
            En("div", {
                ref: this._setEl,
                className: this._cssClass,
                style: e.styles
            }, En("div", {
                ref: this._setInnerEl,
                className: e.innerClass,
                style: e.innerStyles
            }, En("div", {
                ref: this._setScrollEl,
                className: this._rtl
            }, a)), e.scroll3d && En("div", {
                ref: this._setScrollEl3d,
                style: {
                    height: e.itemSize + "px"
                },
                className: "mbsc-scroller-items-3d"
            }, t), En("div", {
                ref: this._setScrollbarContEl,
                className: "mbsc-scroller-bar-cont " + this._rtl + (e.scrollBar && this._barSize !== this._barContSize ? "" : " mbsc-scroller-bar-hidden") + (this._started ? " mbsc-scroller-bar-started" : "")
            }, En("div", {
                className: "mbsc-scroller-bar" + this._theme,
                ref: this._setScrollbarEl,
                style: {
                    height: this._barSize + "px"
                }
            })))
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._currPos = 0,
            t._delta = 0,
            t._endPos = 0,
            t._lastRaf = 0,
            t._maxSnapScroll = 0,
            t._margin = 0,
            t._scrollEnd = Me((function() {
                Dt(t._raf),
                t._raf = !1,
                t._onEnd(),
                t._hasScrolled = !1
            }
            ), 200),
            t._onStart = function(e) {
                var n = t.s;
                t._hook("onStart", {}),
                n.changeOnEnd && t._isScrolling || !n.mouseSwipe && !e.isTouch || !n.swipe || (t._started = !0,
                t._hasScrolled = t._isScrolling,
                t._currX = e.startX,
                t._currY = e.startY,
                t._delta = 0,
                t._velocityX = 0,
                t._velocityY = 0,
                t._startPos = Vt(t._scrollEl, t._isVertical),
                t._timestamp = +new Date,
                t._isScrolling && (Dt(t._raf),
                t._raf = !1,
                t._scroll(t._startPos)))
            }
            ,
            t._onMove = function(e) {
                var n = e.domEvent
                  , a = t.s;
                t._isVertical || a.scrollLock || t._hasScrolled ? n.cancelable && n.preventDefault() : n.type === da && (Math.abs(e.deltaY) > 7 || !a.swipe) && (t._started = !1),
                t._started && (t._delta = t._isVertical ? e.deltaY : e.deltaX,
                (t._hasScrolled || Math.abs(t._delta) > t._threshold) && (t._hasScrolled || t._hook("onGestureStart", {}),
                t._hasScrolled = !0,
                t._isScrolling = !0,
                t._raf || (t._raf = xt((function() {
                    return t._move(e)
                }
                )))))
            }
            ,
            t._onEnd = function() {
                if (t._started = !1,
                t._hasScrolled) {
                    var e, n = t.s, a = 17 * (t._isVertical ? t._velocityY : t._velocityX), s = t._maxSnapScroll, i = t._delta;
                    i += a * a * .5 * (a < 0 ? -1 : 1),
                    s && (i = ue(i, -t._round * s, t._round * s));
                    var r = ue(Ce((t._startPos + i) / t._round) * t._round, t._min, t._max)
                      , o = Ce(-r * t._rtlNr / n.itemSize) + t._offset
                      , l = i > 0 ? t._isVertical ? 270 : 360 : t._isVertical ? 90 : 180
                      , c = o - n.selectedIndex;
                    e = n.time || Math.max(1e3, 3 * Math.abs(r - t._currPos)),
                    t._hook("onGestureEnd", {
                        direction: l,
                        index: o
                    }),
                    t._delta = 0,
                    t._scroll(r, e),
                    c && !n.changeOnEnd && (t._hook("onIndexChange", {
                        index: o,
                        diff: c
                    }),
                    n.selectedIndex === t._prevIndex && n.selectedIndex !== o && t.forceUpdate())
                }
            }
            ,
            t._onClick = function(e) {
                t._hasScrolled && (t._hasScrolled = !1,
                e.stopPropagation(),
                e.preventDefault())
            }
            ,
            t._onScroll = function(e) {
                e.target.scrollTop = 0,
                e.target.scrollLeft = 0
            }
            ,
            t._onMouseWheel = function(e) {
                var n = t._isVertical ? e.deltaY === le ? e.wheelDelta || e.detail : e.deltaY : e.deltaX;
                if (t._el.contains(e.target) && n && t.s.mousewheel) {
                    if (e.preventDefault(),
                    t._hook("onStart", {}),
                    t._started || (t._delta = 0,
                    t._velocityX = 0,
                    t._velocityY = 0,
                    t._startPos = t._currPos,
                    t._hook("onGestureStart", {})),
                    e.deltaMode && 1 === e.deltaMode && (n *= 15),
                    n = ue(-n, -t._scrollSnap, t._scrollSnap),
                    t._delta += n,
                    t._maxSnapScroll && Math.abs(t._delta) > t._round * t._maxSnapScroll && (n = 0),
                    t._startPos + t._delta < t._min && (t._startPos = t._min,
                    t._delta = 0,
                    n = 0),
                    t._startPos + t._delta > t._max && (t._startPos = t._max,
                    t._delta = 0,
                    n = 0),
                    t._raf || (t._raf = xt((function() {
                        return t._move()
                    }
                    ))),
                    !n && t._started)
                        return;
                    t._hasScrolled = !0,
                    t._isScrolling = !0,
                    t._started = !0,
                    t._scrollEnd()
                }
            }
            ,
            t._onTrackStart = function(e) {
                e.stopPropagation();
                var n = {
                    domEvent: e,
                    isTouch: e.type === ha,
                    startX: va(e, "X", !0),
                    startY: va(e, "Y", !0)
                };
                t._onStart(n),
                t._trackStartX = n.startX,
                t._trackStartY = n.startY,
                e.target === t._scrollbarEl ? (Nt(t._doc, sa, t._onTrackEnd),
                Nt(t._doc, aa, t._onTrackMove)) : t._onTrackPoint(e)
            }
            ,
            t._onTrackClick = function(e) {
                e.stopPropagation()
            }
            ,
            t._onTrackPoint = function(e) {
                var n = t._isVertical ? t._trackStartY : t._trackStartX
                  , a = Wt(t._scrollbarContEl).top;
                if (t._isInfinite) {
                    var s = (a + t._barContSize / 2 - n + t._barSize / 2) / (t._barContSize - t._barSize)
                      , i = t._maxSnapScroll * t._round * 2 * s;
                    t._delta = i
                } else {
                    var r = ue(s = (n - a - t._barSize / 2) / (t._barContSize - t._barSize), 0, 1)
                      , o = t._max - (t._max - t._min) * r;
                    t._delta = o - t._startPos
                }
                t._hasScrolled = Math.abs(t._delta) > t._threshold,
                t._velocityX = 0,
                t._velocityY = 0,
                t._onEnd()
            }
            ,
            t._onTrackEnd = function() {
                t._onEnd(),
                Lt(t._doc, sa, t._onTrackEnd),
                Lt(t._doc, aa, t._onTrackMove)
            }
            ,
            t._onTrackMove = function(e) {
                var n = va(e, "X", !0)
                  , a = va(e, "Y", !0)
                  , s = (t._isVertical ? t._trackStartY - a : t._trackStartX - n) / (t._barContSize - t._barSize);
                if (t._isInfinite) {
                    var i = t._maxSnapScroll * t._round * 2 * s;
                    t._delta = i
                } else {
                    i = -(t._min - t._max) * s;
                    t._delta = i
                }
                (t._hasScrolled || Math.abs(t._delta) > t._threshold) && (t._hasScrolled || t._hook("onGestureStart", {}),
                t._hasScrolled = !0,
                t._isScrolling = !0,
                t._raf || (t._raf = xt((function() {
                    return t._move({
                        endX: n,
                        endY: a
                    })
                }
                ))))
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._render = function(e, t) {
            var n = e.batchSize
              , a = e.batchSize3d
              , s = e.itemNr || 1
              , i = e.itemSize
              , r = e.selectedIndex
              , o = this._prevS.selectedIndex
              , l = t.index === le ? r : t.index
              , c = []
              , h = []
              , d = r - o
              , u = l - this._currIndex
              , m = e.minIndex
              , _ = e.maxIndex
              , p = e.items;
            this._currIndex = l,
            this._isVertical = "Y" === e.axis,
            this._threshold = this._isVertical ? e.thresholdY : e.thresholdX,
            this._rtlNr = !this._isVertical && e.rtl ? -1 : 1,
            this._round = e.snap ? i : 1;
            for (var v = this._round; v > 44; )
                v /= 2;
            if (this._scrollSnap = Ce(44 / v) * v,
            p) {
                for (var f = l - n; f < l + s + n; f++)
                    c.push({
                        key: f,
                        data: mi(p, f, m, _)
                    });
                if (e.scroll3d)
                    for (f = l - a; f < l + s + a; f++)
                        h.push({
                            key: f,
                            data: mi(p, f, m, _)
                        });
                this.visibleItems = c,
                this.visible3dItems = h,
                this._maxSnapScroll = n,
                this._isInfinite = "function" == typeof e.items
            }
            if (this._offset === le && (this._offset = r),
            Math.abs(d) > n) {
                var g = d + n * (d > 0 ? -1 : 1);
                this._offset += g,
                this._margin -= g
            }
            if (e.offset && e.offset !== this._prevS.offset && (this._offset += e.offset,
            this._margin -= e.offset),
            u && (this._margin += u),
            this._max = m !== le ? -(m - this._offset) * i * this._rtlNr : 1 / 0,
            this._min = _ !== le ? -(_ - this._offset - (e.spaceAround ? 0 : s - 1)) * i * this._rtlNr : -1 / 0,
            -1 === this._rtlNr) {
                var y = this._min;
                this._min = this._max,
                this._max = y
            }
            var b = e.visibleSize !== this._prevS.visibleSize || e.itemSize !== this._prevS.itemSize;
            if (b && (this._barContSize = e.visibleSize * e.itemSize),
            b || e.items.length !== this._prevS.items.length) {
                var x = !this._isInfinite && e.visibleSize <= e.items.length ? e.visibleSize : 1;
                this._barSize = this._isInfinite ? 20 : x * this._barContSize / e.items.length
            }
            this._cssClass = this._className + " mbsc-ltr" + (e.scrollBar && this._barSize !== this._barContSize ? "" : " mbsc-scroller-bar-none")
        }
        ,
        t.prototype._mounted = function() {
            this._doc = It(this._el),
            Nt(this._el, qn, this._onClick, !0),
            Nt(this.s.scroll3d ? this._innerEl : this._el, ca, this._onScroll),
            Nt(this._doc, oa, this._onMouseWheel, {
                passive: !1,
                capture: !0
            }),
            Nt(this._doc, _a, this._onMouseWheel, {
                passive: !1,
                capture: !0
            }),
            Nt(this._scrollbarContEl, na, this._onTrackStart),
            Nt(this._scrollbarContEl, qn, this._onTrackClick),
            this._unlisten = Ta(this._el, {
                onEnd: this._onEnd,
                onMove: this._onMove,
                onStart: this._onStart,
                prevDef: !0
            })
        }
        ,
        t.prototype._updated = function() {
            var e = this.s
              , t = e.batchSize
              , n = e.itemSize
              , a = e.selectedIndex
              , s = this._prevIndex
              , i = !e.prevAnim && (s !== le && s !== a || this._isAnimating)
              , r = -(a - this._offset) * n * this._rtlNr;
            e.margin && (this._scrollEl.style.marginTop = this._isVertical ? (this._margin - t) * n + "px" : ""),
            this._started || this._scroll(r, i ? this._isAnimating || e.time || 1e3 : 0),
            this._prevIndex = a
        }
        ,
        t.prototype._destroy = function() {
            Lt(this._el, qn, this._onClick, !0),
            Lt(this.s.scroll3d ? this._innerEl : this._el, ca, this._onScroll),
            Lt(this._doc, oa, this._onMouseWheel, {
                passive: !1,
                capture: !0
            }),
            Lt(this._doc, _a, this._onMouseWheel, {
                passive: !1,
                capture: !0
            }),
            Lt(this._scrollbarContEl, na, this._onTrackStart),
            Lt(this._scrollbarContEl, qn, this._onTrackClick),
            Dt(this._raf),
            this._raf = !1,
            this._scroll(0),
            this._unlisten()
        }
        ,
        t.prototype._anim = function() {
            var e = this;
            return this._raf = xt((function() {
                var t = e.s
                  , n = +new Date;
                if (e._raf) {
                    if (Math.abs(e._currPos - e._endPos) < 2)
                        return e._currPos = e._endPos,
                        e._raf = !1,
                        e._isAnimating = 0,
                        e._isScrolling = !1,
                        e._infinite(e._currPos),
                        e._hook("onAnimationEnd", {}),
                        void e._scrollbarContEl.classList.remove("mbsc-scroller-bar-started");
                    n - e._lastRaf > 100 && (e._lastRaf = n,
                    e._currPos = Vt(e._scrollEl, e._isVertical),
                    t.changeOnEnd || e._infinite(e._currPos)),
                    e._raf = e._anim()
                }
            }
            ))
        }
        ,
        t.prototype._infinite = function(e) {
            var t = this.s;
            if (t.itemSize) {
                var n = Ce(-e * this._rtlNr / t.itemSize) + this._offset
                  , a = n - this._currIndex;
                a && (t.changeOnEnd ? this._hook("onIndexChange", {
                    index: n,
                    diff: a
                }) : this.setState({
                    index: n
                }))
            }
        }
        ,
        t.prototype._scroll = function(e, t) {
            var n = this.s
              , a = this._scrollEl.style
              , s = wt ? wt + "T" : "t"
              , i = t ? Mt + "transform " + Ce(t) + "ms " + n.easing : "";
            if (a[s + "ransform"] = "translate3d(" + (this._isVertical ? "0," + e + "px," : e + "px,0,") + "0)",
            a[s + "ransition"] = i,
            this._endPos = e,
            n.scroll3d) {
                var r = this._scrollEl3d.style
                  , o = 360 / (2 * n.batchSize3d);
                r[s + "ransform"] = "translateY(-50%) rotateX(" + -e / n.itemSize * o + "deg)",
                r[s + "ransition"] = i
            }
            if (this._scrollbarEl) {
                var l = this._scrollbarEl.style
                  , c = this._isInfinite ? (this._maxSnapScroll * this._round - this._delta) / (this._maxSnapScroll * this._round * 2) : (e - this._max) / (this._min - this._max)
                  , h = ue((this._barContSize - this._barSize) * c, 0, this._barContSize - this._barSize);
                l[s + "ransform"] = "translate3d(" + (this._isVertical ? "0," + h + "px," : h + "px,0,") + "0)",
                l[s + "ransition"] = i
            }
            t ? (Dt(this._raf),
            this._isAnimating = t,
            this._scrollbarContEl.classList.add("mbsc-scroller-bar-started"),
            this._raf = this._anim()) : (this._currPos = e,
            n.changeOnEnd || this._infinite(e))
        }
        ,
        t.prototype._move = function(e) {
            var t = this._currX
              , n = this._currY
              , a = this._timestamp
              , s = this._maxSnapScroll;
            if (e) {
                this._currX = e.endX,
                this._currY = e.endY,
                this._timestamp = +new Date;
                var i = this._timestamp - a;
                if (i > 0 && i < 100) {
                    var r = (this._currX - t) / i
                      , o = (this._currY - n) / i;
                    this._velocityX = .7 * r + .3 * this._velocityX,
                    this._velocityY = .7 * o + .3 * this._velocityY
                }
            }
            s && (this._delta = ue(this._delta, -this._round * s, this._round * s)),
            this._scroll(ue(this._startPos + this._delta, this._min - this.s.itemSize, this._max + this.s.itemSize)),
            this._raf = !1
        }
        ,
        t.defaults = {
            axis: "Y",
            batchSize: 40,
            easing: "cubic-bezier(0.190, 1.000, 0.220, 1.000)",
            mouseSwipe: !0,
            mousewheel: !0,
            prevDef: !0,
            scrollBar: !1,
            selectedIndex: 0,
            spaceAround: !0,
            stopProp: !0,
            swipe: !0,
            thresholdX: 10,
            thresholdY: 5
        },
        t
    }(Bn))
      , pi = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._onClick = function(e) {
                t._cellClick("onDayClick", e)
            }
            ,
            t._onRightClick = function(e) {
                t._cellClick("onDayRightClick", e)
            }
            ,
            t._onLabelClick = function(e) {
                t._labelClick("onLabelClick", e)
            }
            ,
            t._onLabelDoubleClick = function(e) {
                t._labelClick("onLabelDoubleClick", e)
            }
            ,
            t._onLabelRightClick = function(e) {
                t._labelClick("onLabelRightClick", e)
            }
            ,
            t._width = function(e) {
                var n = t.s;
                if (e === le && (e = 100),
                n.dayWidths === le || n.dayIndex === le)
                    return e + "%";
                for (var a = e / 100, s = -3, i = n.dayIndex; i < n.dayIndex + a; i++)
                    s += n.dayWidths[i];
                return s + "px"
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._mounted = function() {
            var e, t, n, a = this;
            this._unlisten = Ta(this._el, {
                click: !0,
                onBlur: function() {
                    a.setState({
                        hasFocus: !1
                    })
                },
                onDoubleClick: function(e) {
                    var t = a.s;
                    t.clickToCreate && "single" !== t.clickToCreate && t.labels && !t.disabled && t.display && (a._hook("onLabelUpdateStart", e),
                    a._hook("onLabelUpdateEnd", e)),
                    a._cellClick("onDayDoubleClick", e.domEvent)
                },
                onEnd: function(s) {
                    e && (s.domEvent.preventDefault(),
                    a._hook("onLabelUpdateEnd", s),
                    e = !1),
                    clearTimeout(n),
                    e = !1,
                    t = !1
                },
                onFocus: function() {
                    a.setState({
                        hasFocus: !0
                    })
                },
                onHoverIn: function(e) {
                    var t = a.s;
                    t.disabled || a.setState({
                        hasHover: !0
                    }),
                    a._hook("onHoverIn", {
                        date: new Date(t.date),
                        domEvent: e,
                        hidden: !t.display,
                        outer: t.outer,
                        target: a._el
                    })
                },
                onHoverOut: function(e) {
                    var t = a.s;
                    a.setState({
                        hasHover: !1
                    }),
                    a._hook("onHoverOut", {
                        date: new Date(t.date),
                        domEvent: e,
                        hidden: !t.display,
                        outer: t.outer,
                        target: a._el
                    })
                },
                onKeyDown: function(e) {
                    switch (e.keyCode) {
                    case Ya:
                    case Va:
                        e.preventDefault(),
                        a._onClick(e)
                    }
                },
                onMove: function(s) {
                    e && a.s.dragToCreate ? (s.domEvent.preventDefault(),
                    a._hook("onLabelUpdateMove", s)) : t && a.s.dragToCreate && (Math.abs(s.deltaX) > 7 || Math.abs(s.deltaY) > 7) ? (e = !s.isTouch,
                    a._hook("onLabelUpdateStart", s)) : clearTimeout(n)
                },
                onStart: function(s) {
                    var i = a.s;
                    (s.create = !0,
                    i.disabled || !i.dragToCreate && !i.clickToCreate || !i.labels || e) || (Bt(s.domEvent.target, ".mbsc-calendar-text", a._el) || (s.isTouch && i.dragToCreate ? n = setTimeout((function() {
                        a._hook("onLabelUpdateStart", s),
                        a._hook("onLabelUpdateModeOn", s),
                        e = !0
                    }
                    ), 350) : "single" === i.clickToCreate ? (a._hook("onLabelUpdateStart", s),
                    e = !0) : t = !s.isTouch))
                }
            })
        }
        ,
        t.prototype._render = function(e, t) {
            var n = new Date
              , a = e.date
              , s = e.dragData
              , i = new Date(a)
              , r = ps(i)
              , o = bs(n, i)
              , l = e.colors && e.colors[0]
              , c = "";
            this._draggedLabel = s && s.draggedDates && s.draggedDates[r],
            this._draggedLabelOrig = s && s.originDates && s.originDates[r],
            this._todayClass = o ? " mbsc-calendar-today" : "",
            this._cellStyles = l ? {
                backgroundColor: l.background,
                color: l.background ? Ft(l.background) : le
            } : le,
            this._circleStyles = l ? {
                backgroundColor: l.highlight,
                color: l.highlight ? Ft(l.highlight) : le
            } : le,
            this._ariaLabel = "day" === e.type ? (o ? e.todayText + ", " : "") + e.day + ", " + e.month + " " + e.text : "month" === e.type ? e.month : "";
            var h = "";
            if (e.display) {
                var d = e.hoverEnd
                  , u = e.hoverStart
                  , m = e.rangeEnd
                  , _ = e.rangeStart;
                _ && a >= _ && a <= (m || _) && (h = " mbsc-range-day" + (a === _ ? " mbsc-range-day-start" : "") + (a === (m || _) ? " mbsc-range-day-end" : "")),
                _ && d && a >= (m || _) && a <= d && (h += " mbsc-range-hover" + (a === (m || _) ? " mbsc-range-hover-start" : "") + (a === d ? " mbsc-range-hover-end" : "")),
                _ && m && u && a <= _ && a >= u && (h += " mbsc-range-hover" + (a === u ? " mbsc-range-hover-start" : "") + (a === _ ? " mbsc-range-hover-end" : ""))
            }
            e.marks && e.marks.forEach((function(e) {
                c += e.cellCssClass ? " " + e.cellCssClass : ""
            }
            )),
            e.colors && e.colors.forEach((function(e) {
                c += e.cellCssClass ? " " + e.cellCssClass : ""
            }
            )),
            e.labels && e.labels.events && e.labels.events.forEach((function(e) {
                c += e.cellCssClass ? " " + e.cellCssClass : ""
            }
            )),
            this._cssClass = "mbsc-calendar-cell mbsc-calendar-" + e.type + this._theme + this._rtl + this._hb + c + (e.outer ? " mbsc-calendar-day-outer" : "") + (e.labels ? " mbsc-calendar-day-labels" : "") + (e.colors ? " mbsc-calendar-day-colors" : "") + (e.hasMarks ? " mbsc-calendar-day-marked" : "") + (e.disabled ? " mbsc-disabled" : "") + (e.display ? "" : " mbsc-calendar-day-empty") + (e.selected ? " mbsc-selected" : "") + (t.hasFocus ? " mbsc-focus" : "") + (t.hasHover ? " mbsc-hover" : "") + (this._draggedLabel ? " mbsc-calendar-day-highlight" : "") + h
        }
        ,
        t.prototype._destroy = function() {
            this._unlisten()
        }
        ,
        t.prototype._cellClick = function(e, t) {
            var n = this.s;
            !n.disabled && n.display && this._hook(e, {
                date: new Date(n.date),
                domEvent: t,
                outer: n.outer,
                selected: n.selected,
                source: "calendar",
                target: this._el
            })
        }
        ,
        t.prototype._labelClick = function(e, t) {
            var n = this.s;
            t.date = new Date(n.date),
            t.labels = n.labels.events,
            this._hook(e, t)
        }
        ,
        t
    }(Bn)
      , vi = {}
      , fi = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            var t = e.event && !1 !== e.event.editable;
            return En("div", {
                className: this._cssClass,
                ref: this._setEl,
                title: this._title,
                style: {
                    color: this._color
                },
                onClick: this._onClick,
                onContextMenu: this._onRightClick,
                "data-id": e.showText && e.event ? e.event.id : null,
                tabIndex: this._tabIndex
            }, this._hasResizeStart && t && En("div", {
                className: "mbsc-calendar-label-resize mbsc-calendar-label-resize-start" + this._rtl + (e.isUpdate ? " mbsc-calendar-label-resize-start-touch" : "")
            }), this._hasResizeEnd && t && En("div", {
                className: "mbsc-calendar-label-resize mbsc-calendar-label-resize-end" + this._rtl + (e.isUpdate ? " mbsc-calendar-label-resize-end-touch" : "")
            }), e.showText && !e.more && !e.render && En("div", {
                className: "mbsc-calendar-label-background" + this._theme
            }), e.showText && !e.more && e.render ? this._html ? En("div", {
                dangerouslySetInnerHTML: this._html
            }) : this._content : En("div", {
                className: "mbsc-calendar-label-inner" + this._theme,
                style: {
                    color: this._textColor
                }
            }, En("div", {
                className: "mbsc-calendar-label-text" + this._theme,
                dangerouslySetInnerHTML: this._html,
                style: {
                    color: e.event && e.event.textColor
                }
            }, this._content)))
        }
        ,
        t.prototype._updated = function() {
            e.prototype._updated.call(this),
            this._shouldEnhance && On && (On(this._el),
            this._shouldEnhance = !1)
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._onClick = function(e) {
                t._isDrag ? e.stopPropagation() : t._hook("onClick", {
                    domEvent: e,
                    label: t.s.event,
                    target: t._el
                })
            }
            ,
            t._onRightClick = function(e) {
                t._hook("onRightClick", {
                    domEvent: e,
                    label: t.s.event,
                    target: t._el
                })
            }
            ,
            t._onDocTouch = function(e) {
                Lt(t._doc, ha, t._onDocTouch),
                Lt(t._doc, na, t._onDocTouch),
                t._isDrag = !1,
                t._hook("onDragModeOff", {
                    data: t.s.event
                })
            }
            ,
            t._updateState = function(e) {
                t.s.showText && t.setState(e)
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._mounted = function() {
            var e, t = this, n = this.s, a = n.event, s = a ? a.id + (a.nr ? "_" + a.nr : "") : n.id, i = n.isPicker, r = vi[s];
            r || (r = new m,
            vi[s] = r),
            this._unsubscribe = r.subscribe(this._updateState),
            this._doc = It(this._el),
            this._unlisten = Ta(this._el, {
                keepFocus: !0,
                onBlur: function() {
                    i || r.next({
                        hasFocus: !1
                    })
                },
                onDoubleClick: function(e) {
                    e.domEvent.stopPropagation(),
                    t._hook("onDoubleClick", {
                        domEvent: e.domEvent,
                        label: t.s.event,
                        target: t._el
                    })
                },
                onEnd: function(n) {
                    if (t._isDrag) {
                        var a = t.s
                          , s = o({}, n);
                        s.domEvent.preventDefault(),
                        s.data = a.event,
                        a.resize && e ? (s.resize = !0,
                        s.direction = e) : a.drag && (s.drag = !0),
                        t._hook("onDragEnd", s),
                        a.isUpdate || (t._isDrag = !1)
                    }
                    clearTimeout(t._touchTimer),
                    e = le
                },
                onFocus: function() {
                    i || r.next({
                        hasFocus: !0
                    })
                },
                onHoverIn: function() {
                    t._isDrag || i || r.next({
                        hasHover: !0
                    })
                },
                onHoverOut: function() {
                    r.next({
                        hasHover: !1
                    })
                },
                onKeyDown: function(e) {
                    var n = t.s.event;
                    switch (e.keyCode) {
                    case Ya:
                    case Va:
                        t._el.click(),
                        e.preventDefault();
                        break;
                    case 8:
                    case 46:
                        n && !1 !== n.editable && t._hook("onDelete", {
                            domEvent: e.domEvent,
                            event: n,
                            source: "calendar"
                        })
                    }
                },
                onMove: function(n) {
                    var a = t.s
                      , s = o({}, n);
                    if (s.data = a.event,
                    e)
                        s.resize = !0,
                        s.direction = e;
                    else {
                        if (!a.drag)
                            return;
                        s.drag = !0
                    }
                    a.event && !1 !== a.event.editable && (t._isDrag ? (s.domEvent.preventDefault(),
                    t._hook("onDragMove", s)) : (Math.abs(s.deltaX) > 7 || Math.abs(s.deltaY) > 7) && (clearTimeout(t._touchTimer),
                    s.isTouch || (t._isDrag = !0,
                    t._hook("onDragStart", s))))
                },
                onStart: function(n) {
                    var a = t.s
                      , s = o({}, n)
                      , i = s.domEvent.target;
                    if (s.data = a.event,
                    a.resize && i.classList.contains("mbsc-calendar-label-resize"))
                        e = i.classList.contains("mbsc-calendar-label-resize-start") ? "start" : "end",
                        s.resize = !0,
                        s.direction = e;
                    else {
                        if (!a.drag)
                            return;
                        s.drag = !0
                    }
                    a.event && !1 !== a.event.editable && (!t._isDrag && s.isTouch || s.domEvent.stopPropagation(),
                    t._isDrag ? t._hook("onDragStart", s) : s.isTouch && (t._touchTimer = setTimeout((function() {
                        t._hook("onDragModeOn", s),
                        t._hook("onDragStart", s),
                        t._isDrag = !0
                    }
                    ), 350)))
                }
            }),
            this._isDrag && (Nt(this._doc, ha, this._onDocTouch),
            Nt(this._doc, na, this._onDocTouch))
        }
        ,
        t.prototype._destroy = function() {
            if (this._unsubscribe) {
                var e = this.s
                  , t = e.event
                  , n = t ? t.id + (t.nr ? "_" + t.nr : "") : e.id
                  , a = vi[n];
                a.unsubscribe(this._unsubscribe),
                a.nr || delete vi[n]
            }
            Lt(this._doc, ha, this._onDocTouch),
            Lt(this._doc, na, this._onDocTouch),
            this._unlisten && this._unlisten()
        }
        ,
        t.prototype._render = function(e, t) {
            var n, a, s, i, r = e.event, o = new Date(e.date), l = e.render || e.renderContent, c = !1;
            if (this._isDrag = this._isDrag || e.isUpdate,
            this._html = this._content = le,
            this._title = e.more || e.count ? le : At(r.title || r.text),
            this._tabIndex = e.isActiveMonth && e.showText && !e.count && !e.isPicker ? 0 : -1,
            r) {
                n = r.start ? Ss(r.start, e) : null,
                a = r.end ? Ss(r.end, e) : null;
                var h = n && a && _s(e, n, a);
                s = !(c = n && h && !bs(n, h)) || n && bs(n, o),
                i = !c || h && bs(h, o);
                var d = ys(o, e)
                  , u = Cs(e, d.getFullYear(), d.getMonth(), d.getDate() + 7);
                this._hasResizeStart = e.resize && s,
                this._hasResizeEnd = e.resize && (!c || (e.showText ? h < u : i));
                var m = r.color;
                if (!m && r.resource && e.resourcesMap) {
                    var _ = e.resourcesMap[me(r.resource) ? r.resource[0] : r.resource];
                    m = _ && _.color
                }
                e.showText && (this._textColor = m ? Ft(m) : le),
                this._color = e.render || e.template ? le : r.textColor && !m ? "transparent" : m
            }
            if (r && e.showText && (l || e.contentTemplate || e.template)) {
                var p = r.allDay || !n || c && !s && !i;
                if (this._data = {
                    end: !p && i && a ? ws(e.timeFormat, a, e) : "",
                    id: r.id,
                    isMultiDay: c,
                    original: r,
                    start: !p && s && n ? ws(e.timeFormat, n, e) : "",
                    title: this._title
                },
                l) {
                    var v = l(this._data);
                    pe(v) ? (this._html = this._safeHtml(v),
                    this._shouldEnhance = !0) : this._content = v
                }
            } else
                this._html = this._safeHtml(e.more || e.count || (e.showText ? r.title || r.text : ""));
            this._cssClass = "mbsc-calendar-text" + this._theme + this._rtl + (t.hasFocus && !e.inactive ? " mbsc-calendar-label-active " : "") + (!t.hasHover || e.inactive || this._isDrag ? "" : " mbsc-calendar-label-hover") + (e.more ? " mbsc-calendar-text-more" : e.render || e.template ? " mbsc-calendar-custom-label" : " mbsc-calendar-label") + (e.inactive ? " mbsc-calendar-label-inactive" : "") + (e.isUpdate ? " mbsc-calendar-label-dragging" : "") + (e.hidden ? " mbsc-calendar-label-hidden" : "")
        }
        ,
        t
    }(Bn))
      , gi = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._renderEvent = function(e, t, n, a, s, i) {
            return En(fi, {
                key: i,
                count: t.count ? t.count + " " + (t.count > 1 ? e.eventsText : e.eventText) : le,
                date: e.date,
                dataTimezone: e.dataTimezone,
                displayTimezone: e.displayTimezone,
                drag: e.dragToMove,
                resize: e.dragToResize,
                event: t.event,
                exclusiveEndDates: e.exclusiveEndDates,
                firstDay: e.firstDay,
                hidden: a,
                id: t.id,
                inactive: !s && t.event && e.dragData && e.dragData.draggedEvent && t.event.id === e.dragData.draggedEvent.id,
                isActiveMonth: e.isActiveMonth,
                isPicker: e.isPicker,
                isUpdate: s,
                more: t.more,
                resourcesMap: e.resourcesMap,
                rtl: e.rtl,
                showText: n,
                theme: e.theme,
                timeFormat: e.timeFormat,
                timezonePlugin: e.timezonePlugin,
                render: e.renderLabel,
                renderContent: e.renderLabelContent,
                onClick: this._onLabelClick,
                onDoubleClick: this._onLabelDoubleClick,
                onRightClick: this._onLabelRightClick,
                onDelete: e.onLabelDelete,
                onDragStart: e.onLabelUpdateStart,
                onDragMove: e.onLabelUpdateMove,
                onDragEnd: e.onLabelUpdateEnd,
                onDragModeOn: e.onLabelUpdateModeOn,
                onDragModeOff: e.onLabelUpdateModeOff
            })
        }
        ,
        t.prototype._renderLabel = function(e, t) {
            var n = t.id;
            return t.placeholder ? En("div", {
                className: "mbsc-calendar-text mbsc-calendar-text-placeholder",
                key: n
            }) : t.more || t.count ? this._renderEvent(e, t, !0, !1, !1, n) : t.multiDay ? [En("div", {
                className: "mbsc-calendar-label-wrapper",
                style: {
                    width: this._width(t.width)
                },
                key: n
            }, this._renderEvent(e, t, !0)), this._renderEvent(e, t, !1, !1, !1, "-" + n)] : this._renderEvent(e, t, t.showText, !1, !1, n)
        }
        ,
        t.prototype._template = function(e) {
            var t = this
              , n = this._draggedLabel
              , a = this._draggedLabelOrig;
            return En("div", {
                role: "gridcell",
                "aria-label": this._ariaLabel,
                ref: this._setEl,
                className: this._cssClass,
                tabIndex: e.disabled ? le : e.active ? 0 : -1,
                onClick: this._onClick,
                onContextMenu: this._onRightClick,
                style: this._cellStyles
            }, En("div", {
                dangerouslySetInnerHTML: this.textParam
            }), En("div", {
                className: "mbsc-calendar-cell-inner mbsc-calendar-" + e.type + "-inner" + this._theme + ("day" === e.type ? "" : this._hb) + (e.display ? "" : " mbsc-calendar-day-hidden")
            }, En("div", {
                className: "mbsc-calendar-cell-text mbsc-calendar-" + e.type + "-text" + this._theme + this._todayClass,
                style: this._circleStyles
            }, e.text), e.labels && En("div", null, a && a.event && En("div", {
                className: "mbsc-calendar-labels mbsc-calendar-labels-dragging"
            }, En("div", {
                style: {
                    width: this._width(a.width || 100)
                }
            }, this._renderEvent(e, {
                id: 0,
                event: a.event
            }, !0, !!e.dragData.draggedDates, !0))), n && n.event && En("div", {
                className: "mbsc-calendar-labels mbsc-calendar-labels-dragging"
            }, En("div", {
                className: "mbsc-calendar-label-wrapper",
                style: {
                    width: this._width(n.width || 100)
                }
            }, this._renderEvent(e, {
                id: 0,
                event: n.event
            }, !0, !1, !0))), En("div", {
                className: "mbsc-calendar-labels"
            }, e.labels.data.map((function(n) {
                return t._renderLabel(e, n)
            }
            ))), En("div", {
                className: "mbsc-calendar-text mbsc-calendar-text-placeholder"
            })), e.marks && En("div", null, En("div", {
                className: "mbsc-calendar-marks" + this._theme + this._rtl
            }, e.marks.map((function(e, n) {
                return En("div", {
                    className: "mbsc-calendar-mark " + (e.markCssClass || "") + t._theme,
                    key: n,
                    style: {
                        background: e.color
                    }
                })
            }
            ))))))
        }
        ,
        t
    }(pi)
      , yi = function(e) {
        var t = e.dayNames
          , n = e.firstDay
          , a = e.hidden
          , s = e.rtl
          , i = e.theme
          , r = e.dayNamesShort
          , o = e.showWeekNumbers;
        return En("div", {
            className: "mbsc-calendar-week-days" + (a ? " mbsc-hidden" : "")
        }, o && En("div", {
            className: "mbsc-calendar-week-day mbsc-calendar-week-nr" + i + s
        }), de.map((function(e, a) {
            return En("div", {
                "aria-label": t[(a + n) % 7],
                className: "mbsc-calendar-week-day" + i + s,
                key: a
            }, r[(a + n) % 7])
        }
        )))
    };
    function bi(e, t, n, a, s) {
        var i = ps(e);
        if (a && +e < a || s && +e > s)
            return !0;
        if (n && n[i])
            return !1;
        var r = t && t[i];
        if (r)
            for (var o = 0, l = r; o < l.length; o++) {
                var c = l[o];
                if (!(c.start && c.end && bs(c.start, c.end)))
                    return c
            }
        return !1
    }
    function xi(e, t, n, a, s, i, r) {
        var o, l, c = !0, h = !0, d = 0, u = 0;
        if (+e < n && (e = new Date(n)),
        +e > a && (e = new Date(a)),
        !s) {
            var m = t.getYear(e)
              , _ = t.getMonth(e)
              , p = t.getDate(m, _ - 1, 1)
              , v = t.getDate(m, _ + 2, 1);
            i = As(t.valid, p, v, t, !0),
            s = As(t.invalid, p, v, t, !0)
        }
        if (!bi(e, s, i, n, a))
            return e;
        for (o = e,
        l = e; c && +o < a && d < 100; )
            c = bi(o = Ns(o, 1), s, i, n, a),
            d++;
        for (; h && +l > n && u < 100; )
            h = bi(l = Ns(l, -1), s, i, n, a),
            u++;
        return 1 !== r || c ? -1 !== r || h ? xs(e, o, t) ? o : xs(e, l, t) ? l : u >= d && !c ? o : l : l : o
    }
    var Di = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            var t = this
              , n = e.showWeekDays ? En(yi, {
                dayNames: e.dayNames,
                dayNamesShort: e.dayNamesShort,
                firstDay: e.firstDay,
                rtl: this._rtl,
                showWeekNumbers: e.showWeekNumbers,
                theme: this._theme
            }) : null;
            return En("div", {
                role: "grid",
                className: "mbsc-calendar-table" + (e.isActive ? " mbsc-calendar-table-active" : "")
            }, n, this._rows.map((function(n, a) {
                return En("div", {
                    role: "row",
                    className: "mbsc-calendar-row",
                    key: a
                }, e.showWeekNumbers && En("div", {
                    role: "gridcell",
                    className: "mbsc-calendar-cell mbsc-calendar-day mbsc-calendar-week-nr" + t._theme
                }, t._getWeekNr(e, n[0].date)), n.map((function(n, a) {
                    return En(gi, {
                        active: n.display && t._isActive(n.date),
                        clickToCreate: e.clickToCreate,
                        colors: n.colors,
                        date: n.date,
                        day: n.day,
                        dayIndex: a,
                        dayWidths: e.cellSizes,
                        disabled: t._isInvalid(n.date),
                        display: n.display,
                        dataTimezone: e.dataTimezone,
                        displayTimezone: e.displayTimezone,
                        dragToCreate: e.dragToCreate,
                        dragToResize: e.dragToResize,
                        dragToMove: e.dragToMove,
                        eventText: e.eventText,
                        eventsText: e.eventsText,
                        exclusiveEndDates: e.exclusiveEndDates,
                        firstDay: e.firstDay,
                        hasMarks: e.hasMarks,
                        hoverEnd: e.hoverEnd,
                        hoverStart: e.hoverStart,
                        isActiveMonth: e.isActive,
                        isPicker: e.isPicker,
                        key: n.date,
                        labels: n.labels,
                        dragData: e.dragData,
                        marks: n.marks,
                        month: n.month,
                        onDayClick: e.onDayClick,
                        onDayDoubleClick: e.onDayDoubleClick,
                        onDayRightClick: e.onDayRightClick,
                        onLabelClick: e.onLabelClick,
                        onLabelDoubleClick: e.onLabelDoubleClick,
                        onLabelRightClick: e.onLabelRightClick,
                        onLabelDelete: e.onLabelDelete,
                        onLabelUpdateStart: e.onLabelUpdateStart,
                        onLabelUpdateMove: e.onLabelUpdateMove,
                        onLabelUpdateEnd: e.onLabelUpdateEnd,
                        onLabelUpdateModeOn: e.onLabelUpdateModeOn,
                        onLabelUpdateModeOff: e.onLabelUpdateModeOff,
                        outer: n.outer,
                        renderLabel: e.renderLabel,
                        renderLabelContent: e.renderLabelContent,
                        rangeEnd: e.rangeEnd,
                        rangeStart: e.rangeStart,
                        resourcesMap: e.resourcesMap,
                        rtl: e.rtl,
                        selected: t._isSelected(n.date),
                        text: n.text,
                        theme: e.theme,
                        timeFormat: e.timeFormat,
                        timezonePlugin: e.timezonePlugin,
                        todayText: e.todayText,
                        type: "day",
                        onHoverIn: e.onDayHoverIn,
                        onHoverOut: e.onDayHoverOut
                    })
                }
                )))
            }
            )))
        }
        ,
        t
    }(function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._isActive = function(e) {
            return this.s.isActive && e === this.s.activeDate
        }
        ,
        t.prototype._isInvalid = function(e) {
            var t = this.s;
            return bi(new Date(e), t.invalid, t.valid, +t.min, +t.max)
        }
        ,
        t.prototype._isSelected = function(e) {
            return !!this.s.selectedDates[+e]
        }
        ,
        t.prototype._getWeekNr = function(e, t) {
            var n = new Date(t);
            return e.getWeekNumber(e.getDate(n.getFullYear(), n.getMonth(), n.getDate() + (7 - e.firstDay + 1) % 7))
        }
        ,
        t.prototype._render = function(e) {
            var t = []
              , n = e.weeks
              , a = e.firstDay
              , s = new Date(e.firstPageDay)
              , i = e.getYear(s)
              , r = e.getMonth(s)
              , o = e.getDay(s)
              , l = e.getDate(i, r, o).getDay()
              , c = a - l > 0 ? 7 : 0;
            this._rows = [],
            this._days = Array.apply(0, Array(7));
            for (var h = 0; h < 7 * n; h++) {
                h % 7 == 0 && (t = []);
                var d = e.getDate(i, r, h + a - c - l + o)
                  , u = ps(d)
                  , m = e.getMonth(d)
                  , _ = m !== r && "month" === e.calendarType
                  , p = e.marked && e.marked[u]
                  , v = p ? e.showSingleMark ? [{}] : p : null;
                t.push({
                    colors: e.colors && e.colors[u],
                    date: +d,
                    day: e.dayNames[d.getDay()],
                    display: !_ || e.showOuter,
                    labels: e.labels && e.labels[u],
                    marks: v,
                    month: e.monthNames[m],
                    outer: _,
                    text: e.getDay(d)
                }),
                h % 7 == 0 && this._rows.push(t)
            }
        }
        ,
        t
    }(Bn))
      , Ti = 0
      , Ci = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._setHeader = function(e) {
                t._headerElement = e
            }
            ,
            t._setBody = function(e) {
                t._body = e
            }
            ,
            t._setPickerCont = function(e) {
                t._pickerCont = e
            }
            ,
            t._renderMonth = function(e, n) {
                var a = t.s;
                return En("div", {
                    className: "mbsc-calendar-slide" + t._theme + t._rtl,
                    key: e.key,
                    style: t._getPageStyle(e.key, n, t._pageNr)
                }, En(Di, {
                    activeDate: t._active,
                    calendarType: a.calendarType,
                    cellSizes: t.state.cellSizes,
                    clickToCreate: a.clickToCreate,
                    colors: t._colors,
                    dayNames: a.dayNames,
                    dayNamesShort: t._dayNames,
                    dataTimezone: a.dataTimezone,
                    displayTimezone: a.displayTimezone,
                    dragToCreate: a.dragToCreate,
                    dragToResize: a.dragToResize,
                    dragToMove: a.dragToMove,
                    eventText: a.eventText,
                    eventsText: a.eventsText,
                    exclusiveEndDates: a.exclusiveEndDates,
                    firstDay: a.firstDay,
                    firstPageDay: t._getPageDay(e.key),
                    getDate: a.getDate,
                    getDay: a.getDay,
                    getMonth: a.getMonth,
                    getWeekNumber: a.getWeekNumber,
                    getYear: a.getYear,
                    hasMarks: !!t._marked,
                    hoverEnd: a.hoverEnd,
                    hoverStart: a.hoverStart,
                    isActive: e.key >= t._pageIndex && e.key < t._pageIndex + t._pageNr && t._view === Us,
                    isPicker: a.isPicker,
                    invalid: t._invalid,
                    labels: t._labelsLayout,
                    dragData: a.dragData,
                    marked: t._marked,
                    max: t._maxDate,
                    min: t._minDate,
                    monthNames: a.monthNames,
                    onDayClick: t._onDayClick,
                    onDayDoubleClick: a.onDayDoubleClick,
                    onDayRightClick: a.onDayRightClick,
                    onDayHoverIn: t._onDayHoverIn,
                    onDayHoverOut: t._onDayHoverOut,
                    onLabelClick: t._onLabelClick,
                    onLabelDoubleClick: a.onLabelDoubleClick,
                    onLabelRightClick: a.onLabelRightClick,
                    onLabelDelete: a.onLabelDelete,
                    onLabelUpdateStart: a.onLabelUpdateStart,
                    onLabelUpdateMove: a.onLabelUpdateMove,
                    onLabelUpdateEnd: a.onLabelUpdateEnd,
                    onLabelUpdateModeOn: a.onLabelUpdateModeOn,
                    onLabelUpdateModeOff: a.onLabelUpdateModeOff,
                    rangeEnd: a.rangeEnd,
                    rangeStart: a.rangeStart,
                    resourcesMap: a.resourcesMap,
                    rtl: a.rtl,
                    selectedDates: a.selectedDates,
                    showOuter: t._showOuter,
                    showWeekDays: !t._isVertical,
                    showWeekNumbers: a.showWeekNumbers,
                    showSingleMark: !!t._marksMap,
                    todayText: a.todayText,
                    theme: a.theme,
                    timeFormat: a.timeFormat,
                    timezonePlugin: a.timezonePlugin,
                    valid: t._valid,
                    weeks: t._weeks,
                    renderLabel: a.renderLabel,
                    renderLabelContent: a.renderLabelContent
                }))
            }
            ,
            t._renderYears = function(e, n) {
                var a = t.s
                  , s = e.key
                  , i = t._getPageYears(s)
                  , r = a.getYear(new Date(t._active))
                  , o = a.getYear(new Date(t._activeMonth));
                return En("div", {
                    className: "mbsc-calendar-picker-slide mbsc-calendar-slide" + t._theme + t._rtl,
                    key: s,
                    style: t._getPageStyle(s, n)
                }, En("div", {
                    role: "grid",
                    className: "mbsc-calendar-table"
                }, he.map((function(e, n) {
                    return En("div", {
                        role: "row",
                        className: "mbsc-calendar-row",
                        key: n
                    }, ce.map((function(e, s) {
                        var l = i + 3 * n + s
                          , c = +a.getDate(l, 0, 1);
                        return En(gi, {
                            active: l === o,
                            date: c,
                            display: !0,
                            selected: l === r,
                            disabled: l < t._minYears || l > t._maxYears,
                            rtl: a.rtl,
                            text: l + a.yearSuffix,
                            theme: a.theme,
                            type: "year",
                            onDayClick: t._onYearClick,
                            key: l
                        })
                    }
                    )))
                }
                ))))
            }
            ,
            t._renderYear = function(e, n) {
                var a = t.s
                  , s = e.key
                  , i = t._getPageYear(s)
                  , r = new Date(t._activeMonth)
                  , o = a.getYear(r)
                  , l = a.getMonth(r)
                  , c = new Date(t._active)
                  , h = a.getYear(c)
                  , d = a.getMonth(c);
                return En("div", {
                    className: "mbsc-calendar-picker-slide mbsc-calendar-slide" + t._theme + t._rtl,
                    key: s,
                    style: t._getPageStyle(s, n)
                }, En("div", {
                    role: "grid",
                    className: "mbsc-calendar-table"
                }, he.map((function(e, n) {
                    return En("div", {
                        role: "row",
                        className: "mbsc-calendar-row",
                        key: n
                    }, ce.map((function(e, s) {
                        var r = a.getDate(i, 3 * n + s, 1)
                          , c = a.getYear(r)
                          , u = a.getMonth(r);
                        return En(gi, {
                            active: c === o && u === l,
                            date: +r,
                            display: !0,
                            selected: c === h && u === d,
                            disabled: r < t._minYear || r >= t._maxYear,
                            month: a.monthNames[u],
                            rtl: a.rtl,
                            text: a.monthNamesShort[u],
                            theme: a.theme,
                            type: "month",
                            onDayClick: t._onMonthClick,
                            key: +r
                        })
                    }
                    )))
                }
                ))))
            }
            ,
            t._renderHeader = function(e, n) {
                var a = t._pageNr > 1;
                return En(tn, null, En(ui, {
                    className: "mbsc-calendar-title-wrapper" + (a ? " mbsc-calendar-title-wrapper-multi" : "")
                }), En(ci, {
                    className: "mbsc-calendar-button-prev" + (a ? " mbsc-calendar-button-prev-multi" : "")
                }), e.showToday && En(di, {
                    className: "mbsc-calendar-header-today"
                }), En(hi, {
                    className: "mbsc-calendar-button-next" + (a ? " mbsc-calendar-button-next-multi" : "")
                }))
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._template = function(e, t) {
            var n = this;
            Ti++;
            var a = this._isVertical && e.showCalendar ? En(yi, {
                dayNames: e.dayNames,
                dayNamesShort: this._dayNames,
                rtl: this._rtl,
                theme: this._theme,
                firstDay: e.firstDay,
                hidden: this._view !== Us && !this._hasPicker,
                showWeekNumbers: e.showWeekNumbers
            }) : null
              , s = {
                axis: this._axis,
                batchSize: 1,
                changeOnEnd: !0,
                className: "mbsc-calendar-scroll-wrapper" + this._theme,
                data: Ti,
                easing: "ease-out",
                itemSize: t.pickerSize,
                items: this._months,
                mousewheel: this._mousewheel,
                prevAnim: this._prevAnim,
                rtl: e.rtl,
                snap: !0,
                time: 200
            }
              , i = En("div", {
                ref: this._setPickerCont,
                className: this._hasPicker ? "mbsc-calendar-picker-wrapper" : ""
            }, (t.view === js || t.viewClosing === js || e.selectView === js) && En("div", {
                onAnimationEnd: this._onViewAnimationEnd,
                className: this._getPickerClass(js)
            }, En(_i, o({
                key: "years",
                itemRenderer: this._renderYears,
                maxIndex: this._maxYearsIndex,
                minIndex: this._minYearsIndex,
                onGestureEnd: this._onGestureEnd,
                onIndexChange: this._onYearsPageChange,
                selectedIndex: this._yearsIndex
            }, s))), (t.view === Bs || t.viewClosing === Bs || e.selectView === Bs) && En("div", {
                onAnimationEnd: this._onViewAnimationEnd,
                className: this._getPickerClass(Bs)
            }, En(_i, o({
                key: "year",
                itemRenderer: this._renderYear,
                maxIndex: this._maxYearIndex,
                minIndex: this._minYearIndex,
                onGestureEnd: this._onGestureEnd,
                onIndexChange: this._onYearPageChange,
                selectedIndex: this._yearIndex
            }, s))))
              , r = En("div", {
                className: this._cssClass,
                ref: this._setEl,
                style: this._dim,
                onClick: De
            }, En("div", {
                className: "mbsc-calendar-wrapper" + this._theme + this._hb + (e.hasContent || !e.showCalendar ? " mbsc-calendar-wrapper-fixed" : "")
            }, En("div", {
                className: "mbsc-calendar-header" + this._theme + this._hb + (this._isVertical ? " mbsc-calendar-header-vertical" : ""),
                ref: this._setHeader
            }, e.showControls && En("div", {
                className: "mbsc-calendar-controls" + this._theme,
                dangerouslySetInnerHTML: this._headerHTML
            }, this._headerContent), a), En("div", {
                className: "mbsc-calendar-body" + this._theme,
                ref: this._setBody,
                onKeyDown: this._onKeyDown
            }, e.showCalendar && En("div", {
                className: "mbsc-calendar-body-inner"
            }, e.selectView === Us && En("div", {
                className: this._getPickerClass(Us),
                onAnimationEnd: this._onViewAnimationEnd
            }, En(_i, o({}, s, {
                itemNr: this._pageNr,
                itemSize: t.pageSize / this._pageNr,
                itemRenderer: this._renderMonth,
                maxIndex: this._maxIndex,
                minIndex: this._minIndex,
                mouseSwipe: e.mouseSwipe,
                onAnimationEnd: this._onAnimationEnd,
                onGestureStart: this._onGestureStart,
                onIndexChange: this._onPageChange,
                onStart: this._onStart,
                selectedIndex: this._pageIndex,
                swipe: e.swipe
            }))), !this._hasPicker && i))), this.props.children, this._hasPicker && En(ns, {
                anchor: this._pickerBtn,
                closeOnScroll: !0,
                contentPadding: !1,
                context: e.context,
                cssClass: "mbsc-calendar-popup",
                display: "anchored",
                isOpen: this._view !== Us,
                locale: e.locale,
                onClose: this._onPickerClose,
                onOpen: this._onPickerOpen,
                rtl: e.rtl,
                scrollLock: !1,
                showOverlay: !1,
                theme: e.theme,
                themeVariant: e.themeVariant
            }, En("div", {
                onKeyDown: this._onKeyDown
            }, En("div", {
                className: "mbsc-calendar-controls" + this._theme
            }, En("div", {
                className: "mbsc-calendar-picker-button-wrapper mbsc-calendar-title-wrapper" + this._theme
            }, En(Xa, {
                className: "mbsc-calendar-button",
                onClick: this._onPickerBtnClick,
                theme: e.theme,
                themeVariant: e.themeVariant,
                type: "button",
                variant: "flat"
            }, this._viewTitle, e.downIcon && En(jn, {
                svg: t.view === js ? e.downIcon : e.upIcon,
                theme: e.theme
            }))), En(Xa, {
                className: "mbsc-calendar-button",
                ariaLabel: e.prevText,
                disabled: this._isPrevDisabled(!0),
                iconSvg: this._prevIcon,
                onClick: this.prevPage,
                theme: e.theme,
                themeVariant: e.themeVariant,
                type: "button",
                variant: "flat"
            }), En(Xa, {
                className: "mbsc-calendar-button",
                ariaLabel: e.nextText,
                disabled: this._isNextDisabled(!0),
                iconSvg: this._nextIcon,
                onClick: this.nextPage,
                theme: e.theme,
                themeVariant: e.themeVariant,
                type: "button",
                variant: "flat"
            })), i)));
            return En(ai.Consumer, null, (function(e) {
                var t = e.instance;
                return n._calendarHost = t,
                r
            }
            ))
        }
        ,
        t.prototype._updated = function() {
            e.prototype._updated.call(this),
            this._shouldEnhanceHeader && (On(this._headerElement, {
                calendar: this._calendarHost
            }),
            this._shouldEnhanceHeader = !1)
        }
        ,
        t
    }(ni)
      , Si = function() {
        function e() {
            this.onInstanceReady = new m,
            this.onComponentChange = new m
        }
        return Object.defineProperty(e.prototype, "instance", {
            get: function() {
                return this.inst
            },
            set: function(e) {
                this.inst = e,
                this.onInstanceReady.next(e)
            },
            enumerable: !0,
            configurable: !0
        }),
        e
    }()
      , ki = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._nullSupport = !0,
            t._onInputClick = function(e) {
                t.s.disabled || (t._focusElm = e.target,
                t._anchor = t.s.anchor || t._focusElm,
                t.open())
            }
            ,
            t._onInputFocus = function(e) {
                t._preventShow ? t._preventShow = !1 : t._onInputClick(e)
            }
            ,
            t._onInputMouseDown = function(e) {
                e.preventDefault()
            }
            ,
            t._onInputKey = function(e) {
                e.keyCode !== Va && e.keyCode !== Ya || (e.preventDefault(),
                t._onInputClick(e))
            }
            ,
            t._onInputChange = function(e, n) {
                var a = e.detail || (n !== le ? n : e.target.value);
                if (a !== t._tempValueText && !t._preventChange) {
                    t._readValue(a),
                    t._valueTextChange = a !== t._tempValueText;
                    var s = ve(a) ? null : t._get(t._tempValueRep);
                    t.value = s,
                    t._change(s)
                }
                t._preventChange = !1
            }
            ,
            t._onResize = function(e) {
                t._hook("onResize", e)
            }
            ,
            t._onWrapperResize = function() {
                t._wrapper && t._onResize({
                    windowWidth: t._wrapper.offsetWidth
                })
            }
            ,
            t._onPopupClose = function(e) {
                /cancel|esc|overlay|scroll/.test(e.source) && t._hook("onCancel", {
                    value: t.value,
                    valueText: t._valueText
                }),
                t.close()
            }
            ,
            t._onPopupClosed = function(e) {
                e.focus && (t._preventShow = !0),
                t._hook("onClosed", e),
                t._onClosed()
            }
            ,
            t._onPopupKey = function(e) {
                13 === e.keyCode && t._onEnterKey(e)
            }
            ,
            t._onPopupOpen = function(e) {
                e.value = t.value,
                e.valueText = t._valueText,
                t._hook("onOpen", e)
            }
            ,
            t._onWinFocus = function() {
                t._win.document.activeElement === t._focusElm && (t._preventShow = !0)
            }
            ,
            t._onButtonClick = function(e) {
                var n = e.domEvent
                  , a = e.button;
                "set" === a.name && t.set(),
                t._popup && t._popup._onButtonClick({
                    domEvent: n,
                    button: a
                })
            }
            ,
            t._setInput = function(e) {
                t._el = e && e.nativeElement ? e.nativeElement : e,
                t._isMbsc = !!e && e._mbsc
            }
            ,
            t._setPopup = function(e) {
                t._popup = e
            }
            ,
            t._setWrapper = function(e) {
                t._wrapper = e
            }
            ,
            t
        }
        return r(t, e),
        t.prototype.open = function() {
            this._inst ? this._inst.open() : this.s.isOpen === le && this.setState({
                isOpen: !0
            })
        }
        ,
        t.prototype.close = function() {
            if (this._inst)
                this._inst.close();
            else {
                var e = {
                    value: this.value,
                    valueText: this._valueText
                };
                this.s.isOpen === le && this.setState({
                    isOpen: !1
                }),
                this._hook("onClose", e)
            }
        }
        ,
        t.prototype.set = function() {
            this._valueRep = this._copy(this._tempValueRep),
            this._valueText = this._tempValueText,
            this._value = this.value = this._get(this._valueRep),
            this._change(this.value)
        }
        ,
        t.prototype.position = function() {
            this._inst ? this._inst.position() : this._popup && this._popup.position()
        }
        ,
        t.prototype.isVisible = function() {
            return this._inst ? this._inst.isVisible() : !!this._popup && this._popup.isVisible()
        }
        ,
        t.prototype.getVal = function() {
            return this._get(this._valueRep)
        }
        ,
        t.prototype.setVal = function(e) {
            this.value = e,
            this.setState({
                value: e
            })
        }
        ,
        t.prototype.getTempVal = function() {
            return this._get(this._tempValueRep)
        }
        ,
        t.prototype.setTempVal = function(e) {
            this._tempValueSet = !0,
            this._tempValueRep = this._parse(e),
            this._setOrUpdate(!0)
        }
        ,
        t.prototype._shouldValidate = function(e, t) {
            return !1
        }
        ,
        t.prototype._valueEquals = function(e, t) {
            return e === t
        }
        ,
        t.prototype._render = function(e, t) {
            var n = this
              , a = this.props || {}
              , s = this._respProps || {}
              , i = this._prevS;
            this._touchUi || (e.display = s.display || a.display || "anchored",
            e.showArrow = s.showArrow || a.showArrow || !1),
            "bubble" === e.display && (e.display = "anchored");
            var r = e.isOpen !== le ? e.isOpen : t.isOpen
              , o = e.value !== le ? e.value : t.value === le ? e.defaultValue : t.value;
            if (this._showInput = e.showInput !== le ? e.showInput : "inline" !== e.display && e.element === le,
            (!this._buttons || e.buttons !== i.buttons || e.display !== i.display || e.setText !== i.setText || e.cancelText !== i.cancelText || e.closeText !== i.closeText || e.touchUi !== i.touchUi) && (this._buttons = es(this, e.buttons || ("inline" === e.display || "anchored" === e.display && !this._touchUi ? [] : ["cancel", "set"])),
            this._live = !0,
            this._buttons && this._buttons.length))
                for (var l = 0, c = this._buttons; l < c.length; l++) {
                    var h = c[l];
                    "ok" !== h.name && "set" !== h.name || (this._live = !1)
                }
            if (!this._valueEquals(o, this._value) || this._tempValueRep === le || this._shouldValidate(e, i) || e.defaultSelection !== i.defaultSelection || e.invalid !== i.invalid || e.valid !== i.valid) {
                this._readValue(o),
                this._valueRep = this._copy(this._tempValueRep),
                this._valueText = ve(o) ? "" : this._tempValueText;
                var d = this._get(this._tempValueRep)
                  , u = !this._valueEquals(o, d) && (!this._nullSupport || this._nullSupport && o);
                this._setHeader(),
                clearTimeout(this._handler),
                this._handler = setTimeout((function() {
                    n.value = o,
                    u && n._change(d),
                    n._valueEquals(n._tempValue, d) || n._inst !== le || n._hook("onTempChange", {
                        value: d
                    })
                }
                ))
            }
            if (e.headerText !== i.headerText && this._setHeader(),
            r && !this._isOpen) {
                if (!this._tempValueSet || this._live) {
                    var m = this._get(this._tempValueRep)
                      , _ = this._get(this._valueRep);
                    this._tempValueRep = this._copy(this._valueRep),
                    this._tempValueText = this._format(this._tempValueRep),
                    this._tempValue = m,
                    this._setHeader(),
                    this._valueEquals(m, _) || setTimeout((function() {
                        n._hook("onTempChange", {
                            value: _
                        })
                    }
                    ))
                }
                this._onOpen()
            }
            this._anchorAlign = e.anchorAlign || (this._touchUi ? "center" : "start"),
            this._cssClass = "mbsc-picker " + (e.cssClass || ""),
            this._isOpen = r,
            this._maxWidth = e.maxWidth,
            this._valueTextChange = this._valueTextChange || this._oldValueText !== this._valueText,
            this._oldValueText = this._valueText,
            this._value = o,
            this._shouldInitInput = this._shouldInitInput || e.display !== i.display || e.element !== i.element || e.showOnFocus !== i.showOnFocus || e.showOnClick !== i.showOnClick
        }
        ,
        t.prototype._updated = function() {
            var e = this
              , t = this.s
              , n = this._input;
            this._shouldInitInput && !this._inst && (this._resetEl(this._prevS.display),
            clearTimeout(this._inputTimeout),
            this._inputTimeout = setTimeout((function() {
                e._shouldInitInput = !1;
                var n = t.element || e._el;
                n && (n.getInputElement ? n.getInputElement().then((function(t) {
                    e._el = t,
                    e._initEl()
                }
                )) : n.vInput ? e._el = n.vInput.nativeElement : e._el = n),
                e._initEl()
            }
            ))),
            this._valueTextChange && n && this._write(n),
            this._valueTextChange = !1,
            this._anchor = t.anchor || this._focusElm || t.element || this._el
        }
        ,
        t.prototype._writeValue = function(e, t, n) {
            var a = e.value;
            return e.value = t,
            a !== t
        }
        ,
        t.prototype._destroy = function() {
            this._resetEl(this.s.display)
        }
        ,
        t.prototype._setHeader = function() {
            var e = this.s.headerText;
            this._headerText = e ? e.replace(/\{value\}/i, this._tempValueText || "&nbsp;") : le
        }
        ,
        t.prototype._setOrUpdate = function(e) {
            var t = this._get(this._tempValueRep);
            this._tempValue = t,
            this._tempValueText = this._format(this._tempValueRep),
            this._setHeader(),
            e || this._hook("onTempChange", {
                value: t
            }),
            this._live ? this.set() : this.forceUpdate()
        }
        ,
        t.prototype._copy = function(e) {
            return e
        }
        ,
        t.prototype._format = function(e) {
            return e
        }
        ,
        t.prototype._get = function(e) {
            return e
        }
        ,
        t.prototype._parse = function(e) {
            return e
        }
        ,
        t.prototype._validate = function() {}
        ,
        t.prototype._onClosed = function() {}
        ,
        t.prototype._onOpen = function() {}
        ,
        t.prototype._onParse = function() {}
        ,
        t.prototype._onEnterKey = function(e) {
            this.set(),
            this.close()
        }
        ,
        t.prototype._change = function(e) {
            this.s.value === le && this.setState({
                value: e
            }),
            this._hook("onChange", {
                value: e,
                valueText: this._tempValueText
            })
        }
        ,
        t.prototype._readValue = function(e) {
            this._tempValueRep = this._parse(e),
            this._onParse(),
            this._validate(),
            this._tempValueText = this._format(this._tempValueRep)
        }
        ,
        t.prototype._initEl = function() {
            var e = this.s
              , t = this._el;
            if (this._wrapper && "inline" === e.display && (this._observer = Ka(this._wrapper, this._onWrapperResize, this._zone)),
            t && 1 === t.nodeType) {
                if (this._win = Yt(t),
                Ut(t, "input,select")) {
                    var n = this._input = t;
                    this._readOnly = n.readOnly,
                    this._write(n)
                }
                "inline" !== e.display && (this._isMbsc || (this._unlisten = Ta(t, {
                    click: !0
                })),
                (e.showOnClick || e.showOnFocus) && this._input && (this._input.readOnly = !0),
                e.showOnClick && (Nt(t, qn, this._onInputClick),
                Nt(t, na, this._onInputMouseDown),
                Nt(t, ta, this._onInputKey)),
                e.showOnFocus && (Nt(this._win, $n, this._onWinFocus),
                Nt(t, $n, this._onInputFocus)),
                Nt(t, Kn, this._onInputChange))
            }
        }
        ,
        t.prototype._resetEl = function(e) {
            if ("inline" !== e) {
                this._input && (this._input.readOnly = this._readOnly),
                this._unlisten && this._unlisten();
                var t = this._el;
                t && (Lt(t, qn, this._onInputClick),
                Lt(t, na, this._onInputMouseDown),
                Lt(t, ta, this._onInputKey),
                Lt(t, $n, this._onInputFocus),
                Lt(t, Kn, this._onInputChange),
                Lt(this._win, $n, this._onWinFocus))
            }
            this._observer && (this._observer.detach(),
            this._observer = null)
        }
        ,
        t.prototype._write = function(e) {
            var t = this._value;
            if (this._writeValue(e, this._valueText || "", t)) {
                this._preventChange = !0,
                jt(e, Kn);
                var n = e.__mbscFormInst;
                n && n.setOptions({
                    pickerMap: this.s.valueMap,
                    pickerValue: t
                })
            }
        }
        ,
        t.defaults = {
            cancelText: "Cancel",
            closeText: "Close",
            okText: "Ok",
            setText: "Set"
        },
        t
    }(Bn)
      , wi = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._instanceService = new Si,
            t._setCal = function(e) {
                t._calendarView = e,
                t._instanceService.instance = t
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._template = function(e) {
            var t = En(Ci, {
                ref: this._setCal,
                activeDate: e.active,
                cssClass: this._className + " mbsc-calendar-" + e.display,
                calendarScroll: e.calendarScroll,
                calendarType: e.calendarType,
                colors: e.colors,
                context: e.context,
                downIcon: e.downIcon,
                hoverEnd: e.hoverEnd,
                hoverStart: e.hoverStart,
                invalid: e.invalid,
                instanceService: this._instanceService,
                isPicker: !0,
                labels: e.labels,
                marked: e.marked,
                max: e.max,
                min: e.min,
                mousewheel: e.mousewheel,
                nextIconH: e.nextIconH,
                nextIconV: e.nextIconV,
                noOuterChange: e.selectRange,
                onActiveChange: e.onActiveChange,
                onCellHoverIn: e.onCellHoverIn,
                onCellHoverOut: e.onCellHoverOut,
                onDayClick: this._onDayClick,
                onDayHoverIn: e.onDayHoverIn,
                onDayHoverOut: e.onDayHoverOut,
                onLabelClick: e.onLabelClick,
                onPageChange: e.onPageChange,
                onPageLoaded: e.onPageLoaded,
                onPageLoading: e.onPageLoading,
                onTodayClick: this._onTodayClick,
                pages: e.pages,
                prevIconH: e.prevIconH,
                prevIconV: e.prevIconV,
                renderHeader: e.renderCalendarHeader,
                rangeEnd: e.rangeEnd,
                rangeStart: e.rangeStart,
                rtl: e.rtl,
                selectedDates: this._tempValueRep,
                selectView: e.selectView,
                showCalendar: !0,
                showControls: e.showControls,
                showOuterDays: e.showOuterDays,
                showToday: !1,
                showWeekNumbers: e.showWeekNumbers,
                theme: e.theme,
                themeVariant: e.themeVariant,
                upIcon: e.upIcon,
                valid: e.valid,
                weeks: e.weeks,
                width: e.width,
                getDate: e.getDate,
                getDay: e.getDay,
                getMaxDayOfMonth: e.getMaxDayOfMonth,
                getMonth: e.getMonth,
                getWeekNumber: e.getWeekNumber,
                getYear: e.getYear,
                dateFormat: e.dateFormat,
                dayNames: e.dayNames,
                dayNamesMin: e.dayNamesMin,
                dayNamesShort: e.dayNamesShort,
                eventText: e.eventText,
                eventsText: e.eventsText,
                firstDay: e.firstDay,
                monthNames: e.monthNames,
                monthNamesShort: e.monthNamesShort,
                moreEventsPluralText: e.moreEventsPluralText,
                moreEventsText: e.moreEventsText,
                todayText: e.todayText,
                yearSuffix: e.yearSuffix
            })
              , n = {
                instance: this
            };
            return En(ai.Provider, {
                children: t,
                value: n
            })
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._onDayClick = function(e) {
                var n = t.s
                  , a = e.date
                  , s = +a;
                if (n.selectMultiple) {
                    var i = t._tempValueRep;
                    i[s] ? delete i[s] : (n.selectMax === le || Object.keys(i).length < n.selectMax) && (i[s] = a),
                    t._tempValueRep = o({}, i)
                } else
                    n.selectRange || (t._tempValueRep = {}),
                    t._tempValueRep[s] = a;
                t._hook("onCellClick", e),
                t._setOrUpdate()
            }
            ,
            t._onTodayClick = function() {
                var e = new Date
                  , n = +e;
                t.s.selectRange || t.s.selectMultiple || (t._tempValueRep = {},
                t._tempValueRep[n] = e,
                t._setOrUpdate())
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._valueEquals = function(e, t) {
            return Es(e, t, this.s)
        }
        ,
        t.prototype._copy = function(e) {
            return o({}, e)
        }
        ,
        t.prototype._format = function(e) {
            var t = this.s
              , n = [];
            for (var a in e)
                e[a] !== le && null !== e[a] && n.push(ws(t.dateFormat, new Date(+e[a]), t));
            return t.selectMultiple || t.selectRange ? n.join(", ") : n[0]
        }
        ,
        t.prototype._parse = function(e) {
            var t = this.s
              , n = t.selectRange
              , a = {}
              , s = [];
            pe(e) ? s = e.split(",") : me(e) ? s = e : e && !me(e) && (s = [e]);
            for (var i = 0, r = s; i < r.length; i++) {
                var o = r[i];
                if (null !== o) {
                    var l = Ss(o, t, t.dateFormat);
                    a[n ? +l : +vs(l)] = l
                }
            }
            return a
        }
        ,
        t.prototype._get = function(e) {
            var t = this.s.selectRange;
            if (this.s.selectMultiple || t) {
                for (var n = [], a = 0, s = Object.keys(e); a < s.length; a++) {
                    var i = s[a];
                    n.push(new Date(+e[i]))
                }
                return n
            }
            var r = Object.keys(e || {});
            return r.length ? new Date(e[r[0]]) : null
        }
        ,
        t.defaults = o({}, Js, {
            calendarScroll: "horizontal",
            calendarType: "month",
            selectedText: "{count} selected",
            showControls: !0,
            showOnClick: !0,
            weeks: 1
        }),
        t._name = "Calendar",
        t
    }(ki))
      , Mi = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._onIndexChange = function(e) {
                e.wheel = t.s.wheel,
                t._hook("onIndexChange", e)
            }
            ,
            t._onItemClick = function(e) {
                t._hook("onIndexChange", {
                    click: !0,
                    index: e.index,
                    wheel: t.s.wheel,
                    selected: e.selected
                })
            }
            ,
            t._onKeyDown = function(e) {
                var n = 0;
                e.keyCode === Ua ? n = -1 : e.keyCode === ja && (n = 1);
                var a = t.s
                  , s = a.selectedIndex + n;
                n && (e.preventDefault(),
                s < a.minIndex || s > a.maxIndex || (t._shouldFocus = !0,
                t._hook("onIndexChange", {
                    index: s,
                    wheel: a.wheel
                })))
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._getText = function(e) {
            return e !== le ? e.display !== le ? e.display : e : le
        }
        ,
        t.prototype._getValue = function(e) {
            return e ? e.value !== le ? e.value : e.display !== le ? e.display : e : e
        }
        ,
        t.prototype._isSelected = function(e) {
            var t = this.s
              , n = t.selectedValues
              , a = this._getValue(e.data);
            return t.multiple ? !(!n || !n.indexOf) && n.indexOf(a) >= 0 : t.selectOnScroll ? e.key === t.selectedIndex : a !== le && a === n
        }
        ,
        t.prototype._isDisabled = function(e) {
            var t = this.s.disabled
              , n = e && e.disabled
              , a = this._getValue(e);
            return !!(n || t && t.get(a))
        }
        ,
        t.prototype._render = function(e) {
            var t = e.rows;
            this._items = e.wheel.getItem || e.wheel.data || [];
            var n = e.itemHeight
              , a = 2 * Ce((n - .03 * (n * t / 2 + 3)) / 2);
            this._batchSize3d = Ce(1.8 * t),
            this._angle3d = 360 / (2 * this._batchSize3d),
            this._style = {
                height: 2 * Ce(t * n * (e.scroll3d ? 1.1 : 1) / 2)
            },
            this._itemNr = e.wheel.spaceAround ? 1 : t,
            this._innerStyle = {
                height: (e.scroll3d ? a : e.wheel.spaceAround ? n : n * t) + "px"
            },
            this._wheelStyle = e.wheelWidth ? {
                width: e.wheelWidth[e.key] || e.wheelWidth
            } : {
                maxWidth: me(e.maxWheelWidth) ? e.maxWheelWidth[e.key] : e.maxWheelWidth,
                minWidth: me(e.minWheelWidth) ? e.minWheelWidth[e.key] : e.minWheelWidth
            },
            e.scroll3d && (this._innerStyle[Mt + "transform"] = "translateY(-50%) translateZ(" + (n * t / 2 + 3) + "px")
        }
        ,
        t.prototype._updated = function() {
            if (this._shouldFocus) {
                var e = this._el.querySelector('.mbsc-scroller-wheel-item[tabindex="0"]');
                e && e.focus(),
                this._shouldFocus = !1
            }
        }
        ,
        t
    }(Bn)
      , Ei = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            return En("div", {
                ref: this._setEl,
                tabIndex: (e.multiple || e.selected) && e.text && !e.is3d ? 0 : -1,
                className: this._cssClass,
                role: "option",
                style: this._style,
                onClick: this._onClick
            }, En("div", {
                dangerouslySetInnerHTML: this.textParam
            }), e.checkmark && En("span", {
                className: this._checkmarkClass
            }), e.text)
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._onClick = function() {
                t.s.text !== le && t._hook("onClick", {
                    index: t.s.index,
                    selected: t.s.selected,
                    disabled: t.s.disabled
                })
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._mounted = function() {
            var e = this;
            this._unlisten = Ta(this._el, {
                click: !0,
                keepFocus: !1,
                onBlur: function() {
                    e.setState({
                        hasFocus: !1
                    })
                },
                onFocus: function() {
                    e.setState({
                        hasFocus: !0
                    })
                },
                onHoverIn: function() {
                    e.s.text !== le && e.setState({
                        hasHover: !0
                    })
                },
                onHoverOut: function() {
                    e.s.text !== le && e.setState({
                        hasHover: !1
                    })
                },
                onPress: function() {
                    e.s.text !== le && e.setState({
                        isActive: !0
                    })
                },
                onRelease: function() {
                    e.s.text !== le && e.setState({
                        isActive: !1
                    })
                }
            })
        }
        ,
        t.prototype._destroy = function() {
            this._unlisten()
        }
        ,
        t.prototype._render = function(e, t) {
            var n = e.height;
            this._cssClass = "mbsc-scroller-wheel-item" + this._theme + this._rtl + (e.checkmark ? " mbsc-wheel-item-checkmark" : "") + (e.is3d ? " mbsc-scroller-wheel-item-3d" : "") + (e.scroll3d && !e.is3d ? " mbsc-scroller-wheel-item-2d" : "") + (e.selected && !e.is3d ? " mbsc-selected" : "") + (e.selected && e.is3d ? " mbsc-selected-3d" : "") + (e.disabled ? " mbsc-disabled" : "") + (e.multiple ? " mbsc-wheel-item-multi" : "") + (t.hasHover ? " mbsc-hover" : "") + (t.hasFocus ? " mbsc-focus" : "") + (t.isActive ? " mbsc-active" : ""),
            this._style = {
                height: n,
                lineHeight: n + "px"
            },
            this._checkmarkClass = this._theme + this._rtl + " mbsc-wheel-checkmark" + (e.selected ? " mbsc-selected" : ""),
            e.is3d && (this._transform = "rotateX(" + (e.offset - e.index) * e.angle3d % 360 + "deg) translateZ(" + n * e.rows / 2 + "px)",
            this._style[Mt + "transform"] = this._transform)
        }
        ,
        t
    }(Bn))
      , Ni = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t.renderer = function(e, n, a) {
                var s = t.s;
                return e !== le ? En(Ei, {
                    angle3d: t._angle3d,
                    disabled: t._isDisabled(e.data),
                    height: s.itemHeight,
                    index: e.key,
                    is3d: a,
                    key: e.key,
                    multiple: s.multiple,
                    onClick: t._onItemClick,
                    offset: n,
                    checkmark: s.wheel.checkmark,
                    rows: s.rows,
                    rtl: s.rtl,
                    scroll3d: s.scroll3d,
                    selected: t._isSelected(e),
                    text: t._getText(e.data),
                    theme: s.theme
                }) : null
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._template = function(e, t) {
            return En("div", {
                className: "mbsc-scroller-wheel-wrapper mbsc-scroller-wheel-wrapper-" + e.wheel._key + " " + (e.wheel.cssClass || "") + this._theme + this._rtl,
                onKeyDown: this._onKeyDown,
                ref: this._setEl,
                style: this._wheelStyle
            }, En(_i, {
                batchSize3d: this._batchSize3d,
                className: "mbsc-scroller-wheel" + (e.scroll3d ? " mbsc-scroller-wheel-3d" : "") + this._theme,
                innerClass: "mbsc-scroller-wheel-cont mbsc-scroller-wheel-cont-" + e.display + (e.scroll3d ? " mbsc-scroller-wheel-cont-3d" : "") + (e.multiple ? " mbsc-scroller-wheel-multi" : " mbsc-scroller-wheel-single") + this._theme,
                innerStyles: this._innerStyle,
                items: this._items,
                itemSize: e.itemHeight,
                itemRenderer: this.renderer,
                itemNr: this._itemNr,
                margin: !0,
                maxIndex: e.maxIndex,
                minIndex: e.minIndex,
                onIndexChange: this._onIndexChange,
                offset: e.wheel._offset,
                rtl: e.rtl,
                scroll3d: e.scroll3d,
                scrollBar: !this._touchUi,
                selectedIndex: e.selectedIndex,
                snap: !0,
                spaceAround: e.wheel.spaceAround,
                styles: this._style,
                visibleSize: e.rows
            }))
        }
        ,
        t
    }(Mi);
    function Li(e, t, n, a) {
        var s, i = e.min === le ? -1 / 0 : e.min, r = e.max === le ? 1 / 0 : e.max, o = Hi(e, t), l = Oi(e, o), c = l, h = l, d = 0, u = 0;
        if (n && n.get(l)) {
            for (s = 0; o - d >= i && n.get(c) && s < 100; )
                s++,
                c = Oi(e, o - ++d);
            for (s = 0; o + u < r && n.get(h) && s < 100; )
                s++,
                h = Oi(e, o + ++u);
            l = (u < d && u && -1 !== a || !d || o - d < 0 || 1 === a) && !n.get(h) ? h : c
        }
        return l
    }
    function Ii(e) {
        return e !== le ? e.value !== le ? e.value : e.display !== le ? e.display : e : e
    }
    function Hi(e, t) {
        var n = e.multiple ? t && t.length && t[0] || le : t;
        return (e.getIndex ? +e.getIndex(t) : e._map.get(n)) || 0
    }
    function Oi(e, t) {
        return Ii(function(e, t) {
            if (e.getItem)
                return e.getItem(t);
            var n = e.data || []
              , a = n.length
              , s = t % a;
            return e._circular ? n[s >= 0 ? s : s + a] : n[ue(t, 0, a - 1)]
        }(e, t))
    }
    var Pi = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            var t = this
              , n = En("div", {
                className: "mbsc-scroller mbsc-scroller-" + this._displayStyle + this._theme + this._rtl + (this._touchUi ? " mbsc-scroller-touch" : " mbsc-scroller-pointer") + ("inline" === e.display ? " mbsc-font " : " ") + this._className
            }, this._wheels.map((function(n, a) {
                return En("div", {
                    key: a,
                    className: "mbsc-scroller-wheel-group-cont" + (e.scroll3d ? " mbsc-scroller-wheel-group-cont-3d" : "") + (1 === n.length ? " mbsc-wheel-group-cont-single" : "") + t._theme
                }, !t._isAnyMulti && En("div", {
                    className: "mbsc-scroller-wheel-line mbsc-scroller-wheel-line-" + t._displayStyle + (1 === n.length ? " mbsc-scroller-wheel-line-single" : "") + t._theme,
                    style: t._lineStyle
                }), En("div", {
                    className: "mbsc-scroller-wheel-group" + (e.scroll3d ? " mbsc-scroller-wheel-group-3d" : "") + t._theme
                }, En("div", {
                    className: "mbsc-scroller-wheel-overlay mbsc-scroller-wheel-overlay-" + t._displayStyle + t._theme,
                    style: t._overlayStyle
                }), n.map((function(n, a) {
                    return En(Ni, {
                        disabled: t._disabled && t._disabled[n._key],
                        display: t._displayStyle,
                        key: a,
                        itemHeight: e.itemHeight,
                        onIndexChange: t._onWheelIndexChange,
                        maxIndex: n.max,
                        maxWheelWidth: e.maxWheelWidth,
                        minIndex: n.min,
                        minWheelWidth: e.minWheelWidth,
                        multiple: n.multiple,
                        rows: t._rows,
                        scroll3d: t._scroll3d,
                        selectedIndex: t._indexes[n._key],
                        selectedValues: t._tempValueRep[n._key],
                        selectOnScroll: e.selectOnScroll,
                        theme: e.theme,
                        touchUi: e.touchUi,
                        rtl: e.rtl,
                        wheel: n,
                        wheelWidth: e.wheelWidth
                    })
                }
                ))))
            }
            )));
            return as(this, e, n)
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._wheels = [],
            t._batches = [],
            t._lastIndexes = [],
            t._onWheelIndexChange = function(e) {
                var n = t.s
                  , a = e.wheel
                  , s = a._key
                  , i = a.multiple
                  , r = Oi(a, e.index)
                  , o = t._disabled && t._disabled[s] && t._disabled[s].get(r)
                  , l = []
                  , c = n.selectOnScroll
                  , h = c || !e.click;
                h && (t._lastIndexes[s] = t._indexes[s] = e.index);
                var d = t._get(t._tempValueRep);
                if (i || t._tempValueRep[s] !== r) {
                    if (i) {
                        if (e.click) {
                            var u = (t._tempValueRep[s] || []).slice();
                            !1 === e.selected ? u.push(r) : !0 === e.selected && u.splice(u.indexOf(r), 1),
                            t._tempValueRep[s] = u
                        }
                    } else
                        (c || e.click && !o) && (t._tempValueRep[s] = r);
                    h && t._indexes.forEach((function(e, n) {
                        var a = t._wheelMap[n]
                          , s = a.data ? a.data.length : 0;
                        t._batches[n] = s ? ke(e / s) : 0,
                        l[n] = s
                    }
                    )),
                    t._validate(s, e.diff > 0 ? 1 : -1),
                    !i && c && t._tempValueRep.forEach((function(e, n) {
                        var a = t._wheelMap[n]
                          , s = a.data ? a.data.length : 0
                          , i = t._indexes[n]
                          , r = Hi(a, e) + t._batches[n] * s;
                        t._lastIndexes[n] = t._indexes[n] = r,
                        a._offset = s !== l[n] ? r - i : 0
                    }
                    ));
                    var m = t._get(t._tempValueRep)
                      , _ = !t._valueEquals(d, m);
                    (!i && c || _) && t._setOrUpdate(),
                    !i && c || _ || t.forceUpdate()
                } else
                    e.click && t._live && !t._valueEquals(t.value, d) ? t.set() : t.forceUpdate();
                t._live && !i && !o && e.click && t.close()
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._initWheels = function() {
            var e = this
              , t = 0
              , n = this.s.wheels || [];
            this._isAnyMulti = !1,
            this._wheelMap = [],
            n.forEach((function(n) {
                n.forEach((function(n) {
                    e._initWheel(n, t),
                    e._wheelMap[t] = n,
                    t++
                }
                ))
            }
            )),
            this._wheels = n
        }
        ,
        t.prototype._shouldValidate = function(e, t) {
            return e.shouldValidate && e.shouldValidate(e, t) || e.wheels !== t.wheels
        }
        ,
        t.prototype._valueEquals = function(e, t) {
            return this.s.valueEquality ? this.s.valueEquality(e, t) : e === t
        }
        ,
        t.prototype._render = function(t, n) {
            var a = this.props || {}
              , s = this._respProps || {}
              , i = this._prevS
              , r = !!this._touchUi && t.circular
              , o = this._touchUi ? t.rows : s.rows || a.rows || 7;
            if (this._displayStyle = t.displayStyle || t.display,
            this._scroll3d = t.scroll3d && this._touchUi && Et,
            (t.itemHeight !== i.itemHeight || o !== this._rows) && (this._rows = o,
            this._lineStyle = {
                height: t.itemHeight + "px"
            },
            this._scroll3d)) {
                var l = "translateZ(" + (t.itemHeight * o / 2 + 3) + "px";
                this._overlayStyle = {},
                this._overlayStyle[Mt + "transform"] = l,
                this._lineStyle[Mt + "transform"] = "translateY(-50%) " + l
            }
            t.wheels === i.wheels && r === this._circular || (this._batches = [],
            this._shouldSetIndex = !0,
            this._circular = r,
            this._initWheels()),
            e.prototype._render.call(this, t, n),
            this._shouldSetIndex && (this._setIndexes(),
            this._shouldSetIndex = this._indexFromValue = !1)
        }
        ,
        t.prototype._writeValue = function(t, n, a) {
            return this.s.writeValue ? this.s.writeValue(t, n, a) : e.prototype._writeValue.call(this, t, n, a)
        }
        ,
        t.prototype._copy = function(e) {
            return e.slice(0)
        }
        ,
        t.prototype._format = function(e) {
            return this.s.formatValue ? this.s.formatValue(e) : e.join(" ")
        }
        ,
        t.prototype._get = function(e) {
            return this.s.getValue ? this.s.getValue(e) : e
        }
        ,
        t.prototype._parse = function(e) {
            if (this.s.parseValue)
                return this.s.parseValue(e);
            var t = []
              , n = []
              , a = 0;
            return null !== e && e !== le && (n = (e + "").split(" ")),
            this._wheels.forEach((function(e) {
                e.forEach((function(e) {
                    for (var s = e.data || [], i = s.length, r = Ii(s[0]), o = 0; r != n[a] && o < i; )
                        r = Ii(s[o]),
                        o++;
                    t.push(r),
                    a++
                }
                ))
            }
            )),
            t
        }
        ,
        t.prototype._validate = function(e, t) {
            var n = this;
            if (this.s.validate) {
                var a = this.s.validate.call(this._el, {
                    direction: t,
                    index: e,
                    values: this._tempValueRep.slice(0),
                    wheels: this._wheelMap
                });
                this._disabled = a.disabled,
                a.init && this._initWheels(),
                a.valid ? this._tempValueRep = a.valid.slice(0) : this._wheelMap.forEach((function(e, a) {
                    n._tempValueRep[a] = Li(e, n._tempValueRep[a], n._disabled && n._disabled[a], t)
                }
                ))
            }
        }
        ,
        t.prototype._onOpen = function() {
            this._batches = [],
            this._shouldSetIndex = !0,
            this._indexFromValue = !0
        }
        ,
        t.prototype._onParse = function() {
            this._shouldSetIndex = !0
        }
        ,
        t.prototype._initWheel = function(e, t) {
            var n = this._circular;
            e._key = t,
            e._map = new Map,
            e._circular = n === le ? e.circular === le ? e.data && e.data.length > this._rows : e.circular : me(n) ? n[t] : n,
            e.data && (e.min = e._circular ? le : 0,
            e.max = e._circular ? le : e.data.length - 1,
            e.data.forEach((function(t, n) {
                e._map.set(Ii(t), n)
            }
            ))),
            e.multiple && (this._isAnyMulti = !0)
        }
        ,
        t.prototype._setIndexes = function() {
            var e = this
              , t = this._indexes || [];
            this._indexes = [],
            this._tempValueRep.forEach((function(n, a) {
                var s = e._wheelMap[a]
                  , i = s.data ? s.data.length : 0
                  , r = Hi(s, n);
                if (!s.spaceAround || s.multiple) {
                    var o = r;
                    e._indexFromValue || (o = t[a]) !== le && (o = function(e, t) {
                        if (e.getItem && e.getIndex)
                            return e.getIndex(Ii(e.getItem(t)));
                        var n = (e.data || []).length
                          , a = t % n;
                        return a >= 0 ? a : a + n
                    }(s, o) + (e._batches[a] || 0) * i),
                    o !== le && s.data ? (o = ue(o, 0, Math.max(s.data.length - e._rows, 0)),
                    e._indexes[a] = o) : e._indexes[a] = e._lastIndexes[a] || 0
                } else
                    e._indexes[a] = r + (e._batches[a] || 0) * i
            }
            ))
        }
        ,
        t.defaults = {
            itemHeight: 40,
            rows: 5,
            selectOnScroll: !0,
            showOnClick: !0
        },
        t._name = "Scroller",
        t
    }(ki))
      , Yi = {
        ios: 50,
        material: 46,
        windows: 50
    };
    function Vi(e, t) {
        var n = new Date(e);
        return t ? ke(+n / 864e5) : n.getMonth() + 12 * (n.getFullYear() - 1970)
    }
    function Fi(e) {
        return e.getFullYear() + "-" + Te(e.getMonth() + 1) + "-" + Te(e.getDate())
    }
    function zi(e) {
        return e.getMilliseconds()
    }
    function Ri(e) {
        return e.getHours() > 11 ? 1 : 0
    }
    var Ai = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._preset = "datetime",
            t
        }
        return r(t, e),
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._setScroller = function(e) {
                t._scroller = e
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._template = function(e, t) {
            return En(Pi, o({}, e, {
                formatValue: this._formatDate,
                getValue: this._getDate,
                minWheelWidth: this._minWheelWidth,
                parseValue: this._parseDate,
                ref: this._setScroller,
                shouldValidate: this._shouldValidate,
                validate: this._validate,
                value: this._value,
                valueEquality: this._valueEquals,
                wheels: this._wheels,
                onChange: this._onChange
            }), e.children)
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._preset = "date",
            t._innerValues = {},
            t._onChange = function(e) {
                t.s.value === le && t.setState({
                    value: e.value
                }),
                t._hook("onChange", e)
            }
            ,
            t._parseDate = function(e) {
                var n = t.s;
                return e || (t._innerValues = {}),
                t._getArray(Ss(e || n.defaultSelection || new Date, n, t._format), !!e)
            }
            ,
            t._formatDate = function(e) {
                var n = t._getDate(e);
                return n ? ws(t._format, n, t.s) : ""
            }
            ,
            t._getDate = function(e) {
                var n, a, s = t.s, i = t._getArrayPart, r = t._wheelOrder, o = new Date((new Date).setHours(0, 0, 0, 0));
                if (null === e || e === le)
                    return null;
                if (r.dd !== le) {
                    var l = e[r.dd].split("-");
                    n = new Date(l[0],l[1] - 1,l[2])
                }
                r.tt !== le && (a = n || o,
                a = new Date(a.getTime() + e[r.tt] % 86400 * 1e3));
                var c = i(e, "y", n, o)
                  , h = i(e, "m", n, o)
                  , d = Math.min(i(e, "d", n, o), s.getMaxDayOfMonth(c, h))
                  , u = i(e, "h", a, o);
                return s.getDate(c, h, d, t._hasAmPm && i(e, "a", a, o) ? u + 12 : u, i(e, "i", a, o), i(e, "s", a, o), i(e, "u", a, o))
            }
            ,
            t._validate = function(e) {
                var n = e.direction
                  , a = e.index
                  , s = e.values
                  , i = e.wheels
                  , r = []
                  , o = t.s
                  , l = o.stepHour
                  , c = o.stepMinute
                  , h = o.stepSecond
                  , d = o.mode || t._preset
                  , u = t._wheelOrder
                  , m = t._getDatePart
                  , _ = t._max
                  , p = t._min
                  , v = t._getDate(s)
                  , f = o.getYear(v)
                  , g = o.getMonth(v)
                  , y = o.getDate(f, g - 1, 1)
                  , b = o.getDate(f, g + 2, 1);
                a !== u.y && a !== u.m && a !== u.d && a !== le || (t._valids = As(o.valid, y, b, o, !0),
                t._invalids = As(o.invalid, y, b, o, !0));
                var x = t._valids
                  , D = t._invalids
                  , T = xi(v, o, p ? +p : -1 / 0, _ ? +_ : 1 / 0, D, x, n)
                  , C = t._getArray(T)
                  , S = t._wheels && t._wheels[0][u.d]
                  , k = m.y(T)
                  , w = m.m(T)
                  , M = o.getMaxDayOfMonth(k, w)
                  , E = {
                    y: p ? p.getFullYear() : -1 / 0,
                    m: 0,
                    d: 1,
                    h: 0,
                    i: 0,
                    s: 0,
                    a: 0,
                    tt: 0
                }
                  , N = {
                    y: _ ? _.getFullYear() : 1 / 0,
                    m: 11,
                    d: 31,
                    h: Se(t._hasAmPm ? 11 : 23, l),
                    i: Se(59, c),
                    s: Se(59, h),
                    a: 1,
                    tt: 86400
                }
                  , L = {
                    y: 1,
                    m: 1,
                    d: 1,
                    h: l,
                    i: c,
                    s: h,
                    a: 1,
                    tt: t._timeStep
                }
                  , I = !1
                  , H = !0
                  , O = !0;
                ["dd", "y", "m", "d", "tt", "a", "h", "i", "s"].forEach((function(e) {
                    var t = E[e]
                      , n = N[e]
                      , a = m[e](T)
                      , s = u[e];
                    if (H && p && (t = m[e](p)),
                    O && _ && (n = m[e](_)),
                    a < t && (a = t),
                    a > n && (a = n),
                    "dd" !== e && "tt" !== e && (H && (H = a === t),
                    O && (O = a === n)),
                    s !== le) {
                        if (r[s] = new Map,
                        "y" !== e && "dd" !== e)
                            for (var i = E[e]; i <= N[e]; i += L[e])
                                (i < t || i > n) && r[s].set(i, !0);
                        if ("d" === e && D)
                            for (var l in D)
                                if (!x || !x[l]) {
                                    var c = Ss(l)
                                      , h = o.getYear(c)
                                      , d = o.getMonth(c);
                                    h === k && d === w && bi(c, D, x) && r[s].set(o.getDay(c), !0)
                                }
                    }
                }
                ));
                var P = D && D[ps(T)];
                if (/time/i.test(d) && P)
                    for (var Y = function(e) {
                        if (e.start && e.end) {
                            var t = e.start
                              , a = e.end
                              , s = ["a", "h", "i", "s", "tt"]
                              , o = !0
                              , l = !0;
                            s.forEach((function(e, c) {
                                var h = u[e];
                                if (h !== le) {
                                    var d = m[e](t)
                                      , _ = m[e](a)
                                      , p = m[e](T)
                                      , v = 0
                                      , f = 0;
                                    if ("tt" !== e) {
                                        o || (d = 0),
                                        l || (_ = N[e]);
                                        for (var g = c + 1; g < 4; g++) {
                                            var y = s[g];
                                            u[y] !== le && (m[y](t) > 0 && o && (v = L[e]),
                                            m[y](a) < N[y] && l && (f = L[e]))
                                        }
                                    }
                                    if (o || l) {
                                        for (g = d + v; g <= _ - f; g += L[e])
                                            r[h].set(g, !0);
                                        p = Li(i[h], p, r[h], n),
                                        C[h] = p
                                    }
                                    p !== d && (o = !1),
                                    p !== _ && (l = !1)
                                }
                            }
                            ))
                        }
                    }, V = 0, F = P; V < F.length; V++) {
                        Y(F[V])
                    }
                var z = t._dateDisplay;
                if (S && (S.data.length !== M || /DDD/.test(z))) {
                    for (var R = [], A = 1; A <= M; A++) {
                        var W = o.getDate(k, w, A).getDay()
                          , U = z.replace(/[my|]/gi, "").replace(/DDDD/, o.dayNames[W]).replace(/DDD/, o.dayNamesShort[W]).replace(/DD/, Te(A) + o.daySuffix).replace(/D/, A + o.daySuffix);
                        R.push({
                            display: U,
                            value: A
                        })
                    }
                    S.data = R,
                    I = !0
                }
                return {
                    disabled: r,
                    init: I,
                    valid: C
                }
            }
            ,
            t._shouldValidate = function(e, t) {
                return !!(e.min && +e.min != +t.min || e.max && +e.max != +t.max)
            }
            ,
            t._getYearValue = function(e) {
                return {
                    display: (/yy/i.test(t._dateDisplay) ? e : (e + "").substr(2, 2)) + t.s.yearSuffix,
                    value: e
                }
            }
            ,
            t._getYearIndex = function(e) {
                return +e
            }
            ,
            t._getDateIndex = function(e) {
                return Vi(e, t._hasDay)
            }
            ,
            t._getDateItem = function(e) {
                var n = t.s
                  , a = t._hasDay
                  , s = new Date((new Date).setHours(0, 0, 0, 0))
                  , i = a ? new Date(864e5 * e) : new Date(1970,e,1);
                return a && (i = new Date(i.getUTCFullYear(),i.getUTCMonth(),i.getUTCDate())),
                {
                    disabled: a && bi(i, t._invalids, t._valids),
                    display: s.getTime() === i.getTime() ? n.todayText : ws(t._dateTemplate, i, n),
                    value: Fi(i)
                }
            }
            ,
            t._getArrayPart = function(e, n, a, s) {
                var i;
                return t._wheelOrder[n] === le || (i = +e[t._wheelOrder[n]],
                isNaN(i)) ? a ? t._getDatePart[n](a) : t._innerValues[n] !== le ? t._innerValues[n] : t._getDatePart[n](s) : i
            }
            ,
            t._getHours = function(e) {
                var n = e.getHours();
                return Se(n = t._hasAmPm && n >= 12 ? n - 12 : n, t.s.stepHour)
            }
            ,
            t._getMinutes = function(e) {
                return Se(e.getMinutes(), t.s.stepMinute)
            }
            ,
            t._getSeconds = function(e) {
                return Se(e.getSeconds(), t.s.stepSecond)
            }
            ,
            t._getFullTime = function(e) {
                return Se(Ce((e.getTime() - new Date(e).setHours(0, 0, 0, 0)) / 1e3), t._timeStep || 1)
            }
            ,
            t
        }
        return r(t, e),
        t.prototype.getVal = function() {
            return this._value
        }
        ,
        t.prototype.setVal = function(e) {
            this._value = e,
            this.setState({
                value: e
            })
        }
        ,
        t.prototype.position = function() {
            this._scroller && this._scroller.position()
        }
        ,
        t.prototype.isVisible = function() {
            return this._scroller && this._scroller.isVisible()
        }
        ,
        t.prototype._valueEquals = function(e, t) {
            return Es(e, t, this.s)
        }
        ,
        t.prototype._render = function(e, t) {
            var n = !1
              , a = this._prevS
              , s = e.dateFormat
              , i = e.timeFormat
              , r = e.mode || this._preset
              , o = "datetime" === r ? s + e.separator + i : "time" === r ? i : s;
            this._value = e.value === le ? t.value : e.value,
            this._minWheelWidth = e.minWheelWidth || ("datetime" === r ? Yi[e.baseTheme || e.theme] : le),
            this._dateWheels = e.dateWheels || ("datetime" === r ? e.dateWheelFormat : s),
            this._dateDisplay = e.dateWheels || e.dateDisplay,
            this._timeWheels = e.timeWheels || i,
            this._timeDisplay = this._timeWheels,
            this._format = o,
            this._hasAmPm = /h/.test(this._timeDisplay),
            this._getDatePart = {
                y: e.getYear,
                m: e.getMonth,
                d: e.getDay,
                h: this._getHours,
                i: this._getMinutes,
                s: this._getSeconds,
                u: zi,
                a: Ri,
                dd: Fi,
                tt: this._getFullTime
            },
            +Ss(a.min) != +Ss(e.min) && (n = !0,
            this._min = ve(e.min) ? le : Ss(e.min, e, o)),
            +Ss(a.max) != +Ss(e.max) && (n = !0,
            this._max = ve(e.max) ? le : Ss(e.max, e, o)),
            (e.theme !== a.theme || e.mode !== a.mode || e.locale !== a.locale || e.dateWheels !== a.dateWheels || e.timeWheels !== a.timeWheels || n) && (this._wheels = this._getWheels())
        }
        ,
        t.prototype._getWheels = function() {
            this._wheelOrder = {};
            var e, t = this.s, n = t.mode || this._preset, a = this._hasAmPm, s = this._dateDisplay.replace(/MMMM/, "XXXX").replace(/MMM/, "ZZZ").replace(/MM/, "mm").replace(/M/, "m").replace(/XXXX/, "MM").replace(/ZZZ/, "M"), i = this._timeDisplay, r = this._wheelOrder, o = [], l = [], c = [], h = 0;
            if (/date/i.test(n)) {
                for (var d = 0, u = this._dateWheels.split(/\|/.test(this._dateWheels) ? "|" : ""); d < u.length; d++) {
                    var m = 0;
                    if ((g = u[d]).length)
                        if (/y/i.test(g) && m++,
                        /m/i.test(g) && m++,
                        /d/i.test(g) && m++,
                        m > 1 && r.dd === le)
                            r.dd = h,
                            h++,
                            l.push(this._getDateWheel(g)),
                            c = l;
                        else if (/y/i.test(g) && r.y === le)
                            r.y = h,
                            h++,
                            l.push({
                                cssClass: "mbsc-datetime-year-wheel",
                                getIndex: this._getYearIndex,
                                getItem: this._getYearValue,
                                max: this._max ? t.getYear(this._max) : le,
                                min: this._min ? t.getYear(this._min) : le,
                                spaceAround: !0
                            });
                        else if (/m/i.test(g) && r.m === le) {
                            r.m = h,
                            e = [],
                            h++;
                            for (var _ = 0; _ < 12; _++) {
                                var p = s.replace(/[dy|]/gi, "").replace(/mm/, Te(_ + 1) + (t.monthSuffix || "")).replace(/m/, _ + 1 + (t.monthSuffix || ""));
                                e.push({
                                    display: /MM/.test(p) ? p.replace(/MM/, t.monthNames[_]) : p.replace(/M/, t.monthNamesShort[_]),
                                    value: _
                                })
                            }
                            l.push({
                                cssClass: "mbsc-datetime-month-wheel",
                                data: e,
                                spaceAround: !0
                            })
                        } else if (/d/i.test(g) && r.d === le) {
                            r.d = h,
                            e = [],
                            h++;
                            for (_ = 1; _ < 32; _++)
                                e.push({
                                    display: (/dd/i.test(s) ? Te(_) : _) + t.daySuffix,
                                    value: _
                                });
                            l.push({
                                cssClass: "mbsc-datetime-day-wheel",
                                data: e,
                                spaceAround: !0
                            })
                        }
                }
                o.push(l)
            }
            if (/time/i.test(n)) {
                for (var v = 0, f = this._timeWheels.split(/\|/.test(this._timeWheels) ? "|" : ""); v < f.length; v++) {
                    var g;
                    m = 0;
                    if ((g = f[v]).length && (/h/i.test(g) && m++,
                    /m/i.test(g) && m++,
                    /s/i.test(g) && m++,
                    /a/i.test(g) && m++),
                    m > 1 && r.tt === le)
                        r.tt = h,
                        h++,
                        c.push(this._getTimeWheel(g));
                    else if (/h/i.test(g) && r.h === le) {
                        e = [],
                        r.h = h,
                        h++;
                        for (_ = 0; _ < (a ? 12 : 24); _ += t.stepHour)
                            e.push({
                                display: a && 0 === _ ? 12 : /hh/i.test(i) ? Te(_) : _,
                                value: _
                            });
                        c.push({
                            cssClass: "mbsc-datetime-hour-wheel",
                            data: e,
                            spaceAround: !0
                        })
                    } else if (/m/i.test(g) && r.i === le) {
                        e = [],
                        r.i = h,
                        h++;
                        for (_ = 0; _ < 60; _ += t.stepMinute)
                            e.push({
                                display: /mm/i.test(i) ? Te(_) : _,
                                value: _
                            });
                        c.push({
                            cssClass: "mbsc-datetime-minute-wheel",
                            data: e,
                            spaceAround: !0
                        })
                    } else if (/s/i.test(g) && r.s === le) {
                        e = [],
                        r.s = h,
                        h++;
                        for (_ = 0; _ < 60; _ += t.stepSecond)
                            e.push({
                                display: /ss/i.test(i) ? Te(_) : _,
                                value: _
                            });
                        c.push({
                            cssClass: "mbsc-datetime-second-wheel",
                            data: e,
                            spaceAround: !0
                        })
                    } else
                        /a/i.test(g) && r.a === le && (r.a = h,
                        h++,
                        c.push({
                            cssClass: "mbsc-dt-whl-a",
                            data: /A/.test(g) ? [{
                                display: t.amText.toUpperCase(),
                                value: 0
                            }, {
                                display: t.pmText.toUpperCase(),
                                value: 1
                            }] : [{
                                display: t.amText,
                                value: 0
                            }, {
                                display: t.pmText,
                                value: 1
                            }],
                            spaceAround: !0
                        }))
                }
                c !== l && o.push(c)
            }
            return o
        }
        ,
        t.prototype._getDateWheel = function(e) {
            var t = /d/i.test(e);
            return this._hasDay = t,
            this._dateTemplate = e,
            {
                cssClass: "mbsc-datetime-date-wheel",
                getIndex: this._getDateIndex,
                getItem: this._getDateItem,
                label: "",
                max: this._max ? Vi(Fi(this._max), t) : le,
                min: this._min ? Vi(Fi(this._min), t) : le,
                spaceAround: !0
            }
        }
        ,
        t.prototype._getTimeWheel = function(e) {
            var t = this.s
              , n = []
              , a = 1;
            /s/i.test(e) ? a = t.stepSecond : /m/i.test(e) ? a = 60 * t.stepMinute : /h/i.test(e) && (a = 3600 * t.stepHour),
            this._timeStep = a;
            for (var s = 0; s < 86400; s += a) {
                var i = new Date((new Date).setHours(0, 0, 0, 0) + 1e3 * s);
                n.push({
                    display: ws(e, i, t),
                    value: s
                })
            }
            return {
                cssClass: "mbsc-dt-whl-time",
                data: n,
                label: "",
                spaceAround: !0
            }
        }
        ,
        t.prototype._getArray = function(e, t) {
            var n = []
              , a = this._wheelOrder;
            if (null === e || e === le)
                return n;
            for (var s = 0, i = ["y", "m", "d", "a", "h", "i", "s", "u", "dd", "tt"]; s < i.length; s++) {
                var r = i[s]
                  , o = this._getDatePart[r](e);
                a[r] !== le && (n[a[r]] = o),
                t && (this._innerValues[r] = o)
            }
            return n
        }
        ,
        t.defaults = o({}, ls, {
            dateDisplay: "MMMMDDYYYY",
            dateWheelFormat: "|DDD MMM D|",
            stepHour: 1,
            stepMinute: 1,
            stepSecond: 1
        }),
        t._name = "Datetime",
        t
    }(Bn)))
      , Wi = kn({})
      , Ui = {};
    function Bi(e, t) {
        return Ui[e] || (Ui[e] = {
            change: new m,
            selectedIndex: -1
        }),
        Ui[e].change.subscribe(t)
    }
    function ji(e, t) {
        var n = Ui[e];
        n && (n.change.unsubscribe(t),
        n.change.nr || delete Ui[e])
    }
    function Xi(e, t, n) {
        var a = Ui[e];
        a && (n !== le && (a.selectedIndex = n),
        t !== le && (a.value = t),
        a.change.next(a.value))
    }
    function Ji(e) {
        return Ui[e] && Ui[e].selectedIndex
    }
    var Ki, qi, Gi = 1, Zi = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            var t = {
                color: e.color,
                disabled: e.disabled,
                name: this._name,
                onChange: this._onChange,
                select: e.select,
                value: e.value
            }
              , n = En("div", {
                className: this._groupClass,
                ref: this._setEl
            }, e.children);
            return En(Wi.Provider, {
                children: n,
                value: t
            })
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._id = "mbsc-segmented-group" + Gi++,
            t._onChange = function(e, n) {
                var a = t.s
                  , s = t.value;
                if ("multiple" === a.select) {
                    if (s !== le) {
                        var i = (s = s || []).indexOf(n);
                        -1 !== i ? s.splice(i, 1) : s.push(n),
                        t.value = s.slice()
                    }
                } else
                    t.value = n;
                a.onChange && a.onChange(e)
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._setupDrag = function() {
            var e, t, n, a, s, i, r = this, o = [], l = [];
            this._unlisten = Ta(this._el, {
                onEnd: function() {
                    n && a !== s && !o[a] && r._el.querySelectorAll(".mbsc-segmented-input")[a].click();
                    n = !1,
                    r.setState({
                        dragging: !1
                    })
                },
                onMove: function(s) {
                    if (n) {
                        for (var c = Math.min(Math.max(s.endX - t, 0), e), h = 0, d = l[0]; c > d && l.length > h + 1; )
                            h++,
                            d += l[h];
                        (h = r.s.rtl ? l.length - 1 - h : h) === a || o[h] || Xi(i, le, a = h)
                    }
                },
                onStart: function(c) {
                    var h = Bt(c.domEvent.target, ".mbsc-segmented-item", r._el);
                    if (h) {
                        var d = h.querySelector(".mbsc-segmented-input");
                        if (d.classList.contains("mbsc-selected")) {
                            o = [],
                            Xt(r._el.querySelectorAll(".mbsc-segmented-button"), (function(e) {
                                o.push(e.classList.contains("mbsc-disabled"))
                            }
                            )),
                            l = [],
                            Xt(r._el.querySelectorAll(".mbsc-segmented-item"), (function(e) {
                                l.push(e.clientWidth)
                            }
                            ));
                            e = r._el.clientWidth - 30,
                            t = Wt(r._el).left + 15,
                            i = d.name,
                            a = Ji(i),
                            s = a,
                            l.length && "radio" === d.type && (n = !0,
                            r.setState({
                                dragging: !0
                            }))
                        }
                    }
                }
            })
        }
        ,
        t.prototype._cleanupDrag = function() {
            this._unlisten && (this._unlisten(),
            this._unlisten = null)
        }
        ,
        t.prototype._render = function(e) {
            this._name = e.name === le ? this._id : e.name,
            this._groupClass = "mbsc-segmented" + this._theme + this._rtl + (e.color ? " mbsc-segmented-" + e.color : "") + (this.state.dragging ? " mbsc-segmented-dragging" : "")
        }
        ,
        t.prototype._updated = function() {
            this.s.drag && "multiple" !== this.s.select ? this._unlisten || this._setupDrag() : this._cleanupDrag()
        }
        ,
        t.prototype._destroy = function() {
            this._cleanupDrag()
        }
        ,
        t.defaults = {
            select: "single"
        },
        t._name = "SegmentedGroup",
        t
    }(Bn)), $i = 1, Qi = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._setBox = function(e) {
                t._box = e
            }
            ,
            t
        }
        return r(t, e),
        Object.defineProperty(t.prototype, "checked", {
            get: function() {
                return this._checked
            },
            set: function(e) {
                this._toggle(e)
            },
            enumerable: !0,
            configurable: !0
        }),
        t.prototype._template = function(e, t) {
            var n = this;
            return En(Wi.Consumer, null, (function(a) {
                return n._groupOptions(a),
                En("label", {
                    className: n._cssClass
                }, En("input", {
                    ref: n._setEl,
                    checked: n._checked,
                    className: "mbsc-segmented-input mbsc-reset " + (e.inputClass || "") + n._theme + (n._checked ? " mbsc-selected" : ""),
                    disabled: n._disabled,
                    name: n._isMultiple ? e.name : n._name,
                    onChange: De,
                    type: n._isMultiple ? "checkbox" : "radio",
                    value: n._value
                }), En("div", {
                    ref: n._setBox,
                    className: "mbsc-segmented-selectbox" + n._theme + (n._animate ? " mbsc-segmented-selectbox-animate" : "") + (n._checked ? " mbsc-selected" : "")
                }, En("div", {
                    className: "mbsc-segmented-selectbox-inner" + n._theme + (n._index === n._selectedIndex || n._checked ? " mbsc-segmented-selectbox-inner-visible" : "") + (n._checked ? " mbsc-selected" : "")
                })), En(Xa, {
                    className: "mbsc-segmented-button" + (n._checked ? " mbsc-selected" : "") + (t.hasFocus ? " mbsc-focus" : ""),
                    color: n._color,
                    disabled: n._disabled,
                    endIcon: e.endIcon,
                    endIconSrc: e.endIconSrc,
                    endIconSvg: e.endIconSvg,
                    icon: e.icon,
                    iconSrc: e.iconSrc,
                    iconSvg: e.iconSvg,
                    ripple: e.ripple,
                    rtl: e.rtl,
                    startIcon: e.startIcon,
                    startIconSrc: e.startIconSrc,
                    startIconSvg: e.startIconSvg,
                    tag: "span",
                    tabIndex: -1,
                    theme: e.theme,
                    themeVariant: e.themeVariant
                }, e.children))
            }
            ))
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._id = "mbsc-segmented-" + $i++,
            t._onChange = function(e) {
                var n = t.s
                  , a = e.target.checked;
                a !== t._checked && (t._change(a),
                t._onGroupChange && t._onGroupChange(e, t._value),
                t._toggle(a),
                n.onChange && n.onChange(e))
            }
            ,
            t._onValueChange = function(e) {
                var n = t.s
                  , a = t._isMultiple ? e && -1 !== e.indexOf(t._value) : e === t._value;
                n.checked === le && a !== t.state.selected ? t.setState({
                    selected: a
                }) : t.forceUpdate(),
                t._change(a)
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._change = function(e) {}
        ,
        t.prototype._toggle = function(e) {
            this.s.checked === le && this.setState({
                selected: e
            })
        }
        ,
        t.prototype._groupOptions = function(e) {
            var t = this
              , n = e.color
              , a = e.disabled
              , s = e.name
              , i = e.onChange
              , r = e.select
              , o = e.value
              , l = this.s
              , c = this.state
              , h = this._checked
              , d = l.checked !== le ? ye(l.checked) : c.selected === le ? ye(l.defaultChecked) : c.selected;
            this._value = l.value === le ? this._id : l.value,
            this._onGroupChange = i,
            this._isMultiple = "multiple" === (r || l.select),
            this._name = s === le ? l.name : s,
            this._disabled = a === le ? l.disabled === le ? c.disabled : ye(l.disabled) : ye(a),
            this._color = n === le ? l.color : n,
            this._checked = o === le ? d : this._isMultiple ? o && -1 !== o.indexOf(this._value) : o === this._value,
            this._name && !this._unsubscribe && (this._unsubscribe = Bi(this._name, this._onValueChange)),
            this._isMultiple || h || !this._checked || setTimeout((function() {
                t._checked && Xi(t._name, t._value, t._index)
            }
            )),
            this._selectedIndex = Ji(this._name),
            this._cssClass = "mbsc-segmented-item " + this._className + this._theme + this._rtl + (this._checked ? " mbsc-segmented-item-checked" : "") + (c.hasFocus ? " mbsc-focus" : "") + (this._index === this._selectedIndex || this._index === le && this._checked || this._isMultiple && this._checked ? " mbsc-segmented-item-selected" : "")
        }
        ,
        t.prototype._mounted = function() {
            var e = this;
            Nt(this._el, qn, this._onChange),
            this._unlisten = Ta(this._el, {
                onBlur: function() {
                    e.setState({
                        hasFocus: !1
                    })
                },
                onFocus: function() {
                    e.setState({
                        hasFocus: !0
                    })
                }
            })
        }
        ,
        t.prototype._updated = function() {
            if (!this._isMultiple) {
                var e = Bt(this._el, ".mbsc-segmented")
                  , t = -1
                  , n = -1;
                if (e)
                    for (var a = e.querySelectorAll('.mbsc-segmented-input[name="' + this._name + '"]'), s = 0; s < a.length; s++)
                        a[s] === this._el && (t = s),
                        a[s].checked && (n = s);
                this._index !== t && -1 !== n && function(e, t) {
                    Ui[e] && (Ui[e].selectedIndex = t)
                }(this._name, n),
                -1 !== this._selectedIndex && (this._box.style.transform = "translateX(" + (this.s.rtl ? -1 : 1) * (this._selectedIndex - t) * 100 + "%)",
                this._animate = !0),
                -1 !== t && (this._index = t)
            }
        }
        ,
        t.prototype._destroy = function() {
            ji(this._name, this._unsubscribe),
            Lt(this._el, qn, this._onChange),
            this._unlisten()
        }
        ,
        t.defaults = {
            select: "single"
        },
        t._name = "Segmented",
        t
    }(Bn)), er = _t, tr = +new Date, nr = {};
    function ar(e) {
        e._logged || "mbscdemo" === s.apiKey || (e._logged = !0,
        nr.components = nr.components || [],
        nr.components.push(e.constructor._name.toLowerCase()),
        clearTimeout(qi),
        qi = setTimeout((function() {
            if (!s.fwv) {
                var t = void 0;
                switch (s.fw) {
                case "angular":
                    var n = mt.querySelector("[ng-version]");
                    t = n ? n.getAttribute("ng-version") : "N/A";
                    break;
                case "jquery":
                    t = er.$.fn && er.$.fn.jquery
                }
                s.fwv = t || "N/A"
            }
            nr.demo = !!er.isMbscDemo,
            nr.fw = s.fw,
            nr.fwv = s.fwv,
            nr.theme = e.s.theme,
            nr.trialCode = s.apiKey,
            nr.v = e._v.version,
            ir("log", null, nr, (function() {
                nr = {}
            }
            ))
        }
        ), 5e3))
    }
    function sr(e) {
        // if (e && document && !document.getElementById("trial-message")) {
        //     var t = document.createElement("div");
        //     t.setAttribute("id", "trial-message"),
        //     t.setAttribute("style", "position: absolute;width: 100%; bottom: 0;left: 0; padding: 10px;box-sizing: border-box;"),
        //     t.setAttribute("class", "mbsc-font");
        //     var n = document.createElement("div");
        //     n.setAttribute("style", "padding: 15px 25px; max-width: 400px; margin: 0 auto 10px auto; border-radius: 16px; line-height: 25px; background: #cacaca59; font-size: 15px; color: #151515;"),
        //     n.innerHTML = e.message + " ";
        //     var a = document.createElement("a");
        //     a.innerHTML = e.button.text,
        //     a.setAttribute("style", "color: #FF4080;font-weight: 600;"),
        //     a.setAttribute("href", "https://mobiscroll.com/pricing?ref=trialapp"),
        //     n.appendChild(a),
        //     t.appendChild(n),
        //     document.body.appendChild(t),
        //     setTimeout((function() {
        //         document.body.removeChild(t)
        //     }
        //     ), 6e3)
        // }
    }
    function ir(e, t, n, a, i, r) {
        var o, l = mt.createElement("script"), c = "mbsc_jsonp_" + (i || ++tr);
        c = _t[c] ? "mbsc_jsonp_" + ++tr : c;
        var h = r || 1;
        function d() {
            _t[c] && _t[c](),
            "remote" === e && (h < 4 ? ir(e, t, n, a, i, h + 1) : Ki || (Ki = !0,
            rr()))
        }
        _t[c] = function(e) {
            clearTimeout(o),
            l.parentNode.removeChild(l),
            delete _t[c],
            a(e ? JSON.parse(e, (function(e, n) {
                return "string" != typeof n ? n : "function_" === n.substring(0, 9) && t ? t[n.replace("function_", "")] : n.match(cs) ? Ss(n) : n
            }
            )) : {})
        }
        ,
        o = setTimeout(d, 6e3),
        l.onerror = d,
        l.src = s.apiUrl + s.apiKey + "/" + e + "?callback=" + c + "&data=" + encodeURIComponent(JSON.stringify(n)),
        mt.body.appendChild(l)
    }
    function rr() {
        // var e = document.cookie.replace(/(?:(?:^|.*;\s*)ASP.NET_SessionId\s*=\s*([^;]*).*$)|^.*$/, "$1");
        // mt.cookie = "mobiscrollClientError=1; expires=" + new Date((new Date).getTime() + 864e5).toUTCString() + "; path=/";
        // try {
        //     _t.name = (_t.name || "") + ";mobiscrollClientError"
        // } catch (e) {}
        // ir("error", null, {
        //     sessionID: e,
        //     trialCode: s.apiKey
        // }, (function() {
        //     mt.cookie = "mobiscrollClientError=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
        //     try {
        //         _t.name = (_t.name || "").replace(/;mobiscrollClientError/g, "")
        //     } catch (e) {}
        // }
        // ))
    }
    v && (mt.cookie.replace(/(?:(?:^|.*;\s*)mobiscrollClientError\s*=\s*([^;]*).*$)|^.*$/, "$1") || /mobiscrollClientError/.test(_t.name || "")) && rr();
    var or = {}
      , lr = " - "
      , cr = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._iso = {},
            t._remote = 0,
            t._onActiveChange = function(e) {
                t._active = e.date,
                t.forceUpdate()
            }
            ,
            t._onResize = function(e) {
                var n = e.windowWidth;
                e.cancel = t.state.width !== n,
                t.setState({
                    isLarge: e.isLarge,
                    maxPopupWidth: e.maxPopupWidth,
                    width: n,
                    widthType: n > 600 ? "md" : "sm"
                })
            }
            ,
            t._onDayHoverIn = function(e) {
                var n = e.date
                  , a = e.hidden;
                t.setState({
                    hoverDate: a ? le : +n
                })
            }
            ,
            t._onDayHoverOut = function(e) {
                var n = e.date;
                t.state.hoverDate === +n && t.setState({
                    hoverDate: le
                })
            }
            ,
            t._onCellClick = function(e) {
                t._lastSelected = new Date(e.date),
                e.active = t._activeSelect,
                t._hook("onCellClick", e)
            }
            ,
            t._onCalendarChange = function(e) {
                t._tempValueSet = !1;
                var n = e.value
                  , a = "range" === t.s.select
                  , s = a && t._newSelection;
                if (t._hasTime && t._selectedTime && !a)
                    if (t.s.selectMultiple) {
                        var i = n[n.length - 1];
                        i && i.setHours(t._selectedTime.getHours(), t._selectedTime.getMinutes())
                    } else
                        n.setHours(t._selectedTime.getHours(), t._selectedTime.getMinutes());
                if (a) {
                    var r = !t._hasTime
                      , o = "cycle" === t._rangeSelectMode && t._renderControls
                      , l = t._activeSelect
                      , c = "start" === t._activeSelect ? "end" : "start"
                      , h = t._getDate(t._tempValueRep).filter((function(e) {
                        return null !== e
                    }
                    ))
                      , d = h.map((function(e) {
                        return +e
                    }
                    ))
                      , u = h.map((function(e) {
                        return +vs(e)
                    }
                    ))
                      , m = n.filter((function(e) {
                        return u.indexOf(+e) < 0
                    }
                    ))[0];
                    if (m) {
                        switch (t._hasTime && t._selectedTime && m.setHours(t._selectedTime.getHours(), t._selectedTime.getMinutes(), t._selectedTime.getSeconds(), t._selectedTime.getMilliseconds()),
                        d.length) {
                        case 0:
                            t._tempValueRep = {},
                            t._tempValueRep[l] = +m;
                            break;
                        case 1:
                            if (o) {
                                t._tempValueRep[l] = +m;
                                break
                            }
                            d[0] > +m || "start" === t._activeSelect ? t._hasTime ? t._tempValueRep[l] = +m : (t._tempValueRep = {
                                start: +m
                            },
                            r = !1) : t._tempValueRep.end = +m;
                            break;
                        case 2:
                            if (o) {
                                t._tempValueRep[l] = +m;
                                break
                            }
                            d[0] > +m || "start" === t._activeSelect ? t._hasTime ? t._tempValueRep[l] = +m : (t._tempValueRep = {
                                start: +m
                            },
                            "end" === t._activeSelect && (r = !1)) : "end" === t._activeSelect && (t._tempValueRep.end = +m)
                        }
                        o && t._tempValueRep.start && t._tempValueRep.end && t._tempValueRep.start > t._tempValueRep.end && (t._tempValueRep = {
                            start: +m
                        },
                        t._activeSelect = "end")
                    } else {
                        var _ = void 0;
                        _ = 1 === d.length ? new Date(d[0]) : t._lastSelected,
                        t._hasTime && t._selectedTime ? _.setHours(t._selectedTime.getHours(), t._selectedTime.getMinutes(), t._selectedTime.getSeconds(), t._selectedTime.getMilliseconds()) : "end" === t._activeSelect && _.setHours(23, 59, 59, 999),
                        o || t._hasTime ? t._tempValueRep[l] = +_ : "start" === t._activeSelect ? t._tempValueRep = {
                            start: +_
                        } : t._tempValueRep.end = +_
                    }
                    if (t._tempValueRep.start && t._tempValueRep.end) {
                        var p = t.s
                          , v = p.minRange && !t._hasTime ? 24 * (p.minRange - 1) * 60 * 60 * 1e3 - 1 : p.minRange || 0
                          , f = t._tempValueRep.end - t._tempValueRep.start;
                        if (f < v && (!t._hasTime || "start" === l) && (t._tempValueRep.end = le),
                        f > (p.maxRange && !t._hasTime ? 24 * p.maxRange * 60 * 60 * 1e3 - 1 : p.maxRange || 1 / 0) && (!t._hasTime || "start" === l) && (t._tempValueRep.end = le),
                        t._tempValueRep.end && "start" === l && !p.inRangeInvalid && p.invalid !== le) {
                            var g = Fs(p.invalid, new Date(t._tempValueRep.start), p);
                            null !== g && +g < t._tempValueRep.end && (t._tempValueRep.end = le)
                        }
                    }
                    r && (t._newSelection || !t._renderControls || t._newSelection === le && "inline" === t.s.display) && (t._activeSelect = c,
                    t._newSelection = !1)
                } else if (t._tempValueRep = {
                    date: {}
                },
                t.s.selectMultiple)
                    for (var y = 0, b = n; y < b.length; y++) {
                        var x = b[y];
                        t._tempValueRep.date[+x] = x
                    }
                else {
                    if (t._hasTime) {
                        var D = t._selectedTime || new Date;
                        n.setHours(D.getHours(), D.getMinutes(), D.getSeconds(), D.getMilliseconds())
                    }
                    t._tempValueRep.date[+n] = n
                }
                t._setOrUpdate(),
                !t._live || t.s.selectMultiple && !a || t._hasTime || a && (!t._tempValueRep.start || !t._tempValueRep.end || s) || t.close()
            }
            ,
            t._onDatetimeChange = function(e) {
                t._tempValueSet = !1;
                var n = "range" === t.s.select
                  , a = t._hasTime ? e.value : vs(e.value)
                  , s = +a;
                if (n)
                    if ("start" === t._activeSelect) {
                        if (t._hasTime && t._selectedTime && a.setHours(t._selectedTime.getHours(), t._selectedTime.getMinutes(), t._selectedTime.getSeconds(), t._selectedTime.getMilliseconds()),
                        t._tempValueRep.start = s,
                        t._tempValueRep.end) {
                            var i = t.s
                              , r = i.minRange && !t._hasTime ? 24 * (i.minRange - 1) * 60 * 60 * 1e3 - 1 : i.minRange || 0;
                            t._tempValueRep.end - t._tempValueRep.start < r && (t._tempValueRep.end = le)
                        }
                    } else
                        t._hasTime ? t._selectedTime && a.setHours(t._selectedTime.getHours(), t._selectedTime.getMinutes(), t._selectedTime.getSeconds(), t._selectedTime.getMilliseconds()) : t._tempValueRep.start === +vs(a) && a.setHours(23, 59, 59, 999),
                        t._tempValueRep.end = +a;
                else {
                    if (t._hasTime && t._hasDate && t.s.controls.indexOf("datetime") < 0) {
                        var o = t._selectedTime || new Date;
                        a.setHours(o.getHours(), o.getMinutes(), o.getSeconds(), o.getMilliseconds())
                    } else
                        t._selectedTime = new Date(a);
                    t._tempValueRep = {
                        date: {}
                    },
                    t._tempValueRep.date[+a] = a
                }
                t._setOrUpdate()
            }
            ,
            t._onTimePartChange = function(e) {
                t._tempValueSet = !1;
                var n = "range" === t.s.select
                  , a = e.value;
                if (t._selectedTime = a,
                n) {
                    var s = t._getDate(t._tempValueRep)
                      , i = "start" === t._activeSelect ? 0 : 1;
                    if (s[i])
                        (r = new Date(s[i])).setHours(a.getHours(), a.getMinutes(), a.getSeconds(), a.getMilliseconds()),
                        s[i] = r,
                        "start" === t._activeSelect && +r >= +s[1] && (s.length = 1),
                        t._tempValueRep = t._parse(s);
                    else
                        t._selectedTime.setHours(a.getHours(), a.getMinutes(), a.getSeconds(), a.getMilliseconds())
                } else if (!t.s.selectMultiple) {
                    var r;
                    (r = t._getDate(t._tempValueRep)) ? (r.setHours(a.getHours(), a.getMinutes(), a.getSeconds(), a.getMilliseconds()),
                    t._tempValueRep = {
                        date: {}
                    },
                    t._tempValueRep.date[+r] = r) : t._selectedTime.setHours(a.getHours(), a.getMinutes(), a.getSeconds(), a.getMilliseconds())
                }
                t._setOrUpdate()
            }
            ,
            t._changeActiveTab = function(e) {
                t.setState({
                    activeTab: e.target.value
                })
            }
            ,
            t._changeActiveSelect = function(e) {
                t.setActiveDate(e.target.value)
            }
            ,
            t._onInputClickRange = function(e) {
                t._activateBasedOnInput(e.target),
                t._onInputClick(e)
            }
            ,
            t._onInputKeyRange = function(e) {
                t._activateBasedOnInput(e.target),
                t._onInputKey(e)
            }
            ,
            t._onInputFocusRange = function(e) {
                t._activateBasedOnInput(e.target),
                t._onInputFocus(e)
            }
            ,
            t._onInputChangeRange = function(e) {
                var n = t._startInput
                  , a = t._endInput
                  , s = (n ? n.value : "") + (a && a.value ? lr + a.value : "");
                t._onInputChange(e, s)
            }
            ,
            t._clearEnd = function() {
                t._tempValueRep.end = le,
                t._setOrUpdate()
            }
            ,
            t._clearStart = function() {
                t._tempValueRep = {},
                t._newSelection = !0,
                t._setOrUpdate()
            }
            ,
            t._activateBasedOnInput = function(e) {
                var n = e === t._startInput || t._renderControls ? "start" : "end";
                t._activeSelect = n
            }
            ,
            t._proxy = function(e) {
                t._hook(e.type, e)
            }
            ,
            t
        }
        return r(t, e),
        t.prototype.setActiveDate = function(e) {
            var t = "start" === e ? "end" : "start";
            this._activeSelect = e,
            this._tempValueRep.start && this._tempValueRep.end || !this._tempValueRep[e] && this._tempValueRep[t] ? this._newSelection = !1 : this._tempValueRep[e] && !this._tempValueRep[t] && (this._newSelection = !0),
            this._active = this._tempValueRep[e],
            this.forceUpdate()
        }
        ,
        t.prototype.getTempVal = function() {
            return e.prototype.getTempVal.call(this)
        }
        ,
        t.prototype.setTempVal = function(t) {
            e.prototype.setTempVal.call(this, t)
        }
        ,
        t.prototype.navigate = function(e) {
            this._active = +Ss(e),
            this.forceUpdate()
        }
        ,
        t.prototype._shouldValidate = function(e, t) {
            return e.controls !== t.controls || e.dateFormat !== t.dateFormat || e.timeFormat !== t.timeFormat || e.locale !== t.locale || e.min !== t.min || e.max !== t.max || this._shouldParse
        }
        ,
        t.prototype._valueEquals = function(e, t) {
            var n = me(e) && 0 === e.length || e === le || null === e
              , a = me(t) && 0 === t.length || t === le || null === t;
            return n && n === a || Es(e, t, this.s)
        }
        ,
        t.prototype._init = function() {
            this.props.modules && this.props.modules.forEach((function(e) {
                or[e._name] = e
            }
            ))
        }
        ,
        t.prototype._render = function(t, n) {
            var a = this
              , s = this._prevS;
            t.buttons,
            t.children,
            t.className;
            var i = t.controls;
            t.cssClass,
            t.element,
            t.onDestroy,
            t.onInit,
            t.onTempChange,
            t.responsive;
            var r = t.selectMultiple
              , c = t.tabs
              , h = l(t, ["buttons", "children", "className", "controls", "cssClass", "element", "onDestroy", "onInit", "onTempChange", "responsive", "selectMultiple", "tabs"]);
            this._rangeSelectMode = "inline" === t.display ? "cycle" : t.rangeSelectMode;
            var d = n.widthType || "sm"
              , u = i.indexOf("calendar") >= 0
              , m = "range" === t.select
              , _ = "wizard" === this._rangeSelectMode;
            if (this._renderTabs = i.length > 1 && ("auto" === c ? "sm" === d : c),
            t.select !== s.select && this._tempValueRep)
                if (m && this._tempValueRep.date) {
                    var p = Object.keys(this._tempValueRep.date).map((function(e) {
                        return +e
                    }
                    )).sort()
                      , v = p[0]
                      , f = p[1];
                    this._tempValueRep.start = v,
                    this._tempValueRep.end = f,
                    this._tempValueRep.date = le,
                    this._tempValueText = this._format(this._tempValueRep),
                    setTimeout((function() {
                        a.set()
                    }
                    ))
                } else if (!m && (this._tempValueRep.start || this._tempValueRep.end)) {
                    this._tempValueRep.date || (this._tempValueRep.date = {});
                    var g = this._tempValueRep.start || this._tempValueRep.end;
                    this._tempValueRep.date[g] = new Date(g);
                    var y = this._tempValueRep.end || this._tempValueRep.start;
                    y !== g && t.selectMultiple && (this._tempValueRep.date[y] = new Date(y)),
                    this._tempValueRep.start = le,
                    this._tempValueRep.end = le,
                    this._tempValueText = this._format(this._tempValueRep),
                    setTimeout((function() {
                        a.set()
                    }
                    ))
                }
            t.min !== s.min && (this._min = ve(t.min) ? le : Ss(t.min, t, t.dateFormat)),
            t.max !== s.max && (this._max = ve(t.max) ? le : Ss(t.max, t, t.dateFormat));
            var b = JSON.stringify(i) !== JSON.stringify(s.controls);
            if (b || t.dateFormat !== s.dateFormat || t.timeFormat !== s.timeFormat) {
                b && (this._controls = []),
                this._valueFormat === le && (this._valueFormat = ""),
                this._controlsClass = "";
                var x = {
                    c: "datepicker",
                    controls: i,
                    dateFormat: t.dateFormat,
                    dateText: t.dateText,
                    separator: t.separator,
                    timeFormat: t.timeFormat,
                    timeText: t.timeText,
                    v: Vn
                };
                this._remote++,
                ar(this),
                ir("remote", this, x, (function(e) {
                    if (a._remote--,
                    !a._remote) {
                        for (var t in e)
                            e.hasOwnProperty(t) && (a[t] = e[t]);
                        for (var n = 0, s = a._controls; n < s.length; n++) {
                            var i = s[n];
                            i.Component = or["calendar" === i.name ? "Calendar" : "Datetime"],
                            a._controlsClass += " mbsc-datepicker-control-" + i.name
                        }
                        sr(e.notification),
                        a._shouldParse = !0,
                        a.forceUpdate()
                    }
                }
                ), "comp_" + this._uid)
            }
            var D = this._valueFormat;
            if (this._renderControls = m && (t.showRangeLabels !== le ? t.showRangeLabels : "cycle" === this._rangeSelectMode),
            this._nullSupport = "inline" !== t.display || "date" !== t.select || !0 === t.selectMultiple,
            this._activeTab = n.activeTab || t.controls[0],
            t.rangeSelectMode !== s.rangeSelectMode && (this._buttons = le),
            e.prototype._render.call(this, t, n),
            t.headerText === s.headerText && t.selectCounter === s.selectCounter && t.selectMultiple === s.selectMultiple || this._setHeader(),
            this._showInput = t.showInput !== le ? t.showInput : this._showInput && (!m || !t.startInput && !t.endInput),
            this._shouldInitInputs = this._shouldInitInputs || t.select !== s.select || t.startInput !== s.startInput || t.endInput !== s.endInput || t.showOnClick !== s.showOnClick || t.showOnFocus !== s.showOnFocus,
            this._shouldInitInput = this._shouldInitInput || this._shouldInitInputs,
            i !== s.controls || t.dateWheels !== s.dateWheels || t.timeWheels !== s.timeWheels || t.dateFormat !== s.dateFormat || t.timeFormat !== s.timeFormat || this._shouldParse) {
                var T = t.dateWheels || t.dateFormat
                  , C = t.timeWheels || t.timeFormat
                  , S = this._iso = {};
                this._hasDate && (/y/i.test(T) && (S.y = 1),
                /M/.test(T) && (S.y = 1,
                S.m = 1),
                /d/i.test(T) && (S.y = 1,
                S.m = 1,
                S.d = 1)),
                this._hasTime && (/h/i.test(C) && (S.h = 1),
                /m/.test(C) && (S.i = 1),
                /s/i.test(C) && (S.s = 1))
            }
            this._shouldParse = !1;
            var k = Object.keys(this._tempValueRep.date || {});
            if (m) {
                if (this._activeSelect === le && (this._activeSelect = "start"),
                _ && t.buttons === le && "inline" !== t.display && ("anchored" !== t.display || this._touchUi)) {
                    var w = "start" === this._activeSelect ? {
                        disabled: !this._tempValueRep.start,
                        handler: function() {
                            a.setActiveDate("end")
                        },
                        text: t.setText + " " + t.rangeStartLabel
                    } : {
                        handler: "set",
                        text: t.setText + " " + t.rangeEndLabel
                    };
                    this._buttons = es(this, [w, "cancel"])
                }
                var M = this._selectionNotReady();
                if (this._buttons)
                    (w = Ne(this._buttons, (function(e) {
                        return "set" === e.name
                    }
                    ))) && (w.disabled = M)
            } else {
                if (this._activeSelect = le,
                this._buttons)
                    (w = Ne(this._buttons, (function(e) {
                        return "set" === e.name
                    }
                    ))) && (w.disabled = !1)
            }
            this._needsWidth = ("anchored" === t.display || "center" === t.display || "inline" !== t.display && n.isLarge || i.length > 1 && !c) && t.width === le;
            var E = t.max !== le ? Ss(t.max, t, D) : le
              , N = t.min !== le ? Ss(t.min, t, D) : le;
            if (this._maxLimited = E,
            this._minLimited = N,
            "end" === this._activeSelect && this._tempValueRep.start) {
                if (!t.inRangeInvalid && t.invalid !== le) {
                    var L = new Date(this._tempValueRep.start)
                      , I = Fs(t.invalid, L, t);
                    null !== I && (this._maxLimited = new Date(+I - 1))
                }
                (!u || this._hasTime || _) && (!this._minLimited || Ss(this._minLimited, t, D) < new Date(this._tempValueRep.start)) && (this._minLimited = new Date(this._tempValueRep.start))
            }
            if (this._minTimeLimited = this._minLimited,
            m && "end" === this._activeSelect && this._tempValueRep.start) {
                if (t.minRange) {
                    var H = this._tempValueRep.start + (this._hasTime ? t.minRange : 24 * t.minRange * 60 * 60 * 1e3 - 1);
                    (!this._minLimited || +Ss(this._minLimited, t, D) < H) && (this._minLimited = new Date(H),
                    this._minTimeLimited = this._minLimited)
                }
                if (this._minTimeLimited === le && this._tempValueRep.start && this._tempValueRep.end && (this._minTimeLimited = new Date(+this._tempValueRep.start)),
                t.maxRange !== le) {
                    var O = this._tempValueRep.start + (this._hasTime ? t.maxRange : 24 * t.maxRange * 60 * 60 * 1e3 - 1);
                    (!this._maxLimited || +Ss(this._maxLimited, t, D) > O) && (this._maxLimited = new Date(O))
                }
            }
            for (var P = 0, Y = this._controls; P < Y.length; P++) {
                var V = Y[P]
                  , F = o({}, h, {
                    display: "inline",
                    max: this._maxLimited,
                    min: this._minLimited
                });
                if ("calendar" === V.name) {
                    F.min = this._minLimited ? vs(this._minLimited) : le,
                    F.max = this._maxLimited ? vs(this._maxLimited) : le,
                    F.selectRange = m,
                    F.width = this._needsWidth ? 296 * Qs(t.pages, n.maxPopupWidth) : le;
                    var z = "auto" === t.pages ? 3 : t.pages || 1;
                    if (this._maxWidth = t.maxWidth || (z > 2 ? 296 * z : le),
                    m) {
                        var R = this._getDate(this._tempValueRep)
                          , A = R.filter((function(e) {
                            return null !== e
                        }
                        )).map((function(e) {
                            return +vs(e)
                        }
                        )).filter((function(e, t, n) {
                            return n.indexOf(e) === t
                        }
                        )).map((function(e) {
                            return new Date(e)
                        }
                        ));
                        F.value = A,
                        t.rangeHighlight && (F.rangeStart = R[0] && +vs(R[0]),
                        F.rangeEnd = R[1] && +vs(R[1]),
                        F.onDayHoverIn = this._onDayHoverIn,
                        F.onDayHoverOut = this._onDayHoverOut,
                        "end" === this._activeSelect && R[0] && (F.hoverEnd = n.hoverDate),
                        "start" === this._activeSelect && R[1] && this._renderControls && (F.hoverStart = n.hoverDate))
                    } else
                        F.selectMultiple = r,
                        F.value = this._getDate(this._tempValueRep);
                    for (var W = me(F.value) ? F.value : [F.value], U = F.min ? +F.min : -1 / 0, B = F.max ? +F.max : 1 / 0, j = void 0, X = 0, J = W; X < J.length; X++) {
                        var K = J[X];
                        !j && K >= U && K <= B && (j = +K)
                    }
                    j === this._selectedDate && this._active !== le || (this._selectedDate = j,
                    this._active = ue(j ? +vs(new Date(j)) : this._active || +vs(new Date), U, B));
                    var q = t.dateWheels || t.dateFormat
                      , G = /d/i.test(q) ? Us : /m/i.test(q) ? Bs : /y/i.test(q) ? js : Us;
                    F.active = this._active,
                    F.onActiveChange = this._onActiveChange,
                    F.onChange = this._onCalendarChange,
                    F.onCellClick = this._onCellClick,
                    F.onCellHoverIn = this._proxy,
                    F.onCellHoverOut = this._proxy,
                    F.onLabelClick = this._proxy,
                    F.onPageChange = this._proxy,
                    F.onPageLoaded = this._proxy,
                    F.onPageLoading = this._proxy,
                    F.selectView = G
                } else if (F.displayStyle = "bottom" !== t.display && "top" !== t.display || !u && !this._renderTabs ? t.display : "center",
                F.mode = V.name,
                "time" === V.name && this._hasDate) {
                    if (F.onChange = this._onTimePartChange,
                    m) {
                        var Z = this._tempValueRep[this._activeSelect]
                          , $ = void 0;
                        this._selectedTime && (!this._minTimeLimited || this._selectedTime > this._minTimeLimited ? $ = this._selectedTime : ($ = new Date(this._minTimeLimited)).setHours(this._selectedTime.getHours(), this._selectedTime.getMinutes(), this._selectedTime.getSeconds(), this._selectedTime.getMilliseconds())),
                        this._selectedTime = Z ? new Date(Z) : $ || new Date,
                        F.value = this._selectedTime
                    } else if (!t.selectMultiple) {
                        var Q = this._tempValueRep.date && this._tempValueRep.date[k[0]] || this._selectedTime || null;
                        F.value = Q
                    }
                    F.min = this._minTimeLimited,
                    F.max = this._maxLimited
                } else if (F.onChange = this._onDatetimeChange,
                m) {
                    var ee = this._tempValueRep[this._activeSelect];
                    F.value = ee ? new Date(ee) : null
                } else {
                    var te = this._tempValueRep.date && this._tempValueRep.date[k[0]]
                      , ne = te;
                    te && (this._hasTime || (ne = vs(te))),
                    F.value = ne || null
                }
                V.options = F
            }
        }
        ,
        t.prototype._updated = function() {
            var t = this
              , n = this.s;
            this._shouldInitInputs && (this._clearInputHandlers(this._startInput, this._startInputReadOnly),
            this._clearInputHandlers(this._endInput, this._endInputReadOnly),
            clearTimeout(this._startEndTimeout),
            this._startEndTimeout = setTimeout((function() {
                if ("range" === n.select) {
                    var e = n.startInput;
                    e && t._setupInput("start", e);
                    var a = n.endInput;
                    a && t._setupInput("end", a),
                    !n.element || t._startInput !== n.element && t._endInput !== n.element || (t._shouldInitInput = !1,
                    clearTimeout(t._inputTimeout))
                }
            }
            )),
            this._shouldInitInputs = !1);
            var a = this._valueTextChange;
            e.prototype._updated.call(this),
            "range" === n.select && (this._startInput && a && (this._startInput.value = this._getValueText("start"),
            this._preventChange = !0,
            jt(this._startInput, Kn)),
            this._endInput && a && (this._endInput.value = this._getValueText("end"),
            this._preventChange = !0,
            jt(this._endInput, Kn)))
        }
        ,
        t.prototype._onEnterKey = function(t) {
            this._selectionNotReady() || e.prototype._onEnterKey.call(this, t)
        }
        ,
        t.prototype._setupInput = function(e, t) {
            var n = this
              , a = function(t) {
                n._win || (n._win = Yt(t)),
                t.value = n._getValueText(e),
                jt(t, Kn),
                n._setupInputHandlers(t),
                "start" === e ? (n._startInput = t,
                n._startInputReadOnly = t.readOnly) : (n._endInput = t,
                n._endInputReadOnly = t.readOnly),
                (n.s.showOnClick || n.s.showOnFocus) && (t.readOnly = !0)
            };
            if (t)
                if (t.getInputElement)
                    t.getInputElement().then(a);
                else if (t._el)
                    a(t._el);
                else if (1 === t.nodeType)
                    a(t);
                else if (pe(t)) {
                    var s = mt.querySelector(t);
                    s && a(s)
                }
        }
        ,
        t.prototype._destroy = function() {
            this._clearInputHandlers(this._startInput, this._startInputReadOnly),
            this._clearInputHandlers(this._endInput, this._endInputReadOnly)
        }
        ,
        t.prototype._setupInputHandlers = function(e) {
            this.s.showOnClick && (Nt(e, qn, this._onInputClickRange),
            Nt(e, na, this._onInputMouseDown),
            Nt(e, ta, this._onInputKeyRange)),
            this.s.showOnFocus && (Nt(e, $n, this._onInputFocusRange),
            Nt(Yt(e), $n, this._onWinFocus)),
            Nt(e, Kn, this._onInputChangeRange)
        }
        ,
        t.prototype._clearInputHandlers = function(e, t) {
            e && (e.readOnly = t,
            Lt(e, qn, this._onInputClickRange),
            Lt(e, na, this._onInputMouseDown),
            Lt(e, ta, this._onInputKeyRange),
            Lt(e, $n, this._onInputFocusRange),
            Lt(e, Kn, this._onInputChangeRange),
            Lt(Yt(e), $n, this._onWinFocus))
        }
        ,
        t.prototype._setHeader = function() {
            var t = this.s;
            if (t.selectCounter && t.selectMultiple) {
                var n = Object.keys(this._tempValueRep && this._tempValueRep.date || {}).length;
                this._headerText = (n > 1 && t.selectedPluralText || t.selectedText).replace(/{count}/, "" + n)
            } else
                e.prototype._setHeader.call(this)
        }
        ,
        t.prototype._validate = function() {
            if (!(this._max <= this._min)) {
                var e = this.s
                  , t = this._min ? +this._min : -1 / 0
                  , n = this._max ? +this._max : 1 / 0;
                if ("date" === e.select) {
                    var a = this._tempValueRep.date;
                    if (!e.selectMultiple)
                        for (var s = 0, i = Object.keys(a); s < i.length; s++) {
                            var r = i[s]
                              , o = a[r]
                              , l = xi(o, e, t, n);
                            +l != +o && (delete a[r],
                            a[+vs(l)] = l)
                        }
                } else {
                    var c = this._getDate(this._tempValueRep)
                      , h = c[0]
                      , d = c[1];
                    h && (h = xi(h, e, t, n)),
                    d && (d = xi(d, e, t, n)),
                    h && d && h > d && ("end" === this._activeSelect ? h = d : d = h),
                    h && (this._tempValueRep.start = +h),
                    d && (this._tempValueRep.end = +d)
                }
            }
        }
        ,
        t.prototype._copy = function(e) {
            return o({}, e)
        }
        ,
        t.prototype._format = function(e) {
            var t = this.s
              , n = [];
            if (!t)
                return "";
            if ("date" === t.select) {
                var a = e.date;
                for (var s in a)
                    a[s] !== le && null !== a[s] && n.push(ws(this._valueFormat, a[s], t));
                return t.selectMultiple ? n.join(", ") : n[0]
            }
            return e.start && n.push(ws(this._valueFormat, new Date(e.start), t)),
            e.end && (n.length || n.push(""),
            n.push(ws(this._valueFormat, new Date(e.end), t))),
            this._tempStartText = n[0] || "",
            this._tempEndText = n[1] || "",
            n.join(lr)
        }
        ,
        t.prototype._parse = function(e) {
            var t = this.s
              , n = {}
              , a = "range" === t.select
              , s = t.selectMultiple
              , i = [];
            if (ve(e)) {
                var r = t.defaultSelection;
                e = s || a ? r : null === r || this._live && "inline" !== t.display ? null : r || new Date
            }
            if (pe(e) && (a || s) ? i = e.split(a ? lr : ",") : me(e) ? i = e : e && !me(e) && (i = [e]),
            a) {
                var o = i[0]
                  , l = i[1]
                  , c = Ss(o, t, this._valueFormat, this._iso)
                  , h = Ss(l, t, this._valueFormat, this._iso);
                n.start = c ? +c : le,
                n.end = h ? +h : le
            } else {
                n.date = {};
                for (var d = 0, u = i; d < u.length; d++) {
                    var m = u[d];
                    if (null !== m && "" !== m) {
                        var _ = Ss(m, t, this._valueFormat, this._iso)
                          , p = +vs(_);
                        n.date[p] = _,
                        this._selectedTime === le && (this._selectedTime = new Date(_))
                    }
                }
            }
            return n
        }
        ,
        t.prototype._getDate = function(e) {
            var t = this.s;
            if ("range" === t.select) {
                var n = e.start ? new Date(e.start) : null
                  , a = e.end ? new Date(e.end) : null;
                return n || a ? [n, a] : []
            }
            if (t.selectMultiple) {
                var s = []
                  , i = e.date;
                if (i)
                    for (var r = 0, o = Object.keys(i); r < o.length; r++) {
                        var l = o[r];
                        s.push(new Date(+l))
                    }
                return s
            }
            var c = Object.keys(e.date || {});
            return c.length ? new Date(e.date[c[0]]) : null
        }
        ,
        t.prototype._get = function(e) {
            var t = this.s
              , n = this._valueFormat
              , a = this._iso
              , s = this._getDate(e);
            return me(s) ? s.map((function(e) {
                return e ? ks(e, t, n, a) : null
            }
            )) : null === s ? null : ks(s, t, n, a)
        }
        ,
        t.prototype._onClosed = function() {
            this._active = this._activeSelect = le
        }
        ,
        t.prototype._onOpen = function() {
            this._newSelection = !0
        }
        ,
        t.prototype._getValueText = function(e) {
            return this._valueText.split(lr)["start" === e ? 0 : 1] || ""
        }
        ,
        t.prototype._selectionNotReady = function() {
            var e = this.s.controls.indexOf("calendar") >= 0
              , t = !1;
            if ("range" === this.s.select) {
                var n = (this._get(this._tempValueRep || {}) || []).filter((function(e) {
                    return e
                }
                ));
                (t = !n.length) || (t = e || this._renderControls ? n.length < 2 : !this._tempValueRep[this._activeSelect])
            }
            return t
        }
        ,
        t.defaults = o({}, ls, ki.defaults, {
            controls: ["calendar"],
            dateText: "Date",
            inRangeInvalid: !1,
            rangeEndHelp: "Please select",
            rangeEndLabel: "End",
            rangeHighlight: !0,
            rangeSelectMode: "cycle",
            rangeStartHelp: "Please select",
            rangeStartLabel: "Start",
            select: "date",
            selectedText: "{count} selected",
            showOnClick: !0,
            timeText: "Time"
        }),
        t._name = "Datepicker",
        t
    }(ki);
    or.Datetime = Ai,
    or.Calendar = wi;
    var hr = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            var t = this
              , n = this._renderTabs
              , a = this._controls
              , s = En("div", {
                className: "mbsc-datepicker mbsc-datepicker-" + e.display + this._theme + ("inline" === e.display ? " " + this._className : "") + this._controlsClass
            }, this._headerText && "inline" === e.display && En("div", {
                className: "mbsc-picker-header" + this._theme + this._hb
            }, this._headerText), n && En(Zi, {
                rtl: e.rtl,
                theme: e.theme,
                themeVariant: e.themeVariant,
                value: this._activeTab,
                onChange: this._changeActiveTab
            }, a.map((function(t, n) {
                return En(Qi, {
                    key: n,
                    rtl: e.rtl,
                    theme: e.theme,
                    themeVariant: e.themeVariant,
                    value: t.name
                }, t.title)
            }
            ))), this._renderControls && En("div", {
                className: "mbsc-range-control-wrapper" + this._theme
            }, En(Zi, {
                theme: e.theme,
                themeVariant: e.themeVariant,
                rtl: e.rtl,
                value: this._activeSelect,
                onChange: this._changeActiveSelect
            }, En(Qi, {
                rtl: e.rtl,
                theme: e.theme,
                themeVariant: e.themeVariant,
                value: "start",
                className: "mbsc-range-start" + (this._tempStartText ? " mbsc-range-value-nonempty" : "")
            }, En("div", {
                className: "mbsc-range-control-label" + this._theme + this._rtl + ("start" === this._activeSelect ? " active" : "")
            }, e.rangeStartLabel), En("div", {
                className: "mbsc-range-control-value" + this._theme + this._rtl + ("start" === this._activeSelect ? " active" : "") + (this._tempStartText ? "" : " mbsc-range-control-text-empty")
            }, this._tempStartText || e.rangeStartHelp), En(jn, {
                className: "mbsc-range-label-clear" + this._rtl + ("start" === this._activeSelect ? " active" : "") + (this._tempStartText ? "" : " mbsc-range-value-empty"),
                onClick: this._clearStart,
                svg: e.clearIcon,
                theme: e.theme
            })), En(Qi, {
                rtl: e.rtl,
                theme: e.theme,
                themeVariant: e.themeVariant,
                value: "end",
                className: "mbsc-range-end" + (this._tempEndText ? " mbsc-range-value-nonempty" : "")
            }, En("div", {
                className: "mbsc-range-control-label" + this._theme + this._rtl + ("end" === this._activeSelect ? " active" : "")
            }, e.rangeEndLabel), En("div", {
                className: "mbsc-range-control-value" + this._theme + this._rtl + ("end" === this._activeSelect ? " active" : "") + (this._tempEndText ? "" : " mbsc-range-control-text-empty")
            }, this._tempEndText || e.rangeEndHelp), En(jn, {
                className: "mbsc-range-label-clear" + this._rtl + ("end" === this._activeSelect ? " active" : "") + (this._tempEndText ? "" : " mbsc-range-value-empty"),
                onClick: this._clearEnd,
                svg: e.clearIcon,
                theme: e.theme
            })))), En("div", {
                className: "mbsc-datepicker-tab-wrapper" + this._theme,
                ref: this._setWrapper
            }, a.map((function(e, s) {
                return En("div", {
                    key: s,
                    className: "mbsc-datepicker-tab mbsc-datepicker-tab-" + e.name + t._theme + (n && e.name === t._activeTab || !n ? " mbsc-datepicker-tab-active" : "") + (n && "time" === e.name ? " mbsc-datepicker-time-modal" : "") + (n || 1 === a.length ? " mbsc-datepicker-tab-expand" : "")
                }, En(e.Component, o({}, e.options)))
            }
            ))));
            return as(this, e, s)
        }
        ,
        t
    }(cr)
      , dr = {
        before: function(e, t) {
            t.defaultValue = e.value,
            t.element = e
        }
    }
      , ur = 0;
    function mr(e, t, n) {
        "jsonp" === n ? function(e, t) {
            if (_t) {
                var n = mt.createElement("script")
                  , a = "mbscjsonp" + ++ur;
                _t[a] = function(e) {
                    n.parentNode.removeChild(n),
                    delete _t[a],
                    e && t(e)
                }
                ,
                n.src = e + (e.indexOf("?") >= 0 ? "&" : "?") + "callback=" + a,
                mt.body.appendChild(n)
            }
        }(e, t) : function(e, t) {
            var n = new XMLHttpRequest;
            n.open("GET", e, !0),
            n.onload = function() {
                n.status >= 200 && n.status < 400 && t(JSON.parse(n.response))
            }
            ,
            n.onerror = function() {}
            ,
            n.send()
        }(e, t)
    }
    var _r = {
        getJson: mr
    };
    C.http = _r;
    var pr = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "datepicker",
        t._renderOpt = dr,
        t
    }(hr);
    var vr = {
        before: function(e, t) {
            t.defaultValue = e.value,
            "select" === e.nodeName.toLowerCase() ? (e.style.display = "none",
            t.inputElement || "inline" === t.display ? t.element = t.inputElement : (t.inputComponent = "input",
            t.showInput = !0),
            t.selectElement = e,
            t.selectMultiple = e.multiple) : t.element = e
        }
    }
      , fr = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "select",
        t._renderOpt = vr,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._setScroller = function(e) {
                t._scroller = e
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._template = function(e) {
            var t = e.cssClass;
            e.responsive;
            var n = l(e, ["cssClass", "responsive"]);
            return En(Pi, o({}, n, {
                className: (t || "") + " mbsc-select-scroller mbsc-select-scroller-" + e.display,
                dropdown: !0,
                formatValue: this._format,
                parseValue: this._parse,
                getValue: this._get,
                valueEquality: this._valueEquals,
                valueMap: this._map,
                validate: this._validate,
                shouldValidate: this._shouldValidate,
                writeValue: this._writeValue,
                ref: this._setScroller,
                wheels: this._wheels,
                rows: this._rows,
                selectOnScroll: this._selectOnScroll,
                onResize: this._onResize
            }), e.children)
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._options = [],
            t._shouldValidate = function(e, t) {
                return e.selectMultiple !== t.selectMultiple
            }
            ,
            t._writeValue = function(e, n, a) {
                var s = e.value;
                if (e.value = n,
                t._isSelect) {
                    me(a) || (a = [a]);
                    for (var i = t.s.selectElement.options, r = !1, o = 0; o < i.length; o++) {
                        var l = i[o]
                          , c = l.selected;
                        l.selected = a.indexOf(l.value) > -1,
                        c !== l.selected && (r = !0)
                    }
                    return r
                }
                return s !== n
            }
            ,
            t._onResize = function(e) {
                t.setState({
                    width: e.windowWidth
                })
            }
            ,
            t._format = function(e) {
                var n = t.s.selectMultiple ? e[0] : e;
                return (n.map && n.map((function(e) {
                    return t._map ? t._map.get(e) : le
                }
                )) || []).join(", ")
            }
            ,
            t._parse = function(e) {
                var n = t.s.selectMultiple
                  , a = t._map
                  , s = t.s.defaultSelection
                  , i = n ? s ? s.length !== le ? s : s.slice() : [] : s !== le ? s : null;
                if (a) {
                    if (n && null != e) {
                        var r = [];
                        if (e.length === le)
                            r.push(e);
                        else
                            for (var o = 0, l = e; o < l.length; o++) {
                                var c = l[o];
                                a.has(c) && r.push(c)
                            }
                        return [r]
                    }
                    if (a.has(e))
                        return [e]
                }
                return [i]
            }
            ,
            t._get = function(e) {
                var n = t.s.selectMultiple ? e[0] || [] : e;
                return t.s.selectMultiple ? n : n[0]
            }
            ,
            t._valueEquals = function(e, n) {
                return t.s.selectMultiple ? Ee(e || [], n || []) : e === n
            }
            ,
            t._validate = function(e) {
                var n = e.values
                  , a = t._disabled
                  , s = {
                    disabled: [a]
                };
                if (t.s.selectMultiple) {
                    var i = t._get(n)
                      , r = [];
                    i.forEach((function(e) {
                        a.get(e) || r.push(e)
                    }
                    )),
                    s.valid = t._parse(r)
                }
                return s
            }
            ,
            t
        }
        return r(t, e),
        t.prototype.reloadOptionElements = function() {
            var e = this;
            this._optionsReloaded = !0,
            this._setOptionsFromElm(),
            setTimeout((function() {
                e.forceUpdate()
            }
            ))
        }
        ,
        t.prototype.setVal = function(e) {
            this._proxyCall("setVal", [e])
        }
        ,
        t.prototype.getVal = function() {
            return this._proxyCall("getVal")
        }
        ,
        t.prototype.setTempVal = function(e) {
            this._proxyCall("setTempVal", [e])
        }
        ,
        t.prototype.getTempVal = function() {
            return this._proxyCall("getTempVal")
        }
        ,
        t.prototype.open = function() {
            this._proxyCall("open")
        }
        ,
        t.prototype.close = function() {
            this._proxyCall("close")
        }
        ,
        t.prototype._render = function(e, t) {
            var n, a, s, i = this._prevS, r = this._touchUi && (!e.selectMultiple || "ios" === (e.baseTheme || e.theme)), o = e.element !== i.element || e.selectElement !== i.selectElement, l = e.data !== i.data, c = l || this._optionsReloaded;
            if (o && (this._isSelect = e.selectElement !== le,
            this._isSelect ? this._setOptionsFromElm() : e.element || (this._options = [])),
            l && this._createOptionList(e.data),
            (c || o || e.invalid !== i.invalid) && (this._disabled = (n = this._options,
            a = e.invalid,
            s = new Map,
            n && n.forEach((function(e) {
                e.disabled && s.set(e.value, !0)
            }
            )),
            a && a.forEach((function(e) {
                s.set(e, !0)
            }
            )),
            s)),
            c || e.touchUi !== i.touchUi || e.rows !== i.rows) {
                var h = this._touchUi ? e.rows : Math.min((this._respProps || {}).rows || this.props.rows || 7, this._options.length || 1 / 0);
                this._rows = this.props.rows || h
            }
            (c || o || r !== this._spaceAround) && (this._wheels = this._createWheels(this._options || [], r)),
            this._spaceAround = r,
            this._selectOnScroll = this._touchUi && !e.selectMultiple,
            this._optionsReloaded = !1
        }
        ,
        t.prototype._createOptionList = function(e) {
            var t = []
              , n = new Map;
            e.forEach((function(e) {
                e && e.value !== le || (e = {
                    text: e,
                    value: e
                }),
                n.set(e.value, e.text),
                t.push({
                    disabled: e.disabled,
                    label: e.text,
                    value: e.value
                })
            }
            )),
            this._map = n,
            this._options = t
        }
        ,
        t.prototype._proxyCall = function(e, t) {
            var n = this._inst || this._scroller;
            if (n)
                return n[e].apply(n, t)
        }
        ,
        t.prototype._createWheels = function(e, t) {
            var n = {
                checkmark: !0,
                circular: !1,
                data: [],
                multiple: this.s.selectMultiple,
                spaceAround: t
            };
            return e.forEach((function(e) {
                n.data.push({
                    display: e.label,
                    value: e.value
                })
            }
            )),
            [[n]]
        }
        ,
        t.prototype._setOptionsFromElm = function() {
            for (var e = this.s.selectElement.options, t = [], n = 0; n < e.length; n++) {
                var a = e[n];
                t.push({
                    disabled: a.disabled,
                    text: a.text,
                    value: a.value
                })
            }
            this._createOptionList(t)
        }
        ,
        t.defaults = o({}, ki.defaults, {
            rows: 5
        }),
        t._name = "Select",
        t
    }(Bn)))
      , gr = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            return En("div", {
                ref: this._setEl,
                className: this._cssClass
            }, e.children)
        }
        ,
        t
    }(function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._render = function(e) {
            this._cssClass = this._className + " mbsc-list-header" + this._theme + this._hb
        }
        ,
        t
    }(Bn))
      , yr = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            var t = this.props;
            t.actionable;
            var n = t.children;
            t.className,
            t.data,
            t.drag,
            t.ripple,
            t.rtl,
            t.theme,
            t.themeVariant,
            t.onDragEnd,
            t.onDragMove,
            t.onDragStart,
            t.onDragModeOn,
            t.onDragModeOff;
            var a = l(t, ["actionable", "children", "className", "data", "drag", "ripple", "rtl", "theme", "themeVariant", "onDragEnd", "onDragMove", "onDragStart", "onDragModeOn", "onDragModeOff"]);
            return En("div", o({
                tabIndex: 0,
                ref: this._setEl,
                className: this._cssClass
            }, a), En("div", {
                dangerouslySetInnerHTML: this.textParam
            }), n)
        }
        ,
        t
    }(function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._mounted = function() {
            var e, t, n = this;
            this._unlisten = Ta(this._el, {
                click: !0,
                onBlur: function() {
                    n.setState({
                        hasFocus: !1
                    })
                },
                onEnd: function(a) {
                    if (e) {
                        var s = o({}, a);
                        s.domEvent.preventDefault(),
                        s.data = n.s.data,
                        s.drag = !0,
                        n._hook("onDragEnd", s),
                        e = !1
                    }
                    clearTimeout(t)
                },
                onFocus: function() {
                    n.setState({
                        hasFocus: !0
                    })
                },
                onHoverIn: function() {
                    n.s.actionable && n.setState({
                        hasHover: !0
                    })
                },
                onHoverOut: function() {
                    n.setState({
                        hasHover: !1
                    })
                },
                onKeyDown: function(e) {
                    switch (e.keyCode) {
                    case Ya:
                    case Va:
                        n._el.click(),
                        e.preventDefault()
                    }
                },
                onMove: function(a) {
                    var s = n.s
                      , i = o({}, a);
                    i.data = s.data,
                    i.drag = !0,
                    i.external = !0,
                    !e && i.isTouch || i.domEvent.preventDefault(),
                    e ? n._hook("onDragMove", i) : (Math.abs(i.deltaX) > 7 || Math.abs(i.deltaY) > 7) && (clearTimeout(t),
                    !i.isTouch && s.drag && !1 !== s.data.editable && (e = !0,
                    n._hook("onDragStart", i)))
                },
                onPress: function() {
                    n.s.actionable && n.setState({
                        isActive: !0
                    })
                },
                onRelease: function() {
                    n.setState({
                        isActive: !1
                    })
                },
                onStart: function(a) {
                    var s = n.s;
                    return a.isTouch && s.drag && !1 !== s.data.editable && !e && (t = setTimeout((function() {
                        var t = o({}, a);
                        t.data = s.data,
                        t.drag = !0,
                        n._hook("onDragModeOn", t),
                        n._hook("onDragStart", t),
                        e = !0
                    }
                    ), 350)),
                    {
                        ripple: s.actionable && s.ripple
                    }
                }
            })
        }
        ,
        t.prototype._render = function(e, t) {
            this._cssClass = this._className + " mbsc-list-item" + this._theme + this._hb + this._rtl + (e.actionable ? " mbsc-list-item-actionable" : "") + (t.hasFocus ? " mbsc-focus" : "") + (t.hasHover ? " mbsc-hover" : "") + (t.isActive ? " mbsc-active" : "")
        }
        ,
        t.prototype._destroy = function() {
            this._unlisten()
        }
        ,
        t.defaults = {
            actionable: !0,
            ripple: !1
        },
        t._name = "ListItem",
        t
    }(Bn))
      , br = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            return En("div", {
                ref: this._setEl,
                className: this._cssClass
            }, e.children)
        }
        ,
        t
    }(function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._render = function(e) {
            this._cssClass = this._className + this._rtl + " mbsc-font mbsc-list" + this._theme
        }
        ,
        t
    }(Bn))
      , xr = new m;
    function Dr(e) {
        return xr.subscribe(e)
    }
    function Tr(e) {
        xr.unsubscribe(e)
    }
    var Cr, Sr = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._render = function(e) {
            e.dragData !== this._prevS.dragData && (this._dragData = pe(e.dragData) ? JSON.parse(e.dragData.toString()) : e.dragData)
        }
        ,
        t.prototype._updated = function() {
            var e = this
              , t = this.s.element || this._el;
            if (this._unlisten === le && t) {
                var n, a, s;
                t.classList.add("mbsc-draggable");
                var i = It(t).body
                  , r = function(e) {
                    n.style.left = e.endX + "px",
                    n.style.top = e.endY + "px"
                };
                this._unlisten = Ta(t, {
                    onEnd: function(t) {
                        if (a) {
                            var r = o({}, t);
                            r.domEvent.preventDefault(),
                            r.action = "externalDrop",
                            r.event = e._dragData,
                            r.create = !0,
                            r.eventName = "onDragEnd",
                            xr.next(r),
                            a = !1,
                            i.removeChild(n)
                        }
                        clearTimeout(s)
                    },
                    onMove: function(t) {
                        var l = o({}, t);
                        l.event = e._dragData,
                        l.clone = n,
                        l.create = !0,
                        l.external = !0,
                        !a && l.isTouch || l.domEvent.preventDefault(),
                        a ? (r(t),
                        l.eventName = "onDragMove",
                        xr.next(l)) : (Math.abs(l.deltaX) > 7 || Math.abs(l.deltaY) > 7) && (clearTimeout(s),
                        l.isTouch || (r(t),
                        i.appendChild(n),
                        l.eventName = "onDragStart",
                        xr.next(l),
                        a = !0))
                    },
                    onStart: function(l) {
                        var c = o({}, l);
                        a || ((n = t.cloneNode(!0)).classList.add("mbsc-drag-clone"),
                        c.event = e._dragData,
                        c.create = !0,
                        c.external = !0,
                        c.isTouch && (s = setTimeout((function() {
                            r(l),
                            i.appendChild(n),
                            c.clone = n,
                            c.eventName = "onDragModeOn",
                            xr.next(c),
                            c.eventName = "onDragStart",
                            xr.next(c),
                            a = !0
                        }
                        ), 350)))
                    }
                })
            }
        }
        ,
        t.prototype._destroy = function() {
            this._unlisten && this._unlisten()
        }
        ,
        t
    }(Bn);
    function kr(e) {
        return Cr || (Cr = Mr.luxon.DateTime.local().zoneName),
        e && "local" !== e ? e : Cr
    }
    var wr = function() {
        function e(e, t) {
            void 0 === t && (t = "utc"),
            this._mbsc = !0,
            t = kr(t);
            var n = Mr.luxon.DateTime
              , a = {
                zone: t
            };
            if (this.zone = t,
            fe(e))
                this.dt = n.utc().setZone(t);
            else if (Ts(e) || _e(e))
                this.dt = n.fromMillis(+e, a);
            else if (pe(e))
                this.dt = n.fromISO(e, a);
            else if (me(e)) {
                for (var s = ["year", "month", "day", "hour", "minute", "second", "millisecond"], i = 0; i < e.length && i < 7; i++)
                    a[s[i]] = e[i] + (1 === i ? 1 : 0);
                this.dt = n.fromObject(a)
            }
        }
        return e.prototype.clone = function() {
            return new e(this,this.zone)
        }
        ,
        e.prototype.createDate = function(e, t, n, a, s, i, r) {
            return Mr.createDate({
                displayTimezone: this.zone
            }, e, t, n, a, s, i, r)
        }
        ,
        e.prototype[Symbol.toPrimitive] = function(e) {
            return this.dt.toJSDate()[Symbol.toPrimitive](e)
        }
        ,
        e.prototype.toDateString = function() {
            return this.dt.toFormat("ccc MMM dd yyyy")
        }
        ,
        e.prototype.toISOString = function() {
            return this.dt.toISO()
        }
        ,
        e.prototype.toJSON = function() {
            return this.dt.toISO()
        }
        ,
        e.prototype.valueOf = function() {
            return this.dt.valueOf()
        }
        ,
        e.prototype.getDate = function() {
            return this.dt.day
        }
        ,
        e.prototype.getDay = function() {
            return this.dt.weekday % 7
        }
        ,
        e.prototype.getFullYear = function() {
            return this.dt.year
        }
        ,
        e.prototype.getHours = function() {
            return this.dt.hour
        }
        ,
        e.prototype.getMilliseconds = function() {
            return this.dt.millisecond
        }
        ,
        e.prototype.getMinutes = function() {
            return this.dt.minute
        }
        ,
        e.prototype.getMonth = function() {
            return this.dt.month - 1
        }
        ,
        e.prototype.getSeconds = function() {
            return this.dt.second
        }
        ,
        e.prototype.getTime = function() {
            return this.valueOf()
        }
        ,
        e.prototype.getTimezoneOffset = function() {
            return this.dt.offset
        }
        ,
        e.prototype.getUTCDate = function() {
            return this.dt.toUTC().day
        }
        ,
        e.prototype.getUTCDay = function() {
            return this.dt.toUTC().weekday % 7
        }
        ,
        e.prototype.getUTCFullYear = function() {
            return this.dt.toUTC().year
        }
        ,
        e.prototype.getUTCHours = function() {
            return this.dt.toUTC().hour
        }
        ,
        e.prototype.getUTCMilliseconds = function() {
            return this.dt.toUTC().millisecond
        }
        ,
        e.prototype.getUTCMinutes = function() {
            return this.dt.toUTC().minute
        }
        ,
        e.prototype.getUTCMonth = function() {
            return this.dt.toUTC().month - 1
        }
        ,
        e.prototype.getUTCSeconds = function() {
            return this.dt.toUTC().second
        }
        ,
        e.prototype.setMilliseconds = function(e) {
            return this.setter({
                millisecond: e
            }).millisecond
        }
        ,
        e.prototype.setSeconds = function(e, t) {
            return this.setter({
                second: e,
                millisecond: t
            }).second
        }
        ,
        e.prototype.setMinutes = function(e, t, n) {
            return this.setter({
                minute: e,
                second: t,
                millisecond: n
            }).minute
        }
        ,
        e.prototype.setHours = function(e, t, n, a) {
            return this.setter({
                hour: e,
                minute: t,
                second: n,
                millisecond: a
            }).hour
        }
        ,
        e.prototype.setDate = function(e) {
            return this.setter({
                day: e
            }).day
        }
        ,
        e.prototype.setMonth = function(e, t) {
            return e++,
            this.setter({
                month: e,
                day: t
            }).month - 1
        }
        ,
        e.prototype.setFullYear = function(e, t, n) {
            return this.setter({
                year: e,
                month: t,
                day: n
            }).year
        }
        ,
        e.prototype.setTime = function(e) {
            return this.dt = Mr.luxon.DateTime.fromMillis(e),
            this.dt.valueOf()
        }
        ,
        e.prototype.setTimezone = function(e) {
            e = kr(e),
            this.zone = e,
            this.dt = this.dt.setZone(e)
        }
        ,
        e.prototype.setUTCMilliseconds = function(e) {
            return 0
        }
        ,
        e.prototype.setUTCSeconds = function(e, t) {
            return 0
        }
        ,
        e.prototype.setUTCMinutes = function(e, t, n) {
            return 0
        }
        ,
        e.prototype.setUTCHours = function(e, t, n, a) {
            return 0
        }
        ,
        e.prototype.setUTCDate = function(e) {
            return 0
        }
        ,
        e.prototype.setUTCMonth = function(e, t) {
            return 0
        }
        ,
        e.prototype.setUTCFullYear = function(e, t, n) {
            return 0
        }
        ,
        e.prototype.toUTCString = function() {
            return ""
        }
        ,
        e.prototype.toTimeString = function() {
            return ""
        }
        ,
        e.prototype.toLocaleDateString = function() {
            return ""
        }
        ,
        e.prototype.toLocaleTimeString = function() {
            return ""
        }
        ,
        e.prototype.setter = function(e) {
            return this.dt = this.dt.set(e),
            this.dt
        }
        ,
        e
    }()
      , Mr = {
        luxon: le,
        parse: function(e, t) {
            return new wr(e,t.dataTimezone || t.displayTimezone)
        },
        createDate: function(e, t, n, a, s, i, r, o) {
            var l = e.displayTimezone;
            return ge(t) || pe(t) || fe(n) ? new wr(t,l) : new wr([t || 1970, n || 0, a || 1, s || 0, i || 0, r || 0, o || 0],l)
        }
    };
    function Er(e) {
        return e && "local" !== e ? e : Lr.moment.tz.guess()
    }
    var Nr = function() {
        function e(e, t) {
            this._mbsc = !0,
            this.timezone = Er(t),
            this.init(e)
        }
        return e.prototype.clone = function() {
            return new e(this,this.timezone)
        }
        ,
        e.prototype.createDate = function(e, t, n, a, s, i, r) {
            return Lr.createDate({
                displayTimezone: this.timezone
            }, e, t, n, a, s, i, r)
        }
        ,
        e.prototype[Symbol.toPrimitive] = function(e) {
            return this.m.toDate()[Symbol.toPrimitive](e)
        }
        ,
        e.prototype.toDateString = function() {
            return this.m.format("ddd MMM DD YYYY")
        }
        ,
        e.prototype.toISOString = function() {
            return this.m.toISOString()
        }
        ,
        e.prototype.toJSON = function() {
            return this.m.toISOString()
        }
        ,
        e.prototype.valueOf = function() {
            return this.m.valueOf()
        }
        ,
        e.prototype.getDate = function() {
            return this.m.date()
        }
        ,
        e.prototype.getDay = function() {
            return this.m.day()
        }
        ,
        e.prototype.getFullYear = function() {
            return this.m.year()
        }
        ,
        e.prototype.getHours = function() {
            return this.m.hours()
        }
        ,
        e.prototype.getMilliseconds = function() {
            return this.m.milliseconds()
        }
        ,
        e.prototype.getMinutes = function() {
            return this.m.minutes()
        }
        ,
        e.prototype.getMonth = function() {
            return this.m.month()
        }
        ,
        e.prototype.getSeconds = function() {
            return this.m.seconds()
        }
        ,
        e.prototype.getTime = function() {
            return this.m.valueOf()
        }
        ,
        e.prototype.getTimezoneOffset = function() {
            return this.m.utcOffset()
        }
        ,
        e.prototype.getUTCDate = function() {
            return this.utc().date()
        }
        ,
        e.prototype.getUTCDay = function() {
            return this.utc().day()
        }
        ,
        e.prototype.getUTCFullYear = function() {
            return this.utc().year()
        }
        ,
        e.prototype.getUTCHours = function() {
            return this.utc().hours()
        }
        ,
        e.prototype.getUTCMilliseconds = function() {
            return this.utc().milliseconds()
        }
        ,
        e.prototype.getUTCMinutes = function() {
            return this.utc().minutes()
        }
        ,
        e.prototype.getUTCMonth = function() {
            return this.utc().month()
        }
        ,
        e.prototype.getUTCSeconds = function() {
            return this.utc().seconds()
        }
        ,
        e.prototype.setMilliseconds = function(e) {
            return this.m.set({
                millisecond: e
            }).milliseconds()
        }
        ,
        e.prototype.setSeconds = function(e, t) {
            return this.m.set({
                seconds: e,
                milliseconds: t
            }).seconds()
        }
        ,
        e.prototype.setMinutes = function(e, t, n) {
            return this.m.set({
                minutes: e,
                seconds: t,
                milliseconds: n
            }).minutes()
        }
        ,
        e.prototype.setHours = function(e, t, n, a) {
            return this.m.set({
                hours: e,
                minutes: t,
                seconds: n,
                milliseconds: a
            }).hours()
        }
        ,
        e.prototype.setDate = function(e) {
            return this.m.set({
                date: e
            }).date()
        }
        ,
        e.prototype.setMonth = function(e, t) {
            return this.m.set({
                month: e,
                date: t
            }).month()
        }
        ,
        e.prototype.setFullYear = function(e, t, n) {
            return this.m.set({
                year: e,
                month: t,
                date: n
            }).year()
        }
        ,
        e.prototype.setTime = function(e) {
            return this.init(e),
            this.m.valueOf()
        }
        ,
        e.prototype.setTimezone = function(e) {
            this.timezone = Er(e),
            this.m.tz(this.timezone)
        }
        ,
        e.prototype.setUTCMilliseconds = function(e) {
            return 0
        }
        ,
        e.prototype.setUTCSeconds = function(e, t) {
            return 0
        }
        ,
        e.prototype.setUTCMinutes = function(e, t, n) {
            return 0
        }
        ,
        e.prototype.setUTCHours = function(e, t, n, a) {
            return 0
        }
        ,
        e.prototype.setUTCDate = function(e) {
            return 0
        }
        ,
        e.prototype.setUTCMonth = function(e, t) {
            return 0
        }
        ,
        e.prototype.setUTCFullYear = function(e, t, n) {
            return 0
        }
        ,
        e.prototype.toUTCString = function() {
            return ""
        }
        ,
        e.prototype.toTimeString = function() {
            return ""
        }
        ,
        e.prototype.toLocaleDateString = function() {
            return ""
        }
        ,
        e.prototype.toLocaleTimeString = function() {
            return ""
        }
        ,
        e.prototype.init = function(e) {
            var t = Lr.moment.tz
              , n = fe(e) || pe(e) || _e(e) || me(e) ? e : +e
              , a = pe(e) && hs.test(e);
            this.m = a ? t(n, "HH:mm:ss", this.timezone) : t(n, this.timezone)
        }
        ,
        e.prototype.utc = function() {
            return this.m.clone().utc()
        }
        ,
        e
    }()
      , Lr = {
        moment: le,
        parse: function(e, t) {
            return new Nr(e,t.dataTimezone || t.displayTimezone)
        },
        createDate: function(e, t, n, a, s, i, r, o) {
            var l = e.displayTimezone;
            return ge(t) || pe(t) || fe(n) ? new Nr(t,l) : new Nr([t || 1970, n || 0, a || 1, s || 0, i || 0, r || 0, o || 0],l)
        }
    }
      , Ir = 1;
    function Hr() {
        return "mbsc_" + Ir++
    }
    function Or(e, t, n, a, s, i, r, o, l) {
        var c = t.color || o && o.color
          , h = new Date(n)
          , d = t.start || t.date
          , u = d ? Ss(d, e) : null
          , m = t.end ? Ss(t.end, e) : null
          , _ = _s(e, u, m)
          , p = u && _ && !bs(u, _)
          , v = !p || bs(u, h)
          , f = !p || bs(_, h)
          , g = t.recurring ? t.original.start : t.start
          , y = t.allDay || !g || !l && p && !v && !f
          , b = t.title || t.text
          , x = At(b || "");
        return {
            allDay: t.allDay || !g,
            allDayText: y ? i : "",
            color: c,
            end: !y && (f || l) && m ? ws(s, m) : "",
            endDate: m || (u ? new Date(u) : null),
            html: b,
            id: t.id,
            isMultiDay: p,
            lastDay: !y && p && f ? r : "",
            original: t,
            position: {},
            resource: t.resource,
            start: !y && (v || l) && u ? ws(s, u) : "",
            startDate: u,
            style: {
                background: c,
                color: a && c ? Ft(c) : ""
            },
            title: x,
            uid: t.id + (t.recurring ? "_" + t.nr : "")
        }
    }
    function Pr(e) {
        var t = [];
        if (e)
            for (var n = 0, a = e; n < a.length; n++) {
                var s = a[n];
                s.id === le && (s.id = Hr()),
                t.push(s)
            }
        return t
    }
    function Yr(e, t, n, a, s, i, r, o) {
        if ("start-end" === r) {
            var l = bi(n, e, t, s, i)
              , c = bi(a, e, t, s, i);
            if (l)
                return l;
            if (c)
                return c
        } else
            for (var h = o ? a : vs(Ns(a, 1)), d = vs(n); d < h; d.setDate(d.getDate() + 1)) {
                var u = bi(d, e, t, s, i);
                if (u)
                    return u
            }
        return !1
    }
    var Vr = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t.state = {
                activeDate: le,
                eventList: [],
                popoverList: [],
                selectedDate: le
            },
            t._pageLoad = 0,
            t._selectedDates = {},
            t._onScroll = we((function() {
                if (!t._isListScrolling)
                    for (var e in t._listDays)
                        if (t._listDays[e]) {
                            var n = t._listDays[e];
                            if (n.offsetTop + n.offsetHeight - t._list.scrollTop > 0) {
                                +e !== t._selected && (t._shouldSkipScroll = !0,
                                t.setState({
                                    selectedDate: +e
                                }),
                                t._selectedChange(new Date(+e)));
                                break
                            }
                        }
            }
            )),
            t._isListScrolling = 0,
            t._remote = 0,
            t._onWeekDayClick = function(e) {
                e !== t._selected && (t._skipScheduleScroll = !0,
                t.setState({
                    selectedDate: e
                }),
                t._selectedChange(new Date(e)))
            }
            ,
            t._onDayClick = function(e) {
                var n = +e.date
                  , a = ps(e.date)
                  , s = t.state
                  , i = ti(t._eventMap[a], t.s.eventOrder)
                  , r = t._showEventPopover
                  , o = r === le ? !t._showEventLabels && !t._showEventList && !t._showSchedule : r
                  , l = !1 !== r && t._moreLabelClicked
                  , c = (o || l) && (!s.showPopover || s.showPopover && n !== s.popoverDate) && i && i.length > 0
                  , h = {
                    selectedDate: n
                };
                e.events = i,
                t.setState(h),
                t._hook("onCellClick", e),
                t._moreLabelClicked = !1,
                n !== t._selected && (t._skipScheduleScroll = !0,
                t._selectedChange(e.date)),
                c && setTimeout((function() {
                    t._anchor = e.target,
                    t._popoverClass = t._popoverClass.replace(" mbsc-popover-hidden", ""),
                    t.setState({
                        popoverDate: n,
                        popoverList: i.map((function(e) {
                            return t._getEventData(e, n)
                        }
                        )),
                        showPopover: !0
                    })
                }
                ))
            }
            ,
            t._onActiveChange = function(e) {
                var n = e.date
                  , a = {
                    activeDate: n
                };
                t._active = n,
                t._skipScheduleScroll = e.pageChange,
                (e.pageChange || e.today) && (a.selectedDate = n,
                t._selectedChange(new Date(n))),
                t.setState(a)
            }
            ,
            t._onGestureStart = function(e) {
                t._hidePopover()
            }
            ,
            t._onDayDoubleClick = function(e) {
                t._dayClick("onCellDoubleClick", e)
            }
            ,
            t._onDayRightClick = function(e) {
                t._dayClick("onCellRightClick", e)
            }
            ,
            t._onCellHoverIn = function(e) {
                e.events = t._eventMap[ps(e.date)],
                t._hook("onCellHoverIn", e)
            }
            ,
            t._onCellHoverOut = function(e) {
                e.events = t._eventMap[ps(e.date)],
                t._hook("onCellHoverOut", e)
            }
            ,
            t._onEventClick = function(e) {
                !1 !== t._eventClick("onEventClick", e) && t._hidePopover()
            }
            ,
            t._onEventDoubleClick = function(e) {
                t._eventClick("onEventDoubleClick", e)
            }
            ,
            t._onEventRightClick = function(e) {
                t._eventClick("onEventRightClick", e)
            }
            ,
            t._onLabelClick = function(e) {
                t._hook("onLabelClick", e),
                t._labelClick("onEventClick", e),
                e.label || (t._moreLabelClicked = !0)
            }
            ,
            t._onLabelDoubleClick = function(e) {
                t._labelClick("onEventDoubleClick", e)
            }
            ,
            t._onLabelRightClick = function(e) {
                t._labelClick("onEventRightClick", e)
            }
            ,
            t._onCellClick = function(e) {
                t._cellClick("onCellClick", e)
            }
            ,
            t._onCellDoubleClick = function(e) {
                t._cellClick("onCellDoubleClick", e)
            }
            ,
            t._onCellRightClick = function(e) {
                t._cellClick("onCellRightClick", e)
            }
            ,
            t._onPageChange = function(e) {
                setTimeout((function() {
                    t._hidePopover()
                }
                )),
                t._isPageChange = !0,
                t._hook("onPageChange", e)
            }
            ,
            t._onPageLoading = function(e) {
                var n = t.s
                  , a = As(t._events, e.viewStart, e.viewEnd, n);
                t._colorsMap = As(n.colors, e.viewStart, e.viewEnd, n),
                t._invalidsMap = As(n.invalid, e.viewStart, e.viewEnd, n, !0),
                t._validsMap = As(n.valid, e.viewStart, e.viewEnd, n, !0),
                t._eventMap = a,
                t._firstDay = ys(e.firstDay, n, t._firstWeekDay),
                t._lastDay = e.lastDay,
                n.labels || !t._showEventLabels && !t._showEventCount ? n.marked || (e.inst._marksMap = a) : e.inst._labelsMap = a,
                e.viewChanged && t._hook("onPageLoading", e)
            }
            ,
            t._onPageLoaded = function(e) {
                t._shouldAnimateScroll = t._isPageChange,
                t._isPageChange = !1;
                var n = t._showEventList || t._showSchedule || t._showTimeline
                  , a = t._showSchedule ? t._scheduleType : t._showTimeline ? t._timelineType : t._eventListType;
                if (n && (!t._showCalendar || "day" !== a)) {
                    var s = t.s
                      , i = e.month
                      , r = t._showEventList && i && "month" === a
                      , o = r ? i : e.firstDay
                      , l = r ? s.getDate(s.getYear(i), s.getMonth(i) + t._eventListSize, 1) : e.lastDay;
                    t._setEventList(o, l)
                }
                t._hook("onPageLoaded", e)
            }
            ,
            t._onPopoverClose = function() {
                t._hidePopover()
            }
            ,
            t._onResize = function(e) {
                var n;
                if (t._showEventList && v) {
                    var a = e.target
                      , s = a.offsetHeight
                      , i = a.getBoundingClientRect().top;
                    n = s - t._list.getBoundingClientRect().top + i > 170
                }
                t.setState({
                    height: e.height,
                    isListScrollable: n,
                    width: e.width
                })
            }
            ,
            t._getDragDates = function(e, n, a) {
                for (var s = {}, i = t._firstWeekDay, r = _s(t.s, e, n), o = vs(Ns(r, 1)), l = vs(e); l < o; l.setDate(l.getDate() + 1)) {
                    var c = l.getDay()
                      , h = i - c > 0 ? 7 : 0;
                    bs(e, l) || c === i ? s[ps(l)] = {
                        event: a,
                        width: 100 * Math.min(gs(l, r) + 1, 7 + i - c - h)
                    } : s[ps(l)] = {}
                }
                return s
            }
            ,
            t._onLabelUpdateModeOn = function(e) {
                var n = e.create ? t._tempEvent : e.data;
                if (n) {
                    var a = Ss(n.start)
                      , s = Ss(n.end || a);
                    t.setState({
                        isTouchDrag: !0,
                        labelDragData: {
                            draggedEvent: n,
                            originDates: e.external ? le : t._getDragDates(a, s, n)
                        }
                    })
                }
            }
            ,
            t._onLabelUpdateModeOff = function(e) {
                t.setState({
                    isTouchDrag: !1,
                    labelDragData: le
                })
            }
            ,
            t._onLabelUpdateStart = function(e) {
                var n = t.s
                  , a = t._el
                  , s = t._showWeekNumbers ? a.querySelector(".mbsc-calendar-week-nr").getBoundingClientRect().width : 0
                  , i = a.querySelectorAll(".mbsc-calendar-slide")[1].getBoundingClientRect()
                  , r = a.querySelector(".mbsc-calendar-week-days").getBoundingClientRect();
                t._areaTop = r.top + r.height,
                t._areaLeft = i.left + (n.rtl ? 0 : s),
                t._areaBottom = i.top + i.height,
                t._areaRight = t._areaLeft + i.width - (n.rtl ? s : 0),
                t._calCellHeight = (t._areaBottom - t._areaTop) / ("month" === t._calendarType ? 6 : t._calendarSize),
                t._calCellWidth = (t._areaRight - t._areaLeft) / 7;
                var l = ke((n.rtl ? t._areaRight - e.endX : e.endX - t._areaLeft) / t._calCellWidth)
                  , c = ke((e.endY - t._areaTop) / t._calCellHeight)
                  , h = Ns(t._firstDay, 7 * c + l)
                  , d = Cs(n, h.getFullYear(), h.getMonth(), h.getDate())
                  , u = Ns(d, 1)
                  , m = n.exclusiveEndDates ? u : Cs(n, +u - 1);
                if (e.create) {
                    var _ = n.extendDefaultEvent ? n.extendDefaultEvent({
                        start: d
                    }) : le;
                    t._tempEvent = o({
                        allDay: !0,
                        end: m,
                        id: Hr(),
                        start: d,
                        title: n.newEventText
                    }, e.event, _)
                }
            }
            ,
            t._onLabelUpdateMove = function(e) {
                var n = t.s
                  , a = e.create ? t._tempEvent : e.data;
                if (e.endY > t._areaTop && e.endY < t._areaBottom && e.endX > t._areaLeft && e.endX < t._areaRight) {
                    var s = t.state.labelDragData
                      , i = ke((n.rtl ? t._areaRight - e.endX : e.endX - t._areaLeft) / t._calCellWidth)
                      , r = ke((n.rtl ? t._areaRight - e.startX : e.startX - t._areaLeft) / t._calCellWidth)
                      , l = ke((e.endY - t._areaTop) / t._calCellHeight)
                      , c = ke((e.startY - t._areaTop) / t._calCellHeight)
                      , h = 7 * (l - c) + (i - r);
                    if (i !== t._tempDay || l !== t._tempWeek) {
                        var d = Ss(a.start, n)
                          , u = Ss(a.end, n) || d
                          , m = o({}, a)
                          , _ = d
                          , p = u;
                        if (e.external) {
                            var v = us(d)
                              , f = +u - +d;
                            _ = Cs(n, +Ns(t._firstDay, 7 * l + i) + v),
                            p = Cs(n, +_ + f)
                        } else if (e.drag)
                            _ = Ns(d, h),
                            p = Ns(u, h);
                        else {
                            var g = n.rtl ? -1 : 1
                              , y = e.create ? l === c ? e.deltaX * g > 0 : h > 0 : "end" === e.direction
                              , b = gs(d, u);
                            y ? p = Ns(u, Math.max(-b, h)) : _ = Ns(d, Math.min(b, h)),
                            p < _ && (y ? p = Cs(n, _) : _ = Cs(n, p))
                        }
                        m.start = _,
                        m.end = p,
                        /mbsc-popover-hidden/.test(t._popoverClass) || (t._popoverClass = t._popoverClass + " mbsc-popover-hidden"),
                        t.setState({
                            labelDragData: {
                                draggedDates: t._getDragDates(_, p, m),
                                draggedEvent: m,
                                originDates: s && s.originDates
                            }
                        }),
                        t._tempDay = i,
                        t._tempWeek = l
                    }
                }
            }
            ,
            t._onLabelUpdateEnd = function(e) {
                var n = t.state
                  , a = e.create
                  , s = n.labelDragData || {}
                  , i = a ? t._tempEvent : e.data
                  , r = s.draggedEvent || i
                  , o = Ss(i.start)
                  , l = Ss(i.end)
                  , c = Ss(r.start)
                  , h = Ss(r.end)
                  , d = a || +o != +c || +l != +h
                  , u = {
                    allDay: i.allDay,
                    endDate: h,
                    original: i,
                    startDate: c
                }
                  , m = !d || t._onEventDragEnd({
                    action: e.action || (n.labelDragData ? "drag" : "click"),
                    collision: Yr(t._invalidsMap, t._validsMap, c, h, t._minDate, t._maxDate, t.s.invalidateEvent, t.s.exclusiveEndDates),
                    create: a,
                    domEvent: e.domEvent,
                    event: u,
                    source: "calendar"
                })
                  , _ = n.isTouchDrag && (!a || m);
                t.setState({
                    isTouchDrag: _,
                    labelDragData: _ ? {
                        draggedEvent: r,
                        originDates: m ? t._getDragDates(c, h, u.original) : s.originDates
                    } : {}
                }),
                e.drag && t._hidePopover(),
                t._tempWeek = -1,
                t._tempDay = -1
            }
            ,
            t._onEventDragEnd = function(e) {
                var n = e.action
                  , a = e.resource
                  , s = e.collision
                  , i = e.create
                  , r = e.source
                  , l = e.event
                  , c = l.original
                  , h = c.recurring ? c.original : c
                  , d = o({}, h)
                  , u = o({}, h)
                  , m = l.startDate
                  , _ = l.endDate
                  , p = l.allDay
                  , v = u.recurring
                  , f = m
                  , g = _
                  , y = t.s
                  , b = y.dataTimezone || y.displayTimezone
                  , x = y.timezonePlugin;
                if (b && x) {
                    if (os(m)) {
                        var D = m.clone();
                        D.setTimezone(b),
                        f = D.toISOString()
                    }
                    if (os(_)) {
                        var T = _.clone();
                        T.setTimezone(b),
                        g = T.toISOString()
                    }
                }
                v ? u.recurringException = zs(u.recurringException).concat([c.start]) : (u.allDay = p,
                u.start = f,
                u.end = g,
                a !== le && (u.resource = a));
                var C = !1
                  , S = v ? o({}, h) : h;
                if ((i || v) && (v && delete S.recurring,
                (v || S.id === le) && (S.id = Hr()),
                a !== le && (S.resource = a),
                S.start = f,
                S.end = g,
                S.allDay = p,
                C = !1 !== t._hook("onEventCreate", {
                    action: n,
                    domEvent: e.domEvent,
                    event: S,
                    source: r
                }),
                !1 !== s && (C = !1,
                t._hook("onEventCreateFailed", {
                    action: n,
                    event: S,
                    invalid: s,
                    source: r
                }))),
                i && !v || (C = !1 !== t._hook("onEventUpdate", {
                    domEvent: e.domEvent,
                    event: u,
                    oldEvent: d,
                    source: r
                }),
                !1 !== s && (C = !1,
                t._hook("onEventUpdateFailed", {
                    event: u,
                    invalid: s,
                    oldEvent: d,
                    source: r
                }))),
                C && ((i || v) && (t._events.push(S),
                t._triggerCreated = {
                    action: n,
                    event: S,
                    source: r
                }),
                i && !v || (v ? (l.id = S.id,
                l.original = S,
                h.recurringException = u.recurringException) : (h.start = f,
                h.end = g,
                h.allDay = p,
                a !== le && (h.resource = a)),
                t._triggerUpdated = {
                    event: h,
                    oldEvent: d,
                    source: r
                }),
                t._refresh = !0,
                "calendar" !== r)) {
                    var k = void 0
                      , w = void 0;
                    t._showCalendar && "day" === t._scheduleType ? w = vs(Ns(k = new Date(t._selected), 1)) : (k = t._firstDay,
                    w = t._lastDay),
                    t._eventMap = As(t._events, k, w, y),
                    t.forceUpdate()
                }
                return C
            }
            ,
            t._onExternalDrag = function(e) {
                if (t.s.externalDrop && t._showCalendar)
                    switch (e.eventName) {
                    case "onDragModeOff":
                        t._onLabelUpdateModeOff(e);
                        break;
                    case "onDragModeOn":
                        t._onLabelUpdateModeOn(e);
                        break;
                    case "onDragStart":
                        t._onLabelUpdateStart(e);
                        break;
                    case "onDragMove":
                        var n = e.clone;
                        e.endY > t._areaTop && e.endY < t._areaBottom && e.endX > t._areaLeft && e.endX < t._areaRight ? (n.style.display = "none",
                        t._onLabelUpdateMove(e),
                        t._onCalendar = !0) : t._onCalendar && (n.style.display = "table",
                        t.setState({
                            labelDragData: {}
                        }),
                        t._tempWeek = -1,
                        t._tempDay = -1,
                        t._onCalendar = !1);
                        break;
                    case "onDragEnd":
                        e.endY > t._areaTop && e.endY < t._areaBottom && e.endX > t._areaLeft && e.endX < t._areaRight ? t._onLabelUpdateEnd(e) : t.setState({
                            labelDragData: le
                        })
                    }
            }
            ,
            t._onEventDelete = function(e) {
                var n = e.event;
                if (t.s.dragToCreate || t.s.clickToCreate)
                    if (n.recurring) {
                        var a = n.original
                          , s = o({}, a)
                          , i = o({}, a);
                        i.recurringException = zs(i.recurringException).concat([n.start]),
                        !1 !== t._hook("onEventUpdate", {
                            domEvent: e.domEvent,
                            event: i,
                            oldEvent: s
                        }) && (a.recurringException = i.recurringException,
                        t._triggerUpdated = {
                            event: a,
                            oldEvent: s,
                            source: e.source
                        }),
                        t.refresh()
                    } else {
                        !1 !== t._hook("onEventDelete", {
                            domEvent: e.domEvent,
                            event: n
                        }) && (t._events = t._events.filter((function(e) {
                            return e.id !== n.id
                        }
                        )),
                        t._triggerDeleted = {
                            event: n,
                            source: e.source
                        },
                        t.refresh())
                    }
            }
            ,
            t
        }
        return r(t, e),
        t.prototype.addEvent = function(e) {
            for (var t = [], n = 0, a = Pr(me(e) ? e : [e]); n < a.length; n++) {
                var s = a[n];
                t.push("" + s.id),
                this._events.push(s)
            }
            return this.refresh(),
            t
        }
        ,
        t.prototype.getEvents = function() {
            return this._events.slice()
        }
        ,
        t.prototype.setEvents = function(e) {
            for (var t = [], n = Pr(e), a = 0, s = n; a < s.length; a++) {
                var i = s[a];
                t.push("" + i.id)
            }
            return this._events = n,
            this.refresh(),
            t
        }
        ,
        t.prototype.removeEvent = function(e) {
            for (var t = me(e) ? e : [e], n = this._events, a = n.length, s = 0, i = t; s < i.length; s++)
                for (var r = i[s], o = !1, l = 0; !o && l < a; ) {
                    var c = n[l];
                    c.id !== r && c.id !== r.id || (o = !0,
                    n.splice(l, 1)),
                    l++
                }
            this.refresh()
        }
        ,
        t.prototype.navigate = function(e, t) {
            var n = +Ss(e);
            n !== this._selected && (this._shouldAnimateScroll = !!t,
            this.s.selectedDate === le ? this.setState({
                selectedDate: n
            }) : this._selectedChange(e))
        }
        ,
        t.prototype.updateEvent = function(e) {
            for (var t = me(e) ? e : [e], n = this._events, a = n.length, s = 0, i = t; s < i.length; s++)
                for (var r = i[s], o = !1, l = 0; !o && l < a; ) {
                    n[l].id === r.id && (o = !0,
                    n.splice(l, 1, r)),
                    l++
                }
            this.refresh()
        }
        ,
        t.prototype.refresh = function() {
            this._refresh = !0,
            this.forceUpdate()
        }
        ,
        t.prototype._isToday = function(e) {
            return bs(new Date(e), new Date)
        }
        ,
        t.prototype._render = function(e, t) {
            var n, a, s = this, i = this._prevS, r = this._showDate, o = e.displayTimezone !== i.displayTimezone || e.dataTimezone !== i.dataTimezone, l = !1;
            if (this._colorEventList = e.eventTemplate === le && e.renderEvent === le && e.colorEventList,
            e.exclusiveEndDates === le && (e.exclusiveEndDates = !!e.displayTimezone),
            ve(e.min) ? this._minDate = -1 / 0 : i.min !== e.min && (this._minDate = +Ss(e.min)),
            ve(e.max) ? this._maxDate = 1 / 0 : i.max !== e.max && (this._maxDate = +Ss(e.max)),
            e.selectedDate !== le ? a = +Ss(e.selectedDate) : (this._defaultDate || (this._defaultDate = +(e.defaultSelectedDate !== le ? Ss(e.defaultSelectedDate) : new Date)),
            a = t.selectedDate || this._defaultDate),
            this.eventList = t.eventList,
            e.data !== i.data && (this._events = Pr(e.data),
            this._refresh = !0),
            (e.invalid !== i.invalid || o) && (this._refresh = !0),
            JSON.stringify(e.view) !== JSON.stringify(i.view)) {
                var c = {
                    c: "eventcalendar",
                    eventListSize: this._eventListSize,
                    eventListType: this._eventListType,
                    firstDay: e.firstDay,
                    resourcesLength: e.resources ? e.resources.length : 0,
                    scheduleEndDay: this._scheduleEndDay,
                    scheduleEndTime: this._scheduleEndTime,
                    scheduleStartDay: this._scheduleStartDay,
                    scheduleStartTime: this._scheduleStartTime,
                    scheduleTimeCellStep: this._scheduleTimeCellStep,
                    scheduleTimeLabelStep: this._scheduleTimeLabelStep,
                    scheduleType: this._scheduleType,
                    showCalendar: this._showCalendar,
                    showEventCount: this._showEventCount,
                    showEventLabels: this._showEventLabels,
                    showEventList: this._showEventList,
                    showMarked: !!e.marked,
                    showSchedule: this._showSchedule,
                    showScheduleDays: this._showScheduleDays,
                    timelineEndDay: this._timelineEndDay,
                    timelineEndTime: this._timelineEndTime,
                    timelineStartTime: this._timelineStartTime,
                    timelineTimeCellStep: this._timelineTimeCellStep,
                    timelineTimeLabelStep: this._timelineTimeLabelStep,
                    timelineType: this._timelineType,
                    v: Vn,
                    view: e.view
                };
                this._remote++,
                ar(this),
                ir("remote", this, c, (function(e) {
                    if (s._remote--,
                    !s._remote) {
                        for (var t in e)
                            e.hasOwnProperty(t) && (s[t] = e[t]);
                        sr(e.notification),
                        s.forceUpdate()
                    }
                }
                ), "comp_" + this._uid)
            }
            if (this._showDate = this._showSchedule && "day" === this._scheduleType || this._showEventList && "day" === this._eventListType,
            this._firstWeekDay = this._showSchedule ? this._scheduleStartDay : this._showTimeline ? this._timelineStartDay : e.firstDay,
            (this._refresh || e.locale !== i.locale || e.theme !== i.theme) && (l = !0,
            this._pageLoad++),
            e.resources !== i.resources && (this._resourcesMap = (e.resources || []).reduce((function(e, t) {
                return e[t.id] = t,
                e
            }
            ), {})),
            a !== this._selectedDateTime) {
                var h = this._showCalendar ? +xi(new Date(a), e, this._minDate, this._maxDate, le, le, 1) : ue(a, this._minDate, this._maxDate);
                a !== h && (a = h,
                setTimeout((function() {
                    s._selectedChange(new Date(a))
                }
                ))),
                this._selectedDateTime = a,
                this._shouldScrollSchedule = !this._skipScheduleScroll
            }
            (n = +vs(new Date(a))) === this._selected && r === this._showDate && e.locale === i.locale && i.dateFormatLong === e.dateFormatLong || (this._selectedDateHeader = this._showDate ? ws(e.dateFormatLong, new Date(n), e) : ""),
            n !== this._selected && (this._shouldScroll = !this._isPageChange && !this._shouldSkipScroll,
            this._shouldAnimateScroll = this._shouldAnimateScroll !== le ? this._shouldAnimateScroll : this._selected !== le,
            this._selected = n,
            this._selectedDates = {},
            this._selectedDates[n] = !0,
            this._active = n,
            l = !0),
            l && this._showCalendar && ("day" === this._eventListType || "day" === this._scheduleType || "day" === this._timelineType) && this._setEventList(new Date(n), vs(new Date(n + rs))),
            this._refresh = !1,
            this._cssClass = this._className + " mbsc-eventcalendar" + (this._showEventList ? " mbsc-eventcalendar-agenda" : "") + (this._showSchedule ? " mbsc-eventcalendar-schedule" : "") + (this._showTimeline ? " mbsc-eventcalendar-timeline" : "")
        }
        ,
        t.prototype._mounted = function() {
            this._unsubscribe = Dr(this._onExternalDrag)
        }
        ,
        t.prototype._updated = function() {
            var e = this;
            if (this._shouldScroll && this.state.isListScrollable && (this._scrollToDay(),
            this._shouldScroll = !1,
            this._shouldAnimateScroll = le),
            this._shouldLoadDays && (this._shouldLoadDays = !1,
            Xt(this._list.querySelectorAll("[mbsc-timestamp]"), (function(t) {
                e._listDays[t.getAttribute("mbsc-timestamp")] = t
            }
            ))),
            this._triggerCreated) {
                var t = this._triggerCreated
                  , n = "schedule" === t.source ? this._el.querySelector('.mbsc-schedule-event[data-id="' + t.event.id + '"]') : this._calendarView._body.querySelector('.mbsc-calendar-table-active .mbsc-calendar-label[data-id="' + t.event.id + '"]');
                this._hook("onEventCreated", o({}, this._triggerCreated, {
                    target: n
                })),
                this._triggerCreated = null
            }
            if (this._triggerUpdated) {
                var a = this._triggerUpdated;
                n = "schedule" === a.source ? this._el.querySelector('.mbsc-schedule-event[data-id="' + a.event.id + '"]') : this._calendarView._body.querySelector('.mbsc-calendar-table-active .mbsc-calendar-label[data-id="' + a.event.id + '"]');
                this._hook("onEventUpdated", o({}, this._triggerUpdated, {
                    target: n
                })),
                this._triggerUpdated = null
            }
            this._triggerDeleted && (this._hook("onEventDeleted", o({}, this._triggerDeleted)),
            this._triggerDeleted = null),
            this._shouldSkipScroll = !1,
            this._showSchedule && (this._shouldScrollSchedule = !1,
            this._skipScheduleScroll = !1)
        }
        ,
        t.prototype._destroy = function() {
            Tr(this._unsubscribe)
        }
        ,
        t.prototype._getAgendaEvents = function(e, t, n) {
            var a = this
              , s = []
              , i = this.s;
            if (n && this._showEventList)
                for (var r = function(e) {
                    var t = n[ps(e)];
                    if (t && t.length) {
                        var r = ti(t, i.eventOrder);
                        s.push({
                            date: ws(i.dateFormatLong || i.dateFormat, e, i),
                            events: r.map((function(t) {
                                return a._getEventData(t, +e)
                            }
                            )),
                            timestamp: +e
                        })
                    }
                }, o = vs(e); o < t; o.setDate(o.getDate() + 1))
                    r(o);
            return s
        }
        ,
        t.prototype._getEventData = function(e, t) {
            var n, a = this.s;
            if (!e.color && e.resource) {
                var s = me(e.resource) ? e.resource : [e.resource];
                n = (this._resourcesMap || {})[s[0]]
            }
            var i = Or(a, e, t, this._colorEventList, a.timeFormat, a.allDayText, a.toText, n);
            return i.html = this._safeHtml(i.html),
            i
        }
        ,
        t.prototype._setEventList = function(e, t) {
            var n = this;
            setTimeout((function() {
                n._eventListHTML = le,
                n._shouldScroll = !0,
                n._listDays = null,
                n._scrollToDay(0),
                n.setState({
                    eventList: n._getAgendaEvents(e, t, n._eventMap)
                })
            }
            ))
        }
        ,
        t.prototype._hidePopover = function() {
            this.setState({
                showPopover: !1
            })
        }
        ,
        t.prototype._scrollToDay = function(e) {
            var t = this;
            if (this._list) {
                var n = e
                  , a = void 0;
                if (e === le && this._listDays) {
                    var s = this._listDays[this._selected];
                    s && (n = s.offsetTop,
                    a = this._shouldAnimateScroll)
                }
                n !== le && (this._isListScrolling++,
                Rt(this._list, n, a, !1, (function() {
                    setTimeout((function() {
                        t._isListScrolling--
                    }
                    ), 150)
                }
                )))
            }
        }
        ,
        t.prototype._selectedChange = function(e) {
            this._emit("selectedDateChange", e),
            this._hook("onSelectedDateChange", {
                date: e
            })
        }
        ,
        t.prototype._cellClick = function(e, t) {
            this._hook(e, o({
                target: t.domEvent.currentTarget
            }, t))
        }
        ,
        t.prototype._dayClick = function(e, t) {
            var n = ps(t.date)
              , a = ti(this._eventMap[n], this.s.eventOrder);
            t.events = a,
            this._hook(e, t)
        }
        ,
        t.prototype._labelClick = function(e, t) {
            t.label && this._hook(e, {
                date: t.date,
                domEvent: t.domEvent,
                event: t.label,
                source: "calendar"
            })
        }
        ,
        t.prototype._eventClick = function(e, t) {
            return t.date = new Date(t.date),
            this._hook(e, t)
        }
        ,
        t.defaults = o({}, Js, {
            actionableEvents: !0,
            allDayText: "All-day",
            data: [],
            dragTimeStep: 15,
            newEventText: "New event",
            noEventsText: "No events",
            showControls: !0,
            view: {
                calendar: {
                    type: "month"
                }
            }
        }),
        t._name = "Eventcalendar",
        t
    }(Bn);
    function Fr(e, t, n, a, s, i) {
        for (var r = "start-end" === s, o = i ? n : vs(Ns(n, 1)), l = 0, c = Object.keys(e); l < c.length; l++)
            for (var h = e[c[l]], d = vs(t); d < o; d.setDate(d.getDate() + 1)) {
                var u = h[ps(d)];
                if (u) {
                    if (u.allDay && (!r || bs(d, t) || bs(d, n)))
                        return u.allDay;
                    if (!a)
                        for (var m = 0, _ = u.invalids; m < _.length; m++) {
                            var p = _[m];
                            if (r) {
                                if (ms(p.startDate, p.endDate, t, t))
                                    return p.original;
                                if (ms(p.startDate, p.endDate, n, n))
                                    return p.original
                            } else if (ms(p.startDate, p.endDate, t, n))
                                return p.original
                        }
                }
            }
        return !1
    }
    function zr(e, t, n) {
        for (var a = !1, s = 0, i = e; s < i.length; s++) {
            for (var r = i[s], o = 0, l = !1, c = void 0, h = 0, d = r; h < d.length; h++) {
                for (var u = d[h], m = !1, _ = 0, p = u; _ < p.length; _++) {
                    var v = p[_];
                    ms(v.startDate, v.endDate, t.startDate, t.endDate) && (m = !0,
                    l = !0,
                    c ? n[t.uid] = n[t.uid] || o : n[v.uid] = o + 1)
                }
                m || c || (c = u),
                o++
            }
            l && (c ? c.push(t) : r.push([t]),
            a = !0)
        }
        a || (n[t.uid] = 0,
        e.push([[t]]))
    }
    function Rr(e) {
        return (e = Math.abs(Ce(e))) > 60 ? 60 * Ce(e / 60) : 60 % e == 0 ? e : [6, 10, 12, 15, 20, 30].reduce((function(t, n) {
            return Math.abs(n - e) < Math.abs(t - e) ? n : t
        }
        ))
    }
    function Ar(e, t, n, a, s) {
        return +e < +a && (e = a),
        +t > +s && (t = s),
        100 * (+t - +e - Math.max(gs(e, t), 0) * (rs - n)) / n
    }
    function Wr(e, t, n, a) {
        a && a > e && (e = a);
        var s = us(e);
        return t > s && (s = t),
        100 * (s - t) / n
    }
    function Ur(e, t) {
        e = e || {};
        var n = Object.keys(e)
          , a = {}
          , s = (t && 0 !== t.length ? t : [{
            id: "mbsc-def"
        }]).map((function(e) {
            return e.id
        }
        ));
        s.forEach((function(e) {
            a[e] = {}
        }
        ));
        for (var i = function(n) {
            for (var i = function(e) {
                var i = e.resource;
                (i !== le && t ? me(i) ? i : [i] : s).forEach((function(t) {
                    var s = a[t];
                    s && (s[n] || (s[n] = []),
                    s[n].push(e))
                }
                ))
            }, r = 0, o = e[n]; r < o.length; r++) {
                i(o[r])
            }
        }, r = 0, o = n; r < o.length; r++) {
            i(o[r])
        }
        return a
    }
    function Br(e, t) {
        return new Date(+new Date(e) + t)
    }
    var jr = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._invalids = {},
            t._onScroll = function() {}
            ,
            t._onEventDragModeOn = function(e) {
                var n = e.create ? t._tempEvent : e.event
                  , a = e.create ? t._tempResource : e.resource;
                t.setState({
                    dragData: {
                        draggedEvent: n,
                        originDates: e.external ? le : t._getDragDates(n, a),
                        resource: a
                    },
                    isTouchDrag: !0
                })
            }
            ,
            t._onEventDragModeOff = function() {
                t.setState({
                    dragData: le,
                    isTouchDrag: !1
                })
            }
            ,
            t._onEventDragStart = function(e) {
                var n = t.s
                  , a = t._isTimeline
                  , s = t._resources
                  , i = t._days * (a ? 1 : s.length)
                  , r = t._scrollCont
                  , l = n.dragTimeStep
                  , c = t._el.querySelector(a ? ".mbsc-timeline-grid" : ".mbsc-schedule-grid")
                  , h = c.getBoundingClientRect()
                  , d = r.getBoundingClientRect()
                  , u = e.startX
                  , m = e.startY
                  , _ = t._groupByResource
                  , p = _ ? t._days : s.length;
                t._gridLeft = h.left,
                t._gridRight = t._gridLeft + r.scrollWidth,
                t._gridTop = h.top,
                t._gridContTop = d.top,
                t._gridContBottom = d.bottom,
                t._gridContLeft = d.left,
                t._gridContRight = d.right,
                t._allDayTop = t._gridContTop,
                t._colWidth = (t._gridRight - t._gridLeft) / i,
                t._colHeight = a ? c.scrollHeight : h.height,
                t._rowHeight = t._colHeight / s.length,
                t._scrollY = 0,
                t._scrollX = 0;
                var v = n.rtl ? t._gridRight - u : u - t._gridLeft
                  , f = ue(m - t._gridTop, 8, t._colHeight - 9)
                  , g = ke(v / t._colWidth)
                  , y = ke(f / t._rowHeight)
                  , b = g;
                if (!a) {
                    var x = t._el.querySelector(".mbsc-schedule-all-day-wrapper")
                      , D = x && x.getBoundingClientRect();
                    t._allDayTop = D ? D.top : t._gridContTop,
                    y = _ ? ke(g / p) : g % p,
                    b = _ ? g % p : ke(g / p)
                }
                if (e.create) {
                    var T = Ns(t._firstDay, b)
                      , C = e.external || e.click ? t._stepCell : l * ss
                      , S = t._getGridTime(T, v, f, b, e.click ? t._stepCell / ss : l)
                      , k = Ls(Cs(n, +S + C), e.click ? 1 : l)
                      , w = s[y]
                      , M = w ? w.id : le
                      , E = n.extendDefaultEvent ? n.extendDefaultEvent({
                        resource: M,
                        start: S
                    }) : le
                      , N = o({
                        end: k,
                        id: Hr(),
                        start: S,
                        title: n.newEventText
                    }, e.event, E);
                    w && "mbsc-def" !== M && (N.resource = M),
                    n.exclusiveEndDates || us(k) || (N.end = Cs(n, +k - 1)),
                    !a && n.showAllDay && e.endY < t._gridContTop && (N.allDay = !0);
                    var L = t._getEventData(N, +T, w);
                    if (e.event) {
                        var I = +L.endDate - +L.startDate;
                        L.startDate = T,
                        L.endDate = new Date(+T + I),
                        L.allDay = !0
                    }
                    t._tempEvent = L,
                    t._tempResource = M
                }
            }
            ,
            t._onEventDragMove = function(e) {
                clearTimeout(t._scrollTimer);
                var n = t.s
                  , a = t._isTimeline
                  , s = t.state.dragData
                  , i = n.dragTimeStep
                  , r = n.timeFormat
                  , l = e.startX
                  , c = ue(e.endX, t._gridContLeft, t._gridContRight - 1)
                  , h = ue(e.endY, t._gridContTop, t._gridContBottom - 1)
                  , d = h - e.startY + t._scrollY
                  , u = n.rtl ? l - c + t._scrollX : c - l + t._scrollX
                  , m = a ? u : d
                  , _ = a ? t._colWidth : t._colHeight - 16
                  , p = ue(n.rtl ? t._gridRight + t._scrollX - c : c - t._gridLeft + t._scrollX, 0, t._gridRight - t._gridLeft - 1)
                  , v = ue(h - t._gridTop + t._scrollY, 8, t._colHeight - 9)
                  , f = ke((n.rtl ? t._gridRight - l : l - t._gridLeft) / t._colWidth)
                  , g = ke(p / t._colWidth)
                  , y = n.showAllDay && e.endY < t._gridContTop
                  , b = t._scrollCont
                  , x = f
                  , D = g
                  , T = ke(v / t._rowHeight)
                  , C = !1
                  , S = t._gridContBottom - e.endY
                  , k = e.endY - t._gridContTop
                  , w = e.endX - t._gridContLeft
                  , M = t._gridContRight - e.endX;
                if (S < 30 && b.scrollTop < b.scrollHeight - b.clientHeight && (b.scrollTop += 5,
                t._scrollY += 5,
                C = !0),
                k < 30 && !y && b.scrollTop > 0 && (b.scrollTop -= 5,
                t._scrollY -= 5,
                C = !0),
                w < 30 && b.scrollLeft > 0 && (b.scrollLeft -= 5,
                t._scrollX -= 5,
                C = !0),
                M < 30 && b.scrollLeft < b.scrollWidth - b.clientWidth && (b.scrollLeft += 5,
                t._scrollX += 5,
                C = !0),
                C && (t._scrollTimer = setTimeout((function() {
                    t._onEventDragMove(e)
                }
                ), 20)),
                !a) {
                    var E = t._groupByResource
                      , N = E ? t._days : t._resources.length;
                    x = E ? f % N : ke(f / N),
                    D = E ? g % N : ke(g / N),
                    T = E ? ke(g / N) : g % N
                }
                var L, I = e.create ? t._tempEvent : e.event, H = I.startDate, O = I.endDate, P = t._time, Y = ke(P * m / _), V = t._resources[T].id, F = I.allDay, z = +O - +H, R = H, A = O, W = D - x;
                if (e.drag || e.external) {
                    if (F = y,
                    I.allDay && (!a && !y || a && e.external)) {
                        var U = vs(Ns(H, W));
                        R = t._getGridTime(U, p, v, D, i)
                    } else
                        R = Ls(Cs(n, a ? +H + Y : +Ns(H, W) + (F ? 0 : Y)), i);
                    999 === O.getMilliseconds() && (z += 1),
                    A = Cs(n, +R + z)
                } else {
                    var B = a ? 0 : g - f
                      , j = e.create ? B ? B > 0 : m > 0 : "end" === e.direction
                      , X = gs(H, O)
                      , J = e.resource || s && s.resource || V;
                    J !== V && s && s.draggedEvent && (W = gs(s.draggedEvent.startDate, s.draggedEvent.endDate) * (j ? 1 : -1)),
                    j ? a ? A = Ls(Cs(n, +O + Y + W * (rs - P)), i) : (A = Ls(Cs(n, +(L = Ns(O, Math.max(-X, W))) + (F ? 0 : Y)), i),
                    !F && (us(A) > t._endTime + 1 || A >= Ns(vs(L), 1)) && (A = Cs(n, +vs(L) + t._endTime + 1))) : a ? R = Ls(Cs(n, +H + Y + W * (rs - P)), i) : (R = Ls(Cs(n, +(L = Ns(H, Math.min(X, W))) + (F ? 0 : Y)), i),
                    !F && (us(R) < t._startTime || R < vs(L)) && (R = Cs(n, +vs(L) + t._startTime))),
                    V = J,
                    F && A < R && (j ? A = Cs(n, R) : R = Cs(n, A)),
                    !F && (A < R || Math.abs(+A - +R) < 9e5) && (j ? A = Cs(n, +R + 9e5) : R = Cs(n, +A - 9e5))
                }
                if (n.exclusiveEndDates || us(A) || (A = Cs(n, +A - 1)),
                t._tempStart !== +R || t._tempEnd !== +A || t._tempAllDay !== F || t._tempResource !== V) {
                    var K = o({}, I);
                    K.startDate = R,
                    K.endDate = A,
                    K.start = ws(r, R),
                    K.end = ws(r, A),
                    K.allDay = F,
                    t._tempStart = +R,
                    t._tempEnd = +A,
                    t._tempAllDay = F,
                    t._tempResource = V,
                    t.setState({
                        dragData: {
                            draggedDates: t._getDragDates(K, V),
                            draggedEvent: K,
                            originDates: s && s.originDates,
                            resource: V
                        }
                    })
                }
            }
            ,
            t._onEventDragEnd = function(e) {
                clearTimeout(t._scrollTimer);
                var n = t.s
                  , a = e.create
                  , s = t.state
                  , i = s.dragData;
                if (a && !i && ((i = {}).draggedEvent = t._tempEvent),
                i && i.draggedEvent) {
                    var r = e.event
                      , o = i.draggedEvent
                      , l = o.startDate
                      , c = o.endDate
                      , h = o.allDay
                      , d = o.original
                      , u = d.resource
                      , m = e.resource
                      , _ = i.resource
                      , p = a || +l != +r.startDate || +c != +r.endDate || h !== r.allDay || m !== _
                      , v = u
                      , f = {};
                    if (m !== _ && !t._isSingleResource)
                        if (me(u) && u.length && _) {
                            var g = u.indexOf(m);
                            -1 === u.indexOf(_) && (v = u.slice()).splice(g, 1, _)
                        } else
                            v = _;
                    if (v && n.resources)
                        if (me(v))
                            for (var y = 0, b = v; y < b.length; y++) {
                                var x = b[y];
                                t._invalids[x] && (f[x] = t._invalids[x])
                            }
                        else
                            t._invalids[v] && (f[v] = t._invalids[v] || {});
                    else
                        f = t._invalids;
                    var D = !p || n.onEventDragEnd({
                        action: e.action || (s.dragData ? "drag" : "click"),
                        collision: Fr(f, l, c, h, n.invalidateEvent, n.exclusiveEndDates),
                        create: a,
                        domEvent: e.domEvent,
                        event: o,
                        resource: v,
                        source: t._isTimeline ? "timeline" : "schedule"
                    })
                      , T = s.isTouchDrag && (!a || D);
                    if (D && T && m !== _ && !d.color) {
                        var C = Ne(t._resources, (function(e) {
                            return e.id === _
                        }
                        ))
                          , S = C && C.color;
                        S && (o.style.background = S,
                        o.style.color = Ft(S))
                    }
                    t.setState({
                        dragData: T ? {
                            draggedEvent: o,
                            originDates: D ? t._getDragDates(o, _) : i.originDates
                        } : le,
                        isTouchDrag: T
                    }),
                    t._tempStart = 0,
                    t._tempEnd = 0,
                    t._tempAllDay = le
                }
            }
            ,
            t._onExternalDrag = function(e) {
                if (t.s.externalDrop) {
                    var n = e.endY < t._gridContBottom && e.endY > t._allDayTop && e.endX > t._gridContLeft && e.endX < t._gridContRight;
                    switch (e.eventName) {
                    case "onDragModeOff":
                        t._onEventDragModeOff();
                        break;
                    case "onDragModeOn":
                        t._onEventDragModeOn(e);
                        break;
                    case "onDragStart":
                        t._onEventDragStart(e);
                        break;
                    case "onDragMove":
                        var a = e.clone;
                        n ? (a.style.display = "none",
                        t._onEventDragMove(e),
                        t._onCalendar = !0) : t._onCalendar && (a.style.display = "table",
                        t.setState({
                            dragData: {}
                        }),
                        t._tempStart = 0,
                        t._tempEnd = 0,
                        t._tempAllDay = le,
                        t._onCalendar = !1);
                        break;
                    case "onDragEnd":
                        n ? t._onEventDragEnd(e) : t.setState({
                            dragData: le,
                            isTouchDrag: !1
                        })
                    }
                }
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._isToday = function(e) {
            return bs(new Date(e), new Date)
        }
        ,
        t.prototype._formatTime = function(e) {
            var t = this.s.timeFormat;
            return ws(/a/i.test(t) && this._stepLabel === is ? t.replace(/.[m]+/i, "") : t, new Date(+new Date(0,0,1) + e))
        }
        ,
        t.prototype._getEventPos = function(e, t) {
            var n = this.s
              , a = Cs(n, t.getFullYear(), t.getMonth(), t.getDate())
              , s = this._isTimeline
              , i = "week" === n.type
              , r = e.start
              , o = e.startDate
              , l = e.end
              , c = _s(n, o, e.endDate);
            if (e.allDay || s) {
                if (bs(a, o) || bs(a, this._firstDay)) {
                    var h = n.startDay
                      , d = a.getDay()
                      , u = h - d > 0 ? 7 : 0
                      , m = !bs(o, c)
                      , _ = Wr(o, this._startTime, this._time, this._firstDay) + "%";
                    return {
                        end: l,
                        endDate: c,
                        position: s ? {
                            height: "100%",
                            left: n.rtl ? "auto" : _,
                            right: n.rtl ? _ : "auto",
                            width: Ar(o, c, this._time, this._firstDay, this._lastDay) + "%"
                        } : {
                            width: (m && i ? 100 * Math.min(gs(a, c) + 1, this._days + h - d - u) : 100) + "%"
                        },
                        start: r,
                        startDate: o
                    }
                }
            } else if (o < a && (r = "",
            o = Cs(n, a)),
            c >= vs(Ns(a, 1)) && (l = "",
            (c = Cs(n, a)).setHours(23, 59, 59, 999)),
            us(o) < this._endTime && us(c) > this._startTime) {
                var p = function(e, t, n, a, s) {
                    var i = us(e)
                      , r = us(t);
                    return a > i && (i = a),
                    s < r && (r = s),
                    100 * (r - i) / n
                }(o, c, this._time, this._startTime, this._endTime);
                return {
                    cssClass: p < 2 ? " mbsc-schedule-event-small-height" : "",
                    end: l,
                    endDate: c,
                    position: {
                        height: p + "%",
                        top: Wr(o, this._startTime, this._time) + "%",
                        width: "100%"
                    },
                    start: r,
                    startDate: o
                }
            }
        }
        ,
        t.prototype._getEventData = function(e, t, n) {
            var a = this.s
              , s = Or(a, e, t, !0, a.timeFormat, a.allDayText, "", n, this._isTimeline);
            if (s.html = this._safeHtml(s.html),
            e.allDay && +s.endDate == +s.startDate) {
                var i = vs(Ns(s.startDate, 1));
                s.endDate = a.exclusiveEndDates ? i : Cs(a, +i - 1)
            }
            return s
        }
        ,
        t.prototype._getEvents = function(e, t, n) {
            for (var a = this, s = this.s, i = this._isTimeline, r = [], o = {}, l = Ur(n, s.resources) || {}, c = {}, h = {}, d = [], u = function(n) {
                var u = n.id;
                c[u] = [],
                (m._groupByResource || i) && (d = [],
                r.push(d),
                i || (h = ei(s, l[u], e, t, 0, m._days, !0, s.startDay)));
                for (var _ = function(e) {
                    var t = +vs(e)
                      , _ = ps(e);
                    m._groupByResource || i || (o[_] ? d = o[_] : (d = [],
                    o[_] = d,
                    r.push(d)),
                    h = ei(s, l[u], e, Ns(e, 1), 0, m._days, !0, s.startDay, s.eventOrder));
                    var p = ti(l[u][_]) || []
                      , v = {
                        allDay: [],
                        day: s.getDay(e),
                        events: [],
                        key: _,
                        resource: u,
                        timestamp: t
                    };
                    i || h[_].data.forEach((function(e) {
                        var i = e.event
                          , r = e.showText
                          , o = e.width;
                        if (i) {
                            var l = a._getEventData(i, t, n);
                            l.position = {
                                paddingLeft: s.rtl ? o / 100 - 1 : "",
                                paddingRight: s.rtl ? "" : o / 100 - 1,
                                width: o + "%"
                            },
                            v.allDay.push({
                                event: l,
                                showText: r
                            })
                        }
                    }
                    ));
                    for (var f = [], g = {}, y = 0, b = p; y < b.length; y++) {
                        var x = b[y];
                        if (!x.allDay || i) {
                            var D = m._getEventData(x, t, n)
                              , T = m._getEventPos(D, e);
                            T && (D.cssClass = T.cssClass,
                            D.position = T.position,
                            i || zr(f, D, g),
                            v.events.push(D),
                            c[u].push(D))
                        }
                    }
                    if (!i)
                        for (var C = function(e) {
                            var t = e.length;
                            e.forEach((function(e, n) {
                                for (var a = 0, i = e; a < i.length; a++) {
                                    var r = i[a]
                                      , o = ((g[r.uid] || t) - n) / t * 100;
                                    r.position.width = o + "%",
                                    r.position[s.rtl ? "right" : "left"] = 100 * n / t + "%",
                                    r.position[s.rtl ? "left" : "right"] = "auto"
                                }
                            }
                            ))
                        }, S = 0, k = f; S < k.length; S++) {
                            C(k[S])
                        }
                    d.push(v)
                }, p = vs(e); p < t; p.setDate(p.getDate() + 1))
                    _(p);
                if (i) {
                    for (var v = [], f = {}, g = 0, y = c[u]; g < y.length; g++) {
                        zr(v, y[g], f)
                    }
                    for (var b = function(e) {
                        var t = e.length;
                        e.forEach((function(e, n) {
                            for (var a = 0, s = e; a < s.length; a++) {
                                var i = s[a]
                                  , r = ((f[i.uid] || t) - n) / t * 100;
                                i.position.height = r + "%",
                                i.position.top = 100 * n / t + "%"
                            }
                        }
                        ))
                    }, x = 0, D = v; x < D.length; x++) {
                        b(D[x])
                    }
                }
            }, m = this, _ = 0, p = this._resources; _ < p.length; _++) {
                u(p[_])
            }
            return r
        }
        ,
        t.prototype._getInvalids = function(e, t, n) {
            for (var a = this.s, s = {}, i = Ur(n, a.resources), r = 0, o = this._resources; r < o.length; r++)
                for (var l = o[r], c = l.id, h = vs(e); h < t; h.setDate(h.getDate() + 1)) {
                    var d = ps(h)
                      , u = i[c][d] || []
                      , m = {
                        invalids: []
                    };
                    (+h < a.minDate || +h > a.maxDate) && (m.allDay = {
                        allDay: !0,
                        endDate: new Date(h),
                        startDate: new Date(h)
                    },
                    m.invalids.push(m.allDay));
                    for (var _ = 0, p = u; _ < p.length; _++) {
                        var v = p[_];
                        if (pe(v) || Ts(v)) {
                            var f = Ss(v);
                            v = {
                                allDay: !0,
                                end: new Date(f),
                                start: f
                            }
                        }
                        var g = this._getEventData(v, +h, l);
                        if (g.cssClass = "",
                        !g.allDay) {
                            var y = this._getEventPos(g, h);
                            y && (0 === us(y.startDate) && new Date(+y.endDate + 1) >= Ns(h, 1) ? g.allDay = !0 : (g.position = y.position,
                            us(y.startDate) <= this._startTime && (g.cssClass += " mbsc-schedule-invalid-start"),
                            us(y.endDate) >= this._endTime && (g.cssClass += " mbsc-schedule-invalid-end"),
                            m.invalids.push(g)))
                        }
                        if (g.allDay) {
                            m.allDay = g,
                            m.invalids = [g];
                            break
                        }
                    }
                    s[c] || (s[c] = {}),
                    s[c][d] = m
                }
            return s
        }
        ,
        t.prototype._getColors = function(e, t, n) {
            for (var a = {}, s = Ur(n, this.s.resources), i = 0, r = this._resources; i < r.length; i++)
                for (var o = r[i], l = o.id, c = vs(e); c < t; c.setDate(c.getDate() + 1)) {
                    for (var h = +vs(c), d = ps(c), u = {
                        colors: []
                    }, m = 0, _ = s[l][d] || []; m < _.length; m++) {
                        var p = _[m]
                          , v = this._getEventData(p, h, o);
                        if (v.allDay && !this._isTimeline)
                            u.allDay = v;
                        else {
                            var f = this._getEventPos(v, c);
                            f && (v.position = f.position,
                            v.cssClass = "",
                            us(f.startDate) <= this._startTime && (v.cssClass += " mbsc-schedule-color-start"),
                            us(f.endDate) >= this._endTime && (v.cssClass += " mbsc-schedule-color-end"),
                            u.colors.push(v))
                        }
                        v.position.background = p.background
                    }
                    a[l] || (a[l] = {}),
                    a[l][d] = u
                }
            return a
        }
        ,
        t.prototype._render = function(e, t) {
            var n = this._prevS
              , a = new Date(e.selected)
              , s = Rr(e.timeLabelStep)
              , i = Rr(e.timeCellStep)
              , r = e.startDay
              , o = e.endDay
              , l = e.groupBy !== n.groupBy || e.resources !== n.resources
              , c = l
              , h = this._startTime
              , d = this._endTime;
            if (e.startTime !== n.startTime || e.endTime !== n.endTime || e.timeLabelStep !== n.timeLabelStep || e.timeCellStep !== n.timeCellStep || this._startTime === le || this._endTime === le) {
                var u = Ss(e.startTime || "00:00")
                  , m = new Date(+Ss(e.endTime || "00:00") - 1);
                this._startTime = h = us(u),
                this._endTime = d = us(m),
                this._time = d - h + 1,
                this._timesBetween = be(ke(i / s) - 1),
                this._times = [];
                for (var _ = i * ss, p = ke(h / _) * _; p <= d; p += _)
                    this._times.push(p);
                c = !0
            }
            if (e.selected !== n.selected || e.showDays !== n.showDays || e.type !== n.type || e.dayNames !== n.dayNames || e.getDay !== n.getDay || r !== n.startDay || o !== n.endDay || l) {
                var f = "day" === e.type
                  , g = "month" === e.type
                  , y = ys(a, e, r)
                  , b = Ns(y, o - r + 1 + (o < r ? 7 : 0))
                  , x = f ? vs(a) : g ? new Date(a.getFullYear(),a.getMonth(),1) : y
                  , D = f ? Ns(x, 1) : g ? new Date(a.getFullYear(),a.getMonth() + 1,1) : b;
                if (this._resources = e.resources && 0 !== e.resources.length ? e.resources : [{
                    id: "mbsc-def"
                }],
                this._isSingleResource = 1 === this._resources.length,
                this._groupByResource = "date" !== e.groupBy && !f || this._isSingleResource,
                this._days = gs(x, D),
                this._firstDay = x,
                this._lastDay = D,
                this._selectedDay = +vs(a),
                this._shouldScroll = e.scroll,
                this._shouldAnimateScroll = n.selected !== le,
                this._showTimeIndicator = !g && (f ? bs(new Date, a) : x <= new Date && D >= new Date),
                e.showDays || this._isTimeline) {
                    this._weekDays = [];
                    var T = y
                      , C = b;
                    this._isTimeline && (f || g) && (T = x,
                    C = D);
                    for (p = vs(T); p < vs(C); p.setDate(p.getDate() + 1))
                        this._weekDays.push({
                            date: ws(g ? "D DDD" : e.dateFormatLong, p, e),
                            day: e.getDay(p),
                            timestamp: +vs(p)
                        })
                }
                c = !0
            }
            (e.colorsMap !== n.colorsMap || c) && (this._colors = this._getColors(this._firstDay, this._lastDay, e.colorsMap)),
            e.eventMap === n.eventMap && !c && this._events || (this._events = this._getEvents(this._firstDay, this._lastDay, e.eventMap)),
            (e.invalidsMap !== n.invalidsMap || c) && (this._invalids = this._getInvalids(this._firstDay, this._lastDay, e.invalidsMap)),
            (e.height !== n.height || e.width !== n.width || c) && (this._shouldCheckSize = v && !!e.height && !!e.width),
            this._stepCell = i * ss,
            this._stepLabel = s * ss,
            this._dayNames = t.dayNameWidth > 49 ? e.dayNamesShort : e.dayNamesMin,
            this._displayTime = s < 1440
        }
        ,
        t.prototype._mounted = function() {
            var e, t, n, a = this;
            this._unlisten = Ta(this._el, {
                onDoubleClick: function(e) {
                    var t = a.s;
                    n && t.clickToCreate && "single" !== t.clickToCreate && (e.click = !0,
                    a._onEventDragStart(e),
                    a._onEventDragEnd(e))
                },
                onEnd: function(n) {
                    !e && t && "single" === a.s.clickToCreate && (e = !0,
                    n.click = !0,
                    a._onEventDragStart(n)),
                    e && (n.domEvent.preventDefault(),
                    a._onEventDragEnd(n)),
                    clearTimeout(a._touchTimer),
                    e = !1,
                    t = !1
                },
                onMove: function(n) {
                    var s = a.s;
                    e && s.dragToCreate ? (n.domEvent.preventDefault(),
                    a._onEventDragMove(n)) : t && s.dragToCreate && (Math.abs(n.deltaX) > 7 || Math.abs(n.deltaY) > 7) ? (e = !0,
                    a._onEventDragStart(n)) : clearTimeout(a._touchTimer)
                },
                onStart: function(s) {
                    var i = a.s;
                    if (s.create = !0,
                    s.click = !1,
                    !e && (i.dragToCreate || i.clickToCreate)) {
                        var r = s.domEvent.target && s.domEvent.target.classList || [];
                        (n = r.contains("mbsc-schedule-item") || r.contains("mbsc-schedule-all-day-item") || r.contains("mbsc-timeline-column")) && (s.isTouch && i.dragToCreate ? a._touchTimer = setTimeout((function() {
                            a._onEventDragStart(s),
                            a._onEventDragModeOn(s),
                            e = !0
                        }
                        ), 350) : t = !s.isTouch)
                    }
                }
            }),
            this._unsubscribe = Dr(this._onExternalDrag)
        }
        ,
        t.prototype._updated = function() {
            var e = this;
            if (this._shouldScroll && (setTimeout((function() {
                e._scrollToTime(e._shouldAnimateScroll)
            }
            )),
            this._shouldScroll = !1),
            this._shouldCheckSize) {
                this._shouldCheckSize = !1;
                var t, n, a = this._scrollCont;
                if (!this._isTimeline) {
                    var s = this._el.querySelector(".mbsc-schedule-column-inner")
                      , i = this._el.querySelector(".mbsc-schedule-header-item");
                    t = this._stepCell * s.offsetHeight / this._time,
                    n = i ? i.offsetWidth : 0
                }
                this._onScroll(),
                setTimeout((function() {
                    e.setState({
                        cellHeight: t,
                        dayNameWidth: n,
                        hasScrollX: !!a && a.scrollWidth > a.clientWidth,
                        hasScrollY: !!a && a.scrollHeight > a.clientHeight
                    })
                }
                ))
            }
        }
        ,
        t.prototype._destroy = function() {
            this._unlisten(),
            Tr(this._unsubscribe)
        }
        ,
        t.prototype._getDragDates = function(e, t) {
            for (var n, a = {}, s = e.startDate, i = this.s.exclusiveEndDates ? e.endDate : vs(Ns(e.endDate, 1)), r = vs(s); r < i; r.setDate(r.getDate() + 1)) {
                var l = o({}, e)
                  , c = this._getEventPos(e, r);
                c && (l.cssClass = c.cssClass,
                l.start = c.start,
                l.end = c.end,
                l.position = c.position,
                a[ps(r)] = l)
            }
            return (n = {})[t] = a,
            n
        }
        ,
        t.prototype._getGridTime = function(e, t, n, a, s) {
            var i = Se(this._isTimeline ? ke(this._time * (t - a * this._colWidth) / this._colWidth) : ke(this._time * (n - 8) / (this._colHeight - 16)), s * ss)
              , r = new Date(+new Date(1970,0,1) + this._startTime + i);
            return Cs(this.s, e.getFullYear(), e.getMonth(), e.getDate(), r.getHours(), r.getMinutes())
        }
        ,
        t.prototype._scrollToTime = function(e) {
            var t = this._scrollCont
              , n = this._isTimeline;
            if (t) {
                var a = this.s
                  , s = Cs(a, a.selected);
                s.setHours(s.getHours(), 0);
                var i = Wr(s, this._startTime, this._time * (n ? this._days : 1))
                  , r = void 0;
                if (n) {
                    var o = 100 * gs(this._firstDay, s) / this._days + i;
                    r = t.scrollWidth * o / 100
                } else {
                    r = t.querySelector(".mbsc-schedule-column-inner").offsetHeight * i / 100
                }
                Rt(t, r, e, n)
            }
        }
        ,
        t
    }(Bn)
      , Xr = {}
      , Jr = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            var t = e.event
              , n = this._isAllDay
              , a = e.isTimeline
              , s = this._theme
              , i = e.resize && !1 !== t.original.editable;
            return En("div", {
                tabIndex: 0,
                className: this._cssClass,
                "data-id": t.id,
                style: this._style,
                ref: this._setEl,
                title: t.title + " " + (t.allDayText ? "" : t.start + " - " + t.end),
                onClick: this._onClick,
                onContextMenu: this._onRightClick
            }, this._isStart && i && En("div", {
                className: "mbsc-schedule-event-resize mbsc-schedule-event-resize-start" + (a ? " mbsc-timeline-event-resize" : "") + this._rtl + (e.isDrag ? " mbsc-schedule-event-resize-start-touch" : "")
            }), this._isEnd && i && En("div", {
                className: "mbsc-schedule-event-resize mbsc-schedule-event-resize-end" + (a ? " mbsc-timeline-event-resize" : "") + this._rtl + (e.isDrag ? " mbsc-schedule-event-resize-end-touch" : "")
            }), e.render ? this._content ? this._content : En("div", {
                style: {
                    height: "100%"
                },
                dangerouslySetInnerHTML: this._html
            }) : En(tn, null, !n && !a && En("div", {
                className: "mbsc-schedule-event-bar" + s + this._rtl
            }), En("div", {
                className: "mbsc-schedule-event-background" + (a ? " mbsc-timeline-event-background" : "") + (n ? " mbsc-schedule-event-all-day-background" : "") + s,
                style: {
                    background: t.style.background
                }
            }), En("div", {
                className: "mbsc-schedule-event-inner" + s + (n ? " mbsc-schedule-event-all-day-inner" : "") + (t.cssClass || ""),
                style: {
                    color: t.style.color
                }
            }, En("div", {
                className: "mbsc-schedule-event-title" + (n ? " mbsc-schedule-event-all-day-title" : "") + s,
                dangerouslySetInnerHTML: this._html
            }, this._content), !n && En("div", {
                className: "mbsc-schedule-event-range" + s
            }, this._rangeText))), En("div", {
                dangerouslySetInnerHTML: this.textParam
            }))
        }
        ,
        t.prototype._updated = function() {
            e.prototype._updated.call(this),
            this._shouldEnhance && On && (On(this._el),
            this._shouldEnhance = !1)
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._onClick = function(e) {
                t._triggerClick("onClick", e)
            }
            ,
            t._onRightClick = function(e) {
                t._triggerClick("onRightClick", e)
            }
            ,
            t._onDocTouch = function(e) {
                Lt(t._doc, ha, t._onDocTouch),
                Lt(t._doc, na, t._onDocTouch),
                t._isDrag = !1,
                t._hook("onDragModeOff", {
                    event: t.s.event
                })
            }
            ,
            t._updateState = function(e) {
                t.setState(e)
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._render = function(e, t) {
            var n = new Date(e.timestamp)
              , a = e.event
              , s = a.startDate
              , i = _s(e, s, a.endDate)
              , r = e.isTimeline
              , l = !r && a.allDay
              , c = !bs(s, i)
              , h = c && bs(s, n)
              , d = c && bs(i, n)
              , u = r ? "timeline" : "schedule";
            this._isStart = !c || h,
            this._isEnd = !c || (l ? i < e.lastDay : d),
            !l && e.gridStartTime > us(s) && (this._isStart = !1),
            !l && e.gridEndTime + 1 < us(i) && (this._isEnd = !1),
            r && (c || a.allDay) && (this._isStart = s >= e.gridStartDay,
            this._isEnd = i < e.gridEndDay),
            this._html = this._content = le,
            this._isDrag = this._isDrag || e.isDrag,
            this._rangeText = a.start + " - " + a.end,
            this._isAllDay = l,
            this._host = u,
            (a.allDay || !r && c && !h && !d) && (this._rangeText = a.allDayText),
            this._cssClass = "mbsc-schedule-event" + this._theme + this._rtl + (r ? " mbsc-timeline-event" : "") + (this._isStart ? " mbsc-" + u + "-event-start" : "") + (this._isEnd ? " mbsc-" + u + "-event-end" : "") + (l && !r ? " mbsc-schedule-event-all-day" : "") + (t.hasFocus && !e.inactive ? " mbsc-schedule-event-active" : "") + (!t.hasHover || e.inactive || this._isDrag ? "" : " mbsc-schedule-event-hover") + (e.isDrag ? " mbsc-schedule-event-dragging" + (r ? " mbsc-timeline-event-dragging" : "") : "") + (e.hidden ? " mbsc-schedule-event-hidden" : "") + (e.inactive ? " mbsc-schedule-event-inactive" : ""),
            this._style = o({}, a.position, {
                color: a.color
            });
            var m = e.render || e.renderContent;
            if (m) {
                var _ = m(a);
                pe(_) ? (this._html = this._safeHtml(_),
                this._shouldEnhance = !0) : this._content = _
            } else
                e.contentTemplate || (this._html = a.html)
        }
        ,
        t.prototype._mounted = function() {
            var e, t, n = this, a = this.s.event.uid, s = Xr[a];
            s || (s = new m,
            Xr[a] = s),
            this._unsubscribe = s.subscribe(this._updateState),
            this._doc = It(this._el),
            this._unlisten = Ta(this._el, {
                keepFocus: !0,
                onBlur: function() {
                    s.next({
                        hasFocus: !1
                    })
                },
                onDoubleClick: function(e) {
                    e.domEvent.stopPropagation(),
                    n._triggerClick("onDoubleClick", e.domEvent)
                },
                onEnd: function(a) {
                    if (n._isDrag) {
                        var s = n.s
                          , i = o({}, a);
                        i.domEvent.preventDefault(),
                        i.event = s.event,
                        i.resource = s.resource,
                        s.resize && e ? (i.resize = !0,
                        i.direction = e) : s.drag && (i.drag = !0),
                        n._hook("onDragEnd", i),
                        s.isDrag || (n._isDrag = !1),
                        n._el && i.moved && n._el.blur()
                    }
                    clearTimeout(t),
                    e = le
                },
                onFocus: function() {
                    s.next({
                        hasFocus: !0
                    })
                },
                onHoverIn: function() {
                    s.next({
                        hasHover: !0
                    })
                },
                onHoverOut: function() {
                    s.next({
                        hasHover: !1
                    })
                },
                onKeyDown: function(e) {
                    var t = n.s.event.original;
                    switch (e.keyCode) {
                    case Ya:
                    case Va:
                        n._el.click(),
                        e.preventDefault();
                        break;
                    case 8:
                    case 46:
                        n.state.hasFocus && !1 !== t.editable && n._hook("onDelete", {
                            domEvent: e.domEvent,
                            event: t,
                            source: n._host
                        })
                    }
                },
                onMove: function(a) {
                    var s = n.s
                      , i = o({}, a);
                    if (i.event = s.event,
                    i.resource = s.resource,
                    e)
                        i.resize = !0,
                        i.direction = e;
                    else {
                        if (!s.drag)
                            return;
                        i.drag = !0
                    }
                    !1 !== s.event.original.editable && (!n._isDrag && i.isTouch || i.domEvent.preventDefault(),
                    n._isDrag ? n._hook("onDragMove", i) : (Math.abs(i.deltaX) > 7 || Math.abs(i.deltaY) > 7) && (clearTimeout(t),
                    i.isTouch || (n._isDrag = !0,
                    n._hook("onDragStart", i))))
                },
                onStart: function(a) {
                    var s = n.s
                      , i = o({}, a)
                      , r = i.domEvent.target;
                    if (i.event = s.event,
                    i.resource = s.resource,
                    s.resize && r.classList.contains("mbsc-schedule-event-resize"))
                        e = r.classList.contains("mbsc-schedule-event-resize-start") ? "start" : "end",
                        i.resize = !0,
                        i.direction = e;
                    else {
                        if (!s.drag)
                            return;
                        i.drag = !0
                    }
                    !1 !== s.event.original.editable && (n._isDrag ? (i.domEvent.stopPropagation(),
                    n._hook("onDragStart", i)) : i.isTouch && (t = setTimeout((function() {
                        n._hook("onDragModeOn", i),
                        n._hook("onDragStart", i),
                        n._isDrag = !0
                    }
                    ), 350)))
                }
            }),
            this._isDrag && (Nt(this._doc, ha, this._onDocTouch),
            Nt(this._doc, na, this._onDocTouch))
        }
        ,
        t.prototype._destroy = function() {
            if (this._el && this._el.blur(),
            this._unsubscribe) {
                var e = this.s.event.uid
                  , t = Xr[e];
                t.unsubscribe(this._unsubscribe),
                t.nr || delete Xr[e]
            }
            this._unlisten && this._unlisten(),
            Lt(this._doc, ha, this._onDocTouch),
            Lt(this._doc, na, this._onDocTouch)
        }
        ,
        t.prototype._triggerClick = function(e, t) {
            var n = this.s;
            this._hook(e, {
                date: n.timestamp,
                domEvent: t,
                event: n.event.original,
                resource: n.resource,
                source: this._host
            })
        }
        ,
        t
    }(Bn))
      , Kr = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._onScroll = function() {
                var e = t._scrollCont;
                if (e) {
                    var n = e.scrollTop
                      , a = "translateX(" + -e.scrollLeft + "px)"
                      , s = t._timeCont
                      , i = t._allDayCont
                      , r = t._headerCont
                      , o = (wt ? wt + "T" : "t") + "ransform";
                    i && (i.style[o] = a),
                    s && (s.style.marginTop = -n + "px"),
                    r && (r.style[o] = a),
                    0 === n ? t.setState({
                        showShadow: !1
                    }) : t.state.showShadow || t.setState({
                        showShadow: !0
                    })
                }
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._formatTime = function(e) {
            var t = this.s.timeFormat;
            return ws(/a/i.test(t) && this._stepLabel === is && e % is == 0 ? t.replace(/.[m]+/i, "") : t, new Date(+new Date(0,0,1) + e))
        }
        ,
        t.prototype._getLastDay = function(e) {
            return this._groupByResource ? this._lastDay : Ns(new Date(e), 1)
        }
        ,
        t.prototype._render = function(t, n) {
            e.prototype._render.call(this, t, n);
            var a = this._stepCell / ss
              , s = ke(this._startTime / ss) % a
              , i = ke(this._endTime / ss) % a + 1;
            this._largeDayNames = n.dayNameWidth > 99,
            this._startCellStyle = s % a != 0 ? {
                height: (n.cellHeight || 50) * ((a - s) % a / a) + "px"
            } : le,
            this._endCellStyle = i % a != 0 ? {
                height: (n.cellHeight || 50) * (i % a) / a + "px"
            } : le
        }
        ,
        t
    }(jr)
      , qr = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            return En("div", {
                className: this._cssClass,
                style: this._pos
            }, En("div", {
                className: "mbsc-schedule-time-indicator-time mbsc-schedule-time-indicator-time-" + e.orientation + this._theme + this._rtl
            }, this._time), e.showDayIndicator && En("div", {
                className: "mbsc-schedule-time-indicator mbsc-schedule-time-indicator-" + e.scheduleType + this._theme,
                style: this._dayPos
            }))
        }
        ,
        t
    }(function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._mounted = function() {
            var e = this;
            clearInterval(this._timer),
            this._timer = setInterval((function() {
                e._zone ? e._zone.runOutsideAngular((function() {
                    e.forceUpdate()
                }
                )) : e.forceUpdate()
            }
            ), 1e4)
        }
        ,
        t.prototype._destroy = function() {
            clearInterval(this._timer)
        }
        ,
        t.prototype._render = function(e) {
            var t = Cs(e)
              , n = e.rtl
              , a = e.displayedDays
              , s = e.displayedTime
              , i = e.startTime
              , r = "day" === e.scheduleType
              , o = us(t)
              , l = t.getDay()
              , c = r ? 0 : l - e.startDay + (l < e.startDay ? 7 : 0);
            if (this._time = ws(e.timeFormat, t, e),
            this._cssClass = "mbsc-schedule-time-indicator-cont mbsc-schedule-time-indicator-cont-" + e.orientation + this._theme + this._rtl + " " + (e.cssClass || "") + (o < i || o > i + s ? " mbsc-hidden" : ""),
            "x" === e.orientation) {
                var h = 100 * c / a + "%";
                this._pos = {
                    top: 100 * (o - i) / s + "%"
                },
                this._dayPos = {
                    left: n ? "" : h,
                    right: n ? h : "",
                    width: 100 / a + "%"
                }
            } else {
                var d = 100 * (c * s + o - i) / (a * s) + "%";
                this._pos = {
                    left: n ? "" : d,
                    right: n ? d : ""
                }
            }
        }
        ,
        t
    }(Bn))
      , Gr = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e, t) {
            return En("div", {
                ref: this._setEl,
                className: this._cssClass,
                onClick: this._onClick
            }, En("div", {
                className: "mbsc-schedule-header-dayname" + this._theme + (e.selected ? " mbsc-selected" : "") + (e.isToday ? " mbsc-schedule-header-dayname-curr" : "")
            }, e.dayNames[(e.index + e.firstDay) % 7]), En("div", {
                className: "mbsc-schedule-header-day" + this._theme + this._rtl + (e.selected ? " mbsc-selected" : "") + (e.isToday ? " mbsc-schedule-header-day-today" : "") + (t.hasHover ? " mbsc-hover" : "")
            }, e.day))
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._onClick = function() {
                var e = t.s;
                e.selectable && e.onClick(e.timestamp)
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._mounted = function() {
            var e = this;
            this._unlisten = Ta(this._el, {
                onHoverIn: function() {
                    e.s.selectable && e.setState({
                        hasHover: !0
                    })
                },
                onHoverOut: function() {
                    e.s.selectable && e.setState({
                        hasHover: !1
                    })
                }
            })
        }
        ,
        t.prototype._destroy = function() {
            this._unlisten && this._unlisten()
        }
        ,
        t.prototype._render = function(e, t) {
            this._cssClass = "mbsc-flex-1-1 mbsc-schedule-header-item" + this._theme + this._rtl + this._hb + (e.largeNames ? " mbsc-schedule-header-item-large" : "") + (t.hasHover ? " mbsc-hover" : "")
        }
        ,
        t
    }(Bn))
      , Zr = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._setCont = function(e) {
                t._scrollCont = e
            }
            ,
            t._setTimeCont = function(e) {
                t._timeCont = e
            }
            ,
            t._setAllDayCont = function(e) {
                t._allDayCont = e
            }
            ,
            t._setHeaderCont = function(e) {
                t._headerCont = e
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._template = function(e, t) {
            var n = this
              , a = this._colors
              , s = t.dragData
              , i = s && s.draggedEvent && s.draggedEvent.id
              , r = this._invalids
              , o = this._hb
              , l = this._rtl
              , c = this._times
              , h = this._startTime
              , d = this._endTime
              , u = this._startCellStyle
              , m = this._endCellStyle
              , _ = this._stepLabel
              , p = this._theme
              , v = this._isSingleResource
              , f = e.resources
              , g = "schedule"
              , y = " mbsc-flex-1-1 mbsc-schedule-resource-group" + p + l
              , b = function(t) {
                var a, s = t.name;
                return e.renderResource && pe(s = e.renderResource(t)) && (a = n._safeHtml(s),
                n._shouldEnhance = !0),
                s && En("div", {
                    key: t.id,
                    dangerouslySetInnerHTML: a,
                    className: "mbsc-schedule-resource-title mbsc-schedule-resource-title-date" + p + l + o
                }, s)
            };
            return En("div", {
                ref: this._setEl,
                className: "mbsc-flex-col mbsc-schedule-wrapper" + p
            }, En("div", {
                className: "mbsc-flex mbsc-schedule-header" + p + l + o
            }, En("div", {
                className: "mbsc-schedule-time-col mbsc-schedule-time-col-empty" + p + l + o
            }), En("div", {
                className: "mbsc-flex-1-1 mbsc-schedule-header-wrapper"
            }, En("div", {
                ref: this._setHeaderCont,
                className: "mbsc-flex"
            }, "day" === e.type ? En("div", {
                className: y
            }, En("div", {
                className: "mbsc-flex"
            }, e.showDays && this._weekDays.map((function(t, a) {
                var s = t.timestamp;
                return En(Gr, {
                    key: s,
                    day: t.day,
                    dayNames: n._dayNames,
                    firstDay: e.startDay,
                    index: a,
                    isToday: n._isToday(s),
                    largeNames: n._largeDayNames,
                    onClick: e.onWeekDayClick,
                    rtl: e.rtl,
                    selectable: !0,
                    selected: n._selectedDay === s,
                    theme: e.theme,
                    timestamp: s
                })
            }
            ))), f && En("div", {
                className: "mbsc-flex"
            }, f.map((function(e) {
                return b(e)
            }
            )))) : this._events.map((function(t, a) {
                return En("div", {
                    className: y,
                    key: a
                }, n._groupByResource ? En(tn, null, b(n._resources[a]), En("div", {
                    className: "mbsc-flex"
                }, e.showDays && n._weekDays.map((function(t, a) {
                    var s = t.timestamp;
                    return En(Gr, {
                        key: s,
                        day: t.day,
                        dayNames: n._dayNames,
                        firstDay: e.startDay,
                        index: a,
                        isToday: v && n._isToday(s),
                        largeNames: n._largeDayNames,
                        onClick: e.onWeekDayClick,
                        rtl: e.rtl,
                        selectable: !1,
                        selected: v && n._isToday(s),
                        theme: e.theme,
                        timestamp: s
                    })
                }
                )))) : En(tn, null, e.showDays && En(Gr, {
                    key: t[0].timestamp,
                    day: t[0].day,
                    dayNames: n._dayNames,
                    firstDay: e.startDay,
                    index: a,
                    isToday: v && n._isToday(t[0].timestamp),
                    largeNames: n._largeDayNames,
                    onClick: e.onWeekDayClick,
                    rtl: e.rtl,
                    selectable: !1,
                    selected: n._isToday(t[0].timestamp),
                    theme: e.theme,
                    timestamp: t[0].timestamp
                }), f && En("div", {
                    className: "mbsc-flex"
                }, f.map((function(e) {
                    return b(e)
                }
                )))))
            }
            )))), En("div", {
                className: "mbsc-schedule-fake-scroll-y"
            })), En("div", {
                className: (t.showShadow ? "mbsc-schedule-all-day-wrapper-shadow" : "") + p
            }, e.showAllDay && En("div", {
                className: "mbsc-schedule-all-day-wrapper" + p + o
            }, En("div", {
                className: "mbsc-flex mbsc-schedule-all-day" + p
            }, En("div", {
                className: "mbsc-schedule-time-col" + p + l
            }, En("div", {
                className: "mbsc-schedule-all-day-text" + p
            }, e.allDayText)), En("div", {
                className: "mbsc-flex-col mbsc-flex-1-1 mbsc-schedule-all-day-group-wrapper"
            }, En("div", {
                ref: this._setAllDayCont,
                className: "mbsc-flex mbsc-flex-1-1"
            }, this._events.map((function(t, c) {
                return En("div", {
                    className: "mbsc-flex" + y,
                    key: c
                }, t.map((function(t, c) {
                    var u = t.resource
                      , m = t.timestamp
                      , _ = t.key;
                    return En("div", {
                        key: c + "-" + m,
                        className: "mbsc-schedule-all-day-item" + p + l + o
                    }, t.allDay && t.allDay.map((function(t) {
                        var a = t.event;
                        return t.showText ? En(Jr, {
                            displayTimezone: e.displayTimezone,
                            drag: e.dragToMove,
                            event: a,
                            exclusiveEndDates: e.exclusiveEndDates,
                            gridEndTime: d,
                            gridStartTime: h,
                            key: a.uid,
                            inactive: i === a.id,
                            lastDay: n._getLastDay(m),
                            onClick: e.onEventClick,
                            onDoubleClick: e.onEventDoubleClick,
                            onRightClick: e.onEventRightClick,
                            onDelete: e.onEventDelete,
                            onDragStart: n._onEventDragStart,
                            onDragMove: n._onEventDragMove,
                            onDragEnd: n._onEventDragEnd,
                            onDragModeOn: n._onEventDragModeOn,
                            onDragModeOff: n._onEventDragModeOff,
                            render: e.renderEvent,
                            renderContent: e.renderEventContent,
                            resize: e.dragToResize,
                            resource: u,
                            rtl: e.rtl,
                            theme: e.theme,
                            timestamp: m,
                            timezonePlugin: e.timezonePlugin
                        }) : En("div", {
                            key: a.uid,
                            className: "mbsc-schedule-event mbsc-schedule-event-all-day mbsc-schedule-event-all-day-placeholder"
                        }, En("div", {
                            className: "mbsc-schedule-event-all-day-inner" + p
                        }))
                    }
                    )), s && s.originDates && s.originDates[u] && s.originDates[u][_] && s.originDates[u][_].allDay && En(Jr, {
                        displayTimezone: e.displayTimezone,
                        drag: e.dragToMove,
                        event: s.originDates[u][_],
                        exclusiveEndDates: e.exclusiveEndDates,
                        gridEndTime: d,
                        gridStartTime: h,
                        hidden: s && !!s.draggedDates,
                        isDrag: !0,
                        lastDay: n._lastDay,
                        onDragStart: n._onEventDragStart,
                        onDragMove: n._onEventDragMove,
                        onDragEnd: n._onEventDragEnd,
                        onDragModeOff: n._onEventDragModeOff,
                        render: e.renderEvent,
                        renderContent: e.renderEventContent,
                        resize: e.dragToResize,
                        resource: u,
                        rtl: e.rtl,
                        theme: e.theme,
                        timestamp: m,
                        timezonePlugin: e.timezonePlugin
                    }), s && s.draggedDates && s.draggedDates[u] && s.draggedDates[u][_] && s.draggedDates[u][_].allDay && En(Jr, {
                        displayTimezone: e.displayTimezone,
                        drag: e.dragToMove,
                        event: s.draggedDates[u][_],
                        exclusiveEndDates: e.exclusiveEndDates,
                        gridEndTime: d,
                        gridStartTime: h,
                        isDrag: !0,
                        lastDay: n._lastDay,
                        render: e.renderEvent,
                        renderContent: e.renderEventContent,
                        resize: e.dragToResize,
                        resource: u,
                        rtl: e.rtl,
                        theme: e.theme,
                        timestamp: m,
                        timezonePlugin: e.timezonePlugin
                    }), r && r[u] && r[u][_] && r[u][_].allDay && En("div", {
                        className: "mbsc-schedule-invalid mbsc-schedule-invalid-all-day" + p
                    }, En("div", {
                        className: "mbsc-schedule-invalid-text"
                    }, r[u][_].allDay.title)), a && a[u] && a[u][_] && a[u][_].allDay && En("div", {
                        className: "mbsc-schedule-invalid mbsc-schedule-invalid-allday" + p,
                        style: a[u][_].allDay.position
                    }))
                }
                )))
            }
            ))))))), En("div", {
                className: "mbsc-flex mbsc-flex-1-1 mbsc-schedule-grid-wrapper" + p
            }, En("div", {
                dangerouslySetInnerHTML: this.textParam
            }), En("div", {
                className: "mbsc-flex-col mbsc-schedule-time-col mbsc-schedule-time-cont" + p + l,
                ref: this._setTimeCont
            }, En("div", {
                className: "mbsc-flex mbsc-schedule-time-cont-inner"
            }, En("div", {
                className: "mbsc-flex-col mbsc-flex-1-1"
            }, En("div", {
                className: "mbsc-flex-col mbsc-flex-1-1 mbsc-schedule-time-cont-pos"
            }, c.map((function(e, t) {
                var a = c.length - 1;
                return En("div", {
                    key: t,
                    className: "mbsc-flex-col mbsc-schedule-time-wrapper" + p + l + (t === a ? " mbsc-schedule-time-wrapper-end" : "") + (0 === t && u || t === a && m ? " mbsc-schedule-item-fixed" : ""),
                    style: 0 === t ? u : t === a ? m : {}
                }, En("div", {
                    className: "mbsc-flex-1-1 mbsc-schedule-time" + p + l
                }, 0 === t || e % _ == 0 ? n._formatTime(0 === t ? h : e) : ""), n._timesBetween.map((function(t, a) {
                    var s = e + (a + 1) * _;
                    return s > h && s < d && En("div", {
                        key: a,
                        className: "mbsc-flex-1-1 mbsc-schedule-time" + p + l
                    }, n._formatTime(s))
                }
                )), t === a && En("div", {
                    className: "mbsc-schedule-time mbsc-schedule-time-end" + p + l
                }, n._formatTime(d + 1)))
            }
            )), this._showTimeIndicator && En(qr, {
                displayedTime: this._time,
                displayedDays: this._days,
                displayTimezone: e.displayTimezone,
                orientation: "x",
                rtl: e.rtl,
                scheduleType: e.type,
                showDayIndicator: v,
                startDay: e.startDay,
                startTime: h,
                theme: e.theme,
                timeFormat: e.timeFormat,
                timezonePlugin: e.timezonePlugin
            })), t.hasScrollX && En("div", {
                className: "mbsc-schedule-fake-scroll-x"
            })), En("div", {
                className: "mbsc-schedule-fake-scroll-y"
            }))), En("div", {
                ref: this._setCont,
                className: "mbsc-flex-col mbsc-flex-1-1 mbsc-schedule-grid-scroll" + p,
                onScroll: this._onScroll
            }, En("div", {
                className: "mbsc-flex mbsc-schedule-grid"
            }, this._events.map((function(t, _) {
                return En("div", {
                    className: "mbsc-flex" + y,
                    key: _
                }, t.map((function(t, _) {
                    var v = t.timestamp
                      , f = t.key
                      , y = t.resource;
                    return En("div", {
                        key: _ + "-" + v,
                        className: "mbsc-flex-col mbsc-flex-1-1 mbsc-schedule-column" + p + l + o
                    }, En("div", {
                        className: "mbsc-flex-col mbsc-flex-1-1 mbsc-schedule-column-inner" + p + l + o
                    }, t.events && t.events.map((function(t) {
                        return En(Jr, {
                            displayTimezone: e.displayTimezone,
                            drag: e.dragToMove,
                            event: t,
                            exclusiveEndDates: e.exclusiveEndDates,
                            inactive: i === t.id,
                            key: t.uid,
                            gridEndTime: d,
                            gridStartTime: h,
                            onClick: e.onEventClick,
                            onDoubleClick: e.onEventDoubleClick,
                            onRightClick: e.onEventRightClick,
                            onDelete: e.onEventDelete,
                            onDragStart: n._onEventDragStart,
                            onDragMove: n._onEventDragMove,
                            onDragEnd: n._onEventDragEnd,
                            onDragModeOn: n._onEventDragModeOn,
                            onDragModeOff: n._onEventDragModeOff,
                            render: e.renderEvent,
                            renderContent: e.renderEventContent,
                            resize: e.dragToResize,
                            resource: y,
                            rtl: e.rtl,
                            theme: e.theme,
                            timestamp: v,
                            timezonePlugin: e.timezonePlugin
                        })
                    }
                    )), s && s.originDates && s.originDates[y] && s.originDates[y][f] && !s.originDates[y][f].allDay && En(Jr, {
                        displayTimezone: e.displayTimezone,
                        drag: e.dragToMove,
                        event: s.originDates[y][f],
                        exclusiveEndDates: e.exclusiveEndDates,
                        gridEndTime: d,
                        gridStartTime: h,
                        hidden: s && !!s.draggedDates,
                        isDrag: !0,
                        onDragStart: n._onEventDragStart,
                        onDragMove: n._onEventDragMove,
                        onDragEnd: n._onEventDragEnd,
                        onDragModeOff: n._onEventDragModeOff,
                        render: e.renderEvent,
                        renderContent: e.renderEventContent,
                        resize: e.dragToResize,
                        resource: y,
                        rtl: e.rtl,
                        theme: e.theme,
                        timestamp: v,
                        timezonePlugin: e.timezonePlugin
                    }), s && s.draggedDates && s.draggedDates[y] && s.draggedDates[y][f] && !s.draggedDates[y][f].allDay && En(Jr, {
                        displayTimezone: e.displayTimezone,
                        drag: e.dragToMove,
                        gridEndTime: d,
                        gridStartTime: h,
                        event: s.draggedDates[y][f],
                        exclusiveEndDates: e.exclusiveEndDates,
                        isDrag: !0,
                        render: e.renderEvent,
                        renderContent: e.renderEventContent,
                        resize: e.dragToResize,
                        resource: y,
                        rtl: e.rtl,
                        theme: e.theme,
                        timestamp: v,
                        timezonePlugin: e.timezonePlugin
                    }), r && r[y] && r[y][f] && r[y][f].invalids.map((function(e, t) {
                        return En("div", {
                            key: t,
                            className: "mbsc-schedule-invalid" + e.cssClass + p,
                            style: e.position
                        }, En("div", {
                            className: "mbsc-schedule-invalid-text"
                        }, r[y][f].allDay ? "" : e.title || ""))
                    }
                    )), a && a[y] && a[y][f] && a[y][f].colors.map((function(e, t) {
                        return En("div", {
                            key: t,
                            className: "mbsc-schedule-color" + e.cssClass + p,
                            style: e.position
                        })
                    }
                    )), c.map((function(t, n) {
                        var a = Br(v, t);
                        return En("div", {
                            key: n,
                            className: "mbsc-schedule-item" + p + o + (n === c.length - 1 ? " mbsc-schedule-item-last" : "") + (0 === n && u || n === c.length - 1 && m ? " mbsc-schedule-item-fixed" : ""),
                            onClick: function(t) {
                                return e.onCellClick({
                                    date: a,
                                    domEvent: t,
                                    resource: y,
                                    source: g
                                })
                            },
                            onDoubleClick: function(t) {
                                return e.onCellDoubleClick({
                                    date: a,
                                    domEvent: t,
                                    resource: y,
                                    source: g
                                })
                            },
                            onContextMenu: function(t) {
                                return e.onCellRightClick({
                                    date: a,
                                    domEvent: t,
                                    resource: y,
                                    source: g
                                })
                            },
                            style: 0 === n ? u : c.length - 1 === n ? m : {}
                        })
                    }
                    ))))
                }
                )))
            }
            ))))), s && !t.isTouchDrag && En("div", {
                className: "mbsc-calendar-dragging"
            }))
        }
        ,
        t.prototype._updated = function() {
            e.prototype._updated.call(this),
            this._shouldEnhance && On && (On(this._el),
            this._shouldEnhance = !1)
        }
        ,
        t
    }(Kr)
      , $r = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._setCont = function(e) {
                t._scrollCont = e
            }
            ,
            t._setResCont = function(e) {
                t._resCont = e
            }
            ,
            t._setHeaderCont = function(e) {
                t._headerCont = e
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._template = function(e, t) {
            var n = this
              , a = this._colors
              , s = t.dragData
              , i = s && s.draggedEvent && s.draggedEvent.id
              , r = this._invalids
              , o = this._hb
              , l = this._rtl
              , c = this._times
              , h = this._theme
              , d = this._startTime
              , u = this._endTime
              , m = this._weekDays
              , _ = this._stepLabel
              , p = "timeline";
            return En("div", {
                ref: this._setEl,
                className: "mbsc-flex mbsc-timeline-wrapper" + h
            }, e.resources && En("div", {
                className: "mbsc-flex-col mbsc-timeline-resource-col mbsc-timeline-resource-cont" + h + l
            }, En("div", {
                className: "mbsc-timeline-resource-empty" + (this._displayTime ? "" : " mbsc-timeline-resource-empty-small") + h
            }), En("div", {
                className: "mbsc-flex-col mbsc-flex-1-1",
                ref: this._setResCont
            }, this._resources && this._resources.map((function(t) {
                return i = (a = t).name,
                e.renderResource && pe(i = e.renderResource(a)) && (s = n._safeHtml(i),
                n._shouldEnhance = !0),
                En("div", {
                    key: a.id,
                    className: "mbsc-timeline-resource" + h + l + o
                }, En("div", {
                    className: "mbsc-timeline-resource-title",
                    dangerouslySetInnerHTML: s
                }, i));
                var a, s, i
            }
            ))), t.hasScrollX && En("div", {
                className: "mbsc-schedule-fake-scroll-x"
            })), En("div", {
                className: "mbsc-flex-col mbsc-flex-1-1 mbsc-timeline-header-grid-wrapper"
            }, En("div", {
                className: "mbsc-flex mbsc-timeline-header" + (this._displayTime ? "" : " mbsc-timeline-header-small") + h
            }, En("div", {
                className: "mbsc-flex mbsc-flex-1-1 mbsc-timeline-header-wrapper" + h
            }, En("div", {
                className: "mbsc-flex-col mbsc-timeline-time-cont-inner"
            }, En("div", {
                className: "mbsc-flex mbsc-flex-1-1 mbsc-timeline-header-scroll" + h,
                ref: this._setHeaderCont
            }, this._showTimeIndicator && En(qr, {
                cssClass: this._displayTime ? "" : " mbsc-schedule-time-indicator-cont-y-no-time",
                displayedTime: this._time,
                displayedDays: this._days,
                displayTimezone: e.displayTimezone,
                orientation: "y",
                rtl: e.rtl,
                scheduleType: e.type,
                showDayIndicator: !1,
                startDay: e.startDay,
                startTime: this._startTime,
                theme: e.theme,
                timeFormat: e.timeFormat,
                timezonePlugin: e.timezonePlugin
            }), m.map((function(t, a) {
                return En("div", {
                    key: a,
                    className: "mbsc-timeline-day-group mbsc-flex-1-1" + h + l + o + ("month" === e.type ? " mbsc-timeline-day-group-month" : "")
                }, En("div", {
                    className: "mbsc-timeline-header-date" + (a === m.length - 1 ? " mbsc-timeline-header-date-last" : "") + h + l + o
                }, En("div", {
                    "data-timestamp": t.timestamp,
                    className: "mbsc-timeline-header-date-text"
                }, t.date)), En("div", {
                    className: "mbsc-flex mbsc-timeline-header-time-cont" + (n._displayTime ? "" : " mbsc-timeline-header-time-no-height")
                }, c.map((function(e, t) {
                    return En("div", {
                        key: t,
                        className: "mbsc-flex mbsc-flex-1-1 mbsc-timeline-header-column" + h + l + o + (_ > n._stepCell && c[t + 1] % _ ? " mbsc-timeline-column-no-border" : "") + (t === c.length - 1 && a === m.length - 1 ? " mbsc-timeline-header-column-last" : "")
                    }, En("div", {
                        className: "mbsc-timeline-header-column-txt mbsc-flex-1-1 " + h
                    }, n._displayTime && 0 === t || e % _ == 0 ? n._formatTime(0 === t ? d : e) : ""), n._timesBetween.map((function(t, a) {
                        var s = e + (a + 1) * _;
                        return s > d && s < u && En("div", {
                            key: a,
                            className: "mbsc-timeline-header-column-txt mbsc-flex-1-1 " + h
                        }, n._formatTime(s))
                    }
                    )))
                }
                ))))
            }
            ))), t.hasScrollX && En("div", {
                className: "mbsc-schedule-fake-scroll-x"
            }))), t.hasScrollY && En("div", {
                className: "mbsc-schedule-fake-scroll-y"
            })), En("div", {
                className: "mbsc-flex mbsc-flex-1-1 mbsc-timeline-grid-wrapper" + h
            }, En("div", {
                dangerouslySetInnerHTML: this.textParam
            }), En("div", {
                ref: this._setCont,
                className: "mbsc-flex mbsc-flex-1-1 mbsc-timeline-grid-scroll" + h,
                onScroll: this._onScroll
            }, En("div", {
                className: "mbsc-flex-col mbsc-timeline-grid"
            }, this._events.map((function(t, d) {
                return En("div", {
                    key: d,
                    className: "mbsc-flex mbsc-timeline-row" + h + o
                }, t.map((function(d, u) {
                    var m = d.resource
                      , _ = d.timestamp
                      , v = d.key;
                    return En("div", {
                        key: u,
                        className: "mbsc-flex mbsc-flex-1-1 mbsc-timeline-day-group" + h + l + o + ("month" === e.type ? " mbsc-timeline-day-group-month" : "")
                    }, En("div", {
                        className: "mbsc-timeline-events"
                    }, d.events && d.events.map((function(t) {
                        return En(Jr, {
                            displayTimezone: e.displayTimezone,
                            drag: e.dragToMove,
                            event: t,
                            exclusiveEndDates: e.exclusiveEndDates,
                            inactive: i === t.id,
                            key: t.uid,
                            gridEndTime: n._endTime,
                            gridStartTime: n._startTime,
                            gridStartDay: n._firstDay,
                            gridEndDay: n._lastDay,
                            isTimeline: !0,
                            onClick: e.onEventClick,
                            onDoubleClick: e.onEventDoubleClick,
                            onRightClick: e.onEventRightClick,
                            onDelete: e.onEventDelete,
                            onDragStart: n._onEventDragStart,
                            onDragMove: n._onEventDragMove,
                            onDragEnd: n._onEventDragEnd,
                            onDragModeOn: n._onEventDragModeOn,
                            onDragModeOff: n._onEventDragModeOff,
                            render: e.renderEvent,
                            renderContent: e.renderEventContent,
                            resize: e.dragToResize,
                            resource: m,
                            rtl: e.rtl,
                            theme: e.theme,
                            timestamp: _,
                            timezonePlugin: e.timezonePlugin
                        })
                    }
                    )), s && s.originDates && s.originDates[m] && s.originDates[m][v] && !s.originDates[m][v].allDay && En(Jr, {
                        displayTimezone: e.displayTimezone,
                        drag: e.dragToMove,
                        event: s.originDates[m][v],
                        exclusiveEndDates: e.exclusiveEndDates,
                        gridEndTime: n._endTime,
                        gridStartTime: n._startTime,
                        gridStartDay: n._firstDay,
                        gridEndDay: n._lastDay,
                        hidden: s && !!s.draggedDates,
                        isDrag: !0,
                        isTimeline: !0,
                        onDragStart: n._onEventDragStart,
                        onDragMove: n._onEventDragMove,
                        onDragEnd: n._onEventDragEnd,
                        onDragModeOff: n._onEventDragModeOff,
                        render: e.renderEvent,
                        renderContent: e.renderEventContent,
                        resize: e.dragToResize,
                        resource: m,
                        rtl: e.rtl,
                        theme: e.theme,
                        timestamp: _,
                        timezonePlugin: e.timezonePlugin
                    }), s && s.draggedDates && s.draggedDates[m] && s.draggedDates[m][v] && !s.draggedDates[m][v].allDay && En(Jr, {
                        displayTimezone: e.displayTimezone,
                        drag: e.dragToMove,
                        gridEndTime: n._endTime,
                        gridStartTime: n._startTime,
                        gridStartDay: n._firstDay,
                        gridEndDay: n._lastDay,
                        event: s.draggedDates[m][v],
                        exclusiveEndDates: e.exclusiveEndDates,
                        isDrag: !0,
                        isTimeline: !0,
                        render: e.renderEvent,
                        renderContent: e.renderEventContent,
                        resize: e.dragToResize,
                        resource: m,
                        rtl: e.rtl,
                        theme: e.theme,
                        timestamp: _,
                        timezonePlugin: e.timezonePlugin
                    })), r && r[m] && r[m][v] && r[m][v].invalids.map((function(e, t) {
                        return En("div", {
                            key: t,
                            className: "mbsc-schedule-invalid mbsc-timeline-invalid" + e.cssClass + h,
                            style: e.position
                        }, En("div", {
                            className: "mbsc-schedule-invalid-text"
                        }, r[m][v].allDay ? "" : e.title || ""))
                    }
                    )), a && a[m] && a[m][v] && a[m][v].colors.map((function(e, t) {
                        return En("div", {
                            key: t,
                            className: "mbsc-schedule-color mbsc-timeline-color" + e.cssClass + h,
                            style: e.position
                        })
                    }
                    )), c.map((function(n, a) {
                        var s = Br(_, n);
                        return En("div", {
                            key: a,
                            className: "mbsc-flex-1-1 mbsc-timeline-column" + h + l + o + (a === c.length - 1 && u === t.length - 1 ? " mbsc-timeline-column-last" : ""),
                            onClick: function(t) {
                                return e.onCellClick({
                                    date: s,
                                    domEvent: t,
                                    resource: m,
                                    source: p
                                })
                            },
                            onDoubleClick: function(t) {
                                return e.onCellDoubleClick({
                                    date: s,
                                    domEvent: t,
                                    resource: m,
                                    source: p
                                })
                            },
                            onContextMenu: function(t) {
                                return e.onCellRightClick({
                                    date: s,
                                    domEvent: t,
                                    resource: m,
                                    source: p
                                })
                            }
                        })
                    }
                    )))
                }
                )))
            }
            )))))), s && !t.isTouchDrag && En("div", {
                className: "mbsc-calendar-dragging"
            }))
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._isTimeline = !0,
            t._onScroll = function() {
                var e = t._scrollCont;
                if (e) {
                    var n = e.scrollTop
                      , a = e.scrollLeft
                      , s = t._resCont
                      , i = t._headerCont
                      , r = (wt ? wt + "T" : "t") + "ransform";
                    if (s && (s.style.marginTop = -n + "px"),
                    i) {
                        var o = t.s.rtl
                          , l = o ? -1 : 1
                          , c = e.scrollWidth / t._days
                          , h = Math.max(ke(Math.abs(a) / c), 0)
                          , d = Ns(t._firstDay, h)
                          , u = o ? "marginRight" : "marginLeft"
                          , m = t._headerDateElm;
                        d !== t._headerDate && (m && (m.style.marginLeft = "",
                        m.style.marginRight = ""),
                        (m = i.querySelector('[data-timestamp="' + +d + '"]')) && (t._headerDate = d,
                        t._headerDateElm = m,
                        t._headerDateWidth = m.offsetWidth)),
                        m && (m.style[u] = Math.min(l * (a - l * h * c), c - t._headerDateWidth - 3) + "px"),
                        i.style[r] = "translateX(" + -a + "px)"
                    }
                }
            }
            ,
            t
        }
        return r(t, e),
        t
    }(jr))
      , Qr = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._instanceService = new Si,
            t._setList = function(e) {
                t._list = e
            }
            ,
            t._setPopoverList = function(e) {
                t._popoverList = e && e._el
            }
            ,
            t._setEl = function(e) {
                t._el = e ? e._el || e : null,
                t._calendarView = e,
                t._instanceService.instance = t
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._eventRenderer = function(e, t, n, a, s) {
            var i, r = this, o = !this._colorEventList, l = s ? "popover" : "agenda", c = a.renderEventContent ? a.renderEventContent(e) : En("div", {
                className: "mbsc-event-text" + this._theme,
                title: e.title,
                dangerouslySetInnerHTML: e.html
            });
            if (pe(c)) {
                var h = {
                    __html: c
                };
                c = En("div", {
                    className: "mbsc-event-content" + this._theme,
                    dangerouslySetInnerHTML: h
                }),
                this._shouldEnhance = !0
            } else
                c = En("div", {
                    className: "mbsc-event-content" + this._theme
                }, c);
            var d = a.renderEvent ? a.renderEvent(e) : En(tn, null, o && En("div", {
                className: "mbsc-event-color" + this._theme + this._rtl,
                style: e.style
            }), c, En("div", {
                className: "mbsc-event-time" + this._theme + this._rtl
            }, e.allDayText && En("div", {
                className: "mbsc-event-all-day" + this._theme
            }, e.allDayText), e.lastDay && En("div", {
                className: "mbsc-event-until" + this._theme
            }, e.lastDay), e.start && En("div", {
                className: "mbsc-event-start" + this._theme
            }, e.start), e.start && e.end && En("div", {
                className: "mbsc-event-sep" + this._theme
            }, "-"), e.end && En("div", {
                className: "mbsc-event-end" + this._theme
            }, e.end)));
            return pe(d) && (i = {
                __html: d
            },
            d = le,
            this._shouldEnhance = !0),
            En(yr, {
                className: "mbsc-event" + (o ? "" : " mbsc-colored-event"),
                key: t,
                actionable: a.actionableEvents,
                dangerouslySetInnerHTML: i,
                data: e.original,
                drag: s && this._showEventLabels && a.dragToMove,
                rtl: a.rtl,
                style: o ? le : e.style,
                theme: a.theme,
                themeVariant: a.themeVariant,
                onClick: function(t) {
                    return r._onEventClick({
                        date: n,
                        domEvent: t,
                        event: e.original,
                        source: l
                    })
                },
                onDoubleClick: function(t) {
                    return r._onEventDoubleClick({
                        date: n,
                        domEvent: t,
                        event: e.original,
                        source: l
                    })
                },
                onContextMenu: function(t) {
                    return r._onEventRightClick({
                        date: n,
                        domEvent: t,
                        event: e.original,
                        source: l
                    })
                },
                onDragEnd: this._onLabelUpdateEnd,
                onDragModeOff: this._onLabelUpdateModeOff,
                onDragModeOn: this._onLabelUpdateModeOn,
                onDragMove: this._onLabelUpdateMove,
                onDragStart: this._onLabelUpdateStart
            }, d)
        }
        ,
        t.prototype._listRenderer = function() {
            var e = this
              , t = this.s
              , n = t.theme
              , a = this._listDays
              , s = this.state.eventList;
            return t.renderAgenda ? this._eventListHTML === le ? t.renderAgenda(s, t, a) : void 0 : En(br, {
                theme: n,
                themeVariant: t.themeVariant,
                rtl: t.rtl
            }, !s.length && En("div", {
                className: "mbsc-event-list-empty" + this._theme
            }, t.noEventsText), s.map((function(s, i) {
                return En("div", {
                    className: "mbsc-event-group" + e._theme,
                    key: i,
                    ref: function(e) {
                        return a[s.timestamp] = e
                    }
                }, ("day" !== e._eventListType || e._eventListSize > 1) && En(gr, {
                    theme: n,
                    themeVariant: t.themeVariant,
                    className: "mbsc-event-day"
                }, s.date), s.events.map((function(n, a) {
                    return e._eventRenderer(n, a, s.timestamp, t)
                }
                )))
            }
            )))
        }
        ,
        t.prototype._template = function(e, t) {
            var n, a = this;
            this._listDays || (this._listDays = {}),
            this._showEventList && pe(n = this._listRenderer()) && (this._eventListHTML = {
                __html: n
            },
            this._shouldLoadDays = !0,
            this._shouldEnhance = !0,
            n = le);
            var s = {
                instance: this
            }
              , i = En(Ci, {
                ref: this._setEl,
                activeDate: this._active,
                calendarScroll: this._calendarScroll,
                calendarType: this._calendarType,
                clickToCreate: e.clickToCreate,
                colors: e.colors,
                context: e.context,
                cssClass: this._cssClass,
                dataTimezone: e.dataTimezone,
                displayTimezone: e.displayTimezone,
                downIcon: e.downIcon,
                dragData: t.labelDragData,
                dragToCreate: e.dragToCreate,
                dragToMove: e.dragToMove,
                dragToResize: e.dragToResize,
                eventOrder: e.eventOrder,
                eventRange: this._showSchedule ? this._scheduleType : this._showTimeline ? this._timelineType : this._eventListType,
                eventRangeSize: this._eventListSize,
                exclusiveEndDates: e.exclusiveEndDates,
                hasContent: this._showEventList || this._showSchedule || this._showTimeline,
                hasPicker: !0,
                height: e.height,
                invalid: e.invalid,
                instanceService: this._instanceService,
                labels: e.labels,
                marked: e.marked,
                max: e.max,
                min: e.min,
                mouseSwipe: !e.dragToCreate && "single" !== e.clickToCreate || !this._showEventLabels && !this._showEventCount,
                mousewheel: e.mousewheel,
                nextIconH: e.nextIconH,
                nextIconV: e.nextIconV,
                noOuterChange: !this._showEventList,
                onActiveChange: this._onActiveChange,
                onCellHoverIn: this._onCellHoverIn,
                onCellHoverOut: this._onCellHoverOut,
                onDayClick: this._onDayClick,
                onDayDoubleClick: this._onDayDoubleClick,
                onDayRightClick: this._onDayRightClick,
                onGestureStart: this._onGestureStart,
                onLabelClick: this._onLabelClick,
                onLabelDoubleClick: this._onLabelDoubleClick,
                onLabelRightClick: this._onLabelRightClick,
                onLabelDelete: this._onEventDelete,
                onLabelUpdateStart: this._onLabelUpdateStart,
                onLabelUpdateMove: this._onLabelUpdateMove,
                onLabelUpdateEnd: this._onLabelUpdateEnd,
                onLabelUpdateModeOn: this._onLabelUpdateModeOn,
                onLabelUpdateModeOff: this._onLabelUpdateModeOff,
                onPageChange: this._onPageChange,
                onPageLoaded: this._onPageLoaded,
                onPageLoading: this._onPageLoading,
                onResize: this._onResize,
                pageLoad: this._pageLoad,
                prevIconH: e.prevIconH,
                prevIconV: e.prevIconV,
                resourcesMap: this._resourcesMap,
                responsiveStyle: !0,
                rtl: e.rtl,
                renderHeader: e.renderHeader,
                renderLabel: e.renderLabel,
                renderLabelContent: e.renderLabelContent,
                selectedDates: this._selectedDates,
                selectView: Us,
                showCalendar: this._showCalendar,
                showControls: e.showControls,
                showLabelCount: this._showEventCount,
                showOuterDays: this._showOuterDays,
                showSchedule: this._showSchedule || this._showTimeline,
                showToday: e.showToday,
                showWeekNumbers: this._showWeekNumbers,
                swipe: !t.isTouchDrag,
                theme: e.theme,
                themeVariant: e.themeVariant,
                timeFormat: e.timeFormat,
                timezonePlugin: e.timezonePlugin,
                upIcon: e.upIcon,
                valid: e.valid,
                weeks: this._calendarSize,
                width: e.width,
                getDate: e.getDate,
                getDay: e.getDay,
                getMaxDayOfMonth: e.getMaxDayOfMonth,
                getMonth: e.getMonth,
                getWeekNumber: e.getWeekNumber,
                getYear: e.getYear,
                dateFormat: e.dateFormat,
                dayNames: e.dayNames,
                dayNamesMin: e.dayNamesMin,
                dayNamesShort: e.dayNamesShort,
                eventText: e.eventText,
                eventsText: e.eventsText,
                firstDay: this._firstWeekDay,
                monthNames: e.monthNames,
                monthNamesShort: e.monthNamesShort,
                moreEventsPluralText: e.moreEventsPluralText,
                moreEventsText: e.moreEventsText,
                todayText: e.todayText,
                yearSuffix: e.yearSuffix
            }, this._showDate && !this._showScheduleDays && En("div", {
                className: "mbsc-schedule-date-header mbsc-flex" + this._theme + this._hb
            }, this._showSchedule && !this._showCalendar && e.resources && En("div", {
                className: "mbsc-schedule-time-col"
            }), En("div", {
                className: "mbsc-schedule-date-header-text mbsc-flex-1-1" + this._theme
            }, this._selectedDateHeader), this._showSchedule && !this._showCalendar && e.resources && En("div", {
                className: "mbsc-schedule-fake-scroll-y"
            })), this._showEventList && En("div", {
                className: "mbsc-event-list" + (t.isListScrollable ? " mbsc-event-list-scroll" : ""),
                dangerouslySetInnerHTML: this._eventListHTML,
                onScroll: this._onScroll,
                ref: this._setList
            }, n), this._showSchedule && En(Zr, {
                allDayText: e.allDayText,
                clickToCreate: e.clickToCreate,
                colorsMap: this._colorsMap,
                dayNamesMin: e.dayNamesMin,
                dayNamesShort: e.dayNamesShort,
                dateFormat: e.dateFormat,
                dateFormatLong: e.dateFormatLong,
                displayTimezone: e.displayTimezone,
                dataTimezone: e.dataTimezone,
                dragTimeStep: e.dragTimeStep,
                dragToCreate: e.dragToCreate,
                dragToMove: e.dragToMove,
                dragToResize: e.dragToResize,
                endDay: this._scheduleEndDay,
                endTime: this._scheduleEndTime,
                eventMap: this._eventMap,
                eventOrder: e.eventOrder,
                exclusiveEndDates: e.exclusiveEndDates,
                extendDefaultEvent: e.extendDefaultEvent,
                externalDrop: e.externalDrop,
                firstDay: e.firstDay,
                getDay: e.getDay,
                groupBy: e.groupBy,
                height: t.height,
                invalidateEvent: e.invalidateEvent,
                invalidsMap: this._invalidsMap,
                maxDate: this._maxDate,
                minDate: this._minDate,
                newEventText: e.newEventText,
                renderEventContent: e.renderScheduleEventContent,
                renderEvent: e.renderScheduleEvent,
                renderResource: e.renderResource,
                resources: e.resources,
                rtl: e.rtl,
                scroll: this._shouldScrollSchedule,
                selected: this._selectedDateTime,
                showAllDay: this._showScheduleAllDay,
                showDays: this._showScheduleDays,
                startDay: this._scheduleStartDay,
                startTime: this._scheduleStartTime,
                timeCellStep: this._scheduleTimeCellStep,
                timeFormat: e.timeFormat,
                timeLabelStep: this._scheduleTimeLabelStep,
                timezonePlugin: e.timezonePlugin,
                theme: e.theme,
                themeVariant: e.themeVariant,
                type: this._scheduleType,
                width: t.width,
                onCellClick: this._onCellClick,
                onCellDoubleClick: this._onCellDoubleClick,
                onCellRightClick: this._onCellRightClick,
                onEventClick: this._onEventClick,
                onEventDoubleClick: this._onEventDoubleClick,
                onEventRightClick: this._onEventRightClick,
                onEventDelete: this._onEventDelete,
                onEventDragEnd: this._onEventDragEnd,
                onWeekDayClick: this._onWeekDayClick
            }), this._showTimeline && En($r, {
                allDayText: e.allDayText,
                clickToCreate: e.clickToCreate,
                colorsMap: this._colorsMap,
                dayNames: e.dayNames,
                dayNamesMin: e.dayNamesMin,
                dayNamesShort: e.dayNamesShort,
                dateFormat: e.dateFormat,
                dateFormatLong: e.dateFormatLong,
                dragTimeStep: e.dragTimeStep,
                dragToCreate: e.dragToCreate,
                dragToMove: e.dragToMove,
                dragToResize: e.dragToResize,
                endDay: this._timelineEndDay,
                endTime: this._timelineEndTime,
                eventMap: this._eventMap,
                exclusiveEndDates: e.exclusiveEndDates,
                extendDefaultEvent: e.extendDefaultEvent,
                externalDrop: e.externalDrop,
                firstDay: e.firstDay,
                getDay: e.getDay,
                groupBy: e.groupBy,
                height: t.height,
                invalidsMap: this._invalidsMap,
                maxDate: this._maxDate,
                minDate: this._minDate,
                monthNames: e.monthNames,
                monthNamesShort: e.monthNamesShort,
                newEventText: e.newEventText,
                renderEventContent: e.renderScheduleEventContent,
                renderEvent: e.renderScheduleEvent,
                renderResource: e.renderResource,
                resources: e.resources,
                rtl: e.rtl,
                scroll: this._shouldScrollSchedule,
                selected: this._selectedDateTime,
                startDay: this._timelineStartDay,
                startTime: this._timelineStartTime,
                timeCellStep: this._timelineTimeCellStep,
                timeFormat: e.timeFormat,
                timeLabelStep: this._timelineTimeLabelStep,
                theme: e.theme,
                themeVariant: e.themeVariant,
                type: this._timelineType,
                width: t.width,
                onCellClick: this._onCellClick,
                onCellDoubleClick: this._onCellDoubleClick,
                onCellRightClick: this._onCellRightClick,
                onEventClick: this._onEventClick,
                onEventDoubleClick: this._onEventDoubleClick,
                onEventRightClick: this._onEventRightClick,
                onEventDelete: this._onEventDelete,
                onEventDragEnd: this._onEventDragEnd
            }), En(ns, {
                anchor: this._anchor,
                closeOnScroll: !0,
                contentPadding: !1,
                context: e.context,
                cssClass: "mbsc-calendar-popup " + this._popoverClass,
                display: "anchored",
                isOpen: t.showPopover,
                locale: e.locale,
                maxHeight: "24em",
                onClose: this._onPopoverClose,
                rtl: e.rtl,
                scrollLock: !1,
                showOverlay: !1,
                theme: e.theme,
                themeVariant: e.themeVariant
            }, t.popoverList && En(br, {
                ref: this._setPopoverList,
                theme: e.theme,
                themeVariant: e.themeVariant,
                rtl: e.rtl,
                className: "mbsc-popover-list"
            }, t.popoverList.map((function(n, s) {
                return a._eventRenderer(n, s, t.popoverDate, e, !0)
            }
            )))), t.labelDragData && t.labelDragData.draggedEvent && !t.isTouchDrag && En("div", {
                className: "mbsc-calendar-dragging"
            }));
            return En(ai.Provider, {
                children: i,
                value: s
            })
        }
        ,
        t.prototype._updated = function() {
            this._shouldEnhance && (On && (On(this._list),
            On(this._popoverList)),
            this._shouldEnhance = !1),
            e.prototype._updated.call(this)
        }
        ,
        t
    }(Vr)
      , eo = {
        before: function(e, t) {
            t.selectedDate && (t.defaultSelectedDate = t.selectedDate,
            delete t.selectedDate)
        }
    }
      , to = (ui._fname = "calendarNav",
    ui._selector = "[mbsc-calendar-nav]",
    ui)
      , no = (hi._fname = "calendarNext",
    hi._selector = "[mbsc-calendar-next]",
    hi)
      , ao = (ci._fname = "calendarPrev",
    ci._selector = "[mbsc-calendar-prev]",
    ci)
      , so = (di._fname = "calendarToday",
    di._selector = "[mbsc-calendar-today]",
    di)
      , io = {
        before: function(e, t) {
            t.element = e
        }
    }
      , ro = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "draggable",
        t._selector = "[mbsc-draggable]",
        t._renderOpt = io,
        t
    }(function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            return e.children || ""
        }
        ,
        t
    }(Sr))
      , oo = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "eventcalendar",
        t._renderOpt = eo,
        t
    }(Qr)
      , lo = {
        hasChildren: !0,
        parentClass: "mbsc-button",
        readProps: ["disabled"],
        slots: {
            endIcon: "end-icon",
            icon: "icon",
            startIcon: "start-icon"
        }
    }
      , co = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "button",
        t._selector = "[mbsc-button]",
        t._renderOpt = lo,
        t
    }(Xa)
      , ho = {
        hasChildren: !0,
        parentClass: "mbsc-form-control-label",
        readProps: ["disabled"],
        renderToParent: !0,
        before: function(e, t) {
            t.defaultChecked = e.checked
        }
    }
      , uo = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "checkbox",
        t._selector = "[mbsc-checkbox]",
        t._renderOpt = ho,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._setInput = function(e) {
                t._input = e
            }
            ,
            t
        }
        return r(t, e),
        Object.defineProperty(t.prototype, "checked", {
            get: function() {
                return this._checked
            },
            set: function(e) {
                this._checked = e,
                this.setState({
                    checked: e
                })
            },
            enumerable: !0,
            configurable: !0
        }),
        t.prototype._template = function(e) {
            var t = this.props
              , n = t.children;
            t.className,
            t.color,
            t.defaultChecked;
            var a = t.description
              , s = t.hasChildren;
            t.inputStyle;
            var i = t.label;
            t.onChange,
            t.position,
            t.rtl,
            t.theme,
            t.themeVariant;
            var r = l(t, ["children", "className", "color", "defaultChecked", "description", "hasChildren", "inputStyle", "label", "onChange", "position", "rtl", "theme", "themeVariant"]);
            return En("label", {
                className: this._cssClass
            }, En("input", o({
                type: "checkbox",
                className: "mbsc-form-control-input mbsc-reset",
                onChange: this._onChange,
                disabled: this._disabled,
                checked: this._checked,
                ref: this._setInput
            }, r)), En("span", {
                className: this._boxClass
            }), (i || s) && En("span", {
                className: "mbsc-form-control-label" + this._theme + (this._disabled ? " mbsc-disabled" : "")
            }, i), a && En("span", {
                className: "mbsc-description" + this._theme + (this._disabled ? " mbsc-disabled" : "")
            }, a), n)
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._onChange = function(e) {
                var n = t.s
                  , a = e.target.checked;
                n.checked === le && t.setState({
                    checked: a
                }),
                t._change(a),
                n.onChange && n.onChange(e)
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._mounted = function() {
            var e = this;
            this._unlisten = Ta(this._input, {
                click: !0,
                onBlur: function() {
                    e.setState({
                        hasFocus: !1
                    })
                },
                onFocus: function() {
                    e.setState({
                        hasFocus: !0
                    })
                },
                onPress: function() {
                    e.setState({
                        isActive: !0
                    })
                },
                onRelease: function() {
                    e.setState({
                        isActive: !1
                    })
                }
            })
        }
        ,
        t.prototype._change = function(e) {}
        ,
        t.prototype._render = function(e, t) {
            var n = e.disabled === le ? t.disabled : ye(e.disabled)
              , a = "start" === e.position ? e.rtl ? "right" : "left" : e.rtl ? "left" : "right";
            this._disabled = n,
            this._checked = e.checked !== le ? ye(e.checked) : t.checked === le ? ye(e.defaultChecked) : t.checked,
            this._cssClass = "mbsc-checkbox mbsc-form-control-wrapper mbsc-font " + this._className + this._theme + this._rtl + this._hb + " mbsc-checkbox-" + a + (n ? " mbsc-disabled" : ""),
            this._boxClass = "mbsc-checkbox-box" + this._theme + " mbsc-checkbox-box-" + a + (t.hasFocus && !n ? " mbsc-focus" : "") + (t.isActive && !n ? " mbsc-active" : "") + (e.color ? " mbsc-checkbox-box-" + e.color : "") + (n ? " mbsc-disabled" : "") + (this._checked ? " mbsc-checked" : "")
        }
        ,
        t.prototype._destroy = function() {
            this._unlisten()
        }
        ,
        t.defaults = {
            position: "start"
        },
        t._name = "Checkbox",
        t
    }(Bn)))
      , mo = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._tag = "select",
            t
        }
        return r(t, e),
        t._name = "Dropdown",
        t
    }(Ea)
      , _o = function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._tag = "textarea",
            t
        }
        return r(t, e),
        t._name = "Textarea",
        t
    }(Ea)
      , po = {
        hasChildren: !0,
        parentClass: "mbsc-label",
        readAttrs: ["rows"],
        readProps: ["disabled", "type"],
        renderToParent: !0,
        slots: {
            endIcon: "end-icon",
            label: "label",
            startIcon: "start-icon"
        },
        before: function(e, t, n) {
            var a = e.parentNode
              , s = mt.createElement("span");
            if (a.insertBefore(s, e),
            s.appendChild(e),
            t.inputClass = e.getAttribute("class"),
            "SELECT" === e.nodeName && delete t.hasChildren,
            !t.label && t.hasChildren && (t.label = n[0].textContent),
            t.label) {
                var i = mt.createElement("span");
                a.insertBefore(i, s)
            }
        }
    }
      , vo = o({}, po, {
        hasValue: !0,
        parentClass: "mbsc-select",
        useOwnChildren: !0
    })
      , fo = o({}, po, {
        hasValue: !0
    })
      , go = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "input",
        t._selector = "[mbsc-input]",
        t._renderOpt = po,
        t
    }(Ea)
      , yo = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "dropdown",
        t._selector = "[mbsc-dropdown]",
        t._renderOpt = vo,
        t
    }(mo)
      , bo = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "textarea",
        t._selector = "[mbsc-textarea]",
        t._renderOpt = fo,
        t
    }(_o)
      , xo = []
      , Do = []
      , To = v && !!_t.Promise;
    function Co(e, t, n, a, s) {
        return o({
            closeOnOverlayClick: !1,
            context: t.context,
            cssClass: "mbsc-alert",
            display: t.display || "center",
            onClose: function() {
                e.shift()
            },
            onClosed: function() {
                ko(t, a, s)
            },
            theme: t.theme,
            themeVariant: t.themeVariant
        }, n)
    }
    function So(e, t, n, a) {
        return Co(Do, e, {
            animation: e.animation || (a ? "pop" : le),
            buttons: [],
            closeOnOverlayClick: !1,
            contentPadding: a,
            cssClass: "mbsc-" + (a ? "toast" : "snackbar") + " mbsc-" + (e.color ? e.color : "color-none") + " " + (e.cssClass || ""),
            display: e.display || "bottom",
            focusOnClose: !1,
            focusOnOpen: !1,
            focusTrap: !1,
            onOpen: function(t, n) {
                !function(e, t) {
                    !1 !== e.duration && setTimeout((function() {
                        t.close()
                    }
                    ), e.duration || 3e3)
                }(e, n)
            },
            scrollLock: !1,
            showOverlay: !1,
            touchUi: !0
        }, t, n)
    }
    function ko(e, t, n, a) {
        n(a),
        e.callback && e.callback(a),
        xo.length ? xo[0].open() : Do.length && Do[0].open(),
        t()
    }
    function wo(e, t, n) {
        return So(e, t, n, !0)
    }
    function Mo(e, t, n) {
        return So(e, t, n, !1)
    }
    function Eo(e, t, n) {
        return Co(xo, e, {
            buttons: ["ok"],
            cssClass: "mbsc-alert " + (e.cssClass || ""),
            okText: e.okText || "OK"
        }, t, n)
    }
    function No(e, t, n) {
        var a = !1;
        return Co(xo, e, {
            buttons: ["cancel", "ok"],
            cancelText: e.cancelText || "Cancel",
            cssClass: "mbsc-confirm " + (e.cssClass || ""),
            okText: e.okText || "OK",
            onButtonClick: function(e) {
                "ok" === e.button.name && (a = !0)
            },
            onClosed: function() {
                ko(e, t, n, a)
            }
        }, t, n)
    }
    function Lo(e, t, n, a) {
        var s;
        return Co(xo, e, {
            activeElm: "input",
            buttons: ["cancel", "ok"],
            cancelText: e.cancelText || "Cancel",
            cssClass: "mbsc-prompt " + (e.cssClass || ""),
            okText: e.okText || "OK",
            onButtonClick: function(e) {
                "ok" === e.button.name && (s = !0)
            },
            onClosed: function() {
                ko(e, t, n, s ? a() : null)
            }
        }, t, n)
    }
    function Io(e) {
        xo.length || e.open(),
        xo.push(e)
    }
    function Ho(e) {
        var t = Do[0];
        Do.push(e),
        xo.length || (t ? t.close() : e.open())
    }
    function Oo(e, t) {
        var n;
        return To ? n = new Promise((function(n) {
            e(t, n)
        }
        )) : e(t, De),
        n
    }
    function Po(e) {
        return En("div", {
            className: "mbsc-alert-content"
        }, e.title && En("h2", {
            className: "mbsc-alert-title"
        }, e.title), En("p", {
            className: "mbsc-alert-message"
        }, " ", e.message || "", " "))
    }
    function Yo(e, t, n, a, s, i) {
        if (mt) {
            var r, l = mt.createElement("div"), c = n(t, (function() {
                setTimeout((function() {
                    var e;
                    (e = l)._children && Cn(null, e)
                }
                ))
            }
            ), s, i);
            return Cn(En(ns, o({
                ref: function(e) {
                    r = e
                }
            }, c), e), l),
            a(r),
            r
        }
    }
    function Vo(e, t) {
        Yo(En("div", {
            className: "mbsc-toast-background mbsc-toast-message"
        }, e.message || ""), e, wo, Ho, t)
    }
    function Fo(e, t) {
        var n, a = En("div", {
            className: "mbsc-toast-background mbsc-snackbar-cont"
        }, En("div", {
            className: "mbsc-snackbar-message"
        }, e.message || ""), e.button && En(Xa, {
            className: "mbsc-snackbar-button",
            icon: e.button.icon,
            onClick: function() {
                n && (n.close(),
                e.button && e.button.action && e.button.action())
            },
            theme: e.theme,
            themeVariant: e.themeVariant,
            variant: "flat"
        }, e.button.text));
        n = Yo(a, e, Mo, Ho, t)
    }
    function zo(e, t) {
        Yo(Po(e), e, Eo, Io, t)
    }
    function Ro(e, t) {
        Yo(Po(e), e, No, Io, t)
    }
    function Ao(e, t) {
        var n = "";
        Yo(En("div", {
            className: "mbsc-alert-content"
        }, e.title && En("h2", {
            className: "mbsc-alert-title"
        }, e.title), En("p", {
            className: "mbsc-alert-message"
        }, " ", e.message || ""), En(Ea, {
            className: "mbsc-prompt-input",
            label: e.label,
            onChange: function(e) {
                n = e.target.value
            },
            placeholder: e.placeholder || "",
            type: e.inputType,
            theme: e.theme,
            themeVariant: e.themeVariant
        })), e, Lo, Io, t, (function() {
            return n
        }
        ))
    }
    var Wo = {
        hasChildren: !0,
        parentClass: "mbsc-page",
        before: function(e, t) {
            t.tag = e.nodeName.toLowerCase()
        }
    }
      , Uo = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "page",
        t._selector = "[mbsc-page]",
        t._renderOpt = Wo,
        t
    }(function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._template = function(e) {
            return En(e.tag || "div", {
                className: this._cssClass,
                ref: this._setEl
            }, e.children)
        }
        ,
        t
    }(function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t.prototype._render = function(e) {
            this._cssClass = "mbsc-page mbsc-font " + this._className + this._theme + this._rtl
        }
        ,
        t.defaults = {},
        t._name = "Page",
        t
    }(Bn)))
      , Bo = 1
      , jo = {
        hasChildren: !0,
        parentClass: "mbsc-form-control-label",
        readAttrs: ["value"],
        readProps: ["disabled", "name"],
        renderToParent: !0,
        before: function(e, t) {
            t.defaultChecked = e.checked
        }
    }
      , Xo = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "radio",
        t._selector = "[mbsc-radio]",
        t._renderOpt = jo,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._setInput = function(e) {
                t._input = e
            }
            ,
            t
        }
        return r(t, e),
        Object.defineProperty(t.prototype, "checked", {
            get: function() {
                return this._checked
            },
            set: function(e) {
                this._checked = e,
                this._toggle(e)
            },
            enumerable: !0,
            configurable: !0
        }),
        t.prototype._template = function(e, t) {
            var n = this
              , a = this.props
              , s = a.children;
            a.className,
            a.color,
            a.defaultChecked;
            var i = a.description
              , r = a.hasChildren
              , c = a.label;
            a.onChange,
            a.position,
            a.rtl,
            a.theme,
            a.themeVariant;
            var h = l(a, ["children", "className", "color", "defaultChecked", "description", "hasChildren", "label", "onChange", "position", "rtl", "theme", "themeVariant"]);
            return En(Wi.Consumer, null, (function(e) {
                return n._groupOptions(e),
                En("label", {
                    className: n._cssClass
                }, En("input", o({
                    checked: n._checked,
                    className: "mbsc-form-control-input mbsc-reset",
                    disabled: n._disabled,
                    name: n._name,
                    onChange: n._onChange,
                    type: "radio",
                    value: n._value,
                    ref: n._setInput
                }, h)), En("span", {
                    className: n._boxClass
                }), (c || r) && En("span", {
                    className: "mbsc-form-control-label" + n._theme + (n._disabled ? " mbsc-disabled" : "")
                }, c), i && En("span", {
                    className: "mbsc-description" + n._theme + (n._disabled ? " mbsc-disabled" : "")
                }, i), s)
            }
            ))
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._id = "mbsc-radio-" + Bo++,
            t._onChange = function(e) {
                var n = t.s
                  , a = e.target.checked;
                t._change(a),
                t._onGroupChange && t._onGroupChange(e, t._value),
                t._toggle(a),
                n.onChange && n.onChange(e)
            }
            ,
            t._onValueChange = function(e) {
                var n = t.s
                  , a = e === t._value;
                n.checked === le && t.setState({
                    checked: a
                }),
                t._change(a)
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._mounted = function() {
            var e = this;
            this._unlisten = Ta(this._input, {
                click: !0,
                onBlur: function() {
                    e.setState({
                        hasFocus: !1
                    })
                },
                onFocus: function() {
                    e.setState({
                        hasFocus: !0
                    })
                },
                onPress: function() {
                    e.setState({
                        isActive: !0
                    })
                },
                onRelease: function() {
                    e.setState({
                        isActive: !1
                    })
                }
            })
        }
        ,
        t.prototype._change = function(e) {}
        ,
        t.prototype._toggle = function(e) {
            this.s.checked === le && this.setState({
                checked: e
            }),
            Xi(this._name, this._value)
        }
        ,
        t.prototype._groupOptions = function(e) {
            var t = e.color
              , n = e.disabled
              , a = e.name
              , s = e.onChange
              , i = e.position
              , r = e.rtl
              , o = e.value
              , l = this.s
              , c = this.state
              , h = r === le ? l.rtl : r
              , d = t === le ? l.color : t
              , u = "start" === (i === le ? l.position : i) ? l.rtl ? "right" : "left" : l.rtl ? "left" : "right"
              , m = n === le ? l.disabled === le ? c.disabled : ye(l.disabled) : ye(n)
              , _ = l.checked !== le ? ye(l.checked) : c.checked === le ? ye(l.defaultChecked) : c.checked;
            this._value = l.value === le ? this._id : l.value,
            this._onGroupChange = s,
            this._name = a === le ? l.name : a,
            this._rtl = h ? " mbsc-rtl" : " mbsc-ltr",
            this._checked = o === le ? _ : o === this._value,
            this._disabled = m,
            this._cssClass = "mbsc-radio mbsc-form-control-wrapper mbsc-font " + this._className + this._theme + this._rtl + this._hb + " mbsc-radio-" + u + (m ? " mbsc-disabled" : ""),
            this._boxClass = "mbsc-radio-box" + this._theme + " mbsc-radio-box-" + u + (c.hasFocus && !m ? " mbsc-focus" : "") + (c.isActive && !m ? " mbsc-active" : "") + (d ? " mbsc-radio-box-" + d : "") + (m ? " mbsc-disabled" : "") + (this._checked ? " mbsc-checked" : "")
        }
        ,
        t.prototype._updated = function() {
            this._name && !this._unsubscribe && (this._unsubscribe = Bi(this._name, this._onValueChange))
        }
        ,
        t.prototype._destroy = function() {
            ji(this._name, this._unsubscribe),
            this._unlisten()
        }
        ,
        t.defaults = {
            position: "start"
        },
        t._name = "Radio",
        t
    }(Bn)))
      , Jo = {
        hasChildren: !0,
        parentClass: "mbsc-segmented-button",
        readAttrs: ["value"],
        readProps: ["disabled", "name"],
        renderToParent: !0,
        before: function(e, t) {
            t.select = "checkbox" === e.type ? "multiple" : "single",
            t.defaultChecked = e.checked,
            t.inputClass = e.getAttribute("class");
            var n = e.parentNode
              , a = n.parentNode;
            if (null === a.getAttribute("mbsc-segmented-group")) {
                var s = mt.createElement("div");
                s.setAttribute("mbsc-segmented-group", ""),
                a.insertBefore(s, n),
                s.appendChild(n),
                Xt(a.querySelectorAll('input[name="' + e.name + '"]'), (function(e) {
                    s.appendChild(e.parentNode)
                }
                ))
            }
        }
    }
      , Ko = {
        hasChildren: !0,
        parentClass: "mbsc-segmented"
    }
      , qo = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "segmented",
        t._selector = "[mbsc-segmented]",
        t._renderOpt = Jo,
        t
    }(Qi)
      , Go = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "segmentedGroup",
        t._selector = "[mbsc-segmented-group]",
        t._renderOpt = Ko,
        t
    }(Zi)
      , Zo = {
        readProps: ["disabled", "type", "min", "max", "step"],
        renderToParent: !0,
        before: function(e, t) {
            var n = e.parentNode
              , a = mt.createElement("div");
            n.insertBefore(a, e),
            a.appendChild(e),
            t.defaultValue = +e.value,
            t.inputClass = e.getAttribute("class");
            var s = mt.createElement("div");
            n.insertBefore(s, a)
        }
    }
      , $o = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "stepper",
        t._selector = "[mbsc-stepper]",
        t._renderOpt = Zo,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._onLabelClick = function(e) {
                e.preventDefault()
            }
            ,
            t._setInput = function(e) {
                t._input = e
            }
            ,
            t
        }
        return r(t, e),
        Object.defineProperty(t.prototype, "value", {
            get: function() {
                return this._value
            },
            set: function(e) {
                this._value = e,
                this.setState({
                    value: e
                })
            },
            enumerable: !0,
            configurable: !0
        }),
        t.prototype._template = function(e) {
            var t = this.props;
            t.children,
            t.className,
            t.color,
            t.defaultValue;
            var n = t.description;
            t.inputClass,
            t.inputPosition;
            var a = t.label;
            t.onChange,
            t.rtl,
            t.theme,
            t.themeVariant,
            t.value;
            var s = l(t, ["children", "className", "color", "defaultValue", "description", "inputClass", "inputPosition", "label", "onChange", "rtl", "theme", "themeVariant", "value"])
              , i = this._theme;
            return En("label", {
                className: this._cssClass,
                onClick: this._onLabelClick
            }, En("div", {
                className: "mbsc-stepper-content"
            }, a && En("span", {
                className: "mbsc-stepper-label" + i + (this._disabled ? " mbsc-disabled" : "")
            }, a), n && En("span", {
                className: "mbsc-description" + i + (this._disabled ? " mbsc-disabled" : "")
            }, n)), En("div", {
                className: "mbsc-stepper-control" + i + this._rtl
            }, En(Xa, {
                className: "mbsc-stepper-minus mbsc-stepper-button",
                disabled: this._disabledMinus,
                onClick: this._onMinusClick,
                theme: e.theme,
                themeVariant: e.themeVariant
            }, En("span", {
                className: "mbsc-stepper-inner" + i
            }, "???")), En("input", o({
                className: "mbsc-stepper-input" + (this._disabled ? " mbsc-disabled" : "") + " " + (e.inputClass || "") + i,
                disabled: this._disabled,
                max: this._max,
                min: this._min,
                ref: this._setInput,
                step: this._step,
                type: "number"
            }, s)), En(Xa, {
                className: "mbsc-stepper-plus mbsc-stepper-button",
                disabled: this._disabledPlus,
                onClick: this._onPlusClick,
                theme: e.theme,
                themeVariant: e.themeVariant
            }, En("span", {
                className: "mbsc-stepper-inner" + i
            }, "+"))))
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._onChange = function(e) {
                var n = t.s
                  , a = t._round(+e.target.value);
                e.target.value = a + "",
                n.value === le && t.setState({
                    value: a
                }),
                t._change(a),
                n.onChange && n.onChange(e)
            }
            ,
            t._onMinusClick = function() {
                t._setValue(t._value - t._step)
            }
            ,
            t._onPlusClick = function() {
                t._setValue(t._value + t._step)
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._change = function(e) {}
        ,
        t.prototype._mounted = function() {
            Nt(this._input, Kn, this._onChange)
        }
        ,
        t.prototype._render = function(e, t) {
            this._max = ve(e.max) ? 100 : +e.max,
            this._min = ve(e.min) ? 0 : +e.min,
            this._step = ve(e.step) ? 1 : +e.step;
            var n = e.disabled === le ? t.disabled : ye(e.disabled)
              , a = e.defaultValue !== le ? e.defaultValue : this._min || 0
              , s = e.value !== le ? e.value : t.value !== le ? t.value : a;
            this._value = this._round(s),
            this._changed = this._value !== +s,
            this._disabled = n,
            this._disabledMinus = this._value === this._min || n,
            this._disabledPlus = this._value === this._max || n,
            this._cssClass = "mbsc-stepper mbsc-form-control-wrapper mbsc-font mbsc-" + (e.color || "color-none") + this._theme + this._rtl + this._hb + " mbsc-stepper-" + e.inputPosition + (n ? " mbsc-disabled" : "")
        }
        ,
        t.prototype._updated = function() {
            this._input.value = this._value + "",
            this._changed && (jt(this._input, Kn),
            this._changed = !1)
        }
        ,
        t.prototype._destroy = function() {
            Lt(this._input, Kn, this._onChange)
        }
        ,
        t.prototype._round = function(e) {
            var t = this._step
              , n = Math.abs(t) < 1 ? (t + "").split(".")[1].length : 0;
            return +Math.min(this._max, Math.max(Math.round(e / t) * t, this._min)).toFixed(n)
        }
        ,
        t.prototype._setValue = function(e) {
            var t = +this._input.value
              , n = this._round(e);
            t !== n && (this._input.value = n + "",
            jt(this._input, Kn))
        }
        ,
        t.defaults = {
            inputPosition: "center"
        },
        t._name = "Stepper",
        t
    }(Bn)))
      , Qo = {
        hasChildren: !0,
        parentClass: "mbsc-form-control-label",
        readProps: ["disabled"],
        renderToParent: !0,
        before: function(e, t) {
            t.defaultChecked = e.checked
        }
    }
      , el = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "switch",
        t._selector = "[mbsc-switch]",
        t._renderOpt = Qo,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._setInput = function(e) {
                t._input = e
            }
            ,
            t._setHandleCont = function(e) {
                t._handleCont = e
            }
            ,
            t._setHandle = function(e) {
                t._handle = e
            }
            ,
            t
        }
        return r(t, e),
        Object.defineProperty(t.prototype, "checked", {
            get: function() {
                return this._checked
            },
            set: function(e) {
                this._checked = e,
                this.setState({
                    checked: e
                })
            },
            enumerable: !0,
            configurable: !0
        }),
        t.prototype._template = function(e) {
            var t = this.props
              , n = t.children;
            t.className,
            t.color,
            t.defaultChecked;
            var a = t.description
              , s = t.hasChildren;
            t.inputStyle;
            var i = t.label;
            t.onChange,
            t.position,
            t.rtl,
            t.theme,
            t.themeVariant;
            var r = l(t, ["children", "className", "color", "defaultChecked", "description", "hasChildren", "inputStyle", "label", "onChange", "position", "rtl", "theme", "themeVariant"]);
            return En("label", {
                className: this._cssClass,
                ref: this._setEl,
                onClick: this._onLabelClick
            }, En("input", o({
                type: "checkbox",
                className: "mbsc-form-control-input mbsc-reset",
                onChange: De,
                disabled: this._disabled,
                checked: this._checked,
                ref: this._setInput
            }, r)), En("span", {
                className: this._handleContClass,
                ref: this._setHandleCont
            }, En("span", {
                className: this._handleClass,
                ref: this._setHandle
            })), (i || s) && En("span", {
                className: "mbsc-form-control-label" + this._theme + (this._disabled ? " mbsc-disabled" : "")
            }, i), a && En("span", {
                className: "mbsc-description" + this._theme + (this._disabled ? " mbsc-disabled" : "")
            }, a), n)
        }
        ,
        t
    }(function(e) {
        function t() {
            var t = null !== e && e.apply(this, arguments) || this;
            return t._onChange = function(e) {
                var n = t.s
                  , a = e.target.checked;
                e.stopPropagation(),
                n.checked === le && t.setState({
                    checked: a
                }),
                t._change(a),
                n.onChange && n.onChange(e)
            }
            ,
            t._onLabelClick = function(e) {
                e.preventDefault()
            }
            ,
            t
        }
        return r(t, e),
        t.prototype._change = function(e) {}
        ,
        t.prototype._setHandleLeft = function(e) {
            this._handle.style.left = e + "%"
        }
        ,
        t.prototype._mounted = function() {
            var e, t, n, a, s, i = this;
            Nt(this._input, qn, this._onChange),
            this._inputUnlisten = Ta(this._input, {
                onBlur: function() {
                    i.setState({
                        hasFocus: !1
                    })
                },
                onFocus: function() {
                    i._disabled || i.setState({
                        hasFocus: !0
                    })
                }
            }),
            this._unlisten = Ta(this._el, {
                click: !1,
                onEnd: function(e) {
                    if (!i._disabled && !s) {
                        if (a) {
                            var t = Math.abs(e.deltaX) < 3 && Math.abs(e.deltaY) < 3
                              , r = +new Date - n > 300
                              , o = t && !r ? !i._checked : i._handleLeft >= 50;
                            o !== i._checked && (i._input.click(),
                            i._change(o)),
                            a = !1
                        }
                        i.setState({
                            dragging: !1,
                            isActive: !1
                        })
                    }
                },
                onMove: function(n) {
                    var r = n.domEvent
                      , o = i.state.dragging;
                    if (!i._disabled && !s && a && e && (Math.abs(n.deltaX) > 5 && (o = !0,
                    i.setState({
                        dragging: !0
                    })),
                    o)) {
                        r.cancelable && r.preventDefault();
                        var l = (n.startX - t) / e * 100
                          , c = Math.max(Math.min(l, 100), 0) + n.deltaX / e * 100
                          , h = Math.max(Math.min(c, 100), 0);
                        i._handleLeft = h,
                        i._setHandleLeft(h)
                    }
                    !o && !s && Math.abs(n.deltaY) > 7 && r.type === da && (s = !0,
                    i.setState({
                        isActive: !1
                    }))
                },
                onStart: function(r) {
                    i._disabled || (s = !1,
                    e = i._handleCont.clientWidth,
                    t = Wt(i._handleCont).left,
                    n = +new Date,
                    (r.domEvent.target === i._handleCont || i._handleCont.contains(r.domEvent.target)) && (a = !0),
                    i.setState({
                        isActive: !0
                    }))
                }
            }),
            this._setHandleLeft(this._handleLeft)
        }
        ,
        t.prototype._render = function(e, t) {
            var n = e.disabled === le ? t.disabled : ye(e.disabled)
              , a = "start" === e.position ? e.rtl ? "right" : "left" : e.rtl ? "left" : "right"
              , s = e.color !== le ? " mbsc-switch-" + e.color : "";
            if (this._disabled = n,
            this._checked = e.checked !== le ? ye(e.checked) : t.checked !== le ? t.checked : ye(e.defaultChecked),
            this._cssClass = "mbsc-switch mbsc-form-control-wrapper mbsc-font " + this._className + this._theme + this._rtl + this._hb + " mbsc-switch-" + a + (n ? " mbsc-disabled" : ""),
            !t.dragging) {
                var i = this._checked ? 100 : 0;
                i !== this._handleLeft && this._handle && this._setHandleLeft(i),
                this._handleLeft = i
            }
            this._handleContClass = "mbsc-switch-track mbsc-switch-track-" + a + this._theme + s + (this._checked ? " mbsc-checked" : "") + (n ? " mbsc-disabled" : "") + (t.hasFocus ? " mbsc-focus" : "") + (t.isActive ? " mbsc-active" : ""),
            this._handleClass = "mbsc-switch-handle" + this._theme + s + (t.dragging ? "" : " mbsc-switch-handle-animate") + (this._checked ? " mbsc-checked" : "") + (this.state.isActive ? " mbsc-active" : "") + (n ? " mbsc-disabled" : "") + (this.state.hasFocus ? " mbsc-focus" : "")
        }
        ,
        t.prototype._destroy = function() {
            this._unlisten(),
            this._inputUnlisten(),
            Lt(this._input, qn, this._onChange)
        }
        ,
        t.defaults = {
            position: "end"
        },
        t._name = "Switch",
        t
    }(Bn)))
      , tl = {
        before: function(e, t) {
            var n, a, s = this;
            t.onOpen && (n = t.onOpen),
            t.onClosed && (a = t.onClosed);
            var i = It(e)
              , r = i && i.createComment("popup");
            r && e.parentNode && e.parentNode.insertBefore(r, e),
            e.style.display = "none",
            t.onOpen = function(t, a) {
                e.style.display = "",
                t.target.querySelector(".mbsc-popup-content").appendChild(e),
                n && n.call(s, t, a)
            }
            ,
            t.onClosed = function(t, n) {
                e.style.display = "none",
                r && r.parentNode && r.parentNode.insertBefore(e, r),
                a && a.call(s, t, n)
            }
        }
    }
      , nl = function(e) {
        function t() {
            return null !== e && e.apply(this, arguments) || this
        }
        return r(t, e),
        t._fname = "popup",
        t._renderOpt = tl,
        t
    }(ns)
      , al = a.default.extend
      , sl = {};
    function il(e) {
        e._selector && function(e) {
            Nn[e._name] = e
        }(e),
        sl[e._fname] = function(t) {
            return e && this.each((function() {
                Hn(e, this, t, e._renderOpt)
            }
            )),
            this
        }
    }
    a.default.fn.mobiscroll = function(e) {
        var t = arguments;
        if (al(this, sl),
        pe(e)) {
            var n = this;
            return this.each((function() {
                var a, s = this.__mbscInst;
                if (s && s[e] && (a = s[e].apply(s, Array.prototype.slice.call(t, 1))) !== le)
                    return n = a,
                    !1
            }
            )),
            n
        }
        return this
    }
    ,
    v && (a.default((function() {
        On(mt)
    }
    )),
    a.default(mt).on("mbsc-enhance", (function(e) {
        On(e.target)
    }
    ))),
    il(pr),
    il(ro),
    il(oo),
    il(to),
    il(no),
    il(ao),
    il(so),
    il(co),
    il(uo),
    il(go),
    il(yo),
    il(bo),
    il(Uo),
    il(Xo),
    il(qo),
    il(Go),
    il(fr),
    il($o),
    il(el),
    il(nl),
    s.fw = "jquery",
    e.Button = co,
    e.CalendarNav = to,
    e.CalendarNext = no,
    e.CalendarPrev = ao,
    e.CalendarToday = so,
    e.Checkbox = uo,
    e.Datepicker = pr,
    e.Draggable = ro,
    e.Dropdown = yo,
    e.Eventcalendar = oo,
    e.Input = go,
    e.Page = Uo,
    e.Popup = nl,
    e.Radio = Xo,
    e.Segmented = qo,
    e.SegmentedGroup = Go,
    e.Select = fr,
    e.Stepper = $o,
    e.Switch = el,
    e.Textarea = bo,
    e.alert = function(e) {
        return Oo(zo, e)
    }
    ,
    e.autoDetect = k,
    e.confirm = function(e) {
        return Oo(Ro, e)
    }
    ,
    e.createCustomTheme = E,
    e.enhance = On,
    e.formatDate = ws,
    e.getAutoTheme = M,
    e.getInst = function(e, t) {
        return t ? e.__mbscFormInst : e.__mbscInst
    }
    ,
    e.getJson = mr,
    e.globalChanges = w,
    e.hijriCalendar = ht,
    e.jalaliCalendar = Oe,
    e.locale = ut,
    e.localeAr = Q,
    e.localeBg = ee,
    e.localeCa = te,
    e.localeCs = ne,
    e.localeDa = ae,
    e.localeDe = se,
    e.localeEl = ie,
    e.localeEn = dt,
    e.localeEnGB = re,
    e.localeEs = oe,
    e.localeFa = Pe,
    e.localeFi = Ye,
    e.localeFr = Ve,
    e.localeHe = Fe,
    e.localeHi = ze,
    e.localeHr = Re,
    e.localeHu = Ae,
    e.localeIt = We,
    e.localeJa = Ue,
    e.localeKo = Be,
    e.localeLt = je,
    e.localeNl = Xe,
    e.localeNo = Je,
    e.localePl = Ke,
    e.localePtBR = Ge,
    e.localePtPT = qe,
    e.localeRo = Ze,
    e.localeRu = $e,
    e.localeRuUA = Qe,
    e.localeSk = et,
    e.localeSr = tt,
    e.localeSv = nt,
    e.localeTh = at,
    e.localeTr = st,
    e.localeUa = it,
    e.localeVi = rt,
    e.localeZh = ot,
    e.luxonTimezone = Mr,
    e.momentTimezone = Lr,
    e.options = T,
    e.parseDate = Ms,
    e.platform = N,
    e.prompt = function(e) {
        return Oo(Ao, e)
    }
    ,
    e.registerComponent = il,
    e.remote = s,
    e.setOptions = function(e) {
        for (var t in e)
            e.hasOwnProperty(t) && (T[t] = e[t]);
        w.next(T)
    }
    ,
    e.snackbar = function(e) {
        return Oo(Fo, e)
    }
    ,
    e.themes = S,
    e.toast = function(e) {
        return Oo(Vo, e)
    }
    ,
    e.util = C,
    Object.defineProperty(e, "__esModule", {
        value: !0
    })
}
));
