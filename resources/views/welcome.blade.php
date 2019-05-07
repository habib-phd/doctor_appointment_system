<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- Mirrored from oladoc.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 11:47:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"><script type="1d2c8a7024420f104c0feeb6-text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1118.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="title" content="Find the Best Doctors in Pakistan, Book Appointments Online|oladoc">
<meta name="keywords" content="Find Doctors in Pakistan, Book appointment, Doctors in Pakistan, Specialists in Pakistan, Top Doctors in Lahore, Top Doctors in Islamabad,  Health care Pakistan, Top Doctors in Karachi,Top Doctors in Rawalpindi, Top Doctors in Pakistan, Find Doctor in Pakistan, Search Doctor in Pakistan,Dentist in Lahore, Top Dentist, Dentist, Dermatologist,Skin Specialist,ENT Specialist,Gastroenterologist,Pediatrician,General Physician,Opthalmologist,Psychiatrist,Orthopedic Surgeon,Cardiologist,doctor,doctors, Pakistan, Lahore, Karachi, Islamabad, Rawalpindi, Faisalabad, Find Hospital, Find Clinic, Find Medical Facility">
<meta property="og:image" content="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/oladoc.svg" />
<meta name="description" content="Book appointments with the best Doctors and Specialists such as Gynecologists, Skin Specialists, Child Specialists, Surgeons, etc. in Pakistan conveniently.">
<title>Find the Best Doctors in Pakistan, Book Appointments Online|oladoc</title>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<link href="frontend/bootstrap/css/bootstrap.min1279.css?v1.5.3" rel="stylesheet">
<link href="frontend/assets/css/owl.carousel1279.css?v1.5.3" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/owl.theme1279.css?v1.5.3" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/header1279.css?v1.5.3" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/footer1279.css?v1.5.3" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/tooltip1279.css?v1.5.3" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/sticky-footer1279.css?v1.5.3" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/oladoc-icon1279.css?v1.5.3" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/section1279.css?v1.5.3" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/main1279.css?v1.5.3" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/preview-of-article1279.css?v1.5.3" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/media1279.css?v1.5.3" media="all" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="frontend/fontello/css/md-embedded1279.css?v1.5.3" rel="stylesheet">

<link href="frontend/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css">
<link href="frontend/assets/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
<script src="frontend/bootstrap/js/typeahead.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
<link rel="stylesheet" href="frontend/assets/css/wow.css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<script src="../ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
<script src="frontend/bootstrap/js/typeahead.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
<link rel="shortcut icon" type="image/png" href="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/icons/favicon.png" />
<script type="1d2c8a7024420f104c0feeb6-text/javascript">
var base_url = 'index.html';
function imgError_hospital(image) {
    image.onerror = "";
    image.src = "../s3-eu-west-1.amazonaws.com/mdpk/images/profile-pics/hospitals/default/hospital1.png";
    return true;
}
function imgError_doctor_male(image) {
    image.onerror = "";
    image.src = "../s3-eu-west-1.amazonaws.com/mdpk/images/profile-pics/doctors/default/doc_male_orig.png";
    return true;
}
function imgError_doctor_female(image) {
    image.onerror = "";
    image.src = "../s3-eu-west-1.amazonaws.com/mdpk/images/profile-pics/doctors/default/doc_female_orig.png";
    return true;
}
function imgError_banner(image) {
    image.onerror = "";
    image.src = "../s3-eu-west-1.amazonaws.com/mdpk/images/banners/hospital-banner/default-banner/default-banner.jpg";
    return true;
}
function imgError_banner_doctor(image) {
    image.onerror = "";
    image.src = "../s3-eu-west-1.amazonaws.com/mdpk/images/banners/doctor-banner/default-banner/default-banner.jpg";
    return true;
}
</script>

<script type="1d2c8a7024420f104c0feeb6-text/javascript">
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MTT45TS');
</script>

<link rel="stylesheet" href="frontend/assets/css/lightslider.css" />
<link rel="stylesheet" href="frontend/assets/css/wow.css" />
<style>
        body{
        font-size:16px;
        }
        .alertuser.mobile {
        right: 115px;
        }
        
        .fixed-menu-right .active a {
        background: #f05360;
        }
        
        .link-doctor-item {
        text-decoration: none;
        }
        
        .link-doctor-item:hover {
        text-decoration: none;
        }
        
        .post-image img {
        height: 200px;
        width: 100%;
        }
        
        .col-md-3.col-sm-6.blog-post-item img {
        height: 150px;
        width: 100%;
        }
        
        .col-md-6.col-sm-6.blog-post-item {
        margin-bottom: 25px;
        }
        
        .col-md-3.col-sm-6.blog-post-item {
        height: 220px;
        }
        
        .col-md-6.col-sm-6.blog-post-item {
        height: 250px;
        }
        
        .post-tile a {
        color: #717273;
        }
        
        .post-tile a:hover {
        color: #717273;
        text-decoration: none;
        }
        
        .post-text {
        color: #666565;
        }
        
        .col-md-4.col-sm-6.blog-post-item img {
        border: 1px solid #c8cdce;
        }
        
        .col-md-6 .post-image {
        float: left;
        margin-bottom: 0;
        margin-right: 15px;
        width: 65%;
        }
        
        .col-md-6.col-sm-6.blog-post-item h3 {
        margin-top: 0px !important;
        line-height: 25px;
        }
        
        .app-section-headeing h4 {
        color: #fff;
        font-size: 20px;
        font-weight: 300;
        }
        
        .app-section-headeing h3 {
        color: #fff;
        font-size: 28px;
        font-weight: 400;
        }
        
        .similar-doctor-data {
        margin-bottom: 40px;
        }
        
        .similar-doctor-list {
        margin-bottom: 0px;
        }
        
        .ftr-tabs.nav.nav-tabs.container {
        margin-bottom: 25px;
        }
        
        .ftr-doctor-heading {
        margin-bottom: 40px;
        text-align: center;
        }
        
        .ftr-tabs.nav.nav-tabs li {
        float: none;
        padding: 0px;
        }
        
        @media(max-width: 768px) {
        .ftr-tabs.nav.nav-tabs li {
        border: 1px solid #ddd;
        }
        }
        .ftr-tabs.nav.nav-tabs li a {
        font-size: 15px;
        padding: 25px 0px;
        }
        
        .form-fields i {
        color: #ff9e15;
        }
        
        .ftr-doctor-outer .similar-doctor-list-book {
        background: #f8525f none repeat scroll 0 0;
        color: #fff;
        text-decoration: none;
        }
        
        .similar-doctor-list-book,
        .hospital-doctor-list-book {
        margin-bottom: 0px;
        }
        
        .similar-doctor-data h3 {
        height: auto;
        line-height: normal;
        margin-top: 0px;
        margin-bottom: 15px !important;
        }
        
        .similar-doctor-data img,
        .hospital-doctor-data img {
        margin-bottom: 8px;
        }
        
        .similar-doctor h2 {
        display: block;
        height: auto;
        line-height: normal;
        margin-bottom: 10px !important;
        margin-top: 0px;
        font-size: 14px;
        white-space: nowrap;
        }
        
        .color-green {
        color: #00c8cf;
        }
        
        .ftr-doctor-inner {
        background: #767979;
        padding: 5px 8px;
        }
        
        .banner-ftr-doctor img {
        width: 50px;
        height: 50px;
        display: block;
        margin-bottom: 5px;
        }
        
        .banner-ftr-doctor {
        background: #767979 none repeat scroll 0 0;
        bottom: 0;
        color: #fff;
        left: 8px;
        position: absolute;
        width: 265px;
        }
        
        .ftr-doctor-inner.ftr-active {
        display: block !important;
        transition: all 0.5s ease;
        }
        
        .banner-ftr-doc-name {
        font-weight: 600;
        }
        
        .banner-ftr-detail {
        float: right;
        padding-top: 8px;
        width: 72%;
        }
        
        .circle-image-outer {
        float: left;
        }
        
        .banner-ftr-detail span {
        display: block;
        }
        
        .banner-ftr-doctor a {
        text-decoration: none;
        outline: none;
        color: #fff;
        }
        
        .banner-ftr-doctor a:hover {
        text-decoration: none;
        outline: none;
        color: #fff;
        }
        
        .span-counter {
        color: #ff9e15;
        font-size: 47px;
        font-weight: 400;
        margin-right: 10px;
        }
        
        @media (max-width: 992px) {
        .span-counter {
        font-size: 21px;
        }
        }
        @media (max-width: 400px) {
        }
        .span-pink {
        color: #f8525f;
        }
        
        .counter-plus {
        color: #f8525f;
        font-size: 49px;
        font-weight: 400;
        }
        
        .v-verified {
        display: inline-block;
        height: 50px;
        position: relative;
        width: 38px;
        }
        
        .v-verified > img {
        bottom: 0;
        height: auto;
        position: absolute;
        right: -10px;
        width: 100%;
        }
        
        .finding-doctor-txt {
        color: #b8bbbe;
        }
        
        .home-banner-heading {
        color: #fff;
        }
        
        .blog-wrapper {
        display: none;
        }
        .for-mobile{
        text-transform: none;
        }
        ul.nav-tabs{
        border:none;
        border-radius: 2px;
        overflow: hidden;
        }
        .li-1{
        border-left:1px solid #15359a;
        }
        marquee img {
        filter: grayscale(1);
        }
        .fs-18{
            font-size: 18px;
        }
        .h1{
            font-size: 24px;
        }
        </style>
</head>
<body>
<div class="spritesheet d-none">
<svg>
<defs>
<g id="about_the_offer">
<svg id="svg" version="1.1" viewBox="0 0 400 417.39130434782606" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="svgg"><path id="path0" d="" stroke="none" fill="#000000" fill-rule="evenodd"></path><path id="path1" d="" stroke="none" fill="#555555" fill-rule="evenodd"></path><path id="path2" d="M211.081 1.587 C 211.187 1.993,211.604 2.412,212.007 2.518 C 212.921 2.757,212.677 1.965,211.636 1.315 C 210.994 0.915,210.915 0.953,211.081 1.587 M259.429 53.829 C 258.656 54.601,258.640 54.800,259.353 54.800 C 259.658 54.800,260.001 54.440,260.116 54.000 C 260.368 53.035,260.251 53.006,259.429 53.829 M309.443 99.433 C 309.067 100.411,309.149 100.541,309.800 100.000 C 310.465 99.448,310.596 98.800,310.043 98.800 C 309.846 98.800,309.576 99.085,309.443 99.433 M15.600 238.200 C 15.322 238.535,15.279 238.800,15.502 238.800 C 15.722 238.800,16.126 238.530,16.400 238.200 C 16.678 237.865,16.721 237.600,16.498 237.600 C 16.278 237.600,15.874 237.870,15.600 238.200 M51.058 276.208 C 51.191 276.553,51.395 276.738,51.513 276.621 C 51.630 276.503,52.003 276.630,52.340 276.903 C 52.829 277.299,52.893 277.299,52.655 276.902 C 52.146 276.056,50.770 275.458,51.058 276.208 M60.800 298.151 C 60.800 298.234,61.070 298.526,61.400 298.800 C 61.891 299.208,62.000 299.180,62.000 298.649 C 62.000 298.292,61.730 298.000,61.400 298.000 C 61.070 298.000,60.800 298.068,60.800 298.151 M309.362 301.658 C 308.604 302.512,308.605 302.514,309.500 302.044 C 309.995 301.784,310.400 301.398,310.400 301.186 C 310.400 300.618,310.209 300.705,309.362 301.658 M309.277 317.630 C 309.356 317.867,309.591 318.060,309.800 318.060 C 310.009 318.060,310.245 317.867,310.323 317.630 C 310.402 317.394,310.167 317.200,309.800 317.200 C 309.433 317.200,309.198 317.394,309.277 317.630 M331.312 352.995 C 331.365 353.433,331.721 353.851,332.103 353.924 C 332.594 354.019,332.727 353.874,332.557 353.431 C 332.424 353.087,332.170 352.895,331.992 353.005 C 331.814 353.115,331.566 352.979,331.441 352.702 C 331.316 352.426,331.258 352.558,331.312 352.995 M176.400 363.800 C 176.400 364.130,176.692 364.400,177.049 364.400 C 177.580 364.400,177.608 364.291,177.200 363.800 C 176.926 363.470,176.634 363.200,176.551 363.200 C 176.468 363.200,176.400 363.470,176.400 363.800 " stroke="none" fill="#ffffff" fill-rule="evenodd"></path><path id="path3" d="" stroke="none" fill="#0000ff" fill-rule="evenodd"></path><path id="path4" d="M332.909 57.200 C 332.909 58.190,332.987 58.595,333.082 58.100 C 333.178 57.605,333.178 56.795,333.082 56.300 C 332.987 55.805,332.909 56.210,332.909 57.200 M332.901 360.200 C 332.905 361.080,332.987 361.393,333.083 360.895 C 333.179 360.398,333.175 359.678,333.075 359.295 C 332.975 358.913,332.896 359.320,332.901 360.200 " stroke="none" fill="#6d6db6" fill-rule="evenodd"></path><path id="path5" d="" stroke="none" fill="#339999" fill-rule="evenodd"></path><path id="path6" d="" stroke="none" fill="#ff0000" fill-rule="evenodd"></path><path id="path7" d="M216.596 6.843 C 217.033 7.370,217.438 7.875,217.496 7.967 C 217.553 8.058,217.600 7.877,217.600 7.563 C 217.600 7.249,217.195 6.744,216.700 6.440 L 215.800 5.887 216.596 6.843 M221.600 15.224 C 221.600 15.457,221.780 15.536,222.000 15.400 C 222.220 15.264,222.400 15.343,222.400 15.576 C 222.400 15.809,222.602 16.000,222.849 16.000 C 223.159 16.000,223.144 15.815,222.800 15.400 C 222.222 14.703,221.600 14.612,221.600 15.224 M192.875 27.216 C 191.886 28.137,191.761 28.467,192.509 28.180 C 192.962 28.006,194.198 26.400,193.879 26.400 C 193.808 26.400,193.357 26.767,192.875 27.216 M67.212 64.526 C 67.188 65.178,68.040 66.400,68.514 66.394 C 68.849 66.390,68.865 66.296,68.566 66.094 C 68.327 65.932,67.927 65.440,67.678 65.000 C 67.428 64.560,67.219 64.347,67.212 64.526 M71.077 107.572 C 71.188 107.997,71.532 108.442,71.841 108.560 C 72.281 108.729,72.262 108.561,71.755 107.788 C 70.976 106.599,70.808 106.545,71.077 107.572 M308.924 109.000 C 308.926 110.320,309.001 110.812,309.090 110.093 C 309.179 109.374,309.177 108.294,309.086 107.693 C 308.995 107.092,308.922 107.680,308.924 109.000 M330.000 114.454 C 330.330 114.754,330.859 115.270,331.175 115.600 C 331.621 116.065,331.614 115.980,331.141 115.222 C 330.806 114.684,330.277 114.168,329.966 114.076 C 329.510 113.941,329.517 114.015,330.000 114.454 M398.400 161.024 C 398.400 161.393,398.212 161.531,397.938 161.362 C 397.652 161.185,397.585 161.252,397.762 161.538 C 398.154 162.173,398.305 162.124,398.800 161.200 C 399.090 160.658,399.095 160.400,398.814 160.400 C 398.586 160.400,398.400 160.681,398.400 161.024 M392.875 168.016 C 391.886 168.937,391.761 169.267,392.509 168.980 C 392.962 168.806,394.198 167.200,393.879 167.200 C 393.808 167.200,393.357 167.567,392.875 168.016 M7.200 168.751 C 7.200 168.998,7.337 169.200,7.505 169.200 C 7.673 169.200,7.988 169.593,8.205 170.074 C 8.422 170.555,8.870 171.016,9.200 171.099 C 9.648 171.212,9.623 171.106,9.100 170.681 C 8.715 170.368,8.400 169.929,8.400 169.705 C 8.400 169.481,8.130 169.074,7.800 168.800 C 7.385 168.456,7.200 168.441,7.200 168.751 M58.101 208.600 C 58.105 209.480,58.187 209.793,58.283 209.295 C 58.379 208.798,58.375 208.078,58.275 207.695 C 58.175 207.313,58.096 207.720,58.101 208.600 M346.000 224.600 C 346.578 225.297,347.200 225.388,347.200 224.776 C 347.200 224.543,347.020 224.464,346.800 224.600 C 346.580 224.736,346.400 224.657,346.400 224.424 C 346.400 224.191,346.198 224.000,345.951 224.000 C 345.641 224.000,345.656 224.185,346.000 224.600 M71.600 281.600 C 72.040 282.040,72.518 282.400,72.662 282.400 C 72.806 282.400,72.598 282.040,72.200 281.600 C 71.802 281.160,71.324 280.800,71.138 280.800 C 70.952 280.800,71.160 281.160,71.600 281.600 M17.081 288.267 C 17.193 288.560,17.581 288.786,17.943 288.768 C 18.362 288.748,18.418 288.663,18.098 288.534 C 17.821 288.423,17.678 288.197,17.780 288.033 C 17.882 287.868,17.720 287.733,17.421 287.733 C 17.121 287.733,16.968 287.973,17.081 288.267 M82.683 288.328 C 83.169 288.753,83.439 289.242,83.283 289.414 C 83.127 289.587,83.228 289.597,83.507 289.436 C 84.134 289.075,83.828 288.536,82.678 287.980 L 81.800 287.555 82.683 288.328 M71.200 307.920 C 71.200 308.184,71.374 308.400,71.587 308.400 C 71.801 308.400,71.878 308.652,71.760 308.960 C 71.642 309.267,71.707 309.619,71.905 309.741 C 72.431 310.066,72.229 308.469,71.674 307.914 C 71.309 307.549,71.200 307.550,71.200 307.920 M311.144 337.878 C 311.654 338.850,312.400 339.449,312.400 338.886 C 312.400 338.687,312.014 338.181,311.542 337.762 C 310.690 337.005,310.687 337.006,311.144 337.878 M296.928 378.595 C 296.975 379.062,297.338 379.425,297.805 379.472 C 298.381 379.532,298.414 379.499,297.925 379.352 C 297.553 379.242,297.158 378.847,297.048 378.475 C 296.901 377.986,296.868 378.019,296.928 378.595 " stroke="none" fill="#8e8ec6" fill-rule="evenodd"></path><path id="path8" d="M251.400 130.401 C 251.052 130.964,251.121 131.020,252.599 131.376 C 253.259 131.535,253.709 131.603,253.599 131.528 C 253.490 131.453,253.013 131.067,252.540 130.670 C 251.939 130.166,251.595 130.085,251.400 130.401 M239.432 132.260 C 239.093 133.144,239.377 133.350,239.962 132.645 C 240.246 132.303,240.286 131.977,240.061 131.838 C 239.854 131.710,239.571 131.899,239.432 132.260 M168.400 135.264 C 168.730 135.559,169.235 136.070,169.523 136.400 C 169.963 136.906,169.988 136.843,169.677 136.000 C 169.475 135.450,168.970 134.939,168.555 134.864 C 167.894 134.745,167.875 134.795,168.400 135.264 M229.429 145.829 C 228.736 146.521,228.643 146.800,229.104 146.800 C 229.271 146.800,229.632 146.440,229.907 146.000 C 230.506 145.041,230.293 144.964,229.429 145.829 M250.300 151.267 C 249.708 151.887,249.694 152.000,250.213 152.000 C 250.549 152.000,250.932 151.722,251.062 151.383 C 251.409 150.479,251.098 150.431,250.300 151.267 M183.861 163.101 C 183.746 163.287,184.000 163.657,184.426 163.923 C 184.852 164.189,185.200 164.247,185.200 164.052 C 185.200 163.503,184.097 162.719,183.861 163.101 M184.245 167.788 C 183.880 168.344,183.722 168.800,183.895 168.800 C 184.284 168.800,185.319 167.186,185.082 166.949 C 184.986 166.853,184.610 167.231,184.245 167.788 M131.200 169.986 C 131.200 170.214,131.455 170.400,131.767 170.400 C 132.078 170.400,132.424 170.625,132.535 170.900 C 132.687 171.277,132.745 171.280,132.768 170.914 C 132.786 170.647,132.440 170.235,132.000 170.000 C 131.458 169.710,131.200 169.705,131.200 169.986 M210.369 171.767 C 209.777 172.412,210.197 173.146,210.830 172.573 C 211.254 172.189,211.600 171.844,211.600 171.805 C 211.600 171.736,210.431 171.699,210.369 171.767 M133.200 174.153 C 133.200 174.458,133.557 174.800,133.993 174.914 C 134.668 175.090,134.725 175.008,134.379 174.361 C 133.905 173.475,133.200 173.351,133.200 174.153 M112.672 175.443 C 112.788 175.747,113.030 175.905,113.208 175.795 C 113.386 175.685,113.623 175.821,113.734 176.098 C 113.864 176.419,113.948 176.365,113.968 175.947 C 113.986 175.587,113.653 175.203,113.230 175.092 C 112.691 174.951,112.523 175.056,112.672 175.443 M227.200 182.600 C 226.922 182.935,226.879 183.200,227.102 183.200 C 227.322 183.200,227.726 182.930,228.000 182.600 C 228.278 182.265,228.321 182.000,228.098 182.000 C 227.878 182.000,227.474 182.270,227.200 182.600 M116.021 183.639 C 116.245 184.058,116.522 184.400,116.638 184.400 C 116.753 184.400,116.745 184.235,116.621 184.034 C 116.497 183.833,116.616 183.595,116.887 183.504 C 117.158 183.414,116.982 183.236,116.497 183.109 C 115.729 182.909,115.667 182.978,116.021 183.639 M179.600 184.104 C 179.600 184.455,179.285 184.824,178.900 184.924 C 178.244 185.096,178.245 185.110,178.913 185.154 C 179.636 185.201,180.306 184.173,179.849 183.716 C 179.712 183.579,179.600 183.753,179.600 184.104 M177.800 186.531 C 177.580 186.806,177.352 187.294,177.294 187.616 C 177.225 187.998,177.398 187.932,177.794 187.424 C 178.127 186.996,178.400 186.501,178.400 186.324 C 178.400 185.892,178.277 185.934,177.800 186.531 M175.875 189.170 C 175.432 190.058,175.415 190.293,175.804 190.143 C 176.086 190.035,176.401 189.508,176.503 188.973 C 176.747 187.694,176.586 187.745,175.875 189.170 M121.062 190.617 C 121.190 190.950,121.629 191.401,122.038 191.620 C 123.058 192.166,122.673 191.163,121.607 190.497 C 120.956 190.090,120.867 190.110,121.062 190.617 M123.200 192.151 C 123.200 192.234,123.470 192.526,123.800 192.800 C 124.291 193.208,124.400 193.180,124.400 192.649 C 124.400 192.292,124.130 192.000,123.800 192.000 C 123.470 192.000,123.200 192.068,123.200 192.151 M171.100 193.632 C 170.715 193.856,170.403 194.256,170.406 194.520 C 170.411 194.893,170.480 194.893,170.717 194.520 C 170.885 194.256,171.468 193.862,172.011 193.645 C 172.555 193.428,172.730 193.245,172.400 193.238 C 172.070 193.230,171.485 193.408,171.100 193.632 M217.281 196.418 C 216.972 196.913,216.946 197.200,217.209 197.200 C 217.438 197.200,217.732 196.922,217.862 196.583 C 218.222 195.645,217.833 195.534,217.281 196.418 M151.984 201.630 C 151.577 202.390,151.610 202.423,152.370 202.016 C 153.223 201.559,153.501 200.800,152.814 200.800 C 152.602 200.800,152.228 201.174,151.984 201.630 M208.493 208.400 C 208.216 208.843,208.167 209.200,208.383 209.200 C 208.597 209.200,208.965 208.840,209.200 208.400 C 209.435 207.960,209.485 207.600,209.310 207.600 C 209.135 207.600,208.768 207.960,208.493 208.400 M173.206 222.900 C 173.211 223.628,173.286 223.685,173.600 223.200 C 174.101 222.424,174.101 222.000,173.600 222.000 C 173.380 222.000,173.203 222.405,173.206 222.900 M172.400 224.600 C 171.992 225.091,172.020 225.200,172.551 225.200 C 172.908 225.200,173.200 224.930,173.200 224.600 C 173.200 224.270,173.132 224.000,173.049 224.000 C 172.966 224.000,172.674 224.270,172.400 224.600 M194.700 227.232 C 193.948 227.670,193.752 228.400,194.386 228.400 C 194.598 228.400,194.965 228.040,195.200 227.600 C 195.687 226.690,195.662 226.672,194.700 227.232 M278.428 231.476 C 278.413 231.958,278.580 232.464,278.800 232.600 C 279.273 232.892,279.273 232.501,278.800 231.400 C 278.469 230.629,278.455 230.631,278.428 231.476 M257.000 238.400 C 257.136 238.620,257.517 238.800,257.847 238.800 C 258.177 238.800,258.336 238.620,258.200 238.400 C 258.064 238.180,257.683 238.000,257.353 238.000 C 257.023 238.000,256.864 238.180,257.000 238.400 M212.071 243.429 C 211.780 243.758,211.600 244.185,211.671 244.377 C 211.742 244.569,212.123 244.293,212.519 243.763 C 213.297 242.720,212.936 242.450,212.071 243.429 M283.297 243.818 C 283.460 244.069,283.523 244.347,283.437 244.437 C 283.351 244.527,283.533 244.832,283.840 245.116 C 284.648 245.860,284.530 245.031,283.700 244.125 C 283.315 243.706,283.133 243.567,283.297 243.818 M232.216 258.774 C 232.064 259.019,232.200 259.098,232.544 258.966 C 232.879 258.838,233.213 259.015,233.324 259.378 C 233.488 259.914,233.509 259.908,233.459 259.341 C 233.389 258.545,232.584 258.178,232.216 258.774 M255.944 266.023 C 255.050 266.802,255.046 266.823,255.878 266.420 C 256.360 266.187,256.866 265.817,257.001 265.598 C 257.395 264.962,256.963 265.135,255.944 266.023 M243.454 267.512 C 243.319 267.731,243.477 268.132,243.804 268.404 C 244.455 268.943,244.591 268.520,244.044 267.657 C 243.835 267.328,243.604 267.271,243.454 267.512 " stroke="none" fill="#ff5500" fill-rule="evenodd"></path><path id="path9" d="" stroke="none" fill="#6db6b6" fill-rule="evenodd"></path><path id="path10" d="M191.063 0.581 C 190.938 0.906,190.487 1.094,190.038 1.007 C 189.510 0.906,189.153 1.118,188.990 1.632 C 188.854 2.061,188.620 2.343,188.471 2.259 C 188.024 2.007,185.792 3.469,185.898 3.945 C 185.951 4.187,185.546 4.499,184.998 4.636 C 184.449 4.774,184.000 5.097,184.000 5.354 C 184.000 5.978,182.539 7.206,182.200 6.867 C 182.054 6.720,181.970 6.780,182.014 7.000 C 182.269 8.262,181.942 9.600,181.379 9.600 C 181.038 9.600,180.570 10.140,180.340 10.800 C 180.110 11.459,179.772 11.906,179.589 11.793 C 179.139 11.515,178.636 12.386,178.571 13.554 C 178.542 14.078,178.120 14.808,177.634 15.174 C 177.061 15.607,176.738 16.297,176.714 17.144 C 176.693 17.880,176.549 18.240,176.382 17.971 C 176.181 17.645,175.873 17.822,175.409 18.530 C 175.036 19.099,174.847 19.753,174.989 19.982 C 175.131 20.212,175.057 20.423,174.824 20.450 C 174.591 20.478,174.195 20.523,173.945 20.550 C 173.694 20.578,173.434 21.120,173.366 21.756 C 173.184 23.465,172.856 24.107,172.278 23.885 C 171.814 23.707,171.671 24.074,171.509 25.862 C 171.486 26.116,171.225 26.231,170.929 26.117 C 170.550 25.972,170.472 26.121,170.663 26.621 C 170.844 27.093,170.786 27.238,170.488 27.055 C 170.204 26.879,169.945 27.285,169.781 28.161 C 169.600 29.124,169.351 29.479,168.961 29.330 C 168.631 29.203,168.379 29.380,168.350 29.757 C 168.322 30.111,168.255 30.580,168.200 30.800 C 168.145 31.020,168.078 31.441,168.050 31.736 C 168.023 32.030,167.540 32.481,166.977 32.737 C 166.415 32.994,166.066 33.384,166.203 33.605 C 166.339 33.825,166.182 34.109,165.854 34.234 C 165.526 34.360,165.325 34.809,165.406 35.232 C 165.497 35.703,165.331 36.000,164.977 36.000 C 164.660 36.000,164.421 36.135,164.447 36.300 C 164.597 37.248,164.328 38.000,163.840 38.000 C 163.522 38.000,163.126 38.649,162.925 39.500 C 162.724 40.349,162.327 41.000,162.010 41.000 C 161.703 41.000,161.301 41.578,161.118 42.285 C 160.880 43.204,160.612 43.503,160.176 43.336 C 159.841 43.207,159.599 43.259,159.637 43.451 C 159.820 44.363,159.014 46.471,158.347 46.828 C 157.882 47.077,157.600 47.665,157.600 48.387 C 157.600 49.195,157.358 49.623,156.800 49.800 C 156.360 49.940,156.000 50.285,156.000 50.568 C 156.000 50.850,155.460 51.646,154.800 52.337 C 154.140 53.028,153.600 53.875,153.600 54.220 C 153.600 54.565,153.432 54.744,153.228 54.617 C 153.023 54.491,152.742 54.570,152.604 54.793 C 152.466 55.017,152.003 55.200,151.576 55.200 C 151.060 55.200,150.800 55.475,150.800 56.021 C 150.800 56.787,150.585 56.836,147.600 56.764 C 144.891 56.699,144.400 56.584,144.400 56.010 C 144.400 55.638,144.175 55.298,143.900 55.256 C 143.625 55.213,142.533 55.074,141.473 54.947 C 140.111 54.783,139.606 54.562,139.748 54.191 C 139.994 53.550,139.169 53.200,137.412 53.200 C 136.432 53.200,136.103 53.031,136.144 52.547 C 136.201 51.887,135.756 51.719,133.200 51.436 C 132.430 51.351,131.665 51.263,131.500 51.241 C 131.335 51.218,131.200 50.998,131.200 50.751 C 131.200 50.449,131.429 50.474,131.900 50.829 C 132.550 51.319,132.554 51.306,131.955 50.647 C 131.600 50.258,130.520 49.834,129.555 49.706 C 128.512 49.568,127.588 49.175,127.277 48.737 C 126.930 48.248,126.257 48.000,125.274 48.000 C 124.258 48.000,123.645 47.764,123.324 47.250 C 123.034 46.786,122.165 46.396,121.048 46.228 C 119.835 46.046,119.167 45.726,119.017 45.254 C 118.855 44.744,118.351 44.543,117.179 44.522 C 116.218 44.504,115.241 44.199,114.764 43.768 C 114.324 43.370,113.567 42.990,113.082 42.924 C 110.950 42.636,110.233 42.350,110.785 42.009 C 111.421 41.617,108.674 40.720,107.829 41.044 C 107.548 41.152,107.018 40.781,106.650 40.220 C 106.111 39.398,105.659 39.200,104.324 39.200 C 103.413 39.200,102.784 39.083,102.927 38.939 C 103.351 38.515,101.216 37.600,99.803 37.600 C 98.526 37.600,97.348 36.785,97.870 36.263 C 98.015 36.118,97.968 35.982,97.767 35.960 C 97.565 35.938,96.500 35.846,95.400 35.756 C 92.850 35.547,92.278 35.329,92.639 34.703 C 92.798 34.426,92.781 34.333,92.601 34.497 C 92.421 34.660,92.032 34.593,91.737 34.348 C 91.342 34.020,91.058 34.020,90.663 34.348 C 90.368 34.593,89.993 34.660,89.830 34.497 C 89.503 34.169,85.658 34.080,85.681 34.400 C 85.733 35.144,85.531 35.312,85.200 34.800 C 84.869 34.287,84.811 34.302,84.806 34.900 C 84.802 35.416,84.458 35.608,83.500 35.630 C 81.305 35.680,80.312 35.979,79.594 36.807 C 79.216 37.243,78.432 37.639,77.853 37.687 C 77.274 37.735,76.800 37.897,76.800 38.048 C 76.800 38.198,76.170 38.693,75.400 39.147 C 74.630 39.601,74.000 40.249,74.000 40.587 C 74.000 40.924,73.733 41.200,73.408 41.200 C 73.082 41.200,72.703 41.649,72.565 42.197 C 72.427 42.746,72.199 43.134,72.057 43.061 C 71.720 42.885,70.632 44.109,70.483 44.833 C 70.419 45.145,70.059 45.670,69.683 46.000 C 69.307 46.330,68.937 47.320,68.859 48.200 C 68.692 50.099,68.494 50.505,67.911 50.145 C 67.661 49.991,67.591 50.061,67.745 50.311 C 67.892 50.549,67.821 50.863,67.587 51.008 C 66.793 51.499,67.200 64.292,68.044 65.365 C 68.670 66.161,68.768 67.389,68.873 75.764 C 68.960 82.747,69.124 85.371,69.492 85.676 C 69.766 85.904,69.888 86.258,69.761 86.463 C 69.635 86.668,69.731 87.076,69.975 87.370 C 70.257 87.710,70.471 90.888,70.562 96.091 C 70.649 101.041,70.881 104.605,71.150 105.106 C 71.482 105.727,71.474 105.975,71.117 106.094 C 70.797 106.201,70.939 106.671,71.548 107.527 C 72.287 108.564,72.338 108.800,71.827 108.800 C 71.482 108.800,71.200 108.991,71.200 109.224 C 71.200 109.457,71.399 109.524,71.641 109.374 C 71.884 109.224,71.781 109.562,71.412 110.125 C 71.043 110.688,70.697 111.735,70.642 112.451 C 70.588 113.167,70.319 113.827,70.046 113.918 C 69.772 114.009,69.375 114.540,69.163 115.097 C 68.951 115.655,68.671 116.005,68.541 115.875 C 68.246 115.579,67.200 116.591,67.200 117.171 C 67.200 117.537,64.832 117.822,63.330 117.637 C 63.072 117.605,62.614 117.930,62.313 118.359 C 61.875 118.985,61.165 119.174,58.737 119.313 C 55.605 119.492,54.621 119.787,55.017 120.428 C 55.144 120.632,54.562 120.818,53.724 120.839 C 52.886 120.861,51.840 120.918,51.400 120.966 C 50.960 121.013,50.022 121.086,49.316 121.126 C 48.609 121.167,47.706 121.549,47.308 121.976 C 46.738 122.588,45.968 122.770,43.678 122.837 C 41.503 122.901,40.677 123.083,40.398 123.561 C 40.192 123.912,40.019 124.043,40.012 123.851 C 40.005 123.659,39.765 123.697,39.478 123.935 C 39.191 124.173,37.679 124.420,36.118 124.484 C 34.523 124.549,33.379 124.761,33.506 124.968 C 33.630 125.171,33.424 125.218,33.045 125.073 C 32.634 124.915,32.457 124.969,32.605 125.207 C 32.939 125.748,32.255 125.941,29.200 126.166 C 27.770 126.271,26.510 126.388,26.400 126.426 C 26.290 126.464,26.070 126.475,25.912 126.451 C 25.754 126.427,25.432 126.766,25.198 127.204 C 24.833 127.885,24.354 128.001,21.886 128.005 C 18.211 128.012,16.925 128.310,17.801 128.952 C 18.294 129.312,17.948 129.429,16.111 129.520 C 12.803 129.684,12.458 129.768,11.893 130.541 C 11.445 131.153,10.388 131.467,8.400 131.579 C 7.867 131.609,7.867 131.655,8.400 132.000 C 8.836 132.282,8.857 132.389,8.476 132.394 C 8.188 132.397,8.064 132.580,8.200 132.800 C 8.340 133.026,8.013 133.200,7.451 133.200 C 6.805 133.200,6.364 133.482,6.200 134.000 C 6.060 134.440,5.598 134.800,5.173 134.800 C 4.655 134.800,4.400 135.076,4.400 135.637 C 4.400 136.130,4.080 136.559,3.622 136.678 C 3.195 136.790,2.790 137.268,2.722 137.741 C 2.642 138.304,2.359 138.560,1.900 138.482 C 1.237 138.371,1.008 139.227,1.093 141.500 C 1.103 141.775,0.861 142.000,0.556 142.000 C -0.146 142.000,-0.282 158.639,0.418 158.873 C 0.648 158.949,0.867 159.426,0.905 159.931 C 0.943 160.437,1.469 161.406,2.075 162.084 C 2.680 162.762,3.080 163.470,2.964 163.658 C 2.848 163.846,3.038 164.000,3.386 164.000 C 3.735 164.000,4.182 164.425,4.379 164.945 C 4.577 165.465,5.034 166.004,5.395 166.143 C 5.756 166.281,5.938 166.577,5.800 166.800 C 5.662 167.023,5.841 167.318,6.198 167.454 C 6.554 167.591,6.753 167.944,6.640 168.239 C 6.527 168.533,6.607 168.881,6.817 169.011 C 7.028 169.141,7.200 169.035,7.200 168.775 C 7.200 168.422,7.353 168.429,7.800 168.800 C 8.130 169.074,8.400 169.546,8.400 169.849 C 8.400 170.152,8.575 170.400,8.790 170.400 C 9.004 170.400,9.459 170.940,9.800 171.600 C 10.141 172.260,10.686 172.800,11.010 172.800 C 11.335 172.800,11.600 173.160,11.600 173.600 C 11.600 174.133,11.867 174.400,12.400 174.400 C 12.987 174.400,13.200 174.667,13.200 175.400 C 13.200 176.133,13.413 176.400,14.000 176.400 C 14.726 176.400,14.849 176.574,14.776 177.500 C 14.763 177.665,15.162 177.897,15.662 178.015 C 16.162 178.133,16.667 178.583,16.785 179.015 C 17.155 180.368,18.463 182.008,18.944 181.720 C 19.195 181.569,19.153 181.751,18.851 182.123 C 18.549 182.495,18.414 182.822,18.551 182.850 C 18.688 182.878,18.949 182.923,19.131 182.950 C 19.641 183.027,22.000 185.487,22.000 185.942 C 22.000 186.164,22.360 186.460,22.800 186.600 C 23.240 186.740,23.600 187.189,23.600 187.599 C 23.600 188.067,23.934 188.392,24.500 188.472 C 24.995 188.542,25.409 188.870,25.421 189.200 C 25.433 189.530,26.017 190.403,26.720 191.141 C 27.422 191.878,27.894 192.647,27.769 192.851 C 27.643 193.054,27.689 193.194,27.870 193.163 C 28.757 193.009,29.265 193.254,29.077 193.744 C 28.862 194.305,31.499 197.079,32.077 196.900 C 32.353 196.814,32.519 197.260,32.486 198.000 C 32.481 198.110,32.729 198.432,33.038 198.716 C 33.347 198.999,33.600 199.148,33.600 199.047 C 33.600 198.945,34.140 199.402,34.800 200.062 C 35.460 200.722,36.000 201.518,36.000 201.831 C 36.000 202.144,36.360 202.400,36.800 202.400 C 37.530 202.400,37.903 203.679,37.647 205.300 C 37.621 205.465,37.960 205.600,38.400 205.600 C 39.482 205.600,39.629 211.320,38.562 211.917 C 38.212 212.113,37.799 212.887,37.646 213.636 C 37.444 214.626,37.154 214.998,36.585 214.999 C 36.154 215.000,35.779 215.225,35.751 215.500 C 35.723 215.775,35.678 216.180,35.650 216.400 C 35.623 216.620,35.342 216.800,35.027 216.800 C 34.712 216.800,34.340 217.160,34.200 217.600 C 34.060 218.040,33.611 218.400,33.201 218.400 C 32.735 218.400,32.404 218.738,32.318 219.300 C 32.243 219.795,31.947 220.151,31.661 220.090 C 31.375 220.030,31.255 220.165,31.394 220.390 C 31.533 220.616,31.457 220.800,31.224 220.800 C 30.991 220.800,30.800 221.070,30.800 221.400 C 30.800 221.730,30.609 222.000,30.376 222.000 C 30.143 222.000,30.064 222.180,30.200 222.400 C 30.336 222.620,30.275 222.800,30.065 222.800 C 29.387 222.800,27.200 224.957,27.200 225.625 C 27.200 225.981,26.749 226.477,26.198 226.728 C 25.646 226.980,25.217 227.323,25.245 227.493 C 25.381 228.335,25.138 228.800,24.563 228.800 C 24.212 228.800,23.833 229.154,23.719 229.587 C 23.606 230.019,23.191 230.476,22.797 230.601 C 22.402 230.726,21.966 231.280,21.828 231.831 C 21.690 232.382,21.409 232.729,21.205 232.603 C 21.001 232.477,20.552 232.920,20.207 233.587 C 19.862 234.254,19.404 234.800,19.190 234.800 C 18.975 234.800,18.800 235.070,18.800 235.400 C 18.800 235.739,18.442 236.000,17.976 236.000 C 17.523 236.000,17.256 236.168,17.383 236.372 C 17.509 236.577,17.430 236.858,17.207 236.996 C 16.983 237.134,16.800 237.613,16.800 238.061 C 16.800 238.538,16.469 238.961,16.000 239.084 C 15.271 239.275,15.024 239.687,15.153 240.500 C 15.179 240.665,14.750 240.800,14.200 240.800 C 13.400 240.800,13.200 241.000,13.200 241.800 C 13.200 242.448,12.976 242.800,12.563 242.800 C 12.212 242.800,11.833 243.151,11.721 243.581 C 11.609 244.010,11.041 244.536,10.458 244.749 C 9.876 244.962,9.632 245.151,9.916 245.168 C 10.337 245.194,10.337 245.303,9.916 245.758 C 9.632 246.065,9.278 246.242,9.129 246.152 C 8.980 246.062,8.733 246.381,8.580 246.862 C 8.428 247.342,7.425 248.613,6.352 249.686 C 5.278 250.760,4.400 251.969,4.400 252.372 C 4.400 252.776,4.040 253.201,3.600 253.316 C 3.140 253.436,2.800 253.862,2.800 254.316 C 2.800 254.770,2.460 255.196,2.000 255.316 C 1.467 255.455,1.200 255.862,1.200 256.534 C 1.200 257.089,0.930 257.813,0.600 258.143 C -0.227 258.970,-0.304 275.600,0.519 275.600 C 0.828 275.600,1.020 276.044,0.995 276.700 C 0.950 277.876,1.880 279.321,2.453 278.967 C 2.769 278.772,2.988 279.690,2.831 280.549 C 2.796 280.741,3.050 280.790,3.396 280.657 C 3.815 280.496,4.175 280.746,4.476 281.408 C 4.725 281.954,5.157 282.400,5.437 282.400 C 5.717 282.400,6.054 282.741,6.186 283.157 C 6.318 283.573,6.794 284.010,7.243 284.127 C 7.692 284.245,8.148 284.680,8.256 285.094 C 8.404 285.657,8.874 285.872,10.123 285.945 C 11.041 285.999,11.930 286.290,12.099 286.591 C 12.440 287.201,13.774 287.546,16.276 287.670 C 17.198 287.716,17.862 287.899,17.753 288.077 C 17.643 288.255,17.754 288.400,18.000 288.400 C 18.246 288.400,18.336 288.580,18.200 288.800 C 18.056 289.033,18.507 289.223,19.276 289.254 C 22.014 289.366,24.203 289.520,24.300 289.609 C 24.355 289.659,24.625 289.731,24.900 289.768 C 25.175 289.806,25.359 290.042,25.308 290.293 C 25.258 290.544,25.528 290.770,25.908 290.795 C 31.839 291.194,32.374 291.286,32.583 291.948 C 32.759 292.500,33.392 292.653,35.896 292.746 C 38.791 292.854,40.229 293.306,39.813 293.979 C 39.715 294.137,39.852 294.287,40.118 294.312 C 40.383 294.336,41.770 294.440,43.200 294.543 C 45.633 294.717,48.649 295.618,48.224 296.043 C 48.119 296.148,49.511 296.276,51.317 296.328 C 54.035 296.406,54.716 296.560,55.272 297.221 C 55.641 297.660,56.091 297.993,56.272 297.962 C 58.397 297.594,62.305 298.076,62.256 298.700 C 62.221 299.139,62.461 299.379,62.900 299.344 C 63.285 299.314,63.600 299.404,63.600 299.544 C 63.600 299.685,64.410 299.785,65.400 299.766 C 66.796 299.740,67.200 299.876,67.200 300.372 C 67.200 300.723,67.585 301.188,68.055 301.405 C 68.525 301.622,68.874 301.980,68.831 302.200 C 68.788 302.420,69.168 302.698,69.676 302.818 C 70.326 302.971,70.604 303.328,70.613 304.018 C 70.621 304.558,70.722 305.180,70.838 305.400 C 70.953 305.620,71.029 306.283,71.006 306.873 C 70.983 307.463,71.094 307.865,71.254 307.767 C 71.616 307.543,72.146 308.365,72.211 309.254 C 72.244 309.692,72.054 309.842,71.661 309.691 C 71.240 309.530,71.132 309.646,71.299 310.082 C 71.430 310.423,71.351 310.889,71.123 311.117 C 70.764 311.476,70.606 315.409,70.426 328.471 C 70.409 329.665,70.156 330.587,69.725 331.018 C 69.139 331.604,69.030 332.956,68.896 341.346 C 68.797 347.505,68.585 351.145,68.312 351.400 C 68.014 351.678,67.971 351.616,68.171 351.200 C 68.330 350.870,68.191 350.929,67.863 351.331 C 67.208 352.134,66.907 367.028,67.554 366.629 C 67.984 366.363,68.909 368.123,68.973 369.329 C 69.001 369.853,69.342 370.714,69.731 371.241 C 70.119 371.768,70.311 371.947,70.157 371.638 C 69.967 371.258,70.035 371.174,70.365 371.379 C 70.634 371.545,70.753 371.946,70.629 372.269 C 70.347 373.004,71.110 374.503,71.608 374.195 C 71.811 374.070,72.090 374.418,72.228 374.969 C 72.366 375.520,72.812 376.077,73.219 376.206 C 73.626 376.335,74.071 376.794,74.208 377.226 C 74.345 377.658,74.617 377.913,74.811 377.793 C 75.006 377.673,75.462 378.029,75.826 378.584 C 76.190 379.139,76.648 379.494,76.844 379.373 C 77.040 379.252,77.200 379.343,77.200 379.576 C 77.200 379.809,77.335 379.979,77.500 379.953 C 78.603 379.778,79.600 380.086,79.600 380.600 C 79.600 380.930,79.825 381.227,80.100 381.259 C 80.375 381.292,80.870 381.355,81.200 381.400 C 81.530 381.445,82.486 381.508,83.324 381.541 C 84.225 381.576,84.746 381.763,84.600 382.000 C 84.356 382.396,84.893 382.564,85.940 382.421 C 86.237 382.380,86.373 382.520,86.242 382.731 C 85.782 383.476,91.722 383.073,92.575 382.301 C 93.242 381.698,95.049 381.402,97.500 381.493 C 97.775 381.503,98.000 381.171,98.000 380.756 C 98.000 380.340,98.135 379.977,98.300 379.949 C 98.465 379.921,98.980 379.857,99.445 379.806 C 99.909 379.756,100.809 379.569,101.445 379.392 C 102.080 379.214,102.748 379.103,102.930 379.144 C 103.111 379.186,103.153 379.048,103.023 378.838 C 102.717 378.342,103.121 378.112,104.600 377.943 C 105.260 377.868,106.101 377.478,106.469 377.078 C 106.875 376.635,107.818 376.306,108.869 376.240 C 109.999 376.170,110.600 375.945,110.600 375.594 C 110.600 375.259,111.544 374.846,113.091 374.502 C 114.565 374.175,115.545 373.755,115.491 373.474 C 115.435 373.184,116.052 372.953,117.080 372.878 C 118.328 372.787,118.824 372.556,119.007 371.978 C 119.226 371.286,120.877 370.896,122.500 371.153 C 122.665 371.179,122.800 371.009,122.800 370.776 C 122.800 370.543,122.960 370.451,123.155 370.572 C 123.350 370.692,123.603 370.433,123.717 369.996 C 123.913 369.244,125.281 368.921,127.154 369.183 C 127.511 369.232,127.621 369.031,127.461 368.615 C 127.190 367.909,127.580 367.687,129.400 367.514 C 130.060 367.451,130.835 367.085,131.123 366.700 C 131.440 366.275,132.175 366.000,132.994 366.000 C 133.736 366.000,134.582 365.761,134.875 365.468 C 135.168 365.175,135.631 365.010,135.904 365.101 C 136.218 365.206,136.311 365.034,136.157 364.633 C 135.958 364.113,136.238 364.000,137.730 364.000 C 139.195 364.000,139.595 363.845,139.800 363.200 C 139.994 362.588,140.405 362.400,141.552 362.400 C 142.532 362.400,143.369 362.102,143.975 361.538 C 145.303 360.300,149.913 360.313,151.157 361.557 C 151.978 362.378,152.475 362.563,153.500 362.430 C 153.783 362.393,154.000 362.796,154.000 363.359 C 154.000 363.906,154.183 364.466,154.407 364.604 C 154.630 364.742,154.692 365.051,154.545 365.289 C 154.391 365.539,154.461 365.609,154.711 365.455 C 155.201 365.152,156.479 366.748,156.160 367.265 C 156.046 367.449,156.323 367.600,156.776 367.600 C 157.575 367.600,157.710 367.957,157.710 370.066 C 157.710 370.501,157.969 370.683,158.455 370.589 C 159.119 370.462,159.401 370.975,159.262 372.057 C 159.244 372.198,159.677 372.798,160.225 373.389 C 160.772 373.980,161.195 374.674,161.163 374.932 C 161.029 376.019,161.246 376.400,162.000 376.400 C 162.611 376.400,162.800 376.667,162.800 377.528 C 162.800 378.230,163.174 378.981,163.791 379.518 C 164.383 380.032,164.688 380.626,164.549 380.990 C 164.329 381.561,164.816 381.806,165.800 381.619 C 166.020 381.577,165.993 381.754,165.740 382.011 C 165.392 382.366,165.469 382.669,166.055 383.255 C 166.481 383.681,166.722 384.203,166.591 384.415 C 166.460 384.627,166.723 384.800,167.176 384.800 C 167.814 384.800,168.011 385.071,168.050 386.000 C 168.131 387.948,168.212 388.205,168.710 388.103 C 168.970 388.049,169.551 388.814,170.001 389.803 C 170.452 390.791,170.916 391.600,171.034 391.600 C 171.151 391.600,171.120 391.375,170.965 391.100 C 170.747 390.714,170.799 390.707,171.191 391.070 C 171.471 391.328,171.700 392.006,171.700 392.576 C 171.700 393.309,171.890 393.581,172.350 393.506 C 172.832 393.427,173.031 393.772,173.121 394.844 C 173.209 395.900,173.508 396.430,174.235 396.819 C 174.781 397.111,175.145 397.566,175.044 397.829 C 174.943 398.093,175.297 398.688,175.830 399.151 C 176.364 399.615,176.800 400.346,176.800 400.775 C 176.800 401.204,177.183 401.823,177.650 402.150 C 178.139 402.492,178.500 403.179,178.500 403.765 C 178.500 404.326,178.657 404.688,178.850 404.569 C 179.042 404.450,179.200 404.633,179.200 404.976 C 179.200 405.319,179.384 405.600,179.610 405.600 C 179.835 405.600,180.191 406.050,180.400 406.600 C 180.609 407.150,181.055 407.600,181.390 407.600 C 181.776 407.600,182.000 407.972,182.000 408.613 C 182.000 409.169,182.252 409.722,182.561 409.840 C 183.096 410.046,183.746 411.433,183.633 412.130 C 183.604 412.311,183.752 412.353,183.962 412.223 C 184.173 412.093,184.460 412.173,184.600 412.400 C 184.740 412.627,185.023 412.709,185.228 412.583 C 185.592 412.358,185.759 412.904,185.630 413.900 C 185.575 414.319,186.252 414.495,187.451 414.375 C 187.588 414.361,187.907 414.766,188.160 415.275 C 188.470 415.901,189.036 416.241,189.909 416.325 C 190.619 416.394,191.200 416.619,191.200 416.825 C 191.200 417.341,207.892 417.323,208.067 416.807 C 208.140 416.591,208.875 416.366,209.699 416.307 C 210.574 416.245,211.199 415.992,211.199 415.700 C 211.200 415.425,211.425 415.197,211.700 415.194 C 212.033 415.190,212.000 415.058,211.600 414.800 C 211.039 414.437,212.147 414.157,213.330 414.363 C 213.511 414.394,213.545 414.235,213.406 414.010 C 213.267 413.784,213.439 413.600,213.789 413.600 C 214.139 413.600,214.530 413.327,214.658 412.993 C 214.786 412.659,215.186 412.434,215.546 412.493 C 216.000 412.567,216.185 412.325,216.152 411.700 C 216.126 411.205,216.277 410.800,216.488 410.800 C 217.139 410.800,218.326 409.054,218.182 408.307 C 218.103 407.895,218.287 407.600,218.623 407.600 C 218.940 407.600,219.200 407.409,219.200 407.176 C 219.200 406.943,219.350 406.845,219.533 406.959 C 219.717 407.072,219.886 406.948,219.910 406.682 C 220.028 405.360,220.351 404.610,220.763 404.703 C 221.013 404.760,221.332 404.241,221.470 403.550 C 221.622 402.791,222.021 402.215,222.477 402.096 C 222.893 401.987,223.207 401.606,223.174 401.249 C 223.067 400.056,223.666 398.876,224.489 398.661 C 225.019 398.522,225.222 398.234,225.069 397.835 C 224.940 397.499,225.088 396.969,225.398 396.659 C 225.708 396.349,225.835 395.955,225.681 395.784 C 225.526 395.613,225.713 395.585,226.095 395.722 C 226.478 395.859,226.771 395.843,226.748 395.686 C 226.582 394.570,226.911 393.619,227.531 393.422 C 227.953 393.288,228.424 392.559,228.646 391.695 C 228.858 390.873,229.246 390.244,229.508 390.298 C 229.771 390.351,230.100 389.942,230.239 389.387 C 230.378 388.833,230.831 388.197,231.246 387.975 C 231.722 387.721,232.000 387.139,232.000 386.399 C 232.000 385.561,232.279 385.079,232.979 384.713 C 233.517 384.431,233.967 384.065,233.979 383.900 C 233.990 383.735,234.000 383.150,234.000 382.600 C 234.000 381.867,234.213 381.600,234.800 381.600 C 235.453 381.600,235.600 381.333,235.600 380.151 C 235.600 378.984,235.705 378.789,236.137 379.148 C 236.835 379.727,237.327 379.235,236.748 378.537 C 236.448 378.176,236.440 378.000,236.723 378.000 C 236.955 378.000,237.202 377.595,237.272 377.100 C 237.355 376.520,237.722 376.154,238.306 376.071 C 238.804 376.001,239.126 375.804,239.021 375.634 C 238.916 375.464,239.020 374.638,239.252 373.798 C 239.535 372.771,239.778 372.441,239.993 372.789 C 240.211 373.141,240.401 372.904,240.589 372.050 C 240.741 371.359,240.985 370.866,241.133 370.955 C 241.427 371.132,242.650 369.946,242.517 369.610 C 242.336 369.149,242.910 367.600,243.263 367.600 C 243.772 367.600,244.789 365.110,244.487 364.604 C 244.355 364.382,244.585 364.470,244.998 364.800 C 245.680 365.344,245.725 365.335,245.487 364.700 C 245.343 364.315,245.399 364.000,245.613 364.000 C 245.826 364.000,246.000 363.640,246.000 363.200 C 246.000 362.613,246.267 362.400,247.000 362.400 C 247.550 362.400,248.379 362.021,248.843 361.557 C 249.671 360.729,250.261 360.652,254.900 360.772 C 255.556 360.789,255.960 361.002,255.900 361.300 C 255.845 361.575,256.025 361.755,256.300 361.700 C 256.575 361.645,256.800 361.780,256.800 362.000 C 256.800 362.220,257.430 362.400,258.200 362.400 C 258.970 362.400,259.600 362.591,259.600 362.824 C 259.600 363.057,259.780 363.136,260.000 363.000 C 260.220 362.864,260.400 363.033,260.400 363.376 C 260.400 363.847,260.832 364.000,262.157 364.000 C 263.660 364.000,263.947 364.134,264.146 364.927 C 264.319 365.618,264.687 365.872,265.589 365.924 C 267.744 366.048,268.000 366.125,268.000 366.649 C 268.000 367.122,268.998 367.411,271.600 367.692 C 272.301 367.768,272.565 368.009,272.482 368.500 C 272.386 369.073,272.666 369.200,274.025 369.200 C 275.280 369.200,275.861 369.424,276.408 370.120 C 276.932 370.785,277.611 371.068,278.866 371.141 C 279.820 371.197,280.780 371.440,281.000 371.680 C 281.281 371.988,281.222 372.023,280.800 371.800 C 280.312 371.542,280.293 371.583,280.702 372.023 C 280.978 372.320,282.058 372.663,283.102 372.784 C 284.622 372.960,284.977 373.143,284.882 373.702 C 284.818 374.086,284.998 374.412,285.282 374.427 C 287.361 374.535,288.686 374.900,289.200 375.507 C 289.536 375.903,290.498 376.272,291.389 376.345 C 292.387 376.428,293.177 376.760,293.512 377.238 C 293.883 377.768,294.525 378.000,295.623 378.000 C 296.656 378.000,297.200 378.181,297.200 378.524 C 297.200 379.081,301.098 380.510,301.664 380.160 C 301.849 380.046,302.003 380.368,302.006 380.876 C 302.011 381.619,302.088 381.683,302.400 381.200 C 302.658 380.800,302.790 380.767,302.794 381.100 C 302.798 381.444,303.550 381.600,305.200 381.600 C 307.067 381.600,307.600 381.733,307.600 382.200 C 307.600 382.545,307.983 382.816,308.500 382.837 C 314.358 383.074,316.484 382.804,315.190 381.986 C 314.692 381.670,317.903 381.332,319.300 381.553 C 319.465 381.579,319.603 381.375,319.606 381.100 C 319.611 380.739,319.710 380.754,319.962 381.153 C 320.237 381.587,320.371 381.523,320.583 380.853 C 320.732 380.384,321.112 379.977,321.427 379.950 C 322.945 379.818,324.071 379.162,323.836 378.548 C 323.706 378.210,323.899 378.000,324.340 378.000 C 324.734 378.000,325.447 377.550,325.925 377.000 C 326.403 376.450,326.976 376.000,327.197 376.000 C 327.419 376.000,327.600 375.640,327.600 375.200 C 327.600 374.463,328.039 374.199,328.968 374.375 C 329.170 374.414,329.099 374.161,328.811 373.813 C 328.367 373.278,328.384 373.219,328.928 373.428 C 329.416 373.615,329.529 373.471,329.403 372.817 C 329.297 372.264,329.585 371.660,330.219 371.108 C 330.954 370.470,331.203 369.847,331.213 368.628 C 331.224 367.129,332.018 365.352,332.473 365.806 C 332.773 366.106,332.834 364.977,332.786 360.000 C 332.735 354.528,332.700 354.015,332.395 354.203 C 331.411 354.811,331.223 353.322,331.172 344.486 C 331.141 339.146,330.966 335.297,330.760 335.425 C 330.563 335.546,330.577 335.185,330.791 334.623 C 331.048 333.948,331.044 333.600,330.780 333.600 C 329.901 333.600,329.615 331.244,329.582 323.752 C 329.563 319.441,329.386 315.490,329.189 314.971 C 328.968 314.390,328.979 313.937,329.216 313.790 C 329.457 313.641,329.426 313.222,329.133 312.676 C 328.876 312.194,328.650 311.710,328.632 311.600 C 328.615 311.490,328.486 311.438,328.347 311.484 C 328.207 311.531,328.117 310.361,328.147 308.884 C 328.179 307.270,328.366 306.229,328.617 306.272 C 328.989 306.337,329.157 305.787,329.291 304.065 C 329.314 303.770,329.764 303.366,330.291 303.166 C 330.817 302.965,331.142 302.629,331.011 302.418 C 330.881 302.208,331.230 301.737,331.787 301.372 C 332.344 301.007,332.800 300.482,332.800 300.206 C 332.800 299.878,333.527 299.676,334.900 299.621 C 337.913 299.502,337.981 299.493,337.809 299.214 C 337.320 298.423,338.502 298.001,341.330 297.959 C 343.824 297.921,344.514 297.773,344.925 297.186 C 345.323 296.618,346.121 296.423,348.590 296.291 C 350.802 296.173,351.814 295.955,351.973 295.561 C 352.246 294.886,352.622 294.794,355.766 294.626 C 358.650 294.472,360.474 294.043,360.191 293.585 C 359.835 293.009,360.567 292.847,363.893 292.767 C 366.681 292.700,367.163 292.585,367.330 291.944 C 367.490 291.333,367.942 291.192,369.863 291.154 C 371.148 291.128,372.380 291.066,372.600 291.015 C 372.820 290.964,373.399 290.894,373.887 290.861 C 374.500 290.819,374.704 290.614,374.545 290.200 C 374.418 289.870,374.469 289.594,374.657 289.587 C 378.886 289.429,381.082 289.080,381.789 288.454 C 382.254 288.044,383.368 287.692,384.396 287.631 C 385.385 287.573,386.510 287.355,386.896 287.148 C 387.397 286.881,387.608 286.921,387.627 287.286 C 387.642 287.569,387.849 287.395,388.088 286.900 C 388.339 286.381,388.886 286.000,389.381 286.000 C 389.854 286.000,390.482 285.775,390.779 285.500 C 391.216 285.094,391.263 285.113,391.029 285.600 C 390.870 285.930,391.129 285.705,391.604 285.100 C 392.078 284.495,392.812 284.000,393.233 284.000 C 393.733 284.000,394.000 283.722,394.000 283.200 C 394.000 282.735,394.267 282.400,394.637 282.400 C 394.988 282.400,395.369 282.040,395.484 281.600 C 395.600 281.157,396.030 280.800,396.447 280.800 C 396.984 280.800,397.200 280.513,397.200 279.800 C 397.200 278.916,397.564 278.615,398.475 278.744 C 398.627 278.766,398.682 278.427,398.598 277.992 C 398.515 277.556,398.616 277.200,398.823 277.200 C 399.030 277.200,399.200 276.660,399.200 276.000 C 399.200 275.340,399.380 274.800,399.600 274.800 C 400.161 274.800,400.143 258.914,399.582 258.727 C 399.352 258.651,399.134 258.186,399.097 257.694 C 399.060 257.202,398.877 256.800,398.691 256.800 C 398.505 256.800,398.458 256.629,398.588 256.420 C 398.717 256.211,398.457 255.845,398.011 255.606 C 397.565 255.367,397.200 254.801,397.200 254.348 C 397.200 253.862,396.873 253.440,396.400 253.316 C 395.960 253.201,395.600 252.797,395.600 252.418 C 395.600 252.039,395.150 251.523,394.600 251.273 C 394.012 251.005,393.600 250.483,393.600 250.006 C 393.600 249.560,393.156 248.809,392.614 248.337 C 392.071 247.865,391.741 247.296,391.879 247.072 C 392.032 246.825,391.868 246.765,391.466 246.919 C 391.100 247.060,390.800 247.013,390.800 246.816 C 390.800 246.619,390.517 246.174,390.171 245.829 C 389.808 245.465,389.734 245.200,389.995 245.200 C 390.244 245.200,390.334 245.017,390.196 244.793 C 390.058 244.570,389.800 244.476,389.623 244.586 C 389.302 244.784,386.800 242.617,386.800 242.140 C 386.800 242.001,385.984 241.094,384.988 240.126 C 383.991 239.157,383.278 238.197,383.404 237.994 C 383.530 237.790,383.175 237.509,382.616 237.368 C 382.057 237.228,381.600 236.942,381.600 236.733 C 381.600 236.524,381.763 236.454,381.963 236.577 C 382.162 236.700,382.119 236.364,381.867 235.830 C 381.615 235.295,381.346 234.920,381.271 234.996 C 381.063 235.204,379.600 233.655,379.600 233.227 C 379.600 233.022,379.244 232.741,378.808 232.603 C 378.373 232.464,378.034 232.227,378.055 232.076 C 378.169 231.277,377.921 230.873,377.200 230.684 C 376.721 230.559,376.400 230.138,376.400 229.637 C 376.400 229.006,376.149 228.800,375.376 228.800 C 374.813 228.800,374.461 228.625,374.593 228.412 C 374.725 228.198,374.375 227.626,373.816 227.139 C 373.257 226.653,372.800 226.018,372.800 225.728 C 372.800 225.438,372.440 225.200,372.000 225.200 C 371.292 225.200,370.982 224.579,371.153 223.500 C 371.179 223.335,371.025 223.200,370.810 223.200 C 370.596 223.200,370.121 222.622,369.756 221.915 C 369.390 221.208,368.664 220.294,368.142 219.883 C 367.620 219.472,367.297 218.966,367.426 218.758 C 367.554 218.550,367.511 218.406,367.330 218.437 C 366.555 218.572,365.487 218.380,365.719 218.147 C 366.072 217.795,365.235 216.331,364.825 216.584 C 364.641 216.698,364.394 216.420,364.275 215.966 C 364.156 215.512,363.686 215.043,363.230 214.924 C 362.682 214.780,362.400 214.382,362.400 213.749 C 362.400 213.223,362.040 212.484,361.600 212.107 C 360.587 211.240,360.423 206.411,361.380 205.617 C 361.698 205.352,362.162 204.520,362.411 203.768 C 362.659 203.016,363.118 202.400,363.431 202.400 C 363.744 202.400,364.000 202.069,364.000 201.664 C 364.000 201.260,364.460 200.719,365.023 200.463 C 365.585 200.206,365.942 199.830,365.817 199.627 C 365.691 199.424,365.922 199.152,366.330 199.022 C 366.738 198.893,367.308 198.346,367.596 197.807 C 367.885 197.268,368.246 196.905,368.400 197.000 C 368.554 197.095,368.931 196.684,369.239 196.086 C 369.547 195.489,369.979 194.868,370.199 194.706 C 370.420 194.544,370.455 194.409,370.278 194.406 C 370.100 194.403,370.460 193.956,371.078 193.413 C 371.845 192.738,372.010 192.413,371.600 192.387 C 371.261 192.366,371.407 192.186,371.938 191.974 C 372.453 191.767,372.965 191.255,373.075 190.836 C 373.184 190.417,373.635 189.979,374.077 189.864 C 374.519 189.748,374.762 189.461,374.616 189.226 C 374.469 188.988,374.807 188.626,375.376 188.409 C 375.939 188.195,376.400 187.745,376.400 187.410 C 376.400 186.860,376.871 186.622,377.700 186.753 C 377.966 186.795,378.164 185.886,378.055 185.124 C 378.034 184.973,378.353 184.742,378.765 184.611 C 379.177 184.480,379.611 184.001,379.730 183.547 C 379.849 183.092,380.126 182.831,380.345 182.966 C 380.764 183.225,381.321 182.575,381.458 181.669 C 381.627 180.550,381.997 180.000,382.580 180.000 C 382.913 180.000,383.298 179.550,383.436 179.000 C 383.593 178.374,383.970 178.000,384.443 178.000 C 384.860 178.000,385.179 177.865,385.153 177.700 C 385.024 176.885,385.272 176.474,386.011 176.281 C 386.458 176.164,386.796 175.918,386.764 175.734 C 386.628 174.964,386.824 174.368,387.147 174.567 C 387.587 174.839,388.894 173.427,388.534 173.068 C 388.387 172.920,388.571 172.800,388.942 172.800 C 389.313 172.800,389.820 172.356,390.067 171.813 C 390.315 171.269,390.675 170.923,390.869 171.043 C 391.062 171.162,391.414 170.707,391.649 170.030 C 391.885 169.354,392.238 168.900,392.434 169.021 C 392.630 169.142,392.693 168.985,392.572 168.672 C 392.452 168.359,392.637 167.995,392.983 167.862 C 393.329 167.729,393.785 167.165,393.997 166.607 C 394.209 166.050,394.607 165.640,394.882 165.697 C 395.156 165.754,395.440 165.413,395.513 164.941 C 395.586 164.468,395.995 163.990,396.422 163.878 C 396.863 163.763,397.200 163.331,397.200 162.882 C 397.200 162.372,397.450 162.109,397.900 162.144 C 398.408 162.185,398.566 161.953,398.475 161.300 C 398.406 160.805,398.541 160.400,398.775 160.400 C 399.009 160.400,399.200 159.950,399.200 159.400 C 399.200 158.850,399.425 158.397,399.700 158.394 C 400.033 158.390,400.000 158.258,399.600 158.000 C 399.200 157.742,399.167 157.610,399.500 157.606 C 400.114 157.599,400.235 142.150,399.624 141.933 C 399.416 141.860,399.157 141.297,399.047 140.683 C 398.937 140.069,398.467 139.259,398.003 138.883 C 397.538 138.507,397.102 137.839,397.034 137.399 C 396.958 136.913,396.653 136.646,396.255 136.718 C 395.676 136.821,395.530 136.492,395.624 135.300 C 395.637 135.135,395.232 134.902,394.724 134.782 C 394.216 134.662,393.800 134.302,393.800 133.982 C 393.800 133.644,393.337 133.347,392.693 133.273 C 392.084 133.203,391.690 132.978,391.817 132.773 C 391.944 132.568,391.812 132.397,391.524 132.394 C 391.143 132.389,391.164 132.282,391.600 132.000 C 392.069 131.697,391.966 131.611,391.126 131.606 C 389.702 131.598,387.896 130.892,388.169 130.449 C 388.449 129.997,386.455 129.600,383.907 129.600 C 382.362 129.600,381.963 129.474,382.130 129.039 C 382.418 128.288,381.245 128.012,377.727 128.005 C 375.233 128.001,374.821 127.897,374.606 127.220 C 374.457 126.749,374.130 126.529,373.780 126.663 C 373.461 126.786,373.200 126.731,373.200 126.543 C 373.199 126.354,371.913 126.167,370.341 126.127 C 368.310 126.075,367.297 125.866,366.841 125.405 C 366.252 124.809,366.265 124.780,367.000 125.042 C 367.440 125.199,367.673 125.187,367.517 125.014 C 367.362 124.842,365.927 124.643,364.330 124.571 C 361.543 124.447,359.429 123.801,359.807 123.189 C 359.956 122.947,355.674 122.657,353.070 122.733 C 352.473 122.751,352.428 122.648,352.826 122.168 C 353.230 121.681,353.190 121.629,352.591 121.859 C 352.094 122.050,351.959 121.990,352.158 121.668 C 352.359 121.343,351.953 121.185,350.824 121.150 C 349.931 121.123,348.840 121.055,348.400 121.000 C 347.960 120.945,347.060 120.878,346.400 120.850 C 345.667 120.819,345.200 120.584,345.200 120.245 C 345.200 119.606,343.653 119.287,340.242 119.221 C 337.776 119.174,337.049 118.968,337.391 118.414 C 337.692 117.927,336.568 117.600,334.594 117.600 C 333.205 117.600,332.803 117.439,332.600 116.800 C 332.460 116.360,332.095 116.000,331.787 116.000 C 331.137 116.000,330.299 114.634,330.702 114.231 C 330.852 114.081,330.666 114.076,330.288 114.222 C 329.733 114.435,329.600 114.257,329.600 113.305 C 329.600 112.626,329.255 111.811,328.787 111.389 C 327.903 110.589,327.694 105.850,328.493 104.734 C 328.779 104.334,328.819 104.376,328.650 104.900 C 328.526 105.285,328.599 105.600,328.813 105.600 C 329.026 105.600,329.220 105.285,329.245 104.900 C 329.348 103.319,329.547 94.635,329.600 89.400 C 329.635 85.875,329.784 84.096,330.000 84.600 C 330.328 85.363,330.345 85.359,330.372 84.500 C 330.387 84.005,330.540 83.600,330.711 83.600 C 330.883 83.600,331.075 79.325,331.140 74.100 C 331.248 65.372,331.320 64.533,332.026 63.777 C 332.755 62.996,332.997 59.531,332.811 52.518 C 332.798 52.034,332.442 51.395,332.019 51.098 C 331.464 50.710,331.215 49.981,331.125 48.480 C 331.013 46.614,330.799 46.228,329.942 46.339 C 329.800 46.357,329.567 45.751,329.425 44.991 C 329.281 44.226,328.817 43.423,328.383 43.191 C 327.952 42.960,327.600 42.418,327.600 41.986 C 327.600 41.554,327.465 41.229,327.300 41.264 C 326.712 41.388,325.609 40.710,325.826 40.357 C 325.948 40.160,325.587 39.823,325.024 39.609 C 324.461 39.395,324.000 38.935,324.000 38.586 C 324.000 38.238,323.832 38.056,323.628 38.183 C 323.423 38.309,323.142 38.230,323.004 38.007 C 322.866 37.783,322.313 37.600,321.776 37.600 C 321.193 37.600,320.800 37.368,320.800 37.024 C 320.800 36.166,320.101 35.881,317.684 35.754 C 315.985 35.665,315.370 35.450,314.900 34.779 C 314.424 34.099,314.226 34.032,313.955 34.459 C 313.766 34.757,313.609 34.803,313.606 34.561 C 313.595 33.780,308.496 34.140,307.499 34.993 C 306.726 35.656,306.003 35.809,302.947 35.958 C 302.452 35.982,302.005 36.336,301.884 36.800 C 301.736 37.366,301.314 37.615,300.437 37.650 C 299.757 37.678,299.020 37.745,298.800 37.800 C 298.580 37.855,298.029 37.923,297.576 37.950 C 297.123 37.978,296.858 38.171,296.988 38.380 C 297.305 38.894,296.051 39.437,294.693 39.372 C 294.084 39.343,293.670 39.404,293.774 39.507 C 294.199 39.932,292.772 40.795,291.240 41.040 C 290.338 41.184,289.600 41.478,289.600 41.694 C 289.600 41.909,289.305 41.972,288.943 41.834 C 288.394 41.623,288.370 41.682,288.792 42.191 C 289.225 42.712,289.132 42.801,288.149 42.805 C 286.390 42.814,285.200 43.234,285.200 43.847 C 285.200 44.341,282.808 44.698,281.400 44.414 C 281.180 44.370,281.126 44.460,281.281 44.614 C 281.981 45.314,278.170 46.883,276.724 46.491 C 276.573 46.450,276.336 46.773,276.197 47.208 C 276.012 47.791,275.590 48.000,274.596 48.000 C 273.711 48.000,273.057 48.269,272.700 48.779 C 272.334 49.301,271.607 49.591,270.501 49.656 C 269.592 49.710,268.915 49.863,268.998 49.997 C 269.081 50.130,268.781 50.469,268.332 50.749 C 267.662 51.168,267.570 51.165,267.817 50.730 C 268.059 50.304,268.012 50.298,267.579 50.700 C 267.282 50.975,266.671 51.206,266.220 51.213 C 265.255 51.228,264.000 52.094,264.000 52.744 C 264.000 52.995,263.505 53.221,262.900 53.246 C 262.295 53.272,261.620 53.334,261.400 53.385 C 261.180 53.436,260.775 53.506,260.500 53.539 C 260.225 53.573,260.000 53.870,260.000 54.200 C 260.000 54.641,259.541 54.800,258.270 54.800 C 256.941 54.800,256.321 55.032,255.600 55.800 C 254.659 56.802,248.775 57.412,249.372 56.445 C 249.612 56.058,248.560 55.039,247.846 54.967 C 247.601 54.942,247.085 54.894,246.700 54.861 C 246.287 54.825,246.000 54.472,246.000 54.000 C 246.000 53.560,245.820 53.200,245.600 53.200 C 245.380 53.200,245.200 52.919,245.200 52.576 C 245.200 52.233,245.042 52.050,244.849 52.170 C 244.655 52.289,244.393 51.864,244.265 51.226 C 244.137 50.587,243.705 49.960,243.304 49.833 C 242.864 49.693,242.541 49.164,242.490 48.501 C 242.444 47.895,242.045 47.101,241.603 46.736 C 241.161 46.371,240.800 45.769,240.800 45.398 C 240.800 45.028,240.478 44.641,240.085 44.538 C 239.682 44.433,239.336 43.931,239.291 43.386 C 239.200 42.295,238.027 40.736,237.529 41.044 C 237.348 41.156,237.192 40.922,237.182 40.524 C 237.172 40.126,236.899 39.260,236.576 38.600 C 236.253 37.940,236.079 37.724,236.189 38.121 C 236.300 38.517,236.233 38.744,236.041 38.625 C 235.848 38.506,235.572 37.777,235.427 37.004 C 235.269 36.163,234.931 35.600,234.582 35.600 C 234.262 35.600,233.978 35.420,233.950 35.200 C 233.851 34.410,233.783 34.193,233.491 33.734 C 233.328 33.478,233.421 33.185,233.698 33.083 C 233.974 32.982,233.705 32.767,233.100 32.606 C 232.074 32.333,231.850 31.813,232.030 30.120 C 232.046 29.966,231.686 29.701,231.230 29.533 C 230.747 29.354,230.400 28.871,230.400 28.375 C 230.400 27.875,230.086 27.443,229.638 27.326 C 229.153 27.199,228.782 26.632,228.620 25.768 C 228.480 25.021,228.013 24.221,227.583 23.991 C 227.152 23.760,226.800 23.218,226.800 22.786 C 226.800 22.354,226.540 22.000,226.223 22.000 C 225.859 22.000,225.704 21.701,225.802 21.189 C 225.888 20.743,225.788 20.484,225.579 20.613 C 225.371 20.742,225.200 20.297,225.200 19.624 C 225.200 18.593,225.046 18.400,224.223 18.400 C 223.461 18.400,223.280 18.224,223.400 17.600 C 223.485 17.160,223.354 16.800,223.110 16.800 C 222.866 16.800,222.776 16.691,222.909 16.557 C 223.226 16.240,222.291 15.229,221.900 15.466 C 221.735 15.565,221.600 15.097,221.600 14.424 C 221.600 13.751,221.409 13.200,221.176 13.200 C 220.943 13.200,220.888 12.975,221.053 12.700 C 221.292 12.302,221.229 12.301,220.743 12.694 C 220.260 13.085,220.121 13.085,220.073 12.694 C 219.821 10.620,219.463 9.678,218.995 9.857 C 218.696 9.972,218.350 9.672,218.187 9.158 C 218.030 8.663,217.473 7.797,216.951 7.233 C 216.428 6.670,216.000 5.902,216.000 5.528 C 216.000 5.153,215.792 4.719,215.538 4.562 C 215.234 4.374,215.177 4.468,215.373 4.838 C 215.536 5.147,215.298 4.950,214.844 4.400 C 214.389 3.850,214.014 3.235,214.009 3.033 C 214.004 2.832,213.895 2.772,213.766 2.901 C 213.343 3.324,211.238 2.348,211.007 1.623 C 210.856 1.147,210.453 0.948,209.785 1.021 C 209.237 1.082,208.534 0.876,208.223 0.565 C 207.377 -0.280,191.388 -0.266,191.063 0.581 M201.148 18.537 C 201.393 18.832,201.460 19.221,201.297 19.401 C 201.133 19.581,201.225 19.599,201.500 19.441 C 201.775 19.282,202.000 19.354,202.000 19.600 C 202.000 19.846,202.180 19.936,202.400 19.800 C 202.620 19.664,202.800 19.945,202.800 20.424 C 202.800 20.903,203.346 21.948,204.014 22.747 C 204.682 23.546,205.447 24.466,205.714 24.790 C 205.981 25.115,206.222 25.700,206.250 26.090 C 206.278 26.481,206.322 27.049,206.350 27.353 C 206.378 27.658,206.760 28.001,207.200 28.116 C 207.692 28.245,208.000 28.662,208.000 29.200 C 208.000 29.738,208.308 30.155,208.800 30.284 C 209.323 30.421,209.600 30.830,209.600 31.466 C 209.600 32.001,210.050 32.855,210.600 33.365 C 211.150 33.875,211.600 34.726,211.600 35.258 C 211.600 35.789,211.960 36.483,212.400 36.800 C 212.840 37.117,213.200 37.605,213.200 37.885 C 213.200 38.164,213.565 38.620,214.010 38.897 C 214.487 39.193,214.919 40.017,215.061 40.900 C 215.240 42.013,215.495 42.400,216.051 42.400 C 216.562 42.400,216.800 42.687,216.800 43.304 C 216.800 43.801,217.147 44.425,217.572 44.690 C 217.997 44.955,218.402 45.669,218.472 46.277 C 218.543 46.888,218.959 47.564,219.404 47.791 C 219.847 48.016,220.195 48.470,220.178 48.800 C 220.132 49.697,220.789 50.854,221.201 50.600 C 221.399 50.477,221.776 51.093,222.038 51.969 C 222.300 52.845,222.714 53.525,222.958 53.481 C 223.201 53.436,223.355 53.625,223.300 53.900 C 223.245 54.175,223.360 54.400,223.556 54.400 C 223.751 54.400,223.886 54.704,223.856 55.077 C 223.825 55.449,224.160 55.944,224.600 56.177 C 225.040 56.411,225.450 57.051,225.512 57.601 C 225.573 58.150,225.819 58.667,226.057 58.748 C 226.332 58.842,226.291 59.024,225.945 59.242 C 225.545 59.496,225.639 59.589,226.300 59.594 C 226.992 59.599,227.200 59.831,227.200 60.600 C 227.200 61.333,227.413 61.600,228.000 61.600 C 228.517 61.600,228.818 61.883,228.850 62.400 C 228.878 62.840,228.945 63.380,229.000 63.600 C 229.055 63.820,229.123 64.168,229.150 64.373 C 229.178 64.578,229.560 64.860,230.000 65.000 C 230.440 65.140,230.800 65.529,230.800 65.864 C 230.800 66.200,231.160 66.569,231.600 66.684 C 232.040 66.799,232.400 67.147,232.400 67.457 C 232.400 67.766,232.850 68.191,233.400 68.400 C 233.950 68.609,234.400 69.040,234.400 69.358 C 234.400 69.676,234.942 70.055,235.603 70.201 C 236.327 70.360,236.700 70.639,236.538 70.901 C 236.362 71.185,236.519 71.240,236.991 71.059 C 237.601 70.825,237.635 70.876,237.208 71.391 C 236.770 71.918,236.901 72.000,238.175 72.000 C 239.056 72.000,239.548 72.161,239.400 72.401 C 239.112 72.867,240.417 73.426,242.602 73.773 C 243.474 73.912,244.380 74.364,244.700 74.821 C 245.310 75.692,259.200 76.025,259.200 75.169 C 259.200 74.966,259.455 74.800,259.767 74.800 C 260.078 74.800,260.399 74.602,260.480 74.360 C 260.561 74.118,261.448 73.876,262.451 73.822 C 264.525 73.710,265.200 73.404,265.200 72.576 C 265.200 72.059,267.551 71.694,269.000 71.986 C 269.220 72.030,269.274 71.940,269.119 71.786 C 268.567 71.234,269.974 70.395,271.557 70.333 C 272.442 70.299,273.074 70.119,272.960 69.935 C 272.846 69.751,273.033 69.600,273.376 69.600 C 273.719 69.600,274.001 69.375,274.002 69.100 C 274.003 68.806,274.600 68.569,275.449 68.525 C 276.318 68.480,277.200 68.122,277.662 67.625 C 278.085 67.171,278.886 66.800,279.442 66.800 C 280.502 66.800,281.846 66.211,282.673 65.384 C 282.942 65.115,283.706 64.941,284.370 64.997 C 285.239 65.071,285.642 64.899,285.806 64.382 C 285.955 63.911,286.612 63.569,287.717 63.387 C 288.643 63.234,289.660 62.905,289.977 62.655 C 290.434 62.295,290.483 62.317,290.215 62.762 C 289.985 63.143,290.025 63.232,290.338 63.038 C 290.592 62.881,290.800 62.493,290.800 62.176 C 290.800 61.847,291.186 61.598,291.700 61.595 C 293.227 61.585,294.400 61.133,294.400 60.553 C 294.400 60.243,294.839 59.978,295.400 59.950 C 297.811 59.829,298.195 59.737,298.106 59.299 C 298.004 58.799,300.703 57.893,301.262 58.239 C 301.448 58.353,301.600 58.257,301.600 58.024 C 301.600 57.791,301.851 57.600,302.157 57.600 C 302.464 57.600,302.818 57.330,302.945 57.000 C 303.087 56.629,303.695 56.400,304.539 56.400 C 305.429 56.400,306.093 56.132,306.451 55.629 C 307.079 54.748,311.374 54.153,312.400 54.806 C 312.730 55.016,312.843 55.191,312.651 55.194 C 312.459 55.197,312.524 55.468,312.796 55.796 C 313.068 56.123,313.450 56.293,313.645 56.172 C 313.840 56.051,314.000 56.503,314.000 57.176 C 314.000 57.849,313.826 58.400,313.613 58.400 C 313.399 58.400,313.326 58.085,313.450 57.700 C 313.634 57.129,313.599 57.107,313.264 57.581 C 313.038 57.900,312.942 58.305,313.050 58.481 C 313.158 58.656,313.094 58.800,312.906 58.800 C 312.541 58.800,312.448 61.237,312.418 71.484 C 312.401 77.519,312.342 78.022,311.570 78.742 C 310.981 79.291,310.877 79.600,311.213 79.808 C 311.576 80.032,311.576 80.168,311.213 80.392 C 310.879 80.599,310.701 83.375,310.606 89.902 C 310.488 97.933,310.379 99.260,309.756 100.210 C 308.967 101.415,308.580 113.600,309.331 113.600 C 309.533 113.600,309.514 113.825,309.289 114.100 C 308.856 114.629,309.684 115.782,310.157 115.309 C 310.291 115.176,310.418 115.502,310.440 116.033 C 310.602 119.899,310.729 120.475,311.548 121.049 C 312.018 121.378,312.400 122.079,312.400 122.613 C 312.400 123.204,312.789 123.836,313.397 124.235 C 313.945 124.594,314.299 125.040,314.184 125.226 C 313.854 125.760,318.262 130.701,318.889 130.500 C 319.060 130.445,319.200 130.580,319.200 130.800 C 319.200 131.020,319.487 131.200,319.837 131.200 C 320.188 131.200,320.569 131.560,320.684 132.000 C 320.832 132.567,321.230 132.800,322.047 132.800 C 322.793 132.800,323.200 133.007,323.200 133.386 C 323.200 134.126,324.434 134.800,325.790 134.800 C 326.364 134.800,327.220 135.160,327.692 135.600 C 328.348 136.211,329.104 136.400,330.892 136.400 C 332.681 136.400,333.436 136.589,334.092 137.200 C 334.786 137.846,335.504 138.000,337.831 138.000 C 340.328 138.000,340.704 138.093,340.656 138.700 C 340.625 139.085,340.819 139.357,341.086 139.305 C 341.353 139.252,342.024 139.381,342.576 139.591 C 343.128 139.801,344.763 140.005,346.210 140.045 C 348.111 140.097,348.788 140.254,348.651 140.611 C 348.425 141.201,350.398 141.589,353.651 141.596 C 355.279 141.599,356.054 141.787,356.451 142.277 C 356.924 142.860,356.917 142.907,356.400 142.618 C 355.934 142.357,355.903 142.394,356.262 142.783 C 356.516 143.058,357.506 143.323,358.462 143.371 C 359.418 143.419,360.886 143.490,361.724 143.529 C 362.562 143.568,363.158 143.744,363.049 143.920 C 362.941 144.096,363.219 144.469,363.668 144.749 C 364.338 145.168,364.427 145.165,364.165 144.730 C 363.904 144.295,363.961 144.292,364.481 144.714 C 364.830 144.997,365.270 145.200,365.458 145.167 C 367.222 144.850,370.400 145.273,370.400 145.824 C 370.400 146.179,370.591 146.329,370.845 146.172 C 371.089 146.021,371.406 146.087,371.549 146.318 C 371.692 146.550,373.292 146.790,375.104 146.851 C 377.873 146.946,378.435 147.079,378.628 147.688 C 378.754 148.086,379.025 148.308,379.229 148.182 C 379.433 148.056,379.600 148.114,379.600 148.312 C 379.600 148.510,380.140 148.639,380.800 148.600 C 382.429 148.503,382.719 152.242,381.100 152.472 C 380.529 152.553,380.239 152.838,380.306 153.252 C 380.368 153.631,380.064 153.995,379.577 154.122 C 379.117 154.242,378.640 154.724,378.518 155.193 C 378.389 155.686,378.072 155.960,377.768 155.843 C 377.476 155.731,377.129 155.994,376.989 156.433 C 376.851 156.869,376.292 157.671,375.747 158.216 C 375.203 158.761,374.867 159.385,375.002 159.603 C 375.137 159.822,375.012 160.002,374.724 160.005 C 374.436 160.008,373.793 160.638,373.296 161.405 C 372.799 162.172,372.214 162.800,371.996 162.800 C 371.778 162.800,371.600 163.160,371.600 163.600 C 371.600 164.187,371.333 164.400,370.600 164.400 C 370.050 164.400,369.621 164.535,369.647 164.700 C 369.790 165.602,369.548 166.415,369.202 166.201 C 368.983 166.066,368.594 166.415,368.337 166.977 C 368.081 167.540,367.653 168.000,367.386 168.000 C 367.119 168.000,366.633 168.552,366.306 169.227 C 365.979 169.902,365.596 170.442,365.456 170.427 C 364.623 170.339,364.449 170.463,364.654 170.997 C 364.786 171.340,364.605 171.700,364.227 171.845 C 363.473 172.134,362.308 174.174,362.683 174.549 C 362.821 174.687,362.704 174.800,362.424 174.800 C 362.135 174.800,362.014 174.540,362.145 174.200 C 362.662 172.851,361.905 173.722,361.189 175.300 C 360.765 176.235,360.414 176.843,360.409 176.651 C 360.404 176.459,360.136 176.521,359.813 176.789 C 359.490 177.057,359.265 177.480,359.313 177.729 C 359.361 177.978,358.995 178.243,358.500 178.318 C 357.919 178.407,357.600 178.734,357.600 179.241 C 357.600 179.681,357.205 180.185,356.700 180.388 C 356.205 180.587,355.963 180.761,356.162 180.775 C 356.361 180.789,356.073 181.205,355.522 181.700 C 354.970 182.195,354.403 182.926,354.262 183.325 C 354.111 183.753,353.812 183.931,353.535 183.760 C 353.220 183.565,353.146 183.682,353.312 184.114 C 353.488 184.573,353.387 184.693,352.963 184.531 C 352.635 184.405,352.420 184.480,352.484 184.698 C 352.548 184.916,352.178 185.439,351.663 185.861 C 351.148 186.282,350.698 187.116,350.663 187.713 C 350.619 188.479,350.383 188.800,349.863 188.800 C 349.457 188.800,349.031 189.160,348.916 189.600 C 348.725 190.329,348.313 190.576,347.500 190.447 C 347.335 190.421,347.200 190.850,347.200 191.400 C 347.200 192.276,346.849 192.575,345.950 192.464 C 345.812 192.447,345.595 193.075,345.468 193.859 C 345.341 194.643,344.946 195.497,344.592 195.757 C 344.237 196.016,343.845 196.987,343.721 197.914 C 343.520 199.414,343.234 199.776,342.343 199.662 C 341.572 199.562,342.020 216.559,342.808 217.293 C 343.495 217.933,343.878 219.694,343.614 221.000 C 343.570 221.220,343.660 221.274,343.814 221.119 C 344.274 220.660,345.067 221.658,345.627 223.400 C 345.841 224.068,346.581 224.727,346.900 224.534 C 347.065 224.435,347.200 224.891,347.200 225.549 C 347.200 226.481,347.398 226.775,348.100 226.882 C 348.595 226.957,348.950 227.255,348.889 227.544 C 348.827 227.833,349.132 228.162,349.566 228.275 C 350.030 228.397,350.459 228.959,350.610 229.644 C 350.750 230.284,351.003 230.722,351.172 230.617 C 351.341 230.513,351.865 230.871,352.337 231.414 C 352.809 231.956,353.072 232.400,352.922 232.400 C 352.772 232.400,353.047 232.771,353.533 233.224 C 354.020 233.677,354.326 234.197,354.213 234.379 C 354.101 234.560,354.322 234.955,354.704 235.255 C 355.344 235.756,355.355 235.736,354.834 235.000 C 354.523 234.560,355.108 235.092,356.134 236.183 C 357.160 237.274,358.000 238.309,358.000 238.483 C 358.000 238.657,358.270 238.800,358.600 238.800 C 359.151 238.800,359.384 239.290,359.236 240.134 C 359.204 240.318,359.536 240.563,359.975 240.678 C 360.414 240.792,360.879 241.218,361.007 241.623 C 361.136 242.028,361.588 242.469,362.012 242.604 C 362.437 242.739,362.766 242.973,362.745 243.124 C 362.636 243.886,362.834 244.795,363.100 244.753 C 363.877 244.630,364.425 244.836,364.217 245.172 C 364.091 245.377,364.173 245.660,364.400 245.800 C 364.627 245.940,364.722 246.202,364.611 246.382 C 364.500 246.562,364.765 246.802,365.200 246.916 C 365.635 247.030,366.159 247.565,366.365 248.107 C 366.570 248.648,367.023 249.200,367.369 249.333 C 367.716 249.466,368.000 249.881,368.000 250.254 C 368.000 250.628,368.105 250.828,368.234 250.700 C 368.561 250.373,370.000 251.668,370.000 252.289 C 370.000 252.570,370.360 252.800,370.800 252.800 C 371.345 252.800,371.600 253.067,371.600 253.637 C 371.600 254.138,371.921 254.559,372.400 254.684 C 372.928 254.822,373.200 255.230,373.200 255.884 C 373.200 256.547,373.472 256.946,374.020 257.089 C 374.518 257.220,374.929 257.747,375.066 258.430 C 375.206 259.130,375.583 259.602,376.061 259.678 C 376.485 259.745,376.780 259.920,376.716 260.068 C 376.652 260.215,377.095 260.760,377.700 261.280 C 378.305 261.800,378.800 262.445,378.800 262.713 C 378.800 262.981,379.087 263.200,379.437 263.200 C 379.788 263.200,380.165 263.543,380.274 263.963 C 380.384 264.383,380.817 264.816,381.237 264.926 C 381.848 265.085,382.000 265.491,382.000 266.963 L 382.000 268.800 380.500 268.847 C 379.675 268.873,378.865 268.873,378.700 268.847 C 378.535 268.821,378.400 268.991,378.400 269.224 C 378.400 269.457,378.231 269.543,378.025 269.415 C 377.818 269.288,377.502 269.446,377.322 269.767 C 377.108 270.150,376.238 270.381,374.798 270.436 C 373.589 270.483,372.375 270.696,372.100 270.909 C 371.825 271.123,371.600 271.158,371.600 270.987 C 371.600 270.816,371.235 271.006,370.790 271.409 C 370.178 271.963,369.260 272.159,367.048 272.211 C 364.084 272.281,363.012 272.572,363.400 273.200 C 363.765 273.791,363.034 273.964,359.875 274.038 C 358.195 274.077,356.916 274.264,357.033 274.454 C 357.151 274.644,356.982 274.800,356.657 274.800 C 356.332 274.800,356.007 274.973,355.933 275.185 C 355.860 275.396,354.495 275.601,352.900 275.641 C 351.090 275.685,349.998 275.879,349.994 276.156 C 349.991 276.400,349.813 276.330,349.600 276.000 C 349.342 275.600,349.210 275.567,349.206 275.900 C 349.203 276.175,348.975 276.355,348.700 276.300 C 348.425 276.245,348.235 276.395,348.278 276.633 C 348.366 277.124,348.263 277.145,345.101 277.293 C 343.836 277.352,342.801 277.518,342.801 277.663 C 342.800 277.807,342.412 277.824,341.937 277.700 C 341.346 277.545,341.165 277.620,341.361 277.937 C 341.518 278.192,341.446 278.400,341.200 278.400 C 340.954 278.400,340.864 278.580,341.000 278.800 C 341.197 279.119,335.902 279.480,334.324 279.255 C 334.173 279.234,333.936 279.573,333.797 280.008 C 333.595 280.646,333.163 280.810,331.573 280.850 C 328.257 280.934,328.051 280.977,327.517 281.699 C 327.233 282.084,326.460 282.438,325.800 282.486 C 324.369 282.590,322.703 283.370,322.877 283.855 C 322.944 284.045,322.523 284.255,321.941 284.323 C 321.273 284.400,320.802 284.747,320.668 285.263 C 320.550 285.713,320.262 285.962,320.027 285.817 C 319.792 285.672,319.600 285.754,319.600 286.000 C 319.600 286.246,319.389 286.317,319.132 286.158 C 318.821 285.966,318.746 286.083,318.909 286.507 C 319.089 286.975,318.953 287.107,318.400 287.000 C 317.878 286.900,317.714 287.031,317.866 287.427 C 317.993 287.759,317.846 288.000,317.515 288.000 C 317.016 288.000,314.893 290.035,315.116 290.300 C 315.395 290.631,315.131 291.204,314.795 290.997 C 314.571 290.859,314.284 291.279,314.152 291.938 C 314.012 292.640,313.603 293.210,313.157 293.327 C 312.665 293.456,312.400 293.881,312.400 294.540 C 312.400 295.098,312.049 295.801,311.620 296.101 C 311.046 296.503,310.766 297.332,310.565 299.224 C 310.386 300.899,310.064 301.959,309.643 302.254 C 309.087 302.644,309.005 303.630,309.058 309.254 C 309.136 317.448,309.125 317.293,309.572 317.017 C 310.322 316.554,310.460 317.789,310.631 326.508 C 310.850 337.618,310.870 338.004,311.221 337.787 C 312.098 337.245,312.348 339.264,312.469 347.843 C 312.571 354.994,312.726 357.230,313.157 357.748 C 313.647 358.339,313.628 358.385,312.991 358.141 C 312.433 357.927,312.351 357.993,312.628 358.432 C 312.826 358.744,312.991 359.120,312.994 359.267 C 312.997 359.413,313.164 359.683,313.364 359.867 C 313.580 360.064,313.595 359.971,313.402 359.638 C 313.183 359.260,313.228 359.170,313.538 359.362 C 314.117 359.720,314.148 361.200,313.576 361.200 C 313.343 361.200,313.251 361.359,313.371 361.553 C 313.655 362.012,311.159 363.222,310.618 362.888 C 310.391 362.747,309.401 362.623,308.419 362.612 C 306.981 362.596,306.592 362.436,306.417 361.789 C 306.290 361.319,305.869 360.992,305.400 360.999 C 303.939 361.021,302.265 360.332,302.861 359.954 C 303.158 359.766,303.310 359.603,303.200 359.591 C 299.811 359.231,297.844 358.577,298.237 357.940 C 298.353 357.753,297.942 357.573,297.324 357.539 C 296.706 357.506,296.020 357.436,295.800 357.385 C 295.580 357.334,295.164 357.272,294.876 357.246 C 294.588 357.221,294.435 357.065,294.534 356.900 C 294.849 356.380,293.853 355.798,292.410 355.657 C 291.618 355.579,290.791 355.194,290.487 354.760 C 290.086 354.188,289.467 354.000,287.977 354.000 C 286.522 354.000,286.000 353.848,286.000 353.424 C 286.000 352.656,285.411 352.333,283.710 352.168 C 282.922 352.092,282.072 351.710,281.788 351.304 C 281.506 350.902,280.690 350.531,279.966 350.476 C 279.244 350.421,278.434 350.194,278.165 349.971 C 277.828 349.691,277.614 349.725,277.470 350.083 C 277.356 350.367,277.249 350.225,277.232 349.766 C 277.205 349.068,276.924 348.920,275.520 348.865 C 273.968 348.805,272.233 348.009,273.620 347.994 C 274.859 347.981,273.048 347.254,271.113 346.988 C 269.917 346.824,269.049 346.466,268.824 346.045 C 268.600 345.627,267.881 345.329,266.943 345.265 C 265.451 345.165,264.645 344.575,265.067 343.892 C 265.184 343.702,265.037 343.580,264.740 343.621 C 263.301 343.818,259.858 343.551,260.292 343.276 C 261.964 342.213,259.310 341.696,252.101 341.680 L 244.899 341.665 244.458 342.632 C 244.056 343.515,242.137 343.951,239.938 343.660 C 239.794 343.641,239.571 343.899,239.443 344.233 C 239.287 344.638,239.375 344.748,239.705 344.562 C 240.086 344.347,240.092 344.399,239.730 344.791 C 239.471 345.071,238.804 345.300,238.247 345.300 C 237.689 345.300,237.271 345.480,237.317 345.700 C 237.362 345.920,237.150 346.191,236.844 346.302 C 236.472 346.437,236.393 346.335,236.606 345.990 C 236.816 345.651,236.765 345.575,236.455 345.766 C 236.198 345.925,236.091 346.223,236.218 346.428 C 236.344 346.634,236.012 346.967,235.479 347.170 C 234.945 347.373,234.400 347.823,234.267 348.169 C 234.134 348.516,233.659 348.800,233.213 348.800 C 232.676 348.800,232.400 349.063,232.400 349.573 C 232.400 349.998,232.040 350.460,231.600 350.600 C 230.879 350.829,230.744 351.046,230.825 351.851 C 230.839 351.988,230.434 352.308,229.926 352.562 C 229.418 352.815,228.984 353.288,228.962 353.611 C 228.940 353.935,228.894 354.494,228.861 354.853 C 228.827 355.213,228.440 355.601,228.000 355.716 C 227.444 355.861,227.200 356.262,227.200 357.029 C 227.200 357.636,227.082 358.015,226.937 357.870 C 226.575 357.508,225.556 358.405,225.828 358.845 C 225.949 359.040,225.857 359.200,225.624 359.200 C 225.391 359.200,225.221 359.335,225.247 359.500 C 225.414 360.558,225.125 361.222,224.541 361.118 C 224.103 361.039,223.856 361.305,223.807 361.907 C 223.766 362.407,223.423 363.041,223.044 363.318 C 222.417 363.777,222.113 364.550,222.031 365.900 C 222.014 366.175,221.798 366.355,221.550 366.300 C 221.303 366.245,220.840 366.957,220.523 367.882 C 220.189 368.855,219.620 369.667,219.173 369.809 C 218.684 369.964,218.400 370.417,218.400 371.040 C 218.400 371.697,218.100 372.137,217.500 372.359 C 217.005 372.542,216.645 372.806,216.700 372.946 C 217.029 373.783,216.689 374.781,216.000 375.000 C 215.498 375.159,215.200 375.605,215.200 376.198 C 215.200 377.113,214.277 378.400,213.621 378.400 C 213.445 378.400,213.192 378.940,213.060 379.600 C 212.902 380.389,212.577 380.802,212.110 380.806 C 211.505 380.811,211.489 380.870,212.000 381.200 C 212.400 381.458,212.433 381.590,212.100 381.594 C 211.825 381.597,211.600 382.030,211.600 382.557 C 211.600 383.243,211.318 383.584,210.602 383.764 C 210.054 383.901,209.625 384.146,209.650 384.307 C 209.862 385.689,209.522 386.800,208.887 386.800 C 208.401 386.800,208.146 387.144,208.085 387.882 C 207.993 388.989,207.200 390.221,207.200 389.256 C 207.200 388.979,207.037 388.854,206.838 388.977 C 206.638 389.100,206.577 389.589,206.701 390.063 C 206.854 390.649,206.779 390.834,206.468 390.642 C 206.175 390.461,206.091 390.573,206.236 390.949 C 206.374 391.309,206.060 391.805,205.431 392.216 C 204.800 392.630,204.400 393.262,204.400 393.846 C 204.400 394.371,204.175 394.803,203.900 394.806 C 203.526 394.811,203.534 394.897,203.934 395.151 C 204.340 395.408,204.268 395.541,203.634 395.707 C 203.175 395.827,202.800 396.203,202.800 396.542 C 202.800 398.358,198.724 400.236,198.550 398.500 C 198.448 397.477,198.379 397.414,198.006 398.000 C 197.707 398.469,197.564 398.304,197.351 397.247 C 197.184 396.416,196.793 395.819,196.339 395.700 C 195.881 395.580,195.600 395.144,195.600 394.553 C 195.600 394.029,195.266 393.266,194.858 392.858 C 194.450 392.450,193.995 391.634,193.847 391.045 C 193.699 390.455,193.223 389.669,192.789 389.298 C 192.355 388.926,192.000 388.466,192.000 388.275 C 192.000 388.084,191.640 387.629,191.200 387.264 C 190.759 386.899,190.339 386.014,190.265 385.298 C 190.135 384.046,189.600 382.959,189.600 383.949 C 189.600 384.310,189.458 384.301,189.038 383.916 C 188.729 383.632,188.481 383.310,188.486 383.200 C 188.528 382.257,188.352 381.514,188.137 381.730 C 187.635 382.231,186.800 381.097,186.800 379.914 C 186.800 379.062,186.574 378.666,186.000 378.516 C 185.516 378.389,185.200 377.970,185.200 377.453 C 185.199 376.984,184.753 376.082,184.208 375.448 C 183.663 374.814,183.314 374.139,183.432 373.948 C 183.550 373.757,183.446 373.600,183.200 373.600 C 182.954 373.600,182.864 373.420,183.000 373.200 C 183.136 372.980,182.877 372.800,182.424 372.800 C 181.646 372.800,181.372 372.077,181.563 370.530 C 181.595 370.272,181.256 369.945,180.811 369.803 C 180.365 369.662,180.000 369.288,180.000 368.973 C 180.000 368.005,179.946 367.817,179.521 367.304 C 179.294 367.032,178.922 366.925,178.693 367.066 C 178.451 367.216,178.396 367.130,178.562 366.862 C 178.719 366.608,178.657 366.400,178.424 366.400 C 178.191 366.400,178.000 365.950,178.000 365.400 C 178.000 364.667,177.787 364.400,177.200 364.400 C 176.424 364.400,176.284 364.012,176.294 361.894 C 176.295 361.476,176.043 361.232,175.675 361.294 C 175.302 361.358,174.959 361.015,174.817 360.437 C 174.688 359.907,174.226 359.335,173.791 359.165 C 173.260 358.958,173.197 358.843,173.600 358.815 C 174.081 358.783,174.056 358.666,173.474 358.224 C 173.075 357.921,172.781 357.432,172.821 357.137 C 172.947 356.219,172.813 355.598,172.500 355.647 C 171.616 355.787,171.200 355.516,171.200 354.800 C 171.200 354.360,171.026 354.000,170.813 354.000 C 170.599 354.000,170.529 353.730,170.655 353.400 C 170.801 353.020,170.650 352.800,170.243 352.800 C 169.675 352.800,169.431 352.362,169.540 351.538 C 169.559 351.394,169.265 351.034,168.887 350.738 C 168.254 350.242,168.246 350.263,168.793 351.000 C 169.379 351.790,169.375 351.791,168.503 351.047 C 168.017 350.632,167.711 350.145,167.823 349.964 C 167.935 349.782,167.502 349.363,166.862 349.032 C 166.221 348.701,165.591 348.153,165.461 347.815 C 165.331 347.477,164.829 347.200,164.346 347.200 C 163.862 347.200,163.587 347.080,163.734 346.932 C 164.237 346.430,162.678 345.200,161.538 345.200 C 160.912 345.200,160.421 345.065,160.447 344.900 C 160.624 343.782,160.391 343.509,159.723 344.051 C 159.320 344.378,159.162 344.407,159.334 344.121 C 159.539 343.779,159.020 343.608,157.510 343.521 C 156.350 343.455,155.421 343.220,155.446 343.000 C 155.614 341.552,143.247 340.953,140.124 342.257 C 138.840 342.794,138.193 343.408,139.400 342.945 C 139.730 342.818,140.000 342.880,140.000 343.082 C 140.000 343.285,139.145 343.491,138.100 343.540 C 135.540 343.660,134.697 343.955,134.959 344.636 C 135.150 345.135,132.680 345.517,131.070 345.237 C 130.889 345.206,130.838 345.338,130.957 345.530 C 131.218 345.953,129.807 346.717,128.307 346.964 C 126.942 347.189,126.326 347.556,126.591 347.986 C 126.858 348.418,125.826 348.800,124.391 348.800 C 123.762 348.800,123.134 348.983,122.996 349.207 C 122.858 349.430,122.532 349.486,122.272 349.330 C 121.938 349.129,121.944 349.225,122.294 349.657 C 122.685 350.140,122.685 350.271,122.294 350.289 C 120.119 350.387,118.450 350.584,118.592 350.725 C 119.002 351.135,117.437 352.110,116.082 352.288 C 115.267 352.396,114.552 352.600,114.493 352.742 C 114.100 353.697,113.536 353.965,111.594 354.120 C 110.088 354.241,109.400 354.468,109.400 354.844 C 109.400 355.183,108.673 355.525,107.500 355.739 C 106.310 355.957,105.600 356.294,105.600 356.643 C 105.600 356.949,105.465 357.214,105.300 357.231 C 105.135 357.247,104.640 357.336,104.200 357.427 C 103.760 357.518,103.008 357.632,102.529 357.681 C 102.050 357.730,101.733 357.891,101.824 358.040 C 102.112 358.505,101.057 359.037,99.600 359.161 C 98.830 359.227,98.068 359.487,97.906 359.740 C 97.705 360.054,97.602 360.010,97.581 359.600 C 97.563 359.252,97.397 359.378,97.188 359.900 C 96.924 360.556,96.497 360.800,95.613 360.800 C 94.944 360.800,94.050 361.150,93.620 361.580 C 93.140 362.060,92.035 362.452,90.751 362.599 C 89.602 362.730,88.520 362.926,88.346 363.034 C 88.172 363.141,87.674 362.874,87.240 362.440 C 86.704 361.904,86.388 361.803,86.257 362.125 C 86.150 362.386,86.049 361.301,86.032 359.713 C 86.004 357.177,86.081 356.856,86.666 357.081 C 87.113 357.252,87.236 357.183,87.042 356.868 C 86.883 356.611,86.923 356.400,87.130 356.400 C 87.338 356.400,87.480 355.590,87.447 354.600 C 87.413 353.610,87.479 352.800,87.593 352.800 C 87.707 352.799,87.800 349.244,87.800 344.900 C 87.800 337.262,87.833 336.941,88.781 335.226 C 89.321 334.251,89.546 333.586,89.281 333.750 C 89.017 333.913,88.800 333.857,88.800 333.624 C 88.800 333.391,88.947 333.200,89.127 333.200 C 89.307 333.200,89.500 329.115,89.556 324.122 C 89.647 315.966,89.730 314.981,90.374 314.422 C 90.910 313.958,91.005 313.567,90.751 312.880 C 90.542 312.313,90.557 312.050,90.790 312.194 C 91.021 312.337,91.142 310.859,91.101 308.414 C 91.063 306.206,90.890 304.400,90.716 304.400 C 90.542 304.400,90.421 304.265,90.447 304.100 C 90.580 303.263,90.361 302.377,90.067 302.559 C 89.883 302.672,89.724 302.548,89.712 302.282 C 89.541 298.358,89.411 297.270,89.132 297.442 C 88.950 297.555,88.800 297.457,88.800 297.224 C 88.800 296.991,88.566 296.800,88.281 296.800 C 87.989 296.800,87.748 296.319,87.730 295.700 C 87.662 293.384,87.594 293.200,86.800 293.200 C 86.267 293.200,86.000 292.933,86.000 292.400 C 86.000 291.960,85.820 291.600,85.600 291.600 C 85.380 291.600,85.197 291.195,85.194 290.700 C 85.189 290.054,85.092 289.951,84.849 290.334 C 84.594 290.736,84.455 290.653,84.282 289.994 C 84.128 289.402,83.883 289.222,83.527 289.437 C 83.093 289.697,83.092 289.640,83.519 289.112 C 83.920 288.618,83.929 288.403,83.558 288.174 C 83.253 287.985,83.181 288.045,83.362 288.338 C 83.519 288.592,83.467 288.800,83.246 288.800 C 82.703 288.800,81.582 287.153,81.840 286.735 C 81.954 286.551,81.857 286.400,81.624 286.400 C 81.391 286.400,81.195 286.625,81.188 286.900 C 81.181 287.177,80.994 287.088,80.768 286.700 C 80.544 286.315,80.111 286.000,79.807 286.000 C 79.503 286.000,79.140 285.640,79.000 285.200 C 78.819 284.630,78.395 284.400,77.524 284.400 C 76.517 284.400,76.385 284.301,76.770 283.836 C 77.065 283.480,77.094 283.181,76.847 283.029 C 76.632 282.896,76.330 282.989,76.178 283.236 C 75.978 283.559,75.812 283.543,75.587 283.179 C 75.298 282.712,74.551 282.520,72.682 282.433 C 72.236 282.413,72.009 282.142,72.082 281.719 C 72.201 281.030,71.843 280.957,67.747 280.837 C 66.803 280.809,66.432 280.577,66.247 279.900 C 66.041 279.149,65.935 279.099,65.606 279.600 C 65.343 280.001,65.210 280.034,65.206 279.700 C 65.202 279.351,64.402 279.200,62.562 279.200 C 60.520 279.200,59.656 279.009,58.740 278.357 C 57.905 277.763,56.806 277.477,55.008 277.387 C 52.590 277.266,50.801 276.713,50.799 276.086 C 50.799 275.929,49.320 275.747,47.512 275.682 C 44.950 275.590,44.076 275.403,43.546 274.834 C 43.032 274.283,42.213 274.090,40.187 274.046 C 37.834 273.995,35.008 273.284,36.800 273.194 C 38.642 273.101,34.587 272.143,32.500 272.177 C 30.783 272.206,30.000 272.067,30.000 271.733 C 30.000 270.947,29.439 270.794,25.724 270.569 C 21.558 270.316,21.145 270.210,21.430 269.465 C 21.568 269.106,21.383 268.902,20.924 268.905 C 19.007 268.917,18.356 268.752,18.143 268.197 C 17.813 267.336,18.366 264.732,18.820 265.012 C 19.029 265.142,19.200 265.046,19.200 264.800 C 19.200 264.554,19.380 264.464,19.600 264.600 C 19.820 264.736,20.000 264.511,20.000 264.100 C 20.000 263.689,20.716 262.733,21.591 261.976 C 22.466 261.219,23.186 260.449,23.191 260.264 C 23.196 260.079,23.695 259.404,24.300 258.763 C 24.905 258.122,25.400 257.373,25.400 257.099 C 25.400 256.824,25.670 256.600,26.000 256.600 C 26.330 256.600,26.656 256.204,26.725 255.719 C 26.794 255.234,27.156 254.741,27.529 254.623 C 27.902 254.504,28.386 254.001,28.604 253.504 C 28.822 253.007,29.270 252.600,29.600 252.600 C 29.930 252.600,30.200 252.335,30.200 252.012 C 30.200 251.688,30.560 251.234,31.000 251.001 C 31.440 250.769,31.859 250.313,31.930 249.989 C 32.002 249.665,32.231 249.338,32.441 249.263 C 32.650 249.188,33.266 248.471,33.811 247.670 C 34.355 246.869,34.800 246.466,34.800 246.774 C 34.800 247.358,35.363 247.006,35.450 246.367 C 35.477 246.165,35.523 245.820,35.550 245.600 C 35.578 245.380,35.818 245.245,36.085 245.300 C 36.351 245.355,36.743 244.725,36.955 243.900 C 37.269 242.682,37.525 242.400,38.317 242.400 C 39.083 242.400,39.250 242.234,39.092 241.632 C 38.945 241.070,39.147 240.800,39.846 240.624 C 40.481 240.465,40.800 240.097,40.800 239.526 C 40.800 239.053,40.905 238.772,41.033 238.900 C 41.394 239.261,42.684 237.862,42.494 237.316 C 42.388 237.009,42.633 236.891,43.163 236.993 C 43.780 237.112,44.000 236.950,44.000 236.377 C 44.000 235.950,44.191 235.600,44.424 235.600 C 44.657 235.600,44.719 235.392,44.562 235.138 C 44.405 234.884,44.448 234.782,44.657 234.912 C 44.867 235.041,45.300 234.982,45.619 234.780 C 46.122 234.462,46.122 234.411,45.624 234.406 C 45.210 234.402,45.267 234.234,45.824 233.813 C 46.251 233.490,46.458 233.220,46.284 233.213 C 46.111 233.206,46.201 232.949,46.484 232.642 C 46.768 232.335,47.135 232.166,47.301 232.266 C 47.466 232.366,47.767 232.012,47.970 231.479 C 48.173 230.945,48.634 230.396,48.995 230.257 C 49.356 230.119,49.547 229.838,49.420 229.633 C 49.294 229.428,50.460 227.967,52.013 226.387 C 53.993 224.371,54.800 223.263,54.718 222.674 C 54.645 222.154,54.907 221.675,55.406 221.417 C 55.970 221.125,56.246 220.522,56.328 219.400 C 56.503 217.013,56.805 216.165,57.238 216.847 C 57.430 217.151,57.604 217.220,57.624 217.000 C 57.645 216.780,57.754 216.240,57.867 215.800 C 58.813 212.129,57.987 199.600,56.799 199.600 C 56.579 199.600,56.400 199.075,56.400 198.433 C 56.400 196.862,56.031 196.000,55.357 196.000 C 55.040 196.000,54.800 195.598,54.800 195.067 C 54.800 194.553,54.665 193.998,54.500 193.833 C 54.335 193.668,54.178 193.368,54.150 193.167 C 54.028 192.275,53.966 192.234,53.600 192.800 C 53.286 193.285,53.211 193.228,53.206 192.500 C 53.203 192.005,53.009 191.600,52.776 191.600 C 52.543 191.600,52.464 191.420,52.600 191.200 C 52.736 190.980,52.639 190.800,52.384 190.800 C 51.797 190.800,50.141 189.034,48.598 186.762 C 47.940 185.793,47.222 184.868,47.001 184.706 C 46.735 184.511,46.734 184.408,47.000 184.400 C 47.220 184.394,46.950 184.161,46.400 183.882 C 45.850 183.604,45.400 183.191,45.400 182.964 C 45.400 182.737,44.730 181.963,43.911 181.244 C 43.092 180.524,42.438 179.815,42.458 179.668 C 42.578 178.791,42.315 178.379,41.700 178.482 C 41.233 178.561,40.958 178.301,40.872 177.700 C 40.793 177.143,40.467 176.800,40.016 176.800 C 39.572 176.800,39.189 176.409,39.036 175.800 C 38.874 175.154,38.504 174.800,37.992 174.800 C 37.478 174.800,37.200 174.531,37.200 174.033 C 37.200 172.516,36.771 171.927,36.078 172.490 C 35.547 172.921,35.489 172.895,35.705 172.319 C 35.878 171.857,35.580 171.318,34.780 170.645 C 34.131 170.099,33.600 169.536,33.600 169.394 C 33.600 169.253,32.867 168.412,31.972 167.525 C 31.076 166.639,30.319 165.585,30.289 165.184 C 30.259 164.783,30.136 164.464,30.017 164.475 C 28.894 164.577,28.343 164.326,28.543 163.804 C 28.696 163.404,28.447 163.127,27.786 162.961 C 27.091 162.786,26.800 162.438,26.800 161.780 C 26.800 161.267,26.620 160.736,26.400 160.600 C 26.180 160.464,26.000 160.554,26.000 160.800 C 26.000 161.046,25.808 161.128,25.573 160.983 C 25.338 160.838,25.240 160.472,25.356 160.171 C 25.471 159.870,25.304 159.361,24.983 159.040 C 24.662 158.719,24.400 158.264,24.400 158.029 C 24.400 157.793,24.228 157.600,24.018 157.600 C 23.532 157.600,21.749 155.827,21.195 154.791 C 20.962 154.356,20.508 154.000,20.186 154.000 C 19.864 154.000,19.600 153.640,19.600 153.200 C 19.600 152.694,19.333 152.400,18.873 152.400 C 18.294 152.400,18.153 152.095,18.179 150.900 C 18.217 149.104,18.637 148.339,19.535 148.427 C 19.901 148.463,20.335 148.449,20.500 148.396 C 20.665 148.343,20.935 148.275,21.100 148.244 C 21.950 148.085,22.470 147.490,22.008 147.205 C 21.746 147.043,22.919 146.878,24.615 146.839 C 28.418 146.751,28.393 146.756,29.360 145.900 C 29.795 145.515,30.792 145.185,31.575 145.166 C 35.265 145.077,37.377 144.610,36.982 143.971 C 36.716 143.540,36.669 143.549,39.800 143.407 C 43.022 143.262,44.502 142.842,44.236 142.151 C 44.068 141.712,44.662 141.600,47.159 141.600 C 49.640 141.600,50.495 141.441,51.266 140.834 C 51.907 140.330,53.189 139.982,55.020 139.817 C 56.549 139.679,58.050 139.544,58.355 139.516 C 58.660 139.489,58.993 139.150,59.094 138.763 C 59.245 138.185,59.865 138.023,62.539 137.859 C 66.723 137.604,66.874 137.570,66.630 136.933 C 66.472 136.523,67.017 136.400,68.993 136.400 C 71.016 136.400,71.647 136.252,71.968 135.700 C 72.220 135.268,72.380 135.200,72.388 135.524 C 72.395 135.812,72.583 135.934,72.807 135.796 C 73.030 135.658,73.109 135.377,72.983 135.172 C 72.856 134.968,73.303 134.800,73.976 134.800 C 74.649 134.800,75.200 134.620,75.200 134.400 C 75.200 134.180,75.560 134.000,76.000 134.000 C 76.440 134.000,76.755 133.775,76.700 133.500 C 76.640 133.201,77.122 132.950,77.900 132.875 C 78.876 132.781,79.200 132.556,79.200 131.975 C 79.200 131.410,79.478 131.200,80.224 131.200 C 80.804 131.200,81.140 131.027,81.000 130.800 C 80.863 130.579,81.151 130.400,81.643 130.400 C 82.133 130.400,82.423 130.290,82.289 130.156 C 82.154 130.021,82.574 129.465,83.222 128.920 C 83.870 128.375,84.400 127.606,84.400 127.211 C 84.400 126.816,84.760 126.399,85.200 126.284 C 85.659 126.164,86.000 125.738,86.000 125.286 C 86.000 124.852,86.379 124.246,86.841 123.939 C 87.357 123.596,87.726 122.869,87.795 122.056 C 87.857 121.328,88.135 120.522,88.413 120.266 C 88.805 119.904,88.846 119.925,88.597 120.362 C 88.386 120.731,88.430 120.829,88.723 120.648 C 89.213 120.345,89.516 118.865,89.718 115.800 C 89.802 114.521,90.021 113.836,90.325 113.900 C 90.904 114.022,90.898 114.069,91.000 108.487 C 91.045 106.005,90.929 103.880,90.741 103.764 C 90.554 103.648,90.400 103.218,90.400 102.810 C 90.400 102.401,90.232 102.007,90.027 101.933 C 89.817 101.858,89.589 97.702,89.505 92.400 C 89.389 85.072,89.244 83.024,88.848 83.110 C 88.569 83.170,88.459 83.027,88.605 82.792 C 88.750 82.557,88.663 82.116,88.411 81.813 C 88.111 81.452,87.916 78.646,87.846 73.706 C 87.788 69.550,87.608 65.937,87.447 65.675 C 87.285 65.414,87.347 65.200,87.584 65.200 C 87.830 65.200,87.920 64.813,87.794 64.300 C 87.673 63.805,87.535 62.813,87.487 62.096 C 87.430 61.243,87.151 60.713,86.680 60.563 C 86.067 60.368,85.972 59.922,86.040 57.580 C 86.084 56.066,86.281 54.927,86.478 55.048 C 86.674 55.170,87.079 55.066,87.377 54.819 C 88.156 54.173,93.200 54.724,93.200 55.455 C 93.200 55.755,93.335 56.012,93.500 56.027 C 95.540 56.211,96.512 56.542,97.387 57.353 C 97.989 57.911,98.734 58.238,99.154 58.128 C 99.554 58.023,100.156 58.213,100.493 58.550 C 100.829 58.886,101.208 59.059,101.333 58.933 C 101.459 58.808,101.853 58.996,102.210 59.352 C 102.583 59.726,103.512 60.000,104.406 60.000 C 105.665 60.000,105.929 60.131,105.820 60.700 C 105.712 61.262,105.992 61.412,107.246 61.462 C 108.278 61.503,109.137 61.840,109.779 62.459 C 110.314 62.973,110.987 63.413,111.275 63.436 C 111.564 63.459,112.396 63.506,113.124 63.539 C 113.852 63.573,114.342 63.771,114.212 63.980 C 113.919 64.455,115.261 65.200,116.411 65.200 C 116.885 65.200,117.731 65.560,118.291 66.000 C 118.850 66.440,119.892 66.800,120.605 66.800 C 121.851 66.800,123.054 67.613,122.551 68.115 C 122.418 68.248,122.645 68.343,123.055 68.326 C 124.918 68.250,127.612 69.455,126.983 70.084 C 126.884 70.183,127.118 70.262,127.502 70.260 C 129.865 70.251,130.432 70.420,130.318 71.100 C 130.192 71.846,130.319 71.882,133.324 71.954 C 134.382 71.979,135.149 72.160,135.028 72.355 C 134.714 72.863,135.639 73.524,137.016 73.775 C 139.806 74.285,140.177 74.416,140.509 75.009 C 141.148 76.152,154.312 75.812,155.413 74.624 C 155.990 74.001,156.648 73.743,157.525 73.796 C 158.226 73.837,158.800 73.710,158.800 73.512 C 158.800 73.314,158.968 73.256,159.172 73.383 C 159.377 73.509,159.660 73.427,159.800 73.200 C 159.940 72.973,160.268 72.914,160.528 73.070 C 160.797 73.232,160.764 73.062,160.451 72.677 C 159.955 72.065,160.039 72.000,161.327 72.000 C 162.111 72.000,162.864 71.820,163.000 71.600 C 163.136 71.380,163.012 71.197,162.724 71.194 C 162.332 71.189,162.347 71.095,162.781 70.820 C 163.100 70.618,163.493 70.534,163.653 70.633 C 163.814 70.732,164.060 70.627,164.200 70.400 C 164.340 70.173,164.651 70.108,164.889 70.255 C 165.128 70.403,165.234 70.361,165.125 70.162 C 164.937 69.819,166.160 68.384,166.614 68.414 C 166.892 68.433,168.003 67.322,168.114 66.914 C 168.161 66.741,168.425 66.625,168.700 66.656 C 168.975 66.686,169.200 66.393,169.200 66.005 C 169.200 65.184,170.141 64.274,170.558 64.691 C 170.714 64.848,170.730 64.684,170.594 64.328 C 170.457 63.972,170.538 63.562,170.773 63.417 C 171.008 63.272,171.200 62.803,171.200 62.376 C 171.200 61.949,171.462 61.600,171.781 61.600 C 172.101 61.600,172.661 60.972,173.025 60.204 C 173.390 59.435,173.848 58.906,174.044 59.027 C 174.240 59.148,174.400 58.787,174.400 58.224 C 174.400 57.661,174.779 56.821,175.241 56.359 C 176.011 55.589,176.286 54.957,176.369 53.764 C 176.386 53.525,176.860 53.119,177.423 52.863 C 177.985 52.606,178.344 52.234,178.221 52.034 C 177.849 51.431,178.465 50.339,179.052 50.564 C 179.405 50.700,179.600 50.486,179.600 49.961 C 179.600 48.809,180.324 47.600,181.014 47.600 C 181.336 47.600,181.600 47.409,181.600 47.176 C 181.600 46.943,181.375 46.880,181.100 47.035 C 180.700 47.261,180.700 47.210,181.100 46.779 C 181.375 46.482,181.600 45.838,181.600 45.347 C 181.600 44.805,181.915 44.354,182.400 44.200 C 182.840 44.060,183.200 43.638,183.200 43.262 C 183.200 42.627,184.566 41.100,184.866 41.399 C 184.940 41.473,185.027 41.083,185.060 40.534 C 185.093 39.984,185.498 39.182,185.960 38.752 C 186.422 38.321,186.800 37.520,186.800 36.972 C 186.800 36.303,187.096 35.865,187.698 35.642 C 188.192 35.459,188.597 34.976,188.598 34.568 C 188.599 34.160,189.050 33.598,189.600 33.319 C 190.196 33.017,190.358 32.797,190.000 32.774 C 189.588 32.749,189.557 32.674,189.900 32.535 C 190.175 32.424,190.400 31.898,190.400 31.367 C 190.400 30.667,190.621 30.400,191.200 30.400 C 191.826 30.400,192.000 30.133,192.000 29.176 C 192.000 28.353,192.151 28.046,192.462 28.238 C 192.759 28.422,192.815 28.347,192.618 28.030 C 192.433 27.729,192.647 27.302,193.167 26.938 C 193.637 26.609,193.973 26.128,193.913 25.870 C 193.854 25.611,193.968 25.371,194.167 25.336 C 194.808 25.222,195.456 23.870,195.550 22.447 C 195.578 22.032,195.960 21.599,196.400 21.484 C 196.861 21.363,197.200 20.938,197.200 20.480 C 197.200 20.043,197.481 19.578,197.825 19.446 C 198.169 19.314,198.347 19.038,198.220 18.833 C 197.995 18.468,198.761 18.138,200.051 18.046 C 200.409 18.021,200.903 18.242,201.148 18.537 " stroke="none" fill="#9aaac1" fill-rule="evenodd"></path><path id="path11" d="M139.796 130.007 C 139.658 130.230,139.349 130.292,139.111 130.145 C 138.867 129.994,138.790 130.061,138.936 130.296 C 139.231 130.773,138.353 131.199,137.067 131.202 C 135.447 131.206,133.200 132.029,133.200 132.619 C 133.200 133.152,132.212 133.406,130.860 133.221 C 130.563 133.180,130.426 133.319,130.556 133.529 C 130.748 133.840,128.369 135.328,127.591 135.385 C 127.475 135.393,126.947 135.805,126.415 136.300 C 125.884 136.795,125.303 137.200,125.125 137.200 C 124.946 137.200,124.800 137.457,124.800 137.772 C 124.800 138.087,124.395 138.402,123.900 138.472 C 123.405 138.542,123.000 138.801,123.000 139.046 C 123.000 139.563,120.490 142.000,119.958 142.000 C 119.761 142.000,119.578 142.180,119.550 142.400 C 119.394 143.645,118.758 144.821,118.370 144.581 C 118.179 144.464,117.913 144.870,117.778 145.484 C 117.353 147.419,117.245 147.592,116.615 147.350 C 116.135 147.166,116.000 147.418,116.000 148.501 C 116.000 149.513,115.730 150.091,115.000 150.639 C 114.130 151.292,114.000 151.699,114.000 153.762 C 114.000 155.066,113.883 156.016,113.740 155.873 C 112.748 154.882,112.425 157.334,112.413 165.937 C 112.400 174.544,112.430 174.883,113.200 175.084 C 113.873 175.260,114.000 175.630,114.000 177.414 C 114.000 179.904,114.276 180.800,115.043 180.800 C 115.372 180.800,115.600 181.214,115.600 181.813 C 115.600 182.489,115.899 182.946,116.500 183.188 C 116.995 183.387,117.164 183.561,116.876 183.575 C 116.588 183.589,116.466 183.783,116.604 184.007 C 116.742 184.230,117.023 184.309,117.228 184.183 C 117.432 184.056,117.600 184.520,117.600 185.214 C 117.600 186.120,117.816 186.531,118.366 186.675 C 118.787 186.785,119.241 187.309,119.374 187.838 C 119.507 188.367,119.882 188.800,120.208 188.800 C 120.533 188.800,120.800 189.026,120.800 189.301 C 120.800 190.002,122.994 192.000,123.764 192.000 C 124.126 192.000,124.400 192.333,124.400 192.773 C 124.400 193.198,124.751 193.657,125.180 193.794 C 125.608 193.930,126.070 194.392,126.206 194.820 C 126.343 195.249,126.795 195.600,127.213 195.600 C 127.630 195.600,128.165 195.960,128.400 196.400 C 128.697 196.955,129.238 197.200,130.167 197.200 C 131.170 197.200,131.559 197.401,131.716 198.000 C 131.863 198.563,132.262 198.800,133.063 198.801 C 133.688 198.802,134.830 199.193,135.600 199.669 C 136.645 200.316,137.844 200.582,140.332 200.720 C 142.643 200.847,143.729 201.071,143.874 201.450 C 143.990 201.750,144.245 201.896,144.442 201.774 C 144.639 201.652,144.800 201.727,144.800 201.940 C 144.800 202.756,151.570 202.403,152.019 201.564 C 152.375 200.899,152.894 200.800,156.014 200.800 C 159.072 200.800,159.718 200.682,160.404 199.996 C 160.846 199.554,161.791 199.132,162.504 199.059 C 163.361 198.971,163.934 198.633,164.195 198.063 C 164.497 197.402,164.942 197.200,166.095 197.200 C 166.923 197.200,167.579 197.065,167.553 196.900 C 167.410 195.996,167.737 195.663,169.000 195.426 C 169.881 195.261,170.400 194.935,170.400 194.547 C 170.400 194.208,170.940 193.727,171.600 193.478 C 172.260 193.228,172.800 192.794,172.800 192.512 C 172.800 192.047,173.310 191.828,174.100 191.953 C 174.265 191.979,174.400 191.758,174.400 191.462 C 174.400 191.166,174.760 190.598,175.200 190.200 C 175.640 189.802,176.000 189.240,176.000 188.952 C 176.000 188.664,176.365 188.233,176.811 187.994 C 177.257 187.755,177.517 187.389,177.388 187.180 C 177.258 186.971,177.340 186.800,177.569 186.800 C 177.798 186.800,178.098 186.350,178.236 185.800 C 178.374 185.250,178.735 184.800,179.039 184.800 C 179.373 184.800,179.691 184.170,179.846 183.200 C 180.039 181.994,180.287 181.600,180.851 181.600 C 181.484 181.600,181.600 181.287,181.600 179.576 C 181.600 178.463,181.760 177.651,181.955 177.772 C 182.809 178.300,183.338 176.574,183.514 172.681 C 183.651 169.659,183.881 168.341,184.402 167.600 C 185.295 166.330,185.302 164.519,184.416 163.888 C 183.911 163.528,183.708 162.720,183.639 160.800 C 183.428 154.917,183.231 154.000,182.176 154.000 C 181.778 154.000,181.598 153.537,181.595 152.500 C 181.586 150.210,181.223 149.216,180.495 149.496 C 180.151 149.628,179.973 149.567,180.101 149.360 C 180.228 149.154,180.011 148.289,179.618 147.438 C 179.164 146.456,178.822 146.094,178.683 146.446 C 178.522 146.853,178.441 146.814,178.382 146.300 C 178.337 145.915,178.255 145.420,178.200 145.200 C 178.145 144.980,178.078 144.530,178.050 144.200 C 178.023 143.870,177.640 143.600,177.200 143.600 C 176.760 143.600,176.400 143.336,176.400 143.014 C 176.400 142.692,176.040 142.235,175.600 142.000 C 175.160 141.765,174.800 141.304,174.800 140.976 C 174.800 140.648,174.349 140.209,173.797 139.999 C 173.245 139.789,172.840 139.393,172.897 139.118 C 172.954 138.844,172.595 138.557,172.100 138.482 C 171.525 138.394,171.200 138.066,171.200 137.572 C 171.200 137.147,171.020 136.778,170.800 136.750 C 170.580 136.722,170.265 136.678,170.100 136.650 C 169.935 136.623,169.395 136.195,168.900 135.700 C 168.405 135.205,167.571 134.800,167.047 134.800 C 166.430 134.800,166.019 134.518,165.884 134.000 C 165.724 133.387,165.338 133.200,164.237 133.200 C 163.216 133.200,162.800 133.023,162.800 132.590 C 162.800 131.839,161.546 131.361,159.283 131.250 C 158.200 131.197,157.277 130.877,156.783 130.383 C 155.892 129.492,140.327 129.147,139.796 130.007 M242.956 130.169 C 242.824 130.514,242.555 130.696,242.358 130.574 C 242.161 130.452,242.000 130.540,242.000 130.769 C 242.000 130.998,241.542 131.300,240.981 131.440 C 240.421 131.581,240.063 131.796,240.185 131.918 C 240.307 132.041,240.057 132.514,239.628 132.970 C 239.199 133.427,238.838 133.980,238.824 134.200 C 238.811 134.420,238.575 134.600,238.300 134.600 C 238.025 134.600,237.740 135.026,237.666 135.546 C 237.592 136.068,237.189 136.582,236.766 136.693 C 236.345 136.803,236.000 137.077,236.000 137.301 C 236.000 137.525,235.550 138.125,235.000 138.635 C 234.450 139.145,234.000 139.999,234.000 140.534 C 234.000 141.170,233.723 141.579,233.200 141.716 C 232.721 141.841,232.400 142.262,232.400 142.763 C 232.400 143.509,232.219 143.651,231.360 143.580 C 231.228 143.569,230.759 144.289,230.318 145.180 C 229.877 146.071,229.355 146.800,229.158 146.800 C 228.961 146.800,228.800 147.250,228.800 147.800 C 228.800 148.533,228.587 148.800,228.000 148.800 C 227.410 148.800,227.200 149.067,227.200 149.818 C 227.200 150.565,227.014 150.804,226.500 150.718 C 226.033 150.639,225.758 150.899,225.672 151.501 C 225.602 151.996,225.192 152.590,224.761 152.821 C 224.330 153.052,224.083 153.411,224.212 153.620 C 224.342 153.829,224.269 154.000,224.051 154.000 C 223.834 154.000,223.598 154.405,223.528 154.900 C 223.458 155.395,223.130 155.800,222.800 155.800 C 222.470 155.800,222.142 156.205,222.072 156.700 C 222.002 157.195,221.689 157.600,221.378 157.600 C 221.066 157.600,220.566 158.185,220.267 158.900 C 219.968 159.615,219.426 160.447,219.062 160.749 C 218.698 161.051,218.400 161.615,218.400 162.002 C 218.400 162.390,218.040 162.801,217.600 162.916 C 217.113 163.043,216.800 163.462,216.800 163.986 C 216.800 164.460,216.628 164.741,216.417 164.611 C 215.995 164.350,214.800 166.397,214.800 167.380 C 214.800 167.733,214.456 168.000,214.000 168.000 C 213.410 168.000,213.200 168.267,213.200 169.018 C 213.200 169.765,213.014 170.004,212.500 169.918 C 212.015 169.836,211.757 170.107,211.662 170.800 C 211.489 172.051,210.840 172.872,210.293 172.534 C 210.051 172.384,209.996 172.470,210.162 172.738 C 210.319 172.992,210.257 173.200,210.024 173.200 C 209.791 173.200,209.600 173.539,209.600 173.953 C 209.600 174.370,209.243 174.800,208.800 174.916 C 208.332 175.038,208.000 175.462,208.000 175.936 C 208.000 176.381,207.658 176.855,207.240 176.987 C 206.822 177.120,206.359 177.709,206.212 178.296 C 206.064 178.884,205.596 179.607,205.172 179.905 C 204.747 180.202,204.400 180.774,204.400 181.176 C 204.400 181.578,204.040 182.001,203.600 182.116 C 203.113 182.243,202.800 182.662,202.800 183.186 C 202.800 183.660,202.633 183.944,202.429 183.818 C 202.225 183.692,201.943 183.951,201.802 184.394 C 201.661 184.837,201.378 185.200,201.173 185.200 C 200.968 185.200,200.800 185.566,200.800 186.013 C 200.800 186.459,200.537 186.926,200.215 187.050 C 199.894 187.173,199.528 187.598,199.402 187.994 C 199.276 188.390,198.819 188.806,198.387 188.919 C 197.920 189.041,197.600 189.466,197.600 189.963 C 197.600 190.423,197.351 190.800,197.047 190.800 C 196.742 190.800,196.362 191.205,196.200 191.700 C 196.039 192.195,195.861 192.735,195.804 192.900 C 195.747 193.065,195.678 193.359,195.650 193.553 C 195.623 193.748,195.240 194.001,194.800 194.116 C 194.313 194.243,194.000 194.662,194.000 195.186 C 194.000 195.660,193.847 195.953,193.660 195.837 C 193.473 195.722,193.068 196.116,192.760 196.714 C 192.452 197.311,191.930 198.019,191.600 198.287 C 191.270 198.555,191.180 198.783,191.400 198.793 C 191.667 198.806,191.667 198.910,191.400 199.106 C 191.180 199.268,190.792 199.760,190.537 200.200 C 190.283 200.640,189.881 200.956,189.644 200.902 C 189.408 200.849,189.101 201.254,188.964 201.802 C 188.826 202.351,188.482 202.800,188.199 202.800 C 187.620 202.800,187.200 203.671,187.200 204.870 C 187.200 205.338,186.866 205.762,186.400 205.884 C 185.960 205.999,185.600 206.426,185.600 206.833 C 185.600 207.239,185.272 207.747,184.871 207.962 C 183.822 208.523,182.000 211.290,182.000 212.322 C 182.000 212.933,181.757 213.200,181.200 213.200 C 180.682 213.200,180.400 213.467,180.400 213.957 C 180.400 214.419,180.031 214.806,179.451 214.951 C 178.793 215.117,178.426 215.568,178.256 216.421 C 178.120 217.099,177.846 217.552,177.647 217.429 C 177.233 217.173,176.800 218.096,176.800 219.233 C 176.800 219.920,176.376 220.186,175.500 220.047 C 175.335 220.021,175.178 220.180,175.150 220.400 C 175.123 220.620,175.078 220.948,175.050 221.129 C 175.023 221.309,174.676 221.781,174.280 222.177 C 173.885 222.573,173.457 223.415,173.330 224.048 C 173.175 224.826,172.856 225.200,172.350 225.200 C 171.812 225.200,171.600 225.489,171.600 226.224 C 171.600 226.787,171.431 227.143,171.224 227.015 C 171.017 226.887,170.660 227.011,170.430 227.291 C 168.486 229.657,168.000 230.418,168.000 231.094 C 168.000 231.535,167.568 232.069,167.000 232.327 C 166.450 232.578,166.000 233.057,166.000 233.391 C 166.000 233.726,165.811 234.000,165.581 234.000 C 165.350 234.000,164.929 234.552,164.645 235.227 C 164.362 235.902,163.965 236.397,163.765 236.327 C 163.564 236.257,163.233 236.875,163.029 237.700 C 162.826 238.525,162.442 239.200,162.177 239.200 C 161.444 239.200,158.382 243.407,157.746 245.287 C 157.618 245.664,157.173 246.082,156.757 246.214 C 156.057 246.436,155.852 246.823,156.100 247.454 C 156.155 247.594,155.805 247.855,155.322 248.033 C 154.737 248.250,154.356 248.827,154.180 249.765 C 154.015 250.643,153.631 251.263,153.158 251.413 C 152.741 251.546,152.400 252.002,152.400 252.427 C 152.400 252.852,152.136 253.200,151.814 253.200 C 151.492 253.200,151.028 253.574,150.784 254.030 C 150.539 254.487,149.993 255.207,149.570 255.630 C 149.146 256.054,148.800 256.850,148.800 257.400 C 148.800 258.029,148.574 258.400,148.190 258.400 C 147.855 258.400,147.409 258.850,147.200 259.400 C 146.991 259.950,146.560 260.400,146.242 260.400 C 145.924 260.400,145.545 260.941,145.399 261.603 C 145.254 262.265,144.790 262.991,144.367 263.217 C 143.945 263.443,143.600 263.970,143.600 264.387 C 143.600 264.805,143.240 265.260,142.800 265.400 C 142.360 265.540,142.000 266.002,142.000 266.427 C 142.000 266.852,141.744 267.200,141.431 267.200 C 141.118 267.200,140.641 267.875,140.370 268.700 C 140.099 269.525,139.545 270.435,139.139 270.723 C 138.712 271.025,138.400 271.733,138.400 272.400 C 138.400 273.052,138.086 273.782,137.680 274.077 C 136.621 274.846,136.567 277.367,137.588 278.388 C 138.133 278.933,138.400 279.726,138.400 280.800 C 138.400 282.133,138.533 282.400,139.200 282.400 C 139.640 282.400,140.000 282.664,140.000 282.986 C 140.000 283.308,140.405 283.783,140.900 284.040 C 141.395 284.298,142.122 284.844,142.516 285.254 C 143.908 286.705,151.987 286.063,151.997 284.500 C 151.999 284.225,152.135 284.021,152.300 284.047 C 153.108 284.175,153.600 283.947,153.600 283.446 C 153.600 283.141,154.050 282.597,154.600 282.237 C 155.150 281.876,155.600 281.328,155.600 281.018 C 155.600 280.708,155.960 280.340,156.400 280.200 C 156.991 280.012,157.200 279.595,157.200 278.601 C 157.200 277.510,157.370 277.231,158.100 277.128 C 158.678 277.046,159.046 276.678,159.128 276.100 C 159.245 275.278,159.647 275.009,160.530 275.163 C 160.711 275.194,160.760 275.059,160.638 274.862 C 160.517 274.665,160.863 273.986,161.408 273.352 C 161.953 272.718,162.399 271.974,162.400 271.697 C 162.400 271.421,162.850 270.803,163.400 270.325 C 163.950 269.847,164.400 269.261,164.400 269.024 C 164.400 268.787,164.760 268.368,165.200 268.093 C 165.640 267.818,166.000 267.333,166.000 267.015 C 166.000 266.697,166.450 265.986,167.000 265.436 C 167.550 264.886,168.000 264.158,168.000 263.818 C 168.000 263.478,168.270 263.200,168.600 263.200 C 168.930 263.200,169.200 263.019,169.200 262.797 C 169.200 262.576,169.650 262.003,170.200 261.525 C 170.750 261.047,171.200 260.242,171.200 259.737 C 171.200 259.199,171.614 258.547,172.200 258.163 C 172.750 257.803,173.200 257.158,173.200 256.730 C 173.200 256.303,173.368 256.056,173.572 256.183 C 173.922 256.399,174.580 255.722,174.594 255.132 C 174.597 254.985,175.005 254.398,175.500 253.829 C 175.995 253.260,176.400 252.435,176.400 251.997 C 176.400 251.550,176.667 251.200,177.009 251.200 C 177.343 251.200,177.822 250.750,178.073 250.200 C 178.323 249.650,178.747 249.200,179.014 249.200 C 179.281 249.200,179.608 248.659,179.741 247.997 C 179.875 247.324,180.206 246.839,180.491 246.897 C 180.771 246.954,180.955 246.775,180.900 246.500 C 180.845 246.225,180.980 246.000,181.200 246.000 C 181.420 246.000,181.600 245.623,181.600 245.163 C 181.600 244.662,181.921 244.241,182.400 244.116 C 182.840 244.001,183.200 243.690,183.200 243.425 C 183.200 243.161,183.650 242.553,184.200 242.075 C 184.750 241.597,185.200 240.827,185.200 240.365 C 185.200 239.862,185.520 239.441,186.000 239.316 C 186.518 239.181,186.800 238.770,186.800 238.153 C 186.800 237.567,187.034 237.200,187.409 237.200 C 187.743 237.200,188.222 236.750,188.473 236.200 C 188.723 235.650,189.090 235.200,189.288 235.200 C 189.485 235.200,189.536 235.020,189.400 234.800 C 189.264 234.580,189.433 234.400,189.776 234.400 C 190.119 234.400,190.379 234.265,190.353 234.100 C 190.150 232.814,190.478 232.000,191.200 232.000 C 191.697 232.000,192.000 231.733,192.000 231.295 C 192.000 230.907,192.405 230.412,192.900 230.195 C 193.456 229.951,193.848 229.380,193.927 228.700 C 193.996 228.095,194.401 227.413,194.827 227.186 C 195.252 226.958,195.600 226.401,195.600 225.948 C 195.600 225.462,195.927 225.040,196.400 224.916 C 196.843 224.800,197.200 224.370,197.200 223.953 C 197.200 223.539,197.393 223.200,197.629 223.200 C 198.174 223.200,198.961 222.356,199.130 221.590 C 199.201 221.266,199.606 220.628,200.030 220.174 C 200.453 219.720,200.800 219.066,200.800 218.721 C 200.800 218.376,201.160 217.999,201.600 217.884 C 202.040 217.769,202.400 217.400,202.400 217.064 C 202.400 216.729,202.756 216.341,203.192 216.203 C 203.627 216.064,203.963 215.827,203.938 215.676 C 203.781 214.717,204.595 212.842,205.243 212.673 C 205.659 212.564,206.000 212.188,206.000 211.837 C 206.000 211.487,206.254 211.200,206.564 211.200 C 206.875 211.200,207.521 210.390,208.000 209.400 C 208.479 208.410,209.035 207.600,209.236 207.600 C 209.436 207.600,209.600 207.261,209.600 206.847 C 209.600 206.430,209.957 206.000,210.400 205.884 C 210.860 205.764,211.200 205.338,211.200 204.884 C 211.200 204.430,211.540 204.004,212.000 203.884 C 212.440 203.769,212.800 203.379,212.800 203.018 C 212.800 202.657,213.250 201.945,213.800 201.435 C 214.350 200.925,214.800 200.124,214.800 199.654 C 214.800 199.184,215.010 198.845,215.267 198.900 C 215.524 198.955,215.951 198.584,216.216 198.076 C 216.481 197.567,217.081 196.711,217.549 196.173 C 218.017 195.634,218.400 194.969,218.400 194.693 C 218.400 194.418,218.760 193.968,219.200 193.693 C 219.640 193.418,220.000 192.946,220.000 192.643 C 220.000 192.341,220.360 191.999,220.800 191.884 C 221.240 191.769,221.600 191.375,221.600 191.009 C 221.600 190.235,222.588 189.122,222.952 189.486 C 223.089 189.622,223.222 189.433,223.250 189.067 C 223.278 188.700,223.345 188.220,223.400 188.000 C 223.455 187.780,223.523 187.420,223.550 187.200 C 223.578 186.980,223.960 186.800,224.400 186.800 C 224.916 186.800,225.200 186.533,225.200 186.049 C 225.200 185.214,226.126 184.259,226.537 184.670 C 226.682 184.815,226.800 184.455,226.800 183.870 C 226.800 183.240,227.126 182.603,227.600 182.307 C 228.040 182.032,228.400 181.487,228.400 181.095 C 228.400 180.703,228.850 180.178,229.400 179.927 C 229.950 179.677,230.400 179.184,230.400 178.832 C 230.400 178.480,230.760 177.968,231.200 177.693 C 231.710 177.374,232.000 176.760,232.000 175.997 C 232.000 175.338,232.135 174.829,232.300 174.864 C 233.011 175.014,234.000 174.254,234.000 173.557 C 234.000 173.141,234.241 172.800,234.536 172.800 C 234.830 172.800,235.279 172.345,235.532 171.789 C 235.786 171.233,236.265 170.673,236.597 170.546 C 236.970 170.403,237.200 169.798,237.200 168.957 C 237.200 167.754,237.321 167.600,238.267 167.600 C 238.853 167.600,239.220 167.486,239.081 167.347 C 238.678 166.944,239.568 165.600,240.238 165.600 C 240.573 165.600,240.744 165.432,240.617 165.228 C 240.491 165.023,240.840 164.367,241.393 163.769 C 241.947 163.172,242.400 162.438,242.400 162.138 C 242.400 161.838,242.776 161.279,243.237 160.896 C 243.697 160.513,244.233 159.794,244.428 159.297 C 244.623 158.800,245.007 158.440,245.282 158.497 C 245.556 158.554,245.848 158.156,245.930 157.613 C 246.012 157.070,246.511 156.254,247.039 155.800 C 247.568 155.346,248.000 154.750,248.000 154.475 C 248.000 154.200,248.263 153.874,248.585 153.750 C 248.906 153.627,249.284 153.165,249.424 152.724 C 249.564 152.282,250.021 151.579,250.439 151.161 C 250.858 150.742,251.200 150.061,251.200 149.647 C 251.200 149.230,251.557 148.800,251.998 148.685 C 252.437 148.570,252.921 148.144,253.073 147.738 C 253.226 147.332,253.632 146.790,253.975 146.532 C 254.596 146.068,254.654 145.910,254.750 144.427 C 254.778 144.002,255.160 143.540,255.600 143.400 C 256.942 142.974,256.713 133.600,255.361 133.600 C 255.061 133.600,254.706 133.163,254.572 132.629 C 254.382 131.875,253.976 131.599,252.755 131.392 C 251.593 131.196,251.210 130.953,251.291 130.463 C 251.451 129.491,243.327 129.204,242.956 130.169 M152.400 149.424 C 152.400 149.767,152.568 149.944,152.772 149.817 C 152.977 149.691,153.258 149.770,153.396 149.993 C 153.534 150.217,154.087 150.400,154.624 150.400 C 155.161 150.400,155.960 150.760,156.400 151.200 C 156.840 151.640,157.650 152.000,158.200 152.000 C 158.948 152.000,159.200 152.211,159.200 152.837 C 159.200 153.327,159.519 153.758,159.967 153.876 C 160.389 153.986,160.946 154.586,161.204 155.209 C 161.462 155.833,161.927 156.440,162.237 156.559 C 162.546 156.678,162.800 157.210,162.800 157.741 C 162.800 158.357,163.078 158.779,163.569 158.908 C 164.818 159.234,164.948 171.950,163.700 171.700 C 163.425 171.645,163.178 171.780,163.150 172.000 C 163.123 172.220,163.055 172.580,163.000 172.800 C 162.945 173.020,162.878 173.539,162.850 173.953 C 162.822 174.368,162.440 174.801,162.000 174.916 C 161.521 175.041,161.200 175.462,161.200 175.963 C 161.200 176.533,160.945 176.800,160.400 176.800 C 159.960 176.800,159.621 176.935,159.647 177.100 C 159.776 177.917,159.544 178.400,159.023 178.400 C 158.705 178.400,158.210 178.736,157.923 179.146 C 157.635 179.557,156.816 180.021,156.102 180.178 C 155.389 180.334,154.636 180.763,154.430 181.131 C 153.765 182.320,142.107 182.115,141.300 180.900 C 140.877 180.262,140.309 180.000,139.351 180.000 C 138.608 180.000,138.021 179.865,138.047 179.700 C 138.187 178.816,137.916 178.400,137.200 178.400 C 136.676 178.400,136.400 178.133,136.400 177.627 C 136.400 177.202,136.059 176.746,135.643 176.614 C 135.227 176.482,134.794 176.019,134.681 175.587 C 134.567 175.154,134.188 174.800,133.837 174.800 C 133.461 174.800,133.175 174.431,133.139 173.900 C 132.991 171.712,132.479 170.400,131.773 170.400 C 130.757 170.400,130.952 160.958,131.974 160.691 C 132.493 160.555,132.841 159.986,133.034 158.960 C 133.192 158.119,133.699 157.115,134.160 156.728 C 134.622 156.342,134.843 156.021,134.651 156.013 C 134.459 156.006,134.524 155.732,134.796 155.404 C 135.068 155.077,135.450 154.907,135.645 155.028 C 135.967 155.227,136.168 154.663,136.047 153.900 C 136.021 153.735,136.154 153.600,136.342 153.600 C 136.529 153.600,137.169 153.150,137.762 152.600 C 138.356 152.050,139.102 151.600,139.421 151.600 C 139.739 151.600,140.000 151.330,140.000 151.000 C 140.000 150.580,140.424 150.400,141.417 150.400 C 142.281 150.400,143.169 150.088,143.692 149.600 C 144.844 148.527,152.400 148.374,152.400 149.424 M245.039 215.094 C 244.948 215.185,244.572 215.304,244.205 215.358 C 243.837 215.412,243.415 215.649,243.268 215.884 C 243.121 216.119,241.524 216.405,239.720 216.520 C 236.191 216.743,235.600 216.930,235.600 217.824 C 235.600 218.248,235.078 218.400,233.627 218.400 C 232.042 218.400,231.607 218.549,231.413 219.158 C 231.264 219.628,230.645 220.015,229.786 220.176 C 229.024 220.319,228.400 220.596,228.400 220.792 C 228.400 220.988,227.770 221.376,227.000 221.654 C 226.230 221.933,225.600 222.322,225.600 222.520 C 225.600 223.073,223.186 225.200,222.558 225.200 C 222.227 225.200,222.000 225.614,222.000 226.218 C 222.000 226.965,221.814 227.204,221.300 227.118 C 220.841 227.040,220.558 227.296,220.478 227.859 C 220.410 228.332,220.007 228.809,219.582 228.921 C 219.157 229.032,218.632 229.590,218.415 230.161 C 218.198 230.733,217.737 231.200,217.392 231.200 C 217.047 231.200,216.794 231.425,216.830 231.700 C 217.024 233.196,216.736 234.092,215.997 234.285 C 215.429 234.433,215.121 234.954,214.944 236.062 C 214.806 236.924,214.388 237.792,214.016 237.991 C 213.520 238.257,213.314 238.969,213.246 240.653 C 213.148 243.059,212.950 243.740,212.439 243.424 C 211.966 243.132,211.916 243.699,211.735 251.477 C 211.572 258.484,211.596 258.770,212.383 259.191 C 213.076 259.562,213.200 260.019,213.200 262.214 C 213.200 264.270,213.326 264.800,213.813 264.800 C 214.536 264.800,215.040 265.933,215.169 267.853 C 215.186 268.103,215.560 268.401,216.000 268.516 C 216.636 268.682,216.800 269.062,216.800 270.363 C 216.800 271.733,216.930 272.000,217.600 272.000 C 218.117 272.000,218.400 272.267,218.400 272.753 C 218.400 273.168,218.741 273.596,219.158 273.705 C 219.607 273.822,220.027 274.413,220.190 275.155 C 220.341 275.844,220.591 276.329,220.746 276.234 C 220.900 276.138,221.437 276.660,221.939 277.392 C 222.440 278.125,223.367 278.938,223.997 279.199 C 224.627 279.460,225.240 279.927,225.359 280.237 C 225.478 280.546,225.920 280.800,226.341 280.800 C 226.770 280.800,227.199 281.151,227.316 281.600 C 227.434 282.053,227.862 282.400,228.301 282.400 C 228.728 282.400,229.498 282.765,230.013 283.211 C 230.527 283.657,231.404 284.136,231.963 284.277 C 232.521 284.417,233.253 284.852,233.589 285.244 C 234.021 285.749,234.903 285.993,236.600 286.079 C 238.413 286.170,239.000 286.347,239.000 286.800 C 239.000 287.753,255.984 287.875,256.692 286.928 C 256.989 286.529,258.138 286.139,259.604 285.939 C 261.114 285.732,262.350 285.305,262.888 284.804 C 263.363 284.362,264.075 284.000,264.472 284.000 C 264.869 284.000,265.418 283.640,265.693 283.200 C 265.996 282.714,266.626 282.400,267.296 282.400 C 268.280 282.400,268.596 282.043,268.447 281.100 C 268.421 280.935,268.850 280.800,269.400 280.800 C 270.012 280.800,270.400 280.572,270.400 280.214 C 270.400 279.724,271.708 278.674,272.400 278.610 C 273.118 278.543,275.600 275.422,275.600 274.587 C 275.600 273.867,275.816 273.600,276.400 273.600 C 276.933 273.600,277.200 273.333,277.200 272.800 C 277.200 272.282,277.467 272.000,277.957 272.000 C 278.819 272.000,279.200 271.255,279.200 269.567 C 279.200 268.836,279.408 268.400,279.757 268.400 C 280.431 268.400,280.800 267.538,280.800 265.967 C 280.800 265.067,280.983 264.800,281.600 264.800 C 282.173 264.800,282.414 264.517,282.450 263.800 C 282.478 263.250,282.545 262.620,282.600 262.400 C 282.655 262.180,282.723 261.370,282.750 260.600 C 282.782 259.699,282.997 259.200,283.353 259.200 C 284.481 259.200,284.837 246.094,283.740 244.997 C 283.411 244.669,283.268 244.400,283.420 244.400 C 283.573 244.400,283.515 244.175,283.292 243.900 C 283.069 243.625,282.785 242.680,282.662 241.800 C 282.538 240.920,282.384 239.840,282.318 239.400 C 282.177 238.443,281.518 237.613,281.100 237.866 C 280.935 237.965,280.800 237.327,280.800 236.446 C 280.800 235.389,280.562 234.666,280.100 234.318 C 279.246 233.674,278.400 232.225,278.400 231.405 C 278.400 231.072,278.130 230.800,277.800 230.800 C 277.467 230.800,277.200 230.444,277.200 230.000 C 277.200 229.560,276.936 229.200,276.614 229.200 C 275.962 229.200,275.085 227.848,275.481 227.453 C 275.713 227.220,275.008 227.041,274.300 227.153 C 274.028 227.196,273.852 226.605,273.939 225.940 C 273.958 225.797,273.529 225.569,272.987 225.432 C 272.353 225.273,272.000 224.901,272.000 224.392 C 272.000 223.855,271.731 223.600,271.163 223.600 C 270.662 223.600,270.241 223.279,270.116 222.800 C 270.001 222.360,269.699 222.000,269.446 222.000 C 269.193 222.000,268.323 221.550,267.514 221.000 C 266.705 220.450,265.769 220.000,265.435 220.000 C 265.101 220.000,264.636 219.642,264.402 219.204 C 264.168 218.766,263.846 218.427,263.688 218.451 C 262.082 218.693,260.000 218.320,260.000 217.790 C 260.000 216.981,258.683 216.541,256.000 216.455 C 253.129 216.363,251.537 216.025,251.820 215.567 C 251.945 215.365,251.722 215.176,251.324 215.146 C 249.145 214.984,245.182 214.951,245.039 215.094 M252.653 235.555 C 254.349 235.592,254.743 235.739,254.916 236.400 C 255.059 236.946,255.462 237.200,256.186 237.200 C 256.792 237.200,257.141 237.372,257.000 237.600 C 256.864 237.820,257.039 238.000,257.389 238.000 C 257.739 238.000,258.129 238.270,258.255 238.600 C 258.382 238.930,258.812 239.200,259.212 239.200 C 259.685 239.200,260.097 239.680,260.393 240.578 C 260.703 241.517,261.031 241.886,261.424 241.735 C 261.849 241.572,262.000 241.840,262.000 242.757 C 262.000 243.733,262.172 244.000,262.800 244.000 C 263.493 244.000,263.600 244.267,263.600 246.000 C 263.600 247.467,263.813 248.213,264.400 248.800 C 264.968 249.368,265.200 250.133,265.200 251.437 C 265.200 252.668,264.936 253.609,264.400 254.291 C 263.913 254.909,263.600 255.914,263.600 256.854 C 263.600 257.704,263.420 258.400,263.200 258.400 C 262.980 258.400,262.845 258.625,262.900 258.900 C 262.955 259.175,262.775 259.355,262.500 259.300 C 262.186 259.237,262.000 259.661,262.000 260.437 C 262.000 261.319,261.780 261.732,261.237 261.874 C 260.817 261.984,260.384 262.417,260.274 262.837 C 260.158 263.281,259.725 263.600,259.237 263.600 C 258.777 263.600,258.421 263.735,258.447 263.900 C 258.565 264.643,258.366 265.200,257.984 265.200 C 257.755 265.200,257.041 265.590,256.396 266.066 C 255.319 266.862,254.601 267.076,252.700 267.167 C 252.315 267.185,252.021 267.335,252.047 267.500 C 252.235 268.690,251.897 268.800,248.049 268.800 C 244.303 268.800,242.624 268.310,243.470 267.463 C 243.615 267.318,243.388 267.177,242.967 267.149 C 242.545 267.121,241.750 267.027,241.200 266.940 C 240.650 266.854,239.975 266.757,239.700 266.725 C 239.425 266.693,239.288 266.578,239.397 266.470 C 239.743 266.123,238.726 265.200,237.998 265.200 C 237.610 265.200,237.199 264.840,237.084 264.400 C 236.969 263.960,236.609 263.600,236.284 263.600 C 235.959 263.600,235.599 263.240,235.484 262.800 C 235.369 262.360,234.988 262.000,234.637 262.000 C 234.224 262.000,234.000 261.648,234.000 261.000 C 234.000 260.450,233.820 260.000,233.600 260.000 C 233.380 260.000,233.200 259.711,233.200 259.357 C 233.200 258.952,232.980 258.799,232.605 258.943 C 232.277 259.068,232.029 259.043,232.052 258.886 C 232.330 257.025,231.917 255.103,231.200 254.916 C 229.998 254.602,230.018 249.825,231.226 248.777 C 231.681 248.383,232.041 247.957,232.026 247.830 C 231.766 245.550,232.070 244.353,233.000 244.000 C 233.612 243.767,234.000 243.306,234.000 242.810 C 234.000 241.455,234.022 241.409,234.824 241.113 C 235.251 240.955,235.600 240.460,235.600 240.013 C 235.600 239.549,235.863 239.200,236.214 239.200 C 237.087 239.200,238.836 237.981,238.573 237.556 C 238.452 237.360,238.903 237.200,239.576 237.200 C 240.523 237.200,240.800 237.023,240.800 236.420 C 240.800 235.567,242.507 235.339,248.000 235.455 C 249.430 235.485,251.524 235.530,252.653 235.555 " stroke="none" fill="#ff9900" fill-rule="evenodd"></path><path id="path12" d="" stroke="none" fill="#8ec6c6" fill-rule="evenodd"></path><path id="path13" d="" stroke="none" fill="#00ffff" fill-rule="evenodd"></path><path id="path14" d="" stroke="none" fill="#55ffff" fill-rule="evenodd"></path><path id="path15" d="M137.417 273.172 C 137.144 273.614,137.775 274.092,138.144 273.722 C 138.525 273.342,138.454 272.800,138.024 272.800 C 137.817 272.800,137.544 272.968,137.417 273.172 M275.600 274.249 C 275.600 274.780,275.709 274.808,276.200 274.400 C 276.530 274.126,276.800 273.834,276.800 273.751 C 276.800 273.668,276.530 273.600,276.200 273.600 C 275.870 273.600,275.600 273.892,275.600 274.249 M157.200 277.849 C 157.200 278.380,157.309 278.408,157.800 278.000 C 158.130 277.726,158.400 277.434,158.400 277.351 C 158.400 277.268,158.130 277.200,157.800 277.200 C 157.470 277.200,157.200 277.492,157.200 277.849 " stroke="none" fill="#ffff00" fill-rule="evenodd"></path></g></svg>
</g>
<g id="search-white">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250.89 250.89"><title>search-outline</title><path class="fill-current" d="M2706.2,297.85A111.65,111.65,0,1,1,2817.85,186.2,111.77,111.77,0,0,1,2706.2,297.85Zm0-208.41A96.76,96.76,0,1,0,2803,186.2,96.87,96.87,0,0,0,2706.2,89.44Z" transform="translate(-2594.55 -74.55)" /><rect class="fill-current" x="2802.97" y="248.3" width="14.89" height="84.21" transform="translate(-1976.75 1997.77) rotate(-45)" /></svg>
</g>
<g id="search">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250.89 250.89"><defs><style>.a{fill:#f90;}.b{fill:#9aaac1;}</style></defs><title>search</title><rect class="a" x="2803.97" y="248.3" width="14.89" height="84.21" transform="translate(-1977.46 1998.47) rotate(-45)" /><path class="b" d="M2707.2,297.85A111.65,111.65,0,1,1,2818.85,186.2,111.77,111.77,0,0,1,2707.2,297.85Zm0-208.41A96.76,96.76,0,1,0,2804,186.2,96.87,96.87,0,0,0,2707.2,89.44Z" transform="translate(-2595.55 -74.55)" /></svg>
</g>
<g id="location">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 238.53"><defs><style>
                                                                                           .cls-1 {
                                                                                               fill: #f90;
                                                                                           }

                                                                                           .cls-2 {
                                                                                               fill: #9aaac1;
                                                                                           }
                </style></defs>
<title>Asset 19</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M100,140a40,40,0,1,1,40-40A40,40,0,0,1,100,140Zm0-66.67A26.67,26.67,0,1,0,126.67,100,26.69,26.69,0,0,0,100,73.33Z" /><path class="cls-2" d="M100,238.53a6.65,6.65,0,0,1-4.71-2L27.22,168.51A99.81,99.81,0,0,1,8.64,140.64,98.71,98.71,0,0,1,0,100a100,100,0,0,1,200,0,99.81,99.81,0,0,1-27.07,68.35l-68.22,68.22A6.65,6.65,0,0,1,100,238.53Zm0-225.2A86.77,86.77,0,0,0,13.33,100,86.45,86.45,0,0,0,36.8,159.24l63.2,63.2,63.35-63.35A86.52,86.52,0,0,0,186.67,100,86.77,86.77,0,0,0,100,13.33Z" /></g></g></svg>
</g>
<g id="user">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 222 222"><defs><style>
                                                                                        .cls-1 {
                                                                                            fill: #9aaac1;
                                                                                        }

                                                                                        .cls-2 {
                                                                                            fill: #f90;
                                                                                        }
                </style></defs>
<title>Asset 2</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M111,222c-41.13,0-81.27-7.12-107.39-19.06A6.16,6.16,0,0,1,0,197.33c0-39.83,24.43-65.71,72.6-76.92l2.79,12c-41.32,9.62-61.44,29-63,60.91C37.06,203.6,73.48,209.67,111,209.67s73.94-6.07,98.57-16.33c-1.52-31.89-21.64-51.3-63-60.91l2.79-12c48.18,11.21,72.6,37.1,72.6,76.92a6.16,6.16,0,0,1-3.61,5.61C192.27,214.88,152.13,222,111,222Z" /><path class="cls-2" d="M111,154.17c-19.91,0-41.12-20-50.47-47.16-7.61-2.69-13.44-11.48-14.27-22.43-.67-10.32,3.25-19.37,9.68-23.5C57.8,30.26,66.6,0,111,0s53.2,30.26,55.05,61.08c6.43,4.13,10.35,13.17,9.68,23.44-.83,11-6.66,19.8-14.27,22.49C152.13,134.13,130.91,154.17,111,154.17Zm0-141.83c-30,0-41.23,13.88-42.93,53.06L67.88,70,63.4,71.11c-2.27.56-5.29,5.37-4.82,12.61s4.36,11.76,6.85,11.81l4.5.09,1.29,4.31C79,125.81,97.9,141.83,111,141.83s32-16,39.79-41.91l1.29-4.31,4.5-.09c2.49,0,6.3-4.59,6.85-11.87s-2.56-12-4.83-12.54L154.12,70l-.2-4.61C152.23,26.22,141,12.33,111,12.33Z" /></g></g></svg>
</g>
<g id="city">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 308 308"><defs><style>
                                                                                        .cls-1 {
                                                                                            fill: #f90;
                                                                                        }

                                                                                        .cls-2 {
                                                                                            fill: #9aaac1;
                                                                                        }
                </style></defs>
<title>Asset 42</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M179.67,38.84V37.6a61.92,61.92,0,0,1-10.27-.84V37A118.81,118.81,0,0,0,154,35.93a118.78,118.78,0,0,0-14.69,1,95.51,95.51,0,0,1-11,1.59v.29c-45.45,10.1-79.57,46.79-81.87,90.47,1,.15,3.6,0,2.23,0,.94,0,1.88,0,2.83,0,1.77,0,3.53.15,5.29,0,.09-.24.17.24.27,0h-.33C59,95.34,82.92,65.53,116.39,53c-16.5,16.51-27.6,45.46-28.91,76.35,3.42,0,6.84,0,10.26,0,1.89-42.69,23.66-78.87,51.12-82.71v82.71c2-.13,4-.5,5.89,0,1.45-.27,2.9.2,4.37,0V46.6c27.64,3.87,49.53,39.63,51.17,82.71h-.55c3.41.5,3.63.53.64,0a25.33,25.33,0,0,0,2.62,0c-1.17.05,3.76.07,4.27,0,1.09-.16,2.16.13,3.22,0C219.13,98.56,208,69.42,191.61,53c33.48,12.57,57.41,42.38,59.64,76.35.18.2.36-.21.53,0,0,0,0,0,0,0,.9,0,1.79,0,2.69,0,2.34,0,4.67.17,7,0C259.1,85.74,225,48.92,179.67,38.84Z" /><path class="cls-2" d="M139,37l-.4-1.07h0a5.14,5.14,0,0,1,5.13-5.13h20.53a5.14,5.14,0,0,1,5.13,5.13V37h-.06a75.54,75.54,0,0,0,10.33,1.44V35.93a15.42,15.42,0,0,0-15.4-15.4h-5.13V5.13a5.13,5.13,0,0,0-10.27,0v15.4h-5.13c-8.5,0-15.72,10-15.73,18.47Z" /><path class="cls-2" d="M308,205.33V179.67a10.28,10.28,0,0,0-10.27-10.27H272.07V143.73a15.37,15.37,0,0,0-10.51-14.53c0-.22,0-.44,0-.67-2.35,0-210.92-.38-214.19-.28.81,0,0,.14-.84.29,0,.22,0,.44,0,.66a15.37,15.37,0,0,0-10.51,14.53V169.4H10.27A10.28,10.28,0,0,0,0,179.67v25.67a15.37,15.37,0,0,0,10.27,14.45V277.2A10.28,10.28,0,0,0,0,287.47v15.4A5.13,5.13,0,0,0,5.13,308H302.87a5.13,5.13,0,0,0,5.13-5.13v-15.4a10.28,10.28,0,0,0-10.27-10.27V219.79A15.37,15.37,0,0,0,308,205.33ZM46.2,143.73a5.14,5.14,0,0,1,5.13-5.13H256.67a5.14,5.14,0,0,1,5.13,5.13v5.13H46.2Zm0,15.4H261.8V169.4H46.2ZM10.27,179.67H297.73v10.27H10.27Zm225.87,40.12a15.37,15.37,0,0,0,10.27-14.45V200.2h10.27v5.13a15.37,15.37,0,0,0,10.27,14.45V277.2h-30.8V219.79Zm-25.67-9.32h0a5.14,5.14,0,0,1-5.13-5.13V200.2h30.8v5.13a5.14,5.14,0,0,1-5.13,5.13Zm15.4,10.27V277.2H215.6V220.73Zm-82.13-10.27h0a5.14,5.14,0,0,1-5.13-5.13V200.2h30.8v5.13a5.14,5.14,0,0,1-5.13,5.13Zm15.4,10.27V277.2H148.87V220.73Zm-56.47-.95a15.37,15.37,0,0,0,10.27-14.45V200.2h15.4v5.13a15.37,15.37,0,0,0,10.27,14.45V277.2H102.67V219.79ZM77,210.47h0a5.14,5.14,0,0,1-5.13-5.13V200.2h30.8v5.13a5.14,5.14,0,0,1-5.13,5.13Zm15.4,10.27V277.2H82.13V220.73Zm77-.95a15.38,15.38,0,0,0,10.27-14.45V200.2h15.4v5.13a15.37,15.37,0,0,0,10.27,14.45V277.2H169.4Zm-97.53,0V277.2H41.07V219.79a15.38,15.38,0,0,0,10.27-14.45V200.2H61.6v5.13A15.37,15.37,0,0,0,71.87,219.79ZM10.27,200.2h30.8v5.13a5.14,5.14,0,0,1-5.13,5.13H15.4a5.14,5.14,0,0,1-5.13-5.13ZM30.8,220.73V277.2H20.53V220.73Zm266.93,66.73v10.27H10.27V287.47ZM277.2,277.2V220.73h10.27V277.2Zm15.4-66.73H272.07a5.14,5.14,0,0,1-5.13-5.13V200.2h30.8v5.13A5.14,5.14,0,0,1,292.6,210.47Z" /></g></g></svg>
</g>
<g id="area">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 308.11 290"><defs><style>
                                                                                           .cls-1 {
                                                                                               fill: #f90;
                                                                                           }

                                                                                           .cls-2 {
                                                                                               fill: #9aaac1;
                                                                                           }
                </style></defs>
<title>Asset 49</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M70,105a70,70,0,0,0-5,139.82V285a5,5,0,1,0,10,0V244.82A70,70,0,0,0,70,105Zm5,129.79V217l13.5-13.5a4.95,4.95,0,1,0-7-7L70,208,58.5,196.5a4.95,4.95,0,0,0-7,7L65,217v17.79a60,60,0,1,1,10,0Z" /><path class="cls-1" d="M270,71.5c-2-21.5-17-29-31-29A39.94,39.94,0,0,0,206,59c-12,1.5-21,12.5-21,25.5,0,14,11,25.5,24,25.5h58c10,0,18-8.5,18-19.5C285,81,278.5,73,270,71.5ZM267,100H209c-8,0-14-7-14-15.5S201.5,69,209,69a5.25,5.25,0,0,0,4.5-2.5c0-1,7.5-14,25.5-14,7.5,0,21,3,21,23.5a4.72,4.72,0,0,0,5,5h2c4.5,0,8,4,8,9.5S271.5,100,267,100Z" /><path class="cls-1" d="M50,275a4.72,4.72,0,0,0-5,5v5a4.72,4.72,0,0,0,5,5,4.72,4.72,0,0,0,5-5v-5A4.72,4.72,0,0,0,50,275Z" /><path class="cls-1" d="M30,275a4.72,4.72,0,0,0-5,5v5a4.72,4.72,0,0,0,5,5,4.72,4.72,0,0,0,5-5v-5A4.72,4.72,0,0,0,30,275Z" /><path class="cls-1" d="M10,275a4.72,4.72,0,0,0-5,5v5a4.72,4.72,0,0,0,5,5,4.72,4.72,0,0,0,5-5v-5A4.72,4.72,0,0,0,10,275Z" /><path class="cls-1" d="M130,275a4.72,4.72,0,0,0-5,5v5a5,5,0,1,0,10,0v-5A4.72,4.72,0,0,0,130,275Z" /><path class="cls-1" d="M110,275a4.72,4.72,0,0,0-5,5v5a5,5,0,1,0,10,0v-5A4.72,4.72,0,0,0,110,275Z" /><path class="cls-1" d="M90,275a4.72,4.72,0,0,0-5,5v5a5,5,0,1,0,10,0v-5A4.72,4.72,0,0,0,90,275Z" /><path class="cls-1" d="M303.11,275a4.72,4.72,0,0,0-5,5v5a5,5,0,1,0,10,0v-5A4.72,4.72,0,0,0,303.11,275Z" /><path class="cls-1" d="M283.11,275a4.72,4.72,0,0,0-5,5v5a5,5,0,1,0,10,0v-5A4.72,4.72,0,0,0,283.11,275Z" /><path class="cls-1" d="M150,275a4.72,4.72,0,0,0-5,5v5a5,5,0,1,0,10,0v-5A4.72,4.72,0,0,0,150,275Z" /><path class="cls-1" d="M206.56,275a4.72,4.72,0,0,0-5,5v5a5,5,0,1,0,10,0v-5A4.72,4.72,0,0,0,206.56,275Z" /><path class="cls-1" d="M186.89,275a4.72,4.72,0,0,0-5,5v5a5,5,0,1,0,10,0v-5A4.72,4.72,0,0,0,186.89,275Z" /><path class="cls-1" d="M167.22,275a4.72,4.72,0,0,0-5,5v5a5,5,0,1,0,10,0v-5A4.72,4.72,0,0,0,167.22,275Z" /><path class="cls-1" d="M226.56,275a4.72,4.72,0,0,0-5,5v5a5,5,0,1,0,10,0v-5A4.72,4.72,0,0,0,226.56,275Z" /><path class="cls-1" d="M246.22,275a4.72,4.72,0,0,0-5,5v5a5,5,0,1,0,10,0v-5A4.72,4.72,0,0,0,246.22,275Z" /><path class="cls-1" d="M265.89,275a4.72,4.72,0,0,0-5,5v5a5,5,0,1,0,10,0v-5A4.72,4.72,0,0,0,265.89,275Z" /><path class="cls-2" d="M288.8,256.12c3.28,0,5.46-2.19,6-5.46v-9.84a23.09,23.09,0,0,0-22.41-22.94V206.94h10.93a5.46,5.46,0,1,0,0-10.93H272.41V185.08h10.93a5.46,5.46,0,1,0,0-10.93H272.41v-5.46a5.46,5.46,0,0,0-10.93,0v5.46H195.9v-5.46a5.46,5.46,0,0,0-10.93,0v5.46H174a5.46,5.46,0,1,0,0,10.93H185V196H174a5.46,5.46,0,1,0,0,10.93H185v11a23.1,23.1,0,0,0-21.86,22.92v9.84a5.16,5.16,0,0,0,5.46,5.46H185V278a5.46,5.46,0,0,0,10.93,0V256.12h65.58V278a5.46,5.46,0,0,0,10.93,0V256.12H288.8Zm-92.9-38.25V206.94h65.58v10.93Zm65.58-32.79V196H195.9V185.08ZM174,240.82a12.13,12.13,0,0,1,12-12h85.25a12.13,12.13,0,0,1,12,12v4.37H174Z" /><path class="cls-2" d="M140,0a34.78,34.78,0,0,0-30.52,17.73A30,30,0,0,0,85,5a4.72,4.72,0,0,0-5,5,4.72,4.72,0,0,0,5,5,20.06,20.06,0,0,1,20,20,5,5,0,1,0,10,0,24.76,24.76,0,0,1,25-25,4.72,4.72,0,0,0,5-5A4.72,4.72,0,0,0,140,0Z" /></g></g></svg>
</g>
<g id="specialty">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 239 239"><defs><style>
                                                                                        .cls-1 {
                                                                                            fill: #f90;
                                                                                        }

                                                                                        .cls-2 {
                                                                                            fill: #9aaac1;
                                                                                        }
                </style></defs>
<title>Asset 50</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M85.81,127.26A21.1,21.1,0,0,0,99.4,140.07a21.1,21.1,0,0,0,13.1,13.7v.77c4.67,0,9.34.09,14,0v-.82a21.1,21.1,0,0,0,13.1-13.7,21.1,21.1,0,0,0,13.7-13.1h0a11.49,11.49,0,0,1,.43-2.18c.17-1.32.36-2.59.61-3.85a14.57,14.57,0,0,1,.42-4.16q-.44-1.93-1-3.83l-.47,0a21,21,0,0,0-19.8-14h-28a21,21,0,0,0-19.8,14c-.36,0-.7,0-1,0A42,42,0,0,1,85.81,127.26ZM105.5,113h28a7,7,0,0,1,0,14,7,7,0,0,0-7,7,7,7,0,1,1-14,0,7,7,0,0,0-7-7,7,7,0,0,1,0-14Z" /><path class="cls-1" d="M204,141a35.07,35.07,0,0,0-34.31,28H169a70.52,70.52,0,0,1,.69,7.25,60.44,60.44,0,0,1,0,6.76h0A35,35,0,1,0,204,141Zm0,56a21,21,0,1,1,21-21A21,21,0,0,1,204,197Z" /><circle class="cls-1" cx="203.99" cy="175.98" r="7" /><path class="cls-2" d="M50,96.3C52,112.63,65.58,127,85.69,127c.15.42.32-11.52.06-14.14l-.05.14c-12.39,0-20.58-8.42-21.83-18.39l-7-57A21,21,0,0,1,77.71,14h3v7a7,7,0,1,0,14,0V7a7,7,0,0,0-7-7H77.71A35,35,0,0,0,43,39.34Z" /><path class="cls-2" d="M161.29,0H150.78a7,7,0,0,0-7,7V21a7,7,0,0,0,14,0V14h3.52c12.41,0,22.91,10.83,21.31,23.63l-7,56.94c-1.16,9.31-9.1,17.86-21.21,18.35-.07,4.25-1.21,14.4-1.08,14.05,9.65,0,17.66-3,24.33-8.71a34.7,34.7,0,0,0,11.87-22l7-56.94C199.1,18.54,182.42,0,161.29,0Z" /><path class="cls-2" d="M169.67,169H126.5V154.64c-3.65-.15-13.07-.91-14.08-1.13l-.27.12.34.14V169H35a35,35,0,0,0,0,70H91.49a35,35,0,0,0,35-35V183s43.28.41,43.32.62C169.94,182.81,170.08,170.6,169.67,169ZM112.5,204a21,21,0,0,1-21,21H35a21,21,0,0,1,0-42H112.5Z" /></g></g></svg>
</g>
<g id="like">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 201.33 207.11"><defs><style>
                                                                                              .cls-1 {
                                                                                                  fill: #f90;
                                                                                              }

                                                                                              .cls-2 {
                                                                                                  fill: #9aaac1;
                                                                                              }
                </style></defs>
<title>Asset 44</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M195.28,140.8c4.24-5.41,6.28-11.22,6-17.19a26.41,26.41,0,0,0-5.63-14.9c2.81-7,3.9-18.06-5.5-26.64-6.89-6.28-18.58-9.1-34.78-8.32a135.92,135.92,0,0,0-21.31,2.73h0c-2.17.39-4.46.87-6.8,1.39-.17-2.77.3-9.66,5.41-25.16,6.06-18.45,5.72-32.57-1.13-42C124.34.78,112.86,0,109.49,0a10.88,10.88,0,0,0-8.36,3.81c-4.81,5.59-4.24,15.89-3.64,20.66C91.77,39.8,75.75,77.39,62.19,87.83a4.65,4.65,0,0,0-.69.61A46.52,46.52,0,0,0,53,101.17a17.82,17.82,0,0,0-6.9-2.08c0,.31,0,.62,0,.93a14.32,14.32,0,0,1,.08,1.45,69.58,69.58,0,0,1-.58,9.29A6.33,6.33,0,0,1,50.76,117v70.38a6.28,6.28,0,0,1-1.59,4.18c.55,4.31.7,8.64.93,13a18,18,0,0,0,4.73-2.38L65,203.34a436,436,0,0,0,57.73,3.16c5.15.39,10,.61,14.51.61a97.18,97.18,0,0,0,20.14-1.82c13.25-2.82,22.3-8.45,26.9-16.72A26.51,26.51,0,0,0,187.23,172c8.62-7.8,10.13-16.41,9.83-22.48A29.25,29.25,0,0,0,195.28,140.8Zm-11.09-5.07a5.82,5.82,0,0,0-.78,7.06,18,18,0,0,1,2,7.23c.3,5.67-2.43,10.7-8.14,15a5.9,5.9,0,0,0-2,6.67,15.29,15.29,0,0,1-1.17,11.17c-2.9,5.2-9.35,8.92-19.14,11-7.84,1.69-18.49,2-31.57,1h-.61a427.46,427.46,0,0,1-56.3-3.08h0l-4.37-.52a18.36,18.36,0,0,0,.39-3.81V117a18.32,18.32,0,0,0-.82-5.37,36.2,36.2,0,0,1,8.06-14.86C89.13,81.34,108.14,29.32,109,27.07a5.48,5.48,0,0,0,.26-2.9c-.74-4.85-.48-10.78.56-12.56,2.3,0,8.49.69,12.21,5.85,4.42,6.11,4.24,17-.52,31.49-7.28,22-7.88,33.65-2.12,38.76a9.44,9.44,0,0,0,9.44,1.69c2.64-.61,5.15-1.13,7.54-1.52l.56-.13c13.3-2.9,37.12-4.68,45.39,2.86,7,6.41,2,14.9,1.47,15.81a5.79,5.79,0,0,0,1,7.54s4.59,4.33,4.81,10.09C189.78,127.89,188,131.83,184.2,135.73Z" /><path class="cls-2" d="M59.66,196.55c2-5,2.79-7.85,2.79-9.15V117a18.32,18.32,0,0,0-.82-5.37c.31-1.14-8.05-11.68-8.62-10.44A17.87,17.87,0,0,0,44.44,99H18A18,18,0,0,0,0,117V187.4a18,18,0,0,0,18,18H44.44a18,18,0,0,0,10.39-3.29Zm-8.9-9.2a6.33,6.33,0,0,1-6.32,6.32H18v0a6.33,6.33,0,0,1-6.32-6.32V117A6.33,6.33,0,0,1,18,110.66H44.44A6.33,6.33,0,0,1,50.76,117Z" /></g></g></svg>
</g>
<g id="fees">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 239.38 239.38"><defs><style>
                                                                                              .cls-1 {
                                                                                                  fill: #f90;
                                                                                              }

                                                                                              .cls-2 {
                                                                                                  fill: #9aaac1;
                                                                                              }
                </style></defs>
<title>Asset 45</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M127.21,60.92v11.6a24.42,24.42,0,0,1,11.42,4.62q4.44,3.49,8.46,10.71L135.55,94.3q-5.21-9.47-13.61-9.47a12.47,12.47,0,0,0-8.64,3.08,9.91,9.91,0,0,0-3.43,7.69,9.47,9.47,0,0,0,2.78,7q2.72,2.72,11,6.45a110,110,0,0,1,11.84,6.13,31.57,31.57,0,0,1,7,5.53,24.79,24.79,0,0,1,6.69,17.46,28,28,0,0,1-6,17.76,29.22,29.22,0,0,1-16,10.3v12.25H116.85v-11.9q-11.6-1.89-17.7-8t-9-18.82l13-2.72q2.67,9,6.51,12.84,4,3.67,10.71,3.67a15.11,15.11,0,0,0,10.89-4.2,14.18,14.18,0,0,0,4.32-10.71,12.61,12.61,0,0,0-3.61-9.41,33.55,33.55,0,0,0-5.41-3.88,93.26,93.26,0,0,0-9.15-4.7q-11.48-5.15-15.09-9.47A23.7,23.7,0,0,1,98,87.79a21.68,21.68,0,0,1,3.94-6.66A24.46,24.46,0,0,1,108.27,76a34.19,34.19,0,0,1,8.58-3.43V60.92Z" /><path class="cls-2" d="M35,204.37a119.75,119.75,0,1,1,169.35,0A119.89,119.89,0,0,1,35,204.37ZM195,44.42A106.44,106.44,0,1,0,195,195,106.57,106.57,0,0,0,195,44.42Z" /></g></g></svg>
</g>
<g id="map">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 238 238.01"><defs><style>
                                                                                           .cls-1 {
                                                                                               fill: #9aaac1;
                                                                                           }

                                                                                           .cls-2 {
                                                                                               fill: #f90;
                                                                                           }
                </style></defs>
<title>Asset 62</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M6.26,238A6.26,6.26,0,0,1,0,231.74V37.58A6.27,6.27,0,0,1,3.85,31.8L79,.49a6.21,6.21,0,0,1,4.82,0L156.58,30.8,229.33.49A6.26,6.26,0,0,1,238,6.27V200.42a6.27,6.27,0,0,1-3.85,5.78L159,237.52a6.21,6.21,0,0,1-4.82,0L81.42,207.21,8.67,237.52A6.26,6.26,0,0,1,6.26,238Zm75.16-43.84a6.21,6.21,0,0,1,2.41.48L156.58,225l68.89-28.71V15.66L159,43.36a6.21,6.21,0,0,1-4.82,0L81.42,13,12.53,41.76V222.35L79,194.64A6.21,6.21,0,0,1,81.42,194.16Z" /><rect class="cls-1" x="75.16" y="12.53" width="12.53" height="187.89" /><rect class="cls-1" x="150.32" y="37.58" width="12.53" height="187.89" /><circle class="cls-2" cx="119" cy="121" r="22" /></g></g></svg>
</g>
<g id="clock">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs><style>
                                                                                        .cls-1 {
                                                                                            fill: #9aaac1;
                                                                                        }

                                                                                        .cls-2 {
                                                                                            fill: #f90;
                                                                                        }
                </style></defs>
<title>Asset 14</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path id="_Compound_Path_" data-name="&lt;Compound Path&gt;" class="cls-1" d="M120,0A120,120,0,1,0,240,120,120.14,120.14,0,0,0,120,0Zm0,227A107,107,0,1,1,227,120,107.12,107.12,0,0,1,120,227Z" /><path id="_Path_" data-name="&lt;Path&gt;" class="cls-2" d="M191.28,128.6H111V48a5.73,5.73,0,1,0-11.46,0v86.33a5.73,5.73,0,0,0,5.73,5.73h86a5.73,5.73,0,0,0,0-11.46Z" /></g></g></svg>
</g>
<g id="google-map">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 218.01 217.96"><defs><style>
                                                                                              .cls-1 {
                                                                                                  fill: #f90;
                                                                                              }

                                                                                              .cls-2 {
                                                                                                  fill: #9aaac1;
                                                                                              }
                </style></defs>
<title>Asset 37</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M48,37.91A28.95,28.95,0,1,0,48,95.8C73.35,95.8,77.66,73,75.27,61.74H48V72.85h15.7A15.76,15.76,0,0,1,48,84.4a17.47,17.47,0,0,1,0-34.94A17.12,17.12,0,0,1,59.28,53.6l8.14-8.14A28.62,28.62,0,0,0,48,37.91Z" /><path class="cls-2" d="M161.15,0A56.62,56.62,0,0,0,119,19H20.64A20.68,20.68,0,0,0,.06,39.53V195.3a5,5,0,0,0,0,1.48v.59A20.68,20.68,0,0,0,20.64,218H178.48a20.68,20.68,0,0,0,20.58-20.58v-.44a5,5,0,0,0,0-1.48V101.57c10-13.29,19-26.26,19-44.72A56.92,56.92,0,0,0,161.15,0Zm0,9.48a47.31,47.31,0,0,1,47.38,47.38c0,16.18-8,27-18.51,40.87C180,111,168.15,127.1,161.15,151.33c-7-24.23-18.82-40.29-28.87-53.6-3.91-5.18-7.57-9.9-10.51-14.66v-.15c-.06-.09-.09-.2-.15-.3a4.58,4.58,0,0,0-1.18-2.07c-4.09-7.2-6.66-14.58-6.66-23.69A47.31,47.31,0,0,1,161.15,9.48Zm-140.52,19H112a56.35,56.35,0,0,0-7.7,28.43,55.36,55.36,0,0,0,6.81,26.36L9.53,184.64V39.53A11.07,11.07,0,0,1,20.64,28.43Zm140.52,9.48a19,19,0,1,0,19,19A19,19,0,0,0,161.15,37.91Zm0,9.48a9.48,9.48,0,1,1-9.48,9.48A9.4,9.4,0,0,1,161.15,47.38Zm-45,44.12c2.67,4,5.44,8,8.44,12,0,.06.11.09.15.15L20,208.33A10.89,10.89,0,0,1,9.68,198Zm14.21,19.84c6.77,9.25,13.53,19.53,18.66,32.87l-25.76-25.76Zm59.23,3.11v70.18l-22.06-21.91a8.83,8.83,0,0,0,.59-1.18,29.57,29.57,0,0,0,1-4.74C173.87,138.67,181.59,125.67,189.58,114.46Zm-73,10.66L189.43,198a10.89,10.89,0,0,1-10.36,10.36l-72.85-72.85Zm-17,17,66.19,66.33H33.37Z" /></g></g></svg>
</g>
<g id="info">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 239.5 239.5"><defs><style>
                                                                                            .cls-1 {
                                                                                                fill: #9aaac1;
                                                                                            }

                                                                                            .cls-2 {
                                                                                                fill: #f90;
                                                                                            }
                </style></defs>
<title>Asset 25</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M119.75,239.5A119.75,119.75,0,1,1,239.5,119.75,119.89,119.89,0,0,1,119.75,239.5Zm0-226.19A106.44,106.44,0,1,0,226.19,119.75,106.57,106.57,0,0,0,119.75,13.31Z" /><rect class="cls-2" x="113.1" y="92.75" width="13.31" height="86.88" /><circle class="cls-2" cx="120.75" cy="60.75" r="11" /></g></g></svg>
</g>
<g id="phone">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 214 214.31"><defs><style>
                                                                                           .cls-1 {
                                                                                               fill: #9aaac1;
                                                                                           }

                                                                                           .cls-2 {
                                                                                               fill: #f90;
                                                                                           }
                </style></defs>
<title>Asset 26</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M169.22,132.76c-4.39-4.57-9.68-7-15.29-7s-10.9,2.4-15.47,7L124.17,147c-1.18-.63-2.35-1.22-3.48-1.81-1.63-.81-3.17-1.58-4.48-2.4-13.39-8.5-25.56-19.59-37.23-33.92A91.65,91.65,0,0,1,66.77,89.56c3.71-3.39,7.15-6.92,10.49-10.31,1.27-1.27,2.53-2.58,3.8-3.84,9.5-9.5,9.5-21.8,0-31.3L68.71,31.76c-1.4-1.4-2.85-2.85-4.21-4.3-2.71-2.8-5.56-5.7-8.5-8.41A21.41,21.41,0,0,0,40.85,12.4C35.33,12.4,30,14.7,25.47,19l-.09.09L10,34.65a33.09,33.09,0,0,0-9.82,21C-.9,68.89,3,81.19,6,89.25,13.3,109,24.25,127.33,40.58,147a212.86,212.86,0,0,0,70.88,55.5c10.4,4.93,24.29,10.77,39.8,11.76.95,0,1.94.09,2.85.09,10.45,0,19.22-3.75,26.1-11.22,0-.09.14-.14.18-.23a102.83,102.83,0,0,1,7.92-8.19c1.94-1.85,3.94-3.8,5.88-5.83,4.48-4.66,6.83-10.09,6.83-15.65s-2.4-11-7-15.51Zm16.19,47.63s0,0,0,0c-1.76,1.9-3.57,3.62-5.52,5.52a118.94,118.94,0,0,0-8.73,9c-4.57,4.89-10,7.19-17,7.19-.68,0-1.4,0-2.08,0-13.43-.86-25.92-6.11-35.28-10.58A200.92,200.92,0,0,1,50,139.23C34.61,120.64,24.29,103.45,17.46,85c-4.21-11.26-5.74-20-5.07-28.32a20.76,20.76,0,0,1,6.24-13.43L34.06,27.82c2.22-2.08,4.57-3.21,6.88-3.21a9.68,9.68,0,0,1,6.6,3.17l.14.14c2.76,2.58,5.38,5.25,8.14,8.1,1.4,1.45,2.85,2.89,4.3,4.39L72.47,52.74c4.79,4.79,4.79,9.23,0,14-1.31,1.31-2.58,2.62-3.89,3.89-3.8,3.89-7.42,7.51-11.35,11-.09.09-.18.14-.23.23-3.89,3.89-3.17,7.69-2.35,10.27l.14.41c3.21,7.78,7.73,15.11,14.61,23.84l0,0C81.92,131.85,95.08,143.84,109.6,153a61.76,61.76,0,0,0,5.56,3c1.63.81,3.17,1.58,4.48,2.4.18.09.36.23.54.32a9.81,9.81,0,0,0,4.48,1.13,9.67,9.67,0,0,0,6.88-3.12L147,141.31c1.54-1.54,4-3.39,6.83-3.39a9.21,9.21,0,0,1,6.51,3.3l.09.09,24.92,24.92C190,170.84,190,175.59,185.41,180.39Z" /><path class="cls-2" d="M115.66,51a58.21,58.21,0,0,1,47.4,47.4,6.07,6.07,0,0,0,6,5.07,8.08,8.08,0,0,0,1-.09,6.11,6.11,0,0,0,5-7.06,70.39,70.39,0,0,0-57.35-57.35,6.14,6.14,0,0,0-7.06,5A6,6,0,0,0,115.66,51Z" /><path class="cls-2" d="M213.91,94.54A115.9,115.9,0,0,0,119.46.09a6.1,6.1,0,1,0-2,12,103.53,103.53,0,0,1,84.4,84.4,6.07,6.07,0,0,0,6,5.07,8.08,8.08,0,0,0,1-.09A6,6,0,0,0,213.91,94.54Z" /></g></g></svg>
</g>
<g id="envelope">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 224 186.67">
<defs>
<style>
                            .cls-1 {
                                fill: #f90;
                            }

                            .cls-2 {
                                fill: #9aaac1;
                            }
                        </style>
</defs>
<title>Asset 16</title>
<g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><polygon class="cls-1" points="112 100.55 3.07 36.48 9.38 25.75 112 86.11 214.62 25.75 220.93 36.48 112 100.55" /><path class="cls-2" d="M192.89,186.67H31.11A31.15,31.15,0,0,1,0,155.56V31.11A31.15,31.15,0,0,1,31.11,0H192.89A31.15,31.15,0,0,1,224,31.11V155.56A31.15,31.15,0,0,1,192.89,186.67ZM31.11,12.44A18.69,18.69,0,0,0,12.44,31.11V155.56a18.69,18.69,0,0,0,18.67,18.67H192.89a18.69,18.69,0,0,0,18.67-18.67V31.11a18.69,18.69,0,0,0-18.67-18.67Z" /></g></g>
</svg>
</g>
<g id="appointments">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202.42 208.05"><defs><style>.a{fill:#9aaac1;}.b{fill:#f90;}</style></defs><title>calendar</title><path class="a" d="M3649.1,1990H3502.9a28.15,28.15,0,0,1-28.11-28.11V1827a28.15,28.15,0,0,1,28.11-28.11H3649.1a28.15,28.15,0,0,1,28.11,28.11v134.95A28.15,28.15,0,0,1,3649.1,1990ZM3502.9,1810.09A16.89,16.89,0,0,0,3486,1827v134.95a16.89,16.89,0,0,0,16.87,16.87H3649.1a16.89,16.89,0,0,0,16.87-16.87V1827a16.89,16.89,0,0,0-16.87-16.87H3502.9Z" transform="translate(-3474.79 -1781.98)" /><rect class="a" x="11.25" y="61.85" width="191.18" height="11.25" /><line class="a" x1="50.61" x2="50.61" y2="39.36" /><rect class="a" x="44.98" width="11.25" height="39.36" /><line class="a" x1="151.82" x2="151.82" y2="39.36" /><rect class="a" x="146.19" width="11.25" height="39.36" /><path class="a" d="M3531,1911.3h-22.49a11.26,11.26,0,0,1-11.25-11.25v-22.49a11.26,11.26,0,0,1,11.25-11.25H3531a11.26,11.26,0,0,1,11.25,11.25v22.49A11.26,11.26,0,0,1,3531,1911.3Zm-22.49-33.74v22.49H3531v-22.49h-22.49Z" transform="translate(-3474.79 -1781.98)" /><path class="b" d="M3587.25,1911.3h-22.49a11.26,11.26,0,0,1-11.25-11.25v-22.49a11.26,11.26,0,0,1,11.25-11.25h22.49a11.26,11.26,0,0,1,11.25,11.25v22.49A11.26,11.26,0,0,1,3587.25,1911.3Zm-22.49-33.74v22.49h22.5v-22.49h-22.49Z" transform="translate(-3474.79 -1781.98)" /><path class="a" d="M3643.47,1911.3H3621a11.26,11.26,0,0,1-11.25-11.25v-22.49a11.26,11.26,0,0,1,11.25-11.25h22.49a11.26,11.26,0,0,1,11.25,11.25v22.49A11.26,11.26,0,0,1,3643.47,1911.3ZM3621,1877.57v22.49h22.5v-22.49H3621Z" transform="translate(-3474.79 -1781.98)" /><path class="a" d="M3531,1967.53h-22.49a11.26,11.26,0,0,1-11.25-11.25v-22.49a11.26,11.26,0,0,1,11.25-11.25H3531a11.26,11.26,0,0,1,11.25,11.25v22.49A11.26,11.26,0,0,1,3531,1967.53Zm-22.49-33.74v22.49H3531v-22.49h-22.49Z" transform="translate(-3474.79 -1781.98)" /><path class="a" d="M3587.25,1967.53h-22.49a11.26,11.26,0,0,1-11.25-11.25v-22.49a11.26,11.26,0,0,1,11.25-11.25h22.49a11.26,11.26,0,0,1,11.25,11.25v22.49A11.26,11.26,0,0,1,3587.25,1967.53Zm-22.49-33.74v22.49h22.5v-22.49h-22.49Z" transform="translate(-3474.79 -1781.98)" /><path class="a" d="M3643.47,1967.53H3621a11.26,11.26,0,0,1-11.25-11.25v-22.49a11.26,11.26,0,0,1,11.25-11.25h22.49a11.26,11.26,0,0,1,11.25,11.25v22.49A11.26,11.26,0,0,1,3643.47,1967.53ZM3621,1933.79v22.49h22.5v-22.49H3621Z" transform="translate(-3474.79 -1781.98)" /></svg>
</g>
<g id="password">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 220 146.67"><defs><style>.a{fill:#9aaac1;}.b{fill:#f90;}</style></defs><title>password</title><path class="a" d="M2301,273.33c-60.59,0-110-59-110-73.33s49.41-73.33,110-73.33,110,59,110,73.33S2361.59,273.33,2301,273.33Zm0-134.44c-53.55,0-96.53,53.42-97.79,61.35,1.26,7.46,44.24,60.88,97.79,60.88s96.53-53.42,97.79-61.35C2397.53,192.31,2354.55,138.89,2301,138.89Z" transform="translate(-2191 -126.67)" /><path class="b" d="M2301,242.78A42.78,42.78,0,1,1,2343.78,200,42.83,42.83,0,0,1,2301,242.78Z" transform="translate(-2191 -126.67)" /></svg>
</g>
<g id="lock">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 190 247"><defs><style>.a{fill:#f90;}.b{fill:#9aaac1;}</style></defs><title>lock</title><path class="a" d="M681.33,1023H554.67V972.33a63.33,63.33,0,0,1,126.67,0V1023Zm-114-12.67H668.67v-38a50.67,50.67,0,0,0-101.33,0v38Z" transform="translate(-523 -909)" /><path class="b" d="M681.33,1156H554.67A31.7,31.7,0,0,1,523,1124.33V1042a31.7,31.7,0,0,1,31.67-31.67H681.33A31.7,31.7,0,0,1,713,1042v82.33A31.7,31.7,0,0,1,681.33,1156ZM554.67,1023a19,19,0,0,0-19,19v82.33a19,19,0,0,0,19,19H681.33a19,19,0,0,0,19-19V1042a19,19,0,0,0-19-19H554.67Z" transform="translate(-523 -909)" /></svg>
</g>
<g id="key">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128.57 195.99">
<defs>
<style>
                            .k-1,
                            .k-2,
                            .k-3,
                            .k-4 {
                            fill: none;
                            stroke-miterlimit: 10;
                            stroke-width: 8px;
                            }

                            .k-1,
                            .k-3 {
                            stroke: #9eabc2;
                            }

                            .k-2 {
                            stroke: #f89e1f;
                            }

                            .k-2,
                            .k-3 {
                            stroke-linecap: round;
                            }

                            .k-4 {
                            stroke: #f89f20;
                            }

                        </style>
</defs>
<title>key</title>
<circle class="k-1" cx="50.39" cy="69.53" r="41.77" transform="translate(-28.62 2.9) rotate(-24.12)" />
<line class="k-2" x1="96.64" y1="150.44" x2="114.34" y2="142.52" />
<line class="k-3" x1="63.81" y1="86.05" x2="111.23" y2="191.99" />
<line class="k-2" x1="124.57" y1="157.37" x2="110.08" y2="124.99" />
<circle class="k-4" cx="50.39" cy="69.53" r="30.54" transform="translate(-28.62 2.9) rotate(-24.12)" />
</svg>
</g>
<g id="star">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246 235.88"><title>star-outline</title><path class="fill-current" d="M3203.78,738.94a19.82,19.82,0,0,1-9.92-2.69L3140,705.19l-53.86,31.06A19.81,19.81,0,0,1,3056.86,715l12.9-60.82-46.19-41.63a19.81,19.81,0,0,1,11.18-34.41l61.84-6.53,25.32-56.79a19.81,19.81,0,0,1,36.18,0l25.32,56.79,61.84,6.53a19.81,19.81,0,0,1,11.18,34.41l-46.19,41.63,12.9,60.82A19.89,19.89,0,0,1,3203.78,738.94ZM3140,690.47a6.83,6.83,0,0,1,3.42.91l57.28,33a6.14,6.14,0,0,0,9.07-6.59l-13.71-64.68a6.84,6.84,0,0,1,2.11-6.49l49.11-44.27a6.14,6.14,0,0,0-3.46-10.67l-65.76-6.95a6.83,6.83,0,0,1-5.52-4l-26.92-60.39h0a6.15,6.15,0,0,0-11.22,0l-26.92,60.39a6.83,6.83,0,0,1-5.52,4l-65.76,6.95a6.14,6.14,0,0,0-3.46,10.67l49.11,44.27a6.84,6.84,0,0,1,2.11,6.49l-13.71,64.68a6.14,6.14,0,0,0,9.08,6.59l57.27-33A6.83,6.83,0,0,1,3140,690.47Z" transform="translate(-3017 -503.06)" /></svg>
</g>
<g id="gender">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 371.08 384.26">
<defs>
<style>
                            .g-1,
                            .g-3 {
                            fill: none;
                            stroke-miterlimit: 10;
                            stroke-width: 16px;
                            }

                            .g-1 {
                            stroke: #f99d1c;
                            }

                            .g-2 {
                            fill: #f99d1c;
                            }

                            .g-3 {
                            stroke: #9dabc2;
                            }

                            .g-4 {
                            fill: #9dabc2;
                            }

                        </style>
</defs>
<title>gender</title>
<circle class="g-1" cx="105.17" cy="162.33" r="97.17" />
<rect class="g-2" x="111.37" y="305.3" width="16.89" height="78.17" transform="translate(449.55 216.47) rotate(90)" />
<rect class="g-2" x="111.37" y="274.65" width="16.89" height="117.71" transform="translate(224.99 658.92) rotate(180)" />
<circle class="g-3" cx="225.08" cy="170.21" r="97.17" transform="translate(-69.08 200.91) rotate(-45)" />
<rect class="g-4" x="332.63" y="-1.16" width="13.6" height="113.93" transform="translate(124.24 -231.77) rotate(45)" />
<rect class="g-4" x="331.17" y="-29.56" width="16.89" height="92.21" transform="translate(341.52 -331.17) rotate(90)" />
<rect class="g-4" x="354.18" y="15.89" width="16.89" height="78.17" />
</svg>
</g>
<g id="gallery">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 207.78"><defs><style>
                                                                                                                       .a {
                                                                                                                           fill: #9aaac1;
                                                                                                                       }

                                                                                                                       .b {
                                                                                                                           fill: #f90;
                                                                                                                           fill-rule: evenodd;
                                                                                                                       }
                </style></defs>
<title>gallery</title>
<path class="a" d="M2200,2264.69v113a31.26,31.26,0,0,0,31.24,31.24h193.52a31.26,31.26,0,0,0,31.24-31.24v-113a29.74,29.74,0,0,0-29.73-29.73h-41.59l-1-4.34a38,38,0,0,0-37.2-29.52h-37a38.06,38.06,0,0,0-37.2,29.52l-1,4.34h-41.53A29.78,29.78,0,0,0,2200,2264.69Zm76.38-16.93a6.37,6.37,0,0,0,6.22-5l2.14-9.3a25.27,25.27,0,0,1,24.71-19.59h37a25.27,25.27,0,0,1,24.71,19.59l2.14,9.3a6.42,6.42,0,0,0,6.22,5h46.65a16.92,16.92,0,0,1,16.93,16.93v113a18.44,18.44,0,0,1-18.44,18.44H2231.24a18.44,18.44,0,0,1-18.44-18.44v-113a16.92,16.92,0,0,1,16.93-16.93h46.65Z" transform="translate(-2200 -2201.11)" />
<circle class="a" cx="43.31" cy="73.98" r="8.57" />
<path class="a" d="M2328,2388.1a70.4,70.4,0,1,0-70.4-70.4A70.51,70.51,0,0,0,2328,2388.1Zm0-129a58.62,58.62,0,1,1-58.62,58.62A58.71,58.71,0,0,1,2328,2259.08Z" transform="translate(-2200 -2201.11)" />
<path class="b" d="M2336.72,2309.46H2360v17.09h-23.28v24.61h-16.63v-24.61h-24v-17.09h24v-23.93h16.63v23.93Z" transform="translate(-2200 -2201.11)" /></svg>
</g>
<g id="services">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 271.49 223.7"><defs><style>.service-1,.service-2{fill:none;stroke-miterlimit:10;stroke-width:13.5px;}.service-1{stroke:#f90;stroke-linecap:round;}.service-2{stroke:#9aaac1;}</style></defs><title>icon-services</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><line class="service-1" x1="86.65" y1="127.81" x2="184.84" y2="127.81" /><line class="service-1" x1="135.74" y1="78.72" x2="135.74" y2="176.91" /><rect class="service-2" x="6.75" y="38.68" width="257.99" height="178.27" rx="11.35" ry="11.35" /><path class="service-2" d="M63.1,44.68V37.32A30.57,30.57,0,0,1,93.66,6.75h76.85a30.57,30.57,0,0,1,30.57,30.57v7.36" /></g></g></svg>
</g>
<g id="experience">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 214.04 226.63"><defs><style>
                                                                                                                             .a {
                                                                                                                                 fill: #f90;
                                                                                                                             }

                                                                                                                             .b {
                                                                                                                                 fill: #9aaac1;
                                                                                                                             }
                </style></defs>
<title>experience</title>
<path class="a" d="M4068.54,1535.25h-25.18v-12.59h25.18a18.91,18.91,0,0,0,18.89-18.89v-79.23l-59.26-59.26h-60.35a18.91,18.91,0,0,0-18.89,18.89V1403h-12.59v-18.89a31.51,31.51,0,0,1,31.48-31.48h60.35a12.68,12.68,0,0,1,8.9,3.69l59.26,59.26a12.68,12.68,0,0,1,3.69,8.9v79.23A31.51,31.51,0,0,1,4068.54,1535.25Z" transform="translate(-3885.98 -1352.68)" />
<path class="a" d="M4090.58,1428.23H4056a31.51,31.51,0,0,1-31.48-31.48v-34.62h12.59v34.62a18.91,18.91,0,0,0,18.89,18.89h34.62v12.59Z" transform="translate(-3885.98 -1352.68)" />
<path class="b" d="M4018.18,1579.32H3917.46a31.51,31.51,0,0,1-31.48-31.48V1428.23a31.51,31.51,0,0,1,31.48-31.48h60.35a12.68,12.68,0,0,1,8.9,3.69L4046,1459.7a12.68,12.68,0,0,1,3.69,8.9v79.23A31.51,31.51,0,0,1,4018.18,1579.32Zm-100.73-170a18.91,18.91,0,0,0-18.89,18.89v119.61a18.91,18.91,0,0,0,18.89,18.89h100.73a18.91,18.91,0,0,0,18.89-18.89v-79.23l-59.26-59.26h-60.35Z" transform="translate(-3885.98 -1352.68)" />
<path class="b" d="M4040.21,1472.3h-34.62a31.51,31.51,0,0,1-31.48-31.48v-34.62h12.59v34.62a18.91,18.91,0,0,0,18.89,18.89h34.62v12.59Z" transform="translate(-3885.98 -1352.68)" /></svg>
</g>
<g id="awards">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 229.19 268"><defs><style>
                                                                                                                       .a {
                                                                                                                           fill: #f90;
                                                                                                                       }

                                                                                                                       .b {
                                                                                                                           fill: #9aaac1;
                                                                                                                       }
                </style></defs>
<title>awards</title>
<path class="a" d="M181.21,2278.75a4.13,4.13,0,0,1-4.07-4.83l3.41-19.89L166.11,2240a4.13,4.13,0,0,1,2.29-7l20-2.9,8.93-18.1a4.13,4.13,0,0,1,7.41,0l8.93,18.09,20,2.9a4.13,4.13,0,0,1,2.29,7L221.44,2254l3.41,19.89a4.13,4.13,0,0,1-4.07,4.83,4.15,4.15,0,0,1-1.92-.47L201,2268.89l-17.86,9.39A4.14,4.14,0,0,1,181.21,2278.75Zm13.59-43.14a4.13,4.13,0,0,1-3.11,2.26l-13.84,2,10,9.76a4.13,4.13,0,0,1,1.19,3.66l-2.36,13.78,12.38-6.51a4.13,4.13,0,0,1,3.84,0l12.38,6.51-2.36-13.78a4.13,4.13,0,0,1,1.19-3.66l10-9.76-13.84-2a4.13,4.13,0,0,1-3.11-2.26L201,2223.07Z" transform="translate(-85.41 -2171)" />
<path class="b" d="M129.61,2439a5.2,5.2,0,0,1-5.19-5.19V2419a17.71,17.71,0,0,1,17.69-17.69h12.66v-29.74a5.17,5.17,0,0,1,4-5l0.14,0a29.52,29.52,0,0,0,22.8-31.67l-0.06-.63-0.59-.24c-13.55-5.57-25.89-17.23-35.7-33.73a132.81,132.81,0,0,1-8.38-16.8l-0.14-.35-0.33-.18a100.17,100.17,0,0,1-50.85-71.45,18.25,18.25,0,0,1,4.13-14.77,18.49,18.49,0,0,1,14.11-6.52h19.94v-7A12.2,12.2,0,0,1,136,2171H264a12.2,12.2,0,0,1,12.19,12.19v7h19.93a18.49,18.49,0,0,1,14.11,6.52,18.25,18.25,0,0,1,4.13,14.77,100.18,100.18,0,0,1-50.84,71.45l-0.33.18-0.14.35a132.9,132.9,0,0,1-8.38,16.8c-9.65,16.24-21.79,27.81-35.1,33.47l-0.57.24-0.07.62a29.48,29.48,0,0,0,22.85,32,5.19,5.19,0,0,1,4.06,5.06v29.74h12.66A17.71,17.71,0,0,1,276.18,2419v14.8A5.2,5.2,0,0,1,271,2439H129.61Zm12.5-27.31a7.32,7.32,0,0,0-7.31,7.31v9.61h131V2419a7.32,7.32,0,0,0-7.31-7.31H142.11Zm23-10.38h70.29v-24.55H165.15v24.55Zm27.07-63a39.71,39.71,0,0,1-6.28,20.9,40.34,40.34,0,0,1-4.11,5.38l-1.61,1.77h40.24l-1.61-1.77a40,40,0,0,1-10.46-26.36l0-1.21-1.2.18a47.91,47.91,0,0,1-13.73.08l-1.19-.16ZM136,2181.38a1.81,1.81,0,0,0-1.81,1.81v29.91c0,31,7.13,60,20.06,81.82,12.44,20.93,28.68,32.45,45.74,32.45s33.3-11.52,45.73-32.45c12.94-21.77,20.06-50.83,20.06-81.82v-29.91a1.81,1.81,0,0,0-1.81-1.81H136Zm-32.12,19.15a8.12,8.12,0,0,0-6.2,2.87,7.78,7.78,0,0,0-1.79,6.38,89,89,0,0,0,32.87,55.63l2.53,2-0.85-3.11a194.46,194.46,0,0,1-6.63-51.2v-12.56H103.88Zm172.3,12.56a194.5,194.5,0,0,1-6.63,51.2l-0.85,3.11,2.53-2a89.05,89.05,0,0,0,32.87-55.63,7.78,7.78,0,0,0-1.8-6.38,8.12,8.12,0,0,0-6.2-2.87H276.18v12.56Z" transform="translate(-85.41 -2171)" /></svg>
</g>
<g id="education">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202.12 202.08"><defs><style>
                                                                                                                             .a {
                                                                                                                                 fill: #9aaac1;
                                                                                                                             }

                                                                                                                             .b {
                                                                                                                                 fill: #f90;
                                                                                                                             }
                </style></defs>
<title>education</title>
<path class="a" d="M987.94,2402a40.92,40.92,0,0,1-30.4-68.34l0.18-.21c0.25-.31,1.7-1.77,39-39.07l82.23-82.24h0.17l0.18-.35a40.94,40.94,0,0,1,57.82,58l-23.74,23.74,30.17,30.17a5.12,5.12,0,0,1-2.61,8.63l-17.77,3.55-3.55,17.77a5.09,5.09,0,0,1-5,4.11h0a5,5,0,0,1-3.58-1.5l-11-11-5.83,17.48a5.11,5.11,0,0,1-8.47,2L1063.92,2343l-47,47.05A40.66,40.66,0,0,1,987.94,2402Zm0-71.64a30.71,30.71,0,1,0,19.13,54.71l0.47-.37-0.19-.57a27.2,27.2,0,0,0-20.45-18,5.11,5.11,0,0,1-2.61-8.63l21.43-21.43-0.87-.58A30.45,30.45,0,0,0,988,2330.4Zm9.45,28.46,1.06,0.53a37.15,37.15,0,0,1,15.68,15l0.82,1.45,0.74-1.6a30.83,30.83,0,0,0-2.17-30l-0.58-.87Zm14.24-31.12,0.79,0.59c0.79,0.59,1.57,1.22,2.32,1.87l0.08,0.06a41.72,41.72,0,0,1,8.57,10.41,40.87,40.87,0,0,1,5.46,20.45l0,2.51,37.91-37.92-0.12-.47a59,59,0,0,0-20-31.36l-0.6-.49Zm59.5,8.05,15.86,15.86,4.83-14.48-11-11ZM1088,2318.9l23.4,23.4,2.35-11.74a5.1,5.1,0,0,1,4-4l11.74-2.35-23.4-23.4Zm-100.12,1.28a40.92,40.92,0,0,1,13.77,2.36l0.51,0.18,35.07-35.08-1-.54a59.6,59.6,0,0,0-12.44-4.7l-0.47-.12-37.9,37.91Zm43.65-46.14,1.27,0.46a69.31,69.31,0,0,1,41.7,41.7l0.46,1.27,17.09-17.09-0.12-.47a59.37,59.37,0,0,0-42.83-42.82l-0.47-.12Zm47-13.26,0.71,0.6a69.57,69.57,0,0,1,20.55,29.48l0.46,1.27,29.52-29.52a30.72,30.72,0,0,0-4.78-47.34l-0.58-.39Zm29.52-50.59a30.5,30.5,0,0,0-21.71,9l-29.53,29.53,1.27,0.46a69.78,69.78,0,0,1,11.38,5.32l0.57,0.33,44.05-44.08-1.7-.24A31.08,31.08,0,0,0,1108.14,2210.19Z" transform="translate(-946.94 -2199.96)" />
<path class="b" d="M1143.54,2323.73l-37.26-37.28-5.94,5.68-0.46-1.27c-4.14-11.45-10.73-23.25-24.43-32.67,0,0-14.56-11.13-30.38-12.13L1012,2279.15c2.12,0.06,19.83,4.9,32.64,13.29,6.5,4.25,19.66,21,22,32.8l0.12,0.47-10,10c0.71,0.47,28.92,29,28.92,29a5.11,5.11,0,0,0,8.47-2l5.83-17.48,11,11a5.11,5.11,0,0,0,8.63-2.61l3.55-17.77,17.77-3.55A5.12,5.12,0,0,0,1143.54,2323.73Zm-110.69-49.23-1.27-.46,17.09-17.09,0.47,0.12a59.37,59.37,0,0,1,42.83,42.82l0.12,0.47L1075,2317.46l-0.46-1.27A69.31,69.31,0,0,0,1032.85,2274.49Zm54.17,77.16-15.86-15.86,9.66-9.66,11,11Zm30.79-25.1a5.1,5.1,0,0,0-4,4l-2.35,11.74-23.4-23.4,18.1-18.1,23.4,23.4Z" transform="translate(-946.94 -2199.96)" /></svg>
</g>
<g id="affiliations">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 194.64"><defs><style>
                                                                                                                       .a {
                                                                                                                           fill: #9aaac1;
                                                                                                                       }

                                                                                                                       .b {
                                                                                                                           fill: #f90;
                                                                                                                       }
                </style></defs>
<title>affiliations</title>
<path class="a" d="M735.76,2203.68H512.24A20.26,20.26,0,0,0,492,2223.91v154.17a20.26,20.26,0,0,0,20.24,20.24H735.76A20.26,20.26,0,0,0,756,2378.09V2223.91A20.26,20.26,0,0,0,735.76,2203.68Zm-231.18,20.24a7.66,7.66,0,0,1,7.65-7.65H735.76a7.66,7.66,0,0,1,7.65,7.65v154.17a7.66,7.66,0,0,1-7.65,7.65H512.24a7.66,7.66,0,0,1-7.65-7.65V2223.91Z" transform="translate(-492 -2203.68)" />
<path class="a" d="M624,2272.61h43.35a6.29,6.29,0,1,0,0-12.58H624A6.29,6.29,0,0,0,624,2272.61Z" transform="translate(-492 -2203.68)" />
<path class="a" d="M684.69,2272.61H689a6.29,6.29,0,0,0,0-12.58h-4.33A6.29,6.29,0,0,0,684.69,2272.61Z" transform="translate(-492 -2203.68)" />
<path class="a" d="M624,2346.3h4.33a6.29,6.29,0,0,0,0-12.58H624A6.29,6.29,0,0,0,624,2346.3Z" transform="translate(-492 -2203.68)" />
<path class="a" d="M654.34,2333.72h-8.67a6.29,6.29,0,1,0,0,12.58h8.67A6.29,6.29,0,1,0,654.34,2333.72Z" transform="translate(-492 -2203.68)" />
<path class="a" d="M676,2333.72h-4.33a6.29,6.29,0,0,0,0,12.58H676A6.29,6.29,0,0,0,676,2333.72Z" transform="translate(-492 -2203.68)" />
<path class="a" d="M702,2333.72h-8.67a6.29,6.29,0,0,0,0,12.58H702A6.29,6.29,0,1,0,702,2333.72Z" transform="translate(-492 -2203.68)" />
<path class="a" d="M719.35,2333.78a6.33,6.33,0,0,0-4.47,1.81,6.47,6.47,0,0,0-1.8,4.43,6.57,6.57,0,0,0,1.86,4.5,6.49,6.49,0,0,0,4.43,1.8,6.6,6.6,0,0,0,4.5-1.87,6.35,6.35,0,0,0-.06-8.9A6.42,6.42,0,0,0,719.35,2333.78Z" transform="translate(-492 -2203.68)" />
<path class="a" d="M624,2298.62h95.37a6.29,6.29,0,1,0,0-12.58H624A6.29,6.29,0,1,0,624,2298.62Z" transform="translate(-492 -2203.68)" />
<path class="a" d="M624,2324.63h95.37a6.29,6.29,0,1,0,0-12.58H624A6.29,6.29,0,1,0,624,2324.63Z" transform="translate(-492 -2203.68)" />
<path class="b" d="M583.94,2304.25c0.59-1.2,1.13-2.44,1.6-3.73,3.7-1.78,6.22-6,6.61-11.13,0.3-4.66-1.33-9-4.27-11.37-0.84-11.94-4.56-27.49-25.85-27.49-9.45,0-16.38,3.09-20.59,9.18-3.91,5.66-4.89,13.07-5.26,18.31-2.95,2.41-4.58,6.72-4.27,11.41,0.38,5,3,9.31,6.6,11.08,0.47,1.29,1,2.53,1.61,3.73-18.81,5.67-28.35,17.12-28.35,34.1a4.65,4.65,0,0,0,2.71,4.22c11.61,5.3,29.38,8.47,47.54,8.47s35.93-3.17,47.54-8.47a4.65,4.65,0,0,0,2.71-4.22C612.29,2321.37,602.75,2309.92,583.94,2304.25ZM562,2341.76c-15.23,0-30.42-2.4-40.84-6.43,1.08-11.67,8.83-19,24.23-22.92,4.8,5.62,10.83,9.11,16.61,9.11s11.81-3.49,16.61-9.11c15.39,3.93,23.14,11.24,24.23,22.91C592.45,2339.37,577.27,2341.76,562,2341.76ZM542,2285.29l3.2-.79,0.15-3.47c0.7-16.06,4.76-21.21,16.72-21.21s16,5.15,16.72,21.21l0.15,3.47,3.2,0.79a5.1,5.1,0,0,1,.8,3.45,5.19,5.19,0,0,1-1.29,3.36l-3.17.06-1,3.25c-2.43,8.13-9.22,16.84-15.44,16.84-5,0-12.42-6.77-15.44-16.84l-1-3.25-3.17-.06A6.13,6.13,0,0,1,542,2285.29Z" transform="translate(-492 -2203.68)" /></svg>
</g>
<g id="languages">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240 240"><defs><style>
                                                                                                                 .a {
                                                                                                                     fill: #9aaac1;
                                                                                                                 }

                                                                                                                 .b {
                                                                                                                     fill: #f90;
                                                                                                                 }
                </style></defs>
<title>languages</title>
<path class="a" d="M1472,2417a120,120,0,1,1,120-120A120.14,120.14,0,0,1,1472,2417Zm44-70.17a170.14,170.14,0,0,1-27.75,54.1l-3,4,4.95-.84a108.19,108.19,0,0,0,69.85-43.45l1.5-2.06-2.37-.94a234.1,234.1,0,0,0-40.86-12.16l-1.75-.34Zm-90.2-1.36a232.78,232.78,0,0,0-40.84,12.16l-2.36.94,1.49,2.06a108.1,108.1,0,0,0,69.84,43.45l4.95,0.84-3-4a170.16,170.16,0,0,1-27.75-54.1l-0.52-1.71Zm46.24-4.37a241.22,241.22,0,0,0-30.82,2l-2.35.3,0.72,2.26a158.7,158.7,0,0,0,31,55.35l1.5,1.75,1.5-1.75a158.89,158.89,0,0,0,31-55.35l0.72-2.26-2.35-.3A241.49,241.49,0,0,0,1472,2341.1Zm-96.32-94.29a108.06,108.06,0,0,0,0,100.43l0.83,1.6,1.67-.69a242.48,242.48,0,0,1,44.57-13.61l2-.39-0.41-2a170.65,170.65,0,0,1,0-70.27l0.41-1.95-2-.39a244.72,244.72,0,0,1-44.56-13.69l-1.67-.69Zm190.15-.93a243.54,243.54,0,0,1-44.57,13.69l-2,.39,0.41,1.95a170.3,170.3,0,0,1,0,70.26l-0.41,2,2,0.39a244.72,244.72,0,0,1,44.59,13.61l1.67,0.68,0.83-1.6a108,108,0,0,0,0-100.42l-0.84-1.6Zm-93.83,84a253,253,0,0,1,34.26,2.34l1.81,0.25,0.38-1.79a159.27,159.27,0,0,0,0-67.2l-0.38-1.79-1.82.25a225.73,225.73,0,0,1-68.58,0l-1.82-.25-0.38,1.79a159.26,159.26,0,0,0,0,67.2l0.38,1.79,1.81-.25A253,253,0,0,1,1472,2329.86ZM1470.5,2193a158.72,158.72,0,0,0-31,55.35l-0.72,2.26,2.35,0.3a240.66,240.66,0,0,0,61.66,0l2.35-.3-0.72-2.26a158.7,158.7,0,0,0-31-55.35l-1.5-1.75Zm-16.64-3.09a108.1,108.1,0,0,0-69.82,43.45l-1.49,2.06,2.36,0.94a232.78,232.78,0,0,0,40.84,12.16l1.75,0.34,0.52-1.71a170.12,170.12,0,0,1,27.73-54.1l3-4Zm34.35,3.15a170.14,170.14,0,0,1,27.75,54.1l0.52,1.71,1.75-.34a232.57,232.57,0,0,0,40.86-12.16l2.36-.94-1.49-2.06a108.19,108.19,0,0,0-69.85-43.45l-4.95-.84Z" transform="translate(-1352 -2177)" />
<circle class="b" cx="79.51" cy="79.51" r="14.81" />
<circle class="b" cx="161.48" cy="163.46" r="14.81" /></svg>
</g>
<g id="twitter">
 

<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
<g>
<g>
<path class="fill-current" d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411
      c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513
      c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101
      c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104
      c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194
      c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485
      c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z" />
</g>
</svg>
</g>
<g id="facebook">


<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve">
<g>
<path class="fill-current" d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803
    c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654
    c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246
    c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z" />
</g>
</svg>
</g>
<g id="facebook-square">


<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60.734 60.733" style="enable-background:new 0 0 60.734 60.733;" xml:space="preserve">
<g>
<path class="fill-current" d="M57.378,0.001H3.352C1.502,0.001,0,1.5,0,3.353v54.026c0,1.853,1.502,3.354,3.352,3.354h29.086V37.214h-7.914v-9.167h7.914
    v-6.76c0-7.843,4.789-12.116,11.787-12.116c3.355,0,6.232,0.251,7.071,0.36v8.198l-4.854,0.002c-3.805,0-4.539,1.809-4.539,4.462
    v5.851h9.078l-1.187,9.166h-7.892v23.52h15.475c1.852,0,3.355-1.503,3.355-3.351V3.351C60.731,1.5,59.23,0.001,57.378,0.001z" />
</g>
</svg>
</g>
<g id="google-plus">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path class="fill-current" d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z" fill-rule="evenodd" clip-rule="evenodd" /></svg>
</g>
 <g id="google-play">


<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
<g>
<path class="fill-current" d="M99.617,8.057C87.953,0.52,73.943-1.758,60.802,1.344l230.932,230.933l74.846-74.846L99.617,8.057z" />
</g>
</g>
<g>
<g>
<path class="fill-current" d="M32.139,20.116c-6.441,8.563-10.148,19.077-10.148,30.199v411.358c0,11.123,3.708,21.636,10.148,30.199l235.877-235.877
      L32.139,20.116z" />
</g>
</g>
<g>
<g>
<path class="fill-current" d="M464.261,212.087l-67.266-37.637l-81.544,81.544l81.548,81.548l67.273-37.64c16.117-9.03,25.738-25.442,25.738-43.908
      S480.389,221.117,464.261,212.087z" />
</g>
</g>
<g>
<g>
<path class="fill-current" d="M291.733,279.711L60.815,510.629c3.786,0.891,7.639,1.371,11.492,1.371c9.522,0,19.011-2.708,27.31-8.07l266.965-149.372
      L291.733,279.711z" />
</g>
</g>
</svg>
</g>
<g id="linkedin">


<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve">
<g id="XMLID_801_">
<path class="fill-current" d="M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73
    C77.16,101.969,74.922,99.73,72.16,99.73z" />
<path class="fill-current" d="M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4
    c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z" />
<path class="fill-current" d="M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599
    c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319
    c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995
    C310,145.43,300.549,94.761,230.454,94.761z" />
</g>
</svg>
</g>
<g id="apple">


<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="90px" height="90px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
<g>
<path class="fill-current" d="M49.645,6.817C52.877,3.017,58.34,0.19,62.848,0c0.575,5.279-1.541,10.565-4.669,14.374
    c-3.133,3.802-8.261,6.764-13.294,6.369C44.201,15.578,46.736,10.192,49.645,6.817z M75.291,78.827
    c-3.741,5.485-7.61,10.938-13.718,11.053c-6.012,0.114-7.938-3.571-14.799-3.571c-6.866,0-9.016,3.457-14.69,3.686
    c-5.897,0.222-10.382-5.926-14.152-11.387c-7.703-11.168-13.585-31.576-5.677-45.35c3.916-6.84,10.934-11.167,18.537-11.282
    c5.792-0.107,11.263,3.917,14.799,3.917c3.544,0,10.185-4.831,17.165-4.122c2.922,0.121,11.123,1.181,16.391,8.912
    c-0.417,0.274-9.789,5.745-9.676,17.141C69.585,61.438,81.362,65.961,81.5,66.023C81.392,66.343,79.616,72.482,75.291,78.827z" />
</g>
</svg>
</g>
<g id="check">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246.1 246.1"><defs><style>.pmdc-1{fill:none;stroke:#9aaac1;}.pmdc-1,.pmdc-2{stroke-linecap:round;stroke-miterlimit:10;stroke-width:13.5px;}.pmdc-2{fill:#ff9d00;stroke:#ff9d00;}</style></defs><title>icon-pmdc-circle</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><circle class="pmdc-1" cx="123.05" cy="123.05" r="116.3" /><line class="pmdc-2" x1="190.46" y1="76.03" x2="96.42" y2="170.07" /><line class="pmdc-2" x1="96.42" y1="170.07" x2="55.64" y2="129.29" /></g></g></svg>
</g>
<g id="247">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 234.31 244.53"><defs><style>.round-1{fill:none;stroke:#9caac1;stroke-miterlimit:10;stroke-width:13.5px;}.round-2{fill:#9caac1;}.round-3{fill:#f90;}</style></defs><title>Asset 78</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="round-1" d="M227.49,123.42a111.08,111.08,0,0,1-.43,14.54A110.37,110.37,0,1,1,168.51,29.6" /><polyline class="round-2" points="178.57 0 194.65 42.35 152.31 58.43" /><path class="round-3" d="M50,171.3v-7.56l9.66-9.38c23.25-22.13,33.76-33.9,33.9-47.62,0-9.24-4.48-17.79-18.07-17.79-8.26,0-15.13,4.2-19.33,7.7L52.24,88A40,40,0,0,1,78,78.72c19.61,0,27.87,13.45,27.87,26.47,0,16.81-12.19,30.39-31.37,48.88l-7.28,6.72v.28h40.9V171.3Z" /><path class="round-3" d="M159.94,171.3V146.51h-42.3v-8.12l40.62-58.13h13.31v56.59h12.75v9.66H171.57V171.3Zm0-34.46V106.45q0-7.14.42-14.29h-.42c-2.8,5.32-5,9.24-7.56,13.45l-22.27,31v.28Z" /></g></g></svg>
</g>
<g id="web">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 398.07 398.07"><defs><style>.web-1{fill:none;stroke:#9aaac1;stroke-linecap:round;stroke-width:13.5px;}.web-1,.web-2{stroke-miterlimit:10;}.web-2{fill:#ff9d00;stroke:#ff9d00;stroke-width:4px;}</style></defs><title>Asset 81</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="web-1" d="M66.42,67.15q132.62,69.63,265.24,0" /><circle class="web-1" cx="199.04" cy="199.04" r="192.29" /><path class="web-1" d="M284.32,136.93C279.57,68.36,236.89,17.25,196.2,10.24" /><line class="web-1" x1="196.2" y1="10.24" x2="196.2" y2="139.06" /><path class="web-2" d="M69.84,208.49l1.54,9.14h.37l1.6-9.14,13.29-45.26h9.72l13.35,45.26,1.72,10.2h.37l2-10.2,9.84-45.26h12.67L117,234.4h-9.78L94,191.06l-2.52-11.31h-.37l-2.34,11.31L75.87,234.4H66.09L46.78,163.23H59.39Z" /><path class="web-2" d="M173.87,208.49l1.54,9.14h.37l1.6-9.14,13.29-45.26h9.72l13.35,45.26,1.72,10.2h.37l2-10.2,9.84-45.26H240.3L221,234.4h-9.78L198,191.06l-2.52-11.31h-.37l-2.34,11.31L179.9,234.4h-9.78l-19.31-71.17h12.61Z" /><path class="web-2" d="M277.9,208.49l1.54,9.14h.37l1.6-9.14,13.29-45.26h9.72l13.35,45.26,1.72,10.2h.37l2-10.2,9.84-45.26h12.67L325,234.4h-9.78l-13.16-43.35-2.52-11.31h-.37l-2.34,11.31L283.93,234.4h-9.78l-19.31-71.17h12.61Z" /><path class="web-1" d="M106.3,136.93c4.75-68.57,47.44-119.68,88.12-126.69" /><path class="web-1" d="M327.11,332.62q-132.62-69.63-265.24,0" /><path class="web-1" d="M109.2,262.84c4.75,68.57,47.44,119.68,88.12,126.69" /><line class="web-1" x1="197.32" y1="389.53" x2="197.32" y2="260.71" /><path class="web-1" d="M287.22,262.84c-4.75,68.57-47.44,119.68-88.12,126.69" /></g></g></svg>
</g>
<g id="google-color">


<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<path style="fill:#CCCCCC;" d="M451.809,239.542v217.654l-68.402-12.661l-30.156-36.174l-127.06-141.254l107.876-76.649
  c54.037,71.326,55.741,53.938,55.741,53.938s26.692-39.85,60.936-5.607L451.809,239.542z" />
<path style="fill:#518EF8;" d="M190.707,223.105l224.311,288.696c-1.306,0.128-2.626,0.199-3.96,0.199H44.336L190.707,223.105z" />
<path style="fill:#28B446;" d="M334.068,190.458L0.447,471.248V101.389c0-22.512,18.254-40.752,40.752-40.752h243.289
  c-10.447,17.956,28.289,29.481,28.289,51.752C312.777,134.803,323.494,172.417,334.068,190.458z" />
<path style="fill:#F2F2F2;" d="M451.809,457.196v14.052c0,21.164-16.139,38.566-36.791,40.553L227.313,326.567l45.436-46.046
  l104.867,103.476l5.791,5.72L451.809,457.196z" />
<path style="fill:#FFD837;" d="M322.514,230.088l-49.765,50.432l-45.436,46.046L44.336,512h-3.137
  c-22.498,0-40.752-18.254-40.752-40.752l284.254-288.058c5.323,9.113,41.93-0.114,49.368,7.267l13.67,17.572
  C354.41,215.142,316.78,222.537,322.514,230.088z" />
<path style="fill:#FFFFFF;" d="M106.904,227.775c-35.808,0-64.939-29.131-64.939-64.939s29.131-64.939,64.939-64.939
  c17.334,0,33.637,6.758,45.91,19.03l-15.057,15.054c-8.248-8.25-19.206-12.793-30.853-12.793c-24.068,0-43.647,19.58-43.647,43.647
  s19.58,43.647,43.647,43.647c20.396,0,37.571-14.062,42.334-33.002h-42.334v-21.291h64.939v10.646
  C171.842,198.644,142.712,227.775,106.904,227.775z" />
<path style="fill:#F14336;" d="M284.488,60.638C305.566,24.386,344.842,0,389.809,0c67.238,0,121.744,54.506,121.744,121.744
  c0,16.863-3.435,32.916-9.624,47.522c-6.203,14.606-15.174,27.75-26.245,38.764c-9.226,9.808-17.501,20.17-24.939,30.759
  c-48.729,69.424-60.936,148.685-60.936,148.685s-13.257-86.06-67.295-157.386c-5.734-7.551-11.923-14.947-18.594-22.058h0.014
  c-7.438-7.381-13.91-15.727-19.233-24.84c-10.575-18.041-16.636-39.034-16.636-61.447C268.065,99.473,274.041,78.593,284.488,60.638
  z" />
<path style="fill:#7E2D25;" d="M389.81,56.947c35.781,0,64.781,29.017,64.781,64.798s-29,64.781-64.781,64.781
  s-64.798-29-64.798-64.781S354.03,56.947,389.81,56.947z" />
</svg>
</g>
<g id="service">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 271.49 223.7"><defs><style>.service-1,.service-2{fill:none;stroke-miterlimit:10;stroke-width:13.5px;}.service-1{stroke:#f90;stroke-linecap:round;}.service-2{stroke:#9aaac1;}</style></defs><title>icon-services</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><line class="service-1" x1="86.65" y1="127.81" x2="184.84" y2="127.81" /><line class="service-1" x1="135.74" y1="78.72" x2="135.74" y2="176.91" /><rect class="service-2" x="6.75" y="38.68" width="257.99" height="178.27" rx="11.35" ry="11.35" /><path class="service-2" d="M63.1,44.68V37.32A30.57,30.57,0,0,1,93.66,6.75h76.85a30.57,30.57,0,0,1,30.57,30.57v7.36" /></g></g></svg>
</g>
<g id="team">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 299.69 307.24"><defs><style>.team-1,.team-2,.team-3,.team-4{fill:none;stroke-miterlimit:10;stroke-width:13.5px;}.team-1,.team-3{stroke:#9aaac1;}.team-2,.team-4{stroke:#f90;}.team-3,.team-4{stroke-linecap:round;}</style></defs><title>Asset 91</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="team-1" d="M78.84,156.43c0-35.4,28.7-62.09,64.09-62.09S207,121,207,156.43" /><circle class="team-2" cx="142.94" cy="45.74" r="38.99" transform="translate(-1.39 4.6) rotate(-1.83)" /><path class="team-3" d="M6.75,300.49c0-35.4,28.7-62.09,64.09-62.09s64.09,26.7,64.09,62.09" /><circle class="team-2" cx="70.84" cy="189.8" r="38.99" transform="translate(-6.04 2.36) rotate(-1.83)" /><path class="team-3" d="M164.75,300.49c0-35.4,28.7-62.09,64.09-62.09s64.09,26.7,64.09,62.09" /><circle class="team-4" cx="228.84" cy="189.8" r="38.99" transform="translate(-5.96 7.42) rotate(-1.83)" /></g></g></svg>
</g>
<g id="exp">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 296.02 332.18"><defs><style>.exp-1,.exp-2,.exp-4{fill:none;stroke-width:13.5px;}.exp-1,.exp-2{stroke:#9aaac1;}.exp-1,.exp-4{stroke-miterlimit:10;}.exp-2{stroke-linecap:round;stroke-linejoin:round;}.cls-3{fill:#f90;}.exp-4{stroke:#f90;}</style></defs><title>Asset 83</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="exp-1" d="M272.87,9.48" /><polyline class="exp-2" points="212.18 172.42 289.27 6.75 213.82 6.75 156.41 144.53" /><polyline class="exp-2" points="83.84 172.42 6.75 6.75 82.2 6.75 139.61 144.53" /><path class="cls-3" d="M206.26,226.42a3.41,3.41,0,0,0-1.92-5.93l-36.53-3.86a3.8,3.8,0,0,1-3.07-2.23l-15-33.55a3.41,3.41,0,0,0-6.23,0l-15,33.55a3.8,3.8,0,0,1-3.07,2.23L89,220.49a3.41,3.41,0,0,0-1.92,5.93L114.35,251a3.8,3.8,0,0,1,1.17,3.61l-7.62,35.93a3.41,3.41,0,0,0,5,3.66l31.82-18.35a3.8,3.8,0,0,1,3.8,0l31.82,18.35a3.41,3.41,0,0,0,5-3.66l-7.62-35.93A3.8,3.8,0,0,1,179,251Z" /><circle class="exp-4" cx="146.66" cy="236.76" r="88.67" /></g></g></svg>
</g>
<g id="facility">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203 270.67"><defs><style>.facility-1{fill:#9aaac1;}.facility-2{fill:#f90;}.facility-3,.facility-4{fill:#ff9d00;stroke-linecap:round;stroke-miterlimit:10;stroke-width:13.5px;}.facility-3{stroke:#ff9d00;}.facility-4{stroke:#9aaac1;}</style></defs><title>Asset 89</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="facility-1" d="M180.44,22.56H156.85A16.89,16.89,0,0,0,141,11.28h-17a28,28,0,0,0-44.88,0H62A16.89,16.89,0,0,0,46.15,22.56H22.56A22.58,22.58,0,0,0,0,45.11v203a22.58,22.58,0,0,0,22.56,22.56H180.44A22.58,22.58,0,0,0,203,248.11v-203A22.58,22.58,0,0,0,180.44,22.56ZM56.39,28.19A5.64,5.64,0,0,1,62,22.56h20a5.65,5.65,0,0,0,4.87-2.8,16.73,16.73,0,0,1,29.11,0,5.65,5.65,0,0,0,4.87,2.8h20a5.64,5.64,0,0,1,5.64,5.64v5.64a11.29,11.29,0,0,1-11.28,11.28H67.67A11.29,11.29,0,0,1,56.39,33.83V28.19ZM191.72,248.11a11.29,11.29,0,0,1-11.28,11.28H22.56a11.29,11.29,0,0,1-11.28-11.28v-203A11.29,11.29,0,0,1,22.56,33.83H45.11A22.58,22.58,0,0,0,67.67,56.39h67.67a22.58,22.58,0,0,0,22.56-22.56h22.56a11.29,11.29,0,0,1,11.28,11.28v203Z" /><path class="facility-2" d="M63.23,137.74H40.74A11.26,11.26,0,0,1,29.49,126.5V104A11.26,11.26,0,0,1,40.74,92.76H63.23A11.26,11.26,0,0,1,74.48,104V126.5A11.26,11.26,0,0,1,63.23,137.74ZM40.74,104V126.5h22.5V104Z" /><path class="facility-1" d="M63.23,217.74H40.74A11.26,11.26,0,0,1,29.49,206.5V184a11.26,11.26,0,0,1,11.25-11.25H63.23A11.26,11.26,0,0,1,74.48,184V206.5A11.26,11.26,0,0,1,63.23,217.74ZM40.74,184V206.5h22.5V184Z" /><line class="facility-3" x1="157.78" y1="85.96" x2="120.63" y2="123.11" /><line class="facility-3" x1="120.63" y1="123.11" x2="104.52" y2="107" /><line class="facility-4" x1="157.78" y1="172.16" x2="120.63" y2="209.31" /><line class="facility-4" x1="120.63" y1="209.31" x2="104.52" y2="193.2" /></g></g></svg>
</g>
<g id="hospital">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 246.1 246.1"><defs><style>.hospital-1,.hospital-2{fill:none;stroke-linecap:round;stroke-miterlimit:10;stroke-width:13.5px;}.hospital-1{stroke:#9aaac1;}.hospital-2{stroke:#ff9d00;}</style></defs><title>Asset 87</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><circle class="hospital-1" cx="123.05" cy="123.05" r="116.3" /><line class="hospital-2" x1="91.52" y1="71.98" x2="91.52" y2="174.12" /><line class="hospital-2" x1="152.69" y1="123.05" x2="92.16" y2="123.05" /><line class="hospital-2" x1="154.58" y1="71.98" x2="154.58" y2="174.12" /></g></g></svg>
</g>
</defs>
</svg>
</div> 
<header class="site-header py-md-0">
<nav class="bg-dark d-none d-md-block">
<div class="container">
<div class="row">
<div class="col-xs-12 text-right">
<a href="tel:04238900939" class="call-number py-1 no-underline" style="display: inline-block;">
<span class="text-white">Book appointment now: </span>
<span class="text-warning">04238900939</span>
</a>
</div>
</div>
</div>
</nav>
<div class="container">
<div class="d-lg-flex align-items-center justify-content-between oladoc-logo" style="margin-top: 9px; padding-bottom: 6px;">
<a href="index.html">

<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="15.9 364.8 820 179.1" style="enable-background:new 15.9 364.8 820 179.1; width:110px; height:24px;" xml:space="preserve">
<style type="text/css">
                        .st0{fill:#F99C25;}
                        .st1{fill:#21205F;}
                    </style>
<g>
<path class="st0" d="M338.2,412.6v20.6c-8.6-11.5-23.2-19.8-40.1-19.8c-39.1,0-60.4,29.6-60.4,64.8c0,36.7,23,66,61.1,66
                              c18.3,0,30.3-8.1,39.4-21v21h36.4V412.6H338.2z M306.4,514.7c-20.1,0-32.3-16.1-32.3-36.2c0-19.3,11.3-35.5,31.3-35.5
                              c19.8,0,33.8,14.2,33.8,37.4C339.2,503.2,324.3,514.7,306.4,514.7z M84.9,413.4c-36.4,0-69,26.2-69,65.3c0,39.4,32.5,65.6,69,65.6
                              c36.7,0,69-26.4,69-65.6C153.9,439.9,121.6,413.4,84.9,413.4z M84.9,514.7c-18.8,0-35.2-15.2-35.2-36c0-20.6,16.4-35.7,35.2-35.7
                              c19,0,35.2,15.4,35.2,35.7C120.1,499.3,103.9,514.7,84.9,514.7z M177.8,544.3h36.4V364.8h-36.4L177.8,544.3L177.8,544.3z" />
<path class="st1" d="M499.2,433.2c-8.6-11.5-23.2-19.8-40.1-19.8c-39.1,0-60.4,29.6-60.4,64.8c0,36.7,23,66,61.1,66
                              c18.3,0,30.3-8.1,39.4-21v21h36.4V364.8h-36.4V433.2z M467.4,514.7c-20.1,0-32.3-16.1-32.3-36.2c0-19.3,11.3-35.5,31.3-35.5
                              c19.8,0,33.8,14.2,33.8,37.4C500.1,503.2,485.2,514.7,467.4,514.7z M627.9,413.4c-36.4,0-69,26.2-69,65.3c0,39.4,32.5,65.6,69,65.6
                              c36.7,0,69-26.4,69-65.6C696.9,439.9,664.6,413.4,627.9,413.4z M663.7,490.4h-24.2v24.2h-23.1v-24.2h-24.2v-23.1h24.2v-24.2h23.1
                              v24.2h24.2V490.4z M786.3,514.2c-21,0-37.9-15.9-37.9-35.6c0-19.6,17-35.6,37.9-35.6c11.7,0,25.1,5,34.7,12.8l14.9-23.9
                              c-21.5-15.9-38.4-18.6-51.4-18.6c-43,0-70.2,28.1-70.2,65.3s27.2,65.3,70.2,65.3c13,0,29.8-2.7,51.4-18.6l-15-24
                              C811.4,509.2,798,514.2,786.3,514.2z" />
</g>
</svg>
</a>
<nav class="main-nav-bar">
<ul class="nav-menu-outer">
<li class="menu-item active hide"><a href="index.html">Home</a></li>




<li class="menu-item"><a class="btn btn-primary-outline" href="for-doctors.html">Join as a doctor</a></li>
<li class="menu-item" id="login"><a href="#" data-toggle="modal" data-target="#modal_login">Login</a></li>
<li class="menu-item item-for-doctors d-none"><a href="for-doctors.html">For Doctors</a></li>
<li class="dropdown d-none d-md-inline-block">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign Up</a>
<ul class="dropdown-menu" style="top: 150%;right: 50%;transform: translate(50%,0);margin: 0;">
<li class="w-100"><a data-toggle="modal" data-target="#signup-modal" class="w-100" href="#">
<span data-toggle="tab" data-target="#signup_doctors">As a Doctor</span>
</a></li>
<li class="w-100"><a data-toggle="modal" data-target="#signup-modal" class="w-100" href="#">
<span data-toggle="tab" data-target="#users-signup">As a User</span>
</a></li>
</ul>
</li>
<li class="menu-item download-app-icons d-none"><a href="javascript:;" target="_blank">Get App</a>
<div class="download-dropdown-container" id="download-dropdown">
<div class="dropdown-box">
<div class="content-container pull-left">
<p class="text-large">MyDoctor.pk App</p>
<div class="text-small">Your Health Connection</div>
<a class="apps-link play-store-img" rel="get" name="HdrAndroidApp" href="https://play.google.com/store/apps/details?id=com.mediconnect.mydoctor" target="_blank" data-bypass=""></a>
<a class="app-store-img apps-link" rel="get" name="HdrIosApp" href="https://itunes.apple.com/us/app/mydoctor-pk/id1225573536?ls=1&amp;mt=8" target="_blank" data-bypass=""></a>
</div>
<div class="phone-app-screen pull-right"></div>
</div>
</div>
</li>
<li class="menu-item d-md-none"><a data-toggle="modal" data-target="#signup-modal" class="w-100" href="#">
<span data-toggle="tab" data-target="#signup_doctors">Sign up as a Doctor</span>
</a></li>
<li class="menu-item d-md-none">
<a data-toggle="modal" data-target="#signup-modal" class="w-100" href="#">
<span data-toggle="tab" data-target="#users-signup">Sign up as a User</span>
</a
                    </li>
<li class="menu-item"><a class="services-link" href="health-zone/index.html">Health Zone</a></li>
</ul>
</nav>
<div class="search-btn-outer">
</div>
<style>
                .phone-icon {
                    position: absolute;
                    top: 12px;
                    margin-top: 15px;
                    margin-right: 70px;
                    right: 0;
                }
                .phone-icon i {
                    font-size: 23px;
                }
                @media (max-width: 480px) {
                    .phone-icon {
                        top: 9px;
                    }
                }
            </style>
<div class="phone-icon d-md-none">
<a id="header-phone-button" class="" href="tel:04238900939">
<i class="call-number fa fa-phone text-primary"></i>
</a>
</div>
<div class="dropit-btn"> <span class="sp-1"></span> <span class="sp-2"></span> <span class="sp-3"></span> </div>
</div>
</div>
</header>
 <div class="index-banner-wrapper bg-primary">
<ul class="fixed-menu-right d-none">
<li class="fixed-menu-1 active"><a href="javascript:;" onclick="if (!window.__cfRLUnblockHandlers) return false; select_slide_first(1);" data-cf-modified-1d2c8a7024420f104c0feeb6-=""><i class="fa fa-stethoscope" aria-hidden="true"></i> <span class="hide-span">Doctors</span> </a></li>
<li class="fixed-menu-3"><a href="labs.html"><i class="fa fa-flask" aria-hidden="true"></i><span class="hide-span">Lab Tests</span></a></li>
<li class="fixed-menu-4"><a href="javascript:;" onclick="if (!window.__cfRLUnblockHandlers) return false; select_slide_first(4);" data-cf-modified-1d2c8a7024420f104c0feeb6-=""><img src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/tele-health-icon.png" class="pills-image" /> <span class="hide-span">Telehealth</span></a></li>

</ul>
<div class="container">
<div class="row py-md-5">
<div class="col-xs-12">
<div class="banner-text text-center my-5">
<span class="text-white">Find and book the </span>
<span class="text-warning">best doctors</span>
</div>
</div>
<div class="col-xs-12">

<div class="home-search-form-wrapper">
<div class="home-serch-container pl-0 pr-0">
<div class="home-search-form">
<div class="">

<div class="search-from">

<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="doctors">
<form class="form-horizontal" action="https://oladoc.com/advance_search_filter" method="get">
<div class="row">
<div class="col-xs-12 col-sm-6 mb-3">
<div class="row">
<div class="col-sm-12">
<label for="" class="text-white"><small>Choose specialty</small></label>
<select name="specializations" class="body-font-size form-control frm-input speciail pl-1">
<option value="">e.g. Gynaecologist, Dentist</option>
<optgroup label="Most Popular">
<option class="subitems" value="82">Cardiac Surgeon</option>
<option class="subitems" value="14">Dentist</option>
<option class="subitems" value="15">Dermatologist</option>
<option class="subitems" value="17">ENT Specialist</option>
<option class="subitems" value="20">Eye Specialist</option>
<option class="subitems" value="22">Gastroenterologist</option>
<option class="subitems" value="58">General Physician</option>
<option class="subitems" value="72">Gynecologist</option>
<option class="subitems" value="136">Hepatobiliary and Liver Transplant Surgeon</option>
<option class="subitems" value="41">Nutritionist</option>
<option class="subitems" value="47">Orthopedic Surgeon</option>
<option class="subitems" value="116">Pediatric Cardiologist</option>
<option class="subitems" value="244">Pediatric Urologist</option>
<option class="subitems" value="52">Pediatrician</option>
<option class="subitems" value="59">Psychiatrist</option>
<option class="subitems" value="74">Weight Loss Surgeon</option>
</optgroup>
<optgroup label="All Specializations">
<option class="subitems" value="1">Acupuncturist</option>
<option class="subitems" value="250">Aesthetic Gynecologist</option>
<option class="subitems" value="5">Anesthesiologist</option>
<option class="subitems" value="209">Asthma Specialist</option>
<option class="subitems" value="126">Audiologist</option>
<option class="subitems" value="200">Autism Consultant</option>
<option class="subitems" value="218">Bio-resonance Specialist</option>
<option class="subitems" value="112">Breast Surgeon</option>
<option class="subitems" value="225">Cancer Surgeon</option>
<option class="subitems" value="6">Cardiologist</option>
<option class="subitems" value="7">Cardiothoracic Surgeon</option>
<option class="subitems" value="9">Chiropractor</option>
<option class="subitems" value="259">Colorectal Cancer Surgeon</option>
<option class="subitems" value="235">Cosmetic Dentist</option>
<option class="subitems" value="254">Cosmetic Surgeon</option>
<option class="subitems" value="206">Cosmetologist</option>
<option class="subitems" value="11">Counselor</option>
<option class="subitems" value="228">Diabetes Counsellor</option>
<option class="subitems" value="79">Diabetologist</option>
<option class="subitems" value="16">Dietitian</option>
<option class="subitems" value="19">Endocrinologist</option>
<option class="subitems" value="216">Endodontist</option>
<option class="subitems" value="80">ENT Surgeon</option>
<option class="subitems" value="76">Eye Surgeon</option>
<option class="subitems" value="248">Family Physician</option>
<option class="subitems" value="189">Fertility Consultant</option>
<option class="subitems" value="23">General Surgeon</option>
<option class="subitems" value="87">Hair Transplant Surgeon</option>
<option class="subitems" value="245">Hand Surgeon</option>
<option class="subitems" value="132">Head and Neck Surgeon</option>
<option class="subitems" value="88">Hematologist</option>
<option class="subitems" value="26">Hepatologist</option>
<option class="subitems" value="210">Hernia Surgeon</option>
<option class="subitems" value="215">Homeopath</option>
<option class="subitems" value="231">Hypertension Specialist</option>
<option class="subitems" value="127">Immunologist</option>
<option class="subitems" value="29">Infectious Disease Specialist</option>
<option class="subitems" value="238">Internal Medicine Specialist</option>
<option class="subitems" value="257">Interventional Cardiologist</option>
<option class="subitems" value="115">Kidney Transplant Surgeon</option>
<option class="subitems" value="81">Laparoscopic Surgeon</option>
<option class="subitems" value="217">Laser Specialist</option>
<option class="subitems" value="145">Neonatologist</option>
<option class="subitems" value="35">Nephrologist</option>
<option class="subitems" value="38">Neuro Surgeon</option>
<option class="subitems" value="36">Neurologist</option>
<option class="subitems" value="252">Neuroradiologist</option>
<option class="subitems" value="213">Nutritional Psychologist</option>
<option class="subitems" value="111">Obstetrician</option>
<option class="subitems" value="43">Oncologist</option>
<option class="subitems" value="84">Oral and Maxillofacial Surgeon</option>
<option class="subitems" value="192">Pain Management Specialist</option>
<option class="subitems" value="255">Pathology Lab</option>
<option class="subitems" value="214">Pediatric Neurologist</option>
<option class="subitems" value="258">Pediatric Oncologist</option>
<option class="subitems" value="247">Pediatric Orthopedic Surgeon</option>
<option class="subitems" value="51">Pediatric Surgeon</option>
<option class="subitems" value="164">Physiotherapist</option>
<option class="subitems" value="55">Plastic Surgeon</option>
<option class="subitems" value="60">Psychologist</option>
<option class="subitems" value="61">Pulmonologist</option>
<option class="subitems" value="62">Radiologist</option>
<option class="subitems" value="253">Radiology Lab</option>
<option class="subitems" value="246">Reconstructive Surgeon</option>
<option class="subitems" value="232">Regenerative Medicine</option>
<option class="subitems" value="234">Rehablitation Specialist</option>
<option class="subitems" value="63">Rheumatologist</option>
<option class="subitems" value="78">Sexologist</option>
<option class="subitems" value="128">Sonologist</option>
<option class="subitems" value="220">Specialist in Operative Dentistry</option>
<option class="subitems" value="66">Speech and Language Pathologist</option>
<option class="subitems" value="140">Spinal Surgeon</option>
<option class="subitems" value="67">Sports Medicine Specialist</option>
<option class="subitems" value="239">Thyroid Surgeon</option>
<option class="subitems" value="70">Urologist</option>
<option class="subitems" value="71">Vascular Surgeon</option>
</optgroup>
</select>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 mb-3">
<div class="row">
<div class="col-sm-12">
<label for="" class="text-white"><small>Choose city</small></label>
<select class="body-font-size form-control speciail frm-input pl-1" id="city1" name="city">
<option value="">Any city</option>
<option value="Lahore">Lahore</option>
<option value="Karachi">Karachi</option>
<option value="Islamabad">Islamabad</option>
<option value="Rawalpindi">Rawalpindi</option>
<option value="Multan">Multan</option>
<option value="Faisalabad">Faisalabad</option>
<option value="Peshawar">Peshawar</option>
<option value="Sargodha">Sargodha</option>
<option value="Gujranwala">Gujranwala</option>
<option value="Bahawalpur">Bahawalpur</option>
</select>
</div>
</div>
</div>
</div>
<div class="row collapse multicollapse">
<div class="col-xs-12 col-sm-4 mb-3">
<div class="row">
<div class="col-sm-12">
<label for="" class="text-white"><small>Choose locality</small></label>
<select class="body-font-size form-control speciail frm-input pl-1" id="locality" name="locality">
<option value="" selected>Any locality</option>
</select>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 mb-3">
<div class="row" id="searchDoctorName">
<div class="col-sm-12">
<label for="" class="text-white"><small>Doctor's name</small></label>
<input type="text" name="doctor-name" id="name" value="" class="body-font-size form-control frm-input pl-1" placeholder="Optional">
</div>
</div>
</div>
<div class="col-xs-12 col-sm-4 mb-3">
<div class="row">
<div class="col-sm-12">
<label for="" class="text-white"><small>Gender</small></label>
<input type="hidden" name="gender" id="search_gender">
<ul class="nav nav-tabs m-0" role="tablist">
<li role="presentation" class="li-1 active" style=" width:33.3%;">
<a href="#" aria-controls="doctors" role="tab" onclick="if (!window.__cfRLUnblockHandlers) return false; set_gender('any');" data-toggle="tab" style="text-transform: none;" class="banner-m-tab" data-cf-modified-1d2c8a7024420f104c0feeb6-="">Any</a>
</li>
<li role="presentation" class="li-1" style=" width:33.3%;">
<a href="#" aria-controls="hac" role="tab" onclick="if (!window.__cfRLUnblockHandlers) return false; set_gender('Male');" data-toggle="tab" style="text-transform: none;" class="banner-m-tab bg-white" data-cf-modified-1d2c8a7024420f104c0feeb6-="">Male</a>
</li>
<li role="presentation" class="li-1" style=" width:33.3%;">
<a href="#" aria-controls="hac" role="tab" onclick="if (!window.__cfRLUnblockHandlers) return false; set_gender('Female');" data-toggle="tab" style="text-transform: none;" class="banner-m-tab bg-white" data-cf-modified-1d2c8a7024420f104c0feeb6-="">Female</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="form-group collapse in multicollapse mb-3">
<div class="col-xs-12 text-center text-sm-right text-md-center" style="opacity: 0.9;">
<label class="text-white m-0 clickable text-center" data-toggle="collapse" data-target=".multicollapse"><small><u>Search by name, locality or gender?</u></small>
</label>
</div>
</div>
<div class="form-group form-fields my-5 text-center">
<div class="col-sm-4 col-sm-offset-4 col-xs-12">
<button type="submit" onclick="if (!window.__cfRLUnblockHandlers) return false; return chek_required();" class="btn btn-lg btn-block btn-padded bg-warning text-white rounded btn-doc-search" data-cf-modified-1d2c8a7024420f104c0feeb6-="">Search Now</button>
</div>
</div>
<div class="form-group text-center text-center">
<label href="#hac" aria-controls="hac" role="tab" data-toggle="tab" class="text-white"><small><u class="clickable">Search for hospitals instead?</u></small></label>
</div>
</form>
</div>
<div role="tabpanel" class="tab-pane" id="hac">
<form class="form-horizontal" id="search-hospital-form" action="https://oladoc.com/search-hospital" method="get">
<div class="row">
<div class="col-xs-12 col-sm-6 mb-3">
<div class="row">
<div class="col-sm-12">
<label for="" class="text-white"><small>Hospital's name</small></label>
<input type="text" name="name" id="name" value="" class="body-font-size form-control frm-input pl-1" placeholder="Name">
<input type="hidden" name="ishosp" value="1" />
</div>
</div>
</div>
<div class="col-xs-12 col-sm-6 mb-3">
<div class="row">
<div class="col-sm-12">
<label for="" class="text-white"><small>Choose city</small></label>
<select class="body-font-size form-control speciail frm-input pl-1" id="city" name="city">
<option value="">Select City</option>
<option value="Lahore">Lahore</option>
<option value="Karachi">Karachi</option>
<option value="Islamabad">Islamabad</option>
<option value="Rawalpindi">Rawalpindi</option>
<option value="Multan">Multan</option>
<option value="Faisalabad">Faisalabad</option>
<option value="Peshawar">Peshawar</option>
<option value="Sargodha">Sargodha</option>
<option value="Gujranwala">Gujranwala</option>
<option value="Bahawalpur">Bahawalpur</option>
</select>
</div>
</div>
</div>
</div>
<div class="form-group form-fields my-5 text-center">
<div class="col-sm-4 col-sm-offset-4 col-xs-12">
<button type="submit" onclick="if (!window.__cfRLUnblockHandlers) return false; return chek_required_hosp();" class="btn btn-lg btn-block btn-padded bg-warning text-white rounded btn-doc-search" data-cf-modified-1d2c8a7024420f104c0feeb6-="">Search Now</button>
</div>
</div>
<div class="form-group text-center">
<label href="#doctors" aria-controls="doctors" role="tab" data-toggle="tab" class="text-white"><small><u class="clickable">Search for doctors instead?</u></small></label>
</div>
</form>
</div>
</div>
</div>

</div>
</div>
</div>
</div> 
</div>
</div>
</div>
</div>
<div class="banner-featured-holder d-none">
</div>
</div>


<nav class="sub-menu" style="background-color: #15359a;">
<div class="container px-0">
<ul class="list-tabs m-0 row d-md-flex">
<li class="list-tab-item col-xs-4">
<a href="index.html">
<img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/i-book-doctors.svg" height="24" alt="">
<p class="h6 fw-400 text-white text-uppercase mb-0 mt-2">Book Doctors</p>
</a>
</li>
<li class="list-tab-item col-xs-4">
<a href="order-medicines.html">
<img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/i-order-medicine.svg" height="24" alt="">
<p class="h6 fw-400 text-white text-uppercase mb-0 mt-2">Order Medicines</p>
</a>
</li>
<li class="list-tab-item col-xs-4">
<a href="order-lab-tests.html">
<img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/i-order-lab-tests.svg" height="24" alt="">
<p class="h6 fw-400 text-white text-uppercase mb-0 mt-2">Book Lab Tests</p>
</a>
</li>
<li class="list-tab-item col-xs-4">
<a href="forum.html">
<img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/i-ask-question.svg" height="24" alt="">
<p class="h6 fw-400 text-white text-uppercase mb-0 mt-2">Ask A Question</p>
</a>
</li>
<li class="list-tab-item col-xs-4">
<a href="pakistan/lahore/offer.html">
<img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/i-view-promotions.svg" height="24" alt="">
<p class="h6 fw-400 text-white text-uppercase mb-0 mt-2">View Promotions </p>
</a>
</li>
<li class="list-tab-item col-xs-4">
<a href="health-zone/index.html">
<img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/i-read-articles.svg" height="24" alt="">
<p class="h6 fw-400 text-white text-uppercase mb-0 mt-2">Read Articles</p>
</a>
</li>
</ul>
</div>
</nav>
<section class="bg-light">
<div class="container py-5">
<div class="row mb-5">
<div class="col-xs-12 text-center">
<h3 class="h3 text-primary fw-400 ">Get your medical questions answered by top doctors</h3>
</div>
</div>
<div class="row d-md-flex align-items-center">
<div class="col-sm-5 col-md-4 pr-md-5">
<div class="row">
<div class="col-xs-12">
 <div class="text-center" style="margin-bottom: -4rem;">
<img src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/oladoc-child.png" alt="oladoc" height="120">
</div>
<form method="post" action="https://oladoc.com/forum" class="well card text-center">
<div class="card-body pt-3 pt-md-5">
<h4 class="text-black">Advice From Top Local Doctors</h4>
<textarea name="question-title" placeholder="Ask a question" cols="30" maxlength="500" rows="4" class="form-control mb-2 rounded"></textarea>
<input type="submit" class="btn btn-padded btn-block bg-warning text-white" value="ASK A QUESTION">
</div>
</form>
</div>
</div>
<div class="row d-none">
<div class="col-xs-12">
<h3 class="h4 text-primary text-center m-0 lh-2">Ask questions in privacy<br>Get answers by top local doctors</h3>
</div>
</div>
</div>
<div class="col-sm-7 col-md-8 pl-md-5 ov-h">

<div class="row my-2">
<div class="col-xs-11">
<div class="well m-0 p-2">
<p class=" mt-0 d-block no-underline lh-2" style="display: -webkit-box; -webkit-line-clamp: 2;-webkit-box-orient: vertical; overflow: hidden;">I get upper chest pain while breathing heavily, coughing or sneezing. I also have dry cough but no signs of fever. I am a regular smoker (3 - 4 cigarettes a day).</p>
<div class="row d-flex align-items-center">
<div class="col-xs-2 col-sm-1 pr-1">
<img src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/avatar.png" alt="">
</div>
<div class="col-xs-10 col-sm-11 pl-0">
<span class="text-secondary">
<small>Asked for Female, </small>
</span>
<span class="text-secondary">
<small>23 years</small>
</span>
</div>
</div>
</div>
</div>
</div>
<div class="row my-2">
<div class="col-xs-11 col-xs-offset-1 ml-md-4">
<div class="p-4 bg-white border rounded">
<div class="row d-flex align-items-center">
<div class="col-xs-3 col-sm-2 pr-0">
<div style="height: 0; padding-bottom: 100%; background-image: url('../s3-eu-west-1.amazonaws.com/mdpk/images/profile-pics/doctors/1516182011_mohammad-irfan-malik.jpg'); background-size: cover; background-position: center; border-radius: 1000px;"></div>
</div>
<div class="col-xs-9 col-sm-10">
<p class="m-0">Dr. Mohammad Irfan Malik</p>
<p class="m-0 text-secondary">Pulmonologist, Sleep Medicine Doctor</p>
</div>
</div>
<div class="row pt-4">
<div class="col-sm-12">
<p class="question-details m-0" style="word-break: break-word;">Dear Patient,<br>
<br>
Hello. I understand your concerns. You might have bronchitis. You will need to undergo a detailed examination and investigations like chest x-ray to look for infection. if it's normal then you will need to undergo pulmonary function test which is needed for diagnosis and also to assess severity of bronchitis based on which treatment can be started.
<br><br>
You can book an appointment with me through oladoc.com.
</p>
</div>
</div>
</div>

</div>
</div>
<div class="row mt-5">
<div class="col-xs-12 col-sm-11 col-sm-offset-1 text-center">
<a href="forum.html" class="btn btn-padded bg-primary text-white">VIEW ALL QUESTIONS</a>
</div>
</div>
</div>
</section>
<section class="bg-white">
<div class="container py-5">
<div class="row">
<div class="col-xs-12 text-center">
<h3 class="h3 text-primary fw-400">Book appointments in 3 easy steps</h3>
</div>
</div>
<div class="row d-md-flex align-items-center">
<div class="col-md-6">
<ul class="container-fluid py-5">
<li class="row d-flex align-items-center bg-light z-depth-1 mb-2">
<div class="col-xs-3 col-sm-2 p-0">
<img class="img-responsive p-2" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/icons/search.png" alt="Search"></img>
</div>
<div class="col-xs-9 col-sm-10 p-0">
<p class="fw-700 text-primary m-0">1. Search</p>
<p class="m-0">by Specialty, Hospital or City</p>
</div>
</li>
<li class="row d-flex align-items-center bg-light z-depth-1 mb-2">
<div class="col-xs-3 col-sm-2 p-0">
<img class="img-responsive p-2" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/icons/checked.png" alt="Select"></img>
</div>
<div class="col-xs-9 col-sm-10 p-0">
<p class="fw-700 text-primary m-0">2. Select</p>
<p class="m-0">based on Experience, Fee or Rating</p>
</div>
</li>
<li class="row d-flex align-items-center bg-light z-depth-1 mb-2">
<div class="col-xs-3 col-sm-2 p-0">
<img class="img-responsive p-2" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/icons/add.png" alt="Book"></img>
</div>
<div class="col-xs-9 col-sm-10 p-0">
<p class="fw-700 text-primary m-0">3. Book</p>
<p class="m-0">a Confirmed Appointment within Seconds</p>
</div>
</li>
</ul>
</div>
<div class="col-md-6 pt-1 pb-4">
<img class="img-responsive pull-right" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/home_gif.gif" alt="Book instant appointments in 3 easy steps using oladoc.com"></img>
</div>
</div>
</div>
</section>




<script type="1d2c8a7024420f104c0feeb6-text/javascript">
                        //comment out ajax call for blog
                        var specilization_array = [];
                        var formData = {
                        'term_iddd': ''
                        };
                        /*
                        $.ajax({
                        type: "POST",
                        dataType    : 'json',
                        url: "<?//=base_url()?>blog.php",
                        data        : formData,
                        beforeSend : function() {
                        $('.rquest-image_blog').show();
                        },
                        success: function(response)
                        {    var response = eval(response);
                        $('.blog-tabs').html(response.list);
                        $("#home").html(response.posts);
                        },complete : function() {
                        $('.rquest-image_blog').hide();
                        }});
                        
                        function call_posts(trem_id,tab_id){
                        var formData = {'term_id'             : trem_id};
                        $.ajax({
                        type: "POST",
                        dataType    : 'json',
                        url         : "https://oladoc.com/blog.php",
                        data        : formData,
                        beforeSend  : function() {
                        $('.rquest-image_blog').show();
                        },
                        success: function(response) {
                        var response = eval(response);
                        $('#menu'+tab_id).html(response.posts);
                        },complete : function() {
                        $('.rquest-image_blog').hide();
                        }
                        });
                        } */
                        //end of blog post function
                        function get_featured_doctors(specilization, tab_id) {
                        var array_index = $.inArray(specilization, specilization_array);
                        specilization_array.push(specilization);
                        //alert(array_index);
                        if (array_index < 0) {
                        var formData = {
                        'specilization': specilization
                        };
                        $.ajax({
                        type: "POST",
                        dataType: 'json', // what type of data do we expect back from the server
                        url: "https://oladoc.com/get_featured_ajax",
                        data: formData, // our data object
                        beforeSend: function() {
                        $('.rquest-image-ftr-doc').show();
                        },
                        success: function(response) {
                        if (response) {
                        $('#ftr-menu' + tab_id).html(response);
                        } else {
                        $('#ftr-menu' + tab_id).html('<p class="no-ftr-found"> NO featured doctors found in your city</p>');
                        }
                        },
                        complete: function() {
                        $('.rquest-image-ftr-doc').hide();
                        }
                        });
                        } else {
                        $('.ftr-tab-content .tab-pane').removeClass('in');
                        $('.ftr-tab-content .tab-pane').removeClass('active');
                        $('#ftr-menu' + tab_id).addClass('in');
                        $('#ftr-menu' + tab_id).addClass('active');
                        }
                        } //end of get featured doctors using ajax
                        function first_item() {
                        $('.ftr-tab-content .tab-pane').removeClass('in');
                        $('.ftr-tab-content .tab-pane').removeClass('active');
                        $("#ftr-menu1").addClass('in');
                        $("#ftr-menu1").addClass('active');
                        }
                        </script>
<script type="1d2c8a7024420f104c0feeb6-text/javascript">
                        $(document).ready(function() {
                        var interval = null;
                        var count = 1;
                        var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
                        if (!isMobile) {
                        jQuery(function() {
                        interval = setInterval(callFunc, 30000);
                        });
                        }
                        //rotate function that will rotate featured doctors section
                        function callFunc() {
                        var active_next = $('.ftr-tabs.nav.nav-tabs li.active');
                        var active_tab_pan = $('.ftr-tabs.nav.nav-tabs li.active a').attr('href');
                        var next_check = $(active_next).next();
                        var last = $('.ftr-tabs.nav.nav-tabs li.active').is(':last-child');
                        if (last) {
                        $('.ftr-tabs.nav.nav-tabs li.active').removeClass('active');
                        $('.ftr-tab-content .tab-pane').removeClass('in');
                        $('.ftr-tab-content .tab-pane').removeClass('active');
                        $('.ftr-tabs.nav.nav-tabs li:first-child').addClass('active');
                        //$('.ftr-tabs.nav.nav-tabs li').addClass('active');
                        $('#ftr-menu1').addClass('in');
                        $('#ftr-menu1').addClass('active');
                        } else {
                        //var active_nex_tab = $('.tab-pane fade in active');
                        $('.ftr-tabs.nav.nav-tabs li.active').removeClass('active');
                        $(active_next).next().addClass('active');
                        $(active_tab_pan).removeClass('in');
                        $(active_tab_pan).removeClass('active');
                        $(active_tab_pan).next().addClass('in');
                        $(active_tab_pan).next().addClass('active');
                        $('.ftr-tabs.nav.nav-tabs li.active a').trigger('click');
                        }
                        if (count == 3) {
                        get_featured_doctors(15, 5);
                        } else if (count == 4) {
                        get_featured_doctors(20, 9);
                        } else if (count == 6) {
                        get_featured_doctors(47, 8);
                        }
                        count++;
                        }
                        $('.rquest-image').hide();
                        $('.rquest-image_blog').hide();
                        //subscribtion form submit...
                        // process the form
                        $('#subscribe-form').submit(function(event) {
                        // get the form data
                        // there are many ways to get this data using jQuery (you can use the class or id also)
                        var formData = {
                        'email': $('#subscriber_email').val()
                        };
                        // process the form
                        $.ajax({
                        type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                        url: 'https://oladoc.com/subscribe/', // the url where we want to POST
                        data: formData, // our data object
                        dataType: 'json', // what type of data do we expect back from the server
                        beforeSend: function() {
                        $('.rquest-image').show();
                        },
                        success: function(response) {
                        var obj = eval(response);
                        if (obj) {
                        if (obj.error == 0) {
                        $(".response_text").html("your email is added to subscriber list");
                        } else {
                        $(".response_text").html("We could not add you at the moment, Please check email address and try agin later.");
                        }
                        }
                        },
                        complete: function() {
                        $('.rquest-image').hide();
                        },
                        error: function(xhr, ajaxOptions, thrownError) {}
                        });
                        // stop the form from submitting the normal way and refreshing the page
                        event.preventDefault();
                        });
                        $(".banner-ftr-doctor .ftr-doctor-inner").hide();
                        $(".banner-ftr-doctor .ftr-doctor-inner:first-child").addClass('ftr-active');
                        jQuery(function() {
                        interval = setInterval(rotate_ftr_doctor, 20000);
                        });
                        function rotate_ftr_doctor() {
                        var active_next = $('.ftr-doctor-inner.ftr-active');
                        var active_tab_pan = $('.ftr-tabs.nav.nav-tabs li.active a').attr('href');
                        var next_check = $(active_next).next();
                        var last = $('.ftr-doctor-inner.ftr-active').is(':last-child');
                        if (last) {
                        $('.ftr-doctor-inner.ftr-active').removeClass('ftr-active');
                        $('.banner-ftr-doctor .ftr-doctor-inner:first-child').addClass('ftr-active');
                        } else {
                        //var active_nex_tab = $('.tab-pane fade in active');
                        $('.ftr-doctor-inner.ftr-active').removeClass('ftr-active');
                        $(active_next).next().addClass('ftr-active');
                        }
                        }
                        });
                        function chek_required() {
                        var doc_name = $("#name").val();
                        if (doc_name.length > 0 && doc_name != '') {
                        $("#city").prop('required', false);
                        } else {
                        $("#city").prop('required', true);
                        }
                        }
                        function chek_required_hosp() {
                        var hosp_name = $("#search-hospital-form #name").val();
                        if (hosp_name.length > 0 && hosp_name != '') {
                        $("#search-hospital-form #city").prop('required', false);
                        } else {
                        $("#search-hospital-form #city").prop('required', true);
                        }
                        }
                        </script>
<div class="section-top-doctor bg-primary">
<div class="container py-5">
<div class="row py-5">
<div class="col-xs-12">
<div class="row">
<div class="col-xs-12 text-left text-md-center">
 <h2 class="h1 head-font-size text-white mt-0 fw-400 text-center">Are you a top doctor?</h2>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="row d-md-flex align-items-center">
<div class="col-xs-12 col-md-8">
<ul class="py-5">
<li class="body-font-size">
<img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/orange-check.svg" height="16" class="mr-1">Let millions of patients find you</li>
<li class="body-font-size"><img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/orange-check.svg" height="16" class="mr-1">Get more appointments through online bookings</li>
<li class="body-font-size"><img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/orange-check.svg" height="16" class="mr-1">Create and view patient records from anywhere</li>
<li class="body-font-size"><img src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/orange-check.svg" height="16" class="mr-1">Manage your schedule efficiently</li>
</ul>
</div>
<div class="col-xs-12 col-md-4">
<div class="row">
<div class="col-xs-12">
<a href="#" data-toggle="modal" data-target="#demo-modal" class=" body-font-size btn btn-padded btn-block bg-warning text-white mb-2">
I want a demo
</a>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<a href="#" data-toggle="modal" data-target="#signup-modal" class="body-font-size btn btn-padded btn-block bg-primary border-white text-white">
<span data-toggle="tab" data-target="#signup_doctors">I want to sign up</span>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="bg-white py-5 mw-100 ovx-a">
<div class="container">
<marquee onmouseover="if (!window.__cfRLUnblockHandlers) return false; this.stop();" onmouseout="if (!window.__cfRLUnblockHandlers) return false; this.start();" class="d-block news-slider" data-cf-modified-1d2c8a7024420f104c0feeb6-="">
<a href="https://dailytimes.com.pk/205817/mydoctor-pk-changes-name-oladoc-com/" class="d-inline-block px-5" target="_blank">
<img height="50" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/daily-times.png" alt="Daily Times">
</a>
<a href="https://www.pakistantoday.com.pk/2018/02/22/mydoctor-pk-raises-1-1million-funding-rebrands-to-oladoc-com/" class="d-inline-block px-5" target="_blank">
<img height="40" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/pakistan-today.png" alt="Pakistan Today">
</a>
<a href="https://www.techjuice.pk/mydoctor-pk-raises-1-1million-in-funding-from-glowfish-capital/" class="d-inline-block px-5" target="_blank">
<img height="50" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/tech-juice.png" alt="Tech Juice">
</a>
<a href="https://tribune.com.pk/story/1640984/2-lahore-based-healthcare-start-raises-1-1m-glowfish-capital/" class="d-inline-block px-5" target="_blank">
<img height="50" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/express-tribune.gif" alt="The Express Tribune">
</a>
<a href="https://propakistani.pk/2018/02/21/mydoctor-pk-raises-1-1-million-funding/" class="d-inline-block px-5" target="_blank">
<img height="40" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/pro-pakistani.png" alt="Pro Pakistani">
</a>
<a href="http://perspective.pk/mydoctor-pk/" class="d-inline-block px-5" target="_blank">
<img height="40" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/perspective.png" height="30" alt="Pro Pakistani">
</a>
<a href="https://epaper.dawn.com/DetailImage.php?StoryImage=27_05_2018_010_008" class="d-inline-block px-5" target="_blank">
<img height="40" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/news/dawn.png" height="30" alt="DAWN">
</a>
</marquee>
</div>
</div>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MTT45TS"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<script src="frontend/assets/js/ie10-viewport-bug-workaround.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>


<script src="../ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>

<script src="../use.fontawesome.com/9dddad8e55.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
<script src="frontend/assets/js/owl.carousel.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
<script src="frontend/assets/js/custom.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
<script src="frontend/assets/js/common.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
<script src="frontend/bootstrap/js/typeahead.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
<script src="frontend/bootstrap/js/bootstrap.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
<script src="frontend/assets/js/file-validator.js" type="1d2c8a7024420f104c0feeb6-text/javascript" charset="utf-8"></script>
<script src="../cdn.rawgit.com/leafo/sticky-kit/v1.1.2/jquery.sticky-kit.min.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>

<style>
    #list_footer li {
        display: none;
    }
    #list_footer1 li {
        display: none;
    }
    #list_footer2 li {
        display: none;
    }
    #img-arrow {
        display: inline-block;
    }
    #img-arrow i {
        margin-top: 20px;
        font-size: 40px;
    }
    #img-arrow-up {
        display: none;
    }
    #img-arrow-up i {
        margin-top: 20px;
        font-size: 40px;
    }
</style>
<div class="bg-light">
<div class="container">
<div class="row footer_row">
<div class="col-sm-3 col-md-3">
<a target="_blank" href="pakistan/lahore.html"><h4 class="head-font-size text-primary fw-400">Doctors in Lahore</h4></a>
<ul class="footer_li">
<li><a target="_blank" href="pakistan/lahore/dentist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Dentists in Lahore</a></li>
<li><a target="_blank" href="pakistan/lahore/child-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Child Specialists in Lahore</a></li>
<li><a target="_blank" href="pakistan/lahore/gynecologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Gynecologists in Lahore</a></li>
<li><a target="_blank" href="pakistan/lahore/skin-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Skin Specialists in Lahore</a></li>
<li><a target="_blank" href="pakistan/lahore/eye-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Eye Specialists in Lahore</a></li>
</ul>
<ul class=" footer_li list_footer">
<li><a target="_blank" href="pakistan/lahore/plastic-surgeon.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Plastic Surgeons in Lahore</a></li>
<li><a target="_blank" href="pakistan/lahore/orthopedic-surgeon.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Orthopedic Surgeons in Lahore</a></li>
<li><a target="_blank" href="pakistan/lahore/cardiologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Cardiologists in Lahore</a></li>
<li><a target="_blank" href="pakistan/lahore/ent-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best ENT Specialists in Lahore</a></li>
<li><a target="_blank" href="pakistan/lahore/condition.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by condition in Lahore</a></li>
<li><a target="_blank" href="pakistan/lahore/treatment.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by treatment in Lahore</a></li>
<li><a target="_blank" href="pakistan/lahore/hospital.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Hospitals in Lahore</a></li>
<li><a target="_blank" href="pakistan/lahore/radiology-lab"><i class="fa fa-chevron-right text-primary mr-1"></i>Diagnostic services in Lahore</a></li>
</ul>
</div>
<div class="col-sm-3 col-md-3">
<a target="_blank" href="pakistan/karachi"><h4 class="head-font-size text-primary fw-400">Doctors in Karachi</h4></a>
<ul class="footer_li">
<li><a target="_blank" href="pakistan/karachi/dentist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Dentists in Karachi</a></li>
<li><a target="_blank" href="pakistan/karachi/child-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Child Specialists in Karachi</a></li>
<li><a target="_blank" href="pakistan/karachi/gynecologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Gynecologists in Karachi</a></li>
<li><a target="_blank" href="pakistan/karachi/skin-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Skin Specialists in Karachi</a></li>
<li><a target="_blank" href="pakistan/karachi/eye-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Eye Specialists in Karachi</a></li>
</ul>
<ul class="footer_li list_footer">
<li><a target="_blank" href="pakistan/karachi/plastic-surgeon.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Plastic Surgeons in Karachi</a></li>
<li><a target="_blank" href="pakistan/karachi/orthopedic-surgeon.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Orthopedic Surgeons in Karachi</a></li>
<li><a target="_blank" href="pakistan/karachi/cardiologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Cardiologists in Karachi</a></li>
<li><a target="_blank" href="pakistan/karachi/ent-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best ENT Specialists in Karachi</a></li>
<li><a target="_blank" href="pakistan/karachi/condition.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by condition in Karachi</a></li>
<li><a target="_blank" href="pakistan/karachi/treatment.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by treatment in Karachi</a></li>
<li><a target="_blank" href="pakistan/karachi/hospital.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Hospitals in Karachi</a></li>
<li><a target="_blank" href="pakistan/karachi/radiology-lab.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Diagnostic services in Karachi</a></li>
</ul>
</div>
<div class="col-sm-3 col-md-3">
<a target="_blank" href="pakistan/islamabad.html"><h4 class="head-font-size text-primary fw-400">Doctors in Islamabad</h4></a>
<ul class="footer_li">
<li><a target="_blank" href="pakistan/islamabad/dentist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Dentists in Islamabad</a></li>
<li><a target="_blank" href="pakistan/islamabad/child-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Child Specialists in Islamabad</a></li>
<li><a target="_blank" href="pakistan/islamabad/gynecologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Gynecologists in Islamabad</a></li>
<li><a target="_blank" href="pakistan/islamabad/skin-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Skin Specialists in Islamabad</a></li>
<li><a target="_blank" href="pakistan/islamabad/eye-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Eye Specialists in Islamabad</a></li>
</ul>
<ul class="footer_li list_footer">
<li><a target="_blank" href="pakistan/islamabad/plastic-surgeon.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Plastic Surgeons in Islamabad</a></li>
<li><a target="_blank" href="pakistan/islamabad/orthopedic-surgeon.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Orthopedic Surgeons in Islamabad</a></li>
<li><a target="_blank" href="pakistan/islamabad/cardiologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Cardiologists in Islamabad</a></li>
<li><a target="_blank" href="pakistan/islamabad/ent-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best ENT Specialists in Islamabad</a></li>
<li><a target="_blank" href="pakistan/islamabad/condition.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by condition in Islamabad</a></li>
<li><a target="_blank" href="pakistan/islamabad/treatment.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by treatment in Islamabad</a></li>
<li><a target="_blank" href="pakistan/islamabad/hospital.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Hospitals in Islamabad</a></li>
<li><a target="_blank" href="pakistan/islamabad/radiology-lab.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Diagnostic services in Islamabad</a></li>
</ul>
</div>
<div class="col-sm-3 col-md-3">
<h4 class="head-font-size text-primary fw-400">Doctors in Other Cities</h4>
<ul class="footer_li">
<li><a target="_blank" href="pakistan/faisalabad/dentist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Dentists in Faisalabad</a></li>
<li><a target="_blank" href="pakistan/faisalabad/skin-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Skin Specialists in Faisalabad</a></li>
<li><a target="_blank" href="pakistan/faisalabad/gynecologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Gynecologists in Faisalabad</a></li>
<li><a target="_blank" href="pakistan/multan/dentist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Dentists in Multan</a></li>
<li><a target="_blank" href="pakistan/multan/skin-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Skin Specialists in Multan</a></li>
<li><a target="_blank" href="pakistan/multan/gynecologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Gynecologists in Multan</a></li>
<li><a target="_blank" href="pakistan/peshawar/dentist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Dentists in Peshawar</a></li>
<li><a target="_blank" href="pakistan/peshawar/skin-specialist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Skin Specialists in Peshawar</a></li>
<li><a target="_blank" href="pakistan/peshawar/gynecologist.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Gynecologists in Peshawar</a></li>
<li><a target="_blank" href="pakistan/faisalabad/condition.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by condition in Faisalabad</a></li>
<li><a target="_blank" href="pakistan/faisalabad/treatment.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Doctors by treatment in Faisalabad</a></li>
<li><a target="_blank" href="pakistan/all/hospital.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Best Hospitals in Pakistan</a></li>
<li><a target="_blank" href="pakistan/peshawar/radiology-lab.html"><i class="fa fa-chevron-right text-primary mr-1"></i>Diagnostic services in Peshawar</a></li>
</ul>
</div>
</div>
</div>
</div>
<footer class="site-footer p-0 footer">
<div class="footer-container container">
<div class="row py-5">
<div class="col-md-6">
<img class="d-block mb-5" src="https://s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/oladoc_footer.svg" alt=" oladoc.com | Find Best Doctors, Book Online Appointments, Order Medicines, Order Lab Tests" height="32" />
<p class="footer-font-size text-secondary mb-5 mb-md-0">Book appointments with the best Doctors and Specialists such as Gynecologists, Skin Specialists, Child Specialists, Surgeons, etc. in Pakistan conveniently.</p>
</div>
<div class="col-md-6">
<p class="head-font-size text-white mt-1 mb-4">Download App</p>
<div class="d-md-flex justify-content-between align-items-end footer-partners">
<div class="d-flex align-items-end">
<a href="https://itunes.apple.com/us/app/oladoc-the-health-app/id1343718442?ls=1&amp;mt=8" target="_blank" class="d-inline-block mr-2">
<img height="54" class="img-responsive" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/app_store.png" alt="Download oladoc app from the App Store">
</a>
<a href="https://play.google.com/store/apps/details?id=com.mediconnect.oladoc&amp;hl=en" target="_blank" class="d-inline-block">
<img height="54" class="img-responsive" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/google_play.png" alt="Download oladoc app from the Play Store">
</a>
</div>
</div>
</div>
</div>
</div>
<div class="bg-white py-5 d-none">
<div class="container">
<div class="row d-md-flex align-items-center justify-content-between">
<div class="col-xs-12 col-sm-4 mb-2 mb-md-0">
<span class="h3 m-0 text-secondary fw-400">Our Partners</span>
</div>
<div class="col-xs-12 col-sm-8 partner-logos">
<img class="mr-2" alt="Aman is an oladoc partner" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/partners/color/aman.png" />
<img class="mr-2" alt="CSH Pharma Group is an oladoc partner" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/partners/color/csh.png" />
<img class="mr-2" alt="FonePay is an oladoc partner" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/partners/color/fonepay.png" />
<img class="mr-2" alt=" Mothers.pk is an oladoc partner" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/partners/color/mothers.png" />
<img class="mr-2" alt="Chughtai Lab is an oladoc partner" src="../s3-eu-west-1.amazonaws.com/mdpk/frontend/assets/images/partners/color/chugtai.png" />
</div>
</div>
</div>
</div>
<div class="container-fluid" style="border-top: 1px solid #707070;">
<div class="container">
<div class="row py-5 d-md-flex align-items-center">
<div class="col-md-6 text-center text-md-left">
<p class="footer-font-size text-secondary m-0">&copy; 2015 -
<script type="1d2c8a7024420f104c0feeb6-text/javascript">
                                document.write(new Date().getFullYear())
                            </script> <a href="index.html" class="footer-font-size text-warning">MediConnect Services</a></p>
</div>
<div class="col-md-6 text-center text-md-right">
<span class="footer-font-size text-white mr-5">
Connect with us
</span>
<ul class="d-inline-block">
<li class="p-0 d-inline-block">
<a href="https://twitter.com/oladocsays" target="_blank">
<i class="fa fa-twitter text-white"></i>
</a>
</li>
<li class="p-0 d-inline-block">
<a class="ml-1" href="https://www.facebook.com/myoladoc" target="_blank">
<i class="fa fa-facebook text-white"></i>
</a>
</li>
<li class="p-0 d-inline-block">
<a class="ml-1" href="https://www.instagram.com/oladocsays/" target="_blank">
<i class="fa fa-instagram text-white"></i>
</a>
</li>
<li class="p-0 d-inline-block">
<a class="ml-1" href="contact.html">
<i class="fa fa-envelope text-white"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</footer>

<div class="modal fade bs-example-modal-md" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myMidalModalLabel">
<div class="modal-dialog modal-md">
<div class="modal-content px-0">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title">Sign Up</h3>
<p class="pre-filled d-none"></p>
</div>
<div class="modal-body p-5 pb-1">
<ul class="nav nav-tabs signup-tabs d-none">
<li class="active" id="action-user-signup"><a data-toggle="tab" href="#users-signup">I'm a User</a></li>
<li id="action-doc-signup"><a data-toggle="tab" href="#signup_doctors">I'm a Doctor</a></li>
</ul>
<div class="tab-content">

<div id="users-signup" class="tab-pane fade in active">
<form method="post" action="https://oladoc.com/signup" class="signup_form" onsubmit="if (!window.__cfRLUnblockHandlers) return false; return validatesignup()" data-cf-modified-1d2c8a7024420f104c0feeb6-="">
<div class="form-group">
<div class="row">
<div class="col-xs-12">
<a href="javascript:;" class="facebook-login">
<span class=" ">
<i class="fa fa-facebook"></i>
</span><strong>GET STARTED WITH FACEBOOK</strong>
</a>
</div>
<h3 class="login-or text-center">OR</h3>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-md-6 d-none">
<label for="pmdc">Title</label>
<i class="icon-user-2 iconstyle"></i>
<input type="text" class="form-control signup-form-fields" name="title" id="title_user" placeholder="Mr./Ms./Dr./Prof.">
</div>
<div class="col-md-6">
<label for="name">Name</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#user"></use>
</svg>
</i>
<input type="text" class="form-control signup-form-fields" name="signup_name" id="signup_name" placeholder="Name" required />
<p id="signup_error_name"></p>
</div>
<div class="col-md-6 ">
<label for="phone">Phone No.</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#phone"></use>
</svg>
</i>
<input type="text" class="form-control signup-form-fields" name="signup_phone" id="phone" placeholder="eg. 03001234567" required />
<p id="signup_error_phone"></p>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-md-6">
<label for="email">Email</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#envelope"></use>
</svg>
</i>
<input type="text" class="form-control signup-form-fields" name="signup_email" id="signup_email" placeholder="Email" required />
<div id="error" style="color:#F00"></div>
<p id="signup_error_email"></p>
</div>
<div class="col-md-6 ">
<label for="password">Password</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#lock"></use>
</svg>
</i>
<input type="password" class="form-control signup-form-fields" name="signup_password" id="signup_password" placeholder="Password" required="required">
<p id="signup_password_error"></p>
</div>
</div>
</div>
<div class="form-group d-none">
<div class="row">
<div class="col-md-6  d-none">
<label for="password">Re-type Password</label>
<i class="icon-lock iconstyle"></i>
<input type="password" class="form-control signup-form-fields" name="retype-signup_password" id="retype-password" placeholder="Re-Type Password">
<p id="signup_error_repeat_pass"></p>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-md-12">
<label for="gender">Gender</label>
<br />
<input id="gender_male" type="radio" name="gender" value="Male" />
<label for="gender_male" class="fw-300 clickable mr-2">Male</label>
<input id="gender_female" type="radio" name="gender" value="Female" />
<label for="gender_female" class="fw-300 clickable mr-2">Female</label>
</div>
</div>
</div>
<div class="checkbox">
<input type="hidden" name="signup_ifdoctor" id="doctorSignUpCheck_user" value="">
</div>
<div class="checkbox">
<label style="padding-left:0px !important;">
By signing up, you agree to oladoc's <a href="terms-of-use.html" target="_blank">Terms of use</a> and <a href="privacy_policy.html" target="_blank"> Privacy Policy</a> </label>
</div>
<input type="hidden" name="ci_csrf_token" value="82b2fd03b3a61f87cccfc9573b028c60" />
<div class="row">
<div class="col-xs-12">
<button type="submit" class="btn btn-block btn-padded bg-warning text-white z-depth-1 pull-right" id="signupsubmit js-btn-control">Sign Up</button>
</div>
</div>
</form> </div>

<div class="tab-pane fade in" id="signup_doctors">
<form method="post" id="doctors-signup" action="https://oladoc.com/signup" class="signup_form">
<div class="form-group mb-0">
<div class="row">
<div class="col-md-6 d-none">
<label for="pmdc">Title</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#user"></use>
</svg>
</i>
<input type="text" class="form-control signup-form-fields" name="title" id="title" placeholder="Mr./Ms./Dr./Prof.">
</div>
<div class="col-md-6 mb-2">
<label for="name">Name</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#user"></use>
</svg>
</i>
<input type="text" class="form-control signup-form-fields" name="signup_name" id="signup_name_doctor" placeholder="Name" required />
<p id="signup_error_name_doctor"></p>
</div>
<div class="col-md-6 mb-2">
<label for="phone">Phone No.</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#phone"></use>
</svg>
</i>
<input type="text" class="form-control signup-form-fields" name="signup_phone" id="phone_doctor" placeholder="eg. 0300 1234567" required />
<p id="signup_error_phone_doctor"></p>
</div>
</div>
</div>
<div class="form-group mb-2">
<div class="row">
<div class="col-md-6 mb-2">
<label for="email">Email</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#envelope"></use>
</svg>
</i>
<input type="email" class="form-control signup-form-fields" name="signup_email" id="signup_email_doctor" placeholder="Email" required />
<div id="error_doctor" style="color:#F00"></div>
<p class="m-0" id="signup_error_email_doctor"></p>
</div>
<div class="col-md-6 mb-2">
<label for="password">Password</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#password"></use>
</svg>
</i>
<input type="password" class="form-control signup-form-fields" name="signup_password" id="signup_password_doctor" placeholder="Password" required="required" />
<p class="m-0" id="signup_password_error_doctor"></p>
</div>
</div>
</div>
<div class="form-group d-none">
<div class="row">
<div class="col-md-6 ">
<label for="password">Re-type Password</label>
<i class="icon-lock iconstyle"></i>
<input type="password" class="form-control signup-form-fields" name="retype-signup_password" id="retype-password_doctor" placeholder="Re-Type Password" />
<p id="signup_error_repeat_pass_doctor"></p>
</div>
</div>
</div>
<div class="form-group mb-2">
<div class="row">
<div class="col-md-12 mb-2">
<label for="specialization">Specialization</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#service"></use>
</svg>
</i>
<input type="hidden" name="signup_specialization_name" id="signup_specialization_name" />
<select class="form-control signup-form-fields speciail" id="signup_specialization" name="signup_specialization">
<option value="">Select specialization</option>
<option value="1">Acupuncturist</option>
<option value="2">Addiction Specialist</option>
<option value="250">Aesthetic Gynecologist</option>
<option value="222">Aesthetic Medicine Specialist</option>
<option value="4">Alternative Medicine Practitioner</option>
<option value="223">Andrologist</option>
<option value="5">Anesthesiologist</option>
<option value="209">Asthma Specialist</option>
<option value="126">Audiologist</option>
<option value="200">Autism Consultant</option>
<option value="218">Bio-resonance Specialist</option>
<option value="112">Breast Surgeon</option>
<option value="208">Burns Specialist</option>
<option value="225">Cancer Surgeon</option>
<option value="82">Cardiac Surgeon</option>
<option value="6">Cardiologist</option>
<option value="7">Cardiothoracic Surgeon</option>
<option value="117">Cardiovascular Surgeon</option>
<option value="9">Chiropractor</option>
<option value="259">Colorectal Cancer Surgeon</option>
<option value="10">Colorectal Surgeon</option>
<option value="177">Community Medicine</option>
<option value="196">Consultant Physician</option>
<option value="235">Cosmetic Dentist</option>
<option value="254">Cosmetic Surgeon</option>
<option value="206">Cosmetologist</option>
<option value="11">Counselor</option>
<option value="122">Critical Care Physician</option>
<option value="14">Dentist</option>
<option value="15">Dermatologist</option>
<option value="228">Diabetes Counsellor</option>
<option value="79">Diabetologist</option>
<option value="16">Dietitian</option>
<option value="194">Emergency Medicine Specialist</option>
<option value="19">Endocrinologist</option>
<option value="216">Endodontist</option>
<option value="131">Endoscopic Surgeon</option>
<option value="137">Endovascular Surgeon</option>
<option value="17">ENT Specialist</option>
<option value="80">ENT Surgeon</option>
<option value="20">Eye Specialist</option>
<option value="76">Eye Surgeon</option>
<option value="248">Family Physician</option>
<option value="189">Fertility Consultant</option>
<option value="178">Forensic Medicine</option>
<option value="22">Gastroenterologist</option>
<option value="85">General Medicine</option>
<option value="58">General Physician</option>
<option value="23">General Surgeon</option>
<option value="224">Geriatrician</option>
<option value="72">Gynecologist</option>
<option value="87">Hair Transplant Surgeon</option>
<option value="245">Hand Surgeon</option>
<option value="132">Head and Neck Surgeon</option>
<option value="88">Hematologist</option>
<option value="136">Hepatobiliary and Liver Transplant Surgeon</option>
<option value="26">Hepatologist</option>
<option value="210">Hernia Surgeon</option>
<option value="215">Homeopath</option>
<option value="27">Hospice and Palliative Care Doctor</option>
<option value="231">Hypertension Specialist</option>
<option value="127">Immunologist</option>
<option value="203">Implantologist</option>
<option value="29">Infectious Disease Specialist</option>
<option value="238">Internal Medicine Specialist</option>
<option value="257">Interventional Cardiologist</option>
<option value="115">Kidney Transplant Surgeon</option>
<option value="81">Laparoscopic Surgeon</option>
<option value="217">Laser Specialist</option>
<option value="221">Male Sexual Health Specialist</option>
<option value="34">Naturopathic Doctor</option>
<option value="145">Neonatologist</option>
<option value="35">Nephrologist</option>
<option value="38">Neuro Surgeon</option>
<option value="36">Neurologist</option>
<option value="37">Neuromusculoskeletal Medicine Doctor</option>
<option value="252">Neuroradiologist</option>
<option value="39">Nuclear Medicine Specialist</option>
<option value="213">Nutritional Psychologist</option>
<option value="41">Nutritionist</option>
<option value="111">Obstetrician</option>
<option value="43">Oncologist</option>
<option value="45">Optometrist</option>
<option value="84">Oral and Maxillofacial Surgeon</option>
<option value="190">Orthodontist</option>
<option value="47">Orthopedic Surgeon</option>
<option value="48">Orthotists and Prosthetist</option>
<option value="192">Pain Management Specialist</option>
<option value="255">Pathology Lab</option>
<option value="116">Pediatric Cardiologist</option>
<option value="182">Pediatric Cardiovascular Surgeon</option>
<option value="184">Pediatric Endocrinologist</option>
<option value="212">Pediatric Gastroenterologist</option>
<option value="185">Pediatric Hematologist</option>
<option value="186">Pediatric Immunologist</option>
<option value="187">Pediatric Nephrologist</option>
<option value="214">Pediatric Neurologist</option>
<option value="251">Pediatric Nutritionist</option>
<option value="258">Pediatric Oncologist</option>
<option value="247">Pediatric Orthopedic Surgeon</option>
<option value="183">Pediatric Radiologist</option>
<option value="51">Pediatric Surgeon</option>
<option value="244">Pediatric Urologist</option>
<option value="52">Pediatrician</option>
<option value="207">Periodontist</option>
<option value="164">Physiotherapist</option>
<option value="55">Plastic Surgeon</option>
<option value="56">Podiatrist</option>
<option value="57">Preventive Medicine Doctor</option>
<option value="134">Primary Care Physician</option>
<option value="204">Prosthodontist</option>
<option value="59">Psychiatrist</option>
<option value="60">Psychologist</option>
<option value="61">Pulmonologist</option>
<option value="197">Radiation Oncologist</option>
<option value="62">Radiologist</option>
<option value="253">Radiology Lab</option>
<option value="246">Reconstructive Surgeon</option>
<option value="232">Regenerative Medicine</option>
<option value="193">Rehab Medicine</option>
<option value="234">Rehablitation Specialist</option>
<option value="188">Renal Surgeon</option>
<option value="240">Restorative Dentist</option>
<option value="63">Rheumatologist</option>
<option value="78">Sexologist</option>
<option value="64">Sleep Medicine Doctor</option>
<option value="128">Sonologist</option>
<option value="220">Specialist in Operative Dentistry</option>
<option value="66">Speech and Language Pathologist</option>
<option value="140">Spinal Surgeon</option>
<option value="67">Sports Medicine Specialist</option>
<option value="86">Thoracic Surgeon</option>
<option value="239">Thyroid Surgeon</option>
<option value="211">Uro-Oncologist</option>
<option value="70">Urologist</option>
<option value="71">Vascular Surgeon</option>
<option value="242">Vitreo Retina Surgeon</option>
<option value="74">Weight Loss Surgeon</option>
</select>
</div>
</div>
</div>
<div class="form-group mb-2">
<div class="row">
<div class="col-md-6 mb-2">
<label for="clinic">Primary Clinic/Hospital</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#hospital"></use>
</svg>
</i>
<input type="text" class="form-control signup-form-fields" name="signup_clinic" id="place_name" placeholder="Primary Clinic/Hospital">
<input type="hidden" id="selection_made" value="0" />
<p class="m-0" id="signup_error_clinic"></p>
</div>
<div class="col-md-6 mb-2">
<label for="city">City</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#location"></use>
</svg>
</i>
<input type="text" class="form-control signup-form-fields" name="signup_city" id="signup_city" placeholder="City">
<p id="signup_error_city"></p>
</div>
</div>
</div>
<div class="form-group d-none">
<div class="row">
<div class="col-md-12">
<label for="gender">Gender</label>
<br />
<input type="radio" name="gender" value="Male" /> Male
<input type="radio" name="gender" value="Female" /> Female
</div>
</div>
</div>
<div class="checkbox">
<input type="hidden" name="signup_ifdoctor" id="doctorSignUpCheck" value="Doctor">
</div>
<div class="for-doctor-signup d-none" id="doctorSignUpForm">
<div class="form-group">
<div class="row">
<div class="col-md-6 ">
<label for="education">Education</label>
<i class="icon-graduation-cap iconstyle"></i>
<input type="text" class="form-control signup-form-fields" name="signup_education" id="signup_education" placeholder="Education" value="OD">
<p id="signup_error_education"></p>
</div>
<div class="col-md-6">
<label for="pmdc">PMDC Reg. No.</label>
<i class="icon-key iconstyle"></i>
<input type="text" class="form-control signup-form-fields" name="signup_pmdc" id="signup_pmdc" placeholder="PMDC Reg. No.">
<p id="signup_error_pmdc"></p>
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-md-6">
<label for="app-phone">Phone No. <em>(For Appointment)</em></label>
<i class="icon-phone iconstyle"></i>
<input type="text" class="form-control signup-form-fields" name="signup_phone2" id="app-phone" placeholder="Phone No for Appointment">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-md-6 exist">
<label for="address">Address</label>
<i class="icon-location iconstyle"></i>
<input type="text" class="form-control signup-form-fields" name="signup_address" id="address" placeholder="Address">
</div>
<div class="col-md-6 exist">
<label for="address">Hospital Phone</label>
<i class="icon-phone iconstyle"></i>
<input type="text" class="form-control signup-form-fields" name="signup_hosp_phone" id="hosp_phone" placeholder="Phone">
</div>
</div>
</div>
</div>
<div class="checkbox">
<label style="padding-left:0px !important;">
By signing up, you agree to oladoc's <a href="terms-of-use.html" target="_blank">Terms of use</a> and <a href="privacy_policy.html" target="_blank"> Privacy Policy</a> </label>
</div>
<input type="hidden" name="ci_csrf_token" value="82b2fd03b3a61f87cccfc9573b028c60" />
<div class="row">
<div class="col-xs-12">
<button type="submit" class="btn btn-block btn-padded bg-warning text-white z-depth-1 pull-right js-btn-control" id="signupsubmit_doctor" onclick="if (!window.__cfRLUnblockHandlers) return false; return validatesignup_doctorperson();" data-cf-modified-1d2c8a7024420f104c0feeb6-="">Sign Up</button>
</div>
</div>
</form>
<script type="1d2c8a7024420f104c0feeb6-text/javascript">
  $(function() {
    $(".exist").hide();
        $('#place_name').autocomplete({
            source: "https://oladoc.com/hospital_exist/?"
        });
        $('#place_name').on('autocompleteselect  select', function () {
            $('#selection_made').val(1);
        });
        $('#place_name').focusout(function () {
            if ($('#selection_made').val() == 1) {
                $(".exist").hide();
            } else {
                $(".exist").show();
            }
        });
        /***************** place name ajax ************/
        $("#place_name").change(function () {
            var place_name = $(this).val();
            var url = "hospital_exist/index.html";
            jQuery.ajax({
                url: url, //Where to make Ajax calls
                type: "GET",
                data: {
                    term: place_name
                },
                dataType: 'json', // Data type, HTML, json etc.
                success: function (response) {
                    if (response) {
                        $(".exist").hide();
                    } else {
                        $(".exist").show();
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                }
            });
        }); //End of change function
      });
</script> </div>
</div> </div>
</div>
</div>
</div>


<div class="modal fade bs-example-modal-md" id="demo-modal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content edges">
<div class="modal-header px-0">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title">Get demo</h3>
</div>
<div class="modal-body p-0 demo-modal-body">
<div class="row">
<div class="col-xs-12">
<p class="py-2 m-0">Please drop your name and number below. Our Digital Health expert will contact you shortly to schedule a demo.</p>
</div>
</div>
<form id="demoRequestForm" method="POST">
<div class="row mb-2">
<div class="col-xs-12">
<i class="iconstyle" style="top: 11px;">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#user"></use>
</svg>
</i>
<input required style="padding-left: 3.5rem" type="text" class="form-control" id="user_name" name="name" placeholder="Name" />
</div>
</div>
<div class="row mb-2">
<div class="col-xs-12">
<i class="iconstyle" style="top: 11px;">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#phone"></use>
</svg>
</i>
<input required style="padding-left: 3.5rem" type="text" class="form-control" name="phone" id="user_phone" placeholder="Phone number e.g 0321XXXXXXX" />
<div class="control-label text-danger d-none">Please provide a valid phone number.</div>
</div>
</div>
<div class="row mb-2">
<div class="col-xs-12">
<i class="iconstyle" style="top: 11px;">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#location"></use>
</svg>
</i>
<input required style="padding-left: 3.5rem" type="text" class="form-control" id="user_city" name="city" placeholder="City" />
</div>
</div>
<div class="row d-none">
<div class="col-xs-12">
<input type="hidden" id="csrf_token" name="ci_csrf_token" value="82b2fd03b3a61f87cccfc9573b028c60" />
</div>
<div class="col-xs-12">
<input type="hidden" name="email_user" value="request@mydoctor.pk">
<input type="hidden" name="subject" value="Demo Request">
<input type="hidden" name="msg" value="Please provide a demo">
</div>
</div>
<div class="row">
<div class="col-xs-12 text-right">
<button type="submit" class="btn btn-padded bg-warning text-white z-depth-1 js-demo-submit js-btn-control">Get demo</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>


<div class="modal fade bs-example-modal-sm" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm">
<div class="modal-content p-0">
<div id="login-form">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3 class="modal-title">Login</h3>
</div>
<div class="modal-body py-5 px-1">
<form method="post" action="https://oladoc.com/login" onsubmit="if (!window.__cfRLUnblockHandlers) return false; return validatelogin()" class="login_form" data-cf-modified-1d2c8a7024420f104c0feeb6-="">
<div class="form-group container-fluid">
<div class="row">
<div class="col-xs-12" style="">
<button class="facebook-login"><span class="d-flex align-items-center justify-content-center"><i class="fa fa-facebook" aria-hidden="true"></i></span><strong>SIGN IN WITH FACEBOOK</strong></button>
<h3 class="login-or text-center">OR</h3>
</div>
</div>
</div>
<div class="form-group container-fluid">
<div class="row">
<div class="col-xs-12" style="">
<label for="email">Email</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#envelope"></use>
</svg>
</i>
<input name="user_email" type="text" class="form-control signup-form-fields" id="email" placeholder="Email or Mobile number" required="required">
<p id="login_error_email"></p>
</div>
</div>
</div>
<div class="form-group container-fluid">
<div class="row">
<div class="col-xs-12" style="">
<label for="password">Password</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#lock"></use>
</svg>
</i>
<input name="user_pass" type="password" class="form-control signup-form-fields" id="login_password" placeholder="Password" required="required">
<p id="login_password_error"></p>
</div>
</div>
<div class="row">
<div class="col-xs-12 text-right">
<a href="javascript:;" id="forgot-password">Forgot Password?</a>
</div>
</div>
</div>
<div class="form-group container-fluid">
<div class="row">
<div class="col-xs-12" style="">

<button type="submit" class="btn btn-padded btn-block bg-warning text-white z-depth-1 js-btn-control js-btn-login">Login</button>
<input type="hidden" name="ci_csrf_token" value="82b2fd03b3a61f87cccfc9573b028c60" />
</div>
</div>
</div>
<div class="form-group container-fluid">
<div class="row">
<div class="col-xs-12 text-center" style="">
<a data-target="#signup-modal" data-toggle="modal" href="javascript:;" class="d-block" id="dont-have-account">Don't have account? Sign Up</a>
</div>
</div>
</div>
</form>
</div>
</div>
<div id="forgot-pasword-data" style="display:none;">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Forgot Password?</h4>
</div>
<div class="modal-body">
<form method="post" action="https://oladoc.com/forgetpassword" id="frm_forget-password">
<div class="form-group container-fluid">
<div class="row">
<div class="col-xs-12" style="">
<label for="email">Email</label>
<i class="iconstyle" style="">
<svg viewBox="0 0 100 100" class="d-inline-block" style="height: 18px;">
<use xlink:href="#envelope"></use>
</svg>
</i>
<input type="text" name="email" class="form-control signup-form-fields" id="forget_email" placeholder="Email or Mobile number" required>
</div>
</div>
</div>
<div class="form-group container-fluid">
<div class="row">
<div class="col-xs-12" style="">
<button type="submit" class="btn btn-padded btn-block bg-warning text-white z-depth-1 js-btn-control" id="forget_btn">Send Request</button>
<p class="forget-password-msg my-3 alert-success"></p>
</div>
</div>
</div>
<div class="form-group container-fluid">
<div class="row">
<div class="col-xs-12 text-center">
<a href="javascript:;" id="remember-password">Remember Password?</a>
</div>
</div>
</div>
</form>
</div>
</div>
<script type="1d2c8a7024420f104c0feeb6-text/javascript">
    $(document).ready(function () {
        $("#email").keydown(function(e){
            if(e.which === 32) 
            return false;
        });
        $("#forget_email").keydown(function(e){
            if(e.which === 32) 
            return false;
        });
        
    });
    </script> </div>
</div>
</div>
<style>
#user-city-modal .modal-content{ border-radius: 0px;}

</style>

<div class="modal fade" id="user-city-modal" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Please tell us your city for better search results</h4>
</div>
<div class="modal-body">
<form id="frm_set_city">
<div class="form-group">
<select class="form-control" required="required" id="user-city" name="user-city">
<option value="">Select city</option>
<option value="Lahore">Lahore</option>
<option value="Karachi">Karachi</option>
<option value="Islamabad">Islamabad</option>
<option value="Rawalpindi">Rawalpindi</option>
<option value="Multan">Multan</option>
<option value="Faisalabad">Faisalabad</option>
<option value="Peshawar">Peshawar</option>
<option value="Sargodha">Sargodha</option>
<option value="Gujranwala">Gujranwala</option>
<option value="Bahawalpur">Bahawalpur</option>
</select>
</div>
<input class="btn  btn-create-account pull-right hide" id="submit-city" value="Submit" type="submit">
</form>
</div>
</div>
</div>
</div>

<a href="javascript:" class="back-to-top">
<img src="https://s3-eu-west-1.amazonaws.com/mdpk/images/arrow.svg"></a>
<script type="1d2c8a7024420f104c0feeb6-text/javascript">
    $(document).keypress(function (e) {
        if (e.which == 13) {
            $("#save_post").click();
        }
    });
    $(function () {
        $(".stick-in-parent").stick_in_parent({
            offset_top: 95,
            width:235
        });
        $("#dont-have-account").click(function () {
            $("#modal_login").modal('toggle');
        });
        $(function ($) {
// this script needs to be loaded on every page where an ajax POST may happen
            $.ajaxSetup({
                data: {
                    'ci_csrf_token': '82b2fd03b3a61f87cccfc9573b028c60'
                }
            });
        });
        $('.rquest-password-image').hide();
        //reset password form process...
        // process the form
        $('#frm_forget-password').submit(function (event) {
            // get the form data
            // there are many ways to get this data using jQuery (you can use the class or id also)
            var formData = {
                'email': $('#forget_email').val()
            };
            var btnLoading = $(this).find('.js-btn-control');
            // process the form
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url: 'https://oladoc.com/forgetpassword', // the url where we want to POST
                data: formData, // our data object
                dataType: 'json', // what type of data do we expect back from the server
                beforeSend: function () {
                    $('.rquest-password-image').show();
                    btnLoading.attr('disabled', 'disabled');
                    btnLoading.addClass('loading');
                },
                success: function (response) {
                    var obj = eval(response);
                    if (obj) {
                        $("#forget_btn").attr("disabled", true);
                        $(".forget-password-msg").addClass('alert');
                        if (obj.error == 0) {
                            if(obj.is_sms_sent == 1){
                                $(".forget-password-msg").html("Please check your sms for instructions regarding a new password.");
                            }else{
                                $(".forget-password-msg").html("Please check your email  for instructions regarding setting a new password.");
                            }
                        } else {
                            $(".forget-password-msg").html("We could not reset the password at the moment, Please check email or mobile number and try agin later.");
                        }
                    }
                },
                complete: function () {
                    btnLoading.removeAttr('disabled');
                    btnLoading.removeClass('loading');
                },
                error: function (xhr, ajaxOptions, thrownError) {}
            });
// stop the form from submitting the normal way and refreshing the page
            event.preventDefault();
        });
// process the form
        $('#user-city').change(function (event) {
// get the form data
// there are many ways to get this data using jQuery (you can use the class or id also)
            var city = $('#user-city').val();
            var formData = {
                'user_city': $('#user-city').val()
            };
// process the form
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                url: 'https://oladoc.com/set_user_city', // the url where we want to POST
                data: formData, // our data object
                dataType: 'json', // what type of data do we expect back from the server
                beforeSend: function () {
//$('.rquest-password-image').show();
                },
                success: function (response) {
                    var obj = eval(response);
                    if (obj) {
                        if (obj.error == 0) {
                            $("#user-city-modal").modal('hide');
                            var d = new Date();
                            var name = 'user-city';
                            var value = '1';
                            var minutes = 10080;
                            var date = new Date;
                            date.setDate(date.getDate() + 10);
                            $('[name="city"]').val(city);
                            document.cookie = name + "=" + value + "; expires=" + date;
                        } else {
                            $("#user-city-modal").modal('hide');
                        }
                    }
                },
                complete: function () {},
                error: function (xhr, ajaxOptions, thrownError) {}
            });
// stop the form from submitting the normal way and refreshing the page
            event.preventDefault();
        });
//end of reset password form...
        $(document).on('change', '#signup_email, #signup_email_doctor', function (e) {
            var email = $(this).val();
            var url = "check_appointment_email.html";
            var error = e.target.id == 'signup_email' ? $('#error') : $('#error_doctor');
            error.children('p').replaceWith('');
            $('#signupsubmit, #signupsubmit_doctor').removeAttr('disabled');
            jQuery.ajax({
                url: url, //Where to make Ajax calls
                type: 'post',
                data: {
                    'email': email,
                    'ci_csrf_token': '82b2fd03b3a61f87cccfc9573b028c60'
                },
                dataType: 'json', // Data type, HTML, json etc.
                success: function (response) {
                    if (response.ID) {
                        if (error.children('p').length == 0) {
                            error.append("<p>Email already exists</p>");
                            $('#signupsubmit, #signupsubmit_doctor').attr('disabled');
                        }
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                }
            });
        }); //End of change function
        
        /*  $('#doctorSignUpCheck').change(function () {
         if (this.checked)
         $('#doctorSignUpForm').fadeIn('slow');
         else
         $('#doctorSignUpForm').fadeOut('slow');
         });*/
        $('#forgot-password').click(function () {
            $('#login-form').hide('slow');
            $('#forgot-pasword-data').show('slow');
        });
        $('#remember-password').click(function () {
            $('#forgot-pasword-data').hide('slow');
            $('#login-form').show('slow');
        });
    });
</script>
<script type="1d2c8a7024420f104c0feeb6-text/javascript">
    $(".login_form").keypress(function (event) {
        if (event.which == 13) {
            event.preventDefault();
            $(".login_form").submit();
        }
    });
    window.fbAsyncInit = function () {
//Initiallize the facebook using the facebook javascript sdk
        FB.init({
            appId: '197513377470095', // App ID
            cookie: true, // enable cookies to allow the server to access the session
            status: true, // check login status
            xfbml: true, // parse XFBML
            oauth: true //enable Oauth
        });
    };
//Read the baseurl from the config.php file
    (function (d) {
        var js, id = 'facebook-jssdk',
                ref = d.getElementsByTagName('script')[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement('script');
        js.id = id;
        js.async = true;
        js.src = "../connect.facebook.net/en_US/all.js";
        ref.parentNode.insertBefore(js, ref);
    }(document));
//Onclick for fb login
    $('.facebook-login').click(function (e) {
        $('.facebook-login').attr('disabled', 'disabled');
        FB.login(function (response) {
            if (response.authResponse) {
                parent.location = 'login_facebook.html'; //redirect uri after closing the facebook popup
            }
        }, {
            scope: 'email,read_stream,publish_stream,user_birthday,user_location,user_work_history,user_hometown,user_photos'
        }); //permissions for facebook
    });
</script>
<script type="1d2c8a7024420f104c0feeb6-text/javascript">
    $(function () {
        var is_login_user = '';
        if (is_login_user) {
            if ('' == "1") {
                var formData = {
                    'provider': '',
                    'hosp_id': '',
                    'user_id': ''
                };
            } else if ('' == "Doctor") {
                var formData = {
                    'provider': '',
                    'hosp_id': '',
                    'user_id': ''
                };
            } else {
                var formData = {
                    'provider': '',
                    'hosp_id': '',
                    'user_id': ''
                };
            }
// process the form
            $.ajax({
                type: 'GET', // define the type of HTTP verb we want to use (POST for our form)
                url: 'https://oladoc.com/get_user_notifications', // the url where we want to POST
                data: formData, // our data object
                dataType: 'json', // what type of data do we expect back from the server
                beforeSend: function () {},
                success: function (response) {
                    var obj = eval(response);
                    if (obj) {
                        $(".alerts-info").html(obj.data.today_pending);
                        $(".alert-notification .block-tag").html(obj.data.today_pending + " Today's appointments <br> <br>" + obj.data.future_pending + " Future appointments");
                    }
                },
                complete: function () {},
                error: function (xhr, ajaxOptions, thrownError) {}
            });
        }
    });
</script>
<script type="1d2c8a7024420f104c0feeb6-text/javascript">
    $("#signupsubmit").click(function () {
        var check_valid = validatesignup();
        if (check_valid) {
            $('.signup_form').submit(function () {
                var btnLoading = $(this).find('.js-btn-control');
                btnLoading.attr('disabled', 'disabled');
                btnLoading.addClass('loading');
                $("input[type='submit']", this)
                        .attr('disabled', 'disabled');
                return true;
            });
        }
    });
    $(function () {
        var check_promotion = getCookie('promotion-coki');
        if (!check_promotion == '1') {
            $("#modal_promotion").modal().show();
        }
        var d = new Date();
        var name = 'promotion-coki';
        var value = '1';
        var minutes = 45;
        var date = new Date();
        date.setDate(date.getDate() + 1);
        document.cookie = name + "=" + value + "; expires=" + date;
    });
    function getCookie(name) {
        var re = new RegExp(name + "=([^;]+)");
        var value = re.exec(document.cookie);
        return (value != null) ? unescape(value[1]) : null;
    }
</script>
<script type="1d2c8a7024420f104c0feeb6-text/javascript">
    $(document).ready(function () {
        // reset form fields
        $('[name="city"], [name="doctor-name"]').val('');
        $('#img-arrow-up').click(function () {
            $('#list_footer').find('li').slideToggle("slow");
            $('#list_footer1').find('li').slideToggle("slow");
            $('#list_footer2').find('li').slideToggle("slow");
            $('#img-arrow-up').css("display", "none");
            $('#img-arrow').css("display", "inline-block");
        });
        $("#img-arrow").click(function () {
            $('#list_footer').find('li').slideToggle("slow");
            $('#list_footer1').find('li').slideToggle("slow");
            $('#list_footer2').find('li').slideToggle("slow");
            $('#img-arrow').css("display", "none");
            $('#img-arrow-up').css("display", "inline-block");
        });
        $(".download-app-icons a").hover(function () {
//$('.download-dropdown-container').addClass('show-download');
        },
                function () {
//$('.download-dropdown-container').removeClass('show-download');
                });
    });
</script>

<script type="1d2c8a7024420f104c0feeb6-text/javascript">
    function setCookieName() {
        var name = 'user-city';
        var value = $('[name="city"]').val();
        var date = new Date;
        date.setDate(date.getDate() + 10);
// Set city name in cookie
        document.cookie = name + "=" + value + "; expires=" + date;
    }
    $('.js-scroll-to').click(function (e) {
        e.preventDefault();
        t = $($(this).attr('href')).offset().top;
        $('html, body').animate({
            scrollTop: t - 100
        }, 400);
    });
    function validatePhone(field) {
        phone = field.val();
        filter = /^[\d\s]+$/;
        if (!(filter.test(phone))) {
            return false;
        } else {
            return true;
        }
    }
    
    $('#demoRequestForm').on('submit', function (e) {
        var obj;
        var btnLoading = $(this).find('.js-btn-control');
        var phoneValid = false;
// 1. Prevent default button behavior
        e.preventDefault();
// 2. Validate phone number
        phoneValid = validatePhone($('#user_phone'));
// 3. POST data via AJAX
        if (phoneValid) {
            $('#user_phone').removeClass('invalid');
            $.ajax({
                url: 'https://oladoc.com/request_demo',
                type: 'POST',
                data: $('#demoRequestForm').serialize(),
                beforeSend: function () {
                    btnLoading.attr('disabled', 'disabled');
                    btnLoading.addClass('loading');
                },
                success: function (data) {
                    obj = JSON.parse(data);
                    if (obj.error == 0) {
                        $('#demoRequestForm')[0].reset();
                        $('.demo-modal-body').html('<p class="m-0 py-4">Thank you for your interest. We will get in touch shortly!</p>');
                    } else {
                        $('.demo-modal-body').html('<p class="m-0 py-4">Cannot send demo request please try again later!</p>');
                    }
                },
                complete: function () {
                    $('.request-image-demo').hide();
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    $(".demo-modal-body").html("Cannot place order please try later.");
                }
            });
        } else {
            $('#user_phone').addClass('invalid');
            $('.control-label').removeClass('d-none');
        }
    });
</script>

<script type="1d2c8a7024420f104c0feeb6-text/javascript">
        !function (f, b, e, v, n, t, s)
        {
            if (f.fbq)
                return;
            n = f.fbq = function () {
                n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq)
                f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
                '../connect.facebook.net/en_US/fbevents.js');
        fbq('init', '2094734740812975');
        fbq('track', 'PageView');
    </script>
<noscript>
    <img height="1" width="1" src="https://www.facebook.com/tr?id=2094734740812975&amp;ev=PageView&amp;noscript=1"/>
    </noscript>

<script src="frontend/assets/js/lightslider.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>

<script src="frontend/assets/js/wow.js" type="1d2c8a7024420f104c0feeb6-text/javascript"></script>
<script type="1d2c8a7024420f104c0feeb6-text/javascript">
                        function set_gender(gender){
                            document.getElementById('search_gender').value = gender;
                        }
                        function get_localities_areas(){
                        
                        var city = $("#city1").val();
                        if(city == ''){
                        city = getCookie('user-city');
                        }
                        if(city != ''){
                            //alert("localities data requested.");
                        $.ajax({
                        type: "GET",
                        dataType: 'json', // what type of data do we expect back from the server
                        url: "https://oladoc.com/get_localities",
                        data: {'city':city}, // our data object
                        beforeSend: function() {},
                        success: function(r) {
                        var str = '<option value="" selected>Any locality</option>';
                        //alert("localities data received.");
                        for(var i=0; i<r.data.length; i++){
                        str += '<option value="'+r.data[i]['locality']+'">'+r.data[i]['locality']+'</option>';
                        }
                        $("#locality").empty();
                        $("#locality").append(str);
                        
                        },
                        complete: function() {}
                        });
                        }
                        }
                        $("#city1").change(function(){
                        // alert("test2");
                        get_localities_areas();
                        });
                        
                        get_localities_areas();
                        $(document).ready(function() {
                        //get_banner_doctors();
                        var winwidth = $(window).width();
                        if (winwidth <= 480) {
                        $(function() {
                        $('#select-featured-spec').click(function() {
                        $('#filters-doctors').slideToggle();
                        });
                        $('#filters-doctors li').click(function(e) {
                        $('#select-featured-spec').text($(this).text());
                        $('#filters-doctors').hide();
                        $(this).addClass('current');
                        e.preventDefault();
                        });
                        });
                        }
                        $(window).resize(function() {
                        var winwidth = $(window).width();
                        if (winwidth <= 480) {
                        $(function() {
                        $('#select-featured-spec').click(function() {
                        $('#filters-doctors').show();
                        });
                        $('#filters-doctors li').click(function(e) {
                        $('#select-featured-spec').text($(this).text());
                        $('#filters-doctors').hide();
                        $(this).addClass('current');
                        e.preventDefault();
                        });
                        });
                        }
                        });
                        //user city modal
                            $(function() {
                                var city_cokk = getCookie('user-city');
                                if (city_cokk != '1') {
                                    $('[name="city"]').val(city_cokk);
                                }
                            });
                        });
                        
                        $(function() {
                            $('body').on('click', '.btn-close-msngr', function() {
                            $('.fb-page').toggle();
                            if ($('.fb-page').is(':hidden')) {
                                $('.arrow-up').addClass('show').removeClass('hide');
                                $('.arrow-down').removeClass('show').addClass('hide');
                            } else {
                                $('.arrow-up').removeClass('show').addClass('hide');
                                $('.arrow-down').addClass('show').removeClass('hide');
                            }
                        });
                        setTimeout(function() {
                            $('.messinger-outer').prepend('<span class="close-messinger">talk with us<span class="btn-close-msngr"><i class="fa fa-angle-down arrow-down hide" aria-hidden="true"></i><i class="fa fa-angle-up arrow-up show" aria-hidden="true"></i></span></span>');
                            $('.arrow-up').removeClass('hide');
                            $('.arrow-up').addClass('show');
                        }, 2000);
                        (function($) {
                        $.fn.countTo = function(options) {
                        // merge the default plugin settings with the custom options
                        options = $.extend({}, $.fn.countTo.defaults, options || {});
                        // how many times to update the value, and how much to increment the value on each update
                        var loops = Math.ceil(options.speed / options.refreshInterval),
                        increment = (options.to - options.from) / loops;
                        return $(this).each(function() {
                        var _this = this,
                        loopCount = 0,
                        value = options.from,
                        interval = setInterval(updateTimer, options.refreshInterval);
                        function updateTimer() {
                        value += increment;
                        loopCount++;
                        $(_this).html(value.toFixed(options.decimals));
                        if (typeof(options.onUpdate) == 'function') {
                        options.onUpdate.call(_this, value);
                        }
                        if (loopCount >= loops) {
                        clearInterval(interval);
                        value = options.to;
                        if (typeof(options.onComplete) == 'function') {
                        options.onComplete.call(_this, value);
                        }
                        }
                        }
                        });
                        };
                        $.fn.countTo.defaults = {
                        from: 0, // the number the element should start at
                        to: 100, // the number the element should end at
                        speed: 1000, // how long it should take to count between the target numbers
                        refreshInterval: 100, // how often the element should be updated
                        decimals: 0, // the number of decimal places to show
                        onUpdate: null, // callback method for every time the element is updated,
                        onComplete: null, // callback method for when the element finishes updating
                        };
                        })(jQuery);
                        jQuery(function($) {
                        $('.span-counter').countTo({
                        from: 11000,
                        to: 11000,
                        speed: 800,
                        refreshInterval: 10,
                        decimals: 0,
                        onComplete: function(value) {
                        var number = value.toLocaleString();
                        $('.span-counter').html(number);
                        }
                        });
                        });
                        });
                        $(function() {
                            wow = new WOW({
                                animateClass: 'animated',
                                offset: 100,
                                callback: function(box) {
                                // console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                                }
                            });
                        wow.init();
                        $("#content-slider").lightSlider({
                                loop: false,
                                keyPress: true,
                                auto: true,
                                loop: false,
                                item: 8,
                                pause: 30000,
                                slideMove: 1,
                                responsive: [{
                                breakpoint: 800,
                                settings: {
                                item: 6
                            }
                        }, {
                            breakpoint: 480,
                            settings: {
                                item: 4
                            }
                        }],
                        onBeforeSlide: function(el) {}
                        });
                        $("#blog-list-slider").lightSlider({
                        keyPress: true,
                        auto: true,
                        loop: false,
                        item: 8,
                        pause: 30000,
                        slideMove: 1,
                        responsive: [{
                        breakpoint: 800,
                        settings: {
                        item: 6
                        }
                        }, {
                        breakpoint: 480,
                        settings: {
                        item: 6
                        }
                        }],
                        onBeforeSlide: function(el) {
                        }
                        });
                        });
                        </script>
<style>
                        ul {
                            list-style: none outside none;
                            padding-left: 0;
                            margin: 0;
                        }
                        .demo .item {
                            margin-bottom: 60px;
                        }
                        .content-slider h3 {
                            margin: 0;
                            padding: 70px 0;
                        }
                        .demo {
                            width: 800px;
                        }
                        </style>
<script type="1d2c8a7024420f104c0feeb6-text/javascript">
                        $(function() {
                        $("#owl-example").owlCarousel({
                        autoPlay: 10000,
                        navigation: false,
                        slideSpeed: 500,
                        paginationSpeed: 2000,
                        singleItem: true,
                        pagination: false,
                        rewindSpeed: 5000,
                        autoplayHoverPause: true,
                        autoplayTimeout: 5000,
                        autoplaySpeed: 7000,
                        animate: 'fade',
                        beforeMove: moved,
                        loop: false
                        });
                        $(".testimonials-slider").owlCarousel({
                        autoPlay: false,
                        navigation: true,
                        navigationText: [
                        "<i class='fa fa-arrow-circle-left'></i>",
                        "<i class='fa fa-arrow-circle-right'></i>"
                        ],
                        slideSpeed: 300,
                        paginationSpeed: 400,
                        singleItem: false,
                        pagination: true,
                        rewindSpeed: 500,
                        animate: 'fade',
                        margin: 10,
                        loop: false,
                        autoWidth: true,
                        items: 1,
                        responsive: {
                        0: {
                        items: 1
                        },
                        480: {
                        items: 1
                        },
                        768: {
                        items: 1
                        }
                        }
                        });
                        $(".health-tips-outer").owlCarousel({
                        autoPlay: false,
                        navigation: true,
                        navigationText: [
                        "<i class='fa fa-arrow-circle-left'></i>",
                        "<i class='fa fa-arrow-circle-right'></i>"
                        ],
                        slideSpeed: 300,
                        paginationSpeed: 400,
                        singleItem: true,
                        pagination: true,
                        rewindSpeed: 500,
                        animate: 'fade',
                        loop: false
                        });
                        function moved() {
                        var owl = $("#owl-example").data('owlCarousel');
                        //alert(owl.currentItem);
                        var slide_number = owl.currentItem + 1;
                        $(".fixed-menu-right li").removeClass('active');
                        $(".fixed-menu-right li:nth-child(" + slide_number + ")").addClass('active');
                        if (owl.currentItem == '0') {
                        $(".home-serch-container").fadeIn();
                        } else {
                        $(".home-serch-container").fadeOut();
                        }
                        }
                        var winwidth = $(window).width();
                        var homeheight = $('.homepage-owl').height();
                        $(window).scroll(function() {
                        if (winwidth <= 1300 && winwidth > 480) {
                        var scrolled_val = $(document).scrollTop();
                        if (scrolled_val > homeheight) {
                            $('.fixed-menu-right').fadeOut();
                        } else {
                            $('.fixed-menu-right').fadeIn();
                        }
                        }
                        });
                        $(window).resize(function() {
                        var winwidth2 = $(window).width();
                        var homeheight = $('.homepage-owl').height();
                        $(window).scroll(function() {
                        if (winwidth2 <= 1300 && winwidth2 > 480) {
                        var scrolled_val = $(document).scrollTop();
                        //alert(scrolled_val);
                        if (scrolled_val > homeheight) {
                            $('.fixed-menu-right').fadeOut();
                        } else {
                            $('.fixed-menu-right').fadeIn();
                        }
                        }
                        });
                        });
                        });
                        function select_slide_first(slide_number) {
                            $("#owl-example").stop(); // Autoplay Stop
                            $('.back-to-top').click();
                            var owl = $("#owl-example").data('owlCarousel');
                            owl.stop(); // Autoplay Stop
                            $(".fixed-menu-right li").removeClass('active');
                            $(".fixed-menu-right li:nth-child(" + slide_number + ")").addClass('active');
                            slide_number--;
                            $('#owl-example').trigger('owl.goTo', slide_number);
                            if (slide_number < 1) {
                            $(".home-serch-container").fadeIn();
                            } else {
                            $(".home-serch-container").fadeOut();
                            }
                            slide_number++;
                            $(".fixed-menu-right li:nth-child(" + slide_number + ")").click();
                        }
        </script>
<script type="1d2c8a7024420f104c0feeb6-text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"92258c03cc","applicationID":"169692954","transactionName":"b1VXbUAAWBdQUkBQC1YfdFpGCFkKHnxVUAoXWVtdVxk=","queueTime":0,"applicationTime":38,"atts":"QxJUGwgaSxk=","errorBeacon":"bam.nr-data.net","agent":""}</script><script src="../ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="1d2c8a7024420f104c0feeb6-|49" defer=""></script></body>

<!-- Mirrored from oladoc.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 May 2019 11:49:08 GMT -->
</html>
