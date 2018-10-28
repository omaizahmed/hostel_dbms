<?php
  session_start();
  $db=mysqli_connect("localhost","root","","hotelmanage");
  if(isset($_POST['Mreg_btn'])){
    $lfno=($_POST['lfno']);
    $roomno=($_POST['roomno']);
    $block_no=($_POST['block_no']);
    $floor_no=($_POST['floor_no']);
    
    
    $sql="INSERT INTO room(lfno,roomno,block_no,floorno) VALUES('$lfno','$roomno','$block_no','$floor_no')";
    mysqli_query($db,$sql);
    header("location:home.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>accomodation </title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
  <div class="header">
    <h1>Fill in the Accomodation details of a Student</h1>
  </div>
  <form method ="post" action="accomadation.php">
    <table>
      <tr>
        <td>LF Number:</td>
        <td><input type="number" name="lfno" class="textInput"></td>
      </tr>
      <tr>
        <td>Room Number:</td>
        <td><input type="number" name="roomno" class="textInput"></td>
      </tr>
      <tr>
        <td>Block Name:</td>
        <td><input type="text" name="block_no" class="textInput"></td>
      </tr>
      <tr>
        <td>Floor Number:</td>
        <td><input type="number" name="floor_no" class="textInput"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="Mreg_btn" value="Proceed"></td>
      </tr>
    </table>    
  </form>  
</body>
</html>