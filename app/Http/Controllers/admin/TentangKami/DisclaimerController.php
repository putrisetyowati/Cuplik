<?php

namespace App\Http\Controllers\admin\TentangKami;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Disclaimer;

class DisclaimerController extends Controller
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
     
        return view ('admin.tentang-kami.disclaimer.create');
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
            'content.required' => 'content harus diisi'
        ];

        $this->validate($request, $rules, $messages);

         // ubah nama gambar

        $disclaimer = new Disclaimer;
        $disclaimer->title = $request->title;
        $disclaimer->date = $request->date;
        $disclaimer->time = $request->time;
        $disclaimer->content = $request->content;

        if($image = $request->file('image')) {
            $destinationPath = 'storage/img/disclaimer/';
            $profileImage = date('YmdHis')."." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
    
            $disclaimer->image = $profileImage;
            }else{
                unset($disclaimer['image']);
            }
     

        // dd($disclaimer);
    
         $disclaimer->save();

        return redirect()->back()->with('status', 'Disclaimer created!');
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
        $disclaimer = Disclaimer::findorfail($id);
        return view ('admin.tentang-kami.disclaimer.edit')
        ->with('disclaimer', $disclaimer);
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
  
 
         $disclaimer = Disclaimer::find($id);
         $disclaimer->title = $request->title;
         $disclaimer->date = $request->date;
         $disclaimer->time = $request->time;
         $disclaimer->content = $request->content;
 

         if($image = $request->file('image')) {
            $destinationPath = 'storage/img/disclaimer/';
            $profileImage = date('YmdHis')."." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
    
            $disclaimer->image = $profileImage;
            }else{
                unset($disclaimer['image']);
            }

            
         // dd($news);
     
          $disclaimer->save();
 
          return redirect()->back()->with('status', 'Disclaimer created!');
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
