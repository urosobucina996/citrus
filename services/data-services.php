<?php

function getAllProducts($conn){
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

function getAllComments($conn){
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

function getAllUnapprovedComments($conn){
    $result = [];
    try{
        $query = $conn->prepare("SELECT * FROM comments where status = 0");
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