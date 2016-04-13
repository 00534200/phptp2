<?php
extract($_GET);
// on les traite

$nom = strtolower($nom);
$nom = ucfirst($nom);

$prenom = strtolower($prenom);
$prenom = ucfirst($prenom);

  if($sexe == 'Homme')
    echo 'Bonjour Monsieur  ';
  
else 
   echo 'Bonjour Madame  ';

echo $nom;
echo '   ';
echo $prenom;



?>