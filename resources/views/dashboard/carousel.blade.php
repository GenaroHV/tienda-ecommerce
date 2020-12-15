<div class="row">
    <div class="col-12">
        <form  method="post" action="{{ route('carousel.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="dropzone"></div>
                <button onclick="location.reload()" type="submit" class="btn btn-block btn-danger mt-4"
                id="submit">Guardar</button>
        </form>
    </div>
</div>
<div class="row justify-content-center align-self-center">
    @foreach($carousels as $carousel)
    <div class="col-md-2 m-3">
        <form method="POST" action="{{ route('carousel.destroy', $carousel) }}">
            @csrf @method('DELETE')
            <button class="btn btn-danger btn-sm" style="position: absolute"><i class="fas fa-times"></i></button>
            <img src="{{ url($carousel->slider) }}" alt="" class="img-fluid rounded">
        </form>
    </div>
    @endforeach
</div>
@push('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
<style>
    .dropzone {
    background: white;
    border-radius: 5px;
    border: 2px dashed rgb(0, 135, 247);
    border-image: none;
    max-width: 100%;
    height: 350px;
    margin-left: auto;
    margin-right: auto;
}
</style>
@endpush
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
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
