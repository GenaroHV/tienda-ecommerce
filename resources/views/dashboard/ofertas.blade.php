<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
    <div class="row">
        <div class="col-md-4">
            <h4>Formulario</h4>
            {{-- @include('dashboard._form_oferta') --}}
            @livewire('oferta.create')
        </div>
        <div class="col-md-8">
            <h4>Listado</h4>
            @include('dashboard._table_oferta')
        </div>
    </div>
</div>
