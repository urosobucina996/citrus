<?php
session_start();
include('services/product-services.php');
?>
<!doctype html>
<html>
<head>
    <title>Home Page</title>
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
                    <h1>Citrus</h1>
                </div>
                <div class="col-xs-6 align-right">
                <?php if(empty($_SESSION['username'])) {
                    ?>
                    <a href='login.php'>Login</a>
                    <?php
                    }
                    else{ 
                    ?>
                    <a href='logout.php'>Logout</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-12">
        <div class="container">
            <div class="row">
                <?php foreach(getAllProducts() as $value){ ?>
                <div class="col-lg-4 col-xl-4">
                    <h3> <?php echo $value['title']; ?>
                    <img class="responsive image-size" src="<?php
                        echo $value['image'];?>" />
                    <sapn><?php
                        echo $value['description'];
                    ?></span>
                 </div>
                <?php 
                }
                ?>
            </div>
        </div>

        <div id="form" class="container">
            <h3>Comments Form</h3>
            <form>
            <div class="col-xs-12">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
            </div>
            <div class="col-xs-12">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            </div>
            <div class="col-xs-12">
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            </div>
            <div class="col-xs-12">
                <input type="submit" value="Submit">
            </div>
            </form>
        </div>
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
</body>
</html>