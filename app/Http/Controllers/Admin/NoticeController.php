<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice = Notice::all();
        return view('backend.notice.index',compact('notice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.notice.create');
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
        ]);
         
        $notice = new Notice();
        $notice->title = $request->title;
        $notice->description = $request->description;
        if($request->hasFile('image')){
            $fileName = $request->image;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('notice-image',$newName);
            $notice->image = 'notice-image/' . $newName; 
        }
        $notice->save();
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
        $notice = Notice::find($id);
        return view('backend.notice.show',compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice = Notice::find($id);
        return view('backend.notice.edit',compact('notice'));
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
         
        $notice = Notice::find($id);
        $notice->title = $request->title;
        $notice->description = $request->description;
        if($request->hasFile('image')){
            $fileName = $request->image;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('notice-image',$newName);
            $notice->image = 'notice-image/' . $newName; 
        }
        $notice->update();
        $request->session()->flash('message', 'Record Updated Successfully');
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
        $notice = Notice::find($id);
        $notice->delete();
        return redirect()->back();
    }
}
