
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 100px;">STT</th>
                <th style= "width: 100px;">Mã công thức</th>
                <th style= "width: 100px;">Tên danh mục</th>
                <th style= "width: 100px;">Tên công thức</th>
                <th style= "width: 100px;">Cách làm</th>
                <th style= "width: 100px;">Thời gian nấu</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($congthucs as $key => $congthuc)
        <tr>
                    <td>{{ $congthuc->id }}</td>
                    <td>{{ $congthuc->ma_ct }}</td>
                    <td>{{ $congthuc->loaicongthuc->ten_loaicongthuc }}</td>
                    <td>{{ $congthuc->ten_mon }}</td>
                    <td>{{ $congthuc->cach_lam}}</td>
                    <td>{{ $congthuc->tg_nau }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/congthuc/edit/{{ $congthuc->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $congthuc->id }} , '/admin/congthuc/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $congthucs->links() !!}
    </di>
@endsection
