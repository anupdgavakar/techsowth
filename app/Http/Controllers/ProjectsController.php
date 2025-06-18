<?php

namespace App\Http\Controllers;
use App\Models\Projects;
use App\Models\ProjectsImages;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use Image;

class ProjectsController extends Controller {
	public function user_auth() {
        // echo 22;die;
        if( !empty(Auth::user()) && (Auth::user()->usertype == 'admin') ) {

        } else {
            return redirect('login');
        }
    }
	
	public function projects_list(Request $request) {
		$this->user_auth();
		$projects_list = Projects::orderBy('id','desc')->get();
		return view('admin.projects.projects_list',['projects_list'=>$projects_list]);
	}

	public function add_projects(Request $request) {
		$this->user_auth();
		return view('admin.projects.add_projects');
	}

	public function create_projects(Request $request) {
		$this->user_auth();
		
        $projects = new Projects();
	  	$projects->title = $request->title;
	  	$projects->save();
	  	$projects_id = $projects->id;

	  	$images = $request->file('images');
		if($images) {
			$destinationPath1 = public_path('thumbnail');
			$destinationPath2 = public_path('upload');

			foreach($images as $key=>$val) {
				$ext=$val->getClientOriginalExtension();
			
				$img_name1=time().'.'.$val->getClientOriginalName();
			  	$resize_image = Image::make($request->file('images')[$key]->getRealPath());
               	$resize_image->resize(440, 330, function($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath1 . '/' . $img_name1);

				$val->move($destinationPath2, $img_name1);

				$projects_img = new ProjectsImages();
                $projects_img->projects_id = $projects_id;
                $projects_img->image = $img_name1;
                $projects_img->save();
				// GalleryImage::create($oi);
			}
		}
	  	return redirect('projects_list')->with('status',"projects added successfully.");
	}

	public function edit_projects(Request $request, $id) {
		$this->user_auth();
		$projects = Projects::where('id',$id)->first();
		$projects_images = ProjectsImages::where('projects_id',$id)->get();
		// return $gallery_images;
		return view('admin.projects.edit_projects',['projects'=>$projects,'projects_images'=>$projects_images]);
	}

	public function update_projects(Request $request) {
		$this->user_auth();
		// return $request->all();
		$projects = Projects::find($request->id);
		
        $projects->title = $request->title;
	  	$projects->save();

	  	$images = $request->file('images');
		if($images) {
			$destinationPath1 = public_path('thumbnail');
			$destinationPath2 = public_path('upload');

			foreach($images as $key=>$val) {
				$ext=$val->getClientOriginalExtension();
			
				$img_name1=time().'.'.$val->getClientOriginalName();
			  	$resize_image = Image::make($request->file('images')[$key]->getRealPath());
               	$resize_image->resize(440, 330, function($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath1 . '/' . $img_name1);

				$val->move($destinationPath2, $img_name1);

				$projects_img = new ProjectsImages();
                $projects_img->gallery_id = $request->id;
                $projects_img->image = $img_name1;
                $projects_img->save();
				// GalleryImage::create($oi);
			}
		}

	  	return redirect('projects_list')->with('status',"projects updated successfully.");
	}

	public function destroy_projects($id) {
		$this->user_auth();
		$projects = Projects::findOrFail($id);
		$projects->delete();

		return redirect('projects_list');
  	}

  	public function del_projects_img($projects_id, $image_id) {
  		// echo $gallery_id.','.$image_id;die;
        $data = ProjectsImage::findOrFail($image_id);
        
		$deleteimage1 = public_path('thumbnail/').$data->image;
        File::delete($deleteimage1);
		
        $deleteimage2 = public_path('upload/').$data->image;
		File::delete($deleteimage2);
        $data->delete();

		return redirect('edit_projects/'.$projects_id);
	}

}