<!DOCTYPE HTML>
<html>
	<head>
		<title>{$page_title|default:"Domyslny kalkulator"}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="icon" href="{$app_url}/images/money.png" type="image" sizes="16x4">
		
		<link rel="stylesheet" href="{$app_url}/assets/css/main.css"/>
		<noscript><link rel="stylesheet" href="{$app_url}/assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
		<style>
			.id_label{
				font-weight: bold;
			}
		</style>
	</head>
	<body class="is-preload landing"> 
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" >
					
					<h1 id="logo"><a href="#"><img src="{$app_url}/images/sztuczna_logo.png"></img><a/></h1>
					<nav id="nav">
						<ul>
							<li><a href="#one" class="button primary scrolly" >Kalkulator</a></li>
                                                        <li><a href="#two" class="button primary scrolly" >Konwerter binarny</a></li>
						</ul>
					</nav>
				
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Witaj!</h2>
							<p>{$page_header|default:"Opis domyślny"}</p>
						</header>
						<span class="image"><img src="{$app_url}/images/sztuczna_duze_logo.png" alt="Tekst" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<div id="one" class="content" >
					
					{block name=content} Domyślna treść zawartości .... {/block}
					
				</div>
                         <!-- Two -->
				<div id="two" class="content_2" >
					
					{block name=content_con} Domyślna treść zawartości .... {/block}
					
				</div>               
                             
			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://twitter.com" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://facebook.com" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="https://instagram.com" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/mmaciek777/studia_php" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="mailto:mmaciek777@wp.pl" class="icon solid alt fa-envelope"><span class="label">Email</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Calc 2k21.</li><li>Template created by: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="{$app_url}/assets/js/jquery.min.js"></script>
			<script src="{$app_url}/assets/js/jquery.scrolly.min.js"></script>
			<script src="{$app_url}/assets/js/jquery.dropotron.min.js"></script>
			<script src="{$app_url}/assets/js/jquery.scrollex.min.js"></script>
			<script src="{$app_url}/assets/js/browser.min.js"></script>
			<script src="{$app_url}/assets/js/breakpoints.min.js"></script>
			<script src="{$app_url}/assets/js/util.js"></script>
			<script src="{$app_url}/assets/js/main.js"></script>

	</body>
</html>