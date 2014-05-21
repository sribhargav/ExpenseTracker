<?php

getGroupList();

function getGroupList() {
    require '../database/db.php';
    $tableContent = "";
    $sql = "Select * from kzygroup";
    $query = mysqli_query($conn, $sql);

    echo "<table class='table table-hover' height='auto'>";
    echo"<thead>";
    echo "<tr>";
    echo "<th>Group Name</th>";
    echo"<th>Roomate name</th>";

    echo"</tr>";
    echo "</thead>";
    while ($row = mysqli_fetch_array($query)) {
        
            echo "<tbody>";
        
        $sql2 = 'SELECT * FROM kzygrouproommatemapping WHERE kzy_GroupId=' . $row['kzy_GroupId'];
        $query2 = mysqli_query($conn, $sql2);
        while ($row2 = mysqli_fetch_array($query2)) {
          echo "<tr>";
        $tableContent .= "<td>" . $row['kzy_GroupName'] . "</td>";
            $sql3 = 'SELECT * FROM kzyroommates WHERE kzy_RoommateId=' . $row2['kzy_RoommateId'];
            $query3 = mysqli_query($conn, $sql3);
            while ($row3 = mysqli_fetch_array($query3)) {
                echo "<td>" . $row3['kzy_RoommateName'] . "</td>";
                    echo"<td><button type='submit' class='btn btn-primary btn-lg'>Edit</button></td>";
            }
        echo"</tr>";
        }
        

        $tableContent .= "</tbody>";
        
    }
    $tableContent .= "</table>";
    echo $tableContent;
}

?>
