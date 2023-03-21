<?php

namespace App\Http\Services\Loaicongthuc;

use App\Models\Loaicongthuc;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Query\Builder;

class LoaicongthucService {
    public function create($request){
        try {
            // $data = $request->input();
            Loaicongthuc::create([
                'ten_loaicongthuc' => (string) $request->input('ten_loaicongthuc')

            ]);
            Session::flash('success', 'Tạo danh mục thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Loaicongthuc::orderByDesc('id')->paginate(15);
    }
    public function destroy($request) {
        $loaicongthuc = Loaicongthuc::where('id', $request->input('id'))->first();
        if ($loaicongthuc) {
            $loaicongthuc->delete();
            return true;
        }
        return false;
    }
    public function update($request, $loaicongthuc): bool {
        $loaicongthuc->ten_loaicongthuc = (string) $request->input('ten_loaicongthuc');
        $loaicongthuc->save();
        Session::flash('success', 'Cập nhật thành công danh mục ');
        return true;
    }

}