<table class="table">
    <thead>
        <tr class="text-danger">
            <th scope="col">#</th>
            <th scope="col">Portada</th>
            <th scope="col">Titulo</th>
            <th scope="col">Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach($servicios as $servicio)
        <tr class="text-light">
            <th scope="row">{{ $loop->iteration }}</th>
            <td>
                <img src="{{ $servicio->portada }}" height="50" width="50" class="img-fluid">
            </td>
            <td>{{ $servicio->titulo }}</td>
            <td>
                <form action="{{ route('servicio.destroy', $servicio->id) }}" method="POST" style="display: inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger rounded-circle" id="deleteButton"
                        style="padding-top: 5px;padding-bottom: 5px;padding-right: 10px;padding-left: 10px;">
                        <i class="fas fa-trash-alt fa-sm"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
