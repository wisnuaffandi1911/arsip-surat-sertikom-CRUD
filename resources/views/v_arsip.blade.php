@extends('layout.v_template')
@section('title', 'Arsip')

@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Arsip</h3> <br><br>
    <a href="/arsip/add" class="btn btn-primary" btn-sm>Tambah Arsip +</a> <br>
</div>

    @if (session('pesan'))
    <div class="box-body">
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ session('pesan') }}
      </div>
    </div>
    @endif

    <div class="box-body">
    <table class="table table-bordered table-striped table-hover" id="table1">
    <tfoot>
        <thead>
            <tr>
                <th>No</th>
                <th>No_Surat</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Waktu_Pengarsipan</th>
                <th>Action</th>
            </tr>
        </thead>
        </tfoot>
        <tbody>
            <?php $no=1; ?>
            @foreach ($arsip as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->Nomor_Surat }}</td>
                    <td>{{ $data->Kategori }}</td>
                    <td>{{ $data->Judul }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete{{ $data->ID_arsip }}">
                            Hapus
                        </button>
                        <a href="/pdf/{{$data->File_Surat}}" download class="btn btn-sm btn-warning">Unduh</a>

                        <a href="/arsip/detail/{{ $data->ID_arsip }}" class="btn btn-sm btn-primary">Lihat >></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
@foreach ($arsip as $data)
    <div class="modal modal-danger fade" id="delete{{ $data->ID_arsip }}">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">{{ $data->Judul }}</h4>
              </div>
              <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Menghapus Data Ini?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
                <a href="/arsip/delete/{{ $data->ID_arsip }}" class="btn btn-outline">Delete</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
 @endforeach
@endsection