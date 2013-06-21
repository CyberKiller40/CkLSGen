#!/usr/bin/php -q
<?php

$num=9; //ilość scenek do wylosowania

$stories=array(	"Bełkoczący starzec", //oryginalne
		"Zasadzka kultystów",
		"Ukryty pokój w bibliotece",
		"Dotarcie do jaskini",
		"Koszmar w ciemności",
		"Zyskanie przyjaciela",
		"Pościg w góry",
		"Załamanie pogody",
		"Stare drzewo", //by CK
		"Tajemniczy kloszard",
		"Hałas w lesie",
		"Samotna latarnia",
		"Zakurzona księga",
		"Rozbite skrzynie",
		"Drewniana figurka",
		"Obsydianowy posąg",
		"Uciekający pociąg",
		"Nowi wrogowie",
		"Nadmorskie urwisko",
		"Ponure dziecko",
		"Wypadek na drodze", //by Gandalf
		"Wściekły pies",
		"Tajemnicze zjawisko",
		"Wyścig z czasem",
		"Świadkowie morderstwa",
		"Śmiertelne niebezpieczeństwo",
		"Zagubieni w lesie",
		"Oskarżeni o przestępstwo",
		"Rozgadany niemowa"
		);

shuffle($stories);

for($i=0;$i<($num-1);$i++)
{
	print($i . ". " . $stories[$i] . "\n");
}

print($i+1 . ". Ostateczna bitwa\n"); //ostatni wpis, z oryginalnych

?>