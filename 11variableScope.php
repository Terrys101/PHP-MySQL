<?php
// variable scope

// local vars

function myfunc(){
    $price = 10;
    echo $price;
}

// myfunc();

function myfunc2($age){
echo $age;
}
// myfunc2(2);

// global variable
 $name = 'chun-li';

// function sayHello(){
//     global $name;
//     echo "hello $name";
// }

// sayHello();

function saybye($name){
    echo "bye $name";

}

saybye($name);

?>


<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    
</body>
</html>