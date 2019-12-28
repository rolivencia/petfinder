angular.module('controllers').
    controller('homeController', function ($scope, $http, $filter, commonService) {

        $scope.pagingOptions = {
            pageSizes: [10, 20, 50],
            pageSize: 20,
            currentPage: 1
        };

        $scope.search = function () {
            $scope.pagingOptions.currentPage = 1;
            $scope.getPagedDataAsync($scope.pagingOptions.pageSize, $scope.pagingOptions.currentPage, $scope.searchText);
        }

        $scope.$watch('pagingOptions', function (newVal, oldVal) {
            if (newVal !== oldVal && newVal.currentPage !== oldVal.currentPage) {
                $scope.getPagedDataAsync($scope.pagingOptions.pageSize, $scope.pagingOptions.currentPage, $scope.searchText);
            }
        }, true);
        
        $scope.setPagingData = function(data, page, pageSize) {
            var pagedData = data.slice((page - 1) * pageSize, page * pageSize);
            $scope.dogsList = pagedData;
            $scope.totalServerItems = data.length;
            if (!$scope.$$phase) {
                $scope.$apply();
            }
        };

        $scope.getPagedDataAsync = function (pageSize, page, searchText) {
            var dogs = commonService.allDogs;

            if (dogs != null) {
                dogs = commonService.filterItemsBySearchText(dogs, searchText); //Search filter
                $scope.setPagingData(dogs,page,pageSize);
            }
            else {
                commonService.retrieve()
                    .success(function(data, status, headers, config){
                        commonService.allDogs = data;
                        dogs = commonService.filterItemsBySearchText(data, searchText);
                        $scope.setPagingData(dogs,page,pageSize);
                    })
            }
        }

        $scope.markAsFound = function(){
            var dogID = $scope.gridOptions.selectedItems[0]['id'];
            var currentStatus = $scope.gridOptions.selectedItems[0]['status'];
            var dogStatus = 'Found';

            if(currentStatus!='Found'){
                commonService.update(dogID, dogStatus);
                alert('Selected dog status changed to Found.');
                location.reload(true); 
            }
            else{
                alert('Selected dog has a Found status already.');
            }
                
        }

        $scope.markAsLost = function(){
            var dogID = $scope.gridOptions.selectedItems[0]['id'];
            var currentStatus = $scope.gridOptions.selectedItems[0]['status'];
            var dogStatus = 'Lost';

            if(currentStatus!='Lost'){
                commonService.update(dogID, dogStatus);
                alert('Selected dog status changed to Lost.');
                location.reload(true);
            }
            else{
                alert('Selected dog has a Lost status already.');
            }
                
        }

        $scope.getPagedDataAsync($scope.pagingOptions.pageSize, $scope.pagingOptions.currentPage, $scope.searchText);

        $scope.gridOptions = {
            data: 'dogsList',
            enablePaging: true,
            showFooter: true,
            enableRowSelection: true,
            multiSelect: false,
            totalServerItems:'totalServerItems',
            pagingOptions: $scope.pagingOptions,
            filterOptions: $scope.filterOptions,
            columnDefs: [
                {field: 'id', visible:false, displayname: 'ID'},
                {field: 'name', displayName: 'Name'},
                {field: 'breed', displayName: 'Breed'},
                {field: 'location', displayName:'Location'},
                {field: 'date', displayName: 'Date', width:'90px'},
                {field: 'gender', displayName: 'Gender', width:'70px'},
                {field: 'description', displayName: 'Description'},
                {field: 'status', displayName: 'Status', width:'70px'}
            ],
            selectedItems:[]
        };
})