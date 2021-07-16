<?php

// davaleba N1
$NUM = 5;   //ricxvi sadamdec gvinda
function series($NUM)
{
    if ($NUM == 0) {  //vamowmebt xom ar aris 0
        return 0;
    } else if ($NUM == 1) {  //vamowmebt xom ar aris 1
        return 1;
    } else {
        return (series($NUM - 1) + series($NUM - 2));   //gamotvla
    }
}

for ($x = 0; $x < $NUM; $x++) {  //vatrialebt for shi
    echo series($x);
    echo "\n";
}
echo ('<br><br>');
?>


<?php

////davaleba N2

$N = 1234; //ricxvi rac unda gadavcet
function myfunc($N)
{
    $rev = 0;
    while ($N > 0) //reversirebis cikli
    {
        $rev = $rev * 10;
        $rev = $rev + $N % 10;
        $N = (int)($N / 10);
    }
    return $rev;
}
print_r(myfunc($N) . "\n");
echo ('<br><br>');
?>


<?php

///davaleba N3

function progresia($arr)
{
    $delta = $arr[1] - $arr[0];
    for ($index = 0; $index < sizeof($arr) - 1; $index++) {
        if (($arr[$index + 1] - $arr[$index]) != $delta) {

            return ("aris aritmetikuli progresia <br><br>");
        }
    }
    return "ar aris aritmetikul iprogresia";
}
$my_arr1 = array(6, 7, 9, 11); //masivi romelic ar aris aritmetiikuli progresia
$my_arr2 = array(5, 7, 9, 11);  //masivi romelic aris aritmetikuli progresia

print_r(progresia($my_arr1) . "\n");
print_r(progresia($my_arr2) . "\n");
echo ('<br><br>');

?>



<?php


//davaleba N4

$arr = [1, 0, 30, 1, 0, 9];
    
    $nonzeros = [];
    $zeros = [];
    
    foreach ($arr as $value) {
        if(strpos((string)$value, "0") === false) {
            $nonzeros[] = $value;
        } else {
            $zeros[] = $value;
        }
    }
    
    $result = array_merge($nonzeros, $zeros);
    
    var_dump($result);
    echo ('<br><br>');
?>



<?php
// davaleba N5

$array = [0, 1, 6, 1, 1, 1, 9];

$count = array_count_values($array); //itvlis valueebs masivshi
arsort($count); //asortirebs metidan naklebisken 
$keys = array_keys($count); //yofs masivs rom vipovot yvelaze xshiri elementi 
echo " yvelaze xshiri elementi aris $keys[0]"
?>

