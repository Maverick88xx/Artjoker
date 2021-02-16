<?php
// проверка IP по маске
function checkIP ($user_ip, $ip_begin, $ip_end) 
{
    return (ip2long($user_ip) >= ip2long($ip_begin) && ip2long($user_ip) <= ip2long($ip_end));
}

// наш IP
$user_ip = "2.1.0.0";

// диапазон адресов
echo checkIP($user_ip, '1.127.255.100', '128.0.0.0') ? 'IP внутри подсети' : 'Нет';
?>
