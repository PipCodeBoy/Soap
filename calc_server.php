<?php
	require_once 'lib/nusoap.php';

	$soap = new soap_server;
	$soap->configureWSDL('AddService', 'http://localhost/nusoap/');
	$soap->wsdl->schemaTargetNamespace = 'http://localhost/serveis1';
	$soap->register('Add', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://localhost/serveis1');
	$soap->register('minus', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://localhost/serveis1');
	$soap->register('multiply', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://localhost/serveis1');
	$soap->register('divide', array('a' => 'xsd:int', 'b' => 'xsd:int'),array('c' => 'xsd:int'), 'http://localhost/serveis1');
	$soap->service(isset($HTTP_RAW_POST_DATA) ?$HTTP_RAW_POST_DATA : '');

function Add($a, $b){
	return $a + $b;
}

function minus($a, $b){
	return $a - $b;
}

function multiply($a, $b){
	return $a * $b;
}

function divide($a, $b){
	return $a / $b;
}
?>

