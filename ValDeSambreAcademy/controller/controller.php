<?php


if(isset($_GET["action"])){
    if($_GET["action"]=="inscription"){
      require("../model/gestionInscription.php");


      if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['numTel']) && isset($_POST['dateNaissance']) && isset($_POST['clubActu']) && isset($_POST['email']) && isset($_POST['choixEvent']) ) {
        $inscription=new Inscription([]);

        $conn = new connexionBDD();
        $db = $conn->connexionDB();
        $gestionInscription = new gestionInscription($db);

        $inscription->setNom($_POST['nom']);
        $inscription->setPrenom($_POST['prenom']);
        $inscription->setTelp($_POST['numTel']);
        $inscription->setDateNaissance($_POST['dateNaissance']);
        $inscription->setClubActu($_POST['clubActu']);
        $inscription->setMail($_POST['email']);
        echo($_POST["choixEvent"]);

        $req=$db->query("SELECT id from event WHERE nom='".$_POST["choixEvent"]."' AND cloture=0");
        while($donnees = $req ->fetch(PDO::FETCH_ASSOC)){
          echo($donnees["id"]);
          $inscription->setIdEvent($donnees["id"]);
        }

        $gestionInscription->addInscription($inscription);

        header("Location:/ValDeSambreAcademy/vue/sinscrire.php?inscription=valide");

      }

    }
    else if($_GET["action"]=="mail"){
      require("../model/gestionInscription.php");

      $conn = new connexionBDD();
      $db = $conn->connexionDB();
      $gestionInscription = new gestionInscription($db);
      $gestionInscription->sendMail($_GET["mail"]);


    }

    else if($_GET["action"]=="affiche" && isset($_GET["id"])){
        require("../model/connexionBDD.php");

      $conn = new connexionBDD();
      $db = $conn->connexionDB();

      $req=$db->query("SELECT url from event WHERE id=".$_GET["id"]);
      while($donnees = $req ->fetch(PDO::FETCH_ASSOC)){
        echo($donnees["url"]);
      }



    }



}
?>
