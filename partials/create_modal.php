<!-- Start Modal for Add New User-->
<!-- Modal -->
<div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="alert alert-info" style="margin-top:50px;" ng-if="error_msg">
              {{ error_msg }}
          </div>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">New User Registration</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-3">User Name</label>
                        <div class="col-sm-9">
                            <input type="text"  ng-model="emp_name" class="form-control" id="username" placeholder="Enter Username">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Email</label>
                        <div class="col-sm-9">
                            <input type="text"  ng-model="emp_email_address"  class="form-control" id="email" placeholder="Enter email">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text"  ng-model="emp_full_name"   class="form-control" id="full_name" placeholder="Enter Full Name">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-default"   data-dismiss="modal"  ng-click="saveUser()">Save</button>
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

<!-- End Modal for Add New User-->
