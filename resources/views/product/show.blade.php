<x-master>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card p-2">
                    <form action="{{ route('product.update', $result->id) }}" method='post'>
                        @csrf
                        @method('PUT')
                        @include('product._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master>
