<?php

class connexionBDD
{


    /**
     *  constructor.
     */
    public function __construct()
    {
    }

    function connexionDB()
    {

        $nomServeur = "localhost";
        $nomBDD = "vdsa";
        $id = "root";
        $mdp = "";

        try {
            $conn = new PDO("mysql:host=" . $nomServeur . ";dbname=" . $nomBDD, $id, $mdp);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $conn;
    }


}
?>
