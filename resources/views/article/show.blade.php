<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h1 class="display-2 text-center">Ecco il gioco richiesto</h1>
            </div>
            <div class="col-12 col-md-6 card-show">
                <div class="text-center mt-3">
                    <h2 class="display-6 ">{{ $game->title }}</h2>
                    <h3>{{ $game->category }}</h3>
                    <p>{{ $game->description }}</p>
                    <p>Aggiunto da {{ $game->user->name }}</p>
                    @if ($game->price == '0')
                        <p>Free to Play!</p>
                    @else
                        <p>{{ $game->price }} €</p>
                    @endif
                    <div class="">
                        <p>Questo gioco è disponibile su:</p>
                        @foreach ($game->consoles as $console)
                            <ul>{{ $console->name }}</ul>
                        @endforeach
                    </div>

                </div>
                @if (Auth::user())
                    <div class="row justify-content-evenly ms-3 mb-3">
                        <div class="col-4">
                            <a href="{{ route('article_edit', compact('game')) }}"
                                class="button-editDelete d-flex justify-content-center text-decoration-none">
                                <span class="button-text">Modifica articolo</span>
                            </a>
                        </div>
                        <div class="col-4">
                            <form method="POST" action="{{ route('article_destroy', compact('game')) }}">
                                @method('delete')
                                @csrf
                                <button type="submit"
                                    class="button-editDelete d-flex justify-content-center form-control">
                                    <span class="button-text">Elimina Articolo</span>
                                </button>
                            </form>
                        </div>
                        <div class="col-4">
                            <button class="button">
                                <span class="button-text">
                                    <span> Condividi </span>
                                    <i class="fa-solid fa-share-nodes"></i>
                                </span>
                                <span class="button-links">
                                    <a>
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a>
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a>
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                </span>
                            </button>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <img class="img-show" src="{{ Storage::url($game->img) }}">
            </div>
        </div>
    </div>
    <div style="height:400px; width:100%; clear:both;"></div>
</x-layout>
