<?php
require_once('config.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>Новый Сайт</title>
	<meta name="description" content="Описание сайта">

	<!-- _header -->
	<style>@charset"UTF-8";</style>
	<style>html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}*,:after,:before{outline:0}input::-webkit-inner-spin-button,input::-webkit-outer-spin-button{-webkit-appearance:none;margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{background-color:#fff;font-family:arial;font-size:16px;min-width:320px;width:100%;position:relative;line-height:1;overflow-x:hidden}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:'';content:none}table{border-collapse:collapse;border-spacing:0}button{cursor:pointer;outline:0}img{display:block;width:100%}input:-moz-placeholder,input:-ms-input-placeholder,input::-moz-placeholder,input::-webkit-input-placeholder{color:gray}:focus{outline:0}.none{display:none}.none_i{display:none!important}.hidden{visibility:hidden}.visible{visibility:visible}.block{display:block}.inline_block{display:inline-block}.inline{display:inline}.flex{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}.inline_flex{display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex}.pointer{cursor:pointer}.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.center{text-align:center}.left{text-align:left}.right{text-align:right}</style>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="images/favicon.png" type="image/png" />
</head>
<body id="body">
<!-- Rsponsive JS -->
<script type="text/javascript">function responsiveJS(){var width=document.documentElement.clientWidth,etalonFontSize=0,is_chrome=navigator.userAgent.indexOf('Chrome')>-1,is_safari=navigator.userAgent.indexOf("Safari")>-1;if((is_chrome)&&(is_safari)){is_safari=false;}if(width>=<?=DEFAULT_MEDIUM_SCREEN?>){if(is_safari==true&&width<=<?=DEFAULT_BIG_SCREEN?>){var l=((<?=DEFAULT_BIG_SCREEN?>-width)/140|0)*0.02;etalonFontSize=(10/<?=DEFAULT_BIG_SCREEN?>)*(width*(0.98-l));}else{etalonFontSize=(10/<?=DEFAULT_BIG_SCREEN?>)*width;}document.getElementById("body").style.fontSize=etalonFontSize+'px';}else{if(width>=<?=DEFAULT_SMALL_SCREEN?>){etalonFontSize=(10/<?=DEFAULT_MEDIUM_SCREEN?>)*width;}else{etalonFontSize=(10/<?=DEFAULT_SMALL_SCREEN?>)*width;}document.getElementById("body").style.fontSize=etalonFontSize+'px';}}responsiveJS();</script>
<!-- compiled include fonts here -->
	<style></style>
<!-- end fonts -->