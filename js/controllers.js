// Some functions for the Index Page

function ListGlobal($scope, $http){
  $scope.folder = "Global"
  $scope.close = "img/icons/ko-grey.png"
  
  //Get files & folders
  $http.get('data/file.php').success(function(data){
    $scope.files = data
  })
}

function ListFolder($scope, $routeParams, $http){
  $scope.folder = $routeParams.FolderName
  $scope.close = "img/icons/ko-red.png"
  
  //Get files & folders
  $http.get('data/file.php?folder='+$routeParams.FolderName).success(function(data){
    $scope.files = data
  })
}