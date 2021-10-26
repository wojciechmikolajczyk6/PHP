<?php
require_once dirname(__FILE__).'/config.php';

//pobranie parametrów

include _ROOT_PATH. '/login/check.php';

if(isset($_REQUEST['submit'])){
$kwota_kredytu = $_REQUEST['x'];
$liczba_rat = $_REQUEST['y'];
$oprocentowanie = $_REQUEST['z'];



	if ( ! (isset($kwota_kredytu) && isset($liczba_rat) && isset($oprocentowanie))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $kwota_kredytu == "") {
		$messages [] = 'Nie podano kwoty kredytu';
	}
	if ( $liczba_rat == "") {
		$messages [] = 'Nie podano okresu splaty';
	}
        if ($oprocentowanie == "") {
            $messages [] = 'Nie podano oprocentowania';
        }
    
  if ( empty ( $messages )) {      
	$int = $oprocentowanie/1200;
        $int1 = 1+$int;
        $r1 = pow($int1, $liczba_rat);
 
        $result = round($kwota_kredytu*($int*$r1)/($r1-1), 2);
}

  
}
include 'calc_view.php';
