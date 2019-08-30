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
<!DOCTYPE html>
<html>
<title>Student Management System</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('images/1.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
	
}
a:link, a:visited {
   
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

</style>
<body>

<div class="bgimg w3-display-container w3-text-white">
  <div class="w3-display-middle w3-jumbo">
    <p><center>Student Management System</center></p>
  </div>
  <div class="w3-panel w3-black w3-container w3-xlarge w3-display-top" style="padding:0">
    <p><button onclick="document.getElementById('menu1').style.display='block'" class="w3-button w3-black w3-left">Student Details</button></p>
	<p><button onclick="document.getElementById('menu2').style.display='block'" class="w3-button w3-black w3-left">Attendance</button></p>
	<p><button onclick="document.getElementById('menu3').style.display='block'" class="w3-button w3-black w3-left ">Result</button></p>
	<p><button onclick="document.getElementById('menu4').style.display='block'" class="w3-button w3-black w3-right "><a href="logout.php?logout">Logout</a></button></p>
    
  </div>
  <div class="w3-display-bottomleft w3-container">
    <p class="w3-xlarge">Faculty of Applied Sciences</p>
    <p class="w3-large">Sabaragamuwa University</p>
    <p>powered by <span class="w3-padding w3-black w3-opacity-min"><b>CIS</b></span></p>
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
      <h5> <button class="w3-button w3-block w3-teal"><a href="1_pst_m2.php" target="_blank">First Year Attendance Details</a></button></h5>
      <h5> <button class="w3-button w3-block w3-teal"><a href="2_pst_m2.php" target="_blank">Second Year Attendance Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="3_pst_m2.php" target="_blank">Third Year Attendance Details</a></button></h5>
	  <h5> <button class="w3-button w3-block w3-teal"><a href="4_pst_m2.php" target="_blank">Forth Year Attendance Details</a></button></h5>
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


</body>
</html>

<?php ob_end_flush(); ?>