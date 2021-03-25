<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS Web App</title>
    <link href="bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="bootstrap.js"></script>
    <link href="newsapp.css" rel="stylesheet"/>
</head>
<body>
    <?php
    $url='http://newsapi.org/v2/top-headlines?country=us&apiKey=d922d988f09144469e260a7f746ea16c';
    $response=file_get_contents($url);
    $NewsData=json_decode($response);
    ?>
    <div class="jumbotron">
        <h1>Abhi'Gna News</h1>
        <img src="newslogo.png" alt="loading...">
        <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
    </div>
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
					<li><a href="#">Europe</a></li>
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