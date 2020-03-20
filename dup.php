<?php
$html = file_get_contents("https://www.casa.gov.au/rpa-operator-certificate-holders");
$pokemon_doc = new DOMDocument();
libxml_use_internal_errors(TRUE);
if(!empty($html))
{ 
    $pokemon_doc->loadHTML($html);
    libxml_clear_errors(); 
	$pokemon_xpath = new DOMXPath($pokemon_doc);
	$pokemon_row = $pokemon_xpath->query('//tr');
if($pokemon_row->length > 0)
	{
		 $s4="A.C.N. 628 301 066 PTY LTD T/A SEQUOR ANALYTI";
	     $s5=($pokemon_row[5]->firstChild->nodeValue);
	     echo strcmp(trim($s4),trim($s5));
	     echo"<br>";
	     var_dump($s5);
	}
}
?>