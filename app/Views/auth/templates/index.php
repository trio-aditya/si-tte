<!--

=========================================================
* Impact Design System - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/impact-design-system
* Copyright 2010 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/impact-design-system/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>TTE | Login</title>

    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/impact-design-system" />

    <!--  Social tags      -->
    <meta name="keywords" content="impact design system, design system, login, form, table, tables, calendar, card, cards, navbar, modal, icons, icons, map, chat, carousel, menu, datepicker, gallery, slider, date, sidebar, social, dropdown, search, tab, nav, footer, date picker, forms, tabs, time, button, select, input, timeline, cart, car, fullcalendar, about us, invoice, account, chat, log in, blog, profile, portfolio, landing page, ecommerce, shop, landing, register, app, contact, one page, sign up, signup, store, bootstrap 4, bootstrap4, dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, impact, impact ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, impact dashboard">
    <meta name="description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Impact Design System by Creative Tim">
    <meta itemprop="description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">

    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/296/original/opt_impact_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Impact Design System by Creative Tim">

    <meta name="twitter:description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/296/original/opt_impact_thumbnail.jpg">


    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Impact Design System by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/impact-design-system/" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/296/original/opt_impact_thumbnail.jpg" />
    <meta property="og:description" content="Kick-Start Your Development With An Awesome Design System carefully designed for your online business showcase. It comes as a complete solution, with front pages and dashboard pages included." />
    <meta property="og:site_name" content="Creative Tim" />

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>/assets/img/logo.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/sweetalert2/dist/sweetalert2.min.css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/dashboard.css" type="text/css">

    <!-- Anti-flicker snippet (recommended) 
<style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-K9BGS8K':true});</script>

<!-- Analytics-Optimize Snippet
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-46172202-22', 'auto', {allowLinker: true});
ga('set', 'anonymizeIp', true);
ga('require', 'GTM-K9BGS8K');
ga('require', 'displayfeatures');
ga('require', 'linker');
ga('linker:autoLink', ["2checkout.com","avangate.com"]);
</script>
<!-- end Analytics-Optimize Snippet -->

    <!-- Google Tag Manager
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
<!-- End Google Tag Manager -->
</head>


<body class="bg-white">
    <!-- Google Tag Manager (noscript)
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Sidenav -->
    <!-- Main content -->
    <div class="main-content">

        <!-- Page content -->
        <?= $this->renderSection('content'); ?>

    </div>
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2021 <a href="https://diskominfo.lampungtengahkab.go.id/" class="font-weight-bold ml-1" target="_blank">Diskominfo Kab. Lampung Tengah</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">Themesberg</a>
                        </li> -->
                        <li class="nav-item">
                            <a href="##" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" target="_blank">License</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="<?= base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="<?= base_url(); ?>/assets/js/dashboard.js?v=1.2.0"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="<?= base_url(); ?>/assets/js/demo.min.js"></script>
</body>

</html>