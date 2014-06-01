<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ExpenseTracker/config/db.php';

//session_start();

class Items {

    private $itemId;
    private $itemName;
    private $itemPrice;
    private $itemBoughtOn;
    private $itemBoughtBy;
    private $itemGroupId;

    function __construct() {
        $this->itemId = 0;
        $this->itemName = "";
        $this->itemPrice = 0.0;
        $this->itemBoughtOn = new DateTime();
        $this->itemBoughtBy = 0;
        $this->itemGroupId = 0;
    }

    function fillItemInfo($itemId, $itemName, $itemPrice, $itemBoughtOn, $itemBoughtBy, $itemGroupId) {
        $this->itemId = $itemId;
        $this->itemName = $itemName;
        $this->itemPrice = $itemPrice;
        $this->itemBoughtOn = $itemBoughtOn;
        $this->itemBoughtBy = $itemBoughtBy;
        $this->itemGroupId = $itemGroupId;
    }

    function set_itemId($itemId) {
        $this->itemId = $itemId;
    }

    function get_itemId() {
        return $this->itemId;
    }

    function set_itemName($itemName) {
        $this->itemName = $itemName;
    }

    function get_itemName() {
        return $this->itemName;
    }

    function set_itemPrice($itemPrice) {
        $this->itemPrice = $itemPrice;
    }

    function get_itemPrice() {
        return $this->itemPrice;
    }

    function set_itemBoughtOn($itemBoughtOn) {
        $this->itemBoughtOn = $itemBoughtOn;
    }

    function get_itemBoughtOn() {
        return $this->itemBoughtOn;
    }

    function set_itemBoughtBy($itemBoughtBy) {
        $this->itemBoughtBy = $itemBoughtBy;
    }

    function get_itemBoughtBy() {
        return $this->itemBoughtBy;
    }

    function set_itemGroupId($itemGroupId) {
        $this->itemGroupId = $itemGroupId;
    }

    function get_itemGroupId() {
        return $this->itemGroupId;
    }

}

if (isset($_POST['callType']) && $_POST['callType'] == "ajax") {
    addItem($_POST['kzyItemName'], $_POST['kzyItemPrice'], $_POST['kzyItemBoughtOn'], $_POST['kzyItemBoughtBy'], $_POST['kzyItemGroup']);
}

function addItem($itemName, $itemPrice, $itemBoughtOn, $roommateId, $itemGroupId) {

    $query = "INSERT INTO kzyitems (kzy_ItemName,kzy_ItemPrice,kzy_ItemBoughtOn,kzy_ItemBoughtBy,kzy_ItemGroupId) VALUES ('$itemName', $itemPrice, '$itemBoughtOn', $roommateId, $itemGroupId)";

    if (mysqli_query(getConnection(), $query)) {
        $resp["status"] = "1";
        $resp["itemName"] = $itemName;
        $resp["itemBoughtOn"] = $itemBoughtOn;

        echo json_encode($resp);
    } else {

        $resp["status"] = "0";
        echo json_encode($resp);
    }
}

function getAllItems() {

    $sql = "SELECT * FROM kzyitems";
    $query = mysqli_query(getConnection(), $sql);

    $itemsList = array();

    while ($row = mysqli_fetch_array($query)) {
        $item = new Items();
        $item->fillItemInfo($row['kzy_ItemId'], $row['kzy_ItemName'], $row['kzy_ItemPrice'], $row['kzy_ItemBoughtOn'], $row['kzy_ItemBoughtBy'], $row['kzy_ItemGroupId']);

        array_push($itemsList, $item);
    }

    return $itemsList;
}

function getAllItemsByRoommateId($roommateId) {

    $itemsList = array();

    $sql = "SELECT * FROM kzyitems where kzy_ItemBoughtBy=" . $roommateId;
    $query = mysqli_query(getConnection(), $sql);

    while ($row = mysqli_fetch_array($query)) {
        $item = new Items();
        $item->fillItemInfo($row['kzy_ItemId'], $row['kzy_ItemName'], $row['kzy_ItemPrice'], $row['kzy_ItemBoughtOn'], $row['kzy_ItemBoughtBy'], $row['kzy_ItemGroupId']);

        array_push($itemsList, $item);
    }
    return $itemsList;
}

?>