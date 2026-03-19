<!doctype html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
     <?php include('top.inc.php') ?>
</head>
<body>
	<div id="wrapper">
    
      <?php include('header.inc.php') ?>	
      <?php include('left.inc.php') ?>	

       
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-headline">
						<div class="panel-heading">
                        
							<h3 class="panel-title">Welcome to <?php echo $_SESSION['adm_name'];?> </h3>
                            
							<p class="panel-subtitle">Welcome to Client Maintenance Console. From this console, you can access and update different aspects of your web site. Choose from the available options from the menu structure to the left.
</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		
         <?php include('footer.inc.php') ?>	
	</div>
	

</body>
</html>