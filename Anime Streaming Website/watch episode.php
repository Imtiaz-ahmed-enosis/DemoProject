<?php
session_start();
include 'header.php';
include 'connect.php';
include 'login handler.php';

?>
<?php
$seriesNo = $_GET['s_index'];
$episodeNo = $_GET['episode_no'];
$query = "SELECT s_name FROM series_info WHERE s_index = '$seriesNo'";
$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
	$row = mysqli_fetch_assoc($result);
	$s_name = $row['s_name'];
?>
<body style = "background-color:Gray">
<div class = "container">
<video width="100% height = 800px" style = "text-align:right" controls>
  <source src="Series/<?php echo $s_name.'/'.$episodeNo.'.mp4'?>" type="video/mp4"/>
  Your browser does not support HTML5 video.
</video>
<!-- Post content here -->

<!-- Then cmments below -->
</div>
<div class = "container">
<h1 style = "margin-left:450px">Comments</h1>
<?php
$query = "SELECT * FROM comments WHERE s_index='$seriesNo' and episode_no='$episodeNo'";
$result = mysqli_query($connection,$query);
mysqli_close($connection);
//should be the current post's id
while($row2 = mysqli_fetch_assoc($result))
{
	if($row2['status'] == 1){
?>

<div class="comment" style = "margin-left:450px">
By: <?php echo $row2['u_name']; ?>
<p>
<?php echo $row2['comment_data']; ?>
</p>
</div>
<?php
}
}
if(isset($_SESSION['username'])){
echo '
<form class="form-signin" align = "left" method= "GET" action = "comment.php">
        <h2 class="form-signin-heading"></h2>
        <label for="inputEmail" class="sr-only">Leave a comment</label>
        <input type="textarea" id="inputcomment" class="form-control" placeholder="Leave a comment" name = "commentbody"required >
		<input type = "hidden" value = "'.$seriesNo.'" name = "s_index">
		<input type = "hidden" value = "'.$episodeNo.'" name = "episode_no">
        <button class="btn btn-lg btn-default btn-block" type="submit">Done</button>
      </form>
</div>';

}
else{
	echo '<h4>Sign in to Comment</h4>';
}
?>
</body>