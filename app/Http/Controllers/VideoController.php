<?php

namespace App\Http\Controllers;
use App\Models\Video;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use Image;

class VideoController extends Controller {
	public function user_auth() {
        // echo 22;die;
        if( !empty(Auth::user()) && (Auth::user()->usertype == 'admin') ) {

        } else {
            return redirect('login');
        }
    }
	
	public function video_list(Request $request) {
		$this->user_auth();
		$video_list = Video::orderBy('id','desc')->get();
		return view('admin.video.video_list',['video_list'=>$video_list]);
	}

	public function add_video(Request $request) {
		$this->user_auth();
		return view('admin.video.add_video');
	}

	public function create_video(Request $request) {
		$this->user_auth();
		
        $video = new Video();
	  	$video->url = $request->url;
	  	$video->save();

	  	return redirect('video_list')->with('status',"Video added successfully.");
	}

	public function edit_video(Request $request, $id) {
		$this->user_auth();
		$video = Video::where('id',$id)->first();
		// return $video_images;
		return view('admin.video.edit_video',['video'=>$video]);
	}

	public function update_video(Request $request) {
		$this->user_auth();
		// return $request->all();
		$video = Video::find($request->id);
		
        $video->url = $request->url;
	  	$video->save();

	  	return redirect('video_list')->with('status',"Video updated successfully.");
	}

	public function destroy_video($id) {
		$this->user_auth();
		$video = Video::findOrFail($id);
		$video->delete();

		return redirect('video_list');
  	}

}