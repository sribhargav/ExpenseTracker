<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ExpenseTracker/config/db.php';

class Groups {
    
    private $groupId;
    private $groupName;
    private $numRoommates;
    
    function __construct() {
        $this->groupId = 0;
        $this->groupName = "";
        $this->numRoommates = 0;
    }

    function fillGroupInfo($groupId, $groupName, $numRoommates) {
        $this->groupId = $groupId;
        $this->groupName = $groupName;
        $this->numRoommates = $numRoommates;
    }
    
    function set_groupId($groupId) {
        $this->groupId = $groupId;
    }

    function get_groupId() {
        return $this->groupId;
    }

    function set_groupName($groupName) {
        $this->groupName = $groupName;
    }

    function get_groupName() {
        return $this->groupName;
    }
    
    function set_numRoommates($numRoommates) {
        $this->numRoommates = $numRoommates;
    }

    function get_numRoommates() {
        return $this->numRoommates;
    }
}

if (isset($_POST['callType']) && $_POST['callType'] == "ajax") {
    addGroup($_POST['kzyGroupName'], $_POST['roommates']);
}

function addGroup($groupName,$roommates){
    
    $query = "INSERT INTO kzygroup (kzy_GroupName) VALUES ('$groupName')";
    
    if (mysqli_query(getConnection(), $query)) {
        
        $sql1 = "SELECT max(kzy_GroupId) as kzy_LastInsertId from kzygroup";
        $query1= mysqli_query(getConnection(), $sql1);
        
        $row = mysqli_fetch_array($query1);
        
        foreach ($roommates as $roomie){
            $query1 = "INSERT INTO kzygrouproommatemapping (kzy_GroupId,kzy_RoommateId) VALUES (".$row['kzy_LastInsertId'].",".$roomie.")";
            mysqli_query(getConnection(), $query1);
        }
        
        $resp["status"] = "1";
        $resp["groupName"] = $groupName;
        $resp["roommatesNum"] = count($roommates);
        
        echo json_encode($resp);
    } else {
        
        $resp["status"] = "0";
        echo json_encode($resp);
    }
}

function getAllGroups() {

    $sql1 = "SELECT * FROM kzygroup";
    $query1 = mysqli_query(getConnection(), $sql1);

    $groupsList = array();

    while ($row1 = mysqli_fetch_array($query1)) {
        
        $sql2 = "SELECT * FROM kzygrouproommatemapping where kzy_GroupId=".$row1['kzy_GroupId'];
        $query2 = mysqli_query(getConnection(), $sql2);
        
        $num_roommates = mysqli_num_rows($query2);
        
        $group = new Groups();
        $group->fillGroupInfo($row1['kzy_GroupId'], $row1['kzy_GroupName'], $num_roommates);

        array_push($groupsList, $group);
    }

    return $groupsList;
}

?>