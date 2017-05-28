app.controller('trackCtrl', function($scope) {
    $scope.tracks = Drupal.settings.rocola_core.tracks;
});