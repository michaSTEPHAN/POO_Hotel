<?php
class Client {

    //-------------------------------------------------------------------
    // Déclaration des attributs
    //-------------------------------------------------------------------
    private string $nom;
    private string $prenom;
    private string $email;
    private string $telephone;
    private array $reservations;

    //-------------------------------------------------------------------
    // METHODE __construct : Permet de recupérer les variales passées en paramètres dans des variables
    //-------------------------------------------------------------------
    public function __construct(string $nom, string $prenom, string $email, string $telephone)   
    {
        $this->nom          = $nom;        
        $this->prenom       = $prenom;        
        $this->email        = $email;        
        $this->telephone    = $telephone;        
        $this->reservation  = [];
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
    public function getReservation() {
        return $this->reservation;
    }
    public function setReservation($reservation): void{
        $this->reservation[] = $reservation;
    }
    //-------------------------------------------------------------------

    public function addReservations(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    }

    //-------------------------------------------------------------------
    // FONCTION qui calcul le prix du sejour
    //-------------------------------------------------------------------
    public function calculerPrixSejour()
    {
        $total = 0;
        foreach ($this->reservations as $reservation) {
            $date1   = $reservation->getDateDebut();
            $date2   = $reservation->getDateFin();
            $nbJours = $date1->diff($date2);
            $total += $nbJours->d * $reservation->afficherPrixChambre();
        }
        return $total;
    }

    //-------------------------------------------------------------------
    // FONCTION qui affiche les réservations des hôtels
    //-------------------------------------------------------------------
    public function afficherReservations() {

        $ligne = "<br>Réservations de ".$this->nom." ".$this->prenom."<br>";
       
        if (empty($this->reservations)) {
            $ligne .= "Aucune réservations !<br>";
        } else  {        
            $ligne .= count($this->reservations)." Réservations<br>";
             foreach ($this->reservations as $reservation) {
                  $ligne .= $reservation->afficherNomHotel()." / ".$reservation->afficherNumeroChambre()." ".$reservation->afficherInfoChambre()." ".$reservation->afficherDates()."<br>";
             }
        }
        $ligne .= "Total : " . $this->calculerPrixSejour() . " €<br>";     
        return $ligne;
    }

}    