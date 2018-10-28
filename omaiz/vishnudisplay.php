<!DOCTYPE html>
<head>
	<title>complete student info</title>
	<title>output</title>
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
    <h1>COMPLETE STUDENT DETAILS</h1>
</div>
<div class="col-sm-12 col-md-5">
    <div class="panel panel-default">
        <div class="panel-body">
                                                  
        </div>
    </div>
</div




$myText



<?php

session_start();
$db = mysqli_connect("localhost","root","","hotelmanage");
if (!$db){
	die("can not connet : " . mysqli_error());
}
$sql ="select * from student";
$myData = mysqli_query($db,$sql);
echo "<center><table border=5>
<tr>
<th>LFNO</th>
<th>USN</th>
<th>Name</th>
<th>DOB</th>
<th>Place</th>
<th>ID</th>

</tr>";
while($record = mysqli_fetch_array($myData)){
	echo "<tr>";
	echo "<td>" . $record['lfno'] . "</td>";
	echo "<td>" . $record['usn'] . "</td>";
	echo "<td>" . $record['name'] . "</td>";
	echo "<td>" . $record['dob'] . "</td>";
	echo "<td>" . $record['place'] . "</td>";
    echo "<td>" . $record['id'] . "</td>";
    echo "</tr>";

}
echo"</table>";

mysqli_close($db);

?>



</body>
</html>