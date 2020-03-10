<?php
require("database.php"); 

function getAllProducts(){
	$conn = connect();
        $result = [];
        try{
            $query = $conn->prepare("SELECT * FROM product");
            $query->execute();
            if($query->rowCount()){
                while($row = $query->fetch(PDO::FETCH_ASSOC)){
                    $result[] = $row;
                }
                return $result;
            }
        }catch( PDOException $e ) {
            die("Problem in query to get products.");
        }
}

function getAllComments(){
	$conn = connect();
        $result = [];
        try{
            $query = $conn->prepare("SELECT * FROM comments where status = 1");
            $query->execute();
            if($query->rowCount()){
                while($row = $query->fetch(PDO::FETCH_ASSOC)){
                    $result[] = $row;
                }
                return $result;
            }
        }catch( PDOException $e ) {
            die("Problem in query to get comments.");
        }
}

?>