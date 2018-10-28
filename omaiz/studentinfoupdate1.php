<?php

session_start();

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "hotelmanage";
   
   $conn = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   $lfno = $_POST['lfno'];
   $name = $_POST['name'];
   $dob = $_POST['dob'];
   $place = $_POST['place'];

   $sel="SELECT * FROM student WHERE lfno ='$lfno'";
  $cq=mysqli_query($conn,$sel) or die(mysqli_error($conn));
   $ret=mysqli_num_rows($cq);
if($ret==false)
{
  echo"<center><h2 style='color:red'>LFNO does not exist</h2></center>";
}
else
{
  $sel = "UPDATE `student` SET `name`='".$name."',`dob`= '".$dob."',`place`= '".$place."' WHERE `lfno` = $lfno";
  $cq=mysqli_query ($conn,$sel)or die(mysqli_error($conn));
  echo"<center><h2 style='color:red'>Student detatils Updated</h2></center>";
}

   mysqli_close($conn);
}



?>
<!DOCTYPE html>
<html>
<head>
  <title> studentinfoupdate</title>
 <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
       <div class="header">
    <h1>Update Form</h1>
    </div>
 <form  method="post" action="studentinfoupdate1.php">
   <table>
   <tr>
   <td>LFNO To Update:</td>  
   <td><input type="text" name="lfno" required></td>
  </tr>
  <tr>

    <td> Name:</td>          
    <td> <input type="text" name="name" required></td>
  </tr>
           
  <tr>
  <td> Date of Birth:</td>
  <td>  <input type="date" name="dob" required></td>

   </tr>

  <tr>
  <td> Place:</td>         
 <td> <input type="text" name="place" required></td>
</tr>
            
    <tr>
      <tr>
           <td> <input type="submit" name="update" value="Update Data"></td>
           <td><button><a href="home.php">Back</button></a></td>
         </tr>
       </tr>

         </table>   
        </form>
</body>
</html>