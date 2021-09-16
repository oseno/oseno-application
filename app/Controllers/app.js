// One controller that redirects to PHP Code
var myApp = angular.module("myApp", []);
myApp.controller('myController',['$scope','$http',
function Formcontroller($scope,$http)
{

     $scope.user = {};
$scope.submitForm=function()
{
       $http({
        method:'post',
        url:'http://localhost:/codeigniter4login-master/public/index.php/users',
        data : $scope.user, //forms user object
        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
    }).success(function (data)
    {
            $scope.message=data;
    });
    
};


}]);

