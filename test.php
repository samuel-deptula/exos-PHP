<?php
$personnes = [
  'personne_1'=>[
  'nom' => 'RICHARD',
  'prénom' => 'Romain',
  'age' => '25'
],
  'personne_2'=>[
  'nom' => 'DUPRE',
  'prénom' => 'Pascal',
  'age' => '16'
],
  'personne_3'=>[
  'nom' => 'DUPONT',
  'prénom' => 'Gérard',
  'age' => '40'
],
  'personne_4'=>[
  'nom' => 'LACOUR',
  'prénom' => 'Paul',
  'age' => '16'
],
  'personne_5'=>[
  'nom' => 'LEFEBVRE',
  'prénom' => 'André',
  'age' => '33'
]
];
foreach ($personnes as $personne){
  if ($personne['age']>=18) {
    echo $personne['prénom']." a plus de 18 ans \n";
  }
}
 ?>
