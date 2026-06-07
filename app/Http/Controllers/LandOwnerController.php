<?php

namespace App\Http\Controllers;

use App\Models\LandOwner;
use Illuminate\Http\Request;

class LandOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = LandOwner::orderBy('readStatus','asc')->get(); 
        return view('admin.landOwners.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function markAs($id,$status)
    {
        if($status==0){
            LandOwner::find($id)->update([
                'readStatus'=>1,
            ]);
        }else{
            LandOwner::find($id)->update([
                'readStatus'=>0
            ]);
        }
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = 
       [
            'name'=>$request->Dynamicform['locality'],
            'contactperson'=>$request->Dynamicform['contact_person'],
            'email'=>$request->Dynamicform['email_id'],
            'contactno'=>$request->Dynamicform['cell_phone'],
            'locality'=>$request->Dynamicform['locality'],
            'address'=>$request->Dynamicform['address_details'],
            'landsize'=>$request->Dynamicform['plot'],
            'roadwidth'=>$request->Dynamicform['road_width'],
            'landCategory'=>$request->Dynamicform['land_category'],
            'facing'=>$request->Dynamicform['fcing'],
            'features'=>$request->Dynamicform['attractive_features'],
            'readStatus'=>0,
       ];
       $result = LandOwner::create($data);
       if($result){
            $msg = "Message Sent Successfully!";  
       }else{
        $msg = "Message Sending Failed!";
       }
        return response()->json(['success'=>$msg]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LandOwner  $landOwner
     * @return \Illuminate\Http\Response
     */
    public function show(LandOwner $landOwner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandOwner  $landOwner
     * @return \Illuminate\Http\Response
     */
    public function edit(LandOwner $landOwner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LandOwner  $landOwner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LandOwner $landOwner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandOwner  $landOwner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        LandOwner::destroy($id);
        return redirect()->back();
    }
}
