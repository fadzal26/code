<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

function cetak($string_count)
{
    $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $len = strlen($str);
    $string_acak = '';
    $string_complete = 'complete';
    
    for ($a = 0; $a < $string_count; $a++)
    {
        for ($b = 0; $b < 32; $b++)
        {
            $string_acak .= $str[rand(0, $len - 1)];
        }
            
        if (strcmp($string_acak, $string_complete) != 0)
        {
            $string_complete = $string_acak;
            
            echo $string_complete."\n";
        }
        
        $string_acak = '';
    }
}

cetak(20);
