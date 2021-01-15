<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class news_controller extends Controller
{
     function news()
    {
    	$data=DB::table('news')->get();
    	return view('news_list',compact('data'));
    }

    function news_user()
    {

        $data=DB::table('news')->get();
        return view('news_user',compact('data'));
        
    }

    function create_news()
    {
    	return view('create_news');
    }

    function news_record(Request $request)
    {
    	$data=array(
    	'title'=>$request->title,
    	'author'=>$request->author,
    	'image'=>$request->image,
    	'description'=>$request->description	
    	);

    	DB::table('news')->insert($data);
    	$request->session()->flash('msg','News has been added');
    	return redirect('news');
    }

    function delete_news(Request $request,$id)
    {
    	$result=DB::table('news')->where('id',$id)->delete();
    	$request->session()->flash('msg','News deleted successfully');
    	return redirect('news');
    }

    function edit_news(Request $request, $id)
    {
    	$results=DB::table('news')->where('id',$id)->get();
    	return view('edit_news',compact('results'));

    }

    function update_news(Request $request, $id)
    {
    	$new_data=array(
    	'title'=>$request->title,
    	'author'=>$request->author,
    	'image'=>$request->image,
    	'description'=>$request->description
    	);

    	DB::table('news')->where('id',$id)->update($new_data);
    	$request->session()->flash('msg','News has been edited');
    	return redirect('news');

    }


}
