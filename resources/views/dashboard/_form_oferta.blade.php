<form action="{{ route('oferta.store') }}" method="POST" enctype="multipart/form-data">
    @csrf @method('POST')
    <div class="form-group">
        <input type="text" class="form-control" name="titulo" placeholder="Ingresar titulo">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="precio" placeholder="Ingresar precio">
    </div>
    <div class="form-group">
        <div class="custom-file mb-2 mr-sm-2">
            <input type="file" class="custom-file-input" name="portada" lang="es">
            <label class="custom-file-label" for="portada" data-browse="Elegir">Seleccionar portada</label>
        </div>
    </div>
    <button type="submit" class="btn btn-danger mb-2">Registrar Oferta</button>
</form>
