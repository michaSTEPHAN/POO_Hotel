<?php
class Reservation {

    //-------------------------------------------------------------------
    // Déclaration des attributs
    //-------------------------------------------------------------------
    private DateTime $dateDebut;
    private DateTime $dateFin; 
    private Client $client;        
    private Chambre $chambre;       
    
    //-------------------------------------------------------------------
    // METHODE __construct : Permet de recupérer les variales passées en paramètres dans des variables
    //-------------------------------------------------------------------
    public function __construct(string $dateDebut, string $dateFin, Client $client, Chambre $chambre) {
        $this->dateDebut    = new DateTime($dateDebut);        
        $this->dateFin      = new DateTime($dateFin);                      

        $this->chambre = $chambre;  
        $this->chambre->addReservations($this);
        $this->chambre->getHotel()->addReservations($this);
        $this->chambre->setEtat(true);

        $this->client = $client;  
        $client->addReservations($this);  

    }

    //-------------------------------------------------------------------
    // Creation ACCESSEUR et MUTATEUR
    //-------------------------------------------------------------------
    // ACCESSEUR ET MUTATEUR du champ DATE_DEBUT
    public function getDateDebut(): DateTime {
        return $this->dateDebut;
    }
    public function setDateDebut(DateTime $dateDebut): void{
        $this->dateDebut = $dateDebut;
    }
    // ACCESSEUR ET MUTATEUR du champ DATE_FIN
    public function getDateFin(): DateTime {
        return $this->dateFin;
    }
    public function setDateFin(DateTime $dateFin): void{
        $this->dateFin = $dateFin;
    }
    // ACCESSEUR ET MUTATEUR du champ CHAMBRE
    public function getChambre(): Chambre {
        return $this->chambre;
    }
    public function setChambre(Chambre $chambre): void{
        $this->chambre = $chambre;
    }
    // ACCESSEUR ET MUTATEUR du champ CLIENT
    public function getClient(): Client {
        return $this->client;
    }
    public function setClient(Client $client): void{
        $this->client = $client;
    }
    //-------------------------------------------------------------------

    //-------------------------------------------------------------------
    // Fonction pour afficher les dates de reservation d'une chambre
    //-------------------------------------------------------------------
    public function afficherDates() {
        $date = "du " . $this->dateDebut->format("d-m-Y") . " au " . $this->dateFin->format("d-m-Y") . "";
        return $date;
    }

    //-------------------------------------------------------------------
    // Fonction pour afficher le numero de la chambre
    //-------------------------------------------------------------------
    public function afficherNumeroChambre() {
        $numeroChambre = "Chambre ".$this->chambre->getNumero();
        return $numeroChambre;
    }

    //-------------------------------------------------------------------
    // Fonction pour afficher le nom + prenom de la personne
    //-------------------------------------------------------------------
    public function afficherNomPrenom() {
        $nomPrenom = $this->client->getNom(). " ".$this->client->getPrenom();
        return $nomPrenom;
    }

    //-------------------------------------------------------------------
    // Fonction pour afficher les infos d'unbe chambre (nbLits/prix/wifi)
    //-------------------------------------------------------------------
    public function afficherInfoChambre() {

        if ($this->chambre->getWifi()) {
            $wifi = "Oui";
        } else {
            $wifi = "Non";
        }

        $numeroChambre = " (".$this->chambre->getNblits()." lits - ".$this->chambre->getPrix()." € - wifi : ".$wifi.") ";
        return $numeroChambre;
    }

    //-------------------------------------------------------------------
    // Fonction pour afficher le nom de l'hotel correspondant à 1 reservation
    //-------------------------------------------------------------------
    public function afficherNomHotel() {
        $nomHotel = $this->chambre->afficherNomHotel();
        return $nomHotel;
    }

     //-------------------------------------------------------------------
    // Fonction qui récupère le prix d'une chambre
    //-------------------------------------------------------------------
    public function afficherPrixChambre() {
        $prixChambre = $this->chambre->getPrix();
        return $prixChambre;
    }

}    