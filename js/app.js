var myApp = angular.module('myApp',['datatables']);
myApp.controller("myController",function($scope,$http,DTOptionsBuilder){

    $scope.clickedUser ={};
    // Reset new data model
        $scope.clearData = function () {
            $scope.emp_name = '';
            $scope.emp_email_address = '';
            $scope.emp_full_name = '';
        };

    $scope.saveUser = function(){


          $http.post('insert.php',{'emp_name': $scope.emp_name,'emp_email_address':$scope.emp_email_address,'emp_full_name':$scope.emp_full_name})
              .success(function(response){
                  $scope.msg = response;
                  $scope.displayEmployee();
                  $scope.clearData();
              })




    };
    /*$scope.selectEmployee = function (employee) {
        $scope.emp_id = employee.emp_id;
        $scope.emp_name = employee.emp_name;
        $scope.emp_email_address = employee.emp_email_address;
        $scope.emp_full_name = employee.emp_full_name;

    };*/




    $scope.selectEmployee = function (employee) {
        $scope.clickedUser = employee;
    };

    // DataTables configurable options
    $scope.dtOptions = DTOptionsBuilder.newOptions()
        .withDisplayLength(10)
        .withOption('bLengthChange', false);

    //console.log( $scope.emp_id);


   /* $scope.updateEmployee = function () {

        $http.post('update.php',{'emp_id':$scope.emp_id,'emp_name':$scope.emp_name,'emp_email_address':$scope.emp_email_address,'emp_full_name':$scope.emp_full_name})
            .success(function(data){
                //console.log(data);
                $scope.msg = data;
                $scope.displayEmployee();
            })
    }*/


    $scope.updateEmployee = function () {

        $http.post('update.php',{'emp_id':$scope.clickedUser.emp_id,'emp_name':$scope.clickedUser.emp_name,'emp_email_address':$scope.clickedUser.emp_email_address,'emp_full_name':$scope.clickedUser.emp_full_name})
            .success(function(data){
                //console.log(data);
                $scope.msg = data;
                $scope.clickedUser={};
                $scope.displayEmployee();
            })
    }


    $scope.deleteEmployee = function () {

        $http.post('delete.php',{'emp_id':$scope.clickedUser.emp_id})
            .success(function(data){
                //console.log(data);
                $scope.msg = data;
                $scope.displayEmployee();
            })
    }

    $scope.displayEmployee = function(){

        $http.get('select.php')
            .success(function(data){
                $scope.employees = data;
            })
    };
    $scope.displayEmployee();



















  /*  $scope.newUser = {};
    $scope.clickedUser = {};
    $scope.msg='';
    $scope.users=[
        { name: "sabuz", fullname: "Firoz Rahmana", email:"smskushtia@gmail.com"},
        { name: "Fatema", fullname: "Fatema Akther", email:"fathema@gmail.com"},
        { name: "Ramim", fullname: "Rahim Uddin", email:"rahim@gmail.com"}
    ];
    $scope.saveUser = function(){
        $scope.users.push($scope.newUser);
        $scope.newUser = {};
        $scope.msg = 'New User is added successfully!!!';
    }

    $scope.selectUser = function(user){
        $scope.clickedUser = user;
        //console.log("hI I am here");
    }
    $scope.updateUser = function(){
        $scope.msg = 'User is updated !!!';
        //console.log("updated");
    }

    $scope.deleteUser = function(){
        $scope.users.splice($scope.users.indexOf($scope.clickedUser),1);
        //console.log("hI I am here");
        $scope.msg = 'Data is Deleted !!!';
    }
    */
});
