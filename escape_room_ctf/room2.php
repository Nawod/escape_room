<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Escape Room - Room 02</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<body style="background:#1a1a1a">
    <div class="container">
        <div class="text-center">
            <div class="row" style="position:relative;top:40px">
                <div class="col">
                    <h1 style="color:#ca2f2f;">ROOM 02 </h1>
                </div>
            </div>
            <div class="row" style="position:relative;top:50px">
                <div class="col">
                    <p style="color:#dfdfdf;">"look ! it is kind of like a terminal but there is no SUDO command in it"</p>

                </div>
            </div>
            <div class="row" style="position:relative;top:90px">
                <div class="col">
                    <audio controls>

                        <source src="mp3/lock.mp3" type="audio/mpeg">
                        Your browser does not support the audio tag.
                    </audio>
                    <a href="mp3/lock.wav" download><label>Download this audio</label></a>
                </div>


            </div>

            <hr style="border-top: 2px solid #dfdfdf;position:relative;top:105px">
            <div class="row" style="position:relative;top:130px">
                <div class="col">
                    <p style="color:#dfdfdf;">"Unlock the padlock by entering passcode."</p>
                </div>
            </div>
            <div class="row" style="position:relative;top:150px">
                <div class="col">
                    <div class="text-center">
                        <img src="images/lock.jpg" class="img-thumbnail" alt="Responsive image" style="width:auto;height:460px">
                    </div>
                </div>
            </div>
            <div class="row" style="position:relative;top:-37px">
                <div class="col">
                    <form action="" style="width:207px;margin-left:455px;text-align:center">
                        <div class="form-group">
                            <input type="email" class="form-control" id="LockInput" placeholder="PASSCODE" style="text-align:center;font-weight:700;color:#ca2f2f">
                        </div>
                        <button type="submit" class="btn btn-outline-danger" style="position:relative;top:50px">Unlock the Door</button>
                        </from>
                </div>
            </div>
            <div class="row" style="text-align:center;position:relative;top:125px">
                <div class="col">
                    <p style="color:#dfdfdf;">"-escape room-"</p>
                </div>
            </div>
        </div>
        <script>
             console.log("Here is a hint to get the flag for next room:"); 
             console.log("David’s parents have three sons: Snap, Crackle, and what’s the name of the third son?");
        </script>
</body>

</html>