<?php
session_start();
?>
<!DOCTYPE html>
	<html>
		<head>
			<title>CNFSR - Your college confessions</title>
			<link rel="shortcut icon" href="img/favicon.png"
    		type="image/x-icon" />
    		<link type="text/css" rel="stylesheet" href="css/app.css" />
    		<link href='http://fonts.googleapis.com/css?family=Signika:300' rel='stylesheet' type='text/css'>
		</head>
		<body>
			<header>
				<div class="navbar">
		    		<div id="navlogo">
		    			<img src="img/Navbar_image.png" />
		    		</div>
		    		<div class="navigation">
		    			<nav>
		    				<a class="navigation" href="index2.html">Logout</a>
	    					<a class="navigation" href="#">Settings</a>
	    					<a class="navigation" href="#">Favorites</a>
	    					<a class="navigation" href="uni_select.php">Home</a>
		    			</nav>
		    		</div>
	    		</div>
			</header>
			<main>
				<div class="sidebar">
					<h2><?php  echo $_SESSION['username'];  ?></h2>
					<h2><?php echo $_SESSION['email'];  ?></h2>
					
					<form action="submit.php" method="post">
					    <input class="form-control2" type="text" name="conf" id="conf"/>
					    <input class="button2" type="submit" value="Confess!"/>
					</form>
					
				</div>
				<div class="confessions">
					<div class="tophead">
						<h1>George Mason University Confessions</h1>
					</div>
				
				<?php
				
				$confs = explode(",",file_get_contents("txt/feed.txt"));
				
				for($i=0;$i<count($confs);$i++){
				    
				    ?>
			        
			        <p> <?php echo $confs[$i]; ?> </p>
			        
			        <form action="submit.php" method="post">

			        
			        <input class="form-control2" type="text" placeholder="comment"/>
			        <input class="button2" type="submit"/>
			        
			        </form>
			        
			        <?php
				}
				
				?>
				
				</div>
			</main>
		</body>
	</html>