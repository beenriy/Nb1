<?php

class Soap_Controller
{
	public $baseName = 'soap';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		$beleptetModel = new Soapjatekosok_Model;  //az oszt�lyhoz tartoz� modell
		//a modellben bel�pteti a felhaszn�l�t
		$retData = $beleptetModel->get_data($vars)->getjatekosok($vars);



		//bet�ltj�k a n�zetet
		$view = new View_Loader($this->baseName."_main");

		//�tadjuk a lek�rdezett adatokat a n�zetnek
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>


