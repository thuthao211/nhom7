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
    public function theloai($id)
{
    // Lấy sách có id_theloai trùng với $id truyền vào từ URL
    $data = DB::table('sach')->where('id_theloai', $id)->get();
    
    // Vẫn trả về view cũ nhưng với dữ liệu đã được lọc
    return view('vidusach.index', ['data' => $data]);
}
}