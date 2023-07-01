<x-dashboard>
    <div class="container">
        <div class="container min-vh-100" style="margin-top: 4em;">
            <div class="row">
                <div class="col-12 mt-5">

                    <div class="news">
                        <div class="news-image">
                            <img src="https://placeholder.com/1000x200" alt="" class="w-100">
                        </div>
                        <div class="news-body text-center py-2">
                            <div class="news-body-title">
                                <h3 class="fw-bold">{{ $mading->title }}</h3>
                                <small>{{$mading->excerpt}}</small>


                            </div>

                            <div class="new-body text-wrap my-5">
                                {{ $mading->body }}
                            </div>
                            <div class="news-body-cta mt-2">
                                <button class="btn btn-secondary">
                                    <a href="/mading/details">
                                        Read More...
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard>
