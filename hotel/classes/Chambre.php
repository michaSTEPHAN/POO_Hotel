<?php
class Chambre {

    //-------------------------------------------------------------------
    // Déclaration des attributs
    //-------------------------------------------------------------------
    private int $numero;
    private float $prix;
    private bool $wifi;
    private bool $etat;
    private int $nbLits;
    private Hotel $hotel;
    private array $reservations;

    //-------------------------------------------------------------------
    // METHODE __construct : Permet de recupérer les variales passées en paramètres dans des variables
    //-------------------------------------------------------------------
    public function __construct(int $numero, float $prix, bool $wifi, bool $etat, int $nbLits, Hotel $hotel)   
    {
        $this->numero    = $numero;    
        $this->prix      = $prix;        
        $this->wifi      = $wifi;        
        $this->etat      = $etat;        
        $this->nbLits    = $nbLits;        
        $this->hotel     = $hotel;  
        $hotel->addChambre($this);   
        $this->reservations = [];  
    }

    //-------------------------------------------------------------------
    // Creation ACCESSEUR et MUTATEUR
    //-------------------------------------------------------------------

    // ACCESSEUR ET MUTATEUR du champ NUMERO
    public function getNumero(): int {
        return $this->numero;
    }
    public function setNumero(int $numero): void{
        $this->numero = $numero;
    }
    // ACCESSEUR ET MUTATEUR du champ PRIX
    public function getPrix(): float {
        return $this->prix;
    }
    public function setPrix(float $prix): void{
        $this->prix = $prix;
    }
    // ACCESSEUR ET MUTATEUR du champ WIFI
    public function getWifi(): bool {
        return $this->wifi;
    }
    public function setWifi(bool $wifi): void{
        $this->wifi = $wifi;
    }
    // ACCESSEUR ET MUTATEUR du champ ETAT
    public function getEtat(): bool {
        return $this->etat;
    }
    public function setEtat(bool $etat): void{
        $this->etat = $etat;
    }
    // ACCESSEUR ET MUTATEUR du champ NBLITS
    public function getNblits(): int {
        return $this->nbLits;
    }
    public function setNbLits(int $nbLits): void{
        $this->nbLits = $nbLits;
    }
    // ACCESSEUR ET MUTATEUR du champ HOTEL
    public function getHotel(): Hotel {
        return $this->hotel;
    }
    public function setHotel(Hotel $hotel): void{
        $this->hotel = $hotel;
    }
    //-------------------------------------------------------------------

    public function addReservations(Reservation $reservation) {
        $this->reservations[] = $reservation;
    }

    //-------------------------------------------------------------------
    // Fonction pour afficher le nom de l'hotel de la chambre
    //-------------------------------------------------------------------
    public function afficherNomHotel() {
        $nomHotel = $this->hotel->getNom();
        return $nomHotel;
    }

    //-------------------------------------------------------------------
    // Fonction pour récupérer le prix d'une chambre
    //-------------------------------------------------------------------
    public function afficherPrixChambre() {
        $nomHotel = $this->hotel->getprxi();
        return $nomHotel;
    }

}    