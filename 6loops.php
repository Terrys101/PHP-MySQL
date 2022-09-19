<?php
$_ninjas = [ 'shaun', 'ruy', 'yoshi'];
// loops
// for loop
 # for($i = 0; $i < count($_ninjas); $i ++){
  #  echo $_ninjas[$i] . '<br />';
# }

// foreach loop

# foreach($_ninjas as $_ninjas){
  #  echo $_ninjas . '<br/>';
# }

$_products = [
 ['name' => 'shiny star', 'price' => 20],
 ['name' => 'green shell', 'price' => 10],
 ['name' => 'red shell', 'price' => 15],
 ['name' => 'gold coin', 'price' => 5],
 ['name' => 'ligthing blot', 'price' => 40],
 ['name' => 'banana skin', 'price' => 2],
];

# foreach($_products as $_product){
 #   echo $_product['name'] . ' - ' . $_product['price'];

# }
 # $i = 0;
 # while($i < count($_products)){
 #   echo $_products[$i]['name'];
 #   echo '<br/>';
 #   $i ++;
#}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Turtorials</title>
</head>
<body>
    <h1>product</h1>
    <ul>
        <?php foreach($_products as $_product){ ?>
             <h3><?php echo $_product['name']; ?></h3>
             <p> £ <?php echo $_product['price']; ?></p>
            <?php } ?>
    </ul>
</body>
</html>