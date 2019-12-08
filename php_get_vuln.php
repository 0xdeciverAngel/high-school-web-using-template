<?php
   if( $_GET["name"]  ) 
   {
      echo "Welcome ". $_GET['name'];
     
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" />
       
         <input type = "submit" />
      </form>
      
   </body>
</html>