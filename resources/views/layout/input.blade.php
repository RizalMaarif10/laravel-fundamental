<form action="{{ route('tampilan.admin') }}" method="POST" >
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
    <div class="container ">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="bg-info p-3 rounded-3">
            <h4 class="text-center mb-4">Tambah Data Produk</h4>
            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" class="form-control form-control-sm mb-2" id="nama" name="nama" @error('nama') is-invalid @enderror
                 placeholder="Masukan nama produk" >
                 
            </div>

            <div class="form-group">
              <label for="berat">Gambar</label>
              <input type="text" class="form-control form-control-sm mb-2" id="gambar" name="gambar"
                placeholder="Masukan berat produk"/>
              
            </div>
            <div class="form-group">
              <label for="berat">Berat</label>
              <input type="number" class="form-control form-control-sm mb-2" id="berat" name="berat"
                placeholder="Masukan berat produk"/>
              
            </div>
            <div class="form-group">
              <label for="harga">Harga</label>
              <input type="number"  class="form-control form-control-sm mb-2" id="harga" name="harga"
                placeholder="Masukan harga produk" />
              
            </div>
            <div class="form-group">
              <label for="stok">Stok</label>
              <input type="number" class="form-control form-control-sm mb-2" id="stok" name="stok"
                placeholder="Masukan stok produk" />
              
            </div>
            <label for="kondisi">Kondisi</label>
            <select class="form-select mb-2" name="kondisi" id="kondisi" aria-label="Default select example" >
              <option  selected>Pilih Kondisi Barang</option>
              <option value="Baru">Baru</option>
              <option value="Bekas">Bekas</option>
            </select>
            
            <div class="mb-3">
              <label for="deskripisi" class="form-label" >Deskripsi</label>
              <textarea class="form-control" id="deskripisi" name="deskripsi"
                placeholder="Masukan deskripsi produk yang akan dijual"  rows="3"></textarea>
              
            </div>
            <div class="text-center">
              <div class="d-grid gap-2 col-8 mx-auto">
                <button class="btn btn-primary">Pesan Sekarang</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
