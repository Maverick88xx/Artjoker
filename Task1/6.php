<?php
/**
 * Create a two-dimensional array
 */
$two_dimensional_array = array();

/**
 * Fill the two-dimensional array with random numbers
 */
for ($a = 0; $a < 2; $a++):
  for ($b = 0; $b < 5; $b++):
    $two_dimensional_array[$a][$b] = rand(-10, 10);
  endfor;
endfor;

/**
 * Print the contents of the array
 */
print_r($two_dimensional_array);    

/**
 * Matrix transpose function
 */
function transposeAnArray($array) 
{
  // Create the array that will be the output
  $out = array(); 

  // Assigning values to a named key  
  foreach ($array as $key => $subarray) { 

    // Assigning values to a named key   
    foreach ($subarray as $subkey => $subvalue) {  

      // Write the transposed values into the matrix
      $out[$subkey][$key] = $subvalue;    
    }
  }
  // Printing a transposed array
  print_r($out);    
}

/**
 * Calling the transposeAnArray function
 */
transposeAnArray($two_dimensional_array);
?>
