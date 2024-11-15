<?php

function calculatrice($nombre1, $nombre2,$operation){
    $resultat = "";

      switch ($operation) {
          case 'addition':
              $resultat = $nombre1 + $nombre2;
              break;
          case 'soustraction':
              $resultat = $nombre1 - $nombre2;
              break;
          case 'multiplication':
              $resultat = $nombre1 * $nombre2;
              break;
          case 'division':
              if ($nombre2 != 0) {
                  $resultat = $nombre1 / $nombre2;
              } else {
                  $resultat = "Erreur : Division par zéro !";
              }
              break;
          default:
              $resultat = "Opération invalide";
      }
      
      return $resultat;
}


?>