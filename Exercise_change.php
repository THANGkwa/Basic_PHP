<?php
$change = 0;
//check submit form
if (!empty($_POST["submit"]))
{

//รับค่าจาก form ด้วย  php
    $price = $_POST["price"];
    $money = $_POST["money"];

// คำนวณเงินทอน
    $change = $money - $price;

    // echo $change;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHANGE PROGRAM</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>

    <div class="jumbotron bg-info text-light">
        <h1 class="display-4 text-center">CHANGE PROGRAM</h1>

    </div>

    <div class="container">
        <div class="container">
            <form class="col-md-5 offset-md-3" method="POST" action="Exercise_change.php">
                <div class="form-group row">
                    <label for="price" class="col-sm-3 col-form-label">PRICES</label>
                    <div class="col-sm-9">
                        <input type="number" step=".01" class="form-control" name="price" id="price" placeholder=""required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="money" class="col-sm-3 col-form-label">CASH</label>
                    <div class="col-sm-9">
                        <input type="number"step=".01" class="form-control" name="money" id="money" placeholder=""required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label"></label>
                    <div class=" col-sm-9">
                        <input type="submit" name="submit" value="CALCULATE" class="btn btn-primary">
                        <hr>
                        CHANGE  <?=$change;?>  BATH
                    </div>
                </div>
            </form>


        </div>
    </div>

    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
