<?php

interface Authentifiable {
    public function seConnecter();
}

interface Affichable {
    public function afficher();
}

//  CLASSE PERSONNE 
class Personne {
    private $id;
    private $nom;
    private $email;

    public function __construct($id, $nom, $email) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
    }

    public function afficherInfos() {
        return "ID: $this->id, Nom: $this->nom, Email: $this->email";
    }
}

//  CLASSE ABSTRAITE 
abstract class Utilisateur extends Personne implements Authentifiable, Affichable {
    protected $login;
    protected $motDePasse;
    protected static $nombreUtilisateurs = 0;

    public function __construct($id, $nom, $email, $login, $motDePasse) {
        parent::__construct($id, $nom, $email);
        $this->login = $login;
        $this->motDePasse = $motDePasse;
        self::$nombreUtilisateurs++;
    }

    public function seConnecter() {
        return "Connexion de $this->login réussie.";
    }

    public static function afficherNombre() {
        return "Nombre d'utilisateurs : " . self::$nombreUtilisateurs;
    }

    abstract public function afficherRole();
}

//  CLASSE CLIENT 
class Client extends Utilisateur {
    private $typeClient;

    const TAUX_SIMPLE = 0.05;
    const TAUX_PREMIUM = 0.15;

    public function __construct($id, $nom, $email, $login, $motDePasse, $typeClient) {
        parent::__construct($id, $nom, $email, $login, $motDePasse);
        $this->typeClient = $typeClient;
    }

    public function calculerReduction($montant) {
        if ($this->typeClient == "premium") {
            return $montant * self::TAUX_PREMIUM;
        }
        return $montant * self::TAUX_SIMPLE;
    }

    public function afficherInfos() {
        return parent::afficherInfos() . " | Type: $this->typeClient";
    }

    public function afficherRole() {
        return "Je suis un client";
    }

    public function afficher() {
        return $this->afficherInfos();
    }
}

//  EMPLOYE 
class Employe extends Utilisateur {
    private $salaire;

    public function __construct($id, $nom, $email, $login, $motDePasse, $salaire) {
        parent::__construct($id, $nom, $email, $login, $motDePasse);
        $this->salaire = $salaire;
    }

    public function calculerSalaireAnnuel() {
        return $this->salaire * 12;
    }

    public function afficherRole() {
        return "Je suis un employé";
    }

    public function afficher() {
        return $this->afficherInfos() . " | Salaire: $this->salaire";
    }
}

//  CLASSE ADMIN 
class Administrateur extends Utilisateur {

    public function supprimerUtilisateur() {
        return "Utilisateur supprimé";
    }

    public function afficherRole() {
        return "Je suis un administrateur";
    }

    public function afficher() {
        return $this->afficherInfos();
    }
}

//  POLYMORPHISME 
function afficherUtilisateur(Affichable $u) {
    echo $u->afficher() . "<br>";
}

//   TEST 
$client = new Client(1, "Daniel", "daniel@mail.com", "dan", "1234", "premium");
$employe = new Employe(2, "Jean", "jean@mail.com", "jean", "1234", 500);
$admin = new Administrateur(3, "Admin", "admin@mail.com", "admin", "1234");

echo $client->seConnecter() . "<br>";
echo "Réduction: " . $client->calculerReduction(1000) . "<br>";

echo "Salaire annuel: " . $employe->calculerSalaireAnnuel() . "<br>";

afficherUtilisateur($client);
afficherUtilisateur($employe);
afficherUtilisateur($admin);

echo Utilisateur::afficherNombre();

?>