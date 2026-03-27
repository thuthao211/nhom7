@extends("layouts.sach_layout") {{-- Giữ nguyên khung banner và menu trái --}}

@section("title", "Chi tiết: " . $data2[0]->tieu_de)

@section("content")
<div class="bg-white p-3 border rounded">
    @foreach($data2 as $row)
        <div class="row">
            <div class="col-md-5 text-center">
                <img src="{{ asset('book_image/'.$row->file_anh_bia) }}" width="100%" class="border">
            </div>
            <div class="col-md-7">
                <h3 class="text-danger">{{ $row->tieu_de }}</h3>
                <hr>
                <p>Nhà cung cấp: <b>{{ $row->nha_cung_cap }}</b></p>
                <p>Nhà xuất bản: <b>{{ $row->nha_xuat_ban }}</b></p>
                <p>Tác giả: <b>{{ $row->tac_gia }}</b></p>
                <p class="h4 text-primary font-weight-bold">{{ number_format($row->gia_ban, 0, ',', '.') }}đ</p>
                
                <div class="mt-4">
                    <b>Mô tả:</b>
                    <p style="text-align: justify;">{{ $row->mo_ta }}</p>
                </div>
                
                <a href="{{ url('/index') }}" class="btn btn-outline-secondary mt-3">Quay lại trang chủ</a>
            </div>
        </div>
    @endforeach
</div>
@endsection