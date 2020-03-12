<?php
require("database.php");
if(!empty($_SESSION['username'])) {
    header('Location: index.php');
}
$username = $_POST['username'];
$password = $_POST['password'];
function login(){
    if(preg_match('/^[A-Za-z][A-Za-z0-9]{3,10}$/',$_POST['username']) && preg_match('/^[A-Za-z0-9]{5,10}$/',$_POST['password'])){
        $conn = connect();
        try{
            $query = $conn->prepare("SELECT * FROM users where username =? and password=?");
            $query->execute([$_POST['username'],sha1($_POST['password'])]);
            if($query->rowCount() == 1){
                session_start();
                while($row = $query->fetch()){
                    $_SESSION['username'] = $row['username'];
                }
                header('Location: ../admin.php');
            }else{
                header('Location: ../login.php');
            }
        }catch( PDOException $e ) {
            die("Problem in query.");
        }
    }else{
        header('Location: ../login.php');
    }
}
login();
?>