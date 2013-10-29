<?php
/**
 * Creates an array with data about some images. This is PHP code.
 * 
 * Examples of PHP code to access elements:
 * 
 * $image_data[0]['description'] is 'Dudes in boaters'
 * 
 * The first element has an index of 0.
 * 
 * $image_data[1]['file_name'] is 'photo2.jpg'
 * $image_data[3]['description'] is 'Hot chick'
 * 
 * $index = 4;
 * $image_data[$index]['description'] is 'Woodrow Wilson, vampire'
 * 
 * $llama = 1;
 * $image_data[$llama]['file_name'] is 'photo2.jpg'
 * 
 * $image_data[2] is an array of: 
 *    file_name = 'photo3.jpg'
 *    description = 'Halloween'
 * 
 * sizeof($image_data) is 6.
 * 
 * $image_data[ sizeof($image_data) - 1 ]['description'] is 'Giants examine a ship'
 * 
 * $image_data[ sizeof($image_data) ]['description'] is an error. There is no
 * such element.

 * $image_data[ 2 ]['desc'] is an error. There is no such element.
 */

$image_data = array(
  array(
    'file_name' => 'photo1.jpg',
    'description' => 'Dudes in boaters',
  ),
  array(
    'file_name' => 'photo2.jpg',
    'description' => 'Lectures haven\'t changed',
  ),
  array(
    'file_name' => 'photo3.jpg',
    'description' => 'Halloween',
  ),
  array(
    'file_name' => 'photo4.jpg',
    'description' => 'Hot chick',
  ),
  array(
    'file_name' => 'photo5.jpg',
    'description' => 'Woodrow Wilson, vampire',
  ),
  array(
    'file_name' => 'photo6.jpg',
    'description' => 'Giants examine a ship',
  ),
);

