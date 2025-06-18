<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Video;

use App\Models\Projects;
use App\Models\ProjectImage;
use App\Notifications\SendContactForm;

class websiteController extends Controller {



    public function thanks()
    {
        return view('layouts.thanks');
    }

  
 public function sendEmail(Request $request)
    {
      $data = $request ->validate([
        'name' => 'required|string|max:100',
        'email' => 'required|string|max:100',
        'phone' => 'required|string|max:20',
        'select' => 'required|string|max:20',
            ]);

      \Notification::route('mail','anupdgavakar@gmail.com')->notify(new SendContactForm($data));
      return redirect()->route('thanks');

 }



    public function index() {



    $slider = DB::table('slider')->get();
    $testimonial = DB::table('testimonial')->get();
    
   return view('layouts.index', compact('slider','testimonial')); 

    }


    public function projects() {
        $projects = DB::table('projects')->get();
        return view('layouts.projects',compact('projects'));
    }

    
    public function pmsuryaghar() {
        return view('layouts.pmsuryaghar');
    }

    public function hajarkva() {
        return view('layouts.1000kva');
    }

    public function donshekva() {
        return view('layouts.200kva');
    }

    public function shambharkva() {
        return view('layouts.100kva');
    }



    public function tresashtkva() {
        return view('layouts.63kva');
    }

    public function pancheviskva() {
        return view('layouts.25kva');
    }

    public function solakva() {
        return view('layouts.16kva');
    }
    public function rsjpole() {
        return view('layouts.rsjpole');
    }
    public function conductor() {
        return view('layouts.conductor');
    }

    public function cables() {
        return view('layouts.cables');
    }
    public function panels() {
        return view('layouts.panels');
    }
    public function insulators() {
        return view('layouts.insulators');
    }
    public function fabrication() {
        return view('layouts.fabrication');
    }
    public function cablejoiningkit() {
        return view('layouts.cablejoiningkit');
    }
    public function nutbolts() {
        return view('layouts.nutbolts');
    }
    public function giwre() {
        return view('layouts.giwre');
    }
    public function polymers() {
        return view('layouts.polymers');
    }
    public function earthingstrip() {
        return view('layouts.earthingstrip');
    }
    
 
    public function pvs() {
        return view('layouts.pvs');
    }

   

    public function contact() {
        return view('layouts.contact');
    }


    public function article() {

        $article = DB::table('article')->get();
        return view('layouts.article',compact('article')); 
    }


    public function ArticleDetails($id){
        $result = DB::table('article')->where('id', $id)->first();
        return view('layouts.articleDetails',compact('result'))->with('result',$result);
    }


     public function project() {
        $meta = 'Projects';
        // $data = Project::orderBy('id','desc')->get();
        $data = Project::get();
        $seo = array();

        return view('layouts.gallary', compact('meta','seo','data'));
    }



    public function project_detail(Request $request, $id) {
        $meta = 'Project Detail';
        $data = Project::where('id',$id)->first();
        $data_images = ProjectImage::where('project_id',$id)->get();
        $data_videos = ProjectVideos::where('project_id',$id)->get();

        $seo['metatitle'] = $data->metatitle;
        $seo['metakeywords'] = $data->metakeywords;
        $seo['metadescription'] = $data->metadescription;

        return view('layouts.project_detail', compact('meta','seo','data','data_images','data_videos'));
    }


    public function Speaker() {

        $speaker = DB::table('speaker')->get();
        return view('layouts.speaker',compact('speaker')); 
    }


       public function SpeakerDetails($id){
        $result = DB::table('speaker')->where('id', $id)->first();
        return view('layouts.speakerDetails',compact('result'))->with('result',$result);
    }

public function Book() {

        $book = DB::table('book')->get();
        return view('layouts.book',compact('book')); 
    }


       public function BookDetails($id){
        $result = DB::table('book')->where('id', $id)->first();
        return view('layouts.bookDetails',compact('result'))->with('result',$result);
    }
      



    public function skv() {
        return view('layouts.skv');
    }

    public function sd() {
        return view('layouts.sd');
    }

    public function hdpepipe() {
        return view('layouts.hdpepipe');
    }

    public function hdpecoil() {
        return view('layouts.hdpecoil');
    }

    public function sprinklerirrigationsystem() {
        return view('layouts.sprinklerirrigationsystem');
    }

    public function pvcpipe() {
        return view('layouts.pvcpipe');
    }

public function gardenpipe() {
        return view('layouts.gardenpipe');
    }

    public function suction() {
        return view('layouts.suction');
    }

public function upvc() {
        return view('layouts.upvc');
    }

    public function braided() {
        return view('layouts.braided');
    }

    public function ldpe() {
        return view('layouts.ldpe');
    }

    public function rain() {
        return view('layouts.rain');
    }

    public function rrj() {
        return view('layouts.rrj');
    }

    public function epa() {
        return view('layouts.epa');
    }

    public function aboutus() {
        return view('layouts.aboutus');
    }

    public function asp() {
        return view('layouts.aboutus');
    }

    public function cs() {
        $galleries = DB::table('galleries')->get();
        return view('layouts.cs',compact('galleries'));
    }

    public function dv() {
        return view('layouts.dv');
    }

    public function smprk() {
        return view('layouts.smprk');
    }

    public function blog() {
        $blogs = DB::table('blogs')->get();
        return view('layouts.blog',compact('blogs'));
    }

    public function admin() {
        $users = DB::table('users')->paginate(10);
        return view('admin.dashboard')->with('users',$users);
    }
   
    

    public function BlogDetails($id){
        $result = DB::table('blogs')->where('id', $id)->first();
        return view('layouts.blogdetails',compact('result'))->with('result',$result);
    }

    public function gallary() {
        $galleries = DB::table('galleries')->get();
        return view('layouts.gallary',compact('galleries'));
    }

    public function download() {
        $download = DB::table('download')->get();
        return view('layouts.download',compact('download'));
    }


      

        public function video() {
        $meta = 'Video';
        $cms = DB::table('cms')->where('slug','video')->first();
        $data = Video::orderBy('id','desc')->get();
        return view('layouts/video', compact('meta','data'));
    }



    

}