<style>

.header {
  margin-bottom: 10px;
}
.slideshow {
  margin-bottom: 10px;
}
.adv {
  margin-bottom: 10px;
}
.main {
  margin-bottom: 10px;
}
.partner {
  margin-bottom: 10px;
}
/*END-CSS:COMMON
==================================================================================================================*/
/*---------------------------------------------------------------
CSS CSS Scripts
-----------------------------------------------------------------
01.owl carousel*/
.owl-carousel .boxprevnext a {
  background-color: #b1b1b1;
  color: #ffffff;
  cursor: pointer;
  display: block;
  font-size: 34px;
  height: 60px;
  padding: 12px 7px;
  position: absolute;
  text-align: center;
  top: -45px;
  width: 35px;
}
.owl-carousel .boxprevnext a:hover {
  background: #006fc0 none repeat scroll 0 0;
  box-shadow: none;
  color: #ffffff;
  border-color: #262626;
}
.owl-carousel .boxprevnext a.prev {
  right: 48px;
}
.owl-carousel .boxprevnext a i {
  margin-right: 0;
}
.owl-carousel .boxprevnext a.next {
  right: 10px;
}
.owl-carousel:hover .boxprevnext a {
  opacity: 1;
}
/*---------------------------------------------------------------
CSS structure reset Bootstrap
-----------------------------------------------------------------
01. Typography
02. Images
03. Breadcrumb
04. Navigation
05. Pagination
06. Tab
07. Alert
08. Form
09. Buttons
10. Table
11.Caret
	
/*1.Typography */
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
}
.boxed-layout body {
  background: #f3f3f3;
}
.boxed-layout .wrapper {
  margin: 0 auto;
  background: #ffffff;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  margin-bottom: 0px;
}
i {
  margin-right: 5px;
}
h1 {
  font-size: 36px;
}
h2 {
  font-size: 14px;
  margin: 10px 0;
}
h3 {
  font-size: 30px;
}
h4 {
  font-size: 24px;
}
h5 {
  font-size: 18px;
  line-height: 30px;
  margin: 0 0 15px 0;
}
h6 {
  font-size: 13px;
  line-height: 24px;
  margin: 0 0 10px 0;
}
h1 {
  color: #262626;
  font-size: 17px;
  margin-top: 20px;
  text-transform: uppercase;
}
h1.title {
  color: #ffffff;
  font-size: 17px;
  position: relative;
  text-transform: uppercase;
  border-bottom: 2px solid #006fc0;
  line-height: 40px;
}
h1.title span {
  font-size: 17px;
  display: inline-block;
  position: relative;
  text-transform: uppercase;
  background-color: #006fc0;
  padding: 0 40px 0 10px;
}
h1.title span:before {
  border-color: transparent #ffffff transparent transparent;
  border-style: solid;
  border-width: 0 25px 40px 0;
  content: "";
  position: absolute;
  right: 0;
}
ul {
  list-style: none;
  padding: 0;
}
ol,
ul {
  margin: 0;
}
.row {
  margin-left: -10px;
  margin-right: -10px;
}
.container,
.container-fluid {
  padding-left: 10px;
  padding-right: 10px;
}
.col-lg-1,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-sm-1,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-xs-1,
.col-xs-10,
.col-xs-11,
.col-xs-12,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9 {
  padding-left: 10px;
  padding-right: 10px;
}
a {
  color: #646464;
}
a:hover {
  color: #006fc0;
}
hr {
  margin-top: 0;
  margin-bottom: 0;
  border-style: dotted;
  border-color: #7e7e7e;
}
/*2.Images
================================== */
.img-responsive {
  display: inline-block;
}
.carousel-inner > .item > a > img,
.carousel-inner > .item > img,
.img-responsive,
.thumbnail a > img,
.thumbnail > img {
  max-width: 100%;
  height: auto;
}
/*03.Breadcrumb================================== */
.breadcrumb {
  background: transparent;
  padding: 0;
  margin: 0 0 15px;
}
.breadcrumb ul li {
  position: relative;
  margin: 0;
  padding: 0;
  float: left;
}
.breadcrumb ul li a {
  color: #646464;
}
.breadcrumb ul li a:hover {
  color: #d60d0d;
}
.breadcrumb ul li:last-child {
  color: #006fc0;
}
.breadcrumb ul li .link-site-more {
  display: inline;
}
.breadcrumb ul li .link-site-more img {
  margin-left: 5px;
}
.breadcrumb ul li ul {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #cacaca;
  box-shadow: 0 1px 2px #ccc;
  display: none;
  right: 0;
  position: absolute;
  top: 15px;
  width: 160px;
  z-index: 10;
}
.breadcrumb ul li ul li {
  float: none;
}
.breadcrumb ul li ul li a {
  padding: 5px 10px;
  background-image: none;
  display: block;
}
.breadcrumb ul li ul li a:hover {
  background-color: #d60d0d;
  color: #ffffff;
}
.breadcrumb ul li ul li + li:before {
  content: none;
}
.breadcrumb ul li:hover ul {
  display: block;
}
.breadcrumb ul li + li:before {
  content: "";
  font-family: FontAwesome;
  padding: 2px 10px;
  color: #646464;
}
/*04.Navigation
=========================== */
.navbar {
  min-height: initial;
  margin-bottom: 0;
}
.navbar-brand {
  position: relative;
  padding: 5px 0 5px 0;
}
.static-nav-collapse,
.top-nav-collapse {
  background: #ffffff;
  padding-top: 10px;
  padding-bottom: 10px;
  opacity: 0.96;
  -webkit-transition: all 0.3 ease-in-out;
  -moz-transition: all 0.3 ease-in-out;
  -o-transition: all 0.3 ease-in-out;
  transition: all 0.3 ease-in-out;
  -webkit-box-shadow: inset 0 8px 6px -6px 0.5 1px 2px rgba(0, 0, 0, 0.4);
  -moz-box-shadow: inset 0 8px 6px -6px 0.5 1px 2px rgba(0, 0, 0, 0.4);
  box-shadow: inset 0 8px 6px -6px 0.5 1px 2px rgba(0, 0, 0, 0.4);
}
.static-nav-collapse:hover,
.top-nav-collapse:hover {
  opacity: 1;
}
.navbar-default .navbar-nav > li > a {
  font-size: 12px;
  color: #646464;
  text-transform: uppercase;
  padding: 8px 12px 8px 12px;
}
.static-nav-collapse .navbar-nav > li > a,
.top-nav-collapse .navbar-nav > li > a {
  color: #646464;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus,
.navbar-default .navbar-nav > li > a:active {
  color: #006fc0;
}
.navbar-default .navbar-nav > li > a.login {
  border: 1px solid #ffffff;
  border-radius: 2px;
  padding: 8px 25px 8px 25px;
  margin-left: 5px;
}
.navbar-default .navbar-nav li a.selected,
.navbar-default .navbar-nav li a:hover,
.navbar-default .navbar-nav .active a,
.navbar-default .navbar-nav .dropdown.active a,
.navbar-default .navbar-nav .active a:hover,
.navbar-default .navbar-nav .dropdown.active a:hover,
.navbar-default .navbar-nav .active a:focus,
.navbar-default .navbar-nav .dropdown.active a:focus {
  background: none;
}
.navbar-default .navbar-toggle,
.navbar-default .navbar-toggle:active,
.navbar-default .navbar-toggle:focus {
  border: 2px solid #646464;
  background: none;
  margin: 5px 15px 0 0;
}
.navbar-default .navbar-toggle:hover {
  background: none;
}
.navbar-default .navbar-toggle .icon-bar,
.navbar-default .navbar-toggle:focus .icon-bar {
  background-color: #646464;
}
.navbar-collapse {
  padding: 0;
}
.nav > li > a:focus,
.nav > li > a:hover {
  background-color: transparent;
}
/*05.Pagination=========================== */
.pager {
  margin: 0;
}
ul.pagination {
  margin: 0;
}
ul.pagination li a {
  margin: 5px;
  font-size: 15px;
  border: 0;
  color: #262626;
  background-color: #f0f0f0;
  border-radius: 5px;
}
ul.pagination li.active a,
.pagination > li > a:focus,
.pagination > li > a:hover,
.pagination > li > span:focus,
.pagination > li > span:hover {
  background-color: #006fc0;
  color: #ffffff;
}
/*06.Tab================================== */
.nav-tabs {
  border-bottom: none;
}
.nav-tabs > li > a {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  text-transform: uppercase;
  font-size: 14px;
  background: rgba(0, 0, 0, 0.7);
  color: #ffffff;
  border: none;
  margin-bottom: 3px;
}
.nav-tabs > li > a:hover {
  background: #262626;
  border-top: solid 1px #eeeeee;
  border-left: solid 1px #eeeeee;
  border-right: solid 1px #eeeeee;
  border-bottom: solid 1px #eeeeee;
}
/*07.Alert
================================== */
.alert {
  padding: 10px 30px 10px 30px;
  margin-top: 20px;
  margin-bottom: 0;
}

.menu-product ul li a:hover {
  color: #006fc0;
}
.menu-product ul li .open-close {
  position: absolute;
  right: 10px;
  text-align: center;
  top: 10px;
  width: 20px;
  cursor: pointer;
}
.menu-product ul li .open-close i {
  color: #646464;
  margin-right: 0;
  line-height: 18px;
  font-size: 18px;
}
.menu-product ul li .open-close i:hover {
  color: #006fc0;
}
.menu-product ul li ul {
  border: none;
  display: none;
}
.menu-product ul li ul:before,
.menu-product ul li ul:after {
  content: none;
}
.menu-product ul li ul li {
  background-color: #ffffff;
}
.menu-product ul li ul li a {
  padding-left: 25px;
  border-bottom: none;
}
.menu-product ul li ul li ul {
  display: block;
}
.menu-product ul li ul li ul li a {
  padding-left: 40px;
}
.menu-product ul li ul li ul li.active a {
  color: #006fc0;
}
/*menu*/
.menu-about,
.menu-logined,
.menu-account,
.box-news,
.box-counter,
.box-price-gold,
.box-exchange,
.box-weather,
.box-html,
.box-adv,
.box-video,
.box-sale-policy,
.box-support-online,
.box-product {
  margin-top: 20px;
}
.menu-about h3,
.menu-logined h3,
.menu-account h3,
.box-news h3,
.box-counter h3,
.box-price-gold h3,
.box-exchange h3,
.box-weather h3,
.box-html h3,
.box-adv h3,
.box-video h3,
.box-sale-policy h3,
.box-support-online h3,
.box-product h3 {
  border-bottom: 2px solid #006fc0;
  text-transform: uppercase;
  margin-top: 0;
}
.menu-about h3 span,
.menu-logined h3 span,
.menu-account h3 span,
.box-news h3 span,
.box-counter h3 span,
.box-price-gold h3 span,
.box-exchange h3 span,
.box-weather h3 span,
.box-html h3 span,
.box-adv h3 span,
.box-video h3 span,
.box-sale-policy h3 span,
.box-support-online h3 span,
.box-product h3 span {
  background: #006fc0 none repeat scroll 0 0;
  color: #fff;
  display: inline-block;
  font-size: 17px;
  line-height: 40px;
  padding: 0 40px 0 10px;
  position: relative;
  text-transform: uppercase;
}
.menu-about h3 span:before,
.menu-logined h3 span:before,
.menu-account h3 span:before,
.box-news h3 span:before,
.box-counter h3 span:before,
.box-price-gold h3 span:before,
.box-exchange h3 span:before,
.box-weather h3 span:before,
.box-html h3 span:before,
.box-adv h3 span:before,
.box-video h3 span:before,
.box-sale-policy h3 span:before,
.box-support-online h3 span:before,
.box-product h3 span:before {
  border-color: transparent #ffffff transparent transparent;
  border-style: solid;
  border-width: 0 25px 40px 0;
  content: "";
  position: absolute;
  right: 0;
}
.menu-about ul,
.menu-logined ul,
.menu-account ul,
.box-news ul,
.box-counter ul,
.box-price-gold ul,
.box-exchange ul,
.box-weather ul,
.box-html ul,
.box-adv ul,
.box-video ul,
.box-sale-policy ul,
.box-support-online ul,
.box-product ul {
  padding: 10px;
  border: 1px solid #e3e3e3;
}
.menu-about ul li a,
.menu-logined ul li a,
.menu-account ul li a,
.box-news ul li a,
.box-counter ul li a,
.box-price-gold ul li a,
.box-exchange ul li a,
.box-weather ul li a,
.box-html ul li a,
.box-adv ul li a,
.box-video ul li a,
.box-sale-policy ul li a,
.box-support-online ul li a,
.box-product ul li a,
.menu-about ul li a:visited,
.menu-logined ul li a:visited,
.menu-account ul li a:visited,
.box-news ul li a:visited,
.box-counter ul li a:visited,
.box-price-gold ul li a:visited,
.box-exchange ul li a:visited,
.box-weather ul li a:visited,
.box-html ul li a:visited,
.box-adv ul li a:visited,
.box-video ul li a:visited,
.box-sale-policy ul li a:visited,
.box-support-online ul li a:visited,
.box-product ul li a:visited {
  color: #595959;
  font-weight: normal;
  /*border-bottom: 1px dotted lighten(@color-link,10%);*/
  display: block;
  position: relative;
  padding: 10px 15px;
}
.menu-about ul li a:hover,
.menu-logined ul li a:hover,
.menu-account ul li a:hover,
.box-news ul li a:hover,
.box-counter ul li a:hover,
.box-price-gold ul li a:hover,
.box-exchange ul li a:hover,
.box-weather ul li a:hover,
.box-html ul li a:hover,
.box-adv ul li a:hover,
.box-video ul li a:hover,
.box-sale-policy ul li a:hover,
.box-support-online ul li a:hover,
.box-product ul li a:hover,
.menu-about ul li a:visited:hover,
.menu-logined ul li a:visited:hover,
.menu-account ul li a:visited:hover,
.box-news ul li a:visited:hover,
.box-counter ul li a:visited:hover,
.box-price-gold ul li a:visited:hover,
.box-exchange ul li a:visited:hover,
.box-weather ul li a:visited:hover,
.box-html ul li a:visited:hover,
.box-adv ul li a:visited:hover,
.box-video ul li a:visited:hover,
.box-sale-policy ul li a:visited:hover,
.box-support-online ul li a:visited:hover,
.box-product ul li a:visited:hover {
  color: #006fc0;
}
.menu-about ul li a:before,
.menu-logined ul li a:before,
.menu-account ul li a:before,
.box-news ul li a:before,
.box-counter ul li a:before,
.box-price-gold ul li a:before,
.box-exchange ul li a:before,
.box-weather ul li a:before,
.box-html ul li a:before,
.box-adv ul li a:before,
.box-video ul li a:before,
.box-sale-policy ul li a:before,
.box-support-online ul li a:before,
.box-product ul li a:before,
.menu-about ul li a:visited:before,
.menu-logined ul li a:visited:before,
.menu-account ul li a:visited:before,
.box-news ul li a:visited:before,
.box-counter ul li a:visited:before,
.box-price-gold ul li a:visited:before,
.box-exchange ul li a:visited:before,
.box-weather ul li a:visited:before,
.box-html ul li a:visited:before,
.box-adv ul li a:visited:before,
.box-video ul li a:visited:before,
.box-sale-policy ul li a:visited:before,
.box-support-online ul li a:visited:before,
.box-product ul li a:visited:before {
  color: #8c8c8c;
  content: "";
  font-family: FontAwesome;
  font-size: 14px;
  position: absolute;
  left: 0;
  top: 7px;
  font-weight: normal;
}
.menu-about ul li.active a,
.menu-logined ul li.active a,
.menu-account ul li.active a,
.box-news ul li.active a,
.box-counter ul li.active a,
.box-price-gold ul li.active a,
.box-exchange ul li.active a,
.box-weather ul li.active a,
.box-html ul li.active a,
.box-adv ul li.active a,
.box-video ul li.active a,
.box-sale-policy ul li.active a,
.box-support-online ul li.active a,
.box-product ul li.active a {
  color: #006fc0;
}
.menu-news {    
	margin-top: 36px;
}
.menu-news h3 {
  border-bottom: 2px solid #006fc0 !important;
	border-color:none;
	padding:0;
	border-style:none;
  text-transform: uppercase;
  margin-top: 0;
}
.menu-news h3 span {
  background: #006fc0 none repeat scroll 0 0;
  color: #fff;
  display: inline-block;
  font-size: 17px;
  line-height: 40px;
  padding: 0 40px 0 10px;
  position: relative;
  text-transform: uppercase;
}
.menu-news h3 span:before {
  border-color: transparent #ffffff transparent transparent;
  border-style: solid;
  border-width: 0 25px 40px 0;
  content: "";
  position: absolute;
  right: 0;
}
.menu-news ul {
  list-style: none;
  display: block;
  border: 1px solid #cacaca;
  position: relative;
}
.menu-news ul:before {
  background-color: #ffffff;
  border: 1px solid #e3e3e3;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  bottom: -9px;
  content: "";
  display: block;
  height: 5px;
  left: 10px;
  position: absolute;
  right: 10px;
}
.menu-news ul:after {
  background-color: #ffffff;
  border: 1px solid #e3e3e3;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  bottom: -5px;
  content: "";
  display: block;
  height: 5px;
  left: 5px;
  position: absolute;
  right: 5px;
}
.menu-news ul li {
  position: relative;
  margin: 0;
  padding: 0;
}
.menu-news ul li a {
  padding: 15px 12px;
  margin: 0 7px;
  color: #313131;
  text-decoration: none;
  cursor: pointer;
  font-weight: 500;
  text-transform: uppercase;
  display: inline-block;
  border-bottom: 1px dashed #e3e3e3;
  display: block;
}
.menu-news ul li a:hover {
  color: #006fc0;
}
.menu-news ul li .open-close {
  position: absolute;
  right: 10px;
  text-align: center;
  top: 10px;
  width: 20px;
  cursor: pointer;
}
.menu-news ul li .open-close i {
  color: #646464;
  margin-right: 0;
  line-height: 22px;
  font-size: 18px;
}
.menu-news ul li .open-close i:hover {
  color: #006fc0;
}
.menu-news ul li ul {
  border: none;
  /*display: none;*/
}
.menu-news ul li ul:before,
.menu-news ul li ul:after {
  content: none;
}
.menu-news ul li ul li {
  background-color: #ffffff;
}
.menu-news ul li ul li a {
  border-bottom: none;
  padding: 10px 10px 10px 25px;
}
.menu-logined ul li a,
.menu-account ul li a {
  padding-left: 0;
}
.menu-logined ul li a:before,
.menu-account ul li a:before {
  content: none;
}
/*box-module*/
.box-cart {
  margin-bottom: 15px;
  background: #ffffff none repeat scroll 0 0;
}
.box-cart h3 {
  background-color: #262626;
  color: #ffffff;
  font-size: 14px;
  font-weight: bold;
  padding: 15px 10px;
  text-transform: uppercase;
  margin: 0;
  border-bottom: 2px solid #646464;
}
.box-cart .box-cart-block {
  border: 1px solid #979797;
}
.box-cart .box-cart-block .docs {
  margin-bottom: 5px;
}
.box-cart .box-cart-block .cart-empty {
  padding: 10px;
}
.box-cart .box-cart-block .cart-empty a {
  color: #006fc0;
}
.box-cart .box-cart-block .cart-empty a:hover {
  color: #d60d0d;
}
.box-cart .box-cart-block .cart-item .total {
  padding: 10px;
  background-color: #b1b1b1;
}
.box-cart .box-cart-block .cart-item .total a {
  color: #006fc0;
}
.box-cart .box-cart-block .cart-item .total a:hover {
  color: #262626;
}
.box-cart .box-cart-block ul li {
  position: relative;
  padding: 5px 0;
  border-bottom: 1px dotted #646464;
}
.box-cart .box-cart-block ul li .image {
  float: left;
  width: 60px;
  padding: 0 5px;
}
.box-cart .box-cart-block ul li .name {
  float: left;
  margin-right: 10px;
}
.box-cart .box-cart-block ul li .name a {
  color: #262626;
  font-weight: bold;
}
.box-cart .box-cart-block ul li .name a:hover {
  color: #006fc0;
}
.box-cart .box-cart-block ul .remove_link {
  float: right;
  margin-top: 5px;
}
.box-cart .box-cart-block ul .remove_link i {
  color: #d60d0d;
  font-size: 16px;
}
.box-cart .box-cart-block ul .remove_link:hover i {
  color: #006fc0;
}
.box-cart .box-cart-block .cart-payment .amount {
  padding: 10px;
  font-weight: bold;
  border-bottom: 1px dotted #7e7e7e;
}
.box-cart .box-cart-block .cart-payment .amount strong {
  float: right;
  font-size: 16px;
  color: #006fc0;
}
.box-cart .box-cart-block .cart-payment .btn-payment {
  padding: 10px;
  text-align: center;
}
.box-cart .box-cart-block .cart-payment .btn-payment .btn {
  margin-bottom: 0;
}
.box-counter ul,
.box-price-gold ul,
.box-exchange ul,
.box-weather ul,
.box-html ul,
.box-adv ul,
.box-video ul {
  padding: 10px;
}
.box-counter ul li a,
.box-price-gold ul li a,
.box-exchange ul li a,
.box-weather ul li a,
.box-html ul li a,
.box-adv ul li a,
.box-video ul li a {
  padding-left: 0;
}
.box-counter ul li a i,
.box-price-gold ul li a i,
.box-exchange ul li a i,
.box-weather ul li a i,
.box-html ul li a i,
.box-adv ul li a i,
.box-video ul li a i {
  font-size: 14px;
  width: 20px;
}
.box-counter ul li a:before,
.box-price-gold ul li a:before,
.box-exchange ul li a:before,
.box-weather ul li a:before,
.box-html ul li a:before,
.box-adv ul li a:before,
.box-video ul li a:before {
  content: none;
}
.box-counter ul li {
  margin-bottom: 5px;
}
.box-counter ul li i {
  font-size: 16px;
  color: #a6a6a6;
  text-align: center;
  width: 15px;
  margin-right: 10px;
}
.box-counter ul li b {
  float: right;
  width: 50%;
}
.box-exchange,
.box-price-gold,
.box-video {
  line-height: 10px;
  border: none;
}
.box-exchange table,
.box-price-gold table,
.box-video table {
  margin-bottom: 0;
}
.box-exchange p,
.box-price-gold p,
.box-video p {
  font-size: 11px;
  margin-bottom: 5px;
}
.box-exchange i,
.box-price-gold i,
.box-video i {
  font-size: 11px;
}
.box-adv .boxprevnext a {
  background-color: transparent !important;
  opacity: 1 !important;
  padding: 0 !important;
  right: -10px !important;
  top: -32px !important;
  border: none;
  box-shadow: none;
  color: #646464;
  font-size: 20px;
}
.box-adv .boxprevnext a.prev {
  left: auto !important;
  right: 10px !important;
}
.box-adv .boxprevnext a:hover {
  color: #006fc0 !important;
}
.adv-block {
  text-align: center;
}
.adv-block .adv-item {
  margin-bottom: 10px;
}
.box-static_banner {
  margin-top: 20px;
}
.box-static_banner a img {
  width: 100%;
}
.weather-block,
.html-block,
.adv-block {
  padding: 10px;
  border: 1px solid #e3e3e3;
}
.weather-block .weather-icon {
  width: 30%;
  float: left;
  margin-right: 2%;
}
.weather-block .weather-desc {
  width: 65%;
  float: right;
}
.weather-block .weather-desc strong,
.weather-block .weather-desc span {
  display: block;
}
.weather-block .weather-desc strong {
  font-size: 24px;
}
.weather-block p {
  margin-bottom: 5px;
}
/*END-CSS:BOX STYLE
==================================================================================================================*/
/*START-CSS:NEWS
==================================================================================================================*/
.news-content .news-item {
  border-bottom: 1px dotted #979797;
  margin-bottom: 15px;
}
.news-content .news-item:last-child {
  border-bottom: none;
}
.news-content .news-block {
  margin-top: 15px;
}
.news-content .news-block .image {
  border: 1px solid #e3e3e3;
  float: left;
  height: 145px;
  min-height: 130px;
  overflow: hidden;
  padding: 2px;
  margin-bottom: 10px;
  text-align: center;
}
.news-content .news-block .image a {
  display: block;
  height: 100%;
  overflow: hidden;
}
.news-content .news-block .image a img {
	width:140px;
  -webkit-transition: all 0.2s ease-out;
  -moz-transition: all 0.2s ease-out;
  -o-transition: all 0.2s ease-out;
  transition: all 0.2s ease-out;
  transform: scale(1);
}
.news-content .news-block .image a img:hover {
  transform: scale(1.2);
}
.news-content .news-info h2.name {
  margin-top: 0;
  margin-bottom: 5px;
}
.news-content .news-info h2.name a {
  font-size: 15px;
  color: #262626;
  text-transform: uppercase;
  font-weight: bold;
}
.news-content .news-info h2.name a:hover {
  color: #006fc0;
}
.news-content .news-info .date {
  font-style: italic;
  margin-bottom: 10px;
  color: #646464;
  font-size: 11px;
}
.news-content .news-info .desc {
  color: #404040;
  line-height: 25px;
}
.box-news h3 {
    border-bottom: 2px solid #006fc0 !important;
	border-color:none;
	padding:0;
	border-style:none;
  text-transform: uppercase;
  margin-top: 0;
}
.box-news h3 span {
  background: #006fc0 none repeat scroll 0 0;
  color: #fff;
  display: inline-block;
  font-size: 17px;
  line-height: 40px;
  padding: 0 40px 0 10px;
  position: relative;
  text-transform: uppercase;
}
.box-news h3 span:before {
  border-color: transparent #ffffff transparent transparent;
  border-style: solid;
  border-width: 0 25px 40px 0;
  content: "";
  position: absolute;
  right: 0;
}
.box-news .news-content {
  padding: 10px;
  border: 1px solid #e3e3e3;
}
.box-news .news-content .news-block {
  margin-top: 0;
}
.box-news .news-content .news-block .image {
  border: medium none;
  height: 60px;
  min-height: 50px;
  padding: 0;
}
.box-news .news-content .news-info h2.name a {
  font-size: 12px;
  color: #262626;
  font-weight: bold;
}
.box-news .news-content .news-info .desc {
  font-size: 11px;
  line-height: 14px;
  color: #595959;
}
/*START-CSS:NEWS
==================================================================================================================*/
/*START-CSS:NEW-DETAIL
==================================================================================================================*/
.news-detail h1.title,
.about-detail h1.title {
  background-color: #006fc0;
  border: medium none;
  color: #ffffff;
  margin-bottom: 0;
  padding: 10px;
  text-transform: uppercase;
  font-size: 17px;
  margin-top: 20px;
  line-height: 0;
}
.news-detail h1.title span:before,
.about-detail h1.title span:before {
  border: none;
}
.news-detail h1.title i,
.about-detail h1.title i {
  background-color: #0e99ff;
  border-radius: 20px;
  padding: 5px;
}
.news-detail .news-block,
.about-detail .news-block,
.news-detail .about-block,
.about-detail .about-block {
  margin-top: 20px;
}
.news-detail .news-block .date,
.about-detail .news-block .date,
.news-detail .about-block .date,
.about-detail .about-block .date {
  font-style: italic;
  color: #595959;
  margin-bottom: 10px;
}
.news-detail .news-block .content,
.about-detail .news-block .content,
.news-detail .about-block .content,
.about-detail .about-block .content {
  line-height: 30px;
}
.news-detail .news-other h3,
.about-detail .news-other h3 {
  color: #006fc0;
  font-size: 14px;

  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 10px;
}
.news-detail .news-other ul li a,
.about-detail .news-other ul li a {
  color: #595959;
  display: block;
  position: relative;
  padding: 10px;
}
.news-detail .news-other ul li a:hover,
.about-detail .news-other ul li a:hover {
  color: #006fc0;
}
.news-detail .news-other ul li a:before,
.about-detail .news-other ul li a:before {
  color: #8c8c8c;
  content: "";
  font-family: FontAwesome;
  font-size: 14px;
  position: absolute;
  left: 0;
  top: 7px;
  font-weight: normal;
}

</style>
<div class="main">
        <div class="container">
            <div class="row">
                    <div class="col-md-3">

<div class="menu-news">
    <h3>
        <span>
            Tin tức
        </span>
    </h3>
    <?php
error_reporting(E_ALL & ~E_NOTICE  &~E_WARNING); 
$sql_loaisp = "select * from loaitt";
$run_loaisp = mysqli_query($Dbconnect,$sql_loaisp);
?>

<ul class="level0">
 <?php
	   while($dong_loaisp=mysqli_fetch_array($run_loaisp)){
 ?>
<li><a href="index.php?xem=tintuc&id=<?php echo $dong_loaisp['ID_TT'] ?>"><i class="fa fa-arrow-circle-o-right"></i><?php echo $dong_loaisp['ten_tintuc'] ?></a></li>
 <?php
	}
  ?>


</ul>
</div>
   <?php
			$sql="select * from tintuc ID_TT = 3 limit 4";
			$tam=mysqli_query($Dbconnect,$sql);

		?>  

		<?php
			 $sql_loaisp="select * from loaitt where ID_TT =3" ;
			 $tam_loaisp=mysqli_query($Dbconnect,$sql_loaisp);
			$dong_loaisp = mysqli_fetch_array($tam_loaisp);
		?>   
<div class="box-news">
				<h3>
					<span>
						Tin tức nổi bật
					</span>
				</h3>
				<div class="news-content">
					<div class=" news-block clearfix">
		
         <?php
			$sql="select * from tintuc ";
			$tam=mysqli_query($Dbconnect,$sql);

		?>  

		<?php
			 $sql_loaisp="select * from loaitt where $_GET[id]";
			 $tam_loaisp=mysqli_query($Dbconnect,$sql_loaisp);
			$dong_loaisp = mysqli_fetch_array($tam_loaisp);
		?>
		<?php
			while($dong = mysqli_fetch_array($tam)){
		?>
                <div class="news-item clearfix">
                    <div class="col-md-4 col-sm-4 col-xs-4 image"><a href="index.php?xem=chitiettt&id=<?php echo $dong['ID_tintuc'] ?>"><img src="admin/modules/CTTT/uploads/<?php echo $dong['HinhAnh'] ?>" class="img-responsive" alt="hình"></a></div>
                    <div class="col-md-8 col-sm-8 col-xs-8 news-info ">
                        <h2 class="name"><a href="index.php?xem=chitiettt&id=<?php echo $dong['ID_tintuc'] ?>" ><?php echo $dong['TieuDe'] ?></a></h2>
                        
                    </div>
                </div>
                    <?php
			}
				?>
        </div>
         
    </div>
</div>
                    </div>
                    <div class="col-md-9">

<div class="breadcrumb clearfix">
    <ul>
                    <li itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="home">
                        <a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
                    </li>
                    <li class="icon-li"><strong>Tin tức</strong> </li>
    </ul>
</div>
<script type="text/javascript">
    $(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
</script>

<div class="news-content">
    <h1 class="title"><span>Tin tức</span></h1>
    <div class="news-block clearfix">
 
<!-- tat ca tin tuc -->
		


         <?php
			$sql="select * from tintuc where ID_TT=$_GET[id] ";
			$tam=mysqli_query($Dbconnect,$sql);

		?>  

		<?php
			 $sql_loaisp="select * from loaitt where ID_TT=$_GET[id]";
			 $tam_loaisp=mysqli_query($Dbconnect,$sql_loaisp);
			$dong_loaisp = mysqli_fetch_array($tam_loaisp);
		?>
		<?php
			while($dong = mysqli_fetch_array($tam)){
		?>
            <div class="news-item clearfix">
                <div class="col-md-3 col-sm-4 col-xs-12 image"><a href="index.php?xem=chitiettt&id=<?php echo $dong['ID_tintuc'] ?>"><img src="admin/modules/CTTT/uploads/<?php echo $dong['HinhAnh'] ?>" class="img-responsive" alt="hình"></a></div>
                <div class="col-md-9 col-sm-8 col-xs-12 news-info ">
                    <h2 class="name"><a href="index.php?xem=chitiettt&id=<?php echo $dong['ID_tintuc'] ?>" ><?php echo $dong['TieuDe'] ?></a></h2>	
                    <p class="date"><?php echo $dong['ngayviet'] ?></p>
                    <div class="desc"><div class="postContent" style="margin: 0px; padding: 0px; max-height: 105px; overflow: hidden; text-rendering: geometricprecision; color: rgb(68, 68, 68); font-family: arial, helvetica, sans-serif; font-size: 14px; line-height: 21.700000762939453px;">
	Những ngày lễ sắp tới, nhiều người được nghỉ lễ dài hạn. Các kế hoạch nghỉ ngơi, du lịch hay ăn uống sôi động hẳn lên. Các bạn nam của chúng ta chắc cũng chuẩn bắt đầu hò hét rủ rê nhau cùng làm chuyến phượt, cùng hoà mình với thiên nhiên, chụp những bức hình đầy nghệ thuật và thoải mái vui cười không bó buộc. Thế các bạn nam đã chuẩn bị gì cho mình chưa?</div>

<p>&nbsp;
	</p>
</div>
                </div>
            </div>
            <?php
			}
			?>
    </div>

</div>

                    </div>
            </div>
        </div>
    </div>