<?php

//  multi-dimensional arrays
$_blogs = [
 ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'like'=> 30],
 ['title' => 'mario kart cheats','author' => 'toad',  'content' => 'lorem', 'like'=> 50 ],
 ['title' => 'zelda hidden cheats', 'author' => 'link',  'content' => 'lorem', 'like'=> 50]
];
# print_r($_blogs[0][3]);
# echo $_blogs[2]['author'];
# echo count($_blogs);

$_blogs[] = ['title' => 'castle party', 'author' => 'peach',  'content' => 'lorem', 'like'=> 100];
//print_r($_blogs);

$_poped = array_pop($_blogs);
print_r($_poped);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Turtorials</title>
</head>
<body>
    
</body>
</html>