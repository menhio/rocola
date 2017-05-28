<h1>La Mona Rocks</h1>
<div ng-controller="trackCtrl">
  <div class="form-group">
    <label class="sr-only" for="buscarInput"><?php print t('Buscar:'); ?></label>
    <input class="form-control" ng-model="query" 
           type="text" id="buscarInput" placeholder="Buscar"/>
  </div>
  <div class="col-sm-6 col-md-6" ng-repeat="track in tracks | filter:query">
    <div class="thumbnail">
      <a ng-href="queue/{{track.user_id}}/{{track.playlist_id_queue}}/{{track.track_id}}">
        <img src="{{track.album_img}}" class="img-responsive center-block img-thumbnail" 
             alt="" height="242" width="200"></a>
      <div class="caption">
        <a ng-href="queue/{{track.user_id}}/{{track.playlist_id_queue}}/{{track.track_id}}">
          <h4 class="text-center">{{ track.track_name }}</h4>
          <p class="text-center">{{track.artist_name}}</p>
        </a>
      </div>
    </div>
  </div>
</div>