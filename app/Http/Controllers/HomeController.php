<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\BasicInfo;
use App\Models\Project;
use App\Models\Slider;
use App\Models\SubMenu;
use App\Models\ProjectGallery;
use App\Models\content;

class HomeController extends Controller
{
    
    public function index()
    {
        $projects  = Project::orderBy('id','asc')->limit(6)->get();
        $i = 0;
        foreach($projects as $project)
        {
            $id = $project->id;
            $displayImg = ProjectGallery::where('projectID',$id)->limit(1)->get()[0]->image;
            $projects[$i]['image'] = $displayImg;
            $i++;
        }
        $sliders  = Slider::all();
        $herosec = SubMenu::where('menuID',1)->get();
        $hs2content = content::where('subMenuID',17)->get();
        $aboutus = SubMenu::where('menuID',2)->get();
        $ourClients = content::where('subMenuID',32)->get();
        
        return view('frontend.index',compact('projects','sliders','herosec','hs2content','aboutus','ourClients'));
    }
}
