<?php

namespace App\Http\Controllers\admin;
use App\Models\News;
use App\Models\User;
use App\Models\Tag;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with('menu')
        ->latest()
        ->paginate(5);

        return view ('admin.berita.index')
        ->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        $tags = Tag::all();
        

        return view ('admin.berita.create')
            ->with('menus', $menus)
            ->with('tags', $tags);
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
            'id_menu' => 'required',
            'title' => 'required|max:255',
            'content' => 'required',
            'source' => 'required',
            'desc' => 'required|max:255'
            
        ];

        $messages = [
            'id_menu.required' => 'Menu harus diisi',
            'title.max' => 'Judul terlalu panjang ',
            'content.required' => 'Content harus diisi',
            'source.required' => 'URL harus diisi',
            'desc.max' => 'Deskripsi terlalu panjang'
        ];

        $this->validate($request, $rules, $messages);

         // ubah nama gambar
         $file = $request->image;
         $newName = time() . rand(100, 999) . "." . $file->getClientOriginalExtension();
 

        $news = new News;
        $news->user_id = Auth::id();
        $news->title = $request->title;
        $news->image = $newName;
        $file->move(public_path() . '/storage/img/news', $newName);
        $news->content = $request->content;
        $news->source = $request->source;
        $news->id_menu = $request->id_menu;
        $news->desc = $request->desc;
        $user = new User;
        $user = User::find(Auth::id());
        $user = User::where('id', Auth::id())->update(['total' => $user->total+1]);
        

        // dd($news);
    
         $news->save();

        return redirect('admin/news')->with('status', 'News created!');
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
        $news = News::findorfail($id);
        $menus = Menu::all();
        $tags = Tag::all();

        return view('admin.berita.edit')->with('news', $news)
        ->with('menus', $menus)
        ->with('tags', $tags);
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
            'content' => 'required',
            'source' => 'required',
            'desc' => 'required|max:255'
            
        ];

        $messages = [
            'title.max' => 'Judul terlalu panjang ',
            'content.required' => 'Content harus diisi',
            'source.required' => 'URL harus diisi',
            'desc.max' => 'Deskripsi terlalu panjang'
        ];

        $this->validate($request, $rules, $messages);

        // Cek apakah gambar diupdate
       
        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->id_menu = $request->id_menu;
        $news->source = $request->source;
        $news->desc = $request->desc;


        if($image = $request->file('image')) {
            $destinationPath = 'storage/img/news/';
            $profileImage = date('YmdHis')."." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
    
            $news->image = $profileImage;
            }else{
                unset($news['image']);
            }



        // dd($news);
    
         $news->update();

        return redirect('admin/news')->with('status', 'News Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $user = new User;
        $user = User::find(Auth::id());
        $user = User::where('id', Auth::id())->update(['total' => $user->total-1]);
        News::find($id)->delete();

        return back()->with('status', 'News deleted!');
    }
}
