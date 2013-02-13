function CommentsCtrl($scope) {
  $scope.comments = [
    {text:'Amaaaaaaaaaazing'},
    {text:'What is this crap?!'}];
 
  $scope.addComment = function() {
    $scope.comments.push({text:$scope.commentText});
    $scope.commentText = '';
  };
}