<html>
   <body>
      
      <?php
         $a = 0;
         $b = 0;
         
         for( $i = 0; $i<5; $i++ ) {
            $a += 10;
            $b += 5;
         }
         
         echo ("At the end of the loop a = $a and b = $b" );
      ?>
   
   </body>
</html>
<!-- <html>
   <body>
   
      <?php
         $i = 0;
         $num = 50;
         
         while( $i < 10) {
            $num--;
            $i++;
         }
         
         echo ("Loop stopped at i = $i and num = $num" );
      ?>
      
   </body>
</html> -->
<!-- <html>
   <body>
   
      <?php
         $array = array( 1, 2, 3, 4, 5);
         
         foreach( $array as $value ) {
            echo "Value is $value <br />";
         }
      ?>
      
   </body>
</html> -->
<!-- <html>
   <body>
   
      <?php
         $array = array( 1, 2, 3, 4, 5);
         
         foreach( $array as $value ) {
            if( $value == 3 )continue;
            echo "Value is $value <br />";
         }
      ?>
   
   </body>
</html> -->
