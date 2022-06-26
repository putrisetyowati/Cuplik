<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();

        return view ('admin.menu.index')    
            ->with('menu', $menu);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.menu.create');
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
            'short' => 'required|numeric',
            'name' => 'required|max:255',
            'link' => 'required|max:255',
            'level' => 'required|numeric',
            'is_active' => 'required',
        ];

        $messages = [
            'short.required' => 'Short harus diisi',
            'short.numeric' => 'Short harus numerik',
            'name.required' => 'Nama harus diisi',
            'name.max' => 'Nama terlalu panjang ',
            'link.required' => 'Link harus diisi',
            'link.max' => 'Link terlalu panjang',
            'level.required' => 'Level harus diisi',
            'level.numeric' => 'Level harus numerik',
            'is_active.required' => 'Default harus diisi',
        ];

        $this->validate($request, $rules, $messages);


        $menu = new Menu;
        $menu->short = $request->short;
        $menu->name = $request->name;
        $menu->link = $request->link;
        $menu->level = $request->level;
        $menu->is_active = $request->is_active;

        // dd($menu);
    
        $menu->save();

        return redirect('admin/setting/menu')->with('status', 'Menu created!');
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
        $menu = Menu::findorfail($id);

        return view('admin.menu.edit')->with('menu', $menu);
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
            'short' => 'required|numeric',
            'name' => 'required|max:255',
            'link' => 'required|max:255',
            'level' => 'required|numeric',
            'is_active' => 'required',
        ];

        $messages = [
            'short.required' => 'Short harus diisi',
            'short.numeric' => 'Short harus numerik',
            'name.required' => 'Nama harus diisi',
            'name.max' => 'Nama terlalu panjang ',
            'link.required' => 'Link harus diisi',
            'link.max' => 'Link terlalu panjang',
            'level.required' => 'Level harus diisi',
            'level.numeric' => 'Level harus numerik',
            'is_active.required' => 'Default harus diisi',
        ];

        $this->validate($request, $rules, $messages);


        $menu = Menu::find($id);
        $menu->short = $request->short;
        $menu->name = $request->name;
        $menu->link = $request->link;
        $menu->level = $request->level;
        $menu->is_active = $request->is_active;

        // dd($menu);
    
        $menu->save();

        return redirect('admin/setting/menu')->with('status', 'Menu created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Covid::find($id)->delete();
        return back()->with('status', 'Menu deleted!');
    }
}
