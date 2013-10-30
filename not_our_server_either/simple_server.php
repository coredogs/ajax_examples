<?php
$best_dog = array(
  'dog_name' => 'Oscar',
  'dog_notes' => 'Played Kieran in CoreDogs',
  'dog_weight' => '85 lbs',
  'dog_color' => 'black',
);
echo json_encode( 
    array( 
      'name' => $best_dog['dog_name'],
      'description' => $best_dog['dog_notes'],
    ) 
);