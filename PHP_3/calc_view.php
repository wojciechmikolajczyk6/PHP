<?php 
include _ROOT_PATH.'/top.php';
?>

<p id="para">Prosty kalkulator kredytowy</p>

<form class="pure-form pure-form-stacked" action="<?php print(_APP_ROOT); ?>/calc.php" method="post">
    <fieldset>
        <legend>Kalkulator</legend>
	
	<label for="id_x"><br>Kwota kredytu:</br> </label>
	<input id="id_x" type="number" name="x" min = "0" value="<?php print($x); ?>" />
	<label for="id_y"><br>Okres spłaty w miesiącach: </br> </label>
	<input id="id_y" type="number" name="y" min = "0" value="<?php print($y); ?>" />
        <label for="id_z"><br>Oprocentowanie:</br> </label>
        <input id="id_z" type="number" name="z" step = "0.01" min = "0" max ="100" value="<?php print($z); ?>" />
	
        <div> <input type="submit" name = "submit" value="Oblicz" /></div>
    
    </fieldset>    
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
    echo "<strong>Wystapily bledy: </strong>";
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php
if (isset($info)) {
    echo "<strong>Informacje: </strong>";
    if (count($info) > 0 ){
        echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #9FC5E8; width:25em;">';
		foreach ( $info as $key => $infos ) {
			echo '<li>'.$infos.'</li>';
		}
		echo '</ol>';
    }

}
?>


<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
<?php echo 'Rata miesięczna będzie wynosić: '.$result.  "zł."; ?>
    

<?php } ?>
</div>




<?php
include _ROOT_PATH.'/bottom.php';

?>
