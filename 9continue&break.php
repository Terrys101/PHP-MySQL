<?php
$_products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'ligthing blot', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2],
   ];
       foreach($_products as $_product){
       if($_product['name'] == 'ligthing blot'){
        break;
       } 
       if($_product['price'] > 15){
        continue;
       }
       echo $_product['name']. '<br />';
       }
   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
    <title>Document</title>
   </head>
   <body>
    
   </body>
   </html>