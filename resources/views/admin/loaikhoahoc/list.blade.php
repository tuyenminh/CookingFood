
@extends('admin.main')

@section('content')


<table class="table">
        <thead>
            <tr>
                <th style= "width: 500px;">STT</th>
                <th>Tên loại khóa học</th>
                <th style= "width: 100px;" >&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($loaikhoahocs as $key => $loaikhoahoc)
        <tr>
                    <td>{{ $loaikhoahoc->id }}</td>
                    <td>{{ $loaikhoahoc->ten_loaikhoahoc }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/loaikhoahoc/edit/{{ $loaikhoahoc->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href ="#" class="btn btn-danger btn-sm" 
                            onclick="removeRom({{ $loaikhoahoc->id }} , '/admin/loaikhoahoc/destroy')">
                            <i class="fas fa-trash"></i>                       
                        </a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <di class="card-footer clearfix"> 
        {!! $loaikhoahocs->links() !!}
    </di>
@endsection
