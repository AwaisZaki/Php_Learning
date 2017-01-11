<html>
   <body>
   
      <?php
        /* srand( microtime() * 1000000 );
         $num = rand( 1, 4 );
         
         switch( $num ) {
            case 1: $image_file = "/php/images/logo.png";
               break;
            
            case 2: $image_file = "/php/images/php.jpg";
               break;
            
            case 3: $image_file = "/php/images/logo.png";
               break;
            
            case 4: $image_file = "/php/images/php.jpg";
               break;
         }*/
         echo "Random Image : <img src='D:\Capture.png' />";
      ?>
      <?php 
$image_url='https://www.google.com/intl/en_com/images/srpr/logo3w.png';
?>

<img width="100%" src="<?php echo $image_url;?>">
   </body>
</html>