<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArsipModel;

class ArsipController extends Controller
{
    public function __construct()
    {
        $this->ArsipModel = new ArsipModel();
    }

    public function index()
    {
        $data = [
            'arsip' => $this->ArsipModel->allData(),
        ];

        return view('v_arsip', $data);
    }

    public function detail($ID_arsip)
    {
        if (!$this->ArsipModel->detailData($ID_arsip)) {
            abort(404);
        }
        $data = [
            'arsip' => $this->ArsipModel->detailData($ID_arsip),
        ];
        return view('v_detailarsip', $data);
    }

    public function add()
    {
       return view('v_addarsip');
    }

    public function insert()
    {
        Request()->validate([
            'Nomor_Surat' => 'required|unique:tbl_arsip,Nomor_Surat|min:10|max:255',
            'Kategori' => 'required',
            'Judul' => 'required',
            'File_Surat' => 'required|mimes:pdf',
        ], [
            'Nomor_Surat.required' => 'Wajib diisi !!',
            'Judul' => 'Min 3 Karakter',
            'File_Surat.required' => 'Wajib diisi dan harus format pdf !!',
        ]);
        //jika validadi tdk ada maka lakukan simpan data^

        $file = Request()->File_Surat;
        $fileName = request()->Judul . '.' . $file->extension();
        $file->move(public_path('pdf'), $fileName);

        $data = [
            'Nomor_Surat' => Request()->Nomor_Surat,
            'Kategori' => Request()->Kategori,
            'Judul' => Request()->Judul,
            'created_at' => date('Y-m-d H:i:s'),
            'File_Surat' => $fileName,
        ];

        $this->ArsipModel->addData($data);
        return redirect()->route('arsip')->with('pesan','Data Berhasil Di Tambahkan!');


    }

    public function delete($ID_arsip)
    {
        $this->ArsipModel->deleteData($ID_arsip);
        return redirect()->route('arsip')->with('pesan','Data Berhasil Di Hapus!');
    }
}
