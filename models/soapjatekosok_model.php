<?php
class Soapjatekosok_Model {

public function get_data($vars)
	{
  
  /**
    *  @return Jatekosok
    */
   function getjatekosok(){
  
	$eredmeny = array("hibakod" => 0,
					  "uzenet" => "",
					  "jatekosok" => Array());
	
	try {
	  $dbh = Database::getConnection();
	  $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
  
	  $sql = "select utonev, vezeteknev from labdarugo order by vezeteknev";
	  $sth = $dbh->prepare($sql);
	  $sth->execute(array());
	  $eredmeny['jatekosok'] = $sth->fetchAll(PDO::FETCH_ASSOC);
	}
	catch (PDOException $e) {
	  $eredmeny["hibakod"] = 1;
	  $eredmeny["uzenet"] = $e->getMessage();
	}
	
	return $eredmeny;
  }

  /**
    *  @param string $vezeteknev
    *  @return Csapatok
    */
  function getcsapatok($vezeteknev){
  
	$eredmeny = array("hibakod" => 0,
					  "uzenet" => "",
					  "vezeteknev" => "",
					  "utonev" => "",
					  "csapatok" => Array());
	
	try {
	  $dbh = Database::getConnection();
	  $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
  
	  $eredmeny["vezeteknev"] = $vezeteknev;
  
	  $sql = "select labdarugoid, utonev from labdarugo where vezeteknev = :vezeteknev";
	  $sth = $dbh->prepare($sql);
	  $sth->execute(array(":vezeteknev" => $vezeteknev));
	  $labdarugo = $sth->fetch(PDO::FETCH_ASSOC);
	  $labdarugoid = $labdarugo["labdarugoid"];
	  $eredmeny["utonev"] = $labdarugo["utonev"];
  
	  $sql = "select klubid, csapatnev from klub where labdarugoid = :labdarugoid order by klubid";
	  $sth = $dbh->prepare($sql);
	  $sth->execute(array(":labdarugoid" => $labdarugoid));
	  $eredmeny['csapatok'] = $sth->fetchAll(PDO::FETCH_ASSOC);
	}
	catch (PDOException $e) {
	  $eredmeny["hibakod"] = 1;
	  $eredmeny["uzenet"] = $e->getMessage();
	}
	
	return $eredmeny;
  }


  /**
    *  @param string $vezeteknev
    *  @return Posztok
    */
  function getposzt($vezeteknev){
  
	$eredmeny = array("hibakod" => 0,
					  "uzenet" => "",
					  "vezeteknev" => "",
					  "utonev" => "",
					  "posztok" => Array());
	
	try {
	  $dbh = Database::getConnection();
	  $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
  
	  $eredmeny["vezeteknev"] = $vezeteknev;
  
	  $sql = "select labdarugoid, utonev from labdarugo where vezeteknev = :vezeteknev";
	  $sth = $dbh->prepare($sql);
	  $sth->execute(array(":vezeteknev" => $vezeteknev));
	  $labdarugo = $sth->fetch(PDO::FETCH_ASSOC);
	  $labdarugoid = $labdarugo["labdarugoid"];
	  $eredmeny["utonev"] = $labdarugo["utonev"];
  
	  $sql = "select posztid, nev from poszt where labdarugoid = :labdarugoid order by posztid";
	  $sth = $dbh->prepare($sql);
	  $sth->execute(array(":labdarugoid" => $labdarugoid));
	  $eredmeny['posztok'] = $sth->fetchAll(PDO::FETCH_ASSOC);
	}
	catch (PDOException $e) {
	  $eredmeny["hibakod"] = 1;
	  $eredmeny["uzenet"] = $e->getMessage();
	}
	
	return $eredmeny;
  }
  }
}


class Jatekos {
  /**
   * @var string
   */
  public $vezeteknev;

  /**
   * @var string
   */
  public $utonev;  
}

class Jatekosok {
  /**
   * @var integer
   */
  public $hibakod;

  /**
   * @var string
   */
  public $uzenet;  

  /**
   * @var Jatekos[]
   */
  public $jatekosok;  
}

class Csapat {
  /**
   * @var string
   */
  public $klubid;

  /**
   * @var string
   */
  public $csapatnev;  
}

class Csapatok {
  /**
   * @var integer
   */
  public $hibakod;

  /**
   * @var string
   */
  public $uzenet;  

  /**
   * @var string
   */
  public $vezeteknev;

  /**
   * @var string
   */
  public $utonev;  

  /**
   * @var Csapat[]
   */
  public $csapatok;  
}

class Poszt {
  /**
   * @var string
   */
  public $posztid;

  /**
   * @var string
   */
  public $nev;  
}

class Posztok {
  /**
   * @var integer
   */
  public $hibakod;

  /**
   * @var string
   */
  public $uzenet;  

  /**
   * @var string
   */
  public $vezeteknev;

  /**
   * @var string
   */
  public $utonev;  

  /**
   * @var Poszt[]
   */
  public $posztok;  
}
?>