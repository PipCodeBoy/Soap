<?php

$type = $_GET["sel"];

 $a = $_GET['n1'];
 $b = $_GET['n2'];
require_once ('lib/nusoap.php');

$wsdl="http://localhost/nusoap/calc_server.php?wsdl";
$client = new nusoap_client($wsdl,'wsdl');
$params = array('a' => $a, 'b'=>$b);
$result= $client->call($type, $params);
echo '<h2>Resultat</h2><pre>';
$err = $client->getError();
if ($err) {
	// Display the error
	echo '<p><b>Error: '.$err.'</b></p>';
} else {
	// Display the result
	print_r($result);
}

?>



