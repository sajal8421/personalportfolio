<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Personal HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/all-theme.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/css/css+responsive.css') }}">
    
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <script data-pagespeed-no-defer>
                        //<![CDATA[
                        (function() {
                            for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, c, a) {
                                        if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                                        b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                                    }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global &&
                                    null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length -
                                1; l++) {
                                var m = k[l];
                                m in h || (h[m] = {});
                                h = h[m]
                            }
                            var n = k[k.length - 1],
                                p = h[n],
                                q = p ? p : function(b) {
                                    var c;
                                    if (null == this) throw new TypeError(
                                        "The 'this' value for String.prototype.repeat must not be null or undefined");
                                    c = this + "";
                                    if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                                    b |= 0;
                                    for (var a = ""; b;)
                                        if (b & 1 && (a += c), b >>>= 1) c += c;
                                    return a
                                };
                            q != p && null != q && g(h, n, {
                                configurable: !0,
                                writable: !0,
                                value: q
                            });
                            var t = this;

                            function u(b, c) {
                                var a = b.split("."),
                                    d = t;
                                a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                                for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} :
                                    d[e] = c
                            };

                            function v(b) {
                                var c = b.length;
                                if (0 < c) {
                                    for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                    return a
                                }
                                return []
                            };

                            function w(b) {
                                var c = window;
                                if (c.addEventListener) c.addEventListener("load", b, !1);
                                else if (c.attachEvent) c.attachEvent("onload", b);
                                else {
                                    var a = c.onload;
                                    c.onload = function() {
                                        b.call(this);
                                        a && a.call(this)
                                    }
                                }
                            };
                            var x;

                            function y(b, c, a, d, e) {
                                this.h = b;
                                this.j = c;
                                this.l = a;
                                this.f = e;
                                this.g = {
                                    height: window.innerHeight || document.documentElement.clientHeight || document.body
                                        .clientHeight,
                                    width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
                                };
                                this.i = d;
                                this.b = {};
                                this.a = [];
                                this.c = {}
                            }

                            function z(b, c) {
                                var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                                if (a = e && !(e in b.c))
                                    if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                                    else {
                                        d = c.getBoundingClientRect();
                                        var f = document.body;
                                        a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f
                                            .parentNode || f).scrollTop);
                                        d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f
                                            .parentNode || f).scrollLeft);
                                        f = a.toString() + "," + d;
                                        b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width)
                                    } a && (b.a.push(e),
                                    b.c[e] = !0)
                            }
                            y.prototype.checkImageForCriticality = function(b) {
                                b.getBoundingClientRect && z(this, b)
                            };
                            u("pagespeed.CriticalImages.checkImageForCriticality", function(b) {
                                x.checkImageForCriticality(b)
                            });
                            u("pagespeed.CriticalImages.checkCriticalImages", function() {
                                A(x)
                            });

                            function A(b) {
                                b.b = {};
                                for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document
                                    .getElementsByTagName(c[d])));
                                if (a.length && a[0].getBoundingClientRect) {
                                    for (d = 0; c = a[d]; ++d) z(b, c);
                                    a = "oh=" + b.l;
                                    b.f && (a += "&n=" + b.f);
                                    if (c = !!b.a.length)
                                        for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                                            var e = "," + encodeURIComponent(b.a[d]);
                                            131072 >= a.length + e.length && (a += e)
                                        }
                                    b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a +=
                                        e), c = !0);
                                    C = a;
                                    if (c) {
                                        d = b.h;
                                        b = b.j;
                                        var f;
                                        if (window.XMLHttpRequest) f =
                                            new XMLHttpRequest;
                                        else if (window.ActiveXObject) try {
                                            f = new ActiveXObject("Msxml2.XMLHTTP")
                                        } catch (r) {
                                            try {
                                                f = new ActiveXObject("Microsoft.XMLHTTP")
                                            } catch (D) {}
                                        }
                                        f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f
                                            .setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
                                    }
                                }
                            }

                            function B() {
                                var b = {},
                                    c;
                                c = document.getElementsByTagName("IMG");
                                if (!c.length) return {};
                                var a = c[0];
                                if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                                for (var d = 0; a = c[d]; ++d) {
                                    var e = a.getAttribute("data-pagespeed-url-hash");
                                    e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in
                                        b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
                                        rw: a.width,
                                        rh: a.height,
                                        ow: a.naturalWidth,
                                        oh: a.naturalHeight
                                    })
                                }
                                return b
                            }
                            var C = "";
                            u("pagespeed.CriticalImages.getBeaconData", function() {
                                return C
                            });
                            u("pagespeed.CriticalImages.Run", function(b, c, a, d, e, f) {
                                var r = new y(b, c, a, e, f);
                                x = r;
                                d && w(function() {
                                    window.setTimeout(function() {
                                        A(r)
                                    }, 0)
                                })
                            });
                        })();

                        pagespeed.CriticalImages.Run('/mod_pagespeed_beacon',
                            'https://preview.colorlib.com/theme/personalportfolio/index.html', '-ilGEe-FWC', true, false, 'vVLLhuAhpXU');
                        //]]>
                    </script><img
                        src="data:image/webp;base64,UklGRoACAABXRUJQVlA4IHQCAABQDgCdASosADEAPm0qkUWkIqGZWScwQAbEswBl0OBdz/XJsA7QG2A0MzqJfQA6V/ygLt6/C/if0CB+ciTtmIsDyAP696BOcX6j9gn9XyH428AZ6v6bOVyHf7qm9Drff3THDCWGckMEWwQJgXZD9b6sT09rfjTyXRiHPgAA/v7s8KUBKtL0wnIHoOJtbSyhmdA5voUiYapgYu3ndmsFmpEEVFiJASnSOn5KHfOydzE1zWf/y5Wv16uUzfmNCr1hcz/rChb5PytYTILH/7D5A7ACA4bs6HYOmCr2avM8XiigS8vUSODWS+3hVTdVJs9MAP8xVQxZQr9ZtQCw+0fRik8Roc4AjxGh+181y3J5dL9gtVls7i9+CFncoxjRSXWk9tcL72ybf4zeqi9+rPTtSH3Ns3X3dwexEp19q3s8A/exn4pM43i//6XH2X0MEQUu7U7p0F++Vf5xjQdTgs6iaptrZnrSZcGd1hA/+RX/NjO7k5troEsipPXs/3yG+43qnhEoW4GnNyfUxbwVultK9rg6UJySRgNeGOT3rSOcKInLLCpC0tptYipeLw3+mFxbQbiZzw9rfop/weJAxQROW/EgF1Lgp4nuOtnf4ZMTI+iC9VuEfiqJN1mJAnRZ1CshqfW4Ktf5vJOOWgXF5wS5qVOd3dtfcoPCasCqCceTXBtA1dsAeZdUkcGYXkPnx6KTBSXyrHM1sQOB0P7uV2gAnDVJGtvBexgi+9k+pjbm4eDlO75rd4J/DOtipliGX6ff1m24Y/HOXIvytgv/+Hn4mGNTe+ILitqFG7c0dtQDhcAHxhcN74gDb+SmulFgE3/wm9oMcAAA"
                        alt="" data-pagespeed-url-hash="4168296971"
                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
            </div>
        </div>
    </div>

    <header>

        <div class="header-area">
            <div class="main-header  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img
                                        src="data:image/webp;base64,UklGRqAEAABXRUJQVlA4TJMEAAAv0gAMEH9kkG2kopzH+5PtIQQCSSj7qywlEEhxKDPsuJEkRdqqriH/DTx6ngHUpLZtG8ZtcsoduFYAQBgQMSAAggEwAIAACMAEcABMAIaJBWHCIBCEYUIARp9hgjggDoABYmLCABDoYRCAAACAIBCCgVgQAEEwEASA+wsEABAE8UYiEQgEHI5GI/HBC4lCopBIJOr1SgQSjRscDUcj4Gg4HIVGoeFwOKjd2qTIbd5w0mYUtFnUoXXEmrDZFmOtzCAMszlsxv/sqaruEvR8jeg/BLdtJEnyVHdP9rJT1cfOEyD0Yu76o1lUjO7U6/W5649RKVqoM83ffIrK0HM2KqZwq65r4fZzVIDmGdVSeFpP0uLdF8i5btRTtZzxwuwcI7Xw10tkWY/qNn2LLOsPI38jxzp7zTYuXUSO9dC4/x5Z1m9G/o2Z9FJR8w0tIYT9TjOyTRpsUKwxzxE721Qj2xTLzr/KEBoQDRG3YQl97qptXL6AiEhRrxrGHxNmOpU8QXPYybtUkK4iao6CPKqNcSOD+xEJgagNS+j7xv2PSIeoRZrp1LyMeSVuxMwK0sCPRG9sWEL/YuR/E7QtIQwReTWuktGtHA1jEXM2DKHPX7GNK+eT6PS+pWAG1KYNdoZe0TbNTQghDLI+iTJbnMdEWZjTy46PItQGxZKxkRz6nnH/MxIQ+cqox7T0LcxCvMHClzLN/NuLhJ7EjBxjk9HC8myzkRz6JyP3DNRknKDOoisbPBaNW6woY+VUO0APZCE19IXLtnH1nIHeMrRszqC01SJOJD3usZXER652g8yjidTQ/xn3vyKdwH6xclZLW05pdYiuHgtFqZrwoV3sxAK0kRr6ByMPANuP+ch6geoi4cdMECWvgmAnMfTFS7Zx7ayRTqwYYw1YT/xj3P8OE2NBO9N6pa2GJAaDg41QqkU7C0Xf+WVizERq6O+MPMTG5iSKIB7llMDk9JANWtxCuXKav0VtRg3Qbgy9JlJDf2Mbc7NoPfOWmjRhhQHAfuIzpLRiUI3rFZ8r9YuOiZ3SphYL6aFf3F02cB34jD6yIhYdFR5wYSwhfady7VwBlLdjwQG+YNNieWoxhX5VWErlETbN0NQuOw0UURGJu409s6wg6I2F8PFzXbsx2UIDeH57IWXMA+1EdOR1M2jRwxxzanr5B/avIO6YHqJF9Sek2LWEfqdjZ3LhJvBV6a/dDvygEqaW8H/IILsfrhxwNSXDoIcJU+hApz7Yzj8ZvTmv8wxbmMHxzXbgApvUsU6PSHrlylFbQQDfOcZmOjjYMIV+4yQRHX8/obAAdHD3/VgZNXiHtSOnfayA1QndOE3ECvyC+OT6HOM2cFTMyH7kV4dJ6GjHFgCYfVQWnmO7sDOwFfnVu0NECYU/gfeZk5EDyLL2kq6v2zdxOydKF10OmVZP5EUzX5aFnUR0ugnZ1oZRomjhi9bDNPnhm8i4DlKSPt+BrOu1TxOORg+9hsxr+0R0dG9A/hUiR4N7UAV646R2NPXx26gGNU7LcWQ3KkPieWy87XVUh/jzWN8mVIr2Eg3vQ9Wo+5P3kH8BAA=="
                                        alt="" data-pagespeed-url-hash="3845301560"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">

                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="portfolio.html">Portfolio</a></li>
                                            <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                    <li><a href="portfolio_details.html">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-xl-block ml-20">
                                    <a href="#" class="btn header-btn">Get Free Consultent</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <main>

        <div class="slider-area ">
            <div class="slider-active">

                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">Get Every Single Solutions.</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">I’m Designer Haris F. Watson</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s">jhorem rfpsum golor sidt amet,
                                        consectetur adipiscing elit, eiusmod tempor incididunt utcjhg labore bet dolore
                                        magna aliqua. Quis ipsum suspendisse ultrices gravida.</P>

                                    <div class="hero__btn">
                                        <a href="industries.html" class="btn hero-btn" data-animation="fadeInLeft"
                                            data-delay=".8s">Learn More</a>
                                        <a href="industries.html" class="btn border-btn ml-15"
                                            data-animation="fadeInRight" data-delay="1.0s">Hire Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-8">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">Get Every Single Solutions.</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">I’m Designer Haris F. Watson</h1>
                                    <P data-animation="fadeInUp" data-delay=".8s">jhorem rfpsum golor sidt amet,
                                        consectetur adipiscing elit, eiusmod tempor incididunt utcjhg labore bet dolore
                                        magna aliqua. Quis ipsum suspendisse ultrices gravida.</P>

                                    <div class="hero__btn">
                                        <a href="industries.html" class="btn hero-btn" data-animation="fadeInLeft"
                                            data-delay=".8s">Learn More</a>
                                        <a href="industries.html" class="btn border-btn ml-15"
                                            data-animation="fadeInRight" data-delay="1.0s">Hire Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="about-area section-paddingt30">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-5">
                        <div class="about-caption mb-50">
                            <h3>Designing With Passion While Exploring The World.</h3>
                            <p class="pera1">Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra
                                sebfd dho eiusmod tempor maecenas accumsan lacus.</p>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna
                                aliqua. </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="about-caption2">
                            <h3>Any Type Of Query<br> & Discussion.</h3>
                            <p>Late talk with me</p>
                            <div class="send-cv">
                                <a href="#"><span class="__cf_email__"
                                        data-cfemail="234b4a514663404c4f4c514f4a410d404c4e">[email&#160;protected]</span></a>
                                <i class="ti-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="categories-area section-padding3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="section-tittle mb-70">
                            <h2>What Services you will Get from me!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-pen"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">UI/UX Design</a></h5>
                                <p>Free resource that will help nderstand thecv designc process and improve theroi
                                    nderstand the design process andisei impro are of vquality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-speaker"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Digital Marketing</a></h5>
                                <p>Free resource that will help nderstand thecv designc process and improve theroi
                                    nderstand the design process andisei impro are of vquality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-portfolio"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Website Design</a></h5>
                                <p>Free resource that will help nderstand thecv designc process and improve theroi
                                    nderstand the design process andisei impro are of vquality.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="services-area  services-padding">
            <div class="container">
                <div class="project-heading mb-35">
                    <div class="row align-items-end">
                        <div class="col-lg-6">

                            <div class="section-tittle">
                                <h2>What Services you will Get from me!</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="properties__button">

                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                            href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="false">
                                            All</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab"
                                            href="#nav-profile" role="tab" aria-controls="nav-profile"
                                            aria-selected="false"> Branding</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab"
                                            href="#nav-contact" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">Logo</a>
                                        <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab"
                                            href="#nav-last" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">UI/UX </a>
                                        <a class="nav-item nav-link" id="nav-technology" data-toggle="tab"
                                            href="#nav-techno" role="tab" aria-controls="nav-contact"
                                            aria-selected="false">Web Design</a>
                                    </div>
                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="tab-content active" id="nav-tabContent">

                            <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices1.png.pagespeed.ic.CUSBfud6Mi.webp"
                                                    alt="" data-pagespeed-url-hash="3958837646"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/service/xservices2.png.pagespeed.ic.ptrM11wVrw.webp"
                                                            alt="" data-pagespeed-url-hash="4253337567"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">

                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/service/xservices3.png.pagespeed.ic._OiupxHuSe.webp"
                                                            alt="" data-pagespeed-url-hash="252870192"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices4.png.pagespeed.ic.hVym9sD8pi.webp"
                                                    alt="" data-pagespeed-url-hash="547370113"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices5.png.pagespeed.ic.RIUpuP8Qre.webp"
                                                    alt="" data-pagespeed-url-hash="841870034"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices6.png.pagespeed.ic.suCHqM6822.webp"
                                                    alt="" data-pagespeed-url-hash="1136369955"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices6.png.pagespeed.ic.suCHqM6822.webp"
                                                    alt="" data-pagespeed-url-hash="1136369955"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/service/xservices2.png.pagespeed.ic.ptrM11wVrw.webp"
                                                            alt="" data-pagespeed-url-hash="4253337567"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">

                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/service/xservices3.png.pagespeed.ic._OiupxHuSe.webp"
                                                            alt="" data-pagespeed-url-hash="252870192"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices4.png.pagespeed.ic.hVym9sD8pi.webp"
                                                    alt="" data-pagespeed-url-hash="547370113"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices5.png.pagespeed.ic.RIUpuP8Qre.webp"
                                                    alt="" data-pagespeed-url-hash="841870034"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices1.png.pagespeed.ic.CUSBfud6Mi.webp"
                                                    alt="" data-pagespeed-url-hash="3958837646"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices2.png.pagespeed.ic.ptrM11wVrw.webp"
                                                    alt="" data-pagespeed-url-hash="4253337567"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/service/xservices1.png.pagespeed.ic.CUSBfud6Mi.webp"
                                                            alt="" data-pagespeed-url-hash="3958837646"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">

                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/service/xservices3.png.pagespeed.ic._OiupxHuSe.webp"
                                                            alt="" data-pagespeed-url-hash="252870192"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices4.png.pagespeed.ic.hVym9sD8pi.webp"
                                                    alt="" data-pagespeed-url-hash="547370113"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices5.png.pagespeed.ic.RIUpuP8Qre.webp"
                                                    alt="" data-pagespeed-url-hash="841870034"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices6.png.pagespeed.ic.suCHqM6822.webp"
                                                    alt="" data-pagespeed-url-hash="1136369955"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices1.png.pagespeed.ic.CUSBfud6Mi.webp"
                                                    alt="" data-pagespeed-url-hash="3958837646"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/service/xservices2.png.pagespeed.ic.ptrM11wVrw.webp"
                                                            alt="" data-pagespeed-url-hash="4253337567"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">

                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/service/xservices3.png.pagespeed.ic._OiupxHuSe.webp"
                                                            alt="" data-pagespeed-url-hash="252870192"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices4.png.pagespeed.ic.hVym9sD8pi.webp"
                                                    alt="" data-pagespeed-url-hash="547370113"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices5.png.pagespeed.ic.RIUpuP8Qre.webp"
                                                    alt="" data-pagespeed-url-hash="841870034"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices6.png.pagespeed.ic.suCHqM6822.webp"
                                                    alt="" data-pagespeed-url-hash="1136369955"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-techno" role="tabpanel"
                                aria-labelledby="nav-technology">
                                <div class="services-caption">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices3.png.pagespeed.ic._OiupxHuSe.webp"
                                                    alt="" data-pagespeed-url-hash="252870192"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/service/xservices2.png.pagespeed.ic.ptrM11wVrw.webp"
                                                            alt="" data-pagespeed-url-hash="4253337567"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">

                                                    <div class="single-services mb-30">
                                                        <img src="assets/img/service/xservices1.png.pagespeed.ic.CUSBfud6Mi.webp"
                                                            alt="" data-pagespeed-url-hash="3958837646"
                                                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices4.png.pagespeed.ic.hVym9sD8pi.webp"
                                                    alt="" data-pagespeed-url-hash="547370113"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices5.png.pagespeed.ic.RIUpuP8Qre.webp"
                                                    alt="" data-pagespeed-url-hash="841870034"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">

                                            <div class="single-services mb-30">
                                                <img src="assets/img/service/xservices6.png.pagespeed.ic.suCHqM6822.webp"
                                                    alt="" data-pagespeed-url-hash="1136369955"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="wantToWork-area w-padding2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Dont worry for contact i`m available</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="#" class="btn btn-black f-right">Contact Me Now</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="client-comments section-paddingt30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10">

                        <div class="section-tittle mb-70">
                            <h2>Some Possitive Feedback That Encourage Us</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="latest-blog-area">
                <div class="container">
                    <div class="custom-row">
                        <div class="blog-active">

                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                        <div class="blog-top">
                                            <div class="person-img">
                                                <img src="assets/img/gallery/xblog1.png.pagespeed.ic.z4d2Tq3oGA.webp"
                                                    alt="" data-pagespeed-url-hash="1807672971"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Bradley Erickson</h2>
                                                <span>UI/UX Designer</span>
                                            </div>
                                        </div>
                                        <p>Consectetur adipisicing elit, seddosdoe eiusmod tempor incididunt utore
                                            etstes dolore magna aliqua. Ut imminim restai veniam, quis nostrud.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                        <div class="blog-top">
                                            <div class="person-img">
                                                <img src="assets/img/gallery/xblog2.png.pagespeed.ic.vduKNjHUYq.webp"
                                                    alt="" data-pagespeed-url-hash="2102172892"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Bradley Erickson</h2>
                                                <span>UI/UX Designer</span>
                                            </div>
                                        </div>
                                        <p>Consectetur adipisicing elit, seddosdoe eiusmod tempor incididunt utore
                                            etstes dolore magna aliqua. Ut imminim restai veniam, quis nostrud.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                        <div class="blog-top">
                                            <div class="person-img">
                                                <img src="assets/img/gallery/xblog3.png.pagespeed.ic.VrOAiMGtdT.webp"
                                                    alt="" data-pagespeed-url-hash="2396672813"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Bradley Erickson</h2>
                                                <span>UI/UX Designer</span>
                                            </div>
                                        </div>
                                        <p>Consectetur adipisicing elit, seddosdoe eiusmod tempor incididunt utore
                                            etstes dolore magna aliqua. Ut imminim restai veniam, quis nostrud.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                        <div class="blog-top">
                                            <div class="person-img">
                                                <img src="assets/img/gallery/xblog2.png.pagespeed.ic.vduKNjHUYq.webp"
                                                    alt="" data-pagespeed-url-hash="2102172892"
                                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Bradley Erickson</h2>
                                                <span>UI/UX Designer</span>
                                            </div>
                                        </div>
                                        <p>Consectetur adipisicing elit, seddosdoe eiusmod tempor incididunt utore
                                            etstes dolore magna aliqua. Ut imminim restai veniam, quis nostrud.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div class="brand-area pb-bottom">
            <div class="container">
                <div class="brand-active brand-border pt-50 pb-40">
                    <div class="single-brand">
                        <img src="assets/img/gallery/xbrand1.png.pagespeed.ic.vsJKXq8o6n.webp" alt=""
                            data-pagespeed-url-hash="1771442224"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/gallery/xbrand2.png.pagespeed.ic.rFiXzXgh9r.webp" alt=""
                            data-pagespeed-url-hash="2065942145"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/gallery/xbrand3.png.pagespeed.ic.BidJFeCvq3.webp" alt=""
                            data-pagespeed-url-hash="2360442066"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/gallery/xbrand4.png.pagespeed.ic.W5ZAIexfpO.webp" alt=""
                            data-pagespeed-url-hash="2654941987"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <div class="single-brand">
                        <img src="assets/img/gallery/xbrand2.png.pagespeed.ic.rFiXzXgh9r.webp" alt=""
                            data-pagespeed-url-hash="2065942145"
                            onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                </div>
            </div>
        </div>


        <section class="contact-info-area w-padding2" data-background="assets/img/gallery/section_bg04.jpg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-7">
                        <div class="contact-caption mb-50">
                            <h3>If Not Now, When? Let’s Work Together!</h3>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna
                                aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra.</p>
                            <img src="assets/img/gallery/xsin.png.pagespeed.ic.4L7r6tiIs5.webp" alt=""
                                data-pagespeed-url-hash="564202676"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <form action="#" class="contact-wrapper">
                            <input type="text" name="name" placeholder="Full Name">
                            <input type="email" name="email" placeholder="Email Address">
                            <textarea name="message" id="message" placeholder="Your Message"></textarea>
                            <button class="submit-btn2" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer>

        <div class="footer-area">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="footer-top-cap text-center">
                                <img src="assets/img/logo/xlogo2_footer.png.pagespeed.ic.Qo1tA9v0wW.webp" alt=""
                                    data-pagespeed-url-hash="3314867680"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <span><a href="#"><span class="__cf_email__"
                                            data-cfemail="365e5f44535b53764659444250595a5f591855595b">[email&#160;protected]</span></a></span>
                                <p>221B Baker Street, Post office Box 353 </p>
                                <p>Park Road, USA - 215431</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p>
                                    Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>___scripts_3___ All rights reserved | This template
                                    is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                        href="https://colorlib.com" target="_blank">Colorlib</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">

                            <div class="footer-social f-right">
                                <a>Stay Connected</a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js+bootstrap.min.js') }}"></script>

    <script src="{{ asset('frontend/js/one.js') }}"></script>
    <script src="{{ asset('frontend/js/two.js') }}"></script>
    <script src="{{ asset('frontend/js/three.js') }}"></script>
    <script src="{{ asset('frontend/js/four.js') }}"></script>

    

</body>

</html>
