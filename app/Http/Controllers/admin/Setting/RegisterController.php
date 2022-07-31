<?php

namespace App\Http\Controllers\admin\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = User::all();

        return view ('admin.register.index')    
            ->with('register', $register);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.register.create');
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
            'username' => 'required|unique|max:255',
            'tmpt_lhr' => 'required',
            'tgl_lhr' => 'required',
            'almt_domisili' => 'required',
            'pendidikan' => 'required',
            'password' => 'required',
            'initial' => 'required|max:5',
            'phone' => 'required|max:13',
            'email' => 'required|unique|max:255',
        ];

        $messages = [
            'username.required' => 'Nama harus diisi',
            'username.max' => 'Username berlebihan',
            'tmpt_lhr.required' => 'Tempat lahir harus diisi',
            'tgl_lhr.required' => 'Nama harus diisi',
            'almt_domisili.required' => 'Nama harus diisi',
            'pendidikan.required' => 'Nama harus diisi',            
            'password.required' => 'Password harus diisi',
            'initial.required' => 'Initial harus diisi',
            'initial.max' => 'Initial maksimal 5 huruf',
            'phone.required' => 'Phone harus diisi',
            'email.required' => 'Email harus diisi',
        ];

        $this->validate($request, $rules, $messages);

         // ubah nama gambar
         $file = $request->image;
         $newName = time() . rand(100, 999) . "." . $file->getClientOriginalExtension();


        $register = new User;
        $register->username = $request->username;
        $register->tmpt_lhr = $request->tmpt_lhr;
        $register->tgl_lhr = $request->tgl_lhr;
        $register->almt_domisili = $request->almt_domisili;
        $register->pendidikan = $request->pendidikan;
        $register->password = Hash::make($request->password);
        $register->initial = $request->initial;
        $register->phone = $request->phone;
        $register->email = $request->email;
        $register->image = $newName;
        $file->move(public_path() . '/storage/img/user', $newName);
        $register->assignRole('editor');

        // dd($register);
    
        $register->save();

        return redirect('admin/setting/register')->with('status', 'register created!');
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
        $register = User::findorfail($id);

        return view('admin.register.edit')->with('register', $register);
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
            'username' => 'required|max:255',
            'tmpt_lhr' => 'required',
            'tgl_lhr' => 'required',
            'almt_domisili' => 'required',
            'pendidikan' => 'required',
            'initial' => 'required|max:5',
            'phone' => 'required|max:13',
            'email' => 'required|max:255',
        ];

        $messages = [
            'username.required' => 'Nama harus diisi',
            'username.max' => 'Username berlebihan',
            'tmpt_lhr.required' => 'Tempat lahir harus diisi',
            'tgl_lhr.required' => 'Nama harus diisi',
            'almt_domisili.required' => 'Nama harus diisi',
            'pendidikan.required' => 'Nama harus diisi', 
            'initial.required' => 'Initial harus diisi',
            'initial.max' => 'Initial maksimal 5 huruf',
            'phone.required' => 'Phone harus diisi',
            'email.required' => 'Email harus diisi',
        ];

        $this->validate($request, $rules, $messages);

        $register = User::find($id);;
        $register->username = $request->username;
        $register->tmpt_lhr = $request->tmpt_lhr;
        $register->tgl_lhr = $request->tgl_lhr;
        $register->almt_domisili = $request->almt_domisili;
        $register->pendidikan = $request->pendidikan;
        $register->password = Hash::make($request->password);
        $register->initial = $request->initial;
        $register->phone = $request->phone;
        $register->email = $request->email;
        $register->assignRole('editor');


        if($image = $request->file('image')) {
            $destinationPath = 'storage/img/user/';
            $profileImage = date('YmdHis')."." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
    
            $register->image = $profileImage;
            }else{
                unset($register['image']);
            }



        // dd($register);
    
        $register->save();

        return redirect('admin/setting/register')->with('status', 'Register Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return back()->with('status', 'Editor deleted!');
    }
}
