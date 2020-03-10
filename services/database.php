<?php
function connect(){
    try 
     {
        return new PDO ('mysql:host=127.0.0.1;dbname=citrus_fruits','root','');
     } 
     catch (PDOException $e)
     {
         echo 'connection failed: '.$e->getMessage();
     }
}
?>