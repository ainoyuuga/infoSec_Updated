	<!doctype html>
    <html lang="en">  
    <head>  
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" href="css/reg.css">
		
	  
	  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">
				<img src="images/spy_logo.png" alt="Logo" width="160" height="24"/>
			</a>
		</div>
	  </header>
    </head>  
	
    <body>  
	<main>
		
		<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="exampleModalLabel"> Account Registration</h3>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					
					<div class="modal-body">
						<form action="add.php" method="POST">
							<div class="mb-3">
								<label for="Name" class="form-label">Name</label>
								<input type="text" class="form-control" id="Name" name="Name">
							</div>
							<div class="mb-3">
								<label for="Email" class="form-label">Email Address</label>
								<input type="email" class="form-control" id="Email" name="Email">
							</div>
							<div class="mb-3">
								<label for="Password" class="form-label">Password</label>
								<input type="password" class="form-control" id="Password" name="Password">
							</div>
							<div class="mb-3">
								<label for="CPassword" class="form-label">Confirm Password</label>
								<input type="password" class="form-control" id="CPassword" name="CPassword">
							</div>
							<div class="modal-footer">
								<button type="button" onclick="location.href = 'index.php'" class="btn btn-default" data-bs-dismiss="modal">Close</button>
								<button type="submit" name="Submit" class="btn btn-primary">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</main>
	<script src="js/bootstrap.min.js"></script><script src="js/dashboard.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script>
    feather.replace()
  </script>
    </body>  
	
    </html>   
