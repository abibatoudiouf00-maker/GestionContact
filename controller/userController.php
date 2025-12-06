<?php
// connecter un utilsateur

if(isset($_POST['btnLogin']))
{

    $email = $_POST['email'];
    $password = $_POST['password'];

   // validation de l'email
   if(!(filter_var($email,FILTER_VALIDATE_EMAIL)) || strlen($passeword)<8)
   {
    $error = "Email ou mot de passe incorecte.";
    header("location:login?error=$error");
   }
   else
   
   //TODO : Authentifier user dans la BD
   header("location:listeContacts");
  
}

?>