<?php
// Start the session
session_start();
if (isset($_SESSION['room9'])) {
    $passcode = "escape{final_key}";
    if((isset($_POST['sub'])))
    {
        $input = $_POST['LockInput'];
        if($passcode == $input)
        {
            $_SESSION['room10'] = $passcode;
            header("location:final.php");
        }
        else
        {
            echo '<script>alert("Ha! Ha! Ha! Did you think that, leaving is easy? (You have to decrypt the key) ")</script>'; 
            echo $input;
        }
    }
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
    <title>Escape Room - Room 10</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body style="background:#1a1a1a">
    
    <div class="container">
        <div class="text-center">
            <div class="row" style="position:relative;top:40px">
                <div class="col">
                    <h1 style="color:#ca2f2f;">ROOM 10 </h1>
                </div>
            </div>
            <div class="row" style="position:relative;top:50px">
                <div class="col">
                    <p style="color:#dfdfdf;">"Do you want to leave?"</p>
                    <p style="color:#dfdfdf;">"Here! the key of final door lock - 'rnvykr{zmgyp_ord}' "</p>
                </div>
            </div>
            <div class="row" style="position:relative;top:50px">
                <div class="col">
                    <p style="color:#dfdfdf;">" Good Luck! "</p>
                </div>
            </div>

            <hr style="border-top: 2px solid #dfdfdf;position:relative;top:105px">
            <div class="row" style="position:relative;top:130px">
                <div class="col">
                    <p style="color:#dfdfdf;">"Unlock the padlock by entering passcode."</p>
                    <p style="color:#dfdfdf;">"Make your answer as 'escape{flag}' format"</p>
                </div>
            </div>
            <div class="row" style="position:relative;top:150px">
                <div class="col">
                    <div class="text-center">
                        <img src="images/lock.jpg" class="img-thumbnail" alt="Responsive image" style="width:auto;height:460px">
                    </div>
                </div>
            </div>
            <div class="row"  style="position:relative;top:-37px">
                <div class="col">
                    <form action="" method="POST" style="width:207px;margin-left:455px;text-align:center">
                        <div class="form-group">
                            <input type="text" class="form-control" name="LockInput" placeholder="PASSCODE" style="text-align:center;font-weight:700;color:#ca2f2f">
                        </div>
                        <button type="submit" name="sub" class="btn btn-outline-danger" style="position:relative;top:50px">Unlock the Door</button>
                        </from>
                </div>
            </div>
            <div class="row" style="text-align:center;position:relative;top:125px">
                <div class="col">
                    <p style="color:#dfdfdf;">"-escape room-"</p>
                </div>
            </div>
        </div>

</body>

</html>
