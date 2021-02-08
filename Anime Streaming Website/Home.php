<?php
session_start();
include 'header.php';
include 'connect.php';
include 'login handler.php';


?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style= "margin-bottom:0px; padding-top:0px; padding-bottom:0px;">
      <div class="container">
	  <div class="row">
	  <?php
		$query = "SELECT * FROM series_info";
		$result = mysqli_query($connection,$query);
	$count = mysqli_num_rows($result);
	$picker = rand(1,$count);
	$query = "SELECT s_index,s_name,s_summary,s_image FROM series_info WHERE s_index = '$picker'";
	$result = mysqli_query($connection,$query);
	$row = mysqli_fetch_assoc($result);
	 mysqli_close($connection);
		?>
	  <div class ="col-md-4">
        <h3>Random Anime</h3>
        <img src = "images/<?php echo $row['s_image']; ?>" width = "300px" height="300px"></img>
		</div>
		<div class = "col-md-8" style="margin-top:54px;">
		
		<a href = "series info.php?s_index= <?php echo $row['s_index'];?>"><h2><?php echo $row['s_name'];?></h2></a>
		<p><?php echo $row['s_summary'];?></p>
        <p align = "right"><a class="btn btn-primary btn-lg" href="Home.php" role="button">Roll &raquo;</a>
		</p>
      </div>
    </div>
	</div>
	</div>
	<?php include 'Navigation bar.php'; ?>

    <div class="container" style="display:block" id= "trendingTab">
      <!-- Example row of columns -->
	  
      <div class="row">
        <div class="col-md-4" style = "max-height:500px; overflow:hidden" >
          
          <p><a  href="series info.php?s_index= 1" ><h2>One Punch Man</h2>
		  <img class = "img-circle" src = "images/opm.jpg" height="300px" width= "100%" style ="margin:2px"></img>
		  
          </a>
		  <p class = "text-info">The seemingly ordinary and unimpressive Saitama has a rather unique hobby: 
		  being a hero. In order to pursue his childhood dream, he trained relentlessly 
		  for three years—and lost all of his hair in the process. Now, Saitama is 
		  incredibly powerful, so much so that no enemy is able to defeat him in 
		  battle. In fact, all it takes to defeat evildoers with just one punch 
		  has led to an unexpected problem—he is no longer able to enjoy the 
		  thrill of battling and has become quite bored.</p>
		  
</p>
        </div>
        <div class="col-md-4" style = "max-height:500px; overflow:hidden" >
          
          <p><a  href="series info.php?s_index= 2" ><h2>Fairy Tail</h2>
		  <img class = "img-circle" src = "images/fairy tail.jpg" height="300px" width= "100%" style ="margin:2px"></img>
		  
          </a>
		  <p class = "text-info">Set in an imaginary world, the Earth Land, there exists a Mage Guild called "Fairy Tail". Fairy Tail is stationed in the town Magnolia, residing in the Kingdom of Fiore, and is currently governed by Makarov, Guild's master. 

Lucy Heartfilia, a 17-year-old girl, wishes to become a full-fledged mage and join one of the most prestigious Mage Guilds in the world, Fairy Tail. 

One day, out of pure coincidence, she meets Natsu Dragneel, a boy who is transportation-sick, but very cheerful in nature. However, the thing she does not know is that Natsu is the closest connection to Fairy Tail, as he is a Mage in Fairy Tail.
</p>
        </div>
        <div class="col-md-4" style = "max-height:500px; overflow:hidden" >
          
          <p><a  href="series info.php?s_index= 5" ><h2>Steins;Gate</h2>
		  <img class = "img-circle" src = "images/steins gate.jpg" height="300px" width= "100%" style ="margin:2px"></img>
		  
          </a>
		  <p class = "text-info">Steins;Gate is set in the summer of 2010, approximately one year after the events that took place in Chaos;Head, in Akihabara.

Steins;Gate is about a group of friends who have customized their microwave into a device that can send text messages to the past. As they perform different experiments, an organization named SERN, who has been doing their own research on time travel, tracks them down and now the characters have to find a way to avoid being captured by them.</p>
		  
</p>
        </div>
      </div>

      <hr>

    </div>
	<div class="container" style="display:none" id= "newestTab">
      <!-- Example row of columns -->
	  
      <div class="row">
        <div class="col-md-4" style = "max-height:500px; overflow:hidden" >
          
          <p><a  href="series info.php?s_index= 1" ><h2>One Punch Man</h2>
		  <img class = "img-circle" src = "images/opm.jpg" height="300px" width= "100%" style ="margin:2px"></img>
		  
          </a>
		  <p class = "text-info">The seemingly ordinary and unimpressive Saitama has a rather unique hobby: being a hero. In order to pursue his childhood dream, he trained relentlessly for three years�and lost all of his hair in the process. Now, Saitama is incredibly powerful, so much so that no enemy is able to defeat him in battle. In fact, all it takes to defeat evildoers with just one punch has led to an unexpected problem�he is no longer able to enjoy the thrill of battling and has become quite bored.


</p>
		  
</p>
        </div>
        <div class="col-md-4" style = "max-height:500px; overflow:hidden" >
          
          <p><a  href="series info.php?s_index= 4" ><h2>Tokyo Ghoul</h2>
		  <img class = "img-circle" src = "images/tokyo ghoul.jpg" height="300px" width= "100%" style ="margin:2px"></img>
		  
          </a>
		  <p class = "text-info">The suspense horror/dark fantasy story is set in Tokyo, which is haunted by mysterious "ghouls" who are devouring humans. People are gripped by the fear of these ghouls whose identities are masked in mystery. An ordinary college student named Kaneki encounters Rize, a girl who is an avid reader like him, at the caf� he frequents. Little does he realize that his fate will change overnight.</p>
		  
</p>
        </div>
        <div class="col-md-4" style = "max-height:500px; overflow:hidden" >
          
          <p><a  href="series info.php?s_index= 3" ><h2>Shingeki no Kyojin</h2>
		  <img class = "img-circle" src = "images/aot.jpg" height="300px" width= "100%" style ="margin:2px"></img>
		  
          </a>
		  <p class = "text-info">Several hundred years ago, humans were nearly exterminated by giants. Giants are typically several stories tall, seem to have no intelligence, devour human beings and, worst of all, seem to do it for the pleasure rather than as a food source. A small percentage of humanity survived by walling themselves in a city protected by extremely high walls, even taller than the biggest of giants. Flash forward to the present and the city has not seen a giant in over 100 years. Teenage boy Eren and his foster sister Mikasa witness something horrific as the city walls are destroyed by a super giant that appears out of thin air. As the smaller giants flood the city, the two kids watch in horror as their mother is eaten alive. Eren vows that he will murder every single giant and take revenge for all of mankind.</p>
		  
</p>
        </div>
      </div>

      <hr>

    </div>
	<div class="container" style="display:none" id= "popularTab">
      <!-- Example row of columns -->
	  
      <div class="row">
        <div class="col-md-4" style = "max-height:500px; overflow:hidden" >
          
          <p><a  href="series info.php?s_index= 2" ><h2>Fairy Tail</h2>
		  <img class = "img-circle" src = "images/fairy tail.jpg" height="300px" width= "100%" style ="margin:2px"></img>
		  
          </a>
		  <p class = "text-info">Set in an imaginary world, the Earth Land, there exists a Mage Guild called "Fairy Tail". Fairy Tail is stationed in the town Magnolia, residing in the Kingdom of Fiore, and is currently governed by Makarov, Guild's master. Lucy Heartfilia, a 17-year-old girl, wishes to become a full-fledged mage and join one of the most prestigious Mage Guilds in the world, Fairy Tail. One day, out of pure coincidence, she meets Natsu Dragneel, a boy who is transportation-sick, but very cheerful in nature. However, the thing she does not know is that Natsu is the closest connection to Fairy Tail, as he is a Mage in Fairy Tail.</p>
		  
</p>
        </div>
        <div class="col-md-4" style = "max-height:500px; overflow:hidden" >
          
          <p><a  href="series info.php?s_index= 4" ><h2>Tokyo Ghoul</h2>
		  <img class = "img-circle" src = "images/opm.jpg" height="300px" width= "100%" style ="margin:2px"></img>
		  
          </a>
		  <p class = "text-info">The suspense horror/dark fantasy story is set in Tokyo, which is haunted by mysterious "ghouls" who are devouring humans. People are gripped by the fear of these ghouls whose identities are masked in mystery. An ordinary college student named Kaneki encounters Rize, a girl who is an avid reader like him, at the caf� he frequents. Little does he realize that his fate will change overnight.</p>
		  
</p>
        </div>
        <div class="col-md-4" style = "max-height:500px; overflow:hidden" >
          
          <p><a  href="series info.php?s_index= 3" ><h2>Shingeki no Kyojin</h2>
		  <img class = "img-circle" src = "images/aot.jpg" height="300px" width= "100%" style ="margin:2px"></img>
		  
          </a>
		  <p class = "text-info">Several hundred years ago, humans were nearly exterminated by giants. Giants are typically several stories tall, seem to have no intelligence, devour human beings and, worst of all, seem to do it for the pleasure rather than as a food source. A small percentage of humanity survived by walling themselves in a city protected by extremely high walls, even taller than the biggest of giants. Flash forward to the present and the city has not seen a giant in over 100 years. Teenage boy Eren and his foster sister Mikasa witness something horrific as the city walls are destroyed by a super giant that appears out of thin air. As the smaller giants flood the city, the two kids watch in horror as their mother is eaten alive. Eren vows that he will murder every single giant and take revenge for all of mankind.</p>
		  
</p>
        </div>
      </div>

      <hr>

    </div><!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
  <script>
  document.getElementById("trending").addEventListener("click",showTrending);
  document.getElementById("newest").addEventListener("click",showNewest);
  document.getElementById("popular").addEventListener("click",showPopular);
  function showTrending(){
document.getElementById("trendingTab").style.display="block";
document.getElementById("newestTab").style.display="none";
document.getElementById("popularTab").style.display="none";
document.getElementById("trendingButton").className="active";
document.getElementById("newestButton").className="";
document.getElementById("popularButton").className="";

}
function showNewest(){
document.getElementById("trendingTab").style.display="none";
document.getElementById("newestTab").style.display="block";
document.getElementById("popularTab").style.display="none";
document.getElementById("trendingButton").className="";
document.getElementById("newestButton").className="active";
document.getElementById("popularButton").className="";
}
function showPopular(){
document.getElementById("trendingTab").style.display="none";
document.getElementById("newestTab").style.display="none";
document.getElementById("popularTab").style.display="block";
document.getElementById("trendingButton").className="";
document.getElementById("newestButton").className="";
document.getElementById("popularButton").className="active";
}
  </script>
</html>
