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
      <a class="navbar-brand" href="{{route('dashboard')}}">Welcome Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('dashboard')}}">Dashboard</a></li>
      <li><a href="{{route('customerresquest')}}">Customer Request </a></li>
      <li><a href="{{route('add')}}">Add Videos</a></li>
      <li><a href="{{route('addcategory')}}">Add Category</a></li>
      <li><a href="{{route('addchannel')}}">Add Channel</a></li>
      <li><a href="{{route('addsocialmedias')}}">Add Social MediaLinks</a></li>
       <li><a href="{{route('all')}}">Category and Channel List</a></li>
      

    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
    </form>

  </div>
</nav>


<form action="{{route('addvideosstore')}}" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="exampleFormControlInput1">Video Embaded code</label>
    <input type="text" class="form-control" name="emabaded">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Select Category</label>
    
    <select class="form-control" id="exampleFormControlSelect1" name="selectcat">
      @foreach($video as $v)
      <option value="{{$v->category_name}}">{{$v->category_name}}</option>
     @endforeach
      
    </select>
    
  </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Select viewers</label>
    <select class="form-control" id="exampleFormControlSelect1" name="selectview">
      <option value="0">None</option>
      <option value="1">Most views</option>

      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comments</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" cols="4" name="comments"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



  	<footer class="footer-bottom">
		<p class="text-center">&copy; Mehadi Hasan all right reserve</p>
	</footer>


</body>
</html>