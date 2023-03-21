@extends('admin.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
              <form action="" method="POST">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Mã loại khóa học</label>
                                    <select class="form-control" name="id_lkh"> 
                                    @foreach($loaikhoahocs as $loaikhoahoc)
                                        <option value="{{ $loaikhoahoc->id}}">{{ $loaikhoahoc->ten_loaikhoahoc}}</option>
                                    @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Mã khóa học</label>
                                <input type="text" name="ma_kh" class="form-control" placeholder="">
                            </div>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tên khóa học</label>
                                <input type="text" name="ten_khoahoc" class="form-control" placeholder="Nhập tên khóa học">
                            </div>  
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Thời gian học</label>
                                <input type="text" name="tg_hoc" class="form-control" placeholder="Nhập thời học">
                            </div>  
                        </div> 

                    </div>  
                            <div class="form-group">
                                <label for="">Mô tả</label>
                                <textarea name="mota" id="content" class="form-control">{{ old('mota') }}</textarea>
                            </div> 
                            <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Giá</label>
                                <input type="text" name="gia" class="form-control" placeholder="Nhập giá khóa học">
                            </div>  
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Ngày khai giảng</label>
                                <input type="text" name="ngay_kg" class="form-control" placeholder="Nhập ngày khai giảng">
                            </div>  
                        </div> 

                    </div>                     
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Tạo công thức mới</button>
                </div>     
                @csrf
              </form>

@endsection
@section('footer')
    <script>
        CKEDITOR.replace( 'content');
    </script>
@endsection