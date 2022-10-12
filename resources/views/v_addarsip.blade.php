@extends('layout.v_template')
@section('title','Tambah Arsip')

@section('content')

<form action="/arsip/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">

                <div class="form-group">
                    <label>No_Surat</label>
                    <input name="Nomor_Surat" class="form-control" value="{{ old('Nomor_Surat') }}">
                    <div class="text-danger">
                        @error('Nomor_Surat')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                                <label>Kategori</label>
                                <select name="Kategori" class="form-control @error('Kategori') is-invalid @enderror" required>
                                    <option> --Pilih-- </option>
                                    <option>Undangan</option>
                                    <option>Pengumuman</option>
                                    <option>Nota Dinas</option>
                                    <option>Pemberitahuan</option>
                                </select>
                            </div>

                <div class="form-group">
                    <label>Judul</label>
                    <input name="Judul" class="form-control" value="{{ old('Judul') }}">
                    <div class="text-danger">
                        @error('Judul')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>PDF</label>
                    <input type="file" name="File_Surat" class="form-control" value="{{ old('File_Surat') }}">
                    <div class="text-danger">
                        @error('File_Surat')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                    <a href="/arsip" class="btn btn-success btn-sm">Kembali</a>
                </div>

            </div>
        </div>
    </div>
</form>

@endsection