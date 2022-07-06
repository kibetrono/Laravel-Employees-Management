<?php

namespace App\Http\Controllers;

use App\Models\AjaxTest;
use Illuminate\Http\Request;

class AjaxTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("ajax.create");
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

    public function storeAjax(Request $request){
        $Record = new AjaxTest();

        $Record->firstname = $request->firstname;
        $Record->lastname = $request->lastname;
        $Record->email = $request->email;
      

        $Record->save();

        return response()->json($Record);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AjaxTest  $ajaxTest
     * @return \Illuminate\Http\Response
     */
    public function show(AjaxTest $ajaxTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AjaxTest  $ajaxTest
     * @return \Illuminate\Http\Response
     */
    public function edit(AjaxTest $ajaxTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AjaxTest  $ajaxTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AjaxTest $ajaxTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AjaxTest  $ajaxTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(AjaxTest $ajaxTest)
    {
        //
    }
}
