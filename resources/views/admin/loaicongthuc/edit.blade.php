@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Mã danh mục công thức</label>
                    <input type="text" name="id"  value= "{{ $loaicongthuc->id}}" class="form-control" placeholder="Nhâp mã danh mục">
                  </div>  
                  <div class="form-group">
                    <label for="">Tên danh mục công thức</label>
                    <input type="text" name="ten_loaicongthuc"  value= "{{ $loaicongthuc->ten_loaicongthuc}}" class="form-control" placeholder="Nhâp tên danh mục">
                  </div>   
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cập nhật danh mục mới</button>
                </div>
                @csrf
              </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection