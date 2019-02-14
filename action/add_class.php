<?php include ('../shared/db.php');  ?>
<?php
$date = $_POST['date'];
$time = $_POST['time'];
$room = $_POST['room'];
$teacher = $_POST['teacher'];


/* $sql = "INSERT INTO class_schedule (date , subject ,time, room  ) VALUES ('".$date."','".$subject."','".$time."','".$room."')";

$result = $con->query($sql);

	if($result==true){
		header('Location: http://localhost/MakeUP_Class/index.php');
	}
	else{
			echo 'Something wrong!!';
}
 */
 if (isset($_POST['room']))
{
 $room = $_POST['room'];
 $query = "SELECT * FROM class_schedule WHERE room ='$room' and time ='$time' and date ='$date'";
 $result = mysqli_query($con,$query); 

     if (mysqli_num_rows($result))
        {
          header('Location: http://localhost/MakeUP_Class/booked.php');
        } 

else 
{
	$sql ="INSERT INTO class_schedule(date  ,time, room,teacher ) VALUES('".$date."', '".$time."', '".$room."','".$teacher."')";
	$result = $con->query($sql);
	
	header('Location: http://localhost/MakeUP_Class/empty_room.php');
	
}
	
  }


?>