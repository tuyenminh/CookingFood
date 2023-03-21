<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loaikhoahoc;
use App\Http\Requests\Loaikhoahoc\LoaikhoahocFormRequest;
use App\Http\Services\Loaikhoahoc\LoaikhoahocService;

class LoaikhoahocController extends Controller
{
    protected $loaikhoahocthucService;

    public function __construct(LoaikhoahocService $loaikhoahocService){
        $this->loaikhoahocService = $loaikhoahocService;
    }
    public function create(){
        return view('admin.loaikhoahoc.add',[
            'title' => 'Thêm loại khóa học']);  
    }
    public function store (LoaikhoahocFormRequest $request){
        $result = $this->loaikhoahocService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.loaikhoahoc.list', [
            'title' => 'Danh sách loại khóa học',
            'loaikhoahocs' => $this->loaikhoahocService->getAll()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->loaikhoahocService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Loaikhoahoc $loaikhoahoc) {
        return view('admin.loaikhoahoc.edit', [
            'title' => 'Chỉnh sửa: ' . $loaikhoahoc->ten_loaikhoahoc ,
            'loaikhoahoc' => $loaikhoahoc,
            'loaikhoahocs' => $this->loaikhoahocService->getAll()
        ]);
    }
    public function update(Loaikhoahoc $loaikhoahoc, LoaikhoahocFormRequest $request){
        $this->loaikhoahocService->update($request, $loaikhoahoc);
        return redirect('/admin/loaikhoahoc/list');
    }
}

