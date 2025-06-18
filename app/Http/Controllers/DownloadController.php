<?php

namespace App\Http\Controllers;
use App\Models\Download;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use Image;

class DownloadController extends Controller {
	public function user_auth() {
        // echo 22;die;
        if( !empty(Auth::user()) && (Auth::user()->usertype == 'admin') ) {

        } else {
            return redirect('login');
        }
    }
	
	public function download_list(Request $request) {
		$this->user_auth();
		$downloads = Download::orderBy('id','desc')->get();
		return view('admin.download.download_list',['downloads'=>$downloads]);
	}

	public function add_download(Request $request) {
		$this->user_auth();
		return view('admin.download.add_download');
	}

	public function create_download(Request $request) {
		$this->user_auth();
		// return $request->all();
		// echo '<pre>';print_r($_FILES);die;

		$file = $request->file('file');
		if($file) {
		   	$file_name = time() . '.' . $file->getClientOriginalName();
			$request->file('file')->move(public_path('upload'), $file_name);
		}
		
        $download = new Download();
	  	$download->title = $request->title;
	  	$download->description = $request->description;
	  	$download->file = $file_name;
	  	$download->save();
	  	return redirect('download_list')->with('status',"Download added successfully.");
	}

	public function edit_download(Request $request, $id) {
		$this->user_auth();
		$download = Download::where('id',$id)->first();

		return view('admin.download.edit_download',['download'=>$download]);
	}

	public function update_download(Request $request) {
		$this->user_auth();

		$download = Download::find($request->id);

		$file = $request->file('file');
		if($file) {
		   	$file_name = time() . '.' . $file->getClientOriginalName();
			$request->file('file')->move(public_path('upload'), $file_name);
		} else {
			$file_name = $request->file_oldimage;
		}
		
        $download->title = $request->title;
	  	$download->description = $request->description;
	  	$download->file = $file_name;
	  	$download->save();

	  	return redirect('download_list')->with('status',"Download updated successfully.");
	}

	public function destroy_download($id) {
		$this->user_auth();
		$download = Download::findOrFail($id);
		$download->delete();

		return redirect('download_list');
  	}

}