<?php
/* Smarty version 3.1.30, created on 2021-11-21 15:12:38
  from "C:\xampp\htdocs\php_07_routing\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_619a53d64b63b5_00269349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3cf26c09d30360a056e0aaa32f121a7c251f925' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07_routing\\app\\views\\CalcView.tpl',
      1 => 1637503952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_619a53d64b63b5_00269349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_905566089619a53d64b5920_39133587', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_905566089619a53d64b5920_39133587 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>


<h1>Prosty kalkulator kredytowy</h1>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
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
	
     
    
    </fieldset> 
       <button type="submit" name="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>	

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<div class="messages info">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
