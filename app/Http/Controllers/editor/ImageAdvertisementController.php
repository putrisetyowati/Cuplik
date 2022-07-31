<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageAdvertisement;
use App\Models\Position;

class ImageAdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image_advertisement = ImageAdvertisement::with('posisi')
            ->latest()
            ->paginate(5);

        return view ('editor.iklan-gambar.index')->with('image_advertisement', $image_advertisement);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $image_advertisement = ImageAdvertisement::all();
        $posisi = Position::all();
        return view ('editor.iklan-gambar.create')

        ->with('posisi', $posisi);
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
            'title' => 'required|max:225',
            'id_posisi' => 'required|max:50',
            'image' => 'required|image|max:5024',
           
        ];

        $messages = [
            'title.required' => 'Judul harus diisi',
            'id_posisi.required' => 'Posisi harus diisi',
            'image.required' => 'Gambar harus diisi',
            
        ];

        $this->validate($request, $rules, $messages);

        // ubah nama gambar
        $file = $request->image;
        $newName = time() . rand(100, 999) . "." . $file->getClientOriginalExtension();

        $image_advertisement = new ImageAdvertisement;
        $image_advertisement->title = $request->title;
        $image_advertisement->id_posisi = $request->id_posisi;
        $image_advertisement->image = $newName;
        $file->move(public_path() . '/storage/img/iklan-gambar', $newName);
        // $line_advertisement->user_id = $request->user_id;
       

        // dd($news);
    
         $image_advertisement->save();

        return redirect('editor/iklan-gambar')->with('status', 'Iklan Gambar created!');
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
        $image_advertisement = ImageAdvertisement::findorfail($id);
        $posisi = Position::all();

        return view('editor.iklan-gambar.edit')->with('image_advertisement', $image_advertisement)
        ->with('posisi', $posisi);
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
            'title' => 'required|max:225',
            'id_posisi' => 'required|max:50',
           
        ];

        $messages = [
            'title.required' => 'Judul harus diisi',
            'id_posisi.required' => 'Posisi harus diisi',          
        ];

        $this->validate($request, $rules, $messages);


        $image_advertisement = ImageAdvertisement::find($id);
        $image_advertisement->title = $request->title;
        $image_advertisement->id_posisi = $request->id_posisi;
       

        // dd($news);
      
        if($image = $request->file('image')) {
            $destinationPath = 'storage/img/iklan-gambar/';
            $profileImage = date('YmdHis')."." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
    
            $image_advertisement->image = $profileImage;
            }else{
                unset($image_advertisement['image']);
            }
    
         $image_advertisement->save();

        return redirect('editor/iklan-gambar')->with('status', 'Iklan Gambar created!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       ImageAdvertisement::find($id)->delete();
        return back()->with('status', 'Iklan Gambar deleted!');
    }
}
