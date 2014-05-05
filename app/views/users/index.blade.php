<html>
  <head>
    <title>Find A Dev</title>
    {{--Pull In Bootstrap--}}
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/screen.css">
  </head>
  <body>
    {{--Navbar--}}
    <nav class="navbar navbar-default center navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <h1>Find a <em>(Laravel)</em> Dev</h1>
      </div>
    </nav>

    <div class="appContainer">
      <div class="userSearch">
        <div class="container">
          {{--Search--}}
          <form action="/" method="GET">
            <input id="search" name="query" type="search" class="form-control" value="{{Input::get('query')}}" placeholder="Search">
          </form>

          {{--Results--}}
          <div class="userWell">
            @if(!$users->isEmpty())
                <ul class="list-group">
                  @foreach($users as $user)
                    <li class="list-group-item">
                      <img src="{{$user->data->profile_image_url}}">
                      <a target="_blank" href="{{$user->data->url}}">
                        <h3>{{$user->data->name}}</h3>
                      </a>
                      <p class="description">{{$user->data->description}}</p>
                      <p class="location bold">{{$user->location}}</p>
                    </li>
                  @endforeach
                </ul>
            @else
              {{--No Results ;(--}}
              <h3 class="center">Sorry no users were found in that area.</h3>
            @endif
          </div>
        </div>
      </div>
    </div>

    {{--Focus The Search Field On Load--}}
    <script>
      window.onload = function() {
        document.getElementById("search").focus();
      };
    </script>
  </body>
</html>

