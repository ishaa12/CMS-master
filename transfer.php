<?php
 session_start();
 $con=mysqli_connect('localhost','root','','students');
 $q="select name from students";
 $result=mysqli_query($con,$q);
 $_SESSION['to']=$_POST["transfer"];
?>
<html>
<head>
 <title>Amount Submit</title>
    <link rel="stylesheet" href="style.css">
    </head>
 <body>
  <form action="checkcredit.php" method="post"  style="position: relative; top:20%; ">
     <div class="u-info-head">
         <strong>Transfer Amount:</strong>
         <br>
         <br>
        <input type="text" name="transfer"><br>
         <br>
        <input type="submit">
     </div>
  </form>
 </body>
</html>