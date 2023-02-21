<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Spy X Family Reviews</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

	<header>
	  <div class="collapse bg-dark" id="navbarHeader">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-8 col-md-7 py-4">
	          <h4 class="text-white">About Spy X Family Blogsite</h4>
	          <p class="text-muted">Welcome to Spy X Family Blogsite! This blogsite allows users to share their thoughts about the anime, manga, and other merchandises related to Spy X Family anonymously.</p>
	        </div>
	        <div class="col-sm-4 offset-md-1 py-4">
	          <h4 class="text-white">Sites</h4>
	          <ul class="list-unstyled">
	            <li><a href="https://spy-family.net/" class="text-white">Spy X Family Official Website</a></li>
                <li><a href="https://www.facebook.com/SpyFamily.en" class="text-white">Spy X Family Official Facebook Page</a></li>
	            <li><a href="logout.php" class="text-white">Logout</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="navbar navbar-dark bg-dark shadow-sm">
	    <div class="container">
	      <a href="#" class="navbar-brand d-flex align-items-center">
	        <strong>Spy X Family Blogsite</strong>
	      </a>
	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	    </div>
	  </div>
	</header>


	<main>
	  <section class="py-5 text-center container">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/carousel1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://aniyuki.com/wp-content/uploads/2022/05/aniyuki-anya-forger-image-55.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
	  </section>

	  <section class="py-2 bg-light">
	  	<div class="container">
	  		<div class="row">

	  			<div class="col-md-8">
	  				<div class="card shadow-sm">
		          	<img src="images/spy.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h1 class="display-5">Synopsis</h1>
                        <figure>
                            <blockquote class="blockquote">
                                <p style="text-align: justify; text-justify: inter-word;">
								Spy × Family (stylized as SPY×FAMILY and pronounced "spy family") is a Japanese manga series written and illustrated by Tatsuya Endo. The story follows a spy who has to "build a family" to execute a mission, not realizing that the girl he adopts as his daughter is a telepath, and the woman he agrees to be in a marriage with is a skilled assassin. 
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Cited from <cite title="Source Title">Wikipedia</cite>
                                <small class="text-muted"><a href="https://en.wikipedia.org/wiki/Spy_%C3%97_Family">Source</a></small>
                            </figcaption>
                        </figure>
		                </div>
		          </div>
	  			</div>

	  			<div class="col-md-4">
	  				<div class="row">
						<form action="login.php" method="POST" class="form-control" id="frmLogin" enctype="multipart/form-data" autocomplete="off">
							<input type="hidden" class="form-control" id="form_name" name="form_name" value="frmLogin">
							<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" id="email" name="email">
							</div>

							<div class="mb-3">
								<label for="pass" class="form-label">Password</label>
								<input type="password" class="form-control" id="pass" name="pass">
							</div>

							<div class="d-grid gap-2">
								<button class="btn btn-lg btn-danger" type="submit" name="signin" id="signin">Sign in</button>
								<a type='button' class='btn btn-lg btn-warning'href="ui_register.php">Register Here</a>
							</div>

						</form>
					</div>

					<div class="row" style="margin-top: 5px;">
						<form action="addCom.php" method="POST" class="form-control" id="frmComments" name="frmComments" enctype="multipart/form-data" autocomplete="off">
						
					    <h1 class="h3 mb-3 fw-normal">Post Comments</h1>

					    <div class="mb-3">
						    <textarea id="comment" name="comment" style="width:100%; height: 228px;"></textarea>
						</div>

					   <button class="btn btn-lg btn-danger" type="submit">Submit Post</button>
					    					    
					  </form>
					</div>

	  			</div>

	  		</div>
	  	</div>
	  </section>

	  <section class="py-5">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-12">
	  				<h1 class="h3 mb-3 fw-normal">Review by Fans</h1>
	  				<table class="table table-striped table-responsive">
                      <thead>
                        <tr>
                        <th scope="col">Message</th>
                        <th scope="col">Post Date</th>
                        </tr>
                    </thead>

                            <tbody>
            <!-- PHP Routine to Display Data -->
            <?php
                include_once ("config.php");
                $result = mysqli_query($mysqli, "SELECT * FROM tblcomments ORDER BY id DESC");
                while($res = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$res['Message']."</td>";
                    echo "<td>".$res['PostDate']."</td>";
                    echo "<td>
                        </td>";
                    echo "</tr>";
                    }
            ?>
        </tbody>

                    </table>
	  			</div>
	  		</div>	
	  	</div>
	  </section>

	</main>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
