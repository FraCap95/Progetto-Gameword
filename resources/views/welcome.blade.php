<x-layout>

    <header class="container-fluid header">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="w-100 h-100 backdrop">
            <h1 class="text-center headerH1 display-1 headerH1">GameWorld</h1>
        </div>
    </header>
    <section class="wrapper">
        <div class="container mt-5">
            <div class="row justify-content-center">
                @foreach ($consoles as $console)
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                        <div class="card text-dark card-has-bg click-col"
                            style="background-image:url('https://source.unsplash.com/600x900/?tech,street');">
                            <img class="card-img d-none" src="https://source.unsplash.com/600x900/?tech,street"
                                alt="Creative Manner Design Lorem Ipsum Sit Amet Consectetur dipisi?">
                            <div class="card-img-overlay">
                                <div class="card-body-welcome container">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="card-title-welcome ">{{ $console->name }}</h4>
                                        </div>
                                        <div class="card-footer">
                                            <div class="media">
                                                <div class="media-body">
                                                    <div class="col-5">
                                                        <a href="{{ route('console_filter', compact('console')) }}"
                                                            class="text-dark text-decoration-none">Vai al
                                                            dettaglio</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div style="height:400px; width:100%; clear:both;"></div>
</x-layout>
