<?php

namespace App\Http\Services\Khoahoc;

use App\Models\Loaikhoahoc;
use App\Models\Khoahoc;
use Illuminate\Support\Facades\Session;
use Illuminate\Log; 
use Illuminate\Http\Request;

class KhoahocService {
    
    
    public function insert($request){
        $isValidPrice = $this->isValidPrice($request);
        if ($isValidPrice == false) return false;

        try {
            $request->except('_token');
            Khoahoc::create($request->all());
            Session:: flash('success', 'Thêm khóa học thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm khóa học không thành công');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function get() {
        return Khoahoc::with('loaikhoahoc')->orderByDesc('id')->paginate(15);
    }

    public function update($request, $khoahoc) {
        $isValidPrice = $this->isValidPrice($request);

        if($isValidPrice == false) return false;
        try {
            $khoahoc->fill($request->input());
            $khoahoc->save();
            Session::flash('success', 'Cập nhật thành công');
        }catch (\Exception $err) {
            Session::flash('error', 'Cập nhật không thành công');
            \Log::info($err->getMessage());  
            return false;
        }
        return true;
    }
    public function delete($request) {
        $khoahoc = Khoahoc::where('id', $request->input('id'))->first();
        if ($khoahoc) {
            $khoahoc->delete();
            return true;
        }
        return false;
    }
}