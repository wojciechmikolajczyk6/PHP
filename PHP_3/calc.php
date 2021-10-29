<?php
require_once dirname(__FILE__).'/config.php';

//pobranie parametrów
if (isset($_REQUEST['submit'])){
$kwota_kredytu = $_REQUEST['x'];
$liczba_rat = $_REQUEST['y'];
$oprocentowanie = $_REQUEST['z'];
$info [] = "Przekazano parametry";


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

    
  if (empty ( $messages )) {  
        $info [] = "Parametry poprawne. Wykonuje obliczenia.";
	$int = $oprocentowanie/1200;
        $int1 = 1+$int;
        $r1 = pow($int1, $liczba_rat);
 
        $result = round($kwota_kredytu*($int*$r1)/($r1-1), 2);
  }
  
  

}


$page_title = 'Przykład 03';
$page_description = 'Najprostsze szablonowanie oparte na budowaniu widoku poprzez dołączanie kolejnych części HTML zdefiniowanych w różnych plikach .php';
$page_header = 'Proste szablony';
$page_footer = 'przykładowa tresć stopki wpisana do szablonu z kontrolera';

include 'calc_view.php';