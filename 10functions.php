<?php

// functions

function sayHello($name = 'Terry', $time = 'Morning'){
    echo "Good $time $name ! \n";
}

sayHello('Chun-li','Night');

function formatProduct($product){
   // echo "{$product['name']} cost £{$product['price']} to buy <br />";
   return "{$product['name']} cost £{$product['price']} to buy <br />";
}
// $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
// echo $formatted
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    
</body>
</html>