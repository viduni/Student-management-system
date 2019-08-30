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

    $dbname="student";

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
    
    $s="INSERT INTO cis_student_1(reg_no,ep_no,first_name,last_name,address,contact_no)
    
    VALUES('$_POST[reg_no]','$_POST[e_no]','$_POST[f_name]','$_POST[l_name]','$_POST[add]','$_POST[con]')";
    mysqli_query($conn,$s);
}

/*

$sel="select * from cis_student_1";
  $search=$conn->query($sel);

  if($search->num_rows>0){
   echo "<table><tr>
   <th>ID</th>
   <th>Name</th>
   <th>Email</th>
   </tr>";

   while($row=$search->fetch_assoc()){
    echo "<tr><td>".$row["reg_no"]."</td>
    <td>".$row["ep_no"]."</td>
	<td>".$row["first_name"]."</td>
	<td>".$row["last_name"]."</td>
	<td>".$row["address"]."</td>
    <td>".$row["contact"]."</td></tr>";
   }

   echo "</table>";

  }

*/
   header('Location:1_cis_m1.php');  
?>

</body>
</html>