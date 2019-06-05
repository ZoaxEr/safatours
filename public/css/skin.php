<?php header("Content-type: text/css; charset: UTF-8"); ?>
/*!
 * Theme v1.0.0 
 * Copyright 2015-2016 theemon.com
 */
@skinColor: <?php $contents = file_get_contents(stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['SERVER_NAME'] . '/styles/primary_color');
            echo $contents; ?>; //Change here your theme Color
@fontFamily: 'Montserrat', sans-serif; //Change here your theme Font family

.transition_effect{
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

h1,h2{
  font-family:@fontFamily;
}

//===============================================
//====================TEXT COLOR=================
.navigation li a:hover,.header-info .contact-det ul li a:hover,.header-info .social-det ul li a i:hover,.reserve-form .form-head .location span a,.reserve-form .form-head .location span i,.reserve-form .form-head .availability h2,.get-bestoffer .fa,.blockquote-sign,.feature-we_do li i,.car-more-info li i,.car-details span small,.car-rating li,.filter a,.filter-car-rating li,.filter-car-more-info li i,.filter-car-details span small,.footer-bottom a,.need-help a,.need-help i,.get-back-home,.list-feature-bullet li,.note .fa,.features-point h5 strong,.feature-block li .fa,h2.second-title,.contact-number,.navigation li.active > a,.not-found-page h1,.social-links li a i:hover,.view-title-style a:hover,.video-js .vjs-play-progress:before,.vjs-slider-horizontal .vjs-volume-level:before,.side-menu-block li a:hover,.posts:hover .blog-date-comment a strong,.tab-list-feature li a small,.blog-icon:hover,.read-more-btn:hover,.doc-info:hover strong,.doc-info:hover small.left-pos i,.doc-info:hover small.right-pos i{
  color:@skinColor; .transition_effect;
}

.our-team-one .social-link li a, .get-back-home:hover{
    color:lighten(@skinColor,5%);
    .transition_effect;
}
.contact-info address a:hover, .contact-info-footer address a:hover{
  color:@skinColor !important;
}

//============================================================
//==========================BACKGROUND COLOR==================

.get-bestoffer .divider-dotted:after,.absolute-header-deal:after,.vehicle-item figure:hover figcaption,.orange-btn a,.owl-buttons .owl-next:hover, .owl-buttons .owl-prev:hover, .button:hover,.filter-widgets a,.orange-btn,.need-help-wrapper:after,.services-pagination li a:hover, .services-pagination li.active a:hover, .services-pagination li.active a,.pdf-down i,.more-info-section .orange-btn i,.feature-list-item li:before,.features-point h5 small,.circle-icon small,.cloud-list-wrap .orange-btn:hover,.side-menu-block li a:hover:before, .side-menu-block li:hover .posts:before,.countdown-period,.filter-car-details .discount,.blog-page .tab-list-feature .nav-tabs > li > a:hover, .blog-page .tab-list-feature .nav-tabs > li > a:focus,.video-js .vjs-play-progress,.video-js .vjs-volume-level,.selectBox-dropdown-menu li a:hover,.reserve-form .find-car{
  background: @skinColor; .transition_effect;
}
.offer-overlay,.blog-read-wrap .item:hover{
   background:fade(@skinColor,85%);
}
.awards-wrapper,.img-overlay{
  background:fade(@skinColor,95%);
}
.pdf-down i,.more-info-section .orange-btn i, {
   background:lighten(@skinColor,10%)!important; 
}
.orange-btn a:hover,.filter-widgets a:hover,.reserve-form .find-car:hover,.orange-btn:hover,.social-media-list ul li a:hover,.offer-btn:hover{
   background:darken(@skinColor,10%)!important; 
}

//========================================================
//==========================BORDER COLOR==================
.reserve-form .form-head .location span a,.reserve-form .reserve-form-wrap,.blockquote-warning,.vehicle-item figure:hover,#footer,.executive:hover,.vehicles-carousal-thumb li.active,.some-short-note,.blog .help-box,.coming-soon-wrap,.help-box,.we-do-right,.your-dreams-wrapper,.map-form-inner{
  border-color:@skinColor; .transition_effect;
}
.home-agency .logo{
  border-color:lighten(@skinColor,12%); .transition_effect;
}
.filter-car-details .discount::before{
  border-top-color:@skinColor;
  border-right-color:@skinColor;
  border-bottom-color:@skinColor;
}
//=====================================================
//==========================SVG COLOR==================
.benefit-perk .svg path{
    fill:@skinColor !important;
   }
