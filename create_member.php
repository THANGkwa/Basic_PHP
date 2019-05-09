<?php

require "Config/connect_mysql.php";
$msg = "";

// check Submit form
if (!empty($_POST['submit'])) {
    //รับค่าจาก form
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tel = $_POST['tel'];
    $status = $_POST['status'];

    $sql = "INSERT INTO members(fullname,email,password,tel,status) 
        VALUES ('$fullname','$email','$password','$tel','$status')";

    $query = mysqli_query($connect, $sql);

    if ($query) {
        $msg = "<div class='alert alert-success'>Create Success</div>";
        echo "<meta http-equiv=\"refresh\"content=\"3;URL='read_member.php'\">";
    } else {
        $msg = "<div class='alert alert-danger'>Fail to Create</div>";
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="jumbotron bg-info text-light">
        <h1 class="display-3">Add New Member</h1>

    </div>

    <div class="container">
        <?php echo $msg; ?>
        <form method="POST" action="create_member.php">
            <div class="form-group row">
                <label for="fullname" class="col-sm-3 col-form-label">Fullname</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" id="email" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="password" id="password" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="tel" class="col-sm-3 col-form-label">Tel</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="status" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="status" id="status" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>

        </form>
    </div>

    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>