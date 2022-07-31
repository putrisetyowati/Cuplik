<?php

namespace App\Http\Controllers\editor\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubTag;
use App\Models\Tag;
use App\Models\Menu;


class TagSubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tagsub = SubTag::with('menu')
            ->with('tag')
            ->latest()
            ->paginate(5);
        
        return view ('editor.tag-sub.index')    
            ->with('tagsub', $tagsub);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        $tags = Tag::all();

        return view ('editor.tag-sub.create')
            ->with('menus', $menus)
            ->with('tags', $tags);
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
            'short' => 'required',
            'id_menu' => 'required',
            'id_tag' => 'required',
            'is_active' => 'required',
        ];

        $messages = [
            'short.required' => 'Sortir harus diisi',
            'id_menu.required' => 'Lebar harus diisi',
            'id_tag.required' => 'Lebar harus numerik',
            'is_active.required' => 'Default harus diisi',
        ];

        $this->validate($request, $rules, $messages);


        $tagsub = new SubTag;
        $tagsub->short = $request->short;
        $tagsub->id_menu = $request->id_menu;
        $tagsub->id_tag = $request->id_tag;
        $tagsub->is_active = $request->is_active;

        // dd($tagsub);
    
        $tagsub->save();

        return redirect('editor/setting/tag-sub')->with('status', 'Tag Sub created!');
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
        $tagsub = SubTag::findorfail($id);
        $menus = Menu::all();
        $tags = Tag::all();

        return view('editor.tag-sub.edit')->with('tagsub', $tagsub)
        ->with('menus', $menus)
        ->with('tags', $tags);
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
            'short' => 'required',
            'id_menu' => 'required',
            'id_tag' => 'required',
            'is_active' => 'required',
        ];

        $messages = [
            'short.required' => 'Sortir harus diisi',
            'id_menu.required' => 'Lebar harus diisi',
            'id_tag.required' => 'Lebar harus numerik',
            'is_active.required' => 'Default harus diisi',
        ];

        $this->validate($request, $rules, $messages);


        $tagsub = SubTag::find($id);
        $tagsub->short = $request->short;
        $tagsub->id_menu = $request->id_menu;
        $tagsub->id_tag = $request->id_tag;
        $tagsub->is_active = $request->is_active;

        // dd($tagsub);
    
        $tagsub->save();

        return redirect('editor/setting/tag-sub')->with('status', 'Tag Sub update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subtag::find($id)->delete();
        return back()->with('status', 'Sub-tag deleted!');
    }
}
