<?php
require_once '../config/checkSession.php';
include ('../templates/header.php');
include "./model/groupsModel.php";
include "./model/itemsModel.php";

$groupsList = getAllGroups();
$itemsList = getAllItemsByRoommateId($_SESSION['userId']);
?>
<script>
    function addItem(userId) {
        var datastring = $("#addItemForm").serialize() + "&kzyItemBoughtBy=" + userId;

        $.ajax({
            type: "POST",
            url: "model/itemsModel.php",
            data: datastring,
            success: function(data) {

                var obj = jQuery.parseJSON(data);
                if (obj.status === "1") {
                    $('#itemTable').append('<a href="#" class="list-group-item"><i class="fa fa-asterisk fa-fw"></i> ' + obj.itemName + '<span class="pull-right text-muted small"><em>' + obj.itemBoughtOn + '</em></span></a>');
                }
            }
        });
    }
</script>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Items</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-7">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Add Item!</h3>
                </div>
                <div class="panel-body">
                    <fieldset>
                        <form id="addItemForm">
                            <div class="form-group">
                                <label>Item</label>
                                <input type="text" name="kzyItemName" class="form-control" placeholder="Item Name"  />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <div class="form-group input-group">            
                                    <span class="input-group-addon">Rs.</span>
                                    <input type="text" name="kzyItemPrice" class="form-control" placeholder="Item Price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" name="kzyItemBoughtOn" class="form-control" placeholder="Item Bought On"  />
                            </div>
                            <div class="form-group">
                                <label>Assign To Group</label>
                                <select class="form-control" name="kzyItemGroup">
                                    <option value="">---Select Group---</option>
                                    <?php
                                    foreach ($groupsList as $group) {
                                        echo "<option value=\"" . $group->get_groupId() . "\">" . $group->get_groupName() . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="hidden" name="callType" value="ajax" /> 
                            <input type="button" name="submit" value="Add Item" class="btn btn-primary btn-custom" onclick="addItem(<?php echo $_SESSION['userId']; ?>);"/>  
                            <input type="button" name="clear" value="Clear" class="btn btn-primary btn-custom" onclick="clear();"/>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-shopping-cart fa-fw"></i> Items Bought By Me
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="list-group" id="itemTable">
                        <?php
                        foreach ($itemsList as $item) {
                            echo "<a href=\"#\" class=\"list-group-item\">";
                            echo "    <i class=\"fa fa-asterisk fa-fw\"></i> " . $item->get_itemName();
                            echo "    <span class=\"pull-right text-muted small\"><em>1 hour ago</em>";
                            echo "    </span>";
                            echo "</a>";
                        }
                        ?>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
<?php include ('../templates/footer.php'); ?>