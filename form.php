<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form in Php</title>
</head>
<body>

<p>POST METHOD</p>
<form action="<?php $_PHP_SELF ?>" method="POST">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
Password: <input type="password" name="pwd" />
<input type="submit" />
</form>
<br/>
<p>GET METHOD</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
City: <input type="text" name="city" />
country: <input type="text" name="country" />
<input type="submit" />
</form>

<br/>
<p>REQUEST METHOD</p>
<form action="<?php $_PHP_SELF ?>" method="POST">
University: <input type="text" name="uni" />
Department: <input type="text" name="dep" />
<input type="submit" />
</form>

<?php 


if(isset($_POST['name']) || isset($_POST['age']) || isset($_POST['pwd']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $pwd = $_POST['pwd'];
    echo "Welcome ". $name."<br/>";
    echo "You are ".$age." old.";
    echo "Your Password is ".$pwd;

    exit();
}

if(isset($_GET['city']) || isset($_GET['country']))
{

    echo "Welcome to ". $_GET["city"]."<br/>";
    echo "You are in  ".$_GET["country"].".";

    exit();
}

if(isset($_REQUEST['uni']) || isset($_REQUEST['dep']))
{

    echo "Welcome to ". $_REQUEST['uni']."<br/>";
    echo "You are in  ".$_REQUEST['dep'].".";

    exit();
}



?>
    
</body>
</html>