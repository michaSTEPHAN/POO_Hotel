<?php
class Client {

    //-------------------------------------------------------------------
    // Déclaration des attributs
    //-------------------------------------------------------------------
    private string $nom;
    private string $prenom;
    private string $email;
    private string $telephone;
    private Reservation $reservation;   // Permet de faire le lien avec la classe RESERVATION

    //-------------------------------------------------------------------
    // METHODE __construct : Permet de recupérer les variales passées en paramètres dans des variables
    //-------------------------------------------------------------------
    public function __construct(string $nom, string $prenom, string $email, string $telephone, Reservation $reservation)   
    {
        $this->nom          = $nom;        
        $this->prenom       = $prenom;        
        $this->email        = $email;        
        $this->telephone    = $telephone;        
        $this->reservation  = $reservation;  
        $reservation->addClient($this);      
    }

    //-------------------------------------------------------------------
    // Creation ACCESSEUR et MUTATEUR
    //-------------------------------------------------------------------
    // ACCESSEUR ET MUTATEUR du champ NOM
    public function getNom(): string {
        return $this->nom;
    }
    public function setNom(string $nom): void{
        $this->nom = $nom;
    }
    // ACCESSEUR ET MUTATEUR du champ PRENOM
    public function getPrenom(): string {
        return $this->prenom;
    }
    public function setPrenom(string $prenom): void{
        $this->prenom = $prenom;
    }
    // ACCESSEUR ET MUTATEUR du champ EMAIL
    public function getEmail(): string {
        return $this->email;
    }
    public function setEmail(string $email): void{
        $this->email = $email;
    }
    // ACCESSEUR ET MUTATEUR du champ TELEPHONE
    public function getTelephone(): string {
        return $this->telephone;
    }
    public function setTelephone(string $telephone): void{
        $this->telephone = $telephone;
    }
    // ACCESSEUR ET MUTATEUR du champ RESERVATION
    public function getReservation(): Reservation {
        return $this->reservation;
    }
    public function setReservation(Reservation $reservation): void{
        $this->reservation = $reservation;
    }
    //-------------------------------------------------------------------
}    