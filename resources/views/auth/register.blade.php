<x-master>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Login Form
                    </div>
                    <div class="card-body">
                        <form action="/login" method="post" autocomplete="off">
                            @csrf
                            @method('POST')
                            @include('auth._form')
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-master>
