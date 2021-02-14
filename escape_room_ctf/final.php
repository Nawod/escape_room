<?php
// Start the session
session_start();
if (isset($_SESSION['room10'])) {
    
}
else
{  
    header("location:lobby.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Escape Room - Congratz!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body style="background:#1a1a1a">
    <div class="container">
        <div class="row" style="position:relative;top:50px">
            <div class="col">
                <h1 style="text-align: center;color:#ca2f2f;">CONGRATULATIONS!</h1>
            </div>
        </div>
        <div class="row" style="position:relative;top:80px">
            <div class="col">
                <p style="text-align: center;color:#dfdfdf;">"You finished all level of the Escape Room"</p>
                <p style="text-align: center;color:#dfdfdf;">"Now you are free!"</p>
            </div>
        </div> 
        <div class="row" style="position:relative;top:110px">
            <div class="col">
                <div class="text-center">
                    <a href="lobby.php"><button type="button" class="btn btn-outline-danger" style="float:center;">Go back to Lobby</button></a>
                </div>
            </div>
        </div>
        <div class="row" style="position:relative;top:130px">
            <div class="col">
                <div class="text-center">
                    <img src="images/escaperoom.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
        <div class="row" style="text-align:center;position:relative;top:145px">
            <div class="col">
                <p style="color:#dfdfdf;">escape room ctf challange made by Nawod & Chanuth</p>
            </div>
        </div>
    </div>
</body>
</html>
