<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Podstawy php </title>
	<meta name="keywords" content="szablon strony">
	<meta name="description" content="Podstawy">
	<meta name="author" content="Maria Libera">
</head>
<body>
<?php
print("PHP");
?>
echo ('Zaczynam poznawać PHP');
print ("<br>");
echo ("Zaczynam poznawać PHP");
print ("<br>");
print ('Zaczynam poznawać PHP');
print ("<br>");
print ("Zaczynam poznawać PHP");
print ("Zaczynam poznawać PHP. "."Lubię PHP.");
<?php
define ("SZKOLA", "ZSM");
print (SZKOLA." to moja szkoła.");
print ("Moja szkoła to ".SZKOLA.".");
?>
$zmienna="To jest zmienna typu string";
$zmienna='To też jest zmienna typu string';
$imie="Adam";
$nazwisko="Kowalski";
$tekst="Nazywam się $imie $nazwisko";
print ($tekst);
$tekst='Nazywam się $imie $nazwisko';
print ($tekst);
$liczba1=21;
$liczba2=356;
$liczba3=35.46;
$liczba4 = $liczba1 + 2;
$suma=$liczba1+$liczba2+$liczba3;
print ($liczba4);
print ($suma);


	
</body>
</html>
