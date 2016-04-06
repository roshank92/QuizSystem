/**
 * Created by karwalkar on 3/20/2016.
 */
var QuizSystem=angular.module("QuizSystem",[]);
    QuizSystem.controller("MainController",['$scope',function($scope){
    $scope.a=90;
    alert($scope.a);
}]);