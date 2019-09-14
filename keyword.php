<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

$input = "banananana";
$keyword = "n";

if (strlen($keyword) > strlen($input))
{
    echo "Kata kunci melebihi panjang karakter input";
}
else
{
    $count = substr_count($input, $keyword);
    echo "Input      : $input\n";
    echo "Kata kunci : $keyword\n";
    echo "Ditemukan  : $count";
}
