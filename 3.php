<?php


$fact = 1;//произведението на числата
// Стартираме цикалът от 5, условието е да се умножават числата,докато i=1,  
// след всяко изпълнение на цикъла i намаляме с 1.
for ($i=5;$i>=1;$i--){
    $fact=$fact*$i;

}
//Викаме на екрана да се визуализира променливата със стойността, която е получила
//след изпълнението на цикъла
echo 'Факториелът на числото 5 е: ' . $fact . '<br />'; 

//Аналогично се случват нещата за 8.
$ffact = 1;
for ($j=8;$j>=1;$j--){
    $ffact=$ffact*$j;

}
echo 'Факториелът на числото 8 е: ' . $ffact . '<br />';

//Тук обърнах цикъла да започва от 1 и да се увеличава с 1 накрая, 
//докато стане равно на 10.

$fffact = 1;
for ($i=1;$i<=10;$i++){
    $fffact=$fffact*$i;

}
echo 'Факториелът на числото 10 е: ' . $fffact;