<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-2 text-center">Ecco tutti i giochi</h1>
            </div>
            @foreach ($games as $game)
            <div class="col-12 col-md-3 my-5">
                <!-- Card -->
                <div class="card">
                    <!-- Card image -->
                    <div class="view overlay">
                        <img class="card-img-top custom-card img-cards" src="{{Storage::url($game->img)}}" >
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Title -->
                        <h4 class="card-title">{{$game->title}}</h4>
                        <!-- Text -->
                        <p class="card-text">{{$game->description}}</p>
                            <!-- Button -->
                            <a href="{{route('article_show', compact('game'))}}" class="btn btn-outline-danger">Info</a>
                        </div>
                        
                    </div>
                    <!-- Card -->
                </div>
                @endforeach
            </div>
        </div>
        <div style="height:400px; width:100%; clear:both;"></div>
    </x-layout>