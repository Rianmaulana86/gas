<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
<h1>Semua Data Category</h1>
    <a href="category/create" class="btn btn-dark mt-3">Tambah Data Category</a>
    <div class="table-responsive mt-4">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nama Category</th>
              <th class="text-center" scope="col">Action</th>

            </tr>
          </thead>
          @foreach($category as $p)
          <tbody>
            <tr>
              <td>{{ $p->name }}</td>
              <td class="text-center">
                <a class="btn btn-success" href="/category/show/{{ $p->name }}">Lihat</a>
                <a class="btn btn-primary" href="">Edit</a>
                <a class="btn btn-danger" href="">Hapus</a>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
        {{-- @endforeach --}}
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>