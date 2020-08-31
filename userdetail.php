<?php 
session_start();
$con=mysqli_connect('localhost','root','','students');
$name=$_POST['name'];
$q="select * from students where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

?>
<html>
<head>
   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="style.css">

</head>
    <body>
    <div class="view">
        <h2>User Information</h2>
       <table class="table-info">
         <thead>
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
         </thead>
           <tr>
             <?php 
              $row=mysqli_fetch_array($result);
             ?>
            <td><?php echo  $row["name"]; ?></td>
            <td><?php echo  $row["email"]; ?></td>
            <td><?php echo  $row["credit"]; ?></td>
           </tr>


        </table>

        </div>
        <br>
        <div class="button" >
            <a href="viewuser.php">Click here to select user to transfer</a>
        </div>
               <br> <br> <br> <br> <br><br><br>
          <div class="button" >
              <a href="selectuser.php">Back</a>      
         </div>
    </body>
</html>