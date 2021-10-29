<?php
/* Smarty version 4.0.0-rc.0, created on 2021-10-29 14:26:10
  from 'C:\xampp\htdocs\PHP_4\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_617be862969771_61357983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307f0a28330cd87b33f25f8b4238e7bcf336d40f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_4\\calc_view.html',
      1 => 1635510351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617be862969771_61357983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1773622090617be862957997_82307085', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_334067818617be8629597c9_10471578', 'content');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_template.html");
}
/* {block 'footer'} */
class Block_1773622090617be862957997_82307085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1773622090617be862957997_82307085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_334067818617be8629597c9_10471578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_334067818617be8629597c9_10471578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h1>Prosty kalkulator kredytowy</h1>

<form class="pure-form pure-form-stacked" action="calc.php" method="post">
    <fieldset>
      
	
	<label for="x"><br>Kwota kredytu:</br> </label>
	<input id="id_x" type="number" name="x" min = "0" value='x' />
	<label for="id_y"><br>Okres spłaty w miesiącach: </br> </label>
	<input id="id_y" type="number" name="y" min = "0" value='y'/>
        <label for="id_z"><br>Oprocentowanie:</br> </label>
        <input id="id_z" type="number" name="z" step = "0.01" min = "0" max ="100" value='z' />
	
        <button type="submit" name="submit" class="pure-button pure-button-primary">Oblicz</button>
    
    </fieldset>    
</form>	


<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
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
		</ol>
	<?php }
}?>


<?php if ((isset($_smarty_tpl->tpl_vars['info']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['info']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>
    



<?php if (((isset($_smarty_tpl->tpl_vars['result']->value)))) {?>
<h4>Wynik:</h4>
<p class="res">
    <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

</p>

<?php }?>


</div>

<?php
}
}
/* {/block 'content'} */
}
