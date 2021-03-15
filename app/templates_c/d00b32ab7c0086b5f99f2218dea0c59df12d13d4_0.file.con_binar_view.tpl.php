<?php
/* Smarty version 3.1.39, created on 2021-03-15 10:45:52
  from 'C:\xampp\htdocs\test2\app\con_binar_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604f2cd0ab3326_32086323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd00b32ab7c0086b5f99f2218dea0c59df12d13d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test2\\app\\con_binar_view.tpl',
      1 => 1615801464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604f2cd0ab3326_32086323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1715850272604f2cd0aa6665_38619201', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../szablon/home.tpl");
}
/* {block 'content'} */
class Block_1715850272604f2cd0aa6665_38619201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1715850272604f2cd0aa6665_38619201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center" style="padding-left: 2em;margin-top: 2em;">Konwerter binarny</h2>

<section id="two" >
	<div class="content_2" style="height: auto; padding: 3em; ">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/con_binar.php#one" method="post">
			<fieldset >
	
				<label for="binar" class="id_label" >Podaj liczbę w systemie dziesiętnym: </label>
				<input id="id_bin" style="width:20%;" type="text" placeholder="Liczba" name="binarny" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['binarny'];?>
"/>
	
				<button type="submit" style="margin-top: 1em;" class="button primary">Przelicz</button>
			</fieldset>
		</form>
	</div>
	
</section>

<div class="results">
    <style>
        .results h4{
            padding-left: 2em;
            margin-top: 2em;
        }
        .results ul{
            padding-left: 3em;
        }
        .res {
            padding-left: 2em;
           
        }
    </style>
    
<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
    
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ul>
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
		<h4>Informacje: </h4>
		<ul>
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
	<h4>Wynik:</h4>
        <h3><p class="res">
            <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

        </p>
	</h3>
        
<?php }?>

</div>
</div>


<?php
}
}
/* {/block 'content'} */
}
