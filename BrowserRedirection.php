<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php 

if(isset($_POST["location"]))

{
    $location = $_POST['location'];

    header("Location: $location");

    exit();
}


?>
<p>Choose a site to visit :</p>
<form action="<?php $_PHP_SELF ?>" method="POST">

Select: <select name="location">

                <option value="http://www.google.com">Google</option>

                <option value="http://www.facebook.com">Facebook</option>


</select>

<input type="submit" />
</form>
    





</body>
</html>