<?php
require("database.php"); 

function comment(){
    $conn = connect();
    $sql = "INSERT INTO comments (status,name, email, text,date) VALUES (?,?,?,?,?)";
    if(preg_match('/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/',$_POST['email']) && preg_match('/^[A-Z][a-z\s]{3,40}.$/',$_POST['subject'])){
        $conn->prepare($sql)->execute([0,$_POST['name'], $_POST['email'], $_POST['subject'],$_POST['date']]);
    }else{
        echo 'Validation failed';
    }
}

function approve(){
    $conn = connect();
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