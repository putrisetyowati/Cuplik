<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubTag;
use App\Models\Menu;
use App\Models\News;
use App\Models\ImageAdvertisement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tagsub = SubTag::with('menu')
        ->with('tag')
        ->latest()
        ->paginate(5);

    $menu = Menu::all();

    $popular = News::All()->random(2);

    $iklan_gambar = ImageAdvertisement::All();

    $news = DB::table('news')->join('menus', 'news.id_menu', '=', 'menus.id')
    ->get();
    $title= DB::table('news')->select("title")->get();
    $array= [
        $title
    ];
    // $coba = Str::limit($array, 20);
    // $news->title = Str::limit($news->title, 50);

    // dd($coba);
    return view('member.main.index')
         ->with('tagsub', $tagsub)
         ->with('menu', $menu)
         ->with('news', $news)
         ->with('popular', $popular)
         ->with('iklan_gambar', $iklan_gambar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $menu = Menu::findorfail($id);
        // $news = DB::table('news')->join('menus', 'news.id_menu', '=', 'menus.id')
        // ->get();
        $news = News::all();
        

        $tagsub = SubTag::with('menu')
        ->with('tag')
        ->latest()
        ->paginate(5);

        $menus = Menu::all();

        return view('member.main.show')
        ->with('tagsub', $tagsub)
        ->with('menu', $menu)
        ->with('menus', $menus)
        ->with('news', $news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
