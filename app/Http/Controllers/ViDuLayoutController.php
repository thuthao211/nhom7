<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class ViDuLayoutController extends Controller
{

    public function sach()
    {
       
        $data = DB::table('sach')->get();
        return view('vidusach.index', ['data' => $data]);
    }
}