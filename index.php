<?php include('server.php') ?>
 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
        
        <title>TextBids - new account</title>
    </head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- background style  -->
<link href="css/registration.css" type="text/css" rel="stylesheet" > 
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
        
<body>

      
<div class="container-fluid bg">
	<H1> Create an account </H1>
	<div class = "col-md4 col-sm-2 col-s-12"> </div>
	<div class = "col-md4 col-sm-4 col-s-12">

 	<!-- Form Start -->
        
        <form class= "form-container" action="index.php" method="post">
 				
            <form>
		<!-- Avatar logo -->
		<!--<img src="avatar.jpg" class="avatar">

		<!-- Name input -->
		<div class="form-group">
                    <label for="\Name">Name</label>
                    <input type="text" class="form-control" id="Name" placeholder="Enter Name" required />
		</div>

		<!-- Surname input -->
		<div class="form-group">
                    <label for="\Surname">Surname</label>
                    <input type="text" class="form-control" id="Surname" placeholder="Enter Surname" required>
		</div>

                <!-- Student Number input -->
		<div class="form-group">
                    <label for="\StudentNo">Student Number</label>
                    <input type="text" class="form-control" id="StudentNo" placeholder="Enter Student Number" required>
		</div>

		<!-- Faculty input-->
		<div class="form-group sb">
                    <label for="selFaculty">Faculty</label>
                    <select class="form-control" id="selFaculty" placeholder = "Select Faculty">
			<option>1st Year</option>
			<option>2nd Year</option>
			<option>3rd Year</option>
			<option>4th Year</option>
			<option>Post Graduate</option>
                    </select>
		</div>

		<!-- Degree input -->
		<div class="form-group">
                    <label for="\Degree">Degree</label>
                    <input type="text" class="form-control" id="Degree" placeholder="Enter degree" required>
		</div>

		<!-- Academic year of Study -->
                <div class="form-group">
                    <label for="selYOS">Academic year of study</label>
                    <select class="form-control" id="selYOS" >
			<option>1st Year</option>
			<option>2nd Year</option>
			<option>3rd Year</option>
			<option>4th Year</option>
			<option>Post Graduate</option>
                    </select>
		</div>

		<!-- Email input -->
		<div class="form-group">
                    <label for="\InputEmail1">Email address</label>
                    <input type="text" class="form-control" id="InputEmail1" placeholder="Enter email address" required>
		</div>

		<!-- Cell Phone Number -->
                <div class="form-group">
                    <label for="\CellNo">Cellphone number</label>
                    <input type="text" class="form-control" id="CellNo" placeholder="Enter cell phone number" required>
		</div>

		<!-- Password input1 -->
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password" placeholder="Enter password" required>
		</div>

		<!-- Password input2 Confirmation-->
                <div class="form-group">
                    <label for="ConfirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm password" required>
		</div>

		<!-- Submit button -->
                <button type="submit" id = "Register" class="btn btn-success btn-block" >Register Account</button>
            </form>
	</form>
        </form>
 	<!-- Form End -->
        </div>
        
            <!-- Footer -->
            <div class="col-md4 col-sm-12 col-xs-12">
		<footer> ©2018 TextBids - An online 2nd Hand Texbook Trading Platform Created by T Nicholas </footer>
            </div>

            <div class="col-md4 col-sm-4 col-xs-12"></div> 
 		
 </div>        
 
</body>
</html>
