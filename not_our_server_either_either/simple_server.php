<?php
$best_dogs = 
  array(
    array(
      'dog_name' => 'Oscar',
      'dog_notes' => 'Played Kieran in CoreDogs',
      'dog_weight' => '85 lbs',
      'dog_color' => 'black',
    ),
    array(
      'dog_name' => 'Renata',
      'dog_notes' => 'Played herself in CoreDogs',
      'dog_weight' => '25 lbs',
      'dog_color' => 'black and brown',
    ),
);
echo json_encode( 
    array( 
      'name' => $best_dogs[0]['dog_name'],
      'description' => $best_dogs[0]['dog_notes'],
    ) 
);

