
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="Home.php">Jo Jo Streamer</a>
        </div>
        <div id="navbarTop" class="navbar-collapse collapse">
		<div class =" navbar-right">
          <ul class="nav navbar-nav">
              
				<?php
				if(isset($_SESSION['username'])){

					echo "<li class='dropdown'>
                <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
				<img src = 'userImage.jpg' width = '20px' height = '20px'>"
				.$_SESSION['username']."
					<span class='caret'></span></a>
                <ul class='dropdown-menu'>
				<li><a href='series list.php'>Series List</a></li>
                  <li><a href='account settings.php'>Account Settings</a></li>
                  <li role='separator' class='divider'></li>
                  <li><a href='Sign out.php'>Sign Out</a></li>
                </ul>
				";
				}
				else{
					echo"<a class='btn btn-warning' href='SIgn up.php' style = 'margin-top:10px'>Sign up</a>";
				}
?> 
				
</ul>
		  </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>