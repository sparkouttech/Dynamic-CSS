<?php 
session_start();
error_reporting(0);
include('../../../include/host.config.php');
include('../../../include/mysql.lib.php');
include('../../../functions.php');
$obj=new connect;
header("Content-type: text/css");
$panel_color=$obj->getRow('tbl_meta','meta',"where `key`='panel_color'");
if($panel_color=='')
{
  $panel_color='#189279';
}
$btn_hover_color=$obj->getRow('tbl_meta','meta',"where `key`='btn_hover_color'");
if($btn_hover_color=='')
{
  $btn_hover_color='#0f5d4d';
}
$btn_hover_colorl=$obj->getRow('tbl_meta','meta',"where `key`='btn_hover_colorl'");
if($btn_hover_colorl=='')
{
  $btn_hover_colorl='#2adcb7';
}
$body_font_family=$obj->getRow('tbl_meta','meta',"where `key`='body_font_family'");
if($body_font_family=='')
{
  $body_font_family= '"Open Sans", Arial, sans-serif';
}
?>

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
[Master Stylesheet]

Project:    HELSINKI
Version:    1.0 
author:     myii-developer 

[Table of contents]

1. Body
    2. wrap
        3. page-header
            4. leftside-header
            4. rightside-header
        3. page-body
            4. left-sidebar
            4. content
                5. content-header
            4. right-sidebar
            
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
html,
body {
  width: 100%;
  font-size: 13px;
}

body {
  background: #f7f7f7;
  margin: 0;
  color: #404040;
  font-family: <?php echo $body_font_family; ?>;
  line-height: 22px;
  overflow-x: hidden;
  overflow-y: scroll;
}

a {
  color: <?php echo $panel_color; ?>;
}

a:hover,
a:focus {
  color: <?php echo $btn_hover_color; ?>;
}

a:active {
  color: <?php echo $btn_hover_color; ?>;
}

a,
a:hover,
a:active,
a:focus {
  text-decoration: none;
}

/* WRAPPER*/
/*================================================*/
.wrap {
  min-height: 100%;
  width: 100%;
}

/* PAGE HEADER*/
/*================================================*/
.page-header {
  height: 50px;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  padding: 0;
  margin: 0;
  border: none;
}

/* PAGE BODY*/
/*================================================*/
.page-body {
  display: block;
  min-height: 100%;
  width: 100%;
  overflow: hidden;
  padding-top: 50px;
  float: left;
  position: relative;
}

/*CONTENT OF THE PAGE*/
/*================================================*/
.content {
  display: block;
  position: relative;
  vertical-align: top;
  margin-left: 220px;
  padding: 30px;
  background: #ececec;
  min-height: 100vh;
}

.content > .row + .row {
  padding-top: 10px;
}

.content-header {
  border-bottom: none;
  height: 40px;
  padding: 0;
}

/* LEFT SIDEBAR*/
/*================================================*/
.left-sidebar {
  display: block;
  height: 100%;
  float: left;
  position: relative;
  width: 220px;
  z-index: 1030;
}

/* Left-sidebar COLLAPSE*/
/*================================================*/
html.left-sidebar-collapsed .content {
  margin-left: 60px;
}

html.left-sidebar-collapsed .left-sidebar {
  width: 60px;
}

/* RIGHT SIDEBAR*/
/*================================================*/
.right-sidebar {
  display: block;
  height: 100%;
  float: right;
  position: relative;
  width: 240px;
  z-index: 1020;
  position: fixed;
  bottom: 0;
  right: 0;
  padding-bottom: 50px;
  top: 50px;
  margin-right: -240px;
  -webkit-transition-property: margin;
  transition-property: margin;
  -webkit-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
  -webkit-transition-delay: 0;
  transition-delay: 0;
}

.right-sidebar .nano-content {
  padding-bottom: 50px;
}

/* right-sidebar OPENED*/
/*================================================*/
html.right-sidebar-opened .right-sidebar {
  margin-right: 0;
}

/* SCROLL TO TOP*/
/*================================================*/
.scroll-to-top {
  position: fixed;
  bottom: 30px;
  right: 30px;
  width: 40px;
  z-index: 1010;
  height: 40px;
  display: none;
  border-radius: 50%;
  text-align: center;
  background: <?php echo $panel_color; ?>;
  -webkit-box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.53);
          box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.53);
}

.scroll-to-top i {
  color: #ffffff;
  font-size: 20px;
  width: 40px;
  height: 40px;
  padding: 10px;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* STYLE - FIXED*/
/*================================================*/
@media only screen and (min-width: 768px) {
  html.fixed {
    /* Fixed & Left-sidebar collapse */
  }
  html.fixed .page-header {
    position: fixed;
    z-index: 1035;
  }
  html.fixed .content {
    margin-top: 40px;
  }
  html.fixed .content-header {
    position: fixed;
    z-index: 1010;
    top: 50px;
    left: 220px;
    right: 0;
    margin: 0;
    -webkit-transition-property: left;
    transition-property: left;
    -webkit-transition-duration: 0.25s;
    transition-duration: 0.25s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
    -webkit-transition-delay: 0;
    transition-delay: 0;
  }
  html.fixed .left-sidebar {
    position: fixed;
    bottom: 0;
    left: 0;
    padding-bottom: 50px;
    top: 50px;
  }
  html.fixed .left-sidebar .nano-content {
    padding-bottom: 100px;
  }
  html.fixed.left-sidebar-collapsed .content .content-header {
    left: 60px;
  }
  /* 
    Fixed & left-sidebar-scroll
    left-sidebar collapse & left-sidebar-over & left-sidebar-top
    */
  html.fixed.left-sidebar-collapsed.left-sidebar-scroll.left-sidebar-over.left-sidebar-top .left-sidebar .left-sidebar-header {
    position: initial;
  }
  html.fixed.left-sidebar-collapsed.left-sidebar-scroll.left-sidebar-over.left-sidebar-top .left-sidebar #left-nav {
    margin-top: initial;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* STYLE - SCROLL*/
/*================================================*/
@media only screen and (min-width: 768px) {
  html.scroll .content,
  html.content-header-scroll .content {
    margin-top: 0px;
  }
  html.scroll .content-header,
  html.content-header-scroll .content-header {
    position: initial;
    margin: -30px -30px 30px -30px;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* LEFT SIDEBAR TOP & OVER*/
/*================================================*/
@media only screen and (min-width: 768px) {
  /* Left-sidebar OVER*/
  /*================================================*/
  html.left-sidebar-over .content {
    margin-left: 60px;
  }
  html.left-sidebar-over .content .content-header {
    left: 60px;
  }
  /* Left-sidebar TOP*/
  /*================================================*/
  html.left-sidebar-top {
    /* left-sidebar TOP & Left-sidebar collapse */
    /* left-sidebar TOP &  Left-sidebar OVER */
  }
  html.left-sidebar-top .page-header {
    left: 220px;
  }
  html.left-sidebar-top .left-sidebar {
    top: 0px;
  }
  html.left-sidebar-top.left-sidebar-collapsed .page-header {
    left: 60px;
  }
  html.left-sidebar-top.left-sidebar-collapsed .content .content-header {
    left: 60px;
  }
  html.left-sidebar-top.left-sidebar-over .page-header {
    left: 60px;
  }
  html.left-sidebar-top.left-sidebar-over .left-sidebar {
    z-index: 1036;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* MOBIL VERSION*/
/*================================================*/
.mob{ display:none !important; }
.mob_table{ display:none !important; }
.web{ display:block !important; }
.web_table{ display:inline-table !important; }
.install { margin:10px 0px 25px 10px !important;width: 55% !important; }
.install_check { display: inline !important; }
.align_center_web { text-align: center !important; }
.text_right { text-align: right !important; }
.web_bottom50{ margin-bottom: 50px !important; }
.web_bottom15{ margin-bottom: 15px !important; }

@media only screen and (max-width: 767px) {
  .web{ display:none !important; }
  .mob{ display:block !important; }
  .mob_table{ display:inline-table !important; }
  .web_table{ display:none !important; }
  .web_row{ display:none !important; }
  .install { margin:0px 0px 0px 0px !important;width: 100% !important;padding: 5px 0px !important; }
  .install_check { display: block !important; }
  .align_center_web { text-align: left !important; }
  .web_bottom50{ margin-bottom: 0px !important; }
  .web_bottom15{ margin-bottom: 0px !important; }

  .form_top
  {
    margin-top: 40px !important;
  }
  html .page-body {
    min-height: 0;
    padding-top: 0;
  }
  html .page-body .content {
    margin-left: 0px;
    padding: 10px;
  }
  html .page-body .content-header {
    margin: -10px -10px 10px -10px;
  }
  html .page-body .left-sidebar {
    bottom: 0;
    margin-left: -100%;
    min-height: 0;
    min-width: 100%;
    padding-bottom: 50px;
    position: fixed;
    overflow: hidden;
    top: 50px;
    -webkit-transition-property: margin;
    transition-property: margin;
    -webkit-transition-duration: 0.25s;
    transition-duration: 0.25s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
    -webkit-transition-delay: 0;
    transition-delay: 0;
  }
  html.left-sidebar-open .left-sidebar {
    margin-left: 0;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* PAGE HEADER */
/*================================================*/
.page-header {
  /*background: #202020;*/
  /*background: #189279;*/
  background: <?php echo $panel_color; ?>;
  -webkit-transition-property: left;
  transition-property: left;
  -webkit-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}

.page-header .leftside-header {
  display: inline-block;
}

.page-header .leftside-header .logo {
  width: 150px;
  height: 50px;
  position: relative;
  display: inline-block;
}

.page-header .leftside-header .logo img {
  width: 100%;
  padding: 5px 4px;
  margin-left: -4px;
}

.page-header .leftside-header .toggle-left-sidebar {
  color: #ffffff;
  height: 30px;
  line-height: 30px;
  position: absolute;
  right: 15px;
  text-align: center;
  top: 10px;
  font-size: 18px;
  font-size: 1.3846153846rem;
  cursor: pointer;
}

.page-header .rightside-header {
  float: right;
  height: 50px;
  margin-right: 5px;
}

.page-header .rightside-header .header-middle {
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}

.page-header .rightside-header .header-separator {
  border-left: 1px solid rgba(204, 204, 204, 0.46);
  height: 25px;
  width: 1px;
  margin: 0px 5px;
  display: inline-block;
  vertical-align: middle;
}

.page-header .rightside-header .header-section {
  display: inline-block;
  padding: 0px 4px;
  vertical-align: middle;
}

.page-header .rightside-header .header-section .log-out {
  /*color: #33ddba;*/
  color: #fff;
  font-size: 22px;
  font-size: 1.6923076923rem;
  line-height: 22px;
  line-height: 1.6923076923rem;
  padding: 3px;
  cursor: pointer;
}

.page-header .rightside-header .header-section .log-out:hover {
  color: #ffffff;
}

.page-header .dropdown-box {
  background: #ffffff;
  color: #404040;
  position: absolute;
  display: none;
  z-index: 1000;
  border-radius: 0px 0px 3px 3px;
  -webkit-box-shadow: 1px 2px 4px 0px rgba(32, 32, 32, 0.7);
          box-shadow: 1px 2px 4px 0px rgba(32, 32, 32, 0.7);
}

.page-header .dropdown-box:before {
  font-family: 'FontAwesome';
  font-size: 18px;
  font-size: 1.3846153846rem;
  content: '\f0d8 ';
  color: #ffffff;
  position: absolute;
  top: -16px;
  right: 8px;
}

.page-header .dropdown-box .drop-header {
  padding: 6px 10px;
  height: 40px;
  background: #ffffff;
  border-bottom: 2px solid #ececec;
  color: #000000;
}

.page-header .dropdown-box .drop-header h3 {
  display: inline-block;
  font-size: 15px;
  margin: 5px 0px;
}

.page-header .dropdown-box .drop-header h3 i {
  margin-right: 6px;
  color: <?php echo $panel_color; ?>;
}

.page-header .dropdown-box .drop-header span.badge {
  float: right;
  margin-top: 4px;
}

.page-header .dropdown-box .drop-content.basic {
  text-align: left;
}

.page-header .dropdown-box .drop-content.basic ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.page-header .dropdown-box .drop-content.basic ul li {
  cursor: pointer;
  border-bottom: 1px solid #ececec;
  color: #202020;
}

.page-header .dropdown-box .drop-content.basic ul li:last-child {
  border: none;
}

.page-header .dropdown-box .drop-content.basic ul li i {
  margin-right: 6px;
}

.page-header .dropdown-box .drop-content.basic ul li a {
  display: block;
  padding: 6px 10px;
  color: #202020 !important;
}

.page-header .dropdown-box .drop-content.basic ul li:hover {
  background: #f7f7f7;
  font-weight: bold;
}

.page-header .dropdown-box .drop-content.basic ul li:hover i {
  color: <?php echo $panel_color; ?>;
}

.page-header .dropdown-box .drop-footer {
  padding: 5px;
  text-align: center;
  background: #ebebeb;
}

.page-header .dropdown-box .drop-footer h3,
.page-header .dropdown-box .drop-footer a {
  cursor: pointer;
  color: #585858;
  margin: 3px 0px;
  font-size: 12px;
  font-size: 0.9230769231rem;
  line-height: 12px;
  line-height: 0.9230769231rem;
}

.page-header .dropdown-box .drop-footer h3:hover,
.page-header .dropdown-box .drop-footer a:hover {
  font-weight: bold;
}

.page-header #user-headerbox {
  cursor: pointer;
  position: relative;
}

.page-header #user-headerbox .user-header-wrap .user-photo {
  display: inline-block;
  vertical-align: middle;
  width: 30px;
  border-radius: 3px;
  overflow: hidden;
  margin-right: 10px;
}

.page-header #user-headerbox .user-header-wrap .user-photo img {
  width: 100%;
}

.page-header #user-headerbox .user-header-wrap .user-info {
  display: inline-block;
  vertical-align: middle;
  margin-bottom: 10px;
  margin-top: 10px;
}

.page-header #user-headerbox .user-header-wrap .user-info span {
  display: block;
  font-weight: bold;
}

.page-header #user-headerbox .user-header-wrap .user-info span.user-name {
  color: #ffffff;
  font-size: 15px;
  font-size: 1.1538461538rem;
  line-height: 18px;
  line-height: 1.3846153846rem;
}

.page-header #user-headerbox .user-header-wrap .user-info span.user-profile {
  /*color: #2adcb7;*/
  color: #fff;
  font-size: 11px;
  font-size: 0.8461538462rem;
  line-height: 14px;
  line-height: 1.0769230769rem;
}

.page-header #user-headerbox .user-header-wrap > i {
  color: #ffffff;
  padding: 10px 0px 10px 10px;
  font-size: 11px;
  font-size: 0.8461538462rem;
}

.page-header #user-headerbox .user-header-wrap > i.icon-close {
  display: none;
}

.page-header #user-headerbox.open i.icon-close {
  display: inline-block;
}

.page-header #user-headerbox.open i.icon-open {
  display: none;
}

.page-header #user-headerbox .dropdown-box {
  display: none;
  width: 100%;
  margin-top: -1px;
  border: 1px solid #e8e8e8;
  min-width: 160px;
  right: -10px;
}

.page-header #notice-headerbox .notice {
  margin: 0px 5px;
  display: inline-block;
  position: relative;
}

.page-header #notice-headerbox .notice > i {
  cursor: pointer;
  color: #ffffff;
  font-size: 16px;
  font-size: 1.2307692308rem;
  padding: 5px;
}

.page-header #notice-headerbox .notice > i:hover {
  color: #1fbe9d;
}

.page-header #notice-headerbox .notice.open > i {
  color: #23d4af;
}

.page-header #notice-headerbox .notice .dropdown-box {
  width: 250px;
  right: 0;
  margin-top: 11px;
}

.page-header #notice-headerbox #alerts-notice .drop-header,
.page-header #notice-headerbox #checklist-notice .drop-header,
.page-header #notice-headerbox #messages-notice .drop-header {
  background: #ffffff;
  color: #000000;
  border-bottom: 1px solid <?php echo $panel_color; ?>;
}

.page-header #notice-headerbox #alerts-notice .drop-header i,
.page-header #notice-headerbox #checklist-notice .drop-header i,
.page-header #notice-headerbox #messages-notice .drop-header i {
  color: #0f5d4d;
}

.page-header #search-headerbox {
  color: #ffffff !important;
}

.page-header #search-headerbox #search {
  display: none;
  border: 1px solid rgba(255, 255, 255, 0.490196);
  padding: 2px 5px;
  background: none !important;
}

.page-header #search-headerbox #search::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.8);
}

.page-header #search-headerbox #search:-moz-placeholder {
  /* Firefox 18- */
  color: rgba(255, 255, 255, 0.8);
}

.page-header #search-headerbox #search::-moz-placeholder {
  /* Firefox 19+ */
  color: rgba(255, 255, 255, 0.8);
}

.page-header #search-headerbox #search:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.8);
}

.page-header #search-headerbox #search:focus {
  outline: none !important;
  border: 1px solid rgba(255, 255, 255, 0.8);
  -webkit-box-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
          box-shadow: 0 0 5px rgba(255, 255, 255, 0.8);
}

.page-header #search-headerbox .search {
  background: #1fbe9d;
  color: #ffffff;
  margin-left: 5px;
  margin-right: 5px;
  cursor: pointer;
  padding: 8px 8px;
  border-radius: 50%;
}

@media only screen and (max-width: 767px) {
  .page-header {
    background: none;
    height: auto;
    position: static;
  }
  .page-header .leftside-header {
    position: fixed;
    background: <?php echo $panel_color; ?>;
    left: 0;
    right: 0;
    top: 0;
    z-index: 1035;
  }
  .page-header .rightside-header {
    background: #202020;
    float: none !important;
    margin-top: 50px;
    width: 100%;
    text-align: right;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* CONTENT*/
/*================================================*/
.content {
  -webkit-transition-property: margin-left;
  transition-property: margin-left;
  -webkit-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}

.content .content-header {
  background: #f7f7f7;
  color: #ffffff;
  -webkit-box-shadow: 0 2px 8px #cccccc;
          box-shadow: 0 2px 8px #cccccc;
}

.content .content-header .leftside-content-header, .content .content-header .rightside-content-header {
  display: inline-block;
  height: 40px;
}

.content .content-header .leftside-content-header {
  padding-left: 20px;
}

.content .content-header .rightside-content-header {
  float: right;
  padding-right: 20px;
}

.content .content-header ul.breadcrumbs {
  list-style: none;
  line-height: 40px;
  margin: 0px;
  padding: 0px;
}

.content .content-header ul.breadcrumbs li {
  display: inline-block;
  font-size: 15px;
  font-size: 1.1538461538rem;
  line-height: 18px;
  line-height: 1.3846153846rem;
  vertical-align: middle;
}

.content .content-header ul.breadcrumbs li:first-child a:before {
  content: none;
}

.content .content-header ul.breadcrumbs li:first-child i {
  padding-right: 8px;
  color: <?php echo $panel_color; ?>;
}

.content .content-header ul.breadcrumbs li a {
  color: <?php echo $panel_color; ?>;
}

.content .content-header ul.breadcrumbs li a:before {
  font-family: 'FontAwesome';
  content: '\f105 ';
  font-weight: bold;
  padding: 0px 6px 0px 5px;
  color: <?php echo $panel_color; ?>;
}

@media only screen and (max-width: 767px) {
  .content .content-header {
    background: #f7f7f7;
  }
  .content .content-header ul.breadcrumbs li:first-child i {
    color: #1fbe9d;
  }
  .content .content-header ul.breadcrumbs li a {
    color: #126f5c;
  }
  .content .content-header ul.breadcrumbs li a:before {
    color: #1fbe9d;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* RIGHT SIDEBAR */
/*================================================*/
.right-sidebar {
  background: #ffffff;
  color: #000000;
  border: 1px solid #ececec;
}

.right-sidebar .right-sidebar-toggle {
  position: absolute;
  top: 40px;
  left: -30px;
  width: 30px;
  height: 30px;
  background-color: #ffffff;
  cursor: pointer;
  text-align: center;
  border-bottom-left-radius: 50%;
}

.right-sidebar .right-sidebar-toggle i {
  font-size: 20px;
  line-height: 30px;
}

.right-sidebar .right-sidebar-toggle i:hover {
  color: <?php echo $panel_color; ?>;
}

.right-sidebar .template-settings {
  padding: 10px;
}

.right-sidebar .template-settings .toggle-settings {
  padding: 0;
  list-style: none;
}

.right-sidebar .template-settings .toggle-settings li {
  display: block;
  margin-bottom: 5px;
  padding-bottom: 5px;
  border-bottom: 1px solid #f1f1f1;
}

.right-sidebar .template-settings .toggle-settings li:last-child {
  border-bottom: none;
}

.right-sidebar .template-settings .toggle-settings li .text {
  display: inline-block;
}

.right-sidebar .template-settings .toggle-settings li .switch {
  float: right;
  margin-top: 5px;
}

.right-sidebar .template-settings .toggle-colors {
  padding: 0;
  margin: 10px;
  margin-top: 25px;
  list-style: none;
}

.right-sidebar .template-settings .toggle-colors img {
  width: 100%;
  max-width: 50px;
  display: block;
  margin: auto;
}

@media only screen and (max-width: 767px) {
  .right-sidebar .template-settings h4:first-child {
    display: none;
  }
  .right-sidebar .template-settings .toggle-settings {
    display: none;
  }
  .right-sidebar .right-sidebar-toggle {
    top: 90px;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* LEFT SIDEBAR*/
/*================================================*/
.left-sidebar {
  background: #202020;
  color: #ffffff;
  -webkit-transition-property: width;
  transition-property: width;
  -webkit-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}

.left-sidebar .nano {
  background: #202020;
}

.left-sidebar .left-sidebar-header {
  position: relative;
  height: 40px;
  background: #151515;
  -webkit-transition-property: width;
  transition-property: width;
  -webkit-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}

.left-sidebar .left-sidebar-header .left-sidebar-title {
  padding: 10px;
  font-size: 10px;
  color: <?php echo $panel_color; ?>;
  font-weight: bold;
  height: 40px;
  margin-right: 60px;
  -webkit-transition-property: margin;
  transition-property: margin;
  -webkit-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}

.left-sidebar .left-sidebar-header .left-sidebar-toggle {
  position: absolute;
  top: 0;
  right: 0;
  width: 60px;
  height: 40px;
  background-color: #000000;
  text-align: center;
  cursor: pointer;
}

@media only screen and (min-width: 768px) {
  /*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
  /* STYLE - SCROLL*/
  /*================================================*/
  html.scroll .left-sidebar, html.left-sidebar-scroll .left-sidebar {
    position: absolute;
  }
  html.scroll .left-sidebar .nano, html.left-sidebar-scroll .left-sidebar .nano {
    position: static;
    overflow: visible;
  }
  html.scroll .left-sidebar .nano .nano-content, html.left-sidebar-scroll .left-sidebar .nano .nano-content {
    position: static;
    overflow: visible;
    margin-right: 0 !important;
    outline: none;
  }
  html.scroll .left-sidebar .nano .nano-pane, html.left-sidebar-scroll .left-sidebar .nano .nano-pane {
    display: none !important;
  }
  /*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
  /* STYLE - TOP LEFT SIDEBAR*/
  /*================================================*/
  html.left-sidebar-top {
    /*left-sidebar-top & left-sidebar-scroll & fixed header*/
  }
  html.left-sidebar-top .left-sidebar .left-sidebar-header {
    height: 50px;
  }
  html.left-sidebar-top .left-sidebar .left-sidebar-header .left-sidebar-title, html.left-sidebar-top .left-sidebar .left-sidebar-header .left-sidebar-toggle {
    height: 50px;
  }
  html.left-sidebar-top .left-sidebar .left-sidebar-header .left-sidebar-title {
    padding: 14px 10px;
  }
  html.left-sidebar-top.fixed.left-sidebar-scroll .left-sidebar .left-sidebar-header {
    position: fixed;
    width: 220px;
    z-index: 1035;
  }
  html.left-sidebar-top.fixed.left-sidebar-scroll #left-nav {
    margin-top: 50px;
  }
  html.left-sidebar-top.fixed.left-sidebar-scroll.left-sidebar-collapsed .left-sidebar-header {
    width: 60px;
  }
  html.left-sidebar-collapsed .left-sidebar-title {
    opacity: 0;
  }
}

@media only screen and (max-width: 768px) {
  .left-sidebar .left-sidebar-header {
    display: none;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* LEFT SIDEBAR NAVIGATION*/
/*================================================*/
ul#main-nav {
  margin-right: 4px;
}

ul#main-nav > li {
  border-bottom: 1px solid #2a2a2a;
}

ul#main-nav > li.active-item > a {
  -webkit-box-shadow: 2px -1px 0 <?php echo $panel_color; ?> inset !important;
          box-shadow: 2px -1px 0 <?php echo $panel_color; ?> inset !important;
  border-bottom-left-radius: 5px;
  background: #131313;
  color: #ffffff;
}

ul#main-nav > li.active-item > a > i {
  color: #ffffff;
}

ul#main-nav > li.open-item > a {
  color: #ffffff;
  -webkit-box-shadow: 0px -1px 0 <?php echo $panel_color; ?> inset;
          box-shadow: 0px -1px 0 <?php echo $panel_color; ?> inset;
  border-bottom-left-radius: 5px;
}

ul#main-nav > li.open-item > a > i {
  color: <?php echo $panel_color; ?>;
}

ul#main-nav > li > a span {
  opacity: 1;
  -webkit-transition-property: opacity;
  transition-property: opacity;
  -webkit-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease-in;
  transition-timing-function: ease-in;
}

ul#main-nav li a {
  padding: 12px 20px;
  font-size: 13px;
  color: #ffffff;
  white-space: nowrap;
  text-overflow: ellipsis;
  cursor: pointer;
}

ul#main-nav li a:hover, ul#main-nav li a:focus {
  background: #131313;
}

ul#main-nav li a > i {
  font-size: 18px;
  margin-right: 10px;
  text-align: center;
  vertical-align: middle;
}

ul#main-nav li span {
  vertical-align: middle;
}

ul#main-nav li.has-child-item {
  position: relative;
}

ul#main-nav li.has-child-item > a:after {
  font-family: 'FontAwesome';
  font-size: 10px;
  font-size: 0.7692307692rem;
  content: '\f067';
  color: #ffffff;
  position: absolute;
  padding: 14px;
  right: 0;
  top: 0;
  opacity: 1;
  -webkit-transition-property: opacity;
  transition-property: opacity;
  -webkit-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease-in;
  transition-timing-function: ease-in;
}

ul#main-nav li.has-child-item.open-item > ul.child-nav {
  display: block;
}

ul#main-nav li.has-child-item.open-item > a:after {
  content: '\f068';
}

ul#main-nav ul.child-nav {
  border-radius: 5px;
  display: none;
}

ul#main-nav ul.child-nav.level-1 {
  background: #161616;
  -webkit-box-shadow: 0px -5px 5px -3px rgba(0, 0, 0, 0.6) inset;
          box-shadow: 0px -5px 5px -3px rgba(0, 0, 0, 0.6) inset;
}

ul#main-nav ul.child-nav.level-1 li a {
  padding: 10px 25px;
}

ul#main-nav ul.child-nav.level-1 li a:hover, ul#main-nav ul.child-nav.level-1 li a:focus {
  background: #0c0c0c;
}

ul#main-nav ul.child-nav.level-2 {
  background: #0e0e0e;
  -webkit-box-shadow: 0px 0px 4px 2px rgba(0, 0, 0, 0.4) inset;
          box-shadow: 0px 0px 4px 2px rgba(0, 0, 0, 0.4) inset;
}

ul#main-nav ul.child-nav.level-2 li a {
  padding: 8px 45px;
}

ul#main-nav ul.child-nav.level-2 li a:hover, ul#main-nav ul.child-nav.level-2 li a:focus {
  background: #0c0c0c;
}

ul#main-nav ul.child-nav.level-3 {
  background: #070606;
  -webkit-box-shadow: 0px 0px 0px 5px #000 inset;
          box-shadow: 0px 0px 0px 5px #000 inset;
}

ul#main-nav ul.child-nav.level-3 li a {
  padding: 6px 65px;
}

ul#main-nav ul.child-nav.level-3 li a:hover, ul#main-nav ul.child-nav.level-3 li a:focus {
  background: #0c0c0c;
}

ul#main-nav ul.child-nav.level-1 li.active-item > a, ul#main-nav ul.child-nav.level-2 li.active-item > a, ul#main-nav ul.child-nav.level-3 li.active-item > a {
  color: #1fbe9d;
}

@media only screen and (min-width: 768px) {
  html.left-sidebar-collapsed .left-sidebar #main-nav > li.open-item > a {
    -webkit-box-shadow: none;
            box-shadow: none;
  }
  html.left-sidebar-collapsed .left-sidebar #main-nav > li > a {
    overflow: hidden;
    text-overflow: clip;
  }
  html.left-sidebar-collapsed .left-sidebar #main-nav > li > a span {
    opacity: 0;
    -webkit-transition-duration: 0.05s;
    transition-duration: 0.05s;
  }
  html.left-sidebar-collapsed .left-sidebar #main-nav li.has-child-item a:after {
    opacity: 0;
    -webkit-transition: none;
    transition: none;
  }
  html.left-sidebar-collapsed .left-sidebar #main-nav li.has-child-item ul.child-nav {
    display: none;
  }
  html.left-sidebar-collapsed .left-sidebar .nano:hover {
    width: 220px;
    min-height: 100vh;
    background: rgba(32, 32, 32, 0.9);
  }
  html.left-sidebar-collapsed .left-sidebar .nano:hover #main-nav > li.open-item > a {
    -webkit-box-shadow: 0px -1px 0 <?php echo $panel_color; ?> inset;
            box-shadow: 0px -1px 0 <?php echo $panel_color; ?> inset;
  }
  html.left-sidebar-collapsed .left-sidebar .nano:hover #main-nav > li > a {
    overflow: visible;
    text-overflow: initial;
  }
  html.left-sidebar-collapsed .left-sidebar .nano:hover #main-nav > li > a span {
    opacity: 1;
    -webkit-transition: none;
    transition: none;
  }
  html.left-sidebar-collapsed .left-sidebar .nano:hover #main-nav li.has-child-item a:after {
    opacity: 1;
    -webkit-transition: none;
    transition: none;
  }
  html.left-sidebar-collapsed .left-sidebar .nano:hover #main-nav li.has-child-item.open-item > ul.child-nav {
    display: block;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* LEFT SIDEBAR SUBNAVIGATION */
/*================================================*/
ul#main-nav.nav-left-lines ul.child-nav li a:before {
  position: absolute;
  content: "";
  left: 28px;
  top: 0px;
  bottom: 0px;
  border-left: 1px solid #2f2f2f;
}

ul#main-nav.nav-left-lines ul.child-nav li:hover > a:before {
  border-color: <?php echo $panel_color; ?>;
}

ul#main-nav.nav-left-lines ul.child-nav li.active-item > a {
  color: #ffffff;
}

ul#main-nav.nav-left-lines ul.child-nav li.active-item > a:before {
  border-color: <?php echo $panel_color; ?> !important;
}

ul#main-nav.nav-left-lines ul.child-nav li.open-item:before {
  position: absolute;
  content: "";
  left: 28px;
  top: 41px;
  bottom: 0px;
  border-top: 1px solid <?php echo $panel_color; ?>;
  width: 23px;
}

ul#main-nav.nav-left-lines ul.child-nav li.open-item > a:before {
  border-color: <?php echo $panel_color; ?>;
}

ul#main-nav.nav-left-lines ul.child-nav li.has-child-item > a:after {
  padding: 10px;
}

ul#main-nav.nav-left-lines ul.child-nav.level-1 li a {
  padding: 10px 50px;
}

ul#main-nav.nav-left-lines ul.child-nav.level-2 li.open-item:before {
  left: 50px;
  top: 37px;
  width: 21px;
}

ul#main-nav.nav-left-lines ul.child-nav.level-2 li a {
  padding: 8px 70px;
}

ul#main-nav.nav-left-lines ul.child-nav.level-2 li a:before {
  left: 50px;
}

ul#main-nav.nav-left-lines ul.child-nav.level-2 li.has-child-item > a:after {
  padding: 8px;
}

ul#main-nav.nav-left-lines ul.child-nav.level-3 li a {
  padding: 6px 90px;
}

ul#main-nav.nav-left-lines ul.child-nav.level-3 li a:before {
  left: 70px;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* HEADINGS*/
/*================================================*/
h1 {
  font-size: 36px;
  font-size: 2.7692307692rem;
}

h2 {
  margin-top: 15px;
  font-size: 30px;
  font-size: 2.3076923077rem;
}

h3 {
  margin-top: 15px;
  font-size: 24px;
  font-size: 1.8461538462rem;
}

h4 {
  font-size: 18px;
  font-size: 1.3846153846rem;
}

h5 {
  font-size: 16px;
  font-size: 1.2307692308rem;
}

h6 {
  font-size: 14px;
  font-size: 1.0769230769rem;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* BLOCKQUOTES*/
/*================================================*/
blockquote {
  font-size: 14px;
  font-size: 1.0769230769rem;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* PANELS*/
/*================================================*/
.panel {
  border: none;
  -webkit-box-shadow: 1px 1px 1px #cccccc;
          box-shadow: 1px 1px 1px #cccccc;
}

.panel .panel-header,
.panel .panel-footer {
  padding: 10px 12px;
}

.panel .panel-content {
  padding: 12px;
}

.panel .panel-header {
  position: relative;
  border-radius: 4px 4px 0px 0px;
  border-bottom: 1px solid #cccccc;
}

.panel .panel-header .panel-title {
  color: #333333;
  font-size: 16px;
  font-size: 1.2307692308rem;
  font-weight: bold;
  margin: 5px 0px;
}

.panel .panel-header .panel-subtitle {
  color: #585858;
  font-size: 12px;
  font-size: 0.9230769231rem;
  margin: 0px;
}

.panel .panel-header .panel-actions {
  position: absolute;
  top: 10px;
  right: 12px;
}

.panel .panel-header .panel-actions ul {
  margin: 0;
  list-style: none;
  padding: 0;
}

.panel .panel-header .panel-actions ul li {
  display: inline-block;
}

.panel .panel-header .panel-actions ul li.action {
  width: 25px;
  height: 25px;
  text-align: center;
  border-radius: 3px;
  cursor: pointer;
  color: #585858;
  -webkit-box-shadow: 1px 1px 2px;
          box-shadow: 1px 1px 2px;
  margin-right: 2px;
}

.panel .panel-header .panel-actions ul li:hover {
  color: #202020;
}

.panel .panel-header .panel-actions ul li span {
  vertical-align: middle;
}

.panel .panel-header .panel-actions ul li.toggle-panel span:before {
  font-family: 'FontAwesome';
  font-size: 10px;
  font-size: 0.7692307692rem;
  content: '\f068';
}

.panel .panel-header .panel-actions ul li.toggle-panel.panel-collapse span:before {
  content: '\f067';
}

.panel .panel-footer {
  border: none;
}

.panel .panel-header.border {
  border-width: 2px;
  background: none !important;
}

.panel .panel-header.border .panel-title,
.panel .panel-header.border .panel-actions {
  color: #333333 !important;
}

.panel .panel-header.panel-success {
  background: #88b93c;
}

.panel .panel-header.panel-success .panel-title,
.panel .panel-header.panel-success .panel-actions li.action {
  color: #FFF;
}

.panel .panel-header.panel-success .panel-actions li.action {
  border: 1px solid rgba(255, 255, 255, 0.24);
  -webkit-box-shadow: 1px 1px 2px #4f6c23;
          box-shadow: 1px 1px 2px #4f6c23;
}

.panel .panel-header.panel-success.border {
  border-color: #88b93c;
}

.panel .panel-header.panel-warning {
  background: #fea223;
}

.panel .panel-header.panel-warning .panel-title,
.panel .panel-header.panel-warning .panel-actions li.action {
  color: #FFF;
}

.panel .panel-header.panel-warning .panel-actions li.action {
  border: 1px solid rgba(255, 255, 255, 0.24);
  -webkit-box-shadow: 1px 1px 2px #ba6c01;
          box-shadow: 1px 1px 2px #ba6c01;
}

.panel .panel-header.panel-warning.border {
  border-color: #fea223;
}

.panel .panel-header.panel-danger {
  background: #d2322d;
}

.panel .panel-header.panel-danger .panel-title,
.panel .panel-header.panel-danger .panel-actions li.action {
  color: #FFF;
}

.panel .panel-header.panel-danger .panel-actions li.action {
  border: 1px solid rgba(255, 255, 255, 0.24);
  -webkit-box-shadow: 1px 1px 2px #7e1e1b;
          box-shadow: 1px 1px 2px #7e1e1b;
}

.panel .panel-header.panel-danger.border {
  border-color: #d2322d;
}

.panel .panel-header.panel-info {
  background: #5bc0de;
}

.panel .panel-header.panel-info .panel-title,
.panel .panel-header.panel-info .panel-actions li.action {
  color: #FFF;
}

.panel .panel-header.panel-info .panel-actions li.action {
  border: 1px solid rgba(255, 255, 255, 0.24);
  -webkit-box-shadow: 1px 1px 2px #2390b0;
          box-shadow: 1px 1px 2px #2390b0;
}

.panel .panel-header.panel-info.border {
  border-color: #5bc0de;
}

.panel .panel-header.panel-lighter-1 {
  background: #1fbe9d;
}

.panel .panel-header.panel-lighter-1 .panel-title,
.panel .panel-header.panel-lighter-1 .panel-actions {
  color: #ffffff;
}

.panel .panel-header.panel-lighter-1.border {
  border-color: #1fbe9d;
}

.panel .panel-header.panel-lighter-2 {
  background: #2adcb7;
}

.panel .panel-header.panel-lighter-2 .panel-title,
.panel .panel-header.panel-lighter-2 .panel-actions {
  color: #ffffff;
}

.panel .panel-header.panel-lighter-2.border {
  border-color: #2adcb7;
}

.panel .panel-header.panel-primary {
  background: <?php echo $panel_color; ?>;
}

.panel .panel-header.panel-primary .panel-title,
.panel .panel-header.panel-primary .panel-actions {
  color: #ffffff;
}

.panel .panel-header.panel-primary.border {
  border-color: <?php echo $panel_color; ?>;
}

.panel .panel-header.panel-darker-1 {
  background: <?php echo $panel_color; ?>;
}

.panel .panel-header.panel-darker-1 .panel-title,
.panel .panel-header.panel-darker-1 .panel-actions {
  color: #ffffff;
}

.panel .panel-header.panel-darker-1.border {
  border-color: #126f5c;
}

.panel .panel-header.panel-darker-2 {
  background: #0f5d4d;
}

.panel .panel-header.panel-darker-2 .panel-title,
.panel .panel-header.panel-darker-2 .panel-actions {
  color: #ffffff;
}

.panel .panel-header.panel-darker-2.border {
  border-color: #0f5d4d;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* ACCORDIONS*/
/*================================================*/
.panel-accordion {
  border: 1px solid #ececec;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.panel-accordion:hover {
  -webkit-box-shadow: 1px 1px 2px #ececec;
          box-shadow: 1px 1px 2px #ececec;
}

.panel-accordion .panel-header {
  padding: 0px;
}

.panel-accordion .panel-header .panel-title {
  margin: 0px;
  font-size: 14px;
  font-size: 1.0769230769rem;
  line-height: 14px;
  line-height: 1.0769230769rem;
  padding: 12px;
  display: block;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* TABS*/
/*================================================*/
.tabs {
  background: #f7f7f7;
  margin-bottom: 20px;
  margin-top: 15px;
}

.tabs .nav-tabs > li > a {
  border-radius: 0px;
}

.tabs .nav-tabs > li.active a {
  border-top: 2px solid <?php echo $panel_color; ?>;
}

.tabs .nav-tabs.nav-justified > li.active a {
  border-top: 2px solid <?php echo $panel_color; ?>;
}

.tabs .tab-content {
  background: #ffffff;
  padding: 10px;
  border: 1px solid #ddd;
  border-top: 0px;
}

.tabs.tabs-vertical .nav-tabs {
  border: 0px;
}

.tabs.tabs-vertical .nav-tabs > li {
  float: none;
  margin-bottom: 0px;
}

.tabs.tabs-vertical .nav-tabs > li:last-child a {
  border-bottom: 0px;
}

.tabs.tabs-vertical .tab-content {
  overflow: hidden;
  border: 1px solid #ddd;
}

.tabs.tabs-vertical.tabs-left .nav-tabs {
  float: left;
}

.tabs.tabs-vertical.tabs-left .nav-tabs li {
  margin-right: -3px;
}

.tabs.tabs-vertical.tabs-left .nav-tabs li.active a {
  border: 1px solid #ddd;
  border-right-color: transparent;
  border-left: 2px solid <?php echo $panel_color; ?>;
}

.tabs.tabs-vertical.tabs-right .nav-tabs {
  float: right;
}

.tabs.tabs-vertical.tabs-right .nav-tabs li {
  margin-left: -3px;
}

.tabs.tabs-vertical.tabs-right .nav-tabs li.active a {
  border: 1px solid #ddd;
  border-left-color: transparent;
  border-right: 2px solid <?php echo $panel_color; ?>;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* BUTTONS*/
/*================================================*/
.btn {
  border-radius: 2px;
  border: 1px solid transparent;
  -webkit-transition: all 0.5s ease !important;
  transition: all 0.5s ease !important;
  background-image: none !important;
  -webkit-box-shadow: none !important;
          box-shadow: none !important;
  background: #ececec;
  margin-bottom: 10px;
}

.btn:hover {
  background: #cccccc;
}

.btn.btn-wide {
  min-width: 120px;
}

.btn.btn-o {
  background: none;
  font-weight: bold;
}

.btn.btn-transparent {
  background-color: transparent !important;
  border-color: transparent !important;
  -webkit-box-shadow: transparent !important;
          box-shadow: transparent !important;
  outline-color: transparent !important;
}

.btn.btn-loading i {
  padding: 0px 5px;
  position: relative;
}

.btn-group-vertical .btn {
  margin-top: 0px;
  margin-bottom: 0px;
}

.btn-success {
  background: #88b93c;
  border-color: #88b93c;
}

.btn-success:hover, .btn-success:focus, .btn-success:active {
  background: #719a32;
  color: #FFF;
}

.btn-success.btn-o {
  color: #88b93c;
}

.btn-success.btn-o:hover, .btn-success.btn-o:focus, .btn-success.btn-o:active {
  color: #FFF;
}

.btn-warning {
  background: #fea223;
  border-color: #fea223;
}

.btn-warning:hover, .btn-warning:focus, .btn-warning:active {
  background: #f79001;
  color: #FFF;
}

.btn-warning.btn-o {
  color: #fea223;
}

.btn-warning.btn-o:hover, .btn-warning.btn-o:focus, .btn-warning.btn-o:active {
  color: #FFF;
}

.btn-danger {
  background: #d2322d;
  border-color: #d2322d;
}

.btn-danger:hover, .btn-danger:focus, .btn-danger:active {
  background: #b02a26;
  color: #FFF;
}

.btn-danger.btn-o {
  color: #d2322d;
}

.btn-danger.btn-o:hover, .btn-danger.btn-o:focus, .btn-danger.btn-o:active {
  color: #FFF;
}

.btn-info {
  background: #5bc0de;
  border-color: #5bc0de;
}

.btn-info:hover, .btn-info:focus, .btn-info:active {
  background: #39b3d7;
  color: #FFF;
}

.btn-info.btn-o {
  color: #5bc0de;
}

.btn-info.btn-o:hover, .btn-info.btn-o:focus, .btn-info.btn-o:active {
  color: #FFF;
}

.btn-lighter-1 {
  background: #1fbe9d;
  border-color: #1fbe9d;
  color: #ffffff;
}

.btn-lighter-1:hover, .btn-lighter-1:focus, .btn-lighter-1:active {
  background: #199b80 !important;
  color: #ffffff;
}

.btn-lighter-1.btn-o {
  color: #1fbe9d;
}

.btn-lighter-1.btn-o:hover, .btn-lighter-1.btn-o:focus, .btn-lighter-1.btn-o:active {
  color: #ffffff;
}

.btn-lighter-2 {
  background: <?php echo $btn_hover_colorl; ?>;
  border-color: <?php echo $panel_colorl; ?>;
  color: #ffffff;
}

.btn-lighter-2:hover, .btn-lighter-2:focus, .btn-lighter-2:active {
  background: <?php echo $panel_color; ?> !important;
  color: #ffffff;
}

.btn-lighter-2.btn-o {
  color: #2adcb7;
}

.btn-lighter-2.btn-o:hover, .btn-lighter-2.btn-o:focus, .btn-lighter-2.btn-o:active {
  color: #ffffff;
}

.btn-primary {
  background: <?php echo $panel_color; ?>;
  border-color: <?php echo $panel_color; ?>;
  color: #ffffff;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active {
  background: <?php echo $btn_hover_color; ?> !important;
  border-color: <?php echo $btn_hover_color; ?> !important;
  color: #ffffff;
}

.btn-purple {
  background: #480392;
  border-color: #220244;
  color: #ffffff;
}

.btn-purple:hover, .btn-purple:focus, .btn-purple:active {
  background: #320165 !important;
  border-color: #000000 !important;
  color: #ffffff;
}

.btn-pink {
  background: crimson;
  border-color: #ad1130;
  color: #ffffff;
}

.btn-pink:hover, .btn-pink:focus, .btn-pink:active {
  background: #b71534 !important;
  border-color: #5d0012 !important;
  color: #ffffff;
}

.btn-primary.btn-o {
  color: <?php echo $panel_color; ?>;
}

.btn-primary.btn-o:hover, .btn-primary.btn-o:focus, .btn-primary.btn-o:active {
  color: #ffffff;
}

.btn-darker-1 {
  background: #126f5c;
  border-color: #126f5c;
  color: #ffffff;
}

.btn-darker-1:hover, .btn-darker-1:focus, .btn-darker-1:active {
  background: #0c4c3f !important;
  color: #ffffff;
}

.btn-darker-1.btn-o {
  color: #126f5c;
}

.btn-darker-1.btn-o:hover, .btn-darker-1.btn-o:focus, .btn-darker-1.btn-o:active {
  color: #ffffff;
}

.btn-darker-2 {
  background: <?php echo $btn_hover_color; ?>;
  border-color: <?php echo $btn_hover_color; ?>;
  color: #ffffff;
}

.btn-darker-2:hover, .btn-darker-2:focus, .btn-darker-2:active {
  background: <?php echo $btn_hover_color; ?> !important;
  color: #ffffff;
}

.btn-darker-2.btn-o {
  color: #0f5d4d;
}

.btn-darker-2.btn-o:hover, .btn-darker-2.btn-o:focus, .btn-darker-2.btn-o:active {
  color: #ffffff;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* ALERTS*/
/*================================================*/
.alert.alert-success {
  background: #88b93c !important;
  color: #ffffff;
}

.alert.alert-warning {
  background: #fea223 !important;
  color: #ffffff;
}

.alert.alert-danger {
  background: #d2322d !important;
  color: #ffffff;
}

.alert.alert-info {
  background: #5bc0de !important;
  color: #ffffff;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* MODALS*/
/*================================================*/
.modal .modal-content .modal-header.state {
  padding: 10px 15px;
}

.modal .modal-content .modal-header.state i {
  margin-right: 10px;
  border: 1px solid #fff;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  text-align: center;
  line-height: 30px;
}

.modal .modal-content .modal-header.modal-success {
  background: #88b93c;
  color: #FFF;
}

.modal .modal-content .modal-header.modal-warning {
  background: #fea223;
  color: #FFF;
}

.modal .modal-content .modal-header.modal-danger {
  background: #d2322d;
  color: #FFF;
}

.modal .modal-content .modal-header.modal-info {
  background: #5bc0de;
  color: #FFF;
}

.modal .modal-content .modal-header.modal-primary {
  background: <?php echo $panel_color; ?>;
  color: #ffffff;
}

.modal .modal-content .modal-footer {
  padding: 10px 15px;
}

.modal .modal-content .modal-footer .btn {
  margin-bottom: 0px;
}

body.modal-open .animated {
  -webkit-animation-fill-mode: initial;
          animation-fill-mode: initial;
}

body.modal-open .row.animated {
  -webkit-animation: none;
}

@media (min-width: 768px) {
  .modal-dialog {
    margin: 15% auto;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* FORMS*/
/*================================================*/
.form-group:last-child, .form-group:last-of-type {
  margin-bottom: 0;
}

.form-group .help-block {
  margin-bottom: 5px;
}

.form-group.has-success .form-control {
  border-color: #88b93c;
}

.form-group.has-success .control-label,
.form-group.has-success .form-control-feedback {
  color: #88b93c;
}

.form-group.has-warning .form-control {
  border-color: #fea223;
}

.form-group.has-warning .control-label,
.form-group.has-warning .form-control-feedback {
  color: #fea223;
}

.form-group.has-error .form-control {
  border-color: #d2322d;
}

.form-group.has-error .control-label,
.form-group.has-error .form-control-feedback {
  color: #d2322d;
}

form button.btn {
  margin-bottom: 0px;
}

.form-stripe .form-group {
  padding-bottom: 15px;
  margin-bottom: 15px;
  border-bottom: 1px solid #ececec;
}

.form-stripe .form-group:last-child, .form-stripe .form-group:last-of-type {
  padding-bottom: 0px !important;
  margin-bottom: 0px !important;
  border-bottom: none !important;
}

.input-with-icon {
  display: block;
  position: relative;
}

.input-with-icon > input {
  padding-left: 30px !important;
}

.input-with-icon i {
  display: inline-block;
  position: absolute;
  bottom: 0;
  left: 5px;
  z-index: 10;
  padding: 0 5px;
  line-height: 34px;
  color: #999999;
}

.input-with-icon.right-icon-input > input {
  padding-left: 12px !important;
  padding-right: 30px !important;
}

.input-with-icon.right-icon-input i {
  left: auto;
  right: 5px;
}

.checkbox-custom {
  position: relative;
  margin-bottom: 5px;
}

.checkbox-custom.checkbox-inline {
  padding-left: 0px;
  margin: 0px;
}

.checkbox-custom.checkbox-inline label {
  margin-right: 15px;
}

.checkbox-custom:last-child, .checkbox-custom:last-of-type {
  margin-bottom: 0;
}

.checkbox-custom input[type="checkbox"] {
  opacity: 0;
  position: absolute;
  margin-left: -20px;
}

.checkbox-custom input[type="checkbox"]:checked + label:after {
  font-family: 'FontAwesome';
  content: '\F00C';
  top: 6px;
  left: 0px;
  margin-top: -5px;
  font-size: 11px;
  line-height: 1;
  padding: 5px;
  width: 20px;
  height: 20px;
  color: #fff;
}

.checkbox-custom input[type="checkbox"]:checked + label:before {
  border-color: #999999;
  border-width: 10px;
}

.checkbox-custom input[type="checkbox"]:disabled {
  cursor: not-allowed;
}

.checkbox-custom input[type="checkbox"]:disabled:checked + label:after {
  color: #999999;
}

.checkbox-custom input[type="checkbox"]:disabled + label {
  cursor: not-allowed;
}

.checkbox-custom input[type="checkbox"]:disabled + label:before {
  background-color: #999999;
}

.checkbox-custom label.check {
  cursor: pointer;
  display: inline-block;
  padding-left: 30px !important;
  position: relative;
  -webkit-transition: border .2s linear 0s, color .2s linear 0s;
  transition: border .2s linear 0s, color .2s linear 0s;
  font-weight: normal;
}

.checkbox-custom label.check:before, .checkbox-custom label.check:after {
  position: absolute;
  display: inline-block;
  -webkit-transition: border .2s linear 0s, color .2s linear 0s;
  transition: border .2s linear 0s, color .2s linear 0s;
}

.checkbox-custom label.check:before {
  content: "";
  background-color: #fff;
  border: 1px solid #c8c7cc;
  border-radius: 2px;
  height: 20px;
  width: 20px;
  left: 0;
  margin-right: 10px;
  top: 1px;
}

.checkbox-custom label.check + label.error {
  display: block;
}

.checkbox-success input[type="checkbox"]:checked + label:after {
  color: #FFF;
}

.checkbox-success input[type="checkbox"]:checked + label:before {
  border-color: #88b93c;
}

.checkbox-warning input[type="checkbox"]:checked + label:after {
  color: #FFF;
}

.checkbox-warning input[type="checkbox"]:checked + label:before {
  border-color: #fea223;
}

.checkbox-danger input[type="checkbox"]:checked + label:after {
  color: #FFF;
}

.checkbox-danger input[type="checkbox"]:checked + label:before {
  border-color: #d2322d;
}

.checkbox-info input[type="checkbox"]:checked + label:after {
  color: #FFF;
}

.checkbox-info input[type="checkbox"]:checked + label:before {
  border-color: #5bc0de;
}

.checkbox-primary input[type="checkbox"]:checked + label:after {
  color: #ffffff;
}

.checkbox-primary input[type="checkbox"]:checked + label:before {
  border-color: <?php echo $panel_color; ?>;
}

.radio-custom {
  position: relative;
  margin-bottom: 5px;
}

.radio-custom.radio-inline {
  padding-left: 0px;
  margin: 0px;
}

.radio-custom.radio-inline label {
  margin-right: 15px;
}

.radio-custom:last-child, .radio-custom:last-of-type {
  margin-bottom: 0;
}

.radio-custom input[type="radio"] {
  opacity: 0;
  position: absolute;
  margin-left: -20px;
}

.radio-custom input[type="radio"]:checked + label:before {
  border-width: 6px;
  background: #999999;
  border-color: #fff;
}

.radio-custom input[type="radio"]:disabled {
  cursor: not-allowed;
}

.radio-custom input[type="radio"]:disabled:checked + label:before {
  background: #999999;
}

.radio-custom input[type="radio"]:disabled + label {
  cursor: not-allowed;
}

.radio-custom input[type="radio"]:disabled + label:before {
  background-color: #ffffff;
}

.radio-custom label {
  cursor: pointer;
  display: inline-block;
  padding-left: 30px !important;
  position: relative;
  line-height: 22px;
  min-height: 20px;
}

.radio-custom label:before, .radio-custom label:after {
  height: 18px;
  width: 18px;
  left: 0;
  margin-right: 10px;
  bottom: 2px;
  -webkit-transition: all 0.3s cubic-bezier(0.455, 0.03, 0.215, 1.33) 0s;
  transition: all 0.3s cubic-bezier(0.455, 0.03, 0.215, 1.33) 0s;
  display: inline-block;
  position: absolute;
  content: "";
}

.radio-custom label:before {
  border: 1px solid #d0d0d0;
  border-radius: 99px;
}

.radio-custom label:after {
  border: 1px solid #c8c7cc;
  border-radius: 99px;
}

.radio-custom label + label.error {
  display: block;
}

.radio-success input[type="radio"]:checked + label:before {
  background: #88b93c;
}

.radio-warning input[type="radio"]:checked + label:before {
  background: #fea223;
}

.radio-danger input[type="radio"]:checked + label:before {
  background: #d2322d;
}

.radio-info input[type="radio"]:checked + label:before {
  background: #5bc0de;
}

.radio-primary input[type="radio"]:checked + label:before {
  background: <?php echo $panel_color; ?>;
}

.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 26px;
}

.switch input {
  display: none;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 3px;
  bottom: 3px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: <?php echo $panel_color; ?>;
}

input:focus + .slider {
  -webkit-box-shadow: 0 0 1px #2196F3;
          box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(24px);
  transform: translateX(24px);
}

.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

.required {
  display: inline-block;
  color: #d2322d;
  font-size: 15px;
  font-size: 1.1538461538rem;
  font-weight: bold;
  margin-left: 3px;
}

label.error {
  color: #d2322d;
  margin-bottom: 0px;
  margin-top: 3px;
  font-size: 11px;
  font-size: 0.8461538462rem;
  width: 100%;
}

.message-container {
  display: none;
  padding: 10px;
}

.message-container ul {
  padding-left: 20px;
}

.message-container ul label {
  color: #ffffff;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* FROMS - WIZARD*/
/*================================================*/
.form-wizard .tab-steps ul {
  list-style: none;
  padding: 0px;
}

.form-wizard .tab-steps ul li {
  display: inline-block;
  padding-top: 5px;
  position: relative;
  -webkit-transition-property: margin;
  transition-property: margin;
  -webkit-transition-duration: 0.25s;
  transition-duration: 0.25s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}

.form-wizard .tab-steps ul li a {
  padding: 10px 15px;
  background-color: #ececec;
  font-size: 16px;
  line-height: 26px;
  color: #999999;
  border-radius: 4px;
  min-width: 100px;
  display: block;
}

.form-wizard .tab-steps ul li a .tab-number {
  margin-right: 6px;
  border-radius: 50%;
  border: 2px solid #999999;
  width: 26px;
  height: 26px;
  display: inline-block;
  text-align: center;
  vertical-align: middle;
  font-size: 14px;
  line-height: 22px;
}

.form-wizard .tab-steps ul li.active a {
  background: <?php echo $panel_color; ?>;
  color: #ffffff;
}

.form-wizard .tab-steps ul li.active a .tab-number {
  border-color: #f7f7f7;
}

.form-wizard .tab-content {
  min-height: 100px;
  padding: 10px;
  margin: 15px 0px;
}

.form-wizard .tab-buttons .next,
.form-wizard .tab-buttons .finish {
  float: right;
}

.form-wizard .tab-buttons .finish {
  margin-left: 10px;
}

.form-wizard.wizard-block .tab-steps ul {
  display: table;
  width: 100%;
}

.form-wizard.wizard-block .tab-steps ul li {
  display: table-cell;
  text-align: center;
  padding-right: 4px;
}

.form-wizard.wizard-block .tab-steps ul li:last-child {
  padding-right: 0px;
}

.form-wizard.wizard-arrows .tab-steps li {
  min-width: 100px;
}

.form-wizard.wizard-arrows .tab-steps li a {
  padding-right: 25px;
  padding-left: 10px;
  position: relative;
  height: 46px;
}

.form-wizard.wizard-arrows .tab-steps li a:before, .form-wizard.wizard-arrows .tab-steps li a:after {
  content: "";
  position: absolute;
  top: 0;
  left: -25px;
  width: 0;
  height: 0;
  border-color: #ececec #ececec #ececec transparent;
  border-style: solid;
  border-width: 23px 10px 23px 20px;
}

.form-wizard.wizard-arrows .tab-steps li a:before {
  border-color: #f7f7f7 #cccccc #cccccc transparent;
  left: -28px;
}

.form-wizard.wizard-arrows .tab-steps li:first-child a {
  padding-left: 25px;
}

.form-wizard.wizard-arrows .tab-steps li:first-child a:before, .form-wizard.wizard-arrows .tab-steps li:first-child a:after {
  content: none;
}

.form-wizard.wizard-arrows .tab-steps li.active a:after {
  border-color: <?php echo $panel_color; ?> <?php echo $panel_color; ?> <?php echo $panel_color; ?> transparent;
}

.form-wizard.wizard-icons .tab-steps ul {
  height: 90px;
}

.form-wizard.wizard-icons .tab-steps ul li {
  margin-right: 0px;
}

.form-wizard.wizard-icons .tab-steps ul li a {
  background: none;
  color: #ffffff;
  padding: 10px 0px;
}

.form-wizard.wizard-icons .tab-steps ul li a .tab-icon {
  border-radius: 50%;
  border: 2px solid #cccccc;
  width: 40px;
  height: 40px;
  display: inline-block;
  text-align: center;
  font-size: 18px;
  line-height: 36px;
  position: relative;
  z-index: 2;
  background: #cccccc;
  -webkit-transition-property: background;
  transition-property: background;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s;
  -webkit-transition-timing-function: ease-out;
  transition-timing-function: ease-out;
}

.form-wizard.wizard-icons .tab-steps ul li a .tab-text {
  padding: 5px 15px;
  font-size: 12px;
  position: absolute;
  top: 50px;
  display: block;
  width: 100%;
  color: #cccccc;
}

.form-wizard.wizard-icons .tab-steps ul li a:before {
  content: '';
  border-top: 2px solid #cccccc;
  position: absolute;
  top: 50%;
  left: -50%;
  width: 100%;
}

.form-wizard.wizard-icons .tab-steps ul li:first-child a:before {
  content: none;
}

.form-wizard.wizard-icons .tab-steps ul li.validated a {
  color: #ffffff;
}

.form-wizard.wizard-icons .tab-steps ul li.validated a:before {
  border-color: <?php echo $panel_color; ?>;
}

.form-wizard.wizard-icons .tab-steps ul li.validated a .tab-icon {
  border-color: <?php echo $panel_color; ?>;
  background: <?php echo $panel_color; ?>;
}

.form-wizard.wizard-icons .tab-steps ul li.validated a .tab-text {
  color: <?php echo $panel_color; ?>;
}

.form-wizard.wizard-icons .tab-steps ul li.active a {
  color: <?php echo $panel_color; ?>;
}

.form-wizard.wizard-icons .tab-steps ul li.active a:before {
  border-color: <?php echo $panel_color; ?>;
}

.form-wizard.wizard-icons .tab-steps ul li.active a .tab-icon {
  border-color: <?php echo $panel_color; ?>;
  background: #ffffff;
}

.form-wizard.wizard-icons .tab-steps ul li.active a .tab-text {
  color: <?php echo $panel_color; ?>;
}

@media only screen and (max-width: 991px) {
  .form-wizard.wizard-scroll-tabs .tab-steps ul, .form-wizard.wizard-arrows .tab-steps ul, .form-wizard.wizard-icons .tab-steps ul {
    display: block;
    overflow: hidden;
    white-space: nowrap;
  }
  .form-wizard.wizard-scroll-tabs .tab-steps ul li, .form-wizard.wizard-arrows .tab-steps ul li, .form-wizard.wizard-icons .tab-steps ul li {
    padding-right: 0px;
    display: inline-block;
    width: 100%;
  }
  .form-wizard.wizard-scroll-tabs .tab-steps ul li.validated, .form-wizard.wizard-arrows .tab-steps ul li.validated, .form-wizard.wizard-icons .tab-steps ul li.validated {
    margin-left: -100%;
  }
  .form-wizard.wizard-scroll-tabs .tab-steps ul li.validated.active, .form-wizard.wizard-arrows .tab-steps ul li.validated.active, .form-wizard.wizard-icons .tab-steps ul li.validated.active {
    margin-left: 0px;
  }
  .form-wizard.wizard-list-tabs .tab-steps ul li {
    padding-right: 0px;
    display: block;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* TABLES*/
/*================================================*/
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background: #88b93c;
  color: #FFF;
}

.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background: #fea223;
  color: #FFF;
}

.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background: #d2322d;
  color: #FFF;
}

.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background: #5bc0de;
  color: #FFF;
}

.table.text-center {
  text-align: center !important;
}

.table.text-center th {
  text-align: center !important;
}

.table.table-hover > tbody > tr:hover > td,
.table.table-hover > tbody > tr:hover > th {
  background-color: #ececec;
}

.table button.btn {
  margin-bottom: 0px;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* LIGHT-BOX*/
/*================================================*/
.gallery-wrap {
  padding: 5px;
}

.gallery-wrap .row > div {
  padding: 4px;
}

.unshown {
  visibility: hidden;
}

.shown {
  visibility: visible;
}

.badge {
  padding: 4px 8px;
  margin: 0 2px;
}

.badge.badge-xs {
  padding: 4px 6px;
  font-size: 10px;
}

.badge.badge-md {
  padding: 5px 8px;
  font-size: 14px;
  line-height: 1.5;
}

.badge.badge-lg {
  padding: 6px 10px;
  font-size: 16px;
  line-height: 1.4;
}

.badge.badge-top-right {
  position: absolute;
  top: -5px;
  right: -5px;
}

.badge.badge-top-left {
  position: absolute;
  top: -5px;
  left: -5px;
}

.badge.badge-bottom-right {
  position: absolute;
  bottom: -5px;
  right: -5px;
}

.badge.badge-bottom-left {
  position: absolute;
  bottom: -5px;
  left: -5px;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* WIDGETS - BOXES*/
/*================================================*/
.widgetbox .title {
  font-weight: bold;
  margin: 8px 0px;
}

.widgetbox .subtitle {
  margin: 3px 0px;
}

.widgetbox .icon {
  display: block;
}

.widgetbox.wbox-1 .title {
  margin-top: 0px;
  font-size: 28px;
  font-size: 2.1538461538rem;
  line-height: 28px;
  line-height: 2.1538461538rem;
}

.widgetbox.wbox-1 .subtitle {
  font-size: 18px;
  font-size: 1.3846153846rem;
  line-height: 18px;
  line-height: 1.3846153846rem;
}

.widgetbox.wbox-2 {
  text-align: right;
}

.widgetbox.wbox-2 .title {
  font-size: 28px;
  font-size: 2.1538461538rem;
  line-height: 28px;
  line-height: 2.1538461538rem;
}

.widgetbox.wbox-2 .subtitle {
  font-size: 14px;
  font-size: 1.0769230769rem;
  line-height: 14px;
  line-height: 1.0769230769rem;
}

.widgetbox.wbox-2 .icon {
  text-align: left;
  font-size: 60px;
  font-size: 4.6153846154rem;
}

.widgetbox.wbox-3 {
  text-align: center;
}

.widgetbox.wbox-3 a {
  color: #ffffff;
}

.widgetbox.wbox-3 .title {
  font-size: 22px;
  font-size: 1.6923076923rem;
  line-height: 22px;
  line-height: 1.6923076923rem;
}

.widgetbox.wbox-3 .subtitle {
  font-size: 14px;
  font-size: 1.0769230769rem;
  line-height: 14px;
  line-height: 1.0769230769rem;
  margin-bottom: 15px;
}

.widgetbox.wbox-3 .numbers {
  font-size: 20px;
  font-size: 1.5384615385rem;
  line-height: 20px;
  line-height: 1.5384615385rem;
  margin-bottom: 10px;
}

.widgetbox.wbox-3 .icon {
  margin-top: 15px;
  margin-bottom: 15px;
  font-size: 48px;
  font-size: 3.6923076923rem;
}

.widgetbox.wbox-4 {
  text-align: center;
  color: #ffffff;
}

.widgetbox.wbox-4 a {
  color: #ffffff;
}

.widgetbox.wbox-4 .title {
  font-size: 22px;
  font-size: 1.6923076923rem;
  line-height: 22px;
  line-height: 1.6923076923rem;
}

.widgetbox.wbox-4 .subtitle {
  font-size: 16px;
  font-size: 1.2307692308rem;
  line-height: 16px;
  line-height: 1.2307692308rem;
  font-weight: bold;
}

.widgetbox.wbox-4 .icon {
  margin-top: 15px;
  margin-bottom: 15px;
  font-size: 48px;
  font-size: 3.6923076923rem;
}

.widgetbox.wbox-4 .owl-theme .owl-nav {
  margin-top: 0px;
}

.widgetbox.wbox-4 .owl-theme .owl-dots .owl-dot span {
  background: rgba(255, 255, 255, 0.4);
}

.widgetbox.wbox-4 .owl-theme .owl-dots .owl-dot.active span, .widgetbox.wbox-4 .owl-theme .owl-dots .owl-dot:hover span {
  background: #ececec;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* WIDGETS - LISTS*/
/*================================================*/
.widget-list {
  position: relative;
}

.widget-list ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.widget-list.list-to-do .add-item {
  position: absolute;
  right: 15px;
  top: 10px;
  -webkit-box-shadow: 2px 2px 1px #ffffff !important;
          box-shadow: 2px 2px 1px #ffffff !important;
}

.widget-list.list-to-do .list-title {
  padding: 12px 10px;
  margin: 0;
}

.widget-list.list-to-do ul li {
  padding: 8px 10px;
}

.widget-list.list-to-do ul li:nth-child(odd) {
  background: #f7f7f7;
}

.widget-list.list-to-do ul li input[type="checkbox"]:checked + label {
  text-decoration: line-through;
}

.widget-list.list-to-do ul label {
  margin-bottom: 0px;
}

.widget-list.list-left-element li {
  background: #f7f7f7;
  margin-bottom: 3px;
}

.widget-list.list-left-element li:last-child {
  margin-bottom: 0px;
}

.widget-list.list-left-element li:hover {
  background: #ececec;
}

.widget-list.list-left-element li > a {
  display: table;
  padding: 6px 8px;
}

.widget-list.list-left-element .left-element, .widget-list.list-left-element .text {
  display: table-cell;
  vertical-align: middle;
}

.widget-list.list-left-element .left-element {
  min-width: 45px;
  height: 45px;
}

.widget-list.list-left-element .left-element i {
  font-size: 30px;
  padding: 8px;
}

.widget-list.list-left-element .left-element img {
  width: 100%;
  border-radius: 3px;
}

.widget-list.list-left-element .text {
  width: 90%;
  padding-left: 12px;
}

.widget-list.list-left-element .text .title {
  display: block;
  font-size: 16px;
  color: #000000;
}

.widget-list.list-left-element .text .subtitle {
  color: #999999;
}

.widget-list.list-left-element.list-sm ul li > a {
  padding: 4px 8px;
}

.widget-list.list-left-element.list-sm ul li > a .left-element {
  max-width: 30px;
  height: 30px;
}

.widget-list.list-left-element.list-sm ul li > a .left-element i {
  font-size: 20px;
  padding: 5px;
}

.widget-list.list-left-element.list-sm ul li > a .text {
  white-space: nowrap;
}

.widget-list.list-left-element.list-sm ul li > a .text .title {
  font-size: 13px;
  display: inline-block;
}

.widget-list.list-left-element.list-sm ul li > a .text .subtitle {
  font-size: 11px;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* WIDGETS - POSTS*/
/*================================================*/
.widget-post .panel-header {
  position: relative;
  padding: 0px;
}

.widget-post .panel-header img {
  width: 100%;
}

.widget-post .panel-header .main-tag {
  position: absolute;
  width: 100%;
  text-align: center;
  top: -8px;
}

.widget-post .panel-header .main-tag span {
  background-color: #f7f7f7;
  padding: 4px 10px;
  border-radius: 3px;
  text-transform: uppercase;
  font-size: 10px;
  letter-spacing: 3px;
  font-weight: bold;
}

.widget-post .panel-header .group-tag {
  position: absolute;
  bottom: 8px;
  padding-left: 5px;
}

.widget-post .panel-header .group-tag .badge {
  letter-spacing: 2px;
  border-radius: 3px;
  background-color: #202020;
  color: #ffffff;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* WIDGETS - TIMELINES*/
/*================================================*/
.timeline {
  position: relative;
}

.timeline:before {
  content: '';
  position: absolute;
  top: 4px;
  left: 20px;
  height: 100%;
  width: 3px;
  background: #cccccc;
}

.timeline .timeline-box {
  margin-bottom: 20px;
  position: relative;
}

.timeline .timeline-box .timeline-icon {
  position: absolute;
  top: 4px;
  left: 7px;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  font-size: 16px;
  background: #cccccc;
  text-align: center;
}

.timeline .timeline-box .timeline-icon i {
  display: block;
  width: 30px;
  height: 30px;
  position: relative;
  top: 6px;
  color: #ffffff;
}

.timeline .timeline-box .timeline-content {
  position: relative;
  margin-left: 54px;
  background: white;
  border-radius: 4px 4px 0px 0px;
  padding: 8px 15px;
}

.timeline .timeline-box .timeline-content:before {
  font-family: 'FontAwesome';
  font-size: 24px;
  font-size: 1.8461538462rem;
  content: '\f0d9';
  color: #ffffff;
  position: absolute;
  top: 6px;
  left: -8px;
}

.timeline .timeline-box .timeline-content .tl-title {
  margin-top: 5px;
}

.timeline .timeline-box .timeline-footer {
  margin-left: 54px;
  padding: 3px 8px;
  background: #f7f7f7;
  border-radius: 0px 0px 4px 4px;
}

.timeline .timeline-box .timeline-footer span {
  font-size: 10px;
  color: #999999;
}

.timeline.tl-right:before {
  left: auto;
  right: 20px;
}

.timeline.tl-right .timeline-box .timeline-icon {
  position: absolute;
  right: 7px;
  left: initial;
}

.timeline.tl-right .timeline-box .timeline-content {
  margin-right: 54px;
  margin-left: 0px;
}

.timeline.tl-right .timeline-box .timeline-content:before {
  right: -8px;
  content: '\f0da';
  left: initial;
}

.timeline.tl-right .timeline-box .timeline-footer {
  margin-right: 54px;
  margin-left: 0px;
  text-align: right;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* PAGES - ACCOUNTS*/
/*================================================*/
html body {
  min-height: 100vh;
}

html.accounts .page-body {
  padding-left: 10px;
  padding-right: 10px;
  padding-bottom: 50px;
}

html.accounts .logo {
  max-width: 420px;
  margin: 20px auto 0px;
  margin-bottom: 40px;
}

html.accounts .logo img {
  display: block;
  margin: auto;
  width: 25%;
  min-width: 114px;
  margin-bottom: -75px;
}

html.accounts .box {
  background: #ffffff;
  border-radius: 5px;
  padding: 15px;
  max-width: 420px;
  margin: 20px auto 0px;
}

html.sign-in body {
  background: #f7f7f7;
}

html.sign-in body hr {
  border-color: #cccccc;
  width: 90%;
  margin: 15px auto;
}

html.forgot-password body {
  background: #1ca88b;
}

html.lock-screen {
  background: <?php echo $panel_color; ?>;
}

html.lock-screen body {
  background: url("../../images/bg/pattern.png") top center no-repeat;
}

html.lock-screen .wrap .box {
  max-width: 350px;
  padding: 0px;
}

html.lock-screen .wrap .panel .panel-content {
  border-radius: 5px;
}

html.lock-screen .logo {
  max-width: 350px;
  margin-bottom: 50px;
}

html.lock-screen .logo .avatar {
  margin: auto;
  max-width: 150px;
  -webkit-box-shadow: 1px 1px 4px rgba(255, 255, 255, 0.8);
          box-shadow: 1px 1px 4px rgba(255, 255, 255, 0.8);
  border-radius: 8px;
  background: #116655;
  border: 2px solid #126f5c;
  padding: 2px;
}

html.lock-screen .logo .avatar img {
  width: 100%;
  border-radius: 8px;
  border: 2px solid #0b4338;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* PAGES - ERRORS*/
/*================================================*/
.error-number,
.error-name,
.error-text {
  text-align: center;
}

.error-number {
  font-size: 130px;
  font-size: 10rem;
  line-height: 130px;
  line-height: 10rem;
  color: <?php echo $panel_color; ?>;
}

.error-name {
  margin: 0px;
}

.error-text {
  margin-top: 20px;
  font-size: 14px;
  font-size: 1.0769230769rem;
}

html.error-500 .page-body,
html.error-404 .page-body {
  padding: 10px;
}

html.error-500 body {
  background: <?php echo $panel_color; ?>;
}

html.error-404 body {
  background: #ececec;
}

@media only screen and (max-width: 767px) {
  .error-number {
    font-size: 90px;
    font-size: 6.9230769231rem;
    line-height: 90px;
    line-height: 6.9230769231rem;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* PAGES - FAQ*/
/*================================================*/
.faq-accordion .panel {
  border-radius: 0px;
  margin: 0px;
}

.faq-accordion .panel .panel-header,
.faq-accordion .panel .panel-footer {
  border-radius: 0px;
}

.faq-accordion .panel .panel-header .panel-title {
  font-weight: normal;
  font-size: 14px;
  font-size: 1.0769230769rem;
  line-height: 20px;
  line-height: 1.5384615385rem;
  padding: 8px 12px;
}

.faq-accordion .panel .panel-content {
  margin: 15px 20px;
  background: #fbe5e5;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* PAGES - USER PROFILE*/
/*================================================*/
.profile-photo {
  max-width: 140px;
  display: inline-block;
  vertical-align: top;
}

.profile-photo img {
  width: 100%;
  border-radius: 3px;
}

.user-header-info {
  display: inline-block;
  margin-left: 20px;
}

.user-header-info .user-name {
  color: #585858;
}

.user-header-info .user-position {
  padding: 4px 12px;
  display: inline-block;
  border-radius: 3px;
  margin-top: 0;
  background-color: <?php echo $panel_color; ?>;
  color: #fff;
}

.user-header-info .user-social-media {
  position: absolute;
  margin-top: 5px;
}

.user-header-info .user-social-media a {
  color: #999999;
}

.user-header-info .user-social-media a:hover {
  color: <?php echo $panel_color; ?>;
}

ul.user-contact-info {
  list-style: none;
  padding: 0;
}

ul.user-contact-info > li {
  padding: 4px 0px;
  border-bottom: 1px solid #ececec;
}

ul.user-contact-info > li:last-child {
  border: none;
}

@media only screen and (max-width: 767px) {
  .user-header-info .user-social-media {
    position: initial;
  }
}

@media only screen and (max-width: 450px) {
  .profile-photo {
    display: block;
    max-width: initial;
    margin: auto !important;
  }
  .user-header-info {
    margin-left: 0px;
  }
  .user-header-info .user-name {
    margin-top: 20px;
  }
}

.search-results-list {
  padding: 10px 15px;
}

.search-results-list .search-item:nth-of-type(odd) {
  background: #f7f7f7;
}

.search-results-list .search-item {
  padding: 8px;
  border-top: 1px solid #ddd;
}

.search-results-list .search-item:hover {
  background-color: #ececec;
}

.search-results-list .search-item p {
  line-height: 16px;
}

.search-results-list .search-item .search-title {
  color: #404040;
  text-decoration: underline;
}

.search-results-list .search-item .search-title:hover {
  color: #1fbe9d;
}

.search-results-grid .search-item-content {
  height: 200px;
}

.search-results-grid .search-item-content .search-title {
  color: #404040;
  text-decoration: underline;
}

.search-results-grid .search-item-content .search-title:hover {
  color: #1fbe9d;
}

.search-results-grid .search-item-content .text {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

.search-results-grid .search-item-content .badge {
  padding: 4px 6px;
  font-size: 10px;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* PAGES - PROJECTS List*/
/*================================================*/
.projects-list .p-progress,
.project-detail .p-progress {
  position: relative;
  float: left;
  text-align: center;
  margin-right: 20px;
  padding-top: 5px;
}

.projects-list .p-progress .value,
.project-detail .p-progress .value {
  position: absolute;
  top: 50%;
  margin-top: -10px;
  font-weight: bold;
  display: block;
  left: 0px;
  right: 0px;
}

.projects-list .header-project-list,
.projects-list .item-project-list {
  text-align: center;
  padding: 6px;
  margin: 0px;
}

.projects-list .header-project-list {
  font-size: 12px;
  font-weight: bold;
  border-bottom: 2px solid #cccccc;
}

.projects-list .header-project-list .h-progress {
  float: left;
  margin-right: 20px;
  width: 50px;
}

.projects-list .item-project-list:nth-of-type(even) {
  background: #f7f7f7;
}

.projects-list .item-project-list .p-project {
  text-align: left;
}

.projects-list .item-project-list .p-project .p-name {
  font-weight: bold;
  margin-bottom: 0px;
  font-size: 15px;
  line-height: 18px;
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  color: #585858;
}

.projects-list .item-project-list .p-project .p-update {
  display: block;
}

.projects-list .item-project-list .p-tags,
.projects-list .item-project-list .p-options,
.projects-list .item-project-list .p-deadline {
  padding-top: 20px;
}

.projects-list .item-project-list .p-tags .badge {
  border-radius: 3px;
}

.projects-list .item-project-list .p-deadline {
  font-weight: bold;
}

.projects-list .item-project-list .p-deadline.days {
  color: #d2322d;
}

.projects-list .item-project-list .p-deadline.weaks {
  color: #fea223;
}

.projects-list .item-project-list .p-options .btn {
  border-color: #cccccc;
  padding: 6px 8px;
}

@media only screen and (max-width: 1199px) {
  .projects-list .header-project-list {
    display: none;
  }
  .projects-list .item-project-list {
    border-bottom: 1px solid #cccccc;
  }
  .projects-list .item-project-list .p-project {
    height: 65px;
  }
  .projects-list .item-project-list .p-tags,
  .projects-list .item-project-list .p-options,
  .projects-list .item-project-list .p-deadline {
    padding-top: 10px;
  }
  .projects-list .item-project-list .p-deadline:before {
    content: 'Deadline: ';
    color: #999999;
    font-size: 11px;
  }
}

@media only screen and (max-width: 767px) {
  .projects-list .item-project-list .p-project {
    height: auto;
  }
  .projects-list .item-project-list .p-project .p-progress {
    float: none;
    margin-right: 0px;
  }
  .projects-list .item-project-list .p-project .p-name {
    white-space: initial;
    text-align: center;
  }
  .projects-list .item-project-list .p-project .p-update {
    text-align: center;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* PAGES - PROJECTS Detail*/
/*================================================*/
.project-detail .p-data {
  margin-left: 100px;
}

.project-detail .p-data .p-name {
  color: #585858;
  margin-bottom: 3px;
  font-size: 18px;
}

.project-detail .p-data .p-update {
  margin-bottom: 5px;
  padding-bottom: 5px;
  border-bottom: 1px solid #cccccc;
  font-size: 12px;
}

.project-detail .p-data .p-status {
  float: right;
  margin-left: 10px;
}

.project-detail .p-data .p-status .badge {
  border-radius: 3px;
}

.project-detail .p-data .p-deadline {
  text-align: right;
}

.project-detail .p-data .p-deadline:after {
  content: "|";
  padding-left: 8px;
}

.p-info ul {
  list-style: none;
  padding: 0px;
  width: 49%;
  display: inline-block;
}

.p-info ul li {
  padding: 2px 5px;
  font-size: 14px;
  border-bottom: 1px solid #cccccc;
}

.p-info ul li:nth-of-type(odd) {
  background: #f7f7f7;
}

.p-info ul li:last-child {
  border-bottom: none;
}

.p-info span {
  color: <?php echo $panel_color; ?>;
  font-weight: bold;
  font-size: 13px;
  display: block;
}

.p-info .p-description {
  padding: 5px;
}

@media only screen and (max-width: 767px) {
  .project-detail .p-progress {
    margin-right: 0px;
    display: block;
    float: none;
  }
  .project-detail .p-data {
    margin-left: 0px;
  }
  .project-detail .p-data .p-name {
    margin-bottom: 5px;
  }
  .p-info ul {
    width: 100%;
    display: block;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* HELPERS - BACKGROUNDS &  BORDERS*/
/*================================================*/
.bg-success {
  background: #88b93c !important;
}

.bg-warning {
  background: #fea223 !important;
}

.bg-danger {
  background: #d2322d !important;
}

.bg-info {
  background: #5bc0de !important;
}

.bg-lighter-1 {
  background: #1fbe9d !important;
}

.bg-lighter-2 {
  background: #2adcb7 !important;
}

.bg-primary {
  background: <?php echo $panel_color; ?> !important;
}

.bg-darker-1 {
  background: #126f5c !important;
}

.bg-darker-2 {
  background: #0f5d4d !important;
}

.bg-scale-0 {
  background: #f7f7f7 !important;
}

.bg-scale-1 {
  background: #ececec !important;
}

.bg-scale-2 {
  background: #cccccc !important;
}

.bg-scale-3 {
  background: #999999 !important;
}

.bg-scale-4 {
  background: #585858 !important;
}

.bg-scale-5 {
  background: #202020 !important;
}

.bg-scale-6 {
  background: #151515 !important;
}

.bg-none {
  background: none !important;
}

.bg-trans {
  background: rgba(255, 255, 255, 0.4);
}

.b-rounded {
  border-radius: 5px;
}

.b-straight {
  border-radius: 0px !important;
}

.b-none {
  border: 0 solid #ccc !important;
}

.b-xs {
  border: 1px solid #ccc !important;
}

.b-sm {
  border: 2px solid #ccc !important;
}

.b-md {
  border: 3px solid #ccc !important;
}

.b-lg {
  border: 4px solid #ccc !important;
}

.b-xl {
  border: 5px solid #ccc !important;
}

.b-xlg {
  border: 6px solid #ccc !important;
}

.bt-none {
  border-top: 0 solid #ccc !important;
}

.bt-xs {
  border-top: 1px solid #ccc !important;
}

.bt-sm {
  border-top: 2px solid #ccc !important;
}

.bt-md {
  border-top: 3px solid #ccc !important;
}

.bt-lg {
  border-top: 4px solid #ccc !important;
}

.bt-xl {
  border-top: 5px solid #ccc !important;
}

.bt-xlg {
  border-top: 6px solid #ccc !important;
}

.bb-none {
  border-bottom: 0 solid #ccc !important;
}

.bb-xs {
  border-bottom: 1px solid #ccc !important;
}

.bb-sm {
  border-bottom: 2px solid #ccc !important;
}

.bb-md {
  border-bottom: 3px solid #ccc !important;
}

.bb-lg {
  border-bottom: 4px solid #ccc !important;
}

.bb-xl {
  border-bottom: 5px solid #ccc !important;
}

.bb-xlg {
  border-bottom: 6px solid #ccc !important;
}

.bl-none {
  border-left: 0 solid #ccc !important;
}

.bl-xs {
  border-left: 1px solid #ccc !important;
}

.bl-sm {
  border-left: 2px solid #ccc !important;
}

.bl-md {
  border-left: 3px solid #ccc !important;
}

.bl-lg {
  border-left: 4px solid #ccc !important;
}

.bl-xl {
  border-left: 5px solid #ccc !important;
}

.bl-xlg {
  border-left: 6px solid #ccc !important;
}

.br-none {
  border-right: 0 solid #ccc !important;
}

.br-xs {
  border-right: 1px solid #ccc !important;
}

.br-sm {
  border-right: 2px solid #ccc !important;
}

.br-md {
  border-right: 3px solid #ccc !important;
}

.br-lg {
  border-right: 4px solid #ccc !important;
}

.br-xl {
  border-right: 5px solid #ccc !important;
}

.br-xlg {
  border-right: 6px solid #ccc !important;
}

.b-success {
  border-color: #88b93c !important;
}

.b-warning {
  border-color: #fea223 !important;
}

.b-danger {
  border-color: #d2322d !important;
}

.b-info {
  border-color: #5bc0de !important;
}

.b-lighter-1 {
  border-color: #1fbe9d !important;
}

.b-lighter-2 {
  border-color: #2adcb7 !important;
}

.b-primary {
  border-color: <?php echo $panel_color; ?> !important;
}

.b-darker-1 {
  border-color: #126f5c !important;
}

.b-darker-2 {
  border-color: #0f5d4d !important;
}

.b-scale-0 {
  border-color: #f7f7f7 !important;
}

.b-scale-1 {
  border-color: #ececec !important;
}

.b-scale-2 {
  border-color: #cccccc !important;
}

.b-scale-3 {
  border-color: #999999 !important;
}

.b-scale-4 {
  border-color: #585858 !important;
}

.b-scale-5 {
  border-color: #202020 !important;
}

.b-scale-6 {
  border-color: #151515 !important;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* HELPERS - MARGINS &  PADDINGS*/
/*================================================*/
.m-auto {
  margin: 0 auto !important;
}

.m-none {
  margin: 0 !important;
}

.m-xs {
  margin: 5px !important;
}

.m-sm {
  margin: 10px !important;
}

.m-md {
  margin: 15px !important;
}

.m-lg {
  margin: 20px !important;
}

.m-xl {
  margin: 25px !important;
}

.m-xlg {
  margin: 30px !important;
}

.mt-none {
  margin-top: 0 !important;
}

.mt-xs {
  margin-top: 5px !important;
}

.mt-sm {
  margin-top: 10px !important;
}

.mt-md {
  margin-top: 15px !important;
}

.mt-lg {
  margin-top: 20px !important;
}

.mt-xl {
  margin-top: 25px !important;
}

.mt-xlg {
  margin-top: 30px !important;
}

.mb-none {
  margin-bottom: 0 !important;
}

.mb-xs {
  margin-bottom: 5px !important;
}

.mb-sm {
  margin-bottom: 10px !important;
}

.mb-md {
  margin-bottom: 15px !important;
}

.mb-lg {
  margin-bottom: 20px !important;
}

.mb-xl {
  margin-bottom: 25px !important;
}

.mb-xlg {
  margin-bottom: 30px !important;
}

.ml-none {
  margin-left: 0 !important;
}

.ml-xs {
  margin-left: 5px !important;
}

.ml-sm {
  margin-left: 10px !important;
}

.ml-md {
  margin-left: 15px !important;
}

.ml-lg {
  margin-left: 20px !important;
}

.ml-xl {
  margin-left: 25px !important;
}

.ml-xlg {
  margin-left: 30px !important;
}

.mr-none {
  margin-right: 0 !important;
}

.mr-xs {
  margin-right: 5px !important;
}

.mr-sm {
  margin-right: 10px !important;
}

.mr-md {
  margin-right: 15px !important;
}

.mr-lg {
  margin-right: 20px !important;
}

.mr-xl {
  margin-right: 25px !important;
}

.mr-xlg {
  margin-right: 30px !important;
}

.mv-none {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.mv-xs {
  margin-top: 5px !important;
  margin-bottom: 5px !important;
}

.mv-sm {
  margin-top: 10px !important;
  margin-bottom: 10px !important;
}

.mv-md {
  margin-top: 15px !important;
  margin-bottom: 15px !important;
}

.mv-lg {
  margin-top: 20px !important;
  margin-bottom: 20px !important;
}

.mv-xl {
  margin-top: 25px !important;
  margin-bottom: 25px !important;
}

.mv-xlg {
  margin-top: 30px !important;
  margin-bottom: 30px !important;
}

.mh-none {
  margin-left: 0 !important;
  margin-right: 0 !important;
}

.mh-xs {
  margin-left: 5px !important;
  margin-right: 5px !important;
}

.mh-sm {
  margin-left: 10px !important;
  margin-right: 10px !important;
}

.mh-md {
  margin-left: 15px !important;
  margin-right: 15px !important;
}

.mh-lg {
  margin-left: 20px !important;
  margin-right: 20px !important;
}

.mh-xl {
  margin-left: 25px !important;
  margin-right: 25px !important;
}

.mh-xlg {
  margin-left: 30px !important;
  margin-right: 30px !important;
}

.p-none {
  padding: 0 !important;
}

.p-xs {
  padding: 5px !important;
}

.p-sm {
  padding: 10px !important;
}

.p-md {
  padding: 15px !important;
}

.p-lg {
  padding: 20px !important;
}

.p-xl {
  padding: 25px !important;
}

.p-xlg {
  padding: 30px !important;
}

.pt-none {
  padding-top: 0 !important;
}

.pt-xs {
  padding-top: 5px !important;
}

.pt-sm {
  padding-top: 10px !important;
}

.pt-md {
  padding-top: 15px !important;
}

.pt-lg {
  padding-top: 20px !important;
}

.pt-xl {
  padding-top: 25px !important;
}

.pt-xlg {
  padding-top: 30px !important;
}

.pb-none {
  padding-bottom: 0 !important;
}

.pb-xs {
  padding-bottom: 5px !important;
}

.pb-sm {
  padding-bottom: 10px !important;
}

.pb-md {
  padding-bottom: 15px !important;
}

.pb-lg {
  padding-bottom: 20px !important;
}

.pb-xl {
  padding-bottom: 25px !important;
}

.pb-xlg {
  padding-bottom: 30px !important;
}

.pl-none {
  padding-left: 0 !important;
}

.pl-xs {
  padding-left: 5px !important;
}

.pl-sm {
  padding-left: 10px !important;
}

.pl-md {
  padding-left: 15px !important;
}

.pl-lg {
  padding-left: 20px !important;
}

.pl-xl {
  padding-left: 25px !important;
}

.pl-xlg {
  padding-left: 30px !important;
}

.pr-none {
  padding-right: 0 !important;
}

.pr-xs {
  padding-right: 5px !important;
}

.pr-sm {
  padding-right: 10px !important;
}

.pr-md {
  padding-right: 15px !important;
}

.pr-lg {
  padding-right: 20px !important;
}

.pr-xl {
  padding-right: 25px !important;
}

.pr-xlg {
  padding-right: 30px !important;
}

.pv-none {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.pv-xs {
  padding-top: 5px !important;
  padding-bottom: 5px !important;
}

.pv-sm {
  padding-top: 10px !important;
  padding-bottom: 10px !important;
}

.pv-md {
  padding-top: 15px !important;
  padding-bottom: 15px !important;
}

.pv-lg {
  padding-top: 20px !important;
  padding-bottom: 20px !important;
}

.pv-xl {
  padding-top: 25px !important;
  padding-bottom: 25px !important;
}

.pv-xlg {
  padding-top: 30px !important;
  padding-bottom: 30px !important;
}

.ph-none {
  padding-left: 0 !important;
  padding-right: 0 !important;
}

.ph-xs {
  padding-left: 5px !important;
  padding-right: 5px !important;
}

.ph-sm {
  padding-left: 10px !important;
  padding-right: 10px !important;
}

.ph-md {
  padding-left: 15px !important;
  padding-right: 15px !important;
}

.ph-lg {
  padding-left: 20px !important;
  padding-right: 20px !important;
}

.ph-xl {
  padding-left: 25px !important;
  padding-right: 25px !important;
}

.ph-xlg {
  padding-left: 30px !important;
  padding-right: 30px !important;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* HELPERS - TEXT*/
/*================================================*/
.color-success {
  color: #88b93c !important;
}

.color-success a {
  color: #88b93c !important;
}

.color-success a:hover, .color-success a:active, .color-success a:focus {
  color: #a0cb5d !important;
}

.color-warning {
  color: #fea223 !important;
}

.color-warning a {
  color: #fea223 !important;
}

.color-warning a:hover, .color-warning a:active, .color-warning a:focus {
  color: #feb756 !important;
}

.color-danger {
  color: #d2322d !important;
}

.color-danger a {
  color: #d2322d !important;
}

.color-danger a:hover, .color-danger a:active, .color-danger a:focus {
  color: #db5b57 !important;
}

.color-info {
  color: #5bc0de !important;
}

.color-info a {
  color: #5bc0de !important;
}

.color-info a:hover, .color-info a:active, .color-info a:focus {
  color: #85d0e7 !important;
}

.color-lighter-1 {
  color: #1fbe9d !important;
}

.color-lighter-1 a {
  color: #1fbe9d !important;
}

.color-lighter-1 a:hover, .color-lighter-1 a:active, .color-lighter-1 a:focus {
  color: #23d4af !important;
}

.color-lighter-2 {
  color: #2adcb7 !important;
}

.color-lighter-2 a {
  color: #2adcb7 !important;
}

.color-lighter-2 a:hover, .color-lighter-2 a:active, .color-lighter-2 a:focus {
  color: #40e0bf !important;
}

.color-primary {
  color: <?php echo $panel_color; ?> !important;
}

.color-primary a {
  color: <?php echo $panel_color; ?> !important;
}

.color-primary a:hover, .color-primary a:active, .color-primary a:focus {
  color: #1ca88b !important;
}

.color-darker-1 {
  color: #126f5c !important;
}

.color-darker-1 a {
  color: #126f5c !important;
}

.color-darker-1 a:hover, .color-darker-1 a:active, .color-darker-1 a:focus {
  color: #16856e !important;
}

.color-darker-2 {
  color: #0f5d4d !important;
}

.color-darker-2 a {
  color: #0f5d4d !important;
}

.color-darker-2 a:hover, .color-darker-2 a:active, .color-darker-2 a:focus {
  color: #137360 !important;
}

.color-dark {
  color: #000000 !important;
}

.color-dark a {
  color: #000000 !important;
}

.color-dark a:hover, .color-dark a:active, .color-dark a:focus {
  color: #1a1919 !important;
}

.color-muted {
  color: #999999 !important;
}

.color-muted a {
  color: #999999 !important;
}

.color-muted a:hover, .color-muted a:active, .color-muted a:focus {
  color: #b3b2b2 !important;
}

.color-light {
  color: #ffffff !important;
}

.color-light a {
  color: #ffffff !important;
}

.color-light a:hover, .color-light a:active, .color-light a:focus {
  color: white !important;
}

.color-scale-0 {
  color: #f7f7f7 !important;
}

.color-scale-0 a {
  color: #f7f7f7 !important;
}

.color-scale-0 a:hover, .color-scale-0 a:active, .color-scale-0 a:focus {
  color: white !important;
}

.color-scale-1 {
  color: #ececec !important;
}

.color-scale-1 a {
  color: #ececec !important;
}

.color-scale-1 a:hover, .color-scale-1 a:active, .color-scale-1 a:focus {
  color: white !important;
}

.color-scale-2 {
  color: #cccccc !important;
}

.color-scale-2 a {
  color: #cccccc !important;
}

.color-scale-2 a:hover, .color-scale-2 a:active, .color-scale-2 a:focus {
  color: #e6e5e5 !important;
}

.color-scale-3 {
  color: #999999 !important;
}

.color-scale-3 a {
  color: #999999 !important;
}

.color-scale-3 a:hover, .color-scale-3 a:active, .color-scale-3 a:focus {
  color: #b3b2b2 !important;
}

.color-scale-4 {
  color: #585858 !important;
}

.color-scale-4 a {
  color: #585858 !important;
}

.color-scale-4 a:hover, .color-scale-4 a:active, .color-scale-4 a:focus {
  color: #727171 !important;
}

.color-scale-5 {
  color: #202020 !important;
}

.color-scale-5 a {
  color: #202020 !important;
}

.color-scale-5 a:hover, .color-scale-5 a:active, .color-scale-5 a:focus {
  color: #3a3939 !important;
}

.color-scale-6 {
  color: #151515 !important;
}

.color-scale-6 a {
  color: #151515 !important;
}

.color-scale-6 a:hover, .color-scale-6 a:active, .color-scale-6 a:focus {
  color: #2f2e2e !important;
}

.color-w {
  color: #fff !important;
}

.color-w a {
  color: #fff !important;
}

.color-b {
  color: #000 !important;
}

.color-b a {
  color: #000 !important;
}

.color-b a:hover, .color-b a:active, .color-b a:focus {
  color: #1a1919 !important;
}

.text-xs {
  font-size: 10px;
  font-size: 0.7692307692rem;
  line-height: 19px;
  line-height: 1.4615384615rem;
}

.text-sm {
  font-size: 13px;
  font-size: 1rem;
  line-height: 22px;
  line-height: 1.6923076923rem;
}

.text-md {
  font-size: 16px;
  font-size: 1.2307692308rem;
  line-height: 25px;
  line-height: 1.9230769231rem;
}

.text-lg {
  font-size: 19px;
  font-size: 1.4615384615rem;
  line-height: 28px;
  line-height: 2.1538461538rem;
}

.text-xl {
  font-size: 25px;
  font-size: 1.9230769231rem;
  line-height: 34px;
  line-height: 2.6153846154rem;
}

.text-normal {
  font-weight: initial !important;
}

.text-bold {
  font-weight: bold !important;
}

.text-italic {
  font-style: italic !important;
}

.text-uppercase {
  text-transform: uppercase;
}

.text-lowercase {
  text-transform: lowercase;
}

.text-capitalize {
  text-transform: capitalize;
}

.ws-nowrap {
  white-space: nowrap;
}

.code {
  background-color: #f9f2f4;
  color: #d2322d !important;
  font-size: 12px !important;
  line-height: 14px !important;
  padding: 2px 3px;
  font-family: monospace;
  font-weight: initial;
  font-style: initial;
  text-transform: none;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* HELPERS - DISPLAY &  POSITIONS*/
/*================================================*/
.d-ib {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.p-absolute {
  position: absolute !important;
}

.p-relative {
  position: relative !important;
}

.va-middle {
  vertical-align: middle !important;
}

/* HELPERS - X-ELEMENTS*/
/*================================================*/
.x-success {
  background: #88b93c;
  border-color: #88b93c;
}

.x-success:hover, .x-success:focus, .x-success:active, .x-success.x-o:hover, .x-success.x-o:focus, .x-success.x-o:active {
  background: #719a32;
  color: #FFF;
}

.x-success.x-o {
  color: #88b93c;
}

.x-success.x-o:hover, .x-success.x-o:focus, .x-success.x-o:active {
  color: #FFF;
}

.x-warning {
  background: #fea223;
  border-color: #fea223;
}

.x-grey {
  background: #656565;
  border-color: #656565;
}

.x-warning:hover, .x-warning:focus, .x-warning:active, .x-warning.x-o:hover, .x-warning.x-o:focus, .x-warning.x-o:active {
  background: #f79001;
  color: #FFF;
}

.x-warning.x-o {
  color: #fea223;
}

.x-warning.x-o:hover, .x-warning.x-o:focus, .x-warning.x-o:active {
  color: #FFF;
}

.x-danger {
  background: #d2322d;
  border-color: #d2322d;
}

.x-danger:hover, .x-danger:focus, .x-danger:active, .x-danger.x-o:hover, .x-danger.x-o:focus, .x-danger.x-o:active {
  background: #b02a26;
  color: #FFF;
}

.x-danger.x-o {
  color: #d2322d;
}

.x-danger.x-o:hover, .x-danger.x-o:focus, .x-danger.x-o:active {
  color: #FFF;
}

.x-info {
  background: #5bc0de;
  border-color: #5bc0de;
}

.x-info:hover, .x-info:focus, .x-info:active, .x-info.x-o:hover, .x-info.x-o:focus, .x-info.x-o:active {
  background: #39b3d7;
  color: #FFF;
}

.x-info.x-o {
  color: #5bc0de;
}

.x-info.x-o:hover, .x-info.x-o:focus, .x-info.x-o:active {
  color: #FFF;
}

.x-lighter-1 {
  background: #1fbe9d;
  border-color: #1fbe9d;
  color: #ffffff;
}

.x-lighter-1:hover, .x-lighter-1:focus, .x-lighter-1:active, .x-lighter-1.x-o:hover, .x-lighter-1.x-o:focus, .x-lighter-1.x-o:active {
  background: #199b80;
  color: #ffffff;
}

.x-lighter-1.x-o {
  color: #1fbe9d;
}

.x-lighter-1.x-o:hover, .x-lighter-1.x-o:focus, .x-lighter-1.x-o:active {
  color: #ffffff;
}

.x-lighter-2 {
  background: #2adcb7;
  border-color: #2adcb7;
  color: #ffffff;
}

.x-lighter-2:hover, .x-lighter-2:focus, .x-lighter-2:active, .x-lighter-2.x-o:hover, .x-lighter-2.x-o:focus, .x-lighter-2.x-o:active {
  background: #1fbe9d;
  color: #ffffff;
}

.x-lighter-2.x-o {
  color: #2adcb7;
}

.x-lighter-2.x-o:hover, .x-lighter-2.x-o:focus, .x-lighter-2.x-o:active {
  color: #ffffff;
}

.x-primary {
  background: <?php echo $panel_color; ?>;
  border-color: <?php echo $panel_color; ?>;
  color: #ffffff;
}

.x-primary:hover, .x-primary:focus, .x-primary:active, .x-primary.x-o:hover, .x-primary.x-o:focus, .x-primary.x-o:active {
  background: #126f5c;
  color: #ffffff;
}

.x-primary.x-o {
  color: <?php echo $panel_color; ?>;
}

.x-primary.x-o:hover, .x-primary.x-o:focus, .x-primary.x-o:active {
  color: #ffffff;
}

.x-darker-1 {
  background: #126f5c;
  border-color: #126f5c;
  color: #ffffff;
}

.x-darker-1:hover, .x-darker-1:focus, .x-darker-1:active, .x-darker-1.x-o:hover, .x-darker-1.x-o:focus, .x-darker-1.x-o:active {
  background: #0c4c3f;
  color: #ffffff;
}

.x-darker-1.x-o {
  color: #126f5c;
}

.x-darker-1.x-o:hover, .x-darker-1.x-o:focus, .x-darker-1.x-o:active {
  color: #ffffff;
}

.x-darker-2 {
  background: <?php echo $panel_color; ?>;
  border-color: <?php echo $panel_color; ?>;
  color: #ffffff;
}

.x-darker-2:hover, .x-darker-2:focus, .x-darker-2:active, .x-darker-2.x-o:hover, .x-darker-2.x-o:focus, .x-darker-2.x-o:active {
  background: <?php echo $btn_hover_color; ?>;
  color: #ffffff;
}

.x-darker-2.x-o {
  color: #0f5d4d;
}

.x-darker-2.x-o:hover, .x-darker-2.x-o:focus, .x-darker-2.x-o:active {
  color: #ffffff;
}

.x-o {
  background: none;
  font-weight: bold;
  border: 1px solid;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* TEMPLATE DEMOS*/
/*================================================*/
html.margin-padding .panel {
  -webkit-box-shadow: none;
          box-shadow: none;
}

html.margin-padding .code {
  display: block;
}

html.margin-padding .box-margin {
  border: 1px solid #fff;
  background: #ffad72;
  margin-bottom: 8px;
}

html.margin-padding .box-in {
  border: 1px solid #999999;
  background: #f7f7f7;
}

html.margin-padding .box-padding {
  margin-bottom: 8px;
}

html.margin-padding .box-padding .box-in {
  background: #a2fd8c;
}

.section-subtitle {
  margin-bottom: 15px;
}

.section-text {
  margin-top: -10px;
}

.highlight {
  color: <?php echo $panel_color; ?>;
  font-weight: bold;
}

.img-animated {
  margin: 0 auto;
  display: block;
  width: 100%;
  max-width: 200px;
}

.img-center {
  display: block;
  margin: auto;
}

.img-responsive {
  display: block;
  width: 100%;
}

.update-icon {
  margin-top: 5px;
  margin-right: 10px;
  float: right;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* COMPONENTS - NANO-SCROLL*/
/*================================================*/
.nano {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}

.nano > .nano-content {
  position: absolute;
  overflow: scroll;
  overflow-x: hidden;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.nano > .nano-content:focus {
  outline: thin dotted;
}

.nano > .nano-content::-webkit-scrollbar {
  display: none;
}

.nano.has-scrollbar > .nano-content::-webkit-scrollbar {
  display: block;
}

.nano > .nano-pane {
  display: block !important;
  background: rgba(0, 0, 0, 0.25);
  position: absolute;
  width: 5px;
  right: 0;
  top: 0;
  bottom: 0;
  visibility: hidden\9;
  /* Target only IE7 and IE8 with this hack */
  opacity: .01;
  -webkit-transition: .2s;
  transition: .2s;
  border-radius: 5px;
}

.nano > .nano-pane > .nano-slider {
  background: <?php echo $panel_color; ?>;
  position: relative;
  margin: 0 1px;
  border-radius: 3px;
}

.nano:hover > .nano-pane {
  visibility: visible\9;
  /* Target only IE7 and IE8 with this hack */
  opacity: 0.99;
}

.nano .nano-pane.active, .nano .nano-pane.flashed {
  visibility: visible\9;
  /* Target only IE7 and IE8 with this hack */
  opacity: 0.99;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* COMPONENTS - PNOTIFY*/
/*================================================*/
.ui-pnotify {
  top: 15px;
  right: 15px;
}

.ui-pnotify .ui-pnotify-container {
  padding: 15px 15px 15px 65px;
  border: none;
}

.ui-pnotify .ui-pnotify-container.pnotify-sharp {
  border-radius: 0px;
}

.ui-pnotify .ui-pnotify-container .ui-pnotify-icon {
  width: 50px;
  position: absolute;
  left: 5px;
  top: 15px;
  margin: 0;
  text-align: center;
}

.ui-pnotify .ui-pnotify-container .ui-pnotify-icon > span {
  height: 40px;
  width: 40px;
  display: inline-block;
  float: none;
  margin: 0;
  padding: 0;
  font-size: 26px;
  font-size: 2rem;
  line-height: 36px;
  line-height: 2.7692307692rem;
  border: 2px solid #FFF;
  border-radius: 50%;
}

.ui-pnotify .ui-pnotify-container .ui-pnotify-title {
  font-size: 16px;
  font-size: 1.2307692308rem;
  font-weight: bold;
}

.ui-pnotify .ui-pnotify-container .ui-pnotify-text {
  font-size: 13px;
  font-size: 1rem;
  line-height: 18px;
  line-height: 1.3846153846rem;
}

.ui-pnotify .ui-pnotify-container .ui-pnotify-closer,
.ui-pnotify .ui-pnotify-container .ui-pnotify-sticker {
  position: absolute;
  right: 12px;
  top: 6px;
}

.ui-pnotify .ui-pnotify-container .ui-pnotify-sticker {
  right: 26px;
}

.ui-pnotify.pnotify-no-icon .ui-pnotify-container {
  padding-left: 15px;
}

.ui-pnotify.stack-bar-top {
  right: 0;
  top: 0;
}

.ui-pnotify.stack-bar-bottom {
  margin-left: 15%;
  right: auto;
  bottom: 0;
  top: auto;
  left: auto;
}

.ui-pnotify.stack-modal {
  width: 100% !important;
  left: 0px !important;
  top: 35% !important;
  margin: 0px;
  -webkit-transition-duration: 0.3s !important;
  transition-duration: 0.3s !important;
}

.ui-pnotify.stack-modal .ui-pnotify-container {
  padding: 30px 25% 15px 25%;
}

.ui-pnotify.stack-modal .ui-pnotify-container .ui-pnotify-title {
  font-size: 26px;
  font-size: 2rem;
  line-height: 36px;
  line-height: 2.7692307692rem;
  margin-top: 4px;
  margin-bottom: 15px;
}

.ui-pnotify.stack-modal .ui-pnotify-container .ui-pnotify-icon {
  top: 0;
  left: 0;
  position: relative;
  margin-right: 10px;
}

.ui-pnotify.stack-modal .ui-pnotify-container .ui-pnotify-text {
  margin-bottom: 20px;
}

.ui-pnotify.pnotify-primary .ui-pnotify-container.alert {
  background: <?php echo $panel_color; ?> !important;
}

.ui-pnotify.pnotify-dark .ui-pnotify-container.alert {
  background: #000000 !important;
}

.ui-pnotify.pnotify-light .ui-pnotify-container.alert {
  background: #f7f7f7 !important;
  color: #999999 !important;
}

.ui-pnotify.pnotify-light .ui-pnotify-container.alert .ui-pnotify-icon > span {
  border-color: #999999;
}

.ui-pnotify-modal-overlay {
  background-color: rgba(0, 0, 0, 0.6) !important;
}

@media only screen and (max-width: 767px) {
  .ui-pnotify.stack-bar-bottom {
    margin-left: 0px;
    width: 100% !important;
  }
  .ui-pnotify.stack-modal .ui-pnotify-container {
    padding: 30px 10% 15px 10%;
  }
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* COMPONENTS - TOASTR*/
/*================================================*/
#toast-container > .toast {
  background-image: none !important;
}

#toast-container > .toast:before {
  position: fixed;
  font-family: FontAwesome;
  font-size: 24px;
  line-height: 18px;
  float: left;
  color: #FFF;
  padding-right: 0.5em;
  margin: auto 0.5em auto -1.5em;
}

#toast-container > div,
#toast-container > div:hover {
  -webkit-box-shadow: 0 0 12px #999999;
  box-shadow: 0 0 12px #999999;
}

#toast-container > .toast-warning:before {
  content: "\f12a";
}

#toast-container > .toast-error:before {
  content: "\f071";
}

#toast-container > .toast-info:before {
  content: "\f05a";
}

#toast-container > .toast-success:before {
  content: "\f00c";
}

.toast-success {
  background: #88b93c;
}

.toast-info {
  background: #126f5c;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* COMPONENTS - OWL-CAROUSEL*/
/*================================================*/
.owl-theme .owl-nav {
  margin-top: 10px;
  text-align: center;
  -webkit-tap-highlight-color: transparent;
}

.owl-theme .owl-nav [class*='owl-'] {
  color: #FFF;
  font-size: 14px;
  margin: 5px;
  padding: 4px 7px;
  background: #D6D6D6;
  display: inline-block;
  cursor: pointer;
  border-radius: 3px;
}

.owl-theme .owl-nav [class*='owl-']:hover {
  background: #869791;
  color: #FFF;
  text-decoration: none;
}

.owl-theme .owl-nav .disabled {
  opacity: 0.5;
  cursor: default;
}

.owl-theme .owl-nav.disabled + .owl-dots {
  margin-top: 10px;
}

.owl-theme .owl-dots {
  text-align: center;
  -webkit-tap-highlight-color: transparent;
}

.owl-theme .owl-dots .owl-dot {
  display: inline-block;
  zoom: 1;
  *display: inline;
}

.owl-theme .owl-dots .owl-dot span {
  width: 10px;
  height: 10px;
  margin: 5px 7px;
  background: #D6D6D6;
  display: block;
  -webkit-backface-visibility: visible;
  -webkit-transition: opacity 200ms ease;
  transition: opacity 200ms ease;
  border-radius: 30px;
}

.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
  background: #869791;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* COMPONENTS - SELECT2*/
/*================================================*/
.select-tag-success + span .select2-selection__choice {
  background: #88b93c !important;
  color: #FFF !important;
}

.select-tag-warning + span .select2-selection__choice {
  background: #fea223 !important;
  color: #FFF !important;
}

.select-tag-danger + span .select2-selection__choice {
  background: #d2322d !important;
  color: #FFF !important;
}

.select-tag-info + span .select2-selection__choice {
  background: #5bc0de !important;
  color: #FFF !important;
}

.select2-selection__choice__remove {
  color: #ccc !important;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* COMPONENT - HAMBURGER ICONS */
/*================================================*/
.c-hamburger {
  display: block;
  position: relative;
  overflow: hidden;
  margin: 0;
  padding: 0;
  width: 60px;
  height: 40px;
  font-size: 0;
  text-indent: -9999px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-box-shadow: none;
          box-shadow: none;
  border-radius: none;
  border: none;
  cursor: pointer;
  -webkit-transition: background 0.5s;
  transition: background 0.5s;
}

.c-hamburger:focus {
  outline: none;
}

.c-hamburger span {
  display: block;
  position: absolute;
  top: 18.5px;
  left: 18px;
  right: 18px;
  height: 3px;
  background: white;
}

.c-hamburger span::before,
.c-hamburger span::after {
  position: absolute;
  display: block;
  left: 0;
  width: 100%;
  height: 3px;
  background-color: #fff;
  content: "";
}

.c-hamburger--htla span {
  -webkit-transition: -webkit-transform 0.5s;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
}

.c-hamburger--htla span::before {
  -webkit-transform-origin: top right;
          transform-origin: top right;
  -webkit-transition: width 0.5s, top 0.5s, -webkit-transform 0.5s;
  transition: width 0.5s, top 0.5s, -webkit-transform 0.5s;
  transition: transform 0.5s, width 0.5s, top 0.5s;
  transition: transform 0.5s, width 0.5s, top 0.5s, -webkit-transform 0.5s;
}

.c-hamburger--htla span::after {
  -webkit-transform-origin: bottom right;
          transform-origin: bottom right;
  -webkit-transition: width 0.5s, bottom 0.5s, -webkit-transform 0.5s;
  transition: width 0.5s, bottom 0.5s, -webkit-transform 0.5s;
  transition: transform 0.5s, width 0.5s, bottom 0.5s;
  transition: transform 0.5s, width 0.5s, bottom 0.5s, -webkit-transform 0.5s;
}

.c-hamburger--htla span {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}

.c-hamburger--htla span::before,
.c-hamburger--htla span::after {
  width: 50%;
}

.c-hamburger--htla span::before {
  top: 0;
  -webkit-transform: translateX(15px) translateY(1.5px) rotate(45deg);
          transform: translateX(15px) translateY(1.5px) rotate(45deg);
}

.c-hamburger--htla span::after {
  bottom: 0;
  -webkit-transform: translateX(15px) translateY(-1.5px) rotate(-45deg);
          transform: translateX(15px) translateY(-1.5px) rotate(-45deg);
}

/* active state, i.e. menu open */
html.left-sidebar-collapsed .c-hamburger--htla span {
  -webkit-transform: none;
          transform: none;
}

html.left-sidebar-collapsed .c-hamburger--htla span::before,
html.left-sidebar-collapsed .c-hamburger--htla span::after {
  width: 100%;
}

html.left-sidebar-collapsed .c-hamburger--htla span::before {
  top: 7px;
  -webkit-transform: none;
          transform: none;
}

html.left-sidebar-collapsed .c-hamburger--htla span::after {
  top: -7px;
  -webkit-transform: none;
          transform: none;
}

html.left-sidebar-top .c-hamburger span {
  top: 23.5px;
}

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=*/
/* BOOTSTRAP OVERWRITE*/
/*================================================*/
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  background: <?php echo $panel_color; ?>;
  border-color: <?php echo $panel_color; ?>;
}

.pagination > li > a,
.pagination > li > span {
  color: <?php echo $panel_color; ?>;
}

.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  color: <?php echo $panel_color; ?>;
}

/*# sourceMappingURL=style.css.map */
.full_border
{
  border-collapse: inherit !important;
  border: solid 2px #ccc;
  border-radius: 5px !important;
}
.center_text
{
  text-align: center;
}
.cust_his_table
{
  margin-bottom:0px !important;
}
.cust_his_table td
{
  vertical-align:middle !important;
}
.cust_his_table th
{
  vertical-align:middle !important;
  text-align: left;
  padding: 3px;
}
.last th, .last td
{
  border-bottom:1px solid #ddd !important;
}
.normal td
{
  vertical-align:middle !important;
}
.normal th
{
  text-align: center;
}
.calculation
{
  width: 100%;
  padding: 20px 5px;
  margin-bottom:10px;  
  border-radius: 10px;
  border: solid 2px #bbbbbb;
}
.box
{
  width: 100%;
  padding: 15px 15px;
  margin-bottom:15px;  
  border-radius: 3px;
  border: solid 2px #bbbbbb;
}
.box_less_pad
{
  width: 100%;
  padding: 5px 5px;
  margin-bottom:15px;  
  border-radius: 3px;
  border: solid 2px <?php echo $btn_hover_color; ?>;;
}
.yellow
{
  background-color: #fffac8 !important;
}
.green
{
  background-color: #d6ffc8 !important;
}
.blue
{
  background-color: #c8fbff !important;
}
.pink
{
  background-color: #fbdfe7 !important;
}
.ash
{
  background-color: #e8e8e8 !important;
}
.white
{
  background-color: #fff !important;
}
.white_text
{
  color: #fff !important;
}
.red
{
  background-color: red !important;
}
.panel_color
{
  background-color: <?php echo $btn_hover_color; ?> !important;
}
.tot_row:hover
{
 background-color: #fff !important;
 color:#115f4f !important; 
}
.left-to-right { background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0.33, <?php echo $panel_color; ?>), color-stop(0.67, <?php echo $btn_hover_color; ?>));background-image: -moz-linear-gradient(center bottom, <?php echo $btn_hover_color; ?> 33%, <?php echo $panel_color; ?> 67% );padding: 2px;border-radius: 5px; }
.inner_div
{
  background-color:#fff;
  border-radius: 5px;
}
.right_text
{
  text-align: right;
}
.dnone
{
  display: none !important;
}
@-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink{
  text-decoration: blink;
  -webkit-animation-name: blinker;
  -webkit-animation-duration: 0.8s;
  -webkit-animation-iteration-count:infinite;
  -webkit-animation-timing-function:ease-in-out;
  -webkit-animation-direction: alternate;
}
.blink_slow{
  text-decoration: blink;
  -webkit-animation-name: blinker;
  -webkit-animation-duration: 1.5s;
  -webkit-animation-iteration-count:infinite;
  -webkit-animation-timing-function:ease-in-out;
  -webkit-animation-direction: alternate;
}
.blink1 {
    color: red;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 1s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 1s;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
    from {color: red;}
    to {color: orange;}
}

/* Standard syntax */
@keyframes example {
    from {color: red;}
    to {color: orange;}
}
.timer
{
  color: #ffca00 !important;
}
.timer:hover
{
  color: #fff !important;
}
.term_head{
    color:#008080;
}
.term_subhead{
    color:#ed2c6a;
}
.term_content{
    margin-left:21.3pt;
}
.term_mid{
    color:#0000ff;
}

.x-fb {
  background: #3b5998;
  border-color: #3b5998;
}
.x-tw {
  background: #1da1f2;
  border-color: #1da1f2;
}
.x-gp {
  background: #db4437;
  border-color: #db4437;
}
.x-li {
  background: #007bb5;
  border-color: #007bb5;
}
.x-pin {
  background: #bd081c;
  border-color: #bd081c;
}
.x-yt {
  background: #ff0000;
  border-color: #ff0000;
}
.x-inst {
  background: #c32aa3;
  border-color: #c32aa3;
}
.x-skype {
  background: #00aff0;
  border-color: #00aff0;
}
.x-tumblr {
  background: #35465d;
  border-color: #35465d;
}