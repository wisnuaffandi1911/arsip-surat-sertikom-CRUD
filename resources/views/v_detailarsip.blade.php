@extends('layout.v_template')
@section('title', 'View')

@section('content')

<div class="box-body">
    <table class="table table-bordered table-striped table-hover" id="table1">
<tr>
    <iframe src="/pdf/{{$arsip->File_Surat}}" align="top" height="620" 
    width="100%" frameborder="0" scrolling="auto"></iframe>
</tr>
                <div class="form-group">
                    <a href="/arsip" class="btn btn-success btn-sm">Kembali</a>
                </div>
</div>

@endsection