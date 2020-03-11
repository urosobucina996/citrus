<?php
require("database.php"); 

function comment(){
    $conn = connect();
	$sql = "INSERT INTO comments (status,name, email, text,date) VALUES (?,?,?,?,?)";
    $conn->prepare($sql)->execute([0,$_POST['name'], $_POST['email'], $_POST['subject'],$_POST['date']]);
}

function approve(){
    $conn = connect();
    echo 'in';
	$sql = "UPDATE comments SET status=? where id=?";
    $conn->prepare($sql)->execute([1,$_POST['id']]);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['function'] == 'comment')
    comment();
    if($_POST['function'] == 'approve')
    approve();
} 
else
echo "Error, bad Http Method";    
?>