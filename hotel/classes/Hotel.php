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
    // FONCTION qui affiche les infos des hôtels
    //-------------------------------------------------------------------
    public function afficherInfosHotel() { 
        $ligne = "<br>Hôtel ".$this->nom."<br>";
        return $ligne;
    }    
    //     //$ligne = "<br>Comptes de ".$this->nom." ".$this->prenom." né(e) le ". $naiss->format('d-m-Y')." à ".$this->ville." âge ".$age." ans : <br>";
    //     //$ligne = "<br>Comptes de ".$this->nom."<br>";
    //     return $ligne;
    // {

    //-------------------------------------------------------------------
    // FONCTION qui permet de récupérer les infos de la chambre dans la classe HOTEL
    //-------------------------------------------------------------------
    public function addChambre(Chambre $chambre) {
        array_push($this->chambre, $chambre);
    }
}