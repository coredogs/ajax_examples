<?php
/**
 * Functions to handle auction data files.
 */

/**
 * Load the current listings.
 * @return array Listings.
 */
function load_listings() {
  return unserialize(file_get_contents('auction_listings.txt'));
}

/**
 * Save the current listings.
 * @param array Listings to save.
 */
function save_listings( $listings ) {
  file_put_contents('auction_listings.txt', serialize($listings));  
}

/**
 * Reset the listings to the starting state.
 */
function reset_listings() {
  require_once 'data_original.php';
  save_listings( $listings );
}