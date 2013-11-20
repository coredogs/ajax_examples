<?php
/**
 * Auction listing server.
 */
//Load the file operations functions.
require( './file_operations.php' );
//Set the correct password.
$correct_password = 'd0gZ'; //dee zero gee ZED.
//Get the command.
$command = $_GET['command'];
//Process data reset command.
if ( $command == 'reset' ) {
  //Check the password
  $user_password = $_GET['password'];
  if ( $user_password == $correct_password ) { 
    //Password OK. Reset data.
    reset_listings();
    $response = 'Listing data reset.';
  }
  else {
    //Bad password, naughty password.
    $response = 'Error: invalid password.';
  }
  //Return the response to the reset request.
  echo json_encode( 
      array( 
        'response' => $response,
      ) 
  );
  exit;
}
//Load the current listings.
$listings = load_listings();
//Process count command.
if ( $command == 'count' ) {
  //Ah ha, I love to count.
  echo json_encode( 
      array( 
        'count' => sizeof($listings),
      ) 
  );
  exit;
}
//Process fetch command.
if ( $command == 'fetch' ) {
  //Get data about a listing.
  $id = $_GET['id'];
  echo json_encode( 
      array( 
        'id' => $id,
        'description' => $listings[ $id ][ 'description' ],
        'highest_bid' => $listings[ $id ][ 'highest_bid' ],
      ) 
  );
  exit;
}
//Process bid command.
if ( $command == 'bid' ) {
  //Get bid details.
  $id = $_GET['id'];
  $bid = $_GET['bid'];
  $bid_contact = $_GET['bid_contact'];
  //Is bid greater than current highest?
  if ( $bid > $listings[ $id ][ 'highest_bid' ] ) {
    //Record the bid.
    $listings[ $id ][ 'highest_bid' ] = $bid;
    $listings[ $id ][ 'bid_contact' ] = $bid_contact;
    save_listings($listings);
    $response = 'Bid accepted';
  }
  else {
    //Bid is too low.
    $response = 'Bid is too low.';
  }
  //Return the response to the bid.
  echo json_encode( 
      array( 
        'response' => $response,
      ) 
  );
  exit;
}
//Process data report command.
if ( $command == 'report' ) {
  //Check the password
  $user_password = $_GET['password'];
  if ( $user_password == $correct_password ) { 
    //Password OK. Generate report.
    $response = 'Password OK.';
  }
  else {
    //Bad password, naughty password.
    $response = 'Error: invalid password.';
    $listings = NULL;
  }
  //Return the response to the report request.
  echo json_encode( 
      array( 
        'response' => $response,
        'listings' => $listings,
      ) 
  );
  exit;
}
//Unknown command.
echo json_encode( 
    array( 
      'response' => 'Error: Unknown command',
    ) 
);
exit;
