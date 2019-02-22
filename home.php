<?php
	session_start();					//retrieve or create session
	if (!IsSet($_SESSION["user"]))		//user name must in session to stay here
		header("Location: login.php");	//if not, go back to login page
	$username=$_SESSION["user"];		//get user name into variable $username
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="assets/css/colours.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
    <body>
    <div class="container-fluid">
        <!--- Header --->
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="active navbar-brand" href="#">VIVA CARD</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div>
            </nav>
        </header>
        <!--- Header End--->
		<h1>User Home Page</h1>
		<p>
			Welcome, <?php print $username; ?>!
			<a href="profile_form.php">Update Your Profile</a>
		</p>

		<form method="get" action="logout.php">
			<button type="submit">Logout</button>
		</form>

        <!---Footer start--->
        <div class="container-fluid text-center">
            <footer class=“col-md-12">
                <div class=‘row'>
                    <section class="col-md-2">
                        <a href="#"><h6>Meet the team</h6></a>
                    </section>

                    <section class="col-md-2">
                        <a href="#"><h6>Privacy</h6></a>
                    </section>

                    <section class="col-md-2">
                        <a href="#"><h6>Sitemap</h6></a>
                    </section>

                    <section class="col-md-2">
                        <a href="#"><h6>Complaints</h6></a>
                    </section>

                    <section class="col-md-2">
                        <a href="#"><h6>User Policy</h6></a>
                    </section>

                    <section class="col-md-2">
                        <address>
                            <a href="mailto:groupe_cmm004@live.rgu.ac.uk"><h6>Contact Information</h6></a>
                        </address>
                    </section>
                    <address>
                        <h6><center>Visit us at<br>
                                Robert Gordon University, Garthdee House,<br>
                                Garthdee Road, Aberdeen, AB10 7QB, Scotland,<br>
                                UK<br>
                                <a href="mailto:groupe_cmm004@live.rgu.ac.uk">
                                    <img src="assets/Images/email.png" class="img-thumbnail img-responsive" width="30px" height="20px"></a>
                                <a href="#">
                                    <img src="assets/Images/facebook.png" class="img-thumbnail img-responsive" width="30px" height="20px"></a>
                                <a href="#">
                                    <img src="assets/Images/twitter.png" class="img-thumbnail img-responsive" width="30px" height="20px"></a>
                                <a href="#">
                                    <img src="assets/Images/github.png" class="img-thumbnail img-responsive" width="30px" height="20px"></a>

                            </center> </h6>
                    </address>
                </div>
            </footer>
        </div>
        <!---Footer end--->
	</body>
</html>
