<x-dashboard>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="fw-bold text-center">Tambah Mading Anda</h4>
                    </div>
                    <div class="card-body">
                        <form action="/dashboard/create/mading" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul Mading</label>
                                <input type="text" class="form-control" id="judul" placeholder="Judul Mading...">
                            </div>
                            <div class="mb-3">
                                <input id="x" type="hidden" name="content">
                                <trix-editor input="x"></trix-editor>
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">Author</label>
                                <input type="text" class="form-control" name="author" id="author"
                                    value="{{ auth()->user()->username }}" aria-label="Disabled input example" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Masukkan Gambar Mading</label>
                                <input class="form-control" type="file" id="gambar">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-secondary w-100">
                                    Tambah Mading
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-dashboard>
