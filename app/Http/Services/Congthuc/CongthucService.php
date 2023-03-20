<?php

namespace App\Http\Services\Congthuc;

use App\Models\Congthuc;
use App\Models\Loaicongthuc;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Query\Builder;

class CongthucService {
    public function create($request){
        try {
            // $data = $request->input();
            Congthuc::create([
                'ten_mon' => (string) $request->input('ten_mon'),
                'cach_lam' => (string) $request->input('cach_lam'),
                'tg_nau' => (integer) $request->input('tg_nau'),
                'ten_mon' => (string) $request->input('ten_mon'),
            ]);
            Session::flash('success', 'Tạo công thức thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function get(){
        return Congthuc::orderByDesc('id')->paginate(15);
    }
    public function getloaicongthuc() {
        return Loaicongthuc::where(null)->get();
    }
    public function destroy($request) {
        $loaicongthuc = Loaicongthuc::where('id', $request->input('id'))->first();
        if ($loaicongthuc) {
            $loaicongthuc->delete();
            return true;
        }
        return false;
    }
    public function update($request, $congthuc) {
        try {
            $congthuc->fill($request->input());
            $congthuc->save();
            Session::flash('success', 'Cập nhật thành công');
        }catch (\Exception $err) {
            Session::flash('error', 'Cập nhật không thành công');
            \Log::info($err->getMessage());  
            return false;
        }
        return true;
    }

}