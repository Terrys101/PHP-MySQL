<?php
// indexed arrays

 $_peopleOne = ['ken','terry','chun-li'];
# echo $_peopleOne[0]

$_peopletwo = array('kate','barry');
# echo $_peopletwo[1]

$_ages = [10, 20,30 ];
# print_r($_ages);

$_ages[0] = 11;
# print_r($_ages)

$_ages[] = 60;
# print_r($_ages)

array_push($_ages,70);
# print_r($_ages);

# echo count($_ages)

$peoplethree = array_merge($_peopleOne,$_peopletwo);
# print_r($peoplethree);



// associative arrays (key & value pairs)

$_ninjasOne =  ['terry'=>'black', 'mario'=>'red', 'luigi'=>'brown'];
# echo $_ninjasOne['terry'];
# print_r($_ninjasOne);

$_ninjasTwo = array('bower' => 'green', 'peach' => 'yelllow');
 # print_r($_ninjasTwo);
 
 $_ninjasTwo['toad'] = 'pink';
 # print_r($_ninjasTwo);
# echo count($_ninjasTwo);
 
$_allNinjas = array_merge($_ninjasOne, $_ninjasTwo);
 print_r($_allNinjas);
 echo count($_allNinjas);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Turtorials</title>
</head>
<body>
    
</body>
</html>