<?php
session_start();
include('services/data-services.php');
include('services/database.php');
if(empty($_SESSION['username'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="row">
    <div class="col-xs-12">
        <div class="page-top">
            <div class="row">
                <div class="col-xs-6">
                    <h1>Admin</h1>
                </div>
                <div class="col-xs-6 align-right">
                    <a href='logout.php'>Logout</a>
                </div>
            </div>
        </div>
    </div>
        <!-- Display comments -->
        <div id="comments" class="container">
            <div class="row">
                <div class="col-12">
                <?php if(getAllUnapprovedComments(connect())) {?>
                <h4>Comments</h4>
                </div>
                <?php foreach(getAllUnapprovedComments(connect()) as $value){ ?>
                <div class="col-12 comments">
                <h4> <?php echo $value['name']; ?></h4>
                    <p><?php echo $value['email'];?></p>
                    <span><?php echo $value['text'];?></span>
                    <span><?php echo $value['date'];?></span>
                    <input type="button" class="pull-right" onclick="aproveComment(<?php echo $value['id']; ?>)" value="Approve me!">
                 </div>
                <?php 
                }
            }
                ?>
            </div>
        </div>
        <!-- End comments -->
        <!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/services.js"></script>
        <!-- End of Scripts -->
</body>
</html>