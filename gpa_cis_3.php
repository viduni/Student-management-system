
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>CIS</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" >

        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

        <style type="text/css">
            @font-face {
                font-family: 'Raleway', sans-serif;
            }
            body{
                font-family: 'Raleway', sans-serif;
                background: #fff url(../images/bg.jpg) repeat top left;
                font-weight: 400;
                font-size: 15px;
                color: #1d3c41;
                overflow-y: scroll;
            }
            body{background:url(images/a1.jpg);
                background-attachment:fixed;
                background-size:cover;
            }
            .add-item-root{
                margin-top:70px;
                font-size: large;
                background-color: rgba(255, 224, 109, 0.72);
                border-radius: 8px;
            }
            .add-item{
                margin-bottom: 5px;
            }
            .add-item-sub-label{
                
            }
            .add-item-sub-label p{
                margin-bottom: 0px !important;
                margin-top:3px !important;
            }
            .add-item-container{
                margin-left: 10%;
                margin-right: 10%;
            }
            .row add-item{

            }
            .form-control{
                float: right;
            }
            .add-item-root-sub{
                margin-top: 35px;
                margin-bottom: 25px;
            }
            .text-lable{
                font-weight: bold;
                font-size: 17px;
            }
            .item-root-title{
                 font-size: 30px;
            }
			
							#u1{
								list-style-type: none;
								margin: 0;
								padding: 0;
								overflow: hidden;
								background-color: #cc3333; 
							}
							#l1{
								 float: left;
							}
							#a1{
								display: block;
								color: white;
								text-align: center;
								padding: 14px 16px;
								text-decoration: none;
							}
							#a2{
								display: block;
								color: white;
								text-align: center;
								padding: 14px 16px;
								text-decoration: none;
							}
							#a2:hover:not(.ac){
									 background-color: #cc6633;
								}
								.ac{
								background-color:#cc6633;
}




        </style>

    </head>
	
	
	
	
    <body>
	
        <div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GPA Calculation for CIS 1st Year</a>
    </div>
    
    
  </div>
</nav>
			
			
			<form action="gpa_cis_3_view.php" method="POST">
            <section>               
                <div class="add-item-container">
                    <div class="row add-item-root">
                            <div class="col-md-offset-1 col-md-10 add-item-root-sub">
                                <div class="add-item-sub-root">
                                        <div class="row">
                                            <p class="item-root-title">Result Details</p>
                                        </div>
                                        <div class="row add-item">
                                                <div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">Reg No</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="reg">
                                                </div>
                                        </div>
                                        <div class="row add-item">
                                                <div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">EP No</p>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="ep">
                                                </div>
                                        </div>
										<p class="item-title">IS 11201</p>
                                        <div class="row add-item">
                                                <div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">No of Credits </p>
                                                </div> 
												
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="c1">
													
                                                </div>
												
                                        </div>
										 <div class="row add-item">		
												<div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">Grade </p>
                                                </div> 
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="g1">
													
                                                </div>
										</div>		
                                        
										<p class="item-title">IS 11302</p>
                                        <div class="row add-item">
                                                <div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">No of Credits </p>
                                                </div> 
												
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="c2">
													
                                                </div>
												
                                        </div>
										 <div class="row add-item">		
												<div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">Grade </p>
                                                </div> 
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="g2">
													
                                                </div>
										</div>

										<p class="item-title">IS 11203</p>
                                        <div class="row add-item">
                                                <div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">No of Credits </p>
                                                </div> 
												
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="c3">
													
                                                </div>
												
                                        </div>
										 <div class="row add-item">		
												<div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">Grade </p>
                                                </div> 
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="g3">
													
                                                </div>
										</div>

										<p class="item-title">IS 11204</p>
                                        <div class="row add-item">
                                                <div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">No of Credits </p>
                                                </div> 
												
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="c4">
													
                                                </div>
												
                                        </div>
										 <div class="row add-item">		
												<div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">Grade </p>
                                                </div> 
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="g4">
													
                                                </div>
										</div>

										<p class="item-title">IS 11205</p>
                                        <div class="row add-item">
                                                <div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">No of Credits </p>
                                                </div> 
												
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="c5">
													
                                                </div>
												
                                        </div>
										 <div class="row add-item">		
												<div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">Grade </p>
                                                </div> 
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="g5">
													
                                                </div>
										</div>	

										<p class="item-title">IS 11206</p>
                                        <div class="row add-item">
                                                <div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">No of Credits </p>
                                                </div> 
												
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="c6">
													
                                                </div>
												
                                        </div>
										 <div class="row add-item">		
												<div class="col-md-3 add-item-sub-label">
                                                    <p class="text-label">Grade </p>
                                                </div> 
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="g6">
													
                                                </div>
										</div>		
                                        <div class="row">
                                                                                       
                                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
											<input type="submit" name="search" value="Search" class="btn btn-primary">
											
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </section>
			</form>
        </div>
        
    </body>
</html>
