<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LineAdvertisement;

class LineAdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $line_advertisement = LineAdvertisement::all();
        return view ('admin.iklan-baris.index')->with('line_advertisement', $line_advertisement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.iklan-baris.create');
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
            // 'user_id' => 'required',
            'content' => 'required',
           
        ];

        $messages = [
            'content.required' => 'Konten harus diisi',
            // 'user_id.required' => 'Nama Negara harus diisi',
            
        ];

        $this->validate($request, $rules, $messages);


        $line_advertisement = new LineAdvertisement;
        $line_advertisement->content = $request->content;
        // $line_advertisement->user_id = $request->user_id;
       

        // dd($news);
    
         $line_advertisement->save();

        return redirect('admin/iklan-baris')->with('status', 'Iklan Baris created!');
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
        $line_advertisement = LineAdvertisement::findorfail($id);

        return view('admin.Iklan-baris.edit')->with('line_advertisement', $line_advertisement);
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
            // 'user_id' => 'required',
            'content' => 'required',
           
        ];

        $messages = [
            'content.required' => 'Konten harus diisi',
            // 'user_id.required' => 'Nama Negara harus diisi',
            
        ];

        $this->validate($request, $rules, $messages);


        $line_advertisement = LineAdvertisement::find($id);
        $line_advertisement->content = $request->content;
        // $line_advertisement->user_id = $request->user_id;
       

        // dd($news);
    
         $line_advertisement->save();

        return redirect('admin/iklan-baris')->with('status', 'Iklan Baris Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LineAdvertisement::find($id)->delete();
        return back()->with('status', 'Iklan Baris deleted!');
    }
}
