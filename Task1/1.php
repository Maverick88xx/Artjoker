<?php 
// ввод пользователем десятичного числа
$decimal_number = readline ("Enter a decimal number = ");        

// переменная для преобразованного десятичного числа 
$binary_number = "";    

// функция преобразования в двоичное число
function conversionToBinary($decimal_number, $binary_number ) 
{
    while ($decimal_number != 0) { 
        $binary_number  = ($decimal_number % 2) . $binary_number;
        $decimal_number = (int) floor($decimal_number / 2);
    }
    echo "Binary number: $binary_number\n";   // вывод двоичного числа
}

// вызов функции преобразования в двоичное число
conversionToBinary($decimal_number, $binary_number ); 

// переменная для ввода пользователем двоичного числа  
$_binary = readline ("Enter a binary number = ");         

// переменная для преобразованного двоичного числа
$_decimal = 0;    

// функция преобразования в десятичное число
function conversionToDecimal($_binary, $_decimal) 
{
    while ($_binary != "") {
        $_decimal = $_decimal * 2 + substr($_binary, 0, 1);
        $_binary = substr($_binary, 1);
    }
    echo "Decimal number: $_decimal";    // вывод десятичного числа
}

// вызов функции преобразования в десятичное число
conversionToDecimal($_binary, $_decimal); 
?>
 
