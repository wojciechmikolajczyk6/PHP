<?php
/* Smarty version 4.0.0-rc.0, created on 2021-11-01 11:57:39
  from 'C:\xampp\htdocs\PHP_5\calc_app\calc_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0-rc.0',
  'unifunc' => 'content_617fc823be1144_16127640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa548bb4d57229a93fb3c333337a0d38c16c447e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP_5\\calc_app\\calc_view.html',
      1 => 1635722200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617fc823be1144_16127640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1699599900617fc823a10c46_78696931', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_515730068617fc823a11ec1_52472719', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../template/main_template.html");
}
/* {block 'footer'} */
class Block_1699599900617fc823a10c46_78696931 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1699599900617fc823a10c46_78696931',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_515730068617fc823a11ec1_52472719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_515730068617fc823a11ec1_52472719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h1>Prosty kalkulator kredytowy</h1>

<form class="pure-form pure-form-stacked" action="http://localhost/PHP_5/calc_app/calc.php" method="post">
    <fieldset>
      
	
	<label for="x"><br>Kwota kredytu:</br> </label>
        <input id="id_x" type="number" name="x" min = "0" placeholder="25000" value='<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
' />
	<label for="id_y"><br>Okres spłaty w miesiącach: </br> </label>
	<input id="id_y" type="number" name="y" min = "0" placeholder ="48" value='<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
'/>
        <label for="id_z"><br>Oprocentowanie:</br> </label>
        <input id="id_z" type="number" name="z" step = "0.01" min = "0" max ="100" placeholder="5" value='<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
' />
	
        <button type="submit" name="submit" class="pure-button pure-button-primary">Oblicz</button>
    
    </fieldset>    
</form>	


<div class="messages">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
