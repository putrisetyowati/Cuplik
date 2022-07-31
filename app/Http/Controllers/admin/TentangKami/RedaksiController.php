<?php

namespace App\Http\Controllers\admin\TentangKami;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Redaksi;

class RedaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.tentang-kami.redaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $redaksi = Redaksi::findorfail($id);
        return view ('admin.tentang-kami.redaksi.edit')
        ->with('redaksi', $redaksi);
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
            'title' => 'required|max:255',
             'date' => 'required',
             'time' => 'required',
             'content' => 'required'
             
         ];
 
         $messages = [
             'title.required' => 'Title harus diisi',
             'title.max' => 'Judul terlalu panjang ',
             'date.required' => 'Tanggal harus diisi',
             'time.required' => 'Time harus diisi',
             'content.required' => 'Content harus diisi'
         ];
 
         $this->validate($request, $rules, $messages);
 
          // ubah nama gambar
        //   $file = $request->image;
        //   $newName = time() . rand(100, 999) . "." . $file->getClientOriginalExtension();
  
 
         $redaksi = Redaksi::find($id);
         $redaksi->title = $request->title;
         $redaksi->date = $request->date;
         $redaksi->time = $request->time;
         $redaksi->content = $request->content;
 
        //  if ($request->file('image')) {
        //     $data['image'] = $request->file('image')->store('storage/img/redaksi', 'public');
        // }
        // if ($request->file(null)) {
        // }

        if($image = $request->file('image')) {
        $destinationPath = 'storage/img/redaksi/';
        $profileImage = date('YmdHis')."." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";

        $redaksi->image = $profileImage;
        }else{
            unset($redaksi['image']);
        }
 
        //  dd($redaksi->image);
     
          $redaksi->update();
 
         return redirect()->back()->with('status', 'Redaksi created!');
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
