<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;


use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use Image;

class TestimonialController extends Controller {
	public function user_auth() {
        // echo 22;die;
        if( !empty(Auth::user()) && (Auth::user()->usertype == 'admin') ) {

        } else {
            return redirect('login');
        }
    }
	
	public function testimonial_list(Request $request) {
		$this->user_auth();
		$testimonial_list = Testimonial::orderBy('id','desc')->get();
		return view('admin.testimonial.testimonial_list',['testimonial_list'=>$testimonial_list]);
	}

	public function add_testimonial(Request $request) {
		$this->user_auth();
		return view('admin.testimonial.add_testimonial');
	}

	public function create_testimonial(Request $request) {
		$this->user_auth();
		
        $testimonial = new Testimonial();
	  	$testimonial->title = $request->title;
	  	$testimonial->description = $request->description;
	  	$testimonial->save();
	  	$testimonial_id = $testimonial->id;

	 
	  	return redirect('testimonial_list')->with('status',"Testimonial added successfully.");
	}

	public function edit_testimonial(Request $request, $id) {
		$this->user_auth();
		$testimonial = Testimonial::find($id);
		
	
		

    // Redirect to the 'testimonial_list' route with the testimonial data
    return view('admin.testimonial.edit_testimonial',['testimonial'=>$testimonial]);


	}

	public function update_testimonial(Request $request) {
		$this->user_auth();
		// return $request->all();
		$testimonial = Testimonial::find($request->id);
		
        $testimonial->title = $request->title;
        $testimonial->description = $request->description;
	  	$testimonial->save();

	  	return redirect('testimonial_list')->with('status',"Testimonial updated successfully.");
	}

	public function destroy_testimonial($id) {
		$this->user_auth();
		$testimonial = Testimonial::findOrFail($id);
		$testimonial->delete();

		return redirect('testimonial_list');
  	}

  	

}