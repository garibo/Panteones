(function(){

	angular.module('archivoApp', [])
.controller('tablaCtrl', function($scope, $http) 
{
	$scope.curPage = 0;
 	$scope.pageSize = 5;
 	$scope.terrenos = [];
	
	$http.get("http://localhost/panteones/terreno/getData")
	.then(function (response) {
		$scope.terrenos = response.data;
	});
 	$scope.numberOfPages = function() {
		return Math.ceil($scope.terrenos.length / $scope.pageSize);
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