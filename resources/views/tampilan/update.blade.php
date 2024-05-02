<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    

    <form action="{{ route('tampilan.admin.update', ['id' => $product->id]) }}" method="POST" >
    @csrf
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="bg-info p-3 rounded-3">
                        <h4 class="text-center mb-4">Update Data Produk</h4>
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control form-control-sm mb-2" id="nama" name="nama"
                                placeholder="Masukan nama produk" value="{{ $product->Nama }}">
                        </div>

                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="text" class="form-control form-control-sm mb-2" id="gambar" name="gambar"
                                placeholder="Masukan gambar produk" value="{{ $product->Gambar }}">
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat</label>
                            <input type="number" class="form-control form-control-sm mb-2" id="berat" name="berat"
                                placeholder="Masukan berat produk" value="{{ $product->Berat }}">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control form-control-sm mb-2" id="harga" name="harga"
                                placeholder="Masukan harga produk" value="{{ $product->Harga }}">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control form-control-sm mb-2" id="stok" name="stok"
                                placeholder="Masukan stok produk" value="{{ $product->Stok }}">
                        </div>
                        <label for="kondisi">Kondisi</label>
                        <select class="form-select mb-2" name="kondisi" id="kondisi"
                            aria-label="Default select example">
                            <option selected>Pilih Kondisi Barang</option>
                            <option value="Baru" {{ $product->Kondisi == 'Baru' ? 'selected' : '' }}>Baru</option>
                            <option value="Bekas" {{ $product->Kondisi == 'Bekas' ? 'selected' : '' }}>Bekas</option>
                        </select>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi"
                                placeholder="Masukan deskripsi produk yang akan dijual"
                                rows="3">{{ $product->Deskripsi }}</textarea>
                        </div>
                        <div class="text-center">
                            <div class="d-grid gap-2 col-8 mx-auto">
                                <button class="btn btn-primary">Perbarui Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>