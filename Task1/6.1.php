<?php
/**
 * Create i two-dimensional array
 */
$two_dimensional_array = array();
$second_two_dimensional_array = array();

/**
 * Fill the array with random numbers: 
 */
for ($i = 0; $i < 2; $i++):
  for ($j = 0; $j < 5; $j++):
    $two_dimensional_array[$i][$j] = rand(-10, 10);
  endfor;
endfor;

/**
 * Fill the array with random numbers: 
 */
for ($i = 0; $i < 5; $i++):
  for ($j = 0; $j < 2; $j++):
    $second_two_dimensional_array[$i][$j] = rand(-10, 10);
  endfor;
endfor;

/**
 * Print the contents of the arrays
 */
print_r($two_dimensional_array);   
print_r($second_two_dimensional_array);

/**
 * Matrix multiplication function
 */
function matrixmult($first_matrix, $second_matrix)
{
  $number_of_first_array_elements = count($first_matrix);
  $second_array_elements = count($second_matrix[0]);
  $number_of_second_array_elements = count($second_matrix);

  if (count($first_matrix[0]) != $number_of_second_array_elements) {
    throw new Exception('Incompatible matrixes');
  }

  $out_array = array();

  for ($i = 0; $i < $number_of_first_array_elements; $i++) { 
    for ($j = 0; $j < $second_array_elements; $j++) {
      $out_array[$i][$j] = 0;
      
      for ($k = 0; $k < $number_of_second_array_elements; $k++) { 
        $out_array[$i][$j] += $first_matrix[$i][$k] * $second_matrix[$k][$j];
      }
    }
  }
  print_r($out_array);
}

matrixmult($two_dimensional_array, $second_two_dimensional_array);
?> 
