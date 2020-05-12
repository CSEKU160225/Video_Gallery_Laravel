<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suggestion;
use App\channel;
use App\socialmedia;
use App\videotype;
use App\addvideos;


class adminpagescontroller extends Controller
{
    //
    public function adminlogin($value='')
    {
    	# code...
    	return view('adminlogin');
    }
    public function index($value='')
    {
    	# code...
       $addvideos= addvideos::orderby('id','desc')->get();
    	return view('admindashboardpage')->with('videos',$addvideos);
    }
    public function customer($value='')
    {
    	# code...
        $suggestion= Suggestion::orderby('id','desc')->get();
    	return view('admincustomerrequest')->with('sugest',$suggestion);
    }
    public function add($value='')
    {
        # code...
        $video = videotype::select('category_name')->distinct()->get();
        return view('addvideos')->with('video',$video);
    }
    public function addcategory($value='')
    {
        # code...

        return view('category');
    }
    public function addchannel($value='')
    {
        # code...
        return view('channel');
    }
    public function addmedia($value='')
    {
        # code...
        $so= socialmedia::orderby('id','desc')->get();
        return view('socialmedia')->with('social',$so);
        
        
    }
    public function channel(Request $request)
    {
        # code...
        $request->validate([
    'channel'=>'required',
    'link'=>'required',
    
]);
        $Channel=new channel;
        $Channel->channel_name=$request->channel;
        $Channel->link=$request->link;
        $Channel->comments=$request->comment;
          $Channel->save();
          return redirect()->route('addchannel');
    }
public function all($value='')
{
    # code...
    $channel=channel::orderby('id','desc')->get();
    $video=videotype::orderby('id','desc')->get();
    return view('alllist')->with('Chan',$channel)->with('video',$video);
}
public function deletcustomerreqst($id)
{
    # code...
            $suggestion= Suggestion::find($id);
        $suggestion->delete();
        return redirect()->route('customerresquest');
}

public function updatesocial(Request $request,$id)
{
    # code...
            $socialmedia=socialmedia::find($id);
        $socialmedia->fb=$request->get('fb');
        $socialmedia->tw=$request->get('tw');
        $socialmedia->in=$request->get('in');
        $socialmedia->yo=$request->get('yo');
        $socialmedia->ln=$request->get('ln');

          $socialmedia->save();
          return redirect()->route('addsocialmedias');
}
public function deletechannel($id)
{
    # code...
    $chan=channel::find($id);
    $chan->delete();
     return redirect()->route('all');

}
public function editchannel($id)
{
    # code...
    $chan=channel::find($id);
    return view('editchannel')->with('Chan',$chan);
}
public function editchannelstore(Request $request,$id)
{
    # code...
        $Channel=channel::find($id);
        $Channel->channel_name=$request->channel;
        $Channel->link=$request->link;
        $Channel->comments=$request->comment;
          $Channel->save();
          return redirect()->route('all');
}
public function categorystore(Request $request)
{
    # code...
            $request->validate([
    'category_name'=>'required',
    
    
]);
        $video=new videotype;
        $video->category_name=$request->category_name;
        $video->comments=$request->comments;
          $video->save();
          return redirect()->route('addcategory');
}
public function deletecategory($id)
{
    # code...
        $v=videotype::find($id);
    $v->delete();
     return redirect()->route('all');
}
public function editcategory($id)
{
    # code...
    $v=videotype::find($id);
    return view('editcategory')->with('cat',$v);
}
public function editcategorystore(Request $request,$id)
{
    # code...
                $request->validate([
    'category_name'=>'required',
    
    
]);
                $video=videotype::find($id);
        $video->category_name=$request->category;
        $video->comments=$request->comments;


          $video->save();
          return redirect()->route('all');
}
public function addvideostore(Request $request)
{
    # code...
                $request->validate([
    'emabaded'=>'required',
    
    
]);
        $add=new addvideos;
        $add->video_embadedcode=$request->emabaded;
        $add->category=$request->selectcat;
        $add->status=$request->selectview;
        $add->comments=$request->comments;
          $add->save();
          return redirect()->route('add');
}
public function deletevideos($id)
{
    # code...
    $v=addvideos::find($id);
    $v->delete();
    return redirect()->route('dashboard');
}
public function editvideos($id)
{
    # code...

    $v=addvideos::find($id);
    return view('editdashboard')->with('vid',$v);
}
public function dashboardstore(Request $request,$id)
{
    # code...
                            $request->validate([
    'category'=>'required',
    
    
]);

         $v=addvideos::find($id);
        $v->category=$request->category;
        $v->comments=$request->comments;
       
          $v->save();
          return redirect()->route('dashboard');
}
}
