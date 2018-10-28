<?php
  session_start();
  $db=mysqli_connect("localhost","root","","hotelmanage");
  if(isset($_POST['Treg_btn'])){
    $usn=($_POST['usn']);
    $name=($_POST['name']);
    $dob=($_POST['dob']);
    $place=($_POST['place']);
    $id=($_POST['id']);
    $sql="INSERT INTO student(usn,name,dob,place,id) VALUES('$usn','$name','$dob','$place','$id')";
    mysqli_query($db,$sql);
    header("location:home.php");

  }


?>
<!DOCTYPE html>
<html>
<head>
  <title>studentinfo </title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
  <div class="header">
    <h1>Student Information</h1>
  </div>
  <form method ="post" action="studentinfo.php">
    <table>
      <tr>
        <td>USN:</td>
        <td><input type="number" name="usn" class="textInput"></td>
      </tr>
      <tr>
        <td>Name:</td>
        <td><input type="text" name="name" class="textInput"></td>
      </tr>
      <tr>
        <td>Date of Birth:</td>
        <td><input type="date" name="dob" class="textInput"></td>
      </tr>
      
      <tr>
        <td>Place:</td>
        <td><input type="text" name="place" class="textInput"></td>
      </tr>
      <tr>
        <td>College Id:</td>
        <td><input type="number" name="id" class="textInput"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="Treg_btn" value="Register"></td>
      </tr>
    </table>
  
  </form>  
</body>
</html>