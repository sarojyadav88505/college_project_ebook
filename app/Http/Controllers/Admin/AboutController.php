<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return view('backend.about_us.index',compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about_us.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'image' => 'required',
        ]);
         
        $about = new About();
        $about->name = $request->name;
        $about->phone = $request->phone;
        $about->location = $request->location;
        if($request->hasFile('image')){
            $fileName = $request->image;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('about-image',$newName);
            $about->image = 'about-image/' . $newName; 
        }
        $about->save();
        $request->session()->flash('message', 'Record Saved Successfully');
        return redirect()->back();
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
        $about = About::find($id);
        return view('backend.about_us.edit',compact('about'));
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
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'location' => 'required',
        ]);
         
        $about = About::find($id);
        $about->name = $request->name;
        $about->phone = $request->phone;
        $about->location = $request->location;
        if($request->hasFile('image')){
            $fileName = $request->image;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('about-image',$newName);
            $about->image = 'about-image/' . $newName; 
        }
        $about->update();
        $request->session()->flash('message', 'Record Saved Successfully');
        return redirect()->back();
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
