<!DOCTYPE HTML>
<html lang="en-US" ng-app="ShareMyFolder">
<head>
  <meta charset="UTF-8">
  <title>ShareMyFolder</title>
  <link rel="icon" type="image/png" href="img/icons/box-opened-blue.png">

  <!-- Style/CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/index.css" media="all">

  <!-- Script/JS -->
  <script type="text/javascript" src="js/lib/angular.js"></script>
  <script type="text/javascript" src="js/routers.js"></script>
  <script type="text/javascript" src="js/controllers.js"></script>  
</head>
<body>

  <div ng-view></div>
  <!-- Script/JS -->
  <script type="text/javascript" src="js/lib/jquery.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){

    $('.folder').live({
      click: function(){
        console.log('click on folder link')
      },
      mouseover: function(){
        $(this).find('img').attr('src', 'img/icons/folder-opened-blue.png')
      },
      mouseout: function(){
        $(this).find('img').attr('src', 'img/icons/folder.png')
      }
    })    
  })

   

  </script>
</body>
</html>