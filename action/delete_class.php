<?php include ('../shared/db.php'); ?>
<?php

$id = $_GET['id'];


$sql = "DELETE FROM class_schedule WHERE id = ".$id;

$result = $con->query($sql);//Query Excution method

if($result==true){
    header('Location: http://localhost/MakeUP_Class/index.php');
}else{
    echo 'Something wrong!!';
}


?>