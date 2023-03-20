<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Loaicongthuc;
use App\Http\Requests\Loaicongthuc\LoaicongthucFormRequest;
use App\Http\Services\Loaicongthuc\LoaicongthucService;

class LoaicongthucController extends Controller
{
    protected $loaicongthucService;

    public function __construct(LoaicongthucService $loaicongthucService){
        $this->loaicongthucService = $loaicongthucService;
    }
    public function create(){
        return view('admin.loaicongthuc.add',[
            'title' => 'Thêm danh mục công thức']);  
    }
    public function store (LoaicongthucFormRequest $request){
        $result = $this->loaicongthucService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.loaicongthuc.list', [
            'title' => 'Danh sách danh mục công thức',
            'loaicongthucs' => $this->loaicongthucService->get()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->loaicongthucService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công danh mục'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Loaicongthuc $loaicongthuc) {
        return view('admin.loaicongthuc.edit', [
            'title' => 'Chỉnh sửa danh mục: ' . $loaicongthuc->ten_loaicongthuc ,
            'loaicongthuc' => $loaicongthuc,
            'loaicongthucs' => $this->loaicongthucService->getAll()
        ]);
    }
    public function update(Loaicongthuc $loaicongthuc, LoaicongthucFormRequest $request){
        $this->loaicongthucService->update($request, $loaicongthuc);
        return redirect('/admin/loaicongthuc/list');
    }
}

