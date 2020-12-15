<br>
<br>
<br>
<div class="container my-4">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <img src="{{ $oferta->portada }}" class="img-fluid">
                    <p class="mt-4">{{ $oferta->descripcion }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <p>Nuevo - 21 vendidos</p>
                    <h2>{{ $oferta->titulo }}</h2>
                    <h1 class="mt-3">$ {{ number_format($oferta->precio,2) }}</h1>
                    <div class="text-right">
                        <button class="btn btn-outline-danger" wire:click="addToCard('{{ $oferta->slug }}')">Add to card</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
