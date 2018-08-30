<?php


require_once('inscription.php');
require_once('connexionBDD.php');
require_once('../PHPMailer-master/PHPMailerAutoload.php');

class gestionInscription{

  private $db;

  /**
   * @return mixed
   */
  public function getDb()
  {
      return $this->db;
  }

  /**
   * gestionEtudiant constructor.
   * @param $db
   */
  public function __construct($db)
  {
      $this->db = $db;
  }

  public function addInscription(Inscription $inscription)
  {

    echo("ok".$inscription->getIdEvent());
      $req = $this->getDb()->prepare("INSERT INTO inscription (nom, prenom, telp, mail, dateNaissance, clubActu, idEvent) VALUES (:nom, :prenom, :telp, :mail, :dateNaissance, :clubActu, :idEvent)");
      $req->execute(array(
          "nom" => $inscription->getNom(),
          "prenom" => $inscription->getPrenom(),
          "telp" => $inscription->getTelp(),
          "mail" => $inscription->getMail(),
          "dateNaissance" => $inscription->getDateNaissance(),
          "clubActu" => $inscription->getClubActu(),

          "idEvent" => $inscription->getIdEvent()
      ));
  }

  public function getInscriptions()
  {
    $inscriptions=[];
    $req=$this->getDb()->query("SELECT * FROM INSCRIPTION ORDER BY nom");

    while($donnees = $req ->fetch(PDO::FETCH_ASSOC)){
      $inscriptions[]= new Inscription($donnees);
    }

    return $inscriptions;
  }

  public function getTabHtml($inscriptions)
  {
      $html="";
      foreach ($inscriptions as $inscription){

          $id=$inscription->getId();
          $ligneNom='<td>'.$inscription->getNom().'</td>';
          $lignePrenom='<td>'.$inscription->getPrenom().'</td>';
          $ligneDateNaissance='<td>'.$inscription->getDateNaissance().'</td>';
          $ligneClubActuel='<td>'.$inscription->getClubActu().'</td>';
          $ligneEmail='<td id="mail">'.$inscription->getMail().'</td>';
          $ligneTelp='<td>'.$inscription->getTelp().'</td>';
          $ligneValider='<td onClick="validerInscription('.$id.')"> <i class="fas fa-check-circle text-success "></i> </td>';
          $ligneRefuser='<td onClick="refuserInscription('.$id.')"> <i class="fas fa-trash-alt " style="color:red"></i> </td>';


         $html.='<tr id="'.$id.'">'.$ligneNom.$lignePrenom.$ligneDateNaissance.$ligneClubActuel.$ligneEmail.$ligneTelp.$ligneValider.$ligneRefuser.'</tr>';
      }

      return $html;
  }

  public function sendMail($mail){

    $mailto = "zachour59@gmail.com";
    $mailSub = "subject : test email";
    $mailMsg = "salam";

     $mail = new PHPMailer();
     $mail ->IsSmtp();
     $mail ->SMTPDebug = 0;
     $mail ->SMTPAuth = true;
     $mail ->SMTPSecure = 'ssl';
     $mail ->Host = "smtp.gmail.com";
     $mail ->Port = 465; // or 587
     $mail ->IsHTML(true);
     $mail ->Username = "zachour59@gmail.com";
     $mail ->Password = "yourpassword";
     $mail ->SetFrom("zachour59@gmail.com");
     $mail ->Subject = $mailSub;
     $mail ->Body = $mailMsg;
     $mail ->AddAddress($mailto);

     if(!$mail->Send())
     {
         echo "Mail Not Sent";
     }
     else
     {
         echo "Mail Sent";
     }


  }



}
?>
