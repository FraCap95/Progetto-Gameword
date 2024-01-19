<x-layout>
    <div class="container">
        <h1 class="text-center">Modifica il tuo Videogioco</h1>
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{route('article_update', compact('game'))}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{$game->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria:</label>
                        <select name="category" class="form-select" aria-label="Default select example">
                            <option selected>-- Seleziona --</option>
                            <option value="Azione">Azione</option>
                            <option value="Strategia">Strategia</option>
                            <option value="Horror">Horror</option>
                            <option value="Sparatutto">Sparatutto</option>
                            <option value="Simulazione">Simulazione</option>
                            <option value="Sport">Sport</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione:</label>
                        <div class="form-floating">
                            <textarea name="description" class="form-control" placeholder="Inserisci la descrizione" id="description"
                                style="height: 100px">{{$game->description}}</textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo:</label>
                        <input name="price" type="text" class="form-control" id="price" value="{{$game->price}}">
                    </div>
                    <div>
                        <p>Immagine attuale:</p>
                        <img src="{{Storage::url($game->img)}}" alt="" width="200">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Vuoi cambiarla? Carica una foto:</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <div class="mb-3">
                        @foreach($consoles as $console)
                            <div class="form-check">
                                <input @if($game->consoles->contains($console)) checked @endif class="form-check-input" name="consoles[]" type="checkbox" value="{{$console->id}}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">{{$console->name}}</label>
                            </div>
                        @endforeach
                    </div>

                    <button type="submit" class="btn btn-danger">Invia</button>
                </form>
            </div>
        </div>
    </div>
    <div style="height:400px; width:100%; clear:both;"></div>
</x-layout>