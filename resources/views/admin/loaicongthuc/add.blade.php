@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Tên danh mục công thức</label>
                    <input type="text" name="ten_loaicongthuc" class="form-control" placeholder="Nhâp tên danh mục">
                  </div>   
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tạo danh mục mới</button>
                </div>
                @csrf
              </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection