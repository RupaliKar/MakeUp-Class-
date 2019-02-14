<?php include ('shared/db.php'); 
	include ('shared/header.php');
	
	$sql = 'SELECT * FROM class_schedule';
    $class_schedule = $con->query($sql);
	
	
	
	
 ?>
<div class="schedule_form">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<h1>Add Class Schedule</h1>
				<form action="action/add_class.php" method="post">
				
					<input type="date" name="date" placeholder="Date:"/>
					<input type="time" name="time" placeholder="Time:"/>
					<input type="text" name="room" placeholder="Room:"/>
					<input type="text" name="teacher" placeholder="Teacher Name:"/>
					<input type="submit" name="submit" value="ADD"/>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="class_schedule">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mx-auto">
				    <h3>Class Search</h3>
					<form class="search" action="search.php" method="post" enctype="multipart/form-data">
						<input type="text" name="valueToSearch" placeholder="search here..">
						<input type="submit" name="search" value="Search">
					</form>
				<table class="table table-dark">
				 <h3>Class List</h3>
				  <thead>
					<tr>
					  <th scope="col">No.</th>
					  <th scope="col">Date</th>
					  <th scope="col">Time</th>
					  <th scope="col">Room</th>
					  <th scope="col">Teacher Name</th>
					  <th scope="col">Action</th>
					</tr>
				  </thead>
				  <tbody>
			<?php
	           if($class_schedule->num_rows > 0){
                   while($row = $class_schedule->fetch_assoc()){
            ?>
					<tr>
					  <th scope="row"><?= $row['id']?></th>
					  <td><?= $row['date']?></td>
					  <td><?= $row['time']?></td>
					  <td><?= $row['room']?></td>
					  <td><?= $row['teacher']?></td>
					  <td>
					  <a class="delete" href="action/delete_class.php?id=<?= $row['id'] ?>" title="delete">Delete</a>
					</tr>
				<?php
            }
	           }
            ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include ('shared/footer.php'); ?>