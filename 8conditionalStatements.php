<?php

// conditonal statments
// $_price = 20;

// if($_price < 10){
//     echo 'the condition is met';
// }elseif ($_price < 30 ){
//     echo "elseif condition met";
// }else{
//     echo 'condition is not met';
// }

$_products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'ligthing blot', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
   ];
//    foreach($_products as $_product){
    // if($_product['price'] < 15 && $_product['price'] > 2 ){
    //     echo $_product['name'] . '<br/>';
    // }

    // if($_product['price'] > 20 || $_product['price'] > 10 ){
    //     echo $_product['name'] . '<br/>';
    // }

    
 //  }
   


//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($_products as $_product){ ?>
             <?php if($_product['price'] > 15){?>
               <li><?php echo $_product['name'];?></li>

            <?php }?>
           <?php }?> 
    </ul>
</body>
</html>