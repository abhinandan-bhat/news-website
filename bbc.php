!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS Web App</title>
   <!-- <link href="bootstrap.css" rel="stylesheet"/>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="bootstrap.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <link href="newsapp.css" rel="stylesheet"/>
</head>
<body>
    <?php
    $url='https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=d922d988f09144469e260a7f746ea16c';
    $response=file_get_contents($url);
    $NewsData=json_decode($response);
    ?>
    <div class="jumbotron1">
         <img src="newslogo.png" alt="loading..." class="img-responsive"> 
        <h1>Abhi'Gna News</h1>
        <form style="margin-top: 40px;">
        <script async src="https://cse.google.com/cse.js?cx=43a95ddd488be87af"></script>
<div class="gcse-search"></div>
</form>
    </div>
    
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header hidden-lg">
      <a class="navbar-brand" href="#">Abhi'Gna News</a>
    </div>
    <ul class="nav navbar-nav nav-justified">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="science.php">Science</a></li>
      <li><a href="tech.php">Technology</a></li>
      <li><a href="health.php">Health</a></li>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
</nav>
  
    <div class="container-fluid">
    <?php
    foreach($NewsData->articles as $News)
    {
    ?>
    <div class="row NewsGrid">
    <div class="col-md-3">
    <img src="<?php echo $News->urlToImage ?>" alt="News thumbnail" class="rounded">
    </div>
    <div class="col-md-9">
    <h2>Title:<?php echo $News->title ?></h2>
    <h5>Description:<?php echo $News->description ?></h5>
    <p>Content:<?php echo $News->content ?></p>
    <h6>Author:<?php echo $News->author ?></h6>
    <h6>Published <?php echo $News->publishedAt ?></h6>
    </div>
    </div> 
    <?php
    }
    ?>
    </div>  
    <div class="footer">
    <div class="bottomlinks">
				<h4>World News</h4>
				<ul>
					<li><a href="Indian Politics.php">India</a></li>
					<li><a href="usa.php">USA</a></li>
					<li><a href="australia.php">Australia</a></li>
					<li><a href="#">Africa</a></li>
					<li><a href="#">Asia</a></li>
                </ul>
            </div>
            <div class="bottomlinks">
				<h4>Entertainment</h4>
				<ul>
					<li><a href="star.php">Star</a></li>
					<li><a href="#">Media</a></li>
					<li><a href="#">Fashion</a></li>
					<li><a href="#">Screen</a></li>
					<li><a href="#">Culture</a></li>
				</ul>
            </div> 
            <div class="bottomlinks">
				<h4>Technology</h4>
				<ul>
					<li><a href="#">Startup</a></li>
					<li><a href="#">Culture</a></li>
					<li><a href="#">Future</a></li>
					<li><a href="#">Gadget</a></li>
					<li><a href="#">Bussiness</a></li>
				</ul>
            </div>
            <div class="bottomlinks">
				<h4>Help</h4>
				<ul>
					<li><a href="#">About US</a></li>
					<li><a href="#">Contact US</a></li>
					<li><a href="#">FAQ's</a></li>
				</ul>
			</div>
</div>  
</body>
</html>
