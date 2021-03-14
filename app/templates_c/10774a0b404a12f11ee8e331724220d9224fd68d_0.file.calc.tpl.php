<?php
/* Smarty version 3.1.39, created on 2021-03-13 11:39:56
  from 'C:\xampp\htdocs\test3\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604c967c9795a2_30640325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10774a0b404a12f11ee8e331724220d9224fd68d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test3\\app\\calc.tpl',
      1 => 1615631748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604c967c9795a2_30640325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1960519963604c967c96d0e2_88246263', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../szablon/home.tpl");
}
/* {block 'content'} */
class Block_1960519963604c967c96d0e2_88246263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1960519963604c967c96d0e2_88246263',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center" style="padding-left: 2em;margin-top: 2em;">Kalkulator kredytowy</h2>

<section id="one" >
	<div class="content_2" style="height: auto; padding: 3em; ">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php#one" method="post">
			<fieldset >
	
				<label for="kwota" class="id_label" >Kwota</label>
				<input id="id_x" style="width:20%;" type="text" placeholder="Kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
"/>
	
				<label for="lata" class="id_label" >Lata</label>
				<input id="id_y" style="width:20%;" type="text" placeholder="Ilość lat" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['lata'];?>
"/>
	
				<label for="oprc" class="id_label">Oprocentowanie</label>
				<input id="id_z" style="width:20%;" type="text" placeholder="Oprocentowanie" name="oprc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['oprc'];?>
"/>
	
				<button type="submit" style="margin-top: 1em;" class="button primary">Oblicz</button>
			</fieldset>
		</form>
	</div>
	
</section>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">


<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
    
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4 style="padding-left: 2em;margin-top: 2em;">Wystąpiły błędy: </h4>
		<ul class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4 style="padding-left: 2em;margin-top: 2em;">Informacje: </h4>
		<ul class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4 style="padding-left: 2em;margin-top: 2em;">Wynik</h4>
	<p class="res" style="padding-left: 2em; font-weight: bold;">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>
</div>


<?php
}
}
/* {/block 'content'} */
}
