<?php
session_start();
include 'header.php';
include 'connect.php';
include 'login handler.php';
?>
<div class="container">
  <h2>Series List</h2>        
  <table class="table">
    <thead>
      <tr>
        <th>Series Name</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	$query = "SELECT s_index,s_name FROM series_info";
	$result = mysqli_query($connection,$query);
	
	while($row1 = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td><a href = 'series info.php?s_index=".$row1['s_index']."'>".$row1['s_name']."</a></td>
      </tr>";
    }
	mysqli_close($connection);
	echo "</tbody>
  </table>
</div>";

?>