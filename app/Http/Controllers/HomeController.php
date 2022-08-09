<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubTag;
use App\Models\Menu;
use App\Models\News;
use App\Models\ImageAdvertisement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    

     public function home()
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

     public function show($id)
     {
        $menu = Menu::findorfail($id);

        return view('member.main.show');
     }

     public function tagsub($id)
     {
        $menu = Menu::findorfail($id);
        
        return view('member.main.show');
     }


     public function page()
     {
        $tagsub = SubTag::with('menu')
        ->with('tag')
        ->latest()
        ->paginate(5);

        $menu = Menu::all();
        $iklan_gambar = ImageAdvertisement::All();

        $news = News::all();

        // dd($menu);
        return view('member.page.index')
            ->with('tagsub', $tagsub)
            ->with('menu', $menu)
            ->with('news', $news)
            ->with('iklan_gambar', $iklan_gambar);
     }

}
