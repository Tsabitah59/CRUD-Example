<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Tambah Buah</h1>

        <form action="{{ route('fruits.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Nama Buah</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Harga Buah</label>
                <input type="text" name="harga" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-warning">Simpan Data</button>
        </form>
    </div>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>