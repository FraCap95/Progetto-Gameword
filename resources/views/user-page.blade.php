<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <a href="/" class="text-decoration-none">
                    <i class="bi bi-house icon-user fs-5"></i>
                </a>
                <i class="bi bi-chevron-right icon-user ms-2">Il mio profilo</i>
            </div>
            <div class="col-12 mb-5">
                <h6 class="display-6">Ciao
                    <h3 class="display-1">{{ Auth::user()->name }},</h3>
                </h6>
                <h4 class="mt-2 display-6">Qui puoi trovare tutte le tue informazioni</h4>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <div class="col-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/ID Card-rafiki.svg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <p class="card-text text-center fw-bolds">I miei dati</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/Shopping bag-amico.svg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <p class="card-text text-center fw-bolds">I miei ordini</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/Online wishes list-pana.svg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <p class="card-text text-center fw-bolds">I miei preferiti</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="images/Online ads-bro.svg" class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <a class="text-decoration-none" href="{{ route('user-show') }}">
                                <p class="card-text text-center fw-bolds text-black">I miei annunci</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div style="height:400px; width:100%; clear:both;"></div>
</x-layout>
