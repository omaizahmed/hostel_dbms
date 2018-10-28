<!DOCTYPE html>
<html>
<head>
  <title>information</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('back.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>
</head>
<body>
<div class="header">
    <h1>INFORMATION</h1>
</div>
<div class="col-sm-12 col-md-5">
    <div class="panel panel-default">
        <div class="panel-body">
                                                  
        </div>
    </div>
</div
<br>
<center><h2>Search For Complete Student Details:</h2></center>

...................................................................................................................................................................................................................................................................................................................................................................................................

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

...................................................................................................................................................................................................................................................................................................................................................................................................
<center><h2>Search For Complete Visitor Details:</h2></center>

<center><h4><a href="vishnudisplayvis.php"><font color = "black">Click Here</a></h4></body></center>