<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function homepage() {
        return view ('pages.home');
    }

    public function about() {
        $halaman = "about";
        return view ('pages.about', compact('halaman'));
    }

    public function news() {
        $halaman = "news";        
        //Raw Query SQL
        // $beritaUtama = DB::select('select * from berita where tampilUtama = ?', ['Y']);
        // $berita = DB::select('select * from berita where tampilUtama = ? and tampil = ? ', ['N','Y']);
        
        //Query Builder
        $beritaUtama = DB::table('berita')
                        ->where('tampilUtama', 'Y')
                        ->first();

        $berita = DB::table('berita')
                        ->where('tampilUtama', 'N')
                        ->where('tampil', 'Y')
                        ->get();

        // return view('pages.news', ['beritaUtama' => $beritaUtama]);
        return view('pages.news', compact('beritaUtama', 'berita', 'halaman'));
        // dd($beritaUtama);
    }

    public function show($id) {
        $halaman = "news";

        $beritaUtama = DB::table('berita')->find($id);
        return view('pages.shownews', compact('beritaUtama', 'halaman'));
    }
}
