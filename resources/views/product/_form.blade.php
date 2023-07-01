<ul class="list-group list-group-flush">
    <li class="list-group-item">
        <div class="mb-3">
            <label for="nama_product" class="form-label">Nama Product</label>
            <input type="text" class="form-control @error('nama_product') is-invalid @enderror" id="nama_product"
                name="nama_product" value="{{ old('nama_product', $result->nama_product) }}" placeholder="Nama Product">
            @error('nama_product')
            <small class="text-danger mt-2">{{ $message }}</small>
            @enderror
        </div>
    </li>
    <li class="list-group-item">
        <div class="mb-3">
            <label for="jenis_product" class="form-label">Jenis Product</label>
            <select class="form-select @error('jenis_product') is-invalid  @enderror" name="jenis_product">

                <option value="aksesoris" {{ old('jenis_product', $result->jenis_product) ==
                    'aksesoris' ? 'selected' : '' }}>
                    Aksesoris</option>
                <option value="skin_care" {{ old('jenis_product', $result->jenis_product) ==
                    'skin_care' ? 'selected' : '' }}>
                    Skin Care</option>
                <option value="makanan" {{ old('jenis_product', $result->jenis_product) ==
                    'makanan' ? 'selected' : '' }}>
                    Makanan</option>

            </select>
            @error('jenis_product')
            <small class="text-danger mt-2">{{ $message }}</small>
            @enderror
        </div>
    </li>
    <li class="list-group-item">
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity Product</label>
            <input type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity"
                name="quantity" value="{{ old('quantity', $result->quantity) }}" placeholder="Quantity Product">
            @error('quantity')
            <small class="text-danger mt-2">{{ $message }}</small>
            @enderror
        </div>
    </li>
    <li class="list-group-item">
        <div class="mb-3">
            <label for="image" class="mb-2">Masukkan Gambar Product <small>opsional</small></label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
            @error('image')
            <small class="text-danger mt-2">{{ $message }}</small>
            @enderror
        </div>
    </li>
    <li class="list-group-item">
        <div class="input-group mb-3">
            <span class="input-group-text">Rp</span>
            <input type="text" class="form-control @error('harga') is-invalid @enderror"
                placeholder="Contoh nominal 40000" name="harga" value="{{ old('harga',$result->harga) }}">
            <span class="input-group-text">,00</span>
            @error('harga')
            <small class="text-danger mt-2">{{ $message }}</small>
            @enderror
        </div>

    </li>

    <button type="submit" class="btn btn-primary w-100">
        {{ $button }}
    </button>
</ul>
