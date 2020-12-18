<?php

include './phpqrcode/qrlib.php';

  if (isset($_POST['email'], $_POST['name'])) {
      //$Directory pas besoin
      // purifier mes données
      $email = htmlspecialchars(trim($_POST['email']));
      $name = htmlspecialchars(trim($_POST['name']));

      // Mettre en minuscule

      $email = strtolower($email);
      $name = strtolower($name);

      // Supprimer les espaces
      $email = str_replace(' ', '', $email);
      $name = str_replace(' ', '', $name);

      // Nom du Fichier
      $filename = $name.'.png';

      if (!file_exists($filename)) {
        QRcode::png($name.' '.$email, $filename);
        $succes = "Fichier générer💪🎉✨⭐🎊🏆 ";
      }else{
        $errors = "Fichier déjà généré ! ❌ ";
      }


  }
   