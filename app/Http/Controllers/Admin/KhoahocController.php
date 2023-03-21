<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Khoahoc;
use App\Models\Hinhanh;
use App\Http\Requests\Khoahoc\KhoahocFormRequest;
use App\Http\Services\Khoahoc\KhoahocService;

class KhoahocController extends Controller
{
    protected $khoahocService;

    public function __construct(KhoahocService $khoahocService){
        $this->khoahocService = $khoahocService;
    }
    public function index(){
        return view('admin.khoahoc.list', [
            'title' => 'Danh sách khóa học',
            'khoahocs' => $this->khoahocService->getAll()
        ]);
    }
    public function create(){
        return view('admin.khoahoc.add',[
            'title' => 'Thêm khóa học',
            'khoahocs' => $this->khoahocService->getloaikhoahoc()
        ]);  
    }
    public function store (KhoahocFormRequest $request){
        $result = $this->khoahocService->create($request);
        return redirect()->back();
    }
   
    public function show(Khoahoc $khoahoc) {
        return view('admin.khoahoc.edit', [
            'title' => 'Chỉnh sửa khóa học: ' . $khoahoc->ten_khoahoc ,
            'khoahoc' => $khoahoc,
            'khoahocs' => $this->khoahocService->getAll(),
            'loaikhoahocs' => $this->khoahocService->getloaikhoahoc()
        ]);
    }
    public function edit(Request $request, Khoahoc $khoahoc)
    {
        $this->khoahocService->update($request, $khoahoc);
    }
    public function update(Khoahoc $khoahoc, KhoahocFormRequest $request){
        $this->khoahocService->update($request, $khoahoc);
        return redirect('/admin/khoahoc/list');
    }
    public function destroy(Request $request)
    {
        $result = $this->khoahocService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công'
            ]);
        }
        return response()->json(['error' => true]);
    }
}

