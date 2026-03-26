
  <div class='book' style="border: 1px solid #eee; padding: 10px; margin: 10px; text-align: center; width: 220px; float: left;">
    <img src="{{ asset('book_image/'.$book->file_anh_bia) }}" width='200px' height='200px'>
    <br>
    <b>{{ $book->tieu_de }}</b><br/>
    <i style="color: red;">{{ number_format($book->gia_ban, 0, ",", ".") }}đ</i>
    <br>
    <a href="{{ url('/chitietsach/'.$book->id) }}" class="btn btn-sm btn-outline-primary">Chi tiết</a>
</div>