<?php

namespace App\Http\Controllers\editor\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keuntungan; 

class KeuntunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keuntungans = Keuntungan::all();

        return view ('editor.keuntungan.index')    
            ->with('keuntungans', $keuntungans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'data' => Keuntungan::all(),
        ];

        return view ('editor.keuntungan.create', $data);
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
            'tahun' => 'required|numeric|unique:keuntungans|digits:4',
            'nominal' => 'required|numeric',
        ];

        $messages = [
            'tahun.required' => 'Tahun harus diisi',
            'tahun.numeric' => 'Tahun harus numerik',
            'tahun.digits' => 'Format tahun salah!',
            'tahun.unique' => 'Tahun sudah ada',
            'nominal.required' => 'Nominal harus diisi',
            'nominal.numeric' => 'Nominal harus numerik',
        ];

        $this->validate($request, $rules, $messages);


        $keuntungan = new Keuntungan;
        $keuntungan->tahun = $request->tahun;
        $keuntungan->nominal = $request->nominal;

        // dd($keuntungan);
    
        $keuntungan->save();

        return redirect('editor/setting/keuntungan')->with('status', 'Keuntungan created!');
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
        $keuntungan = Keuntungan::findorfail($id);

        $data = [
            'data' => Keuntungan::all(),
        ];

        return view('editor.keuntungan.edit', $data)->with('keuntungan', $keuntungan);
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
            'tahun' => 'required|numeric|digits:4',
            'nominal' => 'required|numeric',
        ];

        $messages = [
            'tahun.required' => 'Tahun harus diisi',
            'tahun.numeric' => 'Tahun harus numerik',
            'tahun.digits' => 'Format tahun salah!',
            'nominal.required' => 'Nominal harus diisi',
            'nominal.numeric' => 'Nominal harus numerik',
        ];

        $this->validate($request, $rules, $messages);


        $keuntungan = Keuntungan::find($id);
        $keuntungan->tahun = $request->tahun;
        $keuntungan->nominal = $request->nominal;

        // dd($keuntungan);
    
        $keuntungan->save();

        return redirect('editor/setting/keuntungan')->with('status', 'Keuntungan created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Keuntungan::find($id)->delete();
        return back()->with('status', 'Keuntungan deleted!');
    }

    public function default(Request $request, $id)
    {
        Keuntungan::query()->update(['is_active' => FALSE]);

        $keuntungan = Keuntungan::find($id);

        $keuntungan->is_active = TRUE;
        $keuntungan->save();
   
        return redirect(route('editor.setting.keuntungan.index'));

    }
}
