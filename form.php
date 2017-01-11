<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form in Php</title>
</head>
<body>
<form action="<?php $_PHP_SELF ?>" method="POST">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
<input type="submit" />
</form>

<?php 

if($_POST['name'] || $_POST['age'])
{
    echo "Welcome ". $_POST["name"]."<br/>";
    echo "You are ".$_POST["age"]." old.";

    exit();
}



?>
    
</body>
</html>