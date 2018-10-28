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
   $relation = $_POST['relation'];
   $visiting_date = $_POST['visiting_date'];
   $visiting_time = $_POST['visiting_time'];

   
   // mysql query to Update data
   $query = "UPDATE `visitor` SET `name`='".$name."',`relation`= '".$relation."',`visiting_date`= '".$visiting_date."',`visiting_time`= '".$relationvisiting_time."', WHERE `lfno` = $lfno";
   
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

        <form action="visitorupdate.php" method="post">

            LFNO To Update: <input type="text" name="lfno" required><br><br>

            Name:           <input type="text" name="name" required><br><br>

            Relationship:  <input type="text" name="relation" required><br><br>

            Visiting Date:          <input type="date" name="visiting_date" required><br><br>
   
           Visiting time:          <input type="number" name="visiting_time" required><br><br>
            

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>


</html>
