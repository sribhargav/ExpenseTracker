<?php

$_SERVER['DOCUMENT_ROOT'].'/ExpenseTracker/config/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "select kzy_RoommateId,kzy_RoommateName,kzy_UserType from kzyroommates where kzy_username='$username' and kzy_password='$password'";
$conn = mysqli_connect('localhost', 'root', 'horcrux', 'expensetracker');
$result = mysqli_query($conn, $query);

$numrows = mysqli_num_rows($result);

if ($numrows == 1) {
    $row = mysqli_fetch_array($result);

    session_start();

    $_SESSION['userId'] = $row['kzy_RoommateId'];
    $_SESSION['userType'] = $row['kzy_UserType'];
    $_SESSION['userName'] = $row['kzy_RoommateName'];

    switch ($row['kzy_UserType']) {

        case 1: header("Location: administrator/dashboard.php");
            break;

        case 2: header("Location: user/dashboard.php");
            break;
    }
} else {
    echo "Username password do not match..";
}
?>