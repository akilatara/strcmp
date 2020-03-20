<?php
$html = str_file_get_contents("https://www.casa.gov.au/rpa-operator-certificate-holders"); //get the html returned from the following url

$pokemon_doc = new DOMDocument();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is actually returned

	$pokemon_doc->loadHTML($html);
	libxml_clear_errors(); //remove errors for yucky html
	
	$pokemon_xpath = new DOMXPath($pokemon_doc);

	//get all the h2's with an id
	$pokemon_row = $pokemon_xpath->query('//tr');
/*echo $row->nodeValue . "<br/>";*/
	if($pokemon_row->length > 0){
		/*foreach($pokemon_row as $row){
			
			echo $row->firstChild->nodeValue. "<br>";
		
		}
	     */
		echo $pokemon_row[2]->firstChild->nodeValue;
		/*$s6="50 4 ONE 4 REAL ESTATE PTY LTD"*/
		/*echo gettype($pokemon_row[2]->firstChild->nodeValue);*/
		/*echo strcmp($s5, $s6);*/
		/*echo $pokemon_row[2]->firstChild->nodeValue;
		echo substr("4 ONE 4 REAL ESTATE PTY LTD",0,5)."<br>";
		echo substr("4D SURVEYING PTY LIMITED", 0)."<br>";
        echo substr("A DOYLE VIDEO PRODUCTION PTY LTD", 0)."<br>";


	
*/
		/*//$s1 .= trim($s1);
		$s7='3FB AERWORX PTY. LTD.';
		$s6='3FB AERWORX PTY. LTD.';
		if($s5==$s6)
		{
			echo 'matched';
		}
		else
		{
			echo'unmatched';
		}
		echo $s5;
		echo strcmp($s5, $s6);
		echo gettype($s6);
		//echo "Value of S1:".$s1;
		//echo "Value of S2:".$s2;*/
		/*print_r($pokemon_row[1]->firstChild->nodeValue);*/
	
	}
}
?>