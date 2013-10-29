<?php
/**
 * Return the file name and description of a random photo.
 */

//Load the data array.
require( 'load_image_data.php' );

//How many photos are there?
$number_photos = sizeof($image_data);

//Choose a random index value.
$photo_index = rand(0, $number_photos - 1);

//Wait for a second. Simulates processing delay.
sleep(1);

//Return data about the random photo.
echo json_encode( 
    array( 
      'file_name' => $image_data[ $photo_index ][ 'file_name' ],
      'description' => $image_data[ $photo_index ][ 'description' ],
    ) 
);