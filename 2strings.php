
<?php
$_stingOne = 'my email is ';
$_stringTwo = 'thisismy@email.co.uk';

$_name = 'Mario';

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title> PHP Turtorials </title>
</head>
<h1><?php echo $_stingOne . $_stringTwo?></h1>

<p><?php echo 'Hello my name is '.$_name?></p>

<p><?php echo "Hello again my name is $_name";?></p>

<?php
echo "the ninja screamed \"whaaa\"";
echo ' the ninja screamed "whaaa"'
?>
<div>
<?php
echo $_stingOne[0];
?>
</div>

<div>
    <?php
    // echo strlen($_name);
    // echo strtoupper($_name);
    echo str_replace('M', 'W', $_name);
    ?>
</div>


<body>
</body>
</html>