<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Livre_POO</title>
</head>

<body>
  <div class="wrapper">

    <div class="title">
      <h1>Livre</h1>
    </div>

    <?php

    spl_autoload_register(function ($class_name) {
      include $class_name . ".php";
    });
    // require_once("Auteur.php");
    // require_once("Livre.php");
    
    // Instancier un auteur
    $king = new Auteur("KING", "Stephen", "Homme", "1947-09-21");

    // Instancier des livres
    $livreDingue = new Livre("Dingue", 2124, 3455, 49.99, $king);
    $livreCool = new Livre("Cool", 1994, 343, 29.99, $king);
    $livreFabuleux = new Livre("Fabuleux", 1944, 385, 69.99, $king);
    echo "<br/>";
    ?>
    <div class="biblio">

      <?php
      echo $king->afficherBibliographie();
      // echo $livreDingue->getTitre();
      // echo "<br/>";
      // echo $king->getAge();
      // echo "<br/>";
      // echo $king;
      // echo "<br/>";
      // echo $livreDingue;
      // echo "<br/>";
      // echo "<br/>";
      // print("<pre>".print_r($livreDingue,true)."</pre>"); 
      // echo "<br/>";
      // print("<pre>".print_r($king,true)."</pre>");
      // echo "<br/>";
      // echo $livreDingue->getAuteur();
      ?>
    </div>


  </div>

</body>

</html>
