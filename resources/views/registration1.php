
<head>
    <title></title>
    <meta name=”viewport” content=”width=device-width"  initial-scale="1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        </head>


<body>
<div class="container register">
	<div class="row">
		<div class="col-md-3">
			<div class="register-info">
                            <img src="/images/green_little.jpg" alt="image" id="little" height="430" width="570"/>
				
			</div>
		</div>
            
		<div class="col-md-9" >
                    
			<div class="register-form">
                            <h2>Register</h2>
                            <p>who are you ordering medication for?</p>
                                <div class="row">
				    <div class="col-sm-6">          
                                        <button type="button" class="btn btn-default btn-block " id="myself">Myself</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-default btn-block">Someone Else</button>
				    </div>
                                </div>
                            <br>
				<div class="row">
				    <div class="col-sm-6">          
					<input type="text" class="form-control" id="fname" placeholder="Patient First Name" name="fname">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="lname" placeholder="Patient Last Name" name="lname">
				    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
                                         <input type="text" class="form-control" id="email" placeholder="Email Address" name="email">
                                    </div> 
                                </div>
                                <br>
                                <div class="row">
				    <div class="col-sm-6">          
                                         <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="lname" placeholder="Confirm Password" name="lname">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p><input type="radio" name="radio1" id="radio" >&nbsp;&nbsp;I aggree to the portal <b>Terms and Condition</b> and <b>Privacy Policy</b></p>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                       <p> <input type="radio" name="radio1" id="radio" >&nbsp;&nbsp;I agree I have Valid Prescription and TGA approval for an LPG product<br>
                                            &nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you dont havescript or approval and would like assistance with this please contact<br>
                                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;our team on 1300 118 840 or <b>info@littlegreenpharma.com</b></p>
                                    </div>
                                </div>
                                <br>
				  <div class="row">
                                    <div class="col-sm-12">
                                        <a href="{{'/login'}}"><button type="button" id="signup" class="btn btn-success btn-block" id="signup">Sign Up</button></a>
                                    </div> 
                                </div>
                                <br><center>Already have an account</center><br>
                               
                                 <div class="row">
                                    <div class="col-sm-12">
                                        <a href="/login"> <button type="button" class="btn btn-default btn-block" id="signin">Sign In </button></a>
                                    </div> 
                                </div>
			</div>
                    </div>
		</div>
</div>
</body>
</html>