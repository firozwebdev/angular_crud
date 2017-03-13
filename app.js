var app = angular.module('myApp',[]);
app.controller('firstController',function($scope,$http){

    $scope.insertData = function(){
        $http.post('welcome.php',{'name':$scope.name})
            .success(function(response){
               $scope.msg = response;
                $scope.displayStudent();
            })
    };

    $scope.displayStudent = function(){
        $http.get('select.php')
            .success(function(data){
              $scope.students = data;
            })
    };
    $scope.displayStudent();
    $scope.deleteStudent = function(student_id){
        $http.post('delete_modal.php',{'id':student_id})
            .success(function () {
                $scope.msg='Data deleted';
                $scope.displayStudent();
            })
    };
});