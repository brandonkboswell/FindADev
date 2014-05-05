<div ng-controller="userSearchCtrl" class="userSearch">
  <div class="container">
    {{--Search--}}
    <form>
      <input autocomplete="off" ng-model="searchQuery" ng-change="performSearch(searchQuery)" id="search" name="query" type="search" class="form-control" value="{{Input::get('query')}}" placeholder="Search">
    </form>

    {{--Results--}}
    <div class="userWell">
      <ul ng-show="users" class="list-group">
        <li ng-repeat="user in users" class="list-group-item">
          <img ng-src="@{{user.data.profile_image_url}}">
          <a target="_blank" href="@{{user.data.url}}">
            <h3>@{{user.data.name}}</h3>
          </a>
          <p class="description">@{{user.data.description}}</p>
          <p class="location bold">@{{user.location}}</p>
        </li>
      </ul>
      {{--No Results ;(--}}
      <h3 ng-hide="users" class="center">Sorry no users were found in that area.</h3>
    </div>
  </div>
  <script>
    myApp.controllers.userSearchCtrl = ['$scope', '$http', function($scope, $http) {
      $scope.searchQuery = "";
      $scope.users = {{json_encode($users->toArray())}};

      $scope.performSearch = function(query) {
        console.log('Search It!', query);

        $scope.searchServerForQuery(query).then(function(response, status) {
          console.log('response', response.data);
          $scope.users = response.data;
        }, function(response, status) {
          alert('Durn, it failed');
        });
      }

      $scope.searchServerForQuery = function(query) {
        return $http.get('/api/v1/users/search', {
          params: {
            'query': query
          }
        });
      }
    }];
  </script>
</div>