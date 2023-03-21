@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="">Tên loại khóa học</label>
                    <input type="text" name="ten_loaikhoahoc" class="form-control" placeholder="Nhâp tên loại khóa học">
                  </div>   
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tạo loại khóa học mới</button>
                </div>
                @csrf
              </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content' );
    </script>
@endsection