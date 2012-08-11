// Some functions for the Index Page

function ListGlobal($scope, $http){
  $scope.folder = "Global"
  $scope.close = "img/icons/ko-grey.png"
  $scope.home = "img/icons/box-opened-grey.png"
  
  //Get files & folders
  $http.get('data/file.php').success(function(data){
    $scope.files = data
  })
}

function ListFolder($scope, $routeParams, $http){
  var param = document.location.hash.split('/')
  var closePath = param.slice(1,param.length-1)
  param = param.slice(1,param.length)
  param = param.join('/')

  closePath = "#/"+closePath.join('/')

  $scope.folder = param
  $scope.close = "img/icons/ko-red.png"
  $scope.closePath = closePath
  $scope.home = "img/icons/box-opened-blue.png"
  
  //Get files & folders
  $http.get('data/file.php?folder='+$scope.folder).success(function(data){
    $scope.files = data
  })
}