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

 public function theloai($id)
{
    // Sửa 'id' thành 'the_loai' (theo đúng tên cột trong ảnh phpMyAdmin bạn gửi)
    $data = DB::table('sach')->where('the_loai', $id)->get(); 
    
    return view('vidusach.index', ['data' => $data]);
}
    public function chitiet($id) {
    $data2 = DB::table('sach')->where('id', $id)->get();
    return view('vidusach.chitiet', ['data2' => $data2]);
}
}
