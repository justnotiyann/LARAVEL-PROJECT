<x-master>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/mading/create" class="btn btn-primary">
                    Tambah Data Mading
                </a>


                <table class="table">
                    <thead>
                        <tr>
                            {{-- Ubah data disini sesuai dengan data dari table database --}}
                            <th scope="col">ID Mading</th>
                            <th scope="col">Judul Mading</th>
                            <th scope="col">Deskripsi Mading</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($result as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->deskripsi}}</td>
                        </tr>
                        @endforeach


                    </tbody>



                </table>

            </div>
        </div>
    </div>
</x-master>
