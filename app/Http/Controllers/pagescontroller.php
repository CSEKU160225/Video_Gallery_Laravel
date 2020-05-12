<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Suggestion;
use App\channel;
use App\socialmedia;
use App\addvideos;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class pagescontroller extends Controller
{
    //
    public function index($value='')
    {
    	# code...
      $channel= channel::orderby('id','desc')->get();
      $soc=socialmedia::orderby('id','desc')->get();
      $addvideos=addvideos::orderby('id','desc')->limit(1)->get();
       $addall = addvideos::select('category')->distinct()->get();
      return view('main')->with('chan',$channel)->with('soc',$soc)->with('add',$addvideos)->with('addall',$addall);

    	
    }
    public function yoursuggetion($value='')
    {
    	# code...
            $channel= channel::orderby('id','desc')->get();
            $soc=socialmedia::orderby('id','desc')->get();
      return view('suggetionpage')->with('chan',$channel)->with('soc',$soc);
    	
    }
  public function store(Request $request)
  {
      # code...
    $request->validate([
    'email'=>'required',
    'content'=>'required',
    'embaded'=>'required',
]);
        $suggestion=new Suggestion;
        $suggestion->email=$request->email;
        $suggestion->content=$request->content;
        $suggestion->embadedcode=$request->embaded;
        $suggestion->comments=$request->comment;
          $suggestion->save();
          return redirect()->route('yoursuggetion');
  }
  public function mostviews()
  {
    # code...
    $channel= channel::orderby('id','desc')->get();
    $soc=socialmedia::orderby('id','desc')->get();
    $video=DB::table('addvideos')->where('status', '1')->limit(10)->get();
    return view('mostviews')->with('soc',$soc)->with('chan',$channel)->with('video',$video);
  }

  public function usersearch(Request $request)
  {
    # code...
        $search=$request->searchdata;
        $video=addvideos::orWhere('category','like',$search)->orderBy('id','desc');
       
            # code...
            return view('usersreachpage')->with('s',$video);
  }
  public function allcategoryproduct($category)
  {
    # code...
     $video=DB::table('addvideos')->where('category', $category)->distinct()->get();
     $chan=addvideos::find($category);
     return view('allproduct')->with('videos',$video)->with('chan',$chan);
  }
    
}
