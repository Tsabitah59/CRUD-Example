<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buah</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Detail Data Buah</h1>

        <div class="card text-center mb-3">
                <!-- Div Pertama -->
                <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <td>Nama Buah</td>
                        <td>:</td>
                        <td>{{ $buah->nama_buah }}</td>
                    </tr>

                    <tr>
                        <td>Harga Buah</td>
                        <td>:</td>
                        <td>{{ $buah->harga }}</td>
                    </tr>
                </table>
                </div>
            </div>
    </div>
</body>
</html>