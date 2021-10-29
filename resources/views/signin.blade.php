
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
<!--    <meta name="csrf-token" content="{{ csrf_token() }}">-->
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
<div class="container login">
	<div class="row">
		<div class="col-lg-4">
			<div class="login-info">
                            <img src="/images/green_little.jpg" alt="image" height="500" width="600"/>
				
			</div>
		</div>
            
		<div class="col-md-8" >
                    <div class="login-form">
                    <form id="#" action="#" method="GET">
                                    @csrf
			<div class="register-form">
                            <h2>Login</h2><br>
				
                               <div class="row">
                                    <div class="col-sm-12">
                                         <input type="text" class="form-control" id="email_2" placeholder="Your Email Address" name="email_2">
                                    </div> 
                               </div>
                                <br>
                               <div class="row">
                                    <div class="col-sm-12">
                                         <input type="text" class="form-control" id="password_2" placeholder="Your Password" name="password_2">
                                    </div> 
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        
                                        <p><label class="radio-inline"><input type='radio' name='remember_me'>
                                            Remember Me</label></p>
                                    </div> 
                                         <div class="col-sm-6" >
                                             <a href=""> <p id="p" class="text-right" >Lost Your Password?</p></a>
                                    </div> 
                                </div>
                                <br>
			        <div class="row">
                                    <div class="col-sm-12">
                                        <a href="{{'#'}}"><button type="button" class="btn btn-success btn-block" id="login">Login</button></a>
                                    </div> 
                                </div>
                                <br><center>Don't have an account</center><br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a href="/signup"><button type="button" class="btn btn-default btn-block">Register Here</button></a>
                                    </div> 
                                </div>
			</div>
                    </form>
                    </div>
		</div>
        </div>
</div>
</body>
</html>