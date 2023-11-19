<?php

class Belepes_bejelentkeztet_Controller
{
	public $baseName = 'belepes_bejelentkeztet';  //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbított paramétereket kapja
	{
		$beleptetModel = new Bejelentkeztet_Model;  //az osztályhoz tartozó modell
		//a modellben belépteti a felhasználót
		$retData = $beleptetModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "belepes_bejelentkezes";
		//betöltjük a nézetet
		$view = new View_Loader($this->baseName.'_main');
		//átadjuk a lekérdezett adatokat a nézetnek
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>