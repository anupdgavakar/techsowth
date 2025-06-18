<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use DB;

class DashboardController extends Controller

{

     public function userlist(){

        $users = DB::table('users')->paginate(10);
        return view('admin.dashboard')->with('users',$users);
    }
    

   public function registeredit(Request $request, $id){

        $users = User::findOrFail($id);

        return view('admin.edit')->with('users',$users);




    }

    public function registerupdate(Request $request, $id){


          switch ($request->method()) {
             case 'POST':
                  $users = User::findOrFail($id);
        
                    $users->name = $request->input('username');

                    $users->usertype = $request->input('usertype');
        
                    $users->update();
                     return redirect('/dashboard')->with('status','your data is updated');
                 break;

             case 'GET':
                 $users = User::findOrFail($id);

                    return view('admin.update')->with('users',$users);
                 break;

             default:
                 // invalid request
                 break;
         }



    }

    public function getImageList(){
        $datas = DB::table('sliders')->paginate(30);
        return view('admin.image.list')->with('datas',$datas);
    }
    public function getImageCreate(){
        return view('admin.image.create');
    }
    public function postImageStore(Request $request){
        //dd($request->hasFile('image'));
        //dd($request);
        $type = $request->type;
        $filename = 'noimage.png';
        if($request->hasFile('image')){
            $image= $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/image/'), $filename);
           
        }
        $created_at = date('Y-m-d H:i:s');
        $storeArray = array('type' => $type, 'image' => $filename, 'created_at' => $created_at);
        DB::table('sliders')->insert($storeArray);
        return redirect('/image/list')->with('status','Your data is store');
    }
    public function getImageEdit(Request $request, $id){
        $result = DB::table('sliders')->where('id', $id)->first();
        return view('admin.image.edit')->with('result',$result);
    }
    public function postImageUpdate(Request $request, $id){
        $result = DB::table('sliders')->where('id', $id)->first();
        if ($result) {
            $filename = $result->image;
        }else{
            $filename = 'noimage.png';
        }
        $type = $request->type;
        if($request->hasFile('image')){
            $image= $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/image/'), $filename);
           
        }
        $updated_at = date('Y-m-d H:i:s');
        $storeArray = array('type' => $type, 'image' => $filename, 'updated_at' => $updated_at);
        DB::table('sliders')->where('id', $id)->update($storeArray);
        return redirect('/image/list')->with('status','Your data is updated');
    }
    public function getImageDelete(Request $request, $id){
        DB::table('sliders')->where('id', $id)->delete();
        return redirect('/image/list')->with('status','Your data successffully deleted!');
    }



    public function getMainList(){
        $datas = DB::table('cms')->where('type', 'main')->paginate(30);
        //dd($datas);
        return view('admin.main.list')->with('datas',$datas);
    }
    public function getMainEdit(Request $request, $id){
        $result = DB::table('cms')->where('id', $id)->first();
        return view('admin.main.edit')->with('result',$result);
    }
    public function postMainUpdate(Request $request, $id){
        $result = DB::table('cms')->where('id', $id)->first();
        if ($result) {
            $filename = $result->image;
            $filename_second = $result->image_second;
            $filename_third = $result->image_third;
        }else{
            $filename = 'noimage.png';
            $filename_second = 'noimage.png';
            $filename_third = 'noimage.png';
        }
        $title = $request->title;
        $slug = \Str::slug($request->title);
        $type = $request->type;
        $content = $request->content;
        if($request->hasFile('image')){
            $image= $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/main/'), $filename);
           
        }
        if($request->hasFile('image_second')){
            $image= $request->file('image_second');
            $filename_second = time() . '_second.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/main/'), $filename_second);
           
        }
        if($request->hasFile('image_third')){
            $image= $request->file('image_third');
            $filename_third = time() . '_third.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/main/'), $filename_third);
           
        }
        $updated_at = date('Y-m-d H:i:s');
        $storeArray = array('type' => $type, 'image' => $filename, 'image_second' => $filename_second, 'image_third' => $filename_third, 'updated_at' => $updated_at);
        DB::table('cms')->where('id', $id)->update($storeArray);
        return redirect('/main/list')->with('status','Your data is updated');
    }

    public function getCmsList(){
        $datas = DB::table('cms')->where('type', 'cms')->paginate(30);
        return view('admin.cms.list')->with('datas',$datas);
    }
    public function getCmsEdit(Request $request, $id){
        $result = DB::table('cms')->where('id', $id)->first();
        return view('admin.cms.edit')->with('result',$result);
    }
    public function postCmsUpdate(Request $request, $id){
        $result = DB::table('cms')->where('id', $id)->first();
        if ($result) {
            $filename = $result->image;
        }else{
            $filename = 'noimage.png';
        }
        $title = $request->title;
        $slug = \Str::slug($request->title);
        $type = $request->type;
        if($request->hasFile('image')){
            $image= $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/cms/'), $filename);
           
        }
        $updated_at = date('Y-m-d H:i:s');
        $storeArray = array('type' => $type, 'image' => $filename, 'updated_at' => $updated_at);
        DB::table('cms')->where('id', $id)->update($storeArray);
        return redirect('/cms/list')->with('status','Your data is updated');
    }


    public function getSevaList(){
        $datas = DB::table('cms')->where('type', 'seva')->paginate(30);
        return view('admin.seva.list')->with('datas',$datas);
    }



    public function getSevaEdit(Request $request, $id){
        $result = DB::table('cms')->where('id', $id)->first();
        return view('admin.seva.edit')->with('result',$result);
    }
    public function postSevaUpdate(Request $request, $id){
        $result = DB::table('cms')->where('id', $id)->first();
        if ($result) {
            $filename = $result->image;
        }else{
            $filename = 'noimage.png';
        }
        $title = $request->title;
        $slug = \Str::slug($request->title);
        $type = $request->type;
        $content = $request->content;
        if($request->hasFile('image')){
            $image= $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/seva/'), $filename);
           
        }
        $updated_at = date('Y-m-d H:i:s');
        $storeArray = array('type' => $type, 'image' => $filename, 'updated_at' => $updated_at);
        DB::table('cms')->where('id', $id)->update($storeArray);
        return redirect('/seva/list')->with('status','Your data is updated');
    }




    public function getBlogList(){
        $blogs = DB::table('blogs')->paginate(10);
        return view('admin/blog/bloglist')->with('blogs',$blogs);
        

    }

    public function BlogCreate(){
        return view('admin.blog.blogcreate');
    }


    public function BlogStore(Request $request){
        //dd($request->hasFile('image'));
        //dd($request);
        $title = $request->title;

        

        
         if($request->hasFile('headerimage')){

            $filenameheader= 'noimage.png';
            $headerimage= $request->file('headerimage');
            $filenameheader = time() . '.' . $headerimage->getClientOriginalExtension();
            $headerimage->move(public_path('/uploads/blog/'), $filenameheader);
           
        }

        
        if($request->hasFile('photo1')){
            $filenamephoto1 = 'noimage.png';
            $photo1= $request->file('photo1');
            $filenamephoto1 = time() . '.' . $photo1->getClientOriginalExtension();
            $photo1->move(public_path('/uploads/blog/'), $filenamephoto1);
           
        }
        $filenamephoto2 = 'noimage.png';
        if($request->hasFile('photo2')){
            $photo2= $request->file('photo2');
            $filenamephoto2 = time() . '.' . $photo2->getClientOriginalExtension();
            $photo2->move(public_path('/uploads/blog/'), $filenamephoto2);
           
        }
        $filenamephoto3 = 'noimage.png';
        if($request->hasFile('photo3')){
            $photo3= $request->file('photo3');
            $filenamephoto3 = time() . '.' . $photo3->getClientOriginalExtension();
            $photo3->move(public_path('/uploads/blog/'), $filenamephoto3);
           
        }




        $description = $request->description;

            



        $created_at = date('Y-m-d H:i:s');
        $storeArray = array( 'title' => $title, 'headerphoto' => $filenameheader,'description'=>$description, 'photo1'=> $filenamephoto1, 'photo2' => $filenamephoto2, 'photo3' => $filenamephoto3, 'created_at' => $created_at);
        DB::table('blogs')->insert($storeArray);
        return redirect('/blog/bloglist')->with('status','Your data is store');
    }

    public function BlogEdit(Request $request, $id){
        $result = DB::table('blogs')->where('id', $id)->first();
        return view('admin.blog.blogedit')->with('result',$result);
    }

    public function BlogUpdate(Request $request, $id){

        $result = DB::table('blogs')->where('id', $id)->first();
        if ($result) {
            $filenameheaderphoto = $result->headerphoto;
            $filenamephoto1 = $result->photo1;
            $filenamephoto2 = $result->photo2;
            $filenamephoto3 = $result->photo3;
        }else{
            $filenameheaderphoto = 'noimage.png';
            $filenamephoto1 = 'noimage.png';
            $filenamephoto2 = 'noimage.png';
            $filenamephoto3 = 'noimage.png';
        }
        $title = $request->title;
        $description = $request->description;
        
        
           if($request->hasFile('headerimage')){

            
            $headerimage= $request->file('headerimage');
            $filenameheader = time() . '.' . $headerimage->getClientOriginalExtension();
            $headerimage->move(public_path('/uploads/blog/'), $filenameheader);
           
        }

        
        if($request->hasFile('photo1')){
            
            $photo1= $request->file('photo1');
            $filenamephoto1 = time() . '.' . $photo1->getClientOriginalExtension();
            $photo1->move(public_path('/uploads/blog/'), $filenamephoto1);
           
        }
        
        if($request->hasFile('photo2')){
            $photo2= $request->file('photo2');
            $filenamephoto2 = time() . '.' . $photo2->getClientOriginalExtension();
            $photo2->move(public_path('/uploads/blog/'), $filenamephoto2);
           
        }
        
        if($request->hasFile('photo3')){
            $photo3= $request->file('photo3');
            $filenamephoto3 = time() . '.' . $photo3->getClientOriginalExtension();
            $photo3->move(public_path('/uploads/blog/'), $filenamephoto3);
           
        }


        $updated_at = date('Y-m-d H:i:s');
        $storeArray = array('title' => $title, 'headerphoto' => $filenameheaderphoto,'description'=>$description, 'photo1'=> $filenamephoto1, 'photo2' => $filenamephoto2, 'photo3' => $filenamephoto3, 'updated_at' => $updated_at);
        DB::table('blogs')->where('id', $id)->update($storeArray);
        return redirect('/blog/bloglist')->with('status','Your blog is updated');

        
    }


    public function getgallaryList(){

        $galleries = DB::table('galleries')->paginate(10);

        return view('admin.gallary.gallarylist')->with('galleries',$galleries);
        


    }
     public function addgallary(){

        
      return view('admin.gallary.addgallary');
        
        

    }

     public function gallarystore(Request $request){

        
      if($request->hasFile('photo')){

            $filenameheader= 'noimage.png';
            $headerimage= $request->file('photo');
            $filenameheader = time() . '.' . $headerimage->getClientOriginalExtension();
            $headerimage->move(public_path('/uploads/gallary/'), $filenameheader);
                                
        }

        $caption = $request->caption;
        $type = $request->type;

        $created_at = date('Y-m-d H:i:s');
        $storeArray = array('photo' => $filenameheader,'caption'=>$caption, 'type'=>$type, 'created_at' => $created_at);
        DB::table('galleries')->insert($storeArray);
        return redirect('/gallary/gallarylist')->with('status','Your data is store');
        
        

    }

    public function gallaryedit(Request $request, $id){


         $result = DB::table('galleries')->where('id', $id)->first();
        return view('admin.gallary.gallaryedit')->with('result',$result);
        

}


 public function gallaryupdate(Request $request, $id){

        $result = DB::table('galleries')->where('id', $id)->first();

        
        
          if ($result) {
            $photo = $result->photo;
          
        }else{
            $photo = 'noimage.png';
          
        }

        $caption = $request->caption;
        $type = $request->type;
        


        $updated_at = date('Y-m-d H:i:s');
        $storeArray = array('photo' => $photo, 'caption'=>$caption, 'type'=> $type,'updated_at' => $updated_at);
        DB::table('galleries')->where('id', $id)->update($storeArray);
        return redirect('/gallary/gallarylist')->with('status','Your Photo is updated');

        
    }

    

   
}
