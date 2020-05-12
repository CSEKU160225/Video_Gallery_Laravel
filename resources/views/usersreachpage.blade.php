<!DOCTYPE html>
<html lang="en">
<head>
  <title>Video Gallary</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('js/bootstrap.min.css')}}">
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
 <!--  <script src="{{asset('js/font-awesome.min.css')}}"></script> -->

 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  
</head>
<body>

<nav class="navbar navbar-inverse" style="margin-bottom: 0">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Video Gallary</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('main')}}">Home</a></li>
      <li><a href="{{route('yoursuggetion')}}">Your Suggetion</a></li>
      <li><a href="{{route('mostviews')}}">Most Views</a></li>
    </ul>
        <ul class="nav navbar-nav navbar-right">
      
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<center><h3>Search Results</h3></center>
   <h4 class="card-title">{{$s->category}}</h4>



</body>
</html>