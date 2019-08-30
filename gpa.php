

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="CSS\style.css"></link>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
    background: #cccccc;
}

.content {
    max-width: 500px;
    margin: auto;
    background: white;
    padding: 10px;
}
 .button1 {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 450px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}
	#a1{text-decoration:none;}
	#a1:link{color:#ffffff;}
	#a1:visited{color:#ffffff;}
	#a1:hover{color:#ffffff;}
    #a1:active{color:#ffffff;}
	
	#b{text-decoration:none;}
	#b:link{color:#000000;}
	#b:visited{color:#000000;}
	#b:hover{color:#000000;}
    #b:active{color:#000000;}
	


</style>
</head>
<body>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card-2">
    <a href="home.php" class="w3-bar-item w3-button"><b>GPA</b> </a>
    
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="images/1.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Student Management System</b></span> </h1>
  </div>
</header>
<br><br>
<div class="container">
<div class="col-sm-8 text-left"> 
<h1 style="color:black">Select</h1>
</div>
</div>
<br><br>
<!-- select place -->
<div class="content">
	<center><button class="button1"><span><a href="gpa_cis_1.php" id="a1">CIS 1st Year</a></span></button></center><br>
	<center><button class="button1"><span><a href="gpa_cis_2.php" id="a1">CIS 2nd Year </a></span></button></center><br>
	<center><button class="button1"><span><a href="gpa_cis_3.php" id="a1">CIS 3rd Year </a></span></button></center><br>
	<center><button class="button1"><span><a href="gpa_cis_4.php" id="a1">CIS 4th Year </a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_tenniscourt.php" id="a1">FST 1st Year </a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_badmintoncourt.php" id="a1">FST 2nd Year </a></span></button></center>
	<center><button class="button1"><span><a href="adbook_badmintoncourt.php" id="a1">FST 3rd Year </a></span></button></center>
	<center><button class="button1"><span><a href="adbook_badmintoncourt.php" id="a1">FST 4th Year </a></span></button></center>
	<center><button class="button1"><span><a href="adbook_playground.php" id="a1">NR 1st Year</a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_gym.php" id="a1">NR 2nd Year </a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_swimmingpool.php" id="a1">NR 3rd Year </a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_basketballcourt.php" id="a1">NR 4th Year </a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_playground.php" id="a1">PST 1st Year</a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_gym.php" id="a1">PST 2nd Year </a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_swimmingpool.php" id="a1">PST 3rd Year </a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_basketballcourt.php" id="a1">PST 4th Year </a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_playground.php" id="a1">SPRT 1st Year</a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_gym.php" id="a1">SPRT 2nd Year </a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_swimmingpool.php" id="a1">SPRT 3rd Year </a></span></button></center><br>
	<center><button class="button1"><span><a href="adbook_basketballcourt.php" id="a1">SPRT 4th Year </a></span></button></center><br>
</div>

</body>
</html>
