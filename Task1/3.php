<?php
// первый метод решения задания
// вводим число
$number = readline("Enter the number = ");

// вводим в какую степень будем возводить число
$degree = readline("Enter the degree = ");

// функция возведения числа в степень
function exponentiation($number, $degree) 
{
  echo "A number ", $number, " in degree ", $degree, " = ", $number ** $degree, "\n";
}

// вызов функции возведения в степень
exponentiation($number, $degree);


// второй метод решения задания
// функция возведения в степень
function myDegree($x, $n)
{
  if ($n == 0) {    // если наша степень равна 0, то будет возвращена 1
    return 1;
  }
  
  if ($n < 0) {
    return myDegree(1/$x, -$n);    // -$n значит смену знака с отрицательного на положительный
  }
  
  return $x * myDegree($x, $n-1);    // вызов функции внутри функции
}

// самый первый вызов функции
$y = myDegree($number, $degree);    

// печатаем число
echo "A number ", $number, " in degree ", $degree, " = ", $y, "\n";
?>
