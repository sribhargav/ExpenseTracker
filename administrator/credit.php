<?php
require_once '../config/checkSession.php';
include ('../templates/header.php');
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Credits</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    All Credits
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">
                                <i class="fa fa-credit-card fa-fw"></i>
                                Add Credit
                            </button>
                        </div>
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
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Abc</td>
                                    <td>Def</td>
                                    <td>Ghi</td>
                                    <td>
                                        <button type="button" class="btn btn-default">
                                            <i class="fa fa-edit fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-default">
                                            <i class="fa fa-trash-o fa-fw"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Abc</td>
                                    <td>Def</td>
                                    <td>Ghi</td>
                                    <td>
                                        <button type="button" class="btn btn-default">
                                            <i class="fa fa-edit fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-default">
                                            <i class="fa fa-trash-o fa-fw"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Abc</td>
                                    <td>Def</td>
                                    <td>Ghi</td>
                                    <td>
                                        <button type="button" class="btn btn-default">
                                            <i class="fa fa-edit fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-default">
                                            <i class="fa fa-trash-o fa-fw"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Abc</td>
                                    <td>Def</td>
                                    <td>Ghi</td>
                                    <td>
                                        <button type="button" class="btn btn-default">
                                            <i class="fa fa-edit fa-fw"></i>
                                        </button>
                                        <button type="button" class="btn btn-default">
                                            <i class="fa fa-trash-o fa-fw"></i>
                                        </button>
                                    </td>
                                </tr>
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
                                            <h3 class="panel-title">Add/Edit Credit !</h3>
                                        </div>
                                        <div class="panel-body">
                                            <fieldset>

                                                <div class="form-group">
                                                    <label>Select Roommate</label>
                                                    <select class="form-control">
                                                        <option>Sri Bhargav</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Amount</label>
                                                    <div class="form-group input-group">            
                                                        <span class="input-group-addon">Rs.</span>
                                                        <input type="text" class="form-control" placeholder="Credit Amount">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date</label>
                                                    <input type="text" name="kzyRoommateName" class="form-control" placeholder="Credit Given On"  />
                                                </div>
                                                <input type="submit" name="submit" value="Add Credit" class="btn btn-primary btn-custom" />
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