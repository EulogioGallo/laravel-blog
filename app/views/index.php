<!-- app/views/index.php -->
<!doctype html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title>Cocky Blog</title>

  <!-- CSS -->
  <link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css'> <!-- load bootstrap via cdn -->
  <link rel='stylesheet' href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'> <!-- load fontawesome -->
  <style>
	body	{ padding-top:30px; }
	form	{ padding-bottom:20px; }
	.comment	{ padding-bottom:20px; }
  </style>

  <!-- JS -->
  <script src='//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script> <!-- load jquery -->
  <script src='//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js'></script> <!-- load angularjs -->

  <!-- ANGULAR -->
  <!-- all angular resources will be loaded from the /public folder -->
	<script src='js/controllers/mainCtrl.js'></script>
	<script src='js/services/commentService.js'></script>
	<script src='js/app.js'></script>
</head>
<!-- declare angular app and controller -->
<body class='container' ng-app='commentApp' ng-controller='mainController'>
<div class='col-md-8 col-md-offset-2'>
	<!-- PAGE TITLE ====================== -->
	<div class='page-header'>
		<h2>Cocky Blog</h2>
		<h4>An Attempt at Having Personal Projects</h4>
	</div>

	<!-- NEW COMMENT FORM =============== -->
	<form ng-submit="submitComment()"> <!-- ng-submit will disable the default form and use our function -->
		
		<!-- AUTHOR -->
		<div class="form-group">
			<input type="text" class="form-control input-sm" name="author" ng-model="commentData.title" placeholder="Title">
		</div>

		<!-- COMMENT TEXT -->
		<div class="form-group">
			<input type="text" class="form-control input-lg" name="comment" ng-model="commentData.text" placeholder="Post goes here">
		</div>

		<!-- SUBMIT BUTTON -->
		<div class="form-group text-right">
			<button type="submit" class="btn bn-primary btn-lg">Submit</button>
		</div>
	</form>

	<!-- LOADING ICON ================= -->
	<!-- show loading icon if the loading variable is set to true -->
	<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
	
	<!-- THE COMMENTS ==================== -->
	<!-- hide these comments if the loading variable is true -->
	<div class="comment" ng-hide="loading" ng-repeat="comment in comments">
		<h3>{{ comment.title }}</h3>
		<p>{{ comment.text }}</p>
		<p class="text-muted"><small> - Last updated at {{ comment.updated_at }}</small></p>
		<p><a href="#" ng-click="deleteComment(comment.id)" class="text-warning">Delete</a></p>
	</div>

</div>
</body>
</html>
