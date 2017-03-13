

<!-- start Modal for Edit  User-->
<!-- Modal -->
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit This</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3">User Name</label>
                        <div class="col-sm-9">
                            <input ng-model = "clickedUser.emp_name" type="text" class="form-control"  placeholder="Enter Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Email</label>
                        <div class="col-sm-9">
                            <input  ng-model = "clickedUser.emp_email_address"  type="text" class="form-control"  placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Full Name</label>
                        <div class="col-sm-9">
                            <input  ng-model = "clickedUser.emp_full_name"  type="text" class="form-control"  placeholder="Enter Full Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-default"  data-dismiss="modal" ng-click = "updateEmployee()">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!-- End Modal for Edit  User-->