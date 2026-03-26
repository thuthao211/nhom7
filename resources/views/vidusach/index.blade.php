@extends("layouts.sach_layout") {{-- Dùng đúng layout bạn vừa gửi --}}

@section("content")
<div class='list-book'>
    @foreach($data as $row)
    <div class='book'>
        <a href="{{ url('/sach/chitiet/'.$row->id) }}">
            <img src="{{ asset('book_image/'.$row->file_anh_bia) }}" width="100%">
        </a>

        <div class="mt-2">
            <a href="{{ url('/sach/chitiet/'.$row->id) }}" style="color:black; text-decoration:none;">
                <b>{{ $row->tieu_de }}</b>
            </a>
            <p style="color:red">{{ number_format($row->gia_ban, 0, ',', '.') }}đ</p>
        </div>
    </div>
@endforeach
</div>
@endsection