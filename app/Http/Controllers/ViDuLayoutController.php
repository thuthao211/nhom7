<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViDuLayoutController extends Controller
{
    // Hiển thị tất cả sách
    public function sach()
    {
        $data = DB::table('sach')->get();
        return view('vidusach.index', ['data' => $data]);
    }

    // Hiển thị sách theo thể loại
    public function theloai($id)
    {
        // Lấy sách có id_theloai tương ứng
        $data = DB::table('sach')->where('id_theloai', $id)->get();
        
        // Trả về cùng một view index nhưng dữ liệu đã được lọc
        return view('vidusach.index', ['data' => $data]);
    }
}