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
    <form class="navbar-form navbar-left" action="/action_page.php">
    </form>
        <ul class="nav navbar-nav navbar-right">
    
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="container" style="margin-left: 0;">
   <div class="row">
    <div class="col-sm-3" style="background-color:gray;">
 <p>Top Category</p>
 <p> <a href="" style="color: red"><b> Game(2)</b></a></p>
 <p> <a href="" style="color: red"><b> Movies(5)</b></a></p>
 <p> <a href="" style="color: red"><b> Music(2)</b></a></p>
 <p> <a href="" style="color: red"><b> Sports(2)</b></a></p>
 <p> <a href="" style="color: red"><b> Tecnology(2)</b></a></p>
 <br>
  <p>Top Channels</p>
   @foreach($chan as $c)
 <p> <a href="{{$c->link}}" style="color: red"><b> {{$c->channel_name}}</b></a></p>

@endforeach


             @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    </div>
    <div class="col-sm-6" >
    <h3>Give me your Message Suggest for a video</h3>
    <form action="{{route('suggestionstore')}}" method="post">
      {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Your Content</label>
    <input type="text" class="form-control" name="content" id="exampleInputPassword1" >
  </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Your Suggest youtube Embaded Code</label>
    <input type="text" class="form-control" name="embaded" id="exampleInputPassword1" >
  </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



    </div>

    <div class="col-sm-3" >
   <h3>My Intoduction</h3>
<iframe width="300" height="250" src="https://www.youtube.com/embed/tgbNymZ7vqY?controls=0">
</iframe>

<div class="social-menu" style="background-color:gray;">

  @foreach($soc as $s)
  <ul>
    <li><a href="{{$s->fb}}"><i class="fa fa-facebook"></i></a></li>
    <li><a href="{{$s->tw}}"><i class="fa fa-twitter"></i></a></li>
    <li><a href="{{$s->in}}"><i class="fa fa-instagram"></i></a></li>
    <li><a href="{{$s->yo}}"><i class="fa fa-youtube"></i></a></li>
    <li><a href="{{$s->ln}}"><i class="fa fa-linkedin"></i></a></li>
  </ul>
  @endforeach
</div>
    </div>
  </div>

</div>



  	<footer class="footer-bottom">
		<p class="text-center">&copy; Mehadi Hasan all right reserve</p>
	</footer>


</body>
</html>