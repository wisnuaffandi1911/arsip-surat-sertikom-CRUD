<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriModel extends Model
{
    protected $table='tbl_kategori';
    public function allData()
    {
        return DB::table('tbl_kategori')
        ->get();
    }

    public function detailData($ID_kategori)
    {
        return DB::table('tbl_kategori')
        ->where('ID_kategori', $ID_kategori)
        ->first();
    }

    public function addData($data)
    {
        DB::table('tbl_kategori')
        ->insert($data);
    }

    public function editData($ID_kategori, $data)
    {
        DB::table('tbl_kategori')
            ->where('ID_kategori', $ID_kategori)
            ->update($data);
    }

    public function deleteData($ID_kategori)
    {
        DB::table('tbl_kategori')
            ->where('ID_kategori', $ID_kategori)
            ->delete();
    }
}
