<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\SliderImage;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use Image;

class SliderController extends Controller {
	public function user_auth() {
        // echo 22;die;
        if( !empty(Auth::user()) && (Auth::user()->usertype == 'admin') ) {

        } else {
            return redirect('login');
        }
    }
	
	public function slider_list(Request $request) {
		$this->user_auth();
		$slider_list = Slider::orderBy('id','desc')->get();
		return view('admin.slider.slider_list',['slider_list'=>$slider_list]);
	}

	public function add_slider(Request $request) {
		$this->user_auth();
		return view('admin.slider.add_slider');
	}

	public function create_slider(Request $request) {
		$this->user_auth();
		
        $slider = new Slider();
	  	$slider->title = $request->title;
	  	$slider->description = $request->description;
	  	$slider->save();
	  	$slider_id = $slider->id;

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

				$slider_img = new SliderImage();
                $slider_img->slider_id = $slider_id;
                $slider_img->image = $img_name1;
                $slider_img->save();
				// GalleryImage::create($oi);
			}
		}
	  	return redirect('slider_list')->with('status',"Slider added successfully.");
	}

	public function edit_slider(Request $request, $id) {
		$this->user_auth();
		$slider = Slider::where('id',$id)->first();
		$slider_images = SliderImage::where('slider_id',$id)->get();
		// return $gallery_images;
		return view('admin.slider.edit_slider',['slider'=>$slider,'slider_images'=>$slider_images]);
	}

	public function update_slider(Request $request) {
		$this->user_auth();
		// return $request->all();
		$slider = Slider::find($request->id);
		
        $slider->title = $request->title;
        $slider->description = $request->description;
	  	$slider->save();

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

				$slider_img = new SliderImage();
                $slider_img->slider_id = $request->id;
                $slider_img->image = $img_name1;
                $slider_img->save();
				// GalleryImage::create($oi);
			}
		}

	  	return redirect('slider_list')->with('status',"Slider updated successfully.");
	}

	public function destroy_slider($id) {
		$this->user_auth();
		$slider = Slider::findOrFail($id);
		$slider->delete();

		return redirect('slider_list');
  	}

  	public function del_slider_img($slider_id, $image_id) {
  		// echo $gallery_id.','.$image_id;die;
        $data = SliderImage::findOrFail($image_id);
        
		$deleteimage1 = public_path('thumbnail/').$data->image;
        File::delete($deleteimage1);
		
        $deleteimage2 = public_path('upload/').$data->image;
		File::delete($deleteimage2);
        $data->delete();

		return redirect('edit_slider/'.$slider_id);
	}

}