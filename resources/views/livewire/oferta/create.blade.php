<div>
    <form wire:submit.prevent="save">
        <div class="form-group">
            <input type="text" class="form-control" wire:model="titulo" placeholder="Ingresar titulo">
            @error('titulo') <p class="error mb-2">{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <input type="text" class="form-control" wire:model="precio" placeholder="Ingresar precio">
            @error('precio') <p class="error mb-2">{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <textarea class="form-control" wire:model="descripcion" rows="4" placeholder="Ingresar una descripción"></textarea>
            @error('descripcion') <p class="error mb-2">{{ $message }}</p> @enderror
        </div>
        <div class="form-group">
            <div class="custom-file mb-2 mr-sm-2">
                <input type="file" class="custom-file-input" wire:model="portada" lang="es">
                <label class="custom-file-label" for="portada" data-browse="Elegir">Seleccionar portada</label>
                {{-- @if($portada)
                    @if($portada->temporaryUrl())
                        <img src="{{ $url }}" alt="img-fluid mb-2">
                    @endif
                @endif --}}
                @error('portada') <p class="error mb-2">{{ $message }}</p> @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-danger mb-2">Registrar Oferta</button>
    </form>
</div>
