<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\GalleryImage;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use Image;

class GalleryController extends Controller {
	public function user_auth() {
        // echo 22;die;
        if( !empty(Auth::user()) && (Auth::user()->usertype == 'admin') ) {

        } else {
            return redirect('login');
        }
    }
	
	public function gallery_list(Request $request) {
		$this->user_auth();
		$gallery_list = Gallery::orderBy('id','desc')->get();
		return view('admin.gallery.gallery_list',['gallery_list'=>$gallery_list]);
	}

	public function add_gallery(Request $request) {
		$this->user_auth();
		return view('admin.gallery.add_gallery');
	}

	public function create_gallery(Request $request) {
		$this->user_auth();
		
        $gallery = new Gallery();
	  	$gallery->title = $request->title;
	  	$gallery->save();
	  	$gallery_id = $gallery->id;

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

				$gallery_img = new GalleryImage();
                $gallery_img->gallery_id = $gallery_id;
                $gallery_img->image = $img_name1;
                $gallery_img->save();
				// GalleryImage::create($oi);
			}
		}
	  	return redirect('gallery_list')->with('status',"Gallery added successfully.");
	}

	public function edit_gallery(Request $request, $id) {
		$this->user_auth();
		$gallery = Gallery::where('id',$id)->first();
		$gallery_images = GalleryImage::where('gallery_id',$id)->get();
		// return $gallery_images;
		return view('admin.gallery.edit_gallery',['gallery'=>$gallery,'gallery_images'=>$gallery_images]);
	}

	public function update_gallery(Request $request) {
		$this->user_auth();
		// return $request->all();
		$gallery = Gallery::find($request->id);
		
        $gallery->title = $request->title;
	  	$gallery->save();

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

				$gallery_img = new GalleryImage();
                $gallery_img->gallery_id = $request->id;
                $gallery_img->image = $img_name1;
                $gallery_img->save();
				// GalleryImage::create($oi);
			}
		}

	  	return redirect('gallery_list')->with('status',"Gallery updated successfully.");
	}

	public function destroy_gallery($id) {
		$this->user_auth();
		$gallery = Gallery::findOrFail($id);
		$gallery->delete();

		return redirect('gallery_list');
  	}

  	public function del_gallery_img($gallery_id, $image_id) {
  		// echo $gallery_id.','.$image_id;die;
        $data = GalleryImage::findOrFail($image_id);
        
		$deleteimage1 = public_path('thumbnail/').$data->image;
        File::delete($deleteimage1);
		
        $deleteimage2 = public_path('upload/').$data->image;
		File::delete($deleteimage2);
        $data->delete();

		return redirect('edit_gallery/'.$gallery_id);
	}

}