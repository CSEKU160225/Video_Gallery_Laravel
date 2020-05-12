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
    <form class="navbar-form navbar-left" action="#" method="get">

      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="searchdata">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
        <ul class="nav navbar-nav navbar-right">
      
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>

<div class="container" style="margin-left: 0;">
   <div class="row">
    <div class="col-sm-3" style="background-color:gray;">
           <br>

 <p>Top Category</p>
       @foreach($addall as $ad)
      <p> <a href="{{route('allcategoryproduct',$ad->category)}}" style="color: red"><b> {{$ad->category}}</b></a></p>
@endforeach
      <br>

  <p>Top Channels</p>
 <p> <img src="{{asset('img/Ekattor_TV_logo.png')}}" style="height:20px"> <a href="#" style="color: red"><b> Ekkatur Tv</b></a></p>
 <p> <img src="{{asset('img/24.png')}}" style="height:20px"> <a href="#" style="color: red"><b> Channel 24 Tv</b></a></p>
<p> <img src="{{asset('img/i.jpg')}}" style="height:20px"> <a href="#" style="color: red"><b> Channel 24 Tv</b></a></p>
<p> <img src="{{asset('img/i.jpg')}}" style="height:20px"> <a href="#" style="color: red"><b> Channel 24 Tv</b></a></p>
<p> <img src="{{asset('img/i.jpg')}}" style="height:20px"> <a href="#" style="color: red"><b> Channel 24 Tv</b></a></p>
<p> <img src="{{asset('img/i.jpg')}}" style="height:20px"> <a href="#" style="color: red"><b> Channel 24 Tv</b></a></p>
          <br>
     <br>
<div style="background-color: black">
 <center> <p style="color: white">Top Stars <small style="color: red">New</small></p></center>
 <p> <img src="{{asset('img/jacklin.jpg')}}" style="height:20px"> <a href="#" style="color: white"><b> Jacklin Farnandesh</b></a></p>
  <p> <img src="{{asset('img/jacklin.jpg')}}" style="height:20px"> <a href="#" style="color: white"><b> Jacklin Farnandesh</b></a></p>
   <p> <img src="{{asset('img/jacklin.jpg')}}" style="height:20px"> <a href="#" style="color: white"><b> Jacklin Farnandesh</b></a></p>
    <p> <img src="{{asset('img/jacklin.jpg')}}" style="height:20px"> <a href="#" style="color: white"><b> Jacklin Farnandesh</b></a></p>
     <p> <img src="{{asset('img/jacklin.jpg')}}" style="height:20px"> <a href="#" style="color: white"><b> Jacklin Farnandesh</b></a></p>
     <p> <img src="{{asset('img/jacklin.jpg')}}" style="height:20px"> <a href="#" style="color: white"><b> Jacklin Farnandesh</b></a></p>

</div>
     <br>
     <br>
     <br>


<div class="box3" >
            <h4 style="margin: 20px"><br>Popular Moives <small style="color: red">Bangla</small></h3>
           <img src="{{asset('img/angar.jpg')}}" style="height:90px; margin: 20px">
            <p style="margin: 20px">This is the post about Bangla Movies</p>
            <img src="{{asset('img/aynabaji.jpg')}}" style="height:90px;margin: 20px">
            <p style="margin: 20px">This is the post about Bangla Movies</p>
                        <img src="{{asset('img/dhakaattack.jpg')}}" style="height:90px;margin: 20px">
            <p style="margin: 20px">This is the post about Bangla Movies</p>
            <br>
  
                
     </div>
          <br>
     <br>
     <br>
          <h4>Most Popular Serials<small style="color: red">Bangla</small></h4>
      <p> <img src="{{asset('img/natok.jpg')}}" style="height:40px"> <a href="#" style="color: black"><b> Bodu Boron</b></a></p>
      <p> <img src="{{asset('img/satvai.jpg')}}" style="height:40px"> <a href="#" style="color: black"><b> Satvai Chompa</b></a></p>
      <p> <img src="{{asset('img/natok.jpg')}}" style="height:40px"> <a href="#" style="color: black"><b> Bodu Boron</b></a></p>
      <p> <img src="{{asset('img/natok.jpg')}}" style="height:40px"> <a href="#" style="color: black"><b> Bodu Boron</b></a></p>
      <p> <img src="{{asset('img/satvai.jpg')}}" style="height:40px"> <a href="#" style="color: black"><b> Satvai Chompa</b></a></p>
      <p> <img src="{{asset('img/satvai.jpg')}}" style="height:40px"> <a href="#" style="color: black"><b> Satvai Chompa</b></a></p>




    </div>
    <div class="col-sm-6" >
    	<b><h3>Latest Videos <small style="color: red">(New)</small></h3></b>
      @foreach($add as $a)
      <h3>{{$a->category}}</h3>
      {!!($a->video_embadedcode)!!}
      <p><b>Details :</b>{{$a->comments}}</p>
@endforeach

    <h4><b>Game Videos</b></h4>
    <div class="col-sm-4">
    <iframe width="250" height="150" src="https://www.youtube.com/embed/NgzXFo9VaHg">
</iframe>
<p><b>Bd Vs Ind</b></p>
<p>This game is between bangladesh</p>
    <iframe width="250" height="150" src="https://www.youtube.com/embed/GwFbt5w98Eg">
</iframe>
<p><b>Bd Vs Ind</b></p>
<p>This game is between bangladesh</p>
    <iframe width="250" height="150" src="https://www.youtube.com/embed/iDepBDiwUdE">
</iframe>
<p><b>Bd Vs Ind</b></p>
<p>This game is between bangladesh</p>
</div>
<div></div>
<div class="col-sm-4" style="margin-left: 80px; ">
    <iframe width="250" height="150" src="https://www.youtube.com/embed/GwFbt5w98Eg">
</iframe>
<p><b>Bd Vs Ind</b></p>
<p>This game is between bangladesh</p>
    <iframe width="250" height="150" src="https://www.youtube.com/embed/NgzXFo9VaHg">
</iframe>
<p><b>Bd Vs Ind</b></p>
<p>This game is between bangladesh</p>
    <iframe width="250" height="150" src="https://www.youtube.com/embed/iDepBDiwUdE">
</iframe>
<p><b>Bd Vs Ind</b></p>
<p>This game is between bangladesh</p>
</div>
<br>



    <div class="col-sm-4">
      <h4> <b> Movies Videos</b></h4>
      <br>
    <iframe width="250" height="150" src="https://www.youtube.com/embed/ZfCE1eJpChI">
</iframe>
<p><b>Bd Vs Ind</b></p>
<p>This game is between bangladesh</p>
    <iframe width="250" height="150" src="https://www.youtube.com/embed/GwFbt5w98Eg">
</iframe>
<p><b>Bd Vs Ind</b></p>
<p>This game is between bangladesh</p>
    <iframe width="250" height="150" src="https://www.youtube.com/embed/iDepBDiwUdE">
</iframe>
<p><b>Bd Vs Ind</b></p>
<p>This game is between bangladesh</p>
</div>
<div></div>
<div class="col-sm-4" style="margin-left: 80px; ">
  <br>
  <br>
  <br>
    <iframe width="250" height="150" src="https://www.youtube.com/embed/GwFbt5w98Eg">
</iframe>
<p><b>Bd Vs Ind</b></p>
<p>This game is between bangladesh</p>
    <iframe width="250" height="150" src="https://www.youtube.com/embed/ZfCE1eJpChI">
</iframe>
<p><b>Bd Vs Ind</b></p>
<p>This game is between bangladesh</p>
    <iframe width="250" height="150" src="https://www.youtube.com/embed/ZfCE1eJpChI">
</iframe>
<p><b>Bd Vs Ind</b></p>
<p>This game is between bangladesh</p>
</div>

    </div>

    <div class="col-sm-3" style="">
      <h4>Contact Us</h4>
<div class="social-menu">

  @foreach($soc as $s)
  <ul>
    <li><a href="{{$s->fb}}"><i class="fa fa-facebook"></i></a></li>
    <li><a href="{{$s->tw}}"><i class="fa fa-twitter"></i></a></li>
    <li><a href="{{$s->in}}"><i class="fa fa-instagram"></i></a></li>
    <li><a href="{{$s->yo}}"><i class="fa fa-youtube"></i></a></li>
    <li><a href="{{$s->ln}}"><i class="fa fa-linkedin"></i></a></li>
  </ul>
  @endforeach
  <br>
  <br>
  <br>
</div>
<div>
<h4>Latest videos</h4>
<iframe width="200" height="100" src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe><p><b>The video Is about..</b></p>
<iframe width="200" height="100" src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe><p><b>The video Is about..</b></p>
<iframe width="200" height="100" src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe><p><b>The video Is about..</b></p>




</div>
<div>
<h4>Top videos</h4>
<iframe width="250" height="150" src="https://www.youtube.com/embed/iDepBDiwUdE">
</iframe><p><b>The video Is about..</b></p>
<iframe width="250" height="150" src="https://www.youtube.com/embed/iDepBDiwUdE">
</iframe><p><b>The video Is about..</b></p>
<iframe width="250" height="150" src="https://www.youtube.com/embed/iDepBDiwUdE">
</iframe><p><b>The video Is about..</b></p>


  <br>
  <br>

</div>
          <div class="box2" >
            <h4 style="margin: 20px">Popular post</h3>
           <img src="{{asset('img/jacklin.jpg')}}" style="height:80px;margin: 20px">
            <p style="margin: 20px">This is the post about Jackline Faranadesh</p>
            <br>
            <br>
            

       

     </div>
               <div class="box2" >
            <h4 style="margin: 20px">Popular Moives <small>English</small></h3>
           <img src="{{asset('img/maxresdefault.jpg')}}" style="height:80px;margin: 20px">
            <p style="margin: 20px">This is the post about Jackline Faranadesh</p>
            <img src="{{asset('img/images.jpg')}}" style="height:80px;margin: 20px">
            <p style="margin: 20px">This is the post about Jackline Faranadesh</p>
            <br>
  
                
     </div>

    </div>
  </div>

</div>



  	<footer class="footer-bottom" style="background-color: #1b1818">
		<p class="text-center">&copy; Mehadi Hasan all right reserve</p>
      <div class="row">
    <div class="col-sm-3" style="background-color:#1b1818;">
      <h4 style="color: white; text-decoration: underline;">About video gallery</h4>
      <p style="color: white">The software is responsive user friendly and can really enhance the reiting of your site when people search for related topics and videos whether on Youtube, Vimeo and Wistia or search engines in general. Getting your Youtube, Vimeo or Wistia extension working is straightforward with a few simple steps required to build this great video resources on your WordPress site. The benefits of the gallery plugin are already making a real difference for all kinds of sites from business oriented to hobby or entertainment pages.</p>
    </div>
    <div class="col-sm-7" style="background-color:#1b1818;">
    <div class="col-sm-4">
      <h4 style="color: white; text-decoration: underline;">Categories</h4>
      <ul style="">
        <p><a href="" style="color: gray">Game</a></p>
         <p><a href=""style="color: gray">Movies</a></p>
          <p><a href=""style="color: gray">Song</a></p>
           <p><a href=""style="color: gray">News</a></p>
            <p><a href=""style="color: gray">Game</a></p>

      </ul>
    </div>
    <div class="col-sm-4">
    <h4 style="color: white; text-decoration: underline;">Informations</h4>
      
        <p><a href="" style="color: gray">Your Suggestion</a></p>
         <p><a href=""style="color: gray">conatact us</a></p>
          <p><a href=""style="color: gray">Most viewed</a></p>
           <p><a href=""style="color: gray">All info</a></p>
            <p><a href=""style="color: gray">Submit</a></p>

    </div>

    </div>
    <div class="col-sm-2" style="background-color:#1b1818;">
        <p>Top Channels</p>
 <p> <img src="{{asset('img/Ekattor_TV_logo.png')}}" style="height:20px"> <a href="#" style="color: white"><b> Ekkatur Tv</b></a></p>
 <p> <img src="{{asset('img/24.png')}}" style="height:20px"> <a href="#" style="color: white"><b> Channel 24 Tv</b></a></p>
<p> <img src="{{asset('img/i.jpg')}}" style="height:20px"> <a href="#" style="color: white"><b> Channel 24 Tv</b></a></p>
<p> <img src="{{asset('img/i.jpg')}}" style="height:20px"> <a href="#" style="color: white"><b> Channel 24 Tv</b></a></p>
<p> <img src="{{asset('img/i.jpg')}}" style="height:20px"> <a href="#" style="color: white"><b> Channel 24 Tv</b></a></p>
<p> <img src="{{asset('img/i.jpg')}}" style="height:20px"> <a href="#" style="color: white"><b> Channel 24 Tv</b></a></p>
    </div>
  </div>
</div>
	</footer>


</body>
</html>