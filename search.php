<?php include ('shared/db.php'); 
	include ('shared/header.php');

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

    $query = "SELECT * FROM class_schedule WHERE CONCAT(id,date, subject, time, room) LIKE '%".$valueToSearch."%'";
	$result = $con->query($query);
}
else {
    $query = "SELECT * FROM students";
    $result = $con->query($query);
}
	
 ?>
<div class="class_schedule">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				    <h3>Class List</h3>
					<form class="search" action="search.php" method="post" enctype="multipart/form-data">
						<input type="text" name="valueToSearch" placeholder="search here..">
						<input type="submit" name="search" value="Room Search ">
					</form>
				<table class="table table-dark">
				  <thead>
					<tr>
					  <th scope="col">No.</th>
					  <th scope="col">Subject</th>
					  <th scope="col">Date</th>
					  <th scope="col">Time</th>
					  <th scope="col">Room</th>
					  <th scope="col">Action</th>
					</tr>
				  </thead>
				  <tbody>
			<?php
	           if($result->num_rows > 0){
                   while($row = $result->fetch_assoc()){
            ?>
					<tr>
					  <th scope="row"><?= $row['id']?></th>
					  <td><?= $row['subject']?></td>
					  <td><?= $row['date']?></td>
					  <td><?= $row['time']?></td>
					  <td><?= $row['room']?></td>
					  <td>
					  <a class="delete" href="action/delete_class.php?id=<?= $row['id'] ?>" title="delete">Delete</a>
					</tr>
				<?php
            }
	           }
            ?>
				  </tbody>
				</table>
				<a href="index.php" class><button type="button" class="btn btn-primary">Class List</button></a>
			</div>
		</div>
	</div>
</div>
<?php include ('shared/footer.php'); ?>