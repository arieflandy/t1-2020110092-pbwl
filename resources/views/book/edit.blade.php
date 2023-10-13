<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Buku</title>
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
        <h1>Edit Book</h1>
    </div>
    <div class="col-12">
        <hr>
    </div>
    <div class="col-12">
        <a href="{{ route('book.index') }}"  class="btn btn-primary">Kembali</a>
    </div>
    <div class="col-12">
        <hr>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row my-5">
        <div class="col-12 px-5">
            <form action="{{ route('book.update',$book) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="number" class="form-control" id="isbn" name="isbn" value="{{ old('isbn', $book->isbn) }}">
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $book->judul) }}">
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="halaman" class="form-label">Halaman</label>
                    <input type="number" class="form-control" id="halaman" name="halaman" value="{{ old('halaman', $book->halaman) }}">
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="katagori" class="form-label">Katagori</label>
                    <select type="text" class="form-select" id="katagori" name="katagori">
                        <option value="">{{ old('katagori',$book->katagori) }}</option>
                        <option value="uncategorized">Uncategorized</option>
                        <option value="sci-fi">Science Fiction</option>
                        <option value="novel">Novel</option>
                        <option value="history">History</option>
                        <option value="biography">Biography</option>
                        <option value="romance">Romance</option>
                        <option value="education">Education</option>
                        <option value="culinary">Culinary</option>
                        <option value="comic">Comic</option>
                      </select>
                </div>
                <div class="mb-3 col-md-12 col-sm-12">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ old('penerbit', $book->penerbit) }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
