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
$sql ="select (S.*,E.test1, E.test2, E.test3, R.roomno, R.block_no, R.floorno, V.vname, V.relation, V.v_date, V.visiting_time) from ( student S, education E, room R, visitor V WHERE S.lfno=R.lfno AND S.lfno=V.lfno  AND S.usn=E.usn AND S.lfno= (SELECT S.lfno from student S WHERE S.lfno=42))";


$myData = mysqli_query($db,$sql);
echo "<center><table border=5>
<tr>
<th>LFNO</th>
<th>USN</th>
<th>Name   </th>
<th>DOB</th>
<th>Place</th>
<th>ID</th>
<th>Test1</th>
<th>Test2</th>
<th>Test3</th>
<th>RoomNo</th>
<th>BlockNo</th>
<th>floorno</th>
<th>Relative Name</th>
<th>Relationship</th>
<th>Visiting Date</th>
<th>Visiting Time</th>




</tr>";
while($record = mysqli_fetch_array($myData)){
  echo "<tr>";
  echo "<td>" . $record['lfno'] . "</td>";
  echo "<td>" . $record['usn'] . "</td>";
  echo "<td>" . $record['name'] . "</td>";
  echo "<td>" . $record['dob'] . "</td>";
  echo "<td>" . $record['place'] . "</td>";
  echo "<td>" . $record['id'] . "</td>";
  echo "<td>" . $record['test1'] . "</td>";
  echo "<td>" . $record['test2'] . "</td>";
  echo "<td>" . $record['test3'] . "</td>";
  echo "<td>" . $record['roomno'] . "</td>";
  echo "<td>" . $record['block_no'] . "</td>";
  echo "<td>" . $record['floorno'] . "</td>";
  echo "<td>" . $record['vname'] . "</td>";
  echo "<td>" . $record['relation'] . "</td>";
  echo "<td>" . $record['v_date'] . "</td>";
  echo "<td>" . $record['visiting_time'] . "</td>";
    echo "</tr>";

}
echo"</table>";

mysqli_close($db);

?>



</body>
</html>