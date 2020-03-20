<?php
$html = file_get_contents("https://www.casa.gov.au/rpa-operator-certificate-holders");
 //get the html returned from the following url

$pokemon_doc = new DOMDocument();

libxml_use_internal_errors(TRUE); //disable libxml errors

if(!empty($html)){ //if any html is actually returned

	$pokemon_doc->loadHTML($html);
    
	libxml_clear_errors(); //remove errors for yucky html
	
	$pokemon_xpath = new DOMXPath($pokemon_doc);
//get all the h2's with an id
	$pokemon_row = $pokemon_xpath->query('//tr');
	if($pokemon_row->length > 0){
		foreach($pokemon_row as $row){
			
			echo $row->firstChild->nodeValue. "<br>";
		
		}
		/* $s4="4 ONE 4 REAL ESTATE PTY LTD ";
	     $s5=($pokemon_row[2]->firstChild->nodeValue);
	     echo strcmp($s4,$s5);*/
		/*
		$s1 =substr("4 ONE 4 REAL ESTATE PTY LTD",0,5)."<br>";
		$s2 =substr("4D SURVEYING PTY LIMITED", 0)."<br>";
        $s3 =substr("A DOYLE VIDEO PRODUCTION PTY LTD", 0)."<br>";sssss

        $s40="A DOYLE VIDEO PRODUCTION PTY LTD";*/
        /*
        $str1="4 ONE 4 REAL ESTATE PTY ";

        $str2= ($pokemon_row[2]->firstChild->nodeValue);
        echo strcmp($str1,$str2);
       
        /*echo substr($s90 ,0,5);*/

       
		


   

	}
}
?>