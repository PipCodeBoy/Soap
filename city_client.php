<?php


 $b = $_GET['n2'];
require_once ('lib/nusoap.php');
$wsdl="http://www.webservicex.net/globalweather.asmx?wsdl";
$client = new nusoap_client($wsdl,'wsdl');
$params = array('CountryName'=>$b);
$xml= $client->call('GetCitiesByCountry', $params);
$xml= implode(" ", $xml);
$result= new SimpleXMLElement($xml);
echo '<h2>Resultat</h2><pre>';
$err = $client->getError();
if ($err) {
	// Display the error
	echo '<p><b>Error: '.$err.'</b></p>';
} else {
	echo "<table border=1>";
		echo "<tr><th>Country</th><th>City</th></tr>";
		foreach ($result->Table as $table) {
			$table1 = (string)$table->Country;
			$table2 = (string)$table->City;
			//var_dump($table);
			//echo $table[0];
			echo "<tr><td>".$table1."</td><td>".$table2."</td></tr>";
		}
	echo "</table>";
}
?>