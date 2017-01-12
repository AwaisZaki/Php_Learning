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


fwrite($newopen, "this is written by fwrite() function and the size of the file is in Bytes");
fclose($newopen);


//$newr = fread($newread, filesize($newread));

echo readfile("text2.txt");
    echo "<h3>Check file already created or not...</h3>";
    if(file_exists($newfile))
    {
        $fielSize = filesize($newfile);
        $msg = "File Created already!";
        $msg .= "containing $fielSize bytes";
        echo "<br/><div style='border:1px solid red;'>".$msg;
        echo "<br/><b>The file_exists() function check the file is created before or not</b></div>";
    }
    
    else{
        echo "file does not exist";
    }
    echo "<h3>check the file name...</h3>";
         echo "<br/><div style='border:1px solid red;'>";
        echo "<br/><b>The basename() function returns the name of the file</b></br>";
        $basename = basename($newfile);
        echo $basename;
        echo "</div>";

        $source = "src.txt";
        $destination = "des.txt";

        $srcOpen = fopen($source,"w");
        fwrite($srcOpen,"Hellow world I am Source file and now my content will copying in destination file");
        fclose($srcOpen);

        $desOpen = fopen($destination,"w");

        $copying = copy($source,$destination);
        echo "<h3>Copy source file to destination file...</h3>";
        echo "<br/> <br/><div style='border:1px solid red;'>";
        echo "<br/>Content of soucrce.txt file <br/>".readfile($source); 

         echo "<br/> <br/>";
        echo "<br/>Content of destination.txt file <br/>".readfile($destination); 

        echo "<br/><b>The above content is copyied through copy() function</b></div>";

        echo "<h3>Deleting a file...</h3>";

        $delete = "dlt.txt";
        $deleteFileOpen =fopen($delete,"w");
        fclose($deleteFileOpen);//uncomments and then comments for deleting file
        //chown($delete,0755);
        if (!unlink($delete))
  {
  echo ("Error deleting $delete");
  }
else
  {
  echo ("Deleted $delete");
  }

    ?> 

</body>
</html>