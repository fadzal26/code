<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

function isGanjil($num)
{
    $result = $num % 2;
    
    if ($result != 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function cetak_gambar($panjang)
{
    if (isGanjil($panjang))
    {
        for ($a = 1; $a <= $panjang; $a++)
        {
            $count = 0;
            
            if (ceil(($panjang / 2)) == $a)
            {
                for ($b = 1; $b <= $panjang; $b++)
                {
                    if ($b < $panjang)
                    {
                        echo "*\t";
                    }
                    else if ($b == $panjang)
                    {
                        echo "*\n";
                    }
                }
            }
            else
            {
                for ($b = 1; $b <= $panjang; $b++)
                {
                    if ($b == 1)
                    {
                        echo "*\t";
                    }
                    else if ($b == $panjang)
                    {
                        echo "*\n";
                    }
                    else
                    {
                        echo "=\t";
                    }
                }
            }
        }
    }
    else
    {
        echo "Parameter Gambar Salah";
    }
}

cetak_gambar(7);
