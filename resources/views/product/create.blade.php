<x-master>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card p-2">
                    <form action="{{ route('product.store') }}" method='post' enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        @include('product._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master>
