<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Test model">

    <title>Comment</title>

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->


    <!-- Custom CSS -->
    <link href="styles/style.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
   <!--HEADER-->
	 <header>
		 <nav class="navbar navbar-light  navbar-expand-lg  site_navbar" id="site-navbar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation" style="outline: none; margin-left:10px">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="nav-link logo full" href="./index.php"><img src="images/logo11.png" alt="Lorem ipsum co">
				</a>
                <div class="collapse navbar-collapse" id="site-nav">
                   <ul class="navbar-nav ml-auto mt-1">
                     <li class="nav-item">
                        <a class="nav-link full" href="./index.php#about">About us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link full" href="./index.php#write">Write comment</a>
                     </li>
                     <li class="nav-item mr-0">
                        <a class="nav-link full active" href="comments.php">Comments</a>
                     </li>
                    </ul>
                 </div>
             </div>
          </nav>
     </header>
   <!--HEADER END-->
   <!--CONTENT-->
     <div class="container mt-5">
		  <div class="row justify-content-center">
		 <div class="col-9 ml-5 py-1 ml-5 pl-4 pr-5">
		   <div class="back-row mt-2">
		     <a href="comments.php" ><p class="back-link"><i class="fas fa-arrow-left"></i> Back to Comments</p></a>
		   </div>
			 <?php

			  $connection = mysqli_connect("localhost", "root", "", "test_model");

			 ?>
			 <?php

	 			$id = $_REQUEST["id"];

	 			$id = mysqli_real_escape_string($connection, $id);

	 			$query = "SELECT * FROM `test_model_news` WHERE `id` = '$id'";

	 			$result = mysqli_query($connection, $query);

	 			$row = mysqli_fetch_array($result);

	 		?>

		   <div class="article pb-4">
		      <h1 class="third-page-header ml-0"><?php echo $row["title"]; ?></h1>
			  <p class="ph pb-2 pr-3"><?php echo $row["publish"]; ?></p>
		   </div>
		  </div>
	     </div>
		 <div class="row justify-content-center mt-5">
		   <h3 class="undertext pt-5 pb-2">Lorem Ipsum is text of the typesetting industry</h3>
		 </div>
		  <div class="row justify-content-center my-4">
		    <a href="index.php"><button type="button" class="btn tohomepage px-4"><i class="fas fa-arrow-left"></i> Back to homepage</button></a>
		  </div>
	 </div>
   <!--CONTENT-->
   <!--FOOTER-->

	  <footer class="footer">
		   <div class="container-fluid">
			    <div class="row">
			    <div class="contacts mt-4 ml-5">
                   <p class="email">mail@mailtest.com</p>
		           <p class="tel">+30-6977664062</p>
		        </div>
		        <div class="ml-auto justify-content-end mt-5 pr-5">
		           <p class="copiright">Copyright © 2019 Test All Rights Reserved.</p>
		        </div>
		       </div>
		   </div>
	  </footer>

    <!--FOOTER END-->

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
