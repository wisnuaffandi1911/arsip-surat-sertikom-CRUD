<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factrories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ArsipModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_arsip')
        ->get();
    }

    public function detailData($ID_arsip)
    {
       return DB::table('tbl_arsip')
       ->where('ID_arsip', $ID_arsip)
       ->first();
    }

    public function addData($data)
    {
        DB::table('tbl_arsip')
        ->insert($data);
    }

    public function deleteData($ID_arsip)
    {
        DB::table('tbl_arsip')
            ->where('ID_arsip', $ID_arsip)
            ->delete();
    }
}
