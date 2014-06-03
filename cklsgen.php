#!/usr/bin/php -q
<?php

/*
	CkLSgen - generates story titles for Lovecraftian Shorts, Polish version
	Copyright (C) 2013 Łukasz "Cyber Killer" Korpalski

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

$num=9; //ilość scenek do wylosowania

$stories=array(	
	//oryginalne
	"Bełkoczący starzec",
	"Zasadzka kultystów",
	"Ukryty pokój w bibliotece",
	"Dotarcie do jaskini",
	"Koszmar w ciemności",
	"Zyskanie przyjaciela",
	"Pościg w góry",
	"Załamanie pogody",
	//by CK
	"Stare drzewo",
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
	"Otwarty grób",
	"Rozbity samochód",
	"Wyłamane drzwi",
	"Wypalone świece",
	"Park w deszczu",
	"Spotkanie w barze",
	"Biuro detektywa",
	"Malowidło na murze",
	"Wściekły pies",
	"Martwe ptaki",
	"Figurki z origami",
	"Dziura w ziemi",
	"Wycie w nocy",
	"Płacząca wierzba",
	"Pusty parking",
	"Plama na drodze",
	//by Gandalf
	"Wypadek na drodze",
	"Wściekły pies",
	"Tajemnicze zjawisko",
	"Wyścig z czasem",
	"Świadkowie morderstwa",
	"Śmiertelne niebezpieczeństwo",
	"Zagubieni w lesie",
	"Oskarżeni o przestępstwo",
	"Rozgadany niemowa",
	//by MaQ
	"Zaniedbany cmentarz",
	"Opuszczony kościół",
	"Kamienny gargulec",
	"Rodzinna krypta",
	"Przewrócone drzewo",
	"Wykolejony pociąg",
	"Pomnik w lesie",
	"Żelazny most",
	"Ruiny zamku",
	"Zniszczona droga",
	"Opuszczona kamienica",
	"Natrętny żebrak",
	"Agresywni młodociani",
	"Nieprzychylny policjant",
	"Odrażająca prostytutka",
	"Śmierdzący pies",
	"Zwłoki w krzakach"
);

shuffle($stories);

for($i=0;$i<($num-1);$i++)
{
	if($num>9 && $i+1<10)
	{
		$space=" ";
	}
	else
	{
		$space="";
	}
	print($space . ($i+1) . ". " . $stories[$i] . "\n");
}

print($space . ($i+1) . ". Ostateczna bitwa\n"); //ostatni wpis, z oryginalnych

?>
