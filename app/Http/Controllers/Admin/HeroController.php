<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
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
        return view('admin.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate(
        //     $request,
        //     [
        //         'image' => 'required|mimes:png,jpg,jpeg|max:20000',
        //         'cv_file' => 'required|mimes:pdf|max:20000',
        //         'title' => 'required',
        //         'description' => 'required'

        //     ],
        //     [
        //         'image.required'             => 'Field required',
        //         'cv_file.required'             => 'Field required',
        //         'title.required'             => 'Field required',
        //         'description.required'             => 'Field required',

        //     ]

        // );
        if($request->hasFile('image')) {
            $file = $request->file('image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/admin/image' ;
            $file->move($destinationPath,$fileName);
    	}
        if($request->hasFile('cv_file')) {
            $file = $request->file('cv_file') ;
            $fileName1 = $file->getClientOriginalName() ;
            $destinationPath1 = public_path().'/admin/cv' ;
            $file->move($destinationPath1,$fileName1);
    	}


        Hero::insert([
            'image' => 'admin/image/'.$fileName,
            'cv_file' => $fileName1,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Data added Successfully');
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
