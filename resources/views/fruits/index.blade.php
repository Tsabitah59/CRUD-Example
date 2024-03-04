<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buah</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">List Buah-Buahan</h1>

        <!-- Mengubah $buah menjadi $row -->
        @foreach($buah as $row)
        <div class="card text-center mb-3">
            <!-- Div Pertama -->
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span>{{ $row->nama_buah }}</span>
                    <!-- 
                            tanda panah berarti masuk 
    
                            jika 2 kata atau lebih, maka harus ditutup kurung
                            kurawal dan petik. Jika hanya 1 maka tidak perlu
                        -->

                    <!-- Div Kedua -->
                    <div class="">
                        <a href="{{ route('fruits.show', $row->id) }}" class="btn btn-success">
                            <i class="fa-solid fa-circle-info"></i>
                        </a>
                        <a href="{{ route('fruits.edit', $row->id) }}" class="btn btn-primary">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="delete{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Modal title</h1>
                    </div>
                    <div class="modal-body">
                        <p>Yakin mau hapus data <strong style="color: red;">{{ $row->nama_buah }}</strong>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Jangan Dihapus</button>
                        <a href="{{ route('fruits.destroy', $row->id) }}" class="btn btn-danger">Ya, Hapus Aja</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <a href="{{ route('fruits.create') }}" class="btn btn-warning">Tambah data</a>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>