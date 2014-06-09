angular.module('projectsApp', [], function($interpolateProvider) {
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});

function contactDropDownController ($scope, $http) {

	console.log($scope);

	$scope.change = function(value)
	{

		$http.get('/contacts/client/' + value).success(function(contacts)
		{
	
			$scope.contacts = contacts;
	
		});
		
	};

	

};
