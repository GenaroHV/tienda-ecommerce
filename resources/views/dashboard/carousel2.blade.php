<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h2 class="mb-0">Lista de Carousel</h2>
                        <p class="text-sm mb-0">
                            En esta sección puedes ver, crear y eliminar el slider que creas conveniente.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col my-6 mx-6">
                    <form method="post" action="{{ url('/carousel/store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="dropzone "></div>
                        </div>
                        <button onclick="location.reload()" type="submit" class="btn btn-block btn-default"
                            id="submit">Guardar</button>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center align-self-center">
                @foreach($carousels as $carousel)
                <div class="col-md-2 m-3">
                    <form method="POST" action="{{ route('carousel.destroy', $carousel) }}">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm" style="position: absolute"><i
                                class="fas fa-times"></i></button>
                        <img src="{{ url($carousel->slider) }}" alt="" class="img-fluid rounded">
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@push('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<style>
    .dropzone {
        display: contents !important;
    }

</style>
@endpush
@push('js')
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<script type="text/javascript">
    var myDropzone = new Dropzone('.dropzone', {
        url: '/carousel/store',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dictDefaultMessage: 'Arrastra las fotos aquí',
        maxFilesize: 2,
        acceptedFiles: 'image/*',
        paramName: 'slider',
        init: function () {
            var submitBtn = document.querySelector("#submit");
            myDropzone = this;

            submitBtn.addEventListener("click", function (e) {
                e.preventDefault();
                e.stopPropagation();
                myDropzone.processQueue();
            });
            this.on("addedfile", function (file) {
                console.log("Sliders subido");
            });

            // this.on("complete", function(file) {
            //    myDropzone.removeFile(file);
            // });

            this.on("success",
                myDropzone.processQueue.bind(myDropzone)
            );
        }
    });

    myDropzone.on('error', function (file, res) {
        var msg = res.errors.slider[0];
        $('.dz-error-message:last > span').text(msg)
    });

    Dropzone.autoDiscover = false;

</script>
@endpush
