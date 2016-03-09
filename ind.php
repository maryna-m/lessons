<?php
echo "Привет мир!!!", '<br>';
//Первая прога
/*
ПЕРВАЯ
ПРОГА
*/
$number = 10; //integer
echo $number, '<br>';
$num = 17.7; // float
echo $num, '<br>';
$string = "STRING"; //string
echo $string, '<br>';
$world = 'world';
$str2 = "Hello $world!!!";// можно в двойных кавычках можно испольщовать переменные, использ. их значенрие
echo $str2, '<br>';
$str3 ='Hello $world!!!';// можно в двойных кавычках можно испольщовать переменные, использ. их значенрие
echo $str3, '<br>';
$var = '';// или = null

$res =  is_string($str2);//check type jf $dtr2; res - boolean
echo $res, '<br>';
echo gettype($str3), '<br>';//return data type of $str3
echo gettype($res), '<br>';
$a = true;
if ($a == true)
{
    echo "Eyyeyeyeyeye", '<br>';
    echo "One piece", '<br>';
}
else
{
    echo "NO", '<br>';
}
 $a = 10;
$b = 12;
if ($a > $b)
{
    echo "a > b";
}#comment type 2
else
{
    echo "$a меньше $b", '<br>';
}
//!= это отрицание
$zoro = 3;
if ($zoro >= 2)
    echo "Zoro 3";
else
    echo "Zoro non";
// === check data type