<?php

class Belepes_regisztraltat_Controller
{
	public $baseName = 'belepes_regisztraltat';  //meghatározni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router által továbbított paramétereket kapja
	{
		$regisztraltatModel = new Regisztraltat_Model;  //az osztályhoz tartozó modell
		//a modellben belépteti a felhasználót
		$retData = $regisztraltatModel->get_data($vars);
		if($retData['eredmeny'] == "ERROR")
			$this->baseName = "belepes_regisztralas";
		//betöltjük a nézetet
		$view = new View_Loader($this->baseName.'_main');
		//átadjuk a lekérdezett adatokat a nézetnek
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>