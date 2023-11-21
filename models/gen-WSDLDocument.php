<?php
	//error_reporting(0);
	require 'soapjatekosok_model.php';
	require 'WSDLDocument/WSDLDocument.php';
	$wsdl = new WSDLDocument('Soapjatekosok_Model', "http://localhost/nb1/models/szerver.php", "http://localhost/nb1/models/");
	$wsdl->formatOutput = true;
	$wsdlfile = $wsdl->saveXML();
	echo $wsdlfile;
	file_put_contents ("soapjatekosok_model.wsdl" , $wsdlfile);
?>
