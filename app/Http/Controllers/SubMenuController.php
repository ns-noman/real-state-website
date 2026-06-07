<?php

namespace App\Http\Controllers;

use App\Models\SubMenu;
use App\Models\menu;
use Illuminate\Http\Request;

class SubMenuController extends Controller
{
    public function index()
    {
        $sub_menu = SubMenu::orderBy('id','desc')->get();
        return view('admin.sub-menu.index',compact('sub_menu'));
    }

    public function create()
    {
        $menus = menu::orderBy('name','asc')->get();
        return view('admin.sub-menu.create',compact('menus'));
    }

    public function store(Request $request)
    {
        $menuName = menu::find($request->menu)->name;
        $image = $request->img;
        
        $data = 
        [
            'menuID'=>$request->menu,
            'menuName'=>$menuName,
            'subMenuName'=>$request->submenu,
            'title'=>$request->title,
            'shortDetails'=>$request->shortDescription,
            'longDetails'=>$request->longDescription,
        ];

        if ($image)
        {
            $imgtext = 'submb'. time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('upload/'), $imgtext);
            $data['image'] = $imgtext;
        }
        SubMenu::create($data);
        return redirect('sub-menu');
    }

    public function edit(SubMenu $subMenu)
    {
        $menus = menu::orderBy('name','asc')->get();
        return view('admin.sub-menu.edit',compact('menus','subMenu'));
    }

    public function update(Request $request, SubMenu $subMenu)
    {
        $menuName = menu::find($request->menu)->name;
        $image = $request->img;
        $data = 
        [
            'menuID'=>$request->menu,
            'menuName'=>$menuName,
            'subMenuName'=>$request->submenu,
            'title'=>$request->title,
            'shortDetails'=>$request->shortDescription,
            'longDetails'=>$request->longDescription,
        ];
        if ($image)
        {
            $imageDB = $subMenu->image;
            if($imageDB){
                $file = public_path('upload/').$imageDB;
                unlink($file);
            }
            $imgtext = 'submb'. time().'.'.$image->getClientOriginalExtension();
            $t = $image->move(public_path('upload'), $imgtext);
            $data['image'] = $imgtext;
        }
        $subMenu->update($data);
        return redirect('sub-menu');
    }

    public function destroy(SubMenu $subMenu)
    {
        $imageDB = $subMenu->image;
        if($imageDB){
            public_path('upload/').$imageDB;
        }
        $subMenu->delete();
        return redirect()->back();
    }
}
