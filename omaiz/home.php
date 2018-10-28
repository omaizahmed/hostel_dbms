<?php
session_start();
 
//connect to database
$db=mysqli_connect("localhost","root","","hotelmanage");
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>home</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

/* Style the side navigation */
.sidenav {
    height: 100%;
    width: 150px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #24B9B4;
    overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
    color: white;
    padding: 16px;
    text-decoration: none;
    display: block;
}

/* Change color on hover */
.sidenav a:hover {
    background-color: #ddd;
    color: black;
}

/* Style the content */
.content {
    margin-left: 200px;
    padding-left: 20px;
}



.button {
  display: inline-block;
  padding: 7px 10px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #374746;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #5DC5A4}

.button:active {
  background-color: #FCFCFC;
  box-shadow: 0 5px #FCFCFC;
  transform: translateY(4px);
}
</style>

</head>
<body>
<div class="header">
    <h1>Welcome to Hostel Management</h1>
</div>
<?php
    if(isset($_SESSION['message']))
    {
         session_start(); 
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<div>
     <center><h1>Welcome <?php echo $_SESSION['username']; ?></h1></center>
     <h4><center><a href = "ui.php"><font color = "black">[click here to your details]</a><center></h4>
 </div>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="col-sm-12 col-md-5">
    <div class="panel panel-default">
        <div class="panel-body"><center>
                <h3>What is Hostel Management?</h3>
                <p>This platform ensures the user to monitor their fellow students who have been admited to the hostel.</p>&nbsp;&nbsp;&nbsp;
                <h3>How does this work?</h3>
                <p>&nbsp;&nbsp;First, Register your college as super user. Then you can usethis platform to fill in the details of your hostel students</center></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
        </center></div>
    </div>
</div>	
<div style="position: absolute;right:0;top:0">
<button calss="button"><h2><a href="logout.php"><font color = "red">Log Out</a></h2></button></font></div>
<center><button class="button"><h3><a href="studentinfo.php"><font color = "white">Enter Student details Form</a></h3></button></center>&nbsp;&nbsp;
    <center><button class="button"><h3><a href="studentinfodelete.php"><font color = "white">Delete Student details</a></h3></button></center>&nbsp;&nbsp;
        <center><button class="button"><h3><a href="studentinfoupdate1.php"><font color = "white">Update Student details Form</a></h3></button></center>&nbsp;&nbsp;


<div class="sidenav">
                <center><h2><font color = "black">More Actions</h2>
                <h3><a href ="education.php"><font color = "black">Enter Student Education Details</a></h3>
                <h3><a href = "accomadation.php"><font color = "black">Accomadation Details</a></h3>
                <h3><a href = "visitor.php"><font color = "black">Visitor Details</a></h3>
                <h3><a href = "information.php"><font color = "black">Information</a></h3>
                <h3><a href = "delup.php"><font color = "black">[Update]</a></h3></center>
 
</div>
</body>
</html>



