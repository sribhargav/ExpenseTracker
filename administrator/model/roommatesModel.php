<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ExpenseTracker/config/db.php';

class Roommates {

    private $roommateId;
    private $roommateName;
    private $roommateContactNumber;
    private $roommateUsername;
    private $roommatePassword;
    private $roommateUsertype;

    function __construct() {
        $this->roommateId = 0;
        $this->roommateName = "";
        $this->roommateContactNumber = "";
        $this->roommateUsername = "";
        $this->roommatePassword = "";
        $this->roommateUsertype = 0;
    }

    function fillRoommateInfo($roommateId, $roommateName, $roommateContactNumber, $roommateUsername, $roommatePassword, $roommateUsertype) {
        $this->roommateId = $roommateId;
        $this->roommateName = $roommateName;
        $this->roommateContactNumber = $roommateContactNumber;
        $this->roommateUsername = $roommateUsername;
        $this->roommatePassword = $roommatePassword;
        $this->roommateUsertype = $roommateUsertype;
    }

    function set_roommateId($roommateId) {
        $this->roommateId = $roommateId;
    }

    function get_roommateId() {
        return $this->roommateId;
    }

    function set_roommateName($roommateName) {
        $this->roommateName = $roommateName;
    }

    function get_roommateName() {
        return $this->roommateName;
    }

    function set_roommateContactNumber($roommateContactNumber) {
        $this->roommateContactNumber = $roommateContactNumber;
    }

    function get_roommateContactNumber() {
        return $this->roommateContactNumber;
    }

    function set_roommateUsername($roommateUsername) {
        $this->roommateUsername = $roommateUsername;
    }

    function get_roommateUsername() {
        return $this->roommateUsername;
    }

    function set_roommatePassword($roommatePassword) {
        $this->roommatePassword = $roommatePassword;
    }

    function get_roommatePassword() {
        return $this->roommatePassword;
    }

    function set_roommateUsertype($roommateUsertype) {
        $this->roommateUsertype = $roommateUsertype;
    }

    function get_roommateUsertype() {
        return $this->roommateUsertype;
    }

}

if (isset($_POST['callType']) && $_POST['callType'] == "ajax") {
    addRoommate($_POST['kzyRoommateName'], $_POST['kzyRoommateContactNumber'], $_POST['kzyRoommateUsername'], $_POST['kzyRoommatePassword'], 2);
}

function addRoommate($roommateName, $roommateContactNumber, $roommateUsername, $roommatePassword, $roommateUsertype) {
    $query = "INSERT INTO kzyroommates (kzy_RoommateName,kzy_RoommateContactNumber,kzy_username,kzy_password,kzy_UserType) VALUES ('$roommateName', '$roommateContactNumber', '$roommateUsername', '$roommatePassword', $roommateUsertype)";

    if (mysqli_query(getConnection(), $query)) {
        $resp["status"] = "1";
        $resp["roommateName"] = $roommateName;
        $resp["roommateUsername"] = $roommateUsername;
        $resp["roommateContact"] = $roommateContactNumber;
        
        echo json_encode($resp);
    } else {
        
        $resp["status"] = "0";
        echo json_encode($resp);
    }
}

function getAllRoommates() {

    $sql = "SELECT * FROM kzyroommates";
    $query = mysqli_query(getConnection(), $sql);

    $roommatesList = array();

    while ($row = mysqli_fetch_array($query)) {
        $roommate = new Roommates();
        $roommate->fillRoommateInfo($row['kzy_RoommateId'], $row['kzy_RoommateName'], $row['kzy_RoommateContactNumber'], $row['kzy_username'], $row['kzy_password'], $row['kzy_UserType']);

        array_push($roommatesList, $roommate);
    }

    return $roommatesList;
}

?>