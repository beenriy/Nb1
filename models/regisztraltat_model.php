<?php

class Regisztraltat_Model
{
	public function get_data($vars)
	{
		$retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();


		$sql = "INSERT INTO `felhasznalok` (`csaladi_nev`, `utonev`, `bejelentkezes`, `jelszo`, `jogosultsag`) VALUES
('{$vars['csaladi_nev']}', '{$vars['utonev']}', '{$vars['login']}', '{$vars['password']}', '_1')";

	
                       $connection->query($sql);
	
	





			$sql = "select id, csaladi_nev, utonev, jogosultsag from felhasznalok where bejelentkezes='".$vars['login']."' and jelszo='".$vars['password']."'";
			$stmt = $connection->query($sql);
			$felhasznalo = $stmt->fetchAll(PDO::FETCH_ASSOC);
			switch(count($felhasznalo)) {
				case 0:
					$retData['eredmeny'] = "ERROR";
					$retData['uzenet'] = "Foglalt jelszó vagy felhasználónév";
					break;
				case 1:
					$retData['eredmény'] = "OK";
					$retData['uzenet'] = "Kedves ".$felhasznalo[0]['csaladi_nev']." ".$felhasznalo[0]['utonev']."!<br><br>
					                      Sikeres regisztráció.<br><br>";
										  
					
					Menu::setMenu();
					break;
				default:
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Több felhasználót találtunk a megadott felhasználói név -jelszó párral!";
			}
		}
		catch (PDOException $e) {
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		return $retData;
	}
}

?>