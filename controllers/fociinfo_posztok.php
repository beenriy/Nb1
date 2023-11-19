<?php

class Fociinfo_posztok_Controller
{
	public $baseName = 'fociinfo_posztok';  //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbított paramétereket kapja
	{
		$beleptetModel = new Posztok_Model;  //az osztályhoz tartozó modell
		//a modellben belépteti a felhasználót
		$retData = $beleptetModel->get_data($vars);



		//betöltjük a nézetet
		$view = new View_Loader($this->baseName."_main");

		//átadjuk a lekérdezett adatokat a nézetnek
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>


		
		