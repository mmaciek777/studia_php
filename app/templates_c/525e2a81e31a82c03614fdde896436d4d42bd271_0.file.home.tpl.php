<?php
/* Smarty version 3.1.39, created on 2021-03-14 19:36:11
  from 'C:\xampp\htdocs\test2\szablon\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604e579b031624_16365289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '525e2a81e31a82c03614fdde896436d4d42bd271' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test2\\szablon\\home.tpl',
      1 => 1615746530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604e579b031624_16365289 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Domyslny kalkulator" : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/images/money.png" type="image" sizes="16x4">
		
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css"/>
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/noscript.css" /></noscript>
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
					
					<h1 id="logo"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/images/sztuczna_logo.png"></img><a/></h1>
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
							<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_header']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
</p>
						</header>
						<span class="image"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/images/sztuczna_duze_logo.png" alt="Tekst" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<div id="one" class="content" >
					
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_880838613604e579b02fca5_94583578', 'content');
?>

					
				</div>
                         <!-- Two -->
				<div id="two" class="content_con" >
					
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_948879661604e579b030371_75769838', 'content_con');
?>

					
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
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_880838613604e579b02fca5_94583578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_880838613604e579b02fca5_94583578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'content_con'} */
class Block_948879661604e579b030371_75769838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_con' => 
  array (
    0 => 'Block_948879661604e579b030371_75769838',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content_con'} */
}
