<!DOCTYPE html>
<html>
    <head>
        <!--Angulare -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.js"></script>
        <!--Applicazione -->
        <script src="js/app.js"></script>
        <script src="js/controllers/PoolController.js"></script>
        <script src="js/services/projectsService.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    </head>
    <body ng-app="poolApp">

    <div class="container-fluid">

        <ng-view></ng-view>
    </div>
        
    </body>
</html>