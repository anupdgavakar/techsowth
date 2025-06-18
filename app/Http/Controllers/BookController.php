<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\BookImage;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use Image;

class BookController extends Controller {
	public function user_auth() {
        // echo 22;die;
        if( !empty(Auth::user()) && (Auth::user()->usertype == 'admin') ) {

        } else {
            return redirect('login');
        }
    }

	public function book_list(Request $request) {
		$this->user_auth();
		$book = Book::orderBy('id','desc')->get();
		return view('admin.book.book_list',['book'=>$book]);
	}

	public function add_book(Request $request) {
		$this->user_auth();
		return view('admin.book.add_book');
	}

	public function create_book(Request $request) {
		$this->user_auth();
		// return $request->all();
		// echo '<pre>';print_r($_FILES);die;

		// $thumbnail = $request->file('thumbnail');
		// if($thumbnail) {
		//    	$thumbnail_name = time() . '.' . $thumbnail->getClientOriginalName();
		// 	$request->file('thumbnail')->move(public_path('upload'), $thumbnail_name);
		// }
		
        $book = new Book();
	  	$book->title = $request->title;
	  	$book->description = $request->description;
	  	// $blog->metatitle = $request->metatitle;
	  	// $blog->metadescription = $request->metadescription;
	  	// $blog->metakeywords = $request->metakeywords;

	  	// $blog->image = $image_name;
	  	// $blog->thumbnail = $thumbnail_name;
	  	$book->save();
	  	$book_id = $book->id;

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

				$book_img = new BookImage();
                $book_img->book_id = $book_id;
                $book_img->image = $img_name1;
                $book_img->save();
				// BlogImage::create($oi);
			}
		}
	  	return redirect('book_list')->with('status',"Book added successfully.");
	}

	public function edit_book(Request $request, $id) {
		$this->user_auth();
		$book = Book::where('id',$id)->first();
		$book_images = BookImage::where('book_id',$id)->get();
		// return $blog_images;
		return view('admin.book.edit_book',['book'=>$book,'book_images'=>$book_images]);
	}

	public function update_book(Request $request) {
		$this->user_auth();
		// return $request->all();
		$book = Book::find($request->id);

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
		
        $book->title = $request->title;
	  	$book->description = $request->description;
	  	// $blog->metatitle = $request->metatitle;
	  	// $blog->metadescription = $request->metadescription;
	  	// $blog->metakeywords = $request->metakeywords;
	  	
	  	// $blog->image = $image_name;
	  	// $blog->thumbnail = $thumbnail_name;
	  	$book->save();

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

				$book_img = new BookImage();
                $book_img->blog_id = $request->id;
                $book_img->image = $img_name1;
                $book_img->save();
				// BlogImage::create($oi);
			}
		}

	  	return redirect('book_list')->with('status',"Book updated successfully.");
	}

	public function destroy_book($id) {
		$this->user_auth();
		$book = Book::findOrFail($id);
		$book->delete();

		return redirect('book_list');
  	}

  	public function delimage($book_id, $image_id) {
  		// echo $blog_id.','.$image_id;die;
        $data = BookImage::findOrFail($image_id);
        
		$deleteimage1 = public_path('thumbnail/').$data->image;
        File::delete($deleteimage1);
		
        $deleteimage2 = public_path('upload/').$data->image;
		File::delete($deleteimage2);
        $data->delete();

		return redirect('edit_book/'.$book_id);
	}

}