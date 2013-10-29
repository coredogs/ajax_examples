<?php
/**
 * Photo server.
 */

//Load the data array.
require( 'load_image_data.php' );

//Get the command.
$command = $_GET['command'];

//Process count command.
if ( $command == 'count' ) {
  //Ah ha, I love to count.
  echo json_encode( 
      array( 
        'count' => sizeof($image_data),
      ) 
  );
  exit;
}
//Process fetch command.
if ( $command == 'fetch' ) {
  //Get data about a photo.
  $id = $_GET['id'];
  echo json_encode( 
      array( 
        'file_name' => $image_data[ $id ][ 'file_name' ],
        'description' => $image_data[ $id ][ 'description' ],
      ) 
  );
  exit;
}
echo json_encode( 
    array( 
      'error' => 'Unknown command',
    ) 
);
exit;
