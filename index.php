<?php

$connection = mysqli_connect("localhost", "root", "", "test_model");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Test model">

    <title>Test model</title>


    <!-- Custom CSS -->
    <link href="styles/style.css" rel="stylesheet">

    <!-- Fonts -->

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
                   <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link full" href="#about">About us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link full" href="#write">Write comment</a>
                     </li>
                     <li class="nav-item mr-0">
                        <a class="nav-link full" href="comments.php">Comments</a>
                     </li>
                    </ul>
                 </div>
             </div>
          </nav>
     </header>
	<!--HEADER END-->

   <!--CONTENT-->
	<div class="container">
          <div class="row">
		     <h1 class="col-lg-10 pl-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</h1>
	      </div>
   </div>
   <div class="bgimg">
   </div>
   <div class="first-block">
      <div class="container">

	     <div class="row block justify-content-center">
	        <div class="col-lg-4 art-1">
			   <a href="#" name="about"></a>
		       <img src="./images/social.png" alt="social">
		       <h3 class="block-heading">
		        Who we are
		       </h3>
			   <div class="cards no-gutters">
			     <p>&bull; It is a long established fact that a reader will be distracted</p>
			     <p>&bull; The readable content of a page when looking at its layout</p>
			     <p>&bull; The point of using Lorem Ipsum</p>
			     <p>&bull; As opposed to using 'Content here, content here'.</p>
			  </div>
		    </div>
		    <div class="col-lg-4 art-2">
		       <img src="./images/comp.png" alt="computer">
		       <h3 class="block-heading">
		        What we do
		       </h3>
			   <div class="cards no-gutters pr-5">
			     <p>&bull; Many desktop publishing packages and web page</p>
			     <p>&bull; There are many variations of passages of Lorem Ipsum available, but the majority have </p>
			     <p>&bull; Various versions have evolved over the years, sometimes by accident</p>
			   </div>
		    </div>
		    <div class="col-lg-4 art art-3">
		      <img src="./images/cogs.png" alt="technology">
		      <h3 class="block-heading">
		      Technology
		      </h3>
			  <div class="cads no-gutters pr-5">
			    <p>&bull; The point of using Lorem Ipsum</p>
			    <p>&bull; As opposed to using 'Content here, content here' </p>
			    <p>&bull; Contrary to popular belief, Lorem Ipsum is not simply random text</p>
			    <p>&bull; A Latin professor at<br> Hampden-Sydney College in Virginia</p>
			  </div>
		    </div>
	    </div>
	  </div>
	</div>

	 <div class="comment-form">
	   <div class="container">
	     <div class="row">
		   <div class="form-heading">
			   <h2 class="col-lg-4">Write comment</h2>
		   </div>
		   <form action="index.php" method="get">
			 <a href="#" name="write"></a>
			 <div class="form-group">
		        <input type="text" name="title" class="form-control" id="message_id" placeholder="Title" required="" pattern="^.{2,}$" title="Не менее двух символов" autocomplete="off">
		     </div>
			 <div class="form-group">
				<textarea class="form-control" id="comments" name="comments" placeholder="Your comment"></textarea>
			 </div>
			 <button type="submit" class="btn">Send</button>
		   </form>

		 </div>
	   </div>
	 </div>
   <!--CONTENT END-->

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
