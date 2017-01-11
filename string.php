<?php 

$heading = "<h1>String in Php</h1>";
echo $heading;
$iMString = "Awais";
$strLength = strlen($iMString);



echo "<b>String:</b><br/>";
echo "This is String Variable <b>iMString</b> and my Value is <b>".$iMString."</b> and my Length is ".$strLength;


echo "</br></br><b>strlen():</b>";  
echo "<br/><b>strlen()</b> is a function for finding the Length of the String";

$wordCount = str_word_count($heading);
echo "</br></br><b>str_word_count():</b>";   
echo "<br/><b>str_word_count()</b> is a function for counts the number of words in a String";
echo "<br/>";
echo "this word count is find through the <b>str_word_count()</b> ".$wordCount;

$stringReverse = strrev($iMString);
echo "</br></br><b>strrev():</b><br/>";
echo "The <b>strrev()</b> is function is for Reverse the string E.g: Reverse of <b>".$iMString."</b> is ".$stringReverse;

$txt = "I am Awais Zaki";
$findStringPosition = strpos($txt, "Awais");
echo "</br></br><b>strpos():</b><br/>";
echo "The <b>strpos()</b> is function for finding the Position of specific text in a String E.g: Text <b>Awais</b> position in variable <b>".$txt."</b> is  ".$findStringPosition;

$txtReplace = str_replace("world","Awais", "Hello world");
echo "</br></br><b>str_replace():</b>";
echo "<br/><b>str_replace()</b> is a function for Replace the text in a string E.g: <b>Hello world</b> is replce by ".$txtReplace;





?>
