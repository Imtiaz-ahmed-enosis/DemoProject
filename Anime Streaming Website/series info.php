<?php
session_start();
include 'header.php';
include 'connect.php';
include 'login handler.php';
$seriesNo = $_GET['s_index'];
$query = "SELECT s_name,s_summary,s_image FROM series_info WHERE s_index = '$seriesNo'";
$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$row = mysqli_fetch_assoc($result);
?>
<body>
<div class="jumbotron" style= "margin-bottom:0px; padding-top:0px; padding-bottom:0px;">
      <div class="container">
	  <div class="row">
	  <div class ="col-md-4">
        <img src = "images/<?php echo $row['s_image']; ?>" width = "300px" height="300px" style = "margin-top:70px"></img>
		</div>
		<div class = "col-md-8" style="margin-top:54px;">
		
		<h2><?php echo $row['s_name'];?></h2>
		<p><?php echo $row['s_summary'];?></p>
      </div>
    </div>
	</div>
	</div>
	
	<div class="container">
  <h2>Episode List</h2>        
  <table class="table">
    <thead>
      <tr>
        <th>Episode No</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	$query = "SELECT episode_no FROM episode_list WHERE s_index = '$seriesNo'";
	$result = mysqli_query($connection,$query);
	mysqli_close($connection);
	while($row1 = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td><a href = 'watch episode.php?s_index=$seriesNo&episode_no=".$row1['episode_no']."'>Episode ".$row1['episode_no']."</a></td>
      </tr>";
    }
	echo "</tbody>
  </table>
</div>
</body>";
	?>