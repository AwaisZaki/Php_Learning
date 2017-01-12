<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Filing in PHP</title>
</head>

<body>

<h3>Opening a File and Reading it...</h3>

<?php 

    $fileName = "text.txt";
    $fileOpen = fopen($fileName, "r");
    if($fileOpen == false){
    echo "Error in opening file..";
    exit();

    }
    $filesize = filesize( $fileName );
    $filetext = fread( $fileOpen, $filesize );
    fclose( $fileOpen );

    echo ( "<div style='color:red; border:1px solid red; display:inline-block;'>File size : $filesize bytes</div>" );
    echo "<b><br/>Content in file</b>";
    echo ( "<br/><pre style='border:1px solid red; display:inline-block;'>$filetext</pre>" );



?>


<h3>Opening a File and Write, Reading it...</h3>
    
    <?php 

$newfile =  "text2.txt";
$newopen = fopen($newfile,"w");
if($newopen == false){
    echo "Error in opening file..";
    exit();

    }

fwrite($newopen, "this is file");

$newread = fopen($newfile,"r");
if($fileOpen == false){
    echo "Error in opening file..";
    exit();

    }

//$newr = fread($newread, filesize($newread));
echo readfile("text2.txt");
    
    
    ?> 

</body>
</html>