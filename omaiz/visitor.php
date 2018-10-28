<?php
  session_start();
  $db=mysqli_connect("localhost","root","","hotelmanage");
  if(isset($_POST['Ereg_btn'])){
    $lfno=($_POST['lfno']);
    $vname=($_POST['vname']);
    $relation=($_POST['relation']);
    $v_date=($_POST['v_date']);
    $visiting_time=($_POST['visiting_time']);

    $sql="INSERT INTO visitor(lfno,vname,relation,v_date,visiting_time) VALUES('$lfno','$vname','$relation','$v_date','$visiting_time')";
    mysqli_query($db,$sql);
    header("location:home.php");

  }


?>
<!DOCTYPE html>
<html>
<head>
  <title>visitor</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
  <div class="header">
    <h1>Fill in the Visitor details </h1>
  </div>
  <form method ="post" action="visitor.php">
    <table>
      <tr>
        <td>LF Number:</td>
        <td><input type="number" name="lfno" class="textInput"></td>
      </tr>
      <tr>
        <td>Name:</td>
        <td><input type="text" name="vname" class="textInput"></td>
      </tr>
      <tr>
        <td>Relationship:</td>
        <td><input type="text" name="relation" class="textInput"></td>
      </tr>
      <tr>
        <td>Visiting Date:</td>
        <td><input type="date" name="v_date" class="textInput"></td>
      </tr>
      <tr>
        <td>Visiting Time:</td>
        <td><input type="number" name="visiting_time" class="textInput"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" name="Ereg_btn" value="Proceed"></td>
      </tr>
    </table>    
  </form>  
</body>
</html>