<?php
/**
 * Created by PhpStorm.
 * User: brahi
 * Date: 03/03/2018
 * Time: 13:46
 */

class Inscription
{

    private $id;
    private $nom;
    private $prenom;
    private $telp;
    private $mail;
    private $clubActu;
    private $dateNaissance;
    private $idEvent;


    public function __construct($donnees)
    {
        if(!empty($donnees))
        {
            $this->hydrate($donnees);
        }
    }



    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $idEtudiant
     */
    public function setId($id)
    {
        $this->id= $id;
    }

    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param mixed $idEtudiant
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent= $idEvent;
    }


    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getTelp()
    {
        return $this->telp;
    }

    /**
     * @param mixed $identifiant
     */
    public function setTelp($telp)
    {
        $this->telp = $telp;
    }

    /**
     * @return mixed
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param mixed $mdp
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param mixed $adresseMail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getClubActu()
    {
        return $this->clubActu;
    }

    /**
     * @param mixed $clubActu
     */
    public function setClubActu($clubActu)
    {
        $this->clubActu = $clubActu;
    }


    public function  toString()
    {
        $descriptif='id='.$this->getIdEtudiant().'nom='.$this->getNom().'prenom='.$this->getPrenom();

        return $descriptif;
    }

}
