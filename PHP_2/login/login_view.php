<?php require_once dirname(__FILE__) .'/../config.php';

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Login</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" 
      integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
</head>
<body>
    
<form class="pure-form pure-form-stacked" action="<?php print(_APP_ROOT); ?> /login/login.php" method="post">
<fieldset>
        <legend>Logowanie</legend>	
<input type="text" name="username" placeholder="username" value <?php $username ?> />

<input type="password" name="password" placeholder="password" <?php $password ?>/>

<button type="submit" name="submit" <?php $submit ?> class="pure-button pure-button-primary">Sign in</button>


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

</body>
</html>