<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\BlogImage;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use Image;

class BlogController extends Controller {
	public function user_auth() {
        // echo 22;die;
        if( !empty(Auth::user()) && (Auth::user()->usertype == 'admin') ) {

        } else {
            return redirect('login');
        }
    }

	public function blog_list(Request $request) {
		$this->user_auth();
		$blogs = Blog::orderBy('id','desc')->get();
		return view('admin.blog.blog_list',['blogs'=>$blogs]);
	}

	public function add_blog(Request $request) {
		$this->user_auth();
		return view('admin.blog.add_blog');
	}

	public function create_blog(Request $request) {
		$this->user_auth();
		
		
        $blog = new Blog();
	  	$blog->title = $request->title;
	  	$blog->description = $request->description;
	  	$blog->save();
	  	$blog_id = $blog->id;


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

				$blog_img = new BlogImage();
                $blog_img->blog_id = $blog_id;
                $blog_img->image = $img_name1;
                $blog_img->save();
				
			}
		}
	  	return redirect('blog_list')->with('status',"Blog added successfully.");
	}

	public function edit_blog(Request $request, $id) {
		$this->user_auth();
		$blog = Blog::where('id',$id)->first();
		$blog_images = BlogImage::where('blog_id',$id)->get();
		// return $blog_images;
		return view('admin.blog.edit_blog',['blog'=>$blog,'blog_images'=>$blog_images]);
	}

	public function update_blog(Request $request) {
		$this->user_auth();
		// return $request->all();
		$blog = Blog::find($request->id);

		
		
        $blog->title = $request->title;
	  	$blog->description = $request->description;
	  	
	  	$blog->save();

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

				$blog_img = new BlogImage();
                $blog_img->blog_id = $request->id;
                $blog_img->image = $img_name1;
                $blog_img->save();
				// BlogImage::create($oi);
			}
		}

	  	return redirect('blog_list')->with('status',"Blog updated successfully.");
	}

	public function destroy_blog($id) {
		$this->user_auth();
		$blog = Blog::findOrFail($id);
		$blog->delete();

		return redirect('blog_list');
  	}

  	public function delimage($blog_id, $image_id) {
  		
        $data = BlogImage::findOrFail($image_id);
        
		$deleteimage1 = public_path('thumbnail/').$data->image;
        File::delete($deleteimage1);
		
        $deleteimage2 = public_path('upload/').$data->image;
		File::delete($deleteimage2);
        $data->delete();

		return redirect('edit_blog/'.$blog_id);
	}

}