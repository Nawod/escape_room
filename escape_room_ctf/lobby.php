<?php
    // Start the session
    session_start();

    $_SESSION['room1'] = "room1";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Escape Room - Lobby</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body style="background:#1a1a1a">
    <div class="container">
        <div class="row" style="position:relative;top:50px">
            <div class="col">
                <h1 style="text-align: center;color:#ca2f2f;">ESCAPE ROOM</h1>
            </div>
        </div>
        <div class="row" style="position:relative;top:90px">
            <div class="col">
                <p style="text-align: center;color:#dfdfdf;">"Escape Room is a locked room, which has many clues and hints to unlock the rooms.
                A room is called as a level. After player entered to the room, he has to find the key
                to unlock the doors for escape, while solving the puzzels"</p>
            </div>
        </div> 
        <div class="row" style="position:relative;top:130px">
            <div class="col">
                <div class="text-center">
                    <a href="room1.php"><button type="button" class="btn btn-outline-danger" style="float:center;">Enter to the Room</button></a>
                </div>
            </div>
        </div>
        <div class="row" style="position:relative;top:150px">
            <div class="col">
                <div class="text-center">
                    <img src="images/escaperoom.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
        <div class="row" style="text-align:center;position:relative;top:175px">
            <div class="col">
                <p style="color:#dfdfdf;">"-escape room-"</p>
            </div>
        </div>
    </div>
</body>
</html>