// public/js/services/commentService.js
angular.module('commentService', [])

	.factory('Comment', function($http) {
		return {
			// get all the comments
			get : function() {
				return $http.get('index.php/api/comments');
			},
			show : function(id) {
				return $http.get('index.php/api/comments/' + id);
			},

			// save a comment (pass in comment data)
			save : function(commentData) {
				return $http({
					method: 'POST',
					url: 'index.php/api/comments',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(commentData)
				});
			},

			// destroy a comment
			destroy : function(id) {
				return $http.delete('index.php/api/comments/' + id);
			}
		}
	});
