<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketsController extends Controller
{
    public function show($id) {
        $halaman = "market";

        // $beritaUtama = DB::table('berita')->find($id);
        return view('markets.showmarket', compact('halaman'));
    }
}
