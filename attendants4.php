<html>
<head>
<title>CIS</title>

<style>
    table,th,td {
        border:1px solid black;
        background-color: #FF9900;

    }
</style>
</head>
<body>

    <!--insert data-->
<?php

    $host="localhost";
    $uname="root";
    $pwd="";

    $dbname="attendance";

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
    
    $s="INSERT INTO cis_att_4(reg_no,IS11201,IS11302,IS11203,IS11204,IS11205,IS11206,CPE1101)
    
    VALUES('$_POST[reg_no]','$_POST[IS11201]','$_POST[IS11302]','$_POST[IS11203]','$_POST[IS11204]','$_POST[IS11205]','$_POST[IS11206]','$_POST[CPE1101]')";
    mysqli_query($conn,$s);
}


/*
$sel="select * from cis_att_4";
  $search=$conn->query($sel);

  if($search->num_rows>0){
   echo "<table><tr>
   <th>IS11201</th>
   <th>IS11302</th>
   <th>IS11203</th>
   <th>IS11204</th>
   <th>IS11205</th>
   <th>IS11206</th>
   <th>CEP1101</th>
   </tr>";

   while($row=$search->fetch_assoc()){
    echo "<tr><td>".$row["reg_no"]."</td>
    <td>".$row["IS11201"]."</td>
	<td>".$row["IS11302"]."</td>
	<td>".$row["IS11203"]."</td>
	<td>".$row["IS11204"]."</td>
	<td>".$row["IS11205"]."</td>
	<td>".$row["IS11206"]."</td>
    <td>".$row["CEP1101"]."</td></tr>";
   }

   echo "</table>";

  }

*/
    header('Location:4_cis_m2.php'); 
?>

</body>
</html>