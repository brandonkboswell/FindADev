<html>
  <head>
    <title>Find A Dev</title>
    {{--Pull In Bootstrap--}}
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/screen.css">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.15/angular.js"></script>
    <script src="/js/angularBooter.js"></script>
    <script>
      myApp = new AngularBooter('myApp');
    </script>
  </head>
  <body ng-app="myApp">
    {{--Navbar--}}
    <nav class="navbar navbar-default center navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <h1>Find a <em>(Laravel)</em> Dev</h1>
      </div>
    </nav>

    <div class="appContainer">
      {{View::make('partials/userSearch')->with('users', $users)}}
    </div>

    {{--Focus The Search Field On Load--}}
    <script>
      window.onload = function() {
        document.getElementById("search").focus();
      };

      myApp.boot();
    </script>
  </body>
</html>

