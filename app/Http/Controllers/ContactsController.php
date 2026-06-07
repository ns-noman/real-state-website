<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\SubMenu;
use App\Models\content;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $basicInfo = BasicInfo::find(1);
        // Session::put('basicInfo',$basicInfo);
        // $submenu['home'] = SubMenu::where('menuID',1)->get();
        // $submenu['aboutUs'] = SubMenu::where('menuID',2)->get();
        // $submenu['project'] = SubMenu::where('menuID',3)->get();
        // $submenu['newsEvents'] = SubMenu::where('menuID',4)->get();
        // $submenu['contacts'] = SubMenu::where('menuID',5)->get();
        // Session::put('submenu',$submenu);
        // $allLocations = Project::select('area')->get();
        // Session::put('allLocations',$allLocations);
        
        $subMenu = SubMenu::find($id);
        $content = content::where('subMenuID',$id)->get();
        if($id==13){
            $view = 'landowners';
        }
        elseif($id==14){
            $view = 'buyers';
        }
        elseif($id==15){
            $view = 'customers';
        }
        elseif($id==16){
            $view = 'contactus';
        }
        return view('frontend.contact.'.$view,compact('subMenu','content'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function show(Contacts $contacts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacts $contacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacts $contacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacts  $contacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacts $contacts)
    {
        //
    }
}
