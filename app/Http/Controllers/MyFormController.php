<?php

namespace App\Http\Controllers;

use App\Models\MyForm;
use Illuminate\Http\Request;

class MyFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Users.myForms');
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
        $newForm= New MyForm();
        $newForm->title=$request->title;
        $newForm->description=$request->description;
        $newForm->save();

        return 'Successfully submitted';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyForm  $myForm
     * @return \Illuminate\Http\Response
     */
    public function show(MyForm $myForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyForm  $myForm
     * @return \Illuminate\Http\Response
     */
    public function edit(MyForm $myForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MyForm  $myForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyForm $myForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyForm  $myForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyForm $myForm)
    {
        //
    }
}
