<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $download = Download::all();
        return view('backend.notes_download.index',compact('download'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.notes_download.create');
        
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
            'title' => 'required',
            'document' => 'required',
        ]);
        
        $download = new Download();
        $download->title = $request->title;
        if($request->hasFile('document')){
            $fileName = $request->document;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('download-document',$newName);
            $download->document = 'download-document/' . $newName; 
        }
        $download->save();
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
        $download = Download::find($id);
        return view('backend.notes_download.edit',compact('download'));
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
            'title' => 'required',
        ]);
         
        $download = Download::find($id);
        $download->title = $request->title;
        if($request->hasFile('document')){
            $fileName = $request->document;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('download-document',$newName);
            $download->document = 'download-document/' . $newName; 
        }
        $download->update();
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
        $download = Download::find($id);
        $download->delete();
        return redirect()->back();
    }
}
