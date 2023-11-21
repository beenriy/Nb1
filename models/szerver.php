<?php
	require("soapjatekosok_model.php");
	$server = new SoapServer("soapjatekosok_model.wsdl");
	$server->setClass('Soapjatekosok_Model');
	$server->handle();
?>
