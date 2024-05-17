<h1>Exercice HOTEL</h1>
<p>A partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations 
   de chambres par des clients dans différents hôtels<br></p>
<h2>Résultat</h2>

<?php

//-------------------------------------------------------------------
// Déclaration des classes nécéssaires
//-------------------------------------------------------------------
require "classes/Chambre.php";
require "classes/Client.php";
require "classes/Hotel.php";
require "classes/Reservation.php";

//-------------------------------------------------------------------
// Création des hôtels
//-------------------------------------------------------------------
$hotel1 = new Hotel("Hilton",4,"Route de Colmar","","67000","Strasbourg");
$hotel2 = new Hotel("Ibis",2,"Rue principale","","67600","Sélestat");
$hotel3 = new Hotel("Formule 1",1,"Rue de la victoire","","67500","Haguenau");

//-------------------------------------------------------------------
// Création des chambres
//-------------------------------------------------------------------
$chambre1 = new Chambre(300,true,true,1,$hotel1);
$chambre2 = new Chambre(350,true,true,2,$hotel1);
$chambre3 = new Chambre(200,true,true,1,$hotel2);
$chambre4 = new Chambre(100,true,true,2,$hotel3);
$chambre5 = new Chambre(120,true,true,3,$hotel3);

//-------------------------------------------------------------------
// On affiche les informations
//-------------------------------------------------------------------
echo "----------------------------------------------------------<br>";
echo "     affichage des infos des hôtels                       <br>";
echo "----------------------------------------------------------<br>";
echo $hotel1->afficherInfosHotel();
echo $hotel2->afficherInfosHotel();
echo $hotel3->afficherInfosHotel();

echo "----------------------------------------------------------<br>";
echo "     affichage du statut des chambres                     <br>";
echo "----------------------------------------------------------<br>";
echo $chambre1->afficherInfosChambre();
echo $chambre2->afficherInfosChambre();
echo $chambre3->afficherInfosChambre();
echo $chambre4->afficherInfosChambre();
echo $chambre5->afficherInfosChambre();

