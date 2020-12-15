@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-danger text-white">PANEL DE ADMINISTRACIÓN</div>
                <div class="card-body bg-dark text-white">
                    @include('dashboard.menu')
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">CAROUSEL</div>
                <div class="card-body">
                    @include('dashboard.carousel')
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.17.6/dist/sweetalert2.all.min.js"></script>
<script>
    $('button#deleteButton').on('click', function (e) {
        e.preventDefault();
        // iniciar
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#11cdef',
            cancelButtonColor: '#f5365c',
            confirmButtonText: 'Si, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.value) {
                Swal.fire(
                    'Eliminado',
                    'Su archivo ha sido eliminado.',
                    'success'
                )
                $(this).closest("form").submit();
            }
        })
    });
</script>
@if(session('success'))
<script>
    Swal.fire(
        'Muy bien',
        '{{ session()->get('success') }}',
        'success'
    )
</script>
@endif
@endpush
