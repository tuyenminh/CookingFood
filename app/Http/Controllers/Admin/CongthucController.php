<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Congthuc;
use App\Http\Requests\Congthuc\CongthucFormRequest;
use App\Http\Services\Congthuc\CongthucService;

class CongthucController extends Controller
{
    protected $congthucService;

    public function __construct(CongthucService $congthucService){
        $this->congthucService = $congthucService;
    }
    public function create(){
        return view('admin.congthuc.add',[
            'title' => 'Thêm công thức',
            'loaicongthucs' => $this->congthucService->getloaicongthuc()
        ]);  
    }
    public function store (CongthucFormRequest $request){
        $result = $this->congthucService->create($request);
        return redirect()->back();
    }
    public function index(){
        return view('admin.congthuc.list', [
            'title' => 'Danh sách công thức',
            'congthucs' => $this->congthucService->get()
        ]);
    }
    public function destroy(Request $request)
    {
        $result = $this->congthucService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công'
            ]);
        }
        return response()->json(['error' => true]);
    }
    public function show(Congthuc $congthuc) {
        return view('admin.congthuc.edit', [
            'title' => 'Chỉnh sửa công thức: ' . $congthuc->ten_loaicongthuc ,
            'congthuc' => $congthuc,
            'congthucs' => $this->congthucService->getAll()
        ]);
    }
    public function update(Congthuc $congthuc, CongthucFormRequest $request){
        $this->congthucService->update($request, $congthuc);
        return redirect('/admin/congthuc/list');
    }
}

