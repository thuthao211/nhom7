<!DOCTYPE html>
<html>
        <head>
                <title>@yield('title')</title>
                <link rel="stylesheet"
                href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        </head>
    <body>
        <header style='text-align:center'>
                <img src="{{asset('hinh/banner.jpg')}}" width="1000px">
        </header>
    <main>
            @yield('content')
    </main>
    <footer>
        <div <a href="{{ url('/sach/chitiet/'.$row->id) }}">
            <img src="{{ asset('book_image/'.$row->file_anh_bia) }}">
        </a>
        
        <div class="mt-2">
            <a href="{{ url('/sach/chitiet/'.$row->id) }}" style="color: black; text-decoration: none;">
                <b>{{ $row->tieu_de }}</b>
            </a>
            <p style="color:red">{{ number_format($row->gia_ban, 0, ',', '.') }}đ</p></div>
        </div>
    </footer>
    </body>
</html>