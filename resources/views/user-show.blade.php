<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-1">Ciao {{Auth::user()->name}}</h1>
                <h5 class="text-center display-5">Questi sono i tuoi annunci:</h5>
            </div>
            @foreach (Auth::user()->games as $game)
            <div class="col-12 col-md-3">
                <div class="card">
                    <div class="view overlay">
                        <img class="card-img-top custom-card" src="{{Storage::url($game->img)}}" height="300px">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{$game->title}}</h4>
                        <p class="card-text">{{$game->description}}</p>
                            <a href="{{route('article_show', compact('game'))}}" class="btn btn-outline-danger">Info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div style="height:400px; width:100%; clear:both;"></div>
</x-layout>