<!DOCTYPE html>
<html>
<body>

<?php
    $x = 75;
    $y = 25; 

function addition() {
    echo "<b>Globals Variables:</b><p>Global Variables can be access from any where in the script.</p>";
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z;


function staticVarivales(){
    __LINE__;
}
staticVarivales();

$ss = getenv('HTTP_USER_AGENT');
echo $ss;
?>


</body>
</html>