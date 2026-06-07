<?php

namespace App\Http\Controllers;

use App\Models\BasicInfo;
use Illuminate\Http\Request;

class BasicInfoController extends Controller
{
    public function index()
    {   
        $basicInfo = BasicInfo::find(1);
        return view('admin.basicInfo.index',compact('basicInfo'));
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
    }
    public function show(BasicInfo $basicInfo)
    {
        
    }
    public function edit(BasicInfo $basicInfo)
    {  
        $basicInfo = BasicInfo::find(1);
        return view('admin.basicInfo.edit',compact('basicInfo'));
    }
    
    public function update(Request $request,$id)
    {
        $title = $request->title;
        $phone = $request->phone;
        $email = $request->email;
        $address = $request->address;
        $fbLink = $request->fbLink;
        $instraLink = $request->instraLink;
        $youtubeLink = $request->youtubeLink;
        $favicon = $request->favicon;
        $logo = $request->logo;
        
        $basicInfo = BasicInfo::find($id);
        $data =
        [
            'title'=>$title,
            'contact'=>$phone,
            'email'=>$email,
            'address'=>$address,
            'fbLink'=>$fbLink,
            'instraLink'=>$instraLink,
            'youTubeLink'=>$youtubeLink,
        ];
        if(!empty($favicon)){

            $faviconImgName = "fav". time() . '.' .$favicon->getClientOriginalExtension();
            $favicon->move(public_path('upload'),$faviconImgName);
            $oldFavIconLink = public_path('upload/'). $basicInfo->favIcon;
            unlink($oldFavIconLink);
            $data['favIcon'] = $faviconImgName;
        }
        if(!empty($logo)){

            $logoImgName = "logo". time() . '.' .$logo->getClientOriginalExtension();
            $logo->move(public_path('upload'),$logoImgName);
            $oldLogoLink = public_path('upload/'). $basicInfo->logo;
            unlink($oldLogoLink);
            $data['logo'] = $logoImgName;
        }
        $basicInfo->update($data);
        return redirect('basicinfo');
    }
    
    public function destroy(BasicInfo $basicInfo)
    {
        //
    }
}
