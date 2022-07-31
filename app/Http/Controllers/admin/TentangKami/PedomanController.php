<?php

namespace App\Http\Controllers\admin\TentangKami;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedoman;

class PedomanController extends Controller
{
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
        return view ('admin.tentang-kami.pedoman.create');
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
        $pedoman = Pedoman::findorfail($id);
        return view ('admin.tentang-kami.pedoman.edit')
        ->with('pedoman', $pedoman);
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
 
  
 
         $pedoman = Pedoman::find($id);
         $pedoman->title = $request->title;
         $pedoman->date = $request->date;
         $pedoman->time = $request->time;
         $pedoman->content = $request->content;
 
         if($image = $request->file('image')) {
            $destinationPath = 'storage/img/pedoman/';
            $profileImage = date('YmdHis')."." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
    
            $pedoman->image = $profileImage;
            }else{
                unset($pedoman['image']);
            }
 
        //   dd($pedoman->image);
     
          $pedoman->update();
 
         return redirect()->back()->with('status', 'Pedoman created!');
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
