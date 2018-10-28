<!DOCTYPE html>
<head>
	<title>complete student info</title>
	
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
    <h1> STUDENT EDUCATION DETAILS</h1>
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
$sql ="select * from education";
$myData = mysqli_query($db,$sql);
echo "<center><table border=5>
<tr>

<th>USN</th>
<th>TEST-1</th>
<th>TEST-2</th>
<th>TEST-3</th>
<th>FINAL-MARKS</th>

</tr>";
while($record = mysqli_fetch_array($myData)){
	echo "<tr>";
	
	echo "<td>" . $record['usn'] . "</td>";
	echo "<td>" . $record['test1'] . "</td>";
	echo "<td>" . $record['test2'] . "</td>";
	echo "<td>" . $record['test3'] . "</td>";
	echo "<td>" . $record['finalia'] . "</td>";
    echo "</tr>";

}
echo"</table>";

mysqli_close($db);

?>



</body>
</html>