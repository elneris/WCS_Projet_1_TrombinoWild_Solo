<?php

$lines = file('wilders.csv', FILE_IGNORE_NEW_LINES);

foreach ($lines as $key => $value)
{
    $wilders[$key] = str_getcsv(htmlspecialchars($value));
    $wildersPresentation[] = array_slice($wilders[$key],5,null,true);

}

foreach ($wilders as $wilder => $description) {
	$wildersName[$wilder] = $description[0];
	$wildersMail[$wilder] = $description[2];
	$wildersLanguage[$wilder] = $description[3];
	$name[$wilder] = explode(" ", $description[0]);
	$gitHub[$wilder] = $description[4];
	$wildersAge[$wilder] = $description[1];


}

?>
