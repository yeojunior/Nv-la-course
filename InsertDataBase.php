<?php 
include("DataBaseConnect.php");
if(isset($_POST['send'])){
  if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['number']) AND !empty($_POST['description'])){
    $name=htmlspecialchars($_POST['name']);
    // $mdp=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $email=htmlspecialchars($_POST['email']);
    $number=htmlspecialchars($_POST['number']);
    $description=htmlspecialchars($_POST['description']);
    if((strlen($name)>1) AND(strlen($name)<=50)){
      if(ctype_digit($number)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
          $date=date('Y-m-d');

        $Inserte=$dbb->prepare("INSERT INTO Users(name,email,number,date,description) VALUES(?,?,?,?,?)");
      $Inserte->execute(array($name,$email,$number,$date,$description));
      $message="Donnee ENregistrer";

          if($message){
 $nom = "Nom de l'utilisateur"; // Remplacez cela par la valeur réelle depuis la base de données
$email = "email@example.com"; // Remplacez cela par l'e-mail de l'utilisateur depuis la base de données
$description = "Message à envoyer à l'entreprise"; // Remplacez cela par le message que vous souhaitez envoyer

// Adresse e-mail de l'entreprise
$destinataire = "sindoukone585@gmail.com";

// Sujet de l'e-mail
$sujet = "Nouveau message de la part de $nom";

// Corps de l'e-mail
$message = "
<html>
<head>
  <title>Message de $nom</title>
</head>
<body>
  <p>$message</p>
  <p>Email de l'utilisateur : $email</p>
</body>
</html>
";

// En-têtes de l'e-mail
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-type: text/html\r\n";

// Envoyer l'e-mail
// Envoyer l'e-mail
if (mail($destinataire, $sujet, $message, $headers)) {
  echo "L'e-mail a été envoyé avec succès.";
} else {
  echo "Erreur lors de l'envoi de l'e-mail : " . error_get_last()['message'];
}

          }
        }else{
          $messagei= "Veuillez entrer un email correcte 🙂";
        }
      }else{
        $messagen= "Veuillez entrer un numero correcte 🙂";
      }

    }else{
      $message= "Votre est pas correcte";
     
    }

   

  }
}

?>