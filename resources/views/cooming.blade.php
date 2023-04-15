<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coming Soon</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="cooming/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="cooming/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="cooming/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="cooming/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="cooming/css/util.css">
    <link rel="stylesheet" type="text/css" href="cooming/css/main.css">

    <meta name="robots" content="noindex, follow">
    <script nonce="7571b477-0846-4ec5-85ef-2c38b942840f">
        (function(w, d) {
            ! function(cO, cP, cQ, cR) {
                cO[cQ] = cO[cQ] || {};
                cO[cQ].executed = [];
                cO.zaraz = {
                    deferred: [],
                    listeners: []
                };
                cO.zaraz.q = [];
                cO.zaraz._f = function(cS) {
                    return function() {
                        var cT = Array.prototype.slice.call(arguments);
                        cO.zaraz.q.push({
                            m: cS,
                            a: cT
                        })
                    }
                };
                for (const cU of ["track", "set", "debug"]) cO.zaraz[cU] = cO.zaraz._f(cU);
                cO.zaraz.init = () => {
                    var cV = cP.getElementsByTagName(cR)[0],
                        cW = cP.createElement(cR),
                        cX = cP.getElementsByTagName("title")[0];
                    cX && (cO[cQ].t = cP.getElementsByTagName("title")[0].text);
                    cO[cQ].x = Math.random();
                    cO[cQ].w = cO.screen.width;
                    cO[cQ].h = cO.screen.height;
                    cO[cQ].j = cO.innerHeight;
                    cO[cQ].e = cO.innerWidth;
                    cO[cQ].l = cO.location.href;
                    cO[cQ].r = cP.referrer;
                    cO[cQ].k = cO.screen.colorDepth;
                    cO[cQ].n = cP.characterSet;
                    cO[cQ].o = (new Date).getTimezoneOffset();
                    if (cO.dataLayer)
                        for (const da of Object.entries(Object.entries(dataLayer).reduce(((db, dc) => ({
                                ...db[1],
                                ...dc[1]
                            }))))) zaraz.set(da[0], da[1], {
                            scope: "page"
                        });
                    cO[cQ].q = [];
                    for (; cO.zaraz.q.length;) {
                        const dd = cO.zaraz.q.shift();
                        cO[cQ].q.push(dd)
                    }
                    cW.defer = !0;
                    for (const de of [localStorage, sessionStorage]) Object.keys(de || {}).filter((dg => dg
                        .startsWith("_zaraz_"))).forEach((df => {
                        try {
                            cO[cQ]["z_" + df.slice(7)] = JSON.parse(de.getItem(df))
                        } catch {
                            cO[cQ]["z_" + df.slice(7)] = de.getItem(df)
                        }
                    }));
                    cW.referrerPolicy = "origin";
                    cW.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(cO[cQ])));
                    cV.parentNode.insertBefore(cW, cV)
                };
                ["complete", "interactive"].includes(cP.readyState) ? zaraz.init() : cO.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>

    <div class="simpleslide100">
        <div class="simpleslide100-item bg-img1" style="background-image: url('cooming/images/bg01.jpg');"></div>
        <div class="simpleslide100-item bg-img1" style="background-image: url('cooming/images/bg02.jpg');"></div>
        <div class="simpleslide100-item bg-img1" style="background-image: url('cooming/images/bg03.jpg');"></div>
    </div>
    <div class="size1 overlay1">

        <div class="size1 flex-col-c-m p-l-15 p-r-15 p-t-50 p-b-50">
            <h3 class="l1-txt1 txt-center p-b-25">
                Coming Soon
            </h3>
            <p class="m2-txt1 txt-center p-b-48">
                Our website is under construction, follow us for update now!
            </p>
            <div class="flex-w flex-c-m cd100 p-b-33">
                <div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
                    <span class="l2-txt1 p-b-9 days">35</span>
                    <span class="s2-txt1">Days</span>
                </div>
                <div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
                    <span class="l2-txt1 p-b-9 hours">17</span>
                    <span class="s2-txt1">Hours</span>
                </div>
                <div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
                    <span class="l2-txt1 p-b-9 minutes">50</span>
                    <span class="s2-txt1">Minutes</span>
                </div>
                <div class="flex-col-c-m size2 bor1 m-l-15 m-r-15 m-b-20">
                    <span class="l2-txt1 p-b-9 seconds">39</span>
                    <span class="s2-txt1">Seconds</span>
                </div>
            </div>
            <form class="w-full flex-w flex-c-m validate-form">
                <div class="wrap-input100 validate-input where1" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100 placeholder0 s2-txt2" type="text" name="email"
                        placeholder="Enter Email Address">
                    <span class="focus-input100"></span>
                </div>
                <button class="flex-c-m size3 s2-txt3 how-btn1 trans-04 where1">
                    Subscribe
                </button>
            </form>
        </div>
    </div>

    <script src="cooming/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="cooming/vendor/bootstrap/js/popper.js"></script>
    <script src="cooming/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="cooming/vendor/select2/select2.min.js"></script>

    <script src="cooming/vendor/countdowntime/moment.min.js"></script>
    <script src="cooming/vendor/countdowntime/moment-timezone.min.js"></script>
    <script src="cooming/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
    <script src="cooming/vendor/countdowntime/countdowntime.js"></script>
    <script>
        $('.cd100').countdown100({
            /*Set Endtime here*/
            /*Endtime must be > current time*/
            endtimeYear: 0,
            endtimeMonth: 0,
            endtimeDate: 35,
            endtimeHours: 18,
            endtimeMinutes: 0,
            endtimeSeconds: 0,
            timeZone: ""
            // ex:  timeZone: "America/New_York"
            //go to " http://momentjs.com/timezone/ " to get timezone
        });
    </script>

    <script src="cooming/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <script src="cooming/js/main.js"></script>
</body>

</html>
