<?php
class Reservation {

    //-------------------------------------------------------------------
    // Déclaration des attributs
    //-------------------------------------------------------------------
    private datetime $dateDebut;
    private datetime $dateFin; 
    private Chambre $chambre;       // Permet de faire le lien avec la classe CHAMBRE
    private Client $client;         // Permet de faire le lien avec la classe CLIENT

    //-------------------------------------------------------------------
    // METHODE __construct : Permet de recupérer les variales passées en paramètres dans des variables
    //-------------------------------------------------------------------
    public function __construct(datetime $dateDebut, datetime $dateFin, Chambre $chambre, Client $client) {
        $this->dateDebut    = $dateDebut;        
        $this->dateFin      = $dateFin;                      
        $this->chambre      = $chambre;  
        $chambre->addChambreRes($this);  
        $this->client       = $client;  
        $client->addClientRes($this);  
    }

    //-------------------------------------------------------------------
    // Creation ACCESSEUR et MUTATEUR
    //-------------------------------------------------------------------
    // ACCESSEUR ET MUTATEUR du champ DATE_DEBUT
    public function getDateDebut(): string {
        return $this->dateDebut;
    }
    public function setDateDebut(string $dateDebut): void{
        $this->dateDebut = $dateDebut;
    }
    // ACCESSEUR ET MUTATEUR du champ DATE_FIN
    public function getDateFin(): string {
        return $this->dateFin;
    }
    public function setDateFin(string $dateFin): void{
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

}    