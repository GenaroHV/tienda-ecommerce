<div class="container my-4" id="galeria">
    <div class="d-none d-sm-block">
        <br><br><br>
    </div>
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <h3 class="h2 font-weight-bold text-danger">GALERIA</h3>
        </div>
        <div class="btn-group" role="group" aria-label="Todos">
            <button type="button" class="btn btn-danger filter-button active d-none d-sm-block" data-filter="todos">Todos</button>
            <button type="button" class="btn btn-danger filter-button" data-filter="mechas">Mechas</button>
            <button type="button" class="btn btn-danger filter-button" data-filter="peinados">Peinados</button>
            <button type="button" class="btn btn-danger filter-button" data-filter="tintes">Tintes</button>
            <button type="button" class="btn btn-danger filter-button" data-filter="laceados">Laceados</button>
            <button type="button" class="btn btn-danger filter-button" data-filter="maquillaje">Maquillaje</button>
        </div>
    </div>
    <div class="w-100"></div>
    <div class="row my-3">
        <div class="col-6 col-md-3 col-lg-3 px-0 filter mechas tintes">
            <img src="http://www.prettywarmi.com/images/portfolio/1_thumb.jpg" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 col-lg-3 px-0 filter mechas tintes">
            <img src="http://www.prettywarmi.com/images/portfolio/2_thumb.jpg" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 col-lg-3 px-0 filter peinados maquillaje">
            <img src="http://www.prettywarmi.com/images/portfolio/3_thumb.jpg" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 col-lg-3 px-0 filter maquillaje">
            <img src="http://www.prettywarmi.com/images/portfolio/4_thumb.jpg" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 col-lg-3 px-0 filter mechas peinados tintes maquillaje">
            <img src="http://www.prettywarmi.com/images/portfolio/5_thumb.jpg" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 col-lg-3 px-0 filter peinados">
            <img src="http://www.prettywarmi.com/images/portfolio/6_thumb.jpg" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 col-lg-3 px-0 filter laceados">
            <img src="http://www.prettywarmi.com/images/portfolio/7_thumb.jpg" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 col-lg-3 px-0 filter mechas peinados tintes">
            <img src="http://www.prettywarmi.com/images/portfolio/8_thumb.jpg" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 col-lg-3 px-0 filter laceados">
            <img src="http://www.prettywarmi.com/images/portfolio/9_thumb.jpg" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 col-lg-3 px-0 filter maquillaje">
            <img src="http://www.prettywarmi.com/images/portfolio/10_thumb.jpg" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 col-lg-3 px-0 filter laceados">
            <img src="http://www.prettywarmi.com/images/portfolio/11_thumb.jpg" class="img-fluid">
        </div>
        <div class="col-6 col-md-3 col-lg-3 px-0 filter laceados">
            <img src="http://www.prettywarmi.com/images/portfolio/12_thumb.jpg" class="img-fluid">
        </div>
    </div>
</div>
@push('js')
<script>
    $(document).ready(function(){
		    $(".filter-button").click(function(){
		        var value = $(this).attr('data-filter');
		        if(value == "todos")
		        {
		            $('.filter').show('1000');
		        }
		        else
		        {
		            $(".filter").not('.'+value).hide('3000');
		            $('.filter').filter('.'+value).show('3000');
		        }
		    });
		});
</script>
@endpush
