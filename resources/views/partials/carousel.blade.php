@if (count($carousels)>0)
<div id="carouselExampleIndicators" class="carousel slide mt-4" data-ride="carousel">
    <br class="mt-2">
    <div class="carousel-inner mt-2">
        @foreach($carousels as $carousel)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img src="{{ $carousel->slider }}" class="d-block w-100">
        </div>
        @endforeach
    </div>
    @if($carousels->count() > 1)
    <ol class="carousel-indicators">
        @foreach($carousels as $carousel)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}"
            class="{{ $loop->first ? 'active' : '' }}"></li>
        @endforeach
    </ol>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    @endif
</div>
@endif
