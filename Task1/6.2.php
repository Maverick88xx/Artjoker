<?php

$my_array = [
    [-1, 4, 3, 0],
    [0, 4, -3, 3],
    [5, -9, 4, 1],
    [6, -4, 3, -2]];

print_r($my_array);

function deleteRowsInAnArray(array $matrix): array
{
    $result_array = array();

    foreach ($matrix as $rowMatrix) {
        if (in_array(0, $rowMatrix) == false || array_sum($rowMatrix) < 0) {
            $result_array[] = $rowMatrix;
        }
    }
    return $result_array;
}

function deleteColumnInAnArray(array $matrix): array
{
    $resultMatrix = array();
    $columnToRow = array();

    for ($i = 0, $count = count($matrix[$i]); $i < $count; $i++) {
        unset($columnToRow);

        for ($j = 0, $count2 = count($matrix); $j < $count2; $j++) {
            $columnToRow[] = $matrix[$j][$i];
        }

        if (in_array(0, $columnToRow) == false || array_sum($columnToRow) < 0) {
            for ($j = 0, $count2 = count($matrix); $j < $count2; $j++) {
                $resultMatrix[$j][$i] = $matrix[$j][$i];
            }
        }
    }

    return $resultMatrix;
}

print_r(deleteRowsInAnArray($my_array));
print_r(deleteColumnInAnArray($my_array));
?>
