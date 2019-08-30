<html>
<head>
<title>Student Management System</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="CSS\style.css"></link>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    
	body {
    background: #cccccc;
}

.content {
    max-width: 1200px;
    margin: auto;
    background: white;
    padding: 10px;
}
</style>
</head>
<body>
<?php

    $host="localhost";
    $uname="root";
    $pwd="";

    $dbname="student_GPA";

    $conn=mysqli_connect($host,$uname,$pwd,$dbname);

    if($conn){
        echo "successfully connected";
        echo "<br>";
        echo "<br>";
        
    }

    else
    {
        echo "Error";
    }
    
    
    if(!empty($_POST['submit'])){
    
    $s="INSERT INTO student_GPA_CIS_1(reg,ep,c1,g1,c2,g2,c3,g3,c4,g4,c5,g5,c6,g6)
    
    VALUES('$_POST[reg]','$_POST[ep]','$_POST[c1]','$_POST[g1]','$_POST[c2]','$_POST[g2]','$_POST[c3]','$_POST[g3]',
        '$_POST[c4]','$_POST[g4]','$_POST[c5]','$_POST[g5]','$_POST[c6]','$_POST[g6]')";
    mysqli_query($conn,$s);
}

$tot_credits=2;
$tmp_gpa=0;
$tot_gpa=0;

$res=mysqli_query($conn, "select * from student_GPA_CIS_1");
while($row = mysqli_fetch_assoc($res)){
  $tmp_gpa1=$row['c1']*$row['g1'];
   $tmp_gpa2=$row['c2']*$row['g2'];
    $tmp_gpa3=$row['c3']*$row['g3'];
     $tmp_gpa4=$row['c4']*$row['g4'];
      $tmp_gpa5=$row['c5']*$row['g5'];
       $tmp_gpa6=$row['c6']*$row['g6'];

  $tot_gpa=$tmp_gpa1+$tmp_gpa2+$tmp_gpa3+$tmp_gpa4+$tmp_gpa5+$tmp_gpa6;
  $tot_credits=$row['c1']+$row['c2']+$row['c3']+$row['c4']+$row['c5']+$row['c6'];
}
$gpa_final=round(($tot_gpa/$tot_credits),3);
echo "$gpa_final";



$query =("update st set gpa='$gpa_final' where reg='$_POST[ep]' ");

mysqli_query($conn,$query);
    $count=mysqli_affected_rows($conn);
    if($count>0)
    {
        $msg="Record Saved";
    }
    else
    {
        $msg="Record Not Saved";
    }
echo '<br>'.$msg;



?>


<!--search-->

<?php

    $host="localhost";
    $uname="root";
    $pwd="";

    $dbname="student_GPA";

    $conn=new mysqli($host,$uname,$pwd,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM student_GPA_CIS_1";
//$sql ="SELECT * FROM item WHERE item_name='keyboard' ";
$search = $conn->query($sql);

if ($search->num_rows > 0) {
    echo "<table><tr>
    <th>Reg No_</th>
    <th>EP No_</th>
    <th>IS 11201_</th>
    <th>IS 11201_</th>
    <th>IS 11201_</th>
    <th>IS 11201_</th>
    <th>IS 11201_</th>
    <th>IS 11201_</th>
    <th>IS 11201_</th>

    
    <th>GPA</th>
    
    </tr>";
    // output data of each row
    while($row = $search->fetch_assoc()) {
        echo "<tr><td>".$row["reg"]."</td>
        <td>".$row["ep"]."</td>
        <td>".$row["c1"]."</td>
        <td>".$row["g1"]."</td>
        <td>".$row["c2"]."</td>
        <td>".$row["g2"]."</td>
        <td>".$row["c3"]."</td>
        <td>".$row["g3"]."</td>
        <td>".$row["c4"]."</td>
        <td>".$row["g4"]."</td>
        <td>".$row["c5"]."</td>
        <td>".$row["g5"]."</td>
        <td>".$row["c6"]."</td>
        <td>".$row["g6"]."</td>
        <td>".$row["g6"]."</td>
        <td>".$row["gpa"]."</td>


        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<br>";




$conn->close();
?>



</body>
</html>