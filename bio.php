<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

class list_school
{
    public $school_name;
    public $year_in;
    public $year_out;
    public $major;
}

class skill
{
    public $skill_name;
    public $level;
}

$hobby = array("Sepak Bola", "Membaca");
$myhobby = json_encode($hobby);

$smp = new list_school();
$smp->school_name = "SMP";
$smp->year_in = "2007";
$smp->year_out = "2010";
$smp->major = null;

$sma = new list_school();
$sma->school_name = "SMA";
$sma->year_in = "2010";
$sma->year_out = "2013";
$sma->major = null;

$array_list = array($smp, $sma);

$list_sch = json_encode($array_list);


$electrical = new skill();
$electrical->skill_name = "HVAC";
$electrical->level = "Advanced";

$programming = new skill();
$programming->skill_name = "PHP";
$programming->level = "Advanced";

$array_list = array($electrical, $programming);

$list_skill = json_encode($array_list);

$bio = '{
    "name":"Fadzal Ikhtiar",
    "age":24,
    "address":"Jalan Taruna I Barat No. 13,
    "hobby:"'.$myhobby.'"
    "is_married":false,
    "list_school":"'.$list_sch.'"
    "list_skill":"'.$list_skill.'"
    "interest_in_coding":true
}';

echo json_encode($bio);
