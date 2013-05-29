<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" dir="ltr" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html dir="ltr" lang="ru_RU"> <!--<![endif]-->
<head>
<!--[if lt IE 9]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <![endif]-->
{headers}
<link rel="stylesheet" type="text/css" media="all" href="{THEME}/style/960_rese.css">
<link rel="stylesheet" type="text/css" media="all" href="{THEME}/style/shortcod.css"> 
<link rel="stylesheet" type="text/css" media="all" href="{THEME}/style/tabs0000.css">    
<link rel="stylesheet" type="text/css" media="all" href="{THEME}/style/preloade.css">
<link rel="stylesheet" type="text/css" media="all" href="{THEME}/style/prettyPh.css">
<link rel="stylesheet" type="text/css" media="all" href="{THEME}/style/supersiz.css">
<link rel="stylesheet" href="{THEME}/style/style000.css" type="text/css">
<link media="screen" href="{THEME}/style/engine.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{THEME}/js/libs.js"></script>
<!-- html5shiv -->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript" src="{THEME}/style/jwplayer.js"></script>
<script type="text/javascript" src="{THEME}/style/maps0000.js"></script>
<script type="text/javascript" src="{THEME}/style/jquery01.js"></script>
    <style type="text/css">
	body{
		font: normal 12px/1.5em "Helvetica Neue", Helvetica, sans-serif;
		color: #FFFFFF;
	}
	a{
		font: normal 12px/1.5em  "Helvetica Neue", Helvetica, sans-serif;
		color: #FECC00;
	}
	.full_pattern{
			background:url({THEME}/style/pattern1.png) repeat; 
			}
	#comments, #content .post, #sidebar .widget, #page_info_t, #respond, #footer, .sort-btn {
		border-top: 4px solid #FECC00;
	}
	.jqueryslidemenu > ul > li, .jqueryslidemenu ul li ul{
	 	border-top: 2px solid #FECC00;
	 }
	.jqueryslidemenu>ul>li>a:hover, ul.source li.active a, a.more-link{
		background-color: #FECC00;
	}
	.post_info_t h3 a:hover{
		color: #FECC00!important;
	}
    </style>
<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head>
<body class="blog layout-2cr">
{AJAX}
<div id="wrap">
<header id="header">
   <h1><a href=""><img src="{THEME}/style/logo0000.png" alt="Fenix"></a></h1>
<nav id="nav" class="jqueryslidemenu">            	
   <ul id="menu-nav-menu" class="menu">
   <li id="menu-item-8" class=""><a href="">Главная</a></li>
   <li id="menu-item-2625" class=""><a href="">Блог</a></li>
   <li id="menu-item-5" class=""><a href="">Помощь</a>
<ul class="sub-menu">
	<li id="menu-item-2405" class=""><a href="">Форум</a></li>
	<li id="menu-item-2418" class=""><a href="">Контакты</a></li>
	<li id="menu-item-2407" class=""><a href="">FAQ</a></li>
</ul>
</li>
   <li id="menu-item-6" class=""><a href="">Портфолио</a></li>
   <li id="menu-item-9" class=""><a href="">Галерея</a></li>
<li id="menu-item-7" class=""><a href="">Контакты</a></li>
</ul>
<div class="clear"></div>
</nav> 
<div class="clearfix"></div>
</header>
<div id="container" class="inner_page container_12">

<div id="main" role="main" class=" layout_">
<section id="content" class="grid_6 alpha push_3">
<div id="page_info_t">
   <h2>Блог</h2>
<div id="breadcrumbs">
   Добро пожаловать на мой сайт!<div class="clear"></div>
</div>
</div> 
   {info}
   {content}
</section>            
<!-- Сайдбар -->		    
<aside id="sidebar" class="grid_3 omega push_3">

<div id="search-2" class="widget widget_search">
<form method="get" id="searchform" action="http://www.eneaa.com/templates/fenix/">
   <input type="text" class="input-search" value name="s" id="s">
   <input type="submit" class="search-button" id="searchsubmit" value="РќР°Р№С‚Рё">
</form></div>

<div id="pages-2" class="widget widget_pages"><h4>Навигация<span></span></h4>
<ul>
   <li class=""><a href="">Главная</a></li>
   <li class=""><a href="">Помощь</a>
<ul class="children">
	<li class=""><a href="">Форум</a></li>
	<li class=""><a href="">Контакты</a></li>
	<li class=""><a href="">FAQ</a></li>
</ul>
</li>
   <li class="page_item page-item-266"><a href="/templates/fenix/">Блог</a></li>
   <li class="page_item page-item-240"><a href="/templates/fenix/pages/">Контакты</a></li>
   <li class="page_item page-item-119"><a href="/templates/fenix/portfolios/">О проекте</a></li>
</ul>
		</div>
		
<div id="recent-comments-2" class="widget widget_recent_comments"><h4>Новости<span></span></h4>
<ul id="recentcomments">
{topnews}
</ul>
</div>

<div id="categories-2" class="widget widget_categories"><h4>Архивы<span></span></h4>		
<ul>
{archives}
</ul>
</div>

<div id="widget_tag-2" class="widget widget_tag"><h4><span></span></h4><ul class="wp-tag-cloud">
{tags}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
</ul>
<div class="clear"></div>
</div><div class="clearfix bt"></div>
<div class="clearfix"></div>
<div id="sidebar_bottom"></div>
</aside>		            
<div class="clearfix"></div>

<footer id="footer" class="grid_9 alpha omega push_3">
<div class="one_fourth">
<div id="popular_posts-2" class="widget widget_popular_posts">
<h4>Новости</h4>
<ul>{topnews}</ul>
</div>
</div>
                    
<div class="one_fourth">
<div id="twitter_widget-2" class="widget twitter_widget"><h4>Твиттер</h4>
<ul class="twitter">
        <li>
    	<!--
        <a href='http://twitter.com/envato/statuses/189947443872399360'
        title='Posted 11 April 2012 | 5:26 am'>
        </a>
        -->
        Announcing The Ultimate Freelancer Pricing Guide вЂ” A Newsletter Exclusive <a href="/">http://t.co/NDjZmNsE</a>    </li>
        <li>
    	<!--
        <a href='http://twitter.com/envato/statuses/189630363964948480'
        title='Posted 10 April 2012 | 8:26 am'>
        </a>
        -->
        Using Photos of People and Celebrities in Items <a href="/">http://t.co/qv7tmvEQ</a>    </li>
</ul></div>                            
</div>

<div class="one_fourth">
<div id="social-3" class="widget social"><h4>Ищите нас</h4>            

<a title="Facebook" href="">
   <img src="{THEME}/style/facebook.png" alt="Facebook">
</a>

<a title="twitter" href="">
   <img src="{THEME}/style/twitter_.png" alt="twitter">
</a>

<a title="youtube" href="">
<img src="{THEME}/style/youtube_.png" alt="youtube">
</a>

<a title="rss" href="">
<img src="{THEME}/style/rss_3200.png" alt="rss">
</a>
<div class="clear"></div>
</div><div id="contact_info-2" class="widget contact_info"><h4>Контакты</h4>            
<ul class="contact_info">

<li class="phone">555-4433</li>
<li class="address">London, UK</li>
<li class="email">info@company.co.uk</li>
</ul>
<div class="clear"></div>
</div>    
</div>

<div class="one_fourth last">
<div id="quick_contact-2" class="widget quick_contact"><h4>Быстрая связь</h4>            
<div class="form">
   <form action="" id="quick_contact" method="post">
   <input type="text" name="name" id="quick_name"><span>Имя</span><img src="{THEME}/style/error_fo.png" alt="error" class="name-error">
   <input type="text" name="email" id="quick_email"><span class="email-span">E-mail</span><img src="{THEME}/style/error_fo.png" alt="error" class="email-error">
   <textarea name="comments" id="quick_comments"></textarea>
   <img src="{THEME}/style/error_fo.png" alt="error" class="comments-error">
   <input type="hidden" name="remail" id="quick_remail" value="test@test.com">
   <input type="submit" id="quick_submit" class="send" value="Send">
</form>
<div class="mesage">
</div>
</div>
<div class="clear"></div>
</div>                        
</div>
<div class="clear"></div>
<div id="b_footer">
<p><span>При использовании материалов ссылка на источник обязательна. Copyright &copy; 2012 <a href="/" style="color:#fff; text-decoration:none">DLE</a> All Rights Reserved.</span></p>
</div></footer>
<div class="clear"></div>
</div>
<div class="clearfix"></div>
</div></div><ul id="slide-list" class="list_s"></ul>
</div>
<script type="text/javascript" src="{THEME}/style/jquerysl.js"></script>
<script type="text/javascript" src="{THEME}/style/jquery02.js"></script>
<script type="text/javascript" src="{THEME}/style/supersiz.js"></script>
<script type="text/javascript" src="{THEME}/style/supersj0.js"></script>
<script type="text/javascript" src="{THEME}/style/jquery03.js"></script>
<script type="text/javascript" src="{THEME}/style/hoverInt.js"></script>
<script type="text/javascript" src="{THEME}/style/jquery04.js"></script>
<script type="text/javascript" src="{THEME}/style/jquery05.js"></script>
<script type="text/javascript" src="{THEME}/style/jquery06.js"></script>
<script type="text/javascript" src="{THEME}/style/jquery07.js"></script>
<script type="text/javascript" src="{THEME}/style/script00.js"></script>
</body>
</html>