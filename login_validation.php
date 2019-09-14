<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

function isUsernameValid($username)
{
    if (strlen($username) >= 5 && strlen($username) <= 9)
    {
        $first_char = substr($username, 0, 1);
        if (is_numeric($first_char) || preg_match('#[^a-zA-Z0-9]#', $first_char))
        {
            return false;
        }
        else
        {
            $count = 0;
            
            for ($a = 0; $a < strlen($username); $a++)
            {
                $str = substr($username, $a, 1);
                
                if (ctype_upper($str))
                {
                    $count++;
                }
            }
            
            if ($count > 0)
            {
                $count = 0;
            
                for ($a = 0; $a < strlen($username); $a++)
                {
                    $str = substr($username, $a, 1);
                
                    if (is_numeric($str))
                    {
                        $count++;
                    }
                }
                
                if ($count > 0)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
    }
    else
    {
        return false;
    }
}

function isPasswordValid($password)
{
    if (strlen($password) >= 8)
    {
        if (substr_count($password, "@") > 0)
        {
            if (preg_match('#[^a-zA-Z0-9]#', $password))
            {
                $count = 0;
            
                for ($a = 0; $a < strlen($password); $a++)
                {
                    $str = substr($password, $a, 1);
                
                    if (is_numeric($str))
                    {
                        $count++;
                    }
                }
                            
                if ($count > 0)
                {
                    $p_count = 0;
            
                    for ($a = 0; $a < strlen($password); $a++)
                    {
                        $str = substr($password, $a, 1);
                
                        if (ctype_upper($str))
                        {
                            $p_count++;
                        }
                    }  
                
                    if ($p_count > 0)
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}


if (isUsernameValid("bbbBCD12"))
    echo "Username Valid\n\n";
else
    echo "Username Invalid\n\n";
    
    
if (isPasswordValid("a@bcDegg2#"))
    echo "password Valid";
else
    echo "password Invalid";
