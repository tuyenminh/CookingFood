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
                                <label for="">Mã danh mục</label>
                                    <select class="form-control" name="id_lct"> 
                                    @foreach($loaicongthucs as $loaicongthuc)
                                        <option value="{{ $loaicongthuc->id}}">{{ $loaicongthuc->ten_loaicongthuc}}</option>
                                    @endforeach

                                    </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Mã công thức</label>
                                <input type="text" name="ma_ct" class="form-control" placeholder="">
                            </div>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tên công thức</label>
                                <input type="text" name="ten_mon" class="form-control" placeholder="Nhập tên công thức">
                            </div>  
                        </div> 
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Thời gian nấu</label>
                                <input type="text" name="tg_nau" class="form-control" placeholder="Nhập thời gian nấu">
                            </div>  
                    </div> 
                    <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Cách làm</label>
                                <textarea name="cach_lam" class="form-control">{{ old('cach_lam') }}</textarea>
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
        CKEDITOR.replace( 'content' );
    </script>
@endsection