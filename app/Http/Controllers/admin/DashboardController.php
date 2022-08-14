<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;
use App\Models\Menu;
use App\Models\Keuntungan;
use App\Models\ImageAdvertisement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $currentMonth = $request->month ?: date('m');
        $currentYear = $request->year ?: date('Y');
        $currentMonthText = Carbon::createFromFormat('m', $currentMonth)->format('F');

        $user = User::withCount([
            'berita as total_berita' => function ($q) use ($currentMonth, $currentYear) {
                $q->whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth);
            }
        ])->get();
        $news = News::all()->count();
        $menu = Menu::all()->count();
        $editor = User::all()->count();
        $iklan = ImageAdvertisement::all()->count();

        $nominal= Keuntungan::where('is_active', 1)->where('tahun', $currentYear)->first('nominal');
        $nominal = $nominal ? $nominal->nominal : 0;
        $recap = News::whereYear('created_at', $currentYear)->whereMonth('created_at', $currentMonth)->get();
        
        $rekap= DB::table('news')->select("*")->whereMonth('created_at', date('m'))->get();
        
        $oldestYear = News::latest()->first('created_at');
        $oldestYear = $oldestYear ? $oldestYear->created_at->format('Y') : date('Y');
        $oldestYear -= 1;
        $nowYear = date('Y');
        $yearCounter = 0;
        $years = [];

        while($oldestYear + $yearCounter != $nowYear) {
            $yearCounter++;
            $years[] = $oldestYear + $yearCounter;
        }

        // INI MASIH JUMLAHIN SEMUA DARI TOTAL UPLOAD USER
        // $keuntungans= User::select('total')->sum("total");

        // $komisi = (int)$nominal * (int)$keuntungans;
        
       
        // dd($rekap);


        $months = [];

        foreach(range(1, 12) as $value) {
            $months[$value] = Carbon::createFromFormat('m', $value)->format('F');
        }

        return view('admin.dashboard.index')
            ->with('user', $user)
            ->with('editor', $editor)
            ->with('news', $news)
            ->with('iklan', $iklan)
            ->with('recap', $recap)
            ->with('menu', $menu)
            ->with('nominal', $nominal)
            ->with('months', $months)
            ->with('years', $years)
            ->with('currentMonth', $currentMonth)
            ->with('currentMonthText', $currentMonthText)
            ->with('currentYear', $currentYear);
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
