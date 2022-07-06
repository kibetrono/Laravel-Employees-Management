<?php

namespace App\Http\Controllers;

use App\Models\PopErros;
use Illuminate\Http\Request;

class PopErrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pop-erros.create');

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

        // dd($request->all());
        $request->validate([
            'name'  => 'required',
            'serial' => 'unique:pop_erros',   
             ]);
        $input = $request->except('_method', '_token');

        PopErros::updateOrCreate($input);
        return response()->json(['success' => 'Added new student']);
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'serial' => 'unique:pop_erros',
           
        // ]);

        // $user= new PopErros();
        // $user->name=$request->name;
        // $user->serial=$request->serial;
        // $user->save();

        // return "Successful";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PopErros  $popErros
     * @return \Illuminate\Http\Response
     */
    public function show(PopErros $popErros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PopErros  $popErros
     * @return \Illuminate\Http\Response
     */
    public function edit(PopErros $popErros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PopErros  $popErros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PopErros $popErros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PopErros  $popErros
     * @return \Illuminate\Http\Response
     */
    public function destroy(PopErros $popErros)
    {
        //
    }
}
