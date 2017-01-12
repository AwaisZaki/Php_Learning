<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validaton in php</title>

    <style>
    
    .colorSet{

        color:red;
    }
    
    </style>
</head>
<body>

<?php 

$name = $email = $website = $comment = $gender = '';
$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = '';

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    if(empty($_POST["name"]))
    {
        $nameErr = "Name Required";
    } else{
         
        $name = test_input($_POST["name"]);
    } 
    if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
    if(empty($_POST["email"]))
    {
        $emailErr = "Email Required";
    } else{

        $email = test_input($_POST["email"]);
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }

    if(empty($_POST["website"]))
    {
        $commentErr = "Comments Required";
    } else{

        $website = test_input($_POST["website"]);
    }

    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    } 

    if(empty($_POST["comment"]))
    {
        $commentErr = "Comment Required";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if(empty($_POST["gender"]))
    {
        $genderErr = "Gender Required";
    } else{
         $gender = test_input($_POST["gender"]);
    }
    }

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>

    <h1 style="text-align:center;">Form Validaton</h1>

    <form method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
       <input type="text" name="name" id="name"><span class="colorSet"><?php echo $nameErr; ?></span>
        <br/></br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><span class="colorSet"><?php echo $emailErr; ?></span>
        <br/></br>
        <label for="website">Website:</label>
        <input type="text" name="website" id="website"><span class="colorSet"><?php echo $websiteErr; ?></span>        
        <br/></br>
        <label for="comment" >Comment:</label>
       <textarea type="text" col="4" name="comment" id="comment"></textarea><span class="colorSet"><?php echo $commentErr; ?></span>
        <br/><br/>
        Gender:
        <label for="male" >Male</label>
        <input type="radio" name="gender" id="male">
        <label for="female" >Female</label>
        <input type="radio" name="gender" id="female"> <span class="colorSet"><?php echo $genderErr; ?></span>

        <br/><br/>

        <input type="submit" name="submit" value="Submit" />
        
         </form>


         <?php 

         echo "<h2>Your Input</h2>";

         echo "Name: ".$name;
         echo "<br/><br/>";
         echo "Email: ".$email;
         echo "<br/><br/>";
         echo "Website: ".$website;
         echo "<br/><br/>";
         echo "Comments: ".$comment;
         echo "<br/><br/>";
         echo "Gender: ".$gender;
        
         
         ?>
    



</body>
</html>