@extends('assets.assets')

@include('assets.nav.nav')
@section('dashboard')


<div class="container mt-3">
    <h1>Semua Data Product</h1>
    <a href="dashboard/create" class="btn btn-dark mt-3">Tambah Data Product</a>
    <div class="table-responsive mt-4">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nama Product</th>
              <th scope="col">Kategori Product</th>
              <th class="text-center" scope="col">Action</th>

            </tr>
          </thead>
          {{-- @foreach($product as $p) --}}
          <tbody>
            <tr>
              {{-- <td>{{ $p->name }}</td> --}}
              {{-- <td>{{ $p->categories }}</td> --}}
              <td>try</td>
              <td class="text-center">
                <a class="btn btn-success" href="">Lihat</a>
                <a class="btn btn-primary" href="">Edit</a>
                <a class="btn btn-danger" href="">Hapus</a>
              </td>
            </tr>
          </tbody>
        </table>
        {{-- @endforeach --}}
</div>

@endsection