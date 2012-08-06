angular.module('ShareMyFolder', []).
  config(['$routeProvider', function($routeProvider) {
  $routeProvider.
      when('/list', {templateUrl: 'partials/list.html', controller: ListGlobal}).
      when('/:FolderName', {templateUrl: 'partials/list.html', controller: ListFolder}).
      otherwise({redirectTo: '/list'});
}]);