<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body ng-controller="myController">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <hr>
            <!--Add user modal is calling with this button-->
            <button type="button" class="btn btn-primary btn-lg pull-right"  data-toggle="modal" data-target="#addModal">Add New</button>
            <h2>All Employees</h2>
            <div class="alert alert-info" style="margin-top:50px;" ng-if="msg">
                {{ msg }}
            </div>
            <span class="clearfix"></span>
            <hr>
            <table class="table table-bordered table-hover" datatable="ng" dt-options="dtOptions">
                <thead>
                <tr>
                    <th>Index</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                <tr ng-repeat="employee in employees">
                    <td>{{ $index+1 }}</td>
                    <td>{{ employee.emp_name }}</td>
                    <td>{{  employee.emp_email_address }}</td>
                    <td><button type="button" class="btn btn-success"   data-toggle="modal" data-target="#editModal" ng-click = "selectEmployee(employee)">Edit</button>  <button type="button" class="btn btn-danger"   data-toggle="modal" data-target="#deleteModal" ng-click = "selectEmployee(employee)">Delete</button></td>
                </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php include 'partials/create_modal.php'; ?>
<?php include 'partials/edit_modal.php'; ?>
<?php include 'partials/delete_modal.php'; ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/angular.min.js"></script>
<script src="js/angular-datatables.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>



</body>
</html>