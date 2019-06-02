<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Test model">

    <title>Comments</title>



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
                        <a class="nav-link full" href="index.php#about">About us</a>
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
     <div class="container mt-1 ">
		  <div class="row justify-content-center">
		     <div class="col-12 justify-content-start offset-1">
		        <div class="heading-comm pb-3 no-gutters">
		          <h1 class="second-page-header ml-1">Comments</h1>
		        </div>
			   </div>
      </div>
			 <!-----------COMMENTS---------->

		 <div class="flexbox justify-content-start mt-2 ml-1">

			 <?php

			 $connection = mysqli_connect("localhost", "root", "", "test_model");

			?>
			<?php
				 $query = "SELECT * FROM `test_model_news` ORDER BY `id`";

				 $result = mysqli_query($connection, $query);

				 while($row = mysqli_fetch_array($result)){
		 ?>
			    <div class="comment-block mb-5 pl-1">
				   <div class="content pt-4">
				      <h4 class="block-heading pb-2"><?php echo $row["title"]; ?></h4>
				      <p class="block-content"><?php echo $row["short_publish"]; ?></p>
				   <a href="./full-comment.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn mb-5 mt-2 block-btn">Read more</button></a>
				   </div>
				</div>

				<?php
	 				}
	 		?>
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
