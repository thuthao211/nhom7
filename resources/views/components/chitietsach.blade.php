@extends("layouts.sach_layout") 
@section("title", "Chi tiết sách")

@section("content")
<style>
    .grid-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
    }
    .book-detail-img {
        width: 100%;
        max-width: 300px;
        height: auto;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .description {
        margin-top: 20px;
        padding: 15px;
        background: #fdfdfd;
        border-top: 1px solid #eee;
    }
</style>

<div class="container-fluid">
    {{-- $data2 ở đây là kết quả từ câu lệnh ->get() trong Controller --}}
    @foreach($data2 as $row)
        <div class="mb-4">
            <h3 class="text-danger">{{ $row->tieu_de }}</h3>
            <hr>

            <div class="grid-container">
                <div class="text-center">
                   
                    <img src="{{ asset('book_image/'.$row->file_anh_bia) }}" class="book-detail-img">
                </div>

                <div class="info">
                    <p>Nhà cung cấp: <b>{{ $row->nha_cung_cap }}</b></p>
                    <p>Nhà xuất bản: <b>{{ $row->nha_xuat_ban }}</b></p>
                    <p>Tác giả: <b>{{ $row->tac_gia }}</b></p>
                    <p>Hình thức bìa: <b>{{ $row->hinh_thuc_bia }}</b></p>
                    <p>Giá bán: <b class="text-danger h4">{{ number_format($row->gia_ban, 0, ',', '.') }}đ</b></p>
                    <button class="btn btn-danger mt-3">Thêm vào giỏ hàng</button>
                </div>
            </div>

            <div class="description">
                <h5 class="text-secondary">Mô tả sản phẩm:</h5>
                <p style="text-align: justify; line-height: 1.6;">
                    {{ $row->mo_ta }}
                </p>
            </div>
        </div>
    @endforeach
    
    <div class="mt-3">
        <a href="{{ url('/index') }}" class="btn btn-outline-secondary">← Quay lại trang chủ</a>
    </div>
</div>
@endsection