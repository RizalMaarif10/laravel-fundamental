<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="album py-5 bg-body-tertiary">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-md-12">
                    <div class="bg-info p-3 rounded-3">
                        <div class="position-relative mb-5">
                        <h4 class="mb-4 position-absolute top-0 start-0">List Product</h4>
                        <div class="position-absolute top-0 end-0">
                        <a href="input" type="button" class="btn btn-dark ">Tambah Produk</a>
                        <a href="/index" type="button" class="btn btn-secondary" >Kembali ke Produk</a>
                    </div>
                    </div>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Berat</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Kondisi</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr class="table-secondary">
                                    <th scope="row">{{ $product->id }}</th>
                                    <td scope="col">{{ $product->Nama }}</td>
                                    <td scope="col">{{ $product->Stok }}</td>
                                    <td scope="col">{{ $product->Berat }}</td>
                                    <td scope="col">Rp. {{ $product->Harga }}</td>
                                    <td scope="col">
                                        @if($product->Kondisi == 'Baru')
                                            <p class="bg-primary text-light rounded-4 d-inline-block px-3 py-1">{{ $product->Kondisi }}</p>
                                        @elseif($product->Kondisi == 'Bekas')
                                            <p class="bg-dark text-light rounded-4 d-inline-block px-3 py-1">{{ $product->Kondisi }}</p>
                                        @else
                                            <!-- Tambahkan logika jika kondisi tidak cocok dengan 'baru' atau 'bekas' -->
                                        @endif
                                    </td>
                                    <td scope="col">
                                        <a href="{{ route('tampilan.update', ['id' => $product->id]) }}" type="button" class="btn btn-warning">Update</a>
                                        <a href="{{ route('tampilan.admin.delete', ['id' => $product->id]) }}" type="button" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>