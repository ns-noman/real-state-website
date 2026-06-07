<?php

namespace App\Http\Controllers;

use App\Models\content;
use App\Models\menu;
use App\Models\SubMenu;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $data = content::orderBy('id','desc')->get();
        return view('admin.contents.index',compact('data'));
    }
    public function create()
    {
        $menus = menu::orderBy('name','asc')->get();
        return view('admin.contents.create',compact('menus'));
    }
    public function subMenuLoad($id)
    {
        return $submenus = SubMenu::where('menuID',$id)->orderBy('subMenuName','asc')->get();
    }

    public function store(Request $request)
    {
        $menuName = menu::find($request->menu)->name;
        $subMenuName = SubMenu::find($request->submenu)->subMenuName;
        $image = $request->img;

        $data = 
        [
            'mainMenuID'=>$request->menu,
            'mainMenuName'=>$menuName,
            'subMenuID'=>$request->submenu,
            'subMenuName'=>$subMenuName,
            'title'=>$request->title,
            'shortDetails'=>$request->shortDescription,
            'longDetails'=>$request->longDescription,
        ];

        if ($image)
        {
            $imgtext = 'contImg'. time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/'), $imgtext);
            $data['image'] = $imgtext;
        }
        content::create($data);
        return redirect('contents');
    }

    public function show(content $content)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(content $content)
    {
        $menus = menu::orderBy('name','asc')->get();
        $submenus = SubMenu::where('menuID',$content->mainMenuID)->orderBy('subMenuName','asc')->get();
        return view('admin.contents.edit',compact('menus','submenus','content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, content $content)
    {
        $menuName = menu::find($request->menu)->name;
        $subMenuName = SubMenu::find($request->submenu)->subMenuName;
        $image = $request->img;
        $data = 
        [
            'mainMenuID'=>$request->menu,
            'mainMenuName'=>$menuName,
            'subMenuID'=>$request->submenu,
            'subMenuName'=>$subMenuName,
            'title'=>$request->title,
            'shortDetails'=>$request->shortDescription,
            'longDetails'=>$request->longDescription,
        ];
        if ($image)
        {
            $imageDB = $content->image;
            if($imageDB){
                unlink(public_path('upload/').$imageDB);
            }
            $imgtext = 'contImg'. time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/'), $imgtext);
            $data['image'] = $imgtext;
        }
        $content->update($data);
        return redirect('contents');
    }
    
    public function destroy(content $content)
    {
        $imageDB = $content->image;
        if($imageDB){
            unlink(public_path('upload/').$imageDB);
        }
        $content->delete();
        return redirect()->back();
    }
}
