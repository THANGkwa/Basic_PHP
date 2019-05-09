<?php
require "Config/connect_mysql.php";

$id = $_GET['id'];

$sql = "DELETE FROM members WHERE id='$id'";
$query = mysqli_query($connect, $sql);

if ($query) {
    echo "<div class='alert alert-success'>Delete Member Success</div>";
    echo "<meta http-equiv=\"refresh\"content=\"3;URL='read_member.php'\">";
} else {
    echo "<div class='alert alert-danger'>Delete Member Fail</div>";
}
