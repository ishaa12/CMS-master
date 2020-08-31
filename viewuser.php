<?php
 session_start();
 $con=mysqli_connect('localhost','root','','students');
 $name1=$_SESSION['name'];
 $q="select name from students where not name='$name1'";
 $result=mysqli_query($con,$q);
?>

<html>
<head>
   <title>TransferSelect</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="u-info-head">
    <h1>Choose name for credit transfer</h1>
    <form action="transfer.php" method="post" style="position: relative; left: 40%;">
     <table>
       <th><h1 class="u-info-head">Name</h1></th>
        <?php  
          while($row = $result->fetch_assoc()) { ?>
          <tr>
            <td > 
            <div class="name_select">
              <input type="radio" name="transfer" value="<?php echo $row["name"]; ?>">
              <?php echo $row["name"]; ?>
              </div>
             </td>
            </tr>
            <?php 
            }
           ?>     
         <tr>
          <td><input type="submit" value="credit"></td>
        </tr>
       </table>
      </form>
    </div>
  </body>
</html>