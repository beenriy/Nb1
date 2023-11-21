<?php

class Hirek_Model
{
	public function get_data($vars)
	{
		$retData['eredmeny'] = "";
		try {
			$connection = Database::getConnection();


		$sql = "INSERT INTO `felhasznalok` (`bejelentkezes`, `velemeny`, `datum`) VALUES
		('{$_SESSION['login']}', '{$vars['velemeny']}', NOW())";


                       $connection->query($sql);
	
			$sql = "select bejelentkezes, velemeny, datum from felhasznalok ORDER bY datum DESC";
			$stmt = $connection->query($sql);
			$felhasznalo = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['eredmeny'] = $felhasznalo;
		}
		catch (PDOException $e) {
					$retData['eredmény'] = "ERROR";
					$retData['uzenet'] = "Adatbázis hiba: ".$e->getMessage()."!";
		}
		
		return $retData;
	}
}

?>



