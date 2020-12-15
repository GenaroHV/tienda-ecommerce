<br>
<br>
<br>
<div class="container my-4">
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('message') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <h2 class="text-center mb-4 mt-3">Resumen</h2>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <table class="table text-center table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($ofertas as $oferta)
                                {{-- @if($oferta->pivot) --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $oferta->titulo }}</td>
                                        <td>$ {{ number_format($oferta->precio, 2) }}</td>
                                        <td>
                                            <button class="btn btn-danger" wire:click="deleteOferta('{{ $oferta->pivot->id }}')"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                {{-- @endif --}}
                            @endforeach

                            {{-- <tr>
                                <th></th>
                                <td class="font-weight-bold">Total</td>
                                <td class="font-weight-bold">{{ $ofertas->sum('precio') }}</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card border border-primary">
                <div class="card-body">
                    <h3 class="text-center">Método de pago</h3>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                                <div class="shadow-md p-3 bg-white rounded">
                                    {{-- <h4>Paypal</h4> --}}
                                    <p>{{ $ofertas->count() }} ofertas en tu carrito</p>
                                    <p>Total a pagar $ {{ number_format($ofertas->sum('precio'),2) }}</p>
                                    <div>
                                        @include('svg.paypal')
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
