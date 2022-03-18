<?php

namespace App\Http\Controllers\admin;
use App\Models\News;
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
        $news = News::all();

        return view ('admin.berita.index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.berita.create');
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
            // 'tag_id' => 'required',
            // 'menu_id' => 'required',
            'title' => 'required|max:255',
            // 'image' => 'required',
            'content' => 'required',
            'source' => 'required',
            'desc' => 'required|max:255'
            
        ];

        $messages = [
            // 'user_id.required' => 'Editor harus diisi',
            // 'tag_id.required' => 'Tag harus diisi',
            // 'menu_id.required' => 'Menu harus diisi',
            'title.max' => 'Judul terlalu panjang ',
            // 'image.required' => 'Gambar harus diisi',
            'content.required' => 'Content harus diisi',
            'source.required' => 'URL harus diisi',
            'desc.max' => 'Deskripsi terlalu panjang'
        ];

        $this->validate($request, $rules, $messages);


        $news = new News;
        $news->title = $request->title;
        $news->content = $request->content;
        $news->source = $request->source;
        $news->desc = $request->desc;

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

        return view('admin.berita.edit')->with('news', $news);
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
            // 'tag_id' => 'required',
            // 'menu_id' => 'required',
            'title' => 'required|max:255',
            // 'image' => 'required',
            'content' => 'required',
            'source' => 'required',
            'desc' => 'required|max:255'
            
        ];

        $messages = [
            // 'user_id.required' => 'Editor harus diisi',
            // 'tag_id.required' => 'Tag harus diisi',
            // 'menu_id.required' => 'Menu harus diisi',
            'title.max' => 'Judul terlalu panjang ',
            // 'image.required' => 'Gambar harus diisi',
            'content.required' => 'Content harus diisi',
            'source.required' => 'URL harus diisi',
            'desc.max' => 'Deskripsi terlalu panjang'
        ];

        $this->validate($request, $rules, $messages);


        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->source = $request->source;
        $news->desc = $request->desc;

        // dd($news);
    
         $news->save();

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
        News::find($id)->delete();
        return back()->with('status', 'News deleted!');
    }
}
