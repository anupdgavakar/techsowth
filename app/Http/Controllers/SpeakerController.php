<?php

namespace App\Http\Controllers;
use App\Models\Speaker;
use App\Models\SpeakerImage;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use Image;

class SpeakerController extends Controller {
	public function user_auth() {
        // echo 22;die;
        if( !empty(Auth::user()) && (Auth::user()->usertype == 'admin') ) {

        } else {
            return redirect('login');
        }
    }

	public function speaker_list(Request $request) {
		$this->user_auth();
		$speaker = Speaker::orderBy('id','desc')->get();
		return view('admin.speaker.speaker_list',['speaker'=>$speaker]);
	}

	public function add_speaker(Request $request) {
		$this->user_auth();
		return view('admin.speaker.add_speaker');
	}

	public function create_speaker(Request $request) {
		$this->user_auth();
		// return $request->all();
		// echo '<pre>';print_r($_FILES);die;

		// $thumbnail = $request->file('thumbnail');
		// if($thumbnail) {
		//    	$thumbnail_name = time() . '.' . $thumbnail->getClientOriginalName();
		// 	$request->file('thumbnail')->move(public_path('upload'), $thumbnail_name);
		// }
		
        $speaker = new Speaker();
	  	$speaker->title = $request->title;
	  	$speaker->description = $request->description;
	  	// $blog->metatitle = $request->metatitle;
	  	// $blog->metadescription = $request->metadescription;
	  	// $blog->metakeywords = $request->metakeywords;

	  	// $blog->image = $image_name;
	  	// $blog->thumbnail = $thumbnail_name;
	  	$speaker->save();
	  	$speaker_id = $speaker->id;

	  	$images = $request->file('images');
		if($images) {
			$destinationPath1 = public_path('thumbnail');
			$destinationPath2 = public_path('upload');

			foreach($images as $key=>$val) {
				$ext=$val->getClientOriginalExtension();
			
				$img_name1=time().'.'.$val->getClientOriginalName();
			  	$resize_image = Image::make($request->file('images')[$key]->getRealPath());
               	$resize_image->resize(400, 400, function($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath1 . '/' . $img_name1);

				$val->move($destinationPath2, $img_name1);

				$speaker_img = new SpeakerImage();
                $speaker_img->speaker_id = $speaker_id;
                $speaker_img->image = $img_name1;
                $speaker_img->save();
				// BlogImage::create($oi);
			}
		}
	  	return redirect('speaker_list')->with('status',"Speaker added successfully.");
	}

	public function edit_speaker(Request $request, $id) {
		$this->user_auth();
		$speaker = Speaker::where('id',$id)->first();
		$speaker_images = SpeakerImage::where('speaker_id',$id)->get();
		// return $blog_images;
		return view('admin.speaker.edit_speaker',['speaker'=>$speaker,'speaker_images'=>$speaker_images]);
	}

	public function update_speaker(Request $request) {
		$this->user_auth();
		// return $request->all();
		$speaker = Speaker::find($request->id);

		// $image = $request->file('image');
		// if($image) {
		//    	$image_name = time() . '.' . $image->getClientOriginalName();
		// 	$request->file('image')->move(public_path('upload'), $image_name);
		// } else {
		// 	$image_name = $request->oldimage;
		// }

		// $thumbnail = $request->file('thumbnail');
		// if($thumbnail) {
		//    	$thumbnail_name = time() . '.' . $thumbnail->getClientOriginalName();
		// 	$request->file('thumbnail')->move(public_path('upload'), $thumbnail_name);
		// } else {
		// 	$thumbnail_name = $request->thumbnail_oldimage;
		// }
		
        $speaker->title = $request->title;
	  	$speaker->description = $request->description;
	  	// $blog->metatitle = $request->metatitle;
	  	// $blog->metadescription = $request->metadescription;
	  	// $blog->metakeywords = $request->metakeywords;
	  	
	  	// $blog->image = $image_name;
	  	// $blog->thumbnail = $thumbnail_name;
	  	$speaker->save();

	  	$images = $request->file('images');
		if($images) {
			$destinationPath1 = public_path('thumbnail');
			$destinationPath2 = public_path('upload');

			foreach($images as $key=>$val) {
				$ext=$val->getClientOriginalExtension();
			
				$img_name1=time().'.'.$val->getClientOriginalName();
			  	$resize_image = Image::make($request->file('images')[$key]->getRealPath());
               	$resize_image->resize(400, 400, function($constraint) {
					$constraint->aspectRatio();
				})->save($destinationPath1 . '/' . $img_name1);

				$val->move($destinationPath2, $img_name1);

				$speaker_img = new SpeakerImage();
                $speaker_img->blog_id = $request->id;
                $speaker_img->image = $img_name1;
                $speaker_img->save();
				// BlogImage::create($oi);
			}
		}

	  	return redirect('speaker_list')->with('status',"Speaker updated successfully.");
	}

	public function destroy_speaker($id) {
		$this->user_auth();
		$speaker = Speaker::findOrFail($id);
		$speaker->delete();

		return redirect('speaker_list');
  	}

  	public function delimage($speaker_id, $image_id) {
  		// echo $blog_id.','.$image_id;die;
        $data = SpeakerImage::findOrFail($image_id);
        
		$deleteimage1 = public_path('thumbnail/').$data->image;
        File::delete($deleteimage1);
		
        $deleteimage2 = public_path('upload/').$data->image;
		File::delete($deleteimage2);
        $data->delete();

		return redirect('edit_speaker/'.$speaker_id);
	}

}