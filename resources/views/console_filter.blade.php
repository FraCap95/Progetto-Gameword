<x-layout>
    <div class="container">
        <div class="row">
            <h1 class="text-center display-1">Ecco tutti i giochi disponibili su: {{$console->name}} </h1>
        </div>
        <div class="row">
            @if(count($console->games))
            @foreach($console->games as $game)
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
                                <a href="{{route('article_show', compact('game'))}}" class="btn btn-danger">Scopri di più</a>
                            </div>
                        </div>
                    </div>
            @endforeach            
            @else
                <h2 class="display-5 text-center">Non sono ancora disponibili titoli per questa piattaforma =(</h2>
            @endif
        </div>
    </div>
    <div style="height:400px; width:100%; clear:both;"></div>
</x-layout>