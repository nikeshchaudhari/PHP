<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        background-color: green;
        color: white;
    }
</style>
<body>
    <h1>Php With Html</h1>

</body>
</html>

<?php
$name = "Nikesh";
echo"<h1>My Name is $name</h1>";
?>

<h2 style="color: red">
    My real name is : <?php 
    echo $name;
    ?>
</h2>