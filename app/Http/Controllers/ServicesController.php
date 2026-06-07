<?php

namespace App\Http\Controllers;
use App\Models\SubMenu;
use App\Models\content;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services($id){
        $subMenu = SubMenu::find($id);
        $contents = content::where('subMenuID',$id)->get();
        return view('frontend.services.services', compact('subMenu','contents'));
    }
}
