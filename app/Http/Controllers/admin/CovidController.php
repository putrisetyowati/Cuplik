<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Covid;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covid = Covid::all();
        return view ('admin.covid.index')->with('covid', $covid);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.covid.create');
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
            'kode' => 'required',
            'name' => 'required',
            'positive' => 'required',
            'sembuh' => 'required|max:255',
            'dirawat' => 'required',
            'meninggal' => 'required',
            
        ];

        $messages = [
            'kode.required' => 'Kode harus diisi',
            'name.required' => 'Nama Negara harus diisi',
            'posive.required' => 'Jumlah positive harus diisi',
            'sembuh.required' => 'Jumlah sembuh terlalu panjang ',
            'dirawat.required' => 'Jumlah dirawat harus diisi',
            'meninggal.required' => 'Jumlah meninggal harus diisi',
        ];

        $this->validate($request, $rules, $messages);


        $covid = new Covid;
        $covid->kode = $request->kode;
        $covid->name = $request->name;
        $covid->positive = $request->positive;
        $covid->sembuh = $request->sembuh;
        $covid->dirawat = $request->dirawat;
        $covid->meninggal = $request->meninggal;

        // dd($news);
    
         $covid->save();

        return redirect('admin/covid-19')->with('status', 'Covid created!');
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
        $covid = Covid::findorfail($id);

        return view('admin.covid.edit')->with('covid', $covid);
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
            'kode' => 'required',
            'name' => 'required',
            'positive' => 'required',
            'sembuh' => 'required|max:255',
            'dirawat' => 'required',
            'meninggal' => 'required',
            
        ];

        $messages = [
            'kode.required' => 'Kode harus diisi',
            'name.required' => 'Nama Negara harus diisi',
            'posive.required' => 'Jumlah positive harus diisi',
            'sembuh.required' => 'Jumlah sembuh terlalu panjang ',
            'dirawat.required' => 'Jumlah dirawat harus diisi',
            'meninggal.required' => 'Jumlah meninggal harus diisi',
        ];

        $this->validate($request, $rules, $messages);


        $covid = Covid::find($id);
        $covid->kode = $request->kode;
        $covid->name = $request->name;
        $covid->positive = $request->positive;
        $covid->sembuh = $request->sembuh;
        $covid->dirawat = $request->dirawat;
        $covid->meninggal = $request->meninggal;

        // dd($news);
    
         $covid->save();

        return redirect('admin/covid-19')->with('status', 'Data Covid update!');
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
        return back()->with('status', 'Data Covid deleted!');
    }
}
