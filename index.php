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

  <script type="text/javascript" src="js/lib/jquery.js"></script>
</head>
<body>
<a href=""><img src="" alt=""></a>
  <div class="view" ng-view></div>

  <script type="text/javascript">
  jQuery(document).ready(function(){

    $('.file').live({
      mouseenter: function(){
        $('.dl').detach()

        var fileName = $(this).find('a:first').text()
        var filePath = $(this).find('a:first').attr('class')
        $(this).append('<a class="dl pull-right" href="http://localhost/'+filePath+'/'+fileName+'"><img src="img/icons/ok-green.png" alt="Download" title="Download"></a>')
      },
      mouseover: function(){
        $(this).find('img:first').attr('src', 'img/icons/file-text.png')
      },
      mouseout: function(){
        $(this).find('img:first').attr('src', 'img/icons/file.png')
      }
    })


    $('.folder').live({
      click: function(){
        //nom du dossier à explorer
        var folder = $(this).text()

        //nom du dossier courant
        var current = document.location.hash.split('/')
        current = current.slice(1,current.length)
        current= current.join('/')

        if(current != "list"){
          var url = '#/'+current+'/'+folder
        }
        else{
          var url = '#/'+folder
        }

        url = url.replace(' ','')
        document.location.hash = url
      },
      mouseover: function(){
        $(this).find('img:first').attr('src', 'img/icons/folder-opened-blue.png')
      },
      mouseout: function(){
        $(this).find('img:first').attr('src', 'img/icons/folder.png')
      }
    })    
  })   

  </script> 
</body>
</html>