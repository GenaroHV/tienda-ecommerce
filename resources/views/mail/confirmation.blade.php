<h1>Hola {{ $order->name }}</h1>

<h2>Confirmación de compra</h2>

<table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>

    <tbody>
        @foreach($order->shoppingCart->ofertas as $oferta)
            <tr>
                <td>{{ $oferta->id }}</td>
                <td>{{ $oferta->titulo }}</td>
            </tr>
        @endforeach

        <tr>
            <th></th>
            <td class="font-weight-bold">Total</td>
            <td class="font-weight-bold">{{ $order->total }}</td>
        </tr>
    </tbody>
</table>

@isset($url)
    <h2>Para completar tu order, completa el siguiente formulario</h2>
    <a href="{{ $url }}">Formulario</a>
@endisset
