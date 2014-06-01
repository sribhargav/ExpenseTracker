<?php

function getConnection() {
    $conn = mysqli_connect('localhost', 'root', 'horcrux', 'expensetracker');
    if (!$conn) {
        echo "My sql error inconnection" . mysql_error();
    }

    return $conn;
}

?>