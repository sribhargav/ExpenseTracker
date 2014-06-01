<?php
require_once '../config/checkSession.php';
include ('../templates/header.php');
include "./model/roommatesModel.php";
include "./model/groupsModel.php";

$roommatesList = getAllRoommates();
$groupsList = getAllGroups();
?>
<script>
    function addGroup() {
        var datastring = $("#addGroupForm").serialize();
        $('#myModal').modal('hide');

        $.ajax({
            type: "POST",
            url: "model/groupsModel.php",
            data: datastring,
            success: function(data) {

                var obj = jQuery.parseJSON(data);

                if (obj.status === "1") {
         
                    $('#groupsCount').val(parseInt($('#groupsCount').val()) + 1);
                    $('#groupTable tbody').append('<tr><td>' + $('#groupsCount').val() + '</td><td>' + obj.groupName + '</td><td>' + obj.roommatesNum +
                            '</td><td><button type="button" class="btn btn-default"><i class="fa fa-edit fa-fw"></i></button>\n\
                                        <button type="button" class="btn btn-default"><i class="fa fa-trash-o fa-fw"></i></button></td></tr>');
                }

            }
        });
    }
</script>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Groups</h1>
        </div>
        <!-- /.col-lg-12 -->

        <div class="col-lg-7">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    All Groups
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm dropdown" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-plus fa-fw"></i>
                                Add Group
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <input type="hidden" id="groupsCount" value="<?php echo count($groupsList); ?>" />
                        <table class="table table-striped table-bordered table-hover" id="groupTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Group Name</th>
                                    <th>No. Of Members</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($groupsList as $group) {

                                    echo "<tr>";
                                    echo "<td>" . $i . "</td>";
                                    echo "<td>" . $group->get_groupName() . "</td>";
                                    echo "<td>" . $group->get_numRoommates() . "</td>";
                                    echo "<td>"
                                    . "<button type=\"button\" class=\"btn btn-default\">
                                            <i class=\"fa fa-edit fa-fw\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-default\">
                                            <i class=\"fa fa-trash-o fa-fw\"></i>
                                        </button></td>";
                                    echo "</tr>";
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Add/Edit Group !</h3>
                                        </div>
                                        <div class="panel-body">
                                            <fieldset>
                                                <form id="addGroupForm">
                                                    <div class="form-group">
                                                        <label>Group Name</label>
                                                        <input type="text" name="kzyGroupName" class="form-control" placeholder="Enter Group Name"  />

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Select Members</label><br />
                                                        <?php
                                                        foreach ($roommatesList as $roommate) {
                                                            echo "<input type='checkbox' name='roommates[]' value='" . $roommate->get_roommateId() . "' />&nbsp;" . $roommate->get_roommateName() . "<br/>";
                                                        }
                                                        ?>
                                                    </div>
                                                    <input type="hidden" name="callType" value="ajax" />   
                                                    <input type="button" name="submit" value="Add Group" class="btn btn-primary btn-custom" onclick="addGroup();"/>
                                                    <input type="button" name="clear" value="Clear" class="btn btn-primary btn-custom" onclick="clear();"/>
                                                </form>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
</div>
</div>
<!-- /#page-wrapper -->
<?php include ('../templates/footer.php'); ?>