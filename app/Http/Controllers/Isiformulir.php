<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Isiformulir extends Controller
{
    public function index(Request $r)
    {
        $data = [
            'title' => 'Isi Formulir',
            'per' => DB::table('pertanyaan')->whereBetween('id_pertanyaan', [1, 5])->get(),
            'per2' => DB::table('pertanyaan')->whereBetween('id_pertanyaan', [6, 10])->get()
        ];
        return view("isiformulir.index", $data);
    }

    public function tbh_pertanyaan1(Request $r)
    {
        $jawaban = $r->jawaban;
        $id_pertanyaan = $r->id_pertanyaan;

        for ($x = 0; $x < count($id_pertanyaan); $x++) {
            $data = [
                'jawaban1' => $jawaban[$x],
                'id_pertanyaan' => $id_pertanyaan[$x],
                'no_order' => '1001'
            ];
            DB::table('jawaban1')->insert($data);
        }
    }
    public function dlt_pertanyaan1(Request $r)
    {
        DB::table('jawaban1')->where('no_order', '1001')->delete();
    }
}
