<?php
$wilders = $wildersName = $wildersMail = $wildersLanguage = $name = array();


$lines = file('wilders.csv', FILE_IGNORE_NEW_LINES);

foreach ($lines as $key => $value)
{
    $wilders[$key] = str_getcsv($value);
}

foreach ($wilders as $wilder => $description) {
	$wildersName[$wilder] = $description[0];
	$wildersMail[$wilder] = $description[2];
	$wildersLanguage[$wilder] = $description[3];
	$name[$wilder] = explode(" ", $description[0]);
}

?>