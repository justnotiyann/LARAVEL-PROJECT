<x-dashboard>
    <div class="container" style="margin-top:5em;">
        <div class="container">
            <button class="btn btn-primary">
                <a href="/dashboard/create">
                    Tambah Data
                </a>
            </button>
            <div class="row mt-3">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead class="table-warning">
                            <tr>
                                <th scope="col">Judul</th>
                                <th scope="col">Excerpt</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Author</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $result)
                            <tr>
                                <td>{{ $result->title}}</td>
                                <td>{{ $result->excerpt}}</td>
                                <td>{{ $result->category}}</td>
                                <td>{{ $result->author }}</td>
                                <td class="d-flex justify-content-center align-items-center gap-2">
                                    <button class="btn btn-success">
                                        <a href="/dashboard/detail/{{ $result->title }}" class="d-flex gap-2">
                                            <i class="bi bi-eye-fill"></i>
                                            Details
                                        </a>
                                    </button>

                                    <button class="btn btn-warning">
                                        <a href="/dashboard/edit/{{ $result->title }}" class="d-flex gap-2">
                                            <i class="bi bi-pencil-square"></i>
                                            Edit
                                        </a>
                                    </button>

                                    <form action="/dashboard/delete/{{ $result->title }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">
                                            <a href="http://" class="d-flex gap-2">
                                                <i class="bi bi-trash3-fill"></i>
                                                Delete
                                            </a>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</x-dashboard>
