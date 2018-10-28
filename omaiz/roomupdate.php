<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "hotelmanage";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   
   // get values form input text and number
   $lfno = $_POST['lfno'];
   $name = $_POST['name'];
   $dob = $_POST['dob'];
   $place = $_POST['place'];

   
   // mysql query to Update data
   $query = "UPDATE `student` SET `name`='".$name."',`dob`= '".$dob."',`place`= '".$place."' WHERE `lfno` = $lfno";
   
   $result = mysqli_query($connect, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }else{
       echo 'Data Not Updated';
   }
   mysqli_close($connect);
}

?>

<!DOCTYPE html>

<html>

    <head>
      <body style="background-color:#E5E5E5">
  <div class="header">
    <h1>Update Form</h1>
    </div>

        <title> studentinfoupdate</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="studentinfoupdate.php" method="post">

            LFNO To Update: <input type="text" name="lfno" required><br><br>

            Name:           <input type="text" name="name" required><br><br>

            Date of Birth:  <input type="date" name="dob" required><br><br>

            Place:          <input type="text" name="place" required><br><br>

            

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>


</html>
