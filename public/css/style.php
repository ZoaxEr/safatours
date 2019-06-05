<?php header("Content-type: text/css"); ?>
/*   
Project: Lets Drive HTML Template
Version: 1.0
Author: Theem'on
Website: http://theemon.com
========================*/
 
/*
 Table Of Contents
 ========================
 1.) Homepage
 2.) About-us
 3.) Our Services
 4.) All Vehicles page
 5.) Service Page
 6.) Blog Page
 7.) Vehicles page
 8.) Blog-Page Page
 9.) Conatct-us Page
10.) 404 Page
11.) Coming soon Page
 ===============================================*/
.bdr-top {
	border-top: 1px solid #ececec;
}
.bdr-right {
	border-right: 1px solid #ececec;
}
.padding-hr-0 {
	padding: 0;
}
.padding-left-0 {
	padding-left: 0;
}
.padding-right-0 {
	padding-right: 0;
}
.section-head h2 {
	color: #fff;
	text-transform: uppercase;
	font-weight: 300;
}
.section-head h2 strong {
	font-weight: 700;
}
.blockquote-warning {
	border-left: 3px solid #ecac4a;
}
.list-styled {
	list-style: disc;
}
.banner {
	position: relative;
}
.reserve-form {
	position: absolute;
	bottom: -80px;
	left: 0;
	right: 0;
}
.reserve-form .reserve-form-wrap {
	background: url("../images/reserve-form-bg.jpg") no-repeat 0 0;
	padding: 25px 30px 23px 30px;
	border-bottom: 3px solid #ecac4a;
	overflow: hidden;
	-webkit-background-size: cover;
	background-size: cover;
}
.reserve-form .form-head {
	padding-bottom: 27px;
	border-bottom: 3px solid #6c493f;
}
.reserve-form .form-head .location {
	float: left;
}
.reserve-form .form-head .location h2 {
	font-family: 'Montserrat', sans-serif;
	font-size: 21px;
	color: #fff;
	margin: 0 8px 0 0px;
	font-weight: 400;
	display: inline-block;
	text-transform: uppercase;
}
.reserve-form .form-head .location span a {
	font-size: 14px;
	color: #ecac4a;
	font-family: 'Open Sans', sans-serif;
	border-bottom: 1px dotted #ecac4a;
	line-height: 19px;
}
.reserve-form .form-head .location span {
	margin-right: 5px;
	position: relative;
	top: -2px;
}
.reserve-form .form-head .location span i {
	margin-right: 9px;
	color: #ecac4a;
}
.reserve-form .form-head .availability {
	float: right;
}
.reserve-form .form-head .availability h2 {
	font-size: 21px;
	font-family: 'Montserrat', sans-serif;
	font-weight: 400;
	color: #ecac4a;
	text-transform: capitalize;
	padding: 0;
	letter-spacing: 0;
}
.reserve-form .form-head .availability h2 span {
	color: #fff;
}
.reserve-form .reserve-form-wrap form {
	padding: 25px 0 0 0;
}
.reserve-form .reserve-form-wrap form label, .contact-us-wrapper form label {
	display: block;
	font-size: 14px;
	color: #fff;
	font-family: 'Open Sans', sans-serif;
	font-weight: 400;
	margin-bottom: 14px;
	float: left;
}
.reserve-form .reserve-form-wrap form input[type="text"], .reserve-form .reserve-form-wrap form input[type="password"], .reserve-form .reserve-form-wrap form select {
	width: 100%;
	height: 42px;
	font-size: 14px;
}
.reserve-form .reserve-form-wrap form input[type="text"]::-moz-placeholder, .reserve-form .reserve-form-wrap form input[type="password"]::-moz-placeholder, .reserve-form .reserve-form-wrap form select::-moz-placeholder {
	opacity: 0.4;
	color: #fff;
}
.reserve-form .reserve-form-wrap form input[type="text"]::-webkit-input-placeholder, .reserve-form .reserve-form-wrap form input[type="password"]::-webkit-input-placeholder, .reserve-form .reserve-form-wrap form select::-webkit-input-placeholder {
	opacity: 0.4;
	color: #fff;
}
.reserve-form .reserve-form-wrap form input[type="checkbox"], .contact-us-wrapper form input[type="checkbox"] {
	position: absolute;
	z-index: -9999;
}
.reserve-form .reserve-form-wrap form .input-wrap {
	overflow: hidden;
	width: 100%;
	position: relative;
	margin-bottom: 32px;
}
.reserve-form .reserve-form-wrap form .input-wrap .form-control:focus {
	background: rgba(90,57,47,0.5);
	transition: all 0.2s ease 0s;
}
.reserve-form .reserve-form-wrap form .input-wrap .form-control:focus + i {
	opacity: 0.5;
}
.reserve-form .reserve-form-wrap form .input-wrap i {
	position: absolute;
	right: 12px;
	bottom: 9px;
	color: #fff;
	cursor: pointer;
}
.reserve-form .reserve-form-wrap form label.check-in {
	display: inline-block;
	font-weight: 400;
	margin-top: 15px;
	vertical-align: top;
}
.reserve-form .reserve-form-wrap form .find-car {
	float: right;
	font-family: open sans;
	font-size: 14px;
	font-weight: 700;
	padding-left: 78px;
	padding-right: 78px;
	text-transform: uppercase;
}
.reserve-form .reserve-form-wrap form .find-car:hover {
	color: #fff;
}
.reserve-form .reserve-form-wrap form .find-car i {
	margin-right: 12px;
}
.check-box {
	width: 18px;
	height: 18px;
	background: url(../images/checkbox.png) -16px 0 no-repeat;
	display: inline-block;
	position: relative;
	top: 4px;
	margin-right: 5px;
}
.reserve-form .reserve-form-wrap form input[type="checkbox"]:checked + label .check-box, .contact-us-wrapper form input[type="checkbox"]:checked + label .check-box {
	background-position: 0 0;
}
.map-wrapper .find-car {
	background: #5e382d;
}
.get-bestoffer {
	background: url("../images/get-bestoffer-bg.jpg") no-repeat left top;
	padding-top: 156px;
	padding-bottom: 176px;
	-webkit-background-size: cover;
	background-size: cover;
}
.get-bestoffer h2 {
	text-align: center;
	margin-bottom: 58px;
	text-transform: uppercase;
}
.get-bestoffer h2 span {
	font-weight: 700;
}
.get-bestoffer .get-left, .get-bestoffer .get-right {
	padding-top: 76px;
}
.get-bestoffer .get-left figure {
	float: left;
	width: 18%;
}
.get-bestoffer .get-left .offer-details {
	float: right;
	width: 74%;
}
.get-bestoffer .get-left .offer-details h3 {
	font-size: 24px;
	color: #3f2c25;
	padding-bottom: 18px;
	position: relative;
}
.get-bestoffer .divider-dotted {
	width: 100%;
	height: 1px;
	background: url(../images/dot-pattern.jpg) left top repeat-x;
	position: relative;
	margin-bottom: 15px;
}
.get-bestoffer .divider-dotted:after {
	content: " ";
	position: absolute;
	bottom: -8px;
	right: -17px;
	border: 4px solid #ffffff;
	width: 17px;
	height: 17px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	background: #ecac4a;
}
.get-bestoffer .fa {
	font-size: 36px;
	color: #ecac4a;
}
.get-bestoffer .offer-icon {
	width: 78px;
	height: 78px;
	display: inline-block;
	background: #ffffff;
	-webkit-box-shadow: 4px 5px 8px 0px #f3f3f3;
	-moz-box-shadow: 4px 5px 8px 0px #f3f3f3;
	box-shadow: 4px 5px 8px 0px #f3f3f3;
	text-align: center;
	padding: 22px 10px;
	float: left;
	margin-right: 15px;
}
.get-left li {
	margin-bottom: 20px;
}
.get-bestoffer .get-right .offer-icon {
	float: right;
	margin-left: 15px;
	margin-right: 0;
}
.get-bestoffer .get-right .divider-dotted:after {
	left: -17px;
}
.best-dealers-wrap {
	position: relative;
	padding-top: 145px;
	padding-bottom: 65px;
}
.absolute-header-deal {
	position: absolute;
	top: -115px;
	width: 100%;
	left: 0;
	right: 0;
}
.absolute-header-deal h4 {
	font-size: 14px;
	color: #3f2c25;
	text-transform: uppercase;
	font-weight: 700;
}
.absolute-header-deal:after {
	position: absolute;
	width: 2px;
	background: #ecac4a;
	height: 148px;
	content: " ";
	left: 0;
	right: 0;
	top: 42px;
	margin: 0 auto;
}
.dealer-listing {
	min-height: 242px;
	position: relative;
	background: #ffffff;
	cursor: pointer;
}
.dealer-listing a img {
	position: absolute;
	top: 0;
	right: 0;
	left: 0;
	bottom: 0;
	margin: auto;
}
.dealer-listing a {
	display: block;
}
.dealer-listing:hover {
	background: #fff url(../images/dealer-bg.png) 0 0 no-repeat;
	-webkit-background-size: cover;
	background-size: cover;
}
.we-do-right {
	background: #633f34;
	border-bottom: 3px solid #ecac4a;
}
.we_do-wrap {
	position: relative;
}
.we-do-right-wrap {
	width: 717px;
	padding: 50px 15px 48px 30px
}
.car-drive-right {
	position: static;
}
.car-pic {
	background: url('../images/big-section-car.png') no-repeat center center;
	background-size: cover;
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 41.667%
}
.triangle-divider {
	background: url(../images/triangle-divider.png) 0 0 repeat-x;
	width: 100%;
	height: 3px;
}
.triangle-gap {
	margin-top: 23px;
	margin-bottom: 28px;
}
.blockquote {
	padding: 21px 20px 27px 61px;
	background: url(../images/blockquote-bg.png) 0 0 repeat;
}
.we_do-description .blockquote  p {
	font-size: 16px;
	color: #fff;
	font-family: 'Montserrat', sans-serif;
	font-weight: 600;
	font-style: normal;
	position: relative;
	padding-left: 7px;
	line-height: 26px;
}
.we-do-blockquote {
	width: 270px;
	float: right;
	margin-top: 25px;
}
.we_do-description {
	padding-bottom: 33px;
}
.we_do-description p {
	color: #b0a19e;
	padding-right: 5px;
}
.white-list {
	margin-top: 19px;
	margin-left: 27px;
}
.white-list li {
	font-size: 9px;
	color: #ffffff;
	line-height: 1;
	margin-bottom: 8px;
}
.white-list li span {
	font-size: 14px;
	line-height: 1;
}
.we-do-right-info {
	float: left;
	width: 56%;
	padding-top: 2px;
}
.blockquote-sign {
	color: #ecac4a;
	font-family: 'Montserrat', sans-serif;
	font-weight: 600;
	font-size: 36px;
	position: absolute;
	top: 5px;
	left: -34px;
}
.feature-we_do li {
	float: left;
	width: 34.33%;
	border-left: 1px solid #7e6159;
	border-bottom: 1px solid #7e6159;
	padding: 30px 10px 23px 90px;
	position: relative;
	font-size: 16px;
	font-family: 'Montserrat', sans-serif;
	line-height: 22px;
	color: #ffffff;
}
.feature-we_do li i {
	left: 33px;
	position: absolute;
	top: 33px;
	font-size: 36px;
	color: #ecac4a;
}
.feature-we_do .small-item {
	width: 30.33%;
	padding: 30px 10px 23px 66px;
	border-left: 0;
}
.feature-we_do .small-item i {
	left: 8px;
}
.rental-vehicles {
	padding: 79px 0 36px 0;
}
.rental-vehicles h2 {
	text-align: center;
	text-transform: uppercase;
	margin-bottom: 30px;
}
.rental-vehicles h2 span {
	font-weight: 700;
}
.rental-vehicles p {
	text-align: center;
}
.type-of-vehicle {
	text-align: center;
	padding: 51px 0 41px 0;
	margin: 0;
	background: url('../images/line-bg.png') repeat-x bottom center;
}
.vehicle-item {
	text-align: center;
	position: relative;
}
.vehicle-item figure {
	cursor: pointer;
	background: #f9f9f9;
	height: 185px;
	border: 3px solid transparent;
	-webkit-transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
	transition: all 0.5s ease 0s;
}
.vehicle {
	position: relative;
	height: 140px;
}
.vehicle-item img {
	position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translate(-50%,-50%);
	-moz-transform: translate(-50%,-50%);
	-ms-transform: translate(-50%,-50%);
	-o-transform: translate(-50%,-50%);
	transform: translate(-50%,-50%);
}
.vehicle-item figcaption {
	background: #5e382d;
	position: absolute;
	left: 0;
	bottom: 0;
	color: #ffffff;
	width: 100%;
	padding: 14px;
	font-family: 'Montserrat', sans-serif;
}
.vehicle-item figure:hover {
	border: 3px solid #ecac4a;
	-webkit-transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
	transition: all 0.5s ease 0s;
	background: url(../images/white-patter-bg.jpg) 0 0 repeat;
}
.vehicle-item figure:hover figcaption {
	background: #ecac4a;
	-webkit-transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
	transition: all 0.5s ease 0s;
}
.rental-per-day {
	padding: 42px 0 0 0;
}
.rental-car {
	margin-bottom: 30px;
}
.rental-car img {
	display: block;
	width: 100% !important;
    max-height: 234px;
}
.car-details {
	border: 1px solid #ececec;
	padding: 28px 25px 20px 25px;
}
.car-details span {
	display: block;
	font-size: 14px;
	color: #81716b;
}
.car-details span small {
	color: #ecac4a;
	font-weight: 700;
	font-size: 14px;
}
.car-details span strong {
	color: #81716b;
	font-weight: 700;
}
.car-info h5 {
	float: left;
}
.car-rating {
	float: right;
	margin: 0;
}
.car-rating li {
	font-size: 14px;
	color: #ecac4a;
	display: inline-block;
}
.car-rating .grey-star {
	color: #cccccc;
}
.car-more-info li {
	float: left;
	padding: 10px 15px;
	border: 1px solid #ececec;
	width: 100px;
	text-align: center;
}
.car-more-info li i {
	color: #ecac4a;
	font-size: 14px;
	margin-right: 5px;
}
.car-more-info li.orange-btn {
	padding: 0;
	width: 170px;
	font-family: 'Open Sans', sans-serif;
}
.car-more-info li.orange-btn a {
	padding: 7px;
}
.car-more-info li.orange-btn i {
	color: #ffffff;
}
.orange-btn a {
	background: #ecac4a;
	color: #ffffff;
	padding: 6px 10px;
	display: block;
	text-align: center;
	text-transform: uppercase;
	font-weight: 700;
	font-family: 'Open Sans', sans-serif;
}
.co-founder-section {
	padding: 72px 0 290px 0;
	background: url('../images/bg.jpg') no-repeat;
	background-size: cover;
	background-position: 50% 100%;
}
.flexslider {
	border: 0;
	background: none;
}
.co-founder.flexslider {
	text-align: center;
}
.co-founder.flexslider figure {
	display: inline-block;
}
.co-founder.flexslider .slides img {
	width: auto;
}
.custom-navigation {
	text-align: center;
}
.co-founder figure {
	margin-bottom: 27px;
}
.co-founder .item > figure {
	border-radius: 50%;
	display: inline-block;
}
.co-founder h5 {
	margin-bottom: 10px;
}
.co-founder strong {
	font-style: italic;
	display: block;
	color: #81716b;
	margin-bottom: 35px;
	font-size: 14px;
}
.co-founder p {
	font-size: 16px;
	line-height: 26px;
	color: #81716b;
	font-family: 'Open Sans', sans-serif;
	margin-bottom: 45px;
}
.co-founder-section a {
	background: #5e382d;
	padding: 14px 15px;
	color: #ffffff;
	font-size: 14px;
	font-weight: 700;
	display: inline-block;
	text-transform: uppercase;
}
.co-founder-section a i {
	margin-right: 5px;
	margin-left: 5px;
}
.co-founder-section a:hover {
	background: #ecac4a;
}
.all-vehicles-wrapper {
	background: url('../images/bg1.jpg') no-repeat;
	background-size: cover;
	padding: 46px 0;
	position: relative;
}
.all-vehicle h2 {
	font-size: 32px;
	font-weight: 700;
	color: #ffffff;
	font-family: 'Montserrat', sans-serif;
	text-transform: uppercase;
	margin-bottom: 19px;
}
.all-vehicle h2 span {
	font-family: 'Montserrat', sans-serif;
	font-weight: 400;
}
.all-vehicle p {
	color: #ffffff;
}
.payment-method h4 {
	color: #ffffff;
	margin-bottom: 27px;
}
.payment-method h4 span {
	font-weight: 700;
}
.payment-list {
	margin:0 auto;
}
.payment-list li {
	float: left;
	margin: 0 12px;
}
.payment-list li:first-child {
	margin-left: 0;
}
.filter-wrapper {
	padding: 40px 0 50px 0;
}
.filter {
	background: #5e382d;
	padding: 10px 20px 10px 24px;
	margin-bottom: 40px;
}
.filter select {
	line-height: 1.5;
	font-size: 14px;
	font-family: open sans;
}
a.selectBox {
	color: inherit;
}
.filter h4 {
	width: 150px;
	color: #ffffff;
	display: inline-block;
}
.filter a {
	color: #ecac4a;
	float: right;
	padding: 10px 0 0 0;
}
.filter span {
	border-bottom: 1px dotted;
}
.filter a i {
	margin-left: 8px;
}
.filter-cars {
	margin-bottom: 30px;
}
.filter-inner {
	position: relative;
	cursor: pointer;
	overflow: hidden;
}
.filter-inner  img {
	display: block;
}
.filter-widgets {
	position: absolute;
	left: 0;
	top: 100%;
	height: 100%;
	width: 100%;
	-webkit-transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
	transition: all 0.5s ease 0s;
}
.filter-widgets strong {
	position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translate(-50%,-50%);
	-moz-transform: translate(-50%,-50%);
	-ms-transform: translate(-50%,-50%);
	-o-transform: translate(-50%,-50%);
	transform: translate(-50%,-50%);
	width:52%;
}
.filter-widgets a {
	width: 42px;
	height: 42px;
	background: #ecac4a;
	display: inline-block;
	position: relative;
	cursor: pointer;
}
.filter-widgets a i {
	color: #ffffff;
	position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translate(-50%,-50%);
	-moz-transform: translate(-50%,-50%);
	-ms-transform: translate(-50%,-50%);
	-o-transform: translate(-50%,-50%);
	transform: translate(-50%,-50%);
}
.filter-inner:hover .filter-widgets {
	top: 0;
	-webkit-transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
	transition: all 0.5s ease 0s;
}
.filter-car-details {
	padding: 15px;
	border-top: 1px solid #ececec;
	border-left: 1px solid #ececec;
	border-right: 1px solid #ececec;
	position: relative;
}
.filter-car-details h5 {
	color: #3f2c25;
	font-size: 16px;
	line-height: 22px;
	margin-bottom: 4px;
}
.filter-car-details span {
	font-size: 14px;
	color: #81716b;
}
.filter-car-details span em {
	color: #cccccc;
	text-decoration: line-through;
	font-size: 14px;
}
.filter-car-details span strong {
	color: #81716b;
	font-weight: 700;
}
.filter-car-details .discount {
	background: #ecac4a none repeat scroll 0 0;
	bottom: 15px;
	color: #ffffff;
	font-family: open sans;
	font-size: 14px;
	font-weight: 700;
	padding: 5px 2px 5px 0px;
	position: absolute;
	right: 0;
}
.filter-car-details .discount:before {
	content: "";
	width: 0;
	height: 0;
	border: 12px solid #ecac4a;
	border-right: 1px solid #ecac4a;
	border-bottom: 12px solid #ecac4a;
	border-left: 12px solid transparent;
	position: absolute;
	top: 0;
	left: -13px;
}
.filter-car-details span small {
	font-size: 14px;
	color: #ecac4a;
	font-weight: 700;
}
.filter-car-rating li {
	float: left;
	color: #ecac4a;
	margin-right: 5px;
	font-size: 14px;
}
.filter-car-rating li.grey-star {
	color: #cccccc;
}
.filter-car-more-info li {
	width: 50%;
	border-top: 1px solid #ececec;
	border-left: 1px solid #ececec;
	float: left;
	text-align: center;
	padding: 10px;
}
.filter-car-more-info li:nth-child(even) {
	border-right: 1px solid #ececec;
}
.filter-car-more-info li i {
	margin-right: 8px;
	color: #ecac4a;
}
.filter-car-more-info li.orange-btn {
	padding: 0;
	width: 100%;
	border: 0;
}
.filter-car-more-info li.orange-btn i {
	color: #ffffff;
}
.preview-more {
	text-align: center;
	background: url('../images/line-bg.png') repeat-x center center;
}
.button {
	background: #5e382d;
	color: #ffffff;
	font-size: 14px;
	padding: 14px 17px;
	font-weight: 700;
	text-transform: uppercase;
	display: inline-block;
}
.ui-timepicker-wrapper {
	width: 255px;
}
.button i {
	margin-right: 14px;
}
.your-dreams-wrapper {
	background: url('../images/bg7.jpg') no-repeat;
	padding: 75px 0;
	border-bottom: 3px solid #ecac4a;
	background-size: cover;
}
.your-dreams p {
	color: #b0a19e;
	margin-bottom: 26px;
}
.brand-logo-wrapper span {
	display: block;
	font-weight: 700;
	font-size: 28px;
	line-height: 1;
	color: #ffffff;
	text-align: right;
	text-transform: uppercase;
}
.brand-logo-wrapper strong {
	display: block;
	text-transform: uppercase;
	font-size: 64px;
	line-height: 1;
	color: #ffffff;
	text-align: right;
	margin-bottom: 15px;
}
.brand-logo {
	background: url('../images/line-bg2.png') left top repeat-x, url('../images/line-bg2.png') left bottom repeat-x;
	padding: 20px 0;
}
.brand-logo li {
	display: inline-block;
	vertical-align: middle;
}
.orange-btn {
	background: #ecac4a;
	text-align: center;
	padding: 5px 30px;
	text-transform: uppercase;
	display: inline-block;
	color: #ffffff;
	font-weight: 700;
	font-size: 14px;
	min-height: 42px;
	line-height: 30px;
	min-width: 170px;
	letter-spacing: 1px;
}
.executive-team-wrapper {
	background: url('../images/bg5.jpg') no-repeat;
	background-size: cover;
	padding: 75px 0 0 0;
	text-align: center;
}
.executive-team-wrapper h2 {
	text-transform: uppercase;
	margin-bottom: 30px;
}
.executive-team-wrapper h2 span {
	font-weight: 700;
}
.executive {
	border-bottom: 3px solid transparent;
	padding-bottom: 30px;
	-webkit-transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
	transition: all 0.5s ease 0s;
	cursor: pointer;
	margin-bottom: 30px;
}
.executive figure {
	margin-bottom: 20px;
}
.executive h5 {
	color: #3f2c25;
	font-weight: 700;
	text-transform: uppercase;
	margin-bottom: 10px;
}
.executive strong {
	font-size: 14px;
	color: #81716b;
	margin-bottom: 20px;
	display: block;
	font-style: italic;
}
.executive p {
	margin-bottom: 20px;
}
.executive:hover {
	background: #ffffff;
	border-bottom: 3px solid #ecac4a;
	-webkit-transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
	transition: all 0.5s ease 0s;
}
.social-links {
	text-align: center;
}
.social-links li {
	display: inline-block;
	margin: 0 5px;
}
.social-links li a i {
	color: #3f2c25;
	opacity: 0.4;
	font-size: 13px;
}
.social-links li a i:hover {
	color: #ecac4a;
	opacity: 1;
}
.awards-wrapper {
	padding: 20px 0;
	background: rgba(236,172,74,0.85);
}
.awards {
	padding: 20px 0;
	margin-left: -15px;
	margin-right: -15px;
	border-right: 1px solid #ffffff;
}
.awards strong {
	font-size: 56px;
	color: #ffffff;
}
.awards small {
	font-size: 14px;
	color: #3f2c25;
	font-weight: 700;
	text-transform: uppercase;
}
.map-wrapper {
	height: 700px;
	position: relative;
}
#map-view {
	height: 100%;
	width: 100%;
}
.map-float {
	position: absolute;
	left: 0;
	right: 0;
	margin: 0 auto;
	top: 50px;
	z-index:9;
}
.map-wrapper .ui-timepicker-wrapper {
	width: 160px !important;
}
.find-car {
	background: #ecac4a;
	padding: 15px;
}
.local-rental span {
	color: #b0a19e;
	display: block;
	margin-bottom: 7px;
}
.local-rental strong {
	display: block;
	font-size: 21px;
	color: #ffffff;
}
.input-text-wrap {
	position: relative;
}
.input-text-wrap input[type="text"], .input-text-wrap input[type="password"], .input-text-wrap input[type="email"], .input-text-wrap select {
	float: none;
	width: 100%;
}
.input-text-wrap label {
	width: 100%;
}
.contact-us-wrapper .input-text-wrap input[type="text"],.contact-us-wrapper .input-text-wrap input[type="password"], .contact-us-wrapper .input-text-wrap input[type="email"], .contact-us-wrapper .input-text-wrap select {
	font-weight: 300;
}
.contact-us-wrapper .input-text-wrap input[type="text"]::-webkit-input-placeholder, .contact-us-wrapper .input-text-wrap input[type="password"]::-webkit-input-placeholder, .contact-us-wrapper .input-text-wrap select::-webkit-input-placeholder {
	opacity: 0.4;
	color: #fff;
}
.contact-us-wrapper .input-text-wrap input[type="email"]::-webkit-input-placeholder {
	opacity: 0.4;
	color: #fff;
}
.contact-us-wrapper .input-text-wrap input[type="text"]::-moz-placeholder, .contact-us-wrapper .input-text-wrap input[type="password"]::-moz-placeholder, .contact-us-wrapper .input-text-wrap select::-moz-placeholder {
	opacity: 0.4;
	color: #fff;
}
.contact-us-wrapper .input-text-wrap input[type="email"]::-moz-placeholder {
	opacity: 0.4;
	color: #fff;
}
.contact-us-wrapper .textarea-wrap textarea::-webkit-input-placeholder {
	opacity: 0.4;
	color: #fff;
	font-family: open sans;
	font-weight: 300;
}
.contact-us-wrapper .textarea-wrap textarea::-moz-placeholder {
	font-weight: 300;
	opacity: 0.4;
	color: #fff;
	font-family: open sans;
}
#contactSuccess {
	top: 62px !important;
	left: 0;
	margin: 0 auto;
	position: absolute;
	right: 0;
	top: auto;
	width: 500px;
}
.contact-us-map #contactSuccess {
	top: 32px !important;
}
#contactSuccess span {
	font-style: italic;
    color: #38ff16;
    text-transform: uppercase;
    font-size: 18px;
}
.input-text-wrap i {
	position: absolute;
	right: 17px;
	top: 26px;
	color: #fff;
}
.car-btn .orange-btn {
	width: 100%;
	padding: 10px;
}
.orange-btn i {
	margin-right: 10px;
}
.floating-car {
	display: none;
}
.contact-us-wrapper {
	background: url('../images/bg3.jpg') no-repeat center center /cover;
	padding: 57px 0 105px;
	position: relative;
}
.contact-us-wrapper h2 {
	color: #ffffff;
	text-align: left;
	margin-bottom: 30px;
	text-transform: uppercase;
	font-weight: 300;
}
.contact-us-wrapper h2 span {
	font-weight: 700;
}
.contact-us-wrapper .input-text-wrap {
	margin-top: 20px;
}
.textarea-wrap {
	position: relative;
	margin-bottom: 20px;
}
.blog-page .input-text-wrap .input-box {
	font-weight: 400px;
	color: #5e382d;
	padding-left: 17px;
}
.blog-page .input-text-wrap .input-box::-moz-placeholder {
	color: #5e382d;
	opacity: 0.4;
}
.blog-page .input-text-wrap .input-box::-webkit-input-placeholder {
	color: #5e382d;
	opacity: 0.4;
}
.blog-page .textarea-wrap textarea::-moz-placeholder {
	color: #5e382d;
	opacity: 0.4;
}
.blog-page .textarea-wrap textarea::-webkit-input-placeholder {
	color: #5e382d;
	opacity: 0.4;
}
.rental-car .car-details-wrap .car-more-info li:last-child {
	border-top: none;
}
.textarea-wrap i {
	position: absolute;
	right: 17px;
	top: 42px;
	color: #ffffff;
}
.contact-us {
	background: url('../images/line-bg2.png') repeat-x left top, url('../images/line-bg2.png') repeat-x left bottom;
	padding: 20px 0;
	margin-bottom: 30px;
}
.some-help {
	color: #ffffff;
	text-transform: uppercase;
	text-align: center;
	display: block;
	font-weight: 700;
	font-size: 14px;
}
.need-help-wrapper {
	padding: 50px 0 75px 0;
	position: relative;
}
.need-help-wrapper:after {
	position: absolute;
	width: 2px;
	background: #ecac4a;
	height: 148px;
	content: " ";
	left: 0;
	right: 0;
	top: -67px;
	margin: 0 auto;
}
.need-help {
	text-align: center;
	font-family: 'Open Sans', sans-serif;
	background: url('../images/line-bg.png') repeat-x left bottom;
	padding: 30px 0 50px 0;
}
.need-help i {
	background: url('../images/need-help.png') no-repeat;
	width: 136px;
	height: 136px;
	display: inline-block;
	position: relative;
	margin-bottom: 20px;
	font-size: 84px;
	padding-top: 30px;
}
.need-help figure img {
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	margin: auto;
}
.need-help h2 {
	text-transform: uppercase;
	color: #3f2c25;
	margin-bottom: 10px;
	font-family: 'Montserrat', sans-serif;
}
.need-help h2 strong {
	font-weight: 700;
}
.need-help a {
	font-size: 32px;
	line-height: 1;
	color: #ecac4a;
	font-weight: 700;
	margin-bottom: 20px;
	font-family: 'Montserrat', sans-serif;
}
.read-blog-wrapper {
	text-align: center;
	padding: 38px 0 0;
}
.read-blog-wrapper h2, .media-wrap h2, .blog-page .contact-us h2 {
	text-transform: uppercase;
	color: #3f2c25;
	margin-bottom: 25px;
	font-family: 'Montserrat', sans-serif;
	margin-top: 28px;
}
.media-wrap h2 {
	margin-top: 0 !important;
}
.blog-read-wrap h5 {
	color: #3f2c25;
	font-weight: 700;
	text-transform: uppercase;
	padding-bottom: 30px;
}
.blog-read-wrap p {
	font-size: 16px;
	line-height: 26px;
}
.blog-read-wrap {
	padding-top: 47px;
	background: #ffffff url(../images/grey-white-pattern.jpg) left 100% repeat-x;
	padding-bottom: 43px;
}
.read-blog-wrapper strong {
	font-weight: 700;
}
.blog-read-wrap .item {
	padding: 37px 32px;
	border-right: 1px solid #ececec;
	background-position: 50% 50%;
	background-repeat: no-repeat;
	background-color: #fff;
}
.blog-date-comment {
	margin-top: 20px;
}
.contact-us strong {
	font-weight: 700;
}
.blog-date, .blog-favorate, .blog-comment {
	font-size: 14px;
	color: #81716b;
	font-style: italic;
}
.blog-date-comment .fa {
	padding-left: 3px;
}
.blog-read-wrap .item:hover h5, .blog-read-wrap .item:hover p, .blog-read-wrap .item:hover .blog-date, .blog-read-wrap .item:hover .blog-favorate, .blog-read-wrap .item:hover .blog-comment {
	color: #fff;
}
.blog-read-wrap .item:hover {
	background-image: url(../images/blog-hover-bg.jpg);
	background-color: #ecae4f;
}
.owl-buttons .owl-next, .owl-buttons .owl-prev {
	background: #5e382d;
	padding: 12px 18px 12px 18px;
	color: #ffffff;
	font-size: 14px;
	font-weight: 700;
	display: inline-block;
	text-transform: uppercase;
	position: relative;
	margin-right: 72px;
}
.owl-buttons .owl-next {
	margin-left: 72px;
	margin-right: 0;
}
.home .co-founder-section .owl-buttons .owl-prev {
	margin-right: 15px;
}
.home .co-founder-section .owl-buttons .owl-next {
	margin-left: 0px;
}
.owl-buttons .owl-next:after {
	content: "\f178";
	margin-left: 10px;
	font: normal normal normal 14px/1 FontAwesome;
	font-size: inherit;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
.owl-buttons .owl-prev:before {
	content: "\f177";
	margin-right: 10px;
	font: normal normal normal 14px/1 FontAwesome;
	font-size: inherit;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}
.blog-read-wrap .owl-controls {
	background: url('../images/line-bg.png') repeat-x left bottom;
	text-align: center;
	position: relative;
	top: 60px;
	background-position: center;
}
.owl-buttons .owl-next:hover, .owl-buttons .owl-prev:hover, .button:hover {
	color: #fff;
	background: #ecac4a;
}
.read-blog-listing {
	position: relative;
}
.carousal-btn {
	position: absolute;
	bottom: -17px;
	left: 0;
	right: 0;
	margin: 0 auto;
	max-width: 125px;
	padding: 12px 18px;
}
.carousal-btn .fa {
	margin-right: 8px;
}
.newsletter-wrap {
	background: #643f34 url(../images/newsletter-bg.jpg) 50% 50% no-repeat;
	padding: 50px 0px;
}
.newsletter-wrap h2 {
	text-transform: uppercase;
	color: #fff;
	font-weight: 300;
	padding-top: 7px;
	font-size: 31px;
}
.newsletter-wrap h2 strong {
	font-weight: 700;
}
.subscribe-form .newsletter-text {
	width: 100%;
	height: 42px;
	padding-left: 19px;
}
.subscribe-form .orange-btn {
	display: block;
	width: 100%;
	padding: 11px 30px;
}
.subscriber-info {
	position: relative;
}
.subscriber-info .fa {
	position: absolute;
	top: 13px;
	right: 15px;
	color: #fff;
	font-size: 14px;
}
.about-us-footer {
	padding-right: 23%;
}
.executive-team-description {
	margin-top: 60px;
}
.ui-datepicker .ui-datepicker-prev:before, .ui-datepicker .ui-datepicker-next:before {
	content: '<' !important;
	font-family: 'FontAwesome' !important;
	font-size: 16px !important;
	color: #000 !important;
	position: absolute !important;
	left: 0 !important;
	right: 0 !important;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	margin: 0 auto;
	width: 16px;
}
.ui-datepicker .ui-datepicker-next:before {
	content: '>' !important;
}
/*
 2.) About-us
 ----------------------------------------*/
.pattern {
	background: url('../images/line-bg.png') repeat-x;
	background-position: left bottom;
}
.po-rel {
	position: relative;
}
.bdr-0 {
	border-top: 0 !important;
}
.banner2 {
	background: url(../images/banner2-bg.jpg) no-repeat center top;
	margin-bottom: 50px;
	-webkit-background-size: cover;
	background-size: cover;
	padding: 163px 0 40px;
}
.banner2 h1 {
	text-transform: uppercase;
	color: #3f2c25;
	font-weight: 400;
	line-height: 42px;
	border-left: 5px solid #3f2c25;
	padding-left: 30px;
}
.breadcrumb {
	background: none;
	text-align: right;
	padding-right: 0;
	margin-bottom: 0;
	font-size: 14px;
}
.breadcrumb li a {
	font-family: open sans;
	font-size: 14px;
	color: #3f2c25;
	border-bottom: 1px solid #3f2c25;
	line-height: 14px;
	display: inline-block;
}
.breadcrumb > .active {
	color: #3f2c25;
}
.breadcrumb > .active a {
	border-bottom: 0;
}
.breadcrumb > li + li:before {
	content: "\f105";
	font-family: FontAwesome;
	padding: 0 7px;
	color: #3f2c25;
}
.main-image-block {
	margin-bottom: 47px;
}
.main-image-block img {
	display: block;
}
.no-left-pad {
	padding-left: 0;
}
.no-right-pad {
	padding-right: 0;
}
.approach-block {
	margin-bottom: 32px;
}
.approach-block h5 {
	margin-bottom: 29px;
}
blockquote {
	position: relative;
	margin-bottom: 27px;
}
blockquote .client-pic {
	float: left;
	height: 70px;
	width: 70px;
	border-radius: 50%;
	display: inline-block;
	margin-right: 30px;
}
blockquote p {
	font-size: 14px;
	color: #81716b;
	letter-spacing: -0.42px;
}
blockquote .client-msg {
	width: calc(100% - 100px);
	float: left;
	padding-right: 30px;
	margin-top: 2px;
}
.quote-icon {
	position: absolute;
	font-size: 36px;
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	color: #5e382d;
	opacity: 0.15;
	right: 0px;
	top: -5px;
}
.approach-block p {
	font-size: 14px;
	color: #81716b;
	margin-bottom: 21px;
}
.feature-block {
	list-style-type: none;
	overflow: hidden;
	margin: 0 0 48px 0;
}
.feature-block li {
	float: left;
	width: 33.3%;
	padding: 25px 2.5% 24px 3.8%;
	position: relative;
}
.feature-block li:before {
	position: absolute;
	height: 100%;
	width: 1px;
	right: 0;
	top: 0;
	display: inline-block;
	background: #ebebeb;
	content: "";
}
.feature-block li:last-child:before {
	display: none;
}
.feature-block li .fa {
	color: #ecac4a;
	font-size: 36px;
	float: left;
	margin-right: 19px;
	margin-top: 3px;
}
.feature-block li strong {
	font-size: 16px;
	font-family: 'Montserrat', sans-serif;
	color: #3f2c25;
	float: left;
	width: calc(100% - 58px);
	width: -webkit-calc(100% - 58px);
	line-height: 1.4;
}
.features-point {
	margin: 0 0 28px;
	position: relative;
}
.features-point h5 {
	margin: 0 0 27px 0;
}
.features-point:before {
	position: absolute;
	content: "";
	background: url('../images/track-pattern.png') repeat-y scroll left top;
	height: 100%;
	left: 42px;
	position: absolute;
	top: 18px;
	width: 3px;
}
.features-point h5 strong {
	color: #ecac4a;
	margin: 0 12px 0 0;
}
.features-point h5 small {
	width: 15px;
	height: 15px;
	background-color: #ecac4a;
	border-radius: 50%;
	display: inline-block;
	margin: 0 20px 0 0;
	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
	box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.3);
	border: 3px solid #ffffff;
}
.features-point p {
	padding: 0 0 0 70px;
}
.rent-block h2 {
	text-transform: uppercase;
	text-align: center;
	margin: 0 0 20px 0;
}
.rent-block h2 span {
	font-weight: 700;
}
h2.second-title {
	color: #ecac4a;
	font-weight: 700;
	margin: 0 0 80px 0;
}
.rent-block {
	position: relative;
	padding: 80px 0 84px;
}
.rent-block:before {
	content: "";
	background: url('../images/line-bg.png') repeat-x scroll left top;
	height: 3px;
	width: 100%;
	position: absolute;
	left: 0;
	top: 0;
}
.rent-car-img {
	position: relative;
	padding: 70px 0 0 0;
}
.protect-block strong {
	font-size: 24px;
	line-height: 1;
	color: #3f2c25;
	font-family: "Montserrat", sans-serif;
	display: block;
	padding: 0 0 24px 0;
	background: url('../images/dot-pattern.jpg') repeat-x scroll left bottom;
	margin: 0 0 20px 0;
}
.offer-wrap {
	background: url('../images/offer-bg.png') no-repeat scroll left top;
	-webkit-background-size: cover;
	background-size: cover;
	position: relative;
}
.offer-overlay {
	position: absolute;
	width: 100%;
	height: 100%;
	background: rgba(236, 172, 74, 0.95);
	top: 0;
	left: 0;
	right: 0;
}
.offer-cont {
	z-index: 99;
	position: relative;
	padding: 38px 0 45px;
}
.offer-cont h2 {
	color: #ffffff;
	text-transform: uppercase;
	margin: 0 0 19px;
}
.offer-cont h2 span {
	font-weight: 700;
}
.offer-cont p {
	color: #ffffff;
}
.offer-btn {
	font-size: 14px;
	line-height: 1;
	color: #ffffff;
	font-family: 'Open Sans', sans-serif;
	display: block;
	background: #3f2c25;
	text-align: center;
	font-weight: 700;
	padding: 14px 0;
	text-transform: uppercase;
	margin: 53px 0 0 0;
}
.reviews {
	background: url("../images/reviews-bg.png") no-repeat;
	-webkit-background-size: cover;
	background-size: cover;
	text-align: center;
	padding: 72px 0 85px 0;
}
.reviews .owl-buttons .owl-next {
	margin: 0;
	padding: 10px 20px;
}
.reviews .owl-buttons .owl-prev {
	margin: 0 10px 0 0;
	padding: 10px 20px;
}
.review-profile figure {
	margin: 0 0 22px;
}
.review-profile h5 {
	margin-bottom: 7px;
}
.review-profile strong {
	margin-bottom: 22px;
}
.review-profile p {
	margin-bottom: 40px;
}
/*
 3.) Our Services
 ----------------------------------------*/
.view-services {
	margin: 0 0 30px;
}
.view-title-style, .view-title-style a {
	font-weight: 700;
	color: #3f2c25;
	text-transform: uppercase;
	margin: 0 0 20px 0;
}
.read-more-btn {
	font-size: 14px;
	color: #81716b;
	line-height: 1;
	text-transform: capitalize;
	font-family: 'Open Sans', sans-serif;
	font-style: italic;
	display: inline-block;
}
.read-more-btn i {
	font-size: 14px;
	color: #81716b;
	margin-left: 11px;
}
.services-img-section {
	position: relative;
	margin: 0 0 28px;
}
.view-services p {
	margin-bottom: 22px;
}
.img-overlay {
	background-color: rgba(236, 174, 80, 0.96);
	height: 100%;
	width: 100%;
	position: absolute;
	left: 0;
	top: 0;
	text-align: center;
	-webkit-transition: all 0.5s ease 0s;
	-moz-transition: all 0.5s ease 0s;
	-ms-transition: all 0.5s ease 0s;
	-o-transition: all 0.5s ease 0s;
	transition: all 0.5s ease 0s;
	opacity: 0;
}
.services-img-section:hover .img-overlay {
	opacity: 1;
}
.img-overlay-wrapper {
	top: 50%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	position: absolute;
	margin: auto;
	left: 0;
	right: 0;
}
.img-overlay-wrapper h6, .img-overlay-wrapper h6 a {
	font-size: 14px;
	color: #ffffff;
	font-family: 'Open Sans', sans-serif;
	text-transform: uppercase;
	font-weight: 700;
}
.img-overlay-wrapper h6 a {
	display: inline-block;
	vertical-align: middle;
}
.img-overlay-wrapper h6 a i {
	margin-right: 10px;
}
.services-pagination {
	border-top: 0;
	text-align: center;
	margin: 0 0 28px 0;
}
.services-pagination li a {
	background: #5e382d none repeat scroll 0 0;
	color: #ffffff;
	display: inline-block;
	font-size: 14px;
	font-weight: 700;
	padding: 12px 18px;
	position: relative;
	text-transform: uppercase;
}
.services-pagination li a {
	border: 0;
	padding: 11px 18px;
}
.services-pagination li {
	margin: 0 10px 0 0;
	display: inline-block;
}
.services-pagination li a {
	font-size: 14px;
	color: #ffffff;
	font-weight: 700;
	-webkit-transition: all 0.2s ease 0s;
	-moz-transition: all 0.2s ease 0s;
	-ms-transition: all 0.2s ease 0s;
	-o-transition: all 0.2s ease 0s;
	transition: all 0.2s ease 0s;
}
.pagination > li:first-child > a {
	padding: 11px 20px;
}
.pagination > li:first-child > a i {
	margin: 0 10px 0 0;
}
.pagination > li:last-child > a {
	padding: 11px 20px;
}
.pagination > li:last-child > a i {
	margin: 0 0 0 10px;
}
.pagination > li:first-child > a, .pagination > li:first-child > span, .pagination > li:last-child > a, .pagination > li:last-child > span {
	border-bottom-left-radius: 0;
	border-top-left-radius: 0;
	border-bottom-right-radius: 0;
	border-top-right-radius: 0;
}
.services-pagination li a:hover, .services-pagination li.active a:hover, .services-pagination li.active a {
	background: #ecac4a none repeat scroll 0 0;
	color: #fff;
}
.help-box {
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#643f35+0,623c32+50,643f35+100 */
	background: #643f35; /* Old browsers */
	background: -moz-linear-gradient(left, #643f35 0%, #623c32 50%, #643f35 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(left, #643f35 0%,#623c32 50%,#643f35 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to right, #643f35 0%,#623c32 50%,#643f35 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#643f35', endColorstr='#643f35',GradientType=1 ); /* IE6-9 */
	padding: 27px 26px 31px 26px;
	border-bottom: 3px solid #ecac4a;
	margin: 0 0 22px;
}
.help-box h4 {
	color: #ffffff;
	margin-bottom: 20px;
}
.help-box p {
	color: #b0a19e;
	margin-bottom: 25px;
}
.help-box .orange-btn {
	width: 100%;
	padding: 7px 34px;
	letter-spacing: 1px;
}
.pdf-down {
	width: 100%;
	padding: 10px 10px 10px 60px;
}
.pdf-down {
	position: relative;
}
.pdf-down i {
	position: absolute;
	background-color: #eeb45c !important;
	width: 52px;
	height: 100%;
	vertical-align: middle;
	left: 0;
	top: 0;
	line-height: 52px;
}
.inner-info-section {
	margin: 20px 0 0 0;
	padding-top: 14px;
}
.inner-info-section h5 {
	margin: 0 0 15px;
	padding: 0 0 0 28px;
}
.side-menu-block {
	margin: 0 0 40px 0;
}
.side-menu-block  li {
	padding: 0 0 0 28px;
	border-bottom: 1px solid #ececec;
}
.side-menu-block li a {
	font-size: 14px;
	line-height: 1;
	display: block;
	position: relative;
	-webkit-transition: all 0.2s ease-out 0s;
	-moz-transition: all 0.2s ease-out 0s;
	-ms-transition: all 0.2s ease-out 0s;
	-o-transition: all 0.2s ease-out 0s;
	transition: all 0.2s ease-out 0s;
	padding: 19px 0 17px;
}
.side-menu-block li a i {
	position: absolute;
	right: 10px;
}
.side-menu-block li a:hover {
	padding: 19px 0 17px 20px;
}
.popular-post li a, .popular-post li a:hover {
	padding: 0;
}
.side-menu-block li a:hover i {
	right: inherit;
	left: 0;
}
.side-menu-block li a:hover::before, .side-menu-block li:hover .posts:before {
	background-color: #ecac4a;
	width: 3px;
	height: 32px;
	content: "";
	position: absolute;
	left: -29px;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	z-index: 9;
}
.popular-post li a:hover:before {
	display: none;
}
.side-menu-block li:hover .posts:before {
	height: 49px;
}
.contact-info {
	padding: 38px 0 0;
}
.contact-info h5 {
	margin: 0 0 29px;
}
.contact-info address {
	color: #81716b;
	font-size: 14px;
	line-height: 22px;
	padding: 0 0 0 31px;
}
.contact-info address a {
	color: #81716b;
}
.contact-info address a:hover, .contact-info-footer address a:hover {
	color: #ecac4a !important;
}
.border-line {
	background-color: #ececec;
	bottom: 0;
	height: 71.5%;
	position: absolute;
	right: 278px;
	width: 1px;
}
/*
 4.) All Vehicles page
 ----------------------------------------*/
.all-vehcles-filter {
	background: #5e382d;
}
.all-vehcles-filter .filter {
	margin-bottom: 0;
	padding: 10px;
}
.banner-margin-zero {
	margin-bottom: 0;
}
.main-vehicles-wrap {
	padding-top: 40px;
}
.filter-car-aside {
	background: #633e34;
	border-bottom: 3px solid #ecac4a;
}
.filter-car-selection {
	padding: 25px 29px 16px;
}
.filter-car-aside select {
	width: 100%;
	margin-bottom: 10px;
	font-size: 14px;
	line-height: 1.3;
}
.filter-car-aside h4 {
	font-size: 21px;
	color: #fff;
	padding-bottom: 26px;
}
.price-per-day h6 {
	font-size: 14px;
	color: #fff;
	font-weight: 700;
	padding-bottom: 22px;
	margin-left: -11px;
}
.price-per-day {
	padding: 25px 30px 13px 39px;
	background: url(../images/rangeslider-bg.jpg) left top no-repeat;
	-webkit-background-size: cover;
	background-size: cover;
	position: relative;
}
.ui-slider {
	background: url(../images/triangle-transparent.png) 0 0 repeat-x;
	border: none;
	height: 3px;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
}
.amout-values {
	margin-left: -11px;
	margin-top: 11px;
}
.amout-values input {
	background: none;
	width: 50%;
	padding: 0;
	height: 25px;
	font-size: 12px;
	color: #3f2c25;
	font-family: "Montserrat", sans-serif;
	font-weight: 700;
}
#amount2 {
	text-align: right;
}
.ui-slider-range {
	background: #644035;
	height: 100%;
}
.ui-slider .ui-slider-handle {
	height: 13px;
	width: 13px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	background: #644035;
	border: 2px solid #fff;
}
.vehicles-type {
	padding-top: 36px;
	margin-bottom: 8px;
}
.vehicles-type h5 {
	padding-left: 28px;
	margin-bottom: 14px;
}
.vehicle-type-list li {
	border-bottom: 1px solid #ececec;
	padding: 13px 0px 13px 28px;
}
.vehicle-type-list li label, .vehicle-type-list li label small {
	font-size: 14px;
	color: #81716b;
}
.vehicle-type-list li label small {
	float: right;
}
.vehicle-type-list li label {
	display: block;
	overflow: hidden;
}
.check-in {
	width: 18px;
	height: 18px;
	background: #fcfcfc;
	border: 1px solid #dcdcdc;
	display: inline-block;
	position: relative;
	top: 4px;
	margin-right: 15px;
}
.vehicle-type-list li label  input[type="checkbox"]:checked  + .check-in {
	background: url(../images/grey-check.png) center center no-repeat;
}
.vehicle-type-list li label  input[type="checkbox"] {
	position: absolute;
	visibility: hidden;
	opacity: 0;
	width: 0;
	height: 0;
}
.all-vehicles-contact {
	margin: 0;
	padding: 0;
}
.main-features {
	width: 330px;
	height: 260px;
	position: absolute;
}
.protect-block {
	background: #ffffff none repeat scroll 0 0;
	box-shadow: 0 4px 4px rgba(0, 0, 0, 0.6);
	padding: 37px 22px 35px 32px;
	position: absolute;
	top: 0;
	width: 100%;
	opacity: 0;
	z-index: -1;
}
.protect-block::before {
	border-left: 16px solid transparent;
	border-right: 16px solid transparent;
	border-top: 16px solid #ffffff;
	bottom: -16px;
	content: "";
	height: 0;
	left: 0;
	margin: 0 auto;
	position: absolute;
	right: 0;
	width: 0;
}
.circle-section:hover .protect-block {
	opacity: 1;
	z-index: 999;
}
.circle-icon {
	-webkit-transition: all 0.2s ease 0s;
	-moz-transition: all 0.2s ease 0s;
	-ms-transition: all 0.2s ease 0s;
	-o-transition: all 0.2s ease 0s;
	transition: all 0.2s ease 0s;
	position: absolute;
	width: 37px;
	height: 37px;
	left: 0;
	right: 0;
	margin: auto;
	bottom: 0;
	cursor: pointer;

}
.circle-icon small {
	width: 20px;
	height: 20px;
	background-color: #ecac4a;
	display: block;
	border: 3px solid #ffffff;
	border-radius: 50%;
	left: 0;
	right: 0;
	margin: auto;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	top: 50%;
	position: absolute;
}
.circle-icon:hover small {
	width: 16px;
	height: 16px;
	border: 3px solid #ffffff;
	left: 0;
	right: 0;
	margin: auto;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	top: 50%;
	position: absolute;
}
.circle-icon:hover:before {
	background: url('../images/dot.png') no-repeat;
	-webkit-background-size: cover;
	background-size: cover;
	content: "";
	width: 38px;
	height: 38px;
	position: absolute;
	left: 0;
	top: 0;
}
.set-position1 {
	left: -1%;
	top: 76px;
}
.set-position2 {
	left: 22%;
	top: -29px;
}
.set-position3 {
	left: 49%;
	top: 10px;
}
.set-position4 {
	left: 79%;
	top: 70px;
}
/*
 5.) Service Page
 ----------------------------------------*/
.service-office-img {
	margin: 0 0 28px;
}
.insurance-block {
	margin: 0 0 52px;
}
.chart-wrapper {
	margin: 0 0 30px 0;
}
.circle-chart {
	padding: 15px 0 0 15px;
}
.circle-devide-sec {
	padding: 74px 0 30px 33px;
}
.circle-devide-sec > li {
	margin: 0 0 8px;
}
.circle-devide-sec li a {
	color: #81716b;
	font-size: 14px;
	font-weight: 900;
	position: relative;
}
.circle-devide-sec li a:before {
	width: 24px;
	height: 24px;
	content: "";
	position: absolute;
	left: -35px;
	top: -2px;
	display: inline-block;
	border-radius: 50%;
}
.circle-devide-sec li a.circle-first:before {
	background-color: #ecac4a;
}
.circle-devide-sec li a.circle-second:before {
	background-color: #ec834a;
}
.circle-devide-sec li a.circle-third:before {
	background-color: #5e382d;
}
.cust-choice-block {
	margin: 0 0 35px;
}
.feature-list {
	margin: 0 0 40px;
}
.feature-list p {
	margin: 0 0 21px;
}
.feature-list-item li {
	color: #81716b;
	font-size: 14px;
	line-height: 28px;
	position: relative;
	padding-left: 30px;
}
.feature-list-item li:before {
	width: 6px;
	height: 6px;
	border-radius: 50%;
	background-color: #ecac4a;
	position: absolute;
	content: "";
	left: 12px;
	top: 12px;
	display: block;
}
.more-info-section {
	margin-bottom: 42px;
}
/*accordian start*/
.panel-group .panel {
	border-radius: inherit;
}
.panel {
	background-color: #fefefe;
}
.panel-default {
	border: 0;
}
.panel-title {
	background: #ecac4a none repeat scroll 0 0;
	color: #ffffff;
	display: block;
	font-family: "Open Sans", sans-serif;
	font-weight: 700;
	text-align: left;
	text-transform: uppercase;
	font-size: 14px;
}
.panel-default > .panel-heading {
	background-color: #ecac4a;
	border-color: inherit;
	color: #ffffff;
	width: 100%;
	padding: 0;
}
.panel-collapse {
	border-bottom: 1px solid #ececec;
	border-left: 1px solid #ececec;
	border-right: 1px solid #ececec;
}
.panel-body {
	padding: 34px 30px;
}
.panel-group .panel + .panel {
	margin-top: 3px;
}
/*accordian end*/
.more-info-section .orange-btn a {
	padding: 0;
	text-align: left;
}
.more-info-section h5 {
	margin: 0 0 27px 0;
}
.more-info-section .orange-btn i {
	margin-right: 20px;
	padding: 17px;
	background-color: #eeb45c !important;
	font-size: 18px;
}
a[aria-expanded="true"] .fa.fa-plus-circle {
	display: none;
}
a[aria-expanded="false"] .fa.fa-plus-circle {
	display: block;
}
a[aria-expanded="false"] .fa.fa-minus-circle {
	display: none;
}
.toggle-sign {
	display: inline-block;
}
.doc-detail ul li {
	border: 1px solid #ececec;
	background-color: #fefefe;
	margin: 0 0 25px 0;
}
.doc-info {
	position: relative;
	display: block;
	padding: 23px 10px 15px 70px;
}
.doc-info span {
	color: #cfc7c4;
	font-size: 13px;
	line-height: 1;
}
.doc-info span strong {
	display: block;
	color: #81716b;
	font-size: 14px;
	font-weight: 700;
	text-transform: uppercase;
}
.doc-info small {
	position: absolute;
	font-size: 36px;
	color: #81716b;
}

.doc-info small.left-pos i {
	color: #81716b;
}
.doc-info small.right-pos i {
	color: #ebe9e8;
}
.left-pos {
	left: 21px;
	top: 6px;
}
.right-pos {
	right: 16px;
	top: 8px;
}
.download-files .orange-btn {
	background-color: #5e382d;
	min-width: inherit;
	padding: 7px 30px;
	width: 100%;
}
.download-files {
	padding: 10px 0 0 30px;
}
.download-files li {
	margin-bottom: 9px;
}
/*
 6.) Blog
 ----------------------------------------*/
.blog-post .blog-date-comment {
	padding-bottom: 29px;
	border-bottom: 1px solid #ebebeb;
}
.blog-post {
	background: url("../images/line-bg.png") repeat-x scroll bottom center;
	min-height: 333px;
}
.view-services img {
	width: 100%;
}
.blog-post .orange-btn {
	margin-top: 37px;
	min-height: 40px;
	padding: 6px 30px;
}
.blog-icon {
	height: 41px;
	width: 41px;
	border: 1px solid #ececec;
	display: block;
	position: absolute;
	right: 0;
	top: 32px;
}
.blog-icon i {
	position: absolute;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	left: 0;
	right: 0;
	width: 15px;
	margin: 0 auto;
}
.btn-bar {
	position: relative;
}
.margin-top {
	margin-top: 30px;
}
.filter-vehicles-btn {
	padding: 30px;
}
.filter-vehicles-btn .orange-btn {
	width: 100%;
	padding: 6px 5px;
}
.blog .help-box {
	background: url(../images/side-bg.jpg) left top;
	position: relative;
	padding-right: 26px;
}
.side-banner {
	position: absolute;
	right: 0;
	bottom: 31px;
}
.blog .help-box p {
	margin-bottom: 113px;
}
.blog .help-box .orange-btn {
	position: relative;
	z-index: 9;
}
.blog .side-menu-block li a:hover i {
	display: block;
}
.blog .side-menu-block li a i {
	display: none;
	top: 21px;
}
.category-text {
	position: absolute;
	right: 0;
}
.blog  .border-line {
	height: 76.5%;
}
.posts figure {
	float: left;
	width: 34%;
	padding-right: 20px;
}
.posts .blog-date-comment {
	float: right;
	width: 66%;
	margin-top: 0;
}
.posts .blog-date-comment strong {
	font-size: 14px;
	font-weight: 700;
	display: block;
	line-height: 1.3;
	color: #81716b;
}
.posts {
	padding: 20px 0;
	position: relative;
}
.posts .blog-date {
	font-size: 13px;
	display: block;
	line-height: 1.4;
}
.cloud-list li {
	float: left;
	width: 44%;
	border-bottom: none;
	margin: 0 10px 10px 0;
}
.cloud-list-wrap li a:hover {
	padding: 19px 0 17px;
}
.cloud-list-wrap li a:hover:before {
	display: none;
}
.cloud-list-wrap .orange-btn {
	background: #5e382d;
	color: #fff;
	min-width: 114px;
}
.cloud-list-wrap .orange-btn:hover {
	background: #ecac4a;
	color: #fff;
}
.blog .contact-info {
	padding: 9px 0 0;
}
.blog .contact-info address {
	padding: 0 0 0 24px;
}
.blog .pagination {
	margin: 58px 0 20px;
}
.audio-wrap {
	position: absolute;
	bottom: 0;
	width: 100%;
}
.blog .view-services {
	position: relative;
}
.play-btn {
	width: 72px;
	height: 54px;
	background: #5e382d;
	display: block;
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	margin: 0 auto;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
}
.play-btn i {
	font-size: 24px;
	color: #fff;
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	margin: 0 auto;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	width: 25px;
}
.video iframe {
	border: 0 none;
	bottom: 0;
	height: 100%;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
	z-index: 9;
}
/*
 7.) Vehicles page
 ----------------------------------------*/
.vehicles-head {
	padding: 50px 0px 25px;
	background: url(../images/grey-white-pattern.jpg) 0 100% repeat-x;
	margin-bottom: 28px;
}
.vehicles-head h5 {
	font-size: 24px;
	color: #3f2c25;
}
.vehicles-head h5 {
	display: inline-block;
}
.get-back-home {
	font-size: 14px;
	color: #ecac4a;
	text-decoration: underline;
	float: right;
}
.get-back-home:hover {
	text-transform: none;
}
.get-back-home .fa {
	padding-left: 8px;
	font-size: 21px;
}
.car-details-wrap .car-more-info li {
	width: 20% !important;
}
.car-details .start-price-rent {
	font-size: 24px;
	color: #81716b;
	display: inline-block;
}
.car-details .start-price-rent small {
	font-size: 24px;
}
.car-view-slider .car-details {
	padding: 14px 25px 14px 25px;
	border-bottom: none;
}
.car-view-slider .car-rating {
	margin: 13px 0px 0px;
}
.car-details-wrap .car-more-info li:last-child {
	border-top: 1px solid #ecac4a;
}
.vehicles-carousal-thumb {
	position: absolute;
	top: 11px;
	right: 20px;
}
.vehicles-carousal-thumb li {
	width: 105px;
	height: 105px;
	overflow: hidden;
	margin-bottom: 10px;
	border: 2px solid transparent;
}
.car-parts-slider-outer {
	position: relative;
}
.vehicles-carousal-thumb li.active {
	border: 2px solid #ecac4a;
}
.social-media-list {
	float: right;
}
.social-media-list ul {
	display: inline-block;
}
.social-media-list ul li {
	width: 42px;
	height: 42px;
	float: left;
}
.social-media-list ul li a {
	display: inline-block;
	width: 100%;
	height: 100%;
	text-align: center;
	padding-top: 8px;
}
.social-media-list ul li a i {
	font-size: 18px;
	color: #fff;
}
.fb-link {
	background: #3d57a2;
}
.vk-link {
	background: #4079b5;
}
.linkdin-link {
	background: #268bbf;
}
.twitter-link {
	background: #2ba3e1;
}
.pinterest-link {
	background: #d01d15;
}
.googleplus-link {
	background: #ea4335;
}
.social-media-list h4, .tag-list h4 {
	color: #3f2c25;
	font-size: 21px;
	display: inline-block;
	padding: 10px 0px;
	vertical-align: top;
	margin-right: 15px;
}
.tab-list-feature li a.orange-btn {
	background: #5e382d;
	min-width: 115px;
}
.tab-list-feature {
	float: left;
}
.feature-description-wrap {
	padding: 10px;
	background: url(../images/line--pattern-bg.jpg) 0 0 repeat;
}
.tab-list-feature li a {
	font-size: 14px;
	color: #fff;
	text-transform: uppercase;
	font-weight: 700;
	padding: 11px 25px;
	border: none;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	margin: 0;
}
.tab-list-feature li a small {
	font-size: 14px;
	color: #ecac4a;
	line-height: 1;
}
.tab-list-feature li {
	background: #5e382d;
	margin-right: 10px;
	margin-bottom: 0;
}
.tab-list-feature ul {
	border-bottom: 0;
}
.tab-list-feature .nav-tabs > li.active > a {
	border: 0;
	background-color: #ffffff !important;
	color: #3f2c25;
}
.tab-list-feature .nav-tabs > li > a:hover, .tab-list-feature .nav-tabs > li > a:focus {
	background-color: #ffffff;
	color: #3f2c25;
}
.para-related-description {
	padding-top: 32px;
}
.para-related-description p {
	padding-bottom: 28px;
}
.common-list-vehicles p {
	padding-top: 12px;
	min-height: 122px;
}
.list-feature-bullet {
	padding-left: 22px;
	margin-top: 26px;
	margin-left: 18px;
}
.list-feature-bullet li {
	list-style-type: disc;
	color: #ecac4a;
	padding-bottom: 3px;
}
.list-feature-bullet li span {
	font-size: 14px;
	color: #81716b;
}
.note {
	font-size: 14px;
	color: #81716b;
}
.note .fa {
	color: #ecac4a;
	font-size: 21px;
	position: relative;
	top: 3px;
	margin-right: 14px;
}
.some-short-note {
	border-left: 3px solid #ecac4a;
	background: url(../images/line--pattern-bg.jpg) 0 0 repeat;
	padding: 10px 12px 14px;
	margin-top: 22px;
}
.payment-vehicles-wrap {
	background: url(../images/all-payements.jpg) 0 0 no-repeat;
	-webkit-background-size: cover;
	background-size: cover;
	margin-top: 31px;
	padding: 30px 25px;
	position: relative;
}
.payment-wrap, .range-wrap {
	position: relative;
	z-index: 9;
}
.payment-vehicles-wrap  h4 {
	text-align: center;
	padding-right: 15px;
	padding-bottom: 8px;
}
.payment-vehicles-wrap .payment-list li {
	margin: 0px 15px 18px;
}
.percent, .safety {
	font-size: 84px;
	color: #3f2c25;
	display: block;
	text-align: center;
	font-family: "Montserrat", sans-serif;
}
.safety {
	font-size: 16px;
}
.safety-slider {
	border: 1px solid #ececec;
	margin-top: 20px;
	padding: 28px 18px 20px;
}
.safety-slider .owl-buttons .owl-prev, .safety-slider .owl-buttons .owl-next {
	padding: 12px 25px 12px 23px;
}
.safety-slider .owl-buttons .owl-prev {
	margin-right: 4px;
}
.safety-slider .owl-buttons .owl-next {
	margin-left: 4px;
}
.safety-slider .owl-buttons {
	margin-top: 35px;
}
.h4-24 {
	font-size: 24px;
}
.vehicles-description {
	padding-bottom: 46px;
}
.populer-head {
	padding-bottom: 26px;
	background: url(../images/track-pattern.png) 0 100% repeat-x;
	margin-bottom: 40px;
}
.populer-bdr {
	background: url(../images/track-pattern.png) 0 100% repeat-x;
	padding-bottom: 10px;
	margin-top: 10px;
}
/*
 8.) Blog-Page
 ----------------------------------------*/
.blog-page .blog-date-comment {
	border-bottom: none;
}
.blog-page .blog-icon {
	top: -72px;
}
.blog-page .we-do-right-info {
	float: right;
	width: 64%;
}
.blog-page .we-do-blockquote {
	float: left;
	margin: 0 30px 22px 0;
}
.blog-page .we-do-right-wrap {
	width: 100%;
	padding: 0;
}
.blog-page .we_do-description .blockquote p {
	color: #3f2c25;
}
.blog-page .we_do-description p {
	color: #81716b;
}
.car-img li {
	float: left;
	width: 33.33%;
}
.tag-list ul {
	display: inline-block;
}
.no-margin {
	margin: 0;
}
.blog-page .view-services {
	margin-bottom: 30px;
}
.blog-page .border-line {
	bottom: auto;
	height: 29.5%;
	top: 10%;
}
.blog-page .margin-top {
	margin-top: 20px;
}
.blog-page .we_do-description {
	padding-bottom: 0;
}
.accordion-feature-wrap {
	margin-top: 36px;
}
.car-img {
	margin: 34px 0 35px;
}
.car-img img {
	display: block;
	width: 100%;
}
.blog-page .feature-description-wrap {
	background: url("../images/line-bg.png") repeat-x center top;
	padding: 24px 0;
}
.blog-page .read-blog-wrapper {
	background: url("../images/line-bg.png") repeat-x center top;
}
.blog-page .blog-read-wrap .owl-controls {
	top: -131px;
}
.blog-page .blog-read-wrap .owl-controls .owl-prev {
	left: -50px;
	position: absolute;
	font-size: 0;
	height: 41px;
	width: 52px;
}
.blog-page .blog-read-wrap .owl-controls .owl-next {
	right: -50px;
	position: absolute;
	font-size: 0;
	height: 41px;
	width: 52px;
}
.blog-page .blog-read-wrap .owl-controls .owl-buttons .owl-next:after, .blog-page .blog-read-wrap .owl-controls .owl-buttons .owl-prev:before {
	font-size: 14px;
	position: absolute;
	right: 0;
	top: 50%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	width: 20px;
	margin: 0 auto;
	left: 0;
}
.blog-page .blog-date-comment {
	border-bottom: none;
}
.blog-page .blog-icon {
	top: -61px;
}
.comment-post-wrap {
	padding: 31px 20px;
	border: 1px solid #ececec;
}
.comment-img {
	height: 170px;
	width: 170px;
	border-radius: 50%;
	margin-right: 32px;
	float: left;
}
.comment-cont {
	float: left;
	width: 74%;
	margin-top: 20px;
}
.comment-cont span {
	font-size: 14px;
	font-style: italic;
	color: #81716b;
	margin-bottom: 20px;
	display: block;
}
.comment-cont p {
	font-size: 16px;
	color: #81716b;
}
.comment-head {
	float: left;
}
.comment-icons {
	float: right;
	width: 27%;
}
.comment-icons li {
	float: left;
	margin-right: 18px;
}
.comment-icons li a {
	background: transparent;
}
.comment-icons li a i {
	color: rgba(63,44,37,0.4);
	font-size: 13px;
}
.blog-read-wrap {
	background: none;
}
.media-body h5 {
	display: inline-block;
}
.media-body span {
	display: inline-block;
	margin-left: 8px;
	font-style: italic;
	font-size: 14px;
	color: #81716b;
}
.media {
	padding: 34px 0 30px;
	border-bottom: 1px solid #ececec;
	margin: 0;
	position: relative;
}
.media:last-child {
	border-bottom: none;
}
.media .media {
	border-bottom: none;
	position: relative;
	padding-bottom: 0;
	padding-top: 46px;
}
.overflow {
	overflow: visible;
}
.media .media:after {
	position: absolute;
	content: '';
	left: -113px;
	width: 850px;
	background: #ececec;
	top: 23px;
	height: 1px;
}
.fa-mail-reply {
	color: #3f2c25;
	position: absolute;
	top: 38px;
	right: 0;
}
.media-wrap {
	padding: 35px 0 0;
}
.media-wrap h2 {
	padding-bottom: 25px;
	background: url("../images/line-bg.png") repeat-x center bottom;
	margin-bottom: 18px;
}
.media-wrap h5 {
	font-size: 14px;
}
.media-wrap figure {
	margin-right: 22px;
}
.fa-arrow-right {
	height: 48px;
	width: 48px;
	border-radius: 50%;
	border: 1px solid rgba(63,44,37,0.2);
	font-size: 14px;
	color: rgba(63,44,37,0.2);
	bottom: 76px;
	left: 53px;
	position: absolute;
	padding-top: 16px;
	text-align: center;
}
.blog-page .textarea-wrap {
	margin-top: 23px;
}
.blog-page .textarea-wrap textarea {
	color: #5e382d;
}
.blog-page .contact-us {
	background: none;
}
.blog-page .contact-us input, .blog-page .contact-us textarea {
	background: #f7f5f4;
}
.blog-page .contact-us textarea {
	padding-left: 17px;
}
.blog-page .input-text-wrap i, .blog-page .textarea-wrap i {
	color: #5e382d;
}
.blog-page .contact-us .orange-btn {
	margin-bottom: 23px;
}
.blog-page .read-blog-listing {
	padding: 0 50px;
}
.blog-page .media-left figure img {
	max-width: none;
}
.blog-page .tab-list-feature .nav-tabs > li > a:hover, .blog-page .tab-list-feature .nav-tabs > li > a:focus {
	color: #fff;
}
.media-wrap strong {
	font-weight: 700;
}
.blog-page .my-video-dimensions{
	width:100% !important;
}
/*
 9.) Conatct-us-Page
 ----------------------------------------*/
.about-few-words {
	padding: 48px 0px 100px;
}
.about-us-quote figure {
	width: 70px;
	height: 70px;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
	overflow: hidden;
	float: left;
}
.quote-wrap {
	float: right;
	width: 80%;
}
.about-few-words .view-title-style {
	margin-bottom: 35px;
}
.about-contact-para p {
	padding-bottom: 25px;
}
.quote-wrap p {
	font-style: italic;
}
.about-us-quote {
	margin-bottom: 32px;
	margin-top: 8px;
}
.contact-us-map {
	height: 778px;
	width: 100%;
	position: relative;
	border-bottom: 1px solid #f1f1f1;
    border-top: 1px solid #f1f1f1;
}
.contact-page-form {
	position: absolute;
	top: -77px;
	left: 0;
	width: 100%;
	padding: 0;
	background: none;
}
.map-form-inner {
	background: url(../images/map-form-bg.jpg) 0 0 no-repeat;
	border-bottom: 3px solid #ecac4a;
	padding: 25px 30px 28px;
	-webkit-background-size: cover;
	background-size: cover;
}
.map-form-inner .contact-us {
	background: url('../images/line-bg2.png') repeat-x left top;
	padding: 27px 0px 0px;
	margin: 0;
}
.contact-page-form  h2 {
	margin-bottom: 19px;
}
.contact-page-form  textarea {
	height: 165px;
	background: rgba(255,255,255,0.05);
}
.contact-page-form .input-text-wrap input[type="text"], .contact-page-form .input-text-wrap input[type="password"], .contact-page-form .input-text-wrap input[type="email"] {
	height: 42px;
	line-height: 1.5;
	background: rgba(255,255,255,0.05);
}
.contact-page-form  .input-text-wrap i {
	top: 26px;
}
.contact-page-form p {
	color: #b0a19e;
}
.contact-page-form textarea::-moz-placeholder {
	color: #afa09b;
	font-size: 14px;
}
.contact-page-form textarea::-webkit-input-placeholder {
	color: #afa09b;
	font-size: 14px;
}
.contact-page-form textarea::-ms-input-placeholder {
	color: #afa09b;
	font-size: 14px;
}
#map-view1, .mapouter {
	height: 100%;
	width: 100%;
}
/*
 10.) 404 page
 ----------------------------------------*/
.not-found-page {
	background: url(../images/404-bg.jpg) 50% 100% no-repeat;
	-webkit-background-size: cover;
	background-size: cover;
	width: 100%;
	height: 100vh;
}
.not-found-page h1 {
	font-size: 460px;
	color: #ecac4a;
	text-align: center;
	line-height: 80vh;
	font-weight: 700;
}
/*
 11.) Coming soon Page
 ----------------------------------------*/
.coming-soon-wrap {
	background: url('../images/coming-soon.jpg') no-repeat;
	-webkit-background-size: cover;
	background-size: cover;
	width: 100%;
	height: 100%;
	border-bottom: 3px solid #ecac4a;
	min-height: 1200px;
}
.coming-soon-cont {
	padding: 195px 0 0 0;
}
.coming-soon-cont h2 {
	font-size: 32px;
	color: #fff;
	text-transform: uppercase;
	text-align: center;
}
.coming-soon-cont h2 strong {
	font-weight: 700;
}
.countdown-amount, .dot-text {
	font-size: 164px;
	line-height: 1.2;
	text-align: center;
	color: #fff;
	font-family: "Montserrat", sans-serif;
	font-weight: 300;
}
.dot-text:last-child {
	display: none;
}
.dot-text {
	position: relative;
	top: -80px;
}
.countdown-section {
	display: inline-block;
	width: 200px;
	text-align: center;
}
.countdown-period {
	font-size: 14px;
	color: #fff;
	font-family: 'Montserrat', sans-serif;
	font-weight: 700;
	text-transform: uppercase;
	display: block;
	text-align: center;
	padding: 17px;
}
.timer-section {
	background: url(../images/triangle-divider.png) 0 0 repeat-x;
	margin-top: 45px;
	padding: 30px 0px 58px;
	position: relative;
}
.call-us-wrap {
	background: url(../images/triangle-divider.png) 0 0 repeat-x;
	padding: 59px 0px;
	text-align: center;
}
.needed-help {
	font-size: 32px;
	color: #fff;
	font-family: "Montserrat", sans-serif;
	font-weight: 300;
	display: block;
	text-transform: uppercase;
}
.needed-help a {
	font-weight: 700;
	color: #fff;
}
.contact-number {
	font-size: 32px;
	color: #ecac4a;
	font-family: "Montserrat", sans-serif;
	font-weight: 700;
	padding-top: 20px;
	display: inline-block;
}

#rev_slider_202_1, .slotholder {
	transform: none !important;
}
.error {
	 border: 1px solid #ff0000 !important;
}
/*
 switcher header
 ----------------------------------------*/
#wrapper.boxed, .boxed .header {
	margin: 0 auto;
	max-width: 1170px;
	width: 100%;
}
.boxed .header .navigation > li {
	padding-bottom: 17px;
}
.boxed .header nav .header-search {
	padding-bottom: 0px;
}
.boxed .we-do-right-wrap {
	width: 684px;
}
/*
 sticky header style
 ----------------------------------------*/
body #header {
	-webkit-transition: all 0.4s ease-in-out;
	-moz-transition: all 0.4s ease-in-out;
	-ms-transition: all 0.4s ease-in-out;
	-o-transition: all 0.4s ease-in-out;
	transition: all 0.4s ease-in-out;
}

body #header.fixed, body .home-agency #header.fixed {
	left: 0;
	margin: 0 auto;
	position: fixed !important;
	right: 0;
	top: 0;
	width: 100%;
	z-index: 99999;
}
body #header.fixed {
	width: 100%;
}
body #header.intelligent {
	left: 0;
	position: fixed !important;
	right: 0;
	top: 0;
	width: 100%;
	z-index: 99;
}
body #header.up {
	opacity: 0;
	top: -162px;
	visibility: hidden;
}
/*map style */
.map-wrapper .filter-cars {
	z-index: 99999 !important;
	width: 100%;
	margin-bottom: 0;
}
.map-wrapper .gm-style-iw > div {
	width: 100% !important;
	max-width: none !important;
}
.gm-style-pbc {
	z-index: 9999999 !important;
}
#location1 #Locate_1 {
	background: #ffffff none repeat scroll 0 0;
	left: 0;
	opacity: 0;
	position: absolute;
	top: 0;
	width: 348px !important;
	z-index: 99999;
}
#location1 #Locate_1 img {
	width: 100%;
}
.gm-style-iw {
	width: 270px !important;
	top: 15px !important;
	left: 0px !important;
	background-color: #fff;
	box-shadow: 0 1px 6px rgba(178, 178, 178, 0);
	border: 1px solid rgba(72, 181, 233, 0);
	border-radius: 0x;
}
.gm-style-iw + div {
	right: -16px !important;
	top: 15px !important;
}
#iw-container {
	margin-bottom: 10px;
}
#iw-container .iw-title {
	font-family: 'Open Sans Condensed', sans-serif;
	font-size: 22px;
	font-weight: 400;
	padding: 10px;
	background-color: transparent;
	color: white;
	margin: 0;
	border-radius: 0;
}
#iw-container .iw-content {
	font-size: 13px;
	line-height: 18px;
	font-weight: 400;
	margin-right: 1px;
	padding: 15px 5px 20px 15px;
	max-height: 140px;
	overflow-y: auto;
	overflow-x: hidden;
}
.iw-content img {
	float: right;
	margin: 0 5px 5px 10px;
}
.iw-subTitle {
	font-size: 16px;
	font-weight: 700;
	padding: 5px 0;
}
.iw-bottom-gradient {
	position: absolute;
	width: 326px;
	height: 25px;
	bottom: 10px;
	right: 18px;
	background: none;
}
.video-js .vjs-big-play-button {
	top: 50%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
	left: 0;
	right: 0;
	margin: 0 auto;
}
.video-js .vjs-control-bar {
	background: #5e382d;
}
.video-js .vjs-play-progress, .video-js .vjs-volume-level {
	background: #ecac4a;
}
.video-js .vjs-slider {
	background: url(../images/track-img.png) repeat;
	background-color: transparent;
}
.vjs-play-progress .vjs-slider-bar {
	background: red;
}
.video-js .vjs-play-progress:before, .vjs-slider-horizontal .vjs-volume-level:before {
	color: #ecac4a;
}
.vjs-control-bar {
	border-bottom: 5px solid #ecac4a;
	box-sizing: content-box;
}
.location-group {
	position: absolute;
	visibility: hidden;
	z-index: -10;
	top: 0;
	left: 0;
}
.fancybox-overlay{
	background: rgba(0,0,0,0.6);
}
.zoom img{
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	-o-transform: scale(1);
	transform: scale(1);
	-webkit-transition: all 0.2s ease-in-out 0s;
	-moz-transition: all 0.2s ease-in-out 0s;
	-ms-transition: all 0.2s ease-in-out 0s;
	-o-transition: all 0.2s ease-in-out 0s;
	transition: all 0.2s ease-in-out 0s;
}
.zoom figure{
	overflow: hidden;
}
.zoom:hover img{
	-webkit-transform: scale(1.2);
	-moz-transform: scale(1.2);
	-ms-transform: scale(1.2);
	-o-transform: scale(1.2);
	transform: scale(1.2);
	-webkit-transition: all 0.2s ease-in-out 0s;
	-moz-transition: all 0.2s ease-in-out 0s;
	-ms-transition: all 0.2s ease-in-out 0s;
	-o-transition: all 0.2s ease-in-out 0s;
	transition: all 0.2s ease-in-out 0s;
}
.fancybox-nav span {
 visibility: visible !important;
}
.vjs-poster{
	background: none !important;
}

.input-group.date td.day{
  	position:relative;
}
.input-group.date td.day.disabled:hover:before {
    color: red;
    background-color: white;
    top: -35px;
    position: absolute;
    width: 136px;
    left: -44px;
    z-index: 1000;
    text-align: center;
    padding: 2px;
}
.input-group.date td.day.disabled {
  	text-decoration: line-through;
}

.margin-bottom {
	margin-top: unset !important;
	margin-bottom: 20px;
}
.margin-bottom i{
	top: 16px;
}

#rent-bill {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#rent-bill td, #rent-bill th {
  border-right: 1px solid #ddd;
  padding: 8px;
}

#rent-bill tr:nth-child(even){background-color: #f2f2f2;}
#rent-bill tr:nth-child(odd){background-color: #fff;}

#rent-bill tr:hover {background-color: #ddd;}

#rent-bill th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}