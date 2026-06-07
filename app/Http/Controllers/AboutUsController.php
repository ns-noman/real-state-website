<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\content;
use App\Models\BasicInfo;
use App\Models\Project;
class AboutUsController extends Controller
{
    public function aboutus($id){
        $subMenu = SubMenu::find($id);
        $content = content::where('subMenuID',$id)->get();
        if($id==2){
            $view = 'ourStory';
        }
        elseif($id==3){
            $view = 'ourMis_vis';
        }
        elseif($id==4){
            $view = 'boardOfD';
        }
        elseif($id==5){
            $view = 'management-team';
        }
        elseif($id==6){
            $view = 'companies';
        }
        elseif($id==7){
            $view = 'our-client';
        }
        elseif($id==8){
            $view = 'csr';
        }
        return view('frontend.aboutUs.'.$view,compact('subMenu','content'));
    }
}
