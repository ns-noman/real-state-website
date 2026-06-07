<?php

namespace App\Http\Controllers;
use App\Models\SubMenu;
use App\Models\Project;
use App\Models\ProjectGallery;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $data  = Project::orderBy('id','desc')->get();
        return view('admin.projects.index',compact('data'));
    }
    public function viewProjects()
    {
        $submenus  = SubMenu::where('menuID',3)->orderBy('id','asc')->get();
        $projects  = Project::orderBy('id','desc')->get();
        $i = 0;
        foreach($projects as $project)
        {
            $id = $project->id;
            $displayImg = ProjectGallery::where('projectID',$id)->limit(1)->get()[0]->image;
            $projects[$i]['image'] = $displayImg;
            $i++;
        }
        
        return view('frontend.projects',compact('projects', 'submenus'));

    }
    public function projectDetails($id)
    {
        $project  = Project::find($id);
        $image = ProjectGallery::where('projectID',$id)->get();
        return view('frontend.projectsdetails',compact('project','image'));
    }

    public function proImgDel($id)
    {
        $image = ProjectGallery::find($id)->image;
        ProjectGallery::destroy($id);
        unlink(public_path('upload/').$image);
        return redirect()->back();
    }

    public function projectSearch($project , $typeID, $proLoc)
    {
        if($project==0 && $typeID==0 && $proLoc==0)
        {
            $resultProject = Project::orderBy('id','desc')->get();
        }
        elseif($typeID!=0 && $proLoc!=0)
        {
            $resultProject = Project::where('typeID','=',$typeID)->where('area','=',$proLoc)->orderBy('id','desc')->get();
        }
        elseif($project=!0 && $typeID==0 && $proLoc==0)
        {
            $resultProject = Project::where('name','like','%'.$project.'%')->orderBy('id','desc')->get();
        }
        elseif($project=!0 && $typeID!=0 && $proLoc==0)
        {
            $resultProject = Project::where('name','like','%'.$project.'%')->where('typeID','=',$typeID)->orderBy('id','desc')->get();
        }
        elseif($project=!0 && $typeID!=0 && $proLoc!=0)
        {
            $resultProject = Project::where('name','like','%'.$project.'%')->where('typeID','=',$typeID)->where('area','=',$proLoc)->orderBy('id','desc')->get();
        }
        else
        {
            $resultProject = Project::orderBy('id','desc')->get();
        }
        $i = 0;
        foreach($resultProject as $value)
        {
            $img = ProjectGallery::where('projectID', $value->id)->limit(1)->get();
            $resultProject[$i]['image'] = $img[0]->image;
            $i++;
        }

        return $resultProject;
    }
    public function create()
    {
        $subcats = SubMenu::where('menuID',3)->get();
        return view('admin.projects.create',compact('subcats'));
    }


    public function store(Request $request)
    {
        $projectname =$request->projectname;
        $address =$request->address;
        $area =$request->area;
        $location =$request->location;
        $details =$request->details;
        $feature =$request->feature;
        $qoute =$request->qoute;
        $categoryID = $request->status;
        $categoryName = SubMenu::find($request->status)->subMenuName;
        $images =$request->images;
        $projData = 
        [
            'name'=>$projectname,
            'address'=>$address,
            'area'=>$area,
            'locationLink'=>$location,
            'details'=>$details,
            'features'=>$feature,        
            'qoute'=>$qoute,
            'categoryID'=>$categoryID,
            'categoryName'=>$categoryName
        ];
        $Project = Project::create($projData);
        $projectID = $Project->id;
        $i = 0;
        foreach($images as $img)
        {
            $imagesPro = 'prj'. time(). $i .'.'.$img->getClientOriginalExtension();
            $img->move(public_path('upload/'), $imagesPro);
            $data = 
            [
                'projectID'=>$projectID,
                'image'=>$imagesPro
            ];
            ProjectGallery::create($data);
            $i++;
        }
        return redirect('admin/projects');
    }

    public function show($id)
    {
        $data = ProjectGallery::where('projectID',$id)->get();
        return view('admin.projects.view-img',compact('data'));
    }

    public function edit(Project $project)
    {
        $projectMenu = SubMenu::where('menuID',3)->get();
        return view('admin.projects.edit',compact('projectMenu','project'));
    }

    public function update(Request $request, Project $project)
    {
        $projectname =$request->projectname;
        $address =$request->address;
        $area =$request->area;
        $location =$request->location;
        $details =$request->details;
        $feature =$request->feature;
        $qoute =$request->qoute;
        $categoryID = $request->status;
        $categoryName = SubMenu::find($request->status)->subMenuName;
        $images =$request->images;
        $projData = 
        [
            'name'=>$projectname,
            'address'=>$address,
            'area'=>$area,
            'locationLink'=>$location,
            'details'=>$details,
            'features'=>$feature,        
            'qoute'=>$qoute,
            'categoryID'=>$categoryID,
            'categoryName'=>$categoryName
        ];

        $project->update($projData);
        $projectID = $project->id;
        $i = 0;

        if(!empty($images)){
            foreach($images as $img){
                $imagesPro = 'prj'. time(). $i .'.'.$img->getClientOriginalExtension();
                $img->move(public_path('upload/'), $imagesPro);
                $data = 
                [
                    'projectID'=>$projectID,
                    'image'=>$imagesPro
                ];
                ProjectGallery::create($data);
                $i++;
            }
        }
        return redirect('admin/projects');
    }

    public function destroy(Project $project)
    {
        $proID = $project->id;
        $project->delete();
        $images = ProjectGallery::where('projectID',$proID)->get();
        foreach($images as $value)
        {
            $image = $value->image;
            unlink(public_path('upload/'.$image));
        }
        return redirect('admin/projects');
    }
}
