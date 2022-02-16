var app = angular.module('weatherUpdates', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.controller('weatherController', function($scope, $http) {
	$scope.city = null;
	$scope.cityWeather = {};
	$scope.submitting = false;

	$scope.getWeatherReport = function() {
		// create object
		var data = {
			city:$scope.city
		};

		// call http post service
		 $http({
            method: "POST",
            url: "/weather",
            data: JSON.stringify(data),
            transformResponse: [
		        function (data) { 
		            return data; 
		        }
		    ]
        }).then(function(response) {
            $scope.cityWeather = JSON.parse(response.data);
            $scope.submitting = true;
            console.log($scope.cityWeather);
        }).catch(function (err) {
        	console.log(err);
        });
	};
});