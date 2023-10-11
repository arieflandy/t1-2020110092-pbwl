<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Buku</title>
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
            <h1>Detail Buku</h1>
        </div>
        <div class="col-12">
            <hr>
        </div>
        <div class="col-12">
            <a href="{{ route('book.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="col-12">
            <hr>
        </div>
        <table class="table">
            <tr>
                <th>ISBN</th>
                <td>{{ $book->isbn }}</td>
            </tr>
            <tr>
                <th>Judul</th>
                <td>{{ $book->judul }}</td>
            </tr>
            <tr>
                <th>Halaman</th>
                <td>{{ $book->halaman }}</td>
            </tr>
            <tr>
                <th>Katagori</th>
                <td>{{ $book->katagori }}</td>
            </tr>
            <tr>
                <th>Penerbit</th>
                <td>{{ $book->penerbit }}</td>
            </tr>
        </table>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
