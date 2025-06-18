<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\ArticleImage;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use Image;

class ArticleController extends Controller {
	public function user_auth() {
        // echo 22;die;
        if( !empty(Auth::user()) && (Auth::user()->usertype == 'admin') ) {

        } else {
            return redirect('login');
        }
    }

	public function article_list(Request $request) {
		$this->user_auth();
		$article = Article::orderBy('id','desc')->get();
		return view('admin.article.article_list',['article'=>$article]);
	}

	public function add_article(Request $request) {
		$this->user_auth();
		return view('admin.article.add_article');
	}

	public function create_article(Request $request) {
		$this->user_auth();
		// return $request->all();
		// echo '<pre>';print_r($_FILES);die;

		// $thumbnail = $request->file('thumbnail');
		// if($thumbnail) {
		//    	$thumbnail_name = time() . '.' . $thumbnail->getClientOriginalName();
		// 	$request->file('thumbnail')->move(public_path('upload'), $thumbnail_name);
		// }
		
        $article = new Article();
	  	$article->title = $request->title;
	  	$article->description = $request->description;
	  	// $blog->metatitle = $request->metatitle;
	  	// $blog->metadescription = $request->metadescription;
	  	// $blog->metakeywords = $request->metakeywords;

	  	// $blog->image = $image_name;
	  	// $blog->thumbnail = $thumbnail_name;
	  	$article->save();
	  	$article_id = $article->id;

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

				$article_img = new ArticleImage();
                $article_img->article_id = $article_id;
                $article_img->image = $img_name1;
                $article_img->save();
				// BlogImage::create($oi);
			}
		}
	  	return redirect('article_list')->with('status',"Article added successfully.");
	}

	public function edit_article(Request $request, $id) {
		$this->user_auth();
		$article = Article::where('id',$id)->first();
		$article_images = ArticleImage::where('article_id',$id)->get();
		// return $blog_images;
		return view('admin.article.edit_article',['article'=>$article,'article_images'=>$article_images]);
	}

	public function update_article(Request $request) {
		$this->user_auth();
		// return $request->all();
		$article = Article::find($request->id);

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
		
        $article->title = $request->title;
	  	$article->description = $request->description;
	  	// $blog->metatitle = $request->metatitle;
	  	// $blog->metadescription = $request->metadescription;
	  	// $blog->metakeywords = $request->metakeywords;
	  	
	  	// $blog->image = $image_name;
	  	// $blog->thumbnail = $thumbnail_name;
	  	$article->save();

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

				$article_img = new ArticleImage();
                $article_img->blog_id = $request->id;
                $article_img->image = $img_name1;
                $article_img->save();
				// BlogImage::create($oi);
			}
		}

	  	return redirect('article_list')->with('status',"Article updated successfully.");
	}

	public function destroy_article($id) {
		$this->user_auth();
		$article = Article::findOrFail($id);
		$article->delete();

		return redirect('article_list');
  	}

  	public function delimage($article_id, $image_id) {
  		// echo $blog_id.','.$image_id;die;
        $data = ArticleImage::findOrFail($image_id);
        
		$deleteimage1 = public_path('thumbnail/').$data->image;
        File::delete($deleteimage1);
		
        $deleteimage2 = public_path('upload/').$data->image;
		File::delete($deleteimage2);
        $data->delete();

		return redirect('edit_article/'.$article_id);
	}

}