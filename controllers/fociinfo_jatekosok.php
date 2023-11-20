<?php

class Fociinfo_jatekosok_Controller
{
	public $baseName = 'fociinfo_jatekosok';  //meghat�rozni, hogy melyik oldalon vagyunk
	public function main(array $vars) // a router �ltal tov�bb�tott param�tereket kapja
	{
		$beleptetModel = new Jatekosok_Model;  //az oszt�lyhoz tartoz� modell
		//a modellben bel�pteti a felhaszn�l�t
		$retData = $beleptetModel->get_data($vars);



		//bet�ltj�k a n�zetet
		$view = new View_Loader($this->baseName."_main");

		//�tadjuk a lek�rdezett adatokat a n�zetnek
		foreach($retData as $name => $value)
			$view->assign($name, $value);
	}
}

?>

