<div class="container my-4" id="servicios">
    <div class="d-none d-sm-block">
        <br><br><br>
    </div>
    <div class="row">
        <div class="col-12">
            <h3 class="h2 font-weight-bold text-danger mt-3">NUESTROS SERVICIOS</h3>
        </div>
    </div>
    <div class="row">
        @foreach ($servicios as $servicio)
        <div class="col-6 col-md-3 col-lg-3 px-0">
            <div class="card" style="width: 13rem;">
                <img src="{{ $servicio->portada }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $servicio->titulo }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
