<?php
//Array with names
$a[]="Acarbose";
$a[]="ACE inhibitor";
$a[]="Acetazolamide";
$a[]="Acetylcysteine";
$a[]="Biotin";
$a[]="Bisacodyl";
$a[]="Bisoprolol";
$a[]="Cefotaxim";
$a[]="Ceftriaxone";
$a[]="Ceftazidime";
$a[]="Desoximetasone ";
$a[]="Etoricoxib";
$a[]="Fluphenazine";
$a[]="Indinavir ";
$a[]="Hydrochlorothiazide ";
$a[]="Kotrimoksazol ";
$a[]="Mebendazole ";
 

//get the parameter from URL
$q=$_REQUEST["q"];
$hint="";

//Lookup all hints from array if $q is different from ""
if ($q !== ""){
	$q=strtolower($q);
	$len=strlen($q);
	foreach($a as $name){
	if (stristr($q,substr($name,0,$len))){
	if ($hint === ""){
	$hint = $name;
	} else {
	$hint .=", $name";
	}
	}
	}
	}

	//Output no suggestions if no hint was found or output correct values
	echo $hint === ""? "No Suggestions" : $hint;
	?>
