<?php

//on souhaite develloper un système de gestion des utilisateurs 
//d'une application. il existe plusieurs types d'utlisateurs :
//- client
//- employé
//- administrateur

// travail a faire :

// Partie 1 : Classe de base 
// creer u ne base "Personne" contenant:
//-attributs privés : id, nom, email,
//- un constructeur
//- des getters et setters
//- une méthode afficherinfo()

// Partie 2 : heritage
//Créer une classe Utilisateur qui hérite de Personne
//- ajouter:
//- login
//- mot de passe
//- une méthode seconnecter() 

//Partie 3 : Classes filles
//creer les classes suivantes:
//— Client
//    — Attribut : typeClient (simple ou premium)
//  — Méthode calculerReduction($montant)
//— Employe
//    — Attribut : salaire
//    — Méthode calculerSalaireAnnuel()
//— Administrateur
//    — Méthode supprimerUtilisateur()

//Partie 4 : Redéfinition
//Dans la classe Client, redéfinir la méthode afficherInfos() afin d’afficher également
//le type de client.
//Utiliser le mot-clé parent.

//Partie 5 : Classe abstraite
//Transformer la classe Utilisateur en classe abstraite.
//Ajouter la méthode abstraite :
//abstract public function afficherRole() ;
//Implémenter cette méthode dans chaque classe fille.

//Partie 6 : Interface Authentifiable
//Créer une interface Authentifiable :
    //interface Authentifiable {
    //public function seConnecter() ;
    //}
//Faire implémenter cette interface par la classe Utilisateur.

//Partie 7 : Interface Affichable
//Créer une interface Affichable :
//i n t e r f a c e Aff i c h a b l e {
//p u bli c f u n c ti o n a f f i c h e r ( ) ;
//}
//Faire implémenter cette interface par vos classes.

//Partie 8 : Polymorphisme
//Créer la fonction suivante :
//f u n c ti o n a f f i c h e r U t i l i s a t e u r ( Aff i c h a b l e $u ) {
//$u−>a f f i c h e r ( ) ;
//}
//Tester avec différents objets.

//Partie 9 : Statique
//Dans la classe Utilisateur :
//— Ajouter un attribut statique nombreUtilisateurs
//— L’incrémenter dans le constructeur
//— Créer une méthode statique afficherNombre()

//Partie 10 : Constantes
//Dans la classe Client, définir :
//co n s t TAUX_SIMPLE = 0 . 0 5 ;
//co n s t TAUX_PREMIUM = 0 . 1 5 ;
//Utiliser ces constantes dans le calcul de réduction.
//Tests
//Dans le programme principal :
//— Créer un client
//— Créer un employé
//— Créer un administrateur
//— Tester les méthodes :
//— afficher
//— seConnecter
//— calculerReduction
//— calculerSalaireAnnuel
//— polymorphisme




?>