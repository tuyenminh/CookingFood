
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 500px;">Mã danh mục</th>
                <th>Tên danh mục</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($loaicongthucs as $key => $loaicongthuc)
        <tr>
                    <td>{{ $loaicongthuc->id }}</td>
                    <td>{{ $loaicongthuc->ten_loaicongthuc }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/loaicongthuc/edit/{{ $loaicongthuc->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $loaicongthuc->id }} , '/admin/loaicongthuc/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $loaicongthucs->links() !!}
    </di>
@endsection
