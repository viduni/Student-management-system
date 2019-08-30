<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>
<html>
<head>
<title>CIS</title>
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
    background: #8c8c8c;
}

.content {
    max-width: 1200px;
    margin: auto;
    background: white;
    padding: 10px;
}
a:link, a:visited {
   
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}
div.scrollmenu {
    background-color: #333;
    overflow: auto;
    white-space: nowrap;
}


</style>

</head>
<body>

<div class="w3-panel w3-black w3-container w3-xlarge w3-display-top" style="padding:0">
   <div> <p><button onclick="document.getElementById('menu1').style.display='block'" class="w3-button w3-black w3-left">Student Details</button></p></div>
	<p><button onclick="document.getElementById('menu2').style.display='block'" class="w3-button w3-black w3-left">Attendance</button></p>
	<p><button onclick="document.getElementById('menu3').style.display='block'" class="w3-button w3-black w3-left ">Result</button></p>
	<p><button onclick="document.getElementById('menu4').style.display='block'" class="w3-button w3-black w3-right "><a href="logout.php?logout">Logout</a></button></p>
    
  </div>

<div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal" onclick="document.getElementById('Add Student Results').style.display='block'">Add Student Results</button></h5>
      
    </div>

<!--search-->
<div class="content">
<div class="container">
  <h1>Attendance Details</h1><br>
   
<div class="scrollmenu"> 
  <table class="table table-bordered">

    <thead>
      <tr>
        <th bgcolor="#006666"><font color="white">Registration No</font></th>
        <th bgcolor="#006666"><font color="white">IS11201</font></th>
        <th bgcolor="#006666"><font color="white">IS11302</font></th>
		<th bgcolor="#006666"><font color="white">IS11203</font></th>
		<th bgcolor="#006666"><font color="white">IS11204</font></th>
		<th bgcolor="#006666"><font color="white">IS11205</font></th>
		<th bgcolor="#006666"><font color="white">IS11206</font></th>
		<th bgcolor="#006666"><font color="white">CPE1101</font></th>
		<th bgcolor="#006666"><font color="white">GPA</font></th>
		
      </tr>
    </thead>
    <tbody>


      <?php

    $host="localhost";
    $uname="root";
    $pwd="";

    $dbname="result";

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
$sql ="SELECT * FROM cis_result_3 ";
$search = $conn->query($sql);
while($row = $search->fetch_assoc()) {

     echo' <tr>
        <td><center><font color="white">'.$row["reg_no"].'</font></center></td>
        <td><center><font color="white">'.$row["IS11201"].'</font></center></td>
		<td><center><font color="white">'.$row["IS11302"].'</font></center></td>
		<td><center><font color="white">'.$row["IS11203"].'</font></center></td>
		<td><center><font color="white">'.$row["IS11204"].'</font></center></td>
		<td><center><font color="white">'.$row["IS11205"].'</font></center></td>
		<td><center><font color="white">'.$row["IS11206"].'</font></center></td>
		<td><center><font color="white">'.$row["CPE1101"].'</font></center></td>
		
		<td><center><font color="white">'.$row["gpa"].'</font></center></td>
	
      </tr>';
	  }
	 ?>
	  
	 
  </tbody>
  </table>
 </div>
 </div>
</div>  
<!-- Menu Modal for Student Details -->
<div id="menu1" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('menu1').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1><center>Department of Computing & Information Systems</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_cis_m1.php" target="_blank">First Year Student Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_cis_m1.php" target="_blank">Second Year Student Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_cis_m1.php" target="_blank">Third Year Student Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_cis_m1.php" target="_blank">Forth Year Student Details</a></button></h5>
    </div>
    <div class="w3-container w3-black">
      <h1><center>Department of Food Science & Technology</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_fst_m1.php" target="_blank">First Year Student Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_fst_m1.php" target="_blank">Second Year Student Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_fst_m1.php" target="_blank">Third Year Student Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_fst_m1.php" target="_blank">Forth Year Student Details</a></button></h5>
    </div>
	<div class="w3-container w3-black">
      <h1><center>Department of Natural Resouces</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_nr_m1.php" target="_blank">First Year Student Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_nr_m1.php" target="_blank">Second Year Student Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_nr_m1.php" target="_blank">Third Year Student Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_nr_m1.php" target="_blank">Forth Year Student Details</a></button></h5>
    </div>
    <div class="w3-container w3-black">
      <h1><center>Department of Physical Science & Technology</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_pst_m1.php" target="_blank">First Year Student Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_pst_m1.php" target="_blank">Second Year Student Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_pst_m1.php" target="_blank">Third Year Student Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_pst_m1.php" target="_blank">Forth Year Student Details</a></button></h5>
    </div>
	<div class="w3-container w3-black">
      <h1><center>Department of Sport Science & Physical Education</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_spr_m1.php" target="_blank">First Year Student Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_spr_m1.php" target="_blank">Second Year Student Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_spr_m1.php" target="_blank">Third Year Student Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_spr_m1.php" target="_blank">Forth Year Student Details</a></button></h5>
    </div>
	
  </div>
</div>


<!-- Menu Modal for Student Attendance -->
<div id="menu2" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('menu2').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1><center>Department of Computing & Information Systems</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_cis_m2.php" target="_blank">First Year Attendance Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_cis_m2.php" target="_blank">Second Year Attendance Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_cis_m2.php" target="_blank">Third Year Attendance Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_cis_m2.php" target="_blank">Forth Year Attendance Details</a></button></h5>
    </div>
    <div class="w3-container w3-black">
      <h1><center>Department of Food Science & Technology</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_fst_m2.php" target="_blank">First Year Attendance Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_fst_m2.php" target="_blank">Second Year Attendance Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_fst_m2.php" target="_blank">Third Year Attendance Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_fst_m2.php" target="_blank">Forth Year Attendance Details</a></button></h5>
    </div>
	<div class="w3-container w3-black">
      <h1><center>Department of Natural Resouces</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_nr_m2.php" target="_blank">First Year Attendance Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_nr_m2.php" target="_blank">Second Year Attendance Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_nr_m2.php" target="_blank">Third Year Attendance Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_nr_m2.php" target="_blank">Forth Year Attendance Details</a></button></h5>
    </div>
    <div class="w3-container w3-black">
      <h1><center>Department of Physical Science & Technology</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="firstpstm2.php" target="_blank">First Year Attendance Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="secondpstm2.php" target="_blank">Second Year Attendance Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="thirdfpstm2.php" target="_blank">Third Year Attendance Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="forthfpstm2.php" target="_blank">Forth Year Attendance Details</a></button></h5>
    </div>
	<div class="w3-container w3-black">
      <h1><center>Department of Sport Science & Physical Education</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_spr_m2.php" target="_blank">First Year Attendance Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_spr_m2.php" target="_blank">Second Year Attendance Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_spr_m2.php" target="_blank">Third Year Attendance Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_spr_m2.php" target="_blank">Forth Year Attendance Details</a></button></h5>
    </div>
	
  </div>
</div>

<!-- Menu Modal for Student Results -->
<div id="menu3" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black w3-display-container">
      <span onclick="document.getElementById('menu3').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1><center>Department of Computing & Information Systems</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_cis_m3.php" target="_blank">First Year  Student Result Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_cis_m3.php" target="_blank">Second Year Student Result Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_cis_m3.php" target="_blank">Third Year Student Result Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_cis_m3.php" target="_blank">Forth Year Student Result Details</a></button></h5>
    </div>
    <div class="w3-container w3-black">
      <h1><center>Department of Food Science & Technology</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_fst_m3.php" target="_blank">First Year Student Result Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_fst_m3.php" target="_blank">Second Year Student Result Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_fst_m3.php" target="_blank">Third Year Student Result Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_fst_m3.php" target="_blank">Forth Year Student Result Details</a></button></h5>
    </div>
	<div class="w3-container w3-black">
      <h1><center>Department of Natural Resouces</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_nr_m3.php" target="_blank">First Year Student Result Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_nr_m3.php" target="_blank">Second Year Student Result Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_nr_m3.php" target="_blank">Third Year Student Result Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_nr_m3.php" target="_blank">Forth Year Student Result Details</a></button></h5>
    </div>
    <div class="w3-container w3-black">
      <h1><center>Department of Physical Science & Technology</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_pst_m3.php" target="_blank">First Year Student Result Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_pst_m3.php" target="_blank">Second Year Student Result Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_pst_m3.php" target="_blank">Third Year Student Result Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_pst_m3.php" target="_blank">Forth Year Student Result Details</a></button></h5>
    </div>
	<div class="w3-container w3-black">
      <h1><center>Department of Sport Science & Physical Education</center></h1>
    </div>
    <div class="w3-container">
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_spr_m3.php" target="_blank">First Year Student Result Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_spr_m3.php" target="_blank">Second Year Student Result Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_spr_m3.php" target="_blank">Third Year Student Result Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_spr_m3.php" target="_blank">Forth Year Attendance Details</a></button></h5>
    </div>
	
  </div>
</div>

<!--Form Modal -->
<div id="Add Student Results" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('Add Student Results').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Add Student Results</h1>
    </div>
    <div class="w3-container">
      <br>
	  <br>
	  <br>
	  
      <form action="result3.php" target="_blank" method="POST">
		<p><b>Registraion No:</b></p><br>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Registration_No" required name="reg_no"></p><br>
		<p><b>IS11201</b></p><br>
		<p><input class="w3-input w3-padding-16 w3-border" type="text"  required name="IS11201"></p><br>
		<p><b>IS11302</b></p><br>
		<p><input class="w3-input w3-padding-16 w3-border" type="text"  required name="IS11302"></p><br>
		<p><b>IS11203</b></p><br>
		<p><input class="w3-input w3-padding-16 w3-border" type="text"  required name="IS11203"></p><br>
		<p><b>IS11204</b></p><br>
		<p><input class="w3-input w3-padding-16 w3-border" type="text"  required name="IS11204"></p><br>
		<p><b>IS11205</b></p><br>
        <p><input class="w3-input w3-padding-16 w3-border" type="text"  required name="IS11205"></p><br>
		<p><b>IS11206</b></p><br>
        <p><input class="w3-input w3-padding-16 w3-border" type="text"  required name="IS11206"></p><br>
		<p><b>CPE1101</b></p><br>
        <p><input class="w3-input w3-padding-16 w3-border" type="text"  required name="CPE1101"></p><br>
		
		<p><b>GPA</b></p><br>
        <p><input class="w3-input w3-padding-16 w3-border" type="number"  required name="gpa"></p><br>
        
        <p><input type="submit" name="submit" value="SUBMIT"></p><br>
      </form>
    </div>










		

		
</body>
</html>
<?php ob_end_flush(); ?>


