<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/libs/Smarty.class.php';

//pobranie parametrów
$form = null;
$info = array();
$messages = array();
$result = null; 
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
$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Przykład 04');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
//$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('info',$info);

// 5. Wywołanie szablonu

 
$smarty->display(_ROOT_PATH.'/calc_view.html');
 