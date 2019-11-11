<?php 
   if(isset($_POST['button'])){
       $firstNmae = $_FILES['upload']['name'];
       $temporayName = $_FILES['upload']['tmp_name'];
       $store = "image/".$firstNmae;
       move_uploaded_file($temporayName, $store);
       echo "<img src = '$store'/>";
   }
?>
   
   
   
   
