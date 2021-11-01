<?php

require_once $config->root_path.'/libs/Smarty.class.php';
require_once $config->root_path.'/calc_app/Messages.class.php';
require_once $config->root_path.'/calc_app/CalcForm.class.php';
require_once $config->root_path.'/calc_app/CalcResult.class.php';


class CalcCtrl {
    private $msgs;   //wiadomości dla widoku
    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku
    
    public function __construct(){
	//stworzenie potrzebnych obiektów
	$this->msgs = new Messages();
	$this->form = new CalcForm();
	$this->result = new CalcResult();
    }
    public function getParams(){
   		$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
		$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
                $this->form->z = isset($_REQUEST ['z']) ? $_REQUEST ['z'] : null;
    }
    public function validate() {
        if ( ! (isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
        return false; 
}  

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $this->form->x == "") {
		$this -> msgs ->  addError('Nie podano kwoty kredytu');
                
	}
	if ( $this->form->y == "") {
                $this -> msgs ->  addError('Nie podano okresu splaty');
	}
        if ($this->form->z == "") {
            $this -> msgs ->  addError('Nie podano okresu splaty');
        }
        return ! $this->msgs->isError();
    }
    public function process(){
        $this->getparams();
        if ($this->validate()) {
            $this->msgs->addInfo('Parametry poprawne.');
            $int = $this->form->z/1200;
            $int1 = 1+$int;
            $r1 = pow($int1, $this->form->y);
            $this->result->result = round($this->form->x*($int*$r1)/($r1-1), 2);
            $this->msgs->addInfo('Wykonano obliczenia.');
            
        }
        
        $this->generateView();
    }

    public function generateView(){
		global $config;
		
		$smarty = new Smarty();
		$smarty->assign('config',$config);
		
		$smarty->assign('page_title','Przykład 05');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($config->root_path.'/calc_app/calc_view.html');
	}
}




