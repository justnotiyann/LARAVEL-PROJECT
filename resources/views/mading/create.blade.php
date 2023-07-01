<x-master>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Form Tambah Data Mading
                    </div>
                    <div class="card-body">
                        <form action="/mading/create" method="post">
                            @csrf
                            @method('post')
                            <form>
                                <div class="mb-3">
                                    <label for="judul" class="form-label">Judul Mading</label>
                                    <input type="text" class="form-control" id="judul" name="judul">
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi Mading</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi Mading</label>
                                    <textarea class="form-control" id="deskripsi" name="gambar"></textarea>
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="gambar" class="form-label">Masukkan gambar mading</label>
                                    <input class="form-control" type="file" id="gambar" name="gambar">
                                </div> --}}
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
