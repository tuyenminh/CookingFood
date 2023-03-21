<?php

namespace App\Http\Services\Loaikhoahoc;

use App\Models\Loaikhoahoc;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Query\Builder;

class LoaikhoahocService {
    public function create($request){
        try {
            // $data = $request->input();
            Loaikhoahoc::create([
                'ten_loaikhoahoc' => (string) $request->input('ten_loaikhoahoc')

            ]);
            Session::flash('success', 'Tạo loại khóa học thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;

        }
        return true;
    }
    public function getAll(){
        return Loaikhoahoc::orderByDesc('id')->paginate(15);
    }
    public function destroy($request) {
        $loaikhoahoc = Loaikhoahoc::where('id', $request->input('id'))->first();
        if ($loaikhoahoc) {
            $loaikhoahoc->delete();
            return true;
        }
        return false;
    }
    public function update($request, $loaikhoahoc): bool {
        $loaikhoahoc->ten_loaikhoahoc = (string) $request->input('ten_loaikhoahoc');
        $loaikhoahoc->save();
        Session::flash('success', 'Cập nhật thành công ');
        return true;
    }

}