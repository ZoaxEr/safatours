<?php header("Content-type: text/css"); ?>
/*   
Project: Lets Drive HTML Template
Version: 1.0
Author: Theem'on
Website: http://theemon.com
========================*/

/*
 Table Of Contents
 1.) Eric Meyer's Reset
 2.) Global Typography
 	2.1) Form Elements
 	2.2) List styles
	2.3) General Text Formatting
	2.4) Link elements
	2.5) Table Elements
 	2.6) Button Styles
 3.) Site Wide Content
 4.) Header Style
 5.) Footer Style
 6.) Footer Style 
 ===============================================*/

/*
 1.) Eric Meyer's Reset
 ----------------------------------------*/
/**
 * Eric Meyer's Reset CSS v2.0 (http://meyerweb.com/eric/tools/css/reset/)
 * http://cssreset.com
 */
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after, q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
/*
 2.) Global Typography
 ----------------------------------------*/
*, :before, :after {
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
}
html {
	-ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%;
	font-size: 100%;
}
body {
	font-family: 'Open Sans', sans-serif;
}

h1, h2, h3, h4, h5, h6 {
	font-weight: normal;
	line-height: 1;
	font-family: 'Montserrat', sans-serif;
}
h1, .h1, h2, .h2, h3, .h3 {
	margin: 0;
	line-height: 1;
	font-family: 'Montserrat', sans-serif;
}
h1 {
	font-size: 32px;
}
h2 {
	font-size: 32px;
}
h3 {
	font-size: 24px;
}
h4 {
	font-size: 21px;
}
h5 {
	font-size: 18px;
}
h6 {
	font-size: 12px;
}
/*
 2.1 Form Elements
 -----------------------------*/
button, input, optgroup, textarea {
	margin: 0;
	padding: 12px 25px;
	font-size: 16px;
	line-height:1.5;
	color: #fff;
	background: #ecac4a;
	border: none;
	font-family: 'Open Sans', sans-serif;
	-webkit-appearance: none;
}
input {
	line-height: normal;
}
input:focus, select:focus, textarea:focus, button:focus {

	outline: 0;
}
input[type="checkbox"], input[type="radio"] {
	padding: 0;
	border: none;
}
button, input[type="button"], input[type="reset"], input[type="submit"], input[type="file"] {
	-webkit-appearance: none;
	cursor: pointer;
	line-height: normal;
	overflow: visible;
}
input[type="text"], input[type="email"], input[type="password"], select.form-control{
	border-radius: 0;
	padding: 0 38px 0 20px;
	float: left;
	line-height: 1.5;
	height: 52px;
	color: #fff;
	font-size: 14px;
	font-weight: 400;
	background-color: #6c4a3f;
	border: none;
}
input[type="text"], input[type="password"], textarea, select.form-control {
	-webkit-appearance: none;
	border-radius: 0;
}
textarea {
	width: 100%;
	height: 196px;
	border: 0;
	background: #6c493f;
	padding: 12px 36px 12px 15px;
	resize: none;
}
label {
	font-size: 16px;
	color: #1c2022;
	font-weight: 400;
}
button[disabled], input[disabled] {
	cursor: default;
	color: #999;
	border-color: #ccc;
}
button::-moz-focus-inner, input::-moz-focus-inner {
	padding: 0;
	border: 0;
}
input::-webkit-input-placeholder {
	color: #b0a19e;
}
input:-moz-placeholder {/*/ Firefox 18- /*/
	color: #b0a19e;
}
input::-moz-placeholder {/*/ Firefox 19- /*/
	color: #b0a19e;
}
input:-ms-input-placeholder {
	color: #b0a19e;
}
textarea::-moz-placeholder {
	color: #b0a19e;
}
textarea::-webkit-input-placeholder {
	color: #fff;
	font-size: 16px;
	opacity: 1;
	font-weight: 400;
}
textarea::-ms-input-placeholder {
	color: #fff;
	font-size: 16px;
	opacity: 1;
	font-weight: 400;
}
select {
	border: 0;
	color:rgba(255,255,255,0.4);
	width: 270px;
	padding: 10px;
	-webkit-appearance: none; /*Removes default chrome and safari style*/
	-moz-appearance: none; /* Removes Default Firefox style*/
	appearance: none;
	background: #664238 url('../images/down-arrow.png') no-repeat 95% center;
	border-radius:0;
}
/*
 2.2) List Styles
 ---------------------------------*/
ul, ol, dl {
	font-size: 100%;
	line-height: 1.5;
}
li, dt {
	line-height: 1.5em;
}
dl {
	margin: 0 0 1em 0;
}
dd {
	margin: 0 0 1em 0.8em;
}
ul {
	list-style-type: none;
}
ol {
	list-style-type: decimal;
	margin: 0 0 1em 0;
}
ul ul, ol ul {
	list-style-type: circle;
	margin-top: 0;
}
ol ol {
	list-style-type: lower-latin;
	margin-top: 0;
}
/*
 2.3) General Text Formatting
 -----------------------------------*/
p {
	font-size: 14px;
	line-height: 22px;
	color: #81716b;
}
blockquote, cite, q, var, dfn {
	font-style: italic;
}
blockquote {
	background: transparent;
	color: #666666;
}
small {
	font-size: 85.71429%;
	line-height: 1.75;
}
pre, code, kbd, tt, samp, var {
	font-size: 100%;
}
pre {
	font-size: 100%;
	line-height: 1.5;
	margin: 0 0 1.5em 0;
	white-space: pre;
	white-space: pre-wrap;
	word-wrap: break-word;
}
pre, code {
	color: #880000;
}
kbd, samp, var {
	color: #666666;
	font-weight: bold;
}
acronym, abbr {
	border-bottom: 1px #aaa dotted;
	font-variant: small-caps;
	cursor: help;
}
sub, sup {
	font-size: 75%;
	line-height: 0;
	position: relative;
	vertical-align: baseline;
}
sup {
	top: -0.5em;
}
sub {
	bottom: -0.25em;
}
img {
	max-width: 100%;
	height: auto;
}
/*
 2.4) Link style
 -------------------------*/
a {
	color: #774f38;
	text-decoration: none;
}
a:hover, a:focus {
	color: inherit;
	text-decoration: none;
	outline: none;
}
a:hover{
	color:#fff;
}
.navbar-nav > li a:focus {
	background-color:transparent !important;
}
a:active {
	outline: none;
}
/*
 2.5) Table Elements
 --------------------------*/
table {
	width: 100%;
	border-collapse: collapse;
	color: #444444;
	border-top: 1px #ccc solid;
	border-bottom: 1px #ccc solid;
	margin: 0 0 1.35714em 0;
}
caption {
	font-variant: small-caps;
}
th, td {
	line-height: 1.5em;
	vertical-align: top;
	padding: 0.71429em 0.5em;
}
th *:first-child, td *:first-child {
	margin-top: 0;
}
thead th {
	text-align: left;
	color: #000;
	border-bottom: 2px #000 solid;
}
tbody th {
	text-align: left;
	border-top: 1px solid #ccc;
}
tbody td {
	text-align: left;
	border-top: 1px solid #ccc;
}
/*
 2.6) Button Styles
 -------------------------*/
.btn, input.btn, button.btn {
	font-family: 'Open Sans', sans-serif;
}
button.btn-submit {
}
/* Clear Floated Elements
 --------------------------*/
.clear {
	clear: both;
	display: block;
	overflow: hidden;
	visibility: hidden;
	width: 0;
	height: 0;
}
.clearfix:after {
	clear: both;
	content: ' ';
	display: block;
	font-size: 0;
	line-height: 0;
	visibility: hidden;
	width: 0;
	height: 0;
}
.clearfix {
	display: inline-block;
}
* html .clearfix {
	height: 1%;
}
.clearfix {
	display: block;
}
/*
 3.) Site Wide Content
 ------------------------------*/
#wrapper {
	overflow: hidden;
	position: relative;
}
/*
 4.) Header Styles
 ------------------------------*/
.header {
	position: absolute;
	width: 100%;
	left: 0;
	top: 0;
	z-index: 999999;
	right: 0;
}
.navbar-collapse {
	padding: 0;
}
.navbar-nav > li > a {
	padding: 0px;
	line-height: 13px;
}
.navbar {
	position: relative;
	min-height: 42px;
	margin-bottom: 0px;
	border: 1px solid transparent;
	border-top: 1px solid #f5efec;
}
.header-cont {
	background-color: #ffffff;
}
.logo {
	float: left;
	margin-left: 0px;
	position: relative;
	width: 19.7%;
}
.login a:hover {
	color: #3f2c25;
}
.logo img {
	display: block;
}
.logo i {
	border-radius: 50%;
	color: #ffffff;
	font-size: 14px;
	height: 30px;
	left: 0;
	margin: 0 auto;
	padding-top: 8px;
	position: absolute;
	right: 0;
	text-align: center;
	width: 30px;
	top: 6px;
}
.header-info {
	float: right;
	display: inline-block;
	width: 80.3%;
	padding: 0 24px 0 22px;
}
.header-info .social-content {
	padding: 20px 0 20px 0;
}
.header-info .contact-det {
	float: left;
}
.header-info .contact-det ul li {
	display: inline-block;
	float: left;
	line-height: 12px;
	color: rgba(27,25,25,0.5);
}
.header-info .contact-det ul li a {
	font-size: 13px;
	color: rgba(27,25,25,0.5);
	font-family: 'Open Sans';
	padding: 0 12px 0 8px;
}
.header-info .contact-det ul li:first-child a {
	padding-left: 0;
}
.header-info .social-det {
	display: inline-block;
	float: right;
}
.header-info .social-det ul {
	float: left;
	margin-right: 8px;
}
.header-info .social-det ul li {
	display: inline-block;
	float: left;
	margin-left: 9px;
	line-height: 1;
}
.header-info .social-det ul li a i {
	color: rgba(27, 25, 25, 0.5);
}
.header-info .social-det ul li a i:hover {
	color: #ecac4a;
}
.header-info .social-det select {
	font-size: 13px;
	font-family: 'Open Sans';
	color: #3f2c25;
	padding: 0;
	border: 0;
	width: 40px;
	background-color: transparent;
}
.select-box {
	float: left;
	margin-right: 20px;
	width: 34px;
	position: relative;
}
.select-box .fa.fa-angle-down {
	color: #3f2c25;
	position: absolute;
	right: 0;
	top: 2px;
}
.header-info .social-det .login {
	display: inline-block;
	vertical-align: top;
	margin: 2px 0 0 5px;
}
.header-info .social-det .login span {
	font-size: 13px;
	font-family: 'Open Sans';
	color: #3f2c25;
	margin-right: 9px;
	vertical-align: top;
}
.input-field {
	display: inline-block;
}
.input-field input {
	float: unset;

}
.input-field label {
	padding-right: 10px;
}
#logout button {
	color: #774f38;
    background-color: transparent;
    padding: 0;
}
nav {
	float: left;
	width: 100%;
	border-top: 1px solid #f5efec;
}
nav .navigation {
	float: left;
}
nav .header-search {
	float: right;
	padding: 22px 0px 16px 0px;
}
nav .header-search i {
	cursor: pointer;
	color: #3f2c25;
}
.home-menu {
	position: absolute;
	right: 0;
	top: 30px;
	display: none;
	padding: 9px 10px;
}
nav .icon-bar {
	display: block;
	height: 2px;
	width: 22px;
	color: #774f38;
	background: rgba(0,0,0,0.6);
}
.home-menu .icon-bar + .icon-bar {
	margin-top: 4px;
}
.navigation > li:first-child {
	padding-left: 2px;
}
.navigation > li {
	float: left;
	position: relative;
	padding: 22px 28px 21px 13px;
	line-height: 12px;
	position: relative;
}
.navigation li a {
	font-size: 14px;
	color: #3f2c25;
	font-family: 'Open Sans';
	font-weight: 700;
	text-transform: uppercase;
}
.navigation li a:hover {
	color: #ecac4a;
	background: transparent;
}
.navigation li:last-child {
	padding-right: 0;
}
.drop-down {
	position: absolute;
	left: 12px;
	top: 175%;
	background: #5e382d;
	width: 200px;
	opacity: 0;
	transition: top 0.3s ease 0s, visibility 0.2s ease 0.2s, opacity 0.2s ease 0.1s;
	-webkit-transition: top 0.3s ease 0s, visibility 0.2 ease 0.2s, opacity 0.2s ease 0.1s;
	-moz-transition: top 0.3s ease 0s, visibility 0.2 ease 0.2s, opacity 0.2s ease 0.1s;
	-ms-transition: top 0.3s ease 0s, visibility 0.2 ease 0.2s, opacity 0.2s ease 0.1s;
	-o-transition: top 0.3s ease 0s, visibility 0.2 ease 0.2s, opacity 0.2s ease 0.1s;
	transition: top 0.3s ease 0s, visibility 0.2 ease 0.2s, opacity 0.2s ease 0.1s;
	visibility: hidden;
}
.drop-down li {
	list-style: none;
	padding: 10px 20px;
	border-bottom: 1px solid #7e6057;
}
.drop-down li:last-child {
	border-bottom: none;
}
.drop-down li a {
	color: #fff;
}
.navigation li:hover .drop-down {
	opacity: 1;
	top: 102%;
	transition: top 0.3s ease 0s;
	visibility: visible;
}
.navigation li.active > a {
	color: #ecac4a;
}
.selectBox-dropdown:after {
	color: #774f38;
	content: "";
	font-family: "FontAwesome";
	position: absolute !important;
	right: 0px !important;
	top: 2px !important;
}
.selectBox-dropdown-menu li a {
	color: #fff;
	padding: 8px 5px 8px 14px;
	display: block;
	border-bottom: 1px solid #7e6057;
	font-size: 13px;
	cursor: pointer;
}
.selectBox-dropdown-menu li a:hover{
	background:#ecac4a;
}
input[type="text"].search-bar {
	position: absolute;
	right: -25px;
	bottom: -53px;
	width: 100%;
	float: none;
	display: none;
}
.selectBox-dropdown {
	background: transparent;
	min-width: inherit;
	border: none;
	line-height: 1;
	cursor: pointer;
	font-size: 13px;
	display: block !important;
}
.selectBox-dropdown .selectBox-arrow {
	display: none;
	background: none;
}
.ui-widget-content{
	background-image:none;
}
.selectBox-dropdown .selectBox-label {
	overflow: visible !important;
	width: 100% !important;
}
.selectBox-dropdown-menu {
	z-index: 9999 !important;
	position: fixed !important;
	top: 50px !important;
	background: #5e382d;
	z-index: 999999 !important;
	width: 127px !important;
	color: #774f38;
	border: none;
}
#ui-datepicker-div {
	width: 255px;
}
.drop-down-parent .fa.fa-angle-down, .drop-down-parent .fa.fa-angle-up {
	display: none;
}
/*
 5.)   Footer Styles
 ------------------------------*/
.footer-logo {
	display: block;
}
#footer {
	border-bottom: 3px solid #ecac4a;
	border-top: 3px solid #ecac4a;
}
.primary-footer {
	/*background: #fff url(../images/footer-bg.jpg) 0 100% no-repeat;*/
	/*-webkit-background-size: 100% auto;*/
	/*background-size: 100% auto;*/
	padding: 119px 0px;
	/*min-height: 1275px;*/
}
.primary-footer h5, .primary-footer h1 {
	padding-bottom: 35px;
}
.primary-footer p {
	line-height: 22px;
	padding-bottom: 25px;
}
.line-break {
	display: block;
}
#footer address, #footer address a {
	font-size: 14px;
	color: #81716b;
	line-height: 22px;
}
.footer-img-gap {
	margin-top: 56px;
}
.footer-bottom {
	background: #5e382d;
	padding: 22px 0px;
}
.footer-bottom span {
	font-size: 14px;
	color: #b0a19e;
}
.footer-bottom a {
	color: #ecac4a;
}
.primary-footer .view-title-style{
	margin-bottom:0;
}
/*
 6.)   Loader Styles
 ------------------------------*/
.loader {
    width: 100%;
    height: 100%;
    background: #ecac4a;
    position: fixed;
    z-index:9999999;
    left:0;
    top:0;
}
html{
	overflow-x: hidden;
}
.sk-circle {
  width: 125px;
  height: 125px;
  position:absolute;
  top:50%;
  left:50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
}
.sk-circle .sk-child {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}
.sk-circle .sk-child:before {
  content: '';
  display: block;
  margin: 0 auto;
  width: 15%;
  height: 15%;
  background-color: #fff;
  border-radius: 100%;
  -webkit-animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
          animation: sk-circleBounceDelay 1.2s infinite ease-in-out both;
}
.sk-circle .sk-circle2 {
  -webkit-transform: rotate(30deg);
      -ms-transform: rotate(30deg);
          transform: rotate(30deg); }
.sk-circle .sk-circle3 {
  -webkit-transform: rotate(60deg);
      -ms-transform: rotate(60deg);
          transform: rotate(60deg); }
.sk-circle .sk-circle4 {
  -webkit-transform: rotate(90deg);
      -ms-transform: rotate(90deg);
          transform: rotate(90deg); }
.sk-circle .sk-circle5 {
  -webkit-transform: rotate(120deg);
      -ms-transform: rotate(120deg);
          transform: rotate(120deg); }
.sk-circle .sk-circle6 {
  -webkit-transform: rotate(150deg);
      -ms-transform: rotate(150deg);
          transform: rotate(150deg); }
.sk-circle .sk-circle7 {
  -webkit-transform: rotate(180deg);
      -ms-transform: rotate(180deg);
          transform: rotate(180deg); }
.sk-circle .sk-circle8 {
  -webkit-transform: rotate(210deg);
      -ms-transform: rotate(210deg);
          transform: rotate(210deg); }
.sk-circle .sk-circle9 {
  -webkit-transform: rotate(240deg);
      -ms-transform: rotate(240deg);
          transform: rotate(240deg); }
.sk-circle .sk-circle10 {
  -webkit-transform: rotate(270deg);
      -ms-transform: rotate(270deg);
          transform: rotate(270deg); }
.sk-circle .sk-circle11 {
  -webkit-transform: rotate(300deg);
      -ms-transform: rotate(300deg);
          transform: rotate(300deg); }
.sk-circle .sk-circle12 {
  -webkit-transform: rotate(330deg);
      -ms-transform: rotate(330deg);
          transform: rotate(330deg); }
.sk-circle .sk-circle2:before {
  -webkit-animation-delay: -1.1s;
          animation-delay: -1.1s; }
.sk-circle .sk-circle3:before {
  -webkit-animation-delay: -1s;
          animation-delay: -1s; }
.sk-circle .sk-circle4:before {
  -webkit-animation-delay: -0.9s;
          animation-delay: -0.9s; }
.sk-circle .sk-circle5:before {
  -webkit-animation-delay: -0.8s;
          animation-delay: -0.8s; }
.sk-circle .sk-circle6:before {
  -webkit-animation-delay: -0.7s;
          animation-delay: -0.7s; }
.sk-circle .sk-circle7:before {
  -webkit-animation-delay: -0.6s;
          animation-delay: -0.6s; }
.sk-circle .sk-circle8:before {
  -webkit-animation-delay: -0.5s;
          animation-delay: -0.5s; }
.sk-circle .sk-circle9:before {
  -webkit-animation-delay: -0.4s;
          animation-delay: -0.4s; }
.sk-circle .sk-circle10:before {
  -webkit-animation-delay: -0.3s;
          animation-delay: -0.3s; }
.sk-circle .sk-circle11:before {
  -webkit-animation-delay: -0.2s;
          animation-delay: -0.2s; }
.sk-circle .sk-circle12:before {
  -webkit-animation-delay: -0.1s;
          animation-delay: -0.1s; }

@-webkit-keyframes sk-circleBounceDelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0);
  } 40% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes sk-circleBounceDelay {
  0%, 80%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0);
  } 40% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
.submit {
	text-align: center;
}
.submit button {
	float: unset !important;
}

.car-detail {
	font-family: 'Teko', sans-serif;
    color: black;
    font-size: 22px;
}
.car-detail .bold {
	font-weight: 700;
}
.rent-car-info {
	border-left: 6px solid <?php $contents = file_get_contents(stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['SERVER_NAME'] . '/styles/primary_color');
            echo $contents; ?>;
    background-color: #e4e4e1;
    padding: 15px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.rent-now-head {
    background-color: #d8d6d4;
    border-left: 5px #110554 solid;
    padding: 15px;
    box-shadow: 0 -2px 3px 0 rgba(0, 0, 0, 0.2), 0 6px 4px 0 rgba(0, 0, 0, 0.19);
}