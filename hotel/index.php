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
$hotelHilton   = new Hotel("Hilton **** Strasbourg",4,"Route de Colmar","","67000","Strasbourg");
$hotelIbis     = new Hotel("Ibis ** Sélestat",2,"Rue principale","","67600","Sélestat");

//-------------------------------------------------------------------
// Création des chambres
//-------------------------------------------------------------------
$chambre1 = new Chambre(1,300,true,false,1,$hotelHilton);
$chambre2 = new Chambre(2,350,true,false,2,$hotelHilton);
$chambre3 = new Chambre(3,200,true,false,1,$hotelHilton);
$chambre4 = new Chambre(4,100,true,false,2,$hotelIbis);
$chambre5 = new Chambre(5,120,true,false,3,$hotelHilton);
$chambre6 = new Chambre(6,120,true,false,3,$hotelHilton);
$chambre7 = new Chambre(7,120,true,false,3,$hotelHilton);

//-------------------------------------------------------------------
// Création des clients
//-------------------------------------------------------------------
$clientMarion  = new Client("STEPHAN","Marion","marion.stephan@1234.com","0606060606");
$clientPauline = new Client("STEPHAN","Pauline","pauline.stephan@5678.com","0707070707");

//-------------------------------------------------------------------
// Création des reservations
//-------------------------------------------------------------------
$reservation1 = new Reservation("01-07-2024","14-07-2024",$clientMarion,$chambre1);
$reservation2 = new Reservation("01-07-2024","01-08-2024",$clientMarion,$chambre3);
$reservation3 = new Reservation("01-07-2024","14-07-2024",$clientPauline,$chambre1);
$reservation4 = new Reservation("14-07-2024","28-07-2024",$clientPauline,$chambre4);
$reservation5 = new Reservation("01-08-2024","14-08-2024",$clientMarion,$chambre5);
$reservation6 = new Reservation("15-07-2024","31-07-2024",$clientPauline,$chambre1);

//-------------------------------------------------------------------
// On affiche les informations
//-------------------------------------------------------------------
echo "----------------------------------------------------------<br>";
echo "  1. Affichage des infos des hôtels                       <br>";
echo "----------------------------------------------------------<br>";
echo $hotelHilton->afficherInfosHotel();

echo "<br>----------------------------------------------------------<br>";
echo "  2. Affichage des reservation de chaque hôtel            <br>";
echo "----------------------------------------------------------<br>";
echo $hotelHilton->afficherReservations();
echo $hotelIbis->afficherReservations();

echo "<br>----------------------------------------------------------<br>";
echo "  3. Affichage des reservation de chaque client           <br>";
echo "----------------------------------------------------------<br>";
echo $clientMarion->afficherReservations();
echo $clientPauline->afficherReservations();

echo "<br>----------------------------------------------------------<br>";
echo "  4. Affichage du statut des chambres                     <br>";
echo "----------------------------------------------------------<br>";
echo $hotelHilton->afficherStatutChambres();


    