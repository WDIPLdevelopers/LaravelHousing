<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reviewby;
use App\Programtype;
use App\Reviewtype;
use App\Actiontype;
use App\reviews;

class HousingReview extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $data = Reviewby::pluck('reviwedbyname','id');
        $reviewType = Reviewtype::pluck('reviewtypename','id');
        $programType = Programtype::pluck('programtypename','id');
        $actionType = Actiontype::pluck('actiontypename','id');
        return view('NewReview')->with([
            'data'=>$data,
            'reviewType'=>$reviewType,
            'programType'=>$programType,
            'actionType'=>$actionType
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new reviews();
        
        $store->reviewdate = $request->reviewdate;
        $store->reviewbyid = $request->reviewbyid;
        $store->reviewtypeid = $request->reviewtypeid;
        $store->programtypeid = $request->programtypeid;
        $store->actiontypeid = $request->actiontypeid;
        $store->efectiveactiondate = $request->efectiveactiondate;
        $store->annualinceptiondate = $request->annualinceptiondate;
        $store->failedinceptiondate = $request->failedinceptiondate;
        $store->save();
        
        return redirect()->route('review.create');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
