<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  

    <link rel="stylesheet" type="text/css" href="../style.css">

    <title>Project2</title>
	body {
  		background-image: url(../fon2.jpg); 
 	   	background-color: #c7b39b; 
 	  }
  </head>
  <body>
	<iframe src="../menu.html" width="100%" height="190" style="border:0"></iframe>
	<header>
		<div class="main">
      <h1>Answer</h1>
        <p>
          <?php
            $d=mktime(18, 16, 34, 6, 10, 2017);
            echo "Created date is " . date("Y-m-d H:i:sa", $d);
          ?>
        </p>
		</div>
	</header>

  </body>
</html>