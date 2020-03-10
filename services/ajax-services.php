<?php
require("database.php"); 

function comment(){
    $conn = connect();
	$sql = "INSERT INTO comments (status,name, email, text) VALUES (?,?,?,?)";
    $conn->prepare($sql)->execute([0,$_POST['name'], $_POST['email'], $_POST['subject']]);
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
    comment();
else
echo "Error, bad Http Method";    
?>