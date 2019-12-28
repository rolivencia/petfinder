angular.module('controllers').
    controller('submitController', function ($scope, $http, $filter, commonService) {

        $scope.submit = function(){
            commonService.submitNew($scope.varName, $scope.breed, $scope.varLocation,  $scope.date, $scope.gender, $scope.varDescription);
            alert('Lost dog added to database.');
            location.reload(true);
        }
})