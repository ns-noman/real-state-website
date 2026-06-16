<?php

namespace App\Http\Controllers;
use App\Models\SubMenu;
use App\Models\Project;
use App\Models\ProjectGallery;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Helper function to upload image to projects folder
     */
    private function uploadImage($file, $fieldName)
    {
        if (!$file) {
            return null;
        }
        
        // Create projects folder if it doesn't exist
        $uploadPath = public_path('upload/projects');
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }
        
        // Generate unique filename
        $filename = $fieldName . '_' . time() . '.' . $file->getClientOriginalExtension();
        $file->move($uploadPath, $filename);
        
        return $filename;
    }

    /**
     * Helper function to delete image from projects folder
     */
    private function deleteImage($imageName)
    {
        if ($imageName) {
            $imagePath = public_path('upload/projects/' . $imageName);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }

    public function index()
    {
        $data  = Project::orderBy('id','desc')->get();
        return view('admin.projects.index',compact('data'));
    }

    public function viewProjects()
    {
        $submenus  = SubMenu::where('menuID',3)->orderBy('id','asc')->get();
        $projects  = Project::orderBy('id','desc')->get();
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
            if($img->isNotEmpty()) {
                $resultProject[$i]['image'] = $img[0]->image;
            } else {
                $resultProject[$i]['image'] = $value->thumbnail_img;
            }
            $i++;
        }

        return $resultProject;
    }

    public function create()
    {
        $projectMenu = SubMenu::where('menuID',3)->get();
        return view('admin.projects.create',compact('projectMenu'));
    }

    public function store(Request $request)
    {
        // Validate required fields
        $validated = $request->validate([
            'projectname' => 'required|string',
            'address' => 'required|string',
            'area' => 'required|string',
            'qoute' => 'required|string',
            'details' => 'required|string',
            'feature' => 'required|string',
            'status' => 'required|exists:sub_menus,id',
            'images' => 'required|array|min:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB max
            'thumbnail_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'background_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'ataglance_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'features_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'booknow_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $projectname = $request->projectname;
        $address = $request->address;
        $area = $request->area;
        $location = $request->location;
        $details = $request->details;
        $feature = $request->feature;
        $qoute = $request->qoute;
        $categoryID = $request->status;
        $categoryName = SubMenu::find($request->status)->subMenuName;

        // Upload project specific images
        $thumbnailImg = $this->uploadImage($request->file('thumbnail_img'), 'thumbnail');
        $backgroundImg = $this->uploadImage($request->file('background_img'), 'background');
        $ataglanceImg = $this->uploadImage($request->file('ataglance_img'), 'ataglance');
        $featuresImg = $this->uploadImage($request->file('features_img'), 'features');
        $booknowImg = $this->uploadImage($request->file('booknow_img'), 'booknow');

        $projData = [
            'name' => $projectname,
            'address' => $address,
            'area' => $area,
            'locationLink' => $location,
            'details' => $details,
            'features' => $feature,        
            'qoute' => $qoute,
            'categoryID' => $categoryID,
            'categoryName' => $categoryName,
            'thumbnail_img' => $thumbnailImg,
            'background_img' => $backgroundImg,
            'ataglance_img' => $ataglanceImg,
            'features_img' => $featuresImg,
            'booknow_img' => $booknowImg,
        ];

        $project = Project::create($projData);
        $projectID = $project->id;

        // Upload gallery images
        $images = $request->file('images');
        if (!empty($images)) {
            $i = 0;
            foreach($images as $img) {
                $imagesPro = 'gallery_' . $projectID . '_' . time() . '_' . $i . '.' . $img->getClientOriginalExtension();
                $uploadPath = public_path('upload/projects');
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }
                $img->move($uploadPath, $imagesPro);
                
                $data = [
                    'projectID' => $projectID,
                    'image' => $imagesPro
                ];
                ProjectGallery::create($data);
                $i++;
            }
        }

        return redirect('admin/projects')->with('success', 'Project created successfully!');
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
        // Validate required fields
        $validated = $request->validate([
            'projectname' => 'required|string',
            'address' => 'required|string',
            'area' => 'required|string',
            'qoute' => 'required|string',
            'details' => 'required|string',
            'feature' => 'required|string',
            'status' => 'required|exists:sub_menus,id',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB max
            'thumbnail_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'background_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'ataglance_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'features_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'booknow_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $projectname = $request->projectname;
        $address = $request->address;
        $area = $request->area;
        $location = $request->location;
        $details = $request->details;
        $feature = $request->feature;
        $qoute = $request->qoute;
        $categoryID = $request->status;
        $categoryName = SubMenu::find($request->status)->subMenuName;

        // Handle project specific images (delete old and upload new)
        $thumbnailImg = $project->thumbnail_img;
        if ($request->hasFile('thumbnail_img')) {
            $this->deleteImage($thumbnailImg);
            $thumbnailImg = $this->uploadImage($request->file('thumbnail_img'), 'thumbnail');
        }

        $backgroundImg = $project->background_img;
        if ($request->hasFile('background_img')) {
            $this->deleteImage($backgroundImg);
            $backgroundImg = $this->uploadImage($request->file('background_img'), 'background');
        }

        $ataglanceImg = $project->ataglance_img;
        if ($request->hasFile('ataglance_img')) {
            $this->deleteImage($ataglanceImg);
            $ataglanceImg = $this->uploadImage($request->file('ataglance_img'), 'ataglance');
        }

        $featuresImg = $project->features_img;
        if ($request->hasFile('features_img')) {
            $this->deleteImage($featuresImg);
            $featuresImg = $this->uploadImage($request->file('features_img'), 'features');
        }

        $booknowImg = $project->booknow_img;
        if ($request->hasFile('booknow_img')) {
            $this->deleteImage($booknowImg);
            $booknowImg = $this->uploadImage($request->file('booknow_img'), 'booknow');
        }

        $projData = [
            'name' => $projectname,
            'address' => $address,
            'area' => $area,
            'locationLink' => $location,
            'details' => $details,
            'features' => $feature,        
            'qoute' => $qoute,
            'categoryID' => $categoryID,
            'categoryName' => $categoryName,
            'thumbnail_img' => $thumbnailImg,
            'background_img' => $backgroundImg,
            'ataglance_img' => $ataglanceImg,
            'features_img' => $featuresImg,
            'booknow_img' => $booknowImg,
        ];

        $project->update($projData);
        $projectID = $project->id;

        // Handle gallery images (only add new ones if uploaded)
        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $i = 0;
            foreach($images as $img) {
                $imagesPro = 'gallery_' . $projectID . '_' . time() . '_' . $i . '.' . $img->getClientOriginalExtension();
                $uploadPath = public_path('upload/projects');
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath, 0755, true);
                }
                $img->move($uploadPath, $imagesPro);
                
                $data = [
                    'projectID' => $projectID,
                    'image' => $imagesPro
                ];
                ProjectGallery::create($data);
                $i++;
            }
        }

        return redirect('admin/projects')->with('success', 'Project updated successfully!');
    }

    public function destroy(Project $project)
    {
        $proID = $project->id;

        // Delete project specific images
        $this->deleteImage($project->thumbnail_img);
        $this->deleteImage($project->background_img);
        $this->deleteImage($project->ataglance_img);
        $this->deleteImage($project->features_img);
        $this->deleteImage($project->booknow_img);

        // Delete gallery images
        $galleryImages = ProjectGallery::where('projectID', $proID)->get();
        foreach($galleryImages as $value) {
            $this->deleteImage($value->image);
            ProjectGallery::destroy($value->id);
        }

        // Delete project record
        $project->delete();

        return redirect('admin/projects')->with('success', 'Project deleted successfully!');
    }
}