<?php
require_once '../config/checkSession.php';
include ('../templates/header.php');
include "./model/roommatesModel.php";

$roommatesList = getAllRoommates();
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-credit-card fa-fw"></i> Expense Sheet
                    <div class="pull-right">
                        <button type="button" class="btn btn-default btn-sm dropdown" data-toggle="modal" data-target="#myModal">
                            My Expenses - #
                        </button>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Roommate</th>
                                    <th>Amount (<i class="fa fa-rupee fa-fw"></i>)</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($roommatesList as $roommate) {

                                    echo "<tr>";
                                    echo "<td>" . $roommate->get_roommateId() . "</td>";
                                    echo "<td>" . $roommate->get_roommateName() . "</td>";
                                    echo "<td>abc</td>";
                                    echo "<td>Pending</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
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