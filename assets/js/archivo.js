(function(){

	angular.module('archivoApp', [])

	.controller('tablaCtrl', function($scope, $http) 
	{
		$scope.curPage = 0;
	 	$scope.pageSize = 5;
	 	$scope.difuntos = [];
		
		$http.get("http://localhost/panteones/archivo/getrows")
		.then(function (response) {
			$scope.difuntos = response.data;
		});

	 	$scope.numberOfPages = function() {
			return Math.ceil($scope.difuntos.length / $scope.pageSize);
		};


	})


	.filter('pagination', function()
	{
	 return function(input, start)
	 {
	  start = +start;
	  return input.slice(start);
	 };
	});

})();