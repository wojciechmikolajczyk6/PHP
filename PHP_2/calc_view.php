<?php require_once dirname(__FILE__) .'/config.php';
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" 
      integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
</head>
<body>
    
    <a class='pure-button pure-button-primary' href='<?php print(_APP_ROOT);?>/nastepna_strona.php'>Nastepna strona</a>
    <a class='pure-button pure-button-primary' href='<?php print(_APP_ROOT);?>/login/logout.php'>Wyloguj sie</a>
    <br><br>
    
    

<form class="pure-form pure-form-stacked" action="<?php print(_APP_ROOT); ?>/calc.php" method="post">
	<fieldset>
            <legend><strong>Kalkulator miesiecznej raty:</strong> </legend>
	<label for="id_x"><br>Kwota kredytu:</br> </label>
	<input id="id_x" type="number" name="x", min ="1"  />
	<label for="id_y"><br>Okres spłaty w miesiącach: </br> </label>
	<input id="id_y" type="number" name="y" min = "1" />
        <label for="id_z"><br>Oprocentowanie:</br> </label>
        <input id="id_z" type="number" name="z" step = "0.01" min = "0.01" />
	
        <button type = "submit" name = "submit" class="pure-button pure-button-primary">Oblicz rate</button>
        </fieldset>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">
<?php echo 'Rata miesięczna będzie wynosić: '.$result; ?>
</div>
<?php } ?>


</body>
</html>