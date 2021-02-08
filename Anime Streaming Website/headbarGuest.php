<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarTop" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="Home.php">Jo Jo Streamer</a>
        </div>
        <div id="navbarTop" class="navbar-collapse collapse">
		<div class =" navbar-right">
          <form class="navbar-form" method = "POST">
            <div class="form-group">
              <input type="text" placeholder="User name" class="form-control" name = "username" required>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name = "password"required>
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
					  <a class="btn btn-warning" href="SIgn up.php">Sign up</a>
          </form>
          <span class="error" style="color:red"> <?php echo $loginErr ?> </span>
		  </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>