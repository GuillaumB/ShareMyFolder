angular.module('ShareMyFolder', []).
  config(['$routeProvider', function($routeProvider) {
  $routeProvider.
      when('/', {redirectTo: '/list'}).
      when('/list', {templateUrl: 'partials/list.html', controller: ListGlobal}).
      when('/:FolderName', {templateUrl: 'partials/list.html', controller: ListFolder}).
      otherwise({templateUrl: 'partials/list.html', controller: ListFolder});
}]);