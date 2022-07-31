<?php

namespace App\Http\Controllers\editor\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = Tag::all();
        
        return view ('editor.tag.index')    
            ->with('tag', $tag);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('editor.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',            
            'is_active' => 'required',
        ];

        $messages = [
            'name.required' => 'Nama harus diisi',
            'name.max' => 'Nama terlalu panjang ',
            'is_active.required' => 'Default harus diisi',
        ];

        $this->validate($request, $rules, $messages);


        $tag = new Tag;        
        $tag->name = $request->name;
        $tag->is_active = $request->is_active;

        // dd($menu);
    
        $tag->save();

        return redirect('editor/setting/tag')->with('status', 'tag created!');
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
        $tag = Tag::findorfail($id);

        return view('editor.tag.edit')->with('tag', $tag);
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
        $rules = [
            'name' => 'required|max:255',            
            'is_active' => 'required',
        ];

        $messages = [
            'name.required' => 'Nama harus diisi',
            'name.max' => 'Nama terlalu panjang ',
            'is_active.required' => 'Default harus diisi',
        ];

        $this->validate($request, $rules, $messages);


        $tag = Tag::find($id);        
        $tag->name = $request->name;
        $tag->is_active = $request->is_active;

        // dd($menu);
    
        $tag->save();

        return redirect('editor/setting/tag')->with('status', 'tag created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tag::find($id)->delete();
        return back()->with('status', 'Tag deleted!');
    }
}
