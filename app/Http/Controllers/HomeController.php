<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hitung_pengguna = DB::table('databaseid')->count();
        $hitung_kendaraan = DB::table('singlevin')->distinct('vinnumber')->count('vinnumber');
        $modal="";
        return view('dashboard',['dicari' => '','hitung_kendaraan' => $hitung_kendaraan,'hitung_pengguna' => $hitung_pengguna,'modal' => $modal]);
    }
    public function caridata(request $request)
    {
        $dicari = $request->search;
        $hitung_pengguna = DB::table('databaseid')->count();
        $hitung_kendaraan = DB::table('singlevin')->distinct('vinnumber')->count('vinnumber');
        $find_sin = DB::table('singlevin')->where('vinnumber',$dicari)->orwhere('customername',$dicari)->orwhere('policeregno',$dicari)->orwhere('notlp_hp',$dicari)->orderby('id','desc')->first();
        $find_sin_count = DB::table('singlevin')->where('vinnumber',$dicari)->orwhere('customername',$dicari)->orwhere('policeregno',$dicari)->orwhere('notlp_hp',$dicari)->orderby('id','desc')->count();
        $find_dbid = DB::table('databaseid')->where('vinnumber',$dicari)->orwhere('customername',$dicari)->orwhere('policeregno',$dicari)->orwhere('notlp_hp',$dicari)->orwhere('idvalid',$find_sin->idvalid)->orderby('id','desc')->first();
        $find_dbid_count = DB::table('databaseid')->where('vinnumber',$dicari)->orwhere('customername',$dicari)->orwhere('policeregno',$dicari)->orwhere('notlp_hp',$dicari)->orwhere('idvalid',$find_sin->idvalid)->orderby('id','desc')->count();
        if($find_dbid_count > 0 || $find_sin_count > 0)
        {
            $find_treatment = DB::table('treatment')->where('vehicle_current',$find_sin->tipekendaraan)->first();
            $idcari2 = $find_sin->idvalid;
            $except = $find_sin->vinnumber;
            $find_sin_all = DB::table('singlevin')->where('idvalid',$idcari2)->whereNotIn('vinnumber',[$except])->distinct()->select('policeregno','notlp_hp','vinnumber','tipekendaraan','freepart','pkbdate','operationdescription')->orderby('id','desc')->get();
            $find_sin_hst = DB::table('singlevin')->where('vinnumber',$except)->first();
            $hitung = DB::table('singlevin')->where('idvalid',$idcari2)->distinct()->orderby('id','desc')->count();
            $modal = 0;
            if($hitung > 0)
            {
                return view('dashboardsearch',['dicari' => $dicari,'treatment' => $find_treatment,'hitung' => $hitung,'hitung_kendaraan' => $hitung_kendaraan,'hitung_pengguna' => $hitung_pengguna,'find' => $find_dbid,'find_sin_hst' => $find_sin_hst,'find_sin_all' => $find_sin_all,'find_sin' => $find_sin,'modalempty' => $modal]);
            }
            else
            {
                $modal = "showalertempty";
                return view('dashboard',['dicari' => $dicari,'hitung_kendaraan' => $hitung_kendaraan,'hitung_pengguna' => $hitung_pengguna,'modalempty' => $modal]);
            }
        }
        else
        {
            $modal = "showalertempty";
            return view('dashboard',['dicari' => $dicari,'hitung_kendaraan' => $hitung_kendaraan,'hitung_pengguna' => $hitung_pengguna,'modal' => $modal]);
        }
    }
}
