<?php
// W skrypcie definicji kontrolera nie trzeba dołączać żadnego skryptu inicjalizacji.
// Konfiguracja, Messages i Smarty są dostępne za pomocą odpowiednich funkcji.
// Kontroler ładuje tylko to z czego sam korzysta.

require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';

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
    public function process(){
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

	public function generateView(){
		//nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
		// - wszystko załatwia funkcja getSmarty()
		
		getSmarty()->assign('page_title','Przykład 06a');
		getSmarty()->assign('page_description','Aplikacja z jednym "punktem wejścia". Zmiana w postaci nowej struktury foderów, skryptu inicjalizacji oraz pomocniczych funkcji.');
		getSmarty()->assign('page_header','Kontroler główny');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.html'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
}





