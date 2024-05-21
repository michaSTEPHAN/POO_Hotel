<?php
class Hotel {

    //-------------------------------------------------------------------
    // Déclaration des attributs
    //-------------------------------------------------------------------
    private string $nom;
    private int $nbEtoile;
    private string $adresseRue;
    private string $adresseComplement;
    private string $adresseCP;
    private string $adresseVille;
    private array $chambre;
    private array $reservation;

    //-------------------------------------------------------------------
    // METHODE __construct : Permet de recupérer les variales passées en paramètres dans des variables
    //-------------------------------------------------------------------
    public function __construct(string $nom, int $nbEtoile, string $adresseRue, string $adresseComplement, string $adresseCP, string $adresseVille) {
        $this->nom              = $nom;        
        $this->nbEtoile         = $nbEtoile;        
        $this->adresseRue       = $adresseRue;        
        $this->adresseComplement = $adresseComplement; 
        $this->adresseCP        = $adresseCP;        
        $this->adresseVille     = $adresseVille;       
        $this->chambre          = [];
        $this->reservations     = [];
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
    // ACCESSEUR ET MUTATEUR du champ NB_ETOILE
    public function getNbEtoile(): int {
        return $this->nbEtoile;
    }
    public function setNbEtoile(int $nbEtoile): void{
        $this->nbEtoile = $nbEtoile;
    }
    // ACCESSEUR ET MUTATEUR du champ ADRESSE_RUE
    public function getAdresseRue(): string {
        return $this->adresseRue;
    }
    public function setAdresseRue(string $adresseRue): void{
        $this->adresseRue = $adresseRue;
    }
    // ACCESSEUR ET MUTATEUR du champ ADRESSE_COMPLEMENT
    public function getAdresseComplement(): string {
        return $this->adresseComplement;
    }
    public function setAdresseComplement(string $adresseComplement): void{
        $this->adresseComplement = $adresseComplement;
    }
    // ACCESSEUR ET MUTATEUR du champ ADRESSE_CP
    public function getAdresseCP(): string {
        return $this->adresseCP;
    }
    public function setAdresseCP(string $adresseCP): void{
        $this->adresseCP = $adresseCP;
    }
    // ACCESSEUR ET MUTATEUR du champ ADRESSE_VILLE
    public function getAdresseVille(): string {
        return $this->adresseVille;
    }
    public function setAdresseVille(string $adresseVille): void{
        $this->adresseVille = $adresseVille;
    }
    //-------------------------------------------------------------------

    //-------------------------------------------------------------------
    // FONCTION qui permet de récupérer les infos de la chambre dans la classe HOTEL
    //-------------------------------------------------------------------
    public function addChambre(Chambre $chambre) {
        array_push($this->chambre, $chambre);
    }
    public function addReservations(Reservation $reservation) {
        $this->reservations[] = $reservation;
    }   

    //-------------------------------------------------------------------
    // FONCTION qui affiche les infos des hôtels
    //-------------------------------------------------------------------
    public function afficherInfosHotel() { 
        $ligne = "<br>Hôtel ".$this->nom."<br>".$this->adresseRue." ".$this->adresseComplement." ".$this->adresseCP." ".$this->adresseVille."<br>";
        $ligne .= "Nombre de chambres : ".count($this->chambre)."<br>";
        $ligne .= "Nombre de chambres réservées : ".count($this->reservations)."<br>";
        $ligne .= "Nombre de chambres dispo : ".count($this->chambre) - count($this->reservations)."<br>";

        return $ligne;
    }    

    //-------------------------------------------------------------------
    // FONCTION qui affiche les réservations des hôtels
    //-------------------------------------------------------------------
    public function afficherReservations() {

        $ligne = "<br>Réservations de l'hôtel ".$this->nom."<br>";
       
        if (empty($this->reservations)) {
            $ligne .= "Aucune réservations !<br>";
        } else {
            $ligne .= count($this->reservations)." Réservations<br>";
            foreach ($this->reservations as $reservation) {
                $ligne .= $reservation->afficherNomPrenom()." - ".$reservation->afficherNumeroChambre()." - ".$reservation->afficherDates()."<br>";                  
            }
        }       
        return $ligne;
    }

    //-------------------------------------------------------------------
    // FONCTION qui affiche le statut des chambres
    //-------------------------------------------------------------------
    public function afficherStatutChambres() {
        $ligne = "<br>Statut des chambres de l'hôtel ".$this->nom."<br>";
        foreach ($this->chambre as $chambre) {
            if ($chambre->getWifi()) {
                $wifi = "Oui";
            } else {
                $wifi = "Non";
            }
            if ($chambre->getEtat()) {
                $etat = "Réservée";
            } else {
                $etat = "Disponible";
            }
            $ligne .= " Chambre ".$chambre->getNumero()." - ".$chambre->getPrix()." € - ".$wifi." - ".$etat."<br>";   
        }
        return $ligne;
    }
}