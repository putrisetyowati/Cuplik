<?php

namespace App\Http\Controllers\Admin\TentangKami;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kontak = Kontak::all();

        // return view ('admin.kontak.index')    
        //     ->with('kontak', $kontak);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view ('admin.kontak.create');
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
            'title' => 'required',
            'image' => 'required',
            'date' => 'required',
            'time' => 'required',
            'content' => 'required',
        ];

        $messages = [
            'title.required' => 'Title harus diisi',
            'image.required' => 'Image harus diisi',
            'date.required' => 'Date harus diisi',
            'time.required' => 'Time harus diisi',
            'content.required' => 'Content harus diisi',
        ];

        $this->validate($request, $rules, $messages);

        // ubah nama gambar
        $file = $request->image;
        $newName = time() . rand(100, 999) . "." . $file->getClientOriginalExtension();


       $kontak = new Kontak;
       $kontak->title = $request->title;
       $kontak->image = $newName;
       $file->move(public_path() . '/storage/img/kontak', $newName);
       $kontak->date = $request->date;
       $kontak->time = $request->time;
       $kontak->content = $request->content;
       

        // dd($kontak);
    
        $kontak->save();

        return redirect('admin/tentangkami/kontak')->with('status', 'Menu created!');
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
        $kontak = Kontak::findorfail($id);

        return view('admin.kontak.edit')->with('kontak', $kontak);
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
            'title' => 'required',
            'image' => 'required',
            'date' => 'required',
            'time' => 'required',
            'content' => 'required',
        ];

        $messages = [
            'title.required' => 'Title harus diisi',
            'image.required' => 'Image harus diisi',
            'date.required' => 'Date harus diisi',
            'time.required' => 'Time harus diisi',
            'content.required' => 'Content harus diisi',
        ];

        $this->validate($request, $rules, $messages);

        // ubah nama gambar
        $file = $request->image;
        $newName = time() . rand(100, 999) . "." . $file->getClientOriginalExtension();


       $kontak = Kontak::find($id);
       $kontak->title = $request->title;
       $kontak->image = $newName;
       $file->move(public_path() . '/storage/img/kontak', $newName);
       $kontak->date = $request->date;
       $kontak->time = $request->time;
       $kontak->content = $request->content;
       

        // dd($kontak);
    
        $kontak->save();

        return redirect('admin/tentangkami/kontak')->with('status', 'Menu created!');
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
