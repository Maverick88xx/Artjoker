<?php
// сколько чисел Фибоначчи выводим на экран
$quantity = readline("Enter the number = ");

function fibonacci($n, $first = 0, $second = 1)
{
    $fib = [$first, $second];
    for ($i = 1; $i < $n; $i++) {
        $fib[] = $fib[$i] + $fib[$i-1];
    }
    return $fib;
}

// выводим числа Фибоначчи
print_r (fibonacci($quantity));
?>
