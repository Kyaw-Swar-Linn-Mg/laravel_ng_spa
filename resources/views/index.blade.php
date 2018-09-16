<!doctype html> <html lang="en"> 

<head> <meta charset="UTF-8"> 

<title>Laravel and Angular Comment System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"> <!-- load fontawesome -->
    <style> 
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .comment    { padding-bottom:20px; }
    </style>

    <!-- JS -->

    <script src="{{asset('js/jquery.min.js')}}"></script>

    <script src="https://code.angularjs.org/1.5.8/angular.min.js"></script> <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->

        <script src="js/controllers/mainCtrl.js"></script> 

        <script src="js/services/commentService.js"></script> 

        <script src="appJs/app.js"></script> 

</head> 

<!-- declare our angular app and controller --> 
<body class="container" ng-app="commentApp" ng-controller="mainController"> <div class="col-md-8 col-md-offset-2">

    
    <div class="page-header">
        <h2>Laravel and Angular Single Page Application</h2>
    </div>

    <!-- NEW COMMENT FORM -->
    <form ng-submit="submitComment()"> 

        
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="author" ng-model="commentData.author" placeholder="Name">
        </div>

        
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text" placeholder="Say what you have to say">
        </div>

        
        <div class="form-group text-right">   
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>

    
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

    
    <div class="comment" ng-hide="loading" ng-repeat="comment in comments">

        <h3>Comment # @{{ comment.id }} <small>by @{{comment.author}}  </h3>

        <p> @{{comment.text}} </p>

        <p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted text-danger">Delete</a></p>

    </div>

</div> 

</body> 

</html>