<!DOCTYPE html>
<html>
<head>
  <title>userinfodisplay</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>To Know Your Genetrated Unique ID</h1>
</div>
<div style="position: absolute;right:0;top:0">
<h3><a href="logout.php"><font color = "white">Log Out</a></h3></font></div>
<div class="col-sm-12 col-md-5">
    <div class="panel panel-default">
        <div class="panel-body">
                <center>
                <form method="post" action="ui.php">
  				<table>
     			<tr>
           			<td>Enter Your Username  : </td>
           			<td><input type="text" name="username" class="textInput"></td>
     			</tr>
          
                
                
          
      			<tr>
        			<td></td>

        			<td><input type="submit" name="Tbtn" value="Proceed"></td>
              <td><button><a href="home.php">Back</button></a></td>
      			</tr>
            <?php
session_start();
 
//connect to database
$db=mysqli_connect("localhost","root","","hotelmanage");
                $conn = mysqli_connect("localhost","root","","hotelmanage");
				// Check connection
				if (!$conn) {
    				die("Connection failed: " . mysqli_connect_error());
				}
				if(isset($_POST['Tbtn'])){

				$username=($_POST['username']);

                $sql = "SELECT id FROM users where username='$username' ";
				$result = mysqli_query($conn, $sql);
				
   				

				if (mysqli_num_rows($result) > 0) {
				    // output data of each row
				    while($row = mysqli_fetch_assoc($result)) {
				        echo "YOUR ID: " .$row["id"].  "<br>";
				    }
				} else {
				    echo "0 results";
}
}

 
 
?>

     		</table>
     	</form>

     
     
                
            </center>                                    
        </div>
    </div>
</div> 

