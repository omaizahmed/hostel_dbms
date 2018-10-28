<?php
  session_start();
  $db=mysqli_connect("localhost","root","","hotelmanage");
  if(isset($_POST['Wreg_btn'])){
    $usn=($_POST['usn']);
    $test1=($_POST['test1']);
    $test2=($_POST['test2']);
    $test3=($_POST['test3']);
    $sql="INSERT INTO education(usn,test1,test2,test3) VALUES('$usn','$test1','$test2','$test3')";
    mysqli_query($db,$sql);
    header("location:home.php");

  }


?>
<!DOCTYPE html>
<html>
<head>
  <title>education details</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
  <div class="header">
    <h1>Fill in the Education Details of a Student </h1>
  </div>
  <form method ="post" action="education.php">
    <table>
      <tr>
        <td>USN:</td>
        <td><input type="number" name="usn" class="textInput"></td>
      </tr>
      <tr>
        <td>Subject-1 :</td>
        <td><input type="number" name="test1" class="textInput"></td>
      </tr>
      <tr>
        <td>Subject-2 :</td>
        <td><input type="number" name="test2" class="textInput"></td>
      </tr>
      <tr>
        <td>Subject-3 :</td>
        <td><input type="number" name="test3" class="textInput"></td>
      </tr>
      
      <tr>
      <tr>
        <td></td>
        <td><input type="submit" name="Wreg_btn" value="Proceed"></td>
      </tr>
    </tr>
    </table>    
  </form>  
</body>
</html>