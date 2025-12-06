<?php 


    // connecte notre app avec la BD
    function getConnexion()
    {

        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "daaraytechappl2iam";
        $db = null; 

    
        try {
           
            $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            return $db;

        } catch (PDOException $error) {
            die("La connexion à la BD a échoué: " . $error->getMessage());
        }
    }
?>