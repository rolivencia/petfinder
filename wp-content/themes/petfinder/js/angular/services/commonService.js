angular.module('petfinder')
    .service('commonService', function($http) {

        this.allDogs = null;

        this.filterItemsBySearchText = function(items, searchText) {
            if (searchText) {
                var ft = searchText.toLowerCase();
                items = items.filter(function(item) {
                    return JSON.stringify(item).toLowerCase().indexOf(ft) != -1;
                });
            }
            return items;
        }

        this.submitNew = function(varName, breed, varLocation, date, gender, varDescription) {
            return $http({
                method: 'POST',
                url: "submit.php",
                data: $.param({
                    'action': 'submitnew',
                    'name': varName,
                    'breed': breed,
                    'location': varLocation,
                    'date': date,
                    'gender': gender,
                    'description': varDescription,
                    'status': 'Lost'
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        }

        this.retrieve = function() {
            return $http({
                method: 'POST',
                url: "retrieve.php",
                data: $.param({'action': 'retrieve'}),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        }

        this.update = function(id, status) {
            return $http({
                method: 'POST',
                url: "update.php",
                data: $.param({
                    'action': 'update',
                    'id': id,
                    'status': status
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            });
        }

    });