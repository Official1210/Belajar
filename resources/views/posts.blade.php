@extends('layouts.template')
@section('content')
<div class="container-fluid py-4">
  <div class="alert alert-light" role="alert">
    <a href="/post" class="btn btn-primary">Tambah Data</a>
    <div class="table-responsive">
    <table class="table table hover table-bordered table-stripet">
      <tr>
        <th>NO</th>
        <th>NAMA LENGKAP</th>
        <th>ALAMAT</th>
        <th>TELEPON</th>
        <th colspan="3">AKSI</th>
      </tr>
      @foreach ($posts as $post)
        <tr>
          <td width="20px">{{ $post["id"] }}</td>
          <td>{{ $post["nama"] }}</td>
          <td>{{ $post["alamat"] }}</td>
          <td>{{ $post["telepon"] }}</td>
          <td width="10px"><div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div></td>
          <td width="10px"><div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div></td>
          <td width="10px"><div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div></td>
        </tr>
      @endforeach
    </table>
  </div>


  </div>
      

</div>  
@endsection
