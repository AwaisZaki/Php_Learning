<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stuff/bootstrap-4.0.0-alpha.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="stuff/bootstrap-4.0.0-alpha.4/css/style.css" rel="stylesheet" type="text/css" />
    <title>Connection With Database</title>
</head>
<body>
   
   
		<div class="container">
			<h1 class="text-default" style="text-align:center;">SignUp</h1>
			
			<div class="row">
				
				
					<p id="demo"></p>
					<form name="myForm" action="login.html"  onsubmit="return validate();" >
						
						<div class="form-group">
							
							<label for="email" >Email:</label>
							<input type="email" class="form-control" id="email" placeholder="Enter Email" autocomplete="off" value=""/>
						
						</div>
						
						<div class="form-group">

							
							<label for="pwd" >Password:</label>

							<input type="password" class="form-control" id="pwd" placeholder="Enter Password" autocomplete="off"  value=""  />
						
						</div>
						
						<div class="checkbox">
						
							<label><input type="checkbox"/>Remember me</label>
						</div>
						
						<button type="submit" class="btn btn-default" style="background-color:red;">Sign Up</button>
					
					
					
					</form>
					
			
			</div>
		
		</div>
        
       
        
        <script src="stuff/bootstrap-4.0.0-alpha.4/app.js" type="text/javascript"></script>
        
    
</body>
</html>