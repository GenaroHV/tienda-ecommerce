<div class="row">
    <div class="col-md-12">
        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>
    @foreach($ofertas as $oferta)
    <div class="col-6 col-md-3 col-lg-3 px-0">
        <div class="card" style="width: 13rem;">
            <a href="{{ route('oferta.ver', ['oferta' => $oferta->slug]) }}">
                <img src="{{ $oferta->portada }}" class="card-img-top">
            </a>
            <div class="card-body">
                <h5 class="card-title">{{ $oferta->titulo }}</h5>
                <p>Precio $ <span>{{ number_format($oferta->precio,2) }}</span></p>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-outline-danger" wire:click="addToCart('{{ $oferta->slug }}')">Add to
                        cart</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
