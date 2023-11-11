<?php 
$conn = mysqli_connect('localhost','user','user12','win1');
if(!$conn){
    echo 'error' . mysqli_connect_error();
}
?>