<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
		<nav>
    		<div class="nav-wrapper">
    			
	       		<a href="index.php"  <?php if ($currentPage == 'index.php') { echo 'id="current"';} ?> class="brand-logo"><h4>Forsíða</h4>	      

	        	<ul id="nav-mobile" class="right hide-on-med-and-down">
	        	<li><a href="2.php" <?php if ($currentPage == '2.php') { echo 'id="current"'; } ?>>Upload</a></li>
	        	<li><a href="skrainn_form.php"  <?php if ($currentPage == 'skrainn_form.php') { echo 'id="current"'; } ?>>Innskráning</a></li>
	        	<li><a href="nyskraning.php"  <?php if ($currentPage == 'nyskraning.php') { echo 'id="current"';} ?>>Nýr notandi</a></li>
	      		</ul>
    		</div>
  		</nav>
