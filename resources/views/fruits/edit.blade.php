<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buah</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="mt-5 mb-3">Edit Data Buah</h1>
        <form action="{{ route('fruits.update', $buah->id) }}" method="POST">
            @csrf 
            @method('PUT')
            <!-- PUT = untuk menaruh data lama -->
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Buah</label>
                <input name="nama_buah" value="{{ $buah->nama_buah }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Harga Buah</label>
                <input name="harga" value="{{ $buah->harga }}"  type="number" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-warning">Edit Buah</button>
        </form>
    </div>
</body>

</html>