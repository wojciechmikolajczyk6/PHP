 
<?php
require_once dirname(__FILE__).'/../config.php';

if (isset($_REQUEST['submit'])){
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ( ! (isset($username) && isset($password) )) {
//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

	if ( $username == "") {
		$messages [] = 'Nie podano nazwy uztykownika';
	}
	if ( $password == "") {
		$messages [] = 'Nie podano hasla';
	}


if ($username == "admin" && $password == 'admin'){
    session_start();
    $_SESSION['role'] = 'admin';
    header("Location: "._APP_URL);
} elseif ($username == 'user' && $password == 'user') {
    session_start();
    $_SESSION['role'] = 'user';
    header("Location: "._APP_URL);  
} 
}
include 'login_view.php';