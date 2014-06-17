<?php
require_once '../config/checkSession.php';
include ('../templates/header.php');
include "./model/roommatesModel.php";

$roommatesList = getAllRoommates();
?>
<script>
    function clean() {
        $(".form-control").val("");
    }

    function openRegistrationModal() {
        clean();
        $('#btnRegister').show();
        $('#btnUpdate').hide();
        $('#myModal').modal('show');
    }

    function register() {
        var datastring = $("#roommateRegistrationForm").serialize();
        $('#myModal').modal('hide');
        clean();

        $.ajax({
            type: "POST",
            url: "model/roommatesModel.php",
            data: datastring + "&actionType=insert",
            success: function(data) {
                var obj = jQuery.parseJSON(data);

                if (obj.status === "1") {
                    $('#roommatesCount').val(parseInt($('#roommatesCount').val()) + 1);
                    $('#roommateTable tbody').append('<tr id="roommate_tr_' + obj.roommateId + '"><td>' + $('#roommatesCount').val() + '</td><td>' + obj.roommateName + '</td><td>' + obj.roommateUsername + '</td><td>' + obj.roommateContact +
                            '</td><td><button type="button" class="btn btn-default"><i class="fa fa-edit fa-fw"></i></button>\n\
                                        <button type="button" class="btn btn-default" onclick="deleteRoommate(' + obj.roommateId + ');"><i class="fa fa-trash-o fa-fw"></i></button></td></tr>');
                }

            }
        });
    }

    function getRoommateDetails(roommateId) {
        $.ajax({
            type: "POST",
            url: "model/roommatesModel.php",
            data: "roommateId=" + roommateId + "&actionType=details&callType=ajax",
            success: function(data) {
                var obj = jQuery.parseJSON(data);

                if (obj.status === "1") {
                    $('#kzyRoommateId').val(roommateId);
                    $('#kzyRoommateName').val(obj.roommateName);
                    $('#kzyRoommateContactNumber').val(obj.roommateContact);
                    $('#kzyRoommateUsername').val(obj.roommateUsername);
                    $('#kzyRoommatePassword').val(obj.roommatePassword);

                    $('#btnRegister').hide();
                    $('#btnUpdate').show();
                    $('#myModal').modal('show');
                }
            }
        });
    }
    
    function updateRoommate() {
        var datastring = $("#roommateRegistrationForm").serialize();
        $('#myModal').modal('hide');
        clean();

        $.ajax({
            type: "POST",
            url: "model/roommatesModel.php",
            data: datastring + "&actionType=update",
            success: function(data) {
                var obj = jQuery.parseJSON(data);

                if (obj.status === "1") {
                    
                }

            }
        });
    }

    function deleteRoommate(roommateId) {
        if (confirm("Are you sure?") === true) {
            $.ajax({
                type: "POST",
                url: "model/roommatesModel.php",
                data: "roommateId=" + roommateId + "&actionType=delete&callType=ajax",
                success: function(data) {
                    var obj = jQuery.parseJSON(data);

                    if (obj.status === "1") {
                        $('#roommate_tr_' + roommateId).remove();
                    }
                }
            });
        }
    }
</script>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Roommates</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-10">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    All Roommates
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm dropdown" onclick="openRegistrationModal();">
                                <i class="fa fa-plus fa-fw"></i>
                                Add Roommate
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <input type="hidden" id="roommatesCount" value="<?php echo count($roommatesList); ?>" />
                        <table class="table table-striped table-bordered table-hover" id="roommateTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Roommate Name</th>
                                    <th>Username</th>
                                    <th>Contact Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($roommatesList as $roommate) {

                                    echo "<tr id='roommate_tr_" . $roommate->get_roommateId() . "'>";
                                    echo "<td>" . $i . "</td>";
                                    echo "<td>" . $roommate->get_roommateName() . "</td>";
                                    echo "<td>" . $roommate->get_roommateUsername() . "</td>";
                                    echo "<td>" . $roommate->get_roommateContactNumber() . "</td>";
                                    echo "<td>"
                                    . "<button type=\"button\" class=\"btn btn-default\" onclick='getRoommateDetails(" . $roommate->get_roommateId() . ")'>
                                            <i class=\"fa fa-edit fa-fw\"></i>
                                        </button>
                                        <button type=\"button\" class=\"btn btn-default\" onclick='deleteRoommate(" . $roommate->get_roommateId() . ")'>
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
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Add/Edit Roommate !</h3>
                                        </div>
                                        <div class="panel-body">
                                            <fieldset>
                                                <form id="roommateRegistrationForm">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" id="kzyRoommateName" name="kzyRoommateName" class="form-control" placeholder="RoomMate Name"  />

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <input type="text" id="kzyRoommateContactNumber" name="kzyRoommateContactNumber" class="form-control" placeholder="Contact Number"  />

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input type="text" id="kzyRoommateUsername" name="kzyRoommateUsername" class="form-control" placeholder="Username" />

                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" id="kzyRoommatePassword" name="kzyRoommatePassword" class="form-control" placeholder="Password" />
                                                        <input type="hidden" id="kzyRoommateId" name="kzyRoommateId" value="0" />
                                                        <input type="hidden" name="callType" value="ajax" />    
                                                    </div>
                                                    <!-- Change this to a button or input when using this as a form -->
                                                    <input type="button" id="btnRegister" name="register" value="Register" class="btn btn-primary btn-custom" onclick="register();" />
                                                    <input type="button" id="btnUpdate" name="update" value="Update" class="btn btn-primary btn-custom" onclick="updateRoommate();" />
                                                    <input type="button" name="clear" value="Clear" class="btn btn-primary btn-custom" onclick="clean();" />
                                                </form>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>
</div>
<!-- /.row -->

<!-- /.row -->
</div>
<!-- /#page-wrapper -->
<?php include ('../templates/footer.php'); ?>