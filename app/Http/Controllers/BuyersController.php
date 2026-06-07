<?php

namespace App\Http\Controllers;

use App\Models\Buyers;
use Illuminate\Http\Request;

class BuyersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Buyers::orderBy('readStatus','asc')->get(); 
        return view('admin.buyers.index',compact('data'));
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
        $data =
        [
            'name'=>$request->Dynamicform['name'],
            'profession'=>$request->Dynamicform['profession'],
            'contactno'=>$request->Dynamicform['mobile_number'],
            'email'=>$request->Dynamicform['email_id'],
            'maillingAddress'=>$request->Dynamicform['mailing_address'],
            'preferedLoc'=>$request->Dynamicform['preferred_location'],
            'preferedSize'=>$request->Dynamicform['preferred_size'],
            'carparkingReq'=>$request->Dynamicform['car_parking'],
            'expectedHOD'=>$request->Dynamicform['expected_handover_time'],
            'facing'=>$request->Dynamicform['facing_the_apartment'],
            'preferedFlr'=>$request->Dynamicform['preferred_floor'],
            'numOfbedRoom'=>$request->Dynamicform['minimum_bed_rooms'],
            'numOfBathRoom'=>$request->Dynamicform['minimum_bath_rooms'],
            'readStatus'=>0,
        ];
        $result = Buyers::create($data);
       if($result){
            $msg = "Message Sent Successfully!";  
       }else{
        $msg = "Message Sending Failed!";
       }
        return response()->json(['success'=>$msg]);
    }

    public function markAs($id,$status)
    {
        if($status==0){
            Buyers::find($id)->update([
                'readStatus'=>1,
            ]);
        }else{
            Buyers::find($id)->update([
                'readStatus'=>0
            ]);
        }
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buyers  $buyers
     * @return \Illuminate\Http\Response
     */
    public function show(Buyers $buyers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buyers  $buyers
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyers $buyers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buyers  $buyers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyers $buyers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyers  $buyers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buyers::destroy($id);
        return redirect()->back();
    }
}
