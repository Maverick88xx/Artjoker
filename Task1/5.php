<?php  
$array_size = readline("Array Size = ");    // задаем размер массива 
$negative_number_counter = 0;   // счетчик негативных элементов
$positive_number_counter = 0;   // счетчик позитивных элементов
$zero_number_counter = 0;   // счетчик нулевых элементов
$prime_number_counter = 0;   // счетчик простых элементов

// создаем рандомный массив чисел
for ($u = 0; $u < $array_size; $u++) {
    $t[$u] = rand(-100,100);
}

print_r($t);    // выводим массив

//функция проверки на простое число
function primeCheck($number)
{ 
    if ($number == 1) 
        return 0; 
      
    if ($number < 2)
        return 0;
    
    for ($i = 2; $i <= sqrt($number); $i++) { 
        if ($number % $i == 0) 
            return 0; 
    } 
    
    return 1; 
}       
    
//проверяем на позитивные, негативные и нулевые элементы
foreach ($t as $v) {
    if($v > 0) {
        $positive_number_counter++;
    } elseif($v < 0) {
        $negative_number_counter++;
    } elseif($v == 0) {
        $zero_number_counter++; 
    }
}

//перебор элементов массива и сумма простых чисел
foreach ($t as $v) {
    primeCheck($v);
    if (primeCheck($v) == 1) {
        $prime_number_counter++;
    }
}

$percent_positive_number = ($positive_number_counter/$array_size)*100;
$percent_negative_number = ($negative_number_counter/$array_size)*100;
$percent_zero_number = ($zero_number_counter/$array_size)*100;
$percent_prime_number = ($prime_number_counter/$array_size)*100;

echo "Positive numbers: ", $percent_positive_number, "%", "\n";
echo "Negative numbers: ", $percent_negative_number, "%", "\n";
echo "Zero: ", $percent_zero_number, "%", "\n";
echo "Prime numbers: ", $percent_prime_number, "%", "\n";

for($a = 0; $a < count($t); $a++) {
    for($b = 0; $b < count($t)-1; $b ++){
        if($t[$b] > $t[$b+1]) {
            $temp = $t[$b+1];
            $t[$b+1]=$t[$b];
            $t[$b]=$temp;
        }       
    }
}

echo "\n", "Sorted array in ascending order: ", "\n";
print_r($t);

for($a = 0; $a < count($t); $a++) {
    for($b = 0; $b < count($t)-1; $b ++){
        if($t[$b] < $t[$b+1]) {
            $temp = $t[$b+1];
            $t[$b+1]=$t[$b];
            $t[$b]=$temp;
        }       
    }
}

echo "\n", "Sorted array in reverse order: ", "\n";
print_r($t);
?>
