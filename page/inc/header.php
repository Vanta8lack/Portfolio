<header class="main_nav">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light w-100"> 
				<a class="navbar-brand p_0" href="#top"><img class="nav-logo" src="images/logo/1.png" alt="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
					  <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
					  <li class="nav-item"><a class="nav-link" href="index.php?page=gallery">Gallery</a></li>
					  <li class="nav-item"><a class="nav-link" href="index.php?page=about">About</a></li>

					  <?
					  	if($_SESSION['user']){
					  		echo '<li class="nav-item" style="color:#fff;">'.$_SESSION['user'].'</li>
					  		<li class="nav-item"><a class="nav-link" href="index.php?page=logout">Logout</a></li>';
					  	}else{
					  ?>

					   <li class="nav-item"><a class="nav-link" href="index.php?page=login">Login</a></li>
					   
					<? } ?>

					</ul>
				</div>		
			</nav>
		</div>	
	</header> 