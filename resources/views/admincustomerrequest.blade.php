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
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

  </div>
</nav>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Content</th>
      <th scope="col">Video</th>
      <th scope="col">Imbaded code</th>
      <th scope="col">Comments</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @php 
      $i=1;
      @endphp
       
     @foreach($sugest as $s)
       
      <th scope="row">@php echo $i++ @endphp </th>
      <td>{{$s->email}}</td>
      <td>{{$s->content}}</td>
      <!-- <td><iframe width="200" height="100" src="{{$s->embadedcode}}"></iframe></td> -->
      <div class="frame">
      <td>{!!($s->embadedcode)!!}</td>
      </div>
      <td>{{($s->embadedcode)}}</td>
       <td>{{$s->comments}}</td>
      <td> <a href="{{route('delreqst',$s->id)}}" class="btn btn-danger" onclick="alert('Sure to delete')">Delete</a></td>
    </tr>
   
    @endforeach
 
  </tbody>
</table>



  	<footer class="footer-bottom">
		<p class="text-center">&copy; Mehadi Hasan all right reserve</p>
	</footer>


</body>
</html>