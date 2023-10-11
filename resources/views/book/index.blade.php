<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <style>
        * {
          box-sizing: border-box;
          font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
          text-align: center;
          text-transform: uppercase;
          font-family: "Lucida Console", "Courier New", monospace
        }

        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>


<div class="container">

    <div class="col-12">
        <h1>Daftar Buku</h1>
    </div>
    <div class="col-12">
        <hr>
    </div>
    <div class="col-12">
        <a href="{{ route('book.create') }}" class="btn btn-primary">Tambah</a>
    </div>
    <div class="col-12">
        <hr>
    </div>

    <div class="col-12">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    </div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr class="table-success">
                <th scope="col">No</th>
                <th scope="col">ISBN</th>
                <th scope="col">Judul</th>
                <th scope="col">Halaman</th>
                <th scope="col">Katagori</th>
                <th scope="col">Penerbit</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($book as $key => $item)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item->isbn }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->halaman }}</td>
                    <td>{{ $item->katagori }}</td>
                    <td>{{ $item->penerbit }}</td>
                    <td>
                        <a href="{{ route('book.show', $item->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('book.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('book.destroy', $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $book->links() !!}
    </div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
