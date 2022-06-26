<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Position;

class PosisiIklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $position = Position::all();
        
        return view ('admin.posisi-iklan.index')    
            ->with('position', $position);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.posisi-iklan.create');
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
            'sortir' => 'required',
            'lebar' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'is_active' => 'required',
        ];

        $messages = [
            'sortir.required' => 'Sortir harus diisi',
            'lebar.required' => 'Lebar harus diisi',
            'lebar.numeric' => 'Lebar harus numerik',            
            'tinggi.required' => 'Tinggi harus diisi',
            'tinggi.numeric' => 'Tinggi harus numeric',
            'is_active.required' => 'Default harus diisi',
        ];

        $this->validate($request, $rules, $messages);


        $position = new Position;
        $position->sortir = $request->sortir;
        $position->lebar = $request->lebar;
        $position->tinggi = $request->tinggi;
        $position->is_active = $request->is_active;

        // dd($position);
    
        $position->save();

        return redirect('admin/setting/posisi-iklan')->with('status', 'Position created!');
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
        $position = Position::findorfail($id);

        return view('admin.posisi-iklan.edit')->with('position', $position);
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
            'sortir' => 'required',
            'lebar' => 'required|numeric',
            'tinggi' => 'required|numeric',
            'is_active' => 'required',
        ];

        $messages = [
            'sortir.required' => 'Sortir harus diisi',
            'lebar.required' => 'Lebar harus diisi',
            'lebar.numeric' => 'Lebar harus numerik',            
            'tinggi.required' => 'Tinggi harus diisi',
            'tinggi.numeric' => 'Tinggi harus numeric',
            'is_active.required' => 'Default harus diisi',
        ];

        $this->validate($request, $rules, $messages);


        $position = Position::find($id);
        $position->sortir = $request->sortir;
        $position->lebar = $request->lebar;
        $position->tinggi = $request->tinggi;
        $position->is_active = $request->is_active;

        // dd($position);
    
        $position->save();

        return redirect('admin/setting/posisi-iklan')->with('status', 'Position created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Position::find($id)->delete();
        return back()->with('status', 'Position deleted!');
    }
}
