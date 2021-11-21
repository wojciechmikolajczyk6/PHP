{extends file="main.tpl"}

{block name=content}

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>


<h1>Prosty kalkulator kredytowy</h1>

<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
    <fieldset>
      
	
	<label for="x"><br>Kwota kredytu:</br> </label>
        <input id="id_x" type="number" name="x" min = "0" placeholder="25000" value='{$form->x}' />
	<label for="id_y"><br>Okres spłaty w miesiącach: </br> </label>
	<input id="id_y" type="number" name="y" min = "0" placeholder ="48" value='{$form->y}'/>
        <label for="id_z"><br>Oprocentowanie:</br> </label>
        <input id="id_z" type="number" name="z" step = "0.01" min = "0" max ="100" placeholder="5" value='{$form->z}' />
	
     
    
    </fieldset> 
       <button type="submit" name="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>	

{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}

{/block}
