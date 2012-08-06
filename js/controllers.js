// Some functions for the Index Page

function ListGlobal($scope, $http){
  $scope.folder = "Global"

  $http.get('data/file.json').success(function(data){
    $scope.files = data
  })
}

function ListFolder($scope, $routeParams){
  $scope.folder = $routeParams.FolderName

}