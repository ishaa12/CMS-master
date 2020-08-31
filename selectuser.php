<?php
$con=mysqli_connect('localhost','root','','students');
//mysqli_select_db($con,'id8930489_spark');
$q="select name from students";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
       <link rel="stylesheet" href="style.css">
</head>
<body>

<form  action="userdetail.php" method="post">
    <h1 class="u-info-head">Select the user to send credit</h1>
    <table class="table-info">
    <?php 
      session_start();
      $con=mysqli_connect('localhost','root','','students');
      $q="select * from students ";
      $result=mysqli_query($con,$q);
      $row_count=mysqli_num_rows($result);
     ?>
     <thead>
	 <th>Name</th>
	 <th>Email</th>
	 <th>Credit</th>	
     </thead>

<tbody>
  <tr>
      <?php  
       $row=mysqli_fetch_array($result);
      ?>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["credit"]; ?></td>
  </tr>
            
  <tr>
      <?php  
       $row=mysqli_fetch_array($result);
      ?>
      <td><?php echo  $row["name"]; ?></td>
      <td><?php echo  $row["email"]; ?></td>
      <td><?php echo  $row["credit"]; ?></td>
 </tr>
      
 <tr>
     <?php  
      $row=mysqli_fetch_array($result);
     ?>
     <td><?php echo  $row["name"]; ?></td>
     <td><?php echo  $row["email"]; ?></td>
     <td><?php echo  $row["credit"]; ?></td>
 </tr>
 <tr>
    <?php  
     $row=mysqli_fetch_array($result);
    ?>
    <td><?php echo  $row["name"]; ?></td>
    <td><?php echo  $row["email"]; ?></td>
    <td><?php echo  $row["credit"]; ?></td>
 </tr>
 <tr>
    <?php  
     $row=mysqli_fetch_array($result);
    ?>
    <td><?php echo  $row["name"]; ?></td>
    <td><?php echo  $row["email"]; ?></td>
    <td><?php echo  $row["credit"]; ?></td>
 </tr>

 <tr>
    <?php    
     $row=mysqli_fetch_array($result);
    ?>
    <td><?php echo  $row["name"]; ?></td>
    <td><?php echo  $row["email"]; ?></td>
    <td><?php echo  $row["credit"]; ?></td>
 </tr>

 <tr>
    <?php   
     $row=mysqli_fetch_array($result);
    ?>
    <td><?php echo  $row["name"]; ?></td>
    <td><?php echo  $row["email"]; ?></td>
    <td><?php echo  $row["credit"]; ?></td>
 </tr>

 <tr>
    <?php  
     $row=mysqli_fetch_array($result);
    ?>
    <td><?php echo  $row["name"]; ?></td>
    <td><?php echo  $row["email"]; ?></td>
    <td><?php echo  $row["credit"]; ?></td>
 </tr>

 <tr>
    <?php  
     $row=mysqli_fetch_array($result);
    ?>
    <td><?php echo  $row["name"]; ?></td>
    <td><?php echo  $row["email"]; ?></td>
    <td><?php echo  $row["credit"]; ?></td>
 </tr>
       
  <tr>
     <?php  
      $row=mysqli_fetch_array($result);
     ?>
     <td><?php echo  $row["name"]; ?></td>
     <td><?php echo  $row["email"]; ?></td>
     <td><?php echo  $row["credit"]; ?></td>
  </tr>
</tbody>
</table>

<div class="view">
<table cellspacing=20px style="position: relative; left: 40%;">

<?php
  $con=mysqli_connect('localhost','root','','students');
  $q="select name from students";
  $result=mysqli_query($con,$q);
?>
 <div class="container">
  <select name="name" onchange="this.form.submit()">
   <option>Select-here</option>
    <?php  
      while($row = $result->fetch_assoc()) 
      { 
    ?>
    <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>
    <?php 
    }
    ?>
  </div>
 </select>
 </table>
 </div>
 </form> 
 </body>
</html>