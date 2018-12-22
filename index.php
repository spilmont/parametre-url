<?php
/**
 * Created by PhpStorm.
 * User: Onatouvus
 * Date: 22/12/2018
 * Time: 12:57
 */

//exercice 1 :

/*index.php?nom=Nemare&prenom=Jean*/

// on recuper  les ellement dans la barre d'adresse.
$nom = $_GET["nom"];
$prenom = $_GET["prenom"];



//exercice 2 :

// on verrifie si les info son presente dans la bare adresse
if(isset($nom) && isset($prenom)){

    // on affiche les  affiche sur la page
    echo $prenom." ".$nom;
}else{
    // sinon on affiche l'erreur
    echo " ERREUR : les information ne sont pas presente dans la barre d'adresse";
}

echo "<br><br>";

//exercice 3 :

/* index.php?dateDebut=2/05/2016&dateFin=27/11/2016 */

$dateDebut = $_GET["dateDebut"];
$dateFin = $_GET["dateFin"];

if(empty($dateDebut) && empty($dateFin)){
    echo "ERREUR : les date ne sont pas renseignées ";
}else{
    echo "date de debut : ".$dateDebut.'<br> date de fin : '.$dateFin;
}

echo "<br><br>";

//exercice 4 :

/* index.php?langage=PHP&serveur=LAMP */

$langage = $_GET["langage"];
$serveur = $_GET["serveur"];

if(isset($langage) && isset($serveur)){
echo "langage : ".$langage."<br> serveur : ".$serveur;
}else{
    echo "ERREUR: impossible dacceder au information serveur";
}
echo "<br><br>";

//exercice 5 :

/*index.php?semaine=12*/

$semaine = $_GET["semaine"];

if(empty($semaine)){
    echo "ERREUR : nous ne somme pas la 12eme semaine";
}else{
echo "semaine : ".$semaine;
}
echo "<br><br>";

//exercice 6 :

/* index.php?batiment=12&salle=101 */

$batiment = $_GET["batiment"];
$salle = $_GET["salle"];

if (isset($batiment) && isset($salle)){
    echo "batiment : ".$batiment."<br> salle : ". $salle;
}else{
    echo "ERREUR: cette salle  dans ce batiment n'existe pas ";
}










