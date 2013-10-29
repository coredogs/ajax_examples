<?php
/**
 * Return the file name and description of a particular photo.
 */

//Load the data array.
require( 'load_image_data.php' );

//Get the id of the photo to look up.
$photo_number = $_GET['id'];

//Return data about the random photo.
echo json_encode( 
    array( 
      'file_name' => $image_data[ $photo_number ][ 'file_name' ],
      'description' => $image_data[ $photo_number ][ 'description' ],
    ) 
);