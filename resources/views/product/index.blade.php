<x-master>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert_delete_data">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr class="">
                            <th scope="col">ID Product</th>
                            <th scope="col">Nama Product</th>
                            <th scope="col">Jenis Product</th>
                            <th scope="col">Harga Product</th>
                            <th scope="col">Gambar Product</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At </th>
                            <th scope="col ">
                                <a href="{{ route('product.create') }}" class="btn btn-primary w-100">
                                    Tambah Product
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($result as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_product}}</td>
                            <td>{{ $item->jenis_product}}</td>
                            <td>Rp{{ number_format($item->harga, 2, ',', '.') }}</td>
                            @if($item->image)
                            <td>
                                <img src="{{ asset('storage/'.$item->image) }}" alt="Gambar Product" class="w-5">
                            </td>
                            @else
                            <td>
                                <img src="https://placeholder.com/50x50" alt="Gambar Product" class="w-5">
                            </td>
                            @endif

                            <td>{{ $item->created_at}}</td>
                            <td>{{ $item->updated_at}}</td>
                            <td class='d-flex justify-items-center align-items-center gap-3'>
                                <button class="btn btn-warning">
                                    <a href="{{ route('product.show',$item->id) }}">
                                        Edit Data
                                    </a>
                                </button>
                                <form action="{{ route('product.destroy',$item->id) }}" style="display: inline;"
                                    method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Delete Data</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        {{ $result->links() }}

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-master>
