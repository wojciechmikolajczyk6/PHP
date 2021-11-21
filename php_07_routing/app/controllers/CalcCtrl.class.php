<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
    public function getParams(){
   		$this->form->x = getFromRequest('x');
		$this->form->y = getFromRequest('y');
                $this->form->z = getFromRequest('z');

    }
    public function validate() {
        if ( ! (isset($this->form->x) && isset($this->form->y) && isset($this->form->z))) {
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
        return false; 
}  

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $this->form->x == "") {
		getMessages()->addError('Nie podano kwoty kredytu');
                
	}
	if ( $this->form->y == "") {
                getMessages()->addError('Nie podano okresu splaty');
	}
        if ($this->form->z == "") {
            getMessages()->addError('Nie podano okresu splaty');
        }
        return ! getMessages()->isError();
    }
    public function action_calcCompute(){
        $this->getParams();
        if ($this->validate()) {
            getMessages()->addInfo('Parametry poprawne.');
            $int = $this->form->z/1200;
            $int1 = 1+$int;
            $r1 = pow($int1, $this->form->y);
            $this->result->result = round($this->form->x*($int*$r1)/($r1-1), 2);
            getMessages()->addInfo('Wykonano obliczenia.');
            
        }
        
        $this->generateView();
    }
    	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}

	public function generateView(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Super kalkulator - role');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}






