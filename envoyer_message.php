<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST["nom"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $taille = $_POST['taille'];
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Récupérer les données du formulaire
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $adresse = $_POST['adresse'];
      $email = $_POST['email'];
  
      // Envoyer les données par email
      $destinataire = 'ydallo070@gmail.com';
      $sujet = 'Nouvelle commande';
      $message = "Nom: $nom\nPrénom: $prenom\nAdresse: $adresse\nEmail: $email";
  
      // Envoyer l'email
      mail($destinataire, $sujet, $message);
  
      // Rediriger l'utilisateur vers une page de confirmation
      header('Location: confirmation.html');
      exit;
  }
  ?>
  <!-- Votre formulaire de commande ici -->
</form>

  
  // Adresse e-mail de destination
  $destinataire = "ydallo070@gmail.com";
  
  // En-têtes de l'e-mail
  $headers = "From: $nom <$email>" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "Content-type: text/html; charset=UTF-8" . "\r\n";
  
  // Envoyer l'e-mail
  mail($destinataire, "Nouveau message de contact", $message, $headers);
  
  // Rediriger vers une page de confirmation
  header("Location: confirmation.html");
  exit();
}
?>














  <title>BigYvan.Shop - Vente d'Articles de Mode</title>
  <a href="envoyer_message"></a>
  <style>
    /* Styles CSS pour le corps de la page */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f2f2f2;
    }
    
    /* Styles CSS pour la section de contact */
    .contact-section {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .contact-form input[type="text"],
    .contact-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    
    .contact-form button {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <!-- Autres éléments de votre site -->
   </section>
  
  <!-- Autres éléments de votre site -->
</body>
</html>














    <header>
        
        